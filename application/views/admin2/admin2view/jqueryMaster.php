<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu'); ?>
    <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
        <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Master</a></li>
            </ul>

        </div><!-- #nav_top -->


        <div class="box grid_8 tabs">
            <div class="side_holder">
                <ul class="tab_sider clearfix">
                    <li><a href="#Materi">Materi</a></li>
                    <li><a href="#Pemateri">Pemateri</a></li>
                    <li><a href="#Tempat">Tempat</a></li>
                    <li><a href="#Event">Event</a></li>			
                    <li><a href="#User">User</a></li>	
                    <li><a href="#Admin">Admin</a></li>	
                </ul>

            </div>
            <div id="Materi" class="block no_padding tab_sider">
                 <?php $this->load->view('admin2/admin2view/masterView/fmateri'); ?>
            </div>
            <div id="Pemateri" class="block no_padding tab_sider">
                <?php $this->load->view('admin2/admin2view/masterView/fpemateri'); ?>
            </div>
            <div id="Tempat" class="block no_padding tab_sider">
                <?php $this->load->view('admin2/admin2view/masterView/ftempat'); ?>
            </div>
            <div id="Event" class="block no_padding tab_sider">
                <?php $this->load->view('admin2/admin2view/masterView/fevent'); ?>
            </div>
           
            <div id="User" class="block no_padding tab_sider">
               
            </div>
            <div id="Admin" class="block no_padding tab_sider">
            </div>
        </div>	





    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>jsadmin2/adminica/adminica_charts.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>jsadmin2/adminica/adminica_calendar.js"></script>

