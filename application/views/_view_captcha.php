<?
?>
<br/>
<?=$title?>
<br/>
<div>
    <?=form_open("captcha/")?>
     
    <label>*Type the Captcha number below</label><br/>
    <?=$cap_img?><br/>
    
    <input type="text" name="captcha" value=""/>
     
    <div><input type="submit" value="Submit" name="submit"/></div>
    <?=form_close()?>
</div>