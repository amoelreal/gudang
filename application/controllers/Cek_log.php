<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Cek_log extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bpk_model');
        $this->load->model('Serah_terima_log_model');
        $this->load->model('Log_rotary_model');
        $this->load->model('Rekap_pembayaran_log_model');
        $this->load->model('Cek_log_model');
        $this->load->model('Selisih_stok_model');
    }

    /*
     * Listing of cek_log
     */
    function index()
    {
      $data['cek_log'] = $this->Cek_log_model->get_all_cek_log($this->session->userdata('no_bpk'));
      $data['total_cek_log'] = $this->Cek_log_model->get_total_cek_log($this->session->userdata('no_bpk'));

      $data['selisih_stok'] = $this->Selisih_stok_model->get_all_selisih_stok($this->session->userdata('no_bpk'));
      $data['total_selisih_stok'] = $this->Selisih_stok_model->get_total_selisih_stok($this->session->userdata('no_bpk'));

      $data['log_rotary'] = $this->Log_rotary_model->get_all_log_rotary($this->session->userdata('no_bpk'));

        $data['_view'] = 'cek_log/index';
        $this->load->view('layouts/main',$data);
    }

    function cetak_selisih()
    {
      $data['selisih_stok'] = $this->Selisih_stok_model->get_all_selisih_stok($this->session->userdata('no_bpk'));
      $data['total_selisih_stok'] = $this->Selisih_stok_model->get_total_selisih_stok($this->session->userdata('no_bpk'));

        $this->load->view('cek_log/cetak_selisih',$data);
    }

    /*
     * Adding a new cek_log
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('grade','Grade','required|integer');
		$this->form_validation->set_rules('a','A','integer');
		$this->form_validation->set_rules('b','B','integer');
		$this->form_validation->set_rules('satum','Satum','integer');
		$this->form_validation->set_rules('afkir','Afkir','integer');
		$this->form_validation->set_rules('bpk_no_bpk','Bpk No Bpk','required|max_length[10]');

		if($this->form_validation->run())
        {
            $params = array(
				'grade' => $this->input->post('grade'),
				'a' => $this->input->post('a'),
				'b' => $this->input->post('b'),
				'satum' => $this->input->post('satum'),
				'afkir' => $this->input->post('afkir'),
				'bpk_no_bpk' => $this->input->post('bpk_no_bpk'),
            );

            $cek_log_id = $this->Cek_log_model->add_cek_log($params);
            redirect('cek_log/index');
        }
        else
        {
            $data['_view'] = 'cek_log/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a cek_log
     */
    function edit($id)
    {
        // check if the cek_log exists before trying to edit it
        $data['cek_log'] = $this->Cek_log_model->get_cek_log($id);

        if(isset($data['cek_log']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('grade','Grade','required|integer');
			$this->form_validation->set_rules('a','A','integer');
			$this->form_validation->set_rules('b','B','integer');
			$this->form_validation->set_rules('satum','Satum','integer');
			$this->form_validation->set_rules('afkir','Afkir','integer');
			$this->form_validation->set_rules('bpk_no_bpk','Bpk No Bpk','required|max_length[10]');

			if($this->form_validation->run())
            {
                $params = array(
					'grade' => $this->input->post('grade'),
					'a' => $this->input->post('a'),
					'b' => $this->input->post('b'),
					'satum' => $this->input->post('satum'),
					'afkir' => $this->input->post('afkir'),
					'bpk_no_bpk' => $this->input->post('bpk_no_bpk'),
                );

                $this->Cek_log_model->update_cek_log($id,$params);
                redirect('cek_log/index');
            }
            else
            {
                $data['_view'] = 'cek_log/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The cek_log you are trying to edit does not exist.');
    }

    /*
     * Deleting cek_log
     */
    function remove($id)
    {
        $cek_log = $this->Cek_log_model->get_cek_log($id);

        // check if the cek_log exists before trying to delete it
        if(isset($cek_log['id']))
        {
            $this->Cek_log_model->delete_cek_log($id);
            redirect('cek_log/index');
        }
        else
            show_error('The cek_log you are trying to delete does not exist.');
    }

}