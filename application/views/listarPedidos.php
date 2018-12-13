<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
  </head>

  <body>
  <?php if($this->session->userdata('usuario_logado')) : ?>

    <div class="container" style="margin-top: 5%;">
      <h1>Lista de Pedidos</h1>              
      <a href="/td/pedidos/addPedidosPage" class="btn btn-success margin-button15" style="margin: 2% 0% 2% 0%;">Adicionar Novo Pedido</a>       
      
      <table class="table table-dark">            
        <thead>
            <tr>
              <th class="text-center">ID pedido</th>              
              <th class="text-center">Nome Usuario</th>              
              <th class="text-center">email</th>              
              <th class="text-center">Status</th>
            </tr>
        </thead>           

        <?php foreach ($pedidos as $pedido): ?>
          <tr>
            <td class="text-center"><?= $pedido->id ?></td>            
            <td class="text-center"><?= $pedido->nome ?></td>
            <td class="text-center"><?= $pedido->email ?>            
            <td class="text-center"><?= $pedido->status_pedido ?></td> 
            <td class="text-center">
              <a href="/td/pedidos/editarPage/<?= $pedido->id ?>" title="Editar cadastro" class="btn btn-primary"><i class="far fa-edit"></i></a>  
              <a href="/td/pedidos/apagar/<?= $pedido->id ?>" title="Apagar cadastro" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
            </td>   
          </tr>
        <?php endforeach; ?>

      </table>      
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