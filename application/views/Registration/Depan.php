<main role="main" class="container">
    <div class="card">
        <div class="card-header">Data Register</div>
        <div class="card-body">
            <a href="<?php echo base_url(); ?>registration/create" class="btn btn-success">Create</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th width="5%">No</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Alamat Lengkap</th>
                    <th>Asal Sekolah</th>
                    <th>kelas</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Prestasi</th>
                    <th>Nama Orangtua</th>
                    <th>Id Program</th>
                    <th>Id Hari</th>
                    <th>Id Jam</th>
                    <th>Tanggal Daftar</th>
                    <th>Status Payment</th>
                </tr>
                <?php
                $no = 1;
                foreach ($registration as $row) {
                ?>
                    <tr>
                        <td widtd="10%"><?php echo $no++; ?></td>
                        <td><?php echo $row->nama_lengkap; ?></td>
                        <td><?php echo $row->ttl; ?></td>
                        <td><?php echo $row->agama; ?></td>
                        <td><?php echo $row->alamat_lengkap; ?></td>
                        <td><?php echo $row->asal_sekolah; ?></td>
                        <td><?php echo $row->kelas; ?></td>
                        <td><?php echo $row->no_telp; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->prestasi; ?></td>
                        <td><?php echo $row->nama_orangtua; ?></td>
                        <td><?php echo $row->id_program; ?></td>
                        <td><?php echo $row->id_hari; ?></td>
                        <td><?php echo $row->id_jam; ?></td>
                        <td><?php echo $row->tanggal_daftar; ?></td>
                        <td><?php echo $row->status_payment; ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>index.php/Registration/edit/<?php echo $row->id_regis; ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url(); ?>index.php/Registration/delete/<?php echo $row->id_regis; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</main>