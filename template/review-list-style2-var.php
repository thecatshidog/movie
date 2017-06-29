$mv=$empire->fetch1("select id from www_92game_net_ecms_movie where douban_id='$r[douban_id]' limit 1");
$listtemp='<article class="masonry__item filter-web-design">
    <div class="article__title" style="margin-bottom: 2.2em">
        <a href="/review/[!--id--].html" target="_blank">
            <h2>[!--title--]</h2>
        </a>
        <span>[!--newstime--] 评 </span>
        <span><a href="/subject/'.$mv[id].'.html" target="_blank" style="text-decoration: none">[!--mvtitle--]</a></span>
    </div>
    <!--end article title-->
    <div class="article__body">
        <p>[!--smalltext--]</p>

        <a href="/review/[!--id--].html" target="_blank">阅读全文 »</a>
    </div>
</article>';

