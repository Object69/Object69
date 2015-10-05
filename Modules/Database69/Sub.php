<?php

/**
 *
 * @author Ryan Naddy <rnaddy@corp.acesse.com>
 * @name Raw.php
 * @version 1.0.0 Sep 29, 2015
 */

namespace Object69\Modules\Database69;

class Sub{

    protected
            $string     = null,
            $properties = null;

    public function __construct($string, $properties){
        $this->string     = $string;
        $this->properties = $properties;
    }

    public function getString(){
        return $this->string;
    }

    public function getProperties(){
        return $this->properties;
    }

}