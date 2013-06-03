<link href="https://a248.e.akamai.net/assets.github.com/assets/github-2e53882cf8306e277ea0d07dbb6117f926c38f6c.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://a248.e.akamai.net/assets.github.com/assets/github2-8ea4ea72d7b478cc437d5b2e6841998ad79f1396.css" media="all" rel="stylesheet" type="text/css" />
<form method='post' action="/GithubIssues/reportissue" style="width:500px">
   <div class="discussion-bubble-content bubble" >
   <div class="discussion-bubble-inner">
      <div class="discussion-topic" >
        <div class="discussion-topic-header" >
          <dl class="form">
            <dd><div class="fieldWithErrors"><input autofocus="autofocus" class="required title js-auto-save" id="issue_title" name="title" placeholder="Title" required="required" size="30" tabindex="1" type="text"></div></dd>
          </dl>
        </div> <!-- /.topic-comment-header -->
     <div class="discussion-topic-header">
          <dl class="form">   
          <dd><div class="fieldWithErrors">  
    <select name="repo"> 
  <option value="" >-- Select Project --</option>
  <?php 
  if(count($repos)){
    foreach($repos AS $row){
     echo '<option value="'.$row->full_name.'" >'.$row->name.'</option>';
    }
    }
  ?>
  </select>
  </div>
  </dd>
            </dl>
        </div> <!-- /.topic-comment-header -->


        <div class="comment-content">

          <dl class="form body">
            <dd>

              

<div class="js-previewable-comment-form previewable-comment-form write-selected" data-preview-url="/preview?repository=6002034">
  <div class="comment-form-head tabnav">
    <ul class="tabnav-tabs">
      <li><a href="#write_bucket_" class="tabnav-tab write-tab js-write-tab selected">Write</a></li>
    </ul>
    <span class="tabnav-right">
      <span class="tabnav-widget text">Comments are parsed with <a href="http://github.github.com/github-flavored-markdown/" class="gfm-help" target="_blank">GitHub Flavored Markdown</a></span>
    </span>
  </div>
  <div class="comment-form-error js-comment-form-error" style="display:none;"></div>

  <div id="write_bucket_" class="write-content js-write-bucket js-uploadable-container upload-enabled is-default" data-model="assets">
    
<a href="#fullscreen_issue_body" class="enable-fullscreen js-enable-fullscreen tooltipped
  leftwards " original-title="Zen Mode">
  <span class="octicon octicon-screen-full"></span>
</a>

    <textarea name="body" tabindex="1" id="issue_body" placeholder="Leave a comment" class="js-comment-field js-size-to-fit  input-with-fullscreen-icon" data-suggester="_new_preview_suggester" style="height: 22px;"></textarea>

    
  <p class="drag-and-drop">

  </p>

  </div>
  <div id="preview_bucket_" class="preview-content js-preview-bucket">
    
<div id="openstruct-158743700" class="js-comment comment" data-body-version="">
  <div class="comment-header normal-comment-header">
      <img class="comment-header-gravatar" height="22" src="https://secure.gravatar.com/avatar/41fb1a403a6096b8aafa75c77a9ac5e7?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="22">
    <a href="/ralfonso-directnic" class="comment-header-author">ralfonso-directnic</a>
    <span class="comment-header-action-text">
      <a href="#openstruct-158743700">
      commented
      </a>
    </span>

    <span class="comment-header-right">
      <a href="#openstruct-158743700" class="comment-header-date"><time class="js-relative-date" datetime="2013-06-03T07:43:49-07:00" title="2013-06-03 07:43:49">3 minutes ago</time></a>
    </span>
  </div> <!-- /.comment-header -->


  <div class="comment-content">

    <div class="edit-comment-hide">
      <div class="js-comment-body comment-body markdown-body">
          <p>Nothing to preview</p>
      </div>
    </div>
  </div> <!-- /.comment-content -->
