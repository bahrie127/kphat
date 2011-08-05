<table class="display datatable" > 
            <thead> 
               <tr> 
                    <th>No</th> 
                    <th>Code</th> 
                    <th>Nama</th> 
                    <th>Event</th>
                    <th>Date</th>
                    
                    <th>Update | Delete</th> 

                </tr> 
            </thead> 
    <tbody> 
        <?
        $i = 0;
        foreach ($data as $row) {
            $i++;
            echo "<tr class=\"record\">";
            echo "<td>$i</td>";
            echo "<td>$row->pendaftaran_codependaftaran</td>";
            echo "<td>$row->user_nama</td>";
            echo "<td>$row->event_namaevent</td>";
            echo "<td>$row->pendaftaran_tanggal</td>";
            
            echo "<td align=\"center\"><a href=\"#\" class=\"editE\" codeEvent=\"#\" namaevent=\"#\" materi=\"#\" tiny_input=\"#\">Edit</a>";
            
            echo "</td></tr>";
        }
        ?>

    </tbody> 
</table>