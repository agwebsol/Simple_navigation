<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	/***List the entire tabble***/
    function get_employee()
	{
		$query	=	$this->db->get('Employee_Table');
		return $query->result_array();
	}
    
	/***Add employee to database***/
    function add_employee_db($employee_data)
    {
        $query = $this->db->insert("Employee_Table", $employee_data);
        return $query;
    }
    
	/***Get employee information from database***/
    function show_employee($employee_ID)
    {
        $query = $this->db->get_where("Employee_Table", array("ID" => $employee_ID));
        return $query->result_array();
    }
	
	/***Update employee information from database***/
    function update_employee($employee_data, $id)
	{
		$query = $this->db->update("Employee_Table", $employee_data, array("ID" =>$id ));
		return $query;
	}
	
	/***delete employee information from database***/
	function delete_employee($employee_ID)
	{
		$query = $this->db->where('ID', $employee_ID);
				 $this->db->delete('Employee_Table');
				 return $query;
	}
	
	/***add hours to the database***/
	function submit_hours_db($employee_data)
	{
		$query = $this->db->insert("Payroll_Table", $employee_data);
		return $query; 
	}
	
	/***list payroll period by month***/
	function view_payroll_month($month)
	{
		$this->db->distinct();
		$this->db->select('Period');
		$this->db->where('Month', $month);
		$query	=	$this->db->get('Payroll_Table');
		return $query->result_array();
	}
	
	/***get payroll by period and associated employee information from database***/
	function view_payroll_period($period)
	{
		$this->db->select('Firstname, Lastname, Payroll_Table.SSN, Hour_rate, Hours');
		$this->db->from('Payroll_Table');
		$this->db->join('Employee_Table', 'Employee_Table.ID = Payroll_Table.Employee_ID');
		$this->db->where('Period', $period);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	/***delete payroll period from to the database***/
	function delete_payroll_period($period)
	{
		$query = $this->db->where("Period", $period);
				 $this->db->delete("Payroll_Table");
				 return $query;
	}
	
}