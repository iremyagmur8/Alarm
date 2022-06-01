@php
    use App\Http\Controllers\HomepageController
@endphp
<div class="container-fluid card-tal-con">
    <div class="row">
        <div class="col-md-6 text-center">
            <a href="{{$link}}">
                @isset($bVal->files[0]->file)
                    <img class="p-"
                         src="{{HomepageController::webps($bVal->files[0]->file,"l")}} "
                         style="height: {{$height}}px;">
                @endisset
            </a>

        </div>

        <div class="col-md-6 ">
            <div class="pt-2 pt-md-1">
                @if(isset($title) and $title==1)
                    <h4 class="boxtitle1">
                        <a href="{{$link}}"
                           class="sub-title">{{$bVal->title}}</a>
                    </h4>
                @elseif(isset($title) and $title==2)
                    <h4 class="boxtitle2">
                        <a href="{{$link}}"
                           class="sub-title">{{$bVal->title}} </a>
                    </h4>
                @elseif(isset($title) and $title==3)
                    <h4 class="boxtitle3">
                        <a href="{{$link}}"
                           class="sub-title">{{$bVal->title}}</a>
                    </h4>
                @else
                    <h2>
                        <a href="{{$link}}"
                           class="sub-title">{{$bVal->title}}</a>
                    </h2>
                @endif
                @if(!isset($desc))
                    <p style="height: 92px;margin-top:15px;display: inline-block;width: 250px">{{$bVal->shortdescription}}</p>
                @endif
            </div>
        </div>
        <div class="col-2 col-md-6"></div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <a href="{{$link}}" class="link" >DETAYLAR</a>
        </div>
    </div>
</div>
