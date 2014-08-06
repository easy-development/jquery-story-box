/**
 * Created with JetBrains PhpStorm.
 * User: rusuandreirobert
 * Date: 03/12/13
 * Time: 08:32
 * Effect Appear list :
 *    'fadeInUp', 'fadeInRight', 'fadeInDown', 'fadeInLeft',
 *    'fadeInUpBig', 'fadeInRightBig', 'fadeInDownBig', 'fadeInLeftBig'
 *    'bounceInUp', 'bounceInRight', 'bounceInDown', 'bounceInLeft'
 *    'flipInX', 'flipInY'
 *    'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight'
 * Effect Out List :
 *    'hinge'
 *    'fadeOutUp', 'fadeOutRight', 'fadeOutDown', 'fadeOutLeft',
 *    'fadeOutUpBig', 'fadeOutRightBig', 'fadeOutDownBig', 'fadeOutLeftBig'
 *    'bounceOutUp', 'bounceOutRight', 'bounceOutDown', 'bounceOutLeft'
 *    'flipOutX', 'flipOutY'
 *    'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight'
 */
var StoryBox = {

  containerObject             : {},
  containerPanels             : [],
  settings : {
    displayEffect         : ['bounceInUp', 'bounceInRight', 'bounceInDown', 'bounceInLeft'],
    hideEffect            : ['bounceOutUp', 'bounceOutRight', 'bounceOutDown', 'bounceOutLeft']
  },
  namespace                   : 'storybox',

  Init : function(container, settings) {
    this.namespace = this.namespace + '-' +  parseInt(Math.random() * 1000);

    this.containerObject = container;
    this.settings = jQuery.extend(1, this.settings, settings);

    this.setContainerPanels();
    this.loadPanels();
  },

  setContainerPanels : function() {
    var objectInstance = this;

    this.containerObject.find('[data-sb]').each(function(){
      objectInstance.containerPanels[objectInstance.containerPanels.length]
          = {
        'container'       : jQuery(this),
        'displayEffect'   :
            (jQuery.trim(jQuery(this).attr('data-sb')) == '' ?
                objectInstance.settings.displayEffect :
                (
                    jQuery(this).attr('data-sb').indexOf(',') != -1
                        ? jQuery(this).attr('data-sb').split(',')
                        : jQuery(this).attr('data-sb')
                    )
                ),
        'hideEffect'      :
            typeof jQuery(this).attr('data-sb-hide') != "undefined" ?
                (
                    jQuery.trim(jQuery(this).attr('data-sb-hide')) == '' ?
                        objectInstance.settings.hideEffect :
                        (
                            jQuery(this).attr('data-sb-hide').indexOf(',') != -1
                                ? jQuery(this).attr('data-sb-hide').split(',')
                                : jQuery(this).attr('data-sb-hide')
                            )
                    ) : false
      };
      $(this).css('opacity', 0);
    });
  },

  loadPanels   : function() {
    var objectInstance = this;

    jQuery(window).bind('scroll.' + this.namespace, function(){
      objectInstance._handleDisplay();
    });

    objectInstance._handleDisplay();
  },

  _handleDisplay : function() {
    var currentScrollTop        = jQuery(window).scrollTop() + window.innerHeight,
        objectInstance          = this;
    jQuery.each(objectInstance.containerPanels, function(key, panel){
      if(panel.container.hasClass('sb-effect-running'))
        return;

      if(currentScrollTop >= panel.container.offset().top
          && currentScrollTop <= ( panel.container.offset().top + (panel.container.height() * 0.7) + window.innerHeight)) {
        if(panel.container.hasClass('sb-effect-displayed'))
          return;

        panel.container.addClass('sb-effect-displayed sb-effect-running');

        var effect = objectInstance._getRandomSettingElement(panel.displayEffect);

        if(typeof panel.container.data('sb-effect') != "undefined")
          panel.container.removeClass('animated ' + panel.container.data('sb-effect'));

        panel.container.css('opacity', 1);
        panel.container.addClass('animated ' + effect);
        panel.container.data('sb-effect', effect);

        setTimeout(function(){
          panel.container.removeClass('sb-effect-running');
        }, 1000);
      } else if(panel.container.hasClass('sb-effect-displayed')) {
        if(panel.hideEffect != false) {
          panel.container.removeClass('sb-effect-displayed animated ' + panel.container.data('sb-effect'));

          var effect = objectInstance._getRandomSettingElement(panel.hideEffect);

          panel.container.addClass('animated ' + effect);
          panel.container.data('sb-effect', effect);
          panel.container.css('opacity', 1);
        }
      }
    });
  },

  unLoadPanels : function() {
    var objectInstance = this;

    this.containerPanels.each(function(){
      jQuery(this).unbind(objectInstance.namespace);
    });
  },


  _getRandomSettingElement : function(element) {
    return (element instanceof Array ? element[ Math.floor( Math.random() * element.length )] : element);
  }

};

jQuery(document).ready(function(){
  StoryBox.Init($('body'), {});
});