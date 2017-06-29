<!doctype html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">
<head>
    <meta charset="utf-8">
    <title>[!--pagetitle--] [!--mvtitle--] 字幕 - 不太灵</title>
    <meta name="description" content="[!--smalltext--]">
    <meta name="keywords" content="[!--title--],[!--mvtitle--]字幕">
    [!--temp.css--]
</head>
<body class=" ">
<a id="start"></a>
<section class="bar bar-3 bar--sm bg--secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bar__module">
                    <span class="type--fade">不太灵 | 中文影视库</span>
                </div>
            </div>
            <div class="col-md-6 text-right text-left-xs text-left-sm">
                <div class="bar__module">
                    <ul class="menu-horizontal">
                        <li class="dropdown">
                                    <span class="dropdown__trigger">
                                        <img alt="Image" class="flag" src="http://bt0.com/img/flag-1.png" />
                                    </span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-1 dropdown__content">
                                            <ul class="menu-vertical text-left">
                                                <li>
                                                    <a href="#">ENG</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" data-notification-link="side-menu">
                                <i class="stack-dot-3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<!--end bar-->
<div class="notification pos-right pos-top side-menu bg--white" data-notification-link="side-menu" data-animation="from-right">


    <div class="side-menu__module">
        <span class="type--fine-print float-left">已经是不太灵会员?</span>
        <a class="btn type--uppercase float-right" href="#">
            <span class="btn__text">立即登录</span>
        </a>
    </div>
    <!--end module-->
    <hr>
    <div class="side-menu__module">
        <ul class="list--loose list--hover">
            <li>
                <a href="#">
                    <span class="h5">关于不太灵</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="h5">站点博客</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="h5">赞助本站</span>
                </a>
            </li>
        </ul>
    </div>
    <!--end module-->
    <hr>
</div>
<div class="notification pos-top pos-right search-box bg--white border--bottom" data-animation="from-top" data-notification-link="search-box">
    <form>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <input type="search" name="query" placeholder="Type search query and hit enter" />
            </div>
        </div>
        <!--end of row-->
    </form>
</div>
<!--end of notification-->
[!--temp.menuwhite--]
<div class="main-container">
    <section class="bg--secondary">
        <div class="container">
            <div class="row">

                <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-1">
                    <article>
                        <div class="article__title text-center">
                            <h4>[!--title--]</h4>
                            <span class="tag tag-picture">[!--lang--]</span>
                            <span class="tag tag-type">[!--format--]</span>
                            <span class="tag tag-size">[!--size--]</span>
                            <span>[!--newstime--]  </span>
                        </div>
                        <!--end article title-->
                        <div class="article__body text-center">
                            <a class="btn" href="http://liubi.com/subs/[!--subfile--]">
                                    <span class="btn__text">
                                        下载字幕
                                    </span>
                            </a><br/>

                            [!--newstext--]
                        </div>

                    </article>

                </div>
                <div class="col-sm-6 col-md-3">

                    <?
                    $cr=$empire->fetch1("select * from www_92game_net_ecms_movie where douban_id = '".$navinfor[douban_id]."' limit 1");
                    ?>
                    <div class="masonry masonry-demos">
                        <div class="masonry__container masonry--active">

                            <div class="masonry__item">
                                <a href="/subject/<?=$cr[id]?>.html" class="block text-block" target="_blank">
                                    <div class="hover-shadow">
                                        <img alt="[!--mvtitle--]" src="http://image.bt0.com/photo/[!--douban_id--].jpg">
                                    </div>
                                </a>
                                <div class="text-center">
                                    <h5>[!--mvtitle--]</h5>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!--end row-->
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    [!--temp.foot--]
</div>
<!--<div class="loader"></div>-->
<a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
    <i class="stack-interface stack-up-open-big"></i>
</a>
[!--temp.js--]
</body>

</html>