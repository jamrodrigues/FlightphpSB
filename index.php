<?php
//FlightPHP
require 'flight/Flight.php';

//########### Configurações
Flight::set('BASE', 'http://localhost/flight-frameowrk/projeto02/');
Flight::set('TITULO', 'Novo Site');


//########### URLs
Flight::route('/',function(){
    Flight::render('home.php',
    array(
      'base' => Flight::get('BASE'),
      'titulo' => Flight::get('TITULO')
    ));
});

Flight::route('/home',function(){
    Flight::render('home2.php',
    array(
      'base' => Flight::get('BASE'),
      'titulo' => "Titulo diferente"
    ));
});

Flight::route('/blog/@post',function($post){
    if($post == "novo"){
      $texto =  "Novo post";
    }else{
      $texto = "Não e novo";
    }

    Flight::render('blog.php',
    array(
      'base' => Flight::get('BASE'),
      'titulo' => "Titulo diferente",
      'texto' => $texto
    ));


});


//########### Pagina não encontrada
Flight::map('notFound', function(){
    Flight::render('404.php',
    array(
      'base' => Flight::get('BASE')
    ));
});

Flight::start();
