<?php

$servername = "localhost";
$username = "thay";
$password = "tayane15";
$database = "fseletro";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Aconexão ao BD falhou: " . mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg'])){

    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

   $sql = "insert into comentarios (nome, msg) values ('$nome','$msg')";
   $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>KoreanStore</title>
        <link rel="icon" href="imagem/bts.png">
        <link rel="stylesheet" href="./css/css.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
  
    <body>
           <!--Menu-->
      
<?php
  include_once('menu.html');
?>
         <!-- Fim Menu-->

         <header>
            <h2 class="display-4 text-danger">Fale Conosco</h2>
        </header>

       <hr>


<div class="container">
      <section class="contato row">
           <div class="logo col-ms-4 text-center">
            <img src="./imagem/logo-email.png" width="40px">
              contato@koreanstore.com
           </div>   

           <div class="logo col-ms-4 text-center">
            <img src="./imagem/whatsapp-icone-4.png" width="45px">
                (11) 9999-9999
        </div>
    </section>     
 </div>  

  <form class="container" method="post">
      <div class="form-group mx-5 text-center">  
         <h4>Nome: </h4>
         <input class="msg form-control border border-danger mb-4 " name="nome" type="text" >
     
 
        <h4>Mensagem: </h4>
        <textarea class="msg form-control border border-danger" name="msg"></textarea>

        <input class="btn btn-danger mb-4 mr-sm-2 btn-block mt-4" type="submit" value="Enviar">

    </div>
  </form>

  <h2 class="text-danger" style="text-align: center; margin-top:50px;">Depoimentos</h2>



 <?php
 $sql = "select * from coment";
 $result = $conn->query($sql);

 if ($result->num_rows>0){


     while($rows = $result->fetch_assoc()){
 ?>
<div class="container">
 <p ><?php echo $rows["msg"]; ?> </p>
 <p>Nome : <?php echo $rows["nome"]; ?> </p>
 <hr>
 <div>
 <?php

     } 
     
}

else{
  echo "Nenhum comentário ainda!";
}

 ?>



<?php
  include('rodape.html');
?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>