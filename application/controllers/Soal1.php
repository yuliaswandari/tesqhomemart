<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Soal1 extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $id = $this->get('genre');
        if ($id == '') {
            $film = $this->db->get('list_film')->result();
        } else {
            $this->db->where('genre', $id);
            $film = $this->db->get('list_film')->result();
        }
        $this->response($film, 200);
    }
}
