<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href=<?= base_url('/golongan/tambah') ?> class="bg-dark text-white py-2 px-4 rounded">Tambah Data</a>
</div>

<div class="px-4">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama Golongan</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Tunjangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $this->db->query('SELECT * FROM gaji');
            foreach ($query->result() as $row) {
            ?>
                <tr>
                    <td><?= $row->golongan; ?></td>
                    <td><?= $row->gajipokok; ?></td>
                    <td><?= $row->tunjangan; ?></td>
                    <td>
                        <a href=<?= base_url("/golongan/edit/") . $row->golongan ?>>Edit</a> | <a href=<?= base_url("/golongan/hapus/") . $row->golongan ?> class="text-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>