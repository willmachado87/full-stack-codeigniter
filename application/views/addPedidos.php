<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Novo Pedido</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">      
  </head>

 <body> 
  <?php if($this->session->userdata('usuario_logado')) : ?>   

    <div class="container">
      <div>                
        <h1>Adicionar pedido</h1>       
        <form action="/td/pedidos/salvar" name="form_add" method="post">

          <div class="row">
            <div class="col-md-8">
              <label>ID DO USUARIO: </label>             
              <input type="text" name="id_usuario" value="" class="form-control">             
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>ID DA CERVEJA: </label>             
              <input type="text" name="id_cerveja" value="" class="form-control">             
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Status Pedido</label>
              <select name="status_pedido" class="form-control">
                <option value="processando pedido">Processando Pedido</option>
                <option value="enviado" >Enviado</option>                      
                <option value="recebido" >Recebido</option>                      
              </select>
            </div>  
          </div> 

          <div class="row">
            <div class="col-md-8">
              <label>Cep</label>
              <input type="number" name="cep" value="" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Endereço</label>
              <input type="text" name="endereco" value="" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Numero Residencia</label>
              <input type="number" name="numero" value="" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Cidade</label>
              <input type="text" name="cidade" value="" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>UF</label>
              <input type="text" name="uf" value="" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Bairro</label>
              <input type="text" name="bairro" value="" class="form-control">
            </div>
          </div>          
          
          <br />

          <div class="row">
            <div class="col-md-2">             
              <button type="submit" class="btn btn-primary">Salvar Pedido</button>
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
