// boilerplate.js

define([
  'jquery', 
  'underscore',
  'backbone'
], function($, _, Backbone){
    var Post = Backbone.Model.extend({
        "fb_id": 0,
        "text": "ללא תוכן",
        "likes": 0,
        "dislikes": 0,
        "tags": [],
        "post_date": "Sat Oct 13 2012 18:00:56 GMT+0200 (Jerusalem Standard Time)",
        "author": "אנונימי"
    });
    
    return Post;
});