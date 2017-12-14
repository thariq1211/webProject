
    <form class="form-horizontal center-block media-middle" style="margin: 1px;" method="post" action="perkap.php?id=<?php echo $_POST['id'];?>&aksi=tambah">
        <div class="form-row">
            <div class="form-group col-lg-6">
                <input type="hidden" name="inputid" value="<?php echo $_POST['id'];?>">
                <label for="inputEmail4">No Surat</label>
                <input type="text" required class="form-control" id="inputnosurat" name="inputnosurat" placeholder="Input No Izin">
            </div>
            <div class="form-group col-lg-6" style="margin-left: 13px">
                <label for="inputormawa">Tanggal</label>
                <input type="date" required class="form-control" name="inputtanggal" id="inputtanggal" placeholder="Input Tanggal">
            </div>
            <div class="form-group col-lg-6">
                <label for="inputEmail4">Waktu Start</label>
                <input type="time" required class="form-control" id="inputwktawal" name="inputwktawal" placeholder="Input Waktu Awal">
            </div>
            <div class="form-group col-lg-6" style="margin-left: 13px">
                <label for="inputEmail4">Waktu Akhir</label>
                <input type="time" required class="form-control" id="inputwktakhir" name="inputwktakhir" placeholder="Input Waktu Akhir">
            </div>
            <div class="form-group col-lg-12">
                <label for="inputEmail4">Ijin Tempat Nomor</label>
                <input type="text" required class="form-control" id="inputnoijin" name="inputnoijin" placeholder="Input Ijin Tempat No">
            </div>
            <div class="form-group col-lg-6">
                <label for="inputEmail4">Peserta</label>
                <input type="text" required class="form-control" id="inputpeserta" name="inputpeserta" placeholder="Input Peserta">
            </div>
            <div class="form-group col-lg-6" style="margin-left: 13px">
                <label for="inputEmail4">Penanggung Jawab</label>
                <input type="text" required class="form-control" id="inputpj" name="inputpj" placeholder="Input Penanggung Jawab">
            </div>
        </div>

    <div class="form-row">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </form>
