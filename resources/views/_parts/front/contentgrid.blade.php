 <div class="tab-content">
    <div class="tab-pane active" id="home">
        @if(count($postList) > 0)
        <?php $countRow = 0 ?>
        @foreach($postList as $post)
            @if($countRow % 3 == 0)
        <div class="row">
            @endif
          <?php $countRow = $countRow + 1 ?>
            <div class="col-md-4 col-sm-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="strip_list grid" >
                    <div class="desc">
                        <div class="thumb_strip">
                            <a href="{!! route('restaurant.show',$post->id) !!}">
                                <img src="{!! asset($post->images[0]->url_image) !!}" alt="">
                            </a>
                        </div>
                        <div class="content_post">
                            <div>
                                <div class="content_strip_logo">
                                    @if($post->cnt_rank > 0)
                                        {!! $post->cnt_rank !!}
                                    @else
                                        0
                                    @endif
                                </div>
                                <div class="content_strip">
                                    <div class="post_title">{!! App\Http\Utils\UtilityCommon::formatTitle($post->title) !!}</div>
                                    <div class="location">
                                        {!! App\Http\Utils\UtilityCommon::formatAddress($post->address) !!}
                                    </div>
                                </div>
                            </div>
                            @if( count($post->comments) > 0)
                                @foreach($post->comments as $comment)
                                    <div class="current_comment">
                                        <div class="float-left">
                                            <img src="{!! $comment->user->url_image !!}" width="35px" height="35px" style="border-radius: 40px">
                                        </div>
                                        <div class="content_strip">
                                            <div class="post_title">{!! App\Http\Utils\UtilityCommon::formatTitle( $comment->user->fullname ) !!}</div>
                                            <div class="location">
                                                {!! App\Http\Utils\UtilityCommon::formatAddress( $comment->content ) !!}
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @endforeach
                                @else
                                <div class="current_comment" style="padding: 21px 0">
                                   Chưa có bình luận nào cho địa điểm này
                                </div>
                            @endif
                            <div class="post_info" style= "padding-top:10px;">
                                <a id="{!! $post->id !!}" class="fa fa-comment ml-5 photo comment-click" data-toggle="modal" data-target="#modal-comment-{!! $post->id !!}"> {!! count($post->comments) !!} </a>
                                <a class="fa fa-camera ml-5 photo" data-toggle="modal" data-target="#modal-{!! $post->id !!}"> {!! count($post->images) !!} </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End strip_list-->
            </div><!-- End col-md-6-->
            @if($countRow % 3 == 0)
        </div><!-- End row-->
            @endif
                @include('front.modalcomment')
                @include('front.RImages')
        @endforeach
            <div class="row"></div>
            <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Xem tiếp...</a>
        @else
            <div class="text-danger">Hiện có 0 bài viết theo yêu cầu.</div>
        @endif
    </div>
     <img id="image-loading" src="{!! asset('public/images/loading.gif') !!}" width="500px" height="500px" style="top: 90px;right: -50px;position: fixed;">
</div>