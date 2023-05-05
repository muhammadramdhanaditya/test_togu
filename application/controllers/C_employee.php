<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_employee extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_employee");
	}
	public function index()
	{
		$dataemployee = $this->M_employee->employee();
		$show = array(
			'dataemployee' => $dataemployee,
		);
		$this->load->view('home', $show);
	}

	public function add()
	{
		$this->load->view('add');
	}

	public function detail($id)
	{
		$detailemployee = $this->M_employee->detail_employee($id);
		$dataemployee = $this->M_employee->employee();
		// $first_name = $dataemployee([0]['first_name']);
		// $last_name = $dataemployee([0]['last_name']);
		// $name = $first_name . $last_name;
		$show = array(
			'detailemployee' => $detailemployee,
			// 'name' => $name,
		);
		$this->load->view('detail', $show);
	}

	public function delete($id)
	{
		$get = $this->M_employee->GetData("employee ", "where id = '$id'");
		$id_employee = $get[0]['id'];
		$where = array('id' => $id_employee);
		$this->M_employee->DeleteData('employee', $where);
		$this->db->trans_complete();
		if ($this->db->trans_status() === TRUE) {
			$pesan = "Delete Data Done !";
			$this->flashdata_succeed($pesan);
			redirect('employee');
		} else {
			$pesan = "Delete Data Failed !";
			$this->flashdata_failed($pesan);
			redirect('employee');
		}
	}

	public function flashdata_succeed($pesan)
	{
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">$pesan </div></div>");
	}
	public function flashdata_failed($pesan)
	{
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">$pesan </div></div>");
	}
}
