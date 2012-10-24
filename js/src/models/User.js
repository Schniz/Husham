define([
  'jquery',
  'underscore',
  'backbone'
], function($, _, Backbone){
    var UserSession = Backbone.Model.extend({
        defaults: {
            sessionId: "",
            isFbUser: "",
            hashedPass: "",
            name: ""
        },
        
        isAuthorized: {
            return Boolean(this.get('sessionId'));
        },
        
        checkCreds: {
            // Ajax call
            
            return true;
        }
    });
    
    return UserSession;
});