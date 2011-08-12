<div class="toggle_container">
    <div class="block">
        <form id="add" name="add">
            <label>No. Serifikat</label> 
            <input id="nosertifikat" name="nosertifikat" title="Berisi NO. sertifikat" type="text" onclick="findName(isi.value)" class="medium required LV_valid_field" autofocus> 

            <label>Event yang di ikuti</label> 
            <div class="input_group">

                <select name="event" id="event"  onchange="showKab()">

                    <?php foreach ($cari as $row) : ?>
                        <option name="isi" id="isi" value="<?php echo $row->jadwalevent_codejadwalevent; ?>">
                            <?php echo $row->event_namaevent; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>


            <label>Nama Pemegang</label> 

            <div class="input_group">
                <select name="nama" id="nama">
                </select>
            </div>



            <input type="submit" class="btnsub" value="Submit">

        </form>
    </div>
</div>

<script type="text/javascript"> 
    var co = new LiveValidation('nosertifikat');
    co.add( Validate.Presence );
      
    
   
</script>
<script type="text/javascript">
    $('#kirim').click(function(){
        //alert('jalan');
        var form_data={

            nosertifikat: $('#nosertifikat').val(),
            codeuser: $('#codeuser').val(),
            codejadwalevent: $('#codejadwalevent').val(),
            
            ajax:1
        };
        $.ajax({
            url : "<?php echo site_url('admin2/sertifikat/add') ?>",

            type : 'POST',
            data : form_data,
            success: function(msg){
            

                $('#noserfitikat').val(''),
                $('#codeuser').val(''),
                $('#codejadwalevent').val(''),
                

                // alert('data telah tersimpan');
                window.location='';
            }
        });
        return false;
    });
</script>

<script language="JavaScript" type="text/JavaScript">

    function showKab()
    {
<?php
//membaca get all dari controller

foreach ($cari as $row) {
   
     $content = "document.getElementById('nama').innerHTML = \"";
    
        $content .= "<option value='" . $row->user_nama . "'>" . $row->user_nama . "</option>";
   
    $content .= "\"";
    echo $content;
    echo "\n";
}

// membaca semua propinsi
//$query = "SELECT * FROM propinsi";
//$hasil = mysql_query($query);
//
//// membuat if untuk masing-masing pilihan propinsi beserta isi option untuk combobox kedua
//while ($data = mysql_fetch_array($hasil)) {
//    $idProp = $data['idProp'];
//
//    // membuat IF untuk masing-masing propinsi
//    echo "if (document.demo.propinsi.value == \"" . $idProp . "\")";
//    echo "{";
//
//    // membuat option kabupaten untuk masing-masing propinsi
//    $query2 = "SELECT * FROM kab WHERE idProp = $idProp";
//    $hasil2 = mysql_query($query2);
//    $content = "document.getElementById('kabupaten').innerHTML = \"";
//    while ($data2 = mysql_fetch_array($hasil2)) {
//        $content .= "<option value='" . $data2['idKab'] . "'>" . $data2['namaKabupaten'] . "</option>";
//    }
//    $content .= "\"";
//    echo $content;
//    echo "}\n";
//}
?>
     }
</script>
