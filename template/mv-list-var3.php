if($r[score]!=='') {
$listtemp='<div class="masonry__item col-md-3 col-sm-6 col-xs-6" data-masonry-filter="[!--this.classname--]">
    <a href="/mv/[!--id--].html" class="block text-block">
        <figure class="effect-sadie">
            <div class="hover-shadow">
                <img style="width: 100%" alt="[!--title--]" src="[!--titlepic--]" />
            </div>
            <figcaption>
                <h2>[!--title--]<br><span>[!--year--]</span></h2>
                <p>又名: [!--ename--]<br>类型: [!--type--]<br>片长: [!--durations--]<br>上映地区: [!--area--]</p>
                <h5>[!--title--]<span class="type--fine-print">([!--year--])</span>
                    <span class="tag-sm tag-picture2">[!--score--]</span>
                </h5>
                <em>[!--score--]</em>
            </figcaption>
        </figure>

    </a>
</div>';
}else {
$listtemp='<div class="masonry__item col-md-3 col-sm-6 col-xs-6" data-masonry-filter="[!--this.classname--]">
    <a href="/mv/[!--id--].html" class="block text-block">
        <figure class="effect-sadie">
            <div class="hover-shadow">
                <img style="width: 100%" alt="[!--title--]" src="[!--titlepic--]" />
            </div>
            <figcaption>
                <h2>[!--title--]<br><span>[!--year--]</span></h2>
                <p>又名: [!--ename--]<br>类型: [!--type--]<br>片长: [!--durations--]<br>上映地区: [!--area--]</p>
                <h5>[!--title--]<span class="type--fine-print">([!--year--])</span>
                </h5>
            </figcaption>
        </figure>
    </a>
</div>';
}
