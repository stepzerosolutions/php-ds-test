<?php

class Vector
{
    protected $vector;
    
    private function __construct()
    {
        $this->vector = new \Ds\Vector();
    }
    
    public function getVector()
    {
        return $this->vector;
    }
}

