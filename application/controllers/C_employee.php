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

	public function add_save()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required');
		$this->form_validation->set_rules('join_date', 'Join Date', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('province', 'Province', 'required');
		$this->form_validation->set_rules('zip_code', 'ZIP Code', 'required');
		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$this->flashdata_failed($pesan);
			redirect('employee');
		} else {
			$this->db->trans_start();
			$dataemployee = array(
				"first_name" => $_POST['first_name'],
				"last_name" => $_POST['last_name'],
				"email" => $_POST['email'],
				"position" => $_POST['position'],
				"join_date" => $_POST['join_date'],
				"phone" => strtotime($_POST['phone']),
			);
			$this->db->insert('employee', $dataemployee);
			$insert_id = $this->db->insert_id();
			$datadetail = array(
				"id_employee" => $insert_id,
				"address" => $_POST['address'],
				"city" => $_POST['city'],
				"province" => $_POST['province'],
				"zip_code" => $_POST['zip_code'],
			);
			$this->db->insert('detail_employee', $datadetail);
			$this->db->trans_complete();
			if ($this->db->trans_status() === TRUE) {
				$pesan = "Add Data Done !";
				$this->flashdata_succeed($pesan);
				redirect('employee');
			} else {
				$pesan = "Add Data Failed !";
				$this->flashdata_failed($pesan);
				redirect('employee');
			}
		}
	}

	public function add_address()
	{
		$this->load->view('add_address');
	}

	public function add_address_save()
	{
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('province', 'Province', 'required');
		$this->form_validation->set_rules('zip_code', 'ZIP Code', 'required');
		$id = $_POST['id'];
		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$this->flashdata_failed($pesan);
			redirect('detail/' . $id);
		} else {
			$this->db->trans_start();
			$datadetail = array(
				"id_employee" => $id,
				"address" => $_POST['address'],
				"city" => $_POST['city'],
				"province" => $_POST['province'],
				"zip_code" => $_POST['zip_code'],
			);
			$this->db->insert('detail_employee', $datadetail);
			$this->db->trans_complete();
			if ($this->db->trans_status() === TRUE) {
				$pesan = "Add Data Address Done !";
				$this->flashdata_succeed($pesan);
				redirect('detail/' . $id);
			} else {
				$pesan = "Add Data Address Failed !";
				$this->flashdata_failed($pesan);
				redirect('detail/' . $id);
			}
		}
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
		$this->db->trans_start();
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

	public function delete_address($id)
	{
		$get = $this->M_employee->GetData("detail_employee ", "where id = '$id'");
		$id_employee = $get[0]['id'];
		$where = array('id' => $id_employee);
		$this->M_employee->DeleteData('detail_employee', $where);
		$this->db->trans_complete();
		if ($this->db->trans_status() === TRUE) {
			$pesan = "Delete Data Address Done !";
			$this->flashdata_succeed($pesan);
			redirect('employee');
		} else {
			$pesan = "Delete Data Address Failed !";
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
