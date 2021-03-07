<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href="<?= base_url('/') ?>" class="bg-dark text-white py-2 px-4 rounded">Data Karyawan</a>
</div>

<form action="<?= base_url('karyawan/action_edit') ?>" method="POST">
    <div class="px-4 d-flex justify-content-center">
        <table width="70%">
            <tr>
                <td>Nama</td>
                <td><input required type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama" value="<?= $karyawan->namakaryawan; ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select required name="jeniskelamin" class="form-control" id="exampleFormControlSelect1" value="<?= $karyawan->jeniskelamin; ?>">
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input required type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan alamat" value="<?= $karyawan->alamat; ?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input required type="text" name="tempatlahir" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan tempat lahir" value="<?= $karyawan->tempatlahir; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input required type="date" name="tgllahir" class="form-control" id="exampleFormControlInput1" value="<?= $karyawan->tgllahir; ?>"></td>
            </tr>
            <tr>
                <td>Golongan</td>
                <td>
                    <select required name="golongan" class="form-control" id="exampleFormControlSelect1" value="<?= $karyawan->golongan; ?>">
                        <?php
                        $query = $this->db->query('SELECT golongan FROM gaji');
                        foreach ($query->result() as $row) {
                        ?>
                            <option value="<?= $row->golongan; ?>"><?= $row->golongan; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select required name="status" class="form-control" id="exampleFormControlSelect1" value="<?= $karyawan->status; ?>">
                        <option value="A">A</option>
                        <option value="N">N</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="idkaryawan" value="<?= $id; ?>">
                </td>
                <td>
                    <button class="btn btn-dark mt-2 w-100" type="submit" name="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </div>
</form>