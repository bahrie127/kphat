<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Jadwal</a></li>
            </ul>

        </div><!-- #nav_top -->



        <div  class="box grid_16 round_all tabs ui-tabs ui-widget ui-widget-content ui-corner-all" id="show">
            <ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
                <li><a href="#tabs-1" class="round_top">Lihat Data</a></li>
                <li><a href="#tabs-2" class="round_top">Add Data</a></li>

            </ul>	
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container" >

                <div id="tabs-1" class="block no_padding">

                    <div id="show21">

                        <?php $this->load->view('admin2/admin2view/acaraView/showtablejadwal'); ?>
                    </div>

                </div>
                <div id="tabs-2" class="block">
                    <?php $this->load->view('admin2/admin2view/acaraView/faddjadwal'); ?>
                </div>


            </div>
        </div>
    </div>
</div>

<div id="form_jadwal" title="Edit Jadwal">
    <table>


        <tr >
            <th> <?php echo form_label('Code Jadwal'); ?></th>
            <td> <?php echo form_input('codeJadwal', '', 'id="codeJadwal" readonly="readonly"'); ?></td>
        </tr>
        <tr>
            <th> <?php echo form_label('Nama Event'); ?> </th>
            <td>
                <div class="input_group">
                    <select name="event" id="codeevent"> <?php foreach ($event as $row) : ?>
                            <option value="<?php echo $row->codeivent; ?>">
                                <?php echo $row->namaevent; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </td>

        </tr>
        
        <tr>
            <th><label>Nama Pemateri</label> </th>
            <td><div class="input_group">

                    <select name="pemateri" id="codepemateri"> <?php foreach ($pemateri as $row) : ?>
                            <option value="<?php echo $row->codepemateri; ?>">
                                <?php echo $row->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div></td>
        </tr>
        <tr>
            <th> <label>Tempat</label> </th>
            <td><div class="input_group">

                    <select name="tempat" id="codetempat"> <?php foreach ($tempat as $row) : ?>
                            <option value="<?php echo $row->codetempat; ?>">
                                <?php echo $row->namatempat; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <th> <?php echo form_label('jam'); ?> </th>
            <td> <?php echo form_input('waktu', '', 'id="waktuJadwal"'); ?></td>
        </tr>
        <tr>
            <th> <?php echo form_label('Tanggal'); ?> </th>
            <td> <input id="tanggalJadwal" name="tanggal" type="text" class="medium datepicker"/></td>
        </tr>
        <tr>
            <th><label>Harga</label> </th>
            <td><input id="hargaJadwal" name="harga" title="Harga event" type="text" class="medium"></td>
        </tr>
    </table>
</div>

<div id="confirm-formJadwal" title="Delete Item ?"> 
    <p>
        <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
        <input type="hidden" value='' id="del_id" name="del_id">
		Are you sure?</p> 
</div> 