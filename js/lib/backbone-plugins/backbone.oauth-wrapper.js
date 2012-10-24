define([
    'underscore',
    'backbone',
    'url-consts',
    'backbone-oauth'
], function(_, Backbone, UrlConsts) {
    _.extend(Backbone.OAuth.configs.Facebook, {
        client_id: '381519905266805',
        redirect_url: window.location.protocol + '//' + window.location.host + '/auth_redirect.html',

        // Called after successful authentication.
        onSuccess: function(params) {

            // Get the user's data from Facebook's graph api.
            $.ajax('https://graph.facebook.com/me?access_token=' + params.access_token, {
                success: function(data) {
                    alert('Howdy, ' + data.name);
                }
            });
        }
    });
    
    var FB = new Backbone.OAuth(Backbone.OAuth.configs.Facebook);
    
    return FB;
});