<ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
    <li><a href="#tabs-1" class="round_top">Lihat Data</a></li>


</ul>	
<a href="#" class="grabber">&nbsp;</a>
<a href="#" class="toggle">&nbsp;</a>
<div class="toggle_container">

    <div id="tabs-1" class="block no_padding">
        <div class="block">
            <h3>Pendapatan / Pemasukan</h3>
            <ol>


                <table class="tt">


                    <tr>
                        <td><label>Tanggal</label>
                            <input id="tanggal" name="startdate" type="text"  class="large datepicker LV_valid_field">
                        </td>
                    </tr>
                    <tr>
                        <td> <label>Sd. Tanggal</label></td>
                    </tr>
                    <tr>
                        <td>
                            <input id="tgl" name="enddate" type="text" class="large datepicker LV_valid_field">
                        </td>
                        <td><label> </label> <input class="btnsub" type="submit" value="Pendapatan" id="caripendapatan"/></td>
                        
                    </tr>

                </table>





            </ol>

            <div id="pemasukan">
                <?php $this->load->view('admin2/admin2view/acaraView/total_pemasukan') ?>
            </div>


        </div>

    </div>

    <script type="text/javascript">
    $('#caripendapatan').click(function(){
       
        var form_data={
            startdate: $('#tanggal').val(),
            enddate: $('#tgl').val(),
            ajax:1
        };
        $.ajax({
            url : "<?php echo site_url('admin2/pemasukan/cari_pemasukan') ?>",
            type : 'POST',
            data : form_data,
            success: function(msg){ 
              
                $('#pemasukan').html(msg)
            }
        });
        return false;
    });
</script>
