<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Sertifikat</a></li>
            </ul>

        </div><!-- #nav_top -->



        <div  class="box grid_16 round_all tabs ui-tabs ui-widget ui-widget-content ui-corner-all" id="show">
            <ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
                <li><a href="#tabs-1" class="round_top">Lihat Sertifikat</a></li>
                <li><a href="#tabs-2" class="round_top">Add Sertifikat</a></li>

            </ul>	
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container" >

                <div id="tabs-1" class="block no_padding">

                    <div id="show21">

                        <?php $this->load->view('admin2/admin2view/acaraView/showtablesertifikat'); ?>
                    </div>

                </div>
                <div id="tabs-2" class="block">
                    <?php $this->load->view('admin2/admin2view/acaraView/faddsertifikat'); ?>
                </div>


            </div>
        </div>
    </div>
</div>

<div id="form_sertifikat" title="Edit Serifikat">
    <table>


        <tr >
            <th> <?php echo form_label('No. Sertifikat'); ?></th>
            <td> <?php echo form_input('noSertifikat', '', 'id="noSertifikat" readonly="readonly"'); ?></td>
        </tr>
        <tr>
            <th> <?php echo form_label('Nama Pemegang'); ?> </th>
            <td>
                <div class="input_group">
                    <select name="nama" id="nama">
                            <option value="">
                                Fendithuk</option>
                       
                    </select>
                </div>
            </td>

        </tr>
        
        <tr>
            <th><label>Nama Event</label> </th>
            <td><div class="input_group">

                    <select name="event" id="event"> 
                            <option value="">
                                Pra Web Hacking</option>
                       
                    </select>
                </div></td>
        </tr>
        
       
    </table>
</div>

<div id="confirm-formSertifikat" title="Delete Item ?"> 
    <p>
        <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
        <input type="hidden" value='' id="del_id" name="del_id">
		Are you sure?</p> 
</div>
 <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/ui-edit-delete/formSertifikat.js"></script>
       