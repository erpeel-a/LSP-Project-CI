<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href="<?= base_url('/tambah') ?>" class="bg-dark text-white py-2 px-4 rounded">Tambah Data</a>
</div>

<div class="px-4">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jen. Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Lahir</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">Golongan</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $this->db->query('SELECT * FROM karyawan');
            foreach ($query->result() as $row) {
            ?>
                <tr>
                    <td><?= $row->namakaryawan; ?></td>
                    <td><?= $row->jeniskelamin; ?></td>
                    <td><?= $row->alamat; ?></td>
                    <td><?= $row->tempatlahir; ?></td>
                    <td><?= $row->tgllahir; ?></td>
                    <td><?= $row->golongan; ?></td>
                    <td><?= $row->status; ?></td>
                    <td>
                        <a href="<?= base_url("/edit/") . $row->idkaryawan ?>">Edit</a> | <a href="<?= base_url("/hapus/") . $row->idkaryawan ?>" class="text-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>