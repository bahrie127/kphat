<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Pemateri</a></li>
            </ul>

        </div><!-- #nav_top -->

        <div class="flat_area grid_8">
            <h2><a href="<?php echo base_url(); ?>index.php/admin2/pemateri"> << Back TO Materi</a></h2>
        </div>
        <div class="box grid_16 round_all">
            <h2 class="box_head grad_colour">Edit Materi</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">
                <div class="block">
                    <form id="name" action="<?php echo base_url(); ?>index.php/admin2/dashboar" method="post">
                        <label>Kode Pemateri</label> 
                        <input title="Berisi kode pemateri" type="text" class="medium required" autofocus> 

                        <label>Nama</label> 
                        <input title="Berisi nama" type="text" class="large">

                        <label>Telephone</label> 
                        <input title="Berisi no. Telephone" type="text" class="large">

                        <label>Email</label> 
                        <input title="Berisi Email" type="text" class="large">

                        <button class="button_colour round_all"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>