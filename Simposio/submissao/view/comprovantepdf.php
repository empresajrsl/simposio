<?php
  include('../MPDF60/mpdf.php');

  $nomeartigo = "asdafdfsdfgfhgghfgjhjhjjjkgjklghk lgkjljlkjçjklçlkçkljçklçklçjklçklç jklçjklçklçjlçljkl lçjjçkjklklçklçlkçklçkljçlkçlkç";
  $categoria = "Marketing e Negocios";
  $area = "Iniciação Cientifica";

  $nome1 = "Anderson Cardoso Lima ";
  $cpf1 = "1232456789";
  $filiacao1 = "FESLJ - Faculdade São Luis de Jaboticabal";

  $nome2 = "Pedro Henrique";
  $cpf2 = "1232456789";
  $filiacao2 = "FESLJ - Faculdade São Luis de Jaboticabal";

  $nome3 = "Carlos Eduardo";
  $cpf3 = "1232456789";
  $filiacao3 = "FESLJ - Faculdade São Luis de Jaboticabal";

  $nome4 = "João Paulo da Silva";
  $cpf4 = "1232456789";
  $filiacao4 = "FESLJ - Faculdade São Luis de Jaboticabal";

  $nome5 = "Timoteo Teotoneo Tavarez";
  $cpf5 = "1232456789";
  $filiacao5 = "FESLJ - Faculdade São Luis de Jaboticabal";

  $qtdcoautores = 4;

  $opc1 ="
  <div><b>Coautor 1: </b>".$nome2."</div>
  <div><b>CPF: </b>".$cpf2."</div>
  <div><b>Filiação: </b>".$filiacao2."</div>
  <br/>
  ";

  $opc2 ="
  <div><b>Coautor 2: </b>".$nome3."</div>
  <div><b>CPF: </b>".$cpf3."</div>
  <div><b>Filiação: </b>".$filiacao3."</div>
  <br/>
  ";

  $opc3 ="
  <div><b>Coautor 3: </b>".$nome4."</div>
  <div><b>CPF: </b>".$cpf4."</div>
  <div><b>Filiação: </b>".$filiacao4."</div>
  <br/>
  ";

  $opc4 ="
  <div><b>Coautor 4: </b>".$nome5."<b></div>
  <div><b>CPF: </b>".$cpf5."</div>
  <div><b>Filiação: </b>".$filiacao5."</div>
  <br/>
  ";

  $htmlinicio="
  <html>
  <head>
    <meta charset='utf-8'>
    <style>
      b {color: green;}
    </style>
  </head>
  <body>
    
    <div style='border: 1px solid green; border-radius: 1%;'>
      <div style='margin: 2%;'>
        <img src='../images/SGAGRO LOGO.png' style='width: 10%; height: 10%;'>
        <img src='../images/unesp.jpg' style='width: 10%; height: 10%;'>
        <h2 style='margin-left: 25%; margin-top: -7%; color: green;'>Comprovante de Participação</h2>
      </div>
    </div><br/>

    <div style='border: 1px solid green; border-radius: 1%;'>
      <div style='margin: 2%;'>
        <div><b>Titulo do Artigo: </b>".$nomeartigo."</div>
        <div><b>Categoria: </b>".$categoria."</div>
        <div><b>Area: </b>".$area."</div>
      </div>
    </div><br/>

    <div style='border: 1px solid green; border-radius: 1%;'>
      <div style='margin: 2%;'>
      <div><b>Autor: </b>".$nome1."</div>
      <div><b>CPF: </b>".$cpf1."</div>
      <div><b>Filiação: </b>".$filiacao1."</div>
      <br/>
  ";

  $htmlmeio = "<b>Erro</b>";

  $htmlfim ="           
    </div>
    
  </body>
  </html>
  ";

  if ($qtdcoautores == 0) {$htmlmeio = "<b>Não há coautores cadastrados.</b>";}
  if ($qtdcoautores == 1) {$htmlmeio = $opc1;}
  if ($qtdcoautores == 2) {$htmlmeio = $opc1.$opc2;}
  if ($qtdcoautores == 3) {$htmlmeio = $opc1.$opc2.$opc3;}
  if ($qtdcoautores == 4) {$htmlmeio = $opc1.$opc2.$opc3.$opc4;}

  $mpdf = new mPDF();
  $mpdf->WriteHTML($htmlinicio.$htmlmeio.$htmlfim);
  $mpdf->Output();
  exit();
?>