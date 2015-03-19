<?php
  $effects = array(
    'fadeInUp', 'fadeInRight', 'fadeInDown', 'fadeInLeft', 'fadeInUpBig', 'fadeInRightBig', 'fadeInDownBig',
    'fadeInLeftBig',
    'zenFadeInUp', 'zenFadeInRight', 'zenFadeInDown', 'zenFadeInLeft', 'zenFadeInUpBig', 'zenFadeInRightBig', 'zenFadeInDownBig',
    'zenFadeInLeftBig',
    'bounceInUp', 'bounceInRight', 'bounceInDown', 'bounceInLeft', 'flipInX', 'flipInY',
    'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight',
    'pulse', 'swing', 'wobble', 'flash', 'tada'
  );
  $effectsOut = array(
    'hinge', 'zenFadeOutUp', 'zenFadeOutRight', 'zenFadeOutDown', 'zenFadeOutLeft',
    'zenFadeOutUpBig', 'zenFadeOutRightBig', 'zenFadeOutDownBig', 'zenFadeOutLeftBig',
    'bounceOutUp', 'bounceOutRight', 'bounceOutDown', 'bounceOutLeft',
    'flipOutX', 'flipOutY',
    'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight'
  );
?>
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
    <div class="row">
      <div class="col-md-10 col-sm-offset-1">
        <h1 class="text-center text-primary" data-sb="bounceInDown" data-sb-hide="fadeOutUp">Story Box</h1>
        <h2 class="text-success text-center" data-sb="bounceInDown" data-sb-hide="fadeOutUp">Because every website has to offer an unique experience</h2>

        <div class="button-container" style="max-width:400px;margin:0 auto;">
          <a class="btn btn-success btn-lg"
             data-sb="bounceInLeft"
             data-sb-hide="fadeOutUp"
             href="https://github.com/easy-development/jquery-story-box">Download Now &raquo;</a>

          <a class="btn btn-danger btn-lg"
             data-sb="bounceInLeft"
             data-sb-hide="fadeOutUp"
             target="_blank"
             href="http://caniuse.com/css-animation">Browser Support &raquo;</a>
        </div>

        <h3 class="text-danger text-center" data-sb="bounceInDown" data-sb-hide="fadeOutUp">Yes, Browsers that are not supported, will simply be "magic free". Stress Free</h3>

        <h3 class="text-success text-center" data-sb="bounceInDown" data-sb-hide="fadeOutUp">Live Examples</h3>
        <h3 class="text-danger text-center" data-sb="bounceInDown" data-sb-hide="fadeOutUp">The Exit Effects ( hide after display ) are optional</h3>

        <div class="button-container" style="max-width:860px;margin:0 auto;">
          <a class="btn btn-primary btn-lg"
             data-sb="bounceInLeft"
             data-sb-hide="fadeOutUp"
             href="demo.php">
            Demonstration &raquo;
          </a>

          <a class="btn btn-success btn-lg"
             data-sb="bounceInLeft"
             data-sb-hide="fadeOutUp"
             href="unique-demo.php">
            Unique Demonstration &raquo;
          </a>

          <a class="btn btn-danger btn-lg"
             data-sb="bounceInLeft"
             data-sb-hide="fadeOutUp"
             href="why.php">
            Why Story Box &raquo;
          </a>

          <a class="btn btn-warning btn-lg"
             data-sb="bounceInLeft"
             data-sb-hide="fadeOutUp"
             href="basic-demo.php">
            Spartan Demonstration &raquo;
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="width: 95%">
    <div class="panel panel-default">
      <div class="panel-body">
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

        <div class="clearfix"></div>

        <div style="height: 200px;display: block;width: 100%;"></div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12" data-sb="zenFadeInLeftBig" data-sb-hide="zenFadeOutDown">
                <span style="padding: 15px;display: block;background: #9b59b6;color:#ffffff;font-size: 3em;"
                      class="text-center">Created for your Themes & Templates</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h3 style="background: #27AE60;padding: 10px; 20px;color: #ffffff;"
                data-sb="zenFadeInDown" data-sb-hide="zenFadeOutDown">Entrance Effects</h3>
            <table class="table table-bordered" data-sb="zenFadeInUp" data-sb-hide="zenFadeOutDown">
              <tr>
                <?php $i = 1;foreach($effects as $effect) : ?>
                  <td>
                    <?php echo $effect;?>
                  </td>
                  <?php echo $i % 4 == 0 ? '</tr><tr>' : '';?>
                  <?php $i++;endforeach;?>
              </tr>
            </table>

            <h3 style="background: #e74c3c;padding: 10px; 20px;color: #ffffff;"
                data-sb="zenFadeInDown" data-sb-hide="zenFadeOutDown">Exit Effects | Optional</h3>
            <table class="table table-bordered" data-sb="zenFadeInUp" data-sb-hide="zenFadeOutDown">
              <tr>
                <?php $i = 1;foreach($effectsOut as $effect) : ?>
                  <td>
                    <?php echo $effect;?>
                  </td>
                  <?php echo $i % 4 == 0 ? '</tr><tr>' : '';?>
                  <?php $i++;endforeach;?>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('footer.php');?>
</body>
</html>
