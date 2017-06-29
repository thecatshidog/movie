$mv=$empire->fetch1("select id from www_92game_net_ecms_movie where douban_id='$r[douban_id]' limit 1");

$listtemp='<div class="masonry__item col-md-3 col-sm-6" data-masonry-filter="[!--this.classname--]">
    <article class="feature feature-1">
        <a href="/review/[!--id--].html" class="block">
            <img alt="[!--title--]" src="http://image.bt0.com/photo/[!--douban_id--].jpg" />
        </a>
        <div class="feature__body boxed boxed--border">
            <span>[!--newstime--]</span>
            <h5>[!--title--]</h5>
            <a href="/review/[!--id--].html">
                阅读更多
            </a>
        </div>
    </article>
</div>';