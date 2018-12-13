<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Nova Cerveja</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">      
  </head>

  <body> 
  <?php if($this->session->userdata('usuario_logado')) : ?>   

    <div class="container">
      <div>                
        <h1>Cadastro novo Usuario</h1>       
        <form action="/td/usuarios/salvar" name="form_add" method="post">

          <div class="row">
            <div class="col-md-8">
              <label>Nome</label>
              <input type="text" name="nome" value="" class="form-control">
            </div>
          </div>


          <div class="row">
            <div class="col-md-8">
              <label>E-mail</label>
              <input type="email" name="email" value="" class="form-control">
            </div>
          </div> 

          <div class="row">
            <div class="col-md-8">
              <label>Senha</label>
              <input type="text" name="senha" value="" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Administrador</label>
              <select name="admin" class="form-control">
                <option selected value="0">Não</option>
                <option value="1">Sim</option>                
              </select>
            </div>  
          </div>
          
          <br />

          <div class="row">
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    
    <?php else : ?>
      <a href="/td/login">Voce não esta logado Clique aqui para se logar </a>
    <?php endif ?>
  
  </body>
</html>
