<div class="toggle_container">
    <div class="block">
<!--        <form id="name" action="<?php echo base_url(); ?>index.php/admin2/tempat/add" method="post">-->
            <label>Kode Tempat</label> 
            <input id="code" name="code" title="Berisi kode alamat" type="text" class="medium required" autofocus> 

            <label>Nama Tempat</label> 
            <input id="nama" name="nama" title="Berisi nama tempat" type="text" class="large">

            <label>Alamat</label> 
            <input id="alamattempat" name="alamat" title="Berisi Alamat Tempat" type="text" class="large">

            <label>Telephone</label> 
            <input id="telepon" name="telepon" title="Berisi no. Telephone" type="text" class="large">

            <label>Link Peta</label> 
            <input id="peta" name="peta" title="Link Peta Google Maps" type="text" class="large">

            <button class="button_colour round_all" id="kirim"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
        </form>
    </div>
</div>
<script type="text/javascript">
    $('#kirim').click(function(){
    //alert('jalan');
    var form_data={
        code: $('#code').val(),
        nama: $('#nama').val(),
        alamat: $('#alamattempat').val(),
        telepon: $('#telepon').val(),
        peta: $('#peta').val(),
        ajax:1
    };
    $.ajax({
        url : "<?php echo site_url('admin2/tempat/add') ?>",
        type : 'POST',
        data : form_data,
        success: function(msg){
            
            $('#code').val(''),
            $('#nama').val(''),
            $('#alamattempat').val(''),
            $('#telepon').val(''),
            $('#peta').val('')
           // alert('data telah tersimpan');
            window.location='';
        }
    });
    return false;
});
</script>