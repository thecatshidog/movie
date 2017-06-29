if($r[score]!=='') {
$listtemp='<div class="masonry__item col-md-3 col-sm-6 col-xs-6" data-masonry-filter="[!--this.classname--]">
    <a href="/mv/[!--id--].html" target="_blank" class="block text-block">
        <div class="hover-shadow">
            <img style="width: 100%" alt="[!--title--]" src="[!--titlepic--]" />
        </div>
    </a>
    <div class="text-center">
        <h5>[!--title--]<span class="type--fine-print">([!--year--])</span> <span class="tag-sm tag-picture2">[!--score--]</span> </h5>
    </div>
</div>';
}else {
$listtemp='<div class="masonry__item col-md-3 col-sm-6 col-xs-6" data-masonry-filter="[!--this.classname--]">
    <a href="/mv/[!--id--].html" target="_blank" class="block text-block">
        <div class="hover-shadow">
            <img style="width: 100%" alt="[!--title--]" src="[!--titlepic--]" />
        </div>
    </a>
    <div class="text-center">
        <h5>[!--title--]<span class="type--fine-print">([!--year--])</span></h5>
    </div>
</div>';
}
