<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Pembatalan</a></li>
            </ul>

        </div><!-- #nav_top -->



        <div  class="box grid_16 round_all tabs ui-tabs ui-widget ui-widget-content ui-corner-all" id="show">
            <ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
                <li><a href="#tabs-1" class="round_top">Lihat Data</a></li>
             
            </ul>	
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container" >

                <div id="tabs-1" class="block no_padding">
     
                    <div id="show21">
                        
                        <?php $this->load->view('admin2/admin2view/acaraView/showtablepembatalan'); ?>
                    </div>

                </div>
                

            </div>
        </div>
    </div>
</div>
<div id="confirm-formBatal" title="Confirm Pembatalan?"> 
    <p>
        <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
        <input type="hidden" value='' id="con_id" name="con_id">
		Are you serious to cancel this user?</p> 
</div>