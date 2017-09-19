<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Login | Bigdata Innovation Hub</title>
  <!--[if lte IE 8]> <meta http-equiv=refresh content="0; URL=/ie-8-is-not-supported.html" /> <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link href="<?php echo base_url();?>application/css/css.css" rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url();?>application/css/font-awesome.min.css" media="screen" rel="stylesheet" />
  <!--<link href="./images/favicon-e49aabf8ad.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />-->
  <!-- <link href="./images/apple-touch-icon-585e5d997d.png" rel="apple-touch-icon" /> -->
  <link href="<?php echo base_url();?>application/css/bundles_common.css" media="all" rel="stylesheet" />
  <link href="<?php echo base_url();?>application/css/bundles_login.css" media="all" rel="stylesheet" />
<style>
@media screen and (min-width: 320px) and (max-width: 768px){
  #main-container{
    display:none!important;
  }
#f1_card {
    height: 100%;
    width: 100%;
}
#f1_card {
    height: 100%;
    width: 100%;
}
div#f1_container > div.logo {
    bottom: 3.5vw;
    color: white;
    display: block;
}  
  #f1_container {
    display:block!important;
    background-position: center 30px !important;
    background-repeat: no-repeat !important;
    background-size: 270px 48px !important;
    height: 198px !important;
    margin: 0 auto !important;
    padding: 60px 0 !important;
    position: relative !important;
    width: 300px !important;
    z-index: 1 !important;
}
body{
  background-color: black;
  font-size:20px!important;
}
input.input-block-level {
    display: block!important;
    font-size: 20px!important;
    margin-bottom: 15px!important;
    padding: 10px 15px!important;
    width: 268px!important;
    height:38px!important;
    /*box-sizing:none!important;*/
}
.btn-primary{
  background-color:#00A8E1!important;
}
a.btn {
    width: 230px;
}
a.btn {
    width: 230px;
}
.flip-to-back, .flip-to-front {
    margin: 0;
}
.btn {
    display: block;
    margin-bottom: 15px;
    text-align: center;
    text-decoration: none;
    width: 270px;

}
div.switch {
    color: #00A8E1!important;
    cursor: pointer !important;
    display: block !important;
    margin: 0 auto !important;
    text-align: center !important;
    transition: color 0.3s ease 0s !important;
    font-size:19px!important;
    width:100%!important;
}
.switch:hover {
    text-decoration: underline !important;
    color:#00A8E1!important;
}
.face {
    padding: 15px!important;
    position: absolute!important;
}
.face.back {
    display: none!important;
}
.flipped .face.back {
    display: block!important;
}
html {
    font-family: Helvetica !important;
    font-size: 114% !important;
}
.face {
    background: #1a1b1a none repeat scroll 0 0;
    border-radius: 1em;
    color: white;
    /*background-color:grey;*/
}
label, input, button, select, textarea {
    font-size: 14px;
    font-weight: normal;
    line-height: 20px;
}
input, button, select, textarea {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
label {
    display: block;
    margin-bottom: 5px;
}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    border-radius: 3px;
    color: #555;
    display: inline-block;
    font-size: 14px;
    height: 19px;
    line-height: 20px;
    margin-bottom: 10px;
    padding: 8px;
    vertical-align: middle;
}
input, textarea, .uneditable-input {
    width: 206px;
}
textarea {
    height: auto;
}
textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
}
textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus {
    border-color: #00a4f0;
    outline: 0 none;
}
input[type="radio"], input[type="checkbox"] {
    cursor: pointer;
    line-height: normal;
    margin: 4px 0 0;
}
input[type="file"], input[type="image"], input[type="submit"], input[type="reset"], input[type="button"], input[type="radio"], input[type="checkbox"] {
    width: auto;
}
select, input[type="file"] {
    height: 38px;
    line-height: 38px;
}
select {
    background-color: #fff;
    border: 1px solid #ccc;
    width: 220px;
}
select[multiple], select[size] {
    height: auto;
}
select:focus, input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
    outline: thin dotted #333;
    outline-offset: -2px;
    text-decoration: none;
}
</style>
</head>
<body data-tourian="false">
  <noscript>
    <div role="alert" class="ic-flash-static ic-flash-error">
      <h1>You need to have JavaScript enabled in order to access this site.</h1>
    </div>
  </noscript>
<ul role="alert" aria-live="assertive" id="flash_message_holder"></ul>
<div role="alert" aria-live="assertive" id="flash_screenreader_holder" class="screenreader-only"></div>

  <div class="wrapper">
    <div id="instructure_ajax_error_box">
      <div style="text-align: right; background-color: #fff;">
        <a href="#" class="close_instructure_ajax_error_box_link">Close</a>
      </div>
      <iframe id="instructure_ajax_error_result" src="about:blank" style="border: 0;"></iframe>
    </div>

    

    <div id="main-container">
      <div class="wrapper ">
          

  
