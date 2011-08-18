<div class="toggle_container">
    <div class="block">
        <form action="<?php echo base_url(); ?>index.php/daftar/add" method="post" id="dform" name="form">


            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="medium LV_valid_field" />
            <?php echo form_error('email', ' <div class="boxinfo error">', '</div>'); ?>


            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="large LV_valid_field" />
            <?php echo form_error('name', ' <div class="boxinfo error">', '</div>'); ?>


            <label for="name">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="large LV_valid_field" />
            <?php echo form_error('alamat', ' <div class="boxinfo error">', '</div>'); ?>


            <label for="name">Jenis Kelamin</label>
            <input type="radio" name="ck" id="ck" value="laki-laki" class="check" onclick="chek(this.form.ck)"/>&nbsp;Laki-laki
            <input type="radio" name="ck" id="ck" value="perempuan" onclick="chek(this.form.ck)"/>&nbsp;Perempuan
            <?php echo form_error('ck', ' <div class="boxinfo error">', '</div>'); ?>

            <br/><br/>
            <label for="name">Telepon</label>
            <input type="text" name="telp" id="telp" class="medium LV_valid_field" />
            <?php echo form_error('telp', ' <div class="boxinfo error">', '</div>'); ?>
            <label for="name">Tempat Lahir</label>
            <input type="text" name="tempatlahir" id="tempatlahir" class="medium LV_valid_field" />
            <?php echo form_error('tempatlahir', ' <div class="boxinfo error">', '</div>'); ?>
            <label for="name">Tanggal Lahir</label>
            <select name="tanggal" id="tanggal">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>

                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>

                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>

                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>

                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>

                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select> 
            <select name="bulan" id="bulan">
                <option value="01" > januari</option>

                <option value="2" > februari</option>
                <option value="3" > maret</option>
                <option value="4" > april</option>
                <option value="5" > mei</option>
                <option value="6" > juni</option>

                <option value="7" > juli</option>
                <option value="8" > agustus</option>
                <option value="9" > september</option>
                <option value="10" > oktober</option>
                <option value="11" > november</option>

                <option value="12" > desember</option>
            </select>
            <select name="tahun" id="tahun">
                <option value="1945" >1945</option>
                <option value="1946" >1946</option>
                <option value="1947" >1947</option>

                <option value="1948" >1948</option>
                <option value="1949" >1949</option>
                <option value="1950" >1950</option>
                <option value="1951" >1951</option>
                <option value="1952" >1952</option>
                <option value="1953" >1953</option>

                <option value="1954" >1954</option>
                <option value="1955" >1955</option>
                <option value="1956" >1956</option>
                <option value="1957" >1957</option>
                <option value="1958" >1958</option>
                <option value="1959" >1959</option>

                <option value="1960" >1960</option>
                <option value="1961" >1961</option>
                <option value="1962" >1962</option>
                <option value="1963" >1963</option>
                <option value="1964" >1964</option>
                <option value="1965" >1965</option>

                <option value="1966" >1966</option>
                <option value="1967" >1967</option>
                <option value="1968" >1968</option>
                <option value="1969" >1969</option>
                <option value="1970" >1970</option>
                <option value="1971" >1971</option>

                <option value="1972" >1972</option>
                <option value="1973" >1973</option>
                <option value="1974" >1974</option>
                <option value="1975" >1975</option>
                <option value="1976" >1976</option>
                <option value="1977" >1977</option>

                <option value="1978" >1978</option>
                <option value="1979" >1979</option>
                <option value="1980" >1980</option>
                <option value="1981" >1981</option>
                <option value="1982" >1982</option>
                <option value="1983" >1983</option>

                <option value="1984" >1984</option>
                <option value="1985" >1985</option>
                <option value="1986" >1986</option>
                <option value="1987" >1987</option>
                <option value="1988" >1988</option>
                <option value="1989" >1989</option>

                <option value="1990" >1990</option>
                <option value="1991" >1991</option>
                <option value="1992" >1992</option>
                <option value="1993" >1993</option>
                <option value="1994" >1994</option>
                <option value="1995" >1995</option>

                <option value="1996" >1996</option>
                <option value="1997" >1997</option>
                <option value="1998" >1998</option>
                <option value="1999" >1999</option>
                <option value="2000" >2000</option>
                <option value="2001" >2001</option>

                <option value="2002" >2002</option>
                <option value="2003" >2003</option>
                <option value="2004" >2004</option>
                <option value="2005" >2005</option>
                <option value="2006" >2006</option>
                <option value="2007" >2007</option>

                <option value="2008" >2008</option>
                <option value="2009" >2009</option>
                <option value="2010" >2010</option>
                <option value="2011" >2011</option>
            </select><br/><br/>
            <label for="name">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="medium LV_valid_field" />
            <?php echo form_error('pekerjaan', ' <div class="boxinfo error">', '</div>'); ?>
            <label for="name">Instansi</label>
            <input type="text" name="instansi" id="instansi" class="medium LV_valid_field" />
            <?php echo form_error('instansi', ' <div class="boxinfo error">', '</div>'); ?>
            <label for="name">Event yang Diikuti&nbsp;</label>

            <?php foreach ($event as $row): ?>

                <input type="checkbox" name="event[]" id="event" value="<?php echo $row->jadwalevent_codejadwalevent; ?>" <?php if ($row->jadwalevent_codejadwalevent == $cek): echo "checked='yes'";
            else: echo "";
            endif; ?> />&nbsp;<?php echo $row->event_namaevent; ?><br/>

<?php endforeach; ?>

<br/>
            <input class="btnsub" type="submit" name="submit"  class="btn" value="Daftar" id="kirim"/>




            <div class="clear"></div>


        </form>

    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>jsadmin2/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        theme : "advanced"
    });
</script>
<script type="text/javascript"> 
    

    var co = new LiveValidation('name');
    co.add( Validate.Presence );
    
    
    
    var mail= new LiveValidation('email');
    mail.add(Validate.Email);
    
    var tele = new LiveValidation('telp');
    tele.add(Validate.Presence);
    
    var alamat = new LiveValidation('alamat');
    alamat.add(Validate.Presence);
    
    var pk = new LiveValidation('pekerjaan');
    pk.add(Validate.Presence);
    
    var ints = new LiveValidation('instansi');
    ints.add(Validate.Presence);
    
    var tl = new LiveValidation('tempatlahir');
    tl.add(Validate.Presence);
    
    
    
   
</script>