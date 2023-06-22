<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_users_model');
	}

	public function index()
	{
		if (isset($_POST['login_btn'])) {
			$email= $this->input->post('user_email');
			$pw= $this->input->post('user_password');

			$user_data=$this->Admin_users_model->authenticate($email);

			if (!empty($user_data)== TRUE) {
				if ($user_data[0]->password == $pw) {
						if($user_data[0]->type=="admin"){
								$userdata = array(
													'id' 		=> $user_data[0]->id,
													'fullname' 	=> $user_data[0]->fullname,									);
								$this->session->set_userdata($userdata);
								redirect('dashboard');
							}else{
								$this->session->set_flashdata('msg_login','Not an admin. Please try again.');
							}
					}else {
						$this->session->set_flashdata('msg_login','Invalid Password. Please try again.');
						}
			}else {
			$this->session->set_flashdata('msg_login','Account not found. Please try again.');
			// code...
			}
		}
		$this->load->view('backend/pages/login');
	}

	public function dashboard(){

		if (!$this->session->has_userdata('id')) {
            redirect('admin'); // Redirect to login page if not logged in
        }
		if ($this->session->has_userdata('id') == TRUE) {

				$this->load->view('backend/include/header');
				$this->load->view('backend/include/nav');
				$this->load->view('backend/pages/dashboard');
			    $this->load->view('backend/include/footer');
		}
	}
	public function logout(){
		session_destroy();
		redirect('admin');
	}

		public function settings(){
			$data['web_info'] = $this->Admin_users_model->fetch_all("web_info");
		
			$this->load->view('backend/include/header');
			$this->load->view('backend/include/nav');
			$this->load->view('backend/pages/settings', $data);
			$this->load->view('backend/include/footer');    
		}
	

	public function create_admin(){
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/pages/create_admin');
		$this->load->view('backend/include/footer');	
	}

	public function insertadmin() {
		
		if (isset($_POST['signup_btn'])) {
			$pass  =$this->input->post('apassword');
			$apass =$this->input->post('arepeatpassword');

			if($pass == $apass){
					$insertArray= array(
						'fullname' => $this->input->post('afullname'),
						'address' =>$this->input->post('aaddress'),
						'birthdate' =>$this->input->post('abirthdate'),
						'gender' =>$this->input->post('agender'),
						'contact' =>$this->input->post('acontact'),
						'type' => $this->input->post('atype'),
						'email' => $this->input->post('aemail'),
						'password' => $this->input->post('apassword'),
						'status' => $this->input->post('astatus')
					);
					// echo "<script>console.log('Debug Objects: " . $site,$about,$contact,$email,$location . "' );</script>";
					$result=$this->Admin_users_model->insert_data('admin',$insertArray);
					if($result){
						echo "<script>console.log('Debug Objects: " . "Record Added" . "' );</script>";
						// Redirect to a suitable page after the form submission
						redirect('dashboard');
					}else{
							$this->session->set_flashdata('msg_settings_error','Record Inserted Successfully');
						}
					}else{
						$this->session->set_flashdata('msg_settings_error','Password does not matched!');
					}
				}
					else{
						$this->session->set_flashdata('msg_settings_error','Failed to Insert');
					}
					$this->load->view('backend/pages/create_admin');
			}

	public function admin_table() {
		$data['users'] = $this->Admin_users_model->fetch_all("admin");
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/pages/admin_table', $data);
		$this->load->view('backend/include/footer');
	}

	public function update()
	{

	}
	
	public function insertFROMsettings() {

			$insertArray = array(
				'web_name' => $this->input->post('name'),
				'web_description' => $this->input->post('about'),
				'contact_num' => $this->input->post('contact'),
				'address' => $this->input->post('address'),
				'email' => $this->input->post('email')
			);
	
			$result = $this->Admin_users_model->set_update('web_info', $insertArray);
			if ($result) {
				echo "<script>console.log('Debug Objects: " . "Record Added" . "' );</script>";
				$this->session->set_flashdata('msg_settings', 'Website Updated Successfully');
			} else {
				$this->session->set_flashdata('msg_settings_error', 'Failed to Update');
			}
		redirect('settings');
	}
		
}