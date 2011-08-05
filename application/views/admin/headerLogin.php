<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from themes.vivantdesigns.com/neueadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 08 Jan 2011 20:41:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>HAT ADMIN LOGIN</title>

<link rel="stylesheet" media="screen" href="<?php echo base_url();?>cssadmin/reset.css" />
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>cssadmin/style.css" />
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>cssadmin/messages.css" />
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>cssadmin/forms.css" />
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>cssadmin/tables.css" />

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/PIE.js"></script>
<![endif]-->
<!-- jquerytools -->
<script src="<?php echo base_url();?>jsadmin/jquery.tools.min.js"></script>
<script src="<?php echo base_url();?>jsadmin/jquery.ui.min.js"></script>

<!--[if lte IE 9]>
<link rel="stylesheet" media="screen" href="css/ie.css" />
<script type="text/javascript" src="js/ie.js"></script>
<![endif]-->

<script src="<?php echo base_url();?>jsadmin/global.js"></script>


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
<body class="login">