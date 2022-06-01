<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="@yield('desc')">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/site.webmanifest">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>@yield('title') Alarm Yangın</title>
    <!-- Stylesheets & Fonts -->
    <link href="/assetWeb/polo/css/plugins.css" rel="stylesheet">
    <link href="/assetWeb/polo/css/style.css" rel="stylesheet">
    <!-- Template color -->
    <link href="/assetWeb/polo/css/color-variations/purple.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/custom.css?v={{rand(0,999)}}" rel="stylesheet">
    <script src="/assetWeb/polo/js/jquery.js"></script>
    @isset($amp)
        <link rel="amphtml" href="{{$amp}}"/> @endisset

</head>

<body>


<!-- Body Inner -->
<div class="body-inner">
    <header id="header" class="header-modern submenu-light">
        <div class="header-inner">
            <div class="container">

                <div id="logo">
                    <a href="/">
                        <span class="logo-default"><img src="/images/logo.png"></span>
                        <span class="logo-dark"><img src="/images/logo.png"></span>
                    </a>
                </div>


                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>

                <div id="mainMenu">

                    <div class="container">

                        <nav>

                            <ul>
                                @isset( $vars->menu)
                                    @if(count($vars->menu)>0)

                                        @foreach($vars->menu as $key=>$val)


                                            <li @if(count($val->childs)>0) class="dropdown" @endif>
                                                @if($val->title == "KURUMSAL")
                                                    <a href="#">{{$val->title}}</a>
                                                @else
                                                    <a href="@if($val->link){{$val->link}}@else{{"/".str_slug($val->title,"-")."/".$val->id.".htm"}}@endif">{{$val->title}}</a>

                                                @endif
                                                @if(count($val->childs)>0)
                                                    @if($val->title == "KURUMSAL")
                                                        <ul class="dropdown-menu">
                                                            @foreach($val->childs as $xKey=>$cVal)
                                                                <li>
                                                                    <a href="@if($cVal->link){{$cVal->link}}@else{{"/".str_slug($cVal->title,"-")."/".$cVal->id.".htm"}}@endif">{{$cVal->title}}</a>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    @endif
                                            </li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endisset

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield("content")

<!-- Footer -->
    <footer id="footer">

        <div class="copyright-content">
            <div class="container">
                <div class="copyright-text text-center">&copy; 2021 Alarm Yangın.<a href="#"
                                                                                    target="_blank"
                                                                                    rel="noopener"> </a></div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->

</div>
<!-- end: Body Inner -->

<div id="cookieNotify" class="modal-strip cookie-notify background-dark" data-delay="1000" data-expire="1"
     data-cookie-name="cookiebar2020_1" data-cookie-enabled="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-sm-center sm-center sm-m-b-10 m-t-5">
                Ziyaretiniz sırasında kişisel verileriniz siteyi kullanımınızı analiz etmek amacıyla çerezler
                aracılığıyla işlenmektedir. Daha fazla bilgi için Çerez Aydınlatma Metni’ni okuyabilirsiniz.
            </div>
            <div class="col-lg-4 text-right sm-text-center sm-center">

                <button type="button" class="btn btn-rounded btn-light btn-sm modal-confirm">Anladım. Kabul ediyorum
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->

<script src="/assetWeb/polo/js/plugins.js"></script>

<!--Template functions-->
<script src="/assetWeb/polo/js/functions.js"></script>

<!--Template functions-->
<script src="/js/solaris.js"></script>

</body>

</html>
