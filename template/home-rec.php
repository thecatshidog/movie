if($r[score]!=='') {
$listtemp='<div class="masonry__item col-md-3 col-sm-6 col-xs-6" data-masonry-filter="[!--this.classname--]">
    <a href="/subject/[!--id--].html" target="_blank" class="block text-block">
        <figure class="effect-sadie">
                <img class="lazy" alt="[!--title--]" data-original="[!--titlepic--]" />
            <figcaption>
                <h2>[!--title--]<br><span>[!--year--]</span></h2>

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
    <a href="/subject/[!--id--].html" target="_blank" class="block text-block">
        <figure class="effect-sadie">
                <img class="lazy" alt="[!--title--]" data-original="[!--titlepic--]" />
            <figcaption>
                <h2>[!--title--]<br><span>[!--year--]</span></h2>

                <h5>[!--title--]<span class="type--fine-print">([!--year--])</span>
                </h5>
            </figcaption>
        </figure>
    </a>
</div>';
}
