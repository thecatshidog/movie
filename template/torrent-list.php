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
    <title>[!--pagetitle--] - 不太灵</title>
    <meta name="description" content="[!--class.intro--]">
    <meta name="keywords" content="[!--class.keywords--]">
    [!--temp.css--]
</head>
<body>
<a id="start"></a>
[!--temp.menu--]

<div class="background-overlay"></div>
<div class="main-container">

    <section class="imagebg  hidden-sm hidden-xs cover bg--dark height-40 text-center" style="padding-bottom: 0">

        <div class="background-image-holder" style="background: url(https://bttt.gq/background/background14.jpg); opacity: 1;height: 700px;">
            <img alt="background" src="https://bttt.gq/background/background14.jpg">
        </div>


        <div class="container pos-vertical-center" style="margin-top:3em;">

            <div class="row">

                <div class="col-sm-12 col-md-8">
                    <div class="typed-headline" style="margin-bottom: 1em;">
                        <span class="h1 inline-block">可以这样搜索</span>
                        <span class="h1 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="大话西游,A Chinese Odyssey,tt0114996,1292213"></span>
                    </div>
                    <div class="boxed boxed--lg bg--white text-left">
                        <form class="form--horizontal" action="<?=$public_r['newsurl']?>e/search/" method="post" target="_blank">
                            <div class="col-sm-8">
                                <input type="search" name="keyboard" placeholder="种子搜索 支持 影片名/种子命/iMDb号/豆瓣号">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn--primary type--uppercase">立即搜索</button>
                            </div>
                            <input type="hidden" name="show" value="title,btname,imdb,douban_id,mvtitle">
                            <input type="hidden" name="tbname" value="torrent">
                            <input type="hidden" name="tempid" value="3">
                            <input type="hidden" name="orderby" value="onclick">
                        </form>

                    </div>
                </div>

            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="bg--dark" style="padding-top: 3em">
        <div class="container" style="z-index: 10;position: relative">

                <div class="col-sm-12 col-md-12 col-lg-9 boxed bg--secondary">

                    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]

                    <div class="hidden-sm hidden-xs">
                        <ul class='tsc_pagination tsc_paginationA tsc_paginationA06'>
                            [!--show.listpage--]
                        </ul>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="sidebar boxed boxed--border boxed--lg bg--secondary" style="margin-top: 1.2em">
                        <!--end widget-->
                        <style>
                            ol li:not(:last-child) {
                                margin-bottom: 0.4em;
                            }
                        </style>
                        <div class="sidebar__widget">
                            <h5>新片排行</h5>
                            <ul class="process">
                                [ecmsinfo]1,20,100,0,0,15,0,'firsttitle=1',0[/ecmsinfo]
                            </ul>
                        </div>

                    </div>
                </div>
        </div>
        <!--end of container-->
    </section>
   [!--temp.foot--]
</div>


[!--temp.js--]
</body>

</html>