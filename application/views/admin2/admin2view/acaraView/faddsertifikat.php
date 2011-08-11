<div class="toggle_container">
    <div class="block">

        <?php echo  form_open_multipart(base_url().'index.php/admin2/sertifikat/add');  ?> 

        <label>No. Serifikat</label> 
        <input id="nosertifikat" name="nosertifikat" title="Berisi NO. sertifikat" type="text" class="medium required LV_valid_field" autofocus> 

       
        
        <label>Nama Pemegang</label> 

        <input id="nama" name="codeuser" title="Berisi codeuser" type="text" class="medium required LV_valid_field"> 
        

        <label>Event yang di ikuti</label> 
        <input id="codejadwalevent" name="codejadwalevent" title="Berisi codejadwalevent" type="text" class="medium required LV_valid_field"> 
     

        
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