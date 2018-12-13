<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Editar Pedido</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">      
  </head>

  <body> 
  <?php if($this->session->userdata('usuario_logado')) : ?>   

    <div class="container">
      <div>                
        <h1>Atualizar pedido</h1>       
        <form action="/td/pedidos/editar" name="form_add" method="post">

          <div class="row">
            <div class="col-md-8">
              <label>Nome: </label>             
              <input disabled="disabled" type="text" name="nome_usuario" value="<?= $pedido->nome_usuario ?>" class="form-control">             
            </div>
          </div>


          <div class="row">
            <div class="col-md-8">
              <label>E-mail: </label>              
              <input disabled="disabled" type="text" name="email" value="<?= $pedido->email ?>" class="form-control">             
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Cerveja</label>
              <input disabled="disabled" type="text" name="nome_cerveja" value="<?=$pedido->nome_cerveja ?>" class="form-control">
            </div>
          </div> 

          <div class="row">
            <div class="col-md-8">
              <label>Status Pedido</label>
              <select name="status_pedido" class="form-control">
                <option value="processando pedido" <?= ($pedido->status_pedido == 'processando pedido' ? 'selected="selected"' : '' ) ?> >Processando Pedido</option>
                <option value="enviado" <?= ($pedido->status_pedido == 'enviado' ? 'selected="selected"' : '' ) ?> >Enviado</option>                      
                <option value="recebido" <?= ($pedido->status_pedido == 'recebido' ? 'selected="selected"' : '' ) ?> >Recebido</option>                      
              </select>
            </div>  
          </div> 

          <div class="row">
            <div class="col-md-8">
              <label>Cep</label>
              <input type="text" name="cep" value="<?= $pedido->cep ?>" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Endereço</label>
              <input type="text" name="endereco" value="<?= $pedido->endereco ?>" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Numero Residencia</label>
              <input type="number" name="numero" value="<?= $pedido->numero ?>" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Cidade</label>
              <input type="text" name="cidade" value="<?= $pedido->cidade ?>" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>UF</label>
              <input type="text" name="uf" value="<?= $pedido->uf ?>" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <label>Bairro</label>
              <input type="text" name="bairro" value="<?= $pedido->bairro ?>" class="form-control">
            </div>
          </div>          
          
          <br />

          <div class="row">
            <div class="col-md-2">
              <input type="hidden" name="id" value="<?= $pedido->id ?>">
              <input type="hidden" name="id_usuario" value="<?= $pedido->id_usuario ?>">
              <input type="hidden" name="id_cerveja" value="<?= $pedido->id_cerveja ?>"> 
              <button type="submit" class="btn btn-primary">Atualizar Pedido</button>
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