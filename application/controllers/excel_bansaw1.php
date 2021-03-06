<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_bansaw1 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		$this->load->model('Bongkar_log_model');
		$this->load->model('Rekap_total');
		$this->load->model('Cek_log_model');
		$this->load->model('Selisih_stok_model');
		$this->load->model('Bpk_model');
		$this->load->model('mread');
	}
	public function index()
	{
		$this->load->view('excel');
	}
	public function upload(){
		$fileName = time().$_FILES['file']['name'];

		$config['upload_path'] = './assets/dataxls/'; //buat folder dengan nama assets di root folder
		$config['file_name'] = $fileName;
		$config['allowed_types'] = 'xls|xlsx|csv';
		$config['max_size'] = 10000;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(! $this->upload->do_upload('file') )
		$this->upload->display_errors();

		$media = $this->upload->data('file');
		$inputFileName = './assets/dataxls/'.$media['file_name'];

		try {
				$inputFileType = IOFactory::identify($inputFileName);
				$objReader = IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}

			$sheet = $objPHPExcel->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();

			for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array
				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
												NULL,
												TRUE,
												FALSE);

				//Sesuaikan sama nama kolom tabel di database
				 $data = array(
				  "no"=> $rowData[0][0],
					"tanggal"=> $this->Bpk_model->Tglexcel($rowData[0][1]),
					"diameter"=> $rowData[0][2],
					"grade_grade"=> $rowData[0][3],
					"bpk_no_bpk"=> str_replace(' ', '', $rowData[0][4]),
				);
				//sesuaikan nama dengan nama tabel
				$insert = $this->db->insert("bansaw1",$data);

				$this->Bongkar_log_model->bongkar_log_bansaw1($data['bpk_no_bpk'], $data['grade_grade'],$data['diameter']);
				$this->Cek_log_model->cek_log($data['bpk_no_bpk'], $data['grade_grade'],$data['diameter']);
				$this->Selisih_stok_model->selisih_stok($data['bpk_no_bpk'], $data['grade_grade'],$data['diameter']);
			}

		redirect('bansaw1/');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
