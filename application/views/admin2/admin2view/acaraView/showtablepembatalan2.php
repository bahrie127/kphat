<table class="display datatable"> 
    <thead> 

        <tr> 
            <th>No</th> 
            <th>Code</th> 
            <th>Nama Peserta</th> 


            <th>Total Dikembalikan</th>
            <th>Pembatalan</th> 

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


            echo "<td>-</td>";


            echo "<td align=\"center\"><a href=\"pembatalan/batal\" >Batal</a>";

            echo "</td></tr>";
        }
            ?>
    </tbody> 
</table>