<?php
class controller{
    public function model($model){
        require_once"mvc/model/".$model.".php";
        return $a = new $model;
    }

    public function view($view,$data=[]){
        require_once"mvc/views/".$view.".php";
    }
}
?>