@php
    use App\Http\Controllers\HomepageController
@endphp
<div class="container-fluid card-tal-con">
    <div class="row">

        <div class="col-md-6 text-center">
            <a href="/referans/{{str_slug($val->title,"-")}}/{{$val->id}}.html">
                @isset($val->files[0]->file)
                    <img class="p-"
                         src="{{HomepageController::webps($val->files[0]->file,"l")}} "
                         style="height: {{$height}}px;">
                @endisset
            </a>

        </div>

        <div class="col-md-6 text-center">
            <div class="pt-2 pt-md-1">
                    <h4 class="boxtitle1">
                        <a href="/referans/{{str_slug($val->title,"-")}}/{{$val->id}}.html"
                           class="sub-title">{{$val->title}}</a>
                    </h4>
            </div>
        </div>
        <div class="col-2 col-md-6"></div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <a href="/referans/{{str_slug($val->title,"-")}}/{{$val->id}}.html" class="link">DETAYLAR</a>
        </div>
    </div>
</div>
