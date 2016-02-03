
<?php $nome = $_SESSION['admnome']; ?>
	<style type="text/css">
        li{
            font-size: 18px
        }
        nav{
            margin-top: -5px;
        }

    </style>
		<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#" style="font-size:28px">Sgagro</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="estatisticas.php"><span class="glyphicon glyphicon-stats" ></span> Estatisticas</a></li>
              <li><a href="avaliadores_cad.php"><span class="glyphicon glyphicon-education" ></span> Avaliadores cadastrados</a></li>
              <li><a href="atribuiravaliador.php"><span class="glyphicon glyphicon-star" ></span> Atribuir avaliadores</a></li>
              <li><a href="cadadm.php"><span class="glyphicon glyphicon-plus" ></span> Novo Administrador</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $nome;  ?>  </a></li>
              <li><a href="#"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
            </ul>
          </div>
        </nav>



