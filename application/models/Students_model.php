<?php

class Students_model extends CI_model
{
    public function getAllStudents()
    {
        return $this->db->get('students')->result_array();
    }

    public function addDataStudents()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "nickname" => $this->input->post('nickname', true),
            "study" => $this->input->post('study', true)
        ];

        $this->db->insert('students', $data);
    }

    public function deleteDataStudents($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('students');
    }

    public function getStudentById($id)
    {
        $this->db->select('students.id as id,students.name as name, students.nickname as nick, students.study as code_study, studies.name as study');
        $this->db->join('studies', 'students.study = studies.code');
        return $this->db->get_where('students', ['students.id' => $id])->row_array();
    }

    public function updateDataMahasiswa()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "nickname" => $this->input->post('nickname', true),
            "study" => $this->input->post('study', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('students', $data);
    }

    public function findDataStudent()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('nickname', $keyword);
        return $this->db->get('students')->result_array();
    }
}
