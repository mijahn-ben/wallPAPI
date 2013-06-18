<?php

include 'wallPAPI.php';

use RestService\Server;

Server::create('/')
    ->addGetRoute('wallpaper.jpg',function(){
        header('Content-type: image/jpeg;');
        $wp = new \wallPAPI\wallPAPI();
        echo $wp->returnImage();
    })

    ->addGetRoute('android/wallpaper.jpg',function(){
        header('Content-type: image/jpeg;');
        $wp = new \wallPAPI\wallPAPI();
        echo $wp->returnSmallImage();
    })
    ->addGetRoute('integer',function(){
        $wp = new \wallPAPI\wallPAPI();
        return $wp->oneMinuteInteger(7);
    })
    ->run();


