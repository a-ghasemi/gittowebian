<?php

namespace Kernel;


class MarkDown
{
    private $file;
    private $content;

    public function __construct($file)
    {
        $this->file = $file;
//        $this->blade = new Blade('../app/views','../storage/views');
    }

    public function render(){
        $this->content = file_get_contents($this->file);
//        $this->content = $this->blade->render($this->file);
        return $this;
    }

    static function show($file){
        return (new Self($file))->render();
    }

    public function getContent(){
        @ob_start();
        print($this->content);
        @ob_flush();
    }
}