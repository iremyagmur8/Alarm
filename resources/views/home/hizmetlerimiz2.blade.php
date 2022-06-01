@extends('layouts.app')
@section('title','')
@section('desc')
@section('content')
    <section id="page-content ">


        @php($f=0)
        @foreach($cData->hizmetlerimiz as $key=>$val)
            @php($f++)
            @if($loop->iteration % 2 == 0)
                <section class="background-grey middleBack p-b-50 ">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="heading-text heading-section text-left mt-5 ml-5">
                                <h4 class="text-uppercase">
                                    0{{$f}}
                                </h4>
                                <h1>{!! $val->title !!} </h1>
                                <p> {!! $val->description !!} </p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1"
                             style="background-image: url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}');border-radius:10px;background-position: center center;background-repeat: no-repeat;background-size: cover;height:450px; "></div>
                    </div>
                </section>
            @else
                <section class="background-grey middleBack p-b-50 p-t-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-left"
                             style="background-image: url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}');border-radius:10px;background-position: center center;background-repeat: no-repeat;background-size: cover;height:450px; "></div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="heading-text heading-section text-right mt-5 mr-5">
                                <h4 class="text-uppercase" style="font-family:'Rubik', Sans-serif;
                    color: lightgrey;
                    font-weight: 800;
                    letter-spacing: 2.5px;"> 0{{$f}}
                                </h4>
                                <h1>{!! $val->title !!} </h1>
                                <p> {!! $val->description !!} </p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
        <section id="page-content" class="text-light p-t-200 p-b-200 " style="background: url('{{Storage::url("images/userfiles/". $cData->posts->files[0]->file)}}');background-position: center center;background-repeat: no-repeat;background-size: cover">
            <div class="bg-overlay"></div>
        </section>
        <section class="reservation-form-over no-padding">
            <div class="container text-center">
                @php($bol=explode(",",$cData->posts->shortdescription))
                <div id="blog" class="grid-layout post-3-columns text-center " data-item="post-item">
                    @foreach($bol as $key=>$val)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-video">
                                <iframe src="https://img.youtube.com/vi/{{$val}}/3.jpg" width="560" height="376" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
       <!-- <section class="text-light p-t-150 p-b-150 " data-bg-parallax="{{Storage::url("images/userfiles/". $cData->posts->files[0]->file)}}">
            <div class="bg-overlay"></div>
            <div class="container  text-center" >
                @php($bol=explode(",",$cData->posts->shortdescription))

                @foreach($bol as $key=>$val)
                    <img src="https://img.youtube.com/vi/{{$val}}/3.jpg" style="margin: 10px; margin: auto; bottom:-50px; position: relative">
                @endforeach
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
