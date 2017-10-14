<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 17/09/2017
 * Time: 02:44
 */

class aboutController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();
        $this->loadTemplate("about", $dados);
    }
}
