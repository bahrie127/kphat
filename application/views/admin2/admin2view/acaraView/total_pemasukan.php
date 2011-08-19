<table class="tt">
    <tr>
        <td><h3>Pemasukan</h3></td><td></td><td></td>
    </tr>
    <?php foreach ($datamasuk as $msk): ?>
        <tr>

            <td><li><?php echo $msk->tanggalmasuk; ?></li></td>
    <td></td>
    <td><?php echo $msk->nilaimasuk; ?></td>
    <td><?php echo $msk->namaadmin; ?></td>

    </tr> <?php endforeach; ?>

<tr>
    <td><h3>Pengeluaran</h3></td>
    <td></td><td></td>
</tr>
<?php foreach ($datakeluar as $klr): ?>
    <tr>

        <td><li><?php echo $klr->tanggalkeluar; ?></li></td>
    <td></td>
    <td><?php echo $klr->nilaikeluar; ?></td>
    <td><?php echo $klr->namaadmin; ?></td>
    </tr>
    <?php endforeach; ?>
<tr>

    <td><h3>Jumlah Pemasukan: </h3></td>
    <td></td>
    <td><h3><?php
$pemasukan = 0;
$pengeluaran = 0;
foreach ($masuk as $msk):
    $pemasukan = $msk->masuk;

endforeach;

foreach ($keluar as $klr):
    $pengeluaran = $klr->keluar;
endforeach;

echo $pemasukan - $pengeluaran;
?></h3>
    </td>
</tr>
</table>