<div id="bkg-container">
  <div class="overlay"></div>
</div>

<div id="layer-container">
  <div class="layer">
    <div class="side-pane" style="background-color:#00A8E1!important;">
      <div class="content">
        <div class="header">Sign in</div>
        <div class="desc">
          Welcome to the Bigdata Innovation Hub.<br/><br/>
         Please sign-in to access your course materials and videos
        </div>

        <div class="logo">
         <!-- <img alt="Logo small b5dea6396f" src="./images/finallogo.png" />-->
          <div>
            <div>Bigdata Innovation Hub</div>
            <!--<div>Learning Center</div>-->
          </div>
        </div>
      </div>
    </div>
    <div class="page-container">
      <div class="page" id="login-soc">
        <div>
          Select a social account to sign in.
          <a href="#"><i class="fa fa-lg fa-fw fa-facebook"></i><span>Sign in with</span>&nbsp;<span>Facebook</span></span></a>
          <a href="#"><i class="fa fa-lg fa-fw fa-google-plus"></i><span>Sign in with</span>&nbsp;<span>Google+</span></span></a>
          <a href="#"><i class="fa fa-lg fa-fw fa-linkedin"></i><span>Sign in with</span>&nbsp;<span>LinkedIn</span></span></a>
          <div id="switch-corp" class="switch">Corporate user? Click here.</div>
        </div>
      </div>

      <div class="page active" id="login-corp">
      <form accept-charset="UTF-8" action="<?php echo base_url('BigdataAdminController/login_auth');?>" id="login_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="iwX7lAseWDodWF6tqJuXmBm1PyENpHmEfaN95F3YKUroS5K7UzUccH5qGen919L1SNx9TT7rHNALyzayC+1HBA==" /></div>
        <div>
          <br/>
          <label for="txt-email">User Id</label>
          <!-- <input type="email" id="txt-email" name="email" class="field" value="" tabindex="1" /> -->
          <input class="field" id="txt-email" name="user_id" type="text" placeholder="Enter your email id"/>
          <label for="txt-password" class="inline">Password</label>
          <input class="field" id="txt-password" name="password" type="password" placeholder="Enter your password"/>
          <label for="txt-password" id="pass-reset" class="switch">Forgot Your Password?</label>
          <!-- <input type="password" id="txt-password" name="password" class="field" value="" tabindex="2" /> -->

          <!-- <div id="switch-soc" class="switch">Social login? Click here</div> -->

          <button class="button" id="btn-lms" tabindex="3" type="submit">
            <span class="">Take me In</span>
            <span class="button-main-arrow-image">
                <img class="image-icon" src="<?php echo base_url();?>application/images/long-arrow-orange.png">
            </span>
          </button>

        </div>
</form>    </div>
    <div class="page" id="corp-pass">
      <form accept-charset="UTF-8" action="/forgot_password" id="forgot_password_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="7nR7IVhSuEfX5wtqAp1RTuQFDxCWDrCZt9KPG+BOFRWNOhIOAHn8DbTVTC5X0RQjtWxNfKVB1c3BusRNtnt7Ww==" /></div>
      <div>
        <div>Enter your account ID and we will mail you a link to reset your password.</div>
        <br/><br/>

        <label for="txt-email">Email</label>
        <!-- <input type="email" id="txt-email" name="email" class="field" value="" tabindex="1" />   -->
        <input aria-describedby="forgot_password_instructions" class="email_address field" type="text" name="pseudonym_session[unique_id_forgot]"
          value="" id="txt-email" />

        <div id="switch-corp-back" class="switch">&#8592;&nbsp;Go back</div>

            <button class="button skewed" id="btn-reset" tabindex="3" type="submit">
              <span class="button-main-text">Reset Password</span>
              <span class="button-main-arrow-image">
                  <img class="image-icon" src="<?php echo base_url();?>application/long-arrow-orange.png">
              </span>
            </button>
        </div>
</form>    </div>
  </div>
