$mv=$empire->fetch1("select id,title,year,titlepic,director,titleurl from www_92game_net_ecms_movie where id='$r[cid]' order by id desc limit 1");
$i=$i+1;
if($i%2==1){
$class="odd";
}else{
$class="even";
}
$listtemp='<div class="row blog-article-wide">
    <div class="cta cta--horizontal text-center-xs ">
        <div class="col-sm-2">
            <a href="'.$mv[titleurl].'" >
                <img class="cover-pic" alt="'.$mv[title].'" title="'.$mv[title].' 最新资源" src="'.$mv[titlepic].'" />
            </a>
        </div>
        <div class="col-sm-10">
            <a href="[!--titleurl--]" target="_blank">
           <h4 style="margin-bottom: 0.8em">[!--btname--]</h4>
               '.$mv[title].'('.$mv[year].')</h5>
            <span class="tag bg-picture">[!--picture--]</span>
            <span class="tag bg--size">[!--size--]</span>
            <p>导演： '.$mv[director].'</p></a>
                <a class="btn-sm bg--googleplus" href="[!--magnet--]" style="margin-right: 1em">
                    <span class="btn__text">磁力链接</span>
                </a>
                <a class="btn-sm bg--primary" href="http://file.bt0.com/[!--bt--]">
                    <span class="btn__text"></i>立即下载</span>
                </a>
        </div>
    </div>
</div>';