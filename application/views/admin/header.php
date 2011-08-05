<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> <title>HAT ADMIN</title>
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>cssadmin/reset.css" />
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>cssadmin/style.css" />
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>cssadmin/messages.css" />
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>cssadmin/forms.css" />
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>cssadmin/tables.css" />

        <script src="<?php echo base_url(); ?>jsadmin/jquery.tools.min.js"></script>
        <script src="<?php echo base_url(); ?>jsadmin/jquery.ui.min.js"></script>
        <script src="<?php echo base_url(); ?>jsadmin/global.js"></script>
        
        <script src="<?php echo base_url(); ?>jsadmin/jquery.ui.min.js"></script>
        

        <script type="text/javascript" src="js/global.js"></script>
        <script> 
            $(document).ready(function(){
                $("#form").validator({ 
                    position: 'top', 
                    offset: [25, 10],
                    messageClass:'form-error',
                    message: '<div><em/></div>' // em element is the arrow
                });
            });
        </script> 
    </head>
    <body>
