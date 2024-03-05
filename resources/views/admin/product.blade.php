<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h1_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input {
            width: 400px;
            color: black;

        }

        label {
            display: inline-block;
            width: 200px;

        }

        .div_design {
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif

                <div class="div_center">
                    <h1 class="h1_font">Add Product</h1>

                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_design">
                            <label>Product Title</label>
                            <input class="input" type="text" name="title" placeholder="Enter product name" required />
                        </div>
                        <div class="div_design">
                            <label>Product Description</label>
                            <input class="input" type="text" name="description" placeholder="Enter product description"
                                required />
                        </div>
                        <div class="div_design">
                            <label>Product Price</label>
                            <input class="input" type="number" name="price" placeholder="Enter product price"
                                required />
                        </div>
                        <div class="div_design">
                            <label>Discount Price :</label>
                            <input class="input" type="number" name="dis_price" placeholder="Enter discount price" />
                        </div>
                        <div class="div_design">
                            <label>Product Quantity</label>
                            <input class="input" type="number" min="0" name="quantity"
                                placeholder="Enter product quantity" required />
                        </div>

                        <div class="div_design">
                            <label>Product Category</label>
                            <select class="input" name="category" id="" required>
                                <option value="" selected="">Add a category here</option>

                                @foreach ($category as $item)
                                <option value="{{$item->department_title}}">{{$item->department_title}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="div_design">
                            <label>Product image here : </label>
                            <input type="file" name="image" required />
                        </div>

                        <div class="div_design">
                            <input type="submit" value="Add Product" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>