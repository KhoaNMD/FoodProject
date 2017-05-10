 <div class="tab-content">
    <div class="tab-pane active" id="home">
        @if(count($postList) > 0)
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
            <div class="row"></div>
            <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Xem tiếp...</a>
        @else
            <div class="text-danger">Hiện có 0 bài viết theo yêu cầu.</div>
        @endif
    </div>
     <img id="image-loading" src="{!! asset('public/images/loading.gif') !!}" width="400px" height="200px" style="top: 400px;right: 350px;position: fixed;">
</div>