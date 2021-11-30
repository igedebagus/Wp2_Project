<div class="container">
    <div class="card">
        <div class="card-header">Create Registration</div>
        <div class="card-body">
            <?php
            if (validation_errors() != false) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php
            }
            ?>
            <form method="post" action="<?php echo base_url(); ?>index.php/registration/save">
                <div class="col-md-6">
                    <div class="field-set">
                        <label>Nama Lengkap</label>
                        <input type='text' name='nama_lengkap' id='regis_name' class="form-control">
                    </div>

                    <div class="field-set">
                        <label>Tanggal Lahir</label>
                        <input type='text' name='ttl' id='regis_ttl' class="form-control">
                    </div>

                    <div class="field-set">
                        <label>Agama</label>
                        <select name="agama" id="regis_agama">
                            <option value="islam">ISLAM</option>
                            <option value="kristen">KRISTEN</option>
                            <option value="budha">BUDHA</option>
                            <option value="hindu">HINDU</option>
                            <option value="konghucu">KONGHUCU</option>
                            <option value="dll">Dan Lain-Lain</option>
                        </select>
                    </div>

                    <div class="field-set">
                        <label>Alamat</label>
                        <div class="field-set">
                            <textarea name='alamat_lengkap' id='regis_alamat' class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="field-set">
                        <label>Kelas</label>
                        <select name="kelas" id="regis_kelas" class="form-control">
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <div class="field-set">
                        <label>Asal Sekolah</label>
                        <input type='text' name='asal_sekolah' id='regis_asal_sekolah' class="form-control">
                    </div>

                    <div class="field-set">
                        <label>Nama Orang Tua</label>
                        <input type='text' name='nama_orangtua' id='regis_ortu' class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="field-set">
                        <label>No Telp (Ayah/Ibu/Siswa)</label>
                        <input type='text' name='no_telp' id='regis_phone' class="form-control">
                    </div>

                    <div class="field-set">
                        <label>E-mail</label>
                        <input type='text' name='email' id='regis_email' class="form-control">
                    </div>

                    <div class="field-set">
                        <label>Prestasi</label>
                        <div class="field-set">
                            <textarea name='prestasi' id='regis_prestasi' class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="field-set">
                        <label>Pilihan Program</label>
                        <select name="id_program" id="regis_program">
                            <option value="1">Regular</option>
                            <option value="2">Private</option>
                            <option value="3">Intensive</option>
                        </select>
                    </div>

                    <div class="field-set">
                        <label>Pilihan Hari</label>
                        <select name="id_hari" id="regis_hari">
                            <?php
                            foreach ($hari as $h) :
                                echo '<option value=' . $h['id_hari'] . '>' . $h['nama'] . '</option>';
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="field-set">
                        <label>Pilihan Jam</label>
                        <select name="id_jam" id="regis_jam">
                            <?php
                            foreach ($jam as $j) :
                                echo '<option value=' . $j['id_jam'] . '>' . $j['nama'] . '</option>';
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="field-set">
                        <label>Sumber Informasi</label>
                        <select name="sumber" id="regis_sumber">
                            <option value="presentasi">Presentasi</option>
                            <option value="majalah">Majalah</option>
                            <option value="brosur">Brosur</option>
                            <option value="teman">Teman</option>
                            <option value="spanduk">Spanduk</option>
                            <option value="lainlain">Lain-Lain </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>