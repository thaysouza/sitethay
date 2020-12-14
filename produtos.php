<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

/*$servername = "sql313.epizy.com";
$username = "epiz_27423245";
$password = "9VnIa8c2ahO";
$database = "epiz_27423245_fseletro"; */

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Aconexão ao BD falhou: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="icon" href="imagem/bts.png">
        <link rel="stylesheet" href="./css/css.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="./js/funcao.js"></script>
    </head>
  
    <body>
        
  <!--Menu-->

<?php
  include('menu.html');
?>

 <!-- Fim Menu-->
 <div class="container-fluid">
   <header>
       <h2 class="display-4 text-danger">Produtos</h2>
   </header>
       <hr>

       <section class="categorias mt-2">
               
                <ol class="list-group"> 
                    <li class="list-group-item list-group-item-danger" onclick="exibir_todos()">Todos (18)</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('jardineira')">Jardineiras</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('blusa')">Blusas</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('saia')">Saias</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('jaqueta')">Jaquetas</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('vestido')">Vestidos</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('calca')">Calças</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('sapato')">Sapatos</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('moletom')">Moletons</li>
                    <li class="list-group-item list-group-item-danger" onclick="exibir_categoria('diverso')">Diversos</li>
                   </ol>
        </section>
  
        <section class="produtos">

 <?php
 $sql = "select * from produtos";
 $result = $conn->query($sql);
 
 if ($result->num_rows>0){
     while($rows = $result->fetch_assoc()){
 
 ?>       
 
   <div class="box_produto mb-4" id="<?php echo $rows["categoria"]; ?>">
   <img class="itens img-fluid"  src="<?php echo $rows["imagem"]; ?>" onmouseover="destaque(this)"
   onmouseout="destaque(this)">
   <br>
   <p class="descricao"><?php echo $rows["descricao"]; ?></p>
   <hr>
   <p class="descricao-preco">R$<?php echo $rows["preco"]; ?> </p>
   <p class="text-danger preco">R$<?php echo $rows["precofinal"]; ?> </p>
   <a class="btn btn-danger" href="comprar.php">Comprar</a>
  </div>


 <?php
     }
}
else{
  echo "Produto não cadastrado!";
}


 ?>
             
       </section>
       </div>
  <div class="clear"></div>              
 <div class="container">
  <footer id="rodape">
  <h5 class="text-danger"><b>Formas de pagamento:</b></h5>
    <img src="./img/forma-pagamento.png" alt="Formas de pagamento" width="350px" height="45px"><!--arrumar isso-->
    <p>Todos os direitos reservados - Thay Souza</p>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>

</html>