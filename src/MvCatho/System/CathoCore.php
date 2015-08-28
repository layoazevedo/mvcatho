<?php

namespace MvCatho\System;

class CathoCore
{
    protected $_url;
    protected $_explode = array();
    protected $_controller;
    protected $_action;
    
    public function __construct()
    {
        $this->getUrlFromServer();
        $this->setExplode();
        $this->setController();
        $this->setAction();
    }
    
    public function run()
    {
        $fullQualifiedClassName = "MvCatho\\Controller\\" . $this->getController();
        
        $controller = new $fullQualifiedClassName;    
        $controller->{$this->getAction()}();
        
    }
    
    protected function getUrlFromServer()
    {
        $this->_url = $_GET['key'];
    }
    
    protected function setExplode()
    {
        $this->_explode = explode ('/', $this->_url);
    }
    
    public function setController()
    {
        $this->_controller = ucfirst($this->_explode[0]) . "Controller";
    }
    
    public function getController()
    {
        return $this->_controller;
    }
    
    public function setAction()
    {
        $this->_action = $this->_explode[1];
    }
    
    public function getAction()
    {
        return $this->_action;
    }
}