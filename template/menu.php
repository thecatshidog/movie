<div class="nav-container ">
    <!--moblie menu-->
    <div class="bar bar--sm visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-2">
                    <a href="http://bt0.com/">
                        <img class="logo logo-dark" alt="logo" src="http://image.bt0.com/img/logo-dark.png" />
                        <img class="logo logo-light" alt="logo" src="http://image.bt0.com/img/logo-light.png" />
                    </a>
                </div>
                <div class="col-xs-9 col-sm-10 text-right">
                    <a href="#" class="hamburger-toggle toggled-class" data-toggle-class="#menu2;hidden-xs hidden-sm">
                        <i class="icon icon--sm stack-interface stack-menu"></i>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </div>
    <!--end bar-->
    <nav class="bar bar-2 hidden-xs bar--absolute" id="menu2">
        <div class="container">
            <div class="row">
                <div class="col-md-1 hidden-xs hidden-sm">
                    <div class="bar__module">
                        <a href="http://bt0.com/">
                            <img class="logo logo-dark" alt="logo" src="http://image.bt0.com/img/logo-dark.png" />
                            <img class="logo logo-light" alt="logo" src="http://image.bt0.com/img/logo-light.png" />
                        </a>
                    </div>
                    <!--end module-->
                </div>
                <div class="col-md-4">
                    <div class="bar__module">

                        <form class="navbar-form" action="<?=$public_r['newsurl']?>e/search/" method="post">
                            <input class="form-control" type="search" placeholder="影片搜索" name="keyboard">
                            <input type="hidden" name="show" value="title,ename,called,director,screenwriter,star,imdb,douban_id,awards">
                            <input type="hidden" name="tbname" value="movie">
                            <input type="hidden" name="tempid" value="1">
                            <input type="hidden" name="orderby" value="onclick">
                        </form>
                    </div>
                </div>
                <!--end columns-->
                <div class="col-md-6">
                    <div class="bar__module">
                        <ul class="menu-horizontal">

                            <li class="dropdown">
                                <a href="/film-download/" target="_blank"><span class="dropdown__trigger">电影下载</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="/tv-download/" target="_blank"><span class="dropdown__trigger">电视剧下载</span></a>
                            </li>
                            <li >
                                <a href="/torrents/" target="_blank"><span class="dropdown__trigger">种子列表</span></a>

                            </li>
                            <li >
                                <a href="/subs/" target="_blank"><span class="dropdown__trigger">字幕</span></a>

                            </li>
                            <li >
                                <a href="/reviews/" target="_blank"><span class="dropdown__trigger">影评</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="/btubes/" target="_blank"><span class="dropdown__trigger">在线电视剧</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end columns-->

                <!--end columns-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </nav>
</div>