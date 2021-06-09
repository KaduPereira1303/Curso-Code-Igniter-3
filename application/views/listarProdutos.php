<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    
    <script src="less.js" type="text/javascript"></script>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
    

    
    <title>Produtos</title>

    <style type="text/css">
    .margin-button15 {margin-bottom: 15px ;}
    .margin-top15 {margin-top: 25px ;}
    .material-icons.white10 { color: #fff; }
    </style>
  </head>
  <body class="darker">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="container">

            <div class="row">
               
                <h1 class="margin-top15">Lista de Produtos</h1>

                <a href="produtos/add" class="btn btn-success margin-button15">Novo Produto</a>

                <table class="table table-bordered bg-dark text-light mt-3">

                    <thead>

                        <tr>

                            <th class="text-center "style="width: 50%">Produto</th>
                            <th class="text-right">Preço</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Ação</th>

                        </tr>
                        
                    </thead>

                    <?php
                   
                        $contador = 0;

                        foreach($produtos as $produto):
                            
                            echo '<tr>';
                            if($produto->ativo == 0){
                            
                               
                                echo '<td class="text-left"> <s>'.$produto->nome.'</s></td>';
                                $preco = $produto->preco;
                                $precoc = number_format($preco,2,",",".");
                                echo '<td class="text-right"><s>R$ '.$precoc.'</s></td>';
                                

                            }else{
                            echo '<td class="text-left">'.$produto->nome.'</td>';
                            $preco = $produto->preco;
                            $precoc = number_format($preco,2,",",".");
                            echo '<td class="text-right">R$ '.$precoc.'</td>';
                            }
                            echo '<td class="text-center">';
                        
                                if($produto->ativo == 1):
                                
                                    echo '<span class="label label-success"><a href="produtos/detalhe/'.$produto->id.'" title="Deixar Inativo" class="btn btn-success">Ativo</a></span>';
                                
                                else:

                                    echo '<span class="label label-warning"><a href="produtos/detalhe/'.$produto->id.'" title="Deixar Ativo" class="btn btn-danger">Inativo</a></span>';

                                endif;

                            echo '</td>';
                        
                            echo '<td class="text-center">';
                            echo '<a href="produtos/editar/'.$produto->id.'" title="Editar Cadastro" class="btn btn-primary"><span class="material-icons">edit</span></a>';
                            echo '<a href="produtos/apagar/'.$produto->id.'" title="Apagar Cadastro" class="btn btn-danger"><span class="material-icons">delete</span></a>';
                            echo '<a href="produtos/detalhe/'.$produto->id.'" title="Detalhes" class="btn btn-info"><span class="material-icons white10">visibility</span></a>';
                            echo '</td>';
                          
                            $contador++;
                            
                     
                endforeach;
               
                 ?>

                </table>


            </div>
        
            </div>

  </body>
  
</html>

