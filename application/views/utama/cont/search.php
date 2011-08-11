<div id="content">
    <section class="blog">
        <div id="posts">
            <article>
                <div id="comments">
                    <div id="form">

                        <h2>search</h2>
                        <br class="clear"/>
                        <br class="clear"/>
                        
                        <form action="<?php echo base_url()?>index.php/search/cari" method="post" id="">

                            <p>
                                <label for="name">Cari </label>
                                <input type="text" name="cari" id="" value="cari"/>
                                <input type="submit" name="submit"  class="btn3" value="Search" />
                                
                            </p>
                            
                           
                            <div class="clear"></div>


                        </form>

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
                        <?php foreach ($data as $row): ?>
                        
                        <li><a href="<?php echo base_url();?>index.php/event#<?php echo $row->event_namaevent ; ?>"><?php echo $row->event_namaevent ?></a></li>
                        
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
            </div>
           

        </aside>
        <div class="clear"></div>
    </section>
</div>