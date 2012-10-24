/**************************
* Application
**************************/
Husham = Ember.Application.create({
	user: "gal",
	ready: function() {
		alert("YO");
	}
});

/**************************
* Models
**************************/
Husham.Post = Ember.Object.extend({
	"fb_id": 0,
	"text": "��� ����",
	"likes": 0,
	"dislikes": 0,
	"tags": [],
	"post_date": "Sat Oct 13 2012 18:00:56 GMT+0200 (Jerusalem Standard Time)",
	"author": "��� ��"
});

/**************************
* Views
**************************/
Ember.View.create({
	templateName: "husham-story-box",
   "fb_id": "544282961",
   "text": "היום הלכתי ברחוב. יצאתי חושם",
   "likes": 10,
   "dislikes": 6,
   "tags": [
       {
           "name": "שלום"
       },
       {
           "name": "אהלן"
       }
   ],
   "post_date": "Sat Oct 13 2012 18:00:56 GMT+0200 (Jerusalem Standard Time)",
   "author": "Gal Schlezinger",
   "author_image" : function() {
	   return function(text) {
		   return "https://graph.facebook.com/" + (this.fb_id) + "/picture/square";
	   }
   }
}).appendTo(".main-page");

/**************************
* Controllers
**************************/
Husham.postController = Em.ArrayController.create({
	content : [],
	loadHushams : function() {
		alert("Loading");
	}
});