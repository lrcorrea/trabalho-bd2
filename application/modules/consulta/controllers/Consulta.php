<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {

    public function index($query = false)
    {
        if(!$query || $query < 0 || $query > 8) show_404();

        $this->load->model('consulta_m');

        $res = $this->consulta_m->get($query);

        // echo '<pre>' . var_dump($res); die();

        $data = array(
            'data' => $res,
            'query' => $query
        );
        
        $this->load->view('consulta', $data);
    }
}
