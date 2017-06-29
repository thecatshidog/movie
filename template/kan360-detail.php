<!DOCTYPE html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">

<head>
    <title>[!--pagetitle--] 在线播放 不太灵影视</title>
    <meta name="keywords" content="[!--keywords--]">
    <meta name="description" content="[!--description--]">
    [!--temp.css--]
</head>
<body>
<a id="start"></a>
[!--temp.menu--]

<div class="main-container">

    <section class="imagebg bg--dark" style="padding-bottom: 3em">


        <div class="container" style="margin-top: 3em;">
            <div class="row">
                <div class="col-md-4">
                    <div class="masonry masonry-demos">
                        <div class="masonry__container masonry--active">

                            <div class="masonry__item">
                                <div>
                                    <img style="border-radius:10px " alt="[!--title--]" src="[!--photo_remote--]">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom:2em">
                    <span style="font-size: 2em;font-weight: 700;color:#be997f;display: block;margin-bottom: .5em">[!--title--]</span>
                    <?if ($navinfor[type]){?><span class="tiny-title">类型: [!--type--]</span><?}?>
                    <?if ($navinfor[area]){?><span  class="tiny-title">上映地区: [!--area--]</span><?}?>
                    <?if ($navinfor[episodes]){?> <span  class="tiny-title">集数: [!--episodes--]</span><?}?>
                    <?if ($navinfor[douban_id]){?> <span  class="tiny-title" style="font-weight: bold">豆瓣号: [!--douban_id--]</span><?}?>
                </div>
                <div class="col-md-4">
                    <span style="font-size: 2em;font-weight: 700;color:#907e91;margin-bottom: .5em;display: block">剧情:</span><article class="information-text"><span>[!--summary--]</span></article>
                </div>

            </div>
        </div>


    </section>
<style>
    .js-tab a {
        width: 3em;
        text-align: center;
        padding: 0.3em 0.8em;
        border: 1px solid #efe;
        margin: 0.5em;
        display: block;
        float: left;
        border-radius: 4px;
    }
</style>
    <section class="bg--dark">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 boxed bg--secondary">
                    <ul class="accordion accordion-1">
                        <?php
                        $r=$empire->fetch1("select tid,cat,site from www_92game_net_ecms_watch where id='$navinfor[id]' limit 1");
                        $id=$r[tid];
                        $siteArray=explode(",",$navinfor[site]);

                        for($x=0;$x<count($siteArray);$x++) {



                            $ch = curl_init();
                            //设置选项，包括URL
                            curl_setopt($ch, CURLOPT_URL, "http://www.360kan.com/cover/switchsite?site=$siteArray[$x]&id=$id&category=2");
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_HEADER, 0);
                            $output = json_decode(curl_exec($ch), true);

                            //释放curl句柄
                            curl_close($ch);
                            //打印获得的数据

//去掉一些字符信息
                            /*    function trimData ($d) {
                                    $d =str_replace('?cxid=90f0zbamf','',$d);
                                    $d =str_replace('?tpa=dW5pb25faWQ9MTAyMjEzXzEwMDAwNl8wMV8wMQ&from=360sousuo&refer=360sousuo','',$d);
                                    $d =str_replace('?ptag=360kan.tv.free','',$d);
                                    $d =str_replace('style="opacity:0;"',"",$d);
                                    $d =str_replace('<a target="_self" class="all js-show-init" href="#" title="收起">收起</a>',"",$d);
                                    $d =str_replace('<a target="_self" class="all js-show-all" href="#" title="展开">......</a>',"",$d);
                                    $d =str_replace('?txid=4e4df35dda9d8ed32c874b1ad590ef59',"",$d);
                                    $d =str_replace('http://','http://canfei.com/?url=http://',$d);
                                    return $d;
                                }*/

                            $siteName = str_replace('qq',"腾讯视频",$siteArray);
                            $siteName = str_replace('imgo',"芒果TV",$siteName);
                            $siteName = str_replace('youku',"优酷视频",$siteName);
                            $siteName = str_replace('levp',"乐视视频",$siteName);
                            $siteName = str_replace('sohu',"搜狐视频",$siteName);
                            $siteName = str_replace('qiyi',"爱奇艺视频",$siteName);
                            $siteName = str_replace('leshi',"乐视影业",$siteName);
                            $siteName = str_replace('huashu',"华数TV",$siteName);
                            $siteName = str_replace('xunlei',"迅雷看看",$siteName);
                            $siteName = str_replace('tudou',"土豆视频",$siteName);



                            $toPrtint = str_replace('style="opacity:0;"',"",$output[data]);
                            $toPrtint = str_replace('全部剧集',"",$toPrtint);
                            $toPrtint = str_replace('http://','http://parse.bt0.com/?url=http://',$toPrtint);
                            $toPrtint = str_replace('<a target="_self" class="all js-show-init" href="#" title="收起">收起</a>',"",$toPrtint);
                            $toPrtint = str_replace('<a target="_self" class="all js-show-all" href="#" title="展开">......</a>',"",$toPrtint);
                            $toPrtint = str_replace('href=','target="_black" href=',$toPrtint);
                            $toPrtint = str_replace('?tpa=dW5pb25faWQ9MTAyMjEzXzEwMDAwNl8wMV8wMQ&from=360sousuo&refer=360sousuo',"",$toPrtint);
                            $toPrtint = str_replace('?cxid=90f0zbamf',"",$toPrtint);
                            $toPrtint = str_replace('?vfm=f_191_360y',"",$toPrtint);
                            $toPrtint = str_replace('?ptag=360kan.tv.free',"",$toPrtint);
                            $toPrtint = str_replace('?txid=4e4df35dda9d8ed32c874b1ad590ef59',"",$toPrtint);




                            echo '<li>';
                            echo '<div class="accordion__title"><span class="h5">'."$siteName[$x]".'</span></div>';
                            print '<div class="accordion__content">'."$toPrtint".'</div>';
                            echo '</li>';

                        }
                        ?>
                    </ul>
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
                    sourceId: "btube/[!--id--]",
                    productKey: "dd1dd5814e274c2684b557fde889a188",
                    target: "cloud-tie-wrapper"
                };
                var yunManualLoad = true;
                Tie.loader("aHR0cHM6Ly9hcGkuZ2VudGllLjE2My5jb20vcGMvbGl2ZXNjcmlwdC5odG1s", true);
            </script>
        </div>
    </section>

    [!--temp.foot--]

</div>

[!--temp.js--]
<script>
    $(document).ready(function () {
        var acc = document.querySelector(".accordion");
        acc.firstElementChild.className = "active";
    });

</script>

</body>
</html>