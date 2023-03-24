<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Imagen;

// Products Routes

/*
ORM -> Object Relational Mapper (Mpeador de objeto Relacional)
Illuminate -> é o motor de base de dados do Laravel sem laraval
Eloquent ORM
 */
$app->group('/api/v1',function(){

  $this->map(['GET'], '', function ($request, $response, $args) {

    $response->write("news w/o params");

  })->setName('news');

  $this->get('/imagens/lista',function($request, $response){
    $imagens = Imagen::get();
    return $response->withJson($imagens);
  
  });

   $this->post('/imagens/adiciona',function($request, $response){
    //Validar
    $dados = $request->getParsedBody();
    $imagem = Imagen::create($dados);
    return $response->withJson($imagem);
  
  });

  // Lista o Imagen a partir de um determinando ID
  $this->get('/imagens/lista/{id}',function($request, $response, $args){
  
      $imagens = explode(',',$args['id']);
      
      foreach ($imagens as $id) {
      $imagem = Imagen::findOrFail($id);
      $resultado[] = $imagem;
    }
      return $response->withJson($resultado);

    //$imagem = Imagen::findOrFail($args['id']);
    //return $response->withJson($imagem);
  
  });

  //Atualiza o Imagen
  $this->put('/imagens/atualiza/{id}',function($request, $response,$args){
    

    $dados = $request->getParsedBody();
    $imagem = Imagen::findOrFail($args['id']);
    $imagem->update($dados);
    return $response->withJson($imagem);
  
  });

  // Deleta um Imagen a partir de um determinado ID
  $this->get('/imagens/remove/{id}',function($request, $response, $args){
    
    $imagem = Imagen::findOrFail($args['id']);
    $imagem->delete();
    return $response->withJson($imagem);
  
  });

});