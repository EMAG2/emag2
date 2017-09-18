<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 18/09/2017
 * Time: 01:21
 */

class confirmRegisterController extends controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();
        $this->loadTemplate("confirmRegister", $dados);
    }
}