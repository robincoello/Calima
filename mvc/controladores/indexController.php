<?php

class indexController extends Cf_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->_view->titulo = 'CalimaFramework';
        $this->_view->renderizar('index', 'inicio');
    }
}