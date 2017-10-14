<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 17/09/2017
 * Time: 03:33
 */

class contactController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();
        $this->loadTemplate("contact", $dados);
    }
}
