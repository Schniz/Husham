define([
  'jquery',
  'underscore',
  'backbone'
], function($, _, Backbone){
    var LoadingView = Backbone.View.extend({
        tagName : "div",
        className : "loading-img",
        render : function() {
            return this;
        }
    });
    
    return LoadingView;
});