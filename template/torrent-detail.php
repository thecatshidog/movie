<!DOCTYPE html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">

<head>
    <title>[!--pagetitle--] 资源下载 不太灵影视</title>
    <meta name="description" content="[!--pagedes--]">
    [!--temp.css--]
</head>
<body>
<a id="start"></a>
[!--temp.menu--]
<div class="background-overlay"></div>

<div class="main-container">

    <section class="imagebg bg--dark hidden-sm hidden-xs" style="padding-bottom: 0">

        <div class="background-image-holder" style="background: url(http://image.bt0.com/background/background18.jpg); opacity: 1;height: 700px;">
            <img alt="background" src="http://image.bt0.com/background/background18.jpg">
        </div>

        <div class="container" id="movie-content" itemscope itemtype="http://schema.org/Movie">

            <div id="movie-info" class="row" style="padding-bottom: 3em;">


                <div class="col-md-12" style="margin-top: 2em;margin-bottom: 3em;">
                    <h3>[!--title--]</h3>
                    <span style="background-color: #8E44AD;color: #eee;margin-right: 1em;padding: 0.5em;border-radius: 1em;">[!--size--]</span>
                    <span style="background-color: #2f353b;color: #eee;margin-right: 1em;padding: 0.5em;border-radius: 1em;">[!--picture--]</span>
                    <span style="background-color: #67809F;color: #eee;margin-right: 1em;padding: 0.5em;border-radius: 1em;">[!--newstime--]</span>
                    <a class="btn bg--googleplus" href="[!--magnet--]">
                        <span class="btn__text">磁力链接</span>
                    </a>
                    <?php
                    if($navinfor[bt])
                    {
                        ?>
                        <a class="btn bg--primary" href="/download/[!--id--].html">
                            <span class="btn__text">下载种子</span>
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-12">

                        <div class="row">

                                    <?
                                    $cr=$empire->fetch1("select id,title,douban_id,year,score,summary from www_92game_net_ecms_movie where douban_id = '".$navinfor[douban_id]."'  limit 1");
                                    ?>
                            <div class="masonry masonry-demos col-md-4">
                                    <?php if ($cr) {
                                        ?>

                                         <div class="masonry__container masonry--active">

                                             <div class="masonry__item">
                                                 <a href="/subject/<?=$cr[id]?>.html" class="block text-block" target="_blank">
                                                     <div class="hover-shadow">
                                                         <img alt="<?=$cr[title]?> (<?=$cr[year]?>" src="http://image.bt0.com/photo/<?=$cr[douban_id]?>.jpg">
                                                     </div>
                                                 </a>
                                             </div>

                                         </div>


                                   <?php
                                     }
                                    ?>
                            </div>


                                     <div class="masonry__item col-md-8 boxed" style="background: #1a151c;">
                                         <span style="font-size: 2em;font-weight: 700;color:#be997f;display: block;margin-bottom: .5em"><?=$cr[title]?></span>
                                         <span class="tiny-title">豆瓣评分: <span style="font-size: 2em;font-weight: 700;color:#fc9b35;"><?=$cr[score]?></span></span>
                                         <article class="information-text"><?=$cr[summary]?></article>
                                         <hr/>
                                <div class="tinfo">
                                    <span class="tiny-title">种子文件信息:</span>
                                    <ul class="fileTree treeview" style="color:#8e6560;">
                                        [!--xinxi--]
                                    </ul>
                                </div>


                            </div>
                            </div>

                    </div>

                </div>



            </div>

        </div>

    </section>


    <section class="bg--dark" style="position: relative;z-index: 9;padding-top: 2em">
        <div class="container">
            <div class="col-md-12 hidden-sm hidden-xs">
                <h3 class="text-center type--bold">相关资源</h3>
                <table cellpadding="0" cellspacing="0" class="data" style="width: 100%;border: 1px solid #666;">
                    <tbody><tr class="firstr">
                    </tr>
                    <?php
                    $i=0;
                    if ($navinfor[douban_id]!=='') {
                    $newbook=$empire->query("select * from www_92game_net_ecms_torrent  where (douban_id = '".$navinfor[douban_id]."' and id != '".$navinfor[id]."') order by picture,title desc");

                        while($r=$empire->fetch($newbook)) {
                        $i=$i+1;
                        ?>
                        <tr class="<?if($i%2==1){?>odd<?}else{?>even<?}?>">
                            <td class="nobr">
                                <a href="/torrent/<?=$r[id]?>.html" class="torrent-title" style="color: #3f96ec;" target="_blank"><?=$r[title]?></a>

                            </td>
                            <td ><span class="tag-sm tag-size"><?=$r[size]?></span></td>
                        </tr>
                            <?php
                    }
                    ?>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

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
                    sourceId: "torrent/[!--id--]",
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
<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>

<script type="text/javascript" src="/Public/static/jquery.treeview.js"></script>
<script type="text/javascript">
    $(function(){
        $(".fileTree").treeview();
    })
</script>

</body>
</html>