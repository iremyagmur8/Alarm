@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    <section id="page-content ">
        <div id="slider" class="inspiro-slider" data-height-xs="360">
            <!-- Slide 1 -->
            <div class="slide"
                 style="background-image:url('{{Storage::url("images/userfiles/". $cData->misyonumuz->files[0]->file)}}'); background-size: cover;
                     background-position: center center">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center">
                        <!-- Captions -->
                        <div class="page-title">
                            <h2>{!! $cData->misyonumuz->title !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
        </div>
        <!-- end: Page title -->
        <!-- FULL WIDTH PAGE -->
        <div class="pt-5">
            <div class="container">
                <p>{!! $cData->misyonumuz->description !!}</p>
            </div>
        </div>
        <div id="page-content" class="p-b-0">
            <div class="container">
                <div class="grid-layout grid-2-columns grid-loaded" data-item="grid-item" data-margin="30"
                     data-lightbox="gallery" style="margin: 0px -30px -30px 0px; position: relative; height: 1550px;">
                    <div class="grid-item"
                         style="padding: 0px 30px 30px 0px; position: absolute; left: 0px; top: 770px;">
                        <a data-lightbox="gallery-image"  data-animate="fadeInRight"
                           href="{{Storage::url("images/userfiles/". $cData->misyonumuz->files[1]->file)}}">
                            <img src="{{Storage::url("images/userfiles/". $cData->misyonumuz->files[1]->file)}}">
                        </a>
                    </div>
                    <div class="grid-item"
                         style="padding: 0px 30px 30px 0px; position: absolute; left: 0px; top: 770px;">
                        <a data-lightbox="gallery-image"
                           href="{{Storage::url("images/userfiles/". $cData->misyonumuz->files[2]->file)}}">
                            <img src="{{Storage::url("images/userfiles/". $cData->misyonumuz->files[2]->file)}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
