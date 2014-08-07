<div class="col-sm-<?= $size ?> col-lg-<?= $size ?> col-md-<?= $size ?>">
    <div class="thumbnail">
        <h4>
                <a href="<?= base_url()?>portfolio/showProject/<?=$item_id?>/"><?= 'År '.$year.' - '.$title ?></a>
        </h4>
       
        <a class="itemThumbnail col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url('<?= base_url()?>assets/<?= $thumbnail_url ?>');" href="<?= base_url()?>portfolio/showProject/<?= $item_id?>/" ></a>
 
        <div class="caption">
            <p><a href="<?= base_url()?>portfolio/showProject/<?=$item_id?>"><?= $text ?></a>.</p>
        </div>
       
    </div>
</div>