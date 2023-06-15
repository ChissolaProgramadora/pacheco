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
 
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;
">
     Parceria com Pacheco Barroso
</nav>


<div class="container">
    <div class="text-center mb-4">
        <h3>Empresa parceira</h3>
        <p class="text-muted">Faça login para entrar como parceiro</p>
    </div>

     
  <div class="container d-flex          justify-content-center">
        <form autocomplete="off" class="form" role="form" action="add_new.php" method="post" style="width:50vw; min-width:300px;">
    
        <div class="row">

            <div class="col">
                <label class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email"  placeholder="Insira o email aqui" required>
                
            </div>


            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" required>  
            </div>
     

           <button type="submit" class="btn btn-success" name="submit"><a href="index.html" style="text-decoration: none;color:white;">Entrar</a></button>  
      </div>
            
           
        
           <div class="text-center" style="position:relative;left:200px;bottom:80px;">
           </div>
       <br>
       

        </form>

       
    </div>
      <button style="position:relative;left:336px;" type="submit" class="btn btn-dark" name="submit" ><a href="add_new.php" style="text-decoration: none;color:white;" >Cadastrar-se</a></button>
   
   
</div>



 
  

</body>
</html>
