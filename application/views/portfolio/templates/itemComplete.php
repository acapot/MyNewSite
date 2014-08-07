     <h1>Projekt "<?= $title?>"</h1><br/>
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <?      
         $instruction = "Klicka på bilden för att gå till webbidan.";
         ?>
         
         <? if($thumbnail_url_video): ?>
        
         <? $instruction = ""; ?>    
             <video controls class="showGraterImg col-lg-12 col-md-12 col-sm-12 col-xs-12" href="/show.php?id=<?= $id?>" src="<?=base_url();?>assets/<?= $thumbnail_url_video?>" type="video/mp4"></video>
             
         <? else: ?> 
            <a class="showGraterImg col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url('<?=base_url()?>assets/<?= $thumbnail_url?>');" href="<?= base_url(); echo $url?>" ></a>
         <? $instruction = "Klicka på bilden för att gå till webbidan."?>
              
         <? endif;?>
     </div>

     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 
         <?= $text?>
                    
            <span id="showBoldText"><?= $instruction ?></span>
         <p>
            <a href="<?= base_url() ?>portfolio">Tillbaka</a>
         </p>
     </div>