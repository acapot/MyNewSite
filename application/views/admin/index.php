    <div id="container">
        <section>
            	<p>Testa att radera, uppdatera, redigera  eller skapa en helt nytt projekt inom databasen. Du kan ändra de låtsas projekten och det är dem med <b> gröna knappar</b>. Bilder sparas inte inom test miljö. Checka dina ändringar på "Portfolio" link på menyn.</p>
            	<b>Du kan klicka på "Headers" för att ordna tabelen (gjort med Backbonejs).</b>
				<hr/>
				<p>Skapa ett nytt projekt</p>

				<a class="btn btn-primary btn-xs" href="<?=base_url()?>admin/newReference/">Nytt projekt</a>
				<hr/>

				<script id="portfolio-table" type="text/template">

				 <thead>
					  <tr>
						   <th column="year"><div>År</div></th>
						   <th column="title"><div>Projektsnamn</div></th>
						   <th column="text"><div>Beskrivning</div></th>
						   <th column="buttons"><div>Klicka på de gröna knapparna</div></th>
					  </tr>
				 </thead>
				 <tbody>

				 </tbody>

				</script>

				<div class="wrapper"></div>

				<script id="portfolio-row" type="text/template">
				   <td><div><%= year %></div></td>
				   <td><div><%= title %></div></td>
				   <td><div><%= text %></div></td>
				   <td><div>
				   			<ul>
					   			<form action="<?= base_url()?>admin/edit/" method="post">
		                     		<% if(test!=0) {%>
		                      			<li><button class="btn btn-success btn-xs " name="id" type="submit" value="<%= item_id %>">Redigera</button></li>
		                      		<%}else {%>
		                      			<li><button class="btn btn-danger btn-xs " name="id" type="submit" disabled>Redigera</button></li>
		                      		<% }%>
		                      	</form>
		                      	<form action="<?= base_url()?>admin/delete/" method="post">
		                     		<% if(test!=0) {%>
		                      			<li><button class="btn btn-success btn-xs " name="id" type="submit" value="<%= item_id %>">Radera</button></li>
		                      		<%}else {%>
		                      			<li><button class="btn btn-danger btn-xs " name="id" type="submit" disabled>Radera</button></li>
		                      		<% }%>
		                      	</form>
	                      	</ul>
	                      	</div></td>
				   
				</script>

				
			
				

        </section>
          
    </div>