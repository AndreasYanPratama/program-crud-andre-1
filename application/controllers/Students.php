<?php

class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Students_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'List';
        $data['students'] = $this->Students_model->getAllStudents();
        if ($this->input->post('keyword')) {
            $data['students'] = $this->Students_model->findDataStudent();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('students/index');
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Students';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');

        $data['studies'] =  $this->db->get('studies')->result_array();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('students/add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Students_model->addDataStudents();
            $this->session->set_flashdata('flash', 'Adding');
            redirect('/');
        }
    }

    public function delete($id)
    {
        $this->Students_model->deleteDataStudents($id);
        $this->session->set_flashdata('flash', 'Deleting');
        redirect('/');
    }

    public function detail($id)
    {
        $data['title'] = "Detail";
        $data['students'] = $this->Students_model->getStudentById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('students/detail', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['title'] = 'Edit Data';
        $data['students'] = $this->Students_model->getStudentById($id);
        $data['studies'] =  $this->db->get('studies')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('students/update', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Students_model->updateDataMahasiswa();
            $this->session->set_flashdata('flash', 'Updating');
            redirect('/');
        }
    }
}
