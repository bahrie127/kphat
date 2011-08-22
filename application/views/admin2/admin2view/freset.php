<div id="login_box" class="reset round_all clearfix">
    <form action="<?php echo base_url(); ?>index.php/admin2/reset_password/reset" method="post">
        <?php echo $status;?>
        <input type="hidden" name="email" value="<?php echo $email;?>"/>
        <label class="fields"><strong class="reset">New Password</strong><input type="password" name="npassword" id="npassword" class="inden round_all"></label>

        <label class="fields"><strong class="reset">Confirm New Password</strong><input type="password" name="cnpassword" id="cnpassword" class="inden round_all"></label>
        <button class="button_colour round_all" ><img width="24" height="24" alt="Locked 2" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Locked%202.png"><span>Change</span></button>
        <div id="bar" class="round_bottom">
            

            
        </div>		
    </form>
</div>

<script type="text/javascript">
    
    function DisablingBackFunctionality()
    {
        var URL;
        var i ;
        var QryStrValue;
        URL=window.location.href ;
        i=URL.indexOf("?");
        QryStrValue=URL.substring(i+1);
        if (QryStrValue!='X')
        {
            window.location=URL + "?X";
        }
    }
</script>
