<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Tagihan</a></li>
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

                        <?php $this->load->view('admin2/admin2view/acaraView/showtabletagihan'); ?>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
<div id="confirm-formTagihan" title="Pembayaran"> 
    <input type="hidden" value='' id="idtagihan" name="del_id">
    <input type="hidden" value='' id="dp" name="dp">
        <input type="hidden" value='' id="status" name="status">
        <input type="hidden" value='' id="codeuser" name="status">
    <table>
        <tr >
            <th> <?php echo form_label('Total Pembayaran '); ?></th>
            <td> <?php echo form_input('jumlahharga', '', 'id="kurang" readonly="readonly"'); ?></td>
        </tr>
        <tr>
            <th> <?php echo form_label('Bayar  '); ?> </th>
            <td> <?php echo form_input('bayarharga', '', 'id="bayarharga"'); ?></td>
        </tr>
    </table>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/ui-edit-delete/formTagihan.js"></script>