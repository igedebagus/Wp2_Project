<div class="container">
    <div class="card">
        <div class="card-header">Ubah Registration</div>
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
            <form method="post" class="form-underline" action="<?php echo base_url(); ?>index.php/guest/update">
                <div class="field-set">
                    <label>Nama </label>
                    <input type='text' name='nama' id='nama' class="form-control">
                </div>

                <div class="field-set">
                    <label>Parent Name</label>
                    <input type='text' name='parent' id='parent' class="form-control">
                </div>

                <div class="field-set">
                    <label>Grade</label>
                    <input type='text' name='grade' id='grade' class="form-control">
                </div>

                <div class="field-set">
                    <label>Phone</label>
                    <input type='text' name='tlp' id='tlp' class="form-control">
                </div>

                <div class="field-set">
                    <label>Address</label>
                    <input type='text' name='address' id='address' class="form-control">
                </div>

                <div class="field-set">
                    <label>Message</label>
                    <input type='text' name='message' id='message' class="form-control">
                </div>

                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

            </form>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>
</div>