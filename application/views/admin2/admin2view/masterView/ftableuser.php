<ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
    <li><a href="#tabs-1" class="round_top">Lihat Data</a></li>
    
   
</ul>	
<a href="#" class="grabber">&nbsp;</a>
<a href="#" class="toggle">&nbsp;</a>
<div class="toggle_container">

    <div id="tabs-1" class="block no_padding">
        <table class="display datatable" > 
            <thead> 
                <tr> 
                    <th>No</th> 
                    <th>Code User</th> 
                    <th>Nama</th> 
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th> 
                    
                    <th>Email</th>
                    <th>Telepon</th> 
                    
                </tr> 
            </thead> 
            <tbody> 
                 <?
        $i = 0;
        foreach ($data as $row) {
            $i++;
            echo "<tr class=\"record\">";
            echo "<td>$i</td>";
            echo "<td>$row->codeuser</td>";
            echo "<td>$row->nama</td>";
            echo "<td>$row->alamat</td>";
            echo "<td>$row->jeniskelamin</td>";
            echo "<td>$row->email</td>";
            echo "<td>$row->telepon</td>";
        }
        ?>

                
            </tbody> 
        </table>

    </div>
   