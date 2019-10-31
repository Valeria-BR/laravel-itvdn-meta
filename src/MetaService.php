<?php
/**
 * Created by PhpStorm.
 * User: Support
 * Date: 31.10.2019
 * Time: 11:09
 */

namespace borschova\Meta;


class MetaService
{
    protected $property="strength";
    protected $value;
    public function _construct($value)
    {$this->value=$value;}
    public function getPropertyValue()
    {return $this->property.' '.$this->value;}
}