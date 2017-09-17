<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 17/09/2017
 * Time: 01:50
 */

class errorController extends controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();
        $this->loadTemplate("error", $dados);
    }

}