<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Soal2 extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
    }

    function index_post()
    {
        $panjang = $this->post('panjang');
        $lebar = $this->post('lebar');
        $luas = $panjang * $lebar;
        $this->response($luas, 200);
    }
}
