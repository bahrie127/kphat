
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