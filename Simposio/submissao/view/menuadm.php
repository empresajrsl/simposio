
<?php if(isset($_SESSION['admnome'])){
        $nome = $_SESSION['admnome'];
      } ?>
	<style type="text/css">
        li{
            font-size: 16px;
            font-weight: 700;
        }
        nav{
           
        }

    </style>
    
    <div class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
              <a class="navbar-brand" href="#" style="font-size:28px;color:white">SGAgro</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="estatisticas.php"><span class="glyphicon glyphicon-stats" ></span> Estatisticas</a></li>
              <li><a href="avaliadores_cad.php"><span class="glyphicon glyphicon-education" ></span> Avaliadores </a></li>
              <li><a href="atribuiravaliador.php"><span class="glyphicon glyphicon-star" ></span> Atribuir avaliadores</a></li>
              <li><a href="trabalhos.php"><span class="glyphicon glyphicon-search" ></span> Trabalhos</a></li>
              <li><a href="atribcorrecao.php"><span class="glyphicon glyphicon-pencil" ></span> Notificar correções </a></li>
              <li><a href="cadadm.php"><span class="glyphicon glyphicon-plus" ></span> Novo Administrador</a></li>
              <li><a href="trabautores.php">Autores</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right"style="margin-right: 1%">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION['admnome'])){ echo $nome;}  ?>  </a></li>
              <li><a href="../sessao/fecharsessao.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
            </ul>
        </nav>
        </div>

		<!--nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#" style="font-size:28px;color:white">SGAgro</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="estatisticas.php"><span class="glyphicon glyphicon-stats" ></span> Estatisticas</a></li>
              <li><a href="avaliadores_cad.php"><span class="glyphicon glyphicon-education" ></span> Avaliadores cadastrados</a></li>
              <li><a href="atribuiravaliador.php"><span class="glyphicon glyphicon-star" ></span> Atribuir avaliadores</a></li>
              <li><a href="cadadm.php"><span class="glyphicon glyphicon-plus" ></span> Novo Administrador</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $nome;  ?>  </a></li>
              <li><a href="../sessao/fecharsessao.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
            </ul>
          </div>
        </nav-->



