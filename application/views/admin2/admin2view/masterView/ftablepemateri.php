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
                    <th>Code Pemateri</th> 
                    <th>Nama Pemateri</th> 
                    <th>Telephone</th> 
                    <th>Email</th>
                    <th>Edit | Delete</th> 

                </tr> 
            </thead> 

            <tbody> 
                <?php foreach ($data as $row): ?>
                <tr class="gradeX">
                    <td><?php echo $row->codepemateri;?></td> 
                    <td><?php echo $row->nama;?></td>
                    <td><?php echo $row->telepon;?></td>
                    <td><?php echo $row->email;?></td> 
                    <td class="center">
                        <a href="#" class="edit" codePemateri="1" namaPemateri="11" telephonePemateri="500" emailPemateri="fendi">
                            <img src="<?php echo base_url();?>imgadmin2/edit.png" title="Edit data"/></a>
                    <a class="delbutton" id="id" href="#">
                        <img src="<?php echo base_url();?>imgadmin2/delete.png" title="Delete data"/>
                    </a></td> 

                </tr> 
                <?php endforeach; ?>
            </tbody> 
        </table>

    </div>
    <div id="tabs-2" class="block">
        <?php $this->load->view('admin2/admin2view/masterView/faddpemateri'); ?>
    </div>
