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
    displayEffectInterval : 100,
    displayWords          : false
  },

  Init : function(container, settings) {
    this.containerObject = container;

    this.settings = jQuery.extend(1, this.settings, settings);

    this.setContainerPanels();

    this.displayAllPanels();
  },

  setContainerPanels : function() {
    var objectInstance = this;

    jQuery.each(this.containerObject.html().split("\n"), function(index, content) {
      if($.trim(content) != "")
        objectInstance.containerPanels[objectInstance.containerPanels.length]
            = jQuery.extend(1,
                            {
                              'content'                 : $.trim(content)
                            },
                            objectInstance.settings);
    });

    this.containerObject.html('');
  },

  displayAllPanels : function() {
    var objectInstance = this;

    $.each(this.containerPanels, function(key, panel){
      objectInstance.displayPanel(key);
    });
  },

  displayPanel : function(panelNumber) {
    var currentContentFragments = this._fragmentPanelContent(panelNumber),
        objectInstance          = this,
        currentPanel            = this.containerPanels[panelNumber];

    $.each(currentContentFragments, function(key, fragment){
      objectInstance.containerObject.append(
          '<span style="display: inline-block;animation-delay:' + (key * currentPanel.displayEffectInterval / 1000) + 's" ' +
                'class="animated ' + objectInstance._getRandomSettingElement(currentPanel.displayEffect) + '">' +
              fragment +
          '</span>'
      );
    });

    objectInstance.containerObject.append('<br/>');
  },

  _fragmentPanelContent : function(panelNumber) {
    var currentPanel        = this.containerPanels[panelNumber],
        currentPanelContent = currentPanel.content,
        panelFragments      = [];

    if(currentPanel.displayWords == true) {
      var words = currentPanelContent.split(' ');

      $.each(words, function(key, fragment){
        panelFragments[panelFragments.length] = fragment;
        panelFragments[panelFragments.length] = "&nbsp;";
      });
    } else {
      for(var i = 0; i < currentPanelContent.length; i++) {
        panelFragments[panelFragments.length] = (currentPanelContent[i] == " " ? '&nbsp;' : currentPanelContent[i]);
      }
    }

    return panelFragments;
  },

  _getRandomSettingElement : function(element) {
    return (element instanceof Array ? element[ Math.floor( Math.random() * element.length )] : element);
  }

};

jQuery(document).ready(function(){

  jQuery('.component-story-box').each(function(){
    if(jQuery(this).hasClass('dispatched'))
      return;

    jQuery(this).addClass('dispatched');

    var instance = jQuery.extend(1, StoryBox, {});

    var attributes = {}, params = {};

    jQuery.each( jQuery(this)[0].attributes, function( index, attr ) {
      attributes[ attr.name ] = attr.value;
    } );

    jQuery.each(attributes, function(key, value){
      if(key.indexOf('data-sb-') == 0) {
        var name = key.replace('data-sb-', '');

        name = name.replace(/-/g, '_');

        params[name] = value;
      }
    });

    instance.Init(jQuery(this), params);
  });

});