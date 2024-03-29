<!doctype html><html lang=en manifest=webogram.appcache ng-csp="" xmlns:ng=http://angularjs.org id=ng-app><head><meta charset=utf-8><meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><title>Telegram TuTecnoMundo</title><link rel=stylesheet href=css/app.css><link rel=icon href=favicon.ico type=image/x-icon><link rel=apple-touch-icon href=img/iphone_home120.png><link rel=apple-touch-icon sizes=120x120 href=img/iphone_home120.png><link rel=apple-touch-startup-image media="(device-width: 320px)" href=img/iphone_startup.png><meta name=apple-mobile-web-app-title content="Telegram Web"><meta name=mobile-web-app-capable content=yes><meta name=apple-mobile-web-app-capable content=yes><meta name=apple-mobile-web-app-status-bar-style content=black-translucent><meta name=theme-color content=#497495><meta name=google content=notranslate><meta property=og:title content="Telegram Web"><meta property=og:url content="https://web.telegram.org/"><meta property=og:image content=https://web.telegram.org/img/logo_share.png><meta property=og:site_name content="Telegram Web"><meta property=og:description content="Welcome to the Web application of Telegram messenger. See https://github.com/zhukov/webogram for more info."></head>
<?php include 'head.php'; ?>
    <style>
        #nav {
            position: inherit;
        }
    </style>
	</head>
    <body>
        <?php include 'header.php'; ?>
<div class=page_wrap ng-view=""></div>
<div id=notify_sound></div>
<script src=js/app.js></script>
</body>
</html>