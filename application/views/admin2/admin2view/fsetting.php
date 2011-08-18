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

                    <?php echo form_open(base_url() . 'index.php/admin2/setting/edit'); ?> 
                    <?php foreach ($data as $row): ?>

                        <input name="codeadmin" value="<?php echo $row->codeadmin; ?>" readonly="readonly" title="Berisi kode admin" type="hidden" class="medium required" autofocus> 

                        <label>Nama</label> 
                        <input name="nama" value="<?php echo $row->nama; ?>" title="Berisi nama" type="text" class="large">

                        <label>Email</label> 
                        <input name="email" value="<?php echo $row->email; ?>" title="Berisi email" type="text" class="large">

                        <label>No Telpon</label> 
                        <input name="telepon" value="<?php echo $row->telepon; ?>" title="Berisi Telepon" type="text" class="large">

                        <label>username</label> 
                        <input name="username" value="<?php echo $row->username; ?>" title="Berisi username" type="text" class="large">

                        <label>Password</label> 
                        <input name="password" value="" title="Berisi password" type="password" class="large">
                        
                        <label>Confirm password</label> 
                        <input name="cpassword" value="" title="Berisi konfirmasi password" type="password" class="large">


                        <?php
                        echo "<div id='error' class='error-message' ";

                        if ($this->session->userdata('ERRMSG_ARR')) {
                            echo ">";
                            echo $this->session->userdata('ERRMSG_ARR');
                            $this->session->unset_userdata('ERRMSG_ARR');
                        } else {
                            echo "style='display:none'>";
                        }

                        echo "</div>";
                        ?>
                    <?php endforeach; ?>

                    <br/> <br/>

                    <input class="btnsub" type="submit" value="Update">

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
