<!DOCTYPE html>
<html lang="zh-cmn-Hans" class="ua-windows ua-webkit">

<head>
    <title>[!--pagetitle--] 电影下载 不太灵影视</title>
    <meta name="description" content="[!--pagedes--]">
    <meta name="keywords" content="[!--title--],[!--title--]1080p,[!--title--]高清下载,[!--title--]蓝光下载,[!--title--]全集在线观看">
    <meta itemprop="image" content="[!--coverpic--]">
    <meta itemprop="thumbnailUrl" content="[!--coverpic--]">
    <meta itemprop="uploadDate" content="[!--newstime--]" />
    <meta itemprop="duration" content="[!--durations--]" />
    <meta property="og:type" content="video"/>
    <meta property="og:title"content="[!--pagetitle--]"/>
    <meta property="og:image" content="[!--coverpic--]"/>
    <meta property="og:url" content="//www.bt0.com/subject/[!--id--].html"/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" property="og:url" content="//www.bt0.com/subject/[!--id--].html" />
    <meta name="twitter:title" property="og:title" content="[!--pagetitle--]" />
    <meta name="twitter:description" property="og:description" content="[!--pagetitle--]在线观看 高清电影下载，字幕资源下载，精彩影评查看" />
    <meta name="twitter:image" property="og:image" content="[!--titlepic--]" />
    <link rel="canonical" href="//www.bt0.com/mv/[!--id--].html" />
    [!--temp.css--]
</head>
<body>
<a id="start"></a>
[!--temp.menu--]

