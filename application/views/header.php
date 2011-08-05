<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>HAT TRAINING 2011</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="HAT TRAINING 2011, XCODE, T'Lab">    

        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" >
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.scrollTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.animate-colors.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.2.3.pack.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.pack.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#dform").validate({
                    messages: {
                        email: {
                            required: "E-mail harus diisi",
                            email: "Masukkan E-mail yang valid"
                        },
                        name : {
                            required: "Nama harus diisi"                            
                        },
                        telp : {
                            required: "Telephone harus diisi"                            
                        },
                        alamat : {
                            required: "Alamat harus diisi"                            
                        },
                        tempatLahir : {
                            required: "Tempat lahir harus diisi"                            
                        },
                         pekerjaan : {
                            required: "Pekerjaan harus diisi"                            
                        },
                        instansi : {
                            required: "Instansi harus diisi"                            
                        }
                    },
                    errorPlacement: function(error, element) {
                        error.appendTo(element.parent("td"));
                    }
                });
            })
        </script>    
        <script language="JavaScript" type="text/javascript">
            var sections = [
                "section-1",
                "section-2"
            ];
		
            var currentSection = 1;
		
            function scroll () {
		
                currentSection++;
                if(currentSection > 2){currentSection = 1;}
                if(currentSection == 1){$("#slider").animate({backgroundColor: '#8C0003'});}
                if(currentSection == 2){$("#slider").animate({backgroundColor: '#000000'});}
                sectiontoscroll = "section-" + currentSection;
                $("#viewport").scrollTo ("#" + sectiontoscroll, 500);
		
            }
		
            $(document).ready (function () {
                var s = window.setInterval(scroll, 6000);
                //window.clearInterval(s);
            });
            
            function chek(pil){
                
                
                if(pil[0].checked){
                    pil[1].checked=false;
                }else if (pil[1].checkOn==true){
                    pil[0].checkOn=false;
                }
            }
        </script>

        
    </head>
    <body>