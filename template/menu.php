<div class="nav-container ">

    <div class="bar bar--sm visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-2">
                    <a href="/">
                        <img class="logo logo-dark" alt="logo" src="//cdn.bt0.com/images/logo-dark.png"/>
                        <img class="logo logo-light" alt="logo" src="//cdn.bt0.com/images/logo-light.png"/>
                    </a>
                </div>
                <div class="col-xs-9 col-sm-10 text-right">
                    <a href="#" class="hamburger-toggle toggled-class" data-toggle-class="#menu2;hidden-xs hidden-sm">
                        <i class="icon icon--sm stack-interface stack-menu"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <nav class="bar bar-2 hidden-xs bar--absolute bar--transparent" id="menu2">
        <div class="container">
            <div class="row">
                <div class="col-md-2 hidden-xs hidden-sm">
                    <div class="bar__module">
                        <a href="/">
                            <img class="logo logo-dark" alt="logo" src="//cdn.bt0.com/images/logo-dark.png"/>
                            <img class="logo logo-light" alt="logo" src="//cdn.bt0.com/images/logo-light.png"/>
                        </a>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="bar__module">
                        <ul class="menu-horizontal">
                            <li class="dropdown">
                                <a href="/film-download/" target="_blank"><span class="dropdown__trigger">电影下载</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="/tv-download/" target="_blank"><span class="dropdown__trigger">电视剧下载</span></a>
                            </li>

                            <li>
                                <a href="#" data-notification-link="search-box">
                                    <i class="stack-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </nav>
    <div class="notification pos-top pos-right search-box bg--semi border--bottom" data-animation="from-top" data-notification-link="search-box">
        <form action="<?=$public_r['newsurl']?>e/search/" method="post">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 navbar-form">
                    <input class="form-control" type="search" name="keyboard" placeholder="输入关键词并按下Enter键搜索 电影条目" />
                    <input type="hidden" name="show" value="title,ename,called,director,screenwriter,star,imdb,douban_id,awards">
                    <input type="hidden" name="classid" value="1,3">
                    <input type="hidden" name="tbname" value="movie">
                    <input type="hidden" name="tempid" value="1">
                    <input type="hidden" name="orderby" value="onclick">
                </div>
            </div>
            <!--end of row-->
        </form>
    </div>
</div>