<div id="content">
    <section id="header">
        <h1>Event</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </section>

    <section class="blog">

        <div id="posts">
            <?php foreach ($data as $row): ?>
                <article>
                    <!--------------------- Judul Event ----------------->
                    <div class="title">
                        <h1><a href=""><?php echo $row->event_namaevent; ?></a></h1>
                        <div class="clear"></div>
                    </div>
                    <div class="elements">
                        <section class="main" id="packet" >
                            <!--------------------- Gambar, Code, Waktu, Pemateri Event ----------------->
                            <div class="one_quarter white">
                                <img src="<?php echo base_url()+"images/"+$row->event_gambar; ?>" />
                                <h2><?php echo $row->jadwalevent_tanggal; ?></h2>
                                <div class="elements">
                                    <h3><?php echo $row->event_namaevent ; ?></h3>
                                    <h4>Code</h4>
                                    <p><?php echo $row->jadwalevent_codejadwalevent ?></p>

                                    <h4>Waktu</h4>
                                    <p><?php echo $row->jadwalevent_waktu;?></p>

                                    <h4>Pemateri</h4>
                                    <p><?php echo $row->pemateri_nama?></p>				


                                </div>
                            </div>
                            <div class="one_quarter white">
                                <div class="elements">
                                    <?php echo $row->event_materi; ?>
                                </div>
                            </div>

                            <div class="one_quarter white">
                                <!--------------------- Khusus Materi Event ----------------->
                                <div class="elements">

                                    <?php echo $row->event_praktek; ?>

                                </div>
                            </div>

                            <!--------------------- Khusus Harga----------------->
                            <div class="one white">
                                <div class="one_quarter white">
                                    <div class="elements">
                                        <p class="price"><?php echo $row->jadwalevent_harga;?></a>
                                    </div>
                                </div>
                                <!--------------------- Button daftar dan lihat ----------------->

                                <div class="one_quarter white">
                                    <div class="elements">
                                        <p class="daftars">
                                            <a href="<?php echo base_url(); ?>index.php/page/getByMenu/Daftar" class="daftar">DAFTAR</a>
                                            <a href="https://spreadsheets.google.com/spreadsheet/pub?key=0Al8z6LNqcjcfdDQ1VW91bVhVbVNOeUludmh0UlVFQUE&output=html" class="daftar" target="_blank">PESERTA</a>				
                                        </p> </div>
                                </div>
                            </div>


                        </section>
                        </p>

                        <hr/>


                    </div>

                </article>
            <?php endforeach; ?>
            <div class="clear"></div>

        </div><!-- posts -->
        <aside>

            <div class="tweet block">
                <h2><div>Syarat dan Fasilitas</div></h2>
                <div class="post">
                    <h3><a href="#">Persyaratan</a></h3>
                    <p>Peserta <strong>wajib</strong> membawa laptop dengan OS Windows.</p><br/>
                </div>
                <div class="post">
                    <h3><a href="#">Fasilitas</a></h3>
                    <ul>
                        <li>Modul</li>
                        <li>Snack</li>
                        <li>Makan Siang</li>
                        <li>Sertifikat</li>
                        <li>CD Yogyafree</li>
                        <li>Alat Tulis</li>
                        <li>Internet</li>
                    </ul>
                </div>
            </div>
            <div class="tweet block">
                <h2><div>Pembayaran</div></h2>
                <div class="post">
                    <p>Silahkan membayar uang pendaftaran sejumlah:<br/> 
					Biaya Pendaftaran + 2 digit nomor identitas</p>
                    <p>Contoh<br/> 
					Biaya pendaftaran : <b>120.000</b> <br/>
					Nomor identitas : 32.7103.030888.00<b>03</b></p>
                    <p>Jumlah yang ditransfer : <b>120.003</b></p>
                </div>
                <div class="post">
                    <h3><a href="#">BANK MANDIRI</a></h3>
                    <p>Nomor Rekening : 137 00 0677934 8</p>
                    <p>Kantor Cabang : KCP Yogyakarta UGM</p>
                    <p>Atas Nama : Novizul Evendi</p>
                </div>
                <div class="post">
                    <h3><a href="#">BANK BCA</a></h3>
                    <p>Nomor Rekening : 1260556670</p>
                    <p>Kantor Cabang : KCP Mangkubumi Yogyakarta</p>
                    <p>Atas Nama : Novizul Evendi</p>
                </div>
            </div>
            <div class="tweet block">
                <h2><div>Konfirmasi Pembayaran</div></h2>
                <div class="post">
                    <h3><a href="#">VIA SMS</a></h3>
                    <p>Jika telah membayar biaya pendaftaran silahkan
					mengirimkan SMS konfirmasi dengan format:</p>
                    <p><b>[KODE EVENT]</b> &lsaquo;spasi&rsaquo;<b>[NAMA]</b>&lsaquo;spasi&rsaquo;<b>[BANK]</b>
                        &lsaquo;spasi&rsaquo;<b>[JUMLAH YG DITRANSFER]</b>&lsaquo;spasi&rsaquo;<b>[TANGGAL]</b></p>
                    <p>Contoh: <br/>
					PW-23 Budi Sudarsono Mandiri 120.003 10-07-2011</p>
                    <p>Kirim ke nomor <b>085729074620</b><p>

                </div>
            </div>


        </aside>
        <div class="clear"></div>



    </section>

</div> <!-- end content -->