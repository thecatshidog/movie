if($r[id]%2==1){
    $class="odd";
    }else{
    $class="even";}
if($r[douban_id]!=='404' && $r[douban_id]!=='' && $r[year]!=='0' && $r[type]!==''){
        $mv=$empire->fetch1("select id from www_92game_net_ecms_movie where (douban_id='$r[douban_id]' or imdb='$r[imdb]') limit 1");
        if($r[mvtitle] && $r[bt] && $r[type] && $mv[id]) {
        $listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
            <div class="cta cta--horizontal text-center-xs ">
                <div class="col-sm-2">

                    <a href="/subject/'.$mv[id].'.html" >
                        <img class="cover-pic" alt="[!--mvtitle--]" title="[!--mvtitle--] 最新资源" src="http://image.bt0.com/photo/[!--douban_id--].jpg" />
                    </a>
                </div>
                <div class="col-sm-10">
                    <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block">
                        <h4 class="list-title">[!--btname--]</h4>
                        <div class="tag-group">
                            <span class="tag-title">[!--mvtitle--]([!--year--])</span>
                            <span class="tag-sm tag-size">[!--size--]</span>
                            <span class="tag-sm tag-picture2">[!--picture--]</span>
                            <span class="tag-sm tag-type">类型: [!--type--]</span>
                        </div>


                        <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em">
                            <span class="btn__text">磁力链接</span>
                        </a>

                        <a class="btn-sm bg--primary" href="/download/[!--id--].html">
                            <span class="btn__text"></i>立即下载</span>
                        </a>

                </div>
            </div>
        </div>';
        }elseif ($r[mvtitle] && !$r[bt] && $r[type] && $mv[id]) {
        $listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
            <div class="cta cta--horizontal text-center-xs ">
                <div class="col-sm-2">

                    <a href="/subject/'.$mv[id].'.html" >
                        <img class="cover-pic" alt="[!--mvtitle--]" title="[!--mvtitle--] 最新资源" src="http://image.bt0.com/photo/[!--douban_id--].jpg" />
                    </a>
                </div>
                <div class="col-sm-10">
                    <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block" style="border-bottom: none;">
                        <h4 class="list-title">[!--btname--]</h4>
                        <div class="tag-group">
                        <span class="tag-title">[!--mvtitle--]([!--year--])</span>
                        <span class="tag-sm tag-size">[!--size--]</span>
                        <span class="tag-sm tag-picture2">[!--picture--]</span>
                        <span class="tag-sm tag-type">类型: [!--type--]</span>
                        </div>
                    </a>
                    <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em" style="border-bottom: none;">
                        <span class="btn__text">磁力链接</span>
                    </a>

                </div>
            </div>
        </div>';
        }elseif (!$r[mvtitle] && $r[bt] && $r[type] && $mv[id]) {
        $listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
            <div class="cta cta--horizontal text-center-xs ">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-10">
                    <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block">
                        <h4 class="list-title">[!--btname--]</h4>
                        <div class="tag-group">
                        <span class="type--bold">[!--year--]</span>
                        <span class="tag-sm tag-size">[!--size--]</span>
                            <span class="tag-sm tag-picture2">[!--picture--]</span>

                            <span class="tag-sm tag-type">类型: [!--type--]</span>
                        </div>
                    </a>
                    <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em">
                        <span class="btn__text">磁力链接</span>
                    </a>

                    <a class="btn-sm bg--primary" href="/download/[!--id--].html">
                        <span class="btn__text"></i>立即下载</span>
                    </a>

                </div>
            </div>
        </div>';
        }elseif ($r[mvtitle] && $r[bt] && !$r[type] && $mv[id]) {
        $listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
            <div class="cta cta--horizontal text-center-xs ">
                <div class="col-sm-2">

                    <a href="/subject/'.$mv[id].'.html" >
                        <img class="cover-pic" alt="[!--mvtitle--]" title="[!--mvtitle--] 最新资源" src="http://image.bt0.com/photo/[!--douban_id--].jpg" />
                    </a>
                </div>
                <div class="col-sm-10">
                    <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block">
                        <h4 class="list-title">[!--btname--]</h4>
                        <div class="tag-group">
                        <span class="tag-title">[!--mvtitle--]([!--year--])</span>

                        <span class="tag-sm tag-size">[!--size--]</span>
                            <span class="tag-sm tag-picture2">[!--picture--]</span>
                        </div>
                    </a>
                    <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em">
                        <span class="btn__text">磁力链接</span>
                    </a>

                    <a class="btn-sm bg--primary" href="/download/[!--id--].html">
                        <span class="btn__text"></i>立即下载</span>
                    </a>

                </div>
            </div>
        </div>';
        }else {
        $listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
            <div class="cta cta--horizontal text-center-xs ">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-10">
                <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block">
                    <h4 class="list-title">[!--btname--]</h4>
                    <div class="tag-group">
                    <span class="tag-sm tag-size">[!--size--]</span>
                        <span class="tag-sm tag-picture2">[!--picture--]</span>
                </a></div>
                <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em">
                    <span class="btn__text">磁力链接</span>
                </a>
                </div>
            </div>
        </div>';
        }

}elseif($r[year]=='0' && $r[type]!=='') {
$listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
    <div class="cta cta--horizontal text-center-xs ">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-10">
            <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block">
                <h4 class="list-title">[!--btname--]</h4>
                <div class="tag-group">
                <span class="tag-sm tag-size">[!--size--]</span>
                    <span class="tag-sm tag-picture2">[!--picture--]</span>

                <span class="tag-sm tag-type">类型: [!--type--]</span>
                </div>
            </a>
            <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em">
                <span class="btn__text">磁力链接</span>
            </a>

            <a class="btn-sm bg--primary" href="/download/[!--id--].html">
                <span class="btn__text"></i>立即下载</span>
            </a>

        </div>
    </div>
</div>';
} elseif ($r[year]!=='0' && $r[year]!=='' && $r[type]=='') {
$listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
    <div class="cta cta--horizontal text-center-xs ">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-10">
            <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block">
                <h4 class="list-title">[!--btname--]</h4>
                <div class="tag-group">
                    <span class="tag-title">[!--year--]</span>
                    <span class="tag-sm tag-size">[!--size--]</span>
                    <span class="tag-sm tag-picture2">[!--picture--]</span>

                </div>
            </a>
            <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em">
                <span class="btn__text">磁力链接</span>
            </a>

            <a class="btn-sm bg--primary" href="/download/[!--id--].html">
                <span class="btn__text"></i>立即下载</span>
            </a>

        </div>
    </div>
</div>';
}else {
$listtemp='<div class="row blog-article-wide '.$class.'" style="border-bottom: none;">
    <div class="cta cta--horizontal text-center-xs ">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-10">
            <a href="/torrent/[!--id--].html" target="_blank" style="dispaly:block">
                <h4 class="list-title">[!--btname--]</h4>
                <div class="tag-group">
                    <span class="tag-sm tag-size">[!--size--]</span>
                    <span class="tag-sm tag-picture2">[!--picture--]</span>
                </div>
            </a>
            <a class="btn-sm tag-magnet" href="[!--magnet--]" style="margin-right: 1em">
                <span class="btn__text">磁力链接</span>
            </a>

            <a class="btn-sm bg--primary" href="/download/[!--id--].html">
                <span class="btn__text"></i>立即下载</span>
            </a>

        </div>
    </div>
</div>';
}
