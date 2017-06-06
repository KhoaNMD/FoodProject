{{--quan trọng là class modal-dialog modal-lg để class modal-lg của boottrap hoạt động thì phải fix class modal-dialog (
.modal-dialog {
    /*width: 100%;
    max-width: 560px;*/
    margin: 0 auto
})
 trong file style.css fix 2 dòng witdh và max-width (comment lại hoặc có thể bỏ luôn tùy ý)
 add css vào custom.css để body ko fucking padding-right:17px
 .modal-open {
    padding-right: 0px !important;
    overflow-y: scroll;
}
--}}
<!-- Large modal -->
<div id="modal-{!! $post->id !!}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{--có mấy id như gridSystemModalLabel thì đặt tùy ý muốn gì cũng dc không ảnh hưởng --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Tên nhà hàng</h4>
                <p>{!! $post->address !!}</p>
                <div id="picturetabs">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 tabs tabbable responsive" id="tabs">
                            <ul class="nav nav-picture {{--nav-tabs--}} ">
                                <li class="active">
                                    <a href="#tatca-{!! $post->id !!}" data-toggle="tab">Tất cả ({!! count($post->images) !!}) </a>
                                </li>
                                <li>
                                    <a href="#videopic-{!! $post->id !!}" data-toggle="tab">Video ({!! isset($imageList[$post->id][1]) ? count($imageList[$post->id][1]) : 0 !!})</a>
                                </li>
                                <li>
                                    <a href="#monan-{!! $post->id !!}" data-toggle="tab">Món ăn ({!! isset($imageList[$post->id][2]) ? count($imageList[$post->id][2]) : 0 !!})</a>
                                </li>
                                <li>
                                    <a href="#khonggian-{!! $post->id !!}" data-toggle="tab">Không gian ({!! isset($imageList[$post->id][3]) ? count($imageList[$post->id][3]) : 0 !!})</a>
                                </li>
                                <li>
                                    <a href="#tonghop-{!! $post->id !!}" data-toggle="tab">Tổng hợp ({!! isset($imageList[$post->id][4]) ? count($imageList[$post->id][4]) : 0 !!}) </a>
                                </li>
                                <li>
                                    <a href="#thucdon-{!! $post->id !!}" data-toggle="tab">Thực đơn ({!! isset($imageList[$post->id][5]) ? count($imageList[$post->id][5]) : 0 !!}) </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="tab-content" style="height: 300px; overflow-y: scroll">
                    <div class="tab-pane active" id="tatca-{!! $post->id !!}">
                        <ul class="list-inline-custom">
                            @foreach($post->images as $image)
                                <li data-toggle="modal" data-target="#myModal">
                                    <a href="#myGallery" data-slide-to="0">
                                        <img class="img-thumbnail" src="{!! asset($image->url_image) !!}" width="200px" height="100px"><br>
                                    </a>
                                </li>
                            @endforeach
                            <!--end of thumbnails-->
                        </ul>
                    </div>

                    <div class="tab-pane" id="videopic-{!! $post->id !!}">
                        <ul class="list-inline-custom">
                            @if(isset($imageList[$post->id][1]) && count($imageList[$post->id][1]))
                                @for($i = 0; $i < count($imageList[$post->id][1]);$i++)
                                     <li data-toggle="modal" data-target="#myModal">
                                         <a href="#myGallery" data-slide-to="0">
                                            <img class="img-thumbnail" src="{!! asset($imageList[$post->id][1][$i]) !!}" width="200px" height="100px"><br>
                                        </a>
                                     </li>
                                @endfor
                            @else
                                <p>Hiện không có dữ liệu cho mục này</p>
                            @endif
                        </ul>
                    </div>

                    <div class="tab-pane" id="monan-{!! $post->id !!}">
                        <ul class="list-inline-custom">
                            @if(isset($imageList[$post->id][2]) && count($imageList[$post->id][2]))
                                @for($i = 0; $i < count($imageList[$post->id][2]);$i++)
                                    <li data-toggle="modal" data-target="#myModal">
                                        <a href="#myGallery" data-slide-to="0">
                                            <img class="img-thumbnail" src="{!! asset($imageList[$post->id][2][$i]) !!}" width="200px" height="100px"><br>
                                        </a>
                                    </li>
                                @endfor
                            @else
                                <p>Hiện không có dữ liệu cho mục này</p>
                            @endif
                        </ul>
                    </div>

                    <div class="tab-pane" id="khonggian-{!! $post->id !!}">
                        <ul class="list-inline-custom">
                            @if(isset($imageList[$post->id][3]) && count($imageList[$post->id][3]))
                                @for($i = 0; $i < count($imageList[$post->id][3]);$i++)
                                    <li data-toggle="modal" data-target="#myModal">
                                        <a href="#myGallery" data-slide-to="0">
                                            <img class="img-thumbnail" src="{!! asset($imageList[$post->id][3][$i]) !!}" width="200px" height="100px"><br>
                                        </a>
                                    </li>
                                @endfor
                                @else
                                    <p>Hiện không có dữ liệu cho mục này</p>
                                @endif
                        </ul>
                    </div>

                    <div class="tab-pane" id="tonghop-{!! $post->id !!}">
                        <ul class="list-inline-custom">
                            @if(isset($imageList[$post->id][4]) && count($imageList[$post->id][4]))
                                @for($i = 0; $i < count($imageList[$post->id][4]);$i++)
                                    <li data-toggle="modal" data-target="#myModal">
                                        <a href="#myGallery" data-slide-to="0">
                                            <img class="img-thumbnail" src="{!! asset($imageList[$post->id][4][$i]) !!}" width="200px" height="100px"><br>
                                        </a>
                                    </li>
                                @endfor
                            @else
                                <p>Hiện không có dữ liệu cho mục này</p>
                            @endif
                        </ul>
                    </div>

                    <div class="tab-pane" id="thucdon-{!! $post->id !!}">
                        <ul class="list-inline-custom">
                            @if(isset($imageList[$post->id][5]) && count($imageList[$post->id][5]))
                                @for($i = 0; $i < count($imageList[$post->id][5]);$i++)
                                    <li data-toggle="modal" data-target="#myModal">
                                        <a href="#myGallery" data-slide-to="0">
                                            <img class="img-thumbnail" src="{!! asset($imageList[$post->id][5][$i]) !!}" width="200px" height="100px"><br>
                                        </a>
                                    </li>
                                @endfor
                            @else
                                <p>Hiện không có dữ liệu cho mục này</p>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="btn-load-more"><a href="#0">Xem tiếp...</a></div>
            </div>
        </div>
    </div>
</div>
<!--begin modal window-->
