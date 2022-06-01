@extends('layouts.app')
@section('title','')
@section('desc')
@section('content')



    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title-area ">
                        <h5><a href="">ÜRÜNLER</a> <img class="arrow2" src="/images/arrow-detail.svg" alt="" title="">
                            <a href="">{{$cData->product[0]->title}}</a></h5>
                        <span>{{$cData->product[0]->title}}</span>
                        @if(isset($cData->product[0]->description ))
                            <p>{!! $cData->product[0]->description !!}</p>
                        @endif
                    </div>
                </div>
                @foreach ($cData->product as $key=>$val)
                    @if($loop->iteration == 1)
                        <div class="col-md-12 mt-5 ">
                            <div class="row">
                                @if(isset($val->files[0]->file))
                                    <div class="col-md-7 text-left">
                                        <div class="cd-product cd-container">
                                            <div class="cd-product-wrapper">
                                                <img src="{{Storage::url("images/userfiles/".$val->files[0]->file)}}">
                                                <ul>
                                                    @foreach($cData->productimages as $pKey => $pVal)
                                                        <li class="cd-single-point"
                                                            style="top:{{$pVal->topside}}px;left:{{$pVal->leftside}}px;">
                                                            <a class="cd-img-replace">More</a>
                                                            <div class="cd-more-info cd-right">
                                                                <div
                                                                    style="background-image:url('{{Storage::url("images/userfiles/". $pVal->files[0]->file)}}'); background-repeat: no-repeat; height: 120px; margin-bottom:10px;background-position: center center; background-size: contain
                                                                        "></div>
                                                                <h2>{!! $pVal->title !!}</h2>
                                                                <ul class="list-icon list-icon-check list-icon-colored mt-2">
                                                                    {!! $pVal->description !!}
                                                                </ul>
                                                                <a class="cd-close-info cd-img-replace">Close</a>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="accordion accordion-simple">
                                            @if(isset( $val->features ))
                                                <div class="ac-item">
                                                    <h5 class="ac-title"><i class="fas fa-long-arrow-alt-right"></i>GENEL
                                                        ÖZELLİKLER</h5>
                                                    <div class="ac-content">
                                                        <p>{!! $val->features !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset( $val->details ))

                                                <div class="ac-item">
                                                    <h5 class="ac-title"><i class="fas fa-long-arrow-alt-right"></i>
                                                        DETAYLI
                                                        BİLGİLER</h5>
                                                    <div class="ac-content">
                                                        <p>{!! $val->details !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(isset( $val->infos ))
                                                <div class="ac-item">
                                                    <h5 class="ac-title"><i class="fas fa-long-arrow-alt-right"></i>TEKNİK
                                                        BİLGİLER</h5>
                                                    <div class="ac-content">
                                                        <p>{!! $val->infos !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                            @isset($val->files)
                                                @if(count($val->files) > 1)
                                                    <div class="ac-item">
                                                        <h5 class="ac-title"><i class="fas fa-long-arrow-alt-right"></i>GALERİ
                                                        </h5>
                                                        <div class="ac-content">
                                                            <p>
                                                            @foreach($val->files as $fKey=>$fVal)
                                                                @if (!$loop->first)

                                                                    <div
                                                                        class="portfolio-item img-zoom ct-photography ct-marketing ct-media"
                                                                        style="width: 50%;">
                                                                        <div class="portfolio-item-wrap">
                                                                            <div class="portfolio-image">
                                                                                <a href="#"><img style="height: 180px"
                                                                                                 src="{{Storage::url("images/userfiles/".$fVal->file)}}"
                                                                                                 alt=""></a>
                                                                            </div>
                                                                            <div class="portfolio-description">
                                                                                <a
                                                                                    data-lightbox="image"
                                                                                    href="{{Storage::url("images/userfiles/".$fVal->file)}}"><i
                                                                                        class="icon-maximize"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    @endif
                                                                    @endforeach
                                                                    </p>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endisset
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="col-md-12">
                            <div class="sub-pro">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="sub-pro-title">{{$val->title}}</p>
                                    </div>
                                    <div class="col-md-2 col-sm-12 sub-pro-grid">
                                        @isset($val->files)
                                            @php
                                                $resimisim = explode(",",$val->urunfoto); $resimrenk = explode(",",$val->urunrenk);
                                            @endphp
                                            @if(count($val->files) > 1)
                                                @foreach($val->files as $Ckey=>$Cval)
                                                    <div
                                                        class="portfolio-item ct-photography ct-marketing ct-media"
                                                    >
                                                        <div class="portfolio-item-wrap">
                                                            <div class="portfolio-image">
                                                                <div
                                                                    class="resimler{{$val->id}} @isset($resimisim[$loop->index]){{str_slug($resimisim[$loop->index],"-")}}-{{$val->id}}@endisset"
                                                                    @if($loop->index>0) style="display: none" @endif>
                                                                    <img
                                                                        style="width: 100%"
                                                                        src="{{Storage::url("images/userfiles/".$Cval->file)}}">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            @endif
                                        @endisset

                                        @foreach($resimisim as $keyres=>$keyval)
                                            <a class="urunFotoAdi"
                                               onclick="$('.resimler{{$val->id}}').hide(); $('.{{str_slug($keyval,"-")}}-{{$val->id}}').show();"
                                            >
                                                <div class="urunFotoDetay"
                                                     style="@isset($resimrenk[$loop->index]) background-color:{{$resimrenk[$loop->index]}}; @endisset "></div>
                                                <div></div>
                                                {{$keyval}}
                                            </a>
                                    @endforeach


                                    <!--
                                        <div
                                            class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign"
                                            style="width: 50%">
                                            <div class="portfolio-item-wrap">
                                                <div class="portfolio-slider">
                                                    <div class="carousel dots-inside dots-dark arrows-dark"
                                                         data-items="1" data-loop="true" data-autoplay="true"
                                                         data-animate-in="fadeIn" data-animate-out="fadeOut"
                                                         data-autoplay="1500">
                                                        @isset($val->files)
                                        @php
                                            $resimisim = explode(",",$val->urunfoto);
                                        @endphp
                                        @if(count($val->files) > 1)
                                            @foreach($val->files as $Ckey=>$Cval)
                                                <a href="#"> <img src="{{Storage::url("images/userfiles/".$Cval->file)}}">@isset($resimisim[$loop->index])<br>{{$resimisim[$loop->index]}}@endisset</a>

                                                                @endforeach
                                        @endif
                                    @endisset
                                        </div>
                                    </div>
                                </div>
                            </div>
-->
                                    </div>
                                    <div class="col-md-9 offset-lg-1">
                                        @if(isset( $val->description ))
                                            <div class="table table-striped"> {!! $val->description !!}</div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="accordion subOpenInfos accordion-simple  m-0">
                                @if(isset( $val->openinfos ))
                                    <div class="ac-item">
                                        <h3 class="ac-title"><i
                                                class="fas fa-long-arrow-alt-right"></i>{!! $val->openinfostitle !!}
                                        </h3>
                                        <div class="ac-content list-content">
                                            <p>{!! $val->openinfos !!}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <script src="/js/hotspot.js"></script>

@endsection