</div>




        <div id="footer">
          <div id="footer-copyright">
            &copy;Bigdata Innovation Hub
          </div>

          <div id="footer-links">
            <!-- <a href="#" target="_blank">Terms</a>
            <a href="#" target="_blank">Privacy</a> -->
            <!--<a href="https://oldui.jigsawacademy.net" target="_blank" style="text-transform: none;" id="switch-old-ui">Switch to Old UI</a>-->
            <!--<a href="https://app.smartsheet.com/b/form?EQBCT=bbb77857070549de8d082a014e96b5fa" target="_blank" id="feedback">Write feedback</a>-->
          </div>
        </div>

      </div>


    </div>


    <div id="user-container" class="corner">
        

    </div>

    

    <div id="alert-container" class="corner">
      <div class="overlay"></div>
    </div>

    <div id="msg-container" class="corner">
      <div class="overlay"></div>
    </div>

    <div id="search-container" class=""></div>


    <div id='ripple-container'>
      <div id='ripple'></div>
    </div>

    <div style="display:none;"><!-- Everything inside of this should always stay hidden -->
    </div>
      <div id="cant_record_dialog" style="display: none;">
  <div>
    In order to create video or audio recordings your computer needs to be 
    webcam-enabled.  If you don&#39;t have a webcam on your computer, you can still
    record audio-only messages by first installing the Google Video Chat
    plugin.
  </div>
  <div style="text-align: center; font-size: 1.5em; margin: 10px;">
    <a href="http://www.google.com/chat/video" target="_blank" class="btn">Install the Video Plugin</a>
  </div>
  <div class="links" style="text-align: right; font-size: 0.8em; display: none;">
    <a href="#" class="cant_record_link">Don&#39;t have a webcam?</a>
  </div>
</div>
    <div id='aria_alerts' class='hide-text affix' role="alert" aria-live="assertive"></div>
    <script>
  INST = {"environment":"production","disableScribdPreviews":true,"enableHtml5FirstVideos":true,"maxVisibleEditorButtons":3,"editorButtons":[]};
  ENV = {"ASSET_HOST":null,"active_brand_config":null,"url_to_what_gets_loaded_inside_the_tinymce_editor_css":"\/dist\/brandable_css\/legacy_normal_contrast\/bundles\/what_gets_loaded_inside_the_tinymce_editor-acb2221ac0.css","current_user_id":null,"current_user":{},"current_user_roles":null,"files_domain":"files.jigsawacademy.net","DOMAIN_ROOT_ACCOUNT_ID":10000000000001,"use_new_styles":false,"k12":false,"use_high_contrast":null,"Wistia_Plugin_disable":false,"SETTINGS":{"open_registration":false},"context_asset_string":null,"TIMEZONE":"Asia\/Kolkata","LOCALE":"en-US","TOURS":null,"USER_PREFERENCES":null,"notices":[]};

    // TODO: move this out when we have a single require call
    require = {
      translate: true,
      baseUrl: '/optimized',
      paths: {
    "common":"compiled\/bundles\/common",
    "jqueryui":"vendor\/jqueryui",
    "compiled\/tinymce":"compiled\/tinymce.js?v2",
    "canvas_quizzes":"client_apps\/canvas_quizzes",
    "app\/config\/environments\/production":"empty:"},
      packages : [{"name":"ic-ajax","location":"bower\/ic-ajax\/dist\/amd"},{"name":"ic-styled","location":"bower\/ic-styled"},{"name":"ic-menu","location":"bower\/ic-menu"},{"name":"ic-tabs","location":"bower\/ic-tabs\/dist\/amd"},{"name":"ic-droppable","location":"bower\/ic-droppable\/dist\/amd"},{"name":"ic-sortable","location":"bower\/ic-sortable\/dist\/amd"},{"name":"ic-modal","location":"bower\/ic-modal\/dist\/amd"},{"name":"ic-lazy-list","location":"bower\/ic-lazy-list"},{"name":"ember-qunit","location":"bower\/ember-qunit\/dist\/amd"}],
      shim: {
    'bower/react-router/build/umd/ReactRouter': {
      deps: ['react'],
      exports: 'ReactRouter'
    },
    'bower/react-tray/dist/react-tray': {
      deps: ['react']
    },
    'bower/react-modal/dist/react-modal': {
      deps: ['react']
    },
    'bower/react-tokeninput/dist/react-tokeninput': {
      deps: ['react'],
    },
    'bower/react-select-box/dist/react-select-box': {
      deps: ['react'],
    },
    'bower/ember/ember': {
      deps: ['jquery', 'handlebars'],
      exports: 'Ember'
    },
    'bower/ember-data/ember-data': {
      deps: ['ember'],
      exports: 'DS'
    },
    'bower/handlebars/handlebars.runtime': {
      exports: 'Handlebars'
    },
    'bower/reflux/dist/reflux.js': {
      deps: ['react'],
      exports: 'Reflux'
    },
    'vendor/FileAPI/FileAPI.min': {
      deps: ['jquery', 'vendor/FileAPI/config'],
      exports: 'FileAPI'
    },
    'fixed-data-table': {
      deps: ['object_assign', 'react'],
      exports: 'fixed-data-table'
    },
    'vendor/bootstrap-select/bootstrap-select' : {
      deps: ['jquery'],
      exports: '$'
    },
    'vendor/jquery.jcrop': {
      deps: ['jquery'],
      exports: '$'
    },
    'vendor/jquery.smartbanner': {
      deps: ['jquery'],
      exports: '$'
    },
    'vendor/md5': {
      exports: 'CryptoJS'
    },
    'handlebars': {
      deps: ['bower/handlebars/handlebars.runtime.amd'],
      exports: 'Handlebars'
    },
    'vendor/i18n': {
      exports: 'I18n'
    },
    'vendor/react-infinite-scroll.min' : {
      deps: ['react'],
      exports: 'InfiniteScroll'
    },
    'bower/tinymce/tinymce' : {
      exports: 'tinymce'
    },
    'bower/axios/dist/axios' : {
      exports: 'axios'
    },
    'bower/tinymce/themes/modern/theme' : {
      deps: ['bower/tinymce/tinymce'],
      exports: 'tinymce'
    }
  }
,
      map: {"canvas_quizzes":{"lodash":"underscore","d3":"vendor\/d3.v3","backbone":"vendor\/backbone","jquery\/instructure_date_and_time":"jquery.instructure_date_and_time","react":"old_unsupported_dont_use_react","react-router":"old_unsupported_dont_use_react-router"},"*":{"React":"react"}},
      waitSeconds: 60
    };
