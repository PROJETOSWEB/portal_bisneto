<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of celula
 *
 * @author Karol Oliveira
 */
class celula extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function index() {

        if ($this->session->userdata('num') >= 1)
            redirect(base_url() . 'index.php?celula/principal', 'refresh');
        if ($this->session->userdata('student_login') == 0)
            redirect(base_url() . 'index.php?login', 'refresh');
    }

    function principal() {

        if ($this->session->userdata('num') == 0)
            redirect('login', 'refresh');

        $this->load->view('celula/index');
    }

    function reunioes($param1 = '', $param2 = '', $param3 = '') {

        if ($this->session->userdata('num') == 0)
            redirect('login', 'refresh');

        $this->load->view('celula/reunioes');
    }

    function celulas($param1 = '', $param2 = '', $param3 = '') {

        if ($this->session->userdata('num') == 0)
            redirect('login', 'refresh');

        if ($param1 == 'create') {

            $data['id_lider12'] = $this->session->userdata('id');
            $data['tipo_celula'] = $this->input->post('tipo_celula');
            $data['nome'] = $this->input->post('nome');
            $data['endereco'] = $this->input->post('endereco');
            $data['bairro'] = $this->input->post('bairro_id');
            $data['latitude'] = $this->input->post('latitude');
            $data['longitude'] = $this->input->post('longitude');
            $data['horario'] = $this->input->post('horario');
            $data['num_discipulos'] = $this->input->post('discipulos');
            $data['genero'] = $this->input->post('genero');


            $_checkbox = $this->input->post('dias');
            foreach ($_checkbox as $_valor) {
                $data['dias_reunioes'] = $_valor;
            }


            $this->db->insert('celulad', $data);
            redirect(base_url() . 'index.php?celula/celulas');
        }


        if ($param2 == 'do_update') {
            $data['name'] = $this->input->post('name');
            $data['birthday'] = $this->input->post('birthday');
            $data['sex'] = $this->input->post('sex');
            $data['address'] = $this->input->post('address');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['father_name'] = $this->input->post('father_name');
            $data['mother_name'] = $this->input->post('mother_name');
            $data['class_id'] = $this->input->post('class_id');
            $data['roll'] = $this->input->post('roll');

            $this->db->where('student_id', $param3);
            $this->db->update('student', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $param3 . '.jpg');
            $this->crud_model->clear_cache();

            redirect(base_url() . 'index.php?admin/student/' . $param1, 'refresh');
        } else if ($param2 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('student', array(
                        'student_id' => $param3
                    ))->result_array();
        } else if ($param2 == 'personal_profile') {
            $page_data['personal_profile'] = true;
            $page_data['current_student_id'] = $param3;
        } else if ($param2 == 'academic_result') {
            $page_data['academic_result'] = true;
            $page_data['current_student_id'] = $param3;
        }
        if ($param2 == 'delete') {
            $this->db->where('student_id', $param3);
            $this->db->delete('student');
            redirect(base_url() . 'index.php?admin/student/' . $param1, 'refresh');
        }

        $page_data['teachers'] = $this->db->get('celula')->result_array();


        //SELECT ABAIXO PARA MONTAR O MENU ACESSO, DEVE SER INCLUIDO EM TODOS OS MENUS
//        $page_data['acesso'] = $this->db->get('acessos')->result_array();
//        $page_data['page_name'] = 'student';
//        $page_data['page_title'] = get_phrase('gerenciar_aluno');
//        $this->load->view('index', $page_data);


        $this->load->view('celula/celula');
    }

    function adicionar() {

        if ($this->session->userdata('num') == 0)
            redirect('login', 'refresh');

        $this->load->view('celula/adicionar');
    }

}
