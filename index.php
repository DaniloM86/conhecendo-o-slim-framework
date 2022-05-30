<?php
 require __DIR__.'/vendor/autoload.php';

 use Slim\App;
 use Slim\Http\Request;
 use Slim\Http\Response;
 use App\Controller\HomeController;

 /**
  * MÉTODOS RESPONSÁVEIS POR INSTANCIAR E CONFIGURAR DETALHES DE ERRO
  * DENTRO DO FRAMEWORK (SLIM)
  *@return array de erros dentro do slim
  *@return instance
  */
$config['displayErrorDetails'] = true;
 $app = new App(['settings' => $config]);
 
 /**
  * MÉTODO RESPONSÁVEL POR DEIXAR A 'URL' AMIGÁVEL
  *@return string
  */
 
//  $app->group('/admin',function() use ($app){
//     $app->get('/login',function(){
//         print 'login';
//      });
//  });

/**
 * MÉTODO RESPONSÁVEL POR RECEBER QUAL A FUNÇÃO E OS PARÂMETROS DA REQUISIÇÃO
 * @return array
 */
// $app->get('/update/user/{id}', function($request,$response,$args){
//     print_r($args['id']);
// });

/**
 * método responsável por renderizar o conteúdo da homeController
 * @return view da página(HOME)
 */// para trabalhar com controller é preciso passar a informação corretamente do 'namespace' 
$app->get('/','App\Controller\HomeController:getHome');
 $app->run();