<div class="main-container">

    <section class="imagebg bg--dark" style="background:#1a151c;padding-bottom: 3em;">



        <div class="container" id="movie-content" itemscope itemtype="http://schema.org/Movie">

            <div id="movie-info" class="row">
                <div class="modal modal-download hidden-xs hidden-sm">
                    <div class="modal-container">
                        <div class="modal-title"> 选择影片画质 </div>
                        <span><i class="fa fa-times modal-close" aria-hidden="true"></i></span>
                        <div class="modal-content">
                            <?php
                            $newbook=$empire->query("select * from www_92game_net_ecms_torrent  where (douban_id = '".$navinfor[douban_id]."') ORDER by episode,substr(size,-2) desc,(LEFT(size,length(size)-2)+0.0) asc");

                            $mv_720 = array();
                            $mv_1080 = array();
                            $mv_blueray = array();
                            $mv_3d = array();
                            $mv_other = array();
                            $none = true;
                            $zynum = 0;
                            $tui = false;
                            while($r=$empire->fetch($newbook)) {
                                $flag = true;
                                $none = false;
                                $zynum++;
                                if(stripos($r[picture], '720P') !== false) {
                                    // 720p
                                    array_push($mv_720, $r);
                                    $flag = false;
                                    if ($r[isgood] > 0) {
                                        $tui_720 = $r;
                                        $tui = true;
                                    }

                                }
                                if(stripos($r[picture], '1080P') !== false) {
                                    // 1080p
                                    array_push($mv_1080, $r);
                                    $flag = false;
                                    if ($r[isgood] > 0){
                                        $tui_1080 = $r;
                                        $tui = true;
                                    }
                                }
                                if(stripos($r[picture], 'BlueRay') !== false || stripos($r[picture], '蓝光') !== false || stripos($r[picture], 'Remux') !== false) {
                                    // 蓝光
                                    array_push($mv_blueray, $r);
                                    $flag = false;
                                    if ($r[isgood] > 0) {
                                        $tui_blueray = $r;
                                        $tui = true;
                                    }
                                }
                                if(stripos($r[picture], '3D') !== false) {
                                    // 3d
                                    array_push($mv_3d, $r);
                                    $flag = false;
                                    if ($r[isgood] > 0) {
                                        $tui_3d = $r;
                                        $tui = true;
                                    }
                                }
                                if($flag) {
                                    // 其他
                                    array_push($mv_other, $r);
                                }
                            }
                            ?>
                            <?php

                            if (isset($tui_720)) {
                                ?>

                                <div class="modal-torrent">
                                    <div class="modal-quality" id="modal-quality-720p"><span>720p</span></div>
                                    <p>文件大小</p>
                                    <p class="quality-size"><?=$tui_720[size]?></p>
                                    <a download class="download-torrent button-green-download-big" href="/download_<?=$tui_720[id]?>.html" rel="nofollow" title=" 720P下载"><span class="icon-in"></span>下载种子</a>
                                    <a data-torrent-id="10363" href="<?=$tui_720[magnet]?>" class="magnet-download download-torrent magnet" title="推荐720p片源磁力链接" rel="nofollow"><span>磁力链接</span></a>
                                </div>

                            <?}

                            if (isset($tui_1080)) {
                                ?>
                                <div class="modal-torrent">
                                    <div class="modal-quality" id="modal-quality-1080p"><span>1080p</span></div>
                                    <p>文件大小</p>
                                    <p class="quality-size"><?=$tui_1080[size]?></p>
                                    <a download class="download-torrent button-green-download-big" href="/download_<?=$tui_1080[id]?>.html" rel="nofollow" title=" 1080p下载"><span class="icon-in"></span>下载种子</a>
                                    <a data-torrent-id="10365" href="<?=$tui_1080[magnet]?>" class="magnet-download download-torrent magnet" title="推荐1080p片源磁力链接" rel="nofollow"><span>磁力链接</span></a>
                                </div>

                            <?php }

                            if (isset($tui_3d)) {

                                ?>
                                <div class="modal-torrent">
                                    <div class="modal-quality" id="modal-quality-3d"><span>3D</span></div>
                                    <p>文件大小</p>
                                    <p class="quality-size"><?=$tui_3d[size]?></p>
                                    <a download class="download-torrent button-green-download-big" href="/download_<?=$tui_3d[id]?>.html" rel="nofollow" title=" 3D格式下载"><span class="icon-in"></span>下载种子</a>
                                    <a data-torrent-id="10378" href="<?=$tui_3d[magenet]?>" class="magnet-download download-torrent magnet" title="推荐3d片源磁力链接" rel="nofollow"><span>磁力链接</span></a>
                                </div>


                            <?}?>
                        </div>


                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 3em;">

                <div class="col-md-4">
                    <div class="masonry masonry-demos">
                        <div class="masonry__container masonry--active">

                            <div class="masonry__item">
                                <div>
                                    <img style="border-radius:10px " alt="[!--title--]" src="[!--titlepic--]">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom:2em">
                    <span class="info-title">[!--title--]</span><br>
                    <div class="modal-instance">
                        <a class="modal-trigger" href="#" data-modal-index="2">
                            <span class="tiny-title">豆瓣评分: <span style="font-size: 2em;font-weight: 700;color:#fc9b35;" >  <?php
                                    $score=$empire->query("select score from www_92game_net_ecms_addinfo  where douban_id = '".$navinfor[douban_id]."' ");
                                    $r=$empire->fetch($score);
                                    if ($r) {
                                        echo $r[score];
                                    }else {
                                        echo "<span style='font-size: 0.6em;color: #cea588;font-weight: normal;'>同步评分数据中...</span>";
                                    }
                                    ?></span></span>
                        </a>
                        <div class="modal-container" data-modal-index="2">
                            <div class="modal-content">
                                <div class="boxed boxed--lg">
                                    <h2>[!--title--] 的豆瓣评分详情</h2>
                                    <div id="c1"></div>
                                </div>
                                <div class="modal-close modal-close-cross"></div></div>
                        </div>
                    </div>
                    <?if ($navinfor[ename]){?><span class="tiny-title">又名: [!--ename--]</span><?}?>
                    <?if ($navinfor[pubdate]){?><span class="tiny-title">上映日期: [!--pubdate--]</span><?}?>
                    <?if ($navinfor[type]){?><span class="tiny-title">类型: [!--type--]</span><?}?>
                    <?if ($navinfor[durations]){?><span  class="tiny-title">片长: [!--durations--]</span><?}?>
                    <?if ($navinfor[area]){?><span  class="tiny-title">上映地区: [!--area--]</span><?}?>
                    <?if ($navinfor[durationstv]){?><span  class="tiny-title">单集片长: [!--durationstv--]</span><?}?>
                    <?if ($navinfor[jishu]){?> <span  class="tiny-title">集数: [!--jishu--]</span><?}?>
                    <span class="tiny-title">种子资源数: <span  class="torrent-number" style=""><?=$zynum?></span> </span>
                    <div class="torrent-nav">
                    <?php
                            if (count($mv_720) > 0) {
                                echo '<a class="tag-transparent type--italic" href="#720p">720P</a>';
                            }?>
                            <?php
                            if (count($mv_1080) > 0) {
                                echo '<a class="tag-transparent type--italic" href="#1080p">1080P</a>';
                            }?>
                            <?php
                            if (count($mv_blueray) > 0) {
                                echo '<a class="tag-transparent type--italic" href="#bluray">蓝光</a>';
                            }?>
                            <?php
                            if (count($mv_3d) > 0) {
                                echo '<a class="tag-transparent type--italic" href="#3d">3D</a>';
                            }?>
                            <?php
                            if (count($mv_other) > 0) {
                                echo '<a class="tag-transparent type--italic" href="#other">普清</a>';
                            }?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="summary-card">
                    <span class="summary-title" >剧情:</span>
                    <article class="information-text">
                        <?php
                        $summary=$empire->query("select summary from www_92game_net_ecms_addinfo  where douban_id = '".$navinfor[douban_id]."' ");
                        $r=$empire->fetch($summary);
                        if ($r) {
                            echo $r[summary];
                        }else {
                            echo "该影视条目暂无简介";
                        }
                        ?>
                    </article>
                    </div>
                </div>
            </div>






        </div>

