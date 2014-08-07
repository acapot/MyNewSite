    <div id="container">
        <section class="row">            
            <? 
            //function is in application/helpers/myhelper_helper.php
            //echo portfolio_show_item($project[0]);
            //var_dump($project);
            extract($project[0]);
       
            //var_dump(extract($project[0]));
            include('templates/itemComplete.php');
            ?>            
        </section>
          
    </div>