<b>Pemasukan</b>
<br/><br/>
<?php foreach ($datamasuk as $msk): ?>
    <?php echo $msk->tanggalmasuk; ?><br/>
    <?php echo $msk->nilaimasuk; ?>    <br/>
    <?php echo $msk->namaadmin; ?><br/>
<?php endforeach; ?>
<?php foreach ($masuk as $msk): ?>
    <?php echo $msk->masuk; ?>

<?php endforeach; ?>
<br/>
<br/>
<b>Pengeluaran</b><br/><br/>
<?php foreach ($datakeluar as $klr): ?>
    <?php echo $klr->tanggalkeluar; ?><br/>
    <?php echo $klr->nilaikeluar; ?>    <br/>
    <?php echo $klr->namaadmin; ?><br/>
<?php endforeach; ?>
<?php foreach ($keluar as $klr): ?>
    <?php echo $klr->keluar; ?>

<?php endforeach; ?>
<br/>
<br/>
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