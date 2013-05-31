<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_GithubIssues extends Controller{


  function action_index(){

  $gh = new GithubIssues();
 
  $issues = $gh->get_issues();
 echo Debug::vars($issues);
  }

}
