<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>User</a></li>
            </ul>

        </div><!-- #nav_top -->



        <div class="box grid_16 round_all tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
            <?php $this->load->view('admin2/admin2view/masterView/ftablediskon'); ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/ui-edit-delete/formDiskon.js"></script>

<div id="form_diskon" title="Manage Diskon">
    <table>
       <tr>
            <th> <?php echo form_label('Code'); ?> </th>
            <td> <?php echo form_input('code', '', 'id="code"'); ?></td>
        </tr>
        <tr>
            <th> <?php echo form_label('Nama Diskon'); ?> </th>
            <td> <?php echo form_input('namadiskon', '', 'id="namadiskon"'); ?></td>
        </tr>
        <tr>
            <th> <?php echo form_label('Besar Diskon'); ?> </th>
            <td> <?php echo form_input('diskon', '', 'id="diskon"'); ?></td>
        </tr>
    </table>
</div>