
            <div class="toggle_container">
                <div class="block">
                    <?php echo form_open(base_url() . 'index.php/admin2/page/add'); ?> 

                    <label>Judul</label> 
                    <input name="codepage" id="codepage"value=""title="Berisi kode event" type="text" class="medium LV_valid_field" autofocus> 


                    <label>Isi</label> 
                    <textarea name="materi"></textarea>
                    <br/>

                    <label>Kategori</label> 
                    <div class="input_group">
                        
                        <select name="kategori" id="kategori"> 
                            <?php foreach ($kategori as $row):?>
                            <option value="<?php echo $row->codegroup;?>">
                                    <?php echo $row->namagroup;?></option>
                            <?php endforeach;?>

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

<script type="text/javascript"> 
    

    var co = new LiveValidation('codepage');
    co.add( Validate.Presence );
    
   
</script>