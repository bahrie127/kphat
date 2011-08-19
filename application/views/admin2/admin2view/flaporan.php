<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Laporan Pemasukan</a></li>
            </ul>

        </div><!-- #nav_top -->


        
        <div class="box grid_16 round_all tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
          <div class="toggle_container">
					<?php $this->load->view('admin2/admin2view/acaraView/laporanview');?>
					</div>
        </div>
    </div>
</div>
         <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/adminica/adminica_datatables.js"></script>
