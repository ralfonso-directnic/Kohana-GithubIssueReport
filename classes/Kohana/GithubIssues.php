<?php

Abstract Class Kohana_GithubIssues{ 
  
  private $repo;
  private $date;
  private $date_file;
  private $user;
  private $pass;
  private $org;
 
 function __construct($username="",$password=""){
 
   $sess = Session::instance();
   
   $this->repo = "DirectnicDev/web";
   $this->org='DirectnicDev';
   
   if($username AND $password){
     $sess->set("github_password",$password);
     $sess->set("github_username",$username);
   }
   
   $this->user = $sess->get("github_username");
   $this->pass = $sess->get("github_password");
   
   if(!$this->user OR !$this->pass){
     throw new Kohana_Exception("No User/Pass Present");
   }  
   
   //load repos!
   
   $this->get_repos();
   
   
 } 
 
 static function render(){
  
  $view=View::factory("github_issues");
  echo  $view->render();
  
 }
 
 public function get_issues($label=[],$use_cache=TRUE){
    
      if($use_cache==TRUE){
        $cache=Cache::instance('default');
        $issues = $cache->get("github_issues");
        if(is_object($issues) AND $issues->message!="Bad credentials"){
        return $issues;
        } //if it doesn't exist, continue on to pull latest
      }

      
      $issues = $this->get_issues_curl($label);
      
      return $issues;
 
 }
 
  public function get_repos($use_cache=TRUE){
    
      if($use_cache==TRUE){
        $cache=Cache::instance('default');
        $issues = $cache->get($this->user."_github_repos");
        if(is_array($issues) AND $issues->message!="Bad credentials"){
        return $issues;
        } //if it doesn't exist, continue on to pull latest
      }
  
      $issues = $this->get_repos_curl();
      
      return $issues; 
 }
 
 private function get_repos_curl(){

   
        $query='https://api.github.com/orgs/'.$this->org.'/repos';
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
        curl_setopt($ch,CURLOPT_USERPWD,"$this->user:$this->pass"); 
        curl_setopt($ch, CURLOPT_URL, $query);
        
        //retrieve the request!
        $result = curl_exec($ch);
          
        $response = json_decode($result);  
        
        $cache = Cache::instance('default');
        
        $cache->set($this->user."_github_repos",$response);  
     
        return $response;
 
 }
 private function get_issues_curl($label=[]){
 
        $query='https://api.github.com/repos/'.$this->repo.'/issues?labels='.http_build_query($label);
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
        curl_setopt($ch,CURLOPT_USERPWD,"$this->user:$this->pass"); 
        curl_setopt($ch, CURLOPT_URL, $query);
        
        //retrieve the request!
        $result = curl_exec($ch);
          
        $response = json_decode($result);  
        
        $cache = Cache::instance('default');
        
        $cache->set("github_issues",$response);  
     
        return $response;
}
 
 public function submit_issue($title,$body,$labels=[],$repo="",$urls=[]){
      if($repo){
      $this->repo = $repo;
      }
 
      $query='https://api.github.com/repos/'.$this->repo.'/issues';
      $chs = curl_init();
      $obj = new stdClass;
      curl_setopt($chs, CURLOPT_SSL_VERIFYPEER,0);
      curl_setopt($chs, CURLOPT_SSL_VERIFYHOST,0);
      curl_setopt($chs, CURLOPT_HEADER,0);
      curl_setopt($chs, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($chs,CURLOPT_VERBOSE,0);
      curl_setopt($chs,CURLOPT_USERPWD,"$this->user:$this->pass"); 
      curl_setopt($chs,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0");
      $obj->title=$title;
      $obj->body=$body;
      $obj->labels=$labels;
      $data=json_encode($obj);
      curl_setopt($chs,CURLOPT_POST,1); 
      curl_setopt($chs,CURLOPT_POSTFIELDS,$data); 
      curl_setopt($chs, CURLOPT_URL, $query);
      $result = curl_exec($chs);
      
      $response = json_decode($result);
      
      return $response;
      //reload issues 
      $this->get_issues_curl();
}
} 