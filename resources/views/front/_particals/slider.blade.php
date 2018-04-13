<section class="main-menu">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="list-nav">
                    <ul>
                        @foreach($categories as $k => $category)
                        <li class="has-mega  @if($k == 0) active @endif ">
                            <a href="{{ url($category->slug. '-c'. $category->id) }}" title="">{{ $category->name }} <i class="fa fa-angle-right"></i></a>
                            <div class="mega-wrap">
                                <div class="row no-gutters">
                                    <div class="col-md-6 height-1">
                                        <a href="san-pham-chi-tiet.html" title="" class="banner-large"><img src="{{asset('/front/images/banner/banner-1.jpg')}}" alt="" title=""> </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="height-2"><a href="san-pham-chi-tiet.html" title="" class=""><img src="{{asset('/front/images/banner/banner-2.jpg')}}" alt="" title=""> </a></div>
                                        <div class="row no-gutters">
                                            <div class="col-md-6 height-3 height-3-1"><a href="san-pham-chi-tiet.html" title="" class=""><img src="{{asset('/front/images/banner/banner-3.jpg')}}" alt="" title=""> </a></div>
                                            <div class="col-md-6 height-3 height-3-2"><a href="san-pham-chi-tiet.html" title="" class=""><img src="{{asset('/front/images/banner/banner-4.jpg')}}" alt="" title=""> </a></div>
                                            <div class="col-md-6 height-3 height-3-3"><a href="san-pham-chi-tiet.html" title="" class=""><img src="{{asset('/front/images/banner/banner-5.jpg')}}" alt="" title=""> </a></div>
                                            <div class="col-md-6 height-3 height-3-4"><a href="san-pham-chi-tiet.html" title="" class=""><img src="{{asset('/front/images/banner/banner-6.jpg')}}" alt="" title=""> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>