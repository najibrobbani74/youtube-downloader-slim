<?php
// use Slim\Http\Request;
// use Slim\Http\Response;
$app->get('/detail[/{id}]', "\App\Controllers\YoutubeController:getDownloadLink");
$app->get('/', "\App\Controllers\HomeController:home");

// $app->get('/detail[/{id}]', function (Request $request, Response $response, $args) {
    
//     // $youtubeController = new YoutubeController();
//     return $this->view->render($response, '/detail/detail.twig', [
//         'title' => "Youtube Downloader",
//         // 'data'=> $youtubeController->getDownloadLink($args['id'])
//     ]);
// });