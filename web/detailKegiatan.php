<?php
include 'model.php';
$db = new model;
?>
<form class="form-horizontal center-block media-middle" style="margin: 1px;">
    <div class="form-row">
        <?php
            foreach ($db->tampilDataKegiatan_ID($_POST['id']) as $data){
        ?>
        <div class="form-group col-lg-12">
            <label for="inputEmail4">No Kegiatan</label>
            <input type="text" disabled class="form-control" id="inputnosurat" name="inputnosurat" placeholder="<?php echo strtoupper($data['no_kegiatan']);?>">
        </div>
        <div class="form-group col-lg-12">
            <label for="inputormawa">Nama Kegiatan</label>
            <input type="text" disabled class="form-control" name="inputtanggal" id="inputtanggal" placeholder="<?php echo strtoupper($data['nama_kegiatan']);?>">
        </div>
        <div class="form-group col-lg-12">
            <label for="inputEmail4">Ruangan</label>
            <input type="text" disabled class="form-control" id="inputwktawal" name="inputwktawal" placeholder="<?php echo $data['ruangan'];?>">
        </div>
        <?php } ?>
    </div>
    <div class="form-row">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</form>
