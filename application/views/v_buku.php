<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    echo anchor('c_buku/tambahdata', 'TAMBAH DATA BUKU');
    ?>

    <p>
    <table width="50%" border="1">
        <th colspan="4" bgcolor="#00FF66">DATA BUKU</th>
        <tr bgcolor="#CCFF00" align="center">
            <td>KODE</td>
            <td>JUDUL</td>
            <td>PENGARANG</td>
            <td>PENERBIT</td>
            <td colspan="2">AKSI</td>
        </tr>

        <?php
        foreach ($records as $row) {
            echo " <tr>
                <td>" . $row->kd_buku . "</td>
                <td>" . $row->judul . "</td>
                <td>" . $row->pengarang . "</td>
                <td>" . $row->penerbit . "</td>
                <td>" . anchor('c_buku/updatedata/' . $row->kd_buku, 'EDIT') . "</td>
                <td>" . anchor('c_buku/deletedata/' . $row->kd_buku, 'HAPUS') . "</td>
                </tr> ";
        }

        ?>
    </table>
    </p>