<?php

class BoxClass
{
    var $model1;
    public $total = 10+2;
    public function showBox($name)
    {
        global $model;
        $model = $name;
        echo $model;
    }

    public function echoBox()
    {
        global $model;
        echo $model;
    }

    public function echoPropBox()
    {
        var_dump($this->model1);
        var_dump($this->total);
    }
}

$box = new BoxClass();
$box->showBox("vipan");
//$box->echoBox();
$box->echoPropBox();
