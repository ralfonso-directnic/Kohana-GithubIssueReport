<?php

//get the list of issues
$dte=date("mdY");
$dtey= date("mdy",mktime(0,0,0,date('m'),date('d')-1,date('Y')));

//check for a file!
if(file_exists("/www/github/github-issues-".$dtey.".json")){
   unlink("/www/github/github-issues-".$dtey.".json"); 
}

if(file_exists("/www/github/github-issues-".$dte.".json") && !$_POST['submit'] &&!$_GET['test']){
    
   $result = file_get_contents("/www/github/github-issues-".$dte.".json");
    
}else{

       

        $user="";
        $pass= '';
        
        
 if($_POST['submit']){
    $query='https://api.github.com/repos/'.$repo.'/issues';
    $chs = curl_init();
    curl_setopt($chs, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($chs, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($chs, CURLOPT_HEADER,0);
    curl_setopt($chs, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($chs,CURLOPT_VERBOSE,0);
    curl_setopt($chs,CURLOPT_USERPWD,"$user:$pass"); 
    curl_setopt($chs,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0");
    $obj->title=clean_string("title");
    $obj->body=clean_string("body");
    $obj->labels=array("bug");
    $data=json_encode($obj);
    curl_setopt($chs,CURLOPT_POST,1); 
    curl_setopt($chs,CURLOPT_POSTFIELDS,$data); 
    curl_setopt($chs, CURLOPT_URL, $query);
    curl_exec($chs);
    unset($chs);
} 
        

        $query='https://api.github.com/repos/'.$repo.'/issues?labels=bug';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        # Allow self-signed certs
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
        # Allow certs that do not match the hostname
        curl_setopt($ch, CURLOPT_HEADER,0);
        # Do not include header in output
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_VERBOSE,0);
  curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0");
        curl_setopt($ch,CURLOPT_USERPWD,"$user:$pass"); 
        curl_setopt($ch, CURLOPT_URL, $query);
        
        //retrieve the request!
        $result = curl_exec($ch);
        file_put_contents("/www/github/github-issues-".$dte.".json",$result);      
}       
        
 $resp = json_decode($result);
  

        
        

?>
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
    
<?php }
?></div>
</div>
<?php

