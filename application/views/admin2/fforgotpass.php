<div id="login_box" class="round_all clearfix">
    <form action="<?php echo base_url();?>index.php/admin/cek" method="POST">
    <label class="fields"><strong>Email</strong><input type="text" name="email" id="email" class="indent round_all"></label>

    <button class="button_colour round_all" ><img width="24" height="24" alt="Locked 2" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Mail.png"><span>Submit</span></button>
    
    <div id="bar" class="round_bottom">
        </form>
        <?php echo $status;?><br/>
        <label>Will be sent to your email.</label>
         <a href="<?php echo base_url(); ?>index.php/admin">Back to login!</a>
       
    </div>		

</div>