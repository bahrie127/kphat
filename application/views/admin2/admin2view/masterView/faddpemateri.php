<div class="toggle_container">
    <div class="block">
        <form>
            <label>Kode Pemateri</label> 
            <input id="codepemateri" name="code" title="Berisi kode pemateri" type="text" class="medium LV_valid_field" autofocus> 

            <label>Nama</label> 
            <input id="namap" name="namap" title="Berisi nama" type="text" class="large LV_valid_field">

            <label>Telephone</label> 
            <input id="telep" name="telep" title="Berisi no. Telephone" type="text" class="large LV_valid_field">

            <label>Email</label> 
            <input id="mail" name="mail" title="Berisi Email" type="text" class="large LV_valid_field">

            <button class="button_colour round_all" id="kirim" ><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
        </form>
    </div>
</div>


  <script type="text/javascript">
    $('#kirim').click(function(){
    //alert('jalan');
    var form_data={
        code: $('#codepemateri').val(),
        nama: $('#namap').val(),
        telepon: $('#telep').val(),
        email: $('#mail').val(),
        
        ajax:1
    };
    
    
      $.ajax({
        url : "<?php echo site_url('admin2/pemateri/add') ?>",
        type : 'POST',
        data : form_data,
        success: function(msg){
            
            $('#codepemateri').val(''),
            $('#namap').val(''),
            $('#telep').val(''),
            $('#mail').val(''),
            
           // alert('data telah tersimpan');
            window.location='';
        }
    });  return false;
   
    
    
});
</script>

<script type="text/javascript"> 
    
    var mail = new LiveValidation('mail');
    mail.add( Validate.Email );
    
    var nama = new LiveValidation('namap');
    nama.add( Validate.Presence );

    var code = new LiveValidation('codepemateri');
    code.add( Validate.Presence );
    
    var telp = new LiveValidation('telep');
    telp.add( Validate.Presence );
    

</script>