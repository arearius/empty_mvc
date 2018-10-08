<?php
/**
 * Created by PhpStorm.
 * User: Rearius
 * Date: 06.10.2018
 * Time: 22:52
 */

class FondsController extends Controller
{
    private $logger;

    function __construct(){
        $this->logger = new Logger();
        $this->model = App::get('Fonds');
    }

    function indexAction($param){

        $this->logger->log("FondsController indexAction");
        $this->setTitle("Фонды");
        echo $this->view('index');
    }

}