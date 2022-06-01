@extends('layouts.app')
@section('title', "")
@section('desc',"")
@section('content')


    <section id="page-content">
        <div class="container  my-2">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page title -->
                    <div class="title-area ">
                        <span>REFERANSLAR</span>
                        <p>Her gün değişen ihtiyaçlar doğrultusunda ürün yelpazemiz değişmekte ve genişlemektedir. Kullanım amacına uygun ve doğru ürünü seçerken, uzmanlarımıza danışabilirsiniz.</p>
                    </div>
                    <ul class="portfolio-wrap">
                        <div class="row">
                            @foreach($cData->referanslar as $key=>$val)
                                <div class="col-md-6">
                                    <li class="portfolio-box  ">
                                        <a class="expander" title="">
                                            <img src="{{Storage::url("images/userfiles/".$val->files[0]->file)}}"
                                                 alt=""/>
                                            <figure class="effect-morley">
                                                <figcaption>
                                                    <p>{!! $val->description !!}</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <h5>{{$val->title}}</h5>
                                </div>
                            @endforeach
                        </div>
                    </ul>
                </div>
            </div>
        </div>

    </section>


@endsection
