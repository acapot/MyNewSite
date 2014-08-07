    <div id="container">
        <section class="formNew col-lg-12 col-md-12 col-sm-12 col-xs-12">
		    <h1>Updatera projektet</h1><br/>
		  
		    <hr/>
		  <? //var_dump($categories)?>
		    <form class="row" action="<?= base_url()?>admin/updateReference/" method="post">
		    		
		    	<div id="inputsUpp" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		    		
		    		<? extract($item[0])?>
			    	<input value="<?= $id ?>" type="hidden" name="id" class="form-control" >
			    	<label class="control-label" for="title">Projekt Title:</label><div class="controls">		    	
			    	<input value="<?= $title ?>" type="text" name="title" class="form-control" >
			    	<br/><br/>

			    	<label class="control-label" for="year">Projekt year:</label><div class="controls">		    	
			    	<input value="<?= $year ?>" type="text" name="year" class="form-control" >
			    	<br/><br/>
			    	
			    	<label class="control-label" for="description">Projekt Beskrivning:</label>
			      	<textarea rows="10" cols="50" clase="form-control col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" name="description" ><?= $text ?></textarea>
			      	<br/><br/>

			      	<label class="" for="url">Nytt projekt URL path :</label>
			      	<input value="<?= $url ?>" type="text" name="url" class="form-control" >

		      	</div>
		      	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

		      		<?php  foreach ($categories as $cat): ?>
		      				<? extract($cat)?>
	      				<?php  if ($id != 0): ?>
	      							<?php  if ($checked): ?>
                    					<input type="checkbox" name="categories[]" value="<?= $id ?>" checked><?= $name ?><br>
                    				<?php  else:?>
                    					<input type="checkbox" name="categories[]" value="<?= $id ?>"><?= $name ?><br>
                    				<?php  endif ?>
                		<?php  endif ?>
                    <?php endforeach; ?><br/>

                    <label class="control-label" for="thumbnail">Liten bild: </label>
		      		<input class="btn btn-primary btn-xs" placeholder="" type="file" name="thumbnail"><br/>
                    <button class="btn btn-success btn-xs " type="submit">Updatera</button>
		      	</div>

		      	
		    </form>
		</section>
          
    </div>