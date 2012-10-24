// require.js config
requirejs.config({
  paths: {
	// Plugins 
	'text' : 'require-plugins/text',
	'hgn' : 'require-plugins/hgn',
	  
	// unwrapped-lib
	'hogan-unwrapped' : 'lib/hogan-2.0.0',
	'backbone-paginator-unwrapped' : 'lib/backbone-plugins/backbone.paginator',
	'facebook-unwrapped' : '//connect.facebook.net/en_US/all',
	
	// lib 
    'jquery' : 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min',
    'jquery-ui' : 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min',
    'hogan' : 'lib/hogan-wrapper',
    'bootstrap' : 'lib/bootstrap',
    'less' : 'lib/less.1.3.0',
    'underscore' : 'lib/underscore',
    'backbone' : 'lib/backbone',
    'facebook' : 'lib/backbone-plugins/backbone.facebook',
    'async' : 'lib/async.min',
    
    // Backbone plugins
    'backbone-paginator' : 'lib/backbone-plugins/backbone.paginator-wrapper',
    'backbone-fbauth' : 'lib/backbone-plugins/backbone.fbauth',
    
    // Main app
    'app' : 'src/app',
    
    // Backbone
    'collections' : 'src/collections',
    'views' : 'src/views',
    'models' : 'src/models',
    'templates' : 'templates'
  }
});

require(['underscore',
         'jquery',
         'hogan',
         'backbone',
         'app',
         'jquery-ui',
         'backbone-paginator',
         'async'
        ], function(_, $, hogan, Backbone, Husham) {
	Husham.initialize();
	this.App = Husham;
});