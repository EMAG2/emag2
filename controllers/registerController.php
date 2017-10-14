<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 17/09/2017
 * Time: 00:52
 */

class registerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();
        $this->loadLoginRegisterTemplate("register", $dados);
    }
}
