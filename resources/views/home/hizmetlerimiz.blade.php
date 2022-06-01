@extends('layouts.app')
@section('title','')
@section('desc')
@section('content')
    <section id="page-content ">
        <div id="slider" class="inspiro-slider" data-height-xs="360">
            <!-- Slide 1 -->
            <div class="slide"
                 style="background-image:url('{{Storage::url("images/userfiles/". $cData->posts->files[0]->file)}}'); background-size: cover;background-position: center center">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center">
                        <!-- Captions -->
                        <div class="page-title">
                            <h2>{!! $cData->posts->title !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="container">
                <p>{!! $cData->posts   ->description !!}</p>
            </div>
        </div>
        <div class="content col-lg-12 text-center">
            <div class="wrapper">
                <div class="container">
                    @include('inc.servicesBox')
                </div>
            </div>
        </div>
    </section>

@endsection
