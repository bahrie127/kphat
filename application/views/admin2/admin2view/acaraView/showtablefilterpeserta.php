<table class="display datatable" > 
    <thead> 
        <tr> 
            <th>No</th> 
            <th>Code</th> 
            <th>Tanggal Daftar</th> 
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Event</th>
            <th>Status</th>



        </tr> 
    </thead> 
    <tbody> 
        <?php $i=0;foreach ($kategori as $row): $i++;?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row->jadwalevent_codejadwalevent; ?></td>
                <td><?php echo $row->pendaftaran_tanggal; ?></td>
                <td><?php echo $row->user_nama; ?></td>
                <td><?php echo $row->user_alamat; ?></td>
                <td><?php echo $row->user_email; ?></td>
                <td><?php echo $row->user_telepon; ?></td>
                <td><?php echo $row->event_namaevent; ?></td>
                <td><?php echo $row->tagihan_status; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody> 
</table>

