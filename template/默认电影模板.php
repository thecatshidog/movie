<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[!--title--] [!--ename--] ([!--year--]) 下载</title>
    <link href="/Public/static/bsv3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/static/bsv3/css/add.css?10110252" rel="stylesheet">
    <link href="/Public/static/bsv3/css/treeview.css" rel="stylesheet">
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/bsv3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/static/bsv3/js/imgPre.js?1011"></script>
    <!--[if lt IE 9]>
    <script src="/Public/static/bsv3/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
[!--temp.header--]

<!-- 主体 -->

<div class="jumbotron masthead">
    <div class="container">
        <div class="rtitle clearfix">
            <div class="col-sm-12  col-md-12 col-lg-12 text-left nopd">
                <h1>[!--title--]  [!--ename--]  ([!--year--])
                    <?
                    $zynum=$empire->gettotal("select count(*) as total from www_92game_net_ecms_ziyuan where cid='$navinfor[id]'");
                    ?>
                    <?if ($navinfor[jishu]){?><small class="label label-info">集数&nbsp;&nbsp;<b>( [!--jishu--] )</b></small><?}?>        <small class="label label-success">资源数&nbsp;&nbsp;<b>( <?=$zynum?> )</b></small>        </h1>        </div>
        </div>
    </div>
</div>

<div id="main-container" class="container">
    <div class="row">

        <div class="col-md-10 ms" role="main">
            <div class="minfo clearfix">
                <div class="litpic">
                    <a class="thumbnail" href="/m_[!--id--].html">
                        <img src="[!--titlepic--]" alt="[!--title--] [!--ename--] ([!--year--])">
                    </a>
                </div>
                <ul class="detail">
                    <?if ($navinfor[called]){?><li class="clearfix"><strong>又名:</strong>
                        <div>[!--called--]</div>
                    </li><?}?>
                    <li class="clearfix"><strong>地区:</strong>
                        <div>[!--area--]</div>
                    </li>
                    <li class="clearfix"><strong>类型:</strong>
                        <div>[!--type--]</div>
                    </li>


                    <?if ($navinfor[director]){?><li class="clearfix"><strong>导演:</strong>
                        <div>
                            <?
                            $exp=explode(",",$navinfor[director]);
                            $count=count($exp);
                            for($i=0;$i<$count;$i++)
                            {?>
                                <a href="/e/search/?searchget=1&show=director&tbname=movie&tempid=1&keyboard=<?=$exp[$i]?>" ><?=$exp[$i]?></a>
                                <?
                            }
                            ?>

                        </div></li>     <?}?>
                    <?if ($navinfor[screenwriter]){?><li class="clearfix"><strong>编剧:</strong>
                        <div>
                            <?
                            $exp=explode(",",$navinfor[screenwriter]);
                            $count=count($exp);
                            for($i=0;$i<$count;$i++)
                            {?>
                                <a href="/e/search/?searchget=1&show=screenwriter&tbname=movie&tempid=1&keyboard=<?=$exp[$i]?>" ><?=$exp[$i]?></a>
                                <?
                            }
                            ?>

                        </div></li>    <?}?>
                    <?if ($navinfor[star]){?><li class="clearfix"><strong>主演:</strong>
                        <div><?
                            $exp=explode(",",$navinfor[star]);
                            $count=count($exp);
                            for($i=0;$i<$count;$i++)
                            {?>
                                <a href="/e/search/?searchget=1&show=star&tbname=movie&tempid=1&keyboard=<?=$exp[$i]?>" ><?=$exp[$i]?></a>
                                <?
                            }
                            ?> </div></li><?}?>
                    <?if ($navinfor[imdb]){?><li class="cl"><strong>imdb:</strong>
                        <div>
                            <a title="imdb:[!--imdb--]" target="_blank" href="/e/search/?searchget=1&show=imdb&tbname=movie&tempid=1&keyboard=[!--imdb--]">[!--imdb--]</a>
                        </div></li>	<?}?>
                </ul>
                <div class="score">
                    <?
                    $score=explode(".",$navinfor[score]);
                    $bigstar=round($navinfor[score])*5;
                    if ($bigstar=="0"||$bigstar=="5"){
                        $bigstar="05";
                    }
                    ?>
                    <span class="bigstar<?=$bigstar?>"></span><i class="sum"><b><?=$score[0]?></b>.<?=$score[1]?></i>

                </div>
            </div>
            <div class="related">
                <h5><span>全部资源</span></h5>
                <table cellpadding="0" cellspacing="0" class="data" style="width: 100%">
                    <tbody><tr class="firstr">
                        <th class="">画质</th>
                        <th class="width75perc">资源名</th>
                        <th class="nobr center">大小</th>
                        <th class="nobr center">时间</th>
                        <th class="lasttd nobr center">下载</th>
                    </tr>
                    <?php
                    $i=0;
                    $newbook=$empire->query("select * from www_92game_net_ecms_ziyuan  where cid = '".$navinfor[id]."' order by newstime desc");
                    while($r=$empire->fetch($newbook)) {
                        $i=$i+1;
                        ?>
                        <tr class="<?if($i%2==1){?>odd<?}else{?>even<?}?>">
                            <td class=""><?=$r[picture]?></td>
                            <td class="nobr">
                                <a href="/r_<?=$r[id]?>.html" class="ico ico_bt"><?=$r[title]?></a>

                            </td>
                            <td class="nobr center"><?=$r[size]?></td>
                            <td class="nobr center"><?=format_date($r[newstime])?></td>
                            <td class="nobr lasttd center"><?=$r[onclick]?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>        </div>


        <div class="col-md-2 r2-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
            <div style="float:right;margin-top:20px;"><script src=/d/js/acmsd/thea1.js></script></div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
<!-- /主体 -->

<!-- 底部 -->

<!-- 底部
================================================== -->
[!--temp.footer--]



<script type="text/javascript" src="/Public/static/jquery.treeview.js"></script>
<script type="text/javascript">
    $(function(){
        $(".fileTree").treeview();
    })
</script>
<!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->

</div>

<!-- /底部 -->
</body>
</html>