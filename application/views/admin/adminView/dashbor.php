<div id="wrapper">
    <header id="page-header">
        <div class="wrapper">

            <h1>hatxcode Admin</h1>
            <nav id="main-nav">
                <ul class="clearfix">
                    <li class="active"><a href="<?php echo base_url(); ?>index.php/admin/dasbor">Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/master">Master</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/acara">Acara</a></li>

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
        <div id="page-subheader">
            <div class="wrapper clearfix">
                <nav id="sub-nav">
                    <ul>

                    </ul>
                </nav>

            </div>
        </div>
    </header>


    <section id="content">
        <div class="wrapper">

            <!-- Main Section -->

            <section class="grid_6 first top">


                <div class="columns">

                    <div class="column grid_3 first">

                        <div class="widget collapsible">
                            <header><h2>Invoice Statistics</h2></header>
                            <section>
                                <table class="no-style full">

                                    <tbody>

                                        <tr>

                                            <td>Total Invoices</td>

                                            <td class="ar"><a href="#">30</a></td>

                                            <td class="ar">1,498.50 $</td>

                                        </tr>

                                        <tr>

                                            <td>Total Paid</td>

                                            <td class="ar"><a href="#">25</a></td>

                                            <td class="ar">1,248.75 $</td>

                                        </tr>

                                        <tr>

                                            <td>Total Due</td>

                                            <td class="ar"><a href="#">5</a></td>

                                            <td class="ar">249.75 $</td>

                                        </tr>

                                        <tr>

                                            <td>Total Overdue</td>

                                            <td class="ar">0</td>

                                            <td class="ar">0.00 $</td>

                                        </tr>

                                    </tbody>

                                </table>
                            </section>
                        </div>



                    </div>

                    <div class="column grid_3 last">

                        <div class="widget collapsible">
                            <header><h2>Sales Statistics</h2></header>

                            <section>
                                <table class="no-style full">

                                    <tbody>

                                        <tr>

                                            <td>Signups This Month</td>

                                            <td class="ar"><a href="#">30</a></td>

                                            <td class="ar"></td>

                                        </tr>

                                        <tr>

                                            <td>Sales This Month</td>

                                            <td class="ar"><a href="#">25</a></td>

                                            <td class="ar">1,248.75 $</td>

                                        </tr>

                                        <tr>

                                            <td>Signups This Year</td>

                                            <td class="ar"><a href="#">30</a></td>

                                            <td class="ar"></td>

                                        </tr>

                                        <tr>

                                            <td>Sales This Year</td>

                                            <td class="ar"><a href="#">25</a></td>

                                            <td class="ar">1,248.75 $</td>

                                        </tr>

                                    </tbody>

                                </table>

                            </section>
                        </div>


                    </div>

                </div>

                <div class="clear">&nbsp;</div>

            </section>

            <!-- Main Section End -->

            <!-- Sidebar -->

            <aside class="grid_2 top">

                <div class="accordion">

                    <header class="current"><h2>Your Account: Free Trial</h2></header>
                    <section style="display:block">
                        <dl>

                            <dt>Bandwidth: 10000/100000 MB</dt>
                            <dd><div class="progress progress-green"><span style="width: 10%;"><b>10%</b></span></div></dd>
                            <dt>Storage: 500/1000 MB</dt>
                            <dd><div class="progress progress-green"><span style="width: 50%;"><b>50%</b></span></div></dd>
                            <dt>Users: 3/5</dt>
                            <dd><div class="progress progress-orange"><span style="width: 60%;"><b>60%</b></span></div></dd>
                            <dt>Emails Sent: 900/1000</dt>
                            <dd><div class="progress progress-red"><span style="width: 90%;"><b>90%</b></span></div></dd>

                        </dl>
                    </section>


                </div>

            </aside>

            <!-- Sidebar End -->

            <div class="clear"></div>

        </div>
        <div id="push"></div>
    </section>
</div>