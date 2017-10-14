<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 16/09/2017
 * Time: 22:05
 */

class loginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();
        $this->loadLoginRegisterTemplate("login", $dados);
    }
}
