<!DOCTYPE html>
<html>
<head>
  <title>Roadmap</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <link href="/roadmap/css/estilo_roadmap.css"
  type="text/css" rel="stylesheet">
</head>

<body>


  <body background="/roadmap/img/site/background1.jpg" />

  <h1><strong>Roadmap</strong></h1>
  <!--tag de php dinamica para associar a outra pagina (botoes)-->
  <?php

      require_once("includes/menu/menu.php");
  ?>
<!-- fechando tag de php dinamica para associar a outra pagina (botoes)-->

</br>
</br>
<table id="tabela1"  border="1">
  <tr>
    <td><em>Roadmap Semanal</em></td>
  </tr>
</table>


</br>
</br>

<!--tag de php dinamica para associar a outra pagina (semana 1)-->
<?php

    require_once("includes/semana/semana1.php");
    require_once("includes/semana/semana2.php");
?>
<!--fechando tag de php dinamica para associar a outra pagina (semana 1)-->


    </body>
    </html>
