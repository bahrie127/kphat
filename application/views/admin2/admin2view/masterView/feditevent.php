<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Event</a></li>
            </ul>

        </div><!-- #nav_top -->

        <div class="flat_area grid_16">
            <h2><a href="<?php echo base_url(); ?>index.php/admin2/event"> << Back TO Event</a></h2>
        </div>
        <div class="box grid_16 round_all">
            <h2 class="box_head grad_colour">Edit Event</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">
                <div class="block">
                    <?php foreach ($data as $row): ?>
                    <?php echo form_open_multipart(base_url() . 'index.php/admin2/event/update'); ?> 

                    <label>Kode Event</label> 
                    <input name="codeevent" value="<?php echo $row->codeivent; ?>"title="Berisi kode event" type="text" class="medium required" autofocus> 
                    
                    <label>Nama Event</label> 
                    <input name="namaevent" value="<?php echo $row->namaevent; ?>" title="Berisi nama event" type="text" class="large">

                    <label>Materi</label> 
                    <textarea name="materi"><?php echo $row->materi; ?></textarea>
                    <br/>
                    <label>Praktek</label> 
                    <textarea name="praktek"><?php echo $row->praktek; ?></textarea>

                    <label>Gambar</label>
                    <div class="input_group">
                        <input type="file" value="<?php echo $row->gambar; ?>" name="gambar"></div>
                    <input type="hidden" name="gambar2" value="<?php echo $row->gambar; ?>"/>
                    <br/>

                    <input class="btnsub" type="submit" value="Update">
                    <?php endforeach;?>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        theme : "advanced"
    });
</script>