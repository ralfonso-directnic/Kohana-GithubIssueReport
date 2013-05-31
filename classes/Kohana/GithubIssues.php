<?php

Abstract Class Kohana_GithubIssues{ 
  
  private $repo;
  private $date;
  private $date_file;
  private $user;
  private $pass;
 
 function __construct(){
     
 } 
 
 public function get_issues($label=[],$use_cache=TRUE){
    
      if($use_cache==TRUE){
        $cache=Cache::instance();
        $issues = $cache->get("github_issues");
        if(is_objecT($issues)){
        return $issues;
        } //if it doesn't exist, continue on to pull latest
      }

      
      $issues = $this->get_issues_curl($label);
      
      return $issues;
 
 }
 
 private function get_issues_curl($label=[]){
 
        $query='https://api.github.com/repos/'.$repo.'/issues?labels='.http_build_query($label);
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
        
        $response = json_decode($result);  
        
        $cache = Cache::instance();
        
        $cache->set("github_issues",$response);  
        
        return $response;
}
 
 public function submit_issue($title,$body,$urls=[]){
 
 
      $query='https://api.github.com/repos/'.$this->repo.'/issues';
      $chs = curl_init();
      curl_setopt($chs, CURLOPT_SSL_VERIFYPEER,0);
      curl_setopt($chs, CURLOPT_SSL_VERIFYHOST,0);
      curl_setopt($chs, CURLOPT_HEADER,0);
      curl_setopt($chs, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($chs,CURLOPT_VERBOSE,0);
      curl_setopt($chs,CURLOPT_USERPWD,"$this->user:$this->pass"); 
      curl_setopt($chs,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0");
      $obj->title=$title;
      $obj->body=$body;
      $obj->labels=array("bug");
      $data=json_encode($obj);
      curl_setopt($chs,CURLOPT_POST,1); 
      curl_setopt($chs,CURLOPT_POSTFIELDS,$data); 
      curl_setopt($chs, CURLOPT_URL, $query);
      $result = curl_exec($chs);
  