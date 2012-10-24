// Filename: app.js

define([
  // These are path alias that we configured in our bootstrap
  'jquery',
  'underscore',
  'backbone',
  'backbone-fbauth',
  'src/router',
  'models/post'
], function($, _, Backbone, SessionModel, Router){
  // Above we have passed in jQuery, Underscore and Backbone
  // They will not be accessible in the global scope
  return {
	  initialize: function() {
	      this.activeSession = new SessionModel;
		  Router.initialize(this.activeSession);
	  }
  };
  // What we return here will be used by other modules
});