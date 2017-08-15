if($r[douban_id]!=='') {
$listtemp='<div class="masonry__item col-md-3 col-sm-6 col-xs-6" data-masonry-filter="[!--this.classname--]">
    <a href="/btube/[!--id--].html" target="_blank" class="block text-block">
        <div class="hover-shadow">
            <img style="width: 100%" alt="[!--title--]" src="https://bttt.gq/photo/[!--douban_id--].jpg" />
        </div>
    </a>
    <div class="text-center">
        <h5>[!--title--]<span class="type--fine-print">([!--year--])</span>  </h5>
    </div>
</div>';
}else {
$listtemp='<div class="masonry__item col-md-3 col-sm-6 col-xs-6" data-masonry-filter="[!--this.classname--]">
    <a href="/btube/[!--id--].html" target="_blank" class="block text-block">
        <div class="hover-shadow">
            <img style="width: 100%" alt="[!--title--]" src="[!--photo_remote--]" />
        </div>
    </a>
    <div class="text-center">
        <h5>[!--title--]<span class="type--fine-print">([!--year--])</span></h5>
    </div>
</div>';
}
