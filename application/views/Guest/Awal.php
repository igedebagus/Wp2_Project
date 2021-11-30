<main role="main" class="container">
    <div class="card">
        <div class="card-header">Data Guest</div>
        <div class="card-body">
            <a href="<?php echo base_url(); ?>guest/create" class="btn btn-success">Create</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th width="5%">No</th>
                    <th>Nama </th>
                    <th>Parent Name</th>
                    <th>Grade</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
                <?php
                $no = 1;
                foreach ($guest as $row) {
                ?>
                    <tr>
                        <td widtd="5%"><?php echo $no++; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->parent; ?></td>
                        <td><?php echo $row->grade; ?></td>
                        <td><?php echo $row->tlp; ?></td>
                        <td><?php echo $row->address; ?></td>
                        <td><?php echo $row->message; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>index.php/Guest/ubah/<?php echo $row->id_guest; ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url(); ?>index.php/Guest/delete/<?php echo $row->id_guest; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</main>