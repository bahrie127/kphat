<div class="toggle_container">
    <div class="block">
        <?php echo form_open_multipart(base_url() . 'index.php/admin2/admin/add'); ?> 
<!--        <label>Kode Admin</label> 
        <input name="codeadmin" title="Berisi kode admin" type="text" class="medium required" autofocus> -->

        <label>Nama</label> 
        <input name="nama" id="nama"title="Berisi nama" type="text" class="large LV_valid_field">

        <label>Email</label> 
        <input name="email" id="email" title="Berisi email" type="text" class="large LV_valid_field">

        <label>Telepon</label> 
        <input name="telepon" id="telepon" title="Berisi no telepon" type="text" class="large LV_valid_field">

        <label>username</label> 
        <input name="username" id="username"title="Berisi username" type="text" class="large LV_valid_field">

        <label>password</label> 
        <input name="password" id="password"title="Berisi password" type="password" class="large LV_valid_field">

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
    

    var co = new LiveValidation('nama');
    co.add( Validate.Presence );
    
    
    
    var mail= new LiveValidation('email');
    mail.add(Validate.Email);
    
    var tele = new LiveValidation('telepone');
    tele.add(Validate.Presence);
    
    var username = new LiveValidation('username');
    username.add(Validate.Presence);
    
    var ps = new LiveValidation('password');
    ps.add(Validate.Presence);
    
    
    
   
</script>