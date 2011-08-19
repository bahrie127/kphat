

<?php foreach ($masuk as $msk): ?>
    <?php $pemasukan = $msk->masuk; ?>

<?php endforeach; ?>

<?php foreach ($keluar as $klr): ?>
    <?php $pengeluaran = $klr->keluar; ?>


    <table class="tt">
        <tr>
            <td><h3>Pemasukan</h3></td>
        </tr>
        <tr>
            <td><li>Coba</li></td>
    <td></td>
    <td><p>Harga</p></td>
    </tr>
    
    <tr><br/><br/>
        <td><h3>Pengeluaran</h3></td>
    </tr>
    <tr>
        <td><li>Coba</li></td>
    <td></td>
    <td><p>Harga</p></td>
    </tr>
    <tr>

        <td><h3>Jumlah Pemasukan: </h3></td>
        <td></td>
        <td><h3><?php echo $pemasukan - $pengeluaran; ?></h3></td>
    </tr>
    </table>
<?php endforeach; ?>