<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_employee extends CI_Model
{
    public function employee()
    {
        $this->db->select('a.*');
        $this->db->from('employee as a');
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return false;
        }
    }

    public function employee_by_id($id)
    {
        $this->db->select('a.*');
        $this->db->from('employee as a');
        $this->db->where('a.id', $id);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return false;
        }
    }

    public function detail_employee($id)
    {
        $this->db->select('a.*, b.* , b.id as id_detail');
        $this->db->from('employee as a');
        $this->db->join('detail_employee as b', 'a.id = b.id_employee');
        $this->db->where('a.id', $id);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return false;
        }
    }

    public function GetData($tableName, $where = "")
    {
        $data = $this->db->query('select * from ' . $tableName . $where);
        return $data->result_array();
    }

    public function InsertData($tabelName, $data)
    {
        $res = $this->db->insert($tabelName, $data);
        return $res;
    }

    public function DeleteData($tabelName, $where)
    {
        $res = $this->db->delete($tabelName, $where);
        return $res;
    }

    public function UpdateData($tabelName, $data, $where)
    {
        $res = $this->db->update($tabelName, $data, $where);
        return $res;
    }
}
