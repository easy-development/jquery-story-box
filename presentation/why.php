<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Story Box</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <link href="story-box/animate.css" rel="stylesheet" type="text/css">
  <link href="story-box/story-box-zen.css" rel="stylesheet" type="text/css">
  <script src="story-box/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="story-box/story-box.min.js"></script>

  <style>
    .glyphicon-container .glyphicon {
      font-size: 8em;
      text-align: center;
      display: block;
      width: 100%;
    }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.container .text-block-container').each(function(){
        var maxHeight = 0;

        $(this).find('.text-block').each(function(){
          maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
        });

        $(this).find('.text-block').css('height', maxHeight);
      });
    });
  </script>
</head>

<body>

<?php require_once('header.php');?>

<div class="jumbotron">
  <div class="container">
    <h2 class="text-primary text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Why Story Box ?</h2>

    <h3 class="text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">
      <span class="label label-danger">54 Effects</span>
      <span class="label label-primary">44 Classic</span>
      <span class="label label-success">10 Zen Special Effects</span>
    </h3>
  </div>
</div>

<div class="container">

  <div class="row glyphicon-container text-block-container">
    <div class="col-md-4" data-sb="zenFadeInRightBig" data-sb-hide="zenFadeOutDown">
      <h2 class="text-center">CSS Transitions</h2>
      <p class="text-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We use the transitions Provided by Animate.CSS, they are smooth & awesome <strong>+ 10 Zen Special Animations created by us, for you</strong></p>
      <span class="glyphicon glyphicon-heart"></span>
    </div>
    <div class="col-md-4" data-sb="zenFadeInUpBig" data-sb-hide="zenFadeOutDown">
      <h2 class="text-center">Cross Browser & Device</h2>
      <p class="text-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Story tale works on any major browser, it doesn't effect older browsers and it simply doesn't animate anything</p>
      <span class="glyphicon glyphicon-glass"></span>
    </div>
    <div class="col-md-4" data-sb="zenFadeInLeftBig" data-sb-hide="zenFadeOutDown">
      <h2 class="text-center">Works independently</h2>
      <p class="text-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This jQuery Extension works alone, you don't need any Javascript Skills, Only HTML</p>
      <span class="glyphicon glyphicon-flash"></span>
    </div>
  </div>

  <br/><br/><br/>
  <h1 class="text-center">Why Developers Love Story Box ?</h1>
  <br/><br/><br/>

  <div class="row" style="width:98%;">
    <div class="col-md-6">
      <h2 class="text-center">Story Box</h2>
    </div>
    <div class="col-md-6">
      <h2 class="text-center">Other Plugins</h2>
    </div>
  </div>

  <div class="row" style="width:98%;">
    <div>
      <p class="text-center">Story Box doesn't require Javascript Skills, it uses HTML attributes</p>
      <p class="text-center">Story Box doesn't do many operations, it's <span class="label label-success">Optimized</span> to work <span class="label label-danger">400%</span> faster than any other plugin</p>
    </div>
  </div>

  <div class="row" style="width:98%;">
    <div class="col-md-6">
      <pre style='color:#000020;background:#f6f8ff;'>
        <span style='color:#0057a6; '>&lt;</span><span style='color:#200080; font-weight:bold; '>h2</span><span style='color:#474796; '> </span><span style='color:#074726; '>data</span><span style='color:#474796; '>-sb</span><span style='color:#308080; '>=</span><span style='color:#1060b6; '>"flipInY"</span><span style='color:#0057a6; '>></span>Please slowly scroll down<span style='color:#008c00; '>...</span><span style='color:#0057a6; '>&lt;/</span><span style='color:#200080; font-weight:bold; '>h2</span><span style='color:#0057a6; '>></span>
      </pre>
    </div>
    <div class="col-md-6">
      <pre style='color:#000020;background:#f6f8ff;'>
        <span style='color:#0057a6; '>&lt;</span><span style='color:#200080; font-weight:bold; '>h2</span><span style='color:#474796; '> </span><span style='color:#074726; '>class</span><span style='color:#308080; '>=</span><span style='color:#1060b6; '>"opacity"</span><span style='color:#474796; '> </span><span style='color:#074726; '>id</span><span style='color:#308080; '>=</span><span style='color:#1060b6; '>"m"</span><span style='color:#474796; '> </span><span style='color:#074726; '>style</span><span style='color:#308080; '>=</span><span style='color:#1060b6; '>"</span><span style='color:#7779bb; font-weight:bold; '>font-size</span><span style='color:#308080; '>:</span><span style='color:#008c00; '>35</span><span style='color:#006600; '>px</span><span style='color:#1060b6; '>"</span><span style='color:#0057a6; '>></span>Please slowly scroll down<span style='color:#008c00; '>...</span><span style='color:#0057a6; '>&lt;/</span><span style='color:#200080; font-weight:bold; '>h2</span><span style='color:#0057a6; '>></span>
      </pre>

      <pre style='margin:0;color:#000020;background:#f6f8ff;'>
        <span style='color:#308080; '>&lt;</span>script type<span style='color:#308080; '>=</span><span style='color:#800000; '>"</span><span style='color:#1060b6; '>text/javascript</span><span style='color:#800000; '>"</span><span style='color:#308080; '>></span>
          $<span style='color:#308080; '>(</span>window<span style='color:#308080; '>)</span><span style='color:#308080; '>.</span>scroll<span style='color:#308080; '>(</span><span style='color:#200080; font-weight:bold; '>function</span><span style='color:#308080; '>(</span><span style='color:#308080; '>)</span><span style='color:#406080; '>{</span>
             showOnce<span style='color:#308080; '>(</span><span style='color:#1060b6; '>'#m'</span><span style='color:#308080; '>,</span><span style='color:#1060b6; '>'#m'</span><span style='color:#308080; '>,</span><span style='color:#1060b6; '>'flipInY'</span><span style='color:#308080; '>,</span><span style='color:#008c00; '>20</span><span style='color:#308080; '>)</span><span style='color:#406080; '>;</span>
          <span style='color:#406080; '>}</span><span style='color:#308080; '>)</span><span style='color:#406080; '>;</span>
        <span style='color:#308080; '>&lt;</span><span style='color:#308080; '>/</span>script<span style='color:#308080; '>></span>
      </pre>
    </div>
  </div>

  <br/><br/>

  <div class="row glyphicon-container text-block-container">
    <div class="col-md-4" data-sb="zenFadeInRightBig" data-sb-hide="zenFadeOutDown">
      <h2 class="text-center">One Minute Setup</h2>
      <p class="text-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We've put a lot of effort making this plugin working within one minute, and we've tested it countless times</p>
      <span class="glyphicon glyphicon-time"></span>
    </div>
    <div class="col-md-4" data-sb="zenFadeInUpBig" data-sb-hide="zenFadeOutDown">
      <h2 class="text-center">24/7 Email Support</h2>
      <p class="text-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We offer 24/7 Email support, anytime, no matter what, holidays or not, We are there for you.</p>
      <span class="glyphicon glyphicon-send"></span>
    </div>
    <div class="col-md-4" data-sb="zenFadeInLeftBig" data-sb-hide="zenFadeOutDown">
      <h2 class="text-center">Define Yourself</h2>
      <p class="text-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create an Unique identity on the web, using Story Box, think different, be different</p>
      <span class="glyphicon glyphicon-credit-card"></span>
    </div>
  </div>

</div>

<br/>
<br/>

<?php require_once('footer.php');?>
</body>
</html>
