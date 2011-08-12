<table>
    <tr>
        <th>No. Sertifikat</th>
        <th>Nama</th>
        <th>Tanggal Event</th>
        <th>Event</th>
    </tr>
<?php foreach ($data as $row): ?>
     <tr>
        <td><?php echo $row->user_nama ?></td>
        <td><?php echo $row->sertifikat_nosertifikat ?></td>
        <td><?php echo $row->sertifikat_nosertifikat ?></td>
        <td><?php echo $row->sertifikat_nosertifikat ?></td>
    </tr>
 <?php endforeach; ?>
    

</table>
