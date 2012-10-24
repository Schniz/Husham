// AddPostBoxView.js

define([
  'jquery', 
  'underscore',
  'backbone',
  'hgn!templates/AddPostBoxView'
], function($, _, Backbone, Template){
    var AddPostBoxView = Backbone.View.extend({
        tagName : "form",
        className : "well add-husham-box center hidden-phone",
        stories : [
            "עוד מבית הספר היסודי, ידעת שרצית אותה. ככל שהשנים עברו חשקת בה עוד ועוד - והיום, היא באה אליך בקפיטריה והזמינה אותך לצאת.\n" +
            "לפני שהספקת לאמר כן, הבאת עליה את האפצ'י הכי עצבני שהיה אי פעם."
        ],
        /**
         * Gets a random story
         */
        getStory : function() {
            allStories = this.stories;
            
            var storyData = { 
                "story" : allStories[_.random(allStories.length)] 
            };
            
            return storyData;
        },
        render : function() {
            this.$el.html(Template(this.getStory()))
        }
    });
    
    return AddPostBoxView;
});