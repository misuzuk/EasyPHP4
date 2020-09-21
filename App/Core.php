<?php
namespace App;

use Medoo\Medoo;


class Core{

   
    public function Run(){
        $baseUrl='';
        $baseDir=str_replace(basename($_SERVER['SCRIPT_NAME']), '',$_SERVER['SCRIPT_NAME']);
        $baseUrl='http://' . $_SERVER['HTTP_HOST'] . $baseDir;
        define('BASE_URL', $baseUrl);
        
        
        //  App根目录
        define('APP_PATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");
        // 根目录
        define('ROOT_PATH',str_replace('\\','/',realpath(dirname(__FILE__,2).'/'))."/");
        //PUBLIC 静态资源目录
        define('PUBLIC_PATH',ROOT_PATH.'Public');
        
        
        //加载路由
        require  APP_PATH .'Router.php';
       
        
       
     }

     
     public static function _Medoo(){
         //加载数据库配置
        require  APP_PATH .'Config/Mysql.php'; 
        return $_DB = New medoo($Config['DB']);


     }
         
     


}








