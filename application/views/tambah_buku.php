<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $this->load->helper('form');
    if (!empty($datarecord)) {
        $ket = "UBAH";
        $tombol = "UPDATE";
        $row = $datarecord;
        echo form_open("c_buku/updatedata/" . $datarecord->kd_buku);
    } else {
        $ket = "TAMBAH";
        $tombol = "SIMPAN";
        echo form_open("c_buku/tambahdata");
        $row->kd_buku = '';
        $row->judul = '';
        $row->pengarang = '';
        $row->penerbit = '';
    }
    ?>
    <h2><?= $ket; ?>DATA BUKU</h2>
    <table>
        <tr>
            <td>Kode Buku</td>
            <td><?= form_input('kd_buku', $row->kd_buku); ?></td>
            <?= form_hidden('id', $row->kd_buku); ?>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td><?= form_input('judul', $row->judul); ?></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><?= form_input('pengarang', $row->pengarang); ?></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><?= form_input('penerbit', $row->penerbit); ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <?= form_submit('submit', $tombol, 'id=submit'); ?>
            </td>
        </tr>
    </table>
    <?= form_close(); ?>
</body>

</html>