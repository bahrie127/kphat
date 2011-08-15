<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Laptop.png"/>Admin</a></li>
            </ul>

        </div><!-- #nav_top -->


        <div class="flat_area grid_16">
            <h2><strong>Setting Admin </strong></h2>
        </div>	
        <div class="box grid_16">
            <h2 class="box_head grad_colour round_top">Setting Admin</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">					
                <div class="block">
                    <form>
                    <label>Kode Admin</label> 
                    <input id="codeadmin" title="Berisi kode admin" type="text" class="medium required" autofocus> 

                    <label>Nama</label> 
                    <input id="nama" title="Berisi nama" type="text" class="large LV_valid_field">

                    <label>Email</label> 
                    <input id="email" title="Berisi email" type="text" class="large LV_valid_field">

                    <label>alamat</label> 
                    <input id="alamat" title="Berisi alamat" type="text" class="large LV_valid_field">

                    <label>username</label> 
                    <input id="username" title="Berisi username" type="text" class="large LV_valid_field">

                    <label>password</label> 
                    <input id="password" title="Berisi password" type="password" class="large LV_valid_field">



                    

                    <br/>
                    <button class="button_colour round_all" id="kirim"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    

    var co = new LiveValidation('codeadmin');
    co.add( Validate.Presence );
    
    var nm = new LiveValidation('nama');
    nm.add( Validate.Presence );
    
    
    var mail= new LiveValidation('email');
    mail.add(Validate.Email);
    
    var tele = new LiveValidation('alamat');
    tele.add(Validate.Presence);
    
    var username = new LiveValidation('username');
    username.add(Validate.Presence);
    
    var ps = new LiveValidation('password');
    ps.add(Validate.Presence);
    
    
    
   
</script>