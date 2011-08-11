<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Event</a></li>
            </ul>

        </div><!-- #nav_top -->

        <div class="flat_area grid_8">
            <h2><a href="<?php echo base_url(); ?>index.php/admin2/event"> << Back TO Event</a></h2>
        </div>
        <div class="box grid_16 round_all">
            <h2 class="box_head grad_colour">Edit Event</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">
                <div class="block">
                    <?php echo form_open_multipart(base_url() . 'index.php/admin2/page'); ?> 

                    <label>Kode Page</label> 
                    <input name="codepage" value=""title="Berisi kode event" type="text" class="medium required" autofocus> 


                    <label>Isi</label> 
                    <textarea name="materi"></textarea>
                    <br/>

                    <label>Kategori</label> 
                    <div class="input_group">

                        <select name="kategori" id="kategori"> 
                            <option value="">
                                Kategorinya</option>

                        </select>
                    </div>

                    <input type="submit" value="Submit">
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