</div>

</section>

<!--<section class="text-center" style="position: relative;z-index: 9;background:#1a151c;padding: 0 0 3em 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
/*                $i=0;
                $screenshot=$empire->query("select large,thumb from www_92game_net_ecms_screenshot  where douban_id = '".$navinfor[douban_id]."' order by thumb asc");
                while($r=$empire->fetch($screenshot)) {
                    $i+=1;
                    */?>
                    <div class="col-md-4" style="padding: 0 10px;">
                        <a href="//www.bt0.com/screenshot/<?/*=$r[large]*/?>" data-lightbox="screenshot">
                            <img alt="[!--title--] 影片截图<?/*=$i*/?>" src="//www.bt0.com/screenshot/<?/*=$r[thumb]*/?>" />
                        </a>
                    </div>

                    <?php
/*                }
                */?>

            </div>

        </div>
    </div>
</section>-->

<section class="text-center bg--dark"  style="position: relative;z-index: 9;background:#1a151c;padding-top: 1em">
    <div class="container">
        <div class="row">
            <div class="col-md-10 boxed bg--secondary" style="background: rgba(0, 0, 0, 0.08);">
                <div class="tabs-container" data-content-align="left">
                    <ul class="tabs">
                        <li class="active">
                            <div class="tab__title text-center">
                                <i class="icon icon--sm block icon-Cloud"></i>
                                <span class="h5">影片资源</span>
                            </div>

                        </li>
                        <li class="">
                            <div class="tab__title text-center">
                                <i class="icon icon--sm block icon-Text-Effect"></i>
                                <span class="h5">字幕资源</span>
                            </div>

                        </li>
                        <li class="">
                            <div class="tab__title text-center">
                                <i class="icon icon--sm block icon-Love-User"></i>
                                <span class="h5">演员信息</span>
                            </div>

                        </li>
                    </ul>
                    <ul class="tabs-content">
                        <li class="active">
                            <div class="tab__content">

                                <?php
                                if (count($mv_720) > 0) {

                                    print <<< EOT
<div class="picture-container">
<div id="720p" class="picture-title type--bold">720P</div>
EOT;
                                    foreach ($mv_720 as $mv) {	?>
                                        <div class="container">
                                            <div class="col-md-12"> <a class="torrent-title" style="color: #3f96ec;" href="/torrent/<?=$mv[id]?>.html" target="_blank">
                                                    <?php
                                                    if($mv[episode])
                                                    {
                                                        ?>
                                                        第<?=$mv[episode]?>集.
                                                        <?php
                                                    }
                                                    ?><?=$mv[title]?></a></div>

                                            <div class="col-md-3"><div class="tag-sm tag-size text-center"><?=$mv[size]?></div></div>

                                            <div class="col-md-3"><div class="tag-sm tag-picture3 text-center"><?=$mv[picture]?></div></div>

                                            <div class="col-md-3"><a href="<?=$mv[magnet]?>"><div class="tag-sm tag-magnet text-center">磁力链接</div></a></div>

                                            <div class="col-md-3"><a href="http://download.bt0.com/<?=$mv[bt]?>"><div class="tag-sm tag-download text-center">下载种子</div></a></div>

                                            <div class="col-md-12 border-bottom-1px"></div>
                                        </div>

                                    <?	}
                                    echo "</div>";
                                }?>

                                <?php
                                if (count($mv_1080) > 0) {

                                    print <<< EOT
<div class="picture-container">
<div id="1080p" class="picture-title type--bold">1080P</div>
EOT;
                                    foreach ($mv_1080 as $mv) {	?>
                                        <div class="container">
                                            <div class="col-md-12"> <a class="torrent-title" style="color: #3f96ec;" href="/torrent/<?=$mv[id]?>.html" target="_blank">
                                                    <?php
                                                    if($mv[episode])
                                                    {
                                                        ?>
                                                        第<?=$mv[episode]?>集.
                                                        <?php
                                                    }
                                                    ?><?=$mv[title]?></a></div>

                                            <div class="col-md-3"><div class="tag-sm tag-size text-center"><?=$mv[size]?></div></div>

                                            <div class="col-md-3"><div class="tag-sm tag-picture3 text-center"><?=$mv[picture]?></div></div>

                                            <div class="col-md-3"><a href="<?=$mv[magnet]?>"><div class="tag-sm tag-magnet text-center">磁力链接</div></a></div>

                                            <div class="col-md-3"><a href="http://download.bt0.com/<?=$mv[bt]?>"><div class="tag-sm tag-download text-center">下载种子</div></a></div>
                                            <div class="col-md-12 border-bottom-1px"></div>
                                        </div>

                                    <?	}
                                    echo "</div>";
                                }?>


                                <?php
                                if (count($mv_blueray) > 0) {

                                    print <<< EOT
<div class="picture-container">
<div id="bluray" class="picture-title type--bold">蓝光</div>
EOT;
                                    foreach ($mv_blueray as $mv) {	?>
                                        <div class="container">
                                            <div class="col-md-12"> <a class="torrent-title" style="color: #3f96ec;" href="/torrent/<?=$mv[id]?>.html" target="_blank">
                                                    <?php
                                                    if($mv[episode])
                                                    {
                                                        ?>
                                                        第<?=$mv[episode]?>集.
                                                        <?php
                                                    }
                                                    ?><?=$mv[title]?></a></div>

                                            <div class="col-md-3"><div class="tag-sm tag-size text-center"><?=$mv[size]?></div></div>

                                            <div class="col-md-3"><div class="tag-sm tag-picture3 text-center"><?=$mv[picture]?></div></div>

                                            <div class="col-md-3"><a href="<?=$mv[magnet]?>"><div class="tag-sm tag-magnet text-center">磁力链接</div></a></div>

                                            <div class="col-md-3"><a href="http://download.bt0.com/<?=$mv[bt]?>"><div class="tag-sm tag-download text-center">下载种子</div></a></div>
                                            <div class="col-md-12 border-bottom-1px"></div>
                                        </div>

                                    <?	}
                                    echo "</div>";
                                }?>


                                <?php
                                if (count($mv_3d) > 0) {

                                    print <<< EOT
<div class="picture-container">
<div id="3d" class="picture-title type--bold">3D</div>
EOT;
                                    foreach ($mv_3d as $mv) {	?>
                                        <div class="container">
                                            <div class="col-md-12"> <a class="torrent-title" style="color: #3f96ec;" href="/torrent/<?=$mv[id]?>.html" target="_blank">
                                                    <?php
                                                    if($mv[episode])
                                                    {
                                                        ?>
                                                        第<?=$mv[episode]?>集.
                                                        <?php
                                                    }
                                                    ?><?=$mv[title]?></a></div>

                                            <div class="col-md-3"><div class="tag-sm tag-size text-center"><?=$mv[size]?></div></div>

                                            <div class="col-md-3"><div class="tag-sm tag-picture3 text-center"><?=$mv[picture]?></div></div>

                                            <div class="col-md-3"><a href="<?=$mv[magnet]?>"><div class="tag-sm tag-magnet text-center">磁力链接</div></a></div>

                                            <div class="col-md-3"><a href="http://download.bt0.com/<?=$mv[bt]?>"><div class="tag-sm tag-download text-center">下载种子</div></a></div>

                                            <div class="col-md-12 border-bottom-1px"></div>
                                        </div>

                                    <?	}
                                    echo "</div>";
                                }?>

                                <?php
                                if (count($mv_other) > 0) {

                                    print <<< EOT
<div class="picture-container">
<div id="other" class="picture-title type--bold">普清/HDTV/HDRIP/DVDRIP/TS/CAM/HC/DVDSCR</div>
EOT;
                                    foreach ($mv_other as $mv) {	?>
                                        <div class="container">
                                            <div class="col-md-12"> <a class="torrent-title" style="color: #3f96ec;" href="/torrent/<?=$mv[id]?>.html" target="_blank">
                                                    <?php
                                                    if($mv[episode])
                                                    {
                                                        ?>
                                                        第<?=$mv[episode]?>集.
                                                        <?php
                                                    }
                                                    ?><?=$mv[title]?></a></div>

                                            <div class="col-md-3"><div class="tag-sm tag-size text-center"><?=$mv[size]?></div></div>

                                            <div class="col-md-3"><div class="tag-sm tag-picture3 text-center"><?=$mv[picture]?></div></div>

                                            <div class="col-md-3"><a href="<?=$mv[magnet]?>"><div class="tag-sm tag-magnet text-center">磁力链接</div></a></div>

                                            <div class="col-md-3"><a href="http://download.bt0.com/<?=$mv[bt]?>"><div class="tag-sm tag-download text-center">下载种子</div></a></div>

                                            <div class="col-md-12 border-bottom-1px"></div>
                                        </div>

                                    <?	}
                                    echo "</div>";
                                }?>




                            </div>
                        </li>

                        <li class="">
                            <div class="tab__content">
                                <table cellpadding="0" cellspacing="0" class="data" style="width: 100%;border: 1px solid #666;">
                                    <tbody><tr class="firstr">

                                        <th class="width75perc">资源名</th>
                                        <th class="lasttd nobr center">格式</th>
                                    </tr>
                                    <?php
                                    $i=0;
                                    $newbook=$empire->query("select * from www_92game_net_ecms_subs  where douban_id = '".$navinfor[douban_id]."' order by newstime desc");
                                    while($r=$empire->fetch($newbook)) {
                                    $i=$i+1;
                                    ?>
                                    <tr class="<?if($i%2==1){?>odd<?}else{?>even2<?}?>">

                                        <td class="nobr">
                                            <a  href="/sub/<?=$r[id]?>.html" class="torrent-title" style="color: #3f96ec;" target="_blank"><?=$r[title]?></a>
                                        </td>
                                        <td class="nobr center"><span class="tag-sm tag-picture2"><?=$r[format]?></span></td>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>



                            </div>
                        </li>
                        <li class="">
                            <div class="tab__content">
                                <div class="container">


                                    <?if ($navinfor[director]){?>
                                        <div class="directors">
                                            <span class="type--bold">导演：</span>
                                            <div class="tag-box">
                                                <?
                                                $exp=explode(",",$navinfor[director]);
                                                $count=count($exp);
                                                for($i=0;$i<$count;$i++)
                                                {?>



                                                    <a class="name-cast" href="/e/search/?searchget=1&show=director&tbname=movie&tempid=1&keyboard=<?=$exp[$i]?>" target="_blank">
                                            <span itemprop="director" class="releated-people-tags" itemscope itemtype="http://schema.org/Person">
                                                <span itemprop="name" ><?=$exp[$i]?></span>
                                            </span>
                                                    </a>



                                                    <?
                                                }
                                                ?>

                                            </div>

                                        </div>


                                    <?}?>






                                    <?if ($navinfor[screenwriter]){?>
                                        <div class="directors" style="margin-top: 12px">
                                            <span class="type--bold">编剧：</span>
                                            <div class="tag-box">
                                                <?
                                                $exp=explode(",",$navinfor[screenwriter]);
                                                $count=count($exp);
                                                for($i=0;$i<$count;$i++)
                                                {?>


                                                    <a class="name-cast" href="/e/search/?searchget=1&show=screenwriter&tbname=movie&tempid=1&keyboard=<?=$exp[$i]?>" target="_blank">
                                            <span itemprop="director" class="releated-people-tags" itemscope itemtype="http://schema.org/Person">
                                            <span itemprop="name" ><?=$exp[$i]?></span>
                                            </span>
                                                    </a>


                                                    <?
                                                }
                                                ?>

                                            </div>

                                        </div>


                                    <?}?>



                                    <?if ($navinfor[star]){?>
                                        <div class="directors" style="margin-top: 12px">
                                            <span class="type--bold">主演：</span>
                                            <div class="tag-box">
                                                <?
                                                $exp=explode(",",$navinfor[star]);
                                                $count=count($exp);
                                                for($i=0;$i<$count;$i++)
                                                {?>


                                                    <a class="name-cast" href="/e/search/?searchget=1&show=star&tbname=movie&tempid=1&keyboard=<?=$exp[$i]?>">
                                            <span itemprop="actor" class="releated-people-tags" itemscope itemtype="http://schema.org/Person">
                                                <span itemprop="name" ><?=$exp[$i]?></span></span>
                                                    </a>




                                                    <?
                                                }
                                                ?>
                                            </div>

                                        </div>

                                    <?}?>



                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--end of tabs container-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<!--关联影片区域-->

[!--temp.foot--]

</div>

[!--temp.js--]
<script src="//www.bt0.com/js/lightbox.min.js"></script>
<script src="https://gw.alipayobjects.com/as/g/datavis/g2/2.3.8/index.js"></script>
<script>
    <?php
    echo "var did =".$navinfor[douban_id]."\;";
    ?>
    $.ajax({
        url:'https://www.bt0.com/api/rank.php?douban_id='+ did,
        type:'get',
        data:{},
        async : true,
        error:function(){
            alert('error');
        },
        success:function(jsonData){
            if (jsonData.rank.length != 0) {
                var data =[
                    {value:jsonData.rank["stars5"], name:'5星'},
                    {value:jsonData.rank["stars4"], name:'4星'},
                    {value:jsonData.rank["stars3"], name:'3星'},
                    {value:jsonData.rank["stars2"], name:'2星'},
                    {value:jsonData.rank["stars1"], name:'1星'}
                ];
                var chart = new G2.Chart({
                    id: 'c1',
                    forceFit: true,
                    height: 480
                });
                var Frame = G2.Frame;
                var frame = new Frame(data);
                frame = Frame.sort(frame, 'value');
                chart.source(frame);
                chart.coord('polar');
                chart.legend('name', {
                    position: 'bottom'
                });
                chart.axis(false);
                chart.interval().position('name*value')
                    .color('name', [ '#A72023','#CB5050', '#9D1F22', '#70171A', '#461012'])
                    .label('name')
                    .style({
                        stroke: '#fff',
                        lineWidth: 2
                    });
                chart.render();
            }

        }
    });


</script>
</body>
</html>