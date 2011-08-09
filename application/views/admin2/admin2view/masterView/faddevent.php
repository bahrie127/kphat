<div class="toggle_container">
    <div class="block">
<<<<<<< HEAD
        <?php echo  form_open_multipart(base_url().'index.php/admin2/event/add');  ?> 
            
        <label>Kode Event</label> 
        <input name="codeevent" title="Berisi kode event" type="text" class="medium required" autofocus> 
=======
        
       <label>Kode Event</label> 
        <input id="codeevent" title="Berisi kode event" type="text" class="medium required" autofocus> 
>>>>>>> f6349036fe788662b1af21dbb625fc9aee442e85

        <label>Nama Event</label> 
        <input name="namaevent" title="Berisi nama event" type="text" class="large">

        <label>Materi</label> 
        <textarea name="materi"></textarea>
        <br/>
        <label>Praktek</label> 
        <textarea name="praktek"></textarea>
        
        <label>Gambar</label>
        <div class="input_group">
<<<<<<< HEAD
            <input type="file" name="gambar"></div>
=======
            <input type="file" id="upload"</div>
>>>>>>> f6349036fe788662b1af21dbb625fc9aee442e85


        <br/>
<!--        <button class="button_colour round_all" ><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>-->
        <input type="submit" value="kirim">
    </form>
    </div>
</div>
<<<<<<< HEAD
<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/tiny_mce/tiny_mce.js"></script>
  <script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced"
	});
  </script>
=======
</div>
<script type="text/javascript">
    new TINY.editor.edit('editor',{
        id:'tiny_input',
        height:200,
        cssclass:'te',
        
        controlclass:'tecontrol',
        rowclass:'teheader',
        dividerclass:'tedivider',
        controls:['bold','italic','underline','strikethrough','|',
            'orderedlist','unorderedlist','|','outdent','indent'],
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


<script type="text/javascript">
    $('#kirim').click(function(){
    //alert('jalan');
    var form_data={
        codeevent: $('#codeevent').val(),
        namaevent: $('#namaevent').val(),
        materi: $('#materi').val(),
        praktek: $('#praktek').val(),
        upload: $('#upload').val(),
        
        ajax:1
    };
    $.ajax({
        url : "<?php echo site_url('admin2/event/add') ?>",
        type : 'POST',
        data : form_data,
        success: function(msg){
            
            $('#codeevent').val(''),
            $('#namaevent').val(''),
            $('#praktek').val(''),
            $('#upload').val(''),
            $('#materi').val(''),
            
           // alert('data telah tersimpan');
            window.location='';
        }
    });
    return false;
});
</script>
>>>>>>> f6349036fe788662b1af21dbb625fc9aee442e85
