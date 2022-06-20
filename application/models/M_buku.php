<?php
class m_buku extends CI_Model
{
    function tambah()
    {
        $kode = $this->input->post('kd_buku');
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $data = array('kd_buku' => $kode, 'judul' => $judul, 'pengarang' => $pengarang, 'penerbit' => $penerbit);
        $simpanbuku = $this->db->insert('tbl_buku', $data);
        if ($simpanbuku) {
            echo '<script language="javascript"> alert("Data Berhasil Disimpan"); </script>';
        }
    }

    function ambilbuku()
    {
        $ambil = $this->db->get('tbl_buku');
        if ($ambil->num_rows() > 0) {
            foreach ($ambil->result() as $row) {
                $hasilbuku[] = $row;
            }
            return $hasilbuku;
        }
    }
    function select($kd_buku)
    {
        return $this->db->get_where('tbl_buku', array('kd_buku' => $kd_buku))->row();
    }
    function update($kd_buku)
    {
        $kd_buku = $this->input->post('id');
        $kode = $this->input->post('kd_buku');
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $data = array('kd_buku' => $kode, 'judul' => $judul, 'pengarang' => $pengarang, 'penerbit' => $penerbit);

        $this->db->where('kd_buku', $kd_buku);
        $this->db->update('tbl_buku', $data);
    }

    function delete($kd_buku)
    {
        $this->db->delete('tbl_buku', array('kd_buku' => $kd_buku));
    }
}
