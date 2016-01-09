<?php 


// conta quantos cadastros existem
$busca = select('count(id_usuario) as total','sl_cadusu','');
$totalcad = $busca[0]['total'];

// conta quantos cadastros existem
$busca = select('count(id_artigo) as total','sl_artigo','');
$totaltrab = $busca[0]['total'];



?> 


<script type="text/javascript">

function placar(total,id){
	$(document).ready( function(){
		var totalusu = total ;
		var string = totalusu.toString(); 
		if(string.length == 3){
			var x = 0;
			var um = string.charAt(0);
			var dois = string.charAt(1);
			var tres = string.charAt(2);

			for(x=0;x<10;x++){
				console.log("loop"+x);
				if(um == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			for(x=0;x<10;x++){
				console.log("loop"+x);
				if(dois == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			for(x=0;x<10;x++){
				console.log("loop"+x);
				if(tres == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}
		}

		if(string.length == 2){
			var x = 0;
			var um = string.charAt(0);
			var dois = string.charAt(1);
			var tres = string.charAt(2);

			for(x=0;x<10;x++){
				console.log("loop"+x);
				if(um == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			for(x=0;x<10;x++){
				console.log("loop"+x);
				if(dois == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			
		}

		if(string.length == 1){
			var x = 0;
			var um = string.charAt(0);
			

			for(x=0;x<10;x++){
				
				if(um == x){
	$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%; margin-left:50px; margin-right:60px">');
				}
			}

					
		}
		
		
	});
}

var usuarios = <?php echo "'$totalcad'"; ?>;
var trabalhos = <?php echo "'$totaltrab'"; ?>;

placar(usuarios,"usuarios");
placar(trabalhos,"trabalhos");
placar(0,"trabaprovado");
placar(0,"inscricao");

</script>