<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;

// Products Routes

// /*
// ORM -> Object Relational Mapper (Mpeador de objeto Relacional)
// Illuminate -> é o motor de base de dados do Laravel sem laraval
// Eloquent ORM
//  */
// $app->group('/api/v1',function(){
//   $this->get('/produtos/lista',function($request, $response){
//     $produtos = Produto::get();
//     return $response->withJson($produtos);
  
//   });

//    $this->post('/produtos/adiciona',function($request, $response){
//     //Validar
//     $dados = $request->getParsedBody();
//     $produto = Produto::create($dados);
//     return $response->withJson($produto);
  
//   });

//   // // Lista o produto a partir de um determinando ID
//   // $this->get('/produtos/lista/{id}',function($request, $response,$args){
    
//   //   $produto = Produto::findOrFail($args['id']);
//   //   return $response->withJson($produto);
  
//   // });

//   // Lista o produto a partir de um determinando ID
//   $this->get('/produtos/lista/{id}',function($request, $response, $args){
//     $produto = Produto::findOrFail($args['id']);
//     // $produto = explode(',',$produto);
    
//     return $response->withJson($produto);
  
//   });

//   //Atualiza o produto
//   $this->put('/produtos/atualiza/{id}',function($request, $response,$args){
    

//     $dados = $request->getParsedBody();
//     $produto = Produto::findOrFail($args['id']);
//     $produto->update($dados);
//     return $response->withJson($produto);
  
//   });

//   // Deleta um produto a partir de um determinado ID
//   $this->get('/produtos/remove/{id}',function($request, $response, $args){
    
//     $produto = Produto::findOrFail($args['id']);
//     $produto->delete();
//     return $response->withJson($produto);
  
//   });

// });