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
        <h1>Cadastrar Nova Cerveja</h1>       
        <form action="/td/cervejas/salvar" name="form_add" method="post">

          <div class="row">
            <div class="col-md-8">
              <label>Nome</label>
              <input type="text" name="nome" value="" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Tipo</label>
              <select name="tipo" class="form-control">
                <option selected value="">Escolha</option>
                <option value="Pilsen">Pilsen</option>
                <option value="Weizen">Weizen </option>
                <option value="Lager americana">Lager americana </option>
                <option value="Witbier">Witbier</option>
                <option value="Apa">Apa </option>
                <option value="Porter">Porter</option>
              </select>
            </div>  
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>URL da imagem</label>
              <input type="text" name="url" value="" class="form-control">
            </div>
          </div>  
          
          <div class="row">
            <div class="col-md-8">
              <label>Descrição</label>
              <textarea rows="4" cols="50" name="desc" class="form-control"></textarea>
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
