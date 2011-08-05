<div id="login_box" class="round_all clearfix">
    
    <label class="fields"><strong>Username</strong><input type="text" id="username" class="indent round_all"></label>

    <label class="fields"><strong>Password</strong><input type="password" id="password" class="indent round_all"></label>
    <button class="button_colour round_all" onClick="location.href='<?php echo base_url();?>index.php/admin2/dashboar'"><img width="24" height="24" alt="Locked 2" src="<?php echo base_url();?>imgadmin2/icons/small/white/Locked%202.png"><span>Login</span></button>
    <div id="bar" class="round_bottom">
        <label><input type="checkbox">Auto-login in future.</label>

        <a href="<?php echo base_url(); ?>index.php/admin/forgot">Forgot your password?</a>
    </div>		
    
</div>