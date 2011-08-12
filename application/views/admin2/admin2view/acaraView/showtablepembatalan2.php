<table class="display datatable"> 
    <thead> 

        <tr> 
            <th>No</th> 
            <th>Code</th> 
            <th>Nama Peserta</th> 


            <th>Total Dikembalikan</th>
            

        </tr> 
    </thead> 
    <tbody> 
        <?
        $i = 0;
        foreach ($data as $row) {
            $i++;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$row->tagihan_codepembayaran</td>";
            echo "<td>$row->user_nama</td>";
            echo "<td>$row->batalpembayaran_jumlah</td>";
            echo "</td></tr>";
        }
            ?>
    </tbody> 
</table>