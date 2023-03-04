<?php

class Tag
{
    public $tagName;
    public $params = [];
    public $subStringParams;
    public $stringParams;

    public function __construct($tagName)
    {
        $this->tagName = $tagName;

    }

    public function attr($paramOne = false, $paramTwo = false)
    {
        if ($paramOne && $paramTwo) {
            $this->params[] = $paramOne . "=";
            $this->params[] = $paramTwo . " ";
            foreach ($this->params as $param) {
                $this->subStringParams .= " " . $param . " ";
            }
        }
        return $this->subStringParams;
    }

    public function viewTag($paramOne = false, $paramTwo = false)
    {
        $this->stringParams = "<" . $this->tagName;
        $this->stringParams .= $this->attr($paramOne, $paramTwo);
        $this->stringParams .= ">";
        return $this->stringParams;
    }
}

class SingleTag extends Tag
{

}

class PairTag extends Tag
{

    public function appendChild()
    {
        return $this->stringParams = "<" . $this->tagName.$this->stringParams .= "</".$this->tagName.">";
    }
}


$img = new SingleTag('img');
$img->attr('src', './nz');
$img->attr('alt', 'nz');
$img->attr('hz', 'zh');

$hr = new SingleTag('hr');
echo $img->viewTag();
echo $hr->viewTag();


$a= new PairTag('a');
echo $a->appendChild();


