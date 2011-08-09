<div class="toggle_container">
    <div class="block">

        <?php echo  form_open_multipart(base_url().'index.php/admin2/event/add');  ?> 
            
        <label>Kode Event</label> 
        <input name="codeevent" title="Berisi kode event" type="text" class="medium required" autofocus> 



        <label>Nama Event</label> 
        <input name="namaevent" title="Berisi nama event" type="text" class="large">

        <label>Materi</label> 
        <textarea name="materi"></textarea>
        <br/>
        <label>Praktek</label> 
        <textarea name="praktek"></textarea>
        
        <label>Gambar</label>
        <div class="input_group">


            


            <input type="file" name="gambar"></div>

        <br/>
<!--        <button class="button_colour round_all" ><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>-->
        <input type="submit" value="kirim">
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
