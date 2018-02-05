   @extends('frontend.main')
   @section('content')
       <div class="main-slider main-slider-4">
        <div class="slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="650px" data-slider-arrows="false" data-slider-buttons="false">
            <div class="sp-slides">
                <!-- Slide 1-->
                <div class="sp-slide">
                    <img class="sp-image" src="assets/media/components/b-main-slider/6.jpg" alt="slider" />
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="sp-layer" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                                    <div class="main-slider__label">Do you need a ride?</div>
                                    <div class="main-slider__title">We offer Faster & Reliable
                                        <br>Car Rental Service</div><a class="main-slider__btn btn btn-lg btn-white" href="services.html">book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2-->
                <div class="sp-slide">
                    <img class="sp-image" src="assets/media/components/b-main-slider/7.jpg" alt="slider" />
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="sp-layer" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                                    <div class="main-slider__label">Do you need a ride?</div>
                                    <div class="main-slider__title">We offer Faster & Reliable
                                        <br>Car Rental Service</div><a class="main-slider__btn btn btn-lg btn-white" href="services.html">book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .main-slider-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form class="b-booking-form area-bg area-bg_prim">
                    <div class="area-bg__inner">
                        <div class="row">
                            <div class="col-md-3">
                                <select class="selectpicker" data-width="100%">
                                    <option>Ride Location</option>
                                    <option>Location 1</option>
                                    <option>Location 2</option>
                                    <option>Location 3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="selectpicker" data-width="100%">
                                    <option>Choose Your Ride</option>
                                    <option>Ride 1</option>
                                    <option>Ride 2</option>
                                    <option>Ride 3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" id="datepicker" placeholder="Ride Date &amp; Time" required="required" />
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" id="offdatepicker" placeholder="Leave Off Date &amp; Time" required="required" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <select class="selectpicker" data-width="100%">
                                    <option>Number of People</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                {{--<div class="radio-group">--}}
                                    {{--<input class="forms__radio hidden" id="forms__radio-1" type="radio" name="radio-group-2" value="" />--}}
                                    {{--<label class="forms__label forms__label-radio forms__label-radio-1" for="forms__radio-1">Just A ride</label>--}}
                                    {{--<input class="forms__radio hidden" id="forms__radio-2" type="radio" name="radio-group-2" value="" checked="checked" />--}}
                                    {{--<label class="forms__label forms__label-radio forms__label-radio-1" for="forms__radio-2">B</label>--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-md-3 col-md-offset-3">
                                <button class="btn btn-dark">book my ride</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end .b-booking-form-->

    <section class="section-isotope">
        <div class="section-isotope__header bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h2 class="ui-title-block">Photo Gallery</h2>
                            <div class="ui-subtitle-block">Tempor incididunt labore dolore magna cillium fugiat</div>
                            <div class="ui-decor"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b-isotope">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="b-isotope-filter list-inline">
                            <li class="current"><a href="" data-filter="*">all</a>
                            </li>
                            <li><a href="" data-filter=".sale">for sale</a>
                            </li>
                            <li><a href="" data-filter=".new">new arrivals</a>
                            </li>
                            <li><a href="" data-filter=".top">top brands</a>
                            </li>
                            <li><a href="" data-filter=".ferrari">ferrari</a>
                            </li>
                            <li><a href="" data-filter=".mercedes">mercedes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="b-isotope-grid grid list-unstyled">
                <li class="grid-sizer"></li>
                <li class="b-isotope-grid__item grid-item top mercedes">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/1.jpg">
                        <img src="assets/media/content/gallery/384x300/1.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item sale ferrari">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/2.jpg">
                        <img src="assets/media/content/gallery/384x300/2.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item new top mercedes">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/3.jpg">
                        <img src="assets/media/content/gallery/384x300/1.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item sale top">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/1.jpg">
                        <img src="assets/media/content/gallery/384x300/2.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item sale ferrari">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/2.jpg">
                        <img src="assets/media/content/gallery/384x300/3.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item new top mercedes">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/3.jpg">
                        <img src="assets/media/content/gallery/384x300/1.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item sale ferrari">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/1.jpg">
                        <img src="assets/media/content/gallery/384x300/3.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item sale top">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/2.jpg">
                        <img src="assets/media/content/gallery/384x300/2.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
                <li class="b-isotope-grid__item grid-item sale mercedes">
                    <a class="b-isotope-grid__inner js-zoom-images" href="assets/media/content/gallery/384x300/3.jpg">
                        <img src="assets/media/content/gallery/384x300/3.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">apache rtr 2018</span></span>
                                </span>
                    </a>
                </li>
            </ul></div></section>
       @endsection