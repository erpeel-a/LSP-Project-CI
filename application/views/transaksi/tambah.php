<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href="<?= base_url('/transaksi') ?>" class="bg-dark text-white py-2 px-4 rounded">Data Transaksi</a>
</div>

<form action="<?= base_url('transaksi/action_tambah') ?>" method="POST">
    <div class="px-4 d-flex justify-content-center">
        <table width="70%">
            <tr>
                <td>Bulan</td>
                <td>
                    <select name="bulan" class="form-control" id="exampleFormControlSelect1">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                        ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>
                    <select name="tahun" class="form-control" id="exampleFormControlSelect1">
                        <?php
                        for ($i = 2019; $i <= 2025; $i++) {
                        ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php
                        }
                        ?>
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
                            <option value="<?= $row->idkaryawan; ?>"><?= $row->namakaryawan; ?></option>
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