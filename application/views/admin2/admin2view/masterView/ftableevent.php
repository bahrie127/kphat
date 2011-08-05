<ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
    <li><a href="#tabs-1" class="round_top">Lihat Data</a></li>
    <li><a href="#tabs-2" class="round_top">Add Data</a></li>

</ul>	
<a href="#" class="grabber">&nbsp;</a>
<a href="#" class="toggle">&nbsp;</a>
<div class="toggle_container">

    <div id="tabs-1" class="block no_padding">
        <table class="display datatable" > 
            <thead> 
                <tr> 
                    <th>Code Event</th> 
                    <th>Nama Event</th> 
                    <th>Informasi</th>
                    
                    <th>Update | Delete</th> 

                </tr> 
            </thead> 
            <tbody> 
                <tr class="gradeX"> 
                    <td>CD [11072011]</td> 
                    <td>Nama TEmpat</td>
                    <td>Alamat</td>
                    
                    <td class="center">
                        <a href="<?php echo base_url(); ?>index.php/admin2/event/edit">Update</a> | Delete</td> 

                </tr> 

            </tbody> 
        </table>

    </div>
    <div id="tabs-2" class="block">
        <?php $this->load->view('admin2/admin2view/masterView/faddevent'); ?>
    </div>