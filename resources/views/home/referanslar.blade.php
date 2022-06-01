@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')

    @php
        use App\Http\Controllers\HomepageController
    @endphp


    <section id="page-content" class="background-grey" style="padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area ">
                        <h5>REFERANSLAR</h5>
                        <span >ALARM ÜRÜN YELPAZESİ</span>
                        <p>Her gün değişen ihtiyaçlar doğrultusunda ürün yelpazemiz değişmekte ve genişlemektedir. Kullanım amacına uygun ve doğru ürünü seçerken, uzmanlarımıza danışabilirsiniz.</p>
                    </div>
                </div>
                <div class="content col-md-12">
                    <div class="row">
                        @foreach($cData->referanslar as $key=>$val)
                            <div class="col-md-6 card-tal mb-5">
                                @include("inc.referanceBox",['$val'=>$val,"title"=>1,"height"=>200])
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
