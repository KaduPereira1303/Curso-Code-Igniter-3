<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>Atualizar Cadastro</title>
      <style type="text/css">
         .margin-button15 {margin-bottom: 15px ;}
         .margin-top15 {margin-top: 25px ;}
      </style>
   </head>
   <body class="darker">
      <div class="container">
         <div class="row">
            <h1 class="margin-top15">Atualizar Produto</h1>
            <ol class="breadcrumb">
               <li><a href="/cursocign">Inicio</a></li>
               <li class="active">Atualizar Produto</li>
            </ol>
            <form action="../salvar" name="form_add" method="post">
               <div class="row">
                  <div class=" col-md-8">
                     <label  >Nome</label>
                     <input  class="form-control" type="text" name="nome" id="nome" value="<?php  echo $produto->nome;?>" >
                  </div>
               </div>
               <div class="row">
                  <div class=" col-md-8">
                     <label >Preço</label>
                     <input  class="form-control" type="text" name="preco" id="preco" value="<?php  echo $produto->preco;?>"> 
                  </div>
               </div>
               <div class="row">
                  <div class=" col-md-2">
                     <label >Ativo</label>
                     <select name="ativo" class="form-control">
                        <option value="1" <?php  echo ($produto->ativo ==1 ? ' selected="selected"' : '');?>>Sim</option>
                        <option value="0" <?php  echo ($produto->ativo ==0 ? ' selected="selected"' : '');?>>Não</option>
                     </select>
                  </div>
               </div>
               <br />
               <div class="row">
                  <div class="col-md-2">
                      <input type="hidden" name="id" id="id"value="<?php  echo $produto->id;?>" >
                      <button type="submit" class="btn btn-primary">Alterar</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>