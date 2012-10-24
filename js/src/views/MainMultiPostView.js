define([
  'jquery',
  'underscore',
  'backbone',
  'views/MultiView',
  'views/MainPostView',
  'collections/PostCollection',
  'models/Post'
], function($, _, Backbone, MultiView, MainPostView, PostCollection, Post){
	var MainMultiPostView = MultiView.extend({
	    postCollection : null,
	    // Must get "search: { }"
	    initialize: function(options) {
	        if (!this.options.search) {
	            throw Error("Add search criteria");
	        }
	        _.bindAll(this, "addOne");
	        _.bindAll(this, "addAll");
	        _.bindAll(this, "render");
	        this.postCollection = new PostCollection({search : this.options.search});
	        this.postCollection.bind("reset", this.addAll, this);
	        this.postCollection.bind("add", this.addOne, this);
	        this.postCollection.bind("all", this.render, this);
	        this.postCollection.fetch();
	    },
	    addOne: function(item) {
	        var post = new Post(item);
	        this.addView(new MainPostView({model: post}));
	    },
	    addAll: function() {
	        var postCollection = this.postCollection;
	        var views = postCollection.map(function(item) {
	            var post = new Post(item);
	            return new MainPostView({model: post});
	        });
	        this.addView(views);
	    }
	});
	
	return MainMultiPostView;
});