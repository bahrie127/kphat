<table class="display datatable" > 
            <thead> 
               <tr> 
                    <th>No</th> 
                    <th>Code Tagihan</th> 
                    <th>Nama user</th> 
                    <th>Status</th>
                    <th>Total</th>
                    
                    <th>Update</th> 

                </tr> 
            </thead> 
    <tbody> 
        <?
        $i = 0;
        foreach ($data as $row) {
            $i++;
            echo "<tr class=\"record\">";
            echo "<td>$i</td>";
            echo "<td>$row->tagihan_codepembayaran</td>";
            echo "<td>$row->user_nama</td>";
            echo "<td>$row->tagihan_status</td>";
            echo "<td>$row->tagihan_jumlahharga</td>";
            
            echo "<td align=\"center\"><a href=\"#\" class=\"editE\" codeEvent=\"#\" namaevent=\"#\" materi=\"#\" tiny_input=\"#\">Edit</a>";
            
            echo "</td></tr>";
        }
        ?>

    </tbody> 
</table>