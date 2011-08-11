<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Batal</a></li>
            </ul>

        </div><!-- #nav_top -->

        <div class="flat_area grid_8">
            <h2><a href="<?php echo base_url(); ?>index.php/admin2/pembatalan"> << Back TO Table Batal</a></h2>
        </div>
        <div class="box grid_16 round_all">
            <h2 class="box_head grad_colour">Edit Batal</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">
                <div class="block">
                   
                    <?php echo form_open(base_url() . 'index.php/admin2/event/update'); ?> 

                    <label>Kode User</label> 
                    <input name="codeevent" value=""title="Berisi kode event" type="text" class="medium required" autofocus> 
                    
                    <label>Nama</label> 
                    <input name="nama" value=""type="text" class="medium required" autofocus> 
                    
                    
                    <label>Event yang diikuti</label> 
                    <input name="namaevent" value="" title="Berisi nama event" type="checkbox" class="large">fdfdf</input>

                           <br/> <br/>

                    <input type="submit" value="Update">
                   
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</div>
