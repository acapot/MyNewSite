    <div id="container">
        <section class="formNew col-lg-12 col-md-12 col-sm-12 col-xs-12">
		    <h1>Nytt projekt eller kategory</h1><br/>
		    <h3>Lägg till en ny kategory</h3><br/>
		    <form class="row" action="<?= base_url()?>admin/insertCategory/" method="post">
		    	<div id="inputsUpp" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">		    	
			    	<label class="control-label" for="addCategory">Lägga till bara en ny kategory:</label>
			      	<input value="" placeholder="" type="text" id="addCategory" name="addCategory">
			      	<button class="btn btn-success btn-xs " type="submit" class="btn btn-success btn-xs">Ny kategory</button>
		      	</div>
		    </form>
		    <hr/>
		    <h3>Lägg till ett nytt projekt</h3><br/>
		    <form class="row" action="<?= base_url()?>admin/createNewReference/" method="post">
		    		
		    	<div id="inputsUpp" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		    		
			    	<label class="control-label" for="title">Nytt projekt Title:</label><div class="controls">		    	
			    	<input value="" type="text" name="title">
			    	<br/><br/>

			    	<label class="control-label" for="year">Nytt projekt År:</label><br/>
			      	<input value="" type="text" name="year">
			      	<br/><br/>

			    	<label class="control-label" for="description">Nytt projekt Beskrivning:</label>
			      	<input value="" type="text" name="description">
			      	<br/><br/>

			      	<label class="control-label" for="url">Nytt projekt URL path :</label>
			      	<input value="" type="text" name="url">

		      	</div>
		      	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

		      		<?php  foreach ($categories as $cat): ?>
		      			<?php  if ($cat['id'] != 0): ?>
                        	<input type="checkbox" name="categories[]" value=<?= $cat['id']?>><?= $cat['name']?><br>
                    	<?php  endif ?>
                    <?php endforeach; ?><br/>

                    <label class="control-label" for="thumbnail">Liten bild: </label>
		      		<input value="" placeholder="" type="file" name="thumbnail"><br/>
                    <button class="btn btn-success btn-xs " type="submit">Skapa</button>
		      	</div>

		      	
		    </form>
		</section>
          
    </div>