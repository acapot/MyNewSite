<div id="container">
    <section>
      
        <form action="<?= base_url()?>portfolio/showByCategory/" method="post">
            <ul class="nav nav-pills" >
               
                <?php  foreach ($categories as $cat): ?>
                    <li><button name="categoryId" class="btn btn-primary btn-xs" value="<?= $cat['id'] ?>"><?= $cat['name'] ?></button></li>

                <?php endforeach; ?>
                <li></li>
          
            </ul><br/>
            sortera projekten för:
            <a class="btn btn-success btn-xs" href="#/app/sort/year">År</a>
            <a class="btn btn-success btn-xs" href="#/app/sort/title">Titel</a>
            <a class="btn btn-success btn-xs" href="#/app/sort/text">Text</a>
            <a class="btn btn-success btn-xs" href="#/app/sort/id">Id</a>
             <hr/>
        </form>
    </section>
    <div class="col-md-12">
        <div id="projectContainer" class="row">
            <?php
                foreach ($projects as $p):
                    extract($p);
                    include('templates/item.php');
                endforeach 
            ?>                                
        </div>
    </div>
</div>
    