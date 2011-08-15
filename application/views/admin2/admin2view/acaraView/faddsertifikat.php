<div class="toggle_container">
    <div class="block">
        <form id="ad" name="add" method="post">
            <label>No. Serifikat</label> 
            <input id="nosertifikat" name="nosertifikat" title="Berisi NO. sertifikat" type="text" onclick="findName(isi.value)" class="medium required LV_valid_field" autofocus> 

            <label>Event yang di ikuti</label> 
            <div class="input_group">

                <select name="event" id="event"  onchange="findName(event.value)">

                    <?php foreach ($cari as $row) : ?>
                        <option selected value="<?php echo $row->event_namaevent; ?>">
                            <?php echo $row->event_namaevent; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>


            <label>Nama Pemegang</label> 

            <div class="input_group">
                <select name="nama" id="nama">
                    <option>Pilih Nama</option>
                    
                </select>
            </div>



            <input type="submit" class="btnsub" value="Submit" onclick="findName(event.value)">

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
    //echo "\n";
}


?>
     }
</script>
