 <div class="tab-content">
    <div class="tab-pane active" id="home">
        <?php $countRow = 0 ?>
        @foreach($postList as $post)
            <?php $countRow = $countRow + 1 ?>
            @if($countRow % 2 == 0)
        <div class="row">
            @endif
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <a class="strip_list grid" href="{!! route('restaurant.show',$post->id) !!}">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset($post->images[0]->url_image) !!}" alt="">
                        </div>
                        <div>
                            <div class="content_strip_logo">
                                7.2
                            </div>
                            <div class="content_strip">
                                <div class="post_title">{!! $post->title !!}</div>
                                <div class="location">
                                    {!! $post->address !!}
                                </div>
                            </div>
                        </div>
                        <div class="current_comment">
                            <div class="content_strip_logo">
                                7.2
                            </div>
                            <div class="content_strip">
                                <div class="post_title">{!! $post->title !!}</div>
                                <div class="location">
                                    {!! $post->address !!}
                                </div>
                            </div>
                        </div>
                        <div class="post_info">
                            <span class="fa fa-comment"> 200 </span>
                            <span class="fa fa-camera ml-5"> 100 </span>
                        </div>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            @if($countRow % 2 == 0)
        </div><!-- End row-->
            @endif
        @endforeach

        <div class="row">
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_3.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Japan Food</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_4.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Sushi Gold</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
        </div><!-- End row-->

        <div class="row">
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_5.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Dragon Tower</h3>
                        <div class="type">
                            Chinese / Thai
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_6.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>China Food</h3>
                        <div class="type">
                            Chinese / Vietnam
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
        </div><!-- End row-->
    </div>
    <div class="tab-pane" id="profile">
        <div class="row">
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Taco Mexican</h3>
                        <div class="type">
                            Mexican / American
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_2.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Naples Pizza</h3>
                        <div class="type">
                            Italian / Pizza
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
        </div><!-- End row-->

        <div class="row">
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_3.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Japan Food</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_4.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Sushi Gold</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
        </div><!-- End row-->
    </div>
    <div class="tab-pane" id="messages">
        <div class="row">
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_3.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Japan Food</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_4.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Sushi Gold</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
        </div><!-- End row-->
    </div>
    <div class="tab-pane" id="settings">
        <div class="row">
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_5.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Dragon Tower</h3>
                        <div class="type">
                            Chinese / Thai
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <a class="strip_list grid" href="detail_page.html">
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="{!! asset('public/front/img/thumb_restaurant_6.jpg') !!}" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>China Food</h3>
                        <div class="type">
                            Chinese / Vietnam
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <br><span class="opening">Opens at 17:00.</span> Minimum order: $15
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div>
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
        </div><!-- End row-->
    </div>
</div>