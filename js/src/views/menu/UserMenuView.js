define([
  'jquery',
  'underscore',
  'backbone',
  'hgn!templates/UserMenuView'
], function($, _, Backbone, Template){
	var UserMenuView = Backbone.View.extend({
	    el : $(".user-menu"),
	    initialize: function(options) {
	        this.model.bind("login", this.render, this);
	        this.model.bind("logout", this.render, this);
	        this.render();
	    },
	    events : {
	        "click .fb-login-link" : "loginWithFacebook",
	        "click .logout-link" : "logout"
	    },
	    render : function() {
	        this.$el.html(Template(this.model.toJSON()));
	    },
	    loginWithFacebook : function() {
	        this.model.login({
	            before: function() {
	                $(".loading-overlay").fadeIn();
	            }, 
	            after: function() {
	                $(".loading-overlay").fadeOut();
	            }
	        });
	        return false;
	    },
	    logout: function() {
	        this.model.logout();
	        return false;
	    }
	});
	
	return UserMenuView;
});