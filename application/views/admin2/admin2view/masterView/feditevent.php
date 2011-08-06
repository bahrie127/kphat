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
                    <form id="name" action="<?php echo base_url(); ?>index.php/admin2/dashboar" method="post">
                        <label>Kode Event</label> 
                        <input title="Berisi kode event" type="text" class="medium required" autofocus> 

                        <label>Nama Event</label> 
                        <input title="Berisi nama event" type="text" class="large">

                        <label>Materi</label> 
                        <textarea id="tiny_input"></textarea>	

                        

                        <label>Gambar</label>
                        <div class="input_group">
                            <input type="file"></div>
                
                <br/>
                <button class="button_colour round_all"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
                </form>
            </div>
        </div>

    </div>
</div>
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