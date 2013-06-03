<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_GithubIssues extends Controller{

  function action_index(){

  try{
  
  $gh = new GithubIssues();
 
  $this->action_issue();

  
  }catch(Exception $e){
   $this->action_credentials();
  }
  
  }
  
  function action_issue(){
  $gh = new GithubIssues();
  $repos = $gh->get_repos();
  $view =View::factory("github_submit");
  $view->set("repos",$repos);
  echo $view->render();
  
  }
  
  function action_reportissue(){
     

  
  try{
  
  $gh = new GithubIssues();
  
  if($_POST){ 
   $title = $this->request->post("title");
   $body =  $this->request->post("body");
   $repo = $this->request->post('repo');
   $url = $this->request->post('url');
   
   $body.="\n\n"."[url for this issue: ".$url."]";
   $gh->submit_issue($title,$body,['bug'],$repo);
   echo "Issue Submited";
  }
  
   $this->action_issue();
  
  }catch(Exception $e){
   $this->action_credentials();
  }
  
  }
  
  function action_credentials(){
  
  if($_POST){
    $username = $this->request->post("username");
    $password =  $this->request->post("password");
    
    $gh = new GithubIssues($username,$password);
    //redirect to main
    
    $this->action_index();
    return;
  }
  
  $view = View::factory("github_credentials");
  
  echo $view->render();
  
  }
  
}
