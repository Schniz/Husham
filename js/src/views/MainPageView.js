// MainPageView.js

define([
  'jquery',
  'underscore',
  'backbone',
  'views/MultiView'
], function($, _, Backbone, MultiView){
    var MainPageView = MultiView.extend({
        el: $(".main-page")
    });
    
    return MainPageView;
});