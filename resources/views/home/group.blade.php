<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('home.css')

    <style>
        /* Style for the sidebar */
        .sidebar {
            padding: 20px;
            border-right: 1px solid #ccc;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            /* Choose your desired text color */
            font-weight: bold;
        }

        .sidebar ul li a:hover {
            color: #555;
            /* Choose your desired text color on hover */
        }

        /* Media query for smartphone view */
        @media (max-width: 767px) {
            .dropdown-toggle {
                display: inline-block;
                /* Display the dropdown button */
            }

            .sidebar ul {
                display: none;
                /* Hide the list items by default */
            }

            .sidebar.open ul {
                display: block;
                /* Show the list items when the sidebar is open */
            }

            .image_banner {
                display: none;
                /* Hide the banner image on smartphones */
            }
        }

        .dropdown-toggle::after {
            content: '\25BC';
            /* Unicode for downward arrow */
            margin-left: 5px;
        }

        @media (min-width: 768px) {
            .dropdown-toggle {
                display: none;
                /* Hide the dropdown button on larger screens */
            }
        }


        .image_banner {
            width: 1020px;
        }


        .box {
            height: 300px;
            width: 250px;
        }

        .img-box {
            width: 150px;
            height: 100px;
        }
    </style>

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->
        @include('home.search')
        {{-- sidebar --}}
        <div class="content">
            <div class="row">

                <div class="col-md-2">
                    <div class="sidebar" id="sidebar">
                        <h6 onclick="toggleDropdown()" style="cursor: pointer;">All departments</h6>
                        <ul>
                            @foreach($departments as $departments)
                            <p>
                                <li><a href="#">{{$departments->department_title}}</a></li>
                            </p>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="banner">
                        <img src="/images/banner.png" alt="banner" class="image_banner" />
                    </div>

                    <div class="row col-md-9">
                        <section class="product_section layout_padding">
                            <div class="container">
                                <h5>
                                    <span>{{$department->department_title}}</span>
                                </h5>
                                <div class="row">
                                    @foreach ($groups as $group)
                                    <div class="col-md-4">
                                        <div class="box">
                                            <div class="option_container">
                                                <div class="options">
                                                    <a href="{{ route('subgroup', ['id' => $group->id]) }}"
                                                        class="option1">
                                                        View
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="img-box">
                                                <img src={{$group->image}} alt="">
                                            </div>
                                            <div class="detail-box">
                                                <p>
                                                    {{$group->group_title}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="card mb-3" style="max-width: 1020px;">
                        <div class="row col-md-9 g-0">
                            <div class="col-md-4 mt-4">
                                <img src="/uploads/sub_groups/1709560926.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
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
    <script>
        function toggleDropdown() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }
    </script>

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