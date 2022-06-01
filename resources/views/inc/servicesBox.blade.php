<div class="row team-members team-members-shadow m-b-40 services">
    @foreach($cData->hizmetlerimiz as $key=>$val)
        <div class="col-lg-3 px-2">
            <div class="team-member"
                 onclick="location.href='/hizmetlerimiz/{{str_slug($val->title,"-")}}/{{$val->id}}';">
                <div class="team-image">
                    <div
                        style="background: url('{{Storage::url("images/userfiles/". $val->files[0]->file)}}') center center no-repeat;background-size: cover; height:230px">
                    </div>
                </div>
                <div class="team-desc p-3">
                    <h3>{!! $val->title !!}</h3>
                    <p style="overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;">{!! $val->shortdescription !!} </p>
                    <a href="/hizmetlerimiz/{{str_slug($val->title,"-")}}/{{$val->id}}"
                       class="item-link">Devamını Oku <i class="icon-chevron-right"></i></a>
                </div>
            </div>
        </div>
    @endforeach
</div>
