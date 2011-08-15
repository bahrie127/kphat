<div id="topbar" class="clearfix">	
    <div class="user_box round_all">
        <img src="<?php echo base_url(); ?>imgadmin2/profile.jpg" width="55" alt="Profile Pic" />
        <h2>Administrator</h2>
        <h3><a class="text_shadow" href="#">John Smith</a></h3>
        <ul>
            <li><a href="#">profile</a><span class="divider">|</span></li>
            <li><a href="#">settings</a><span class="divider">|</span></li>
            <li><a href="login.php">logout</a></li>
        </ul>
    </div><!-- #user_box -->	
</div><!-- #topbar -->

<div id="sidebar">
    <div class="cog">+</div>
    <a href="" class="logo"></a>

    <div class="user_box round_all clearfix">
        <img src="<?php echo base_url(); ?>images/logo-hat.png" width="55" alt="Profile Pic" />
        <div class="user_links">
            <h2>Administrator</h2>
            <h3><a class="text_shadow" href="#"><?php echo $this->session->userdata('SESS_NAME');?></a></h3>
            <ul>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/setting/update/<?php echo $this->session->userdata('SESS_ADMIN_CODE');?>" codeAdmin="1" namaAdmin="2" emailAdmin="3" telephoneAdmin="4" username="5" password="6">settings</a><span class="divider">|</span></li>
                <li><a href="<?php echo base_url(); ?>index.php/login/logout">logout</a></li>
            </ul>
        </div>
    </div><!-- #user_box -->

    <ul id="accordion">
        <li><a href="<?php echo base_url(); ?>index.php/admin2/dashboar" class="top_level"><img src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Laptop.png"/>Dashboar</a>
            <ul class="drawer">

                <li><a href="<?php echo base_url(); ?>index.php/admin2/dashboar">dashboar</a></li>
            </ul>
        </li>
        <li><a href="#" class="top_level"><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Create Write.png"/>Master</a>
            <ul class="drawer">

                <li><a href="<?php echo base_url(); ?>index.php/admin2/pemateri">Pemateri</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/tempat">Tempat</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/event">Event</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/user">User</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/admin">Admin</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/page">Page</a></li>
            
            </ul>
        </li>
        <li><a href="#" class="top_level"><img src="<?php echo base_url(); ?>imgadmin2/icons/small/grey/Documents.png"/>Acara</a>
            <ul class="drawer">
                <li><a href="<?php echo base_url(); ?>index.php/admin2/jadwal">Jadwal</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/pendaftaran">Pendaftaran</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/tagihan">Tagihan</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/pembatalan">Pembatalan</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin2/sertifikat">Sertifikat</a></li>
                
            </ul>
        </li>

    </ul>

</div>
