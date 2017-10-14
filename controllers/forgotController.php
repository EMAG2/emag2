<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 17/09/2017
 * Time: 01:25
 */

class forgotController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();
        $this->loadLoginRegisterTemplate("forgot", $dados);
    }

}
