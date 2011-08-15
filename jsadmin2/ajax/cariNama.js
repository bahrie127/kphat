var xmlhttp = false;

try {
	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}

if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
	xmlhttp = new XMLHttpRequest();
}



function findName(key){
	var obj=document.getElementById("nama");
	var url='sertifikat/findNama/'+key;

	xmlhttp.open("GET", url);

	xmlhttp.onreadystatechange = function() {
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
			obj.innerHTML = xmlhttp.responseText;
		} else {
			obj.innerHTML = "<div align ='center'><img src=\"<?php echo base_url() ?>images/waiting.gif\" alt='Loading' /></div>";
		}
	}
	xmlhttp.send(null);
}