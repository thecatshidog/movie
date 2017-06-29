<?php
require("e/class/connect.php");
require("e/class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();
$id=(int)$_GET['id'];
if($id>0)
{
    $r=$empire->fetch1("select id,title,youku_link,iqiyi_link,mgtv_link,letv_link,qq_link from www_92game_net_ecms_movie where id='$id' limit 1");
    $title=$r[title];
    $qq_link=$r['qq_link'];
    $iqiyi_link=$r['iqiyi_link'];
    $youku_link=$r['youku_link'];
    $letv_link=$r['letv_link'];
    $mgtv_link=$r['mgtv_link'];
    $id=$r[id];
    print <<< EOT
<!DOCTYPE html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">

<head>
    <title>$title 在线播放 - 不太灵影视</title>
    <meta name="keywords" content="$title 在线播放">
    <meta name="description" content="$title 在线播放">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://bt0.com/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://bt0.com/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://bt0.com/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://bt0.com/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://bt0.com/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://bt0.com/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://bt0.com/css/theme.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://bt0.com/css/custom.css" rel="stylesheet" type="text/css" media="all" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="http://bt0.com/favicon.ico" />

</head>
<body>
<a id="start"></a>

<div class="nav-container ">
 
<div class="bar bar--sm visible-xs">
<div class="container">
<div class="row">
<div class="col-xs-3 col-sm-2">
<a href="http://bt0.com/">
<img class="logo logo-dark" alt="logo" src="http://image.bt0.com/img/logo-dark.png">
<img class="logo logo-light" alt="logo" src="http://image.bt0.com/img/logo-light.png">
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
<div class="col-md-1 hidden-xs hidden-sm">
<div class="bar__module">
<a href="http://bt0.com/">
<img class="logo logo-dark" alt="logo" src="http://image.bt0.com/img/logo-dark.png">
<img class="logo logo-light" alt="logo" src="http://image.bt0.com/img/logo-light.png">
</a>
</div>
 
</div>
<div class="col-md-4">
<div class="bar__module" style="margin-left: 1em">
<form class="navbar-form" action="/e/search/" method="post">
<input class="form-control" type="search" placeholder="输入关键词进行搜索" name="keyboard">
<input type="hidden" name="show" value="title,ename,called,director,screenwriter,star,imdb,douban_id,awards">
<input type="hidden" name="tbname" value="movie">
<input type="hidden" name="tempid" value="1">
</form>
</div>
</div>
 
<div class="col-md-4">
<div class="bar__module">
<ul class="menu-horizontal">
<li class="dropdown">
<a href="/film-download/" target="_blank">
<span class="dropdown__trigger">看电影</span>
</a> 

 
</li>
<li class="dropdown">
<a href="/tv-download/" target="_blank">
<span class="dropdown__trigger">看电视剧</span>
</a> 

 
</li>
<li>
<a href="/torrents/" target="_blank"><span class="dropdown__trigger">种子列表</span></a>
</li>
<li>
<a href="/subs/" target="_blank"><span class="dropdown__trigger">字幕</span></a>
</li>
<li>
<a href="/reviews/" target="_blank"><span class="dropdown__trigger">影评</span></a>
</li>
</ul>
</div>
</div>
 
 
</div>
 
</div>
 
</nav>
</div>

<div class="background-overlay"></div>

<div class="main-container">

    <section class="imagebg bg--dark" style="padding-bottom: 0">

        <div class="background-image-holder" style="background: url(http://image.bt0.com/background/background4.jpg); opacity: 1;height: 700px;">
            <img alt="background" src="http://image.bt0.com/background/background4.jpg">
        </div>
<div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">

EOT;
    if ($iqiyi_link) {
        echo '<iframe width="100%" height="600px" id="iframeSon" allowTransparency="true" frameborder="0" scrolling="no" src="http://parse.bt0.com/?url=http://'.$iqiyi_link.'" name="main"></iframe>';
    }elseif ($qq_link) {
        echo '<iframe width="100%" height="600px" id="iframeSon"  allowTransparency="true" frameborder="0" scrolling="no" src="http://parse.bt0.com/?url=http://'.$qq_link.'" name="main"></iframe>';
    }elseif ($youku_link) {
        echo '<iframe width="100%" height="600px" id="iframeSon"  allowTransparency="true" frameborder="0" scrolling="no" src="http://parse.bt0.com/?url=http://'.$youku_link.'" name="main"></iframe>';
    }
    elseif ($mgtv_link) {
        echo '<iframe width="100%" height="600px" id="iframeSon"  allowTransparency="true" frameborder="0" scrolling="no" src="http://parse.bt0.com/?url=http://'.$mgtv_link.'" name="main"></iframe>';
    }elseif ($letv_link) {
        echo '<iframe width="100%" height="600px" id="iframeSon"  allowTransparency="true" frameborder="0" scrolling="no" src="http://parse.bt0.com/?url=http://'.$letv_link.'" name="main"></iframe>';
    }

    print <<< EOT
    </div>
    </div>
</div>


    </section>

    <section class="bg--dark">
        <div class="container">
            <div id="cloud-tie-wrapper" class="cloud-tie-wrapper"></div>
            <script src="https://img1.cache.netease.com/f2e/tie/yun/sdk/loader.js"></script>
            <script>
                var cloudTieConfig = {
                    url: document.location.href,
                    sourceId: "online/$id",
                    productKey: "dd1dd5814e274c2684b557fde889a188",
                    target: "cloud-tie-wrapper"
                };
                var yunManualLoad = true;
                Tie.loader("aHR0cHM6Ly9hcGkuZ2VudGllLjE2My5jb20vcGMvbGl2ZXNjcmlwdC5odG1s", true);
            </script>
        </div>
    </section>

   

</div>

<a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
    <i class="stack-interface stack-up-open-big"></i>
</a>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?da05534390cd012746f4eeed89b5fd81";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script src="http://bt0.com/js/jquery-3.1.1.min.js"></script>
<script src="http://bt0.com/js/typed.min.js"></script>
<script src="http://bt0.com/js/isotope.min.js"></script>
<script src="http://bt0.com/js/granim.min.js"></script>
<script src="http://bt0.com/js/jquery.steps.min.js"></script>
<script src="http://bt0.com/js/smooth-scroll.min.js"></script>
<script src="http://bt0.com/js/scriptsv1.js"></script>
<script src="http://bt0.com/js/lightbox.min.js"></script>


</body>
</html>
EOT;

}



db_close();
$empire=null;

?>