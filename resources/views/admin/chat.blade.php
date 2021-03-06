<!DOCTYPE html><html class=''>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>

    <script src="https://use.typekit.net/hoy3lrg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    
    <link rel="stylesheet" type="text/css" href="{{ url('css/chat.css') }}">

    <style class="cp-pen-styles">
    #frame {
        width: 40%;
        min-width: 360px;
        max-width: 1200px;
        height: 92vh;
        min-height: 300px;
        max-height: 600px;
        background: #9cb3ce;
        margin-left: 20px;
        border-radius: 10px;
    }
   
    #frame #sidepanel #profile {
    width: 80%;
    margin: 25px auto;
    }
    #frame #sidepanel #profile.expanded .wrap {
    height: 210px;
    line-height: initial;
    }
    #frame #sidepanel #profile.expanded .wrap p {
    margin-top: 20px;
    }
    #frame #sidepanel #profile.expanded .wrap i.expand-button {
    -moz-transform: scaleY(-1);
    -o-transform: scaleY(-1);
    -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
    filter: FlipH;
    -ms-filter: "FlipH";
    }
    #frame #sidepanel #profile .wrap {
    height: 60px;
    line-height: 60px;
    overflow: hidden;
    -moz-transition: 0.3s height ease;
    -o-transition: 0.3s height ease;
    -webkit-transition: 0.3s height ease;
    transition: 0.3s height ease;
    }
    #frame #sidepanel #profile .wrap img {
    width: 50px;
    border-radius: 50%;
    padding: 3px;
    border: 2px solid #e74c3c;
    height: auto;
    float: left;
    cursor: pointer;
    -moz-transition: 0.3s border ease;
    -o-transition: 0.3s border ease;
    -webkit-transition: 0.3s border ease;
    transition: 0.3s border ease;
    }
    #frame #sidepanel #profile .wrap img.online {
    border: 2px solid #2ecc71;
    }
    #frame #sidepanel #profile .wrap img.away {
    border: 2px solid #f1c40f;
    }
    #frame #sidepanel #profile .wrap img.busy {
    border: 2px solid #e74c3c;
    }
    #frame #sidepanel #profile .wrap img.offline {
    border: 2px solid #95a5a6;
    }
    #frame #sidepanel #profile .wrap p {
    float: left;
    margin-left: 15px;
    }
    #frame #sidepanel #profile .wrap i.expand-button {
    float: right;
    margin-top: 23px;
    font-size: 0.8em;
    cursor: pointer;
    color: #435f7a;
    }
    #frame #sidepanel #profile .wrap #status-options {
    position: absolute;
    opacity: 0;
    visibility: hidden;
    width: 150px;
    margin: 70px 0 0 0;
    border-radius: 6px;
    z-index: 99;
    line-height: initial;
    background: #435f7a;
    -moz-transition: 0.3s all ease;
    -o-transition: 0.3s all ease;
    -webkit-transition: 0.3s all ease;
    transition: 0.3s all ease;
    }
    #frame #sidepanel #profile .wrap #status-options.active {
    opacity: 1;
    visibility: visible;
    margin: 75px 0 0 0;
    }
    #frame #sidepanel #profile .wrap #status-options:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 8px solid #435f7a;
    margin: -8px 0 0 24px;
    }
    #frame #sidepanel #profile .wrap #status-options ul {
    overflow: hidden;
    border-radius: 6px;
    }
    #frame #sidepanel #profile .wrap #status-options ul li {
    padding: 15px 0 30px 18px;
    display: block;
    cursor: pointer;
    }
    #frame #sidepanel #profile .wrap #status-options ul li:hover {
    background: #496886;
    }
    #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 5px 0 0 0;
    }
    #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
    content: '';
    position: absolute;
    width: 14px;
    height: 14px;
    margin: -3px 0 0 -3px;
    background: transparent;
    border-radius: 50%;
    z-index: 0;
    }
    #frame #sidepanel #profile .wrap #status-options ul li p {
    padding-left: 12px;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
    background: #2ecc71;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
    border: 1px solid #2ecc71;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
    background: #f1c40f;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
    border: 1px solid #f1c40f;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
    background: #e74c3c;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
    border: 1px solid #e74c3c;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
    background: #95a5a6;
    }
    #frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
    border: 1px solid #95a5a6;
    }
    #frame #sidepanel #profile .wrap #expanded {
    padding: 100px 0 0 0;
    display: block;
    line-height: initial !important;
    }
    #frame #sidepanel #profile .wrap #expanded label {
    float: left;
    clear: both;
    margin: 0 8px 5px 0;
    padding: 5px 0;
    }
    #frame #sidepanel #profile .wrap #expanded input {
    border: none;
    margin-bottom: 6px;
    background: #32465a;
    border-radius: 3px;
    color: #f5f5f5;
    padding: 7px;
    width: calc(100% - 43px);
    }
    #frame #sidepanel #profile .wrap #expanded input:focus {
    outline: none;
    background: #435f7a;
    }
    #frame #sidepanel #search {
    border-top: 1px solid #32465a;
    border-bottom: 1px solid #32465a;
    font-weight: 300;
    }
    #frame #sidepanel #search label {
    position: absolute;
    margin: 10px 0 0 20px;
    }
    #frame #sidepanel #search input {
    font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
    padding: 10px 0 10px 46px;
    width: calc(100% - 25px);
    border: none;
    background: #32465a;
    color: #f5f5f5;
    }
    #frame #sidepanel #search input:focus {
    outline: none;
    background: #435f7a;
    }
    #frame #sidepanel #search input::-webkit-input-placeholder {
    color: #f5f5f5;
    }
    #frame #sidepanel #search input::-moz-placeholder {
    color: #f5f5f5;
    }
    #frame #sidepanel #search input:-ms-input-placeholder {
    color: #f5f5f5;
    }
    #frame #sidepanel #search input:-moz-placeholder {
    color: #f5f5f5;
    }
    #frame #sidepanel #contacts {
    height: calc(100% - 177px);
    overflow-y: scroll;
    overflow-x: hidden;
    }
    #frame #sidepanel #contacts::-webkit-scrollbar {
        display: none;
    }
    }
    #frame #sidepanel #contacts.expanded {
    height: calc(100% - 334px);
    }
    #frame #sidepanel #contacts::-webkit-scrollbar {
    width: 8px;
    background: #2c3e50;
    }
    #frame #sidepanel #contacts::-webkit-scrollbar-thumb {
    background-color: #243140;
    }
    #frame #sidepanel #contacts ul li.contact {
    position: relative;
    padding: 10px 0 15px 0;
    font-size: 0.9em;
    cursor: pointer;
    }
    #frame #sidepanel #contacts ul li.contact:hover {
    background: #32465a;
    }
    #frame #sidepanel #contacts ul li.contact.active {
    background: #32465a;
    border-right: 5px solid #435f7a;
    }
    #frame #sidepanel #contacts ul li.contact.active span.contact-status {
    border: 2px solid #32465a !important;
    }
    #frame #sidepanel #contacts ul li.contact .wrap {
    width: 88%;
    margin: 0 auto;
    position: relative;
    }
    #frame #sidepanel #contacts ul li.contact .wrap span {
    position: absolute;
    left: 0;
    margin: -2px 0 0 -2px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 2px solid #2c3e50;
    background: #95a5a6;
    }
    #frame #sidepanel #contacts ul li.contact .wrap span.online {
    background: #2ecc71;
    }
    #frame #sidepanel #contacts ul li.contact .wrap span.away {
    background: #f1c40f;
    }
    #frame #sidepanel #contacts ul li.contact .wrap span.busy {
    background: #e74c3c;
    }
    #frame #sidepanel #contacts ul li.contact .wrap img {
    width: 40px;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
    }
    #frame #sidepanel #contacts ul li.contact .wrap .meta {
    padding: 5px 0 0 0;
    }
    #frame #sidepanel #contacts ul li.contact .wrap .meta .name {
    font-weight: 600;
    }
    #frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
    margin: 5px 0 0 0;
    padding: 0 0 1px;
    font-weight: 400;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -moz-transition: 1s all ease;
    -o-transition: 1s all ease;
    -webkit-transition: 1s all ease;
    transition: 1s all ease;
    }
    #frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
    position: initial;
    border-radius: initial;
    background: none;
    border: none;
    padding: 0 2px 0 0;
    margin: 0 0 0 1px;
    opacity: .5;
    }
    #frame #sidepanel #bottom-bar {
    position: absolute;
    width: 100%;
    bottom: 0;
    }
    #frame #sidepanel #bottom-bar button {
    float: left;
    border: none;
    width: 50%;
    padding: 10px 0;
    background: #32465a;
    color: #f5f5f5;
    cursor: pointer;
    font-size: 0.85em;
    font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
    }
    #frame #sidepanel #bottom-bar button:focus {
    outline: none;
    }
    #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: 1px solid #2c3e50;
    }
    #frame #sidepanel #bottom-bar button:hover {
    background: #435f7a;
    }
    #frame #sidepanel #bottom-bar button i {
    margin-right: 3px;
    font-size: 1em;
    }

    #frame .content {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
        border-radius: 10px;
    }
    
    #frame .content .contact-profile {
    width: 100%;
    height: 60px;
    line-height: 60px;
    background: wheat;
    }
    #frame .content .contact-profile img {
    width: 45px;
    height: 40px;
    border-radius: 50%;
    float: left;
    margin: 9px 12px 0 9px;
    }
    #frame .content .contact-profile p {
    float: left;
    }
    #frame .content .contact-profile .social-media {
    float: right;
    }
    #frame .content .contact-profile .social-media i {
    margin-left: 14px;
    cursor: pointer;
    }
    #frame .content .contact-profile .social-media i:nth-last-child(1) {
    margin-right: 20px;
    }
    #frame .content .contact-profile .social-media i:hover {
    color: #435f7a;
    }
    #frame .content .messages {
        height: auto;
        min-height: calc(100% - 93px);
        max-height: calc(100% - 93px);
    }
    #frame .content .messages::-webkit-scrollbar {
    width: 8px;
    background: transparent;
    }
    #frame .content .messages::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.3);
    }
    #frame .content .messages ul li {
    display: inline-block;
    clear: both;
    float: left;
    margin: 15px 15px 5px 15px;
    width: calc(100% - 25px);
    font-size: 0.9em;
    }
    #frame .content .messages ul li:nth-last-child(1) {
    margin-bottom: 20px;
    }
    #frame .content .messages ul li.sent img {
    margin: 2px 8px 0 0;
    }
    #frame .content .messages ul li.sent p {
    background: #435f7a;
    color: #f5f5f5;
    }
    #frame .content .messages ul li.replies img {
    float: right;
    margin: 0;
    }
    #frame .content .messages ul li.replies p {
    background: #f5f5f5;
    float: right;
    }
    #frame .content .messages ul li img {
    width: 40px;
    height: 35px;
    border-radius: 50%;
    float: left;
    }
    #frame .content .messages ul li p {
    display: inline-block;
    padding: 10px 15px;
    border-radius: 20px;
    max-width: 205px;
    line-height: 130%;
    }
    #frame .content .message-input {
    position: absolute;
    bottom: 0;
    width: 100%;
    z-index: 99;
    }
    #frame .content .message-input .wrap {
    position: relative;
    }
    #frame .content .message-input .wrap input {
        font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
        float: left;
        border: none;
        width: 88%;
        padding: 11px 32px 10px 8px;
        font-size: 0.8em;
        color: #32465a;
        margin-left: 4px;
        transform: translateY(5px);
    }
    #frame .content .message-input .wrap input:focus {
    outline: none;
    }
    #frame .content .message-input .wrap .attachment {
    position: absolute;
    right: 60px;
    z-index: 4;
    margin-top: 10px;
    font-size: 1.1em;
    color: #435f7a;
    opacity: .5;
    cursor: pointer;
    }
    
    #frame .content .message-input .wrap .attachment:hover {
    opacity: 1;
    }
    #frame .content .message-input .wrap button {
    float: right;
    border: none;
    width: 50px;
    padding: 12px 0;
    cursor: pointer;
    background: #32465a;
    color: #f5f5f5;
    margin-right: 5px;
    margin-bottom: 5px;
    }
    #frame .content .message-input .wrap button:hover {
    background: #435f7a;
    }
    #frame .content .message-input .wrap button:focus {
    outline: none;
    }
