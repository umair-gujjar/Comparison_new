<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if($this->Admin_Model->is_logged_in())
        {
            redirect('admin/home');
        }
        else
        {
            $this->form_validation->set_rules('username', 'lang:login_undername', 'callback_login_check');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/login');
            }
            else
            {
                redirect('admin/home');
            }
        }
    }

    function login_check($username)
    {
        $password = $this->input->post("password");

        if(!$this->Admin_Model->login($username,$password))
        {
            $this->form_validation->set_message('login_check', $this->lang->line('login_invalid_username_and_password'));
            return false;
        }
        return true;
    }


    public function home()
    {
        $this->load->view('admin/home');
    }

    public function sub_admin()
    {
        $data['add'] = 'Add Sub Admin';
        $this->load->view('admin/people/manage',$data);
    }

    public function data_logger()
    {
        $data['add'] = 'Add Data Logger';
        $this->load->view('admin/people/manage' , $data);
    }



}
