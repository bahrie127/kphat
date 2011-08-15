<?php if(count($data)>0){ ?>
<table>
    <tr>
        <th>No. Sertifikat</th>
        <th>Nama</th>
        <th>Tanggal Event</th>
        <th>Event</th>
    </tr>
<?php foreach ($data as $row): ?>
     <tr>
        <td><?php echo $row->sertifikat_nosertifikat ?></td>
        <td><?php echo $row->user_nama ?></td>
        <td><?php echo $row->jadwalevent_tanggal ?></td>
        <td><?php echo $row->event_namaevent ?></td>
        
    </tr>
 <?php endforeach; }else{echo "<p>Pencarian tidak ditemukan</p>";}  ?>
    

</table>
