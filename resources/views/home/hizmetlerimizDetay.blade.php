@extends('layouts.app')
@section('title','')
@section('desc')
@section('content')
    <section id="page-content ">
        <div id="slider" class="inspiro-slider" data-height-xs="360">
            <div class="slide"
                 style="background-image:url('{{Storage::url("images/userfiles/". $cData->back->files[0]->file)}}'); background-size: cover;background-position: center center">
                <div class="bg-overlay"></div>

            </div>
        </div>


        @php($f=0)
        @foreach($cData->hizmetlerimiz as $key=>$val)
            @php($f++)
            @if($loop->iteration % 2 == 0)
                <section class="background-grey middleBack p-b-50 ">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="heading-text heading-section text-left mt-5 ml-5">
                                <h4 class="text-uppercase">
                                    0{{$f}}
                                </h4>
                                <h1>{!! $val->title !!} </h1>
                                <p> {!! $val->description !!} </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 m-l-50"
                             style="background-image: url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}');border-radius:10px;background-position: center center;background-repeat: no-repeat;background-size: cover;height:450px; "></div>
                    </div>
                </section>
            @else
                <section class="background-grey middleBack p-b-50 p-t-50">
                    <div class="row align-items-center">
                        <div class="col-lg-5 m-l-50 text-left"
                             style="background-image: url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}');border-radius:10px;background-position: center center;background-repeat: no-repeat;background-size: cover;height:450px; "></div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="heading-text heading-section text-right mt-5">
                                <h4 class="text-uppercase" style="font-family:'Rubik', Sans-serif;
                    color: lightgrey;
                    font-weight: 800;
                    letter-spacing: 2.5px;"> 0{{$f}}
                                </h4>
                                <h1>{!! $val->title !!} </h1>
                                <p> {!!$val->description !!} </p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
    <!-- <section id="page-content" class="text-light p-t-200 p-b-200 "
                 style="background: url('{{Storage::url("images/userfiles/". $cData->back->files[0]->file)}}');background-position: center center;background-repeat: no-repeat;background-size: cover">
            <div class="bg-overlay"></div>
        </section>
        <section class="reservation-form-over no-padding">
            <div class="container text-center">

                <div id="blog" class="grid-layout post-3-columns text-center " data-item="post-item">
                    @foreach($cData->videolar as $key=>$val)
        <div class="post-item border">
            <div class="post-item-wrap">
                <div class="post-video">
                    <iframe src="https://img.youtube.com/vi/{{$val->shortdescription}}/3.jpg"
                                            width="560" height="376" frameborder="0" webkitallowfullscreen
                                            mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    @endforeach
        </div>
    </div>
</section>  -->

        <section class="background py-5">
            <div class="container">
                <div class="row carousel-description-clients carousel-description-style align-items-center">

                    <div class="col-lg-12">
                        <div class="carousel client-logos" data-items="4">
                            @foreach($cData->videolar as $key=>$val)

                                <div class="grid-item">
                                    <div class="grid-item-wrap">
                                        <div class="grid-image"><img alt="Image Lightbox" src="https://img.youtube.com/vi/{{$val->shortdescription}}/0.jpg"/></div>
                                        <div class="grid-description">
                                            <a href="https://www.youtube.com/watch?v={{$val->shortdescription}}" data-lightbox="iframe"><i class="icon-play"></i></a>
                                        </div>
                                    </div>
                                </div>



                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- <section id="slider" class="no-padding">

            <div class="carousel" data-video="true" data-items="3">
                @foreach($cData->videolar as $key=>$val)
        <div class="item-video">
            <iframe src="https://img.youtube.com/vi/{{$val->shortdescription}}/3.jpg" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                @endforeach


        </div>
    </section> -->

    <!-- <section id="slider" class="no-padding">

            <div class="carousel flickity-enabled is-draggable carousel-loaded" data-video="true" data-items="3">


                <div class="flickity-viewport" style="height: 400px; touch-action: pan-y;">
                    <div class="flickity-slider" style="left: 0px; transform: translateX(-134.21%);">
                        @foreach($cData->videolar as $key=>$val)
        <div class="polo-carousel-item"
             style="width: 507.667px; padding-right: 10px; position: absolute; left: 0%;"
             aria-hidden="true">
            <div class="polo-carousel-item" style="width: 507.667px; padding-right: 10px;">
                <div class="item-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://img.youtube.com/vi/{{$val->shortdescription}}/3.jpg"
                                                    frameborder="0" allowfullscreen="">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
        </div>
        <button class="flickity-button flickity-prev-next-button previous" type="button"
                aria-label="Previous">
            <svg class="flickity-button-icon" viewBox="0 0 100 100">
                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
            </svg>
        </button>
        <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
            <svg class="flickity-button-icon" viewBox="0 0 100 100">
                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"
                      transform="translate(100, 100) rotate(180) "></path>
            </svg>
        </button>
        <ol class="flickity-page-dots">
            <li class="dot" aria-label="Page dot 1"></li>
            <li class="dot" aria-label="Page dot 2"></li>
            <li class="dot" aria-label="Page dot 3"></li>
            <li class="dot" aria-label="Page dot 4"></li>
            <li class="dot is-selected" aria-label="Page dot 5" aria-current="step"></li>
            <li class="dot" aria-label="Page dot 6"></li>
            <li class="dot" aria-label="Page dot 7"></li>
        </ol>
    </div>
</section> -->


    </section>
    <style>
        .heading-text h1 {
            font-size: 25px;
            font-weight: 600;
        }
    </style>

@endsection
