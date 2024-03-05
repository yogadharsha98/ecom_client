<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Department::all();
        return view('admin.department', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;

        $data->category_name = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();
        return  redirect()->back()->with('message', 'Category deleted successfully');
    }

    public function view_product()
    {
        $category = Department::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->dis_price;
        $product->category = $request->category;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('product', $imagename);

        $product->image = $imagename;

        $product->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function show_product()
    {
        $product = Product::all();
        return view('admin.show_product', compact('product'));
    }
}
