<?php
$effects = array(
  'fadeInUp', 'fadeInRight', 'fadeInDown', 'fadeInLeft', 'fadeInUpBig', 'fadeInRightBig', 'fadeInDownBig',
  'fadeInLeftBig', 'bounceInUp', 'bounceInRight', 'bounceInDown', 'bounceInLeft', 'flipInX', 'flipInY',
  'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight'
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

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <link href="story-box/animate.css" rel="stylesheet" type="text/css">
  <script src="story-box/jquery.js"></script>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
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

<div class="jumbotron">
  <div class="container">
    <h2 class="text-primary text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Story Box - Unique Example</h2>
    <h3 class="text-success text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Bringing your Themes & Templates the power to be always <span class="label label-danger">Unique</span></h3>
    <h3 class="text-danger text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Your Themes Deserve IT</h3>
    <br/>
    <div class="row">
      <div class="col-sm-2">
        <div class="label label-danger" style="display: block;" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Blazing Fast</div>
      </div>
      <div class="col-sm-2">
        <div class="label label-primary" style="display: block;" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Eye Smooth</div>
      </div>
      <div class="col-sm-4">
        <div class="label label-success" style="width:100%;display: block;" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Unique Experiences</div>
      </div>
      <div class="col-sm-2">
        <div class="label label-primary" style="display: block;" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Incredible Effects</div>
      </div>
      <div class="col-sm-2">
        <div class="label label-danger" style="display: block;" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Easy Integration</div>
      </div>
    </div>

    <br/>

    <h3 class="text-center text-success" data-sb="fadeInDownBig" data-sb-hide="fadeOutUp">Scroll Down, And Enjoy.</h3>
    <h3 class="text-center text-danger" data-sb="fadeInDownBig" data-sb-hide="fadeOutUp">And Again... And Again...</h3>

  </div>
</div>

<div class="container" style="width: 95%;">
  <div class="row">
    <div class="col-md-2">
      <div class="well" style="height:300px;background: #1abc9c;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #2ecc71;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>

    <div class="col-md-10">
      <div class="well" style="height:300px;background: #3498db;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #9b59b6;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="well" style="height:300px;background: #34495e;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #16a085;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>

    <div class="col-md-9">
      <div class="well" style="height:300px;background: #34495e;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #27ae60;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="well" style="height:300px;background: #2980b9;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #8e44ad;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>

    <div class="col-md-8">
      <div class="well" style="height:300px;background: #2c3e50;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #f1c40f;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5">
      <div class="well" style="height:300px;background: #e67e22;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #e74c3c;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>

    <div class="col-md-7">
      <div class="well" style="height:300px;background: #ecf0f1;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #95a5a6;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="well" style="height:300px;background: #f39c12;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #d35400;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>

    <div class="col-md-6">
      <div class="well" style="height:300px;background: #c0392b;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
      <div class="well" style="height:300px;background: #bdc3c7;" data-sb="<?php echo implode(',', $effects);?>" data-sb-hide="fadeOutUp"></div>
    </div>
  </div>
</div>
</body>
</html>
