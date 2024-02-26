<?php

class App
{
      private $controller = 'Home';
      private $method     = 'index';

      // Divise l'URL
      private static function splitUrl()
      {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", trim($URL));

        return $URL;
      }

      public function loadController()
      {
        $URL = self::splitUrl();

        /** select method**/
        $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        if (file_exists($filename)) {
          require $filename;
          $this->controller = ucfirst($URL[0]);
          unset($URL);
        } else {
          $filename = "../app/controllers/_404.php";
          require $filename;
          $this->controller = '_404';
        }

        $controller = new $this->controller;

        /** select method**/
        if(!empty($URL[1])){
          if(method_exists($controller, $URL[1])){
            $this->method = $URL[1];
          }
        }

        call_user_func_array([$controller, $this->method], []);
      }
}