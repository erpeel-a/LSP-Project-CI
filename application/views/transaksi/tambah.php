<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href=<?= base_url('/transaksi') ?> class="bg-dark text-white py-2 px-4 rounded">Data Transaksi</a>
</div>

<form action=<?= base_url('transaksi/action_tambah') ?> method="POST">
    <div class="px-4 d-flex justify-content-center">
        <table width="70%">
            <tr>
                <td>Bulan</td>
                <td>
                    <select name="bulan" class="form-control" id="exampleFormControlSelect1">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>
                    <select name="tahun" class="form-control" id="exampleFormControlSelect1">
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Karyawan</td>
                <td>
                    <select name="namakaryawan" class="form-control" id="exampleFormControlSelect1">
                        <?php
                        $query = $this->db->query('SELECT namakaryawan, idkaryawan FROM karyawan');
                        foreach ($query->result() as $row) {
                        ?>
                            <option value=<?= $row->idkaryawan; ?>><?= $row->namakaryawan; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Lembur</td>
                <td><input type="number" name="lembur" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan lembur"></td>
            </tr>
            <tr>
                <td>Transport</td>
                <td><input type="number" name="transport" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan transport"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn btn-dark mt-2 w-100" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </div>
</form>