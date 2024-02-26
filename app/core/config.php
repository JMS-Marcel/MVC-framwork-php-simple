<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
  /* Database config */
  define('DBNAME', 'my_db');
  define('DBHOST', 'localhost');
  define('DBUSER', 'root');
  define('DBPASS', '');
  define('DBDRIVER', '');
  
  /* ROOT config  */
  define('ROOT', 'http://localhost/mvc/public');
}else{
  /* Database config */
  define('DBNAME', 'my_db');
  define('DBHOST', 'localhost');
  define('DBUSER', 'root');
  define('DBPASS', '');
  define('DBDRIVER', '');
  
  define('ROOT', 'htps://www.yourwebsite.com');
}
define('APP_NAME', "My Website");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/ 
define('DEBUG', true);