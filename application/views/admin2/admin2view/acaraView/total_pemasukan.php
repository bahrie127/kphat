<?php foreach ($masuk as $msk): ?>
    <?php $pemasukan = $msk->masuk; ?>
        
<?php endforeach; ?>

<?php foreach ($keluar as $klr): ?>
    <?php $pengeluaran = $klr->keluar; ?>
        

    <table>
        <tr>
            <td><h3>Jumlah Pemasukan: </h3></td>
            <td>&nbsp;&nbsp;</td>
            <td><h3><?php echo $pemasukan - $pengeluaran; ?></h3></td>
        </tr>
    </table>
<?php endforeach; ?>