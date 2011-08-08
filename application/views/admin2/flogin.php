<div id="login_box" class="round_all clearfix">
    <form action="<?php echo base_url();?>index.php/login/do_login" method="post">
    <label class="fields"><strong>Username</strong><input type="text" name="username" id="username" class="indent round_all"></label>

    <label class="fields"><strong>Password</strong><input type="password" name="password" id="password" class="indent round_all"></label>
    <button class="button_colour round_all" ><img width="24" height="24" alt="Locked 2" src="<?php echo base_url();?>imgadmin2/icons/small/white/Locked%202.png"><span>Login</span></button>
    <div id="bar" class="round_bottom">
        <label><input type="checkbox">Auto-login in future.</label>

        <a href="<?php echo base_url(); ?>index.php/admin/forgot">Forgot your password?</a>
    </div>		
    </form>
</div>