<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Group;
use App\Models\SubGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = Department::all();
        return view('home.userpage', compact('data'));
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            return view('home.userpage');
        }
    }

    public function view_group($id)
    {
        $department = Department::find($id);
        $groups = $department->groups;
        // $subGroups = $groups->subGroups;
        // $products = $subGroups->products;
        return view('home.group', compact('department', 'groups'));
    }

    public function view_sub_group($id)
    {
        $group = Group::find($id);
        $subgroup = $group->subGroups;
        return view('home.subgroup', compact('group', 'subgroup'));
    }
}
