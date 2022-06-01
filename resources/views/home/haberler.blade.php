@extends('layouts.app')
@section('title', "")
@section('desc',"")
@section('content')


    <section id="page-content">
        <div class="container">
            <div class="col-md-12">
                <div class="title-area  mb-4">
                    <span >HABERLER</span>
                    <p>Her gün değişen ihtiyaçlar doğrultusunda ürün yelpazemiz değişmekte ve genişlemektedir. Kullanım amacına uygun ve doğru ürünü seçerken, uzmanlarımıza danışabilirsiniz.</p>
                </div>
            </div>
            <!-- end: Page title -->
            <!-- Blog -->
            <div id="blog" class="grid-layout post-2-columns m-b-30 " data-item="post-item">
                <!-- Post item-->
                @foreach($cData->haberler as $key=>$val)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="/haberler/{{str_slug($val->title,"-")}}/{{$val->id}}">
                                    <div class="img" style="background:url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}') center center no-repeat; background-size: cover; height:350px"></div>
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><a href="/haberler/{{str_slug($val->title,"-")}}/{{$val->id}}">{{$val->title}}</a></h2>
                                <a href="/haberler/{{str_slug($val->title,"-")}}/{{$val->id}}" class="item-link">Devamını Oku <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end: post content -->
    </section> <!-- end: Content -->


@endsection
