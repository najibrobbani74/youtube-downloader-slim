<?php
// var_dump("aa")
// require __DIR__."/model/Youtube.php";
namespace App\Controllers;

use App\Models\Youtube;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeController
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function home(Request $request, Response $response, $args)
    {
        return $this->container->view->render($response, '/home/home.twig', [
            'title' => "Youtube Downloader",
        ]);
    }
}

?>