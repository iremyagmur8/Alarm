@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')

    @php
        use App\Http\Controllers\HomepageController
    @endphp


    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area ">
                        <span>REFERANSLAR</span>
                        <p>Her gün değişen ihtiyaçlar doğrultusunda ürün yelpazemiz değişmekte ve genişlemektedir. Kullanım amacına uygun ve doğru ürünü seçerken, uzmanlarımıza danışabilirsiniz.</p>
                    </div>
                </div>
                <div class="content col-md-12 mt-4">
                    <div class="row">
                        @foreach($cData->referanslar as $key=>$val)
                            <div class="col-md-6 card-tal mb-5">
                                <div class="container-fluid card-tal-con">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 card-tal-con-img ">
                                            <a href="/referans/{{str_slug($val->title,"-")}}/{{$val->id}}">
                                                @isset($val->files[0]->file)
                                                    <img class="p- ml-3" src="{{Storage::url("images/userfiles/".$val->files[0]->file)}} ">
                                                @endisset
                                            </a>


                                        </div>

                                        <div class="col-md-6 text-center">
                                            <div class="pt-2 pt-md-1">
                                                    <h4 class="boxtitle1">
                                                        <a href="/referans/{{str_slug($val->title,"-")}}/{{$val->id}}"
                                                           class="sub-title2">{{$val->title}}</a>
                                                    </h4>
                                                {!! $val->description !!}
                                            </div>
                                        </div>
                                        <div class="col-2 col-md-6"></div>
                                        <div class="col-12 col-md-6 d-flex justify-content-center">
                                            <a href="/referans/{{str_slug($val->title,"-")}}/{{$val->id}}" class="link">DETAYLAR</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
