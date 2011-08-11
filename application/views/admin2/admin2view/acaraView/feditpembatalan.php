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
                   
         <?php echo form_open(base_url() . 'index.php/admin2/pembatalan/add'); ?> 
                    <?php foreach ($data as $row): ?>
                    <label>Kode User</label> 
                    <input name="codepembayaran" value="<?php echo $row->tagihan_codepembayaran; ?>"title="Berisi kode event" type="text" readonly="readonly" class="medium required" autofocus> 
                    
                    <label>Nama</label> 
                    <input name="nama" value="<?php echo $row->user_nama; ?>"type="text" readonly="readonly" class="medium required" autofocus> 
                    <?php endforeach; ?>
                    
                    <label>Event yang dibatalkan</label> 
                    
                    <?php foreach ($cek as $c): ?>
                    <input name="cek[]" value="<?php echo $c->jadwalevent_codejadwalevent;?>"  title="Berisi nama event" type="checkbox" class="large"><?php echo $c->event_namaevent; ?></input>
                    <?php endforeach; ?>

                           <br/> <br/>

                    <input type="submit" value="Update">
                   
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</div>
