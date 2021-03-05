<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href=<?= base_url('/golongan') ?> class="bg-dark text-white py-2 px-4 rounded">Data Golongan</a>
</div>

<form action=<?= base_url('golongan/action_edit') ?> method="POST">
    <div class="px-4 d-flex justify-content-center">
        <table width="70%">
            <tr>
                <td>Nama Golongan</td>
                <td><input type="text" name="golongan" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama golongan" value=<?= $golongan->golongan; ?>></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="number" name="gajipokok" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan gaji pokok" value=<?= $golongan->gajipokok; ?>></td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td><input type="number" name="tunjangan" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan tunjangan" value=<?= $golongan->tunjangan; ?>></td>
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