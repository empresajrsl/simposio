<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="Simposio/submissao/css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="Simposio/submissao/css/style.css" ></link>
    <script src="Simposio/submissao/js/jquery-2.1.1.min.js"></script>
    <script src="Simposio/submissao/js/bootstrap.min.js"></script>
    <script src="Simposio/submissao/js/tooltip.js"></script>
    <script src="Simposio/submissao/Chart.js-master/Chart.min.js"> </script>
    <script src="Simposio/submissao/plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="Simposio/submissao/images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Trabalhos Aprovados</title>

	<style type="text/css">
        li{
            font-size: 16px;
            font-weight: 700;
        }
        nav{
            margin-top: -5px;
        }
        .panel-success>.panel-heading{
          background-color: #A8C660;
          color: white;
        }


    </style>
</head>
<body>

	<?php require_once('estruturaHeader.php') ?>
  <div id="main_content" class="row">
    
<div class="container-fluid">
   
   
    <!-- <div class="jumbotron"> --><p>
    	<div class="panel panel-success">
    		<div class="panel-heading"><h3><b>Trabalhos aprovados</b></h3></div>
    		<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Titulo</th><th>√Årea</th><th>Categoria</th><th>Autor 1</th><th>Autor 2</th><th>Autor 3</th><th>Autor 4</th><th>Autor 5</th>
							</thead>
							<tbody id="trabaprovado">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
  <!-- </div> --></p>

  <script type="text/javascript">
    $(document).ready(function(){
      var env = {};
      $.ajax({
                type: "POST",
                url: "resultadofinal.php",
                data: env,
                dataType : 'json',
                success: function(data){
                    console.log(data);
                    var linha;
                    var count = 0;
                    $.each(data,function(key,val){
                      var nota1 = parseFloat(data[key]['notafinal']);
                      var nota2 = parseFloat(data[key]['nota2']);
                      var media =  nota1 + nota2;
                      media = String(media);
                      media = media.substring(0, 3);
                      linha = "<tr>";

                      $.each(data[key],function(indice,valor){

                        if(indice == "id_usuario1" || indice == "id_usuario2" || indice == "id_usuario3" || indice == "id_usuario4" || indice == "id_usuario5"){
                          
                          return;
                        }

                        if(indice == "nome1" || indice == "nome2" || indice == "nome3" || indice == "nome4" || indice == "nome5"){
                          if(valor != null){
                          var valormauisculo = valor.toUpperCase();
                          linha+="<td>"+valormauisculo+"</td>";
                          }else{
                            linha+="<td>  </td>";
                          }
                          
                          return;
                        }
                        
                        if(indice == "titulo"){
                          var valormauisculo = valor.toUpperCase();
                          linha+="<td>"+valormauisculo+"</td>";
                          return;
                        }
                        
                        linha+="<td>"+valor+"</td>";
                        
                      });


                      linha+="</tr>";

                      $("#trabaprovado").append(linha);

                        
                    
                    });
                 

                }, error: function(data) {
                      console.log(data);
                      $('#trabaprovado').append('<b>nenhum trabalho foi aprovado atÈ o momento </b>');
                  }
        });
    });
  </script>