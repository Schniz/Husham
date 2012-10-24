// MultiView.js

define([
  'jquery',
  'underscore',
  'backbone',
  'views/assets/LoadingView'
], function($, _, Backbone, LoadingView){
    var MultiView = Backbone.View.extend({
        currentView: [],
        loadingView: new LoadingView({
            className : "loading-img main-page-loading-image"
        }),
        /**
         * Sets the view
         */
        setView : function(view) {
            if (!_.isArray(view)) {
                view = [view];
            }
            
            this.currentView = view;
        },
        
        addView : function(view) {
            if (!_.isArray(view)) {
                view = [view];
            }
            
            _.each(view, function(oneView) {
                this.currentView.push(oneView);
            }, this);
        },
        
        clearView : function() {
            this.currentView = [];
        },
        
        /**
         * Renders the view
         */
        render: function() {
            // Get the view
            var currentView = this.currentView;
            
            if (currentView !== null) {
                this.$el.html(this.loadingView.$el, "fast");
                var renderedViews = _.map(currentView, function(view) { 
                    if (!view.rendered) {
                        view.render();
                        view.rendered = true;
                    }
                    
                    return view.$el;
                });
                
                this.$el.htmlFade(renderedViews, "fast");
                
                return this;
            }
        }
    });
    
    return MultiView;
});