// http://localhost:8080/index.php/api/posts.json

define([
  'jquery',
  'underscore',
  'backbone',
  'url-consts',
  'models/Post'
], function($, _, Backbone, UrlConsts, Post){
    var PostCollection = Backbone.Collection.extend({
        model: Post,
        url: UrlConsts.API.POSTS
    });
    
    return PostCollection;
});