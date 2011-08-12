<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <!-- iPhone, iPad and Android specific settings -->	
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1;">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>ADMIN MANAJEMEN XCODE</title>		

        <!-- Create an icon and splash screen for iPhone and iPad -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" >

        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>imgadmin2/iOS_icon.png">
        <link rel="apple-touch-startup-image" href="<?php echo base_url(); ?>imgadmin2/iOS_startup.png"> 

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>cssadmin2/all.css" media="screen">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>cssadmin2/theme/switcher3.css" media="screen" />

        <link href="<?php echo base_url(); ?>cssadmin2/formEditDel.css" rel="stylesheet" type="text/css" />

        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->

        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->

        <!-- Load JQuery -->		
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/jquery.min.js"></script>

        <!-- Load JQuery UI -->
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/jquery-ui.min.js"></script>

        <!-- Load Interface Plugins -->
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/plugins.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/uniform/jquery.uniform.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/livevalidation/livevalidation_standalone.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/tipsy/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/iPhone/jquery.iphoneui.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/uitotop/js/jquery.ui.totop.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/fancybox/jquery.fancybox-1.3.4.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/quicksand/jquery.quicksand.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/quicksand/custom_sorter.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/quicksand/dash_sorter.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/quicksand/jquery-css-transform.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/quicksand/jquery-animate-css-rotate-scale.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/tinyeditor/tinyeditor.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/DataTables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/jqueryFileTree/jqueryFileTree.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/slidernav/slidernav.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/fullcalendar/fullcalendar.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>jsadmin2/fullcalendar/gcal.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>jsadmin2/flot/excanvas.js'></script>

        <script type='text/javascript' src='<?php echo base_url(); ?>jsadmin2/flot/jquery.flot.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>jsadmin2/flot/jquery.flot.resize.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>jsadmin2/flot/jquery.flot.pie.js'></script>

        <!-- This file configures the various jQuery plugins for Adminica. Contains links to help pages for each plugin. -->
        <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/adminica/adminica_ui.js"></script>
        <!-- To calling form edit dan Delete -->
         <script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/ajax/cariNama.js"></script>
       


        <style>
            #form_pemateri table tr label { display:block;font-size: 14px }
            #form_pemateri table tr td input{font-size: 18px;width: 300px;background-color: #E7EDEF;border: 1px solid #B5B8BB; border-radius: 2px 2px 2px 2px;
            }       #form_pemateri table tr input.text { margin-bottom:12px; width:100%; padding: 4em;background:  #000; }
            #form_pemateri table h1 { font-size: 1.2em; margin: .6em 0; }
            #form_pemateri table a{text-decoration:none;}
            #form_pemateri table th,#form_pemateri table td{padding: 5px;text-align: left}

            #form_tempat table tr label { display:block;font-size: 14px }
            #form_tempat table tr td input{font-size: 18px;width: 300px;background-color: #E7EDEF;border: 1px solid #B5B8BB; border-radius: 2px 2px 2px 2px;
            }       #form_tempat table tr input.text { margin-bottom:12px; width:100%; padding: 4em;background:  #000; }
            #form_tempat table h1 { font-size: 1.2em; margin: .6em 0; }
            #form_tempat table a{text-decoration:none;}
            #form_tempat table th,#form_tempat table td{padding: 5px;text-align: left}

            #form_jadwal table tr label { display:block;font-size: 14px }
            #form_jadwal table tr td input{font-size: 18px;width: 300px;background-color: #E7EDEF;border: 1px solid #B5B8BB; border-radius: 2px 2px 2px 2px;
            }       #form_jadwal table tr input.text { margin-bottom:12px; width:100%; padding: 4em;background:  #000; }
            #form_jadwal table h1 { font-size: 1.2em; margin: .6em 0; }
            #form_jadwal table a{text-decoration:none;}
            #form_jadwal table th,#form_jadwal table td{padding: 5px;text-align: left}

            #form_sertifikat table tr label { display:block;font-size: 14px }
            #form_sertifikat table tr td input{font-size: 18px;width: 300px;background-color: #E7EDEF;border: 1px solid #B5B8BB; border-radius: 2px 2px 2px 2px;
            }       #form_sertifikat table tr input.text { margin-bottom:12px; width:100%; padding: 4em;background:  #000; }
            #form_sertifikat table h1 { font-size: 1.2em; margin: .6em 0; }
            #form_sertifikat table a{text-decoration:none;}
            #form_sertifikat table th,#form_sertifikat table td{padding: 5px;text-align: left}

        </style>


        <script>
            $(function() {
                $( "#tanggal" ).datepicker();
                $( "#tanggal" ).change(function() {
                    $( "#tanggal" ).datepicker( "option", "dateFormat","yy-mm-dd" );
                });
            });
            $(function() {
                $( "#tanggalJadwal" ).datepicker();
                $( "#tanggalJadwal" ).change(function() {
                    $( "#tanggalJadwal" ).datepicker( "option", "dateFormat","yy-mm-dd" );
                });
            });
        </script>

    </head>
    <body>