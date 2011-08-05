
    <div class="login-box widget">
      <header><h2>HAT Admin Login</h2></header>
    	<section>
    		<div class="message info">Type anything to log in</div>
                <form id="form" action="<?php echo base_url(); ?>index.php/admin/dasbor" method="post">
			<p>
				<input type="text" id="username"  class="full" value="" name="username" required="required" placeholder="Username" />
			</p>
			<p>
				<input type="password" id="password" class="full" value="" name="password" required="required" placeholder="Password" />
			</p>
			<p class="clearfix">
				<span class="fl">
					<input type="checkbox" id="remember" class="" value="1" name="remember"/>
					<label class="choice" for="remember">Remember me</label>
				</span>

				<button class="button button-gray fr" type="submit">Login</button>
			</p>
		</form>
                <ul><li><strong>HELP!</strong>&nbsp;<a href="<?php echo base_url();?>index.php/admin/login/forgot">I forgot my password!</a></li></ul>
    	</section>
    </div>
