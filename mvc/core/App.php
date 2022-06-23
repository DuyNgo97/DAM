<?php
    class App{
        
        protected $controllers = "Home";
        protected $action ="sayhi";
        protected $param =[];
        function __construct(){

            //array (size=5)
            //0 => string 'home' (length=4)
            //1 => string 'sayhi' (length=5)
            //2 => string '1' (length=1)
            //3 => string '2' (length=1)
            //4 => string '3' (length=1)
           $arr = $this -> urlProcess();
        //    var_dump($arr);
           // Xu ly controllers
           if(@file_exists("./mvc/controllers/".$arr[0].".php")){
               $this -> controllers = $arr[0];
               unset($arr[0]);
           }
           require_once "./mvc/controllers/".$this->controllers.".php";
           $this->controllers = new $this -> controllers();
           // Xu ly action

           if(isset($arr[1])){
               if(method_exists($this->controllers, $arr[1])){
                    $this -> action = $arr[1];
               }
               unset($arr[1]);
           }

           // Xu ly param
           $this -> param = $arr ? array_values($arr) : [];
        //    echo $this -> controllers.'<br>';
        //    echo $this -> action.'<br>';
        //    echo "<hr>";
        //    print_r($this->param);
           call_user_func_array([$this->controllers,$this->action],$this->param);
        }

        function urlProcess(){
            if(isset($_GET['url'])){
                return explode("/",filter_var(trim($_GET['url'],"/")));
            }
        }
    }
?>