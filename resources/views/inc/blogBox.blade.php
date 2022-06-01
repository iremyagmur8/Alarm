<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="content col-lg-9">
                <!-- Blog -->
                <div id="blog" class="single-post">
                    <!-- Post single item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    @isset($cData->data->files[0]->file)<img alt=""
                                                                             src="{{Storage::url("/images/userfiles/".$cData->data->files[0]->file)}}">@endisset
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2 class="p-0">{!! $cData->data->title !!}</h2>
                                {!! $cData->data->description !!}
                            </div>

                        </div>
                    </div>
                    <!-- end: Post single item-->
                </div>
            </div>

        </div>
    </div>
</section>
