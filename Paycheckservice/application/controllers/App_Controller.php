<?php
/*************************************************
 *This is the Application Controller Class
 *
 *Create, view, Modify and delete employee information
 *
 *Submit hours to database to create employee paystub
 *
 *View Payroll Periods by month and delete payroll periods
 *
 *Calculate estimated total weekly, monthly and annual salary and tax witholdings
 *
 *@author Daro Omwanor
 *
 *@copyright 2016 Daro ArriGold Omwanor
 *
 *
 *
 *
 **************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');


class App_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model');
        
    }
	/***index() loads dashboard.php***/
	public function index()
    {
        $page_data['load'] = 'dashboard';
        $this->load->view('dashboard', $page_data);
	}
	
	/***Load add_employee.php
	 ***test_input
	 ***Add employee information to database
	 ***
	 ******/
    public function add_employee()
    {
        if(isset($_POST['submit']))
        {
            $fname = $this->test_input($_POST['fname']);
            $lname = $this->test_input($_POST['lname']);
            $oname = $this->test_input($_POST['oname']);
            $address1 = $this->test_input($_POST['address1']);
            $address2 = $this->test_input($_POST['address2']);
            $city = $this->test_input($_POST['city']);
            $state = $this->test_input($_POST['state']);
            $zip_code = $this->test_input($_POST['zip']);
            $sos = $this->test_input($_POST['sos']);
            $dob = $this->test_input($_POST['dob']);
            $status = $this->test_input($_POST['status']);
            $hour_rate = $this->test_input($_POST['hour_rate']);
            $salary = $this->test_input($_POST['salary']);
            $start_date = $this->test_input($_POST['start_date']);
            
            $personal_info = array(
                "other_name" => $oname,
                "address1" => $address1,
                "address2" => $address2,
                "city" => $city,
                "state" => $state,
                "zip_code" => $zip_code
            );
            $json_personal_info = json_encode($personal_info);
            $employee_data = array(
              "Firstname" => $fname,
              "Lastname" => $lname,
              "SSN" => $sos,
              "DOB" => $dob,
              "Status" => $status,
              "Hour_rate" => $hour_rate,
              "Salary" => $salary,
              "Start_date" => $start_date,
              "Personal_info" => $json_personal_info
            );
            $this->Crud_model->add_employee_db($employee_data);
			 header('LOCATION: http://52.40.215.168/Simple-Paycheck-Service/Paycheckservice/index.php/App_Controller/view_all_employee');
        }
        
        $page_data['load'] = 'add_employee';
        $this->load->view('dashboard', $page_data);    
    }
    
	/***List All Employees to view_all_employee.php***/
    public function view_all_employee()
    {
        $page_data['employees'] = $this->Crud_model->get_employee();
        $page_data['load'] = 'view_all_employee';
        $this->load->view('dashboard', $page_data);
        
    }
    
	/***Ajax request employee personal information from database
	 ***Display in a Modal Form view_employee.php to Update
	 ***Test_input
	 ***Update employee personal information to database
 	 ***
	 ***/
    function ajax_employee()
    {
        $page_data['employee'] = $this->Crud_model->show_employee($_POST['id']);
        $this->load->view('template/view_employee', $page_data);
        
        if(isset($_POST['submit'])){
            $fname = $this->test_input($_POST['fname']);
            $lname = $this->test_input($_POST['lname']);
            $oname = $this->test_input($_POST['oname']);
            $address1 = $this->test_input($_POST['address1']);
            $address2 = $this->test_input($_POST['address2']);
            $city = $this->test_input($_POST['city']);
            $state = $this->test_input($_POST['state']);
            $zip_code = $this->test_input($_POST['zip']);
            $sos = $this->test_input($_POST['sos']);
            $dob = $this->test_input($_POST['dob']);
            $status = $this->test_input($_POST['status']);
            $hour_rate = $this->test_input($_POST['hour_rate']);
            $salary = $this->test_input($_POST['salary']);
            $start_date = $this->test_input($_POST['start_date']);
            
            $personal_info = array(
                "other_name" => $oname,
                "address1" => $address1,
                "address2" => $address2,
                "city" => $city,
                "state" => $state,
                "zip_code" => $zip_code
            );
            $json_personal_info = json_encode($personal_info);
            $employee_data = array(
              "Firstname" => $fname,
              "Lastname" => $lname,
              "SSN" => $sos,
              "DOB" => $dob,
              "Status" => $status,
              "Hour_rate" => $hour_rate,
              "Salary" => $salary,
              "Start_date" => $start_date,
              "Personal_info" => $json_personal_info
            );
            $query =$this->Crud_model->update_employee($employee_data, $_POST['id']);
            header('LOCATION: http://52.40.215.168/Simple-Paycheck-Service/Paycheckservice/index.php/App_Controller/view_all_employee');
        }
    }
	
	
    /***Ajax prompt to Delete employee from database
	 ***Delete employee from database
	 ***
	 ***/
    public function ajax_delete_employee()
    {
        if(isset($_POST['id']))
        {
            $page_data['employee'] = $this->Crud_model->show_employee($_POST['id']);
            $this->load->view('template/delete_employee', $page_data);
            
        }
        
        if(isset($_POST['delete']))
        {
            $this->Crud_model->delete_employee($_POST['id']);
            header('LOCATION: http://52.40.215.168/Simple-Paycheck-Service/Paycheckservice/index.php/App_Controller/view_all_employee');
        }
    }
	
    /***stripes inputs and check for sql injections
	 ***
	 ***/
	
    function test_input($data)
    {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }
	
	/***Ajax request- Calculate estimated total weekly,
	 ***monthly and annual salary and tax witholdings to,
	 ***ajax_estimate_app.php
	 ***
	 ***/
	    
    public function ajax_estimate_app()
    {
       $page_data['f_tax'] = $_POST['f_tax'];
       $page_data['s_tax'] = $_POST['s_tax'];
       $page_data['o_tax'] = $_POST['o_tax'];
       $page_data['employees'] = $this ->Crud_model->get_employee();
       $this->load->view('template/ajax_estimate_app', $page_data);
       
    }
	
	/***Displays payroll By Month***/
    public function view_payroll_month()
    {
        if(isset($_REQUEST['date']))
        {
            $page_data['period'] = $this->Crud_model->view_payroll_month($_REQUEST['date']);
            $page_data['date'] = $_REQUEST['date'];
            $page_data['f_tax'] = $_REQUEST['f_tax'];
            $page_data['s_tax'] = $_REQUEST['s_tax'];
            $page_data['o_tax'] = $_REQUEST['o_tax'];
            $this->load->view('template/view_payroll_month', $page_data);
        }
    }
	
	/***Submit hours to the database***/
    public function submit_hours()
    {
      $page_data['load'] = 'submit_hours';
      $page_data['employees'] = $this->Crud_model->get_employee();
      $this->load->view('dashboard', $page_data);
      if(isset($_POST['submit']))
      {
        $count = $_POST['count'];
        $month = $this->test_input($_POST['month']);
        $period = $_POST['start_period'].'/'.$_POST['end_period'];
        for($i=1; $i<=$count; $i++)
        {
            $data = array(
                "Employee_ID" => $_POST['id_'.$i],
                "Month" => $month,
                "Period" => $period,
                "SSN" => $this->test_input($_POST['ssn_'.$i]),
                "Hours" => $this->test_input($_POST['hours_'.$i])
                          );
            $this->Crud_model->submit_hours_db($data);
			 header('LOCATION: http://52.40.215.168/Simple-Paycheck-Service/Paycheckservice/index.php/App_Controller/index');
        }
        
      }
    }
	
	/***View Specific payroll period
	 ***load data to view_payroll_period.php
	 ***/
    public function view_payroll_period()
    {
        if(isset($_POST['period']))
        {
            $page_data['f_tax'] = $_REQUEST['f_tax'];
            $page_data['s_tax'] = $_REQUEST['s_tax'];
            $page_data['o_tax'] = $_REQUEST['o_tax'];
            $page_data['period'] = $period = $_POST['period'];
            $page_data['data'] = $this->Crud_model->view_payroll_period($period);
            $page_data['load'] = 'view_payroll_period';
            $this->load->view('dashboard', $page_data);
        }
    }
	
	/***Delete Payroll period from database***/
	public function delete_payroll_period()
	{
		if(isset($_POST['delete']))
		{
			$period = $_POST['period'];
			$this->Crud_model->delete_payroll_period($period);
			header('LOCATION: http://52.40.215.168/Simple-Paycheck-Service/Paycheckservice/index.php/App_Controller/index');
		}
	}
}
