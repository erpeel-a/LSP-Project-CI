<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href=<?= base_url('/') ?> class="bg-dark text-white py-2 px-4 rounded">Data Karyawan</a>
</div>

<form action=<?= base_url('home/action_tambah') ?> method="POST">
    <div class="px-4 d-flex justify-content-center">
        <table width="70%">
            <tr>
                <td>Nama</td>
                <td><input required type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select required name="jeniskelamin" class="form-control" id="exampleFormControlSelect1">
                        <option>L</option>
                        <option>P</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input required type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan alamat"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input required type="text" name="tempatlahir" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan tempat lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input required type="date" name="tgllahir" class="form-control" id="exampleFormControlInput1"></td>
            </tr>
            <tr>
                <td>Golongan</td>
                <td>
                    <select required name="golongan" class="form-control" id="exampleFormControlSelect1">
                        <?php
                        $query = $this->db->query('SELECT golongan FROM gaji');
                        foreach ($query->result() as $row) {
                        ?>
                            <option><?= $row->golongan; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select required name="status" class="form-control" id="exampleFormControlSelect1">
                        <option>A</option>
                        <option>N</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn btn-dark mt-2 w-100" type="submit" name="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </div>
</form>