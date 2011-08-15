<div class="toggle_container">
    <div class="block">
        <form id="ad" name="add" method="post">
            <label>No. Serifikat</label> 
            <input id="nosertifikat" name="nosertifikat" title="Berisi NO. sertifikat" type="text" onclick="findName(isi.value)" class="medium required LV_valid_field" autofocus> 

            <label>Event yang di ikuti</label> 
            <div class="input_group">

                <select name="event" id="event"  >

                    <?php foreach ($cari as $row) : ?>
                        <option selected value="<?php echo $row->jadwalevent_codejadwalevent; ?>">
                            <?php echo $row->event_namaevent; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>


            <label>Nama Pemegang</label> 


            <div class="input_group">
                <select name="nama" id="combonama">
                    
                        <?php $this->load->view('admin2/admin2view/acaraView/combo_nama'); ?>
                   
                </select>
            </div>



            <input type="submit" class="btnsub" value="Submit" >

        </form>
    </div>
</div>


    
   
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


<script type="text/javascript">
    $('#event').change(function(){
       
        var form_data={

            codeevent: $('#event').val(),
            
            
            ajax:1
        };
        $.ajax({
            url : "<?php echo site_url('admin2/sertifikat/findNama') ?>",

            type : 'POST',
            data : form_data,
            success: function(msg){
             
                $('#combonama').html(msg)
              
            }
        });
        return false;
    });
</script>

