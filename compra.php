<?php
session_start();
?>

<?php

include "conexao.php";


if(isset($_POST['submit'])) {
    $nome_emp = $_POST['nome'];
    $email_emp = $_POST['email']; 
    $produto_emp = $_POST['produto'];
    $servico = $_POST['servico'];
    $urgencia = $_POST['urgencia'];


    $sql = "INSERT INTO `servico`(`id_serv`, `nome_emp`, `email_emp`,`produto_emp`, `servico`,`urgencia`) VALUES (Null,'$nome_emp','$email_emp','$produto_emp','$servico','$urgencia')";

    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location: index.html?msg= Novo cadastro feito com sucesso");
    }else {
        echo "Erro na linha" . mysqli_error($conn);
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Pacheco</title>
</head>

<body>
 
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff55df;
">
     Parceria com Pacheco Barroso
</nav>


<div class="container">
    <div class="text-center mb-4">
        <h3>Serviços</h3>
        <p class="text-muted">Preencha o formulário para fazer o seu pedido </p>
    </div>

     <?php
      $nome_emp = "";
      $email_emp = "";  
      $produto_emp = "";
      $servico = "";
      $urgencia = "";

      if (isset($_POST["btnsubmit"])){
        
        $nome_emp = $_POST["nome"];
        $email_emp = $_POST["email"];  
        $produto_emp = $_POST["produto"];
        $servico = $_POST["servico"];
        $urgencia= $_POST["urgencia"];

         /*echo "<pre>";
         var_dump($_POST);
         echo "</pre>";*/
      }
        
     ?>
     
  <div class="container d-flex   justify-content-center">
        <form autocomplete="off" class="form" role="form" action="add_new.php" method="post" style="width:50vw; min-width:300px;">
    
        <div class="row">
            <div class="col">
                <label class="form-label">Nome da empresa</label>
                <input type="text" id="nome" class="form-control" name="nome" value="<?php echo $nome_emp;?>" placeholder="Insira o nome aqui" required>

            </div>

            <div class="col">
                <label class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" value="<?php echo $email_emp;?>" placeholder="Insira o email aqui" required>
                
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo de Produto que vende</label>
                <input type="text"  class="form-control" id="produto" name="produto" value="<?php echo $produto_emp;?>" placeholder="Insira o tipo de produto que vende" required>
                
            </div>

            
            <div class="mb-3">
                <label class="form-label">Serviço</label>
                <input type="text" class="form-control" id="servico" value="<?php echo $servico;?>" name="servico" placeholder="No que podemos ajudar?" required>
                
            </div>

            <div class="mb-3">
                <label class="form-label">Grau de Urgencia</label>
                <input type="text" class="form-control" id="urgencia" name="urgencia" value="<?php echo $urgencia;?>"required>  
            </div>
      </div>

           
           <button type="submit" class="btn btn-success" name="submit" >Aderir</button>  
           <a href="index.html" class="btn btn-danger">Cancelar</a>
        
           <div class="text-center" style="position:relative;left:200px;bottom:80px;">
 
     


        </div>


        </form>

       
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


 
  

</body>
</html>
