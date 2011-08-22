<div id="content">
    <section class="blog">
        <div id="posts">
            <article>
                <div id="comments">
                    <div id="form">

                        <h2>peserta</h2>
                        <br class="clear"/>
                        <br class="clear"/>
                        
                        <br/>
                        
                        <table>
                            <tr>
                                <th>Tgl Daftar</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Event</th>
                                <th>Status</th>
                            </tr>
                                <?php foreach ($data as $row): ?>
                            <tr>
                            
                                <td><?php echo $row->pendaftaran_tanggal; ?></td>
                                <td><?php echo $row->user_nama; ?></td>
                                <td><?php echo $row->user_alamat;?></td>
                                <td><?php echo $row->user_email;?></td>
                                <td><?php echo $row->event_namaevent; ?></td>
                                <td><?php echo $row->tagihan_status;?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                            

                    </div>
                </div>
            </article>
        </div>
        <aside>

           <div class="tweet block">
                <h2><div>coming soon</div></h2>
                <div class="post">
                    <h3><a href="#">EVENT</a></h3>
                    <ul>
                        <?php foreach ($event as $row): ?>
                        
                        <li><a href="<?php echo base_url();?>index.php/event#<?php echo $row->event_namaevent ; ?>"><?php echo $row->event_namaevent ?></a></li>
                        
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
            </div>
           

        </aside>
        <div class="clear"></div>
    </section>
</div>