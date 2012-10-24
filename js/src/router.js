// Filename: app.js

define([
  // These are path alias that we configured in our bootstrap
  'jquery',
  'underscore',
  'backbone',
  'views/MainPageView',
  'views/MainPostView',
  'views/AddPostBoxView',
  'views/MainMultiPostView',
  'views/menu/UserMenuView'
], function($, _, Backbone, MainPageView, MainPostView, AddPostBoxView, MainMultiPostView, UserMenuView){
  // Above we have passed in jQuery, Underscore and Backbone
  // They will not be accessible in the global scope
	
	  var Router = Backbone.Router.extend({
	      mainPage : new MainPageView,
		  routes : {
			  "" : "main",
			  "last/:query" : "main"
		  },
	  
	  	  help : function() {
	  		  alert("HELP!!!");
	  	  },
		  
		  main : function(last) {
		      this.mainPage.clearView();
		      var addPostBoxView = new AddPostBoxView;
		      this.mainPage.addView(addPostBoxView);
		      
			  if (last === undefined) {
			      var multiPosts = new MainMultiPostView({
			          search: true
			      });
			      this.mainPage.addView(multiPosts);
			  } else {

			  }
			  
			  this.mainPage.render();
		  }
	  });
	  
	  function initialize(activeSession) {
		  var router = new Router;
		  router.userMenu = new UserMenuView({model: activeSession});
		  window.MainPage = router.mainPage;
		  Backbone.history.start();
	  }
	  
	  return { initialize: initialize };
  // What we return here will be used by other modules
});