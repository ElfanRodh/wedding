<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

  public function index()
  {
    $data['testi'] = $this->db->get_where('testimoni', ['tes_status' => 1]);
    $this->load->view('web/index', $data);
  }

}

/* End of file Web.php */
