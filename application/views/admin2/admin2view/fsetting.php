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

                    <label>Kode Admin</label> 
                    <input id="codeadmin" title="Berisi kode admin" type="text" class="medium required" autofocus> 

                    <label>Nama</label> 
                    <input id="nama" title="Berisi nama" type="text" class="large">

                    <label>Email</label> 
                    <input id="email" title="Berisi email" type="text" class="large">

                    <label>alamat</label> 
                    <input id="password" title="Berisi alamat" type="text" class="large">

                    <label>username</label> 
                    <input id="username" title="Berisi username" type="text" class="large">

                    <label>password</label> 
                    <input id="password" title="Berisi password" type="password" class="large">



                    

                    <br/>
                    <button class="button_colour round_all" id="kirim"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>

                </div>
            </div>
        </div>
    </div>
</div>