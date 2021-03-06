<?php

namespace App\home\controller;
use App\Bootstrap;


class  CommonController{

    protected $templateEngine;

    protected $_medoo_mysql;



    public function __construct(){


        $loader = new \Twig\Loader\FilesystemLoader(APP_PATH.'Home/Templates');
        $this->templateEngine = new \Twig\Environment($loader,[
            'debug'=>true,
            'cache' => APP_PATH.'./file/cache_home',
            'auto_reload' => true,  //根据文件更新时间，自动更新缓存
        ]);
        $this->templateEngine->addFilter(new \Twig\TwigFilter('url', function ($path){
            return BASE_URL . $path;
        }));


    }

    public function render($fileName, $data = []) {
        return $this->templateEngine->render($fileName, $data);
    }

    public function _medoo_config() {
        return $this-> _medoo_mysql = Bootstrap::_Medoo();
    }


}




