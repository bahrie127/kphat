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



function findName(){
        var key = document.add.event.value;
	var obj=document.getElementById("nama");
	var url='sertifikat/findNama/'+key;

	xmlhttp.open("GET", url);

	xmlhttp.onreadystatechange = function() {
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
			obj.innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.send(null);
}