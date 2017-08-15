<?
$type=(int)$_GET['type'];
$area=(int)$_GET['area'];
$year=(int)$_GET['year'];
$orderby=(int)$_GET['orderby'];
$page=(int)$_GET['page'];
?>

<!DOCTYPE html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">

<head>
    <title>[!--pagetitle--] - bttt.gq</title>
    <meta name="description" content="[!--class.intro--]">
    <meta name="keywords" content="[!--class.keywords--]">
    [!--temp.css--]
</head>
<body>
<a id="start"></a>
[!--temp.menu--]

<div class="background-overlay  hidden-xs hidden-sm"></div>
<div class="main-container">

    <section class="imagebg bg--dark" style="padding-bottom: 3em">

        <div class="background-image-holder" style="background: url(https://bttt.gq/background/background26.jpg); opacity: 1;height: 700px;">
            <img alt="background" src="https://bttt.gq/background/background26.jpg">
        </div>
        <!--end of container-->

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12  hidden-sm hidden-xs" style="margin-bottom: 2em;background: rgba(37, 37, 37, 0.32);border-radius: 10px;">
                    <div class="container">
                        <div class="row">

                                    <div class="jumbotron masthead">

                                            <div class="typebox">
                                                <dl class="prel hidden-sm hidden-xs">
                                                    <dt>影视类型:</dt>
                                                    <dd>
                                                        <a href="/film-download/1-0-<?=$area?>-<?=$year?>-<?=$orderby?>-0.html" <? if ($type==0){?>class="tag-sm tag-type"<?}?>>不限</a>
                                                        <?
                                                        $exp=explode(",",$public_r['add_www_92game_net_type']);
                                                        $count=count($exp);
                                                        for($i=0;$i<$count;$i++)
                                                        {?>
                                                            <a href="/film-download/1-<?=$i+1?>-<?=$area?>-<?=$year?>-<?=$orderby?>-0.html" <? if ($type==$i+1){?>class="tag-sm tag-type"<?}?>><?=$exp[$i]?></a>
                                                            <?
                                                        }
                                                        ?>
                                                    </dd>
                                                </dl>

                                                <dl class="prel hidden-sm hidden-xs">
                                                    <dt>制片地区:</dt>
                                                    <dd>
                                                        <a href="/film-download/1-<?=$type?>-0-<?=$year?>-<?=$orderby?>-0.html" <? if ($area==0){?>class="tag-sm bg--primary"<?}?>>不限</a>
                                                        <?
                                                        $exp=explode(",",$public_r['add_www_92game_net_area']);
                                                        $count=count($exp);
                                                        for($i=0;$i<$count;$i++)
                                                        {?>
                                                            <a href="/film-download/1-<?=$type?>-<?=$i+1?>-<?=$year?>-<?=$orderby?>-0.html" <? if ($area==$i+1){?>class="tag-sm bg--primary"<?}?>><?=$exp[$i]?></a>
                                                            <?
                                                        }
                                                        ?>
                                                    </dd>
                                                </dl>

                                                <dl class="prel hidden-sm hidden-xs">
                                                    <dt>上映年份:</dt>
                                                    <dd>
                                                        <a href="/film-download/1-<?=$type?>-<?=$area?>-0-<?=$orderby?>-0.html" <? if ($year==0){?>class="tag-sm tag-size"<?}?>>不限</a>
                                                        <?
                                                        $exp=explode(",",$public_r['add_www_92game_net_year']);
                                                        $count=count($exp);
                                                        for($i=0;$i<$count;$i++)
                                                        {?>
                                                            <a href="/film-download/1-<?=$type?>-<?=$area?>-<?=$i+1?>-<?=$orderby?>-0.html" <? if ($year==$i+1){?>class="tag-sm tag-size"<?}?>><?=$exp[$i]?></a>
                                                            <?
                                                        }
                                                        ?>
                                                    </dd>
                                                </dl>
                                                <dl class="prel type--bold">
                                                    <dt>影视排序:</dt>
                                                    <dd>
                                                        <a href="/film-download/1-<?=$type?>-<?=$area?>-<?=$year?>-1-0.html" <? if ($orderby==1||$orderby==0){?>class="tag-sm tag-picture2"<?}?>>资源更新</a><a href="/film-download/1-<?=$type?>-<?=$area?>-<?=$year?>-3-0.html" <? if ($orderby==3){?>class="tag-sm tag-picture2"<?}?>>豆瓣评分</a></dd>
                                                </dl>
                                            </div>

                                    </div>

                        </div>
                        <!--end of row-->
                    </div>

                </div>
                <div class="col-sm-12 text-center">
                    <div class="masonry masonry-demos">

                            <div class="masonry__container">

                                [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]

                            </div>
                            <!--end of masonry container-->
                    </div>
                    <!--end masonry-->
                    <div class="pagination">
                     <?php

                       $pre=$page - 1;
                       $next=$page + 1;

                      if ($page>0) {
                          ?>
                           <div class="col-xs-6 text-left hidden-md hidden-lg">
                               <a class="type--fine-print" href="/film-download/1-0-0-0-0-<?=$pre?>.html"><< 上一页</a>
                            </div>

                           <div class="col-xs-6 text-right  hidden-md hidden-lg">
                              <a class="type--fine-print" href="/film-download/1-0-0-0-0-<?=$next?>.html">下一页 >></a>
                          </div>

                       <?}
                       ?>
                        <?php
                       if ($page=='0') {
                            ?>
                           <div class="col-xs-12 text-center hidden-md hidden-lg">
                                <a class="type--fine-print" href="/film-download/1-0-0-0-0-<?=$next?>.html">下一页 >></a>
                            </div>
                       <?}
                        ?>

                   </div>
                    <div class="text-center hidden-sm hidden-xs">
                        <ul class='tsc_pagination tsc_paginationA tsc_paginationA06'>
                            [!--show.listpage--]
                        </ul>
                    </div>
                </div>


            </div>
            <!--end of row-->
        </div>

        <!--end of container-->
    </section>


[!--temp.qq--]
[!--temp.foot--]
</div>
[!--temp.js--]
</body>
</html>

