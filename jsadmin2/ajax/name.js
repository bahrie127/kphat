

 function showKab()
 {
 <?php

 // membaca semua propinsi
 $query = "SELECT * FROM propinsi";
 $hasil = mysql_query($query);

 // membuat if untuk masing-masing pilihan propinsi beserta isi option untuk combobox kedua
 while ($data = mysql_fetch_array($hasil))
 {
   $idProp = $data['idProp'];

   // membuat IF untuk masing-masing propinsi
   echo "if (document.demo.propinsi.value == \"".$idProp."\")";
   echo "{";

   // membuat option kabupaten untuk masing-masing propinsi
   $query2 = "SELECT * FROM kab WHERE idProp = $idProp";
   $hasil2 = mysql_query($query2);
   $content = "document.getElementById('kabupaten').innerHTML = \"";
   while ($data2 = mysql_fetch_array($hasil2))
   {
       $content .= "<option value='".$data2['idKab']."'>".$data2['namaKabupaten']."</option>";
   }
   $content .= "\"";
   echo $content;
   echo "}\n";
 }

 ?>
 }

