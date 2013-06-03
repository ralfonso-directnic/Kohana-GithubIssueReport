<div  id="github_issues_div" style="width:115px" >
<a href='javascript:void(0);' data-hide-gh-issues="true" style='background-color:#FFF;padding:3px;display:block;' >Report Issue</a>  
<iframe style="display:none;" name="github_issues" id="github_issues" width="500px" height="560px" scrolling="no" src='/GithubIssues/index'> </iframe>
<style>
 #github_issues_div{position:absolute;top:0px;left:0px; z-index: 1;border:1px solid #CDCDCD;padding:3px;width:510px;background-color:#FFF;}
</style>
<script>
$(function(){
  $("[data-hide-gh-issues]").click(function(){
   $("#github_issues").toggle();
    var disp = $("#github_issues").css("display");    
    if(disp=='none'){
     $("#github_issues_div").animate({"width":"115px"});
    }else{
     $("#github_issues_div").animate({"width":"510px"});
    }
  });
 });
</script>
</div>