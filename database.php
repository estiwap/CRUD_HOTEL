<?php

class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "hotel";

    function __construct(){
        mysql_connect($this->host, $this->uname, $this->pass);
        mysql_select_db($this->db);
    }

    function tampil_data(){
        $data = mysql_query("select t.id, t.nama, t.alamat, t.telp, t.keterangan, k.no_kamar, k.type_kamar, k.lama_inap from tamu t, kamar k where t.id=k.id;");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;

    }

    function input($id,$nama,$alamat,$no_kamar,$telp,$lama_inap,$keterangan){
        mysql_query("insert into tamu values('$id','$nama','$alamat','$telp','$keterangan'); 
            insert into kamar values('$no_kamar','$id','$lama_inap'); ");
    }

    function hapus($id){
        mysql_query("select t.id, t.nama, t.alamat, t.telp, t.keterangan, k.no_kamar, k.type_kamar, k.lama_inap from tamu t, kamar k where t.id=k.'$id';");
    }

    function edit($id){
        $data = mysql_query("select t.id, t.nama, t.alamat, t.telp, t.keterangan, k.no_kamar, k.type_kamar, k.lama_inap from tamu t, kamar k where t.id='$id' limit 1");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$nama,$alamat,$no_kamar,$telp,$no_kamar,$lama_inap,$keterangan){
        mysql_query("update user set nama='$nama', alamat='$alamat', no_kamar='$no_kamar', email='$email', keterangan='$keterangan', id=$id',   where id='$id'");
    }

}

?>
