<section class="product_section layout_padding">
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
                            <a href="{{url('category',$data->id)}}" class="option1">
                                View
                            </a>

                        </div>
                    </div>
                    <div class="img-box">
                        <img src={{$data->image}} alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$data->department_title}}
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
</section>