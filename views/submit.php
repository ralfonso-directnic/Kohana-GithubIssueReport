<style>
   .request_body{border:1px solid #CCC;padding:5px;margin:3px;}
   .request_item{margin:5px;padding:3px;border:2px solid #DEDEDE;background-color:#FFF;}
</style>
<div style="margin:10px;" >
<div style='border:3px solid #DEDEDE;background-color:#CCC;margin:3px;padding:5px;' >
<form method='post'>
    <label>Short Description: </label><input name='title' size="50"/><br>
    <textarea name='body' rows='6' cols="150" ></textarea>
    <br>
   <input name='submit'  type='submit' value='Submit' />
</form>
</div>
<h3>Items on the list!</h3>
<p>These are items that are already added on the list.</p>
<div style='border:3px solid #DEDEDE;background-color:#CCC;margin:3px;padding:5px;' >
<?php 
foreach($resp AS $row){ ?>
<div class='request_item'>
<h5 class='request_title'><?php echo $row->title; ?><span style='font-size:11px'> @ <?php echo date("m/d/Y h:i a",strtotime($row->created_at)); ?></span></h5>
<div class='request_body'>
<?php echo stripslashes($row->body); ?>
</div>
</div>
    
<?php } ?>
</div>
</div>
