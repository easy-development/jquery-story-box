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
  'hinge', 'fadeOutUp', 'fadeOutRight', 'fadeOutDown', 'fadeOutLeft',
  'fadeOutUpBig', 'fadeOutRightBig', 'fadeOutDownBig', 'fadeOutLeftBig',
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

  <script type="text/javascript">
    $(document).ready(function(){
      $('.scroll-to').click(function(event){
        event.preventDefault();
        $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top
        }, 2000);
      });

      var currentOffset = $('#theEffectsList').offset().top;

      $(window).scroll(function(){

        if(currentOffset < $(window).scrollTop() ) {
          $('#theEffectsList').css('position', 'fixed');
          $('#theEffectsList').css('top', '0');
        } else {
          $('#theEffectsList').css('position', 'static');
          $('#theEffectsList').css('top');
        }
      });
    });
  </script>
</head>

<body>

  <?php require_once('header.php');?>

  <div class="jumbotron">
    <div class="container">
      <h2 class="text-primary text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Story Box - Spartan Example</h2>

      <hr/>

      <h3 class="text-danger text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">PROOF OF Concept</h3>

      <h3 class="text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">
        <span class="label label-danger"><?php echo count($effects) * 12 ?> Elements</span>
         With Effects Handled Easily With
        <span class="label label-success">30 MB RAM</span>
      </h3>

      <h3 class="text-center text-success" data-sb="fadeInDownBig" data-sb-hide="fadeOutUp">Scroll Down, And Enjoy.</h3>
    </div>
  </div>

  <div class="container" style="width: 95%;">
    <div class="row">
      <div class="col-md-2" style="">
        <h2><?php echo count($effects); ?> Effects</h2>
        <ul id="theEffectsList" class="nav nav-pills nav-stacked">
          <?php foreach($effects as $effect) : ?>
            <li><a class="scroll-to" href="#<?php echo $effect;?>-preview"><?php echo $effect;?></a></li>
          <?php endforeach;?>
        </ul>
      </div>
      <div class="col-md-10">
        <?php foreach($effects as $effect) : ?>
          <div class="row">
            <div class="col-md-12">
              <h2 id="<?php echo $effect;?>-preview" class="text-primary text-center"><?php echo $effect;?></h2>
            </div>

            <div class="col-md-9">
              <div class="well" style="height:150px;background: #3498db;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:150px;background: #e74c3c;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:150px;background: #2ecc71;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:150px;background: #9b59b6;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:150px;background: #3498db;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:150px;background: #e74c3c;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:150px;background: #2ecc71;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:150px;background: #9b59b6;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
            </div>

            <div class="col-md-3">
              <div class="well" style="height:300px;background: #34495e;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:300px;background: #7f8c8d;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:300px;background: #34495e;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
              <div class="well" style="height:300px;background: #7f8c8d;" data-sb="<?php echo $effect;?>" data-sb-hide="fadeOutUp"></div>
            </div>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
  <?php require_once('footer.php');?>
</body>
</html>
