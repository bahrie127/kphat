<div id="content">
    
    <section id="intro">
        <div id="login2">
            <div id="notice">
                <h2>Login Failed !</h2>
                <div class="cc">Masukan kembali email and password kamu<br/>

                    Email and password kamu harap diteliti.
                    
                    </div>
            </div>
            <table>
                <form id="form" name="form" method="post">
                    <tr>
                        <th><label for="nama">Email</label></th>
                        <td><input type="text" name="nama" id="nama" value=""/></td>
                    </tr>
                    <tr>
                        <th><label for="nama">Password</label></th>
                        <td><input type="password" name="nama" id="nama" value=""/></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="nama" id="nama" value="Login" class="btn"/>&nbsp; or <a href="<?php echo base_url(); ?>index.php/daftar" class="h">Daftar</a></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><a href="<?php echo base_url(); ?>index.php/forgotpass">Forgotten Password</a></td>
                    </tr>
                </form> 
            </table>
        </div>
        <div class="clear"></div>
    </section>
</div>