</style>
</head>

<body>
    @extends('home_page')

    @section('homepage')

    <div class="wrap-head">
        <p>Thanh ??i???u khi???n</p>
        <span>/</span>
        <a href="#">Chat</a>
    </div>

    <div class="wrap-content">
        <div class="test">
            <input type="text" placeholder="M?? sinh vi??n">
            <i class="fa fa-user-alt"></i>
            <div class="line"></div>
            <div class="test_messages">
                <ul>
                </ul>
            </div>
        </div>

        <div id="frame">
            <div class="content">
                <div class="contact-profile">
                    <img src="{{ Storage::url( Auth::user()->path ) }}" alt="" />
                    <p>{{ Auth::user()->name }}</p>
                </div>
                <div class="messages">
                    <ul>
                    </ul>
                </div>
                <div class="message-input">
                    <div class="wrap">
                        <input type="text" placeholder="Nh???p l???i nh???n c???a b???n..." />
                        <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script >
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");

        $("#profile-img").click(function() {
            $("#status-options").toggleClass("active");
        });

        $(".expand-button").click(function() {
        $("#profile").toggleClass("expanded");
            $("#contacts").toggleClass("expanded");
        });

        $("#status-options ul li").click(function() {
            $("#profile-img").removeClass();
            $("#status-online").removeClass("active");
            $("#status-away").removeClass("active");
            $("#status-busy").removeClass("active");
            $("#status-offline").removeClass("active");
            $(this).addClass("active");
            
            if($("#status-online").hasClass("active")) {
                $("#profile-img").addClass("online");
            } else if ($("#status-away").hasClass("active")) {
                $("#profile-img").addClass("away");
            } else if ($("#status-busy").hasClass("active")) {
                $("#profile-img").addClass("busy");
            } else if ($("#status-offline").hasClass("active")) {
                $("#profile-img").addClass("offline");
            } else {
                $("#profile-img").removeClass();
            };
            
            $("#status-options").removeClass("active");
        });


        //------------Send---------------
        function newMessage() {
            var formComment = new FormData();
            var message = $('.message-input input').val();
            var test = $('.test input').val();
            formComment.append('message', message);
            formComment.append('test', test);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                contentType: false,
                processData: false,
                url: '{{ route('admin.chat.submit') }}',
                type: 'POST',
                dataType: 'json',
                data: formComment,
                success: function (response) {
                    $('<li class="sent"><img src="{{ Storage::url( Auth::user()->path ) }}" alt="" /><p>' + response.message + '</p></li>').appendTo($('.messages ul'));
                    $('.message-input input').val(null);
                    var list_mess = $('.test_messages ul li p');
                    var check = true;
                    for (var i = 0; i < list_mess.length; i++) {
                        if (test == list_mess[i].innerHTML) {
                            check = false;
                        }
                    }
                    if (check) {
                        $('<li class="test_sent"><img src="{{ url('img/male_color.png') }}" alt="" /><p>' + response.test + '</p></li>').appendTo($('.test_messages ul'));
                    }
                }, 
                error: function () {
                    alert("C?? l???i x???y ra");
                },
            });
        };

        // $(window).on('keydown', function(e) {
        //     if (e.which == 13) {
        //         newMessage();
        //         return false;
        //     }
        // });

        $('.submit').click(function (e) {
            e.preventDefault();
            newMessage();
        });

        $('.test input').change(function() {
            $('.sent').remove();
            $('.replies').remove();
        });

        // --------------Receive--------------------
        Pusher.logToConsole = true;

        var pusher = new Pusher('fa577ee0b65a63ccf436', {
            cluster: 'ap1'
        });


        var channel = pusher.subscribe('chat-with-admin');

        channel.bind('event-chat-client', function (data) {
            $(".messages").animate({scrollTop: $(document).height()}, "fast");
            $('<li class="replies"><img src="{{ url('img/male_color.png') }}" alt="" /><p>' + data.message + '</p></li>').appendTo($('.messages ul'));
        });

    //# sourceURL=pen.js
    </script>

    @endsection 
</body>
</html>