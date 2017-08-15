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
<div class="background-overlay"></div>

<div class="main-container">

    <section class="imagebg bg--dark" style="padding-bottom: 0">

        <div class="background-image-holder" style="background: url(https://bttt.gq/background/background19.jpg); opacity: 1;height: 700px;">
            <img alt="background" src="https://bttt.gq/background/background19.jpg">
        </div>
<div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <iframe width="100%" height="600px" allowTransparency="true" frameborder="0" scrolling="no" src="https://api.47ks.com/webcloud/?v=[!--itemLink--]" name="main"></iframe>
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
                    sourceId: "play/[!--id--]",
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