define([
    'underscore',
    'jquery',
    'backbone',
    'url-consts',
    'facebook'
], function(_, $, Backbone, UrlConsts, FB) {
    var SessionModel = Backbone.Model.extend({
            defaults : {
                id : null,
                third_party_id : null,
                name : null,
                email : null,
                status : 0
            },
    
            isAuthorized : function() {
                /* true if third_party_id exists */
                return Boolean(this.get("third_party_id"));
            },
    
            logout : function() {
                /* destroy session */
                this.id = "";
                this.clear();
                this.trigger("logout");
            },
    
            login : function(opts) {    
                /* run optional passed user func */
                opts.before && opts.before();
    
                _session = this;
                this._onALWAYS = function() {
                    opts.after && opts.after();
                    this.trigger("login");
                };
                this._onERROR = function() {
                };
                this._onSUCCESS = function(result) {
                };
    
                this._getuserdata = function(callback) {
                    /* Here you can assemble a query */
                    FB.api('/me?fields=third_party_id,email,name', function(response) {
                        if (!response || response.error) {
                            callback(true, response.error);
                        } else {
                            callback(null, response);
                        }
                    });

                };
    
                this._savesession = function(user, callback) {
                    /* if third_party_id exist its totally okay */
                    if (user['third_party_id']) {
                        _session.set({
                            id : user['id'],
                            third_party_id : user['third_party_id'],
                            name : user['name'],
                            email : user['email'],
                            status : "1"
                        }, {
                            silent : true
                        });
                        callback(null, "Everything is wonderful.");
                    } else {
                        callback(true, "third_party_id check failed!");
                        return false;
                    }
                }
    
                FB.login(function(response) {
                    if (response.authResponse) {

                        /* Use async.js to run async functions in a row */
                        async.waterfall([ _session._getuserdata,
                                _session._savesession, ], function(err,
                                result) {
                            !!err && _session._onERROR(result);
                            !!!err && _session._onSUCCESS(result);
                            _session._onALWAYS(result);
                        });

                    } else {
                        _session
                                ._onERROR('User cancelled login or did not fully authorize.');
                    }
                }, {
                    scope : 'email,user_likes'
                });
            }  
    });
            
    return SessionModel;
});