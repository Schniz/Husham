// MainPostView.js

define([
// These are path alias that we configured in our bootstrap
    'jquery',
    'underscore',
    'backbone',
    'models/Post',
    'hgn!templates/MainPostView'
], function($, _, Backbone, Post, Template) {
    var MainPostView = Backbone.View.extend({
        tagName : "article",
        className : "husham-box",
        initialize : function() {
            this.options = _.defaults(this.options, {
                model: new Post
            });
            
            // Bind to the changes
            _.bindAll(this, 'render');
            this.options.model.bind('change', this.render);
        },
        events : {
            'click .like-post' : 'likePost',
            'click .dislike-post' : 'dislikePost'
        },
        likePost : function() {
            alert("LIKE!");
            var $likeBox = this.$(".like-post");
            $likeBox.replaceJustText((parseInt($likeBox.text()) + 1) + " ");
            return false;
        },
        dislikePost : function() {
            alert("DISLIKE!");
            return false;
        },
        render : function() {
            var model = this.options.model;
            
            this.$el.html(Template(model.toJSON(), {asString: true}));
            
            return this;
        }
    });
    
    return MainPostView;
    // What we return here will be used by other modules
});