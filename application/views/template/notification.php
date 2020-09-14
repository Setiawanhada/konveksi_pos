
<?php  $notif = $this->session->flashdata(); ?>

<?php if(!empty($notif)): ?>
    <?php if(!empty($this->session->flashdata('success'))): ?>
        <div class="alert alert-success" style="margin-top: 20px">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <label ><strong>Sukses</strong>  <?= $notif['success'] ?></label>
        </div>
    <?php  else: ?>
        <div class="alert alert-danger" style="margin-top: 20px">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <label ><strong>error,</strong> <?= $notif['error'] ?></label>
                    </div>
    <?php endif ?>
<?php endif ?>