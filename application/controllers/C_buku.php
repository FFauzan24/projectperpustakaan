<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_buku extends CI_Controller
{
    function tambahdata()
    {
        if ($this->input->post('submit', true)) {
            $this->load->model('m_buku');
            $this->m_buku->tambah();
            redirect("c_buku", "refresh");
        }
        $this->load->view('tambah_buku');
    }
    function index()
    {
        $this->load->model('m_buku');
        $data['records'] = $this->m_buku->ambilbuku();
        $this->load->view('v_buku.php', $data);
    }
    function updatedata($kd_buku)
    {
        if ($_POST == NULL) {
            $this->load->model('m_buku');
            $data['datarecord'] = $this->m_buku->select($kd_buku);
            $this->load->view('tambah_buku', $data);
        } else {
            $this->load->model('m_buku');
            $id = $this->input->post('id');
            $this->m_buku->update($id);
            $this->load->helper('url');
            redirect("c_buku", "refresh");
        }
    }
    function deletedata($kd_buku)
    {
        $this->db->delete('tbl_buku', array('kd_buku' => $kd_buku));
        redirect("c_buku", "refresh");
    }
}
