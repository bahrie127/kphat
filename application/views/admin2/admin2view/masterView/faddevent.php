<div class="toggle_container">
    <div class="block">

        <?php echo  form_open_multipart(base_url().'index.php/admin2/event/add');  ?> 
            
        <label>Kode Event</label> 
        <input id="codeevent" name="codeevent" title="Berisi kode event" type="text" class="medium LV_valid_field" autofocus> 



        <label>Nama Event</label> 
        <input id="namaevent" name="namaevent" title="Berisi nama event" type="text" class="large LV_valid_field">

        <label>Materi</label> 
        <textarea name="materi"></textarea>
        <br/>
        <label>Praktek</label> 
        <textarea name="praktek"></textarea>
        
        <label>Gambar</label>
        <div class="input_group">


            


            <input  id="gambar" type="file" name="gambar"></div>

        <br/>
<!--        <button class="button_colour round_all" ><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>-->
        <input class="btnsub" type="submit" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png" value="Kirim">
    </form>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/tiny_mce/tiny_mce.js"></script>
  <script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
  </script>
<script type="text/javascript"> 
    

    var co = new LiveValidation('codeevent');
    co.add( Validate.Presence );
    
    
    
    var nm = new LiveValidation('namaevent');
    nm.add(Validate.Presence);
    
    
    
   
</script>

<script type="text/javascript">
			new TINY.editor.edit('editor',{
				id:'tiny_input',
				height:200,
				cssclass:'te',
				controlclass:'tecontrol',
				rowclass:'teheader',
				dividerclass:'tedivider',
				controls:['bold','italic','underline','strikethrough','|','subscript','superscript','|',
						  'orderedlist','unorderedlist','|','outdent','indent','|','leftalign',
						  'centeralign','rightalign','blockjustify','|','unformat','|','undo','redo','n','image','hr','link','unlink','|','cut','copy','paste','print','|','font','size','style'],
				footer:false,
				fonts:['Arial','Verdana','Georgia','Trebuchet MS'],
				xhtml:true,
				cssfile:'style.css',
				bodyid:'editor',
				footerclass:'tefooter',
				toggle:{text:'source',activetext:'wysiwyg',cssclass:'toggler'},
				resize:{cssclass:'resize'}
			});
			</script>
