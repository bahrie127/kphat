<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Pemateri</a></li>
            </ul>

        </div><!-- #nav_top -->



        <div class="box grid_16 round_all tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
                <li><a href="#tabs-1" class="round_top">Lihat Data</a></li>
                <li><a href="#tabs-2" class="round_top">Add Data</a></li>

            </ul>	
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">

                <div id="tabs-1" class="block no_padding">
                    <div id="show21">

                        <?php $this->load->view('admin2/admin2view/masterView/showtablepemateri'); ?>
                    </div>

                </div>
                <div id="tabs-2" class="block">
                    <?php $this->load->view('admin2/admin2view/masterView/faddpemateri'); ?>
                </div>

            </div>
        </div>
    </div>
</div>

    <div id="form_pemateri" title="Edit Data">
        <table>
           <input type="hidden" value='' id="codePemateri" name="codePemateri">

<!--            <tr >
                <th> <?php echo form_label('Code Pemateri'); ?></th>
                <td> <?php echo form_input('codePemateri', '', 'id="codePemateri" readonly="readonly"'); ?></td>
            </tr>-->
            <tr>
                <th> <?php echo form_label('Nama Pemateri'); ?> </th>
                <td> <?php echo form_input('namaPemateri', '', 'id="namaPemateri"'); ?></td>
            </tr>
            <tr>
                <th> <?php echo form_label('Telephone'); ?> </th>
                <td> <?php echo form_input('telephonePemateri', '', 'id="telephonePemateri"'); ?></td>
            </tr>
            <tr>
                <th> <?php echo form_label('Email'); ?> </th>
                <td> <?php echo form_input('emailPemateri', '', 'id="emailPemateri"'); ?></td>
            </tr>
        </table>
    </div>

    <div id="confirm-formMateri" title="Delete Item ?"> 
        <p>
            <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
            <input type="hidden" value='' id="del_id" name="del_id">
		Are you sure?</p> 
    </div> 
   
<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/ui-edit-delete/formMateri.js"></script>
 
          