<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Page</a></li>
            </ul>

        </div><!-- #nav_top -->

        <div class="flat_area grid_16">
            <h2><a href="<?php echo base_url(); ?>index.php/admin2/page/"> << Back TO Show table page</a></h2>
        </div>
        <div class="box grid_16 round_all">
            <h2 class="box_head grad_colour">Edit Page</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">
                <div class="block">
                    <?php echo form_open(base_url() . 'index.php/admin2/page/update'); ?> 
                    <?php foreach ($data as $row): ?>
                        <label>Judul Informasi</label> 
                        <input name="judul" value="<?php echo $row->judul; ?>" title="Berisi Judul Informasi" type="text" class="medium required" autofocus> 


                        <label>Isi</label> 
                        <textarea name="isi"><?php echo $row->isi; ?></textarea>
                        <br/>

                        <label>Kategori</label> 
                        <div class="input_group">

                            <select name="kategori" id="kategori"> 
                                <?php foreach ($kategori as $kat): ?>
                                    <option value="<?php echo $kat->codegroup; ?>">
                                        <?php echo $kat->namagroup ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    <?php endforeach; ?>
                    <input class="btnsub" type="submit" value="Submit">
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