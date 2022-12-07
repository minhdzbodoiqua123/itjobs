<!DOCTYPE html>
<html lang="en">

<head>
    <base href="https://static.careerbuilder.vn/themes/employer/" />
    <meta charset="UTF-8">
    <title>Tuyển dụng và tìm kiếm việc làm nhanh | CareerBuilder.vn</title>
    <meta name="keywords" content="Kiem viec, tim viec lam, tuyen dung, viec lam, viec lam online, tim viec, mang tuyen dung, việc làm, tìm việc, kiếm việc, tuyển dụng, việc làm online" />
    <meta name="description" content="CareerBuilder.vn - Hơn 1,3 triệu ứng viên để lựa chọn, nhưng vẫn làm cho việc tuyển dụng dễ dàng và tiết kiệm nhờ các tính năng quản lý và nhắc nhở thông minh." />
    <link href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/changepassword" rel="canonical" />
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://careerbuilder.vn/favicon_careerbuilder_v2.ico" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /*global.css*/

        @charset "UTF-8";
        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-ThinItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-ThinItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-ThinItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-ThinItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-ThinItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-ThinItalic.svg#Barlow-ThinItalic") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 100;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Light.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Light.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Light.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Light.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Light.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Light.svg#Barlow-Light") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 300;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Bold.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Bold.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Bold.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Bold.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Bold.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Bold.svg#Barlow-Bold") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: bold;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Black.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Black.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Black.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Black.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Black.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Black.svg#Barlow-Black") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 900;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-MediumItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-MediumItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-MediumItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-MediumItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-MediumItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-MediumItalic.svg#Barlow-MediumItalic") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 500;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BoldItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BoldItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BoldItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BoldItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BoldItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BoldItalic.svg#Barlow-BoldItalic") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: bold;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Italic.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Italic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Italic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Italic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Italic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Italic.svg#Barlow-Italic") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: normal;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Regular.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Regular.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Regular.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Regular.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Regular.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Regular.svg#Barlow-Regular") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: normal;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BlackItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BlackItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BlackItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BlackItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BlackItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-BlackItalic.svg#Barlow-BlackItalic") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 900;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Thin.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Thin.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Thin.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Thin.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Thin.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Thin.svg#Barlow-Thin") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 100;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Medium.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Medium.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Medium.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Medium.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Medium.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-Medium.svg#Barlow-Medium") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 500;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-LightItalic.eot");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-LightItalic.eot?#iefix") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-LightItalic.woff2") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-LightItalic.woff") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-LightItalic.ttf") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Barlow-LightItalic.svg#Barlow-LightItalic") format('svg');
            font-display: swap;
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 300;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/materialdesignicons-webfont.eot?v=4.9.95");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/materialdesignicons-webfont.eot?#iefix&v=4.9.95") format("embedded-opentype"), url("https://static.careerbuilder.vn/themes/employer/fonts/materialdesignicons-webfont.woff2?v=4.9.95") format("woff2"), url("https://static.careerbuilder.vn/themes/employer/fonts/materialdesignicons-webfont.woff?v=4.9.95") format("woff"), url("https://static.careerbuilder.vn/themes/employer/fonts/materialdesignicons-webfont.ttf?v=4.9.95") format("truetype");
            font-display: swap;
            font-family: "Material Design Icons";
            font-style: normal;
            font-weight: normal;
        }

        .mdi:before,
        .mdi-set {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font: normal normal normal 24px/1 "Material Design Icons";
            font-size: inherit;
            line-height: inherit;
            text-rendering: auto;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Linearicons-Free.eot?w118d");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/Linearicons-Free.eot?#iefixw118d") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Linearicons-Free.woff2?w118d") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/Linearicons-Free.woff?w118d") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/Linearicons-Free.ttf?w118d") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/Linearicons-Free.svg?w118d#Linearicons-Free") format('svg');
            font-display: swap;
            font-family: 'Linearicons-Free';
            font-style: normal;
            font-weight: normal;
        }

        .lnr:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Linearicons-Free';
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
        }

        @font-face {
            font-display: swap;
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/material-icons.woff2") format('woff2');
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 500
        }

        .material-icons {
            word-wrap: normal;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-family: 'Material Icons';
            font-size: 24px;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            direction: ltr;
            text-transform: none;
            white-space: nowrap;
        }

        @font-face {
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/fontawesome-webfont.eot?v=4.7.0");
            src: url("https://static.careerbuilder.vn/themes/employer/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0") format('embedded-opentype'), url("https://static.careerbuilder.vn/themes/employer/fonts/fontawesome-webfont.woff2?v=4.7.0") format('woff2'), url("https://static.careerbuilder.vn/themes/employer/fonts/fontawesome-webfont.woff?v=4.7.0") format('woff'), url("https://static.careerbuilder.vn/themes/employer/fonts/fontawesome-webfont.ttf?v=4.7.0") format('truetype'), url("https://static.careerbuilder.vn/themes/employer/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format('svg');
            font-display: swap;
            font-family: 'FontAwesome';
            font-style: normal;
            font-weight: normal;
        }

        .fa {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
        }

        .fa-lg {
            font-size: 1.33333333em;
            line-height: 0.75em;
            vertical-align: -15%;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-fw {
            width: 1.28571429em;
            text-align: center;
        }

        .fa-ul {
            margin-left: 2.14285714em;
            padding-left: 0;
            list-style-type: none;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            position: absolute;
            top: 0.14285714em;
            left: -2.14285714em;
            width: 2.14285714em;
            text-align: center;
        }

        .fa-li.fa-lg {
            left: -1.85714286em;
        }

        .fa-border {
            padding: .2em .25em .15em;
            border: solid 0.08em #eeeeee;
            border-radius: .1em;
        }

        .fa-pull-left {
            float: left;
        }

        .fa-pull-right {
            float: right;
        }

        .fa.fa-pull-left {
            margin-right: .3em;
        }

        .fa.fa-pull-right {
            margin-left: .3em;
        }

        .pull-right {
            float: right;
        }

        .pull-left {
            float: left;
        }

        .fa.pull-left {
            margin-right: .3em;
        }

        .fa.pull-right {
            margin-left: .3em;
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            -ms-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical {
            -webkit-filter: none;
            filter: none;
        }

        .fa-stack {
            display: inline-block;
            position: relative;
            width: 2em;
            height: 2em;
            line-height: 2em;
            vertical-align: middle;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .fa-stack-1x {
            line-height: inherit;
        }

        .fa-stack-2x {
            font-size: 2em;
        }

        .fa-inverse {
            color: #ffffff;
        }

        .fa-glass:before {
            content: "\f000";
        }

        .fa-music:before {
            content: "\f001";
        }

        .fa-search:before {
            content: "\f002";
        }

        .fa-envelope-o:before {
            content: "\f003";
        }

        .fa-heart:before {
            content: "\f004";
        }

        .fa-star:before {
            content: "\f005";
        }

        .fa-star-o:before {
            content: "\f006";
        }

        .fa-user:before {
            content: "\f007";
        }

        .fa-film:before {
            content: "\f008";
        }

        .fa-th-large:before {
            content: "\f009";
        }

        .fa-th:before {
            content: "\f00a";
        }

        .fa-th-list:before {
            content: "\f00b";
        }

        .fa-check:before {
            content: "\f00c";
        }

        .fa-remove:before,
        .fa-close:before,
        .fa-times:before {
            content: "\f00d";
        }

        .fa-search-plus:before {
            content: "\f00e";
        }

        .fa-search-minus:before {
            content: "\f010";
        }

        .fa-power-off:before {
            content: "\f011";
        }

        .fa-signal:before {
            content: "\f012";
        }

        .fa-gear:before,
        .fa-cog:before {
            content: "\f013";
        }

        .fa-trash-o:before {
            content: "\f014";
        }

        .fa-home:before {
            content: "\f015";
        }

        .fa-file-o:before {
            content: "\f016";
        }

        .fa-clock-o:before {
            content: "\f017";
        }

        .fa-road:before {
            content: "\f018";
        }

        .fa-download:before {
            content: "\f019";
        }

        .fa-arrow-circle-o-down:before {
            content: "\f01a";
        }

        .fa-arrow-circle-o-up:before {
            content: "\f01b";
        }

        .fa-inbox:before {
            content: "\f01c";
        }

        .fa-play-circle-o:before {
            content: "\f01d";
        }

        .fa-rotate-right:before,
        .fa-repeat:before {
            content: "\f01e";
        }

        .fa-refresh:before {
            content: "\f021";
        }

        .fa-list-alt:before {
            content: "\f022";
        }

        .fa-lock:before {
            content: "\f023";
        }

        .fa-flag:before {
            content: "\f024";
        }

        .fa-headphones:before {
            content: "\f025";
        }

        .fa-volume-off:before {
            content: "\f026";
        }

        .fa-volume-down:before {
            content: "\f027";
        }

        .fa-volume-up:before {
            content: "\f028";
        }

        .fa-qrcode:before {
            content: "\f029";
        }

        .fa-barcode:before {
            content: "\f02a";
        }

        .fa-tag:before {
            content: "\f02b";
        }

        .fa-tags:before {
            content: "\f02c";
        }

        .fa-book:before {
            content: "\f02d";
        }

        .fa-bookmark:before {
            content: "\f02e";
        }

        .fa-print:before {
            content: "\f02f";
        }

        .fa-camera:before {
            content: "\f030";
        }

        .fa-font:before {
            content: "\f031";
        }

        .fa-bold:before {
            content: "\f032";
        }

        .fa-italic:before {
            content: "\f033";
        }

        .fa-text-height:before {
            content: "\f034";
        }

        .fa-text-width:before {
            content: "\f035";
        }

        .fa-align-left:before {
            content: "\f036";
        }

        .fa-align-center:before {
            content: "\f037";
        }

        .fa-align-right:before {
            content: "\f038";
        }

        .fa-align-justify:before {
            content: "\f039";
        }

        .fa-list:before {
            content: "\f03a";
        }

        .fa-dedent:before,
        .fa-outdent:before {
            content: "\f03b";
        }

        .fa-indent:before {
            content: "\f03c";
        }

        .fa-video-camera:before {
            content: "\f03d";
        }

        .fa-photo:before,
        .fa-image:before,
        .fa-picture-o:before {
            content: "\f03e";
        }

        .fa-pencil:before {
            content: "\f040";
        }

        .fa-map-marker:before {
            content: "\f041";
        }

        .fa-adjust:before {
            content: "\f042";
        }

        .fa-tint:before {
            content: "\f043";
        }

        .fa-edit:before,
        .fa-pencil-square-o:before {
            content: "\f044";
        }

        .fa-share-square-o:before {
            content: "\f045";
        }

        .fa-check-square-o:before {
            content: "\f046";
        }

        .fa-arrows:before {
            content: "\f047";
        }

        .fa-step-backward:before {
            content: "\f048";
        }

        .fa-fast-backward:before {
            content: "\f049";
        }

        .fa-backward:before {
            content: "\f04a";
        }

        .fa-play:before {
            content: "\f04b";
        }

        .fa-pause:before {
            content: "\f04c";
        }

        .fa-stop:before {
            content: "\f04d";
        }

        .fa-forward:before {
            content: "\f04e";
        }

        .fa-fast-forward:before {
            content: "\f050";
        }

        .fa-step-forward:before {
            content: "\f051";
        }

        .fa-eject:before {
            content: "\f052";
        }

        .fa-chevron-left:before {
            content: "\f053";
        }

        .fa-chevron-right:before {
            content: "\f054";
        }

        .fa-plus-circle:before {
            content: "\f055";
        }

        .fa-minus-circle:before {
            content: "\f056";
        }

        .fa-times-circle:before {
            content: "\f057";
        }

        .fa-check-circle:before {
            content: "\f058";
        }

        .fa-question-circle:before {
            content: "\f059";
        }

        .fa-info-circle:before {
            content: "\f05a";
        }

        .fa-crosshairs:before {
            content: "\f05b";
        }

        .fa-times-circle-o:before {
            content: "\f05c";
        }

        .fa-check-circle-o:before {
            content: "\f05d";
        }

        .fa-ban:before {
            content: "\f05e";
        }

        .fa-arrow-left:before {
            content: "\f060";
        }

        .fa-arrow-right:before {
            content: "\f061";
        }

        .fa-arrow-up:before {
            content: "\f062";
        }

        .fa-arrow-down:before {
            content: "\f063";
        }

        .fa-mail-forward:before,
        .fa-share:before {
            content: "\f064";
        }

        .fa-expand:before {
            content: "\f065";
        }

        .fa-compress:before {
            content: "\f066";
        }

        .fa-plus:before {
            content: "\f067";
        }

        .fa-minus:before {
            content: "\f068";
        }

        .fa-asterisk:before {
            content: "\f069";
        }

        .fa-exclamation-circle:before {
            content: "\f06a";
        }

        .fa-gift:before {
            content: "\f06b";
        }

        .fa-leaf:before {
            content: "\f06c";
        }

        .fa-fire:before {
            content: "\f06d";
        }

        .fa-eye:before {
            content: "\f06e";
        }

        .fa-eye-slash:before {
            content: "\f070";
        }

        .fa-warning:before,
        .fa-exclamation-triangle:before {
            content: "\f071";
        }

        .fa-plane:before {
            content: "\f072";
        }

        .fa-calendar:before {
            content: "\f073";
        }

        .fa-random:before {
            content: "\f074";
        }

        .fa-comment:before {
            content: "\f075";
        }

        .fa-magnet:before {
            content: "\f076";
        }

        .fa-chevron-up:before {
            content: "\f077";
        }

        .fa-chevron-down:before {
            content: "\f078";
        }

        .fa-retweet:before {
            content: "\f079";
        }

        .fa-shopping-cart:before {
            content: "\f07a";
        }

        .fa-folder:before {
            content: "\f07b";
        }

        .fa-folder-open:before {
            content: "\f07c";
        }

        .fa-arrows-v:before {
            content: "\f07d";
        }

        .fa-arrows-h:before {
            content: "\f07e";
        }

        .fa-bar-chart-o:before,
        .fa-bar-chart:before {
            content: "\f080";
        }

        .fa-twitter-square:before {
            content: "\f081";
        }

        .fa-facebook-square:before {
            content: "\f082";
        }

        .fa-camera-retro:before {
            content: "\f083";
        }

        .fa-key:before {
            content: "\f084";
        }

        .fa-gears:before,
        .fa-cogs:before {
            content: "\f085";
        }

        .fa-comments:before {
            content: "\f086";
        }

        .fa-thumbs-o-up:before {
            content: "\f087";
        }

        .fa-thumbs-o-down:before {
            content: "\f088";
        }

        .fa-star-half:before {
            content: "\f089";
        }

        .fa-heart-o:before {
            content: "\f08a";
        }

        .fa-sign-out:before {
            content: "\f08b";
        }

        .fa-linkedin-square:before {
            content: "\f08c";
        }

        .fa-thumb-tack:before {
            content: "\f08d";
        }

        .fa-external-link:before {
            content: "\f08e";
        }

        .fa-sign-in:before {
            content: "\f090";
        }

        .fa-trophy:before {
            content: "\f091";
        }

        .fa-github-square:before {
            content: "\f092";
        }

        .fa-upload:before {
            content: "\f093";
        }

        .fa-lemon-o:before {
            content: "\f094";
        }

        .fa-phone:before {
            content: "\f095";
        }

        .fa-square-o:before {
            content: "\f096";
        }

        .fa-bookmark-o:before {
            content: "\f097";
        }

        .fa-phone-square:before {
            content: "\f098";
        }

        .fa-twitter:before {
            content: "\f099";
        }

        .fa-facebook-f:before,
        .fa-facebook:before {
            content: "\f09a";
        }

        .fa-github:before {
            content: "\f09b";
        }

        .fa-unlock:before {
            content: "\f09c";
        }

        .fa-credit-card:before {
            content: "\f09d";
        }

        .fa-feed:before,
        .fa-rss:before {
            content: "\f09e";
        }

        .fa-hdd-o:before {
            content: "\f0a0";
        }

        .fa-bullhorn:before {
            content: "\f0a1";
        }

        .fa-bell:before {
            content: "\f0f3";
        }

        .fa-certificate:before {
            content: "\f0a3";
        }

        .fa-hand-o-right:before {
            content: "\f0a4";
        }

        .fa-hand-o-left:before {
            content: "\f0a5";
        }

        .fa-hand-o-up:before {
            content: "\f0a6";
        }

        .fa-hand-o-down:before {
            content: "\f0a7";
        }

        .fa-arrow-circle-left:before {
            content: "\f0a8";
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9";
        }

        .fa-arrow-circle-up:before {
            content: "\f0aa";
        }

        .fa-arrow-circle-down:before {
            content: "\f0ab";
        }

        .fa-globe:before {
            content: "\f0ac";
        }

        .fa-wrench:before {
            content: "\f0ad";
        }

        .fa-tasks:before {
            content: "\f0ae";
        }

        .fa-filter:before {
            content: "\f0b0";
        }

        .fa-briefcase:before {
            content: "\f0b1";
        }

        .fa-arrows-alt:before {
            content: "\f0b2";
        }

        .fa-group:before,
        .fa-users:before {
            content: "\f0c0";
        }

        .fa-chain:before,
        .fa-link:before {
            content: "\f0c1";
        }

        .fa-cloud:before {
            content: "\f0c2";
        }

        .fa-flask:before {
            content: "\f0c3";
        }

        .fa-cut:before,
        .fa-scissors:before {
            content: "\f0c4";
        }

        .fa-copy:before,
        .fa-files-o:before {
            content: "\f0c5";
        }

        .fa-paperclip:before {
            content: "\f0c6";
        }

        .fa-save:before,
        .fa-floppy-o:before {
            content: "\f0c7";
        }

        .fa-square:before {
            content: "\f0c8";
        }

        .fa-navicon:before,
        .fa-reorder:before,
        .fa-bars:before {
            content: "\f0c9";
        }

        .fa-list-ul:before {
            content: "\f0ca";
        }

        .fa-list-ol:before {
            content: "\f0cb";
        }

        .fa-strikethrough:before {
            content: "\f0cc";
        }

        .fa-underline:before {
            content: "\f0cd";
        }

        .fa-table:before {
            content: "\f0ce";
        }

        .fa-magic:before {
            content: "\f0d0";
        }

        .fa-truck:before {
            content: "\f0d1";
        }

        .fa-pinterest:before {
            content: "\f0d2";
        }

        .fa-pinterest-square:before {
            content: "\f0d3";
        }

        .fa-google-plus-square:before {
            content: "\f0d4";
        }

        .fa-google-plus:before {
            content: "\f0d5";
        }

        .fa-money:before {
            content: "\f0d6";
        }

        .fa-caret-down:before {
            content: "\f0d7";
        }

        .fa-caret-up:before {
            content: "\f0d8";
        }

        .fa-caret-left:before {
            content: "\f0d9";
        }

        .fa-caret-right:before {
            content: "\f0da";
        }

        .fa-columns:before {
            content: "\f0db";
        }

        .fa-unsorted:before,
        .fa-sort:before {
            content: "\f0dc";
        }

        .fa-sort-down:before,
        .fa-sort-desc:before {
            content: "\f0dd";
        }

        .fa-sort-up:before,
        .fa-sort-asc:before {
            content: "\f0de";
        }

        .fa-envelope:before {
            content: "\f0e0";
        }

        .fa-linkedin:before {
            content: "\f0e1";
        }

        .fa-rotate-left:before,
        .fa-undo:before {
            content: "\f0e2";
        }

        .fa-legal:before,
        .fa-gavel:before {
            content: "\f0e3";
        }

        .fa-dashboard:before,
        .fa-tachometer:before {
            content: "\f0e4";
        }

        .fa-comment-o:before {
            content: "\f0e5";
        }

        .fa-comments-o:before {
            content: "\f0e6";
        }

        .fa-flash:before,
        .fa-bolt:before {
            content: "\f0e7";
        }

        .fa-sitemap:before {
            content: "\f0e8";
        }

        .fa-umbrella:before {
            content: "\f0e9";
        }

        .fa-paste:before,
        .fa-clipboard:before {
            content: "\f0ea";
        }

        .fa-lightbulb-o:before {
            content: "\f0eb";
        }

        .fa-exchange:before {
            content: "\f0ec";
        }

        .fa-cloud-download:before {
            content: "\f0ed";
        }

        .fa-cloud-upload:before {
            content: "\f0ee";
        }

        .fa-user-md:before {
            content: "\f0f0";
        }

        .fa-stethoscope:before {
            content: "\f0f1";
        }

        .fa-suitcase:before {
            content: "\f0f2";
        }

        .fa-bell-o:before {
            content: "\f0a2";
        }

        .fa-coffee:before {
            content: "\f0f4";
        }

        .fa-cutlery:before {
            content: "\f0f5";
        }

        .fa-file-text-o:before {
            content: "\f0f6";
        }

        .fa-building-o:before {
            content: "\f0f7";
        }

        .fa-hospital-o:before {
            content: "\f0f8";
        }

        .fa-ambulance:before {
            content: "\f0f9";
        }

        .fa-medkit:before {
            content: "\f0fa";
        }

        .fa-fighter-jet:before {
            content: "\f0fb";
        }

        .fa-beer:before {
            content: "\f0fc";
        }

        .fa-h-square:before {
            content: "\f0fd";
        }

        .fa-plus-square:before {
            content: "\f0fe";
        }

        .fa-angle-double-left:before {
            content: "\f100";
        }

        .fa-angle-double-right:before {
            content: "\f101";
        }

        .fa-angle-double-up:before {
            content: "\f102";
        }

        .fa-angle-double-down:before {
            content: "\f103";
        }

        .fa-angle-left:before {
            content: "\f104";
        }

        .fa-angle-right:before {
            content: "\f105";
        }

        .fa-angle-up:before {
            content: "\f106";
        }

        .fa-angle-down:before {
            content: "\f107";
        }

        .fa-desktop:before {
            content: "\f108";
        }

        .fa-laptop:before {
            content: "\f109";
        }

        .fa-tablet:before {
            content: "\f10a";
        }

        .fa-mobile-phone:before,
        .fa-mobile:before {
            content: "\f10b";
        }

        .fa-circle-o:before {
            content: "\f10c";
        }

        .fa-quote-left:before {
            content: "\f10d";
        }

        .fa-quote-right:before {
            content: "\f10e";
        }

        .fa-spinner:before {
            content: "\f110";
        }

        .fa-circle:before {
            content: "\f111";
        }

        .fa-mail-reply:before,
        .fa-reply:before {
            content: "\f112";
        }

        .fa-github-alt:before {
            content: "\f113";
        }

        .fa-folder-o:before {
            content: "\f114";
        }

        .fa-folder-open-o:before {
            content: "\f115";
        }

        .fa-smile-o:before {
            content: "\f118";
        }

        .fa-frown-o:before {
            content: "\f119";
        }

        .fa-meh-o:before {
            content: "\f11a";
        }

        .fa-gamepad:before {
            content: "\f11b";
        }

        .fa-keyboard-o:before {
            content: "\f11c";
        }

        .fa-flag-o:before {
            content: "\f11d";
        }

        .fa-flag-checkered:before {
            content: "\f11e";
        }

        .fa-terminal:before {
            content: "\f120";
        }

        .fa-code:before {
            content: "\f121";
        }

        .fa-mail-reply-all:before,
        .fa-reply-all:before {
            content: "\f122";
        }

        .fa-star-half-empty:before,
        .fa-star-half-full:before,
        .fa-star-half-o:before {
            content: "\f123";
        }

        .fa-location-arrow:before {
            content: "\f124";
        }

        .fa-crop:before {
            content: "\f125";
        }

        .fa-code-fork:before {
            content: "\f126";
        }

        .fa-unlink:before,
        .fa-chain-broken:before {
            content: "\f127";
        }

        .fa-question:before {
            content: "\f128";
        }

        .fa-info:before {
            content: "\f129";
        }

        .fa-exclamation:before {
            content: "\f12a";
        }

        .fa-superscript:before {
            content: "\f12b";
        }

        .fa-subscript:before {
            content: "\f12c";
        }

        .fa-eraser:before {
            content: "\f12d";
        }

        .fa-puzzle-piece:before {
            content: "\f12e";
        }

        .fa-microphone:before {
            content: "\f130";
        }

        .fa-microphone-slash:before {
            content: "\f131";
        }

        .fa-shield:before {
            content: "\f132";
        }

        .fa-calendar-o:before {
            content: "\f133";
        }

        .fa-fire-extinguisher:before {
            content: "\f134";
        }

        .fa-rocket:before {
            content: "\f135";
        }

        .fa-maxcdn:before {
            content: "\f136";
        }

        .fa-chevron-circle-left:before {
            content: "\f137";
        }

        .fa-chevron-circle-right:before {
            content: "\f138";
        }

        .fa-chevron-circle-up:before {
            content: "\f139";
        }

        .fa-chevron-circle-down:before {
            content: "\f13a";
        }

        .fa-html5:before {
            content: "\f13b";
        }

        .fa-css3:before {
            content: "\f13c";
        }

        .fa-anchor:before {
            content: "\f13d";
        }

        .fa-unlock-alt:before {
            content: "\f13e";
        }

        .fa-bullseye:before {
            content: "\f140";
        }

        .fa-ellipsis-h:before {
            content: "\f141";
        }

        .fa-ellipsis-v:before {
            content: "\f142";
        }

        .fa-rss-square:before {
            content: "\f143";
        }

        .fa-play-circle:before {
            content: "\f144";
        }

        .fa-ticket:before {
            content: "\f145";
        }

        .fa-minus-square:before {
            content: "\f146";
        }

        .fa-minus-square-o:before {
            content: "\f147";
        }

        .fa-level-up:before {
            content: "\f148";
        }

        .fa-level-down:before {
            content: "\f149";
        }

        .fa-check-square:before {
            content: "\f14a";
        }

        .fa-pencil-square:before {
            content: "\f14b";
        }

        .fa-external-link-square:before {
            content: "\f14c";
        }

        .fa-share-square:before {
            content: "\f14d";
        }

        .fa-compass:before {
            content: "\f14e";
        }

        .fa-toggle-down:before,
        .fa-caret-square-o-down:before {
            content: "\f150";
        }

        .fa-toggle-up:before,
        .fa-caret-square-o-up:before {
            content: "\f151";
        }

        .fa-toggle-right:before,
        .fa-caret-square-o-right:before {
            content: "\f152";
        }

        .fa-euro:before,
        .fa-eur:before {
            content: "\f153";
        }

        .fa-gbp:before {
            content: "\f154";
        }

        .fa-dollar:before,
        .fa-usd:before {
            content: "\f155";
        }

        .fa-rupee:before,
        .fa-inr:before {
            content: "\f156";
        }

        .fa-cny:before,
        .fa-rmb:before,
        .fa-yen:before,
        .fa-jpy:before {
            content: "\f157";
        }

        .fa-ruble:before,
        .fa-rouble:before,
        .fa-rub:before {
            content: "\f158";
        }

        .fa-won:before,
        .fa-krw:before {
            content: "\f159";
        }

        .fa-bitcoin:before,
        .fa-btc:before {
            content: "\f15a";
        }

        .fa-file:before {
            content: "\f15b";
        }

        .fa-file-text:before {
            content: "\f15c";
        }

        .fa-sort-alpha-asc:before {
            content: "\f15d";
        }

        .fa-sort-alpha-desc:before {
            content: "\f15e";
        }

        .fa-sort-amount-asc:before {
            content: "\f160";
        }

        .fa-sort-amount-desc:before {
            content: "\f161";
        }

        .fa-sort-numeric-asc:before {
            content: "\f162";
        }

        .fa-sort-numeric-desc:before {
            content: "\f163";
        }

        .fa-thumbs-up:before {
            content: "\f164";
        }

        .fa-thumbs-down:before {
            content: "\f165";
        }

        .fa-youtube-square:before {
            content: "\f166";
        }

        .fa-youtube:before {
            content: "\f167";
        }

        .fa-xing:before {
            content: "\f168";
        }

        .fa-xing-square:before {
            content: "\f169";
        }

        .fa-youtube-play:before {
            content: "\f16a";
        }

        .fa-dropbox:before {
            content: "\f16b";
        }

        .fa-stack-overflow:before {
            content: "\f16c";
        }

        .fa-instagram:before {
            content: "\f16d";
        }

        .fa-flickr:before {
            content: "\f16e";
        }

        .fa-adn:before {
            content: "\f170";
        }

        .fa-bitbucket:before {
            content: "\f171";
        }

        .fa-bitbucket-square:before {
            content: "\f172";
        }

        .fa-tumblr:before {
            content: "\f173";
        }

        .fa-tumblr-square:before {
            content: "\f174";
        }

        .fa-long-arrow-down:before {
            content: "\f175";
        }

        .fa-long-arrow-up:before {
            content: "\f176";
        }

        .fa-long-arrow-left:before {
            content: "\f177";
        }

        .fa-long-arrow-right:before {
            content: "\f178";
        }

        .fa-apple:before {
            content: "\f179";
        }

        .fa-windows:before {
            content: "\f17a";
        }

        .fa-android:before {
            content: "\f17b";
        }

        .fa-linux:before {
            content: "\f17c";
        }

        .fa-dribbble:before {
            content: "\f17d";
        }

        .fa-skype:before {
            content: "\f17e";
        }

        .fa-foursquare:before {
            content: "\f180";
        }

        .fa-trello:before {
            content: "\f181";
        }

        .fa-female:before {
            content: "\f182";
        }

        .fa-male:before {
            content: "\f183";
        }

        .fa-gittip:before,
        .fa-gratipay:before {
            content: "\f184";
        }

        .fa-sun-o:before {
            content: "\f185";
        }

        .fa-moon-o:before {
            content: "\f186";
        }

        .fa-archive:before {
            content: "\f187";
        }

        .fa-bug:before {
            content: "\f188";
        }

        .fa-vk:before {
            content: "\f189";
        }

        .fa-weibo:before {
            content: "\f18a";
        }

        .fa-renren:before {
            content: "\f18b";
        }

        .fa-pagelines:before {
            content: "\f18c";
        }

        .fa-stack-exchange:before {
            content: "\f18d";
        }

        .fa-arrow-circle-o-right:before {
            content: "\f18e";
        }

        .fa-arrow-circle-o-left:before {
            content: "\f190";
        }

        .fa-toggle-left:before,
        .fa-caret-square-o-left:before {
            content: "\f191";
        }

        .fa-dot-circle-o:before {
            content: "\f192";
        }

        .fa-wheelchair:before {
            content: "\f193";
        }

        .fa-vimeo-square:before {
            content: "\f194";
        }

        .fa-turkish-lira:before,
        .fa-try:before {
            content: "\f195";
        }

        .fa-plus-square-o:before {
            content: "\f196";
        }

        .fa-space-shuttle:before {
            content: "\f197";
        }

        .fa-slack:before {
            content: "\f198";
        }

        .fa-envelope-square:before {
            content: "\f199";
        }

        .fa-wordpress:before {
            content: "\f19a";
        }

        .fa-openid:before {
            content: "\f19b";
        }

        .fa-institution:before,
        .fa-bank:before,
        .fa-university:before {
            content: "\f19c";
        }

        .fa-mortar-board:before,
        .fa-graduation-cap:before {
            content: "\f19d";
        }

        .fa-yahoo:before {
            content: "\f19e";
        }

        .fa-google:before {
            content: "\f1a0";
        }

        .fa-reddit:before {
            content: "\f1a1";
        }

        .fa-reddit-square:before {
            content: "\f1a2";
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3";
        }

        .fa-stumbleupon:before {
            content: "\f1a4";
        }

        .fa-delicious:before {
            content: "\f1a5";
        }

        .fa-digg:before {
            content: "\f1a6";
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7";
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8";
        }

        .fa-drupal:before {
            content: "\f1a9";
        }

        .fa-joomla:before {
            content: "\f1aa";
        }

        .fa-language:before {
            content: "\f1ab";
        }

        .fa-fax:before {
            content: "\f1ac";
        }

        .fa-building:before {
            content: "\f1ad";
        }

        .fa-child:before {
            content: "\f1ae";
        }

        .fa-paw:before {
            content: "\f1b0";
        }

        .fa-spoon:before {
            content: "\f1b1";
        }

        .fa-cube:before {
            content: "\f1b2";
        }

        .fa-cubes:before {
            content: "\f1b3";
        }

        .fa-behance:before {
            content: "\f1b4";
        }

        .fa-behance-square:before {
            content: "\f1b5";
        }

        .fa-steam:before {
            content: "\f1b6";
        }

        .fa-steam-square:before {
            content: "\f1b7";
        }

        .fa-recycle:before {
            content: "\f1b8";
        }

        .fa-automobile:before,
        .fa-car:before {
            content: "\f1b9";
        }

        .fa-cab:before,
        .fa-taxi:before {
            content: "\f1ba";
        }

        .fa-tree:before {
            content: "\f1bb";
        }

        .fa-spotify:before {
            content: "\f1bc";
        }

        .fa-deviantart:before {
            content: "\f1bd";
        }

        .fa-soundcloud:before {
            content: "\f1be";
        }

        .fa-database:before {
            content: "\f1c0";
        }

        .fa-file-pdf-o:before {
            content: "\f1c1";
        }

        .fa-file-word-o:before {
            content: "\f1c2";
        }

        .fa-file-excel-o:before {
            content: "\f1c3";
        }

        .fa-file-powerpoint-o:before {
            content: "\f1c4";
        }

        .fa-file-photo-o:before,
        .fa-file-picture-o:before,
        .fa-file-image-o:before {
            content: "\f1c5";
        }

        .fa-file-zip-o:before,
        .fa-file-archive-o:before {
            content: "\f1c6";
        }

        .fa-file-sound-o:before,
        .fa-file-audio-o:before {
            content: "\f1c7";
        }

        .fa-file-movie-o:before,
        .fa-file-video-o:before {
            content: "\f1c8";
        }

        .fa-file-code-o:before {
            content: "\f1c9";
        }

        .fa-vine:before {
            content: "\f1ca";
        }

        .fa-codepen:before {
            content: "\f1cb";
        }

        .fa-jsfiddle:before {
            content: "\f1cc";
        }

        .fa-life-bouy:before,
        .fa-life-buoy:before,
        .fa-life-saver:before,
        .fa-support:before,
        .fa-life-ring:before {
            content: "\f1cd";
        }

        .fa-circle-o-notch:before {
            content: "\f1ce";
        }

        .fa-ra:before,
        .fa-resistance:before,
        .fa-rebel:before {
            content: "\f1d0";
        }

        .fa-ge:before,
        .fa-empire:before {
            content: "\f1d1";
        }

        .fa-git-square:before {
            content: "\f1d2";
        }

        .fa-git:before {
            content: "\f1d3";
        }

        .fa-y-combinator-square:before,
        .fa-yc-square:before,
        .fa-hacker-news:before {
            content: "\f1d4";
        }

        .fa-tencent-weibo:before {
            content: "\f1d5";
        }

        .fa-qq:before {
            content: "\f1d6";
        }

        .fa-wechat:before,
        .fa-weixin:before {
            content: "\f1d7";
        }

        .fa-send:before,
        .fa-paper-plane:before {
            content: "\f1d8";
        }

        .fa-send-o:before,
        .fa-paper-plane-o:before {
            content: "\f1d9";
        }

        .fa-history:before {
            content: "\f1da";
        }

        .fa-circle-thin:before {
            content: "\f1db";
        }

        .fa-header:before {
            content: "\f1dc";
        }

        .fa-paragraph:before {
            content: "\f1dd";
        }

        .fa-sliders:before {
            content: "\f1de";
        }

        .fa-share-alt:before {
            content: "\f1e0";
        }

        .fa-share-alt-square:before {
            content: "\f1e1";
        }

        .fa-bomb:before {
            content: "\f1e2";
        }

        .fa-soccer-ball-o:before,
        .fa-futbol-o:before {
            content: "\f1e3";
        }

        .fa-tty:before {
            content: "\f1e4";
        }

        .fa-binoculars:before {
            content: "\f1e5";
        }

        .fa-plug:before {
            content: "\f1e6";
        }

        .fa-slideshare:before {
            content: "\f1e7";
        }

        .fa-twitch:before {
            content: "\f1e8";
        }

        .fa-yelp:before {
            content: "\f1e9";
        }

        .fa-newspaper-o:before {
            content: "\f1ea";
        }

        .fa-wifi:before {
            content: "\f1eb";
        }

        .fa-calculator:before {
            content: "\f1ec";
        }

        .fa-paypal:before {
            content: "\f1ed";
        }

        .fa-google-wallet:before {
            content: "\f1ee";
        }

        .fa-cc-visa:before {
            content: "\f1f0";
        }

        .fa-cc-mastercard:before {
            content: "\f1f1";
        }

        .fa-cc-discover:before {
            content: "\f1f2";
        }

        .fa-cc-amex:before {
            content: "\f1f3";
        }

        .fa-cc-paypal:before {
            content: "\f1f4";
        }

        .fa-cc-stripe:before {
            content: "\f1f5";
        }

        .fa-bell-slash:before {
            content: "\f1f6";
        }

        .fa-bell-slash-o:before {
            content: "\f1f7";
        }

        .fa-trash:before {
            content: "\f1f8";
        }

        .fa-copyright:before {
            content: "\f1f9";
        }

        .fa-at:before {
            content: "\f1fa";
        }

        .fa-eyedropper:before {
            content: "\f1fb";
        }

        .fa-paint-brush:before {
            content: "\f1fc";
        }

        .fa-birthday-cake:before {
            content: "\f1fd";
        }

        .fa-area-chart:before {
            content: "\f1fe";
        }

        .fa-pie-chart:before {
            content: "\f200";
        }

        .fa-line-chart:before {
            content: "\f201";
        }

        .fa-lastfm:before {
            content: "\f202";
        }

        .fa-lastfm-square:before {
            content: "\f203";
        }

        .fa-toggle-off:before {
            content: "\f204";
        }

        .fa-toggle-on:before {
            content: "\f205";
        }

        .fa-bicycle:before {
            content: "\f206";
        }

        .fa-bus:before {
            content: "\f207";
        }

        .fa-ioxhost:before {
            content: "\f208";
        }

        .fa-angellist:before {
            content: "\f209";
        }

        .fa-cc:before {
            content: "\f20a";
        }

        .fa-shekel:before,
        .fa-sheqel:before,
        .fa-ils:before {
            content: "\f20b";
        }

        .fa-meanpath:before {
            content: "\f20c";
        }

        .fa-buysellads:before {
            content: "\f20d";
        }

        .fa-connectdevelop:before {
            content: "\f20e";
        }

        .fa-dashcube:before {
            content: "\f210";
        }

        .fa-forumbee:before {
            content: "\f211";
        }

        .fa-leanpub:before {
            content: "\f212";
        }

        .fa-sellsy:before {
            content: "\f213";
        }

        .fa-shirtsinbulk:before {
            content: "\f214";
        }

        .fa-simplybuilt:before {
            content: "\f215";
        }

        .fa-skyatlas:before {
            content: "\f216";
        }

        .fa-cart-plus:before {
            content: "\f217";
        }

        .fa-cart-arrow-down:before {
            content: "\f218";
        }

        .fa-diamond:before {
            content: "\f219";
        }

        .fa-ship:before {
            content: "\f21a";
        }

        .fa-user-secret:before {
            content: "\f21b";
        }

        .fa-motorcycle:before {
            content: "\f21c";
        }

        .fa-street-view:before {
            content: "\f21d";
        }

        .fa-heartbeat:before {
            content: "\f21e";
        }

        .fa-venus:before {
            content: "\f221";
        }

        .fa-mars:before {
            content: "\f222";
        }

        .fa-mercury:before {
            content: "\f223";
        }

        .fa-intersex:before,
        .fa-transgender:before {
            content: "\f224";
        }

        .fa-transgender-alt:before {
            content: "\f225";
        }

        .fa-venus-double:before {
            content: "\f226";
        }

        .fa-mars-double:before {
            content: "\f227";
        }

        .fa-venus-mars:before {
            content: "\f228";
        }

        .fa-mars-stroke:before {
            content: "\f229";
        }

        .fa-mars-stroke-v:before {
            content: "\f22a";
        }

        .fa-mars-stroke-h:before {
            content: "\f22b";
        }

        .fa-neuter:before {
            content: "\f22c";
        }

        .fa-genderless:before {
            content: "\f22d";
        }

        .fa-facebook-official:before {
            content: "\f230";
        }

        .fa-pinterest-p:before {
            content: "\f231";
        }

        .fa-whatsapp:before {
            content: "\f232";
        }

        .fa-server:before {
            content: "\f233";
        }

        .fa-user-plus:before {
            content: "\f234";
        }

        .fa-user-times:before {
            content: "\f235";
        }

        .fa-hotel:before,
        .fa-bed:before {
            content: "\f236";
        }

        .fa-viacoin:before {
            content: "\f237";
        }

        .fa-train:before {
            content: "\f238";
        }

        .fa-subway:before {
            content: "\f239";
        }

        .fa-medium:before {
            content: "\f23a";
        }

        .fa-yc:before,
        .fa-y-combinator:before {
            content: "\f23b";
        }

        .fa-optin-monster:before {
            content: "\f23c";
        }

        .fa-opencart:before {
            content: "\f23d";
        }

        .fa-expeditedssl:before {
            content: "\f23e";
        }

        .fa-battery-4:before,
        .fa-battery:before,
        .fa-battery-full:before {
            content: "\f240";
        }

        .fa-battery-3:before,
        .fa-battery-three-quarters:before {
            content: "\f241";
        }

        .fa-battery-2:before,
        .fa-battery-half:before {
            content: "\f242";
        }

        .fa-battery-1:before,
        .fa-battery-quarter:before {
            content: "\f243";
        }

        .fa-battery-0:before,
        .fa-battery-empty:before {
            content: "\f244";
        }

        .fa-mouse-pointer:before {
            content: "\f245";
        }

        .fa-i-cursor:before {
            content: "\f246";
        }

        .fa-object-group:before {
            content: "\f247";
        }

        .fa-object-ungroup:before {
            content: "\f248";
        }

        .fa-sticky-note:before {
            content: "\f249";
        }

        .fa-sticky-note-o:before {
            content: "\f24a";
        }

        .fa-cc-jcb:before {
            content: "\f24b";
        }

        .fa-cc-diners-club:before {
            content: "\f24c";
        }

        .fa-clone:before {
            content: "\f24d";
        }

        .fa-balance-scale:before {
            content: "\f24e";
        }

        .fa-hourglass-o:before {
            content: "\f250";
        }

        .fa-hourglass-1:before,
        .fa-hourglass-start:before {
            content: "\f251";
        }

        .fa-hourglass-2:before,
        .fa-hourglass-half:before {
            content: "\f252";
        }

        .fa-hourglass-3:before,
        .fa-hourglass-end:before {
            content: "\f253";
        }

        .fa-hourglass:before {
            content: "\f254";
        }

        .fa-hand-grab-o:before,
        .fa-hand-rock-o:before {
            content: "\f255";
        }

        .fa-hand-stop-o:before,
        .fa-hand-paper-o:before {
            content: "\f256";
        }

        .fa-hand-scissors-o:before {
            content: "\f257";
        }

        .fa-hand-lizard-o:before {
            content: "\f258";
        }

        .fa-hand-spock-o:before {
            content: "\f259";
        }

        .fa-hand-pointer-o:before {
            content: "\f25a";
        }

        .fa-hand-peace-o:before {
            content: "\f25b";
        }

        .fa-trademark:before {
            content: "\f25c";
        }

        .fa-registered:before {
            content: "\f25d";
        }

        .fa-creative-commons:before {
            content: "\f25e";
        }

        .fa-gg:before {
            content: "\f260";
        }

        .fa-gg-circle:before {
            content: "\f261";
        }

        .fa-tripadvisor:before {
            content: "\f262";
        }

        .fa-odnoklassniki:before {
            content: "\f263";
        }

        .fa-odnoklassniki-square:before {
            content: "\f264";
        }

        .fa-get-pocket:before {
            content: "\f265";
        }

        .fa-wikipedia-w:before {
            content: "\f266";
        }

        .fa-safari:before {
            content: "\f267";
        }

        .fa-chrome:before {
            content: "\f268";
        }

        .fa-firefox:before {
            content: "\f269";
        }

        .fa-opera:before {
            content: "\f26a";
        }

        .fa-internet-explorer:before {
            content: "\f26b";
        }

        .fa-tv:before,
        .fa-television:before {
            content: "\f26c";
        }

        .fa-contao:before {
            content: "\f26d";
        }

        .fa-500px:before {
            content: "\f26e";
        }

        .fa-amazon:before {
            content: "\f270";
        }

        .fa-calendar-plus-o:before {
            content: "\f271";
        }

        .fa-calendar-minus-o:before {
            content: "\f272";
        }

        .fa-calendar-times-o:before {
            content: "\f273";
        }

        .fa-calendar-check-o:before {
            content: "\f274";
        }

        .fa-industry:before {
            content: "\f275";
        }

        .fa-map-pin:before {
            content: "\f276";
        }

        .fa-map-signs:before {
            content: "\f277";
        }

        .fa-map-o:before {
            content: "\f278";
        }

        .fa-map:before {
            content: "\f279";
        }

        .fa-commenting:before {
            content: "\f27a";
        }

        .fa-commenting-o:before {
            content: "\f27b";
        }

        .fa-houzz:before {
            content: "\f27c";
        }

        .fa-vimeo:before {
            content: "\f27d";
        }

        .fa-black-tie:before {
            content: "\f27e";
        }

        .fa-fonticons:before {
            content: "\f280";
        }

        .fa-reddit-alien:before {
            content: "\f281";
        }

        .fa-edge:before {
            content: "\f282";
        }

        .fa-credit-card-alt:before {
            content: "\f283";
        }

        .fa-codiepie:before {
            content: "\f284";
        }

        .fa-modx:before {
            content: "\f285";
        }

        .fa-fort-awesome:before {
            content: "\f286";
        }

        .fa-usb:before {
            content: "\f287";
        }

        .fa-product-hunt:before {
            content: "\f288";
        }

        .fa-mixcloud:before {
            content: "\f289";
        }

        .fa-scribd:before {
            content: "\f28a";
        }

        .fa-pause-circle:before {
            content: "\f28b";
        }

        .fa-pause-circle-o:before {
            content: "\f28c";
        }

        .fa-stop-circle:before {
            content: "\f28d";
        }

        .fa-stop-circle-o:before {
            content: "\f28e";
        }

        .fa-shopping-bag:before {
            content: "\f290";
        }

        .fa-shopping-basket:before {
            content: "\f291";
        }

        .fa-hashtag:before {
            content: "\f292";
        }

        .fa-bluetooth:before {
            content: "\f293";
        }

        .fa-bluetooth-b:before {
            content: "\f294";
        }

        .fa-percent:before {
            content: "\f295";
        }

        .fa-gitlab:before {
            content: "\f296";
        }

        .fa-wpbeginner:before {
            content: "\f297";
        }

        .fa-wpforms:before {
            content: "\f298";
        }

        .fa-envira:before {
            content: "\f299";
        }

        .fa-universal-access:before {
            content: "\f29a";
        }

        .fa-wheelchair-alt:before {
            content: "\f29b";
        }

        .fa-question-circle-o:before {
            content: "\f29c";
        }

        .fa-blind:before {
            content: "\f29d";
        }

        .fa-audio-description:before {
            content: "\f29e";
        }

        .fa-volume-control-phone:before {
            content: "\f2a0";
        }

        .fa-braille:before {
            content: "\f2a1";
        }

        .fa-assistive-listening-systems:before {
            content: "\f2a2";
        }

        .fa-asl-interpreting:before,
        .fa-american-sign-language-interpreting:before {
            content: "\f2a3";
        }

        .fa-deafness:before,
        .fa-hard-of-hearing:before,
        .fa-deaf:before {
            content: "\f2a4";
        }

        .fa-glide:before {
            content: "\f2a5";
        }

        .fa-glide-g:before {
            content: "\f2a6";
        }

        .fa-signing:before,
        .fa-sign-language:before {
            content: "\f2a7";
        }

        .fa-low-vision:before {
            content: "\f2a8";
        }

        .fa-viadeo:before {
            content: "\f2a9";
        }

        .fa-viadeo-square:before {
            content: "\f2aa";
        }

        .fa-snapchat:before {
            content: "\f2ab";
        }

        .fa-snapchat-ghost:before {
            content: "\f2ac";
        }

        .fa-snapchat-square:before {
            content: "\f2ad";
        }

        .fa-pied-piper:before {
            content: "\f2ae";
        }

        .fa-first-order:before {
            content: "\f2b0";
        }

        .fa-yoast:before {
            content: "\f2b1";
        }

        .fa-themeisle:before {
            content: "\f2b2";
        }

        .fa-google-plus-circle:before,
        .fa-google-plus-official:before {
            content: "\f2b3";
        }

        .fa-fa:before,
        .fa-font-awesome:before {
            content: "\f2b4";
        }

        .fa-handshake-o:before {
            content: "\f2b5";
        }

        .fa-envelope-open:before {
            content: "\f2b6";
        }

        .fa-envelope-open-o:before {
            content: "\f2b7";
        }

        .fa-linode:before {
            content: "\f2b8";
        }

        .fa-address-book:before {
            content: "\f2b9";
        }

        .fa-address-book-o:before {
            content: "\f2ba";
        }

        .fa-vcard:before,
        .fa-address-card:before {
            content: "\f2bb";
        }

        .fa-vcard-o:before,
        .fa-address-card-o:before {
            content: "\f2bc";
        }

        .fa-user-circle:before {
            content: "\f2bd";
        }

        .fa-user-circle-o:before {
            content: "\f2be";
        }

        .fa-user-o:before {
            content: "\f2c0";
        }

        .fa-id-badge:before {
            content: "\f2c1";
        }

        .fa-drivers-license:before,
        .fa-id-card:before {
            content: "\f2c2";
        }

        .fa-drivers-license-o:before,
        .fa-id-card-o:before {
            content: "\f2c3";
        }

        .fa-quora:before {
            content: "\f2c4";
        }

        .fa-free-code-camp:before {
            content: "\f2c5";
        }

        .fa-telegram:before {
            content: "\f2c6";
        }

        .fa-thermometer-4:before,
        .fa-thermometer:before,
        .fa-thermometer-full:before {
            content: "\f2c7";
        }

        .fa-thermometer-3:before,
        .fa-thermometer-three-quarters:before {
            content: "\f2c8";
        }

        .fa-thermometer-2:before,
        .fa-thermometer-half:before {
            content: "\f2c9";
        }

        .fa-thermometer-1:before,
        .fa-thermometer-quarter:before {
            content: "\f2ca";
        }

        .fa-thermometer-0:before,
        .fa-thermometer-empty:before {
            content: "\f2cb";
        }

        .fa-shower:before {
            content: "\f2cc";
        }

        .fa-bathtub:before,
        .fa-s15:before,
        .fa-bath:before {
            content: "\f2cd";
        }

        .fa-podcast:before {
            content: "\f2ce";
        }

        .fa-window-maximize:before {
            content: "\f2d0";
        }

        .fa-window-minimize:before {
            content: "\f2d1";
        }

        .fa-window-restore:before {
            content: "\f2d2";
        }

        .fa-times-rectangle:before,
        .fa-window-close:before {
            content: "\f2d3";
        }

        .fa-times-rectangle-o:before,
        .fa-window-close-o:before {
            content: "\f2d4";
        }

        .fa-bandcamp:before {
            content: "\f2d5";
        }

        .fa-grav:before {
            content: "\f2d6";
        }

        .fa-etsy:before {
            content: "\f2d7";
        }

        .fa-imdb:before {
            content: "\f2d8";
        }

        .fa-ravelry:before {
            content: "\f2d9";
        }

        .fa-eercast:before {
            content: "\f2da";
        }

        .fa-microchip:before {
            content: "\f2db";
        }

        .fa-snowflake-o:before {
            content: "\f2dc";
        }

        .fa-superpowers:before {
            content: "\f2dd";
        }

        .fa-wpexplorer:before {
            content: "\f2de";
        }

        .fa-meetup:before {
            content: "\f2e0";
        }

        .sr-only {
            clip: rect(0, 0, 0, 0);
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            border: 0;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-family: sans-serif;
            line-height: 1.5;
        }

        article,
        aside,
        .figcaption,
        .figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block;
        }

        body {
            margin: 0;
            background-color: #fff;
            color: #212529;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Barlow, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            text-align: left;
        }

        [tabindex="-1"]:focus {
            outline: 0 !important;
        }

        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0;
        }

        p {
            margin-top: 0;
            margin-bottom: 0;
        }

        abbr[title],
        abbr[data-original-title] {
            -webkit-text-decoration: underline dotted;
            -webkit-text-decoration-skip-ink: none;
            border-bottom: 0;
            text-decoration: underline;
            text-decoration: underline dotted;
            text-decoration-skip-ink: none;
            cursor: help;
        }

        address {
            margin-bottom: 0;
            font-style: normal;
            line-height: inherit;
        }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 0;
            padding-left: 0;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-bottom: 0;
            margin-left: 0;
        }

        blockquote {
            margin: 0;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        a {
            background-color: transparent;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):hover,
        a:not([href]):not([tabindex]):focus {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        pre {
            margin-top: 0;
            margin-bottom: 0;
            overflow: auto;
        }

        .figure {
            margin: 0;
        }

        img {
            border-style: none;
            vertical-align: middle;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
        }

        table {
            border-collapse: collapse;
        }

        caption {
            padding-top: 0;
            padding-bottom: 0;
            color: #6c757d;
            text-align: left;
            caption-side: bottom;
        }

        th {
            text-align: inherit;
        }

        label {
            display: inline-block;
            margin-bottom: 0;
        }

        button {
            border-radius: 0;
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        select {
            word-wrap: normal;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button:not(:disabled),
        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled) {
            cursor: pointer;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        input[type="radio"],
        input[type="checkbox"] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        input[type="date"],
        input[type="time"],
        input[type="datetime-local"],
        input[type="month"] {
            -webkit-appearance: listbox;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            margin: 0;
            padding: 0;
            border: 0;
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            margin-bottom: 0;
            padding: 0;
            color: inherit;
            font-size: 1.5rem;
            line-height: inherit;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: none;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        output {
            display: inline-block;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        template {
            display: none;
        }

        [hidden],
        .d-none,
        .hidden {
            display: none !important;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width:1025px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1440px;
            }
        }

        .container-fluid {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }

        .row {
            -ms-flex-wrap: wrap;
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters>.col,
        .no-gutters>[class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            -ms-flex-positive: 1;
            -webkit-box-flex: 1;
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 8.333333%;
            max-width: 8.333333%;
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            -webkit-box-flex: 0;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            -webkit-box-flex: 0;
            flex: 0 0 91.666667%;
            max-width: 91.666667%;
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width:576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }
            .col-sm-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }
            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }
            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }
            .col-sm-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }
            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
            .col-sm-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }
            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-sm-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }
            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }
            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }
            .col-sm-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width:768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }
            .col-md-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }
            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }
            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }
            .col-md-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }
            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
            .col-md-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }
            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-md-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }
            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }
            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }
            .col-md-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width:1024px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }
            .col-lg-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }
            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }
            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }
            .col-lg-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }
            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
            .col-lg-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }
            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-lg-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }
            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }
            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }
            .col-lg-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }
            .col-xl-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }
            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }
            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }
            .col-xl-3 {
                -ms-flex: 0 0 25%;
                -webkit-box-flex: 0;
                flex: 0 0 25%;
                max-width: 25%;
            }
            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
            .col-xl-6 {
                -ms-flex: 0 0 50%;
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }
            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-xl-9 {
                -ms-flex: 0 0 75%;
                -webkit-box-flex: 0;
                flex: 0 0 75%;
                max-width: 75%;
            }
            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                -webkit-box-flex: 0;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }
            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                -webkit-box-flex: 0;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }
            .col-xl-12 {
                -ms-flex: 0 0 100%;
                -webkit-box-flex: 0;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .mdi-magnify:before {
            content: "\f349";
        }

        .mdi-phone:before {
            content: "\f3f2";
        }

        .mdi-bell:before {
            content: "\f09a";
        }

        .mdi-account-circle:before {
            content: "\f009";
        }

        .mdi-account:before {
            content: "\f004";
        }

        .mdi-email:before {
            content: "\f1ee";
        }

        .mdi-facebook:before {
            content: "\f20d";
        }

        .mdi-youtube:before {
            content: "\f5c3";
        }

        .mdi-map-marker:before {
            content: "\f34e";
        }

        .mdi-menu:before {
            content: "\f35c";
        }

        .mdi-currency-usd:before {
            content: "\f1b3";
        }

        .mdi-briefcase:before {
            content: "\f0d6";
        }

        .mdi-chevron-down:before {
            content: "\f140";
        }

        .mdi-chevron-right:before {
            content: "\f142";
        }

        .mdi-chevron-left:before {
            content: "\f141";
        }

        .mdi-chevron-up:before {
            content: "\f143";
        }

        .mdi-arrow-right:before {
            content: "\f054";
        }

        .mdi-arrow-down:before {
            content: "\f045";
        }

        .mdi-magnify-plus-outline:before {
            content: "\f6ec";
        }

        .mdi-view-list:before {
            content: "\f572";
        }

        .mdi-view-quilt:before {
            content: "\f574";
        }

        .mdi-heart-outline:before {
            content: "\f2d5";
        }

        .mdi-share-variant:before {
            content: "\f497";
        }

        .mdi-calendar-today:before {
            content: "\f0f6";
        }

        .mdi-lock-outline:before {
            content: "\f341";
        }

        .mdi-laptop-mac:before {
            content: "\f324";
        }

        .mdi-marker-check:before {
            content: "\f355";
        }

        .mdi-airplane:before {
            content: "\f01d";
        }

        .mdi-wallet-membership:before {
            content: "\f586";
        }

        .mdi-hospital:before {
            content: "\f2e0";
        }

        .mdi-school:before {
            content: "\f474";
        }

        .mdi-cash-usd:before {
            content: "\f117";
        }

        .mdi-snowflake:before {
            content: "\f716";
        }

        .mdi-swim:before {
            content: "\f4e3";
        }

        .mdi-email-outline:before {
            content: "\f1f0";
        }

        .mdi-account-supervisor:before {
            content: "\fa8a";
        }

        .mdi-gavel:before {
            content: "\f29b";
        }

        .mdi-link:before {
            content: "\f337";
        }

        .mdi-image:before {
            content: "\f2e9";
        }

        .mdi-play-circle-outline:before {
            content: "\f40d";
        }

        .mdi-plus-circle-outline:before {
            content: "\f419";
        }

        .mdi-minus-circle-outline:before {
            content: "\f377";
        }

        .mdi-filter-outline:before {
            content: "\f233";
        }

        .mdi-checkbox-marked-circle-outline:before {
            content: "\f134";
        }

        .mdi-check:before {
            content: "\f12c";
        }

        .mdi-calendar-check:before {
            content: "\f0ef";
        }

        .mdi-panorama:before {
            content: "\f3dc";
        }

        .mdi-home-outline:before {
            content: "\f6a0";
        }

        .mdi-file-document-edit-outline:before {
            content: "\fda5";
        }

        .mdi-chart-line-variant:before {
            content: "\f7b0";
        }

        .mdi-lightbulb-on-outline:before {
            content: "\f6e8";
        }

        .mdi-login-variant:before {
            content: "\f5fc";
        }

        .mdi-account-plus-outline:before {
            content: "\f800";
        }

        .mdi-bell-outline:before {
            content: "\f09c";
        }

        .mdi-web:before {
            content: "\f59f";
        }

        .mdi-folder-outline:before {
            content: "\f256";
        }

        .mdi-arrow-up:before {
            content: "\f05d";
        }

        .mdi-alert-circle-outline:before {
            content: "\f5d6";
        }

        .mdi-settings-outline:before {
            content: "\f8ba";
        }

        .mdi-arrow-left:before {
            content: "\f04d";
        }

        .mdi-linkedin:before {
            content: "\f33b";
        }

        .mdi-gmail:before {
            content: "\f2ab";
        }

        .mdi-image-edit:before {
            content: "\f020e\de0e";
        }

        .mdi-image-edit-outline:before {
            content: "\f020f\de0f";
        }

        .lnr-chevron-right:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e876";
        }

        .lnr-chevron-left:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e875";
        }

        .lnr-chevron-up:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e873";
        }

        .lnr-chevron-down:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e874";
        }

        .lnr-arrow-right:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e87a";
        }

        .lnr-map-marker:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e833";
        }

        .lnr-bullhorn:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e859";
        }

        .lnr-phone-handset:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e830";
        }

        .lnr-envelope:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Linearicons-Free";
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1;
            text-transform: none;
            content: "\e818";
        }

        ul {
            list-style-type: none;
        }

        @media (max-width:1440px) {
            .container {
                padding: 0 50px;
            }
        }

        @media (max-width:1024px) {
            .container {
                max-width: 100%;
                padding: 0 15px;
            }
        }

        @media (max-width:720px) {
            .container {
                padding: 0 50px;
            }
        }

        @media (max-width:576px) {
            .container {
                padding: 0 15px;
            }
        }

        .cb-section {
            padding: 60px 0;
        }

        .cb-section.cb-section-border-bottom {
            border-bottom: 1px solid #e9e9e9;
        }

        @media screen and (max-width:768px) {
            .cb-section {
                padding: 40px 0;
            }
        }

        .btn-gradient {
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            background-size: 200% 100%;
            transition: all 0.4s ease-in-out;
        }

        .btn-gradient:hover {
            background-position: 100% 0;
        }

        .dropdown {
            position: relative;
        }

        .dropdown .dropdown-menu {
            display: none;
            z-index: 5;
            position: absolute;
            top: calc(100% - 1px);
            right: 0;
            width: 100%;
            min-width: 210px;
            padding-top: 26px;
        }

        .dropdown .dropdown-menu>* {
            -webkit-box-shadow: 0 2px 14px rgba(46, 46, 46, 0.5);
            background: #fff;
            box-shadow: 0 2px 14px rgba(46, 46, 46, 0.5);
        }

        .dropdown .dropdown-menu>ul li a {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            height: 45px;
            padding: 0 15px;
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
            line-height: normal;
            line-height: 45px;
            text-decoration: none;
            white-space: nowrap;
            transition: 0.3s all;
        }

        .dropdown .dropdown-menu>ul li a:hover {
            background: #E9E9E9;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .cb-title * {
            margin-bottom: 1.875rem;
            color: #182642;
            font-size: 1.875rem;
            font-weight: 700;
        }

        .cb-title.cb-title-center {
            text-align: center;
        }

        .cb-title.cb-title-white * {
            color: #ffffff;
        }

        .mdi {
            line-height: 1;
        }

        .row {
            margin-bottom: -30px;
        }

        .row+.row {
            margin-top: 30px;
        }

        .row>* {
            margin-bottom: 30px;
        }

        .view-more {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-top: 40px;
        }

        .view-more a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 700;
            text-decoration: none;
        }

        .view-more a span {
            padding-left: 7px;
        }

        .view-more a:hover {
            color: #f7a334;
        }

        @media screen and (max-width:768px) {
            .view-more {
                margin-top: 20px;
            }
        }

        .job-tags {
            margin-top: 40px;
        }

        .job-tags ul {
            margin-bottom: -20px;
        }

        .job-tags ul li {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .job-tags ul li a {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            padding: 8px 10px;
            border-radius: 4px;
            background: #f1f1f1;
            color: inherit;
            font-size: 14.5px;
            text-decoration: none;
            transition: 0.3s all;
        }

        .job-tags ul li a:hover {
            background: #d8d8d8;
        }

        @media screen and (max-width:768px) {
            .job-tags {
                margin-top: 30px;
            }
        }

        .banner-ad+.banner-ad {
            margin-top: 10px;
        }

        .banner-ad img {
            width: 100%;
        }

        .pagination {
            margin-top: 30px;
        }

        .pagination ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pagination ul li a {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #e5e5e5;
            border-radius: 50%;
            background: #fff;
            color: #5d677a;
            font-size: 14.5px;
            line-height: 1;
            text-decoration: none;
            opacity: 1;
        }

        .pagination ul li+li {
            margin-left: 10px;
        }

        .pagination ul li.prev-page a,
        .pagination ul li.next-page a {
            border: 1px solid transparent;
            background: #f5f5f5;
        }

        .pagination ul li.active a,
        .pagination ul li:hover a {
            border-color: #f7a334;
            background: #f7a334;
            color: #fff;
        }

        ul.filter-list li {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14.5px;
        }

        ul.filter-list li+li {
            margin-top: 5px;
        }

        ul.filter-list li .count {
            color: #999999;
        }

        ul.filter-list li .form-group input {
            display: none;
        }

        ul.filter-list li .form-group label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            line-height: 1;
        }

        ul.filter-list li .form-group label:before {
            margin-right: 8px;
            font-family: Material Design Icons;
            font-size: 18px;
        }

        ul.filter-list li .form-group.frm-checkbox input:checked~label:before {
            color: #2f4ba0;
            content: "\f132";
        }

        ul.filter-list li .form-group.frm-checkbox label:before {
            content: "\f131";
        }

        ul.filter-list li .form-group.frm-radio input:checked~label:before {
            content: "\f43e";
        }

        ul.filter-list li .form-group.frm-radio label:before {
            content: "\f43d";
        }

        .success-modal,
        .success-follow-modal,
        .success-job-alert-modal {
            position: relative;
            width: 480px;
            padding: 0 !important;
        }

        .success-modal .fancybox-close-small,
        .success-follow-modal .fancybox-close-small,
        .success-job-alert-modal .fancybox-close-small {
            display: none;
        }

        .success-modal .modal-title,
        .success-follow-modal .modal-title,
        .success-job-alert-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .success-modal .modal-title p,
        .success-follow-modal .modal-title p,
        .success-job-alert-modal .modal-title p {
            margin-bottom: 0;
            font-size: 14.5px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .success-modal .modal-body,
        .success-follow-modal .modal-body,
        .success-job-alert-modal .modal-body {
            padding: 40px;
            text-align: center;
        }

        .success-modal .modal-body .icon,
        .success-follow-modal .modal-body .icon,
        .success-job-alert-modal .modal-body .icon {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .success-modal .modal-body .icon em,
        .success-follow-modal .modal-body .icon em,
        .success-job-alert-modal .modal-body .icon em {
            color: #24ebc8;
            font-size: 30px;
        }

        .success-modal .modal-body .icon span,
        .success-follow-modal .modal-body .icon span,
        .success-job-alert-modal .modal-body .icon span {
            color: #24ebc8;
            font-size: 30px;
        }

        .success-modal .modal-body .icon img,
        .success-follow-modal .modal-body .icon img,
        .success-job-alert-modal .modal-body .icon img {
            max-height: 100px;
        }

        .success-modal .modal-body p,
        .success-follow-modal .modal-body p,
        .success-job-alert-modal .modal-body p {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
        }

        .success-modal .modal-body p span,
        .success-follow-modal .modal-body p span,
        .success-job-alert-modal .modal-body p span {
            margin-right: 8px;
        }

        .success-modal .modal-body .btn-close-modal,
        .success-follow-modal .modal-body .btn-close-modal,
        .success-job-alert-modal .modal-body .btn-close-modal {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            z-index: 11;
            position: absolute;
            top: 10px;
            right: 10px;
            max-width: 120px;
            border-radius: 4px;
            color: #cccccc;
            text-decoration: none;
            transition: 0.3s all;
        }

        .success-modal .modal-body .view-saved-job,
        .success-follow-modal .modal-body .view-saved-job,
        .success-job-alert-modal .modal-body .view-saved-job {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-top: 20px;
            padding: 7px 20px;
            border-radius: 20px;
            background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            background-size: 200% 100%;
            color: #ffffff;
            font-size: 14.5px;
            text-decoration: none;
            transition: 0.4s ease-in-out all;
        }

        .success-modal .modal-body .view-saved-job:hover,
        .success-follow-modal .modal-body .view-saved-job:hover,
        .success-job-alert-modal .modal-body .view-saved-job:hover {
            background-position: 100% 0;
        }

        .remove-modal {
            width: 480px;
            padding: 0 !important;
        }

        .remove-modal .fancybox-close-small {
            display: none;
        }

        .remove-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .remove-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .remove-modal .modal-body {
            padding: 40px;
            text-align: center;
        }

        .remove-modal .modal-body .icon {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .remove-modal .modal-body .icon em {
            color: #fc0821;
            font-size: 30px;
        }

        .remove-modal .modal-body .icon span {
            color: #fc0821;
            font-size: 30px;
        }

        .remove-modal .modal-body .icon img {
            max-height: 100px;
        }

        .remove-modal .modal-body p {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .remove-modal .modal-body p span {
            margin-right: 8px;
        }

        .remove-modal .modal-body .btn-close-modal {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            z-index: 11;
            position: absolute;
            top: 10px;
            right: 10px;
            max-width: 120px;
            border-radius: 4px;
            color: #cccccc;
            text-decoration: none;
            transition: 0.3s all;
        }

        .remove-modal .modal-body .view-saved-job {
            color: inherit;
        }

        .login-modal {
            padding: 0 !important;
        }

        .login-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            background: #eeeeee;
            text-align: center;
        }

        .login-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        @media (max-width:576px) {
            .login-modal .modal-title p {
                padding: 0 50px;
            }
        }

        .login-modal .modal-body {
            padding: 30px;
        }

        .login-modal .row {
            margin-right: -5px;
            margin-bottom: -10px;
            margin-left: -5px;
        }

        .login-modal .row>* {
            margin-bottom: 10px;
            padding: 0 5px;
        }

        .login-modal .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 15px;
        }

        .login-modal .form-group input[type=text],
        .login-modal .form-group input[type=password] {
            width: 100%;
            height: 35px;
            padding: 0 10px;
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::-webkit-input-placeholder,
        .login-modal .form-group input[type=password]::-webkit-input-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::-moz-placeholder,
        .login-modal .form-group input[type=password]::-moz-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]:-ms-input-placeholder,
        .login-modal .form-group input[type=password]:-ms-input-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::-ms-input-placeholder,
        .login-modal .form-group input[type=password]::-ms-input-placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group input[type=text]::placeholder,
        .login-modal .form-group input[type=password]::placeholder {
            font-size: 14.5px;
        }

        .login-modal .form-group button {
            width: 100%;
            height: 100%;
            background: #e8c80d;
            color: #fff;
            font-size: 14.5px;
        }

        .login-modal .form-group button:hover {
            background: #e18408;
        }

        .login-modal .form-group label {
            font-size: 13px;
        }

        .login-modal .form-group.form-check {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .login-modal .form-group.form-check input {
            margin-right: 5px;
        }

        .login-modal .register {
            padding-right: 10px;
            font-size: 14.5px;
        }

        .login-modal .forget-password {
            font-size: 14.5px;
        }

        .login-modal .sign-in-by {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .login-modal .sign-in-by span {
            margin-right: 10px;
            font-size: 13px;
        }

        .login-modal .sign-in-by ul li {
            display: inline-block;
            margin-left: 5px;
        }

        .login-modal .sign-in-by ul li a {
            color: inherit;
            font-size: 20px;
            text-decoration: none;
        }

        .login-modal .sign-in-by ul li a:hover {
            color: #e8c80d;
        }

        .references-modal,
        .hide-infor-modal,
        .saved-and-finish-modal {
            padding: 0 !important;
        }

        .references-modal .modal-title,
        .hide-infor-modal .modal-title,
        .saved-and-finish-modal .modal-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 5px 15px;
            padding-right: 44px;
            background: #eeeeee;
            text-align: center;
        }

        .references-modal .modal-title p,
        .hide-infor-modal .modal-title p,
        .saved-and-finish-modal .modal-title p {
            margin-bottom: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .references-modal .modal-body,
        .hide-infor-modal .modal-body,
        .saved-and-finish-modal .modal-body {
            padding: 40px;
        }

        @media (min-width:1200px) {
            .references-modal .modal-body .d-flex,
            .hide-infor-modal .modal-body .d-flex,
            .saved-and-finish-modal .modal-body .d-flex {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                margin: 0 -10px;
            }
            .references-modal .modal-body .d-flex .form-group,
            .hide-infor-modal .modal-body .d-flex .form-group,
            .saved-and-finish-modal .modal-body .d-flex .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
                padding: 0 10px;
            }
        }

        .references-modal .form-group,
        .hide-infor-modal .form-group,
        .saved-and-finish-modal .form-group {
            margin-bottom: 10px;
        }

        .references-modal .form-group label,
        .hide-infor-modal .form-group label,
        .saved-and-finish-modal .form-group label {
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
        }

        .references-modal .form-group label span,
        .hide-infor-modal .form-group label span,
        .saved-and-finish-modal .form-group label span {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        .references-modal .form-group input,
        .hide-infor-modal .form-group input,
        .saved-and-finish-modal .form-group input {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #93bcdc;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
        }

        .references-modal .form-group input:focus,
        .hide-infor-modal .form-group input:focus,
        .saved-and-finish-modal .form-group input:focus {
            outline: none;
        }

        .references-modal .form-group span,
        .hide-infor-modal .form-group span,
        .saved-and-finish-modal .form-group span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-top: 7px;
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 500;
        }

        .references-modal .form-group.form-text,
        .hide-infor-modal .form-group.form-text,
        .saved-and-finish-modal .form-group.form-text {
            position: relative;
        }

        .references-modal .form-group.form-text label,
        .hide-infor-modal .form-group.form-text label,
        .saved-and-finish-modal .form-group.form-text label {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            position: absolute;
            top: 7px;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
        }

        .references-modal .form-group.form-text input:focus~label,
        .references-modal .form-group.form-text input:not([value=""])~label,
        .hide-infor-modal .form-group.form-text input:focus~label,
        .hide-infor-modal .form-group.form-text input:not([value=""])~label,
        .saved-and-finish-modal .form-group.form-text input:focus~label,
        .saved-and-finish-modal .form-group.form-text input:not([value=""])~label {
            top: -12px;
            left: 0;
            font-size: 14.5px;
        }

        .references-modal .form-group.form-checkbox label,
        .hide-infor-modal .form-group.form-checkbox label,
        .saved-and-finish-modal .form-group.form-checkbox label {
            position: relative;
            padding-left: 25px;
        }

        .references-modal .form-group.form-checkbox label:after,
        .hide-infor-modal .form-group.form-checkbox label:after,
        .saved-and-finish-modal .form-group.form-checkbox label:after {
            position: absolute;
            top: 2px;
            left: 0;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f131";
        }

        .references-modal .form-group.form-checkbox input,
        .hide-infor-modal .form-group.form-checkbox input,
        .saved-and-finish-modal .form-group.form-checkbox input {
            display: none;
        }

        .references-modal .form-group.form-checkbox input:checked,
        .hide-infor-modal .form-group.form-checkbox input:checked,
        .saved-and-finish-modal .form-group.form-checkbox input:checked {
            background: black;
        }

        .references-modal .form-group.form-checkbox input:checked~label:after,
        .hide-infor-modal .form-group.form-checkbox input:checked~label:after,
        .saved-and-finish-modal .form-group.form-checkbox input:checked~label:after {
            color: #5d677a;
            content: "\f132";
        }

        .references-modal .button-modal,
        .hide-infor-modal .button-modal,
        .saved-and-finish-modal .button-modal {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .references-modal .btn-gradient,
        .hide-infor-modal .btn-gradient,
        .saved-and-finish-modal .btn-gradient {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            max-width: 120px;
            margin: 30px auto 0;
            margin-right: 10px;
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
            color: #fff;
            text-align: center;
            text-decoration: none;
            transition: 0.3s all;
        }

        @media (min-width:1200px) {
            .references-modal .btn-gradient,
            .hide-infor-modal .btn-gradient,
            .saved-and-finish-modal .btn-gradient {
                width: 120px;
            }
        }

        .references-modal .btn-close-modal,
        .hide-infor-modal .btn-close-modal,
        .saved-and-finish-modal .btn-close-modal {
            -webkit-transition: 0.3s all;
            -o-transition: 0.3s all;
            display: block;
            max-width: 120px;
            margin: 30px auto 0;
            margin-right: 10px;
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 4px;
            background: #2f4ba0;
            color: #fff;
            text-align: center;
            text-decoration: none;
            transition: 0.3s all;
        }

        .references-modal .btn-close-modal:hover,
        .hide-infor-modal .btn-close-modal:hover,
        .saved-and-finish-modal .btn-close-modal:hover {
            background: #235f8e;
        }

        @media (min-width:1200px) {
            .references-modal .btn-close-modal,
            .hide-infor-modal .btn-close-modal,
            .saved-and-finish-modal .btn-close-modal {
                width: 120px;
            }
        }

        @media (min-width:1025px) {
            .hide-infor-modal {
                min-width: 300px;
            }
        }

        .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
        .chosen-container-single .chosen-search input[type=text],
        .chosen-container-single .chosen-single abbr,
        .chosen-container-single .chosen-single div b,
        .chosen-container .chosen-results-scroll-down span,
        .chosen-container .chosen-results-scroll-up span,
        .chosen-rtl .chosen-search input[type=text] {
            background-image: url("https://static.careerbuilder.vn/themes/employer/img/chosen-sprite@2x.png") !important;
            background-repeat: no-repeat !important;
            background-size: 52px 37px !important;
        }

        .back-drop {
            -webkit-transition: 0.5s ease-in-out;
            -o-transition: 0.5s ease-in-out;
            z-index: 998;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            pointer-events: none;
            transition: 0.5s ease-in-out;
        }

        .back-drop.active {
            opacity: 1;
            pointer-events: initial;
        }

        select {
            width: 100%;
            height: 40px;
        }

        .zalo-share-button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .zalo-share-button:before {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 0;
            position: absolute;
            top: 3px;
            align-items: center;
            justify-content: center;
            height: 20px;
            content: url("https://static.careerbuilder.vn/themes/employer/img/i-zalo.png");
            pointer-events: none;
        }

        .zalo-share-button iframe {
            opacity: 0 !important;
        }

        .zalo-share-button #_no-clickjacking-0,
        .zalo-share-button #_no-clickjacking-1 {
            opacity: 0 !important;
        }

        .zalo-share-button:hover:before {
            content: url("https://static.careerbuilder.vn/themes/employer/img/i-zalo-hover.png");
        }

        .autocomplete-suggestions {
            z-index: 99999999 !important;
        }

        .maps-tooltip .figure {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .maps-tooltip .caption {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 60px);
            flex: 0 0 calc(100% - 60px);
            max-width: calc(100% - 60px);
            padding-left: 10px;
        }

        .maps-tooltip .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 60px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 60px;
            align-items: center;
            justify-content: center;
            width: 60px;
            max-width: 60px;
            height: 60px;
            margin-bottom: 5px;
            padding: 5px;
            border: 1px solid #f1f1f1;
            border-radius: 3px;
        }

        .maps-tooltip .image img {
            max-width: 100%;
            max-height: 100%;
        }

        .maps-tooltip p {
            margin-bottom: 3px;
            font-size: 12px;
        }

        .maps-tooltip .title {
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 700;
        }

        .maps-tooltip a {
            color: #0056b3;
            font-size: 13px;
            font-weight: 500;
        }

        .maps-tooltip .salary {
            color: #008563;
        }

        .chosen-drop-bottom .chosen-container .chosen-drop {
            top: initial;
            bottom: 100%;
            border-top: 1px solid #aaaaaa;
            border-bottom: none;
        }

        @media (min-width:1200px) {
            .cus-row {
                overflow-x: hidden;
            }
        }

        .form-group.form-text input.label-active~label {
            top: -12px !important;
            font-size: 14.5px !important;
        }

        .toolip {
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 400px;
            padding: 5px 15px;
            border: 1px solid #cccccc;
            border-radius: 2px;
            background: #ffffff;
            opacity: 0;
            pointer-events: none;
        }

        .toolip p,
        .toolip a {
            color: #5d677a;
            font-size: 13px;
        }

        .toolip:after {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            z-index: 11;
            position: absolute;
            top: -4px;
            left: 50%;
            width: 0;
            height: 0;
            transform: translateX(-50%);
            border-right: 6px solid transparent;
            border-bottom: 5px solid #ffffff;
            border-left: 6px solid transparent;
            content: "";
            opacity: 0;
        }

        .toolip:before {
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            z-index: -1;
            position: absolute;
            top: -5.5px;
            left: 50%;
            width: 0;
            height: 0;
            transform: translateX(-50%);
            border-right: 8px solid transparent;
            border-bottom: 7px solid #cccccc;
            border-left: 8px solid transparent;
            content: "";
            opacity: 0;
        }

        .toollips {
            position: relative;
        }

        @media (min-width:1025px) {
            .toollips:hover {
                visibility: visible;
            }
            .toollips:hover .toolip {
                opacity: 1;
            }
            .toollips:hover .toolip:after {
                opacity: 1;
            }
            .toollips:hover .toolip::before {
                opacity: 1;
            }
        }

        input:focus {
            border: 1px solid #f1f1f1;
            border-color: #4fb45e !important;
            outline: none;
        }

        button:focus {
            border: 1px solid #f1f1f1;
            border-color: #4fb45e !important;
            outline: none;
        }

        select:focus {
            border: 1px solid #f1f1f1;
            border-color: #4fb45e !important;
            outline: none;
        }

        textarea:focus {
            border: 1px solid #f1f1f1;
            border-color: #4fb45e !important;
            outline: none;
        }

        html,
        body {
            color: #5d677a;
            font-family: "Barlow", sans-serif;
            font-size: 13px;
        }

        @media (min-width:768px) {
            html,
            body {
                font-size: 14.5px;
            }
        }

        @media (min-width:1025px) {
            html,
            body {
                font-size: 15px;
            }
        }

        @media (min-width:1200px) {
            html,
            body {
                font-size: 16px;
            }
        }

        body {
            -webkit-transition: left 0.5s ease-in-out;
            -o-transition: left 0.5s ease-in-out;
            position: relative;
            left: 0;
            min-height: 100vh;
            transition: left 0.5s ease-in-out;
        }

        @media screen and (max-width:1200px) {
            html.menu-mobile-active {
                position: fixed;
                width: 100%;
                overflow: hidden;
            }
            html.menu-mobile-active body,
            html.menu-mobile-active header {
                left: 290px;
            }
        }

        a {
            color: #2f4ba0;
        }

        main {
            padding-top: 80px;
        }

        @media screen and (max-width:1200px) {
            main {
                padding-top: 60px;
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }

        iframe {
            max-width: 100%;
        }

        select {
            background-image: url("https://static.careerbuilder.vn/themes/employer/img/sl.png");
            background-position: 95% 50%;
            background-repeat: no-repeat;
        }

        button {
            border: 0;
        }

        strong,
        b {
            font-weight: 700;
        }

        header {
            -webkit-transition: left 0.5s ease-in-out;
            -o-transition: left 0.5s ease-in-out;
            z-index: 999;
            position: fixed !important;
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            background: #ffffff;
            transition: left 0.5s ease-in-out;
        }

        header:before {
            z-index: 1;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: #e8e8e8;
            content: "";
        }

        @media (max-width:1200px) {
            header {
                position: fixed;
                height: 60px;
                padding: 14px 0;
            }
        }

        header.active {
            -webkit-box-shadow: 1px 0 20px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 1px 0 20px 0 rgba(0, 0, 0, 0.1);
        }

        @media (max-width:1025px) {
            header.active {
                -webkit-box-shadow: none;
                box-shadow: none;
            }
        }

        header .container-fluid {
            padding-right: 0;
        }

        header .main-wrap,
        header .right-wrap,
        header .left-wrap {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .main-menu {
            margin-left: 40px;
        }

        header .main-menu .menu {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .main-menu .menu li {
            padding: 0 10px;
        }

        header .main-menu .menu li a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: relative;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.4s ease-in-out all;
        }

        header .main-menu .menu li a:before {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            z-index: 12;
            position: absolute;
            bottom: -32px;
            left: 0;
            width: 100%;
            height: 4px;
            background: #2f4ba0;
            content: "";
            opacity: 0;
            transition: 0.4s ease-in-out all;
        }

        header .main-menu .menu li:hover a {
            color: #182642;
        }

        header .main-menu .menu li:hover a::before {
            opacity: 1;
        }

        header .main-menu .menu li.active a {
            color: #182642;
            font-weight: 700;
        }

        header .main-menu .menu li.active a::before {
            opacity: 1;
        }

        header .main-menu .menu li.dropdown {
            position: relative;
        }

        header .main-menu .menu li.dropdown .dropdown-menu {
            left: 0;
        }

        header .main-menu .menu li.dropdown li {
            margin-bottom: 5px;
            padding: 0;
        }

        header .main-menu .menu li.dropdown li a {
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
        }

        header .main-menu .menu li.dropdown li a:before {
            display: none;
            bottom: -5px;
            height: 2px;
            opacity: 0;
        }

        header .main-menu .menu li.dropdown li:hover a {
            color: #182642;
        }

        header .main-menu .menu li.dropdown li:hover a::before {
            opacity: 1;
        }

        header .main-menu .menu li.dropdown li.active a {
            color: #182642;
            font-weight: 700;
        }

        header .main-menu .menu li.dropdown li.active a::before {
            opacity: 1;
        }

        @media (min-width:1400px) {
            header .main-menu .menu li {
                padding: 0 15px;
            }
        }

        @media (max-width:1368px) {
            header .main-menu {
                margin-left: 10px;
            }
            header .main-menu .menu li {
                padding: 0 6px;
            }
            header .main-menu .menu li a {
                font-size: 13px;
            }
        }

        header .main-noti {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 47px;
            border-right: 1px solid #e8e8e8;
        }

        header .main-noti:hover a {
            color: #e8c80d;
        }

        header .main-noti a {
            height: 26px;
            color: #5d677a;
            font-size: 20px;
        }

        header .main-noti .dropdown-menu .noti {
            min-width: 310px;
            padding: 20px;
        }

        header .main-noti .dropdown-menu p {
            font-size: 14.5px;
        }

        header .main-noti .dropdown-menu .email {
            display: block;
            width: 75px;
            height: 27px;
            margin: 15px auto 0;
            padding: 0 5px;
            border: none;
            background-color: #e8c80d;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            line-height: 27px;
            text-align: center;
            cursor: pointer;
        }

        header .main-login,
        header .title-login {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 26px;
            padding: 0 10px;
            border-right: 1px solid #e8e8e8;
        }

        header .main-login:hover>a,
        header .title-login:hover>a {
            color: #e8c80d;
        }

        header .main-login>a,
        header .title-login>a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
        }

        header .main-login>a span,
        header .title-login>a span {
            padding-right: 5px;
            font-size: 20px;
            line-height: 0;
        }

        header .main-login .dropdown-menu,
        header .title-login .dropdown-menu {
            min-width: 250px;
        }

        header .main-login .login-wrapper,
        header .title-login .login-wrapper {
            padding: 15px;
        }

        header .main-login .login-wrapper .row,
        header .title-login .login-wrapper .row {
            margin-right: -5px;
            margin-bottom: -10px;
            margin-left: -5px;
        }

        header .main-login .login-wrapper .row>*,
        header .title-login .login-wrapper .row>* {
            margin-bottom: 10px;
            padding: 0 5px;
        }

        header .main-login .login-wrapper .form-group,
        header .title-login .login-wrapper .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        header .main-login .login-wrapper .form-group input[type=text],
        header .main-login .login-wrapper .form-group input[type=password],
        header .title-login .login-wrapper .form-group input[type=text],
        header .title-login .login-wrapper .form-group input[type=password] {
            width: 100%;
            height: 30px;
            padding: 0 5px;
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::-webkit-input-placeholder,
        header .main-login .login-wrapper .form-group input[type=password]::-webkit-input-placeholder,
        header .title-login .login-wrapper .form-group input[type=text]::-webkit-input-placeholder,
        header .title-login .login-wrapper .form-group input[type=password]::-webkit-input-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::-moz-placeholder,
        header .main-login .login-wrapper .form-group input[type=password]::-moz-placeholder,
        header .title-login .login-wrapper .form-group input[type=text]::-moz-placeholder,
        header .title-login .login-wrapper .form-group input[type=password]::-moz-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]:-ms-input-placeholder,
        header .main-login .login-wrapper .form-group input[type=password]:-ms-input-placeholder,
        header .title-login .login-wrapper .form-group input[type=text]:-ms-input-placeholder,
        header .title-login .login-wrapper .form-group input[type=password]:-ms-input-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::-ms-input-placeholder,
        header .main-login .login-wrapper .form-group input[type=password]::-ms-input-placeholder,
        header .title-login .login-wrapper .form-group input[type=text]::-ms-input-placeholder,
        header .title-login .login-wrapper .form-group input[type=password]::-ms-input-placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group input[type=text]::placeholder,
        header .main-login .login-wrapper .form-group input[type=password]::placeholder,
        header .title-login .login-wrapper .form-group input[type=text]::placeholder,
        header .title-login .login-wrapper .form-group input[type=password]::placeholder {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group button,
        header .title-login .login-wrapper .form-group button {
            width: 100%;
            height: 100%;
            background: #e8c80d;
            color: #fff;
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .form-group button:hover,
        header .title-login .login-wrapper .form-group button:hover {
            background: #e18408;
        }

        header .main-login .login-wrapper .form-group label,
        header .title-login .login-wrapper .form-group label {
            font-size: 13px;
        }

        header .main-login .login-wrapper .form-group.form-check,
        header .title-login .login-wrapper .form-group.form-check {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        header .main-login .login-wrapper .form-group.form-check input,
        header .title-login .login-wrapper .form-group.form-check input {
            margin-right: 5px;
        }

        header .main-login .login-wrapper .forget-password,
        header .title-login .login-wrapper .forget-password {
            font-size: 14.5px;
        }

        header .main-login .login-wrapper .sign-in-by,
        header .title-login .login-wrapper .sign-in-by {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        header .main-login .login-wrapper .sign-in-by span,
        header .title-login .login-wrapper .sign-in-by span {
            margin-right: 10px;
            font-size: 13px;
        }

        header .main-login .login-wrapper .sign-in-by ul li,
        header .title-login .login-wrapper .sign-in-by ul li {
            display: inline-block;
            margin-left: 5px;
        }

        header .main-login .login-wrapper .sign-in-by ul li a,
        header .title-login .login-wrapper .sign-in-by ul li a {
            color: inherit;
            font-size: 20px;
            text-decoration: none;
        }

        header .main-login .login-wrapper .sign-in-by ul li a:hover,
        header .title-login .login-wrapper .sign-in-by ul li a:hover {
            color: #e8c80d;
        }

        header .main-login.dropdown .dropdown-menu,
        header .title-login.dropdown .dropdown-menu {
            display: none;
            min-width: 350px;
        }

        header .main-login.dropdown:hover .dropdown-menu,
        header .title-login.dropdown:hover .dropdown-menu {
            display: none;
        }

        header .main-login.logged .dropdown-menu,
        header .title-login.logged .dropdown-menu {
            min-width: 170px;
        }

        header .main-login.logged>a,
        header .title-login.logged>a {
            color: #2f4ba0;
        }

        header .main-login.logged>a span,
        header .title-login.logged>a span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 4px;
            color: #2f4ba0;
            font-size: 15px !important;
            font-weight: 700;
        }

        header .main-login.logged>a:hover,
        header .title-login.logged>a:hover {
            text-decoration: none;
        }

        header .main-login.logged:hover .dropdown-menu,
        header .title-login.logged:hover .dropdown-menu {
            display: block;
        }

        header .title-login {
            padding: 0;
            border-right: none;
        }

        header .main-register {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 26px;
            padding: 0 10px;
            border-right: 1px solid #e8e8e8;
        }

        header .main-register:hover a {
            color: #e8c80d;
        }

        header .main-register a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
        }

        @media (max-width:1025px) {
            header .left-wrap .logo {
                padding-left: 20px;
            }
        }

        @media (max-width:768px) {
            header .left-wrap .logo {
                padding-left: 10px;
            }
        }

        header .main-language {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            height: 26px;
            padding: 0 15px;
        }

        header .main-language .dropdown-toggle {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            color: #666666;
            font-size: 14.5px;
            font-weight: 500;
            transition: 0.4s ease-in-out all;
        }

        @media (max-width:1025px) {
            header .main-language .dropdown-toggle {
                color: #5d677a;
            }
        }

        header .main-language .dropdown-toggle:hover {
            color: #182642;
            cursor: pointer;
        }

        header .main-language .dropdown-toggle:hover:before {
            color: #182642;
        }

        header .main-language .dropdown-menu {
            min-width: 50px;
        }

        header .main-language .dropdown-menu .item {
            -webkit-box-shadow: none !important;
            position: relative;
            padding: 5px 5px;
            padding-left: 25px;
            border-right: 1px solid #ebebeb;
            border-left: 1px solid #ebebeb;
            box-shadow: none !important;
        }

        header .main-language .dropdown-menu .item.active:before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #182642;
            font-family: "Material Design Icons";
            font-size: 18px;
            content: "\f12c";
        }

        header .main-language .dropdown-menu .item:first-child {
            border-top: 1px solid #ebebeb;
        }

        header .main-language .dropdown-menu .item:last-child {
            border-bottom: 1px solid #ebebeb;
        }

        header .main-language .dropdown-menu a {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 500;
            line-height: 1.2;
            transition: 0.4s ease-in-out all;
        }

        header .main-language .dropdown-menu a:hover {
            color: #182642;
        }

        header .main-language:hover .dropdown-menu {
            display: block;
        }

        header .main-employer {
            z-index: 2;
            position: relative;
        }

        header .main-employer .dropdown-menu {
            padding-top: 0;
        }

        header .main-employer .dropdown-toggle {
            padding: 17.5px;
            background: #182642;
        }

        header .main-employer .dropdown-toggle h4 {
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
        }

        header .main-employer .dropdown-toggle em {
            padding-left: 5px;
            color: #ffffff;
            font-size: 14.5px;
        }

        header .main-employer .dropdown-toggle p {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
        }

        header .main-employer:hover a {
            text-decoration: none;
        }

        header .main-employer:hover .dropdown-menu {
            display: block;
        }

        @media (min-width:1400px) {
            header .main-employer .dropdown-toggle {
                min-width: 190px;
                padding: 17.5px 20px;
            }
        }

        header .button-hambuger {
            display: none;
        }

        header .backdrop {
            -webkit-transition: 0.5s ease-in-out;
            -o-transition: 0.5s ease-in-out;
            z-index: 31;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            opacity: 0;
            pointer-events: none;
            transition: 0.5s ease-in-out;
        }

        header .backdrop.active {
            opacity: 1;
            pointer-events: initial;
        }

        header .mobile-menu {
            -webkit-transition: left 0.5s ease-in-out;
            -o-transition: left 0.5s ease-in-out;
            display: block;
            z-index: 900;
            position: fixed;
            top: 0;
            left: -290px;
            width: 290px;
            height: 100%;
            background-color: #fff;
            transition: left 0.5s ease-in-out;
        }

        header .mobile-menu.show {
            left: 0;
        }

        header .mobile-menu .mobile-wrap {
            height: 100%;
        }

        header .mobile-menu .header-logo {
            padding: 20px 10px;
            text-align: center;
        }

        header .mobile-menu .header-bottom {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: calc(100% - 77px);
            overflow-x: hidden;
            overflow-y: auto;
            background: #182641;
            color: #fff;
        }

        header .mobile-menu .dropdown-mobile {
            position: relative;
        }

        header .mobile-menu .dropdown-mobile:before {
            position: absolute;
            top: 0;
            right: 15px;
            color: #ffffff;
            font-family: "Material Design Icons";
            font-size: 16px;
            content: "\f140";
        }

        header .mobile-menu .dropdown-mobile .dropdown-menu {
            display: none;
        }

        header .mobile-menu .dropdown-mobile .dropdown-menu ul {
            padding: 10px;
        }

        header .mobile-menu .dropdown-mobile.show-menu:before {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        header .mobile-menu .dropdown-mobile.show-menu .dropdown-menu {
            display: block;
        }

        header .mobile-menu .dropdown-mobile-2 {
            position: relative;
        }

        header .mobile-menu .dropdown-mobile-2:before {
            position: absolute;
            top: 0;
            right: 15px;
            color: #ffffff;
            font-family: "Material Design Icons";
            font-size: 16px;
            content: "\f140";
        }

        header .mobile-menu .dropdown-mobile-2 .dropdown-menu-2 {
            display: none;
        }

        header .mobile-menu .dropdown-mobile-2 .dropdown-menu-2 ul {
            padding: 10px 25px;
            padding-right: 10px;
        }

        header .mobile-menu .dropdown-mobile-2.show-menu-2:before {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        header .mobile-menu .dropdown-mobile-2.show-menu-2 .dropdown-menu-2 {
            display: block;
        }

        header .mobile-menu .profile {
            position: relative;
            padding: 20px 10px;
            border-bottom: 1px solid #ccc;
        }

        header .mobile-menu .profile .avatar {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        header .mobile-menu .profile .avatar img {
            -o-object-fit: cover;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        header .mobile-menu .profile .username {
            margin-top: 15px;
            font-size: 16px;
            text-align: center;
            text-transform: uppercase;
        }

        header .mobile-menu .profile .username p,
        header .mobile-menu .profile .username a {
            color: #ffffff;
            font-size: 16px;
            text-align: center;
            text-transform: uppercase;
        }

        header .mobile-menu .profile .username p:hover,
        header .mobile-menu .profile .username a:hover {
            text-decoration: none;
        }

        header .mobile-menu .profile .back-menu-normal,
        header .mobile-menu .profile .back-menu-normal-2 {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            position: absolute;
            top: 25px;
            left: 15px;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .profile .back-menu-normal em,
        header .mobile-menu .profile .back-menu-normal-2 em {
            color: #ffffff;
            font-size: 35px;
            font-weight: 700;
        }

        header .mobile-menu .profile .back-menu-normal.active,
        header .mobile-menu .profile .back-menu-normal-2.active {
            cursor: pointer;
            opacity: 1;
            pointer-events: auto;
        }

        header .mobile-menu .menu,
        header .mobile-menu .authentication-links,
        header .mobile-menu .header-alert {
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        header .mobile-menu .menu ul li+li,
        header .mobile-menu .authentication-links ul li+li,
        header .mobile-menu .header-alert ul li+li {
            margin-top: 10px;
        }

        header .mobile-menu .menu ul li a,
        header .mobile-menu .authentication-links ul li a,
        header .mobile-menu .header-alert ul li a {
            color: inherit;
            font-size: 14.5px;
        }

        header .mobile-menu .menu ul li a i,
        header .mobile-menu .authentication-links ul li a i,
        header .mobile-menu .header-alert ul li a i {
            margin-right: 10px;
        }

        header .mobile-menu .authentication-links {
            border-bottom: none;
        }

        header .mobile-menu .menu {
            position: relative;
        }

        header .mobile-menu .menu ul li.active a {
            color: #f7a334;
        }

        header .mobile-menu .menu ul li.dropdown-search-jobs .dropdown-menu {
            display: none;
        }

        header .mobile-menu .menu ul li.dropdown-search-jobs .dropdown-menu ul {
            padding-top: 5px;
            padding-left: 35px;
        }

        header .mobile-menu .menu ul li.dropdown-search-jobs .dropdown-menu ul li a {
            font-size: 14.5px;
        }

        header .mobile-menu .menu .menu-normal {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .menu .menu-normal li a i.fa {
            font-size: 14.5px;
        }

        header .mobile-menu .menu .menu-normal.active {
            -webkit-transform: translateX(-300px);
            -ms-transform: translateX(-300px);
            transform: translateX(-300px);
        }

        header .mobile-menu .menu .menu-logged {
            width: calc(100% - 50px);
        }

        header .mobile-menu .menu .menu-logged,
        header .mobile-menu .menu .menu-search-jobs,
        header .mobile-menu .menu .list-unstyled {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-transform: translateX(300px);
            -ms-transform: translateX(300px);
            transform: translateX(300px);
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard a,
        header .mobile-menu .menu .menu-search-jobs .menu-dashboard a,
        header .mobile-menu .menu .list-unstyled .menu-dashboard a {
            position: relative;
            padding-right: 15px;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard a:before,
        header .mobile-menu .menu .menu-search-jobs .menu-dashboard a:before,
        header .mobile-menu .menu .list-unstyled .menu-dashboard a:before {
            position: absolute;
            top: 1.2px;
            left: calc(100% - 15px);
            color: #ffffff;
            font-family: "Material Design Icons";
            font-size: 12px;
            content: "\f142";
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard .list-unstyled,
        header .mobile-menu .menu .menu-search-jobs .menu-dashboard .list-unstyled,
        header .mobile-menu .menu .list-unstyled .menu-dashboard .list-unstyled {
            width: 100%;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard .list-unstyled li a,
        header .mobile-menu .menu .menu-search-jobs .menu-dashboard .list-unstyled li a,
        header .mobile-menu .menu .list-unstyled .menu-dashboard .list-unstyled li a {
            line-height: 1.3;
        }

        header .mobile-menu .menu .menu-logged .menu-dashboard ul li a:before,
        header .mobile-menu .menu .menu-search-jobs .menu-dashboard ul li a:before,
        header .mobile-menu .menu .list-unstyled .menu-dashboard ul li a:before {
            display: none;
        }

        header .mobile-menu .menu .menu-logged.active,
        header .mobile-menu .menu .menu-search-jobs.active,
        header .mobile-menu .menu .list-unstyled.active {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
            pointer-events: auto;
        }

        header .mobile-menu .menu .menu-logged.active-2,
        header .mobile-menu .menu .menu-search-jobs.active-2,
        header .mobile-menu .menu .list-unstyled.active-2 {
            -webkit-transform: translateX(-300px);
            -ms-transform: translateX(-300px);
            transform: translateX(-300px);
            opacity: 1;
            pointer-events: none;
        }

        header .mobile-menu .menu .menu-logged.active-2 .menu-dashboard .list-unstyled,
        header .mobile-menu .menu .menu-search-jobs.active-2 .menu-dashboard .list-unstyled,
        header .mobile-menu .menu .list-unstyled.active-2 .menu-dashboard .list-unstyled {
            -webkit-transform: translateX(300px);
            -ms-transform: translateX(300px);
            transform: translateX(300px);
        }

        header .mobile-menu .menu.active {
            border-bottom: none;
        }

        header .mobile-menu .header-alert {
            background: #182641;
        }

        header .mobile-menu .header-alert ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        header .mobile-menu .header-alert ul li {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        header .mobile-menu .header-alert ul li a {
            -webkit-box-align: start;
            -ms-flex-align: start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: flex-start;
        }

        header .mobile-menu .header-alert ul li a i {
            margin: 0;
            margin-right: 10px;
            padding-top: 3px;
        }

        header .mobile-menu .header-alert ul li a span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        header .mobile-menu .employer-site {
            margin-top: auto;
            padding: 20px;
            background: #4892C7;
        }

        header .mobile-menu .employer-site h4 {
            color: #ffffff;
            font-size: 16px;
        }

        header .mobile-menu .employer-site p {
            color: #ffffff;
            font-size: 14.5px;
        }

        header .mobile-menu .menu-logged,
        header .mobile-menu .menu-search-jobs,
        header .mobile-menu .list-unstyled {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            z-index: 11;
            position: absolute;
            top: 20px;
            left: 20px;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .menu-logged ul li a,
        header .mobile-menu .menu-search-jobs ul li a,
        header .mobile-menu .list-unstyled ul li a {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        header .mobile-menu .menu-logged ul li a i,
        header .mobile-menu .menu-search-jobs ul li a i,
        header .mobile-menu .list-unstyled ul li a i {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            margin-right: 0;
            padding-right: 7px;
        }

        header .mobile-menu .menu-logged ul li a i.fa,
        header .mobile-menu .menu-search-jobs ul li a i.fa,
        header .mobile-menu .list-unstyled ul li a i.fa {
            font-size: 16px;
        }

        header .mobile-menu .header-bottom-bottom a:hover,
        header .mobile-menu .header-bottom-bottom a:focus {
            text-decoration: none;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            background: #4990c6;
            transition: 0.4s ease-in-out all;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links ul li a i {
            width: 20px;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links ul li a i.fa {
            font-size: 15px;
        }

        header .mobile-menu .header-bottom-bottom .authentication-links.active {
            -webkit-transform: translateX(-300px);
            -ms-transform: translateX(-300px);
            transform: translateX(-300px);
        }

        header .mobile-menu .menu-logged p,
        header .mobile-menu .menu-search-jobs p,
        header .mobile-menu .list-unstyled p {
            margin-bottom: 10px;
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 700;
        }

        header .mobile-menu.logged .menu {
            border-bottom: none;
        }

        @media screen and (min-width:1200px) {
            header .mobile-menu {
                display: none;
            }
        }

        @media screen and (max-width:1280.98px) {
            header .main-menu .menu li a {
                font-size: 13px;
            }
        }

        @media screen and (max-width:1200px) {
            header .button-hambuger {
                display: block;
            }
            header .button-hambuger span {
                font-size: 24px;
                line-height: normal;
            }
            header .left-wrap {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                align-items: center;
                width: 100%;
            }
            header .left-wrap .logo {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                position: absolute;
                top: 50%;
                left: 50%;
                padding-left: 0;
                transform: translate(-50%, -50%);
            }
            header .left-wrap .logo img {
                max-width: 200px;
            }
            header .right-wrap {
                display: none;
            }
            header .left-wrap .main-menu {
                display: none;
            }
        }

        footer {
            background: #f5f5f5;
        }

        footer .logo {
            margin-bottom: 20px;
        }

        footer address ul li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 14.5px;
        }

        footer address ul li span {
            margin-right: 8px;
        }

        footer h3 {
            margin-bottom: 1.25rem;
            color: #182642;
            font-size: 14.5px;
            font-weight: 700;
            text-transform: uppercase;
        }

        footer .footer-links ul li a {
            color: inherit;
            font-size: 14.5px;
        }

        footer .footer-links ul li+li {
            margin-top: 5px;
        }

        footer .footer-app-links .app-links {
            margin-bottom: -10px;
            margin-left: -10px;
        }

        footer .footer-app-links .app-links a {
            display: inline-block;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        footer .footer-social-links {
            margin-top: 30px;
        }

        footer .footer-social-links ul {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
        }

        footer .footer-social-links ul li a {
            color: inherit;
            font-size: 18px;
        }

        footer .footer-social-links ul li a:hover {
            color: #f79c25;
        }

        footer .footer-social-links ul li+li {
            margin-left: 20px;
        }

        footer .bottom-footer {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px 0;
        }

        footer .bottom-footer .left-bottom-footer {
            font-size: 12px;
        }

        footer .bottom-footer .left-bottom-footer ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        footer .bottom-footer .left-bottom-footer ul li+li {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        footer .bottom-footer .left-bottom-footer ul li+li:before {
            margin-right: 10px;
            content: "|";
        }

        footer .bottom-footer .left-bottom-footer ul li a {
            color: inherit;
        }

        @media screen and (max-width:768px) {
            footer .bottom-footer {
                display: block;
                text-align: center;
            }
            footer .left-bottom-footer ul {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        .chat-with-us {
            z-index: 500;
            position: fixed;
            right: 30px;
            bottom: 10px;
        }

        @media screen and (max-width:768px) {
            .chat-with-us {
                right: 0px;
                bottom: 0px;
            }
        }

        .feedback-btn {
            -webkit-transform: translate(25%, -50%) rotate(270deg);
            -ms-transform: translate(25%, -50%) rotate(270deg);
            z-index: 999;
            position: fixed;
            top: 50%;
            right: 0;
            padding: 5px 10px;
            transform: translate(25%, -50%) rotate(270deg);
            border: 1px solid #e5e5e5;
            border-top: 3px solid #2f4ba0;
            background: #fff;
            color: inherit;
            font-size: 14.5px;
            text-decoration: none;
        }

        @media (max-width:1023px) {
            .feedback-btn {
                display: none !important;
            }
        }

        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        textarea:focus {
            border: 1px solid #f1f1f1;
            border-color: #4fb45e !important;
            outline: none;
        }

        input,
        textarea,
        button,
        select {
            border: 1px solid #333333;
        }

        footer.for-customers .top-footer .footer-links ul li a {
            color: #fff !important;
        }

        header.for-customers .main-candidates {
            background: #00b2a3 !important;
        }

        /*chosen.css*/

        .chosen-container {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            font-size: 14.5px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .chosen-container * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .chosen-container .chosen-drop {
            position: absolute;
            top: 100%;
            z-index: 1010;
            width: 100%;
            border: 1px solid #aaa;
            border-top: 0;
            background: #fff;
            -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
            clip: rect(0, 0, 0, 0);
            -webkit-clip-path: inset(100% 100%);
            clip-path: inset(100% 100%);
        }

        .chosen-container.chosen-with-drop .chosen-drop {
            clip: auto;
            -webkit-clip-path: none;
            clip-path: none;
        }

        .chosen-container a {
            cursor: pointer;
        }

        .chosen-container .search-choice .group-name,
        .chosen-container .chosen-single .group-name {
            margin-right: 4px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: normal;
            color: #999999;
        }

        .chosen-container .search-choice .group-name:after,
        .chosen-container .chosen-single .group-name:after {
            content: ":";
            padding-left: 2px;
            vertical-align: top;
        }

        .chosen-container-single .chosen-single {
            position: relative;
            display: block;
            overflow: hidden;
            padding: 0 0 0 8px;
            height: 25px;
            border: 1px solid #aaa;
            border-radius: 5px;
            background-color: #fff;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #fff), color-stop(50%, #f6f6f6), color-stop(52%, #eee), to(#f4f4f4));
            background: linear-gradient(#fff 20%, #f6f6f6 50%, #eee 52%, #f4f4f4 100%);
            background-clip: padding-box;
            -webkit-box-shadow: 0 0 3px #fff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 3px #fff inset, 0 1px 1px rgba(0, 0, 0, 0.1);
            color: #444;
            text-decoration: none;
            white-space: nowrap;
            line-height: 24px;
        }

        .chosen-container-single .chosen-default {
            color: #999;
        }

        .chosen-container-single .chosen-single span {
            display: block;
            overflow: hidden;
            margin-right: 26px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .chosen-container-single .chosen-single-with-deselect span {
            margin-right: 38px;
        }

        .chosen-container-single .chosen-single abbr {
            position: absolute;
            top: 6px;
            right: 26px;
            display: block;
            width: 12px;
            height: 12px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") -42px 1px no-repeat;
            font-size: 1px;
        }

        .chosen-container-single .chosen-single abbr:hover {
            background-position: -42px -10px;
        }

        .chosen-container-single.chosen-disabled .chosen-single abbr:hover {
            background-position: -42px -10px;
        }

        .chosen-container-single .chosen-single div {
            position: absolute;
            top: 0;
            right: 0;
            display: block;
            width: 18px;
            height: 100%;
        }

        .chosen-container-single .chosen-single div b {
            display: block;
            width: 100%;
            height: 100%;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat 0px 2px;
        }

        .chosen-container-single .chosen-search {
            position: relative;
            z-index: 1010;
            margin: 0;
            padding: 3px 4px;
            white-space: nowrap;
        }

        .chosen-container-single .chosen-search input[type="text"],
        .chosen-container-single .chosen-search input[type="search"] {
            margin: 1px 0;
            padding: 4px 20px 4px 5px;
            width: 100%;
            height: auto;
            outline: 0;
            border: 1px solid #aaa;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat 100% -20px;
            font-size: 1em;
            font-family: sans-serif;
            line-height: normal;
            border-radius: 0;
        }

        .chosen-container-single .chosen-drop {
            margin-top: -1px;
            border-radius: 0 0 4px 4px;
            background-clip: padding-box;
        }

        .chosen-container-single.chosen-container-single-nosearch .chosen-search {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            -webkit-clip-path: inset(100% 100%);
            clip-path: inset(100% 100%);
        }

        .chosen-container .chosen-results {
            color: #444;
            position: relative;
            overflow-x: hidden;
            overflow-y: auto;
            margin: 0 4px 4px 0;
            padding: 0 0 0 4px;
            max-height: 240px;
            -webkit-overflow-scrolling: touch;
        }

        .chosen-container .chosen-results li {
            display: none;
            margin: 0;
            padding: 5px 6px;
            list-style: none;
            line-height: 15px;
            word-wrap: break-word;
            -webkit-touch-callout: none;
        }

        .chosen-container .chosen-results li.active-result {
            display: list-item;
            cursor: pointer;
        }

        .chosen-container .chosen-results li.disabled-result {
            display: list-item;
            color: #ccc;
            cursor: default;
        }

        .chosen-container .chosen-results li.highlighted {
            background-color: #3875d7;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #3875d7), color-stop(90%, #2a62bc));
            background-image: linear-gradient(#3875d7 20%, #2a62bc 90%);
            color: #fff;
        }

        @media(max-width:576px) {
            .chosen-container .chosen-results li.active-result:hover {
                background: #3875d7 !important;
                color: #fff !important;
            }
        }

        .chosen-container .chosen-results li.no-results {
            color: #777;
            display: list-item;
            background: #f4f4f4;
        }

        .chosen-container .chosen-results li.group-result {
            display: list-item;
            font-weight: bold;
            cursor: default;
        }

        .chosen-container .chosen-results li.group-option {
            padding-left: 15px;
        }

        .chosen-container .chosen-results li em {
            font-style: normal;
            text-decoration: underline;
        }

        .chosen-container-multi .chosen-choices {
            position: relative;
            overflow: hidden;
            margin: 0;
            padding: 0 5px;
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            background-color: #fff;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #eee), color-stop(15%, #fff));
            background-image: linear-gradient(#eee 1%, #fff 15%);
            cursor: text;
        }

        .chosen-container-multi .chosen-choices li {
            float: left;
            list-style: none;
        }

        .chosen-container-multi .chosen-choices li.search-field {
            margin: 0;
            padding: 0;
            white-space: nowrap;
        }

        .chosen-container-multi .chosen-choices li.search-field input[type="text"],
        .chosen-container-multi .chosen-choices li.search-field input[type="search"] {
            margin: 1px 0;
            padding: 0;
            height: 25px;
            outline: 0;
            border: 0 !important;
            background: transparent !important;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #999;
            font-size: 100%;
            font-family: sans-serif;
            line-height: normal;
            border-radius: 0;
            width: 25px;
        }

        .chosen-container-multi .chosen-choices li.search-choice {
            position: relative;
            margin: 3px 5px 3px 0;
            padding: 3px 20px 3px 5px;
            border: 1px solid #aaa;
            max-width: 100%;
            border-radius: 3px;
            background-color: #eeeeee;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
            background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
            background-size: 100% 19px;
            background-repeat: repeat-x;
            background-clip: padding-box;
            -webkit-box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
            color: #333;
            line-height: 13px;
            cursor: default;
        }

        .chosen-container-multi .chosen-choices li.search-choice span {
            word-wrap: break-word;
        }

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
            position: absolute;
            top: 4px;
            right: 3px;
            display: block;
            width: 12px;
            height: 12px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") -42px 1px no-repeat;
            font-size: 1px;
        }

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover {
            background-position: -42px -10px;
        }

        .chosen-container-multi .chosen-choices li.search-choice-disabled {
            padding-right: 5px;
            border: 1px solid #ccc;
            background-color: #e4e4e4;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
            background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
            color: #666;
        }

        .chosen-container-multi .chosen-choices li.search-choice-focus {
            background: #d4d4d4;
        }

        .chosen-container-multi .chosen-choices li.search-choice-focus .search-choice-close {
            background-position: -42px -10px;
        }

        .chosen-container-multi .chosen-results {
            margin: 0;
            padding: 0;
        }

        .chosen-container-multi .chosen-drop .result-selected {
            display: list-item;
            color: #ccc;
            cursor: default;
        }

        .chosen-container-active .chosen-single {
            border: 1px solid #5897fb;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .chosen-container-active.chosen-with-drop .chosen-single {
            border: 1px solid #aaa;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #eee), color-stop(80%, #fff));
            background-image: linear-gradient(#eee 20%, #fff 80%);
            -webkit-box-shadow: 0 1px 0 #fff inset;
            box-shadow: 0 1px 0 #fff inset;
        }

        .chosen-container-active.chosen-with-drop .chosen-single div {
            border-left: none;
            background: transparent;
        }

        .chosen-container-active.chosen-with-drop .chosen-single div b {
            background-position: -18px 2px;
        }

        .chosen-container-active .chosen-choices {
            border: 1px solid #5897fb;
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .chosen-container-active .chosen-choices li.search-field input[type="text"],
        .chosen-container-active .chosen-choices li.search-field input[type="search"] {
            color: #222 !important;
        }

        .chosen-disabled {
            opacity: 0.5 !important;
            cursor: default;
        }

        .chosen-disabled .chosen-single {
            cursor: default;
        }

        .chosen-disabled .chosen-choices .search-choice .search-choice-close {
            cursor: default;
        }

        .chosen-rtl {
            text-align: right;
        }

        .chosen-rtl .chosen-single {
            overflow: visible;
            padding: 0 8px 0 0;
        }

        .chosen-rtl .chosen-single span {
            margin-right: 0;
            margin-left: 26px;
            direction: rtl;
        }

        .chosen-rtl .chosen-single-with-deselect span {
            margin-left: 38px;
        }

        .chosen-rtl .chosen-single div {
            right: auto;
            left: 3px;
        }

        .chosen-rtl .chosen-single abbr {
            right: auto;
            left: 26px;
        }

        .chosen-rtl .chosen-choices li {
            float: right;
        }

        .chosen-rtl .chosen-choices li.search-field input[type="text"],
        .chosen-rtl .chosen-choices li.search-field input[type="search"] {
            direction: rtl;
        }

        .chosen-rtl .chosen-choices li.search-choice {
            margin: 3px 5px 3px 0;
            padding: 3px 5px 3px 19px;
        }

        .chosen-rtl .chosen-choices li.search-choice .search-choice-close {
            right: auto;
            left: 4px;
        }

        .chosen-rtl.chosen-container-single .chosen-results {
            margin: 0 0 4px 4px;
            padding: 0 4px 0 0;
        }

        .chosen-rtl .chosen-results li.group-option {
            padding-right: 15px;
            padding-left: 0;
        }

        .chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div {
            border-right: none;
        }

        .chosen-rtl .chosen-search input[type="text"],
        .chosen-rtl .chosen-search input[type="search"] {
            padding: 4px 5px 4px 20px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite.png") no-repeat -30px -20px;
            direction: rtl;
        }

        .chosen-rtl.chosen-container-single .chosen-single div b {
            background-position: 6px 2px;
        }

        .chosen-rtl.chosen-container-single.chosen-with-drop .chosen-single div b {
            background-position: -12px 2px;
        }

        input[type="search"]::-webkit-search-decoration,
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-results-button,
        input[type="search"]::-webkit-search-results-decoration {
            -webkit-appearance: none;
        }

        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min-resolution:144dpi),
        only screen and (min-resolution:1.5dppx) {
            .chosen-rtl .chosen-search input[type="text"],
            .chosen-rtl .chosen-search input[type="search"],
            .chosen-container-single .chosen-single abbr,
            .chosen-container-single .chosen-single div b,
            .chosen-container-single .chosen-search input[type="text"],
            .chosen-container-single .chosen-search input[type="search"],
            .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
            .chosen-container .chosen-results-scroll-down span,
            .chosen-container .chosen-results-scroll-up span {
                background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/gallery/chosen/chosen-sprite@2x.png") !important;
                background-size: 52px 37px !important;
                background-repeat: no-repeat !important;
            }
        }

        /*swiper.css*/

        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }

        .swiper-container-no-flexbox .swiper-slide {
            float: left;
        }

        .swiper-container-vertical>.swiper-wrapper {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        .swiper-container-android .swiper-slide,
        .swiper-wrapper {
            -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0);
        }

        .swiper-container-multirow>.swiper-wrapper {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .swiper-container-free-mode>.swiper-wrapper {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            margin: 0 auto;
        }

        .swiper-slide {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
        }

        .swiper-slide-invisible-blank {
            visibility: hidden;
        }

        .swiper-container-autoheight,
        .swiper-container-autoheight .swiper-slide {
            height: auto;
        }

        .swiper-container-autoheight .swiper-wrapper {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-transition-property: height, -webkit-transform;
            transition-property: height, -webkit-transform;
            -o-transition-property: transform, height;
            transition-property: transform, height;
            transition-property: transform, height, -webkit-transform;
        }

        .swiper-container-3d {
            -webkit-perspective: 1200px;
            perspective: 1200px;
        }

        .swiper-container-3d .swiper-wrapper,
        .swiper-container-3d .swiper-slide,
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-slide-shadow-bottom,
        .swiper-container-3d .swiper-cube-shadow {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-slide-shadow-bottom {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .swiper-container-3d .swiper-slide-shadow-left {
            background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-right {
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-top {
            background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-bottom {
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-wp8-horizontal,
        .swiper-container-wp8-horizontal>.swiper-wrapper {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .swiper-container-wp8-vertical,
        .swiper-container-wp8-vertical>.swiper-wrapper {
            -ms-touch-action: pan-x;
            touch-action: pan-x;
        }

        .swiper-button-prev,
        .swiper-button-next {
            position: absolute;
            top: 50%;
            width: 27px;
            height: 44px;
            margin-top: -22px;
            z-index: 10;
            cursor: pointer;
            background-size: 27px 44px;
            background-position: center;
            background-repeat: no-repeat;
        }

        .swiper-button-prev.swiper-button-disabled,
        .swiper-button-next.swiper-button-disabled {
            opacity: 0.35;
            cursor: auto;
            pointer-events: none;
        }

        .swiper-button-prev,
        .swiper-container-rtl .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            left: 10px;
            right: auto;
        }

        .swiper-button-next,
        .swiper-container-rtl .swiper-button-prev {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            right: 10px;
            left: auto;
        }

        .swiper-button-prev.swiper-button-white,
        .swiper-container-rtl .swiper-button-next.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-white,
        .swiper-container-rtl .swiper-button-prev.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-prev.swiper-button-black,
        .swiper-container-rtl .swiper-button-next.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-next.swiper-button-black,
        .swiper-container-rtl .swiper-button-prev.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
        }

        .swiper-button-lock {
            display: none;
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transition: 300ms opacity;
            -o-transition: 300ms opacity;
            transition: 300ms opacity;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0;
        }

        .swiper-pagination-fraction,
        .swiper-pagination-custom,
        .swiper-container-horizontal>.swiper-pagination-bullets {
            bottom: 10px;
            left: 0;
            width: 100%;
        }

        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
            position: relative;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
            -webkit-transform: scale(0.66);
            -ms-transform: scale(0.66);
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
            -webkit-transform: scale(0.66);
            -ms-transform: scale(0.66);
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
            -webkit-transform: scale(0.33);
            -ms-transform: scale(0.33);
            transform: scale(0.33);
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: 0.2;
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #007aff;
        }

        .swiper-container-vertical>.swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            -webkit-transform: translate3d(0px, -50%, 0);
            transform: translate3d(0px, -50%, 0);
        }

        .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 6px 0;
            display: block;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 8px;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            -webkit-transition: 200ms top, 200ms -webkit-transform;
            transition: 200ms top, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top;
            transition: 200ms transform, 200ms top, 200ms -webkit-transform;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 4px;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms left, 200ms -webkit-transform;
            transition: 200ms left, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left;
            transition: 200ms transform, 200ms left, 200ms -webkit-transform;
        }

        .swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            -webkit-transition: 200ms right, 200ms -webkit-transform;
            transition: 200ms right, 200ms -webkit-transform;
            -o-transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right;
            transition: 200ms transform, 200ms right, 200ms -webkit-transform;
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.25);
            position: absolute;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #007aff;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
        }

        .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            -webkit-transform-origin: right top;
            -ms-transform-origin: right top;
            transform-origin: right top;
        }

        .swiper-container-horizontal>.swiper-pagination-progressbar,
        .swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0;
        }

        .swiper-container-vertical>.swiper-pagination-progressbar,
        .swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swiper-pagination-white .swiper-pagination-bullet-active {
            background: #ffffff;
        }

        .swiper-pagination-progressbar.swiper-pagination-white {
            background: rgba(255, 255, 255, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
            background: #ffffff;
        }

        .swiper-pagination-black .swiper-pagination-bullet-active {
            background: #000000;
        }

        .swiper-pagination-progressbar.swiper-pagination-black {
            background: rgba(0, 0, 0, 0.25);
        }

        .swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
            background: #000000;
        }

        .swiper-pagination-lock {
            display: none;
        }

        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, 0.1);
        }

        .swiper-container-horizontal>.swiper-scrollbar {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%;
        }

        .swiper-container-vertical>.swiper-scrollbar {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%;
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            left: 0;
            top: 0;
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move;
        }

        .swiper-scrollbar-lock {
            display: none;
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
        }

        .swiper-zoom-container>img,
        .swiper-zoom-container>svg,
        .swiper-zoom-container>canvas {
            max-width: 100%;
            max-height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
        }

        .swiper-slide-zoomed {
            cursor: move;
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            -webkit-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
            animation: swiper-preloader-spin 1s steps(12, end) infinite;
        }

        .swiper-lazy-preloader:after {
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
            background-position: 50%;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .swiper-lazy-preloader-white:after {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        }

        @-webkit-keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000;
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            -webkit-transition-timing-function: ease-out;
            -o-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            -webkit-transition-property: opacity;
            -o-transition-property: opacity;
            transition-property: opacity;
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-fade .swiper-slide-active,
        .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube {
            overflow: visible;
        }

        .swiper-container-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            -webkit-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
            width: 100%;
            height: 100%;
        }

        .swiper-container-cube .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            -webkit-transform-origin: 100% 0;
            -ms-transform-origin: 100% 0;
            transform-origin: 100% 0;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-next,
        .swiper-container-cube .swiper-slide-prev,
        .swiper-container-cube .swiper-slide-next+.swiper-slide {
            pointer-events: auto;
            visibility: visible;
        }

        .swiper-container-cube .swiper-slide-shadow-top,
        .swiper-container-cube .swiper-slide-shadow-bottom,
        .swiper-container-cube .swiper-slide-shadow-left,
        .swiper-container-cube .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0px;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.6;
            -webkit-filter: blur(50px);
            filter: blur(50px);
            z-index: 0;
        }

        .swiper-container-flip {
            overflow: visible;
        }

        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
        }

        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-flip .swiper-slide-active,
        .swiper-container-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-flip .swiper-slide-shadow-top,
        .swiper-container-flip .swiper-slide-shadow-bottom,
        .swiper-container-flip .swiper-slide-shadow-left,
        .swiper-container-flip .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-coverflow .swiper-wrapper {
            -ms-perspective: 1200px;
        }

        /*jquery.fancybox.css*/

        body.compensate-for-scrollbar {
            overflow: hidden;
        }

        .fancybox-active {
            height: auto;
        }

        .fancybox-is-hidden {
            left: -9999px;
            margin: 0;
            position: absolute !important;
            top: -9999px;
            visibility: hidden;
        }

        .fancybox-container {
            -webkit-backface-visibility: hidden;
            height: 100%;
            left: 0;
            outline: none;
            position: fixed;
            -webkit-tap-highlight-color: transparent;
            top: 0;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            transform: translateZ(0);
            width: 100%;
            z-index: 99992;
        }

        .fancybox-container * {
            box-sizing: border-box;
        }

        .fancybox-outer,
        .fancybox-inner,
        .fancybox-bg,
        .fancybox-stage {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fancybox-outer {
            -webkit-overflow-scrolling: touch;
            overflow-y: auto;
        }

        .fancybox-bg {
            background: rgb(30, 30, 30);
            opacity: 0;
            transition-duration: inherit;
            transition-property: opacity;
            transition-timing-function: cubic-bezier(.47, 0, .74, .71);
        }

        .fancybox-is-open .fancybox-bg {
            opacity: .9;
            transition-timing-function: cubic-bezier(.22, .61, .36, 1);
        }

        .fancybox-infobar,
        .fancybox-toolbar,
        .fancybox-caption,
        .fancybox-navigation .fancybox-button {
            direction: ltr;
            opacity: 0;
            position: absolute;
            transition: opacity .25s ease, visibility 0s ease .25s;
            visibility: hidden;
            z-index: 99997;
        }

        .fancybox-show-infobar .fancybox-infobar,
        .fancybox-show-toolbar .fancybox-toolbar,
        .fancybox-show-caption .fancybox-caption,
        .fancybox-show-nav .fancybox-navigation .fancybox-button {
            opacity: 1;
            transition: opacity .25s ease 0s, visibility 0s ease 0s;
            visibility: visible;
        }

        .fancybox-infobar {
            color: #ccc;
            font-size: 13px;
            -webkit-font-smoothing: subpixel-antialiased;
            height: 44px;
            left: 0;
            line-height: 44px;
            min-width: 44px;
            mix-blend-mode: difference;
            padding: 0 10px;
            pointer-events: none;
            top: 0;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .fancybox-toolbar {
            right: 0;
            top: 0;
        }

        .fancybox-stage {
            direction: ltr;
            overflow: visible;
            transform: translateZ(0);
            z-index: 99994;
        }

        .fancybox-is-open .fancybox-stage {
            overflow: hidden;
        }

        .fancybox-slide {
            -webkit-backface-visibility: hidden;
            display: none;
            height: 100%;
            left: 0;
            outline: none;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            padding: 44px;
            position: absolute;
            text-align: center;
            top: 0;
            transition-property: transform, opacity;
            white-space: normal;
            width: 100%;
            z-index: 99994;
        }

        .fancybox-slide::before {
            content: '';
            display: inline-block;
            font-size: 0;
            height: 100%;
            vertical-align: middle;
            width: 0;
        }

        .fancybox-is-sliding .fancybox-slide,
        .fancybox-slide--previous,
        .fancybox-slide--current,
        .fancybox-slide--next {
            display: block;
        }

        .fancybox-slide--image {
            overflow: hidden;
            padding: 44px 0;
        }

        .fancybox-slide--image::before {
            display: none;
        }

        .fancybox-slide--html {
            padding: 6px;
        }

        .fancybox-content {
            background: #fff;
            display: inline-block;
            margin: 0;
            max-width: 100%;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            padding: 44px;
            position: relative;
            text-align: left;
            vertical-align: middle;
        }

        .fancybox-slide--image .fancybox-content {
            animation-timing-function: cubic-bezier(.5, 0, .14, 1);
            -webkit-backface-visibility: hidden;
            background: transparent;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            left: 0;
            max-width: none;
            overflow: visible;
            padding: 0;
            position: absolute;
            top: 0;
            -ms-transform-origin: top left;
            transform-origin: top left;
            transition-property: transform, opacity;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            z-index: 99995;
        }

        .fancybox-can-zoomOut .fancybox-content {
            cursor: zoom-out;
        }

        .fancybox-can-zoomIn .fancybox-content {
            cursor: zoom-in;
        }

        .fancybox-can-swipe .fancybox-content,
        .fancybox-can-pan .fancybox-content {
            cursor: -webkit-grab;
            cursor: grab;
        }

        .fancybox-is-grabbing .fancybox-content {
            cursor: -webkit-grabbing;
            cursor: grabbing;
        }

        .fancybox-container [data-selectable='true'] {
            cursor: text;
        }

        .fancybox-image,
        .fancybox-spaceball {
            background: transparent;
            border: 0;
            height: 100%;
            left: 0;
            margin: 0;
            max-height: none;
            max-width: none;
            padding: 0;
            position: absolute;
            top: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 100%;
        }

        .fancybox-spaceball {
            z-index: 1;
        }

        .fancybox-slide--video .fancybox-content,
        .fancybox-slide--map .fancybox-content,
        .fancybox-slide--pdf .fancybox-content,
        .fancybox-slide--iframe .fancybox-content {
            height: 100%;
            overflow: visible;
            padding: 0;
            width: 100%;
        }

        .fancybox-slide--video .fancybox-content {
            background: #000;
        }

        .fancybox-slide--map .fancybox-content {
            background: #e5e3df;
        }

        .fancybox-slide--iframe .fancybox-content {
            background: #fff;
        }

        .fancybox-video,
        .fancybox-iframe {
            background: transparent;
            border: 0;
            display: block;
            height: 100%;
            margin: 0;
            overflow: hidden;
            padding: 0;
            width: 100%;
        }

        .fancybox-iframe {
            left: 0;
            position: absolute;
            top: 0;
        }

        .fancybox-error {
            background: #fff;
            cursor: default;
            max-width: 400px;
            padding: 40px;
            width: 100%;
        }

        .fancybox-error p {
            color: #444;
            font-size: 16px;
            line-height: 20px;
            margin: 0;
            padding: 0;
        }

        .fancybox-button {
            background: rgba(30, 30, 30, .6);
            border: 0;
            border-radius: 0;
            box-shadow: none;
            cursor: pointer;
            display: inline-block;
            height: 44px;
            margin: 0;
            padding: 10px;
            position: relative;
            transition: color .2s;
            vertical-align: top;
            visibility: inherit;
            width: 44px;
        }

        .fancybox-button,
        .fancybox-button:visited,
        .fancybox-button:link {
            color: #ccc;
        }

        .fancybox-button:hover {
            color: #fff;
        }

        .fancybox-button:focus {
            outline: none;
        }

        .fancybox-button.fancybox-focus {
            outline: 1px dotted;
        }

        .fancybox-button[disabled],
        .fancybox-button[disabled]:hover {
            color: #888;
            cursor: default;
            outline: none;
        }

        .fancybox-button div {
            height: 100%;
        }

        .fancybox-button svg {
            display: block;
            height: 100%;
            overflow: visible;
            position: relative;
            width: 100%;
        }

        .fancybox-button svg path {
            fill: currentColor;
            stroke-width: 0;
        }

        .fancybox-button--play svg:nth-child(2),
        .fancybox-button--fsenter svg:nth-child(2) {
            display: none;
        }

        .fancybox-button--pause svg:nth-child(1),
        .fancybox-button--fsexit svg:nth-child(1) {
            display: none;
        }

        .fancybox-progress {
            background: #ff5268;
            height: 2px;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -ms-transform-origin: 0;
            transform-origin: 0;
            transition-property: transform;
            transition-timing-function: linear;
            z-index: 99998;
        }

        .fancybox-close-small {
            background: transparent;
            border: 0;
            border-radius: 0;
            color: #ccc;
            cursor: pointer;
            opacity: .8;
            padding: 8px;
            position: absolute;
            right: -12px;
            top: -44px;
            z-index: 401;
        }

        .fancybox-close-small:hover {
            color: #fff;
            opacity: 1;
        }

        .fancybox-slide--html .fancybox-close-small {
            color: currentColor;
            padding: 10px;
            right: 0;
            top: 0;
        }

        .fancybox-slide--image.fancybox-is-scaling .fancybox-content {
            overflow: hidden;
        }

        .fancybox-is-scaling .fancybox-close-small,
        .fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
            display: none;
        }

        .fancybox-navigation .fancybox-button {
            background-clip: content-box;
            height: 100px;
            opacity: 0;
            position: absolute;
            top: calc(50% - 50px);
            width: 70px;
        }

        .fancybox-navigation .fancybox-button div {
            padding: 7px;
        }

        .fancybox-navigation .fancybox-button--arrow_left {
            left: 0;
            left: env(safe-area-inset-left);
            padding: 31px 26px 31px 6px;
        }

        .fancybox-navigation .fancybox-button--arrow_right {
            padding: 31px 6px 31px 26px;
            right: 0;
            right: env(safe-area-inset-right);
        }

        .fancybox-caption {
            background: linear-gradient(to top, rgba(0, 0, 0, .85) 0%, rgba(0, 0, 0, .3) 50%, rgba(0, 0, 0, .15) 65%, rgba(0, 0, 0, .075) 75.5%, rgba(0, 0, 0, .037) 82.85%, rgba(0, 0, 0, .019) 88%, rgba(0, 0, 0, 0) 100%);
            bottom: 0;
            color: #eee;
            font-size: 14px;
            font-weight: 400;
            left: 0;
            line-height: 1.5;
            padding: 75px 44px 25px 44px;
            pointer-events: none;
            right: 0;
            text-align: center;
            z-index: 99996;
        }

        @supports (padding:max(0px)) {
            .fancybox-caption {
                padding: 75px max(44px, env(safe-area-inset-right)) max(25px, env(safe-area-inset-bottom)) max(44px, env(safe-area-inset-left));
            }
        }

        .fancybox-caption--separate {
            margin-top: -50px;
        }

        .fancybox-caption__body {
            max-height: 50vh;
            overflow: auto;
            pointer-events: all;
        }

        .fancybox-caption a,
        .fancybox-caption a:link,
        .fancybox-caption a:visited {
            color: #ccc;
            text-decoration: none;
        }

        .fancybox-caption a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .fancybox-loading {
            animation: fancybox-rotate 1s linear infinite;
            background: transparent;
            border: 4px solid #888;
            border-bottom-color: #fff;
            border-radius: 50%;
            height: 50px;
            left: 50%;
            margin: -25px 0 0 -25px;
            opacity: .7;
            padding: 0;
            position: absolute;
            top: 50%;
            width: 50px;
            z-index: 99999;
        }

        @keyframes fancybox-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .fancybox-animated {
            transition-timing-function: cubic-bezier(0, 0, .25, 1);
        }

        .fancybox-fx-slide.fancybox-slide--previous {
            opacity: 0;
            transform: translate3d(-100%, 0, 0);
        }

        .fancybox-fx-slide.fancybox-slide--next {
            opacity: 0;
            transform: translate3d(100%, 0, 0);
        }

        .fancybox-fx-slide.fancybox-slide--current {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        .fancybox-fx-fade.fancybox-slide--previous,
        .fancybox-fx-fade.fancybox-slide--next {
            opacity: 0;
            transition-timing-function: cubic-bezier(.19, 1, .22, 1);
        }

        .fancybox-fx-fade.fancybox-slide--current {
            opacity: 1;
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--previous {
            opacity: 0;
            transform: scale3d(1.5, 1.5, 1.5);
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--next {
            opacity: 0;
            transform: scale3d(.5, .5, .5);
        }

        .fancybox-fx-zoom-in-out.fancybox-slide--current {
            opacity: 1;
            transform: scale3d(1, 1, 1);
        }

        .fancybox-fx-rotate.fancybox-slide--previous {
            opacity: 0;
            -ms-transform: rotate(-360deg);
            transform: rotate(-360deg);
        }

        .fancybox-fx-rotate.fancybox-slide--next {
            opacity: 0;
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .fancybox-fx-rotate.fancybox-slide--current {
            opacity: 1;
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        .fancybox-fx-circular.fancybox-slide--previous {
            opacity: 0;
            transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);
        }

        .fancybox-fx-circular.fancybox-slide--next {
            opacity: 0;
            transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);
        }

        .fancybox-fx-circular.fancybox-slide--current {
            opacity: 1;
            transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
        }

        .fancybox-fx-tube.fancybox-slide--previous {
            transform: translate3d(-100%, 0, 0) scale(.1) skew(-10deg);
        }

        .fancybox-fx-tube.fancybox-slide--next {
            transform: translate3d(100%, 0, 0) scale(.1) skew(10deg);
        }

        .fancybox-fx-tube.fancybox-slide--current {
            transform: translate3d(0, 0, 0) scale(1);
        }

        @media all and (max-height:576px) {
            .fancybox-slide {
                padding-left: 6px;
                padding-right: 6px;
            }
            .fancybox-slide--image {
                padding: 6px 0;
            }
            .fancybox-close-small {
                right: -6px;
            }
            .fancybox-slide--image .fancybox-close-small {
                background: #4e4e4e;
                color: #f2f4f6;
                height: 36px;
                opacity: 1;
                padding: 6px;
                right: 0;
                top: 0;
                width: 36px;
            }
            .fancybox-caption {
                padding-left: 12px;
                padding-right: 12px;
            }
            @supports (padding:max(0px)) {
                .fancybox-caption {
                    padding-left: max(12px, env(safe-area-inset-left));
                    padding-right: max(12px, env(safe-area-inset-right));
                }
            }
        }

        .fancybox-share {
            background: #f4f4f4;
            border-radius: 3px;
            max-width: 90%;
            padding: 30px;
            text-align: center;
        }

        .fancybox-share h1 {
            color: #222;
            font-size: 35px;
            font-weight: 700;
            margin: 0 0 20px 0;
        }

        .fancybox-share p {
            margin: 0;
            padding: 0;
        }

        .fancybox-share__button {
            border: 0;
            border-radius: 3px;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            line-height: 40px;
            margin: 0 5px 10px 5px;
            min-width: 130px;
            padding: 0 15px;
            text-decoration: none;
            transition: all .2s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
        }

        .fancybox-share__button:visited,
        .fancybox-share__button:link {
            color: #fff;
        }

        .fancybox-share__button:hover {
            text-decoration: none;
        }

        .fancybox-share__button--fb {
            background: #3b5998;
        }

        .fancybox-share__button--fb:hover {
            background: #344e86;
        }

        .fancybox-share__button--pt {
            background: #bd081d;
        }

        .fancybox-share__button--pt:hover {
            background: #aa0719;
        }

        .fancybox-share__button--tw {
            background: #1da1f2;
        }

        .fancybox-share__button--tw:hover {
            background: #0d95e8;
        }

        .fancybox-share__button svg {
            height: 25px;
            margin-right: 7px;
            position: relative;
            top: -1px;
            vertical-align: middle;
            width: 25px;
        }

        .fancybox-share__button svg path {
            fill: #fff;
        }

        .fancybox-share__input {
            background: transparent;
            border: 0;
            border-bottom: 1px solid #d7d7d7;
            border-radius: 0;
            color: #5d5b5b;
            font-size: 14px;
            margin: 10px 0 0 0;
            outline: none;
            padding: 10px 15px;
            width: 100%;
        }

        .fancybox-thumbs {
            background: #ddd;
            bottom: 0;
            display: none;
            margin: 0;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            padding: 2px 2px 4px 2px;
            position: absolute;
            right: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            top: 0;
            width: 212px;
            z-index: 99995;
        }

        .fancybox-thumbs-x {
            overflow-x: auto;
            overflow-y: hidden;
        }

        .fancybox-show-thumbs .fancybox-thumbs {
            display: block;
        }

        .fancybox-show-thumbs .fancybox-inner {
            right: 212px;
        }

        .fancybox-thumbs__list {
            font-size: 0;
            height: 100%;
            list-style: none;
            margin: 0;
            overflow-x: hidden;
            overflow-y: auto;
            padding: 0;
            position: absolute;
            position: relative;
            white-space: nowrap;
            width: 100%;
        }

        .fancybox-thumbs-x .fancybox-thumbs__list {
            overflow: hidden;
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
            width: 7px;
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
            background: #fff;
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        }

        .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
            background: #2a2a2a;
            border-radius: 10px;
        }

        .fancybox-thumbs__list a {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: rgba(0, 0, 0, .1);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            cursor: pointer;
            float: left;
            height: 75px;
            margin: 2px;
            max-height: calc(100% - 8px);
            max-width: calc(50% - 4px);
            outline: none;
            overflow: hidden;
            padding: 0;
            position: relative;
            -webkit-tap-highlight-color: transparent;
            width: 100px;
        }

        .fancybox-thumbs__list a::before {
            border: 6px solid #ff5268;
            bottom: 0;
            content: '';
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: all .2s cubic-bezier(.25, .46, .45, .94);
            z-index: 99991;
        }

        .fancybox-thumbs__list a:focus::before {
            opacity: .5;
        }

        .fancybox-thumbs__list a.fancybox-thumbs-active::before {
            opacity: 1;
        }

        @media all and (max-width:576px) {
            .fancybox-thumbs {
                width: 110px;
            }
            .fancybox-show-thumbs .fancybox-inner {
                right: 110px;
            }
            .fancybox-thumbs__list a {
                max-width: calc(100% - 10px);
            }
        }

        /*jquery.auto-complete.css*/

        .autocomplete-suggestions {
            text-align: left;
            cursor: default;
            border: 1px solid #ccc;
            border-top: 0;
            background: #fff;
            box-shadow: -1px 1px 3px rgba(0, 0, 0, .1);
            position: absolute;
            display: none;
            z-index: 9999;
            max-height: 254px;
            overflow: hidden;
            overflow-y: auto;
            box-sizing: border-box;
        }

        .autocomplete-suggestion {
            position: relative;
            padding: 0 .6em;
            line-height: 23px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 1.02em;
            color: #333;
        }

        .autocomplete-suggestion b {
            font-weight: normal;
            color: #1f8dd6;
        }

        .autocomplete-suggestion.selected {
            background: #f0f0f0;
        }

        /*DateTimePicker.min.css*/

        .dtpicker-overlay {
            z-index: 2000;
            display: none;
            min-width: 300px;
            background: rgba(0, 0, 0, .2);
            font-size: 12px;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .dtpicker-mobile {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .dtpicker-overlay * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -ms-box-sizing: border-box;
            -webkit-tap-highlight-color: transparent
        }

        .dtpicker-bg {
            width: 100%;
            height: 100%;
            font-family: Arial
        }

        .dtpicker-cont {
            border: 1px solid #ecf0f1
        }

        .dtpicker-mobile .dtpicker-cont {
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            border: none
        }

        .dtpicker-content {
            margin: 0 auto;
            padding: 1em 0;
            max-width: 500px;
            background: #fff
        }

        .dtpicker-mobile .dtpicker-content {
            width: 97%
        }

        .dtpicker-subcontent {
            position: relative
        }

        .dtpicker-header {
            margin: .2em 1em
        }

        .dtpicker-header .dtpicker-title {
            color: #2980b9;
            text-align: center;
            font-size: 1.1em
        }

        .dtpicker-header .dtpicker-close {
            position: absolute;
            top: -.7em;
            right: .3em;
            padding: .5em .5em 1em 1em;
            color: #ff3b30;
            font-size: 1.5em;
            cursor: pointer
        }

        .dtpicker-header .dtpicker-close:hover {
            color: #ff3b30
        }

        .dtpicker-header .dtpicker-value {
            padding: .8em .2em .2em .2em;
            color: #ff3b30;
            text-align: center;
            font-size: 1.4em
        }

        .dtpicker-components {
            overflow: hidden;
            margin: 1em 1em;
            font-size: 1.3em
        }

        .dtpicker-components * {
            margin: 0;
            padding: 0
        }

        .dtpicker-components .dtpicker-compOutline {
            display: inline-block;
            float: left
        }

        .dtpicker-comp2 {
            width: 50%
        }

        .dtpicker-comp3 {
            width: 33.3%
        }

        .dtpicker-comp4 {
            width: 25%
        }

        .dtpicker-comp5 {
            width: 20%
        }

        .dtpicker-comp6 {
            width: 16.66%
        }

        .dtpicker-comp7 {
            width: 14.285%
        }

        .dtpicker-components .dtpicker-comp {
            margin: 2%;
            text-align: center
        }

        .dtpicker-components .dtpicker-comp>* {
            display: block;
            height: 30px;
            color: #2980b9;
            text-align: center;
            line-height: 30px
        }

        .dtpicker-components .dtpicker-comp>:hover {
            color: #2980b9
        }

        .dtpicker-components .dtpicker-compButtonEnable {
            opacity: 1
        }

        .dtpicker-components .dtpicker-compButtonDisable {
            opacity: .5
        }

        .dtpicker-components .dtpicker-compButton {
            background: #fff;
            font-size: 140%;
            cursor: pointer
        }

        .dtpicker-components .dtpicker-compValue {
            margin: .4em 0;
            width: 100%;
            border: none;
            background: #fff;
            font-size: 100%;
            -webkit-appearance: none;
            -moz-appearance: none
        }

        .dtpicker-overlay .dtpicker-compValue:focus {
            outline: 0;
            background: #f2fcff
        }

        .dtpicker-buttonCont {
            overflow: hidden;
            margin: .2em 1em
        }

        .dtpicker-buttonCont .dtpicker-button {
            display: block;
            padding: .6em 0;
            width: 47%;
            background: #ff3b30;
            color: #fff;
            text-align: center;
            font-size: 1.3em;
            cursor: pointer
        }

        .dtpicker-buttonCont .dtpicker-button:hover {
            color: #fff
        }

        .dtpicker-singleButton .dtpicker-button {
            margin: .2em auto
        }

        .dtpicker-twoButtons .dtpicker-buttonSet {
            float: left
        }

        .dtpicker-twoButtons .dtpicker-buttonClear {
            float: right
        }

        /*jquery-confirm.min.css*/

        /*!
 * jquery-confirm v3.3.2 (http://craftpip.github.io/jquery-confirm/)
 * Author: boniface pereira
 * Website: www.craftpip.com
 * Contact: hey@craftpip.com
 *
 * Copyright 2013-2017 jquery-confirm
 * Licensed under MIT (https://github.com/craftpip/jquery-confirm/blob/master/LICENSE)
 */

        @-webkit-keyframes jconfirm-spin {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes jconfirm-spin {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        body[class*=jconfirm-no-scroll-] {
            overflow: hidden !important
        }

        .jconfirm {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99999999;
            font-family: inherit;
            overflow: hidden
        }

        .jconfirm .jconfirm-bg {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            -webkit-transition: opacity .4s;
            transition: opacity .4s
        }

        .jconfirm .jconfirm-bg.jconfirm-bg-h {
            opacity: 0 !important
        }

        .jconfirm .jconfirm-scrollpane {
            -webkit-perspective: 500px;
            perspective: 500px;
            -webkit-perspective-origin: center;
            perspective-origin: center;
            display: table;
            width: 100%;
            height: 100%
        }

        .jconfirm .jconfirm-row {
            display: table-row;
            width: 100%
        }

        .jconfirm .jconfirm-cell {
            display: table-cell;
            vertical-align: middle
        }

        .jconfirm .jconfirm-holder {
            max-height: 100%;
            padding: 50px 0
        }

        .jconfirm .jconfirm-box-container {
            -webkit-transition: -webkit-transform;
            transition: -webkit-transform;
            transition: transform;
            transition: transform, -webkit-transform
        }

        .jconfirm .jconfirm-box-container.jconfirm-no-transition {
            -webkit-transition: none !important;
            transition: none !important
        }

        .jconfirm .jconfirm-box {
            background: white;
            border-radius: 4px;
            position: relative;
            outline: 0;
            padding: 15px 15px 0;
            overflow: hidden;
            margin-left: auto;
            margin-right: auto
        }

        @-webkit-keyframes type-blue {
            1%,
            100% {
                border-color: #3498db
            }
            50% {
                border-color: #5faee3
            }
        }

        @keyframes type-blue {
            1%,
            100% {
                border-color: #3498db
            }
            50% {
                border-color: #5faee3
            }
        }

        @-webkit-keyframes type-green {
            1%,
            100% {
                border-color: #2ecc71
            }
            50% {
                border-color: #54d98c
            }
        }

        @keyframes type-green {
            1%,
            100% {
                border-color: #2ecc71
            }
            50% {
                border-color: #54d98c
            }
        }

        @-webkit-keyframes type-red {
            1%,
            100% {
                border-color: #e74c3c
            }
            50% {
                border-color: #ed7669
            }
        }

        @keyframes type-red {
            1%,
            100% {
                border-color: #e74c3c
            }
            50% {
                border-color: #ed7669
            }
        }

        @-webkit-keyframes type-orange {
            1%,
            100% {
                border-color: #f1c40f
            }
            50% {
                border-color: #f4d03f
            }
        }

        @keyframes type-orange {
            1%,
            100% {
                border-color: #f1c40f
            }
            50% {
                border-color: #f4d03f
            }
        }

        @-webkit-keyframes type-purple {
            1%,
            100% {
                border-color: #9b59b6
            }
            50% {
                border-color: #b07cc6
            }
        }

        @keyframes type-purple {
            1%,
            100% {
                border-color: #9b59b6
            }
            50% {
                border-color: #b07cc6
            }
        }

        @-webkit-keyframes type-dark {
            1%,
            100% {
                border-color: #34495e
            }
            50% {
                border-color: #46627f
            }
        }

        @keyframes type-dark {
            1%,
            100% {
                border-color: #34495e
            }
            50% {
                border-color: #46627f
            }
        }

        .jconfirm .jconfirm-box.jconfirm-type-animated {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite
        }

        .jconfirm .jconfirm-box.jconfirm-type-blue {
            border-top: solid 7px #3498db;
            -webkit-animation-name: type-blue;
            animation-name: type-blue
        }

        .jconfirm .jconfirm-box.jconfirm-type-green {
            border-top: solid 7px #2ecc71;
            -webkit-animation-name: type-green;
            animation-name: type-green
        }

        .jconfirm .jconfirm-box.jconfirm-type-red {
            border-top: solid 7px #e74c3c;
            -webkit-animation-name: type-red;
            animation-name: type-red
        }

        .jconfirm .jconfirm-box.jconfirm-type-orange {
            border-top: solid 7px #f1c40f;
            -webkit-animation-name: type-orange;
            animation-name: type-orange
        }

        .jconfirm .jconfirm-box.jconfirm-type-purple {
            border-top: solid 7px #9b59b6;
            -webkit-animation-name: type-purple;
            animation-name: type-purple
        }

        .jconfirm .jconfirm-box.jconfirm-type-dark {
            border-top: solid 7px #34495e;
            -webkit-animation-name: type-dark;
            animation-name: type-dark
        }

        .jconfirm .jconfirm-box.loading {
            height: 120px
        }

        .jconfirm .jconfirm-box.loading:before {
            content: '';
            position: absolute;
            left: 0;
            background: white;
            right: 0;
            top: 0;
            bottom: 0;
            border-radius: 10px;
            z-index: 1
        }

        .jconfirm .jconfirm-box.loading:after {
            opacity: .6;
            content: '';
            height: 30px;
            width: 30px;
            border: solid 3px transparent;
            position: absolute;
            left: 50%;
            margin-left: -15px;
            border-radius: 50%;
            -webkit-animation: jconfirm-spin 1s infinite linear;
            animation: jconfirm-spin 1s infinite linear;
            border-bottom-color: dodgerblue;
            top: 50%;
            margin-top: -15px;
            z-index: 2
        }

        .jconfirm .jconfirm-box div.jconfirm-closeIcon {
            height: 20px;
            width: 20px;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            opacity: .6;
            text-align: center;
            font-size: 27px !important;
            line-height: 14px !important;
            display: none;
            z-index: 1
        }

        .jconfirm .jconfirm-box div.jconfirm-closeIcon:empty {
            display: none
        }

        .jconfirm .jconfirm-box div.jconfirm-closeIcon .fa {
            font-size: 16px
        }

        .jconfirm .jconfirm-box div.jconfirm-closeIcon .glyphicon {
            font-size: 16px
        }

        .jconfirm .jconfirm-box div.jconfirm-closeIcon .zmdi {
            font-size: 16px
        }

        .jconfirm .jconfirm-box div.jconfirm-closeIcon:hover {
            opacity: 1
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c {
            display: block;
            font-size: 22px;
            line-height: 20px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
            padding-bottom: 15px
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c.jconfirm-hand {
            cursor: move
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
            font-size: inherit;
            display: inline-block;
            vertical-align: middle
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c i {
            vertical-align: middle
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c:empty {
            display: none
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-title {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: inherit;
            font-family: inherit;
            display: inline-block;
            vertical-align: middle
        }

        .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-title:empty {
            display: none
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane {
            margin-bottom: 15px;
            height: auto;
            -webkit-transition: height .4s ease-in;
            transition: height .4s ease-in;
            display: inline-block;
            width: 100%;
            position: relative;
            overflow-x: hidden;
            overflow-y: auto
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane.no-scroll {
            overflow-y: hidden
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane::-webkit-scrollbar {
            width: 3px
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1)
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane::-webkit-scrollbar-thumb {
            background: #666;
            border-radius: 3px
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane .jconfirm-content {
            overflow: auto
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane .jconfirm-content img {
            max-width: 100%;
            height: auto
        }

        .jconfirm .jconfirm-box div.jconfirm-content-pane .jconfirm-content:empty {
            display: none
        }

        .jconfirm .jconfirm-box .jconfirm-buttons {
            padding-bottom: 11px
        }

        .jconfirm .jconfirm-box .jconfirm-buttons>button {
            margin-bottom: 4px;
            margin-left: 2px;
            margin-right: 2px
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border-radius: 4px;
            min-height: 1em;
            -webkit-transition: opacity .1s ease, background-color .1s ease, color .1s ease, background .1s ease, -webkit-box-shadow .1s ease;
            transition: opacity .1s ease, background-color .1s ease, color .1s ease, background .1s ease, -webkit-box-shadow .1s ease;
            transition: opacity .1s ease, background-color .1s ease, color .1s ease, box-shadow .1s ease, background .1s ease;
            transition: opacity .1s ease, background-color .1s ease, color .1s ease, box-shadow .1s ease, background .1s ease, -webkit-box-shadow .1s ease;
            -webkit-tap-highlight-color: transparent;
            border: 0;
            background-image: none
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-blue {
            background-color: #3498db;
            color: #FFF;
            text-shadow: none;
            -webkit-transition: background .2s;
            transition: background .2s
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-blue:hover {
            background-color: #2980b9;
            color: #FFF
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-green {
            background-color: #2ecc71;
            color: #FFF;
            text-shadow: none;
            -webkit-transition: background .2s;
            transition: background .2s
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-green:hover {
            background-color: #27ae60;
            color: #FFF
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-red {
            background-color: #e74c3c;
            color: #FFF;
            text-shadow: none;
            -webkit-transition: background .2s;
            transition: background .2s
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-red:hover {
            background-color: #c0392b;
            color: #FFF
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-orange {
            background-color: #f1c40f;
            color: #FFF;
            text-shadow: none;
            -webkit-transition: background .2s;
            transition: background .2s
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-orange:hover {
            background-color: #f39c12;
            color: #FFF
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-default {
            background-color: #ecf0f1;
            color: #000;
            text-shadow: none;
            -webkit-transition: background .2s;
            transition: background .2s
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-default:hover {
            background-color: #bdc3c7;
            color: #000
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-purple {
            background-color: #9b59b6;
            color: #FFF;
            text-shadow: none;
            -webkit-transition: background .2s;
            transition: background .2s
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-purple:hover {
            background-color: #8e44ad;
            color: #FFF
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-dark {
            background-color: #34495e;
            color: #FFF;
            text-shadow: none;
            -webkit-transition: background .2s;
            transition: background .2s
        }

        .jconfirm .jconfirm-box .jconfirm-buttons button.btn-dark:hover {
            background-color: #2c3e50;
            color: #FFF
        }

        .jconfirm .jconfirm-box.jconfirm-type-red .jconfirm-title-c .jconfirm-icon-c {
            color: #e74c3c !important
        }

        .jconfirm .jconfirm-box.jconfirm-type-blue .jconfirm-title-c .jconfirm-icon-c {
            color: #3498db !important
        }

        .jconfirm .jconfirm-box.jconfirm-type-green .jconfirm-title-c .jconfirm-icon-c {
            color: #2ecc71 !important
        }

        .jconfirm .jconfirm-box.jconfirm-type-purple .jconfirm-title-c .jconfirm-icon-c {
            color: #9b59b6 !important
        }

        .jconfirm .jconfirm-box.jconfirm-type-orange .jconfirm-title-c .jconfirm-icon-c {
            color: #f1c40f !important
        }

        .jconfirm .jconfirm-box.jconfirm-type-dark .jconfirm-title-c .jconfirm-icon-c {
            color: #34495e !important
        }

        .jconfirm .jconfirm-clear {
            clear: both
        }

        .jconfirm.jconfirm-rtl {
            direction: rtl
        }

        .jconfirm.jconfirm-rtl div.jconfirm-closeIcon {
            left: 5px;
            right: auto
        }

        .jconfirm.jconfirm-white .jconfirm-bg,
        .jconfirm.jconfirm-light .jconfirm-bg {
            background-color: #444;
            opacity: .2
        }

        .jconfirm.jconfirm-white .jconfirm-box,
        .jconfirm.jconfirm-light .jconfirm-box {
            -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            border-radius: 5px
        }

        .jconfirm.jconfirm-white .jconfirm-box .jconfirm-title-c .jconfirm-icon-c,
        .jconfirm.jconfirm-light .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
            margin-right: 8px;
            margin-left: 0
        }

        .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons,
        .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons {
            float: right
        }

        .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button,
        .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button {
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
            text-shadow: none
        }

        .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button.btn-default,
        .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button.btn-default {
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #333
        }

        .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button.btn-default:hover,
        .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button.btn-default:hover {
            background: #ddd
        }

        .jconfirm.jconfirm-white.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c,
        .jconfirm.jconfirm-light.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
            margin-left: 8px;
            margin-right: 0
        }

        .jconfirm.jconfirm-black .jconfirm-bg,
        .jconfirm.jconfirm-dark .jconfirm-bg {
            background-color: darkslategray;
            opacity: .4
        }

        .jconfirm.jconfirm-black .jconfirm-box,
        .jconfirm.jconfirm-dark .jconfirm-box {
            -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            background: #444;
            border-radius: 5px;
            color: white
        }

        .jconfirm.jconfirm-black .jconfirm-box .jconfirm-title-c .jconfirm-icon-c,
        .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
            margin-right: 8px;
            margin-left: 0
        }

        .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons,
        .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons {
            float: right
        }

        .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons button,
        .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons button {
            border: 0;
            background-image: none;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
            text-shadow: none;
            -webkit-transition: background .1s;
            transition: background .1s;
            color: white
        }

        .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons button.btn-default,
        .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons button.btn-default {
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            background: 0
        }

        .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons button.btn-default:hover,
        .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons button.btn-default:hover {
            background: #666
        }

        .jconfirm.jconfirm-black.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c,
        .jconfirm.jconfirm-dark.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
            margin-left: 8px;
            margin-right: 0
        }

        .jconfirm .jconfirm-box.hilight.jconfirm-hilight-shake {
            -webkit-animation: shake .82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            animation: shake .82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .jconfirm .jconfirm-box.hilight.jconfirm-hilight-glow {
            -webkit-animation: glow .82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            animation: glow .82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        @-webkit-keyframes shake {
            10%,
            90% {
                -webkit-transform: translate3d(-2px, 0, 0);
                transform: translate3d(-2px, 0, 0)
            }
            20%,
            80% {
                -webkit-transform: translate3d(4px, 0, 0);
                transform: translate3d(4px, 0, 0)
            }
            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-8px, 0, 0);
                transform: translate3d(-8px, 0, 0)
            }
            40%,
            60% {
                -webkit-transform: translate3d(8px, 0, 0);
                transform: translate3d(8px, 0, 0)
            }
        }

        @keyframes shake {
            10%,
            90% {
                -webkit-transform: translate3d(-2px, 0, 0);
                transform: translate3d(-2px, 0, 0)
            }
            20%,
            80% {
                -webkit-transform: translate3d(4px, 0, 0);
                transform: translate3d(4px, 0, 0)
            }
            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-8px, 0, 0);
                transform: translate3d(-8px, 0, 0)
            }
            40%,
            60% {
                -webkit-transform: translate3d(8px, 0, 0);
                transform: translate3d(8px, 0, 0)
            }
        }

        @-webkit-keyframes glow {
            0%,
            100% {
                -webkit-box-shadow: 0 0 0 red;
                box-shadow: 0 0 0 red
            }
            50% {
                -webkit-box-shadow: 0 0 30px red;
                box-shadow: 0 0 30px red
            }
        }

        @keyframes glow {
            0%,
            100% {
                -webkit-box-shadow: 0 0 0 red;
                box-shadow: 0 0 0 red
            }
            50% {
                -webkit-box-shadow: 0 0 30px red;
                box-shadow: 0 0 30px red
            }
        }

        .jconfirm {
            -webkit-perspective: 400px;
            perspective: 400px
        }

        .jconfirm .jconfirm-box {
            opacity: 1;
            -webkit-transition-property: all;
            transition-property: all
        }

        .jconfirm .jconfirm-box.jconfirm-animation-top,
        .jconfirm .jconfirm-box.jconfirm-animation-left,
        .jconfirm .jconfirm-box.jconfirm-animation-right,
        .jconfirm .jconfirm-box.jconfirm-animation-bottom,
        .jconfirm .jconfirm-box.jconfirm-animation-opacity,
        .jconfirm .jconfirm-box.jconfirm-animation-zoom,
        .jconfirm .jconfirm-box.jconfirm-animation-scale,
        .jconfirm .jconfirm-box.jconfirm-animation-none,
        .jconfirm .jconfirm-box.jconfirm-animation-rotate,
        .jconfirm .jconfirm-box.jconfirm-animation-rotatex,
        .jconfirm .jconfirm-box.jconfirm-animation-rotatey,
        .jconfirm .jconfirm-box.jconfirm-animation-scaley,
        .jconfirm .jconfirm-box.jconfirm-animation-scalex {
            opacity: 0
        }

        .jconfirm .jconfirm-box.jconfirm-animation-rotate {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .jconfirm .jconfirm-box.jconfirm-animation-rotatex {
            -webkit-transform: rotateX(90deg);
            transform: rotateX(90deg);
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .jconfirm .jconfirm-box.jconfirm-animation-rotatexr {
            -webkit-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .jconfirm .jconfirm-box.jconfirm-animation-rotatey {
            -webkit-transform: rotatey(90deg);
            transform: rotatey(90deg);
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .jconfirm .jconfirm-box.jconfirm-animation-rotateyr {
            -webkit-transform: rotatey(-90deg);
            transform: rotatey(-90deg);
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .jconfirm .jconfirm-box.jconfirm-animation-scaley {
            -webkit-transform: scaley(1.5);
            transform: scaley(1.5);
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .jconfirm .jconfirm-box.jconfirm-animation-scalex {
            -webkit-transform: scalex(1.5);
            transform: scalex(1.5);
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .jconfirm .jconfirm-box.jconfirm-animation-top {
            -webkit-transform: translate(0px, -100px);
            transform: translate(0px, -100px)
        }

        .jconfirm .jconfirm-box.jconfirm-animation-left {
            -webkit-transform: translate(-100px, 0px);
            transform: translate(-100px, 0px)
        }

        .jconfirm .jconfirm-box.jconfirm-animation-right {
            -webkit-transform: translate(100px, 0px);
            transform: translate(100px, 0px)
        }

        .jconfirm .jconfirm-box.jconfirm-animation-bottom {
            -webkit-transform: translate(0px, 100px);
            transform: translate(0px, 100px)
        }

        .jconfirm .jconfirm-box.jconfirm-animation-zoom {
            -webkit-transform: scale(1.2);
            transform: scale(1.2)
        }

        .jconfirm .jconfirm-box.jconfirm-animation-scale {
            -webkit-transform: scale(0.5);
            transform: scale(0.5)
        }

        .jconfirm .jconfirm-box.jconfirm-animation-none {
            visibility: hidden
        }

        .jconfirm.jconfirm-supervan .jconfirm-bg {
            background-color: rgba(54, 70, 93, 0.95)
        }

        .jconfirm.jconfirm-supervan .jconfirm-box {
            background-color: transparent
        }

        .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-blue {
            border: 0
        }

        .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-green {
            border: 0
        }

        .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-red {
            border: 0
        }

        .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-orange {
            border: 0
        }

        .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-purple {
            border: 0
        }

        .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-dark {
            border: 0
        }

        .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-closeIcon {
            color: white
        }

        .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-title-c {
            text-align: center;
            color: white;
            font-size: 28px;
            font-weight: normal
        }

        .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-title-c>* {
            padding-bottom: 25px
        }

        .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
            margin-right: 8px;
            margin-left: 0
        }

        .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-content-pane {
            margin-bottom: 25px
        }

        .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-content {
            text-align: center;
            color: white
        }

        .jconfirm.jconfirm-supervan .jconfirm-box .jconfirm-buttons {
            text-align: center
        }

        .jconfirm.jconfirm-supervan .jconfirm-box .jconfirm-buttons button {
            font-size: 16px;
            border-radius: 2px;
            background: #303f53;
            text-shadow: none;
            border: 0;
            color: white;
            padding: 10px;
            min-width: 100px
        }

        .jconfirm.jconfirm-supervan.jconfirm-rtl .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
            margin-left: 8px;
            margin-right: 0
        }

        .jconfirm.jconfirm-material .jconfirm-bg {
            background-color: rgba(0, 0, 0, 0.67)
        }

        .jconfirm.jconfirm-material .jconfirm-box {
            background-color: white;
            -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
            box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
            padding: 30px 25px 10px 25px
        }

        .jconfirm.jconfirm-material .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
            margin-right: 8px;
            margin-left: 0
        }

        .jconfirm.jconfirm-material .jconfirm-box div.jconfirm-closeIcon {
            color: rgba(0, 0, 0, 0.87)
        }

        .jconfirm.jconfirm-material .jconfirm-box div.jconfirm-title-c {
            color: rgba(0, 0, 0, 0.87);
            font-size: 22px;
            font-weight: bold
        }

        .jconfirm.jconfirm-material .jconfirm-box div.jconfirm-content {
            color: rgba(0, 0, 0, 0.87)
        }

        .jconfirm.jconfirm-material .jconfirm-box .jconfirm-buttons {
            text-align: right
        }

        .jconfirm.jconfirm-material .jconfirm-box .jconfirm-buttons button {
            text-transform: uppercase;
            font-weight: 500
        }

        .jconfirm.jconfirm-material.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
            margin-left: 8px;
            margin-right: 0
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-bg {
            background-color: rgba(0, 0, 0, 0.21)
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box {
            background-color: white;
            -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2);
            border: solid 1px rgba(0, 0, 0, 0.4);
            padding: 15px 0 0
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
            margin-right: 8px;
            margin-left: 0
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box div.jconfirm-closeIcon {
            color: rgba(0, 0, 0, 0.87)
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box div.jconfirm-title-c {
            color: rgba(0, 0, 0, 0.87);
            font-size: 22px;
            font-weight: bold;
            padding-left: 15px;
            padding-right: 15px
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box div.jconfirm-content {
            color: rgba(0, 0, 0, 0.87);
            padding: 0 15px
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box .jconfirm-buttons {
            text-align: right;
            padding: 10px;
            margin: -5px 0 0;
            border-top: solid 1px #ddd;
            overflow: hidden;
            border-radius: 0 0 4px 4px
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box .jconfirm-buttons button {
            font-weight: 500
        }

        .jconfirm.jconfirm-bootstrap.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
            margin-left: 8px;
            margin-right: 0
        }

        .jconfirm.jconfirm-modern .jconfirm-bg {
            background-color: slategray;
            opacity: .6
        }

        .jconfirm.jconfirm-modern .jconfirm-box {
            background-color: white;
            -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
            box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
            padding: 30px 30px 15px
        }

        .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-closeIcon {
            color: rgba(0, 0, 0, 0.87);
            top: 15px;
            right: 15px
        }

        .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-title-c {
            color: rgba(0, 0, 0, 0.87);
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px
        }

        .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
            -webkit-transition: -webkit-transform .5s;
            transition: -webkit-transform .5s;
            transition: transform .5s;
            transition: transform .5s, -webkit-transform .5s;
            -webkit-transform: scale(0);
            transform: scale(0);
            display: block;
            margin-right: 0;
            margin-left: 0;
            margin-bottom: 10px;
            font-size: 69px;
            color: #aaa
        }

        .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-content {
            text-align: center;
            font-size: 15px;
            color: #777;
            margin-bottom: 25px
        }

        .jconfirm.jconfirm-modern .jconfirm-box .jconfirm-buttons {
            text-align: center
        }

        .jconfirm.jconfirm-modern .jconfirm-box .jconfirm-buttons button {
            font-weight: bold;
            text-transform: uppercase;
            -webkit-transition: background .1s;
            transition: background .1s;
            padding: 10px 20px
        }

        .jconfirm.jconfirm-modern .jconfirm-box .jconfirm-buttons button+button {
            margin-left: 4px
        }

        .jconfirm.jconfirm-modern.jconfirm-open .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        /*employer-common.css*/

        .text-center {
            text-align: center;
        }

        input.error,
        input.error:focus {
            border-color: red !important
        }

        #frm_login_header .form-group .error {
            margin-top: 0;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .button-prev,
        .button-next {
            background-image: none !important;
            background-color: rgba(47, 75, 160, 0.9);
            color: white !important;
            box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
        }

        .button-prev.disabled,
        .button-next.disabled {
            background-color: #9e9e9e
        }

        .button-prev em,
        .button-next em {
            color: white !important;
        }

        .employer-navbar-2-1 .left-wrap .list-menu li {
            margin-right: 20px !important
        }

        .jobs-posting-modal {
            max-width: 450px;
            padding: 0;
            background: #ffffff;
        }

        .jobs-posting-modal .modal-head {
            padding-bottom: 15px;
            border-bottom: 2px solid #efefef;
        }

        .jobs-posting-modal .modal-head .title {
            color: #172642;
            font-size: 18px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .jobs-posting-modal .modal-body {
            padding: 15px;
            text-align: center;
        }

        @media (min-width:1024px) {
            .jobs-posting-modal .modal-body {
                padding: 30px;
            }
        }

        @media (min-width:1200px) {
            .jobs-posting-modal .modal-body {
                padding: 45px;
            }
        }

        .jobs-posting-modal .modal-body .name {
            margin-top: 20px;
            color: #172642;
            font-size: 16px;
            font-weight: 900;
            text-transform: uppercase;
        }

        @media (min-width:1200px) {
            .jobs-posting-modal .modal-body .name {
                margin-top: 25px;
                font-size: 18px;
            }
        }

        .jobs-posting-modal .modal-body .des {
            margin-top: 10px;
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal .modal-body .button {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
        }

        .jobs-posting-modal .modal-body .button .btn-gradient {
            -webkit-transition: 0.4s ease-in-out all;
            -o-transition: 0.4s ease-in-out all;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 150px;
            height: 40;
            padding: 5px 15px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            transition: 0.4s ease-in-out all;
        }

        .jobs-posting-modal .modal-body .button .btn-gradient em {
            padding-right: 5px;
            font-size: 18px;
        }

        .jobs-posting-modal .modal-body .button .btn-gradient:hover {
            text-decoration: none;
        }

        .jobs-posting-modal.modal-noti-emp {
            width: 450px;
            max-width: 100%;
        }

        .jobs-posting-modal.modal-noti-emp .fancybox-close-small {
            color: #ffffff;
        }

        .jobs-posting-modal.modal-noti-emp .modal-head {
            padding: 15px;
            background: #24ebc8;
            text-align: center;
        }

        .jobs-posting-modal.modal-noti-emp .modal-head img {
            height: 70px;
        }

        .jobs-posting-modal.modal-noti-emp .modal-body {
            padding-top: 20px;
            border: 1px solid #e0e0e0;
            border-top: none;
            text-align: center;
        }

        .jobs-posting-modal.modal-noti-emp .modal-body .title {
            margin-bottom: 10px;
            color: #172642;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .jobs-posting-modal.modal-noti-emp .modal-body p {
            color: #182642;
            font-size: 16px;
            font-weight: 500;
        }

        .jobs-posting-modal.modal-noti-emp.success-modal .modal-head {
            background: #24ebc8
        }

        .jobs-posting-modal.modal-noti-emp.error-modal .modal-head {
            background: #ff0000
        }

        .jconfirm.jconfirm-bootstrap .jconfirm-box .jconfirm-buttons {
            text-align: center;
        }

        .justify-content-md-center {
            justify-content: center;
        }

        .form-group span.error {
            display: block;
            text-align: left;
            margin-top: 10px;
            color: red;
            font-size: 12px;
            font-style: italic;
            width: 100%;
        }

        .manage-job-posting-active-jobs .jobs-posting-detail-bottom .list-info-posting li {
            margin-bottom: 0;
        }

        .chosen-container-multi .chosen-choices li.search-choice span,
        .chosen-container-multi .chosen-select-max-three li.search-choice span,
        .chosen-container-multi .chosen-select-max-one li.search-choice span {
            text-overflow: ellipsis;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
        }

        #post_job_location .item_post_job_location {
            margin-bottom: 20px;
        }

        .manage-job-posting-post-jobs .form-group.form-checkbox {
            align-items: center !important;
        }

        .manage-job-posting-post-jobs .form-group.form-checkbox input[type=checkbox].error {
            margin-top: 0 !important;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-body .form-submit .btn-gradient {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-transition: 0.2s ease-in-out all;
            -o-transition: 0.2s ease-in-out all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            height: 40px;
            margin-top: 20px;
            padding: 5px 15px;
            border-radius: 5px;
            background: #6c757d;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            transition: 0.2s ease-in-out all;
            margin-right: 10px;
        }

        .jobs-posting-modal.jobs-posting-17-modal .modal-body .form-submit .btn-gradient {
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
        }

        .noti {
            position: relative;
            cursor: pointer;
        }

        .noti em {
            margin-right: 7px;
            color: #2f4ba0;
        }

        .noti .toolip {
            z-index: 100;
        }

        .noti .toolip:before {
            top: -7.5px;
        }

        .noti .toolip:after {
            top: -6.5px;
        }

        .noti:hover .toolip {
            opacity: 1;
        }

        .noti:hover .toolip:before,
        .noti:hover .toolip:after {
            left: 10px;
            opacity: 1;
        }

        .btn-gradient.btn-post {
            background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8)) !important;
            background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8) !important;
            background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8) !important;
        }

        .lds-roller {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-roller div {
            animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            transform-origin: 40px 40px;
        }

        .lds-roller div:after {
            content: " ";
            display: block;
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #2f4ba0;
            margin: -4px 0 0 -4px;
        }

        .lds-roller div:nth-child(1) {
            animation-delay: -0.036s;
        }

        .lds-roller div:nth-child(1):after {
            top: 63px;
            left: 63px;
        }

        .lds-roller div:nth-child(2) {
            animation-delay: -0.072s;
        }

        .lds-roller div:nth-child(2):after {
            top: 68px;
            left: 56px;
        }

        .lds-roller div:nth-child(3) {
            animation-delay: -0.108s;
        }

        .lds-roller div:nth-child(3):after {
            top: 71px;
            left: 48px;
        }

        .lds-roller div:nth-child(4) {
            animation-delay: -0.144s;
        }

        .lds-roller div:nth-child(4):after {
            top: 72px;
            left: 40px;
        }

        .lds-roller div:nth-child(5) {
            animation-delay: -0.18s;
        }

        .lds-roller div:nth-child(5):after {
            top: 71px;
            left: 32px;
        }

        .lds-roller div:nth-child(6) {
            animation-delay: -0.216s;
        }

        .lds-roller div:nth-child(6):after {
            top: 68px;
            left: 24px;
        }

        .lds-roller div:nth-child(7) {
            animation-delay: -0.252s;
        }

        .lds-roller div:nth-child(7):after {
            top: 63px;
            left: 17px;
        }

        .lds-roller div:nth-child(8) {
            animation-delay: -0.288s;
        }

        .lds-roller div:nth-child(8):after {
            top: 56px;
            left: 12px;
        }

        @keyframes lds-roller {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .page-loader {
            display: block;
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.2);
            z-index: 9999999;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-flow: wrap;
            justify-content: center;
            align-content: center;
            display: none;
        }

        .page-loader.loaded {
            display: none;
        }

        .box-flip-view .profile-iframe {
            margin-top: 15px;
        }

        .box-flip-view .profile-iframe iframe {
            width: 100%;
            height: 700px;
        }

        .main-button-sticky {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            z-index: 500;
            position: -webkit-sticky;
            position: sticky;
            bottom: 120px;
            justify-content: space-between;
            pointer-events: none;
        }

        @media (min-width:1024px) {
            .main-button-sticky {
                bottom: 100px;
            }
        }

        .main-button-sticky {
            opacity: 0;
            display: none !important;
        }

        @media (max-width:1200px) {
            .main-button-sticky {
                opacity: 1;
                display: flex !important;
            }
            .box-manage-job-posting .main-jobs-posting .table>table,
            .box-candidates-resume-applied .table>table,
            .box-manage-job-posting .main-jobs-posting .table>table,
            .manage-job-posting-post-jobs .table-task-reports>table {
                min-width: 1325px
            }
        }

        #show_alert_email_invite {
            display: block;
            text-align: left;
            margin-top: 10px;
            color: red;
            font-size: 12px;
            font-style: italic;
        }

        .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio {
            flex-flow: row wrap;
        }

        .cb-text-center {
            text-align: center !important;
        }

        .noborderbg {
            border: 1px solid #e5e5e5 !important;
            border-bottom: none !important;
            background: none !important;
        }

        .last-login-user {
            background-color: #eff3f6;
            font-size: 12px;
            padding-top: 5px;
            text-align: right
        }

        .popup-add-note-flipview {
            padding: 0 !important;
            max-width: 700px;
            width: 90%;
        }

        .popup-add-note-flipview #frmResumeForNote #btn-create-note-resume {
            margin: 20px;
        }

        .txt-left {
            text-align: left !important;
        }

        .txt-right {
            text-align: right !important;
        }

        .txt-center {
            text-align: center !important;
        }

        .pl-20 {
            padding-left: 20px !important;
        }

        .pr-20 {
            padding-right: 20px !important;
        }

        .pb-20 {
            padding-bottom: 20px !important;
        }

        .pt-20 {
            padding-top: 20px !important;
        }

        .skybanner {
            text-align: center;
        }

        #NotifyOffPostjob .content_postjob {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 30px 0
        }

        #NotifyOffPostjob .content_postjob ul {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
            padding-right: 30px
        }

        #NotifyOffPostjob .content_postjob ul li {
            padding: 0 0 15px 20px;
            position: relative
        }

        #NotifyOffPostjob .content_postjob ul li:before {
            position: absolute;
            top: 0;
            left: 0;
            content: "\f054";
            color: #2f4ba0;
            font-family: FontAwesome
        }

        #NotifyOffPostjob .content_postjob .image {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        #frmEditJob {
            position: relative;
        }

        #mask-desable-postjob {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 11;
        }

        #resumeLock {
            position: relative;
        }

        #resumeLock .loading {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
            display: none;
        }

        #resumeLock.checking .loading {
            display: flex;
        }

        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #fff;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(24px, 0);
            }
        }

        @media (max-width:667px) {
            .noti {
                display: none !important
            }
        }

        #save_resume_ts_msg {
            color: #24ebc8;
            text-align: left;
            line-height: 20px;
            display: flex;
            justify-content: left;
            flex-flow: row nowrap;
        }

        .resume-limit-exceed .img {
            width: 50%;
            margin: 0 auto;
            padding-bottom: 20px
        }

        .resume-limit-exceed .img img {
            max-height: 230px
        }

        .resume-limit-exceed .location {
            padding: 10px
        }

        .btn-purchase-service {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px
        }

        .btn-purchase-service a {
            background-color: #f7a334;
            color: #fff;
            padding: 10px 25px
        }

        .resume-search-candidates-detail .buyService span.btn_submit input {
            max-width: 200px
        }

        .resume-search-candidates-detail .buyService .address {
            margin-top: 10px;
        }

        .resume-search-candidates-detail .buyService .address .area {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 15px;
            font-size: 14.5px
        }

        .resume-search-candidates-detail .buyService .address .area h2 {
            font-size: 16px
        }

        .buyService span.btn_submit input {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 300px;
            min-height: 36px;
            margin-top: 10px;
            padding: 5px 10px;
            border-radius: 4px;
            background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
            background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
            background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
        }

        .manage-candidates-resume-applied .box-flip-view .flip-view-body .info-list-1 {
            margin-top: 20px;
        }

        .manage-candidates-resume-applied .box-flip-view .flip-view-body .info-list-1 li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .manage-candidates-resume-applied .box-flip-view .flip-view-body .info-list-1 li p {
            color: #182642;
            font-size: 16px;
        }

        .manage-candidates-resume-applied .box-flip-view .flip-view-body .info-list-1 li p:first-child {
            width: 120px;
            min-width: 120px;
            padding-right: 10px;
        }

        .manage-candidates-resume-applied .box-flip-view .flip-view-body .info-list-1 li .name {
            color: #2f4ba0;
        }

        @media (min-width:1024px) {
            .manage-candidates-resume-applied .box-flip-view .flip-view-body .info-list-1 {
                margin-top: 25px;
            }
        }

        .flip_next,
        .flip_prev {
            position: fixed;
            width: 42px;
            height: 42px;
            cursor: pointer;
            top: calc(50% - 21px);
            outline: 0;
            background: url("https://static.careerbuilder.vn/themes/employer/img/arrow_right.png") no-repeat 0 0;
            z-index: 1
        }

        .flip_next {
            right: 0;
        }

        .flip_prev {
            left: 0;
            background-position: 0 -42px;
        }
    </style>
   
    <script type="text/javascript" src="https://static.careerbuilder.vn/js/jquery.masknumber.js"></script>



    <script type="text/javascript" src="https://static.careerbuilder.vn/themes/employer/gallery/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="https://static.careerbuilder.vn/themes/employer/gallery/daterangepicker/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://static.careerbuilder.vn/themes/employer/gallery/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://static.careerbuilder.vn/themes/employer/gallery/daterangepicker/daterangepicker.css" />

   
</head>

<body>
 
    <main>
        <style>
            /*account-tool-company-profile.css*/

            @charset "UTF-8";
            .is-browser-IE header .main-menu .menu li:nth-child(2).dropdown .dropdown-menu {
                min-width: calc( 100% + 110px);
            }

            .is-browser-IE .employer-banner {
                overflow: hidden;
            }

            .is-browser-IE .employer-mail {
                position: fixed;
                width: 100%;
            }

            .is-browser-IE .employer-mail.no-scroll {
                position: relative;
            }

            @media (min-width:1025px) {
                .is-browser-IE .employer-customer .main-button .button-prev {
                    right: 103%;
                }
            }

            header.for-customers .main-candidates {
                background: #e8c80d;
            }

            header.for-customers .main-candidates a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 28px 12.5px;
            }

            header.for-customers .main-candidates a:hover {
                text-decoration: none;
            }

            header.for-customers .main-candidates h4 {
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
            }

            header.for-customers .main-candidates em {
                padding-right: 10px;
                color: #ffffff;
                font-size: 24px;
            }

            header.for-customers .main-cart {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 26px;
                padding: 0 10px;
                border-right: 1px solid #e8e8e8;
            }

            header.for-customers .main-cart a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            header.for-customers .main-cart a em {
                color: #747d8d;
                font-size: 18px;
            }

            header.for-customers .main-menu .menu li a {
                color: #172642;
            }

            header.for-customers .main-menu .menu li a:before {
                background: #172642;
            }

            header.for-customers .main-menu .menu li.active a,
            header.for-customers .main-menu .menu li:hover a {
                color: #2f4ba0;
            }

            header.for-customers .main-menu .menu li.active a:before,
            header.for-customers .main-menu .menu li:hover a:before {
                background: #2f4ba0;
            }

            header.for-customers .main-menu .menu li:first-child a {
                font-size: 0;
            }

            header.for-customers .main-menu .menu li:first-child a:after {
                color: #172642;
                font-family: "Material Design Icons";
                font-size: 18px;
                content: "\f2dc";
            }

            header.for-customers .main-menu .menu li:first-child.active a:after,
            header.for-customers .main-menu .menu li:first-child:hover a:after {
                color: #2f4ba0;
            }

            header.for-customers .main-menu .menu li.dropdown a {
                color: #172642;
                font-weight: 500;
            }

            header.for-customers .main-menu .menu li.dropdown a em {
                padding-left: 5px;
            }

            header.for-customers .main-menu .menu li.dropdown.active a,
            header.for-customers .main-menu .menu li.dropdown:hover a {
                color: #2f4ba0;
            }

            header.for-customers .main-menu .menu li.dropdown.active a:before,
            header.for-customers .main-menu .menu li.dropdown:hover a:before {
                background: #2f4ba0;
            }

            header.for-customers .main-menu .menu li.dropdown .dropdown-menu {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
            }

            header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li a {
                color: #172642;
                font-weight: 700;
            }

            header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a {
                font-size: 14.5px;
            }

            header.for-customers .main-menu .menu li.dropdown .dropdown-menu ul li:first-child a::after {
                display: none;
            }

            @media screen and (max-width:1368px) {
                header.for-customers .main-menu .menu li {
                    padding: 0 10px;
                }
                header.for-customers .main-menu .menu li a {
                    font-size: 14.5px;
                }
            }

            header.for-customers .main-login .login-wrapper .forget-password {
                display: inline-block;
                margin-right: 10px;
                padding-top: 10px;
            }

            header.for-customers .mobile-menu {
                -webkit-box-shadow: -20px 0 10px 3px rgba(0, 0, 0, 0.5);
                box-shadow: -20px 0 10px 3px rgba(0, 0, 0, 0.5);
            }

            header.for-customers .mobile-menu.show {
                -webkit-box-shadow: 2px 0 10px 3px rgba(0, 0, 0, 0.5);
                box-shadow: 2px 0 10px 3px rgba(0, 0, 0, 0.5);
            }

            header.for-customers .mobile-menu .header-bottom {
                background: #ffffff;
            }

            header.for-customers .mobile-menu .profile {
                -webkit-box-align: start;
                -ms-flex-align: start;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: flex-start;
                background: #172642;
            }

            header.for-customers .mobile-menu .profile .username {
                margin-top: 0;
                padding-left: 15px;
                text-align: left;
            }

            header.for-customers .mobile-menu .profile .username a {
                text-align: left;
            }

            header.for-customers .mobile-menu .profile .username p {
                text-align: left;
            }

            header.for-customers .mobile-menu .profile .avatar {
                width: 80px;
                min-width: 80px;
            }

            header.for-customers .mobile-menu .profile .authentication-links {
                margin-top: 10px;
                padding: 0;
                border: none;
                background: none;
            }

            header.for-customers .mobile-menu .profile .authentication-links ul {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: flex-start;
            }

            header.for-customers .mobile-menu .profile .authentication-links ul li {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: flex-start;
                width: 100%;
                margin-top: 0;
            }

            header.for-customers .mobile-menu .profile .authentication-links ul li a {
                color: #ffffff;
                font-size: 14.5px;
                text-transform: none;
            }

            header.for-customers .mobile-menu .profile .authentication-links ul li a i {
                margin-right: 5px;
            }

            header.for-customers .mobile-menu .profile .authentication-links ul li+li {
                margin-top: 5px;
            }

            header.for-customers .mobile-menu .employer-site {
                background: #172642;
            }

            header.for-customers .mobile-menu .employer-site h4 a {
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
            }

            header.for-customers .mobile-menu .employer-site ul li a,
            header.for-customers .mobile-menu .employer-site ul li p {
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
            }

            header.for-customers .mobile-menu .employer-site ul li i {
                margin-right: 10px;
            }

            header.for-customers .mobile-menu .employer-site ul li+li {
                margin-top: 10px;
            }

            header.for-customers .mobile-menu .authentication-links {
                border-top: 1px solid #cccccc;
                border-bottom: 1px solid #cccccc;
                background: #ffffff;
            }

            header.for-customers .mobile-menu .authentication-links ul li a {
                color: #172642;
            }

            header.for-customers .mobile-menu .dropdown-mobile:before {
                color: #172642;
            }

            header.for-customers .mobile-menu .dropdown-mobile-2:before {
                color: #172642;
            }

            header.for-customers .mobile-menu .header-alert {
                background: #172642;
            }

            header.for-customers .mobile-menu .header-alert h4 a {
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
            }

            header.for-customers .mobile-menu .header-alert h4 a strong {
                font-size: 16px;
            }

            header.for-customers .mobile-menu .header-alert h4 a span {
                display: block;
                margin-top: 5px;
            }

            header.for-customers .mobile-menu .header-alert ul {
                margin-top: 10px;
            }

            header.for-customers .mobile-menu .header-alert ul li a {
                color: #ffffff;
            }

            header.for-customers .mobile-menu .menu {
                border-bottom: none;
            }

            header.for-customers .mobile-menu .menu ul li a {
                color: #172642;
            }

            header.for-customers .mobile-menu .menu ul li.active a {
                color: #182641;
                font-weight: 700;
            }

            header.for-customers .mobile-menu .menu ul li.dropdown-mobile.active::before {
                color: #182641;
            }

            header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul {
                padding-right: 0;
                padding-left: 32px;
            }

            header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li a {
                color: #172642;
                font-weight: 500;
            }

            header.for-customers .mobile-menu .menu ul li.dropdown-mobile ul li.active a {
                color: #182641;
                font-weight: 700;
            }

            header.for-customers .mobile-menu .menu ul li+li {
                margin-top: 15px;
            }

            header.for-customers .mobile-menu .profile .avatar {
                background: white;
            }

            header.for-customers .mobile-menu.logged .profile {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            header.for-customers .mdi-contacts:before {
                content: "\f6ca";
            }

            header.for-customers .mdi-room-service-outline:before {
                content: "\fd73";
            }

            header.for-customers .mdi-account-circle-outline:before {
                content: "\fb31";
            }

            header.for-customers .mdi-briefcase-account:before {
                content: "\fccc";
            }

            header.for-customers .mdi-apps:before {
                content: "\f03b";
            }

            header.for-customers .mdi-cart:before {
                content: "\f110";
            }

            header.for-customers .main-login.logged .dropdown-menu ul li em {
                padding-right: 3px;
            }

            .lnr-arrow-up:before {
                content: "\e877";
            }

            footer.for-customers {
                background: #182642;
            }

            footer.for-customers h3 {
                color: #ffffff;
            }

            footer.for-customers .top-footer address ul li {
                color: #ffffff;
            }

            footer.for-customers .top-footer address ul li span {
                color: #ffffff;
            }

            footer.for-customers .top-footer .footer-links ul li a {
                color: #2f4ba0;
            }

            footer.for-customers .top-footer .footer-social-links ul li a {
                color: #ffffff;
            }

            footer.for-customers .top-footer .footer-social-links ul li a:hover {
                color: #f79c25;
            }

            footer.for-customers .cb-section-border-bottom {
                border-color: rgba(255, 255, 255, 0.16);
            }

            footer.for-customers .bottom-footer .right-bottom-footer {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            footer.for-customers .bottom-footer .back-to-top {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 48px;
                height: 48px;
                margin-left: 20px;
                overflow: hidden;
                border: 1px solid #2f4ba0;
                border-radius: 50%;
                cursor: pointer;
            }

            footer.for-customers .bottom-footer .back-to-top em {
                padding: 10px;
                color: #2f4ba0;
                font-size: 18px;
            }

            .employer-mail {
                -webkit-transition: 0.4s ease;
                -o-transition: 0.4s ease;
                z-index: 998;
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                padding: 15px 0;
                background: -webkit-gradient(linear, left top, right top, from(#1e9bd3), to(#2f4ba0));
                background: -o-linear-gradient(left, #1e9bd3 0%, #2f4ba0 100%);
                background: linear-gradient(90deg, #1e9bd3 0%, #2f4ba0 100%);
                transition: 0.4s ease;
            }

            .employer-mail .align-item-center {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .employer-mail.no-scroll {
                padding: 50px 0;
            }

            .employer-mail.no-scroll .left-content .icon img {
                height: 57px;
            }

            .employer-mail.no-scroll .left-content .content p {
                font-size: 16px;
            }

            .employer-mail .left-content {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .employer-mail .left-content .icon {
                min-width: 70px;
            }

            .employer-mail .left-content .icon img {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                height: 45px;
                transition: 0.4s ease-in-out all;
            }

            @media (max-width:576px) {
                .employer-mail .left-content .icon {
                    display: none;
                }
            }

            .employer-mail .left-content .content {
                padding-left: 15px;
            }

            .employer-mail .left-content .content p {
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
            }

            .employer-mail .left-content .content .mb-show {
                display: none;
            }

            @media (min-width:1025px) {
                .employer-mail .left-content .content p {
                    font-size: 15px;
                }
            }

            @media (max-width:576px) {
                .employer-mail .left-content .content {
                    padding-left: 0;
                }
                .employer-mail .left-content .content .pc-show {
                    display: none;
                }
                .employer-mail .left-content .content .mb-show {
                    display: block;
                }
            }

            .employer-mail .form-register {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .employer-mail .form-register input {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 65%;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                flex: 0 0 65%;
                max-width: 65%;
                height: 35px;
                padding: 5px 10px;
                border: none;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
                transition: 0.4s ease-in-out all;
            }

            .employer-mail .form-register input::-webkit-input-placeholder {
                color: #666666;
                font-size: 16px;
                font-weight: 500;
            }

            .employer-mail .form-register input::-moz-placeholder {
                color: #666666;
                font-size: 16px;
                font-weight: 500;
            }

            .employer-mail .form-register input:-ms-input-placeholder {
                color: #666666;
                font-size: 16px;
                font-weight: 500;
            }

            .employer-mail .form-register input::-ms-input-placeholder {
                color: #666666;
                font-size: 16px;
                font-weight: 500;
            }

            .employer-mail .form-register input::placeholder {
                color: #666666;
                font-size: 16px;
                font-weight: 500;
            }

            .employer-mail .form-register input:focus {
                outline: none;
            }

            .employer-mail .form-register button {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 35%;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                flex: 0 0 35%;
                max-width: 35%;
                height: 35px;
                border: none;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                background: #2f4ba0;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                text-transform: uppercase;
                transition: 0.4s ease-in-out all;
            }

            .employer-mail .form-register button:focus {
                outline: none;
            }

            @media (min-width:450px) {
                .employer-mail .form-register input {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                .employer-mail .form-register button {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
            }

            @media (min-width:768px) {
                .employer-mail .form-register input {
                    height: 40px;
                }
                .employer-mail .form-register button {
                    height: 40px;
                }
            }

            @media (min-width:1025px) {
                .employer-mail .form-register input {
                    padding: 5px 30px;
                }
                .employer-mail .left-content .content {
                    padding-left: 40px;
                }
                .employer-mail.no-scroll .form-register input,
                .employer-mail.no-scroll .form-register button {
                    height: 50px;
                }
            }

            @media (max-width:576px) {
                .employer-mail {
                    padding: 15px 0;
                }
                .employer-mail .row {
                    margin-bottom: 0;
                }
                .employer-mail .row>* {
                    margin-bottom: 15px;
                }
                .employer-mail .row>*:last-child {
                    margin-bottom: 0;
                }
                .employer-mail.no-scroll .left-content .icon {
                    display: block;
                }
                .employer-mail.no-scroll .left-content .content {
                    padding-left: 15px;
                }
                .employer-mail.no-scroll .left-content .content .mb-show {
                    display: none;
                }
                .employer-mail.no-scroll .left-content .content .pc-show {
                    display: block;
                }
            }

            .feedback-employer-btn {
                -webkit-transform: translate(25%, -50%) rotate(270deg);
                -ms-transform: translate(25%, -50%) rotate(270deg);
                z-index: 999;
                position: fixed;
                top: 50%;
                right: 0;
                padding: 5px 10px;
                transform: translate(25%, -50%) rotate(270deg);
                border: 1px solid #e5e5e5;
                border-top: 3px solid #2f4ba0;
                background: #fff;
                color: #5d677a;
                font-size: 14.5px;
                text-decoration: none;
            }

            .feedback-employer-btn:hover {
                color: #5d677a;
                text-decoration: none;
            }

            @media (max-width:576px) {
                .feedback-employer-btn {
                    display: none;
                }
            }

            .feedback-employer-modal {
                width: 570px;
            }

            .feedback-employer-modal .logo {
                margin-bottom: 20px;
                text-align: center;
            }

            .feedback-employer-modal .text {
                margin-bottom: 20px;
            }

            .feedback-employer-modal .text p {
                font-size: 14.5px;
            }

            .feedback-employer-modal .text p+p {
                margin-top: 10px;
            }

            .feedback-employer-modal .text p strong {
                font-size: 18px;
            }

            .feedback-employer-modal .form-group+.form-group {
                margin-top: 15px;
            }

            .feedback-employer-modal .form-group label {
                display: block;
                margin-bottom: 5px;
            }

            .feedback-employer-modal .form-group input[type=text],
            .feedback-employer-modal .form-group textarea {
                width: 100%;
            }

            .feedback-employer-modal .form-group input[type=text] {
                height: 40px;
                padding: 0 15px;
            }

            .feedback-employer-modal .form-group textarea {
                height: 120px;
                padding: 5px 15px;
            }

            .feedback-employer-modal .form-group span {
                color: red;
                font-size: 12px;
                font-style: italic;
                font-weight: 500;
            }

            .feedback-employer-modal .form-group .note {
                font-size: 12px;
            }

            .feedback-employer-modal .form-group.form-submit {
                margin-top: 30px;
                text-align: center;
            }

            .feedback-employer-modal .form-group.form-submit input {
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                width: 80px;
                height: 36px;
                border: 0;
                background: #e8c80d;
                color: #fff;
                font-size: 14.5px;
                transition: 0.3s all;
            }

            .feedback-employer-modal .form-group.form-submit input:hover {
                background: #e18408;
            }

            .feedback-employer-modal .fancybox-close-small {
                background: #f7a334;
                opacity: 1;
            }

            .feedback-employer-modal .fancybox-close-small svg path {
                fill: #fff;
            }

            .employer-navbar-2-1 {
                z-index: 500;
                position: -webkit-sticky;
                position: sticky;
                top: 80px;
                border-bottom: 1px solid #e6e6e7;
                background: #ffffff;
            }

            @media (max-width:1200px) {
                .employer-navbar-2-1 {
                    -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                    z-index: 500;
                    position: -webkit-sticky;
                    position: sticky;
                    top: 60px;
                    border: none;
                    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                }
            }

            .employer-navbar-2-1 .material-icons:hover {
                text-decoration: none;
            }

            .employer-navbar-2-1 .category-nav {
                display: none;
            }

            .employer-navbar-2-1 .category-nav p {
                color: #182642;
                font-size: 18px;
                font-weight: 700;
            }

            .employer-navbar-2-1 .category-nav em {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #182642;
                font-size: 22px;
            }

            .employer-navbar-2-1 .category-nav.active em {
                -webkit-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            @media (max-width:1200px) {
                .employer-navbar-2-1 .category-nav {
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: space-between;
                    padding: 5px 10px;
                    background: #ffffff;
                }
            }

            .employer-navbar-2-1 .left-wrap .list-menu {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .employer-navbar-2-1 .left-wrap .list-menu a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 13px 0;
                color: #182642;
                font-size: 15px;
                font-weight: 500;
                text-decoration: none;
                transition: 0.2s ease-in-out all;
            }

            .employer-navbar-2-1 .left-wrap .list-menu li {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 30px;
            }

            .employer-navbar-2-1 .left-wrap .list-menu li:last-child {
                margin-right: 0;
            }

            .employer-navbar-2-1 .left-wrap .list-menu li:hover a,
            .employer-navbar-2-1 .left-wrap .list-menu li.active a {
                color: #2f4ba0;
            }

            .employer-navbar-2-1 .right-wrap .list-menu {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .employer-navbar-2-1 .right-wrap .list-menu li {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 30px;
            }

            .employer-navbar-2-1 .right-wrap .list-menu li:last-child {
                margin-right: 0;
            }

            .employer-navbar-2-1 .right-wrap .list-menu li:hover a,
            .employer-navbar-2-1 .right-wrap .list-menu li.active a {
                color: #182642;
            }

            .employer-navbar-2-1 .right-wrap .list-menu a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 13px 0;
                color: #2f4ba0;
                font-size: 15px;
                font-weight: 500;
                text-decoration: none;
                transition: 0.2s ease-in-out all;
            }

            .employer-navbar-2-1 .right-wrap .list-menu em {
                padding-right: 5px;
            }

            .employer-navbar-2-1 .main-wrap {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            @media (max-width:1200px) {
                .employer-navbar-2-1 .main-wrap {
                    display: none;
                    padding-top: 10px;
                    padding-bottom: 5px;
                    background: #ffffff;
                }
                .employer-navbar-2-1 .main-wrap .list-menu,
                .employer-navbar-2-1 .main-wrap .list-menu {
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                }
                .employer-navbar-2-1 .main-wrap .list-menu li,
                .employer-navbar-2-1 .main-wrap .list-menu li {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    flex: 0 0 100%;
                    justify-content: flex-start;
                    width: 100%;
                    max-width: 100%;
                    margin: 0;
                    padding: 7px 10px;
                }
                .employer-navbar-2-1 .main-wrap .list-menu li a,
                .employer-navbar-2-1 .main-wrap .list-menu li a {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                    margin: 0;
                    padding: 0;
                }
            }

            .bg-manage {
                background: #eff3f6;
            }

            .material-icons {
                text-decoration: none;
            }

            .material-icons:hover {
                text-decoration: none;
            }

            a {
                text-decoration: none;
            }

            a:hover {
                text-decoration: none;
            }

            .main-form-posting .form-wrap {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 -10px;
            }

            .main-form-posting .form-wrap .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px;
                padding: 0 10px;
            }

            .main-form-posting .form-wrap .form-group label {
                display: block;
                margin-bottom: 10px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
            }

            .main-form-posting .form-wrap .form-group input,
            .main-form-posting .form-wrap .form-group select,
            .main-form-posting .form-wrap .form-group button {
                width: 100%;
                height: 36px;
                padding: 5px 20px;
                border: 1px solid #dddddd;
                border-radius: 5px;
                background: #ffffff;
                color: #999999;
                font-size: 14.5px;
                font-weight: 500;
            }

            .main-form-posting .form-wrap .form-group select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-color: #ffffff;
                background-image: url("https://static.careerbuilder.vn/themes/employer/img/sl.png");
                background-position: 95% 50%;
                background-repeat: no-repeat;
            }

            .main-form-posting .form-wrap .form-group select::-ms-expand {
                display: none;
            }

            .main-form-posting .form-wrap .form-group.form-date {
                position: relative;
            }

            .main-form-posting .form-wrap .form-group.form-date .icon {
                z-index: 11;
                position: absolute;
                top: 40px;
                right: 15px;
                pointer-events: none;
            }

            .main-form-posting .form-wrap .form-group.form-date .icon em {
                color: #666666;
                font-size: 18px;
            }

            .main-form-posting .form-wrap .form-group.form-submit .btn-submit {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                border: none;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                background-size: 200% 100%;
                color: #ffffff;
                font-size: 16px;
                font-weight: 500;
                transition: 0.4s ease-in-out all;
            }

            .main-form-posting .form-wrap .form-group.form-submit .btn-submit em {
                padding-right: 5px;
                font-size: 18px;
            }

            .main-form-posting .form-wrap .form-group.form-submit .btn-submit:hover {
                background-position: 100% 0;
            }

            .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
                transition: 0.2s ease-in-out all;
            }

            .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced em {
                font-size: 24px;
            }

            .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover {
                text-decoration: underline;
            }

            .main-form-posting .form-wrap .form-group.form-filter-advanced .btn-filter-advanced:hover em {
                text-decoration: none;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen select {
                display: none;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen label {
                margin-bottom: 5px;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container {
                width: 100% !important;
                min-height: 40px !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices {
                height: 100%;
                padding: 5px;
                padding-left: 0;
                border: none;
                border-bottom: 1px solid #93bcdc;
                background-image: none;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                height: 26px !important;
                border: none !important;
                background: #ebf8ff !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
                background: none !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
                color: #5d677a;
                font-family: "Material Design Icons";
                font-size: 11px;
                content: "\f156";
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
                color: #fc0821;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
                font-family: "Barlow", sans-serif !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                color: #172642;
                font-size: 16px;
                font-weight: 700;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
                width: 6px !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
                background: #eaeaea !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
                background: #7fcb42 !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
                background: #7fcb42 !important;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #5d677a;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f131";
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
                color: #ffffff;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
                color: #ffffff;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
                color: #ffffff;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
                color: #ffffff;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #2f4ba0;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f132";
                opacity: 1;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
                color: #182642;
                cursor: pointer;
            }

            .main-form-posting .form-wrap .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
                color: #2f4ba0;
            }

            @media (min-width:576px) {
                .main-form-posting .form-wrap .form-group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .main-form-posting .form-wrap .form-group.form-submit {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
            }

            @media (min-width:1024px) {
                .main-form-posting .form-wrap .form-group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                .main-form-posting .form-wrap .form-group label {
                    font-size: 12px;
                }
                .main-form-posting .form-wrap .form-group.form-submit {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                    margin-top: 30px;
                }
            }

            @media (min-width:1200px) {
                .main-form-posting .form-wrap .form-group label {
                    font-size: 13px;
                }
            }

            @media (min-width:1440px) {
                .main-form-posting .form-wrap .form-group label {
                    font-size: 14.5px;
                }
            }

            .box-manage-job-posting {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                padding: 15px;
                border-radius: 4px;
                background: #ffffff;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }

            @media (min-width:1024px) {
                .box-manage-job-posting {
                    padding: 20px;
                }
            }

            @media (min-width:1200px) {
                .box-manage-job-posting {
                    padding: 30px;
                }
            }

            .box-manage-job-posting .btn-gradient {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 36px;
                padding: 5px 15px;
                border-radius: 4px;
                background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
                background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
                background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
                color: #ffffff;
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                transition: 0.4s ease-in-out all;
            }

            .box-manage-job-posting .btn-gradient em {
                padding-right: 5px;
                font-size: 18px;
            }

            .box-manage-job-posting .title-manage {
                padding-right: 20px;
                color: #182642;
                font-size: 18px;
                font-weight: 500;
            }

            @media (min-width:1024px) {
                .box-manage-job-posting .title-manage {
                    padding-right: 25px;
                    font-size: 20px;
                }
            }

            @media (min-width:1200px) {
                .box-manage-job-posting .title-manage {
                    font-size: 24px;
                }
            }

            .box-manage-job-posting .dropdown {
                position: relative;
                cursor: pointer;
            }

            .box-manage-job-posting .dropdown .dropdown-list {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                z-index: 500;
                position: absolute;
                top: 100%;
                left: 50%;
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                max-width: 380px;
                padding: 0;
                transform: translateX(-50%);
                border-radius: 5px;
                opacity: 0;
                pointer-events: none;
                transition: 0.2s ease-in-out all;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                background: #f8f8f8;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .head {
                padding: 5px 20px;
                color: #666666;
                font-size: 14.5px;
                font-weight: 500;
                text-align: left;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table {
                width: 100%;
                min-width: 100%;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table th {
                text-transform: none;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table th,
            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table td {
                border: none;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table thead {
                background: #e6e6e6;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table thead tr {
                background: #e6e6e6;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table tbody tr {
                background: #f8f8f8;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body table tbody tr:nth-child(2n) {
                background: #ffffff;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon em {
                padding-right: 5px;
                color: #cccccc;
                font-size: 14.5px;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-icon p {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .tag-name {
                color: #666666;
                font-size: 14.5px;
                font-weight: 500;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li {
                margin-right: 15px;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li:last-child {
                margin-right: 0;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li a {
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-dropdown .body .list-tag-suggestion li em {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 700;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed {
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                width: 268px;
                max-width: 268px;
                padding: 20px;
                border-radius: 5px;
                background: #ffffff;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul {
                padding-bottom: 10px;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul+ul {
                padding-top: 10px;
                border-top: 2px solid #e1e1e1;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul:last-child {
                padding-bottom: 0;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li+li {
                margin-top: 8px;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li .name {
                padding-right: 10px;
                color: #666666;
                font-size: 14.5px;
                font-weight: 500;
            }

            .box-manage-job-posting .dropdown .dropdown-list .box-hit-filed ul li .number {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
            }

            .box-manage-job-posting .dropdown:hover .dropdown-list {
                opacity: 1;
                pointer-events: auto;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading>* {
                margin-bottom: 20px;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .hor-var {
                display: none;
                margin-right: 15px;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .name {
                margin-right: 15px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li {
                margin-right: 10px;
                margin-bottom: 10px;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 100px;
                height: 26px;
                padding: 5px 15px;
                border: 1px solid #2f4ba0;
                border-radius: 5px;
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a:hover {
                background: #2f4ba0;
                color: #ffffff;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-detail {
                display: none;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-detail.active {
                display: block;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-summary {
                display: none;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li.view-posting-summary.active {
                display: block;
            }

            @media (min-width:1024px) {
                .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check {
                    margin-bottom: 10px;
                }
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading>* {
                margin-bottom: 20px;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 20px;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                min-width: 140px;
                height: 28px;
                padding: 5px 15px;
                border-radius: 4px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                background-size: 200% 100%;
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a em {
                padding-right: 5px;
                font-size: 16px;
                font-weight: 700;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .export-file a:hover {
                background-position: 100% 0;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .name,
            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .name-display {
                margin-right: 10px;
                margin-bottom: 10px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .form-display {
                margin-right: 10px;
                margin-bottom: 10px;
            }

            .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display .form-display select {
                width: 70px;
                height: 28px;
                padding: 3px 15px;
                border: 1px solid #dddddd;
                border-radius: 5px;
                background: #ffffff;
                color: #999999;
                font-size: 14.5px;
                font-weight: 500;
            }

            @media (min-width:1024px) {
                .box-manage-job-posting .main-jobs-posting .heading-jobs-posting {
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: space-between;
                }
                .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display {
                    margin-bottom: 10px;
                }
                .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .right-heading .to-display>* {
                    margin-bottom: 0;
                }
            }

            @media (min-width:1200px) {
                .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading {
                    padding-left: 10px;
                }
                .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .hor-var {
                    display: block;
                }
                .box-manage-job-posting .main-jobs-posting .heading-jobs-posting .left-heading .list-check li a {
                    min-width: 120px;
                }
            }

            .box-manage-job-posting .main-jobs-posting .table {
                width: 100%;
                overflow-x: auto;
            }

            .box-manage-job-posting .main-jobs-posting .table>table {
                width: 100%;
                height: 100%;
                background: #fff;
            }

            .box-manage-job-posting .main-jobs-posting .table>table th,
            .box-manage-job-posting .main-jobs-posting .table>table td {
                border: 1px solid #e6e6e6;
                text-align: center;
            }

            .box-manage-job-posting .main-jobs-posting .table>table th:nth-child(2),
            .box-manage-job-posting .main-jobs-posting .table>table td:nth-child(2) {
                text-align: left;
            }

            .box-manage-job-posting .main-jobs-posting .table>table thead {
                background: #e6e6e6;
            }

            .box-manage-job-posting .main-jobs-posting .table>table thead th {
                padding: 10px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .box-manage-job-posting .main-jobs-posting .table>table thead th em {
                position: relative;
                top: 5px;
                padding-left: 5px;
                font-size: 18px;
            }

            .box-manage-job-posting .main-jobs-posting .table>table tbody tr {
                background: #ffffff;
            }

            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:hover {
                background: #f1f9ff;
            }

            .box-manage-job-posting .main-jobs-posting .table>table tbody td {
                padding: 10px;
                border-right: 1px solid rgba(255, 255, 255, 0);
            }

            .box-manage-job-posting .main-jobs-posting .table>table tbody td:last-child {
                border-right: 1px solid #e6e6e6;
            }

            .box-manage-job-posting .main-jobs-posting .table .title {
                position: relative;
                padding-right: 15px;
            }

            .box-manage-job-posting .main-jobs-posting .table .title .name {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
            }

            .box-manage-job-posting .main-jobs-posting .table .title .name .code {
                font-weight: 500;
            }

            .box-manage-job-posting .main-jobs-posting .table .title .jobs-new-tab {
                position: absolute;
                top: 0;
                right: 10px;
            }

            .box-manage-job-posting .main-jobs-posting .table .title .jobs-new-tab em {
                color: #182642;
                font-size: 14.5px;
            }

            .box-manage-job-posting .main-jobs-posting .table .jobs-view-detail {
                display: none;
                margin-top: 10px;
                color: #666666;
                font-size: 12px;
                font-weight: 500;
            }

            .box-manage-job-posting .main-jobs-posting .table .jobs-view-detail strong {
                color: #182642;
            }

            .box-manage-job-posting .main-jobs-posting .table time,
            .box-manage-job-posting .main-jobs-posting .table .view-number,
            .box-manage-job-posting .main-jobs-posting .table .hit-filed,
            .box-manage-job-posting .main-jobs-posting .table .td-state,
            .box-manage-job-posting .main-jobs-posting .table .user {
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
            }

            .box-manage-job-posting .main-jobs-posting .table .td-mail {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
            }

            .box-manage-job-posting .main-jobs-posting .table .td-mail.no-mail {
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
            }

            .box-manage-job-posting .main-jobs-posting .table .hit-filed {
                cursor: pointer;
            }

            .box-manage-job-posting .main-jobs-posting .table .view-number em {
                padding-left: 3px;
                color: #2f4ba0;
                font-size: 20px;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li {
                margin-right: 15px;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li:last-child {
                margin-right: 0;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li a {
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li em {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 700;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-cv-suggestion li.view {
                cursor: pointer;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-manipulation {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-manipulation li {
                margin-right: 15px;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-manipulation li:last-child {
                margin-right: 0;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-manipulation li a {
                display: block;
                width: 20px;
            }

            .box-manage-job-posting .main-jobs-posting .table .list-manipulation li em {
                font-size: 20px;
                font-weight: 500;
            }

            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:last-child .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-last-child(2) .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-last-child(3) .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-last-child(4) .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-last-child(5) .dropdown .dropdown-list {
                top: auto;
                bottom: 100%;
            }

            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:first-child .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-child(2) .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-child(3) .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-child(4) .dropdown .dropdown-list,
            .box-manage-job-posting .main-jobs-posting .table>table tbody tr:nth-child(5) .dropdown .dropdown-list {
                top: 100%;
                bottom: auto;
            }

            .box-manage-job-posting .tabslet-content {
                display: none;
                padding: 10px;
                border: 1px solid #e0e0e0;
            }

            .box-manage-job-posting .tabslet-content.active {
                display: block;
            }

            @media (min-width:1024px) {
                .box-manage-job-posting .tabslet-content {
                    padding: 20px 10px;
                }
            }

            .box-manage-job-posting .form-error {
                margin-top: 10px;
                color: red;
                font-size: 12px;
                font-style: italic;
            }

            .box-manage-job-posting .form-success {
                margin-top: 10px;
                color: #24ebc8;
                font-size: 12px;
                font-style: italic;
            }

            .dtpicker-overlay .dtpicker-buttonCont .dtpicker-button {
                color: #ffffff;
            }

            .main-tabslet {
                position: relative;
            }

            .main-tabslet .tabslet-tab {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                max-width: 100%;
                overflow-x: auto;
                overflow-y: hidden;
            }

            .main-tabslet .tabslet-tab li {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
            }

            .main-tabslet .tabslet-tab a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                align-items: center;
                justify-content: center;
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                padding: 8px 25px;
                border: 1px solid #e0e0e0;
                border-bottom: none;
                border-radius: none;
                border-top-right-radius: 4px;
                border-top-left-radius: 4px;
                background: #eeeeee;
                color: #2f4ba0;
                font-size: 15px;
                font-weight: 500;
                transition: 0.2s ease-in-out all;
            }

            .main-tabslet .tabslet-tab a::before {
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                z-index: 11;
                position: absolute;
                bottom: -1px;
                left: -1px;
                width: calc(100% + 2px);
                height: 1px;
                background: #e0e0e0;
                content: "";
                opacity: 1;
                transition: 0.2s ease-in-out all;
            }

            .main-tabslet .tabslet-tab a:hover {
                text-decoration: none;
            }

            .main-tabslet .tabslet-tab li {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 5px;
            }

            .main-tabslet .tabslet-tab li.active a,
            .main-tabslet .tabslet-tab li:hover a {
                background: #ffffff;
                color: #004970;
            }

            .main-tabslet .tabslet-tab li:hover a::before {
                background: #e0e0e0;
            }

            .main-tabslet .tabslet-tab li.active a::before {
                background: #ffffff;
                opacity: 1;
            }

            @media (max-width:768px) {
                .main-tabslet .tabslet-tab li a {
                    padding: 8px 15px;
                }
            }

            @media (max-width:576px) {
                .main-tabslet .tabslet-tab li {
                    margin-top: 1px;
                }
            }

            .button-prev,
            .button-next {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
                background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
                background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
                background-size: 200% 100%;
                cursor: pointer;
                pointer-events: auto;
                transition: 0.2s ease-in-out all;
            }

            .button-prev em,
            .button-next em {
                color: #ffffff;
                font-size: 18px;
            }

            .button-prev:hover,
            .button-next:hover {
                background-position: 100% 0;
            }

            .button-prev {
                left: -25px;
            }

            .button-next {
                right: -25px;
            }

            @media (min-width:1024px) {
                .button-prev,
                .button-next {
                    width: 40px;
                    height: 40px;
                }
                .button-prev em,
                .button-next em {
                    font-size: 20px;
                }
                .button-prev {
                    left: -20px;
                }
                .button-next {
                    right: -20px;
                }
            }

            .main-pagination ul {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .main-pagination ul li {
                padding: 0 2.5px;
            }

            .main-pagination ul li a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                border: 1px solid #cccccc;
                border-radius: 50%;
                background: #cccccc;
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
                transition: 0.4s ease-in-out all;
            }

            .main-pagination ul li a:hover {
                border: 1px solid #2f4ba0;
                background: #2f4ba0;
                color: #ffffff;
                text-decoration: none;
            }

            .main-pagination ul li a.FirstPage,
            .main-pagination ul li a.LastPage {
                border-color: #f5f5f5;
                background: #f5f5f5;
            }

            .main-pagination ul li a.FirstPage em,
            .main-pagination ul li a.LastPage em {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                color: #bbbbbb;
                font-size: 18px;
                transition: 0.4s ease-in-out all;
            }

            .main-pagination ul li a.FirstPage:hover,
            .main-pagination ul li a.LastPage:hover {
                border: 1px solid #2f4ba0;
                background: #2f4ba0;
                color: #ffffff;
                text-decoration: none;
            }

            .main-pagination ul li a.FirstPage:hover em,
            .main-pagination ul li a.LastPage:hover em {
                color: #ffffff;
            }

            .main-pagination ul li.active a {
                border: 1px solid #2f4ba0;
                background: #2f4ba0;
                color: #ffffff;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .heading-manage .left-heading {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .heading-manage .left-heading>* {
                margin-bottom: 20px;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .heading-manage .right-heading {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .box-manage-job-posting .heading-manage {
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: space-between;
                }
            }

            .manage-job-posting-post-jobs .ql-editor {
                height: 120px;
            }

            .manage-job-posting-post-jobs .d-flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .form-flex {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    align-items: center;
                }
                .manage-job-posting-post-jobs .form-flex .form-group.form-radio {
                    margin-right: 20px;
                }
                .manage-job-posting-post-jobs .form-flex .form-group.form-radio:last-child {
                    margin-right: 0;
                }
            }

            .manage-job-posting-post-jobs .align-center {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .manage-job-posting-post-jobs .mt-20 {
                margin-top: 20px;
            }

            .manage-job-posting-post-jobs .mt-5 {
                margin-top: 5px;
            }

            .manage-job-posting-post-jobs .ml-5 {
                margin-left: 5px;
            }

            .manage-job-posting-post-jobs .ml-40 {
                margin-left: 10px;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .ml-40 {
                    margin-left: 40px;
                }
            }

            .manage-job-posting-post-jobs .flex-wrap {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .manage-job-posting-post-jobs .title-application {
                padding: 13px 15px;
                background: #f1f8fe;
                color: #172642;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .manage-job-posting-post-jobs .title-application span {
                padding-left: 10px;
                color: #999999;
                font-size: 14.5px;
                font-weight: 500;
                text-transform: none;
            }

            .manage-job-posting-post-jobs .title-application.no-bg {
                background: none;
            }

            .manage-job-posting-post-jobs .title-application.no-pad {
                padding: 0;
            }

            .manage-job-posting-post-jobs .noti {
                position: relative;
                cursor: pointer;
            }

            .manage-job-posting-post-jobs .noti em {
                margin-right: 7px;
                color: #2f4ba0;
            }

            .manage-job-posting-post-jobs .noti .toolip {
                z-index: 1;
            }

            .manage-job-posting-post-jobs .noti .toolip:before {
                top: -7.5px;
            }

            .manage-job-posting-post-jobs .noti .toolip:after {
                top: -6.5px;
            }

            .manage-job-posting-post-jobs .noti:hover .toolip {
                opacity: 1;
            }

            .manage-job-posting-post-jobs .noti:hover .toolip:before,
            .manage-job-posting-post-jobs .noti:hover .toolip:after {
                left: 10px;
                opacity: 1;
            }

            .manage-job-posting-post-jobs .main-application-information>*+* {
                margin-top: 20px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap>* {
                margin-top: 20px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .row {
                margin-bottom: 0;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .row>* {
                margin-bottom: 0;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .row+.row {
                margin-top: 20px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .row {
                margin-bottom: -10px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .row>* {
                margin-bottom: 10px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group+.checkbox-group {
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group .form-group {
                margin-right: 20px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group .form-group:first-child {
                width: 150px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .list-profile-requirement .checkbox-group .form-group:last-child {
                margin-right: 0;
            }

            @media (min-width:1200px) {
                .manage-job-posting-post-jobs .main-application-information .form-wrap {
                    padding: 0 15px;
                }
            }

            .manage-job-posting-post-jobs .note {
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .note p {
                color: #999999;
                font-size: 14.5px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .list-link {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .manage-job-posting-post-jobs .list-link li {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 10px;
                padding-right: 10px;
                border-right: 1px solid #2f4ba0;
            }

            .manage-job-posting-post-jobs .list-link li a {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
                line-height: 1;
            }

            .manage-job-posting-post-jobs .list-link li a:hover {
                text-decoration: underline;
            }

            .manage-job-posting-post-jobs .list-link li:last-child {
                border-right: none;
            }

            .manage-job-posting-post-jobs .btn-add-location,
            .manage-job-posting-post-jobs .btnlink {
                position: relative;
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .btn-add-location em,
            .manage-job-posting-post-jobs .btnlink em {
                margin-right: 10px;
                color: #2f4ba0;
                font-size: 16px;
            }

            .manage-job-posting-post-jobs .btn-add-location .toolip:before,
            .manage-job-posting-post-jobs .btnlink .toolip:before {
                top: -6.5px;
            }

            .manage-job-posting-post-jobs .btn-add-location .toolip:after,
            .manage-job-posting-post-jobs .btnlink .toolip:after {
                top: -5px;
            }

            .manage-job-posting-post-jobs .btn-add-location:hover,
            .manage-job-posting-post-jobs .btnlink:hover {
                text-decoration: underline;
            }

            .manage-job-posting-post-jobs .btn-add-location:hover .toolip,
            .manage-job-posting-post-jobs .btnlink:hover .toolip {
                opacity: 1;
            }

            .manage-job-posting-post-jobs .btn-add-location:hover .toolip:before,
            .manage-job-posting-post-jobs .btn-add-location:hover .toolip:after,
            .manage-job-posting-post-jobs .btnlink:hover .toolip:before,
            .manage-job-posting-post-jobs .btnlink:hover .toolip:after {
                z-index: 11;
                left: 10px;
                opacity: 1;
            }

            .manage-job-posting-post-jobs .btn-popup {
                position: relative;
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .btn-popup em {
                margin-right: 10px;
                color: #2f4ba0;
                font-size: 16px;
            }

            .manage-job-posting-post-jobs .btn-popup .toolip:before {
                top: -6.5px;
            }

            .manage-job-posting-post-jobs .btn-popup .toolip:after {
                top: -5px;
            }

            .manage-job-posting-post-jobs .btn-popup:hover {
                text-decoration: underline;
            }

            .manage-job-posting-post-jobs .btn-popup:hover .toolip {
                opacity: 1;
            }

            .manage-job-posting-post-jobs .btn-popup:hover .toolip:before,
            .manage-job-posting-post-jobs .btn-popup:hover .toolip:after {
                z-index: 11;
                left: 10px;
                opacity: 1;
            }

            @media (max-width:576px) {
                .manage-job-posting-post-jobs .toolip {
                    width: 100%;
                    min-width: 100%;
                }
                .manage-job-posting-post-jobs .toolip:before,
                .manage-job-posting-post-jobs .toolip:after {
                    display: none;
                }
            }

            .manage-job-posting-post-jobs .btn-delete {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                margin-top: 0;
                color: red;
                font-size: 14.5px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .btn-delete em {
                margin-right: 10px;
                color: red;
                font-size: 16px;
                font-weight: 600;
            }

            .manage-job-posting-post-jobs .btn-delete:hover {
                text-decoration: underline;
            }

            .manage-job-posting-post-jobs .btnlink {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .btnlink .toolip {
                z-index: 20;
            }

            .manage-job-posting-post-jobs .btnlink .toolip:before {
                top: -7.5px;
            }

            .manage-job-posting-post-jobs .btnlink .toolip:after {
                top: -6px;
            }

            .manage-job-posting-post-jobs .form-group>* {
                width: 100%;
            }

            .manage-job-posting-post-jobs .form-group label,
            .manage-job-posting-post-jobs .form-group .title-label {
                margin-bottom: 10px;
                color: #5d677a;
                font-size: 16px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .form-group input {
                height: 45px;
                border: none;
                border: none;
                border-bottom: 1px solid #e5e5e5;
                color: #999999;
                font-size: 16px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .form-group select {
                height: 45px;
                border: none;
                border: none;
                border-bottom: 1px solid #e5e5e5;
                background-image: none;
                color: #172642;
                font-size: 16px;
                font-weight: 700;
            }

            .manage-job-posting-post-jobs .form-group select[disabled] {
                border-color: #f7f7f7;
                background: #f7f7f7;
            }

            .manage-job-posting-post-jobs .form-group textarea {
                height: 90px;
                border: none;
                border: none;
                border-bottom: 1px solid #e5e5e5;
                color: #999999;
                font-size: 16px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .form-group .noted {
                display: block;
                margin-top: 3px;
                color: red;
                font-size: 12px;
                font-style: italic;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .form-group.form-note-workfromhome {
                padding-left: 30px;
            }

            .manage-job-posting-post-jobs .form-group.form-select label {
                margin-bottom: 0;
            }

            .manage-job-posting-post-jobs .form-group.form-qs {
                margin-bottom: 0;
            }

            .manage-job-posting-post-jobs .form-group.form-qs label {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .manage-job-posting-post-jobs .form-group.form-qs .btnlink {
                margin-top: 0;
                margin-left: 10px;
            }

            .manage-job-posting-post-jobs .form-group.form-checkbox {
                -webkit-box-align: start;
                -ms-flex-align: start;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: flex-start;
            }

            .manage-job-posting-post-jobs .form-group.form-checkbox input {
                width: 20px;
                min-width: 20px;
                height: auto;
            }

            .manage-job-posting-post-jobs .form-group.form-checkbox label {
                margin: 0;
                margin-right: 5px;
                margin-left: 10px;
                color: #182642;
                font-size: 14.5px;
                cursor: pointer;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .form-group.form-checkbox label {
                    width: -webkit-max-content;
                    width: -moz-max-content;
                    width: max-content;
                    font-size: 16px;
                }
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .form-group.form-checkbox .btnlink {
                    width: auto;
                    min-width: -webkit-max-content;
                    min-width: -moz-max-content;
                    min-width: max-content;
                    margin-top: 0;
                }
            }

            .manage-job-posting-post-jobs .form-group.form-checkbox .noti {
                width: auto;
                min-width: -webkit-max-content;
                min-width: -moz-max-content;
                min-width: max-content;
                margin-top: 0;
            }

            .manage-job-posting-post-jobs .form-group.form-radio {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .manage-job-posting-post-jobs .form-group.form-radio input {
                width: 20px;
                height: auto;
            }

            .manage-job-posting-post-jobs .form-group.form-radio label {
                margin: 0;
                margin-left: 10px;
                color: #5d677a;
                font-size: 16px;
                cursor: pointer;
            }

            .manage-job-posting-post-jobs .form-group.form-date {
                position: relative;
            }

            .manage-job-posting-post-jobs .form-group.form-date .icon {
                z-index: 11;
                position: absolute;
                top: 50px;
                right: 0;
                width: auto;
                pointer-events: none;
            }

            .manage-job-posting-post-jobs .form-group.form-date .icon em {
                color: #172642;
                font-size: 18px;
            }

            .manage-job-posting-post-jobs .form-group.form-submit {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin-top: 20px;
            }

            .manage-job-posting-post-jobs .form-group.form-submit .btn-cancel {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: auto;
                min-width: 160px;
                height: 40px;
                padding: 5px 15px;
                border: 1px solid #5d677a;
                border-radius: 5px;
                background: #5d677a;
                color: #ffffff;
                font-size: 15px;
                font-weight: 500;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .form-group.form-submit .btn-cancel:hover {
                background: #ffffff;
                color: #5d677a;
            }

            @media (max-width:576px) {
                .manage-job-posting-post-jobs .form-group.form-submit .btn-cancel {
                    min-width: 200px;
                    margin-right: auto;
                    margin-left: auto;
                }
            }

            .manage-job-posting-post-jobs .form-group.form-submit .btn-submit-add {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: auto;
                min-width: 160px;
                height: 40px;
                padding: 5px 15px;
                border: 1px solid #5d677a;
                border-radius: 5px;
                background: #5d677a;
                color: #ffffff;
                font-size: 15px;
                font-weight: 500;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .form-group.form-submit .btn-submit-add:hover {
                background: #ffffff;
                color: #5d677a;
            }

            @media (max-width:576px) {
                .manage-job-posting-post-jobs .form-group.form-submit .btn-submit-add {
                    min-width: 200px;
                    margin-right: auto;
                    margin-left: auto;
                }
            }

            @media (max-width:576px) {
                .manage-job-posting-post-jobs .form-group.form-submit .btn-save {
                    min-width: 200px;
                }
            }

            @media (max-width:576px) {
                .manage-job-posting-post-jobs .form-group.form-submit .btn-post {
                    min-width: 200px;
                }
            }

            .manage-job-posting-post-jobs .form-group.form-submit.form-text {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-top: 0;
            }

            .manage-job-posting-post-jobs .form-group.form-submit.form-text .btn-submit-add {
                margin-top: 10px;
            }

            @media (min-width:1280px) {
                .manage-job-posting-post-jobs .form-group.form-submit.form-text {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                .manage-job-posting-post-jobs .form-group.form-submit.form-text>*~.btn-submit-add {
                    margin-top: 0;
                    margin-left: 10px;
                }
            }

            .manage-job-posting-post-jobs .form-group.form-continue {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .form-group.form-continue .btn-gradient {
                width: auto;
                min-width: 200px;
                height: 40px;
                padding: 5px 15px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .manage-job-posting-post-jobs .form-group.form-continue>* {
                margin: 10px;
            }

            .manage-job-posting-post-jobs .form-group.form-back-continue {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .manage-job-posting-post-jobs .form-group.form-back-continue>* {
                width: auto;
                min-width: -webkit-max-content;
                min-width: -moz-max-content;
                min-width: max-content;
                min-width: 180px;
                height: 40px;
                margin: 10px 15px;
                padding: 5px 15px;
                border-radius: 5px;
            }

            .manage-job-posting-post-jobs .form-group.form-back-continue .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .manage-job-posting-post-jobs .form-group.form-back-continue .btn-gradient.btn-post {
                background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
                background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
                background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen select {
                display: none;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen label {
                margin-bottom: 5px;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container {
                -webkit-box-shadow: none !important;
                width: 100% !important;
                min-height: 40px !important;
                box-shadow: none !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container:focus {
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices {
                height: 100%;
                padding: 5px;
                padding-left: 0;
                border: none;
                border-bottom: 1px solid #93bcdc;
                background-image: none;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices:focus {
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                height: 26px !important;
                border: none !important;
                background: #ebf8ff !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
                background: none !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
                color: #5d677a;
                font-family: "Material Design Icons";
                font-size: 11px;
                content: "\f156";
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
                color: #fc0821;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
                font-family: "Barlow", sans-serif !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                color: #172642;
                font-size: 16px;
                font-weight: 700;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
                width: 6px !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
                background: #eaeaea !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
                background: #7fcb42 !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
                background: #7fcb42 !important;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #5d677a;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f131";
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
                color: #ffffff;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
                color: #ffffff;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
                color: #ffffff;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
                color: #ffffff;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #2f4ba0;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f132";
                opacity: 1;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
                color: #182642;
                cursor: pointer;
            }

            .manage-job-posting-post-jobs .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
                color: #2f4ba0;
            }

            .manage-job-posting-post-jobs .form-group.form-input-label {
                position: relative;
            }

            .manage-job-posting-post-jobs .form-group.form-input-label label {
                -webkit-transition: 0.5s;
                -o-transition: 0.5s;
                position: absolute;
                top: 7px;
                left: 0;
                pointer-events: none;
                transition: 0.5s;
            }

            .manage-job-posting-post-jobs .form-group.form-input-label input:focus~label,
            .manage-job-posting-post-jobs .form-group.form-input-label input:not([value=""])~label {
                top: -12px;
                left: 0;
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .form-group.form-input-label input:focus~label span,
            .manage-job-posting-post-jobs .form-group.form-input-label input:not([value=""])~label span {
                font-size: 10px;
            }

            .manage-job-posting-post-jobs .form-salary {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin: 0 -15px;
            }

            .manage-job-posting-post-jobs .form-salary>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                width: 100%;
                max-width: 33.3333%;
                padding: 0 15px;
            }

            .manage-job-posting-post-jobs .form-experience {
                -webkit-box-align: end;
                -ms-flex-align: end;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: flex-end;
                margin: 0 -10px;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .form-experience {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
            }

            .manage-job-posting-post-jobs .form-experience .form-group {
                padding: 0 10px;
            }

            .manage-job-posting-post-jobs .form-experience .form-group label {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                margin-bottom: 0;
                padding-right: 5px;
                color: #172642;
            }

            .manage-job-posting-post-jobs .form-experience .form-group input[disabled] {
                border-color: #f5f5f5;
                background: #f5f5f5;
            }

            .manage-job-posting-post-jobs .form-experience .form-group.form-text {
                -webkit-box-align: end;
                -ms-flex-align: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: flex-end;
            }

            .manage-job-posting-post-jobs .form-experience .form-group.form-text input {
                width: 75px;
            }

            .manage-job-posting-post-jobs .form-experience .form-group.form-note {
                color: #172642;
            }

            .manage-job-posting-post-jobs .form-experience.form-work-experience .form-group.form-select,
            .manage-job-posting-post-jobs .form-experience.form-desired-salary .form-group.form-select {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                width: 100%;
                max-width: 100%;
            }

            .manage-job-posting-post-jobs .form-experience.form-work-experience .form-group.form-text,
            .manage-job-posting-post-jobs .form-experience.form-desired-salary .form-group.form-text {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                width: 50%;
                max-width: 50%;
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .form-experience.form-work-experience .form-group.form-text input,
            .manage-job-posting-post-jobs .form-experience.form-desired-salary .form-group.form-text input {
                width: 100%;
            }

            @media (min-width:768px) {
                .manage-job-posting-post-jobs .form-experience.form-work-experience .form-group.form-select,
                .manage-job-posting-post-jobs .form-experience.form-desired-salary .form-group.form-select {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .manage-job-posting-post-jobs .form-experience.form-work-experience .form-group.form-text,
                .manage-job-posting-post-jobs .form-experience.form-desired-salary .form-group.form-text {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
            }

            .manage-job-posting-post-jobs .form-experience.form-diploma .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                width: 100%;
                max-width: 100%;
            }

            @media (min-width:768px) {
                .manage-job-posting-post-jobs .form-experience.form-diploma .form-group.form-text,
                .manage-job-posting-post-jobs .form-experience.form-diploma .form-group.form-select-chosen {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
            }

            .manage-job-posting-post-jobs .checkbox-wrap {
                padding: 0 15px;
            }

            .manage-job-posting-post-jobs .checkbox-wrap .row {
                margin-bottom: 0;
            }

            .manage-job-posting-post-jobs .checkbox-wrap .row>* {
                margin-bottom: 10px;
            }

            .manage-job-posting-post-jobs .checkbox-wrap .form-group.form-checkbox label {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
                cursor: pointer;
            }

            .manage-job-posting-post-jobs .checkbox-wrap .form-group.form-checkbox label .material-icons {
                width: 25px;
                min-width: 25px;
                color: #5d677a;
                font-size: 18px;
            }

            .manage-job-posting-post-jobs .checkbox-wrap .form-group.form-checkbox label .fa {
                width: 25px;
                min-width: 25px;
                color: #5d677a;
                font-size: 16px;
            }

            .manage-job-posting-post-jobs .gender-wrap .form-group.form-radio {
                margin-right: 20px;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .gender-wrap .form-group.form-radio {
                    margin-right: 50px;
                }
            }

            @media (min-width:1440px) {
                .manage-job-posting-post-jobs .gender-wrap .form-group.form-radio {
                    margin-right: 120px;
                }
            }

            .manage-job-posting-post-jobs .receiveemail-wrap .form-group.form-radio {
                margin-right: 20px;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .receiveemail-wrap .form-group.form-radio {
                    margin-right: 30px;
                }
            }

            @media (min-width:1440px) {
                .manage-job-posting-post-jobs .receiveemail-wrap .form-group.form-radio {
                    margin-right: 50px;
                }
            }

            .manage-job-posting-post-jobs .form-age {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .manage-job-posting-post-jobs .form-age .form-group {
                -webkit-box-align: end;
                -ms-flex-align: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: flex-end;
                width: 50%;
                padding-right: 30px;
            }

            .manage-job-posting-post-jobs .form-age .form-group:last-child {
                padding-right: 0;
            }

            .manage-job-posting-post-jobs .form-age .form-group.form-text label {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                margin-right: 5px;
                margin-bottom: 0;
                color: #172642;
            }

            .manage-job-posting-post-jobs .form-age .form-group.form-text input {
                width: 100%;
                height: 40px;
            }

            .manage-job-posting-post-jobs .preview {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .manage-job-posting-post-jobs .btn-preview {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 160px;
                height: 40px;
                padding: 5px 15px;
                border: 1px solid #24ebc8;
                border-radius: 5px;
                background: #24ebc8;
                color: #ffffff;
                font-size: 15px;
                font-weight: 500;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .btn-preview:hover {
                background: #ffffff;
                color: #24ebc8;
            }

            .manage-job-posting-post-jobs .list-image {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .manage-job-posting-post-jobs .list-image .image-item {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                align-items: center;
                justify-content: center;
                max-width: 190px;
                max-height: 120px;
                margin-right: 10px;
                margin-bottom: 10px;
                overflow: hidden;
            }

            .manage-job-posting-post-jobs .list-image .image-item img {
                -o-object-fit: cover;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .manage-job-posting-post-jobs .list-image .image-item .btn-del-img {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                z-index: 11;
                position: absolute;
                top: 5px;
                right: 5px;
                align-items: center;
                justify-content: center;
                width: 14px;
                height: 14px;
                background: rgba(93, 103, 122, 0.7);
                color: #ffffff;
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .list-image .image-item .btn-del-img em {
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .upload-img {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .manage-job-posting-post-jobs .upload-img input {
                display: none;
            }

            .manage-job-posting-post-jobs .upload-img label {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 170px;
                height: 30px;
                margin-top: 10px;
                margin-right: 10px;
                padding: 5px 15px;
                border-radius: 5px;
                background: #5d677a;
                color: #ffffff;
                font-size: 14.5px;
                text-align: center;
                cursor: pointer;
            }

            .manage-job-posting-post-jobs .upload-img label em {
                margin-right: 5px;
                font-size: 18px;
            }

            .manage-job-posting-post-jobs .upload-img label.disabled {
                opacity: 0.6;
            }

            .manage-job-posting-post-jobs .upload-img .noti {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .manage-job-posting-post-jobs .other-information-wrap p {
                color: #5d677a;
                font-size: 15px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .other-information-wrap .form-group.form-checkbox {
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .other-information-wrap .form-group.form-checkbox .noti {
                width: auto;
            }

            .manage-job-posting-post-jobs .other-information-wrap .form-group.form-checkbox label {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                margin-right: 15px;
            }

            .manage-job-posting-post-jobs .form-standard {
                display: none;
                margin-top: 0;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                margin-bottom: 15px;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex>* {
                width: auto;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex select {
                width: 100%;
                max-width: 100px;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex p {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                margin-right: 5px;
                color: #5d677a;
                font-size: 16px;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex .see-sample {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: flex-end;
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea textarea {
                height: 150px;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-radio {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-radio>* {
                width: 100%;
            }

            .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-radio>*+* {
                margin-top: 10px;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .form-standard .form-wrap {
                    padding-left: 30px;
                }
                .manage-job-posting-post-jobs .form-standard .form-wrap .form-group.form-textarea .d-flex select {
                    max-width: 400px;
                }
            }

            .manage-job-posting-post-jobs .table p {
                margin-bottom: 15px;
                color: #182642;
            }

            .manage-job-posting-post-jobs .table table {
                width: 100%;
            }

            .manage-job-posting-post-jobs .table table thead {
                border: 1px solid #e6e6e6;
                background: #e6e6e6;
            }

            .manage-job-posting-post-jobs .table table thead th {
                padding: 10px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 700;
                text-align: center;
                text-transform: uppercase;
            }

            .manage-job-posting-post-jobs .table table thead th:first-child {
                text-align: left;
            }

            .manage-job-posting-post-jobs .table table tbody tr {
                border: 1px solid #e6e6e6;
            }

            .manage-job-posting-post-jobs .table table tbody td {
                padding: 10px;
                color: #999999;
                font-size: 14.5px;
                text-align: center;
            }

            .manage-job-posting-post-jobs .table table tbody td>* {
                margin-bottom: 5px;
                color: #999999;
            }

            .manage-job-posting-post-jobs .table table tbody td p {
                color: #999999;
            }

            .manage-job-posting-post-jobs .table table tbody td:first-child,
            .manage-job-posting-post-jobs .table table tbody td:last-child {
                text-align: left;
            }

            .manage-job-posting-post-jobs .table table tbody td.title {
                color: #333333;
            }

            @media (min-width:1440px) {
                .manage-job-posting-post-jobs .table table tbody td:first-child {
                    padding-left: 50px;
                }
            }

            @media (min-width:1280px) {
                .manage-job-posting-post-jobs .table table {
                    min-width: 1050px;
                }
            }

            .manage-job-posting-post-jobs .table .form-group.form-radio {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .manage-job-posting-post-jobs .table .box {
                margin-right: 10px;
                padding: 1.25px 19px;
                border-radius: 3px;
                background: #e1e1e1;
            }

            .manage-job-posting-post-jobs .notification-email {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .manage-job-posting-post-jobs .notification-email .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: auto;
                padding-right: 80px;
            }

            .manage-job-posting-post-jobs .notification-email .form-group .title-label {
                color: #182642;
            }

            .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
            }

            .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label span {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.green span {
                color: #02bd0e;
            }

            .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.blue span {
                color: #2f4ba0;
            }

            .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.yellow span {
                color: #fcb714;
            }

            .manage-job-posting-post-jobs .notification-email .form-group.form-checkbox label.red span {
                color: #fd0000;
            }

            .manage-job-posting-post-jobs .notification-email .form-group:first-child {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                width: 100%;
                max-width: 100%;
            }

            .manage-job-posting-post-jobs .main-tabslet .tabslet-tab::-webkit-scrollbar {
                height: 4px;
            }

            .manage-job-posting-post-jobs .main-tabslet .tabslet-tab::-webkit-scrollbar-track {
                background: #f9f9f9;
            }

            .manage-job-posting-post-jobs .main-tabslet .tabslet-tab::-webkit-scrollbar-thumb {
                background: #24ebc8;
            }

            .manage-job-posting-post-jobs .other-additional-wrap {
                display: none;
            }

            .manage-job-posting-post-jobs .location-list-add .location-item {
                display: none;
            }

            .manage-job-posting-post-jobs .location-list-add .location-item+.location-item {
                margin-top: 20px;
            }

            .manage-job-posting-post-jobs .location-list-add .location-item.active {
                display: block;
            }

            .manage-job-posting-post-jobs .list-tag {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .list-tag .tag-item {
                position: relative;
                margin-right: 10px;
                margin-bottom: 10px;
                padding: 5px 15px;
                padding-right: 20px;
                background: #f1f1f1;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .list-tag .tag-item .delete-tag {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                z-index: 11;
                position: absolute;
                top: 2px;
                right: 2px;
                align-items: center;
                justify-content: center;
                width: 14px;
                height: 14px;
                background: rgba(93, 103, 122, 0.7);
                color: #ffffff;
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .list-tag .tag-item .delete-tag em {
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .application-content {
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .application-content ul li {
                position: relative;
                padding-left: 20px;
            }

            .manage-job-posting-post-jobs .application-content ul li::before {
                position: absolute;
                top: 7px;
                left: 0;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                background: #cccccc;
                content: "";
            }

            .manage-job-posting-post-jobs .tabslet-tab-detail {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                border-bottom: 1px solid #bed7ea;
            }

            .manage-job-posting-post-jobs .tabslet-tab-detail li {
                margin-right: 20px;
            }

            .manage-job-posting-post-jobs .tabslet-tab-detail li:last-child {
                margin-right: 0;
            }

            .manage-job-posting-post-jobs .tabslet-tab-detail li a {
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                padding: 10px 0;
                color: #182642;
                font-size: 16px;
                font-weight: 700;
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .tabslet-tab-detail li a::before {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                position: absolute;
                bottom: -2px;
                left: 50%;
                width: 0;
                height: 3px;
                transform: translateX(-50%);
                background: #2f4ba0;
                content: "";
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .tabslet-tab-detail li:hover a,
            .manage-job-posting-post-jobs .tabslet-tab-detail li.active a {
                color: #2f4ba0;
            }

            .manage-job-posting-post-jobs .tabslet-tab-detail li:hover a::before,
            .manage-job-posting-post-jobs .tabslet-tab-detail li.active a::before {
                width: 100%;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .tabslet-tab-detail li {
                    margin-right: 30px;
                }
            }

            @media (min-width:1280px) {
                .manage-job-posting-post-jobs .tabslet-tab-detail {
                    margin: 0 5px;
                }
                .manage-job-posting-post-jobs .tabslet-tab-detail li {
                    margin-right: 40px;
                }
            }

            @media (min-width:1440px) {
                .manage-job-posting-post-jobs .tabslet-tab-detail li {
                    margin-right: 65px;
                }
            }

            .manage-job-posting-post-jobs .main-application-information .application-content {
                color: #182642;
            }

            .manage-job-posting-post-jobs .main-application-information .application-content a {
                color: #2f4ba0;
            }

            .manage-job-posting-post-jobs .main-application-information .application-content a:hover {
                text-decoration: underline;
            }

            .manage-job-posting-post-jobs .main-application-information .application-content.vendorid ul {
                margin-top: 15px;
            }

            .manage-job-posting-post-jobs .main-application-information .application-content.vendorid ul li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                padding-left: 0;
            }

            .manage-job-posting-post-jobs .main-application-information .application-content.vendorid ul li+li {
                margin-top: 5px;
            }

            .manage-job-posting-post-jobs .main-application-information .application-content.vendorid ul li:before {
                display: none;
            }

            .manage-job-posting-post-jobs .main-application-information .application-content.vendorid ul li p:first-child {
                width: 110px;
                min-width: 110px;
                padding-right: 10px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap .form-group input {
                color: #182642;
                font-weight: 700;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap.logo-wrap .main-image,
            .manage-job-posting-post-jobs .main-application-information .form-wrap.banner-wrap .main-image {
                margin-top: 0;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap.logo-wrap .main-image .list-image .image-item {
                width: 100%;
                max-width: 100px;
                height: auto;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap.banner-wrap .main-image .form-group .title-label .btn-view-banner-location {
                padding-left: 10px;
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap.banner-wrap .main-image .list-image .image-item {
                width: 100%;
                max-width: 200px;
                height: auto;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap.video-wrap .noti>p {
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .main-application-information .form-wrap.video-wrap .noted {
                color: #182642;
            }

            .manage-job-posting-post-jobs .main-application-information.main-add-location {
                display: none;
            }

            .manage-job-posting-post-jobs .main-application-information.main-add-location .title-application {
                padding-right: 15px;
                padding-left: 15px;
            }

            .manage-job-posting-post-jobs .main-application-information.main-add-location .image-maps {
                display: block;
                position: relative;
                padding-top: 58.8235294118%;
                overflow: hidden;
                border: 1px solid #eeeeee;
            }

            .manage-job-posting-post-jobs .main-application-information.main-add-location .image-maps iframe {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .manage-job-posting-post-jobs .main-application-information.main-add-location.active {
                display: block;
            }

            .manage-job-posting-post-jobs .main-application-information.main-form-change-password .title-application {
                padding-right: 15px;
                padding-left: 15px;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading>* {
                margin-bottom: 20px;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .hor-var {
                display: none;
                margin-right: 15px;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .name {
                margin-right: 15px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li {
                margin-right: 10px;
                margin-bottom: 10px;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 100px;
                height: 26px;
                padding: 5px 15px;
                border: 1px solid #2f4ba0;
                border-radius: 5px;
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
                text-decoration: none;
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li a:hover {
                background-color: #2f4ba0;
                color: #ffffff;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li a.btn-gradient {
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                color: #ffffff;
                font-weight: 500;
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li a.btn-gradient:hover {
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                background-color: none;
                background-position: 100% 0;
                transition: 0.2s ease-in-out all;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li.view-posting-detail {
                display: none;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li.view-posting-detail.active {
                display: block;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li.view-posting-summary {
                display: none;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li.view-posting-summary.active {
                display: block;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check {
                    margin-bottom: 10px;
                }
            }

            .manage-job-posting-post-jobs .heading-resume-applied .right-heading {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                display: flex;
                flex-wrap: wrap;
                flex-wrap: wrap;
                align-items: center;
                align-items: center;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .right-heading>* {
                margin-bottom: 20px;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .right-heading .to-display {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .right-heading .name,
            .manage-job-posting-post-jobs .heading-resume-applied .right-heading .name-display {
                margin-right: 10px;
                margin-bottom: 10px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .right-heading .form-display {
                margin-right: 10px;
                margin-bottom: 10px;
            }

            .manage-job-posting-post-jobs .heading-resume-applied .right-heading .form-display select {
                height: 28px;
                padding: 3px 15px;
                border: 1px solid #dddddd;
                border-radius: 5px;
                background: #ffffff;
                color: #999999;
                font-size: 14.5px;
                font-weight: 500;
            }

            @media (min-width:1024px) {
                .manage-job-posting-post-jobs .heading-resume-applied {
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: space-between;
                }
                .manage-job-posting-post-jobs .heading-resume-applied .right-heading .to-display {
                    margin-bottom: 10px;
                }
                .manage-job-posting-post-jobs .heading-resume-applied .right-heading .to-display>* {
                    margin-bottom: 0;
                }
            }

            @media (min-width:1200px) {
                .manage-job-posting-post-jobs .heading-resume-applied .left-heading .hor-var {
                    display: block;
                }
                .manage-job-posting-post-jobs .heading-resume-applied .left-heading .list-check li a {
                    min-width: 120px;
                }
            }

            .manage-job-posting-post-jobs .tabslet-content-detail {
                margin-top: 25px;
            }

            .manage-job-posting-post-jobs .tabslet-content-detail .content-detail-top .head .title {
                color: #172642;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .manage-job-posting-post-jobs .tabslet-content-detail .content-detail-top .body {
                margin-top: 15px;
            }

            .manage-job-posting-post-jobs .tabslet-content-detail .content-detail-top .body .brief-content {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .manage-job-posting-post-jobs .content-detail-bottom .heading-resume-applied {
                margin-top: 10px;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table::-webkit-scrollbar {
                width: 7px;
                height: 7px;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table::-webkit-scrollbar-thumb {
                background: #00b2a3;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table thead th {
                text-align: left;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table thead th:first-child {
                text-align: center;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table thead th.text-left {
                text-align: left;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td {
                text-align: left;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td:first-child {
                text-align: center;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td p {
                color: #182642;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td a {
                color: #2f4ba0;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td a:hover {
                text-decoration: underline;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td .status em {
                color: #999999;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td .status.active {
                cursor: pointer;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td .status.active em {
                color: #2f4ba0;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody .form-radio-wrap {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody .form-radio-wrap .form-group {
                margin-right: 40px;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody .form-radio-wrap .form-group label {
                color: #182642;
                font-size: 14.5px;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody .form-radio-wrap .form-group:last-child {
                margin-right: 0;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-location>table thead th:last-child {
                text-align: center;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody td .list-manipulation li em {
                color: #c6c6c6
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table>table tbody tr:hover td .list-manipulation li em {
                color: #2f4ba0
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table th,
            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table td {
                text-align: left;
                vertical-align: top;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table th:first-child,
            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table td:first-child {
                width: 100px;
                text-align: center;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table th:nth-child(2),
            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table td:nth-child(2) {
                width: 290px;
            }

            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table th:last-child,
            .manage-job-posting-post-jobs .box-manage-job-posting .table.table-request>table td:last-child {
                text-align: center;
            }

            .manage-job-posting-post-jobs .tabslet-content-detail {
                display: none;
            }

            .manage-job-posting-post-jobs .tabslet-content-detail.active {
                display: block;
            }

            .manage-job-posting-post-jobs .form-filter-wrap {
                margin-top: 15px;
            }

            .manage-job-posting-post-jobs .form-filter-wrap .form-group {
                margin-right: 15px;
            }

            .manage-job-posting-post-jobs .main-form-posting.main-form-task-reports {
                margin-top: 15px;
            }

            .manage-job-posting-post-jobs .main-form-posting.main-form-task-reports .form-wrap .form-group.form-select label {
                margin-bottom: 10px;
            }

            .manage-job-posting-post-jobs .table.table-task-reports {
                margin-top: 10px;
                overflow-x: auto
            }

            .manage-job-posting-post-jobs .table.table-task-reports table tbody td time {
                color: #182642;
            }

            .jobs-posting-modal {
                max-width: 450px;
                padding: 0;
                background: #ffffff;
            }

            .jobs-posting-modal .modal-head {
                padding-bottom: 15px;
                border-bottom: 2px solid #efefef;
            }

            .jobs-posting-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal .modal-body {
                padding: 15px;
                text-align: center;
            }

            @media (min-width:1024px) {
                .jobs-posting-modal .modal-body {
                    padding: 30px;
                }
            }

            @media (min-width:1200px) {
                .jobs-posting-modal .modal-body {
                    padding: 45px;
                }
            }

            .jobs-posting-modal .modal-body .name {
                margin-top: 20px;
                color: #172642;
                font-size: 16px;
                font-weight: 900;
                text-transform: uppercase;
            }

            @media (min-width:1200px) {
                .jobs-posting-modal .modal-body .name {
                    margin-top: 25px;
                    font-size: 18px;
                }
            }

            .jobs-posting-modal .modal-body .des {
                margin-top: 10px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal .modal-body .button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 15px;
            }

            .jobs-posting-modal .modal-body .button .btn-gradient {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 150px;
                height: 40;
                padding: 5px 15px;
                border-radius: 4px;
                background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
                background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
                background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
                color: #ffffff;
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                transition: 0.4s ease-in-out all;
            }

            .jobs-posting-modal .modal-body .button .btn-gradient em {
                padding-right: 5px;
                font-size: 18px;
            }

            .jobs-posting-modal .main-pagination ul {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal .main-pagination ul li {
                padding: 0 2.5px;
            }

            .jobs-posting-modal .main-pagination ul li a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                border: 1px solid #cccccc;
                border-radius: 50%;
                background: #cccccc;
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
                transition: 0.4s ease-in-out all;
            }

            .jobs-posting-modal .main-pagination ul li a:hover {
                border: 1px solid #2f4ba0;
                background: #2f4ba0;
                color: #ffffff;
                text-decoration: none;
            }

            .jobs-posting-modal .main-pagination ul li a.FirstPage,
            .jobs-posting-modal .main-pagination ul li a.LastPage {
                border-color: #f5f5f5;
                background: #f5f5f5;
            }

            .jobs-posting-modal .main-pagination ul li a.FirstPage em,
            .jobs-posting-modal .main-pagination ul li a.LastPage em {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                color: #bbbbbb;
                font-size: 18px;
                transition: 0.4s ease-in-out all;
            }

            .jobs-posting-modal .main-pagination ul li a.FirstPage:hover,
            .jobs-posting-modal .main-pagination ul li a.LastPage:hover {
                border: 1px solid #2f4ba0;
                background: #2f4ba0;
                color: #ffffff;
                text-decoration: none;
            }

            .jobs-posting-modal .main-pagination ul li a.FirstPage:hover em,
            .jobs-posting-modal .main-pagination ul li a.LastPage:hover em {
                color: #ffffff;
            }

            .jobs-posting-modal .main-pagination ul li.active a {
                border: 1px solid #2f4ba0;
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal .form-wrap .form-group+.form-group {
                margin-top: 25px;
            }

            .jobs-posting-modal .form-wrap .form-group label {
                width: 100%;
                color: #5d677a;
                font-size: 16px;
                font-weight: 500;
                text-align: left;
            }

            .jobs-posting-modal .form-wrap .form-group input {
                width: 100%;
                padding: 5px 0;
                border: none;
                border-bottom: 1px solid #e5e5e5;
                color: #999999;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal .form-wrap .form-group select {
                width: 100%;
                padding: 5px 0;
                border: none;
                border-bottom: 1px solid #e5e5e5;
                background-image: none;
                color: #172642;
                font-size: 16px;
                font-weight: 700;
            }

            .jobs-posting-modal .form-wrap .form-group textarea {
                width: 100%;
                min-height: 40px;
                padding: 5px 0;
                padding: 5px;
                border: none;
                border-bottom: 1px solid #e5e5e5;
                color: #999999;
                font-size: 14.5px;
                font-weight: 500;
            }

            .jobs-posting-modal .form-wrap .form-group textarea::-webkit-input-placeholder {
                color: #999999;
                font-size: 16px;
            }

            .jobs-posting-modal .form-wrap .form-group textarea::-moz-placeholder {
                color: #999999;
                font-size: 16px;
            }

            .jobs-posting-modal .form-wrap .form-group textarea:-ms-input-placeholder {
                color: #999999;
                font-size: 16px;
            }

            .jobs-posting-modal .form-wrap .form-group textarea::-ms-input-placeholder {
                color: #999999;
                font-size: 16px;
            }

            .jobs-posting-modal .form-wrap .form-group textarea::placeholder {
                color: #999999;
                font-size: 16px;
            }

            .jobs-posting-modal .form-wrap .form-group.form-multiple-select select {
                height: 100%;
                min-height: 50px;
                max-height: 128px;
                margin: 0;
                padding: 5px 15px;
                border: 1px solid #e7e7e7;
                color: #172642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal .form-wrap .form-group.form-checkbox .group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .jobs-posting-modal .form-wrap .form-group.form-checkbox .group+.group {
                margin-top: 10px;
            }

            .jobs-posting-modal .form-wrap .form-group.form-checkbox .group input {
                width: 15px;
                height: 15px;
            }

            .jobs-posting-modal .form-wrap .form-group.form-checkbox .group label {
                padding-left: 15px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
                cursor: pointer;
            }

            .jobs-posting-modal .form-wrap .form-group.form-radio .group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .jobs-posting-modal .form-wrap .form-group.form-radio .group+.group {
                margin-top: 10px;
            }

            .jobs-posting-modal .form-wrap .form-group.form-radio .group input {
                width: 15px;
                height: 15px;
            }

            .jobs-posting-modal .form-wrap .form-group.form-radio .group label {
                padding-left: 15px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
                cursor: pointer;
            }

            .jobs-posting-modal .form-wrap .form-group .noted {
                display: block;
                margin-top: 5px;
                color: #182642;
                font-size: 14.5px;
                font-weight: 500;
            }

            .jobs-posting-modal .form-wrap .form-submit {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal .form-wrap .form-submit>* {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin: 5px;
                padding: 5px 15px;
                border-radius: 5px;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal .form-wrap .form-submit .btn-cancel {
                background: #6c757d;
            }

            .jobs-posting-modal .form-wrap .form-submit .btn-prevew {
                background: #24ebc8;
            }

            .jobs-posting-modal .form-wrap .form-submit .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .jobs-posting-modal .list-collapse {
                margin-top: 20px;
            }

            .jobs-posting-modal .list-collapse .title {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 8px 30px;
                padding-right: 15px;
                background: #f1f8fe;
                color: #172642;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
                cursor: pointer;
            }

            .jobs-posting-modal .list-collapse .title em {
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 30px;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal .list-collapse .title.active em {
                -webkit-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            .jobs-posting-modal .list-collapse .content {
                display: none;
                padding: 30px;
            }

            .jobs-posting-modal .list-collapse .content>* {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal .list-collapse .content *+* {
                margin-top: 15px;
            }

            .jobs-posting-modal .list-collapse .content ul li {
                position: relative;
                padding-left: 20px;
            }

            .jobs-posting-modal .list-collapse .content ul li+li {
                margin-top: 3px;
            }

            .jobs-posting-modal .list-collapse .content ul li::before {
                position: absolute;
                top: 7px;
                left: 0;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                background: #cccccc;
                content: "";
            }

            .jobs-posting-modal .list-collapse li+li {
                margin-top: 20px;
            }

            .jobs-posting-modal .main-maps {
                display: block;
                position: relative;
                margin-top: 20px;
                padding-top: 47.0588235294%;
            }

            .jobs-posting-modal .main-maps img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .jobs-posting-modal .main-maps iframe {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal .main-maps {
                    padding-top: 40%;
                }
            }

            @media (max-width:1366px) {
                .jobs-posting-modal .main-maps {
                    padding-top: 30%;
                }
            }

            .jobs-posting-modal .mt-20 {
                margin-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-2-modal,
            .jobs-posting-modal.jobs-posting-12-modal {
                width: 490px;
                max-width: 100%;
                padding: 30px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-2-modal .modal-body,
            .jobs-posting-modal.jobs-posting-12-modal .modal-body {
                padding: 0;
                padding-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio,
            .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group,
            .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 40px;
            }

            .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group:last-child,
            .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group:last-child {
                margin-right: 0;
            }

            .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group label,
            .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group label {
                width: 100%;
                padding-left: 10px;
                font-size: 14.5px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-2-modal .modal-body .form-radio .group input,
            .jobs-posting-modal.jobs-posting-12-modal .modal-body .form-radio .group input {
                width: 16px;
            }

            @media (min-width:1200px) {
                .jobs-posting-modal.jobs-posting-2-modal,
                .jobs-posting-modal.jobs-posting-12-modal {
                    padding-bottom: 40px;
                }
                .jobs-posting-modal.jobs-posting-2-modal .form-wrap .form-group.form-radio .group+.group,
                .jobs-posting-modal.jobs-posting-12-modal .form-wrap .form-group.form-radio .group+.group {
                    margin-top: 0;
                }
            }

            .jobs-posting-modal.jobs-posting-14-modal {
                width: 490px;
                max-width: 100%;
                padding: 30px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-14-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body {
                padding: 0;
                padding-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body p {
                color: #5d677a;
                font-size: 16px;
                font-weight: 500;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-group+.form-group {
                margin-top: 15px;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-group .noted {
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                margin-top: 5px;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 40px;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group:last-child {
                margin-right: 0;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group label {
                width: 100%;
                padding-left: 10px;
                font-size: 14.5px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-radio .group input {
                width: 16px;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .note-alerts {
                margin-top: 15px;
                color: #182642;
                font-size: 12px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .note-alerts a {
                color: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-14-modal .modal-body .form-submit {
                margin-top: 25px;
            }

            @media (min-width:1200px) {
                .jobs-posting-modal.jobs-posting-14-modal {
                    padding-bottom: 40px;
                }
            }

            .jobs-posting-modal.jobs-posting-3-modal {
                width: 450px;
                max-width: 100%;
            }

            .jobs-posting-modal.jobs-posting-3-modal .fancybox-close-small {
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-head {
                padding: 15px;
                background: #24ebc8;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-head img {
                height: 70px;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-body {
                padding-top: 20px;
                border: 1px solid #e0e0e0;
                border-top: none;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-body .title {
                margin-bottom: 10px;
                color: #172642;
                font-size: 18px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-body p {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-body .line {
                margin-top: 25px;
                margin-bottom: 25px;
                border-top: 1px solid #e5e5e5;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-body .button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-body .button a {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 90px;
                height: 30px;
                padding: 5px 15px;
                border: 1px solid #2f4ba0;
                border-radius: 5px;
                background: #2f4ba0;
                color: #ffffff;
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal.jobs-posting-3-modal .modal-body .button a:hover {
                background: #ffffff;
                color: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-4-modal,
            .jobs-posting-modal.jobs-posting-6-modal {
                width: 930px;
                max-width: 100%;
                padding: 20px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-4-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-6-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-4-modal .modal-head,
            .jobs-posting-modal.jobs-posting-6-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-4-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-6-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-4-modal .modal-body,
            .jobs-posting-modal.jobs-posting-6-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-4-modal .modal-body .link a,
            .jobs-posting-modal.jobs-posting-6-modal .modal-body .link a {
                color: #2f4ba0;
                font-size: 18px;
                font-weight: 700;
                text-decoration: underline;
            }

            .jobs-posting-modal.jobs-posting-5-modal {
                width: 930px;
                max-width: 100%;
                padding: 20px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-5-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content>* {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content *+* {
                margin-top: 15px;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content ul li {
                position: relative;
                padding-left: 20px;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content ul li+li {
                margin-top: 3px;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .full-content ul li::before {
                position: absolute;
                top: 7px;
                left: 0;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                background: #cccccc;
                content: "";
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table {
                margin-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table {
                width: 100%;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tr {
                border: 1px solid #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead {
                background: #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead th {
                padding: 9px 15px;
                color: #172642;
                font-size: 14.5px;
                font-weight: 700;
                text-align: center;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead th:first-child {
                text-align: left;
            }

            @media (min-width:1024px) {
                .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table thead th {
                    padding-left: 35px;
                }
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td {
                padding: 7.5px 15px;
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td:first-child {
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td em {
                font-weight: normal;
            }

            @media (min-width:1024px) {
                .jobs-posting-modal.jobs-posting-5-modal .modal-body .table table tbody td {
                    padding-left: 35px;
                }
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table .name {
                margin: 0;
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
                text-transform: none;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table .title {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .jobs-posting-modal.jobs-posting-5-modal .modal-body .table em {
                color: #2f4ba0;
                font-size: 18px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-7-modal {
                width: 930px;
                max-width: 100%;
                padding: 20px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-7-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-7-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-7-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-7-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-7-modal .modal-body .form-group {
                margin-top: 10px;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li {
                margin-top: 30px;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .step p {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 110px;
                height: 50px;
                padding: 5px 15px;
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                color: #2f4ba0;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .success {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .success .icon {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step .success p {
                margin-top: 5px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            @media (min-width:1024px) {
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: flex-start;
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step {
                    position: relative;
                    width: 160px;
                    min-width: 160px;
                    margin-right: 25px;
                    padding-left: 30px;
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step::before {
                    position: absolute;
                    top: 0;
                    left: 6.5px;
                    width: 2px;
                    height: calc(100% + 30px);
                    background: rgba(0, 125, 178, 0.4);
                    content: "";
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step .dot {
                    z-index: 11;
                    position: absolute;
                    top: 15px;
                    left: 0;
                    width: 15px;
                    height: 15px;
                    border-radius: 50%;
                    background: #2f4ba0;
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step .dot::before {
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    z-index: 0;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: calc(100% + 6px);
                    height: calc(100% + 6px);
                    transform: translate(-50%, -50%);
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.5);
                    content: "";
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .step .dot::after {
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    z-index: 1;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 100%;
                    height: 100%;
                    transform: translate(-50%, -50%);
                    border-radius: 50%;
                    background: #2f4ba0;
                    content: "";
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .form-group {
                    margin: 0;
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .form-group.form-multiple-select {
                    width: 330px;
                    min-width: 330px;
                    margin-right: 30px;
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li .form-group.form-multiple-select select {
                    height: auto;
                    min-height: 100px;
                    max-height: 190px;
                }
                .jobs-posting-modal.jobs-posting-7-modal .list-step-by-step li:last-child .step::before {
                    height: 100%;
                }
            }

            .jobs-posting-modal.jobs-posting-8-modal {
                width: 930px;
                max-width: 100%;
                padding: 20px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-8-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-8-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-8-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-8-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-8-modal .modal-body .form-group {
                margin-top: 10px;
            }

            .jobs-posting-modal.jobs-posting-8-modal .modal-body .btn-add-location {
                background: none;
                color: #2f4ba0;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-8-modal .modal-body .btn-add-location:hover {
                text-decoration: underline;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-8-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-8-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            .jobs-posting-modal.jobs-posting-9-modal {
                width: 490px;
                max-width: 100%;
                padding: 20px 40px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-9-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-9-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-9-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-9-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-9-modal .modal-body .form-group {
                margin-top: 10px;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-9-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-9-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-9-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-10-modal,
            .jobs-posting-modal.jobs-posting-16-modal,
            .jobs-posting-modal.jobs-posting-24-modal,
            .jobs-posting-modal.jobs-posting-25-modal {
                width: 530px;
                max-width: 100%;
                padding: 20px 40px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-10-modal .row,
            .jobs-posting-modal.jobs-posting-16-modal .row,
            .jobs-posting-modal.jobs-posting-24-modal .row,
            .jobs-posting-modal.jobs-posting-25-modal .row {
                margin-bottom: 0;
            }

            .jobs-posting-modal.jobs-posting-10-modal .row>*,
            .jobs-posting-modal.jobs-posting-16-modal .row>*,
            .jobs-posting-modal.jobs-posting-24-modal .row>*,
            .jobs-posting-modal.jobs-posting-25-modal .row>* {
                margin-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-10-modal p,
            .jobs-posting-modal.jobs-posting-16-modal p,
            .jobs-posting-modal.jobs-posting-24-modal p,
            .jobs-posting-modal.jobs-posting-25-modal p {
                color: #182642;
            }

            .jobs-posting-modal.jobs-posting-10-modal .d-flex,
            .jobs-posting-modal.jobs-posting-16-modal .d-flex,
            .jobs-posting-modal.jobs-posting-24-modal .d-flex,
            .jobs-posting-modal.jobs-posting-25-modal .d-flex {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-10-modal .d-flex p,
            .jobs-posting-modal.jobs-posting-16-modal .d-flex p,
            .jobs-posting-modal.jobs-posting-24-modal .d-flex p,
            .jobs-posting-modal.jobs-posting-25-modal .d-flex p {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                margin-right: 5px;
                color: #5d677a;
                font-size: 16px;
            }

            .jobs-posting-modal.jobs-posting-10-modal .d-flex select,
            .jobs-posting-modal.jobs-posting-16-modal .d-flex select,
            .jobs-posting-modal.jobs-posting-24-modal .d-flex select,
            .jobs-posting-modal.jobs-posting-25-modal .d-flex select {
                width: 200px;
            }

            .jobs-posting-modal.jobs-posting-10-modal .d-flex a,
            .jobs-posting-modal.jobs-posting-16-modal .d-flex a,
            .jobs-posting-modal.jobs-posting-24-modal .d-flex a,
            .jobs-posting-modal.jobs-posting-25-modal .d-flex a {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: flex-end;
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .jobs-posting-modal.jobs-posting-10-modal .d-flex a:hover,
            .jobs-posting-modal.jobs-posting-16-modal .d-flex a:hover,
            .jobs-posting-modal.jobs-posting-24-modal .d-flex a:hover,
            .jobs-posting-modal.jobs-posting-25-modal .d-flex a:hover {
                text-decoration: underline;
            }

            .jobs-posting-modal.jobs-posting-10-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-16-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-24-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-25-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-10-modal .modal-head,
            .jobs-posting-modal.jobs-posting-16-modal .modal-head,
            .jobs-posting-modal.jobs-posting-24-modal .modal-head,
            .jobs-posting-modal.jobs-posting-25-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-10-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-16-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-24-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-25-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-10-modal .modal-body,
            .jobs-posting-modal.jobs-posting-16-modal .modal-body,
            .jobs-posting-modal.jobs-posting-24-modal .modal-body,
            .jobs-posting-modal.jobs-posting-25-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-10-modal .modal-body .form-group,
            .jobs-posting-modal.jobs-posting-16-modal .modal-body .form-group,
            .jobs-posting-modal.jobs-posting-24-modal .modal-body .form-group,
            .jobs-posting-modal.jobs-posting-25-modal .modal-body .form-group {
                margin-top: 10px;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-10-modal,
                .jobs-posting-modal.jobs-posting-16-modal,
                .jobs-posting-modal.jobs-posting-24-modal,
                .jobs-posting-modal.jobs-posting-25-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-10-modal .modal-body,
                .jobs-posting-modal.jobs-posting-16-modal .modal-body,
                .jobs-posting-modal.jobs-posting-24-modal .modal-body,
                .jobs-posting-modal.jobs-posting-25-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-10-modal,
                .jobs-posting-modal.jobs-posting-16-modal,
                .jobs-posting-modal.jobs-posting-24-modal,
                .jobs-posting-modal.jobs-posting-25-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-11-modal {
                width: 530px;
                max-width: 100%;
                padding: 20px 40px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-11-modal .row {
                margin-bottom: 0;
            }

            .jobs-posting-modal.jobs-posting-11-modal .row>* {
                margin-bottom: 15px;
            }

            .jobs-posting-modal.jobs-posting-11-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group {
                margin-top: 10px;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group textarea {
                min-height: 50px;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio input {
                width: 20px;
                height: 20px;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio .group {
                width: calc(100% - 20px);
                padding-left: 20px;
            }

            .jobs-posting-modal.jobs-posting-11-modal .modal-body .form-group.form-radio .group input {
                width: 100%;
                height: 40px;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-11-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-11-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-11-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-13-modal {
                width: 930px;
                max-width: 100%;
                padding: 30px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-13-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body {
                padding: 0;
                padding-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 100%;
                justify-content: center;
                width: 100%;
                max-width: 100%;
                margin-right: 40px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group+.group {
                margin-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group:last-child {
                margin-right: 0;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group label {
                width: 100%;
                padding-left: 0;
                color: #5d677a;
                font-size: 14.5px;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group input {
                width: 16px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .left {
                width: 16px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right {
                width: calc( 100% - 16px);
                padding-left: 10px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right input {
                width: 100%;
                height: 40px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right span {
                display: block;
                width: 100%;
                margin-top: 5px;
                color: red;
                font-size: 12px;
                font-style: italic;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right .form-checkbox {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                margin-top: 12px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right .form-checkbox input {
                width: 15px;
                height: 15px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group .right .form-checkbox label {
                padding-left: 10px;
                color: #5d677a;
                font-size: 16px;
                font-weight: 500;
            }

            @media (min-width:768px) {
                .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                    margin: 0;
                    margin-top: 0;
                }
            }

            @media (min-width:1024px) {
                .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group {
                    max-width: 380px;
                }
            }

            @media (min-width:1024px) {
                .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio {
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    -webkit-box-align: start;
                    -ms-flex-align: start;
                    align-items: flex-start;
                    justify-content: space-between;
                    margin-top: 20px;
                }
                .jobs-posting-modal.jobs-posting-13-modal .modal-body .form-radio .group+.group {
                    margin-top: 0;
                }
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table {
                margin-top: 15px;
                overflow-x: auto;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table p {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table p span {
                color: #2f4ba0;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table {
                width: 100%;
                min-width: 800px;
                margin-top: 15px;
                border: 1px solid #ededed;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table thead {
                background: #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table thead th {
                padding: 10px 15px;
                color: #172642;
                font-size: 14.5px;
                font-weight: 700;
                text-align: center;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody td {
                padding: 10px 15px;
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody .td-input-checkbox {
                padding: 10px 5px;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody tr {
                border-bottom: 1px solid #ededed;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody p {
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .table table tbody .folder {
                color: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-13-modal .modal-body .btn-delete {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                max-width: 140px;
                height: 40px;
                margin-top: 30px;
                margin-right: auto;
                margin-left: auto;
                padding: 5px 15px;
                border-radius: 5px;
                background: #6c757d;
                color: #ffffff;
                font-size: 15px;
                font-weight: 500;
                text-align: center;
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-13-modal {
                    height: 98vh;
                    max-height: 98vh;
                    overflow-y: auto;
                }
            }

            .jobs-posting-modal.jobs-posting-15-modal {
                width: 700px;
                max-width: 100%;
                padding: 20px 40px;
                border: 1px solid #e0e0e0;
            }

            .jobs-posting-modal.jobs-posting-15-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head {
                padding-bottom: 20px;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .jobs-waiting-title,
            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .status {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .jobs-waiting-title span,
            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .status span {
                color: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status>* {
                padding-right: 10px;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 10px;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li p {
                padding-right: 10px;
                border-right: 1px solid #000;
                color: #172642;
                font-size: 16px;
                font-weight: 500;
                line-height: 1;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li p span {
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li:last-child p {
                border: none;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .status {
                padding-right: 0;
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date {
                    -ms-flex-wrap: wrap;
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    flex-wrap: wrap;
                    justify-content: flex-start;
                    padding-right: 0;
                }
                .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                    width: 100%;
                    line-height: 1.5;
                }
                .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .head .date-and-status .date li p {
                    border: none;
                    line-height: 1.5;
                }
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .body {
                padding: 20px 0;
                border-top: 1px solid #efefef;
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li {
                -webkit-box-align: start;
                -ms-flex-align: start;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: flex-start;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li+li {
                margin-top: 5px;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li .name {
                width: 180px;
                min-width: 180px;
                margin-top: 0;
                padding-right: 10px;
                color: #182642;
                font-size: 16px;
                font-weight: 700;
                text-transform: none;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li p {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li p.blue {
                color: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li p.blue a {
                color: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .list-info-posting li a:hover {
                text-decoration: underline;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .foot {
                padding-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-preview .foot .noted {
                color: red;
                font-size: 14.5px;
                font-style: italic;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                margin-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit>* {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin: 5px;
                padding: 5px 15px;
                border-radius: 5px;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit .btn-cancel {
                background: #6c757d;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit .btn-prevew {
                background: #24ebc8;
            }

            .jobs-posting-modal.jobs-posting-15-modal .modal-body .form-group.form-submit .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .jobs-posting-modal.jobs-posting-16-modal .form-wrap .form-group textarea {
                min-height: 150px;
            }

            .jobs-posting-modal.jobs-posting-17-modal {
                width: 530px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-17-modal p {
                color: #182642;
            }

            .jobs-posting-modal.jobs-posting-17-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-body .title {
                padding-bottom: 15px;
                border-bottom: 1px solid #efefef;
                font-size: 16px;
                font-weight: 700;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-body .full-content {
                padding-top: 15px;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-body .form-submit {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .jobs-posting-modal.jobs-posting-17-modal .modal-body .form-submit .btn-cancel {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin-top: 20px;
                padding: 5px 15px;
                border-radius: 5px;
                background: #6c757d;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-17-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-17-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-17-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-18-modal {
                width: 490px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-18-modal p {
                color: #182642;
            }

            .jobs-posting-modal.jobs-posting-18-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-18-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-18-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-18-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
            }

            .jobs-posting-modal.jobs-posting-18-modal .modal-body .des {
                padding: 0 15px;
            }

            .jobs-posting-modal.jobs-posting-18-modal .modal-body .button .btn-cancel {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin: 5px 10px;
                padding: 5px 15px;
                border-radius: 5px;
                background: #6c757d;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal.jobs-posting-18-modal .modal-body .button .btn-save {
                height: 40px;
                margin: 5px 10px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-18-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-18-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-18-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-19-modal,
            .jobs-posting-modal.jobs-posting-20-modal {
                width: 700px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-19-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-20-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-head,
            .jobs-posting-modal.jobs-posting-20-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-20-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .content,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .content {
                color: #182642;
                font-size: 16px;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .content ul li,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .content ul li {
                position: relative;
                padding-left: 20px;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .content ul li::before,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .content ul li::before {
                position: absolute;
                top: 7px;
                left: 0;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                background: #cccccc;
                content: "";
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .table,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .table {
                margin-top: 20px;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table {
                width: 100%;
                border: 1px solid #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table thead,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table thead {
                background: #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table thead th,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table thead th {
                padding: 10px 15px;
                color: #172642;
                font-size: 14.5px;
                font-weight: 700;
                text-align: center;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table tbody tr,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table tbody tr {
                border-bottom: 1px solid #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table tbody td,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table tbody td {
                padding: 10px;
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .table table tbody td span,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .table table tbody td span {
                color: #2f4ba0;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .button,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .button .btn-gradient,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .button .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .jobs-posting-modal.jobs-posting-19-modal .modal-body .button .btn-gradient em,
            .jobs-posting-modal.jobs-posting-20-modal .modal-body .button .btn-gradient em {
                font-size: 18px;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-19-modal,
                .jobs-posting-modal.jobs-posting-20-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-19-modal .modal-body,
                .jobs-posting-modal.jobs-posting-20-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-19-modal,
                .jobs-posting-modal.jobs-posting-20-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-21-modal {
                width: 930px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-21-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .content {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .content span {
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table {
                margin-top: 15px;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table {
                width: 100%;
                border: 1px solid #e5e5e5;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table thead {
                background: #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table thead th {
                padding: 9px 0;
                color: #172642;
                font-size: 14.5px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table thead th:first-child {
                width: 45px;
                padding: 10px;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table tbody tr {
                border-bottom: 1px solid #e5e5e5;
                background: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table tbody td {
                padding: 10px 0;
                color: #333333;
                font-size: 14.5px;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table tbody td:first-child {
                padding: 10px;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-21-modal .modal-body .table table tbody td {
                    font-size: 14.5px;
                }
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .button>* {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin: 5px;
                padding: 5px 15px;
                border-radius: 5px;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .button .btn-cancel {
                background: #6c757d;
            }

            .jobs-posting-modal.jobs-posting-21-modal .modal-body .button .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-21-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-21-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-21-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-22-modal {
                width: 750px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-22-modal p {
                color: #182642;
            }

            .jobs-posting-modal.jobs-posting-22-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-body .title {
                padding-bottom: 15px;
                border-bottom: 1px solid #efefef;
                font-size: 16px;
                font-weight: 700;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-body .title strong {
                display: inline-block;
                min-width: 140px;
                padding-right: 10px;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-body .title span {
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-body .full-content {
                padding-top: 15px;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-body .form-submit {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-22-modal .modal-body .form-submit .btn-gradient {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin-top: 20px;
                padding: 5px 15px;
                border-radius: 5px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-22-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-22-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-22-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-23-modal {
                width: 750px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-23-modal p {
                color: #182642;
            }

            .jobs-posting-modal.jobs-posting-23-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-body .title {
                padding-bottom: 15px;
                border-bottom: 1px solid #efefef;
                font-size: 16px;
                font-weight: 700;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-body .title strong {
                display: inline-block;
                min-width: 140px;
                padding-right: 10px;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-body .title span {
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-body .full-content {
                padding-top: 15px;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-body .form-submit {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-23-modal .modal-body .form-submit .btn-gradient {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin-top: 20px;
                padding: 5px 15px;
                border-radius: 5px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-23-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-23-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-23-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-24-modal .form-wrap .form-group textarea,
            .jobs-posting-modal.jobs-posting-25-modal .form-wrap .form-group textarea {
                color: #182642;
                font-size: 15px;
            }

            .jobs-posting-modal.jobs-posting-25-modal .form-wrap .form-group textarea {
                min-height: 200px;
            }

            .jobs-posting-modal.jobs-posting-26-modal,
            .jobs-posting-modal.jobs-posting-27-modal,
            .jobs-posting-modal.jobs-posting-31-modal {
                width: 530px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-26-modal p,
            .jobs-posting-modal.jobs-posting-27-modal p,
            .jobs-posting-modal.jobs-posting-31-modal p {
                color: #182642;
            }

            .jobs-posting-modal.jobs-posting-26-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-27-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-31-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-26-modal .modal-head,
            .jobs-posting-modal.jobs-posting-27-modal .modal-head,
            .jobs-posting-modal.jobs-posting-31-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-26-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-27-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-31-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-26-modal .modal-body,
            .jobs-posting-modal.jobs-posting-27-modal .modal-body,
            .jobs-posting-modal.jobs-posting-31-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-26-modal .modal-body .row,
            .jobs-posting-modal.jobs-posting-27-modal .modal-body .row,
            .jobs-posting-modal.jobs-posting-31-modal .modal-body .row {
                margin-bottom: -20px;
            }

            .jobs-posting-modal.jobs-posting-26-modal .modal-body .row>*,
            .jobs-posting-modal.jobs-posting-27-modal .modal-body .row>*,
            .jobs-posting-modal.jobs-posting-31-modal .modal-body .row>* {
                margin-bottom: 20px;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label {
                position: relative;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label label,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label label,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label label {
                -webkit-transition: 0.5s;
                -o-transition: 0.5s;
                position: absolute;
                top: 7px;
                left: 0;
                color: #999999;
                pointer-events: none;
                transition: 0.5s;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label input,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label input,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label input {
                height: 40px;
                color: #172642;
                font-weight: 700;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label input:focus~label,
            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label input:not([value=""])~label,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label input:focus~label,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label input:not([value=""])~label,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label input:focus~label,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label input:not([value=""])~label {
                top: -15px;
                left: 0;
                font-size: 14.5px;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label input:focus~label span,
            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label input:not([value=""])~label span,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label input:focus~label span,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label input:not([value=""])~label span,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label input:focus~label span,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label input:not([value=""])~label span {
                font-size: 10px;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-input-label .noted,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-input-label .noted,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-input-label .noted {
                color: #999999;
                font-size: 14.5px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-checkbox,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-checkbox,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-checkbox {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-checkbox input,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-checkbox input,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-checkbox input {
                width: 15px;
                min-width: 15px;
                height: 15px;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-checkbox label,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-checkbox label,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-checkbox label {
                padding-left: 15px;
                cursor: pointer;
            }

            .jobs-posting-modal.jobs-posting-26-modal .form-group.form-submit,
            .jobs-posting-modal.jobs-posting-27-modal .form-group.form-submit,
            .jobs-posting-modal.jobs-posting-31-modal .form-group.form-submit {
                margin-top: 15px;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-26-modal,
                .jobs-posting-modal.jobs-posting-27-modal,
                .jobs-posting-modal.jobs-posting-31-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-26-modal .modal-body,
                .jobs-posting-modal.jobs-posting-27-modal .modal-body,
                .jobs-posting-modal.jobs-posting-31-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-26-modal,
                .jobs-posting-modal.jobs-posting-27-modal,
                .jobs-posting-modal.jobs-posting-31-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-alerts-modal {
                width: 700px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-alerts-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-alerts-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-alerts-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-alerts-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-alerts-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-alerts-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-alerts-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-alerts-1-modal {
                max-width: 490px;
            }

            .jobs-posting-modal.jobs-posting-alerts-1-modal .modal-body .content {
                color: #182642;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-alerts-1-modal .modal-body .button .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .jobs-posting-modal.jobs-posting-alerts-2-modal {
                max-width: 490px;
            }

            .jobs-posting-modal.jobs-posting-alerts-2-modal .modal-body .content {
                color: #182642;
                text-align: center;
            }

            .jobs-posting-modal.jobs-posting-alerts-2-modal .modal-body .button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-alerts-2-modal .modal-body .button>* {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin: 5px;
                padding: 5px 15px;
                border-radius: 5px;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal.jobs-posting-alerts-2-modal .modal-body .button .btn-cancel {
                background: #6c757d;
            }

            .jobs-posting-modal.jobs-posting-alerts-2-modal .modal-body .button .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .jobs-posting-modal.jobs-posting-28-modal {
                width: 930px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-28-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .content {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .content span {
                color: #2f4ba0;
                font-size: 14.5px;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table {
                margin-top: 15px;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table {
                width: 100%;
                border: 1px solid #e5e5e5;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table thead {
                background: #e6e6e6;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table thead th {
                padding: 9px 0;
                color: #172642;
                font-size: 14.5px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table thead th:first-child {
                width: 55px;
                padding: 10px;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table tbody tr {
                border-bottom: 1px solid #e5e5e5;
                background: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table tbody td {
                padding: 10px 0;
                color: #333333;
                font-size: 14.5px;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table tbody td:first-child {
                padding: 10px;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-28-modal .modal-body .table table tbody td {
                    font-size: 14.5px;
                }
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .button>* {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.2s ease-in-out all;
                -o-transition: 0.2s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                height: 40px;
                margin: 5px;
                padding: 5px 15px;
                border-radius: 5px;
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease-in-out all;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .button .btn-cancel {
                background: #6c757d;
            }

            .jobs-posting-modal.jobs-posting-28-modal .modal-body .button .btn-gradient {
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-28-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-28-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-28-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-29-modal,
            .jobs-posting-modal.jobs-posting-30-modal {
                width: 580px;
                max-width: 100%;
                padding: 20px 40px;
            }

            .jobs-posting-modal.jobs-posting-29-modal .fancybox-close-small,
            .jobs-posting-modal.jobs-posting-30-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-29-modal .modal-head,
            .jobs-posting-modal.jobs-posting-30-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-29-modal .modal-head .title,
            .jobs-posting-modal.jobs-posting-30-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-29-modal .modal-body,
            .jobs-posting-modal.jobs-posting-30-modal .modal-body {
                padding: 20px 0;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-29-modal .modal-body .content .image img,
            .jobs-posting-modal.jobs-posting-30-modal .modal-body .content .image img {
                max-width: 100%;
                max-height: 100%;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-29-modal,
                .jobs-posting-modal.jobs-posting-30-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-29-modal .modal-body,
                .jobs-posting-modal.jobs-posting-30-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-29-modal,
                .jobs-posting-modal.jobs-posting-30-modal {
                    padding: 20px;
                }
            }

            .jobs-posting-modal.jobs-posting-32-modal {
                width: 930px;
                max-width: 100%;
                padding: 20px 40px;
                padding-bottom: 50px;
            }

            .jobs-posting-modal.jobs-posting-32-modal p {
                color: #182642;
            }

            .jobs-posting-modal.jobs-posting-32-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .jobs-posting-modal.jobs-posting-32-modal .modal-head {
                border-bottom: 1px solid #efefef;
            }

            .jobs-posting-modal.jobs-posting-32-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .jobs-posting-modal.jobs-posting-32-modal .modal-body {
                padding: 20px 0;
                padding-bottom: 0px;
                text-align: left;
            }

            .jobs-posting-modal.jobs-posting-32-modal .modal-body .row {
                margin-bottom: -20px;
            }

            .jobs-posting-modal.jobs-posting-32-modal .modal-body .row>* {
                margin-bottom: 20px;
            }

            .jobs-posting-modal.jobs-posting-32-modal .modal-body .content .image {
                display: block;
                position: relative;
                margin-top: 25px;
                padding-top: 58.8235294118%;
                overflow: hidden;
                border: 1px solid #eeeeee;
            }

            .jobs-posting-modal.jobs-posting-32-modal .modal-body .content .image iframe {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            @media (max-width:1440px) {
                .jobs-posting-modal.jobs-posting-32-modal {
                    padding-bottom: 15px;
                }
                .jobs-posting-modal.jobs-posting-32-modal .modal-body {
                    padding-top: 10px;
                    padding-bottom: 0;
                }
            }

            @media (max-width:576px) {
                .jobs-posting-modal.jobs-posting-32-modal {
                    padding: 20px;
                }
            }

            .flip-view-modal {
                width: 1230px;
                max-width: 100%;
                padding: 0;
                background: none;
            }

            @media (min-width:1280px) {
                .flip-view-modal .box-flip-view {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                }
            }

            .flip-view-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            @media (min-width:1280px) {
                .flip-view-modal .fancybox-close-small {
                    right: 175px;
                }
            }

            .flip-view-modal .flip-view-modal-left {
                width: 100%;
                max-height: 98vh;
                padding: 15px;
                overflow-y: auto;
                background: #ffffff;
            }

            @media (min-width:768px) {
                .flip-view-modal .flip-view-modal-left {
                    padding: 20px;
                }
            }

            @media (min-width:1024px) {
                .flip-view-modal .flip-view-modal-left {
                    padding: 25px 30px;
                }
            }

            @media (min-width:1280px) {
                .flip-view-modal .flip-view-modal-left {
                    min-width: 1055px;
                    max-width: 1055px;
                    padding: 25px 40px;
                }
                .flip-view-modal .flip-view-modal-left::-webkit-scrollbar {
                    width: 6px;
                }
                .flip-view-modal .flip-view-modal-left::-webkit-scrollbar-track {
                    background: #f5f5f5;
                }
                .flip-view-modal .flip-view-modal-left::-webkit-scrollbar-thumb {
                    background: #5d677a;
                }
            }

            .flip-view-modal .modal-head {
                border-bottom: 2px solid #efefef;
            }

            .flip-view-modal .modal-head .title {
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .flip-view-modal .modal-head .sub-title {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 700;
            }

            .flip-view-modal .view-info {
                display: none;
            }

            .flip-view-modal .view-info .info-list {
                margin-top: 20px;
            }

            .flip-view-modal .view-info .info-list li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .flip-view-modal .view-info .info-list li p {
                color: #182642;
                font-size: 16px;
            }

            .flip-view-modal .view-info .info-list li p:first-child {
                width: 160px;
                min-width: 160px;
                padding-right: 10px;
            }

            .flip-view-modal .view-info .info-list li .name {
                color: #2f4ba0;
            }

            @media (min-width:1024px) {
                .flip-view-modal .view-info .info-list {
                    margin-top: 25px;
                }
            }

            .flip-view-modal .view-info .doc-success {
                margin-top: 10px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .flip-view-modal .view-info .doc-success em {
                padding-right: 5px;
                color: #24ebc8;
                font-size: 20px;
                line-height: 1;
            }

            .flip-view-modal .view-info .form-wrap {
                -webkit-box-align: end;
                -ms-flex-align: end;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: flex-end;
                max-width: 555px;
                margin-top: 10px;
            }

            .flip-view-modal .view-info .form-wrap .form-group label {
                width: 100%;
                margin-bottom: 3px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .flip-view-modal .view-info .form-wrap .form-group input {
                width: 100%;
                height: 40px;
                border: none;
                border-bottom: 1px solid #e5e5e5;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .flip-view-modal .view-info .form-wrap .form-group input::-webkit-input-placeholder {
                color: #999999;
            }

            .flip-view-modal .view-info .form-wrap .form-group input::-moz-placeholder {
                color: #999999;
            }

            .flip-view-modal .view-info .form-wrap .form-group input:-ms-input-placeholder {
                color: #999999;
            }

            .flip-view-modal .view-info .form-wrap .form-group input::-ms-input-placeholder {
                color: #999999;
            }

            .flip-view-modal .view-info .form-wrap .form-group input::placeholder {
                color: #999999;
            }

            .flip-view-modal .view-info .form-wrap .form-text {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc( 100% - 140px);
                flex: 0 0 calc( 100% - 140px);
                width: 100%;
                max-width: calc( 100% - 140px);
                padding-right: 10px;
            }

            .flip-view-modal .view-info .form-wrap .form-submit {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 140px;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 140px;
                align-items: center;
                justify-content: center;
                width: 100%;
                max-width: 140px;
                height: 100%;
            }

            .flip-view-modal .view-info .form-wrap .form-submit .btn-submit {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 40px;
                padding: 5px 15px;
                border-radius: 5px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                color: #ffffff;
                font-size: 15px;
                font-weight: 500;
                text-align: center;
            }

            .flip-view-modal .flip-view-head {
                padding-top: 20px;
            }

            .flip-view-modal .flip-view-head .name {
                color: #172642;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .flip-view-modal .flip-view-head .name .viewd {
                padding-left: 15px;
                color: #666666;
                font-size: 12px;
                font-weight: 500;
                text-transform: none;
            }

            .flip-view-modal .flip-view-head .name .viewd em {
                padding-right: 5px;
                color: #2f4ba0;
                font-size: 16px;
            }

            .flip-view-modal .flip-view-head .title {
                color: #172642;
                font-size: 14.5px;
                font-weight: 700;
            }

            .flip-view-modal .flip-view-head .title span {
                color: #2f4ba0;
            }

            .flip-view-modal .title-flip {
                margin-top: 15px;
                padding: 8px 20px;
                background: #f1f9ff;
                color: #172642;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .flip-view-modal .flip-view-body .info-left .image {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 120px;
                height: 160px;
                margin-top: 20px;
                margin-right: auto;
                margin-left: auto;
                overflow: hidden;
            }

            .flip-view-modal .flip-view-body .info-left .image img {
                -o-object-fit: cover;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .flip-view-modal .flip-view-body .info-left .info-list {
                margin-top: 20px;
            }

            .flip-view-modal .flip-view-body .info-left .info-list li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .flip-view-modal .flip-view-body .info-left .info-list li p {
                color: #182642;
                font-size: 16px;
            }

            .flip-view-modal .flip-view-body .info-left .info-list li p:first-child {
                width: 160px;
                min-width: 160px;
                padding-right: 10px;
            }

            .flip-view-modal .flip-view-body .info-left .info-list li .name {
                color: #2f4ba0;
            }

            @media (min-width:1024px) {
                .flip-view-modal .flip-view-body .info-left {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                }
                .flip-view-modal .flip-view-body .info-left .image,
                .flip-view-modal .flip-view-body .info-left .info-list {
                    margin-top: 25px;
                }
                .flip-view-modal .flip-view-body .info-left .image {
                    margin-right: 40px;
                    margin-left: 0;
                }
            }

            .flip-view-modal .flip-view-body .info-right {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                padding: 15px;
                background: #f1f9ff;
            }

            .flip-view-modal .flip-view-body .info-right .image,
            .flip-view-modal .flip-view-body .info-right .caption {
                margin-top: 20px;
            }

            .flip-view-modal .flip-view-body .info-right .image {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 80px;
                min-width: 80px;
            }

            .flip-view-modal .flip-view-body .info-right .caption {
                width: calc( 100% - 80px);
                padding-left: 10px;
            }

            .flip-view-modal .flip-view-body .info-right .caption .point {
                color: #333333;
                font-size: 16px;
                font-weight: 500;
            }

            .flip-view-modal .flip-view-body .info-right .caption .point span {
                color: #2f4ba0;
                font-size: 16px;
                font-weight: 700;
            }

            .flip-view-modal .flip-view-body .info-right .caption .btn-contact {
                display: inline-block;
                width: 100%;
                min-height: 36px;
                margin-top: 10px;
                padding: 5px 10px;
                border-radius: 4px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#1e9bd3), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0, #1e9bd3, #2f4ba0);
                background-image: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
                color: #ffffff;
                font-size: 16px;
                font-weight: 500;
                text-align: center;
            }

            .flip-view-modal .flip-view-body .info-right .caption .noted {
                margin-top: 10px;
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
                line-height: 1.3;
            }

            .flip-view-modal .flip-view-body .info-right.active {
                display: none;
            }

            @media (min-width:768px) {
                .flip-view-modal .flip-view-body .info-right {
                    padding: 20px;
                }
                .flip-view-modal .flip-view-body .info-right .caption {
                    padding-left: 20px;
                }
                .flip-view-modal .flip-view-body .info-right .caption .btn-contact {
                    padding: 5px 15px;
                }
            }

            @media (min-width:1024px) {
                .flip-view-modal .flip-view-body .info-right {
                    padding: 25px;
                }
                .flip-view-modal .flip-view-body .info-right .caption {
                    padding-left: 30px;
                }
            }

            .flip-view-modal .job-information {
                margin-top: 15px;
                padding: 0 15px;
            }

            .flip-view-modal .job-information .information-list li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .flip-view-modal .job-information .information-list li p {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .flip-view-modal .job-information .information-list li p:first-child {
                width: 150px;
                min-width: 150px;
                padding-right: 5px;
            }

            .flip-view-modal .job-information .information-list li p:last-child {
                width: calc(100% - 150px);
            }

            @media (min-width:768px) {
                .flip-view-modal .job-information .information-list {
                    -webkit-column-count: 2;
                    -moz-column-count: 2;
                    column-count: 2;
                }
                .flip-view-modal .job-information .information-list li p:first-child {
                    width: 200px;
                    min-width: 200px;
                }
                .flip-view-modal .job-information .information-list li p:last-child {
                    width: calc(100% - 200px);
                }
            }

            .flip-view-modal .profile-content {
                max-height: 1000px;
                margin-top: 15px;
                overflow-y: auto;
                border: 5px solid #f5f5f5;
            }

            @media (min-width:1024px) {
                .flip-view-modal .profile-content {
                    max-height: 1200px;
                    margin-top: 20px;
                    border: 10px solid #f5f5f5;
                }
            }

            @media (min-width:1280px) {
                .flip-view-modal .profile-content {
                    max-height: 1350px;
                    border: 13px solid #f5f5f5;
                }
                .flip-view-modal .profile-content::-webkit-scrollbar {
                    width: 6px;
                }
                .flip-view-modal .profile-content::-webkit-scrollbar-track {
                    background: #f5f5f5;
                }
                .flip-view-modal .profile-content::-webkit-scrollbar-thumb {
                    background: #5d677a;
                }
            }

            .flip-view-modal .flip-view-modal-right {
                margin-left: 1px;
            }

            .flip-view-modal .flip-view-modal-right .box-info-top {
                width: 100%;
                padding: 15px;
                background: #f1f9ff;
            }

            .flip-view-modal .flip-view-modal-right .box-info-top p {
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
            }

            .flip-view-modal .flip-view-modal-right .box-info-top p+p {
                margin-top: 5px;
            }

            .flip-view-modal .flip-view-modal-right .box-info-top p strong {
                color: #172642;
                font-weight: 700;
            }

            .flip-view-modal .flip-view-modal-right .box-info-top p span {
                display: block;
            }

            .flip-view-modal .flip-view-modal-right .box-info-top .title {
                color: #172642;
                font-size: 14.5px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .flip-view-modal .flip-view-modal-right .form-wrap {
                margin-top: 10px;
            }

            .flip-view-modal .flip-view-modal-right .form-wrap .form-group {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                margin-top: 5px;
            }

            .flip-view-modal .flip-view-modal-right .form-wrap .form-group label {
                padding-left: 10px;
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
            }

            .flip-view-modal .flip-view-modal-right .action-list {
                margin-top: 10px;
                padding-top: 10px;
                border-top: 2px solid #ebebeb;
            }

            .flip-view-modal .flip-view-modal-right .action-list li+li {
                margin-top: 5px;
            }

            .flip-view-modal .flip-view-modal-right .action-list li a {
                color: #333333;
                font-size: 14.5px;
                font-weight: 500;
            }

            .flip-view-modal .flip-view-modal-right .action-list li a:hover {
                color: #2f4ba0;
            }

            .flip-view-modal .flip-view-modal-right .action-list li a em {
                padding-right: 6px;
                color: #2f4ba0;
                font-size: 18px;
                font-weight: normal;
            }

            .flip-view-modal .flip-view-modal-right .action-list li .btn-hidden-resume em {
                color: #ff0000;
            }

            .flip-view-modal .flip-view-modal-right .box-info-bottom {
                width: 100%;
                margin-top: 30px;
                padding: 15px;
                background: #f1f9ff;
            }

            .flip-view-modal .flip-view-modal-right .box-info-bottom .action-list {
                margin-top: 0;
                padding-top: 0;
                border: none;
            }

            .flip-view-modal .flip-view-modal-right .btn-download-resume {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 26px;
                margin-top: 15px;
                border-radius: 4px;
                background-image: -webkit-gradient(linear, left top, right top, from(#24ebc8), color-stop(#00b2a3), to(#24ebc8));
                background-image: -o-linear-gradient(left, #24ebc8, #00b2a3, #24ebc8);
                background-image: linear-gradient(to right, #24ebc8, #00b2a3, #24ebc8);
                color: #ffffff;
                font-size: 14.5px;
                font-weight: 500;
                text-align: center;
            }

            .flip-view-modal .flip-view-modal-right .btn-download-resume em {
                padding-right: 5px;
                font-size: 16px;
            }

            .flip-view-modal .flip-view-modal-right .tag-list {
                margin-top: 10px;
            }

            .flip-view-modal .flip-view-modal-right .tag-list .tag-item {
                display: inline-block;
                margin-top: 3px;
                margin-right: 3px;
                padding: 2px 4px;
                border-radius: 3px;
                background: #f1f1f1;
            }

            .flip-view-modal .flip-view-modal-right .tag-list .tag-item .tag-name {
                color: #2f4ba0;
            }

            .flip-view-modal .flip-view-modal-right .tag-list .tag-item .tag-name:hover {
                text-decoration: underline;
            }

            .flip-view-modal .flip-view-modal-right .tag-list .tag-item .btn-delete em {
                color: red;
            }

            @media (min-width:1280px) {
                .flip-view-modal .flip-view-modal-right {
                    margin-top: 60px;
                }
                .flip-view-modal .flip-view-modal-right .box-info-top {
                    padding: 20px 18px;
                }
                .flip-view-modal .flip-view-modal-right .box-info-bottom {
                    padding: 5px 20px;
                }
            }

            .search-support-modal {
                max-width: 930px;
                padding: 15px;
                border-radius: 5px;
            }

            @media (min-width:1024px) {
                .search-support-modal {
                    padding: 20px;
                }
            }

            @media (min-width:1280px) {
                .search-support-modal {
                    padding: 25px 40px;
                }
            }

            .search-support-modal .fancybox-close-small {
                background: #2f4ba0;
                color: #ffffff;
            }

            .search-support-modal .modal-head .title {
                padding-bottom: 10px;
                border-bottom: 2px solid #efefef;
                color: #172642;
                font-size: 18px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .search-support-modal .modal-body .search-support {
                margin-top: 20px;
            }

            .search-support-modal .modal-body .search-support>* {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .search-support-modal .modal-body .search-support *+* {
                margin-top: 15px;
            }

            .search-support-modal .modal-body .search-support p {
                color: #182642;
                font-size: 16px;
                font-weight: 500;
            }

            .search-support-modal .modal-body .search-support p strong {
                color: #2f4ba0;
            }

            .search-support-modal .modal-body .search-support ul {
                padding-left: 18px;
                list-style-type: disc;
            }

            .search-support-modal .modal-body .search-support ul li {
                margin-top: 3px;
            }

            .search-support-modal .modal-body .search-support ul li strong {
                color: #182642;
            }

            .search-support-modal .modal-body .search-support table {
                width: 100%;
            }

            .search-support-modal .modal-body .search-support table thead {
                border-bottom: 1px solid #4ca4c9;
                background: #ffffff;
            }

            .search-support-modal .modal-body .search-support table thead th {
                padding: 7px 0;
                color: #182642;
                font-size: 14.5px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .search-support-modal .modal-body .search-support td {
                padding: 10px 0;
                vertical-align: top;
            }

            .search-support-modal .modal-body .search-support td:first-child {
                padding: 10px 20px;
            }

            .search-support-modal .modal-body .search-support td.title {
                padding: 0;
            }

            .search-support-modal .modal-body .search-support td.title p {
                padding: 8px 20px;
                background: #f8f8f8;
                color: #2f4ba0;
                font-size: 16px;
                font-weight: 700;
            }
        </style>
        <section class="employer-navbar-2-1">
            <div class="container">
                <div class="category-nav">
                    <p>Danh Mục</p>
                    <em class="mdi mdi-chevron-down"></em> </div>
                <div class="main-wrap">
                    <div class="left-wrap">
                        <ul class="list-menu">
                            <li> <a href="https://careerbuilder.vn/vi/employers/dashboard" title="Dashboard">Dashboard</a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/posting" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                            <li class=""> <a href="https://careerbuilder.vn/vi/employers/hrcentral/search-history" title="Lịch Sử Tìm Kiếm">Lịch Sử Tìm Kiếm</a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/reports/orders_available" title="Đơn Hàng ">Đơn Hàng </a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/emailcontentmanagement" title="Cấu Hình Email"> Cấu Hình Email </a> </li>
                            <li class="active">
                                <a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts" title=" Tài Khoản"> Tài Khoản</a>
                            </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/careerbuilder-rewards" target="_blank" title="CBRewards">CBRewards</a> </li>
                        </ul>
                    </div>
                    <div class="right-wrap">
                        <ul class="list-menu">
                            <li> <a href="https://careerbuilder.vn/vi/tim-ung-vien.html"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                            <li> <a class="but-createjob" href="https://careerbuilder.vn/vi/employers/postjobs"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="last-login-user">
            <div class="container">
                <p> Đăng nhập gần đây:
                    <time>05-12-2022 20:41:05</time>
                </p>
            </div>
        </div>
        <section class="manage-job-posting-post-jobs cb-section bg-manage">
            <div class="container">
                <div class="box-manage-job-posting">
                    <div class="heading-manage">
                        <div class="left-heading">
                            <h1 class="title-manage"> Thông Tin Tài Khoản</h1>
                        </div>
                        <div class="right-heading"> <a class="support" href="https://careerbuilder.vn/vi/employers/faq" target="_blank">Hướng dẫn </a></div>
                    </div>
                    <div class="main-tabslet" data-toggle="tabslet">

                        <ul class="tabslet-tab">
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/1" alt="Quản lý user"><span>Quản lý user</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/edit_employer" alt="Thông tin công ty"><span>Thông tin công ty</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/edit_contact" alt="Thông tin liên hệ"><span>Thông tin liên hệ</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/worklocation" alt="Quản Lý Địa Điểm Làm Việc"><span>Quản Lý Địa Điểm Làm Việc</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/report_task_log" alt="Báo cáo tác vụ"><span>Báo cáo tác vụ</span></a></li>
                            <li class="active"><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/changepassword" alt="Đổi mật khẩu"><span>Đổi mật khẩu</span></a></li>
                        </ul>
                        <div class="tabslet-content  active" id="tab-6">
                            <form name="editPassFrm" id="editPassFrm" onsubmit="return false;" method="post">
                                <div class="main-application-information main-form-change-password">
                                    <h2 class="title-application no-bg no-pad">Đổi mật khẩu</h2>
                                    <div class="form-wrap">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="text" value="lop7cttnq@gmail.com" onkeyup="this.setAttribute('value', this.value);" disabled="disabled">
                                                    <label>Email/Tên đăng nhập </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="password" value="" name="oldpass" id="oldpass" onkeyup="this.setAttribute('value', this.value);">
                                                    <label>Mật khẩu cũ <font style="color: red">*</font></label>
                                                    <span class="error error_oldpass" id="oldpass_error">  </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="password" value="" name="newpass" id="newpass" onkeyup="this.setAttribute('value', this.value);">
                                                    <label>Mật khẩu mới <font style="color: red">*</font></label>

                                                    <span class="error" id="resultPass"></span>
                                                    <span class="error error_newpass" id="newpass_error">  </span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="password" value="" name="renewpass" id="renewpass" maxlength="40" onkeyup="this.setAttribute('value', this.value);">
                                                    <label>Xác nhận mật khẩu mới <font style="color: red">*</font></label>
                                                    <span class="error error_renewpass" id="renewpass_error">  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-submit form-continue">
                                        <button class="btn-cancel btn-reset" type="reset" onclick="resetformchangpass();">Hủy</button>
                                        <button class="btn-gradient btn-submit" type="submit" id="account_change_password_btn">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <script language="JavaScript" type="text/javascript">
                            var language_updatepass = {
                                emp_register_too_short: "Quá ngắn",
                                emp_register_weak: "Yếu",
                                emp_register_good: "Tốt",
                                emp_register_strong: "Mạnh",
                                emp_register_confirm_pass_correct_unicode: "Mật khẩu có ít nhất 2 thông tin sau: chữ hoa, chữ thường, số, ký tự đặc biệt (.-_@~`#$%^&*?+\"'!()=). Lưu ý: Không sử dụng tiếng Việt có dấu. Mật khẩu không vượt quá 40 ký tự.",
                                emp_update_old_and_new_pass_equal: "Mật khẩu cũ không đúng, vui lòng nhập lại!",
                                emp_update_pass_empty: "emp_update_pass_empty",
                                emp_update_new_pass_length: "emp_register_Password phai co do dai tu 6 - 30 ky tu",
                                emp_register_pass_strong: "Mật khẩu phải bao gồm ít nhất 2 trong 4 phần sau đây: Chữ hoa, chữ thường, số, ký tự đặc biệt ( -_@~`#$%^&*\"?+'!()=? )",
                                emp_account_Your_Password_updated_successfully: "Mật khẩu của quý khách đã cập nhật thành công",
                                emp_register_confirm_create_pass_correct: "Nhập lại mật khẩu không đúng"
                            };

                            if (typeof language === 'undefined')
                                var language = language_updatepass;
                            else
                                $.extend(language, language_updatepass);

                            function checkStrength(password) {
                                //initial strength
                                var strength = 0;
                                //if the password length is less than 6, return message.
                                if (password.length < 6) {
                                    // $('#resultPass').removeClass();
                                    ///$('#resultPass').removeClass('short');
                                    // $('#resultPass').addClass('short');
                                    return language.emp_register_too_short;
                                }
                                //length is ok, lets continue.
                                //if length is 8 characters or more, increase strength value
                                if (password.length > 7) strength += 1;
                                //if password contains both lower and uppercase characters, increase strength value
                                if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1;
                                //if it has numbers and characters, increase strength value
                                if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1;
                                //if it has one special character, increase strength value
                                if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
                                //if it has two special characters, increase strength value
                                if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
                                //now we have calculated strength value, we can return messages
                                //if value is less than 2

                                if (strength < 2) {
                                    return language.emp_register_weak;
                                } else if (strength <= 3) {
                                    return language.emp_register_good;
                                } else {
                                    return language.emp_register_strong;
                                }
                            }

                            function resetformchangpass() {
                                location.reload();
                            }
                            $(document).ready(function() {
                                $('#newpass').keyup(function() {
                                    $('#resultPass').html(checkStrength($('#newpass').val()));
                                })
                            });
                            $("#editPassFrm").validate({
                                rules: {
                                    oldpass: {
                                        required: true
                                    },
                                    newpass: {
                                        required: true,
                                        minlength: 6,
                                        maxlength: 40,
                                        validatePassUnicodeStrong: true
                                    },
                                    renewpass: {
                                        required: true,
                                        minlength: 6,
                                        maxlength: 40,
                                        equalTo: "#newpass"
                                    }
                                },
                                messages: {
                                    newpass: {
                                        validatePassUnicodeStrong: language.emp_register_confirm_pass_correct_unicode
                                    },
                                    renewpass: {
                                        equalTo: language.emp_register_confirm_create_pass_correct
                                    }
                                },
                                success: function(error) {
                                    error.remove();
                                },
                                errorPlacement: function(error, element) {
                                    var name = element.attr('name');
                                    var errorSelector = '.error_' + name;
                                    var $element = $(errorSelector);
                                    $(errorSelector).html(error.html());
                                },
                                submitHandler: function() {
                                    $("#account_change_password_btn").prop('disabled', true);
                                    $.ajax({
                                        type: "POST",
                                        url: domain + 'employers/hrcentral/accounts/updatepassword',
                                        data: $("#editPassFrm").serialize(),
                                        dataType: "JSON",
                                        success: function(error) {
                                            if (error.oldnewpass == 1) {
                                                $("#oldpass_error").html(language.emp_update_old_and_new_pass_equal).show();
                                            } else if (error.oldpassempty == 1) {
                                                $("#oldpass_error").html(language.emp_update_pass_empty).show();
                                            } else if (error.newpassempty == 1) {
                                                $("#newpass_error").html(language.emp_update_pass_empty).show();
                                            } else if (error.newpasslength == 1) {
                                                $("#newpass_error").html(language.emp_update_new_pass_length).show();
                                            } else if (error.newpassunicode == 1) {
                                                $("#newpass_error").html(language.emp_register_pass_only_allow).show();
                                            } else if (error.newpassstrong == 1) {
                                                $("#newpass_error").html(language.emp_register_pass_strong).show();
                                            } else if (error.renewpassempty == 1) {
                                                $("#renewpass_error").html(language.emp_update_pass_empty).show();
                                            } else if (error.renewpasscorrect == 1) {
                                                $("#renewpass_error").html(language.emp_register_confirm_create_pass_correct).show();
                                            } else {
                                                show_noti(1, language.emp_account_Your_Password_updated_successfully);
                                            }
                                            $("#account_change_password_btn").prop('disabled', false);
                                        }
                                    });
                                }
                            });
                        </script>




                    </div>
                </div>
            </div>
        </section>
      
    </main>
  
    
  
 


</body>

</html>