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
                                    <?if ($navinfor[douban_id]){?>
                                    <span class="tiny-title"><img style="border-radius:10px " alt="[!--title--]" src="https://www.bt0.com/photo/[!--douban_id--].jpg">

                                    <?}else {?>

                                        <span class="tiny-title"><img style="border-radius:10px " alt="[!--title--]" src="[!--photo_remote--].jpg">

                                    <?}
                                    ?>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom:2em">
                    <span style="font-size: 2em;font-weight: 700;color:#be997f;display: block;margin-bottom: .5em">[!--title--]</span>
                    <?if ($navinfor[type]){?><span class="tiny-title">类型: [!--type--]</span><?}?>
                    <?if ($navinfor[area]){?><span  class="tiny-title">上映地区: [!--area--]</span><?}?>
                    <?if ($navinfor[year]){?> <span  class="tiny-title">上映年份: [!--year--]</span><?}?>
                    <?if ($navinfor[episodes]){?> <span  class="tiny-title">集数: [!--episodes--]</span><?}?>

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
                            $num = $x+1;

                        echo '<a class="btn btn--icon" href=http://parse.bt0.com/?url='.$siteArray[$x].' target="_blank"><span class="btn__text"><i class="socicon socicon-youtube"></i>播放源'.$num.'</span></a>';

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
                    sourceId: "bqiyi/[!--id--]",
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


</body>
</html>