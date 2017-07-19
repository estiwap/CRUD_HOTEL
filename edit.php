<?php
include 'database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" />
    <title>Edit Booking Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <script>
         $(document).ready(function() {
         $('select').material_select();
      });
      </script>
  </head>
  <body>
    <div class="container">
      <div class="col s12"></div><br />
      <div class="row">
        <div class="col s12">
          <h5><b> <i class="material-icons">mode_edit</i></b> Crud Booking Hotel</h5><br />
          <a href="index.php" title="Home" class="btn-floating btn-large waves-effect red"><i class="material-icons">store</i></a>
          <form action="proses.php?aksi=update" method="post">
            <?php
            foreach($db->edit($_GET['id']) as $data){
              ?>
              <div class="input-field col s6 col s6 col s6 col s6">
                <input id="icon_prefix" type="hidden" name="id" value="<?php echo $data['id']; ?>" id="id" class="validate">
                <input id="icon_prefix" type="text" name="id" id="id" value="<?php echo $data['id']; ?>" class="validate">
                <label for="last_name">ID Tamu </label>
              </div>
              <div class="input-field col s6 col s6 col s6 col s6">
                <input id="icon_prefix" type="hidden" name="id" value="<?php echo $data['id']; ?>" id="id" class="validate">
                <input id="icon_prefix" type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" class="validate">
                <label for="last_name">Nama </label>
              </div>
              <div class="input-field col s6 col s6">
                <input id="icon_telephone" type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>"  class="validate">
                <label for="last_name">Alamat </label>
              </div>
              <div class="input-field col s6">
                <input id="icon_telephone" type="text" name="telp" id="telp"  value="<?php echo $data['telp']; ?>"  class="validate">
                <label for="last_name">No Telp</label>
              </div>
              <div class="input-field col s6 col s6">
                <input id="icon_telephone" type="text" name="no_kamar" id="no_kamar" value="<?php echo $data['no_kamar']; ?>"  class="validate">
                <label for="last_name">No. Kamar</label>
              </div>
              <div class="input-field col s6">
                <select name="type_kamar" value="<?php echo $data['type_kamar']; ?>">
                  <option value="" disabled selected>Pilih Jenis Kamar</option>
                  <option value="1">Standart Room</option>
                  <option value="2">Superrior Room</option>
                  <option value="3">Deluxe Room</option>
                  <option value="4">Suite Room</option>
                </select>
                  <label>Tipe Kamar</label>
              </div>
              <div class="input-field col s6 col s6">
                <input id="icon_telephone" type="text" name="lama_inap" id="lama_inap" value="<?php echo $data['lama_inap']; ?>"  class="validate">
                <label for="last_name">Lama Inap</label>
              </div>
              <div class="input-field col s6 col s6">
                <input id="icon_telephone" type="text" name="keterangan" id="keterangan" value="<?php echo $data['keterangan']; ?>"  class="validate">
                <label for="textarea1">Keterangan</label>
              </div><br>
              <div class="input-field col s6 col s6">
                <input class="btn waves-effect waves-light" type="submit" value="Simpan">
              </div>
              <?php } ?>
        </form>
      </div>
    </div>
  </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
