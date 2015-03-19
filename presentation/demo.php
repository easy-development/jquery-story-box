<?php
  $effects = array(
    'fadeInUp', 'fadeInRight', 'fadeInDown', 'fadeInLeft', 'fadeInUpBig', 'fadeInRightBig', 'fadeInDownBig',
    'fadeInLeftBig',
    'zenFadeInUp', 'zenFadeInRight', 'zenFadeInDown', 'zenFadeInLeft', 'zenFadeInUpBig', 'zenFadeInRightBig', 'zenFadeInDownBig',
    'zenFadeInLeftBig',
    'bounceInUp', 'bounceInRight', 'bounceInDown', 'bounceInLeft', 'flipInX', 'flipInY',
    'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight',
    'pulse', 'swing', 'wobble', 'flash', 'tada',
  );

  $effectsDefault = array('zenFadeInUpBig', 'zenFadeInRightBig', 'zenFadeInDownBig', 'zenFadeInLeftBig');

  $effectsOut = array(
    'fadeOutUp', 'fadeOutRight', 'fadeOutDown', 'fadeOutLeft',
    'fadeOutUpBig', 'fadeOutRightBig', 'fadeOutDownBig', 'fadeOutLeftBig',
    'bounceOutUp', 'bounceOutRight', 'bounceOutDown', 'bounceOutLeft',
    'flipOutX', 'flipOutY',
    'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight','hinge',
  );

  $effectsOutDefault = array('fadeOutUp', 'fadeOutRight', 'fadeOutDown', 'fadeOutLeft');
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

  <script>

    var DemoController = {

      displayIframe : {},
      formObject    : {},
      demoURL       : 'clubix/index.php',

      Init : function() {
        this.displayIframe = $('#theIframe');
        this.formObject    = $('#theIframeController');

        this.bindFormActions();
      },

      bindFormActions : function() {
        var objectInstance = this;

        this.formObject.find('input[name="submit"]').click(function(event){
          event.preventDefault();

          objectInstance.displayIframe.attr('src', objectInstance.getDemoDisplayURL());

          $('html, body').animate({
            scrollTop: objectInstance.displayIframe.offset().top - 50
          }, 1000);
        });

        this.formObject.find('input[name="submit_new"]').click(function(event){
          event.preventDefault();

          window.open(objectInstance.getDemoDisplayURL());
        });
      },

      getDemoDisplayURL : function() {
        var effects = this.formObject.find('.effect:checked'),
            effectsOut = this.formObject.find('.effect-hide:checked'),
            effectsCount = this.formObject.find('.effect:checked').length,
            effectsOutCount = this.formObject.find('.effect-hide:checked').length;

        var url = this.demoURL;

        url += '?effect=';

        effects.each(function(index){
          url += $(this).val();

          if(index + 1< effectsCount)
            url += ',';
        });

        url += '&hide-effect=';

        effectsOut.each(function(index){
          url += $(this).val();

          if(index + 1 < effectsOutCount)
            url += ',';
        });

        return url;
      }
    };

    $(document).ready(function(){
      DemoController.Init();
    });

  </script>
</head>

<body>

  <?php require_once('header.php');?>

  <div class="jumbotron">
    <div class="container">
      <h2 class="text-primary text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Story Box - Demonstration</h2>

      <h3 class="text-danger text-center" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Build your own demonstration</h3>

      <h3 class="text-center text-success" data-sb="fadeInLeftBig" data-sb-hide="fadeOutUp">Chose your desired effects & Enjoy your own demonstration :)</h3>
    </div>
  </div>

  <div class="container" style="width:100%;">
    <form id="theIframeController">
      <div class="row">
        <div class="col-md-6">
            <h2 class="text-success">Entrance Effects</h2>
            <table class="table table-bordered">
              <tr>
                <?php $i = 1;foreach($effects as $effect) : ?>
                  <td>
                    <input id="effect-<?php echo $effect;?>"
                           type="checkbox"
                           name="effect[]"
                           class="effect"
                           value="<?php echo $effect?>"
                          <?php echo in_array($effect, $effectsDefault) ? 'checked="checked"' : '';?>
                        />
                    <label for="effect-<?php echo $effect;?>"><?php echo $effect?></label>
                  </td>
                  <?php echo $i % 4 == 0 ? '</tr><tr>' : '';?>
                <?php $i++;endforeach;?>
              </tr>
            </table>
        </div>
        <div class="col-md-6">
          <h2 class="text-primary">Hide Effects</h2>
          <table class="table table-bordered">
            <tr>
              <?php $i = 1;foreach($effectsOut as $effect) : ?>
                <td>
                  <input id="effect-hide-<?php echo $effect;?>"
                         type="checkbox"
                         name="effect-hide[]"
                         class="effect-hide" value="<?php echo $effect?>"
                         <?php echo in_array($effect, $effectsOutDefault) ? 'checked="checked"' : '';?>/>
                  <label for="effect-hide-<?php echo $effect;?>"><?php echo $effect?></label>
                </td>
                <?php echo $i % 4 == 0 ? '</tr><tr>' : '';?>
                <?php $i++;endforeach;?>
            </tr>
          </table>
        </div>
      </div>
      <input name="submit" class="btn btn-success" style="font-size: 25px;width: 49%;" value="Apply" type="submit"/>
      <input name="submit_new" class="btn btn-primary" style="font-size: 25px;width: 49%;" value="New Window" type="submit"/>
    </form>
  </div>

  <br/>

  <div class="container" style="width:100%;">
    <div class="alert alert-danger text-center">
      This Preview is based on an iframe, if you have problems viewing it, please click "New Window"
    </div>
    <iframe id="theIframe" style="width:100%;height:600px;border: 0;" src="clubix/index.php">Your Browser doesn't support iframes.</iframe>
  </div>

  <?php require_once('footer.php');?>
</body>
</html>
