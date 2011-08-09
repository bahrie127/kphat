<div id="wrapper">
    <?php $this->load->view('admin2/admin2view/menu');?>
   <!-- #sidebar -->

    <div class="main_container container_16 clearfix">
          <div id="nav_top" class="clearfix round_top">
            <ul class="clearfix">
                <li class="current"><a href=""><img src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Laptop.png"/>Dashboard</a></li>
            </ul>
            
        </div><!-- #nav_top -->


         <div class="flat_area grid_16">
            <h2><strong>New Feature: </strong>Graphs and Charts</h2>
        </div>	
        <div class="box grid_16">
            <h2 class="box_head grad_colour round_top">Bar Graph</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">					
                <div class="block">
                    <div id="flot_bar" class="flot">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="box grid_6">
            <h2 class="box_head grad_colour round_top">Donut Chart</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">					
                <div class="block">
                    <div id="flot_pie_2" class="flot">&nbsp;</div>
                </div>
            </div>
        </div>
        
        
        <div class="box grid_6">
            <h2 class="box_head grad_colour round_top">Pie Chart</h2>
            <a href="#" class="grabber">&nbsp;</a>
            <a href="#" class="toggle">&nbsp;</a>
            <div class="toggle_container">					
                <div class="block">
                    <div id="flot_pie" class="flot">&nbsp;</div>
                </div>
            </div>
        </div>	
        
      
    </div>



    


</div>

<script type="text/javascript" src="<?php echo base_url() ?>jsadmin2/adminica/adminica_charts.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>jsadmin2/adminica/adminica_calendar.js"></script>