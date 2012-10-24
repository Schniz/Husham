define(['url-consts', 'facebook-unwrapped' ], function(UrlConsts) {
    window.fbAsyncInit = function() {
        FB.init({
            appId : UrlConsts.Facebook.AppId,
            //channelUrl : '//your/path/to/channel.php',
            status : true, // check login status
            cookie : true, // enable cookies to allow the server to access the session
            xfbml : true
        // parse XFBML
        });

        FB.getLoginStatus(function(response) {
            console.log('FB resp:', response, response.status);
            /* Bind event handler only after Facebook SDK had a nice cup of coffee */
            $('.facebook-login-button').on('click', function() {
                window.activeSession.login({
                    before : function() {
                        console.log('before login()')
                    },
                    after : function() {
                        console.log('after login()')
                    }
                });
            });
        });
        
    };
    
    return FB;
})