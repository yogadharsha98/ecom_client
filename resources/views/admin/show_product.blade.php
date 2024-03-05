<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .center {
            margin: auto;
            width: 75%;

            margin-top: 40px;
            border: 3px solid white;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            margin: auto;
            font-size: 40px;
            padding-bottom: 40px;
        }

        .img_size {
            width: 100px;
            height: 100px;
        }

        .th_color {
            background-color: skyblue;
        }

        .th_deg {
            padding: 20px;
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
                <div class="div_center">

                    <h2 class="h2_font">All Products</h2>
                    <table class="center">
                        <tr class="th_color">
                            <th class="th_deg">Product Title</th>
                            <th class="th_deg">Description</th>
                            <th class="th_deg">Quantity</th>
                            <th class="th_deg">Category</th>
                            <th class="th_deg">Price</th>
                            <th class="th_deg">Discount Price</th>
                            <th class="th_deg">Product Image</th>
                            <th class="th_deg">Action</th>
                        </tr>

                        @foreach ($product as $product)

                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                                <img class="img_size" src="/product/{{$product->image}}" />
                            </td>
                            <td><a onclick="return confirm('Are You Sure To Delete This Item?')" class="btn btn-danger"
                                    href="">Delete</a></td>
                        </tr>

                        @endforeach
                    </table>
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