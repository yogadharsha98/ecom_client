<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('home.css')
    <style type="text/css">
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            /* Responsive grid with minimum width of 300px */
            gap: 10px;
            /* Gap between cards */
            padding: 20px;
            /* Padding around the grid */
        }

        .card {
            width: 200px;
            height: 200px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            /* Customize card styles as needed */
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->
        <div class="heading_container heading_center">
            @include('home.search')
        </div>

        <section class="product_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        <span>{{$group->group_title}}</span>
                    </h2>
                </div>
                <div class="row">
                    @foreach ($subgroup as $subgroup)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="{{ route('subgroup', ['id' => $group->id]) }}" class="option1">
                                        View
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src={{$subgroup->image}} alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{$subgroup->sub_group_title}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- <div class="container">
                <div class="row">
                    @foreach ($subGroups as $subgroup)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">
                                        View
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src={{$subgroup->image}} alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{$subgroup->subgroup_title}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> --}}

        </section>

    </div>




    {{-- <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box">
            <div class="option_container">
                <div class="options">
                    <a href="" class="option1">
                        Men's Shirt
                    </a>
                    <a href="" class="option2">
                        Buy Now
                    </a>
                </div>
            </div>
            <div class="img-box">
                <img src="images/p1.png" alt="">
            </div>
            <div class="detail-box">
                <h5>
                    Men's Shirt
                </h5>
                <h6>
                    $75
                </h6>
            </div>
        </div>
    </div> --}}





    {{-- <div class="card-container">
        <div class="card">
            <img src={{$data->image}} alt="">
        </div>
        <div class="card">
            <img src={{$data->image}} alt="">
        </div>
        <div class="card">
            <img src={{$data->image}} alt="">
        </div>
        <div class="card">
            <img src={{$data->image}} alt="">
        </div>
        <div class="card">
            <img src={{$data->image}} alt="">
        </div>


    </div> --}}




    <!-- footer start -->
    @include('home.footer')

    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Famms</a><br>
        </p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>

{{-- <section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach ($data as $data)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                View
                            </a>

                        </div>
                    </div>
                    <div class="img-box">
                        <img src={{$data->image}} alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$data->group_title}}
                        </h5>

                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Men's Shirt
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="images/p1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $75
                        </h6>
                    </div>
                </div>
            </div> --}}

        </div>


    </div>
</section> --}}