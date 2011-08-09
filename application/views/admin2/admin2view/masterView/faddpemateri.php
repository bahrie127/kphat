<div class="toggle_container">
    <div class="block">
<!--        <form id="name" action="<?php echo base_url(); ?>index.php/admin2/pemateri/add" method="post">-->
            <label>Kode Pemateri</label> 
            <input id="codepemateri" name="code" title="Berisi kode pemateri" type="text" class="medium required code" autofocus> 

            <label>Nama</label> 
            <input id="namap" name="namap" title="Berisi nama" type="text" class="large required namap">

            <label>Telephone</label> 
            <input id="telep" name="telep" title="Berisi no. Telephone" type="text" class="large required">

            <label>Email</label> 
            <input id="realemail" name="mail" title="Berisi Email" type="text" class="large LV_valid_field">

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
    
    if($('#codemateri').val('')){
        
    }
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
    });
    return false;
});
</script>