<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premium extends CI_Controller {
  
  public function index()
  {
    $wr['evt_id'] = $wr2['cpl_event'] = $wr3['tml_event'] = $wr4['ucp_event'] = 1;
    $wr['evt_status'] = $wr2['cpl_status'] = 1;
    $_SESSION['evt_id'] = 1;

    $data['event']  = $this->db->get_where('event', $wr);
    $data['couple'] = $this->db->order_by('cpl_jk')->get_where('couple', $wr2);
    $data['timeline'] = $this->db->order_by('tml_create_at', 'asc')->get_where('timeline', $wr3);
    $data['ucapan']   = $this->db->order_by('ucp_create_at', 'desc')->get_where('ucapan', $wr4);

    $name     = 'Pernikahan '.$data['couple']->result_array()[1]['cpl_nama_panggilan'].' & '.$data['couple']->result_array()[0]['cpl_nama_panggilan'];
    $begin    = strtotime('-7 hours', strtotime($data['event']->row()->evt_resepsi_waktu_start));
    $end      = strtotime('-7 hours', strtotime($data['event']->row()->evt_resepsi_waktu_end));
    $details  = 'Pernikahan '.$data['couple']->result_array()[1]['cpl_nama_panggilan'].' & '.$data['couple']->result_array()[0]['cpl_nama_panggilan'];
    $location = 'Bojonegoro';
    $data['calendar'] = make_google_calendar_link($name, $begin, $end, $location, $details);

    $this->load->view('premium/home', $data);
  }

  public function theme($id = NULL)
  {
    $wr['evt_id'] = $wr2['cpl_event'] = $wr3['tml_event'] = $wr4['ucp_event'] = 1;
    $wr['evt_status'] = $wr2['cpl_status'] = 1;
    $_SESSION['evt_id'] = 1;

    $data['event']  = $this->db->get_where('event', $wr);
    $data['couple'] = $this->db->order_by('cpl_jk')->get_where('couple', $wr2);
    $data['timeline'] = $this->db->order_by('tml_create_at', 'asc')->get_where('timeline', $wr3);
    $data['ucapan']   = $this->db->order_by('ucp_create_at', 'desc')->get_where('ucapan', $wr4);

    $name     = 'Pernikahan '.$data['couple']->result_array()[1]['cpl_nama_panggilan'].' & '.$data['couple']->result_array()[0]['cpl_nama_panggilan'];
    $begin    = strtotime('-7 hours', strtotime($data['event']->row()->evt_resepsi_waktu_start));
    $end      = strtotime('-7 hours', strtotime($data['event']->row()->evt_resepsi_waktu_end));
    $details  = 'Pernikahan '.$data['couple']->result_array()[1]['cpl_nama_panggilan'].' & '.$data['couple']->result_array()[0]['cpl_nama_panggilan'];
    $location = 'Bojonegoro';
    $data['calendar'] = make_google_calendar_link($name, $begin, $end, $location, $details);
    
    if ($id != NULL) {
      $this->load->view('premium/theme'.$id, $data);
    } else {
      $this->load->view('premium/theme1', $data);
    }
  }

  public function kirimUcapan()
  {
    $ret['status'] = 1;
    if (isset($_POST['nama']) && $_POST['nama'] == '') {
      $ret['status'] = 0;
      $ret['message'] = 'Nama harus diisi';
    }
    if (isset($_POST['ucap']) && $_POST['ucap'] == '') {
      $ret['status'] = 0;
      $ret['message'] = 'Ucapan harus diisi';
    }

    if ($ret['status'] == 1) {
      $data = [
        'ucp_nama'    => $this->input->post('nama'),
        'ucp_ucapan'  => $this->input->post('ucap'),
        'ucp_event'   => $_SESSION['evt_id'],
      ];

      if ($this->db->insert('ucapan', $data)) {
        $ret['message'] = 'Ucapan berhasil dikirim';
      } else {
        $ret['status'] = 0;
        $ret['message'] = 'Ucapan gagal dikirim';
      }
    }
    
    echo json_encode($ret);
  }

}

/* End of file Premium.php */
