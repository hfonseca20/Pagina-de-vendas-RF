	<footer class="rodape">
		<div class="rodape-back-1">
			<div class="social">
			</div>
		</div>
		<div class="rodape-back-2">
			<p><!--Designed by <strong><a href="" target="_blank">Pablo Phaedra</a></strong> and Developed by <strong><a href="" target="_blank">Max Silva</a></strong></br>--><strong>&copy; 2021 Todos os direitos reservados.</strong></p>
		</div>
	</footer>
	<script type="text/javascript">
		var btn = document.getElementById('mobile-btn');
		var menu = document.getElementById('menu');

		// Atribui evento de click para o btn
		btn.addEventListener("click", function(){
			console.log('dd')
			btn.classList.toggle('active')
			menu.classList.toggle('active')
		})

		/* Ativar Modal */
        function iniModal(modalId){
            const modal = document.getElementById(modalId);
            modal.classList.add('mostrar');
            modal.addEventListener('click', (e)=>{
                if(e.target.id == modalId || e.target.className == 'fechar'){
                    modal.classList.remove('mostrar');
                }
            });
        }
	</script>
	
<?php wp_footer(); ?>
	<script src="<?= get_template_directory_uri(); ?>/assets/js/jq.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/assets/js/javascript.js"></script>

	<script>
    	$( document ).ready(function() {
                    
                    
                    $( "#form" ).submit(function( event ) {
              
                            event.preventDefault();
                            
                         
                           // var dados = $(this).serialize();
                           var nme = $( "#nome" ).val();
                           var eml = $( "#email" ).val();
                           var id1 = $( "#id" ).val();
                           var pid1 = $( "#pid" ).val();
                           var list_id1 = $( "#list_id" ).val();
                           var provider1 = $( "#provider" ).val();
                     
                           $.ajax({
                              url: "https://paginas.rocks/Pages/Index/16661415",
                              type: 'POST',
                              data: {name: nme, email: eml,id: id1, pid: pid1, list_id: list_id1, provider: provider1},
                              beforeSend: function(){
                                  $("#loading").show();
                              }
                            })
                            .always(function() {
                                $("#loading").hide();
                                $("#msg-ebook").show();
                              });
                            
                          
                    });

               
         });
	
	    
	</script>
</body>
</html>