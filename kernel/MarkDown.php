<?php

namespace Kernel;


class MarkDown
{
    private $file;
    private $markdown;
    private $content;

    public function __construct($file)
    {
        $this->file = $file;
        $this->markdown = file_get_contents($this->file);
    }

    public function render(){
        $parser = new \Parsedown();
        $this->content = $parser->parse($this->markdown);
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