</div> <!-- /.comment -->

  </div>


  <div class="suggester-container">
    <div class="suggester js-navigation-container" id="_new_preview_suggester" data-url="/DirectnicDev/web/suggestions/issue">


  <ul class="suggestions emoji-suggestions" style="display:none">
      <li class="js-navigation-item" data-value="+1">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/+1.png)"></span>
        +1
      </li>
      <li class="js-navigation-item" data-value="-1">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/-1.png)"></span>
        -1
      </li>
      <li class="js-navigation-item" data-value="100">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/100.png)"></span>
        100
      </li>
      <li class="js-navigation-item" data-value="1234">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/1234.png)"></span>
        1234
      </li>
      <li class="js-navigation-item" data-value="8ball">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/8ball.png)"></span>
        8ball
      </li>
      <li class="js-navigation-item" data-value="a">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/a.png)"></span>
        a
      </li>
      <li class="js-navigation-item" data-value="ab">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ab.png)"></span>
        ab
      </li>
      <li class="js-navigation-item" data-value="abc">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/abc.png)"></span>
        abc
      </li>
      <li class="js-navigation-item" data-value="abcd">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/abcd.png)"></span>
        abcd
      </li>
      <li class="js-navigation-item" data-value="accept">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/accept.png)"></span>
        accept
      </li>
      <li class="js-navigation-item" data-value="aerial_tramway">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/aerial_tramway.png)"></span>
        aerial_tramway
      </li>
      <li class="js-navigation-item" data-value="airplane">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/airplane.png)"></span>
        airplane
      </li>
      <li class="js-navigation-item" data-value="alarm_clock">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/alarm_clock.png)"></span>
        alarm_clock
      </li>
      <li class="js-navigation-item" data-value="alien">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/alien.png)"></span>
        alien
      </li>
      <li class="js-navigation-item" data-value="ambulance">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ambulance.png)"></span>
        ambulance
      </li>
      <li class="js-navigation-item" data-value="anchor">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/anchor.png)"></span>
        anchor
      </li>
      <li class="js-navigation-item" data-value="angel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/angel.png)"></span>
        angel
      </li>
      <li class="js-navigation-item" data-value="anger">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/anger.png)"></span>
        anger
      </li>
      <li class="js-navigation-item" data-value="angry">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/angry.png)"></span>
        angry
      </li>
      <li class="js-navigation-item" data-value="anguished">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/anguished.png)"></span>
        anguished
      </li>
      <li class="js-navigation-item" data-value="ant">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ant.png)"></span>
        ant
      </li>
      <li class="js-navigation-item" data-value="apple">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/apple.png)"></span>
        apple
      </li>
      <li class="js-navigation-item" data-value="aquarius">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/aquarius.png)"></span>
        aquarius
      </li>
      <li class="js-navigation-item" data-value="aries">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/aries.png)"></span>
        aries
      </li>
      <li class="js-navigation-item" data-value="arrow_backward">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_backward.png)"></span>
        arrow_backward
      </li>
      <li class="js-navigation-item" data-value="arrow_double_down">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_double_down.png)"></span>
        arrow_double_down
      </li>
      <li class="js-navigation-item" data-value="arrow_double_up">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_double_up.png)"></span>
        arrow_double_up
      </li>
      <li class="js-navigation-item" data-value="arrow_down">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_down.png)"></span>
        arrow_down
      </li>
      <li class="js-navigation-item" data-value="arrow_down_small">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_down_small.png)"></span>
        arrow_down_small
      </li>
      <li class="js-navigation-item" data-value="arrow_forward">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_forward.png)"></span>
        arrow_forward
      </li>
      <li class="js-navigation-item" data-value="arrow_heading_down">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_heading_down.png)"></span>
        arrow_heading_down
      </li>
      <li class="js-navigation-item" data-value="arrow_heading_up">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_heading_up.png)"></span>
        arrow_heading_up
      </li>
      <li class="js-navigation-item" data-value="arrow_left">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_left.png)"></span>
        arrow_left
      </li>
      <li class="js-navigation-item" data-value="arrow_lower_left">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_lower_left.png)"></span>
        arrow_lower_left
      </li>
      <li class="js-navigation-item" data-value="arrow_lower_right">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_lower_right.png)"></span>
        arrow_lower_right
      </li>
      <li class="js-navigation-item" data-value="arrow_right">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_right.png)"></span>
        arrow_right
      </li>
      <li class="js-navigation-item" data-value="arrow_right_hook">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_right_hook.png)"></span>
        arrow_right_hook
      </li>
      <li class="js-navigation-item" data-value="arrow_up">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_up.png)"></span>
        arrow_up
      </li>
      <li class="js-navigation-item" data-value="arrow_up_down">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_up_down.png)"></span>
        arrow_up_down
      </li>
      <li class="js-navigation-item" data-value="arrow_up_small">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_up_small.png)"></span>
        arrow_up_small
      </li>
      <li class="js-navigation-item" data-value="arrow_upper_left">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_upper_left.png)"></span>
        arrow_upper_left
      </li>
      <li class="js-navigation-item" data-value="arrow_upper_right">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrow_upper_right.png)"></span>
        arrow_upper_right
      </li>
      <li class="js-navigation-item" data-value="arrows_clockwise">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrows_clockwise.png)"></span>
        arrows_clockwise
      </li>
      <li class="js-navigation-item" data-value="arrows_counterclockwise">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/arrows_counterclockwise.png)"></span>
        arrows_counterclockwise
      </li>
      <li class="js-navigation-item" data-value="art">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/art.png)"></span>
        art
      </li>
      <li class="js-navigation-item" data-value="articulated_lorry">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/articulated_lorry.png)"></span>
        articulated_lorry
      </li>
      <li class="js-navigation-item" data-value="astonished">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/astonished.png)"></span>
        astonished
      </li>
      <li class="js-navigation-item" data-value="athletic_shoe">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/athletic_shoe.png)"></span>
        athletic_shoe
      </li>
      <li class="js-navigation-item" data-value="atm">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/atm.png)"></span>
        atm
      </li>
      <li class="js-navigation-item" data-value="b">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/b.png)"></span>
        b
      </li>
      <li class="js-navigation-item" data-value="baby">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/baby.png)"></span>
        baby
      </li>
      <li class="js-navigation-item" data-value="baby_bottle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/baby_bottle.png)"></span>
        baby_bottle
      </li>
      <li class="js-navigation-item" data-value="baby_chick">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/baby_chick.png)"></span>
        baby_chick
      </li>
      <li class="js-navigation-item" data-value="baby_symbol">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/baby_symbol.png)"></span>
        baby_symbol
      </li>
      <li class="js-navigation-item" data-value="back">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/back.png)"></span>
        back
      </li>
      <li class="js-navigation-item" data-value="baggage_claim">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/baggage_claim.png)"></span>
        baggage_claim
      </li>
      <li class="js-navigation-item" data-value="balloon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/balloon.png)"></span>
        balloon
      </li>
      <li class="js-navigation-item" data-value="ballot_box_with_check">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ballot_box_with_check.png)"></span>
        ballot_box_with_check
      </li>
      <li class="js-navigation-item" data-value="bamboo">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bamboo.png)"></span>
        bamboo
      </li>
      <li class="js-navigation-item" data-value="banana">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/banana.png)"></span>
        banana
      </li>
      <li class="js-navigation-item" data-value="bangbang">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bangbang.png)"></span>
        bangbang
      </li>
      <li class="js-navigation-item" data-value="bank">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bank.png)"></span>
        bank
      </li>
      <li class="js-navigation-item" data-value="bar_chart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bar_chart.png)"></span>
        bar_chart
      </li>
      <li class="js-navigation-item" data-value="barber">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/barber.png)"></span>
        barber
      </li>
      <li class="js-navigation-item" data-value="baseball">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/baseball.png)"></span>
        baseball
      </li>
      <li class="js-navigation-item" data-value="basketball">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/basketball.png)"></span>
        basketball
      </li>
      <li class="js-navigation-item" data-value="bath">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bath.png)"></span>
        bath
      </li>
      <li class="js-navigation-item" data-value="bathtub">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bathtub.png)"></span>
        bathtub
      </li>
      <li class="js-navigation-item" data-value="battery">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/battery.png)"></span>
        battery
      </li>
      <li class="js-navigation-item" data-value="bear">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bear.png)"></span>
        bear
      </li>
      <li class="js-navigation-item" data-value="bee">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bee.png)"></span>
        bee
      </li>
      <li class="js-navigation-item" data-value="beer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/beer.png)"></span>
        beer
      </li>
      <li class="js-navigation-item" data-value="beers">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/beers.png)"></span>
        beers
      </li>
      <li class="js-navigation-item" data-value="beetle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/beetle.png)"></span>
        beetle
      </li>
      <li class="js-navigation-item" data-value="beginner">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/beginner.png)"></span>
        beginner
      </li>
      <li class="js-navigation-item" data-value="bell">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bell.png)"></span>
        bell
      </li>
      <li class="js-navigation-item" data-value="bento">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bento.png)"></span>
        bento
      </li>
      <li class="js-navigation-item" data-value="bicyclist">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bicyclist.png)"></span>
        bicyclist
      </li>
      <li class="js-navigation-item" data-value="bike">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bike.png)"></span>
        bike
      </li>
      <li class="js-navigation-item" data-value="bikini">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bikini.png)"></span>
        bikini
      </li>
      <li class="js-navigation-item" data-value="bird">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bird.png)"></span>
        bird
      </li>
      <li class="js-navigation-item" data-value="birthday">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/birthday.png)"></span>
        birthday
      </li>
      <li class="js-navigation-item" data-value="black_circle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_circle.png)"></span>
        black_circle
      </li>
      <li class="js-navigation-item" data-value="black_joker">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_joker.png)"></span>
        black_joker
      </li>
      <li class="js-navigation-item" data-value="black_large_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_large_square.png)"></span>
        black_large_square
      </li>
      <li class="js-navigation-item" data-value="black_medium_small_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_medium_small_square.png)"></span>
        black_medium_small_square
      </li>
      <li class="js-navigation-item" data-value="black_medium_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_medium_square.png)"></span>
        black_medium_square
      </li>
      <li class="js-navigation-item" data-value="black_nib">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_nib.png)"></span>
        black_nib
      </li>
      <li class="js-navigation-item" data-value="black_small_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_small_square.png)"></span>
        black_small_square
      </li>
      <li class="js-navigation-item" data-value="black_square_button">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/black_square_button.png)"></span>
        black_square_button
      </li>
      <li class="js-navigation-item" data-value="blossom">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/blossom.png)"></span>
        blossom
      </li>
      <li class="js-navigation-item" data-value="blowfish">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/blowfish.png)"></span>
        blowfish
      </li>
      <li class="js-navigation-item" data-value="blue_book">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/blue_book.png)"></span>
        blue_book
      </li>
      <li class="js-navigation-item" data-value="blue_car">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/blue_car.png)"></span>
        blue_car
      </li>
      <li class="js-navigation-item" data-value="blue_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/blue_heart.png)"></span>
        blue_heart
      </li>
      <li class="js-navigation-item" data-value="blush">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/blush.png)"></span>
        blush
      </li>
      <li class="js-navigation-item" data-value="boar">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/boar.png)"></span>
        boar
      </li>
      <li class="js-navigation-item" data-value="boat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/boat.png)"></span>
        boat
      </li>
      <li class="js-navigation-item" data-value="bomb">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bomb.png)"></span>
        bomb
      </li>
      <li class="js-navigation-item" data-value="book">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/book.png)"></span>
        book
      </li>
      <li class="js-navigation-item" data-value="bookmark">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bookmark.png)"></span>
        bookmark
      </li>
      <li class="js-navigation-item" data-value="bookmark_tabs">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bookmark_tabs.png)"></span>
        bookmark_tabs
      </li>
      <li class="js-navigation-item" data-value="books">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/books.png)"></span>
        books
      </li>
      <li class="js-navigation-item" data-value="boom">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/boom.png)"></span>
        boom
      </li>
      <li class="js-navigation-item" data-value="boot">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/boot.png)"></span>
        boot
      </li>
      <li class="js-navigation-item" data-value="bouquet">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bouquet.png)"></span>
        bouquet
      </li>
      <li class="js-navigation-item" data-value="bow">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bow.png)"></span>
        bow
      </li>
      <li class="js-navigation-item" data-value="bowling">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bowling.png)"></span>
        bowling
      </li>
      <li class="js-navigation-item" data-value="bowtie">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bowtie.png)"></span>
        bowtie
      </li>
      <li class="js-navigation-item" data-value="boy">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/boy.png)"></span>
        boy
      </li>
      <li class="js-navigation-item" data-value="bread">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bread.png)"></span>
        bread
      </li>
      <li class="js-navigation-item" data-value="bride_with_veil">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bride_with_veil.png)"></span>
        bride_with_veil
      </li>
      <li class="js-navigation-item" data-value="bridge_at_night">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bridge_at_night.png)"></span>
        bridge_at_night
      </li>
      <li class="js-navigation-item" data-value="briefcase">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/briefcase.png)"></span>
        briefcase
      </li>
      <li class="js-navigation-item" data-value="broken_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/broken_heart.png)"></span>
        broken_heart
      </li>
      <li class="js-navigation-item" data-value="bug">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bug.png)"></span>
        bug
      </li>
      <li class="js-navigation-item" data-value="bulb">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bulb.png)"></span>
        bulb
      </li>
      <li class="js-navigation-item" data-value="bullettrain_front">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bullettrain_front.png)"></span>
        bullettrain_front
      </li>
      <li class="js-navigation-item" data-value="bullettrain_side">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bullettrain_side.png)"></span>
        bullettrain_side
      </li>
      <li class="js-navigation-item" data-value="bus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bus.png)"></span>
        bus
      </li>
      <li class="js-navigation-item" data-value="busstop">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/busstop.png)"></span>
        busstop
      </li>
      <li class="js-navigation-item" data-value="bust_in_silhouette">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/bust_in_silhouette.png)"></span>
        bust_in_silhouette
      </li>
      <li class="js-navigation-item" data-value="busts_in_silhouette">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/busts_in_silhouette.png)"></span>
        busts_in_silhouette
      </li>
      <li class="js-navigation-item" data-value="cactus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cactus.png)"></span>
        cactus
      </li>
      <li class="js-navigation-item" data-value="cake">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cake.png)"></span>
        cake
      </li>
      <li class="js-navigation-item" data-value="calendar">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/calendar.png)"></span>
        calendar
      </li>
      <li class="js-navigation-item" data-value="calling">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/calling.png)"></span>
        calling
      </li>
      <li class="js-navigation-item" data-value="camel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/camel.png)"></span>
        camel
      </li>
      <li class="js-navigation-item" data-value="camera">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/camera.png)"></span>
        camera
      </li>
      <li class="js-navigation-item" data-value="cancer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cancer.png)"></span>
        cancer
      </li>
      <li class="js-navigation-item" data-value="candy">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/candy.png)"></span>
        candy
      </li>
      <li class="js-navigation-item" data-value="capital_abcd">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/capital_abcd.png)"></span>
        capital_abcd
      </li>
      <li class="js-navigation-item" data-value="capricorn">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/capricorn.png)"></span>
        capricorn
      </li>
      <li class="js-navigation-item" data-value="car">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/car.png)"></span>
        car
      </li>
      <li class="js-navigation-item" data-value="card_index">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/card_index.png)"></span>
        card_index
      </li>
      <li class="js-navigation-item" data-value="carousel_horse">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/carousel_horse.png)"></span>
        carousel_horse
      </li>
      <li class="js-navigation-item" data-value="cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cat.png)"></span>
        cat
      </li>
      <li class="js-navigation-item" data-value="cat2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cat2.png)"></span>
        cat2
      </li>
      <li class="js-navigation-item" data-value="cd">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cd.png)"></span>
        cd
      </li>
      <li class="js-navigation-item" data-value="chart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/chart.png)"></span>
        chart
      </li>
      <li class="js-navigation-item" data-value="chart_with_downwards_trend">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/chart_with_downwards_trend.png)"></span>
        chart_with_downwards_trend
      </li>
      <li class="js-navigation-item" data-value="chart_with_upwards_trend">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/chart_with_upwards_trend.png)"></span>
        chart_with_upwards_trend
      </li>
      <li class="js-navigation-item" data-value="checkered_flag">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/checkered_flag.png)"></span>
        checkered_flag
      </li>
      <li class="js-navigation-item" data-value="cherries">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cherries.png)"></span>
        cherries
      </li>
      <li class="js-navigation-item" data-value="cherry_blossom">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cherry_blossom.png)"></span>
        cherry_blossom
      </li>
      <li class="js-navigation-item" data-value="chestnut">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/chestnut.png)"></span>
        chestnut
      </li>
      <li class="js-navigation-item" data-value="chicken">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/chicken.png)"></span>
        chicken
      </li>
      <li class="js-navigation-item" data-value="children_crossing">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/children_crossing.png)"></span>
        children_crossing
      </li>
      <li class="js-navigation-item" data-value="chocolate_bar">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/chocolate_bar.png)"></span>
        chocolate_bar
      </li>
      <li class="js-navigation-item" data-value="christmas_tree">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/christmas_tree.png)"></span>
        christmas_tree
      </li>
      <li class="js-navigation-item" data-value="church">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/church.png)"></span>
        church
      </li>
      <li class="js-navigation-item" data-value="cinema">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cinema.png)"></span>
        cinema
      </li>
      <li class="js-navigation-item" data-value="circus_tent">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/circus_tent.png)"></span>
        circus_tent
      </li>
      <li class="js-navigation-item" data-value="city_sunrise">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/city_sunrise.png)"></span>
        city_sunrise
      </li>
      <li class="js-navigation-item" data-value="city_sunset">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/city_sunset.png)"></span>
        city_sunset
      </li>
      <li class="js-navigation-item" data-value="cl">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cl.png)"></span>
        cl
      </li>
      <li class="js-navigation-item" data-value="clap">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clap.png)"></span>
        clap
      </li>
      <li class="js-navigation-item" data-value="clapper">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clapper.png)"></span>
        clapper
      </li>
      <li class="js-navigation-item" data-value="clipboard">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clipboard.png)"></span>
        clipboard
      </li>
      <li class="js-navigation-item" data-value="clock1">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock1.png)"></span>
        clock1
      </li>
      <li class="js-navigation-item" data-value="clock10">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock10.png)"></span>
        clock10
      </li>
      <li class="js-navigation-item" data-value="clock1030">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock1030.png)"></span>
        clock1030
      </li>
      <li class="js-navigation-item" data-value="clock11">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock11.png)"></span>
        clock11
      </li>
      <li class="js-navigation-item" data-value="clock1130">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock1130.png)"></span>
        clock1130
      </li>
      <li class="js-navigation-item" data-value="clock12">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock12.png)"></span>
        clock12
      </li>
      <li class="js-navigation-item" data-value="clock1230">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock1230.png)"></span>
        clock1230
      </li>
      <li class="js-navigation-item" data-value="clock130">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock130.png)"></span>
        clock130
      </li>
      <li class="js-navigation-item" data-value="clock2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock2.png)"></span>
        clock2
      </li>
      <li class="js-navigation-item" data-value="clock230">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock230.png)"></span>
        clock230
      </li>
      <li class="js-navigation-item" data-value="clock3">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock3.png)"></span>
        clock3
      </li>
      <li class="js-navigation-item" data-value="clock330">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock330.png)"></span>
        clock330
      </li>
      <li class="js-navigation-item" data-value="clock4">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock4.png)"></span>
        clock4
      </li>
      <li class="js-navigation-item" data-value="clock430">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock430.png)"></span>
        clock430
      </li>
      <li class="js-navigation-item" data-value="clock5">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock5.png)"></span>
        clock5
      </li>
      <li class="js-navigation-item" data-value="clock530">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock530.png)"></span>
        clock530
      </li>
      <li class="js-navigation-item" data-value="clock6">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock6.png)"></span>
        clock6
      </li>
      <li class="js-navigation-item" data-value="clock630">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock630.png)"></span>
        clock630
      </li>
      <li class="js-navigation-item" data-value="clock7">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock7.png)"></span>
        clock7
      </li>
      <li class="js-navigation-item" data-value="clock730">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock730.png)"></span>
        clock730
      </li>
      <li class="js-navigation-item" data-value="clock8">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock8.png)"></span>
        clock8
      </li>
      <li class="js-navigation-item" data-value="clock830">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock830.png)"></span>
        clock830
      </li>
      <li class="js-navigation-item" data-value="clock9">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock9.png)"></span>
        clock9
      </li>
      <li class="js-navigation-item" data-value="clock930">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clock930.png)"></span>
        clock930
      </li>
      <li class="js-navigation-item" data-value="closed_book">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/closed_book.png)"></span>
        closed_book
      </li>
      <li class="js-navigation-item" data-value="closed_lock_with_key">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/closed_lock_with_key.png)"></span>
        closed_lock_with_key
      </li>
      <li class="js-navigation-item" data-value="closed_umbrella">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/closed_umbrella.png)"></span>
        closed_umbrella
      </li>
      <li class="js-navigation-item" data-value="cloud">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cloud.png)"></span>
        cloud
      </li>
      <li class="js-navigation-item" data-value="clubs">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/clubs.png)"></span>
        clubs
      </li>
      <li class="js-navigation-item" data-value="cn">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cn.png)"></span>
        cn
      </li>
      <li class="js-navigation-item" data-value="cocktail">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cocktail.png)"></span>
        cocktail
      </li>
      <li class="js-navigation-item" data-value="coffee">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/coffee.png)"></span>
        coffee
      </li>
      <li class="js-navigation-item" data-value="cold_sweat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cold_sweat.png)"></span>
        cold_sweat
      </li>
      <li class="js-navigation-item" data-value="collision">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/collision.png)"></span>
        collision
      </li>
      <li class="js-navigation-item" data-value="computer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/computer.png)"></span>
        computer
      </li>
      <li class="js-navigation-item" data-value="confetti_ball">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/confetti_ball.png)"></span>
        confetti_ball
      </li>
      <li class="js-navigation-item" data-value="confounded">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/confounded.png)"></span>
        confounded
      </li>
      <li class="js-navigation-item" data-value="confused">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/confused.png)"></span>
        confused
      </li>
      <li class="js-navigation-item" data-value="congratulations">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/congratulations.png)"></span>
        congratulations
      </li>
      <li class="js-navigation-item" data-value="construction">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/construction.png)"></span>
        construction
      </li>
      <li class="js-navigation-item" data-value="construction_worker">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/construction_worker.png)"></span>
        construction_worker
      </li>
      <li class="js-navigation-item" data-value="convenience_store">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/convenience_store.png)"></span>
        convenience_store
      </li>
      <li class="js-navigation-item" data-value="cookie">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cookie.png)"></span>
        cookie
      </li>
      <li class="js-navigation-item" data-value="cool">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cool.png)"></span>
        cool
      </li>
      <li class="js-navigation-item" data-value="cop">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cop.png)"></span>
        cop
      </li>
      <li class="js-navigation-item" data-value="copyright">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/copyright.png)"></span>
        copyright
      </li>
      <li class="js-navigation-item" data-value="corn">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/corn.png)"></span>
        corn
      </li>
      <li class="js-navigation-item" data-value="couple">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/couple.png)"></span>
        couple
      </li>
      <li class="js-navigation-item" data-value="couple_with_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/couple_with_heart.png)"></span>
        couple_with_heart
      </li>
      <li class="js-navigation-item" data-value="couplekiss">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/couplekiss.png)"></span>
        couplekiss
      </li>
      <li class="js-navigation-item" data-value="cow">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cow.png)"></span>
        cow
      </li>
      <li class="js-navigation-item" data-value="cow2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cow2.png)"></span>
        cow2
      </li>
      <li class="js-navigation-item" data-value="credit_card">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/credit_card.png)"></span>
        credit_card
      </li>
      <li class="js-navigation-item" data-value="crescent_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/crescent_moon.png)"></span>
        crescent_moon
      </li>
      <li class="js-navigation-item" data-value="crocodile">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/crocodile.png)"></span>
        crocodile
      </li>
      <li class="js-navigation-item" data-value="crossed_flags">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/crossed_flags.png)"></span>
        crossed_flags
      </li>
      <li class="js-navigation-item" data-value="crown">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/crown.png)"></span>
        crown
      </li>
      <li class="js-navigation-item" data-value="cry">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cry.png)"></span>
        cry
      </li>
      <li class="js-navigation-item" data-value="crying_cat_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/crying_cat_face.png)"></span>
        crying_cat_face
      </li>
      <li class="js-navigation-item" data-value="crystal_ball">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/crystal_ball.png)"></span>
        crystal_ball
      </li>
      <li class="js-navigation-item" data-value="cupid">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cupid.png)"></span>
        cupid
      </li>
      <li class="js-navigation-item" data-value="curly_loop">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/curly_loop.png)"></span>
        curly_loop
      </li>
      <li class="js-navigation-item" data-value="currency_exchange">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/currency_exchange.png)"></span>
        currency_exchange
      </li>
      <li class="js-navigation-item" data-value="curry">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/curry.png)"></span>
        curry
      </li>
      <li class="js-navigation-item" data-value="custard">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/custard.png)"></span>
        custard
      </li>
      <li class="js-navigation-item" data-value="customs">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/customs.png)"></span>
        customs
      </li>
      <li class="js-navigation-item" data-value="cyclone">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/cyclone.png)"></span>
        cyclone
      </li>
      <li class="js-navigation-item" data-value="dancer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dancer.png)"></span>
        dancer
      </li>
      <li class="js-navigation-item" data-value="dancers">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dancers.png)"></span>
        dancers
      </li>
      <li class="js-navigation-item" data-value="dango">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dango.png)"></span>
        dango
      </li>
      <li class="js-navigation-item" data-value="dart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dart.png)"></span>
        dart
      </li>
      <li class="js-navigation-item" data-value="dash">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dash.png)"></span>
        dash
      </li>
      <li class="js-navigation-item" data-value="date">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/date.png)"></span>
        date
      </li>
      <li class="js-navigation-item" data-value="de">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/de.png)"></span>
        de
      </li>
      <li class="js-navigation-item" data-value="deciduous_tree">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/deciduous_tree.png)"></span>
        deciduous_tree
      </li>
      <li class="js-navigation-item" data-value="department_store">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/department_store.png)"></span>
        department_store
      </li>
      <li class="js-navigation-item" data-value="diamond_shape_with_a_dot_inside">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/diamond_shape_with_a_dot_inside.png)"></span>
        diamond_shape_with_a_dot_inside
      </li>
      <li class="js-navigation-item" data-value="diamonds">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/diamonds.png)"></span>
        diamonds
      </li>
      <li class="js-navigation-item" data-value="disappointed">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/disappointed.png)"></span>
        disappointed
      </li>
      <li class="js-navigation-item" data-value="disappointed_relieved">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/disappointed_relieved.png)"></span>
        disappointed_relieved
      </li>
      <li class="js-navigation-item" data-value="dizzy">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dizzy.png)"></span>
        dizzy
      </li>
      <li class="js-navigation-item" data-value="dizzy_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dizzy_face.png)"></span>
        dizzy_face
      </li>
      <li class="js-navigation-item" data-value="do_not_litter">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/do_not_litter.png)"></span>
        do_not_litter
      </li>
      <li class="js-navigation-item" data-value="dog">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dog.png)"></span>
        dog
      </li>
      <li class="js-navigation-item" data-value="dog2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dog2.png)"></span>
        dog2
      </li>
      <li class="js-navigation-item" data-value="dollar">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dollar.png)"></span>
        dollar
      </li>
      <li class="js-navigation-item" data-value="dolls">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dolls.png)"></span>
        dolls
      </li>
      <li class="js-navigation-item" data-value="dolphin">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dolphin.png)"></span>
        dolphin
      </li>
      <li class="js-navigation-item" data-value="door">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/door.png)"></span>
        door
      </li>
      <li class="js-navigation-item" data-value="doughnut">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/doughnut.png)"></span>
        doughnut
      </li>
      <li class="js-navigation-item" data-value="dragon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dragon.png)"></span>
        dragon
      </li>
      <li class="js-navigation-item" data-value="dragon_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dragon_face.png)"></span>
        dragon_face
      </li>
      <li class="js-navigation-item" data-value="dress">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dress.png)"></span>
        dress
      </li>
      <li class="js-navigation-item" data-value="dromedary_camel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dromedary_camel.png)"></span>
        dromedary_camel
      </li>
      <li class="js-navigation-item" data-value="droplet">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/droplet.png)"></span>
        droplet
      </li>
      <li class="js-navigation-item" data-value="dvd">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/dvd.png)"></span>
        dvd
      </li>
      <li class="js-navigation-item" data-value="e-mail">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/e-mail.png)"></span>
        e-mail
      </li>
      <li class="js-navigation-item" data-value="ear">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ear.png)"></span>
        ear
      </li>
      <li class="js-navigation-item" data-value="ear_of_rice">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ear_of_rice.png)"></span>
        ear_of_rice
      </li>
      <li class="js-navigation-item" data-value="earth_africa">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/earth_africa.png)"></span>
        earth_africa
      </li>
      <li class="js-navigation-item" data-value="earth_americas">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/earth_americas.png)"></span>
        earth_americas
      </li>
      <li class="js-navigation-item" data-value="earth_asia">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/earth_asia.png)"></span>
        earth_asia
      </li>
      <li class="js-navigation-item" data-value="egg">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/egg.png)"></span>
        egg
      </li>
      <li class="js-navigation-item" data-value="eggplant">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/eggplant.png)"></span>
        eggplant
      </li>
      <li class="js-navigation-item" data-value="eight">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/eight.png)"></span>
        eight
      </li>
      <li class="js-navigation-item" data-value="eight_pointed_black_star">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/eight_pointed_black_star.png)"></span>
        eight_pointed_black_star
      </li>
      <li class="js-navigation-item" data-value="eight_spoked_asterisk">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/eight_spoked_asterisk.png)"></span>
        eight_spoked_asterisk
      </li>
      <li class="js-navigation-item" data-value="electric_plug">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/electric_plug.png)"></span>
        electric_plug
      </li>
      <li class="js-navigation-item" data-value="elephant">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/elephant.png)"></span>
        elephant
      </li>
      <li class="js-navigation-item" data-value="email">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/email.png)"></span>
        email
      </li>
      <li class="js-navigation-item" data-value="end">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/end.png)"></span>
        end
      </li>
      <li class="js-navigation-item" data-value="envelope">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/envelope.png)"></span>
        envelope
      </li>
      <li class="js-navigation-item" data-value="envelope_with_arrow">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/envelope_with_arrow.png)"></span>
        envelope_with_arrow
      </li>
      <li class="js-navigation-item" data-value="es">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/es.png)"></span>
        es
      </li>
      <li class="js-navigation-item" data-value="euro">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/euro.png)"></span>
        euro
      </li>
      <li class="js-navigation-item" data-value="european_castle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/european_castle.png)"></span>
        european_castle
      </li>
      <li class="js-navigation-item" data-value="european_post_office">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/european_post_office.png)"></span>
        european_post_office
      </li>
      <li class="js-navigation-item" data-value="evergreen_tree">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/evergreen_tree.png)"></span>
        evergreen_tree
      </li>
      <li class="js-navigation-item" data-value="exclamation">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/exclamation.png)"></span>
        exclamation
      </li>
      <li class="js-navigation-item" data-value="expressionless">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/expressionless.png)"></span>
        expressionless
      </li>
      <li class="js-navigation-item" data-value="eyeglasses">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/eyeglasses.png)"></span>
        eyeglasses
      </li>
      <li class="js-navigation-item" data-value="eyes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/eyes.png)"></span>
        eyes
      </li>
      <li class="js-navigation-item" data-value="facepunch">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/facepunch.png)"></span>
        facepunch
      </li>
      <li class="js-navigation-item" data-value="factory">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/factory.png)"></span>
        factory
      </li>
      <li class="js-navigation-item" data-value="fallen_leaf">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fallen_leaf.png)"></span>
        fallen_leaf
      </li>
      <li class="js-navigation-item" data-value="family">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/family.png)"></span>
        family
      </li>
      <li class="js-navigation-item" data-value="fast_forward">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fast_forward.png)"></span>
        fast_forward
      </li>
      <li class="js-navigation-item" data-value="fax">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fax.png)"></span>
        fax
      </li>
      <li class="js-navigation-item" data-value="fearful">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fearful.png)"></span>
        fearful
      </li>
      <li class="js-navigation-item" data-value="feelsgood">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/feelsgood.png)"></span>
        feelsgood
      </li>
      <li class="js-navigation-item" data-value="feet">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/feet.png)"></span>
        feet
      </li>
      <li class="js-navigation-item" data-value="ferris_wheel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ferris_wheel.png)"></span>
        ferris_wheel
      </li>
      <li class="js-navigation-item" data-value="file_folder">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/file_folder.png)"></span>
        file_folder
      </li>
      <li class="js-navigation-item" data-value="finnadie">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/finnadie.png)"></span>
        finnadie
      </li>
      <li class="js-navigation-item" data-value="fire">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fire.png)"></span>
        fire
      </li>
      <li class="js-navigation-item" data-value="fire_engine">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fire_engine.png)"></span>
        fire_engine
      </li>
      <li class="js-navigation-item" data-value="fireworks">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fireworks.png)"></span>
        fireworks
      </li>
      <li class="js-navigation-item" data-value="first_quarter_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/first_quarter_moon.png)"></span>
        first_quarter_moon
      </li>
      <li class="js-navigation-item" data-value="first_quarter_moon_with_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/first_quarter_moon_with_face.png)"></span>
        first_quarter_moon_with_face
      </li>
      <li class="js-navigation-item" data-value="fish">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fish.png)"></span>
        fish
      </li>
      <li class="js-navigation-item" data-value="fish_cake">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fish_cake.png)"></span>
        fish_cake
      </li>
      <li class="js-navigation-item" data-value="fishing_pole_and_fish">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fishing_pole_and_fish.png)"></span>
        fishing_pole_and_fish
      </li>
      <li class="js-navigation-item" data-value="fist">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fist.png)"></span>
        fist
      </li>
      <li class="js-navigation-item" data-value="five">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/five.png)"></span>
        five
      </li>
      <li class="js-navigation-item" data-value="flags">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/flags.png)"></span>
        flags
      </li>
      <li class="js-navigation-item" data-value="flashlight">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/flashlight.png)"></span>
        flashlight
      </li>
      <li class="js-navigation-item" data-value="floppy_disk">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/floppy_disk.png)"></span>
        floppy_disk
      </li>
      <li class="js-navigation-item" data-value="flower_playing_cards">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/flower_playing_cards.png)"></span>
        flower_playing_cards
      </li>
      <li class="js-navigation-item" data-value="flushed">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/flushed.png)"></span>
        flushed
      </li>
      <li class="js-navigation-item" data-value="foggy">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/foggy.png)"></span>
        foggy
      </li>
      <li class="js-navigation-item" data-value="football">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/football.png)"></span>
        football
      </li>
      <li class="js-navigation-item" data-value="footprints">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/footprints.png)"></span>
        footprints
      </li>
      <li class="js-navigation-item" data-value="fork_and_knife">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fork_and_knife.png)"></span>
        fork_and_knife
      </li>
      <li class="js-navigation-item" data-value="fountain">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fountain.png)"></span>
        fountain
      </li>
      <li class="js-navigation-item" data-value="four">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/four.png)"></span>
        four
      </li>
      <li class="js-navigation-item" data-value="four_leaf_clover">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/four_leaf_clover.png)"></span>
        four_leaf_clover
      </li>
      <li class="js-navigation-item" data-value="fr">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fr.png)"></span>
        fr
      </li>
      <li class="js-navigation-item" data-value="free">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/free.png)"></span>
        free
      </li>
      <li class="js-navigation-item" data-value="fried_shrimp">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fried_shrimp.png)"></span>
        fried_shrimp
      </li>
      <li class="js-navigation-item" data-value="fries">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fries.png)"></span>
        fries
      </li>
      <li class="js-navigation-item" data-value="frog">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/frog.png)"></span>
        frog
      </li>
      <li class="js-navigation-item" data-value="frowning">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/frowning.png)"></span>
        frowning
      </li>
      <li class="js-navigation-item" data-value="fuelpump">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/fuelpump.png)"></span>
        fuelpump
      </li>
      <li class="js-navigation-item" data-value="full_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/full_moon.png)"></span>
        full_moon
      </li>
      <li class="js-navigation-item" data-value="full_moon_with_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/full_moon_with_face.png)"></span>
        full_moon_with_face
      </li>
      <li class="js-navigation-item" data-value="game_die">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/game_die.png)"></span>
        game_die
      </li>
      <li class="js-navigation-item" data-value="gb">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/gb.png)"></span>
        gb
      </li>
      <li class="js-navigation-item" data-value="gem">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/gem.png)"></span>
        gem
      </li>
      <li class="js-navigation-item" data-value="gemini">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/gemini.png)"></span>
        gemini
      </li>
      <li class="js-navigation-item" data-value="ghost">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ghost.png)"></span>
        ghost
      </li>
      <li class="js-navigation-item" data-value="gift">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/gift.png)"></span>
        gift
      </li>
      <li class="js-navigation-item" data-value="gift_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/gift_heart.png)"></span>
        gift_heart
      </li>
      <li class="js-navigation-item" data-value="girl">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/girl.png)"></span>
        girl
      </li>
      <li class="js-navigation-item" data-value="globe_with_meridians">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/globe_with_meridians.png)"></span>
        globe_with_meridians
      </li>
      <li class="js-navigation-item" data-value="goat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/goat.png)"></span>
        goat
      </li>
      <li class="js-navigation-item" data-value="goberserk">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/goberserk.png)"></span>
        goberserk
      </li>
      <li class="js-navigation-item" data-value="godmode">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/godmode.png)"></span>
        godmode
      </li>
      <li class="js-navigation-item" data-value="golf">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/golf.png)"></span>
        golf
      </li>
      <li class="js-navigation-item" data-value="grapes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/grapes.png)"></span>
        grapes
      </li>
      <li class="js-navigation-item" data-value="green_apple">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/green_apple.png)"></span>
        green_apple
      </li>
      <li class="js-navigation-item" data-value="green_book">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/green_book.png)"></span>
        green_book
      </li>
      <li class="js-navigation-item" data-value="green_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/green_heart.png)"></span>
        green_heart
      </li>
      <li class="js-navigation-item" data-value="grey_exclamation">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/grey_exclamation.png)"></span>
        grey_exclamation
      </li>
      <li class="js-navigation-item" data-value="grey_question">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/grey_question.png)"></span>
        grey_question
      </li>
      <li class="js-navigation-item" data-value="grimacing">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/grimacing.png)"></span>
        grimacing
      </li>
      <li class="js-navigation-item" data-value="grin">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/grin.png)"></span>
        grin
      </li>
      <li class="js-navigation-item" data-value="grinning">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/grinning.png)"></span>
        grinning
      </li>
      <li class="js-navigation-item" data-value="guardsman">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/guardsman.png)"></span>
        guardsman
      </li>
      <li class="js-navigation-item" data-value="guitar">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/guitar.png)"></span>
        guitar
      </li>
      <li class="js-navigation-item" data-value="gun">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/gun.png)"></span>
        gun
      </li>
      <li class="js-navigation-item" data-value="haircut">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/haircut.png)"></span>
        haircut
      </li>
      <li class="js-navigation-item" data-value="hamburger">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hamburger.png)"></span>
        hamburger
      </li>
      <li class="js-navigation-item" data-value="hammer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hammer.png)"></span>
        hammer
      </li>
      <li class="js-navigation-item" data-value="hamster">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hamster.png)"></span>
        hamster
      </li>
      <li class="js-navigation-item" data-value="hand">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hand.png)"></span>
        hand
      </li>
      <li class="js-navigation-item" data-value="handbag">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/handbag.png)"></span>
        handbag
      </li>
      <li class="js-navigation-item" data-value="hankey">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hankey.png)"></span>
        hankey
      </li>
      <li class="js-navigation-item" data-value="hash">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hash.png)"></span>
        hash
      </li>
      <li class="js-navigation-item" data-value="hatched_chick">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hatched_chick.png)"></span>
        hatched_chick
      </li>
      <li class="js-navigation-item" data-value="hatching_chick">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hatching_chick.png)"></span>
        hatching_chick
      </li>
      <li class="js-navigation-item" data-value="headphones">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/headphones.png)"></span>
        headphones
      </li>
      <li class="js-navigation-item" data-value="hear_no_evil">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hear_no_evil.png)"></span>
        hear_no_evil
      </li>
      <li class="js-navigation-item" data-value="heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heart.png)"></span>
        heart
      </li>
      <li class="js-navigation-item" data-value="heart_decoration">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heart_decoration.png)"></span>
        heart_decoration
      </li>
      <li class="js-navigation-item" data-value="heart_eyes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heart_eyes.png)"></span>
        heart_eyes
      </li>
      <li class="js-navigation-item" data-value="heart_eyes_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heart_eyes_cat.png)"></span>
        heart_eyes_cat
      </li>
      <li class="js-navigation-item" data-value="heartbeat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heartbeat.png)"></span>
        heartbeat
      </li>
      <li class="js-navigation-item" data-value="heartpulse">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heartpulse.png)"></span>
        heartpulse
      </li>
      <li class="js-navigation-item" data-value="hearts">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hearts.png)"></span>
        hearts
      </li>
      <li class="js-navigation-item" data-value="heavy_check_mark">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heavy_check_mark.png)"></span>
        heavy_check_mark
      </li>
      <li class="js-navigation-item" data-value="heavy_division_sign">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heavy_division_sign.png)"></span>
        heavy_division_sign
      </li>
      <li class="js-navigation-item" data-value="heavy_dollar_sign">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heavy_dollar_sign.png)"></span>
        heavy_dollar_sign
      </li>
      <li class="js-navigation-item" data-value="heavy_exclamation_mark">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heavy_exclamation_mark.png)"></span>
        heavy_exclamation_mark
      </li>
      <li class="js-navigation-item" data-value="heavy_minus_sign">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heavy_minus_sign.png)"></span>
        heavy_minus_sign
      </li>
      <li class="js-navigation-item" data-value="heavy_multiplication_x">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heavy_multiplication_x.png)"></span>
        heavy_multiplication_x
      </li>
      <li class="js-navigation-item" data-value="heavy_plus_sign">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/heavy_plus_sign.png)"></span>
        heavy_plus_sign
      </li>
      <li class="js-navigation-item" data-value="helicopter">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/helicopter.png)"></span>
        helicopter
      </li>
      <li class="js-navigation-item" data-value="herb">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/herb.png)"></span>
        herb
      </li>
      <li class="js-navigation-item" data-value="hibiscus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hibiscus.png)"></span>
        hibiscus
      </li>
      <li class="js-navigation-item" data-value="high_brightness">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/high_brightness.png)"></span>
        high_brightness
      </li>
      <li class="js-navigation-item" data-value="high_heel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/high_heel.png)"></span>
        high_heel
      </li>
      <li class="js-navigation-item" data-value="hocho">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hocho.png)"></span>
        hocho
      </li>
      <li class="js-navigation-item" data-value="honey_pot">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/honey_pot.png)"></span>
        honey_pot
      </li>
      <li class="js-navigation-item" data-value="honeybee">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/honeybee.png)"></span>
        honeybee
      </li>
      <li class="js-navigation-item" data-value="horse">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/horse.png)"></span>
        horse
      </li>
      <li class="js-navigation-item" data-value="horse_racing">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/horse_racing.png)"></span>
        horse_racing
      </li>
      <li class="js-navigation-item" data-value="hospital">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hospital.png)"></span>
        hospital
      </li>
      <li class="js-navigation-item" data-value="hotel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hotel.png)"></span>
        hotel
      </li>
      <li class="js-navigation-item" data-value="hotsprings">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hotsprings.png)"></span>
        hotsprings
      </li>
      <li class="js-navigation-item" data-value="hourglass">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hourglass.png)"></span>
        hourglass
      </li>
      <li class="js-navigation-item" data-value="hourglass_flowing_sand">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hourglass_flowing_sand.png)"></span>
        hourglass_flowing_sand
      </li>
      <li class="js-navigation-item" data-value="house">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/house.png)"></span>
        house
      </li>
      <li class="js-navigation-item" data-value="house_with_garden">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/house_with_garden.png)"></span>
        house_with_garden
      </li>
      <li class="js-navigation-item" data-value="hurtrealbad">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hurtrealbad.png)"></span>
        hurtrealbad
      </li>
      <li class="js-navigation-item" data-value="hushed">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/hushed.png)"></span>
        hushed
      </li>
      <li class="js-navigation-item" data-value="ice_cream">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ice_cream.png)"></span>
        ice_cream
      </li>
      <li class="js-navigation-item" data-value="icecream">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/icecream.png)"></span>
        icecream
      </li>
      <li class="js-navigation-item" data-value="id">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/id.png)"></span>
        id
      </li>
      <li class="js-navigation-item" data-value="ideograph_advantage">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ideograph_advantage.png)"></span>
        ideograph_advantage
      </li>
      <li class="js-navigation-item" data-value="imp">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/imp.png)"></span>
        imp
      </li>
      <li class="js-navigation-item" data-value="inbox_tray">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/inbox_tray.png)"></span>
        inbox_tray
      </li>
      <li class="js-navigation-item" data-value="incoming_envelope">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/incoming_envelope.png)"></span>
        incoming_envelope
      </li>
      <li class="js-navigation-item" data-value="information_desk_person">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/information_desk_person.png)"></span>
        information_desk_person
      </li>
      <li class="js-navigation-item" data-value="information_source">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/information_source.png)"></span>
        information_source
      </li>
      <li class="js-navigation-item" data-value="innocent">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/innocent.png)"></span>
        innocent
      </li>
      <li class="js-navigation-item" data-value="interrobang">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/interrobang.png)"></span>
        interrobang
      </li>
      <li class="js-navigation-item" data-value="iphone">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/iphone.png)"></span>
        iphone
      </li>
      <li class="js-navigation-item" data-value="it">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/it.png)"></span>
        it
      </li>
      <li class="js-navigation-item" data-value="izakaya_lantern">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/izakaya_lantern.png)"></span>
        izakaya_lantern
      </li>
      <li class="js-navigation-item" data-value="jack_o_lantern">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/jack_o_lantern.png)"></span>
        jack_o_lantern
      </li>
      <li class="js-navigation-item" data-value="japan">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/japan.png)"></span>
        japan
      </li>
      <li class="js-navigation-item" data-value="japanese_castle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/japanese_castle.png)"></span>
        japanese_castle
      </li>
      <li class="js-navigation-item" data-value="japanese_goblin">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/japanese_goblin.png)"></span>
        japanese_goblin
      </li>
      <li class="js-navigation-item" data-value="japanese_ogre">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/japanese_ogre.png)"></span>
        japanese_ogre
      </li>
      <li class="js-navigation-item" data-value="jeans">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/jeans.png)"></span>
        jeans
      </li>
      <li class="js-navigation-item" data-value="joy">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/joy.png)"></span>
        joy
      </li>
      <li class="js-navigation-item" data-value="joy_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/joy_cat.png)"></span>
        joy_cat
      </li>
      <li class="js-navigation-item" data-value="jp">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/jp.png)"></span>
        jp
      </li>
      <li class="js-navigation-item" data-value="key">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/key.png)"></span>
        key
      </li>
      <li class="js-navigation-item" data-value="keycap_ten">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/keycap_ten.png)"></span>
        keycap_ten
      </li>
      <li class="js-navigation-item" data-value="kimono">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kimono.png)"></span>
        kimono
      </li>
      <li class="js-navigation-item" data-value="kiss">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kiss.png)"></span>
        kiss
      </li>
      <li class="js-navigation-item" data-value="kissing">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kissing.png)"></span>
        kissing
      </li>
      <li class="js-navigation-item" data-value="kissing_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kissing_cat.png)"></span>
        kissing_cat
      </li>
      <li class="js-navigation-item" data-value="kissing_closed_eyes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kissing_closed_eyes.png)"></span>
        kissing_closed_eyes
      </li>
      <li class="js-navigation-item" data-value="kissing_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kissing_heart.png)"></span>
        kissing_heart
      </li>
      <li class="js-navigation-item" data-value="kissing_smiling_eyes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kissing_smiling_eyes.png)"></span>
        kissing_smiling_eyes
      </li>
      <li class="js-navigation-item" data-value="koala">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/koala.png)"></span>
        koala
      </li>
      <li class="js-navigation-item" data-value="koko">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/koko.png)"></span>
        koko
      </li>
      <li class="js-navigation-item" data-value="kr">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/kr.png)"></span>
        kr
      </li>
      <li class="js-navigation-item" data-value="lantern">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/lantern.png)"></span>
        lantern
      </li>
      <li class="js-navigation-item" data-value="large_blue_circle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/large_blue_circle.png)"></span>
        large_blue_circle
      </li>
      <li class="js-navigation-item" data-value="large_blue_diamond">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/large_blue_diamond.png)"></span>
        large_blue_diamond
      </li>
      <li class="js-navigation-item" data-value="large_orange_diamond">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/large_orange_diamond.png)"></span>
        large_orange_diamond
      </li>
      <li class="js-navigation-item" data-value="last_quarter_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/last_quarter_moon.png)"></span>
        last_quarter_moon
      </li>
      <li class="js-navigation-item" data-value="last_quarter_moon_with_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/last_quarter_moon_with_face.png)"></span>
        last_quarter_moon_with_face
      </li>
      <li class="js-navigation-item" data-value="laughing">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/laughing.png)"></span>
        laughing
      </li>
      <li class="js-navigation-item" data-value="leaves">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/leaves.png)"></span>
        leaves
      </li>
      <li class="js-navigation-item" data-value="ledger">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ledger.png)"></span>
        ledger
      </li>
      <li class="js-navigation-item" data-value="left_luggage">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/left_luggage.png)"></span>
        left_luggage
      </li>
      <li class="js-navigation-item" data-value="left_right_arrow">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/left_right_arrow.png)"></span>
        left_right_arrow
      </li>
      <li class="js-navigation-item" data-value="leftwards_arrow_with_hook">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/leftwards_arrow_with_hook.png)"></span>
        leftwards_arrow_with_hook
      </li>
      <li class="js-navigation-item" data-value="lemon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/lemon.png)"></span>
        lemon
      </li>
      <li class="js-navigation-item" data-value="leo">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/leo.png)"></span>
        leo
      </li>
      <li class="js-navigation-item" data-value="leopard">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/leopard.png)"></span>
        leopard
      </li>
      <li class="js-navigation-item" data-value="libra">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/libra.png)"></span>
        libra
      </li>
      <li class="js-navigation-item" data-value="light_rail">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/light_rail.png)"></span>
        light_rail
      </li>
      <li class="js-navigation-item" data-value="link">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/link.png)"></span>
        link
      </li>
      <li class="js-navigation-item" data-value="lips">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/lips.png)"></span>
        lips
      </li>
      <li class="js-navigation-item" data-value="lipstick">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/lipstick.png)"></span>
        lipstick
      </li>
      <li class="js-navigation-item" data-value="lock">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/lock.png)"></span>
        lock
      </li>
      <li class="js-navigation-item" data-value="lock_with_ink_pen">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/lock_with_ink_pen.png)"></span>
        lock_with_ink_pen
      </li>
      <li class="js-navigation-item" data-value="lollipop">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/lollipop.png)"></span>
        lollipop
      </li>
      <li class="js-navigation-item" data-value="loop">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/loop.png)"></span>
        loop
      </li>
      <li class="js-navigation-item" data-value="loudspeaker">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/loudspeaker.png)"></span>
        loudspeaker
      </li>
      <li class="js-navigation-item" data-value="love_hotel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/love_hotel.png)"></span>
        love_hotel
      </li>
      <li class="js-navigation-item" data-value="love_letter">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/love_letter.png)"></span>
        love_letter
      </li>
      <li class="js-navigation-item" data-value="low_brightness">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/low_brightness.png)"></span>
        low_brightness
      </li>
      <li class="js-navigation-item" data-value="m">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/m.png)"></span>
        m
      </li>
      <li class="js-navigation-item" data-value="mag">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mag.png)"></span>
        mag
      </li>
      <li class="js-navigation-item" data-value="mag_right">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mag_right.png)"></span>
        mag_right
      </li>
      <li class="js-navigation-item" data-value="mahjong">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mahjong.png)"></span>
        mahjong
      </li>
      <li class="js-navigation-item" data-value="mailbox">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mailbox.png)"></span>
        mailbox
      </li>
      <li class="js-navigation-item" data-value="mailbox_closed">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mailbox_closed.png)"></span>
        mailbox_closed
      </li>
      <li class="js-navigation-item" data-value="mailbox_with_mail">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mailbox_with_mail.png)"></span>
        mailbox_with_mail
      </li>
      <li class="js-navigation-item" data-value="mailbox_with_no_mail">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mailbox_with_no_mail.png)"></span>
        mailbox_with_no_mail
      </li>
      <li class="js-navigation-item" data-value="man">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/man.png)"></span>
        man
      </li>
      <li class="js-navigation-item" data-value="man_with_gua_pi_mao">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/man_with_gua_pi_mao.png)"></span>
        man_with_gua_pi_mao
      </li>
      <li class="js-navigation-item" data-value="man_with_turban">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/man_with_turban.png)"></span>
        man_with_turban
      </li>
      <li class="js-navigation-item" data-value="mans_shoe">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mans_shoe.png)"></span>
        mans_shoe
      </li>
      <li class="js-navigation-item" data-value="maple_leaf">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/maple_leaf.png)"></span>
        maple_leaf
      </li>
      <li class="js-navigation-item" data-value="mask">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mask.png)"></span>
        mask
      </li>
      <li class="js-navigation-item" data-value="massage">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/massage.png)"></span>
        massage
      </li>
      <li class="js-navigation-item" data-value="meat_on_bone">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/meat_on_bone.png)"></span>
        meat_on_bone
      </li>
      <li class="js-navigation-item" data-value="mega">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mega.png)"></span>
        mega
      </li>
      <li class="js-navigation-item" data-value="melon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/melon.png)"></span>
        melon
      </li>
      <li class="js-navigation-item" data-value="memo">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/memo.png)"></span>
        memo
      </li>
      <li class="js-navigation-item" data-value="mens">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mens.png)"></span>
        mens
      </li>
      <li class="js-navigation-item" data-value="metal">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/metal.png)"></span>
        metal
      </li>
      <li class="js-navigation-item" data-value="metro">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/metro.png)"></span>
        metro
      </li>
      <li class="js-navigation-item" data-value="microphone">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/microphone.png)"></span>
        microphone
      </li>
      <li class="js-navigation-item" data-value="microscope">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/microscope.png)"></span>
        microscope
      </li>
      <li class="js-navigation-item" data-value="milky_way">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/milky_way.png)"></span>
        milky_way
      </li>
      <li class="js-navigation-item" data-value="minibus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/minibus.png)"></span>
        minibus
      </li>
      <li class="js-navigation-item" data-value="minidisc">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/minidisc.png)"></span>
        minidisc
      </li>
      <li class="js-navigation-item" data-value="mobile_phone_off">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mobile_phone_off.png)"></span>
        mobile_phone_off
      </li>
      <li class="js-navigation-item" data-value="money_with_wings">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/money_with_wings.png)"></span>
        money_with_wings
      </li>
      <li class="js-navigation-item" data-value="moneybag">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/moneybag.png)"></span>
        moneybag
      </li>
      <li class="js-navigation-item" data-value="monkey">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/monkey.png)"></span>
        monkey
      </li>
      <li class="js-navigation-item" data-value="monkey_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/monkey_face.png)"></span>
        monkey_face
      </li>
      <li class="js-navigation-item" data-value="monorail">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/monorail.png)"></span>
        monorail
      </li>
      <li class="js-navigation-item" data-value="moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/moon.png)"></span>
        moon
      </li>
      <li class="js-navigation-item" data-value="mortar_board">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mortar_board.png)"></span>
        mortar_board
      </li>
      <li class="js-navigation-item" data-value="mount_fuji">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mount_fuji.png)"></span>
        mount_fuji
      </li>
      <li class="js-navigation-item" data-value="mountain_bicyclist">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mountain_bicyclist.png)"></span>
        mountain_bicyclist
      </li>
      <li class="js-navigation-item" data-value="mountain_cableway">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mountain_cableway.png)"></span>
        mountain_cableway
      </li>
      <li class="js-navigation-item" data-value="mountain_railway">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mountain_railway.png)"></span>
        mountain_railway
      </li>
      <li class="js-navigation-item" data-value="mouse">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mouse.png)"></span>
        mouse
      </li>
      <li class="js-navigation-item" data-value="mouse2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mouse2.png)"></span>
        mouse2
      </li>
      <li class="js-navigation-item" data-value="movie_camera">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/movie_camera.png)"></span>
        movie_camera
      </li>
      <li class="js-navigation-item" data-value="moyai">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/moyai.png)"></span>
        moyai
      </li>
      <li class="js-navigation-item" data-value="muscle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/muscle.png)"></span>
        muscle
      </li>
      <li class="js-navigation-item" data-value="mushroom">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mushroom.png)"></span>
        mushroom
      </li>
      <li class="js-navigation-item" data-value="musical_keyboard">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/musical_keyboard.png)"></span>
        musical_keyboard
      </li>
      <li class="js-navigation-item" data-value="musical_note">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/musical_note.png)"></span>
        musical_note
      </li>
      <li class="js-navigation-item" data-value="musical_score">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/musical_score.png)"></span>
        musical_score
      </li>
      <li class="js-navigation-item" data-value="mute">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/mute.png)"></span>
        mute
      </li>
      <li class="js-navigation-item" data-value="nail_care">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/nail_care.png)"></span>
        nail_care
      </li>
      <li class="js-navigation-item" data-value="name_badge">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/name_badge.png)"></span>
        name_badge
      </li>
      <li class="js-navigation-item" data-value="neckbeard">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/neckbeard.png)"></span>
        neckbeard
      </li>
      <li class="js-navigation-item" data-value="necktie">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/necktie.png)"></span>
        necktie
      </li>
      <li class="js-navigation-item" data-value="negative_squared_cross_mark">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/negative_squared_cross_mark.png)"></span>
        negative_squared_cross_mark
      </li>
      <li class="js-navigation-item" data-value="neutral_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/neutral_face.png)"></span>
        neutral_face
      </li>
      <li class="js-navigation-item" data-value="new">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/new.png)"></span>
        new
      </li>
      <li class="js-navigation-item" data-value="new_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/new_moon.png)"></span>
        new_moon
      </li>
      <li class="js-navigation-item" data-value="new_moon_with_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/new_moon_with_face.png)"></span>
        new_moon_with_face
      </li>
      <li class="js-navigation-item" data-value="newspaper">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/newspaper.png)"></span>
        newspaper
      </li>
      <li class="js-navigation-item" data-value="ng">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ng.png)"></span>
        ng
      </li>
      <li class="js-navigation-item" data-value="nine">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/nine.png)"></span>
        nine
      </li>
      <li class="js-navigation-item" data-value="no_bell">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_bell.png)"></span>
        no_bell
      </li>
      <li class="js-navigation-item" data-value="no_bicycles">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_bicycles.png)"></span>
        no_bicycles
      </li>
      <li class="js-navigation-item" data-value="no_entry">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_entry.png)"></span>
        no_entry
      </li>
      <li class="js-navigation-item" data-value="no_entry_sign">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_entry_sign.png)"></span>
        no_entry_sign
      </li>
      <li class="js-navigation-item" data-value="no_good">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_good.png)"></span>
        no_good
      </li>
      <li class="js-navigation-item" data-value="no_mobile_phones">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_mobile_phones.png)"></span>
        no_mobile_phones
      </li>
      <li class="js-navigation-item" data-value="no_mouth">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_mouth.png)"></span>
        no_mouth
      </li>
      <li class="js-navigation-item" data-value="no_pedestrians">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_pedestrians.png)"></span>
        no_pedestrians
      </li>
      <li class="js-navigation-item" data-value="no_smoking">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/no_smoking.png)"></span>
        no_smoking
      </li>
      <li class="js-navigation-item" data-value="non-potable_water">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/non-potable_water.png)"></span>
        non-potable_water
      </li>
      <li class="js-navigation-item" data-value="nose">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/nose.png)"></span>
        nose
      </li>
      <li class="js-navigation-item" data-value="notebook">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/notebook.png)"></span>
        notebook
      </li>
      <li class="js-navigation-item" data-value="notebook_with_decorative_cover">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/notebook_with_decorative_cover.png)"></span>
        notebook_with_decorative_cover
      </li>
      <li class="js-navigation-item" data-value="notes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/notes.png)"></span>
        notes
      </li>
      <li class="js-navigation-item" data-value="nut_and_bolt">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/nut_and_bolt.png)"></span>
        nut_and_bolt
      </li>
      <li class="js-navigation-item" data-value="o">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/o.png)"></span>
        o
      </li>
      <li class="js-navigation-item" data-value="o2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/o2.png)"></span>
        o2
      </li>
      <li class="js-navigation-item" data-value="ocean">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ocean.png)"></span>
        ocean
      </li>
      <li class="js-navigation-item" data-value="octocat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/octocat.png)"></span>
        octocat
      </li>
      <li class="js-navigation-item" data-value="octopus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/octopus.png)"></span>
        octopus
      </li>
      <li class="js-navigation-item" data-value="oden">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/oden.png)"></span>
        oden
      </li>
      <li class="js-navigation-item" data-value="office">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/office.png)"></span>
        office
      </li>
      <li class="js-navigation-item" data-value="ok">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ok.png)"></span>
        ok
      </li>
      <li class="js-navigation-item" data-value="ok_hand">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ok_hand.png)"></span>
        ok_hand
      </li>
      <li class="js-navigation-item" data-value="ok_woman">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ok_woman.png)"></span>
        ok_woman
      </li>
      <li class="js-navigation-item" data-value="older_man">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/older_man.png)"></span>
        older_man
      </li>
      <li class="js-navigation-item" data-value="older_woman">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/older_woman.png)"></span>
        older_woman
      </li>
      <li class="js-navigation-item" data-value="on">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/on.png)"></span>
        on
      </li>
      <li class="js-navigation-item" data-value="oncoming_automobile">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/oncoming_automobile.png)"></span>
        oncoming_automobile
      </li>
      <li class="js-navigation-item" data-value="oncoming_bus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/oncoming_bus.png)"></span>
        oncoming_bus
      </li>
      <li class="js-navigation-item" data-value="oncoming_police_car">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/oncoming_police_car.png)"></span>
        oncoming_police_car
      </li>
      <li class="js-navigation-item" data-value="oncoming_taxi">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/oncoming_taxi.png)"></span>
        oncoming_taxi
      </li>
      <li class="js-navigation-item" data-value="one">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/one.png)"></span>
        one
      </li>
      <li class="js-navigation-item" data-value="open_book">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/open_book.png)"></span>
        open_book
      </li>
      <li class="js-navigation-item" data-value="open_file_folder">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/open_file_folder.png)"></span>
        open_file_folder
      </li>
      <li class="js-navigation-item" data-value="open_hands">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/open_hands.png)"></span>
        open_hands
      </li>
      <li class="js-navigation-item" data-value="open_mouth">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/open_mouth.png)"></span>
        open_mouth
      </li>
      <li class="js-navigation-item" data-value="ophiuchus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ophiuchus.png)"></span>
        ophiuchus
      </li>
      <li class="js-navigation-item" data-value="orange_book">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/orange_book.png)"></span>
        orange_book
      </li>
      <li class="js-navigation-item" data-value="outbox_tray">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/outbox_tray.png)"></span>
        outbox_tray
      </li>
      <li class="js-navigation-item" data-value="ox">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ox.png)"></span>
        ox
      </li>
      <li class="js-navigation-item" data-value="package">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/package.png)"></span>
        package
      </li>
      <li class="js-navigation-item" data-value="page_facing_up">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/page_facing_up.png)"></span>
        page_facing_up
      </li>
      <li class="js-navigation-item" data-value="page_with_curl">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/page_with_curl.png)"></span>
        page_with_curl
      </li>
      <li class="js-navigation-item" data-value="pager">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pager.png)"></span>
        pager
      </li>
      <li class="js-navigation-item" data-value="palm_tree">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/palm_tree.png)"></span>
        palm_tree
      </li>
      <li class="js-navigation-item" data-value="panda_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/panda_face.png)"></span>
        panda_face
      </li>
      <li class="js-navigation-item" data-value="paperclip">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/paperclip.png)"></span>
        paperclip
      </li>
      <li class="js-navigation-item" data-value="parking">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/parking.png)"></span>
        parking
      </li>
      <li class="js-navigation-item" data-value="part_alternation_mark">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/part_alternation_mark.png)"></span>
        part_alternation_mark
      </li>
      <li class="js-navigation-item" data-value="partly_sunny">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/partly_sunny.png)"></span>
        partly_sunny
      </li>
      <li class="js-navigation-item" data-value="passport_control">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/passport_control.png)"></span>
        passport_control
      </li>
      <li class="js-navigation-item" data-value="paw_prints">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/paw_prints.png)"></span>
        paw_prints
      </li>
      <li class="js-navigation-item" data-value="peach">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/peach.png)"></span>
        peach
      </li>
      <li class="js-navigation-item" data-value="pear">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pear.png)"></span>
        pear
      </li>
      <li class="js-navigation-item" data-value="pencil">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pencil.png)"></span>
        pencil
      </li>
      <li class="js-navigation-item" data-value="pencil2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pencil2.png)"></span>
        pencil2
      </li>
      <li class="js-navigation-item" data-value="penguin">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/penguin.png)"></span>
        penguin
      </li>
      <li class="js-navigation-item" data-value="pensive">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pensive.png)"></span>
        pensive
      </li>
      <li class="js-navigation-item" data-value="performing_arts">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/performing_arts.png)"></span>
        performing_arts
      </li>
      <li class="js-navigation-item" data-value="persevere">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/persevere.png)"></span>
        persevere
      </li>
      <li class="js-navigation-item" data-value="person_frowning">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/person_frowning.png)"></span>
        person_frowning
      </li>
      <li class="js-navigation-item" data-value="person_with_blond_hair">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/person_with_blond_hair.png)"></span>
        person_with_blond_hair
      </li>
      <li class="js-navigation-item" data-value="person_with_pouting_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/person_with_pouting_face.png)"></span>
        person_with_pouting_face
      </li>
      <li class="js-navigation-item" data-value="phone">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/phone.png)"></span>
        phone
      </li>
      <li class="js-navigation-item" data-value="pig">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pig.png)"></span>
        pig
      </li>
      <li class="js-navigation-item" data-value="pig2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pig2.png)"></span>
        pig2
      </li>
      <li class="js-navigation-item" data-value="pig_nose">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pig_nose.png)"></span>
        pig_nose
      </li>
      <li class="js-navigation-item" data-value="pill">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pill.png)"></span>
        pill
      </li>
      <li class="js-navigation-item" data-value="pineapple">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pineapple.png)"></span>
        pineapple
      </li>
      <li class="js-navigation-item" data-value="pisces">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pisces.png)"></span>
        pisces
      </li>
      <li class="js-navigation-item" data-value="pizza">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pizza.png)"></span>
        pizza
      </li>
      <li class="js-navigation-item" data-value="point_down">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/point_down.png)"></span>
        point_down
      </li>
      <li class="js-navigation-item" data-value="point_left">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/point_left.png)"></span>
        point_left
      </li>
      <li class="js-navigation-item" data-value="point_right">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/point_right.png)"></span>
        point_right
      </li>
      <li class="js-navigation-item" data-value="point_up">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/point_up.png)"></span>
        point_up
      </li>
      <li class="js-navigation-item" data-value="point_up_2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/point_up_2.png)"></span>
        point_up_2
      </li>
      <li class="js-navigation-item" data-value="police_car">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/police_car.png)"></span>
        police_car
      </li>
      <li class="js-navigation-item" data-value="poodle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/poodle.png)"></span>
        poodle
      </li>
      <li class="js-navigation-item" data-value="poop">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/poop.png)"></span>
        poop
      </li>
      <li class="js-navigation-item" data-value="post_office">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/post_office.png)"></span>
        post_office
      </li>
      <li class="js-navigation-item" data-value="postal_horn">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/postal_horn.png)"></span>
        postal_horn
      </li>
      <li class="js-navigation-item" data-value="postbox">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/postbox.png)"></span>
        postbox
      </li>
      <li class="js-navigation-item" data-value="potable_water">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/potable_water.png)"></span>
        potable_water
      </li>
      <li class="js-navigation-item" data-value="pouch">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pouch.png)"></span>
        pouch
      </li>
      <li class="js-navigation-item" data-value="poultry_leg">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/poultry_leg.png)"></span>
        poultry_leg
      </li>
      <li class="js-navigation-item" data-value="pound">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pound.png)"></span>
        pound
      </li>
      <li class="js-navigation-item" data-value="pouting_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pouting_cat.png)"></span>
        pouting_cat
      </li>
      <li class="js-navigation-item" data-value="pray">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pray.png)"></span>
        pray
      </li>
      <li class="js-navigation-item" data-value="princess">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/princess.png)"></span>
        princess
      </li>
      <li class="js-navigation-item" data-value="punch">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/punch.png)"></span>
        punch
      </li>
      <li class="js-navigation-item" data-value="purple_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/purple_heart.png)"></span>
        purple_heart
      </li>
      <li class="js-navigation-item" data-value="purse">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/purse.png)"></span>
        purse
      </li>
      <li class="js-navigation-item" data-value="pushpin">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/pushpin.png)"></span>
        pushpin
      </li>
      <li class="js-navigation-item" data-value="put_litter_in_its_place">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/put_litter_in_its_place.png)"></span>
        put_litter_in_its_place
      </li>
      <li class="js-navigation-item" data-value="question">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/question.png)"></span>
        question
      </li>
      <li class="js-navigation-item" data-value="rabbit">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rabbit.png)"></span>
        rabbit
      </li>
      <li class="js-navigation-item" data-value="rabbit2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rabbit2.png)"></span>
        rabbit2
      </li>
      <li class="js-navigation-item" data-value="racehorse">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/racehorse.png)"></span>
        racehorse
      </li>
      <li class="js-navigation-item" data-value="radio">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/radio.png)"></span>
        radio
      </li>
      <li class="js-navigation-item" data-value="radio_button">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/radio_button.png)"></span>
        radio_button
      </li>
      <li class="js-navigation-item" data-value="rage">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rage.png)"></span>
        rage
      </li>
      <li class="js-navigation-item" data-value="rage1">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rage1.png)"></span>
        rage1
      </li>
      <li class="js-navigation-item" data-value="rage2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rage2.png)"></span>
        rage2
      </li>
      <li class="js-navigation-item" data-value="rage3">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rage3.png)"></span>
        rage3
      </li>
      <li class="js-navigation-item" data-value="rage4">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rage4.png)"></span>
        rage4
      </li>
      <li class="js-navigation-item" data-value="railway_car">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/railway_car.png)"></span>
        railway_car
      </li>
      <li class="js-navigation-item" data-value="rainbow">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rainbow.png)"></span>
        rainbow
      </li>
      <li class="js-navigation-item" data-value="raised_hand">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/raised_hand.png)"></span>
        raised_hand
      </li>
      <li class="js-navigation-item" data-value="raised_hands">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/raised_hands.png)"></span>
        raised_hands
      </li>
      <li class="js-navigation-item" data-value="raising_hand">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/raising_hand.png)"></span>
        raising_hand
      </li>
      <li class="js-navigation-item" data-value="ram">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ram.png)"></span>
        ram
      </li>
      <li class="js-navigation-item" data-value="ramen">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ramen.png)"></span>
        ramen
      </li>
      <li class="js-navigation-item" data-value="rat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rat.png)"></span>
        rat
      </li>
      <li class="js-navigation-item" data-value="recycle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/recycle.png)"></span>
        recycle
      </li>
      <li class="js-navigation-item" data-value="red_car">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/red_car.png)"></span>
        red_car
      </li>
      <li class="js-navigation-item" data-value="red_circle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/red_circle.png)"></span>
        red_circle
      </li>
      <li class="js-navigation-item" data-value="registered">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/registered.png)"></span>
        registered
      </li>
      <li class="js-navigation-item" data-value="relaxed">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/relaxed.png)"></span>
        relaxed
      </li>
      <li class="js-navigation-item" data-value="relieved">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/relieved.png)"></span>
        relieved
      </li>
      <li class="js-navigation-item" data-value="repeat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/repeat.png)"></span>
        repeat
      </li>
      <li class="js-navigation-item" data-value="repeat_one">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/repeat_one.png)"></span>
        repeat_one
      </li>
      <li class="js-navigation-item" data-value="restroom">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/restroom.png)"></span>
        restroom
      </li>
      <li class="js-navigation-item" data-value="revolving_hearts">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/revolving_hearts.png)"></span>
        revolving_hearts
      </li>
      <li class="js-navigation-item" data-value="rewind">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rewind.png)"></span>
        rewind
      </li>
      <li class="js-navigation-item" data-value="ribbon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ribbon.png)"></span>
        ribbon
      </li>
      <li class="js-navigation-item" data-value="rice">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rice.png)"></span>
        rice
      </li>
      <li class="js-navigation-item" data-value="rice_ball">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rice_ball.png)"></span>
        rice_ball
      </li>
      <li class="js-navigation-item" data-value="rice_cracker">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rice_cracker.png)"></span>
        rice_cracker
      </li>
      <li class="js-navigation-item" data-value="rice_scene">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rice_scene.png)"></span>
        rice_scene
      </li>
      <li class="js-navigation-item" data-value="ring">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ring.png)"></span>
        ring
      </li>
      <li class="js-navigation-item" data-value="rocket">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rocket.png)"></span>
        rocket
      </li>
      <li class="js-navigation-item" data-value="roller_coaster">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/roller_coaster.png)"></span>
        roller_coaster
      </li>
      <li class="js-navigation-item" data-value="rooster">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rooster.png)"></span>
        rooster
      </li>
      <li class="js-navigation-item" data-value="rose">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rose.png)"></span>
        rose
      </li>
      <li class="js-navigation-item" data-value="rotating_light">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rotating_light.png)"></span>
        rotating_light
      </li>
      <li class="js-navigation-item" data-value="round_pushpin">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/round_pushpin.png)"></span>
        round_pushpin
      </li>
      <li class="js-navigation-item" data-value="rowboat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rowboat.png)"></span>
        rowboat
      </li>
      <li class="js-navigation-item" data-value="ru">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ru.png)"></span>
        ru
      </li>
      <li class="js-navigation-item" data-value="rugby_football">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/rugby_football.png)"></span>
        rugby_football
      </li>
      <li class="js-navigation-item" data-value="runner">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/runner.png)"></span>
        runner
      </li>
      <li class="js-navigation-item" data-value="running">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/running.png)"></span>
        running
      </li>
      <li class="js-navigation-item" data-value="running_shirt_with_sash">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/running_shirt_with_sash.png)"></span>
        running_shirt_with_sash
      </li>
      <li class="js-navigation-item" data-value="sa">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sa.png)"></span>
        sa
      </li>
      <li class="js-navigation-item" data-value="sagittarius">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sagittarius.png)"></span>
        sagittarius
      </li>
      <li class="js-navigation-item" data-value="sailboat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sailboat.png)"></span>
        sailboat
      </li>
      <li class="js-navigation-item" data-value="sake">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sake.png)"></span>
        sake
      </li>
      <li class="js-navigation-item" data-value="sandal">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sandal.png)"></span>
        sandal
      </li>
      <li class="js-navigation-item" data-value="santa">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/santa.png)"></span>
        santa
      </li>
      <li class="js-navigation-item" data-value="satellite">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/satellite.png)"></span>
        satellite
      </li>
      <li class="js-navigation-item" data-value="satisfied">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/satisfied.png)"></span>
        satisfied
      </li>
      <li class="js-navigation-item" data-value="saxophone">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/saxophone.png)"></span>
        saxophone
      </li>
      <li class="js-navigation-item" data-value="school">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/school.png)"></span>
        school
      </li>
      <li class="js-navigation-item" data-value="school_satchel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/school_satchel.png)"></span>
        school_satchel
      </li>
      <li class="js-navigation-item" data-value="scissors">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/scissors.png)"></span>
        scissors
      </li>
      <li class="js-navigation-item" data-value="scorpius">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/scorpius.png)"></span>
        scorpius
      </li>
      <li class="js-navigation-item" data-value="scream">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/scream.png)"></span>
        scream
      </li>
      <li class="js-navigation-item" data-value="scream_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/scream_cat.png)"></span>
        scream_cat
      </li>
      <li class="js-navigation-item" data-value="scroll">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/scroll.png)"></span>
        scroll
      </li>
      <li class="js-navigation-item" data-value="seat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/seat.png)"></span>
        seat
      </li>
      <li class="js-navigation-item" data-value="secret">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/secret.png)"></span>
        secret
      </li>
      <li class="js-navigation-item" data-value="see_no_evil">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/see_no_evil.png)"></span>
        see_no_evil
      </li>
      <li class="js-navigation-item" data-value="seedling">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/seedling.png)"></span>
        seedling
      </li>
      <li class="js-navigation-item" data-value="seven">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/seven.png)"></span>
        seven
      </li>
      <li class="js-navigation-item" data-value="shaved_ice">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/shaved_ice.png)"></span>
        shaved_ice
      </li>
      <li class="js-navigation-item" data-value="sheep">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sheep.png)"></span>
        sheep
      </li>
      <li class="js-navigation-item" data-value="shell">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/shell.png)"></span>
        shell
      </li>
      <li class="js-navigation-item" data-value="ship">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ship.png)"></span>
        ship
      </li>
      <li class="js-navigation-item" data-value="shipit">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/shipit.png)"></span>
        shipit
      </li>
      <li class="js-navigation-item" data-value="shirt">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/shirt.png)"></span>
        shirt
      </li>
      <li class="js-navigation-item" data-value="shit">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/shit.png)"></span>
        shit
      </li>
      <li class="js-navigation-item" data-value="shoe">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/shoe.png)"></span>
        shoe
      </li>
      <li class="js-navigation-item" data-value="shower">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/shower.png)"></span>
        shower
      </li>
      <li class="js-navigation-item" data-value="signal_strength">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/signal_strength.png)"></span>
        signal_strength
      </li>
      <li class="js-navigation-item" data-value="six">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/six.png)"></span>
        six
      </li>
      <li class="js-navigation-item" data-value="six_pointed_star">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/six_pointed_star.png)"></span>
        six_pointed_star
      </li>
      <li class="js-navigation-item" data-value="ski">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ski.png)"></span>
        ski
      </li>
      <li class="js-navigation-item" data-value="skull">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/skull.png)"></span>
        skull
      </li>
      <li class="js-navigation-item" data-value="sleeping">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sleeping.png)"></span>
        sleeping
      </li>
      <li class="js-navigation-item" data-value="sleepy">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sleepy.png)"></span>
        sleepy
      </li>
      <li class="js-navigation-item" data-value="slot_machine">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/slot_machine.png)"></span>
        slot_machine
      </li>
      <li class="js-navigation-item" data-value="small_blue_diamond">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/small_blue_diamond.png)"></span>
        small_blue_diamond
      </li>
      <li class="js-navigation-item" data-value="small_orange_diamond">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/small_orange_diamond.png)"></span>
        small_orange_diamond
      </li>
      <li class="js-navigation-item" data-value="small_red_triangle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/small_red_triangle.png)"></span>
        small_red_triangle
      </li>
      <li class="js-navigation-item" data-value="small_red_triangle_down">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/small_red_triangle_down.png)"></span>
        small_red_triangle_down
      </li>
      <li class="js-navigation-item" data-value="smile">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smile.png)"></span>
        smile
      </li>
      <li class="js-navigation-item" data-value="smile_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smile_cat.png)"></span>
        smile_cat
      </li>
      <li class="js-navigation-item" data-value="smiley">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smiley.png)"></span>
        smiley
      </li>
      <li class="js-navigation-item" data-value="smiley_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smiley_cat.png)"></span>
        smiley_cat
      </li>
      <li class="js-navigation-item" data-value="smiling_imp">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smiling_imp.png)"></span>
        smiling_imp
      </li>
      <li class="js-navigation-item" data-value="smirk">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smirk.png)"></span>
        smirk
      </li>
      <li class="js-navigation-item" data-value="smirk_cat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smirk_cat.png)"></span>
        smirk_cat
      </li>
      <li class="js-navigation-item" data-value="smoking">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/smoking.png)"></span>
        smoking
      </li>
      <li class="js-navigation-item" data-value="snail">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/snail.png)"></span>
        snail
      </li>
      <li class="js-navigation-item" data-value="snake">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/snake.png)"></span>
        snake
      </li>
      <li class="js-navigation-item" data-value="snowboarder">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/snowboarder.png)"></span>
        snowboarder
      </li>
      <li class="js-navigation-item" data-value="snowflake">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/snowflake.png)"></span>
        snowflake
      </li>
      <li class="js-navigation-item" data-value="snowman">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/snowman.png)"></span>
        snowman
      </li>
      <li class="js-navigation-item" data-value="sob">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sob.png)"></span>
        sob
      </li>
      <li class="js-navigation-item" data-value="soccer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/soccer.png)"></span>
        soccer
      </li>
      <li class="js-navigation-item" data-value="soon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/soon.png)"></span>
        soon
      </li>
      <li class="js-navigation-item" data-value="sos">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sos.png)"></span>
        sos
      </li>
      <li class="js-navigation-item" data-value="sound">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sound.png)"></span>
        sound
      </li>
      <li class="js-navigation-item" data-value="space_invader">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/space_invader.png)"></span>
        space_invader
      </li>
      <li class="js-navigation-item" data-value="spades">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/spades.png)"></span>
        spades
      </li>
      <li class="js-navigation-item" data-value="spaghetti">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/spaghetti.png)"></span>
        spaghetti
      </li>
      <li class="js-navigation-item" data-value="sparkle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sparkle.png)"></span>
        sparkle
      </li>
      <li class="js-navigation-item" data-value="sparkler">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sparkler.png)"></span>
        sparkler
      </li>
      <li class="js-navigation-item" data-value="sparkles">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sparkles.png)"></span>
        sparkles
      </li>
      <li class="js-navigation-item" data-value="sparkling_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sparkling_heart.png)"></span>
        sparkling_heart
      </li>
      <li class="js-navigation-item" data-value="speak_no_evil">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/speak_no_evil.png)"></span>
        speak_no_evil
      </li>
      <li class="js-navigation-item" data-value="speaker">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/speaker.png)"></span>
        speaker
      </li>
      <li class="js-navigation-item" data-value="speech_balloon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/speech_balloon.png)"></span>
        speech_balloon
      </li>
      <li class="js-navigation-item" data-value="speedboat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/speedboat.png)"></span>
        speedboat
      </li>
      <li class="js-navigation-item" data-value="squirrel">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/squirrel.png)"></span>
        squirrel
      </li>
      <li class="js-navigation-item" data-value="star">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/star.png)"></span>
        star
      </li>
      <li class="js-navigation-item" data-value="star2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/star2.png)"></span>
        star2
      </li>
      <li class="js-navigation-item" data-value="stars">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/stars.png)"></span>
        stars
      </li>
      <li class="js-navigation-item" data-value="station">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/station.png)"></span>
        station
      </li>
      <li class="js-navigation-item" data-value="statue_of_liberty">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/statue_of_liberty.png)"></span>
        statue_of_liberty
      </li>
      <li class="js-navigation-item" data-value="steam_locomotive">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/steam_locomotive.png)"></span>
        steam_locomotive
      </li>
      <li class="js-navigation-item" data-value="stew">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/stew.png)"></span>
        stew
      </li>
      <li class="js-navigation-item" data-value="straight_ruler">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/straight_ruler.png)"></span>
        straight_ruler
      </li>
      <li class="js-navigation-item" data-value="strawberry">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/strawberry.png)"></span>
        strawberry
      </li>
      <li class="js-navigation-item" data-value="stuck_out_tongue">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/stuck_out_tongue.png)"></span>
        stuck_out_tongue
      </li>
      <li class="js-navigation-item" data-value="stuck_out_tongue_closed_eyes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/stuck_out_tongue_closed_eyes.png)"></span>
        stuck_out_tongue_closed_eyes
      </li>
      <li class="js-navigation-item" data-value="stuck_out_tongue_winking_eye">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/stuck_out_tongue_winking_eye.png)"></span>
        stuck_out_tongue_winking_eye
      </li>
      <li class="js-navigation-item" data-value="sun_with_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sun_with_face.png)"></span>
        sun_with_face
      </li>
      <li class="js-navigation-item" data-value="sunflower">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sunflower.png)"></span>
        sunflower
      </li>
      <li class="js-navigation-item" data-value="sunglasses">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sunglasses.png)"></span>
        sunglasses
      </li>
      <li class="js-navigation-item" data-value="sunny">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sunny.png)"></span>
        sunny
      </li>
      <li class="js-navigation-item" data-value="sunrise">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sunrise.png)"></span>
        sunrise
      </li>
      <li class="js-navigation-item" data-value="sunrise_over_mountains">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sunrise_over_mountains.png)"></span>
        sunrise_over_mountains
      </li>
      <li class="js-navigation-item" data-value="surfer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/surfer.png)"></span>
        surfer
      </li>
      <li class="js-navigation-item" data-value="sushi">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sushi.png)"></span>
        sushi
      </li>
      <li class="js-navigation-item" data-value="suspect">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/suspect.png)"></span>
        suspect
      </li>
      <li class="js-navigation-item" data-value="suspension_railway">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/suspension_railway.png)"></span>
        suspension_railway
      </li>
      <li class="js-navigation-item" data-value="sweat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sweat.png)"></span>
        sweat
      </li>
      <li class="js-navigation-item" data-value="sweat_drops">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sweat_drops.png)"></span>
        sweat_drops
      </li>
      <li class="js-navigation-item" data-value="sweat_smile">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sweat_smile.png)"></span>
        sweat_smile
      </li>
      <li class="js-navigation-item" data-value="sweet_potato">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/sweet_potato.png)"></span>
        sweet_potato
      </li>
      <li class="js-navigation-item" data-value="swimmer">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/swimmer.png)"></span>
        swimmer
      </li>
      <li class="js-navigation-item" data-value="symbols">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/symbols.png)"></span>
        symbols
      </li>
      <li class="js-navigation-item" data-value="syringe">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/syringe.png)"></span>
        syringe
      </li>
      <li class="js-navigation-item" data-value="tada">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tada.png)"></span>
        tada
      </li>
      <li class="js-navigation-item" data-value="tanabata_tree">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tanabata_tree.png)"></span>
        tanabata_tree
      </li>
      <li class="js-navigation-item" data-value="tangerine">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tangerine.png)"></span>
        tangerine
      </li>
      <li class="js-navigation-item" data-value="taurus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/taurus.png)"></span>
        taurus
      </li>
      <li class="js-navigation-item" data-value="taxi">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/taxi.png)"></span>
        taxi
      </li>
      <li class="js-navigation-item" data-value="tea">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tea.png)"></span>
        tea
      </li>
      <li class="js-navigation-item" data-value="telephone">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/telephone.png)"></span>
        telephone
      </li>
      <li class="js-navigation-item" data-value="telephone_receiver">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/telephone_receiver.png)"></span>
        telephone_receiver
      </li>
      <li class="js-navigation-item" data-value="telescope">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/telescope.png)"></span>
        telescope
      </li>
      <li class="js-navigation-item" data-value="tennis">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tennis.png)"></span>
        tennis
      </li>
      <li class="js-navigation-item" data-value="tent">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tent.png)"></span>
        tent
      </li>
      <li class="js-navigation-item" data-value="thought_balloon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/thought_balloon.png)"></span>
        thought_balloon
      </li>
      <li class="js-navigation-item" data-value="three">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/three.png)"></span>
        three
      </li>
      <li class="js-navigation-item" data-value="thumbsdown">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/thumbsdown.png)"></span>
        thumbsdown
      </li>
      <li class="js-navigation-item" data-value="thumbsup">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/thumbsup.png)"></span>
        thumbsup
      </li>
      <li class="js-navigation-item" data-value="ticket">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/ticket.png)"></span>
        ticket
      </li>
      <li class="js-navigation-item" data-value="tiger">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tiger.png)"></span>
        tiger
      </li>
      <li class="js-navigation-item" data-value="tiger2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tiger2.png)"></span>
        tiger2
      </li>
      <li class="js-navigation-item" data-value="tired_face">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tired_face.png)"></span>
        tired_face
      </li>
      <li class="js-navigation-item" data-value="tm">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tm.png)"></span>
        tm
      </li>
      <li class="js-navigation-item" data-value="toilet">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/toilet.png)"></span>
        toilet
      </li>
      <li class="js-navigation-item" data-value="tokyo_tower">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tokyo_tower.png)"></span>
        tokyo_tower
      </li>
      <li class="js-navigation-item" data-value="tomato">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tomato.png)"></span>
        tomato
      </li>
      <li class="js-navigation-item" data-value="tongue">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tongue.png)"></span>
        tongue
      </li>
      <li class="js-navigation-item" data-value="top">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/top.png)"></span>
        top
      </li>
      <li class="js-navigation-item" data-value="tophat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tophat.png)"></span>
        tophat
      </li>
      <li class="js-navigation-item" data-value="tractor">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tractor.png)"></span>
        tractor
      </li>
      <li class="js-navigation-item" data-value="traffic_light">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/traffic_light.png)"></span>
        traffic_light
      </li>
      <li class="js-navigation-item" data-value="train">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/train.png)"></span>
        train
      </li>
      <li class="js-navigation-item" data-value="train2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/train2.png)"></span>
        train2
      </li>
      <li class="js-navigation-item" data-value="tram">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tram.png)"></span>
        tram
      </li>
      <li class="js-navigation-item" data-value="triangular_flag_on_post">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/triangular_flag_on_post.png)"></span>
        triangular_flag_on_post
      </li>
      <li class="js-navigation-item" data-value="triangular_ruler">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/triangular_ruler.png)"></span>
        triangular_ruler
      </li>
      <li class="js-navigation-item" data-value="trident">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/trident.png)"></span>
        trident
      </li>
      <li class="js-navigation-item" data-value="triumph">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/triumph.png)"></span>
        triumph
      </li>
      <li class="js-navigation-item" data-value="trolleybus">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/trolleybus.png)"></span>
        trolleybus
      </li>
      <li class="js-navigation-item" data-value="trollface">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/trollface.png)"></span>
        trollface
      </li>
      <li class="js-navigation-item" data-value="trophy">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/trophy.png)"></span>
        trophy
      </li>
      <li class="js-navigation-item" data-value="tropical_drink">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tropical_drink.png)"></span>
        tropical_drink
      </li>
      <li class="js-navigation-item" data-value="tropical_fish">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tropical_fish.png)"></span>
        tropical_fish
      </li>
      <li class="js-navigation-item" data-value="truck">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/truck.png)"></span>
        truck
      </li>
      <li class="js-navigation-item" data-value="trumpet">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/trumpet.png)"></span>
        trumpet
      </li>
      <li class="js-navigation-item" data-value="tshirt">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tshirt.png)"></span>
        tshirt
      </li>
      <li class="js-navigation-item" data-value="tulip">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tulip.png)"></span>
        tulip
      </li>
      <li class="js-navigation-item" data-value="turtle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/turtle.png)"></span>
        turtle
      </li>
      <li class="js-navigation-item" data-value="tv">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/tv.png)"></span>
        tv
      </li>
      <li class="js-navigation-item" data-value="twisted_rightwards_arrows">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/twisted_rightwards_arrows.png)"></span>
        twisted_rightwards_arrows
      </li>
      <li class="js-navigation-item" data-value="two">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/two.png)"></span>
        two
      </li>
      <li class="js-navigation-item" data-value="two_hearts">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/two_hearts.png)"></span>
        two_hearts
      </li>
      <li class="js-navigation-item" data-value="two_men_holding_hands">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/two_men_holding_hands.png)"></span>
        two_men_holding_hands
      </li>
      <li class="js-navigation-item" data-value="two_women_holding_hands">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/two_women_holding_hands.png)"></span>
        two_women_holding_hands
      </li>
      <li class="js-navigation-item" data-value="u5272">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u5272.png)"></span>
        u5272
      </li>
      <li class="js-navigation-item" data-value="u5408">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u5408.png)"></span>
        u5408
      </li>
      <li class="js-navigation-item" data-value="u55b6">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u55b6.png)"></span>
        u55b6
      </li>
      <li class="js-navigation-item" data-value="u6307">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u6307.png)"></span>
        u6307
      </li>
      <li class="js-navigation-item" data-value="u6708">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u6708.png)"></span>
        u6708
      </li>
      <li class="js-navigation-item" data-value="u6709">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u6709.png)"></span>
        u6709
      </li>
      <li class="js-navigation-item" data-value="u6e80">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u6e80.png)"></span>
        u6e80
      </li>
      <li class="js-navigation-item" data-value="u7121">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u7121.png)"></span>
        u7121
      </li>
      <li class="js-navigation-item" data-value="u7533">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u7533.png)"></span>
        u7533
      </li>
      <li class="js-navigation-item" data-value="u7981">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u7981.png)"></span>
        u7981
      </li>
      <li class="js-navigation-item" data-value="u7a7a">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/u7a7a.png)"></span>
        u7a7a
      </li>
      <li class="js-navigation-item" data-value="uk">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/uk.png)"></span>
        uk
      </li>
      <li class="js-navigation-item" data-value="umbrella">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/umbrella.png)"></span>
        umbrella
      </li>
      <li class="js-navigation-item" data-value="unamused">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/unamused.png)"></span>
        unamused
      </li>
      <li class="js-navigation-item" data-value="underage">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/underage.png)"></span>
        underage
      </li>
      <li class="js-navigation-item" data-value="unlock">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/unlock.png)"></span>
        unlock
      </li>
      <li class="js-navigation-item" data-value="up">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/up.png)"></span>
        up
      </li>
      <li class="js-navigation-item" data-value="us">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/us.png)"></span>
        us
      </li>
      <li class="js-navigation-item" data-value="v">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/v.png)"></span>
        v
      </li>
      <li class="js-navigation-item" data-value="vertical_traffic_light">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/vertical_traffic_light.png)"></span>
        vertical_traffic_light
      </li>
      <li class="js-navigation-item" data-value="vhs">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/vhs.png)"></span>
        vhs
      </li>
      <li class="js-navigation-item" data-value="vibration_mode">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/vibration_mode.png)"></span>
        vibration_mode
      </li>
      <li class="js-navigation-item" data-value="video_camera">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/video_camera.png)"></span>
        video_camera
      </li>
      <li class="js-navigation-item" data-value="video_game">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/video_game.png)"></span>
        video_game
      </li>
      <li class="js-navigation-item" data-value="violin">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/violin.png)"></span>
        violin
      </li>
      <li class="js-navigation-item" data-value="virgo">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/virgo.png)"></span>
        virgo
      </li>
      <li class="js-navigation-item" data-value="volcano">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/volcano.png)"></span>
        volcano
      </li>
      <li class="js-navigation-item" data-value="vs">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/vs.png)"></span>
        vs
      </li>
      <li class="js-navigation-item" data-value="walking">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/walking.png)"></span>
        walking
      </li>
      <li class="js-navigation-item" data-value="waning_crescent_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/waning_crescent_moon.png)"></span>
        waning_crescent_moon
      </li>
      <li class="js-navigation-item" data-value="waning_gibbous_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/waning_gibbous_moon.png)"></span>
        waning_gibbous_moon
      </li>
      <li class="js-navigation-item" data-value="warning">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/warning.png)"></span>
        warning
      </li>
      <li class="js-navigation-item" data-value="watch">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/watch.png)"></span>
        watch
      </li>
      <li class="js-navigation-item" data-value="water_buffalo">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/water_buffalo.png)"></span>
        water_buffalo
      </li>
      <li class="js-navigation-item" data-value="watermelon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/watermelon.png)"></span>
        watermelon
      </li>
      <li class="js-navigation-item" data-value="wave">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wave.png)"></span>
        wave
      </li>
      <li class="js-navigation-item" data-value="wavy_dash">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wavy_dash.png)"></span>
        wavy_dash
      </li>
      <li class="js-navigation-item" data-value="waxing_crescent_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/waxing_crescent_moon.png)"></span>
        waxing_crescent_moon
      </li>
      <li class="js-navigation-item" data-value="waxing_gibbous_moon">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/waxing_gibbous_moon.png)"></span>
        waxing_gibbous_moon
      </li>
      <li class="js-navigation-item" data-value="wc">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wc.png)"></span>
        wc
      </li>
      <li class="js-navigation-item" data-value="weary">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/weary.png)"></span>
        weary
      </li>
      <li class="js-navigation-item" data-value="wedding">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wedding.png)"></span>
        wedding
      </li>
      <li class="js-navigation-item" data-value="whale">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/whale.png)"></span>
        whale
      </li>
      <li class="js-navigation-item" data-value="whale2">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/whale2.png)"></span>
        whale2
      </li>
      <li class="js-navigation-item" data-value="wheelchair">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wheelchair.png)"></span>
        wheelchair
      </li>
      <li class="js-navigation-item" data-value="white_check_mark">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_check_mark.png)"></span>
        white_check_mark
      </li>
      <li class="js-navigation-item" data-value="white_circle">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_circle.png)"></span>
        white_circle
      </li>
      <li class="js-navigation-item" data-value="white_flower">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_flower.png)"></span>
        white_flower
      </li>
      <li class="js-navigation-item" data-value="white_large_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_large_square.png)"></span>
        white_large_square
      </li>
      <li class="js-navigation-item" data-value="white_medium_small_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_medium_small_square.png)"></span>
        white_medium_small_square
      </li>
      <li class="js-navigation-item" data-value="white_medium_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_medium_square.png)"></span>
        white_medium_square
      </li>
      <li class="js-navigation-item" data-value="white_small_square">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_small_square.png)"></span>
        white_small_square
      </li>
      <li class="js-navigation-item" data-value="white_square_button">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/white_square_button.png)"></span>
        white_square_button
      </li>
      <li class="js-navigation-item" data-value="wind_chime">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wind_chime.png)"></span>
        wind_chime
      </li>
      <li class="js-navigation-item" data-value="wine_glass">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wine_glass.png)"></span>
        wine_glass
      </li>
      <li class="js-navigation-item" data-value="wink">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wink.png)"></span>
        wink
      </li>
      <li class="js-navigation-item" data-value="wolf">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wolf.png)"></span>
        wolf
      </li>
      <li class="js-navigation-item" data-value="woman">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/woman.png)"></span>
        woman
      </li>
      <li class="js-navigation-item" data-value="womans_clothes">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/womans_clothes.png)"></span>
        womans_clothes
      </li>
      <li class="js-navigation-item" data-value="womans_hat">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/womans_hat.png)"></span>
        womans_hat
      </li>
      <li class="js-navigation-item" data-value="womens">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/womens.png)"></span>
        womens
      </li>
      <li class="js-navigation-item" data-value="worried">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/worried.png)"></span>
        worried
      </li>
      <li class="js-navigation-item" data-value="wrench">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/wrench.png)"></span>
        wrench
      </li>
      <li class="js-navigation-item" data-value="x">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/x.png)"></span>
        x
      </li>
      <li class="js-navigation-item" data-value="yellow_heart">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/yellow_heart.png)"></span>
        yellow_heart
      </li>
      <li class="js-navigation-item" data-value="yen">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/yen.png)"></span>
        yen
      </li>
      <li class="js-navigation-item" data-value="yum">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/yum.png)"></span>
        yum
      </li>
      <li class="js-navigation-item" data-value="zap">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/zap.png)"></span>
        zap
      </li>
      <li class="js-navigation-item" data-value="zero">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/zero.png)"></span>
        zero
      </li>
      <li class="js-navigation-item" data-value="zzz">
        <span class="emoji-icon" style="background-image:url(https://a248.e.akamai.net/assets.github.com/images/icons/emoji/zzz.png)"></span>
        zzz
      </li>
  </ul>


</div>
  </div>
</div>

              
            </dd>
          </dl>

        </div> <!-- /.comment-content -->
      </div> <!-- /.comment -->

    </div>
    </div>
    <br>
      <div class="form-actions">
    <button type="submit" class="button primary" tabindex="1" data-disable-invalid data-disable-with>
      Submit new issue
    </button>
    <input type="hidden" name="url" value="" id="url" />
  </div>
    </form>

    <script> 
    document.getElementById('url').value = parent.location.href;
    </script>