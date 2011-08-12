<option>-----------------</option>

<?php foreach ($nama as $row):

    echo "<option value='$row->user_nama'>$row->user_nama</option>";
endforeach;
    
?>