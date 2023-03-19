<?php
namespace App\Models;
use YouTube\Exception\YouTubeException;
use YouTube\YouTubeDownloader;

class Youtube
{
    public function getVideo($id)
    {
        $youtube = new YouTubeDownloader();
        // return $youtube;

        try {
            $downloadOptions = $youtube->getDownloadLinks("https://www.youtube.com/watch?v=".$id);
            var_dump($downloadOptions->getAllFormats());

            if ($downloadOptions->getAllFormats()) {
                return $downloadOptions;
            } else {
                return ["error"=>'No links found'];
            }
            
        } catch (YouTubeException $e) {
            return ["error"=>'Something went wrong: ' . $e->getMessage()];
        }

    }
}

?>