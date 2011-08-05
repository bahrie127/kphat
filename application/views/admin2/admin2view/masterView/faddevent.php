<div class="toggle_container">
    <div class="block">
<!--        <form id="name" action="<?php echo base_url(); ?>index.php/admin2/dashboar" method="post">-->
        <label>Kode Event</label> 
        <input id="codeevent" title="Berisi kode event" type="text" class="medium required" autofocus> 

        <label>Nama Event</label> 
        <input id="namaevent" title="Berisi nama event" type="text" class="large">

        <label>Materi</label> 
        <textarea id="materi" class="materi"></textarea>

        <label>Praktek</label> 
        <textarea id="praktek" ></textarea>

        <label>Gambar</label>
        <div class="input_group">
            <input type="file"></div>


        <br/>
        <button class="button_colour round_all" id="kirim"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
        </form>
    </div>
</div>
<script type="text/javascript">
    new TINY.editor.edit('editor',{
        id:'materi',
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
    new TINY.editor.edit('editor',{
        id:'praktek',
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