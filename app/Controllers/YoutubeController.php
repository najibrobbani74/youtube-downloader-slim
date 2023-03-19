<?php
// var_dump("aa")
// require __DIR__."/model/Youtube.php";
namespace App\Controllers;

use App\Models\Youtube;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class YoutubeController
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getDownloadLink(Request $request, Response $response, $args)
    {
        $youtube = new YouTube;
        $listData = $youtube->getVideo($args['id']);
        // var_dump($listData);
        $semuaData = $listData->getAllFormats();
        $dataUtama = $listData->getCombinedFormats();
        // var_dump($dataUtama);
        // return $response->withJson( $semuaData );
        return $this->container->view->render($response, '/detail/detail.twig', [
            'title' => "Youtube Downloader",
            'listData'=> $semuaData,
            'dataUtama'=> $dataUtama
        ]);
    }
}

?>