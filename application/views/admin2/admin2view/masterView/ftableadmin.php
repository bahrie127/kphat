        <table class="display datatable" > 
            <thead> 
                <tr> 
                    <th>No</th> 
                    <th>Code Admin</th> 
                    <th>Nama</th> 
                    <th>Username</th>
                    <th>Email</th> 
                    <th>Telephone</th>

                   

                </tr> 
            </thead> 
            <tbody> 
                <?php
                $i = 0;
                foreach ($data as $row) {
                    $i++;
                    echo "<tr class=\"record\">";
                    echo "<td>$i</td>";
                    echo "<td>$row->codeadmin</td>";
                    echo "<td>$row->nama</td>";
                    echo "<td>$row->username</td>";

                    echo "<td>$row->email</td>";
                    echo "<td>$row->telepon</td>";
                   
                    echo "</tr>";
                }
                ?>

            </tbody> 
        </table>

    