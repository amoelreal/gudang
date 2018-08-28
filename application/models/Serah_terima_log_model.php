<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Serah_terima_log_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get serah_terima_log by id
     */
    function get_serah_terima_log($id)
    {
        return $this->db->get_where('serah_terima_log',array('id'=>$id))->row_array();
    }

    function get_all_serah_terima_bpk($id)
    {
        return $this->db->get_where('serah_terima_log',array('bpk_no_bpk'=>$id))->row_array();
    }

    /*
     * Get all serah_terima_log
     */
    function get_all_serah_terima_log($id)
    {
        return $this->db->get_where('serah_terima_log',array('bpk_no_bpk'=>$id))->result_array();
    }

    /*
     * function to add new serah_terima_log
     */
    function add_serah_terima_log($params)
    {
        $this->db->insert('serah_terima_log',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update serah_terima_log
     */
    function update_serah_terima_log($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('serah_terima_log',$params);
        if($response)
        {
            return "serah_terima_log updated successfully";
        }
        else
        {
            return "Error occuring while updating serah_terima_log";
        }
    }

    /*
     * function to delete serah_terima_log
     */
    function delete_serah_terima_log($id)
    {
        $response = $this->db->delete('serah_terima_log',array('id'=>$id));
        if($response)
        {
            return "serah_terima_log deleted successfully";
        }
        else
        {
            return "Error occuring while deleting serah_terima_log";
        }
    }

    function get_number($id){
      $nomor = $this->db->get_where('serah_terima_log',array('bpk_no_bpk'=>$id));
      $no = $nomor->num_rows();
      return $no+1;
    }

}