$mv=$empire->fetch1("select id,title from www_92game_net_ecms_movie where douban_id='$r[douban_id]' limit 1");
if($r[douban_id] && $mv[id]){
$listtemp='<section class="space--xs blog-article-wide">
    <div class="container">
        <div class="row">
            <div class="cta cta--horizontal text-center-xs">
                <div class="col-sm-2">
                    <a href="/subject/'.$mv[id].'.html" target="_blank"><h5>'.$mv[title].'</h5></a>
                </div>
                <div class="col-sm-8">
                    <a class="type--bold" href="/sub/[!--id--].html" target="_blank">
                        [!--title--]
                    </a>
                </div>
                <div class="col-sm-2 text-right text-center-xs" >

                    <span class="tag-sm tag-picture2">[!--lang--]</span> <span class="tag-sm tag-picture">[!--format--]
                     </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>';
}else {
$listtemp='<section class="space--xs blog-article-wide">
    <div class="container">
        <div class="row">
            <div class="cta cta--horizontal text-center-xs">
                <div class="col-sm-2">
                   <h5>[!--mvtitle--]</h5>
                </div>
                <div class="col-sm-8">
                    <a class="type--bold" href="/sub/[!--id--].html" target="_blank">
                        [!--title--]
                    </a>
                </div>
                <div class="col-sm-2 text-right text-center-xs" >

                    <span class="tag-sm tag-picture2">[!--lang--]</span> <span class="tag-sm tag-picture">[!--format--]
                     </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>';
}