</script>

  <script src="./js/vendor_require.js"></script>

<script src="./js/compiled_bundles_common.js"></script>
<script src="./js/optimized_compiled_bundles_login.js"></script>




  <script>
  // Determines if the scripts are loaded.
  // When we get everything out of the views, and have a single top-level
  // `require`, this becomes meaningless and will be abandoned.
  (function() {
    var attempts = 0;
    var timeout = 10;
    var check = function() {
      attempts++;
      var done = !window.requirejs.s.contexts._.defQueue.length
      var giveup = attempts === 100; // 1 second
      if (done || giveup) {
        var className = document.documentElement.className;
        document.documentElement.className = className.replace(/scripts-not-loaded/, '');
        return;
      }
      setTimeout(check, timeout);
    };

    check();
  }).call(this);
  </script>

  </div>

  <div id="tourian-container" class="corner" style="display: none">
    <div class="overlay">
      <svg width="100%" height="100%">
        <defs id="tour-svg-defs">
          <mask id="tour-mask">
            <rect id="tour-mask-white" x="0" y="0"  width="100%" height="100%"/>
            <rect id="tour-mask-black" x="0px" y="0px" width="0px" height="0px"/>
          </mask>
        </defs>

        <rect id="tour-svg-rect" x="0" y="0" width="100%" height="100%"/>
      </svg>
    </div>

    <div class="overlay-mini"></div>

    <div id="tourian">

      <div id="tour-ctrl-small">
        <a id="tour-ctrl-stop">EXIT</a>
        <i class="fa fa-fw fa-lg fa-step-forward" id="tour-ctrl-next-small"></i>
        <i class="fa fa-fw fa-lg fa-step-backward" id="tour-ctrl-prev"></i>
      </div>

      <div id="tour-ctrl-big">
        <div id="tour-timer"></div>
        <i class="fa fa-fw fa-lg fa-play hotspot tour-ctrl-big" id="tour-ctrl-play"></i>
        <i class="fa fa-fw fa-lg fa-pause hotspot tour-ctrl-big" id="tour-ctrl-pause"></i>
        <i class="fa fa-fw fa-lg fa-paper-plane hotspot tour-ctrl-big" id="tour-ctrl-next"></i>
        <i class="fa fa-fw fa-lg fa-mouse-pointer faa-vertical faa-slow animated hotspot tour-ctrl-big" id="tour-ctrl-info"></i>
      </div>

      <div id="tour-box">
      </div>

    </div>
    <div id="tour-highlighter"></div>
  </div>
  <div id="f1_container">
      <div class="logo">
       <!--  <img alt="Logo small b5dea6396f" src=""> -->
        <div>
          <div style="color:white;">Bigdata Innovation Hub</div>
        <!--   <div style="color:white;">Learning Center</div> -->
        </div>
      </div><br>
      <div id="f1_card">
        <form accept-charset="UTF-8" action="<?php echo base_url('BigdataAdminController/login_auth');?>" class="front face" id="" method="post" novalidate="novalidate">

        <input class="input-block-level" name="user_id" value="" placeholder="Email" type="email">
          <input class="input-block-level" name="password" placeholder="Password" type="password">
          <button type="submit" class="btn btn-primary btn-large">Log In</button>
          <a class="btn btn-large btn-inverse flip-to-back">I don't know my password</a>
         <!--  <div id="switch-soc" class="switch">Social login? Click here</div> -->
          </form>
        </div>
    </div>
 </body>
</html>




