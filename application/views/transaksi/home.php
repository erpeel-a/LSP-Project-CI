<div class="mt-5 p-4 d-flex align-items-center justify-content-between">
    <h1><?= $title; ?></h1>
    <a href="<?= base_url('/transaksi/tambah') ?>" class="bg-dark text-white py-2 px-4 rounded">Tambah Data</a>
</div>

<div class="px-4">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Bulan/Tahun</th>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Lembur + Trans</th>
                <th scope="col">Tunjangan</th>
                <th scope="col">Total Gaji</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $this->db->query('SELECT * FROM transaksi INNER JOIN karyawan ON transaksi.idkaryawan = karyawan.idkaryawan INNER JOIN gaji ON karyawan.golongan = gaji.golongan');
            foreach ($query->result() as $row) {
            ?>
                <tr>
                    <td><?= $row->idtransaksi; ?></td>
                    <td><?= $row->bulan . '/' . $row->tahun; ?></td>
                    <td><?= $row->namakaryawan ?></td>
                    <td><?= $row->gajipokok ?></td>
                    <td><?= $row->lembur + $row->transport; ?></td>
                    <td><?= $row->tunjangan; ?></td>
                    <td><?= $row->gajipokok + $row->lembur + $row->transport; ?></td>
                    <td>
                        <a href="<?= base_url("/transaksi/edit/") . $row->idtransaksi ?>">Edit</a> | <a href="<?= base_url("/transaksi/hapus/") . $row->idtransaksi ?>" class="text-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>