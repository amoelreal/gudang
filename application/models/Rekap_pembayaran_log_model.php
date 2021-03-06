<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Rekap_pembayaran_log_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get rekap_pembayaran_log by id
     */
    function get_rekap_pembayaran_log($id)
    {
        return $this->db->get_where('rekap_pembayaran_log',array('bpk_no_bpk'=>$id))->result_array();
    }

    function get_harga_m3()
    {
        return $this->db->get('harga_m3')->result_array();
    }

    /*
     * Get all rekap_pembayaran_log
     */
    function get_all_rekap_pembayaran_log()
    {
        return $this->db->get('rekap_pembayaran_log')->result_array();
    }

    function get_total_rekap_pembayaran_log($id)
    {
        return $this->db->get_where('v_rekap_log',array('no_bpk'=>$id))->row_array();
    }

    function get_persediaan_log()
    {
      return $this->db->get('v_persediaan')->result_array();
    }

    function get_total_persediaan_log($id)
    {
      return $this->db->get_where('v_persediaan',array('no_bpk'=>$id))->row_array();
    }

    function get_total_persediaan()
    {
      return $this->db->get('v_total_persediaan')->result_array();
    }

    //export data excel
    function persediaan_skr($tanggal)
    {
      return $this->db->query("select * from v_persediaan where tanggal between '$tanggal-1' and '$tanggal-31'")->result_array();
    }


    /*
     * function to add new rekap_pembayaran_log
     */
    function add_rekap_pembayaran_log($params)
    {
        $this->db->insert('rekap_pembayaran_log',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update rekap_pembayaran_log
     */
    function update_rekap_pembayaran_log($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('rekap_pembayaran_log',$params);
        if($response)
        {
            return "rekap_pembayaran_log updated successfully";
        }
        else
        {
            return "Error occuring while updating rekap_pembayaran_log";
        }
    }

    /*
     * function to delete rekap_pembayaran_log
     */
    function delete_rekap_pembayaran_log($id)
    {
        $response = $this->db->delete('rekap_pembayaran_log',array('id'=>$id));
        if($response)
        {
            return "rekap_pembayaran_log deleted successfully";
        }
        else
        {
            return "Error occuring while deleting rekap_pembayaran_log";
        }
    }

    function rekap_log($no_bpk, $grade, $diameter)
    {

      $jml_count = $this->db->get_where('serah_terima_log', array('grade_grade'=>$grade,'diameter'=>$diameter, 'bpk_no_bpk'=>$no_bpk));
      $count = $jml_count->num_rows();

      $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
      $k = $jml_kubik->row();
      $kubik = $k->satutigam;

      if($grade == "A" || $grade == "a"){
        if($diameter<9){
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'a_pc' => $count,
                    'a_m3' => $kubik*$count,
                    'harga' => 'ar'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=9 && $diameter<15) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'a_pc' => $count,
                    'a_m3' => $kubik*$count,
                    'harga' => 'aa0'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=15 && $diameter<20) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'a_pc' => $count,
                    'a_m3' => $kubik*$count,
                    'harga' => 'aa1'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=20 && $diameter<25) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'a_pc' => $count,
                    'a_m3' => $kubik*$count,
                    'harga' => 'aa21'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=25 && $diameter<30) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'a_pc' => $count,
                    'a_m3' => $kubik*$count,
                    'harga' => 'aa22'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=30 && $diameter<40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'a_pc' => $count,
                    'a_m3' => $kubik*$count,
                    'harga' => 'aa3'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'a_pc' => $count,
                    'a_m3' => $kubik*$count,
                    'harga' => 'aa4'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }
      } else if($grade == 'B' || $grade == "b"){
        if($diameter<9){
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'b_pc' => $count,
                    'b_m3' => $kubik*$count,
                    'harga' => 'br'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=9 && $diameter<15) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'b_pc' => $count,
                    'b_m3' => $kubik*$count,
                    'harga' => 'ba0'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=15 && $diameter<20) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'b_pc' => $count,
                    'b_m3' => $kubik*$count,
                    'harga' => 'ba1'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=20 && $diameter<25) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'b_pc' => $count,
                    'b_m3' => $kubik*$count,
                    'harga' => 'ba21'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=25 && $diameter<30) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'b_pc' => $count,
                    'b_m3' => $kubik*$count,
                    'harga' => 'ba22'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=30 && $diameter<40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'b_pc' => $count,
                    'b_m3' => $kubik*$count,
                    'harga' => 'ba3'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'b_pc' => $count,
                    'b_m3' => $kubik*$count,
                    'harga' => 'ba4'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }

      } else if($grade == 'C' || $grade == "c"){
        if($diameter<9){
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'c_pc' => $count,
                    'c_m3' => $kubik*$count,
                    'harga' => 'cr'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=9 && $diameter<15) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'c_pc' => $count,
                    'c_m3' => $kubik*$count,
                    'harga' => 'ca0'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=15 && $diameter<20) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'c_pc' => $count,
                    'c_m3' => $kubik*$count,
                    'harga' => 'ca1'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=20 && $diameter<25) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'c_pc' => $count,
                    'c_m3' => $kubik*$count,
                    'harga' => 'ca21'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=25 && $diameter<30) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'c_pc' => $count,
                    'c_m3' => $kubik*$count,
                    'harga' => 'ca22'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=30 && $diameter<40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'c_pc' => $count,
                    'c_m3' => $kubik*$count,
                    'harga' => 'ca3'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'c_pc' => $count,
                    'c_m3' => $kubik*$count,
                    'harga' => 'ca4'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }

      } else if($grade == '1M' || $grade == "1m"){
        if($diameter<9){
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'satum_pc' => $count,
                    'satum_m3' => $kubik*$count,
                    'harga' => 'mr'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=9 && $diameter<15) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'satum_pc' => $count,
                    'satum_m3' => $kubik*$count,
                    'harga' => 'ma0'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=15 && $diameter<20) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'satum_pc' => $count,
                    'satum_m3' => $kubik*$count,
                    'harga' => 'ma1'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=20 && $diameter<25) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'satum_pc' => $count,
                    'satum_m3' => $kubik*$count,
                    'harga' => 'ma21'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=25 && $diameter<30) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'satum_pc' => $count,
                    'satum_m3' => $kubik*$count,
                    'harga' => 'ma22'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=30 && $diameter<40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'satum_pc' => $count,
                    'satum_m3' => $kubik*$count,
                    'harga' => 'ma3'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satum from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satum;
          $params = array(
                    'satum_pc' => $count,
                    'satum_m3' => $kubik*$count,
                    'harga' => 'ma4'
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }
      } else if($grade == 'AF' || $grade == "af" || $grade == "Af"){
        if($diameter<9){
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'afkir_pc' => $count,
                    'afkir_m3' => $kubik*$count,
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=9 && $diameter<15) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'afkir_pc' => $count,
                    'afkir_m3' => $kubik*$count,
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=15 && $diameter<20) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'afkir_pc' => $count,
                    'afkir_m3' => $kubik*$count,
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=20 && $diameter<25) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'afkir_pc' => $count,
                    'afkir_m3' => $kubik*$count,
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=25 && $diameter<30) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'afkir_pc' => $count,
                    'afkir_m3' => $kubik*$count,
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=30 && $diameter<40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'afkir_pc' => $count,
                    'afkir_m3' => $kubik*$count,
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }elseif ($diameter>=40) {
          $this->db->where(array('grade'=>$diameter,'bpk_no_bpk'=>$no_bpk));

          $jml_kubik = $this->db->query("select satutigam from kubik where id='$diameter'");
          $k = $jml_kubik->row();
          $kubik = $k->satutigam;
          $params = array(
                    'afkir_pc' => $count,
                    'afkir_m3' => $kubik*$count,
                  );
                  $response = $this->db->update('rekap_pembayaran_log',$params);
        }
    }
  }

  function get_rekap_no_bpk($id)
  {
      return $this->db->get_where('rekap_pembayaran_log',array('BPK_idBPK'=>$id))->row_array();
  }
}
