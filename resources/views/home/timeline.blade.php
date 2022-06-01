@extends('layouts.app')
@section('title','')
@section('desc')
@section('content')


    @php
        use App\Http\Controllers\HomepageController
    @endphp
    <div class="heading-text heading-line text-center">
        <h2 class="display-1 text-center"><span>Tarihçe</span></h2>
    </div>
    <section class="history">

        <ul>
            @foreach($cData->history as $key=>$val)
                <li>
                    <div class="history-inf">
                        <time>{{$val->title}}</time>
                        @if(isset($val->files[0]->file) and isset($val->files[1]->file) and isset($val->files[2]->file) )
                            <div
                                class="portfolio-item light-bg no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign p-0 m-0">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-slider">
                                        <div class="carousel dots-inside dots-dark arrows-dark" data-items="1"
                                             data-loop="true" data-autoplay="true" data-animate-in="fadeIn"
                                             data-animate-out="fadeOut" data-autoplay="1500">
                                            <div class="containImg"
                                                style="background-image:url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}'); "></div>
                                            <div class="containImg"
                                                style="background-image:url('{{Storage::url("images/userfiles/". $val->files[1]->file)}}'); "></div>
                                            <div class="containImg"
                                                style="background-image:url('{{Storage::url("images/userfiles/". $val->files[2]->file)}}'); "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif(isset($val->files[0]->file) and isset($val->files[1]->file) )
                            <div
                                class="portfolio-item light-bg no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign p-0 m-0">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-slider">
                                        <div class="carousel dots-inside dots-dark arrows-dark" data-items="1"
                                             data-loop="true" data-autoplay="true" data-animate-in="fadeIn"
                                             data-animate-out="fadeOut" data-autoplay="1500">
                                            <div class="containImg"  style="background-image:url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}'); "></div>
                                            <div class="containImg" style="background-image:url('{{Storage::url("images/userfiles/". $val->files[1]->file)}}'); "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif(isset($val->files[0]->file))
                            <div class="containImg"  style="background-image:url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}');"></div>
                        @endif
                        <br>
                        <span>{!! $val->description !!}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    <script src="/js/timeline.js">

    </script>

@endsection
