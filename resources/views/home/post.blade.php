@extends('layouts.app')
@section('title', $cData->posts->title." - ")
@section('desc',$cData->posts->shortdescription)
@section('content')

    @php
        use App\Http\Controllers\HomepageController
    @endphp

    @isset($cData->category->files[0]->file)
        <section id="page-title"
                 data-bg-parallax="{{Storage::url("/images/userfiles/".$cData->category->files[0]->file)}}">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="page-title">
                    <h1>{{$cData->category->title}}</h1>
                    <span>{{$cData->category->shortdescription}}</span>
                </div>
            </div>
        </section>
    @endisset
    <section id="page-content" class="background-grey" style="padding: 10px 0;">
        <div class="container">
            <div class="row">

                <div class="content col-md-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                @isset($cData->posts->files[0]->file)
                                    <div class="post-image">
                                        <a href="#">
                                            <img width="845" height="475" alt="{!! $cData->posts->title !!}"
                                                 src="{{Storage::url("images/userfiles/".$cData->posts->files[0]->file)}}">
                                        </a>
                                    </div>
                                @endisset

                                <div class="post-item-description" style="padding: 15px">
                                    @isset($cData->posts->brandtext->files[0]->file)
                                    <div
                                         style="background:url('{{HomepageController::webps($cData->posts->brandtext->files[0]->file,"m")}}') center center; background-size:cover; height: 80px; width: 80px; display: inline-block; margin-right: 20px; float:left"></div>
                                    @endisset
                                    <h2 style="height: auto;">{{$cData->posts->title}}</h2>
                                    <p style="margin-top: 20px"><b>{{$cData->posts->shortdescription}}</b></p>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$cData->posts->created_at}}</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>{{$cData->posts->hit}} Hit</a></span>
                                        <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>{{$cData->posts->category->title}}</a></span>

                                    </div>
                                        {!! str_replace('width="560"','width="100%"',$cData->posts->description) !!}

                                        {{dd($cData->posts)}}

                                    @if(count($cData->posts->tags)>1)
                                        <div class="post-tags">
                                            @foreach($cData->posts->tags as $key=>$val)
                                                <a href="#">{{$val}}</a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="post-navigation">
                                    @isset($cData->preview->title)
                                        <a href="/{{str_slug($cData->preview->title,"-")}}/{{$cData->preview->id}}.html"
                                           class="post-prev">
                                            <div class="post-prev-title">
                                                <span>Vorherige Nachrichten</span>{{$cData->preview->title}}
                                            </div>
                                        </a>
                                    @endisset
                                    <a href="/marken/{{$cData->posts->brandtext}}" class="post-all">
                                        <i class="icon-grid"> </i>
                                    </a>
                                    @isset($cData->next->title)
                                        <a href="/{{str_slug($cData->next->title,"-")}}/{{$cData->next->id}}.html"
                                           class="post-next">
                                            <div class="post-next-title"><span>Nächste Nachrichten</span>{{$cData->next->title}}
                                            </div>
                                        </a>
                                    @endisset
                                </div>



                            </div>
                        </div>


                    </div>


                </div>

            </div>
        </div>
    </section>


@endsection
