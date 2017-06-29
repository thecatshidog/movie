<?
$page=(int)$_GET['page'];
?>
<!doctype html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">
<head>
    <meta charset="utf-8">
    <title>[!--pagetitle--] 的影评搜索结果</title>
    <meta name="description" content="[!--class.intro--]">
    <meta name="keywords" content="[!--class.keywords--]">
    [!--temp.css--]
</head>
<body>
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
    <section class="space--sm bg--secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><h2>找到 <span class="type--bold" style="color: #4a90e2">[!--ecms.num--]</span> 条 关键词为 <span class="type--bold" style="color: #4a90e2">[!--keyboard--]</span> 的torrent条目</h2></div>

                <div class="col-md-12">


                    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]


                    <div class="container text-center">
                        <div class="pagination">
                            <ul class='tsc_pagination tsc_paginationA tsc_paginationA06'>
                                [!--show.page--]
                            </ul>
                        </div>
                    </div>
                </div>

                        <!--end of masonry container-->




            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    [!--temp.foot--]
</div>
<!--<div class="loader"></div>-->

[!--temp.js--]
</body>

</html>