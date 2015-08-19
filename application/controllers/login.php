<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of login
 *
 * @author Karol Oliveira
 */
class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        /* cash control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    public function index() {

        $this->load->view('login');
    }

    public function verificarLogin() {

        $query = $this->db->get_where("discipulos", array(
            'login' => $this->input->post('cpf'),
            'senha' => $this->input->post('senha')
        ));

        if ($query->num_rows() > 0) {

            
            $row = $query->row();

            $this->session->set_userdata('login', $row->login);
            $this->session->set_userdata('nome', $row->nome);
            $this->session->set_userdata('num', $query->num_rows);
            $this->session->set_userdata('id', $query->discipulo_id);
            
            
            redirect(base_url() . 'index.php?celula', 'refresh');
            

            return TRUE;
        } else {

            $this->session->set_flashdata('Dados Incorretos');
            redirect(base_url() . 'index.php?login', 'refresh');
            return FALSE;
        }
    }

    function logout() {

        $this->session->unset_userdata();
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() . 'index.php?login', 'refresh');
    }

}
