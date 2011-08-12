<div class="toggle_container">
    <div class="block">
        <?php echo form_open_multipart(base_url() . 'index.php/admin2/admin/add'); ?> 
<!--        <label>Kode Admin</label> 
        <input name="codeadmin" title="Berisi kode admin" type="text" class="medium required" autofocus> -->

        <label>Nama</label> 
        <input name="nama" title="Berisi nama" type="text" class="large">

        <label>Email</label> 
        <input name="email" title="Berisi email" type="text" class="large">

        <label>Telepon</label> 
        <input name="telepon" title="Berisi no telepon" type="text" class="large">

        <label>username</label> 
        <input name="username" title="Berisi username" type="text" class="large">

        <label>password</label> 
        <input name="password" title="Berisi password" type="password" class="large">

        <br/>
        <input type="submit" class="btnsub" value="Submit">
        </form>

    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        theme : "advanced"
    });
</script>
<script type="text/javascript"> 
    

    var co = new LiveValidation('codeevent');
    co.add( Validate.Presence );
    
    
    
    var nm = new LiveValidation('namaevent');
    nm.add(Validate.Presence);
    
    
    
   
</script>