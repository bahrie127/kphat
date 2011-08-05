<div class="wrapper">

    <h1>hatxcode Admin</h1>
    <nav id="main-nav">
        <ul class="clearfix">
            <li class="active"><a href="<?php echo base_url();?>index.php/admin/dasbor">Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/master">Master</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/acara">Acara</a></li>
            
            <li id="quick-links" class="fr">
                <a href="#">administrator<span>&darr;</span></a>
                <ul>
                    <li><a href="myprofile.html">Profile</a></li>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </li>              
        </ul>
    </nav>
</div>
<?php $this->load->view('admin/adminView/menu2'); ?>