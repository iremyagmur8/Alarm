@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    @php
        use App\Http\Controllers\HomepageController
    @endphp

    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
        @isset($cData->place[1])
            @foreach($cData->place[1] as $key=>$val)
                <div class="slide kenburns"
                     @isset($val->files[0]->file) @if(pathinfo($val->files[0]->file, PATHINFO_EXTENSION) == 'mp4')  data-bg-video="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"
                     @else data-bg-image="{{Storage::url("images/userfiles/". $val->files[0]->file)}}" @endif @endisset>
                    <div class="container">
                        <div class="slide-captions text-center text-light">
                            <h2>{{$val->title}}</h2>
                            {!! $val->description !!}
                            @if($val->buttontext)
                                <div><a href="{{$val->link}}" class="btn scroll-to"> {!! $val->buttontext !!}</a>
                                </div>@endif

                        </div>
                    </div>
                </div>

            @endforeach
        @endisset
    </div>

    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content team-members-content col-lg-12">
                    <div class="heading-text heading-line">
                        <h2 class="display-1"><span>Ürünlerimiz</span></h2>
                    </div>
                    <div class="carousel team-members team-members-shadow our-products" data-items="4">
                        @foreach($cData->products as $key=>$val)
                            <div class="team-member" style=" height:380px">
                                <div class="team-image">
                                    <div
                                            style="background: url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}') center center no-repeat;background-size: contain; height:280px">
                                    </div>
                                </div>
                                <div class="team-desc">
                                    <h3>{!! $val->title !!}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Carousel -->
    <section id="page-content ">
        <div class="content col-lg-12 text-center">
            <div class="wrapper">
                <div class="container">
                    <div class="heading-text heading-line">
                        <h2 class="display-1"><span>Hizmetlerimiz</span></h2>
                    </div>
                    @include('inc.servicesBox')
                </div>
            </div>
        </div>
    </section>
    <!-- -->

    <!-- References Slider -->
    @isset($cData->place[4])
        <section class="background-grey py-5">
            <div class="container">
                <div class="row carousel-description-clients carousel-description-style align-items-center">
                    <div class="col-lg-4">
                        <div class="description">
                            <div class="heading-text heading-line">
                                <h2 class="display-1"><span>{{$cData->place[4][0]->title}} </span></h2>
                            </div> {!! $cData->place[4][0]->shortdescription !!}
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="carousel client-logos" data-items="4">
                            @foreach($cData->place[4][0]->files as $key=>$file)
                                <div>
                                    <div
                                            style="background-image:url('{{Storage::url("images/userfiles/".$file->file)}}'); background-size:contain;background-position:center center; height:150px;background-repeat: no-repeat "></div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset

    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div class="line"></div>
                    <div class="heading-text heading-line">
                        <h2 class="display-1"><span>Blog</span></h2>
                    </div>
                    <div class="carousel" data-items="2">
                        <!-- Post item-->
                        @foreach($cData->blog as $key=>$val)
                            <div class="post-item border"
                                 onclick="location.href='/blog/{{str_slug($val->title,"-")}}/{{$val->id}}';">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <div class="img"
                                                 style="background:url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}') center center no-repeat; background-size: cover; height:350px"></div>
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2 class="p-0"><a href="#">{{$val->title}}</a></h2>
                                        <p>{!! $val->shortdescription !!}</p>
                                        <a href="/blog/{{str_slug($val->title,"-")}}/{{$val->id}}" class="item-link">Devamını
                                            Oku<i
                                                    class="icon-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="/blog">
                        <button type="button"
                                class="btn btn-light btn-icon-holder btn-shadow btn-light-hover btn-light-hover"
                                style="background-color:#dc3545 !important;">Tüm Blog Yazıları<i
                                    class="icon-chevron-right"></i></button>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-12 text-sm-center text-lg-left">
                        <div class="widget">
                            <ul class="list">
                                @foreach($cData->category as $key=>$val)
                                    @if($val->title == 'KURUMSAL')
                                        <li><a href="#">{{$val->title}}</a></li>
                                    @else
                                        <li><a href="{{$val->link}}">{{$val->title}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 text-center">
                                <div class="icon-box effect medium center">
                                    <div class="icon"><a href="#"><i
                                                    class="fas fa-map-marker-alt "></i></a></div>
                                    <h3>Adres</h3>
                                    <p>{{$cData->contact->address}}</p>
                                    <a href="https://goo.gl/maps/VQ1vCFs47U4AUE7y5" class="link"
                                       style="float: none ;width: auto    ">HARİTADA GÖSTER</a>
                                </div>
                            </div>
                            <div class="col-lg-4  col-sm-12  text-center">
                                <div class="icon-box effect medium center">
                                    <div class="icon"><a href="tel:{{$cData->contact->phone}}"><i
                                                    class="fas fa-phone"></i></a></div>
                                    <h3>Tel</h3>
                                    <p>{{$cData->contact->phone}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-sm-12  text-center">
                                <div class="icon-box effect medium center">
                                    <div class="icon"><a href="mailto:{{$cData->contact->mail}}"><i
                                                    class="fas fa-envelope"></i></a></div>
                                    <h3>Mail</h3>
                                    <p>{{$cData->contact->mail}} <br> {{$cData->contact->mail2}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script>
        $(document).ready(function () {
            $(".carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
            });
        });
    </script>
@endsection
