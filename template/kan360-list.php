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
    <title>[!--pagetitle--]  - 不太灵</title>
    <meta name="description" content="[!--class.intro--]">
    <meta name="keywords" content="[!--class.keywords--]">
    [!--temp.css--]
</head>
<body>
<a id="start"></a>
[!--temp.menu--]

<div class="main-container">

    <section class="bg--dark" style="padding-bottom: 3em">

        <!--end of container-->

        <div class="container" style="margin-top: 3em;">
            <div class="row">
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
                            <div class="col-xs-6 text-left">
                                <a class="type--fine-print" href="/btubes/<?=$pre?>.html"><< 上一页</a>
                            </div>

                            <div class="col-xs-6 text-right">
                                <a class="type--fine-print" href="/btubes/<?=$next?>.html">下一页 >></a>
                            </div>

                        <?}
                        ?>
                        <?php
                        if ($page=='0') {
                            ?>
                            <div class="col-xs-12 text-center">
                                <a class="type--fine-print" href="/btubes/<?=$next?>.html">下一页 >></a>
                            </div>
                        <?}
                        ?>

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

