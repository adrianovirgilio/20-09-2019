<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listagem de alunos</title>
  </head>
  <body>
        <div class="container-fluid">
        <!-- <div class="table-responsive"> -->
        <table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">Matrícula</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
  <?php
     require_once("classes/aluno.class.php");
     require_once("classes/banco.class.php");
     $objeto = new Aluno();
     $lista = $objeto->selecionarAlunos();
     foreach($lista as $registro){
         echo "<tr class='table-success'>";
         echo "<th scope='row'>". $registro->matricula ."</th>";
         echo "<th scope='row'>". $registro->nome ."</th>";
         echo "</tr>";              
    }
    ?>     
  </tbody>
</table>
</div>                        
       <!-- </div> -->
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
