<?
$page=(int)$_GET['page'];
?>
<!doctype html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">
<head>
    <meta charset="utf-8">
    <title>[!--pagetitle--] - 不太灵影视</title>
    <meta name="description" content="[!--class.intro--]">
    <meta name="keywords" content="[!--class.keywords--]">
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
                                        <img alt="Image" class="flag" src="http://www.bt0.com/img/flag-1.png" />
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
    <section class="space--sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="masonry">

                        <div class="row">
                            <div class="masonry__container">


                                [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]



                            </div>
                            <!--end of masonry container-->
                        </div>
                        <!--end row-->
                        <div class="pagination" style="margin-bottom:3em;">
                                    <?php

                                    $pre=$page - 1;
                                    $next=$page + 1;

                                    if ($page>0) {
                                        ?>
                                        <div class="col-xs-6 text-left">
                                            <a class="type--fine-print" href="/reviews/<?=$pre?>.html"><< 上一页</a>
                                        </div>

                                        <div class="col-xs-6 text-right">
                                            <a class="type--fine-print" href="/reviews/<?=$next?>.html">下一页 >></a>
                                        </div>

                                    <?}
                                    ?>
                            <?php
                            if ($page=='0') {
                            ?>
                            <div class="col-xs-12 text-center">
                                <a class="type--fine-print" href="/reviews/<?=$next?>.html">下一页 >></a>
                            </div>

                            <?}
                            ?>

                        </div>
                    </div>
                    <!--end masonry-->
                </div>
            </div>
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