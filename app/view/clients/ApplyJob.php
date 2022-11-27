   <?php if(!empty($job_post_activity)){?>
      <?php print_r($job_post_activity);?>
      <?php } else{?>
         <?php echo "b";?>
         <?php }?>
   <body class="">
      <main>
         <style>
            /*jquery.alerts.css*/
            #popup_container {
            font-family: Arial, sans-serif;
            font-size: 12px;
            min-width: 300px;
            max-width: 600px;
            background: #FFF;
            border: solid 5px #999;
            color: #000;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            }
            #popup_title {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            line-height: 1.75em;
            color: #666;
            background: #CCC url("https://static.careerbuilder.vn/js/jquery.alerts/images/title.gif") top repeat-x;
            border: solid 1px #FFF;
            border-bottom: solid 1px #999;
            cursor: default;
            padding: 0em;
            margin: 0em;
            }
            #popup_content {
            padding: 1em 1.75em;
            margin: 0em;
            }
            #popup_content.alert {}
            #popup_content.confirm {}
            #popup_content.prompt {
            background-image: url("https://static.careerbuilder.vn/js/jquery.alerts/images/help.gif");
            }
            #popup_message {
            text-align: center
            }
            #popup_panel {
            text-align: center;
            margin: 1em 0em 0em 1em;
            }
            #popup_prompt {
            margin: .5em 0em;
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
            /*member.css*/
            .is-browser-IE .member-form .form-wrap .form-group label {
            position: static !important;
            }
            .main-form .caption {
            margin-bottom: 10px;
            }
            .main-form .caption p {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .main-form .form-group {
            margin-bottom: 20px;
            }
            .main-form .form-group label {
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .main-form .form-group label span {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            display: initial;
            color: #999999;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            transition: 0.5s;
            }
            @media (min-width:1025px) {
            .main-form .form-group label span {
            font-size: 14.5px;
            }
            }
            .main-form .form-group input {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #2f4ba0;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            }
            .main-form .form-group input:focus {
            outline: none;
            }
            .main-form .form-group select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            border-bottom: 1px solid #2f4ba0;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            }
            .main-form .form-group select:focus {
            outline: none;
            }
            .main-form .form-group select::-ms-expand {
            display: none;
            }
            .main-form .form-group span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-top: 7px;
            color: red;
            font-size: 12px;
            font-style: italic;
            font-weight: 500;
            }
            .main-form .form-group .form-note {
            margin-top: 10px;
            }
            .main-form .form-group .form-note p {
            color: #999999;
            font-size: 14.5px;
            }
            .main-form .form-group.form-text {
            position: relative;
            }
            .main-form .form-group.form-text label {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            position: absolute;
            top: 7px;
            left: 0;
            pointer-events: none;
            transition: 0.5s;
            }
            .main-form .form-group.form-text input:focus~label,
            .main-form .form-group.form-text input:not([value=""])~label {
            top: -12px;
            left: 0;
            font-size: 14.5px;
            }
            .main-form .form-group.form-text input:focus~label span,
            .main-form .form-group.form-text input:not([value=""])~label span {
            font-size: 10px;
            }
            .main-form .form-group.form-radio {
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
            .main-form .form-group.form-radio p {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100%/3);
            flex: 0 0 calc(100%/3);
            max-width: calc(100%/3);
            padding: 0 10px;
            }
            .main-form .form-group.form-radio .gender {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100%/3);
            flex: 0 0 calc(100%/3);
            max-width: calc(100%/3);
            padding: 0 10px;
            }
            .main-form .form-group.form-radio label {
            position: relative;
            padding-left: 15px;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            }
            .main-form .form-group.form-radio label:after {
            position: absolute;
            top: 2px;
            left: 0;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f43d";
            }
            .main-form .form-group.form-radio input {
            display: none;
            }
            .main-form .form-group.form-radio input:checked {
            background: black;
            }
            .main-form .form-group.form-radio input:checked~label:after {
            color: #5d677a;
            content: "\f43e";
            }
            .main-form .form-group.form-birthday {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -20px;
            }
            .main-form .form-group.form-birthday label {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 20px;
            }
            .main-form .form-group.form-birthday .select {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% / 3);
            flex: 0 0 calc(100% / 3);
            width: calc(100% / 3);
            padding: 0 20px;
            }
            .main-form .form-group.form-submit {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            padding-top: 10px;
            text-align: center;
            }
            .main-form .form-group.form-submit button {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
            background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
            background-image: linear-gradient(270deg, #42ecce, #00b2a3, #42ecce);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            }
            .main-form .form-group.form-submit button:hover {
            background-position: 100% 0;
            }
            .main-form .form-group.form-cancel {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            padding-top: 10px;
            text-align: center;
            }
            .main-form .form-group.form-cancel button {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 44px;
            padding: 5px 20px;
            border-radius: 5px;
            background: #f1f1f1;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            }
            .main-form .form-group.form-cancel button:hover {
            background-position: 100% 0;
            }
            .main-form .form-group.form-note {
            padding-top: 10px;
            border-top: 1px solid #e9e9e9;
            }
            .main-form .form-group.form-note p {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .main-form .form-group.form-select select {
            border-radius: 0;
            background-color: #ffffff;
            }
            .main-form .form-group.form-select-chosen select {
            display: none;
            }
            .main-form .form-group.form-select-chosen label {
            margin-bottom: 5px;
            }
            .main-form .form-group.form-select-chosen .chosen-container {
            width: 100% !important;
            height: 40px !important;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-choices {
            height: 100%;
            padding: 5px;
            padding-left: 0;
            border: none;
            border-bottom: 1px solid #2f4ba0;
            background-image: none;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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
            .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
            background: none !important;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
            color: #5d677a;
            font-family: "Material Design Icons";
            font-size: 11px;
            content: "\f156";
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
            color: #fc0821;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
            width: 6px !important;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
            background: #eaeaea !important;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
            background: #7fcb42 !important;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
            background: #7fcb42 !important;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
            position: relative;
            padding-left: 43px;
            color: #182642;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f131";
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
            color: #ffffff;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
            color: #ffffff;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
            color: #ffffff;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
            color: #ffffff;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
            position: relative;
            padding-left: 43px;
            color: #182642;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
            position: absolute;
            top: 5px;
            left: 20px;
            color: #2f4ba0;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 15px;
            content: "\f132";
            opacity: 1;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
            color: #182642;
            cursor: pointer;
            }
            .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
            color: #2f4ba0;
            }
            .main-form .form-group.form-checkbox label {
            position: relative;
            padding-left: 20px;
            }
            .main-form .form-group.form-checkbox label:after {
            position: absolute;
            top: 2px;
            left: 0;
            color: #5d677a;
            font: normal normal normal 24px/1 Material Design Icons;
            font-size: 18px;
            content: "\f131";
            }
            .main-form .form-group.form-checkbox input {
            display: none;
            }
            .main-form .form-group.form-checkbox input:checked {
            background: black;
            }
            .main-form .form-group.form-checkbox input:checked~label:after {
            color: #5d677a;
            content: "\f132";
            }
            .member-form .title-h3 {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
            border-bottom: 2px solid #2f4ba0;
            text-transform: uppercase;
            }
            .member-form .title-h3 h3 {
            margin-bottom: 8px;
            padding-right: 10px;
            color: #172642;
            font-size: 18px;
            font-weight: 700;
            }
            .member-form .title-h3 .name {
            margin-bottom: 8px;
            color: #2f4ba0;
            font-size: 18px;
            font-weight: 700;
            }
            @media (min-width:1025px) {
            .member-form .title-h3 {
            margin-bottom: 25px;
            }
            }
            .member-form .title-h4 {
            margin-bottom: 10px;
            }
            .member-form .title-h4 h4 {
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            }
            @media (min-width:1025px) {
            .member-form .title-h4 {
            margin-bottom: 15px;
            }
            }
            .member-form .upload-resume {
            margin: 0;
            padding: 15px;
            border: 1px solid #e9e9e9;
            background: #fbfbfb;
            }
            .member-form .upload-resume .form-group {
            margin: 0;
            padding: 0;
            }
            .member-form .upload-resume .form-group.form-radio {
            margin-bottom: 10px;
            }
            .member-form .upload-resume .form-group.form-radio .list-radio {
            display: none;
            width: 100%;
            }
            .member-form .upload-resume .form-group.form-radio input:checked~.list-radio {
            display: block;
            }
            .member-form .upload-resume .form-group.form-radio label {
            margin-bottom: 7px;
            padding-left: 29px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .member-form .upload-resume .form-group.form-radio p {
            -webkit-box-flex: 0 !important;
            -ms-flex: 0 0 100% !important;
            flex: 0 0 100% !important;
            width: 100% !important;
            max-width: 100% !important;
            }
            .member-form .upload-resume .form-group.form-radio .notice {
            padding: 0;
            }
            .member-form .upload-resume .form-group.form-radio .notice p {
            -webkit-box-flex: initial;
            -ms-flex: initial;
            flex: initial;
            width: auto;
            max-width: 100%;
            margin-bottom: 7px;
            padding: 0;
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
            }
            .member-form .upload-resume .form-group.form-radio .notice ul li {
            position: relative;
            margin-bottom: 4px;
            padding-left: 20px;
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
            }
            .member-form .upload-resume .form-group.form-radio .notice ul li:before {
            position: absolute;
            top: 8px;
            left: 0;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #999999;
            content: "";
            }
            .member-form .upload-resume .form-group.form-radio .notice.box-noti {
            padding: 15px;
            border: 1px solid #FFE8C1;
            border-radius: 10px;
            background: #FFFAF2;
            }
            .member-form .upload-resume .form-group .list-choose {
            margin-bottom: 5px;
            }
            .member-form .upload-resume .form-group .list-choose .choose-mycomputer {
            margin-bottom: 10px;
            }
            .member-form .upload-resume .form-group .list-choose .choose-mycomputer label {
            width: auto !important;
            padding: 9px 14px !important;
            border-radius: 5px !important;
            background: #2f4ba0 !important;
            color: #ffffff !important;
            font-size: 14.5px !important;
            font-weight: 500 !important;
            }
            .member-form .upload-resume .form-group .list-choose .choose-mycomputer label em {
            padding-right: 8px;
            font-size: 18px;
            }
            .member-form .upload-resume .form-group .list-choose .choose-drive,
            .member-form .upload-resume .form-group .list-choose .choose-dropbox {
            margin-bottom: 10px;
            padding: 9.5px 14.5px;
            border-radius: 5px;
            background: #e9e9e9;
            color: #5d677a;
            font-size: 14.5px;
            }
            .member-form .upload-resume .form-group .list-choose .choose-drive img,
            .member-form .upload-resume .form-group .list-choose .choose-dropbox img {
            padding-right: 8px;
            }
            .member-form .upload-resume .form-group .list-choose p {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .member-form .upload-resume .form-group .list-choose a {
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 500;
            text-decoration: underline;
            }
            @media (min-width:1025px) {
            .member-form .upload-resume .form-group .list-choose {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 0 -5px;
            margin-bottom: 10px;
            }
            .member-form .upload-resume .form-group .list-choose .list-choose {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            }
            .member-form .upload-resume .form-group .list-choose .form-group:first-child {
            padding-right: 20px;
            }
            .member-form .upload-resume .form-group .list-choose .choose-mycomputer,
            .member-form .upload-resume .form-group .list-choose .choose-drive,
            .member-form .upload-resume .form-group .list-choose .choose-dropbox {
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            margin-right: 10px;
            cursor: pointer;
            transition: 0.4s;
            }
            .member-form .upload-resume .form-group .list-choose .choose-mycomputer label:hover,
            .member-form .upload-resume .form-group .list-choose .choose-drive label:hover,
            .member-form .upload-resume .form-group .list-choose .choose-dropbox label:hover {
            -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            cursor: pointer;
            }
            .member-form .upload-resume .form-group .list-choose .choose-mycomputer:hover,
            .member-form .upload-resume .form-group .list-choose .choose-drive:hover,
            .member-form .upload-resume .form-group .list-choose .choose-dropbox:hover {
            -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            cursor: pointer;
            }
            }
            .member-form .upload-resume .form-group.form-checkbox .checkbox-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 100%;
            flex-wrap: wrap;
            max-width: 100%;
            }
            .member-form .upload-resume .form-group.form-checkbox .list-sample {
            display: none;
            margin-top: 5px;
            }
            .member-form .upload-resume .form-group.form-checkbox .list-sample li {
            margin-right: 10px;
            }
            .member-form .upload-resume .form-group.form-checkbox textarea {
            display: none;
            padding: 5px 10px;
            border: 1px solid #e9e9e9;
            background: #fbfbfb;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .member-form .upload-resume .form-group.form-checkbox textarea:focus {
            outline: none;
            background: #ffffff;
            }
            .member-form .upload-resume .form-group.form-checkbox textarea.white {
            background: #ffffff;
            }
            .member-form .upload-resume .form-group.form-checkbox .notice {
            display: none;
            margin-top: 5px;
            }
            .member-form .upload-resume .form-group.form-checkbox .notice p {
            color: #999999;
            font-size: 14.5px;
            font-weight: 500;
            }
            .member-form .upload-resume .form-group.form-checkbox .notice p .bold {
            font-weight: 700;
            }
            .member-form .upload-resume .form-group.form-checkbox span {
            display: none;
            }
            .member-form .upload-resume .form-group.form-checkbox input:checked~.checkbox-group .list-sample {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            }
            .member-form .upload-resume .form-group.form-checkbox input:checked~textarea,
            .member-form .upload-resume .form-group.form-checkbox input:checked~.notice,
            .member-form .upload-resume .form-group.form-checkbox input:checked~span {
            display: block;
            }
            .member-form .upload-resume .form-group.form-checkbox input:checked~.checkbox-group label::after {
            content: "\f132";
            }
            .member-form .upload-resume .form-group.form-checkbox label {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            width: auto;
            padding-right: 5px;
            }
            .member-form .upload-resume .form-group.form-checkbox label ul {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            padding-left: 20px;
            }
            .member-form .upload-resume .form-group.form-checkbox label ul li {
            margin-right: 15px;
            }
            .member-form .upload-resume .form-group.form-checkbox label ul li a {
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 500;
            text-decoration: underline;
            }
            .member-form .upload-resume .form-group.form-checkbox textarea {
            width: 100%;
            height: 100px;
            margin-top: 20px;
            }
            @media (min-width:1025px) {
            .member-form .upload-resume .form-group.form-checkbox {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            }
            .member-form .upload-resume .form-group.form-checkbox input,
            .member-form .upload-resume .form-group.form-checkbox textarea,
            .member-form .upload-resume .form-group.form-checkbox .notice {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            }
            .member-form .upload-resume .form-group.form-checkbox .list-sample {
            margin-top: 0;
            }
            }
            .member-form .upload-resume .list-choose {
            margin-top: 10px !important;
            padding-left: 5px !important;
            }
            .member-form .upload-resume .list-choose .choose-mycomputer label {
            margin-bottom: 0 !important;
            }
            .member-form .upload-resume .list-choose .choose-mycomputer label::after {
            display: none;
            }
            .member-form .upload-resume .list-choose p {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding-left: 0;
            }
            @media (min-width:1025px) {
            .member-form .upload-resume {
            margin-bottom: 30px;
            padding: 30px;
            }
            }
            .member-form .form-submit {
            max-width: 350px;
            }
            @media (min-width:1025px) {
            .member-form .form-submit {
            padding-top: 0 !important;
            }
            }
            .member-form .list-radio {
            padding-left: 29px;
            }
            .member-form .list-radio .form-group {
            margin-bottom: 0 !important;
            }
            .member-form .list-radio .form-group.form-radio label a {
            padding-left: 8px;
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 500;
            text-decoration: underline;
            }
            .member-form .list-radio .form-group.form-radio p {
            -webkit-box-flex: 0 !important;
            -ms-flex: 0 0 100% !important;
            flex: 0 0 100% !important;
            width: 100% !important;
            max-width: 100% !important;
            }
            .member-form .list-radio p {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding-left: 0;
            }
            .member-form .list-radio .notice .name strong {
            color: red !important;
            font-size: 16px !important;
            }
            .member-form .list-radio .notice p {
            color: #5d677a !important;
            font-size: 14.5px !important;
            font-weight: 500 !important;
            }
            .member-form .list-radio .notice a {
            font-size: 16px !important;
            font-weight: 500 !important;
            text-decoration: underline !important;
            }
            .member-form .list-radio .notice ul li {
            color: #5d677a !important;
            }
            .member-form .list-radio .notice ul li p {
            font-size: 14.5px !important;
            }
            .member-form .list-radio .notice ul li strong {
            color: #5d677a !important;
            font-size: 14.5px !important;
            }
            .member-form .form-wrap {
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin: 0 -20px;
            margin-bottom: 22px;
            }
            .member-form .form-wrap .form-group {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            -ms-flex-wrap: wrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex: 0 0 100%;
            flex-wrap: wrap;
            max-width: 100%;
            padding: 0 20px;
            }
            .member-form .form-wrap .form-group label {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100px;
            position: initial;
            flex: 0 0 100px;
            max-width: 100px;
            border-bottom: 1px solid rgba(40, 122, 185, 0.5);
            color: #172642;
            font-weight: 700;
            pointer-events: auto;
            }
            .member-form .form-wrap .form-group input {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 100px);
            flex: 0 0 calc(100% - 100px);
            max-width: calc(100% - 100px);
            padding-top: 0;
            padding-bottom: 15px;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .member-form .save-and-allow {
            margin-top: 15px;
            border-bottom: 1px solid #e9e9e9;
            }
            .member-form .save-and-allow .form-group {
            position: relative;
            margin-bottom: 9px;
            }
            .member-form .save-and-allow .form-group label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            width: 100%;
            color: #5d677a;
            font-size: 16px;
            font-weight: 700;
            }
            .member-form .save-and-allow .form-group .slider {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            top: 50%;
            right: 0;
            width: 35px;
            height: 18px;
            transform: translateY(-50%);
            border-radius: 9px;
            background-color: #ccc;
            cursor: pointer;
            transition: 0.4s;
            }
            .member-form .save-and-allow .form-group .slider::before {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            position: absolute;
            top: 50%;
            left: 2px;
            width: 16px;
            height: 16px;
            transform: translateY(-50%);
            border-radius: 50%;
            background-color: white;
            content: "";
            transition: 0.4s;
            }
            .member-form .save-and-allow .form-group input {
            display: none;
            }
            .member-form .save-and-allow .form-group input:checked~.slider {
            background-color: #2aba2a;
            }
            .member-form .save-and-allow .form-group input:focus~.slider {
            -webkit-box-shadow: 0 0 1px #2aba2a;
            box-shadow: 0 0 1px #2aba2a;
            }
            .member-form .save-and-allow .form-group input:checked~.slider::before {
            -webkit-transform: translate(16px, -50%);
            -ms-transform: translate(16px, -50%);
            transform: translate(16px, -50%);
            }
            @media (min-width:1025px) {
            .member-form .save-and-allow {
            margin-bottom: 30px;
            padding-bottom: 14px;
            }
            .member-form .save-and-allow .form-group .slider {
            right: initial;
            left: 290px;
            }
            }
            .member-form .form-show-file {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: none;
            align-items: center;
            width: 100%;
            max-width: 500px;
            margin-bottom: 25px;
            }
            .member-form .form-show-file em {
            padding-right: 5px;
            color: #2f4ba0;
            font-size: 18px;
            }
            .member-form .form-show-file a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 20px;
            color: red !important;
            font-size: 14.5px !important;
            text-decoration: none !important;
            }
            .member-form .form-show-file a em {
            padding-right: 10px;
            color: red;
            font-size: 14.5px;
            font-weight: 700;
            }
            .member-form .form-show-file input {
            display: block !important;
            border-bottom: none;
            background: none;
            color: #2f4ba0;
            font-size: 14.5px;
            font-weight: 500;
            }
            .member-form .form-show-file .show-file {
            padding: 0 !important;
            color: #2f4ba0 !important;
            font-size: 14.5px !important;
            font-weight: 500 !important;
            }
            .member-form .form-show-file.active {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            }
            .sample-modal .head-letter {
            width: 200px;
            margin-bottom: 10px;
            margin-left: auto;
            }
            .sample-modal .head-letter ul li {
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 500;
            }
            .sample-modal .body-letter {
            margin-bottom: 50px;
            }
            .sample-modal .body-letter p {
            color: #333333;
            font-size: 16px;
            font-weight: 500;
            }
            .sample-modal .foot-letter ul li {
            color: #2f4ba0;
            font-size: 16px;
            font-weight: 500;
            }
            .apply-form-job-detail {
            display: none;
            height: 100%;
            padding: 20px 15px;
            background: #f1f9fc;
            }
            .apply-form-job-detail .title-h3 {
            border-bottom: 2px solid #2f4ba0;
            }
            .apply-form-job-detail .title-h3 h3 {
            padding-bottom: 12px;
            color: #2f4ba0;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            }
            .apply-form-job-detail .table {
            margin-bottom: 10px;
            }
            .apply-form-job-detail .table table {
            width: 100%;
            }
            .apply-form-job-detail .table table tr {
            border-bottom: 1px solid #e9e9e9;
            }
            .apply-form-job-detail .table table tr td {
            padding: 10px 0;
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            .apply-form-job-detail .table table tr td:first-child {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            min-width: 160px;
            color: #172642;
            font-size: 16px;
            font-weight: 700;
            }
            .apply-form-job-detail .employer {
            color: #5d677a;
            font-size: 16px;
            font-weight: 500;
            }
            @media (min-width:576px) {
            .apply-form-job-detail {
            display: block;
            }
            }
            @media (min-width:1025px) {
            .apply-form-job-detail {
            padding: 35px 50px;
            }
            .apply-form-job-detail .table {
            margin-bottom: 15px;
            }
            .apply-form-job-detail .table table tr td {
            padding: 12px 0;
            }
            }
            @media (min-width:1025px) {
            .cb-member .cus-row {
            margin: 0 -15px;
            }
            .cb-member .cus-col {
            padding: 0 25px;
            }
            }
            @media (min-width:1450px) {
            .cb-member .cus-row {
            margin: 0 -25px;
            }
            }
            .member-form .upload-resume .form-group.form-radio label.lb-choose-resumes {
            padding-left: 60px;
            }
            .member-form .upload-resume .form-group.form-radio label.lb-choose-resumes:before {
            content: '';
            width: 20px;
            height: 20px;
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/sm-icon-logo.png") no-repeat;
            background-size: cover !important;
            position: absolute;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            }
            .switch-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            }
            .switch-box>p {
            color: #172642;
            font-size: 18px;
            }
            .switch-box label {
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            color: #5d677a;
            font-size: 14.5px;
            font-weight: 700;
            }
            .switch-box input:checked~.slider {
            background-color: #00b2a3;
            }
            .switch-box input {
            display: none;
            }
            .switch-box .slider {
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            width: 40px;
            height: 20px;
            border-radius: 9px;
            background-color: #aaa;
            cursor: pointer;
            transition: 0.4s;
            }
            .switch-box .slider .icon {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            position: absolute;
            top: 50%;
            left: 2px;
            width: 16px;
            height: 16px;
            transform: translateY(-50%);
            border-radius: 50%;
            background-color: white;
            content: "";
            transition: 0.4s;
            }
            .switch-box .slider .icon:before {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            color: #aaa;
            }
            .switch-box input:checked~.slider .icon {
            -webkit-transform: translate(20px, -50%);
            -ms-transform: translate(20px, -50%);
            transform: translate(20px, -50%);
            color: #00b2a3;
            }
            .switch-box input:checked~.slider .icon:before {
            content: '\f12c';
            color: #00b2a3;
            }
            .status-area>p {
            color: #172642;
            font-weight: 700;
            }
            .choose-profile-modal.fancybox-content {
            padding: 30px;
            }
            @media screen and (min-width:1200px) {
            .switch-box {
            padding-right: 50px;
            }
            }
            @media screen and (min-width:992px) and (max-width:1199px) {
            .switch-box,
            .switch-box>p,
            .switch-box>label {
            display: inline-block;
            }
            .switch-box>label {
            margin-top: 10px;
            }
            }
            @media screen and (max-width:992px) {
            .switch-box {
            margin-top: 15px;
            }
            .switch-box>p {
            font-size: 16px;
            }
            }
            @media screen and (max-width:640px) {
            .switch-box,
            .switch-box>p,
            .switch-box>label {
            display: inline-block;
            }
            .switch-box>label {
            margin-top: 10px;
            }
            }
            @media (max-width:576px) {
            .choose-profile-modal.fancybox-content {
            padding: 20px;
            width: 100%;
            }
            .choose-profile-modal ul li button {
            width: 120px;
            padding-left: 10px;
            padding-right: 10px;
            }
            }
            .status-area .switch-status {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 600px;
            background: #f8faf9;
            border: none;
            margin-top: 15px;
            margin-bottom: 15px;
            }
            .status-area .switch-status a {
            -ms-flex: 0 0 33.3333%;
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
            font-weight: normal;
            padding: 10px 0;
            font-size: 16px;
            }
            .status-area .switch-status a.active {
            color: #fff;
            }
            .status-area .switch-status a.lock.active {
            background: #aaa;
            }
            .status-area .switch-status a.public.active {
            background: #2f4ba0;
            }
            .status-area .switch-status a.flash.active {
            background: #00b2a3;
            }
            .status-area .switch-status a em {
            margin-right: 7px;
            }
            .status-area .text-notes span {
            color: #2f4ba0;
            font-weight: 700;
            }
            @media (max-width:1023px) {
            .status-area .switch-status a {
            font-size: 14.5px;
            padding: 7px 0;
            }
            }
            .swap-content-1 [class*="content-"] {
            display: none;
            }
            .swap-content-1 .active {
            display: block;
            }
            .choose-profile-modal>span {
            color: #ec4570;
            display: inline-block;
            margin-bottom: 5px;
            }
            .choose-profile-modal>p {
            margin-bottom: 20px;
            color: #0E0E24;
            }
            .container-radio {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #0E0E24;
            }
            .container-radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            }
            .checkmark {
            position: absolute;
            top: 2px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #fff;
            border-radius: 50%;
            border: 1px solid #5d677a;
            }
            .container-radio input:checked~.checkmark {
            background-color: #fff;
            border-color: #00b2a4;
            }
            .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            }
            .container-radio input:checked~.checkmark:after {
            display: block;
            }
            .container-radio .checkmark:after {
            top: 3px;
            left: 3px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #00b2a4;
            }
            .choose-profile-modal ul {
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            }
            .choose-profile-modal ul li:not(:last-child) {
            margin-right: 10px;
            }
            .choose-profile-modal ul li button {
            color: #0E0E24;
            padding: 10px 20px;
            transition: all .4s;
            border-radius: 6px;
            width: 180px;
            text-align: center;
            }
            .choose-profile-modal .btn-replace {
            background: #00b2a4;
            }
            .choose-profile-modal .btn-replace:hover {
            background: #028c81;
            }
            .choose-profile-modal .btn-cancel {
            background: #e7c80d;
            }
            .choose-profile-modal .btn-cancel:hover {
            background: #c3a90b;
            }
            .choose-profile-modal .list-radio-area {
            margin-bottom: 20px;
            }
            .choose-profile-modal.fancybox-content {
            padding: 30px;
            }
            @media (max-width:576px) {
            .choose-profile-modal.fancybox-content {
            padding: 20px;
            width: 100%;
            }
            .choose-profile-modal ul li button {
            width: 120px;
            padding-left: 10px;
            padding-right: 10px;
            }
            }
            .switch-status {
            display: -ms-flexbox;
            display: flex;
            background-color: #fff;
            border: 4px solid #fff;
            border-radius: 26px;
            margin-bottom: 20px
            }
            .switch-status a {
            display: inline-block;
            padding: 10px 0;
            color: #5d677a;
            text-align: center;
            border-radius: 26px;
            font-size: 14.5px;
            font-weight: bold
            }
            .switch-status a:hover {
            text-decoration: none
            }
            .list-radio-area .visible {
            pointer-events: none;
            color: #ccc;
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
         </style>
       
         <section class="member cb-section">
            <div class="container">
               <div class="cb-title cb-title-center">
                  <h2>Nộp hồ sơ ứng tuyển</h2>
               </div>
               <div class="row cus-row">
                  <div class="col-lg-7 cus-col">
                     <div class="member-form">
                        <div class="main-form">
                           <div class="title-h3">
                              <h3>Nộp hồ sơ ứng tuyển:</h3>
                              <a class="name detail" target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/legal-senior-executive.35BB0434.html"><?= $job_post["job_title"] ?></a>
                           </div>
                           <div class="please-fill">
                              <p>Điền thông tin liên hệ của bạn và chọn hồ sơ để ứng tuyển:</p>
                           </div>
                <form action="" method="post" name="frmApplyjob" id="frmApplyjob" enctype="multipart/form-data" >
                              <input type="hidden" name="job_id" id="job_id" value="<?= $job_post["id"] ?>" />
                              <input type="hidden" name="source" id="source" value="" />
                              <input type="hidden" name="email" id="email" value="aolang69@gmail.com">
                              <input type="hidden" name="popup_resume" id="popup_resume" value="" />
                              <input name="lastname" id="lastname" type="hidden" value="<?= $info_seeker["lastname"] ?>" />
                              <input name="firstname" id="firstname" type="hidden" value="<?= $info_seeker["firstname"] ?>" />
                              <div class="title-h4">
                                 <h4>Thông tin liên hệ của bạn</h4>
                              </div>
                              <div class="form-wrap">
                                 <div class="form-group form-text">
                                    <label for="">Họ tên</label>
                                    <input type="text" value="<?= $fullname ?>" readonly>
                                 </div>
                                 <div class="form-group form-text">
                                    <label for="">Email</label>
                                    <input type="text" value="<?= $info_seeker["email"] ?>" readonly>
                                 </div>
                              </div>
                              <div class="title-h4">
                                 <h4>Hồ sơ của bạn</h4>
                              </div>
                              <div class="upload-resume">
                                 <div class="form-group form-radio">
                                    <input type="radio" value="1" id="choose-resumes" name="your_resume">
                                    <label for="choose-resumes" class="lb-choose-resumes">Chọn từ hồ sơ của bạn</label>
                                    <div class="list-radio">
                                       <div class="form-group form-radio">
   <input type="radio" name="resume_id" id="resume_<?= $seeker_resume['id']?>" value="<?= $seeker_resume['id']?>">
                                          <input type="radio" name="resume_kind" id="resume_kind_17611557" value="0" style="display:none;" />
                                          <label for="resume_<?= $seeker_resume['id']?>"><?= $seeker_resume_title["resume_title"] ?> <a href="<?= _WEB_ROOT.'/jobseekers/my_profile' ?>" target="_blank">   [Xem]</a></label>
                                       </div>
                                       <div class="form-group form-radio">
                                          <input type="radio" name="resume_id" id="resume_<?= $seeker_resume["id"]?>" value="<?= $seeker_resume['id']?>">
                                          <input type="radio" name="resume_kind" id="resume_kind_17708653" value="2" style="display:none;" />
                                          <label for="resume_17708653">front end <a href="https://careerbuilder.vn/vi/quan-ly-nghe-nghiep/ho-so-cua-toi/ho-so-dinh-kem/front-end-17708653" target="_blank">                      [Xem]</a></label>
                                       </div>
                                       <span class="err_resume_id" style="display:none"></span>
                                       <p>Bạn muốn <a href="https://careerbuilder.vn/vi/jobseekers/dashboard">Tạo hồ sơ mới! </a></p>
                                    </div>
                                 </div>
                                 <div class="form-group form-radio">
                                    <input type="radio" id="upload-resume" value="2" name="your_resume">
                                    <label for="upload-resume">Upload hồ sơ: Hỗ trợ định dạng *.doc, *.docx, *.pdf và không quá 5MB</label>
                                    <div class="list-radio">
                                       <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" data-app-key="wpcl6nfph1hzjf2" id="dropboxjs"></script>
                                       <script src="https://static.careerbuilder.vn/2012/dropboxresume.js" type="text/javascript"></script>
                                       <input type="hidden" name="session_file" id="session_file" value="">
                                       <input type="hidden" name="session_type" id="session_type" value="">
                                     <input type="hidden" name="session_id" id="session_id" value="<?= $seeker_id ?>">
                                       <div class="list-choose">
                                          <div class="choose-mycomputer">
                                             <label for="attach_file"><em class="mdi mdi-folder-outline"></em>Chọn từ máy tính</label>
                                             <input class="d-none file" type="file" name="attach_file" id="attach_file" value="" accept=".doc,.docx,.pdf,application/msword,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-office">
                                             <input type="hidden" name="ieattach_file" id="ieattach_file" value="">
                                             <input type="hidden" name="ieattach_file_type" id="ieattach_file_type" value="">
                                             <input type="hidden" name="ieattach_file_title" id="ieattach_file_title" value="">
                                             <input type="hidden" name="ieattach_file_size" id="ieattach_file_size" value="">
                                          </div>
                                          <input type="hidden" name="dropbox_file" id="dropbox_file" value="">
                                          <input type="hidden" name="dfile_title" id="dfile_title" value="">
                                          <input type="hidden" name="dfile_size" id="dfile_size" value="">
                                          <p>
                                             <span class="err_session_file err_attach" style="display:none"></span> <span class="err_attach_file err_attach" style="display:none"></span> <span class="err_dropbox_file err_attach" style="display:none"></span>
                                          </p>
                                          <span class="imgload" style="display:none"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/icons/icon_animated_busy2.gif" alt="Loading"></span>
                                          <div class="form-show-file ">
                                             <em class="material-icons">picture_as_pdf</em>
                                             <input type="text" id="uploadFile" value="">
                                             <a href="javascript:void(0);" onclick="removeFile()"> <em class="material-icons" >highlight_off</em>Xóa</a>
                                          </div>
                                        
                                       </div>
                                       <div class="notice box-noti">
                                          <p class="name"><strong>Lưu ý:</strong></p>
                                          <p>Trong trường hợp bạn gặp phải bất kỳ vấn đề gì trong quá trình thực hiện như tải hồ sơ không thành công hoặc không nhấn được nút Gửi hồ sơ, vui lòng kiểm tra lại nguyên nhân và thử các bước gợi ý sau.</p>
                                          <ul>
                                             <li>Hệ thống hiện chỉ hỗ trợ một tập tin được tải lên có các <strong>định dạng .doc, .docx hoặc .pdf</strong></li>
                                             <li>Nếu bạn có nhiều loại bằng cấp hay giấy tờ khác muốn đính kèm thêm, <strong>vui lòng gộp chung vào một tập tin theo đúng định dạng với tổng dung lượng không vượt quá 5MB</strong></li>
                                             <li><strong>Nâng cấp trình duyệt đang sử dụng lên phiên bản mới nhất</strong> (Firefox: 57 trở lên, Cốc Cốc: 75 trở lên, Microsoft Edge: MEdge 44 trở lên, Internet Explorer: 11 trở lên, Safari: 13.1
                                                trở lên)
                                             </li>
                                             <li>Vào phần thiết lập của trình duyệt để<strong> tắt chức năng chặn quảng cáo (Ads Block)</strong></li>
                                             <li>Chụp ảnh màn hình cùng mô tả cụ thể và gửi về bộ phận chăm sóc ứng viên của CareerBuilder: <a href="mailto:support@careerbuilder.vn" class="passChk"><b style="
                                                font-size: 14px;
                                                font-weight: normal;
                                                ">support@careerbuilder.vn<b></b></b></a> để được hỗ trợ thêm
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <span class="err_your_resume" style="display:none"></span> 
                                 </div>
                                 <div class="form-group form-checkbox">
                                    <input type="checkbox" name="chksendletter" id="chksendletter" value="1">
                                    <div class="checkbox-group">
                                       <label for="chksendletter">Sử dụng thư tự giới thiệu?</label>
                                       <ul class="list-sample">
                                          <li> <a class="sample-vn" href="javascript:void(0);">[Mẫu <b>tiếng Việt</b>]</a></li>
                                          <li> <a class="sample-en" href="javascript:void(0);">[Mẫu <b>tiếng Anh</b>]</a></li>
                                       </ul>
                                    </div>
                                    <textarea name="letter_content" id="letter_content"></textarea>
                                    <span class="err_letter_content" style="display:none"></span>
                                    <div class="notice">
                                       <p>Vui lòng không nhập quá 5000 ký tự</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="switch-box" style="display:none">
                                 <p>Tăng hơn 80% cơ hội tìm việc, <strong>Bạn có muốn lưu hồ sơ này không?</strong></p>
                                 <label for="save-resume">	
                                 <input type="checkbox" id="save-resume" value="allow">
                                 <span class="slider">
                                 <i class="icon mdi mdi-close"></i>
                                 </span>
                                 </label>
                              </div>
                              <div class="status-area" id="status_resume_17611557" style="display:none">
                                 <p>Chế độ tìm việc của hồ sơ</p>
                                 <div class="switch-status switch-status-element" id="cv_searchable_17611557" data-id="17611557" data-complete="1">
                                    <a href="javascript:void(0);" data-type="1" class="lock switch-status-element-1 active"><em class="mdi mdi-lock"></em>Khóa</a>
                                    <a href="javascript:void(0);" data-type="2" class="public switch-status-element-2 "><em class="mdi mdi-web"></em>Công khai</a>
                                    <a href="javascript:void(0);" data-type="3" class="flash switch-status-element-3 "><em class="mdi mdi-flash"></em>Khẩn cấp</a>
                                 </div>
                                 <div class="swap-content-1">
                                    <p class="content-1  active ">
                                       Bạn đang vô hiệu hóa hồ sơ này. Nhà tuyển dụng sẽ không thấy được hồ sơ này của bạn.
                                    </p>
                                    <p class="content-2 ">
                                       Hồ sơ của bạn đang ở trạng thái Công Khai. Nhà tuyển dụng có thể tìm thấy Hồ sơ này của bạn.
                                    </p>
                                    <p class="content-3 ">
                                       Hồ sơ của bạn sẽ được ưu tiên hiển thị cho các nhà tuyển dụng khi tìm kiếm ứng viên.
                                    </p>
                                 </div>
                              </div>
                              <div class="status-area" id="status_resume_17708653" style="display:none">
                                 <p>Chế độ tìm việc của hồ sơ</p>
                                 <div class="switch-status switch-status-element" id="cv_searchable_17708653" data-id="17708653" data-complete="1">
                                    <a href="javascript:void(0);" data-type="1" class="lock switch-status-element-1 active"><em class="mdi mdi-lock"></em>Khóa</a>
                                    <a href="javascript:void(0);" data-type="2" class="public switch-status-element-2 "><em class="mdi mdi-web"></em>Công khai</a>
                                    <a href="javascript:void(0);" data-type="3" class="flash switch-status-element-3 "><em class="mdi mdi-flash"></em>Khẩn cấp</a>
                                 </div>
                                 <div class="swap-content-1">
                                    <p class="content-1  active ">
                                       Bạn đang vô hiệu hóa hồ sơ này. Nhà tuyển dụng sẽ không thấy được hồ sơ này của bạn.
                                    </p>
                                    <p class="content-2 ">
                                       Hồ sơ của bạn đang ở trạng thái Công Khai. Nhà tuyển dụng có thể tìm thấy Hồ sơ này của bạn.
                                    </p>
                                    <p class="content-3 ">
                                       Hồ sơ của bạn sẽ được ưu tiên hiển thị cho các nhà tuyển dụng khi tìm kiếm ứng viên.
                                    </p>
                                 </div>
                              </div>
                              <div class="status-area" id="status_resume" style="display:none">
                                 <p>Chế độ tìm việc của hồ sơ</p>
                                 <div class="switch-status switch-status-element-replace" id="" data-id="" data-complete="">
                                    <a href="javascript:void(0);" data-type="1" class="lock switch-status-element-1 active"><em class="mdi mdi-lock"></em>Khóa</a>
                                    <a href="javascript:void(0);" data-type="2" class="public switch-status-element-2"><em class="mdi mdi-web"></em>Công khai</a>
                                    <a href="javascript:void(0);" data-type="3" class="flash switch-status-element-3 "><em class="mdi mdi-flash"></em>Khẩn cấp</a>
                                 </div>
                                 <div class="swap-content-1">
                                    <p class="content-1 active">
                                       Bạn đang vô hiệu hóa hồ sơ này. Nhà tuyển dụng sẽ không thấy được hồ sơ này của bạn.
                                    </p>
                                    <p class="content-2">
                                       Hồ sơ của bạn đang ở trạng thái Công Khai. Nhà tuyển dụng có thể tìm thấy Hồ sơ này của bạn.
                                    </p>
                                    <p class="content-3">
                                       Hồ sơ của bạn sẽ được ưu tiên hiển thị cho các nhà tuyển dụng khi tìm kiếm ứng viên.
                                    </p>
                                 </div>
                              </div>
                              <input type="hidden" value="0" id="rs_urgentjob" name="urgentjob">
                              <input type="hidden" value="0" id="rs_chk_searchable" name="chk_searchable">
                              <div class="choose-profile-modal" id="chooseresume" style="display: none; overflow: hidden;">
                                 <span id="resume1">
                                 Bạn đã có 5 hồ sơ trong hệ thống.
                                 </span>
                                 <p id="resume2">
                                    Vui lòng lựa chọn 1 hồ sơ mà bạn muốn thay thế.
                                 </p>
                                 <div class="list-radio-area" id="lstResume">
                                 </div>
                                 <ul>
                                    <li>
                                       <button class="btn btn-replace" id="btn-replace">Lưu thay đổi</button>
                                    </li>
                                    <li>
                                       <button class="btn btn-cancel">Không thay đổi</button>
                                    </li>
                                    <input type="hidden" value="0" id="resume-replace" name="resume_replace">
                                 </ul>
                              </div>
                              <div class="noti-modal" id="on_status" style="display: none;">
                                 <strong>js_urgentjob_resume_noti_title</strong>
                                 <p>
                                    js_urgentjob_resume_noti
                                 </p>
                                 <ul>
                                    <li>
                                       <button class="btn btn-update" onclick="$.fancybox.close();"> js_urgentjob_resume_change_status</button>
                                    </li>
                                    <li>
                                       <button class="btn btn-cancel" id="btn-cancel-modal">js_urgentjob_resume_skip</button>
                                    </li>
                                 </ul>
                              </div>
                           
                              <div class="form-group form-submit">
                                 <button class="btn-gradient" name="btnsubmit" id="btnsubmit" type="submit">Nộp Ứng Tuyển</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5 cus-col">
                     <div class="apply-form-job-detail">
                        <div class="title-h3">
                           <h3>Thông tin việc làm</h3>
                        </div>
                        <div class="table">
                           <table>
                              <tbody>
                                 <tr>
                                    <td>Vị trí / Chức danh:</td>
                                    <td><?= $job_post["job_title"] ?></td>
                                 </tr>
                                 <tr>
                                    <td>Công ty ứng tuyển:</td>
                                    <td><?= $job_post["company_name"] ?></td>
                                 </tr>
                                 <tr>
                                    <td>Nơi làm việc</td>
                                    <td class="address_work"></td>
                                 </tr>
                                 <tr>
                                    <td>Người liên hệ</td>
                                    <td><?= $job_post["contact_name"] ?></td>
                                 </tr>
                                 <tr>
                                    <td>Hết hạn nộp</td>
                                    <td><?= formatDate($job_post["end_date"]);?></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="employer">
                           <p><strong>Hình thức ứng tuyển:</strong> Hồ sơ trực tuyến<br> Nhà tuyển dụng sẽ nhận trực tiếp hồ sơ thông qua hệ thống ngay khi hoàn tất ứng tuyển. Ứng viên vui lòng không liên hệ qua email và số điện thoại.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="sample-vn-modal sample-modal" style="display: none">
            <div class="main-letter">
               <div class="head-letter">
                  <ul>
                     <li>[Ngày viết thư]</li>
                     <li>[Tên người liên hệ]</li>
                     <li>[chức danh nhà tuyển dụng]</li>
                     <li>[Tên công ty]</li>
                     <li>[Địa chỉ công ty]</li>
                     <li>[Email nhà tuyển dụng]</li>
                  </ul>
               </div>
               <div class="body-letter">
                  <p>Kính gửi anh (chị) [tên nhà tuyển dụng]</p>
                  <p>Tôi được biết công ty của anh chị đang cần tuyển dụng cho vị trí Trưởng phòng Kinh doanh thông qua website[tên website] . Tôi thấy rất thú vị trước thông tin của vị trí đang đăng tuyển này. Tôi tin rằng , với kinh nghiệm và khả năng
                     của mình, tôi hòan tòan đáp ứng được yêu cầu tuyển dụng cùa quý công ty.
                  </p>
                  <br>
                  <p>Đang làm việc cho một công ty nước ngoài chuyên về may mặc, tôi đang đảm nhiệm vị trí trưởng nhóm kinh doanh khu vực. Tôi đã đẩy mạnh được doanh thu của công ty chỉ trong vòng 6 tháng. Tôi thực sự muốn lặp lại thành công này một lần
                     nữa tại công ty của anh (chị).
                  </p>
                  <br>
                  <p>Với nghiệp vụ về kinh doanh và sự hiểu biết về marketing, tôi tin tôi sẽ là ứng cử viên sáng giá cho vị trí Trưởng phòng Kinh doanh. Tôi sẵn sàng bắt tay vào công việc tại công ty anh (chị) vào đầu tháng 6 này.</p>
                  <br>
                  <p>Rất mong có một buổi trao đổi với anh (chị) về công việc. Anh (chị ) có thể liên hệ với tôi qua số Điện thọai: [số điện thọai của bạn]</p>
                  <br>
                  <p> Cảm ơn Anh/Chị đã quan tâm dành thời gian để đọc thư,</p>
                  <br>
                  <p> Thân ái, </p>
               </div>
               <div class="foot-letter">
                  <ul>
                     <li>[Họ tên của bạn]</li>
                     <li>[Địa chỉ của bạn]</li>
                     <li>[Số điện thoại của bạn]</li>
                     <li>[Email của bạn]</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="sample-en-modal sample-modal" style="display: none">
            <div class="main-letter">
               <div class="head-letter">
                  <ul>
                     <li>[Date]</li>
                     <li>[name]</li>
                     <li>[Job Title]</li>
                     <li>[Company’s Name]</li>
                     <li>[Company’s Address]</li>
                     <li>[Email’s Employer]</li>
                  </ul>
               </div>
               <div class="body-letter">
                  <p>Dear Mr/Mrs [Name]</p>
                  <br>
                  <p>I have known that your company is recruiting Business Development Manager position through [name of web]. I am interested in this position. And I believe, with my experience and ability, I can meet recruiting requirements of company.</p>
                  <br>
                  <p>I have been working for import-export company with Business area leader position. I made turnover of company increase within 6 months. I really want to repeat this success in your company.</p>
                  <br>
                  <p>With professional competence of business and marketing knowledge, I believe I will be a prominent candidate for Business Manager position. I am ready for work in early June.</p>
                  <br>
                  <p>I look forward to hearing from you and to a possibility of an interview. You can contact me through phone.</p>
                  <br>
                  <p>Thank you for your time and consideration,</p>
                  <br>
                  <p>Best regards, </p>
               </div>
               <div class="foot-letter">
                  <ul>
                     <li>[Your Name]</li>
                     <li>[Your Address]</li>
                     <li>[Your Phone]</li>
                     <li>[Your Email]</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="back-drop"></div>
      </main>
      <style>
         /*common.css*/
         .reset-bullet {
         line-height: 1.5 !important;
         font-size: 16px !important;
         word-wrap: break-word
         }
         .reset-bullet ul {
         list-style: inherit !important
         }
         .reset-bullet ul li {
         list-style: disc
         }
         .reset-bullet ul li,
         .reset-bullet ol li {
         padding-bottom: 5px !important
         }
         .reset-bullet ul,
         .reset-bullet ol {
         padding-left: 30px !important
         }
         .mdi-history:before {
         content: "\f02da";
         }
         .job-item .bottom-right-icon ul li a i,
         .job-item .bottom-right-icon-new-2 ul li a i {
         margin-right: 8px;
         }
         #popup_overlay {
         background: rgb(30, 30, 30) !important;
         opacity: 0.9 !important
         }
         #popup_container.custom-jalert {
         border: 0;
         font-size: 14.5px;
         font-family: 'Barlow';
         color: #5d677a;
         width: 480px !important;
         max-width: 100% !important;
         }
         #popup_container.custom-jalert #popup_title {
         min-height: 48px;
         background: #eee;
         text-align: center;
         font-family: 'Barlow';
         font-size: 16px;
         color: #5d677a;
         text-transform: uppercase;
         border: 0;
         -webkit-box-align: center;
         -ms-flex-align: center;
         -webkit-box-pack: center;
         -ms-flex-pack: center;
         display: -webkit-box;
         display: -ms-flexbox;
         display: flex;
         align-items: center;
         justify-content: center
         }
         #popup_container.custom-jalert #popup_content {
         padding: 20px
         }
         #popup_container.custom-jalert #popup_message {
         background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/icon-confirm.png") top center no-repeat;
         padding-top: 120px
         }
         #popup_container.custom-jalert #popup_panel {
         margin-top: 30px
         }
         #popup_container.custom-jalert #popup_ok,
         #popup_container.custom-jalert #popup_cancel {
         padding: 5px 10px;
         border-radius: 5px;
         -webkit-transition: all 0.4s ease-in-out;
         -o-transition: all 0.4s ease-in-out;
         transition: all 0.4s ease-in-out;
         border: 0;
         font-size: 14.5px;
         text-decoration: none;
         text-transform: uppercase;
         margin-bottom: 10px;
         }
         #popup_container.custom-jalert #popup_ok {
         background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
         background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
         background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
         background-size: 200% 100%;
         color: #fff
         }
         #popup_container.custom-jalert #popup_ok:hover {
         background-position: 100% 0
         }
         #popup_container.custom-jalert #popup_cancel {
         color: #5d677a
         }
         .page-heading-tool {
         padding: 10px 0
         }
         .page-heading-tool .change-display {
         width: auto;
         padding: 0;
         margin-right: -13px
         }
         .page-heading-tool .change-display ul li+li {
         padding-left: 10px
         }
         .search-result,
         .search-result-list {
         padding-top: 10px
         }
         .search-result .side-wrapper {
         top: 150px
         }
         .job-item .figure .image {
         background-color: #fff
         }
         .job-item .figure .caption .salary {
         color: #008563 !important;
         }
         .job-item .figure .caption .welfare li {
         font-size: 13px
         }
         .job-item .bottom-right-icon {
         bottom: 33px
         }
         .job-item .bottom-right-icon ul {
         float: left;
         width: 100%;
         display: block
         }
         .search-result-list .jobs-side-list {
         padding: 0
         }
         .search-result-list .job-item .figure {
         padding: 15px
         }
         .search-result-list .job-item:first-child .figure {
         border-top: 0
         }
         footer {
         clear: both
         }
         .search-result-list .job-item .figure .caption,
         .job-item .bottom-right-icon {
         font-size: 15px
         }
         .search-result-list .job-item .figure .title {
         margin-top: 5px
         }
         .search-result-list .job-item .figure .title span.new {
         font-size: 12px;
         color: red;
         text-transform: uppercase
         }
         .search-result-list .job-item .figure .caption .welfare {
         margin-top: 10px
         }
         .job-item .bottom-right-icon ul li a {
         display: block
         }
         .job-item .bottom-right-icon ul li a span {
         margin-right: 0;
         margin-left: 8px
         }
         .job-item .bottom-right-icon ul li+li {
         display: block;
         margin-left: 0
         }
         .job-item .bottom-right-icon ul li+li:before {
         content: "";
         margin-right: 0
         }
         .chosen-container .search-choice span {
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis;
         display: block
         }
         .job-detail-content .job-detail-bottom {
         clear: both
         }
         #popup_login_form input.error {
         border: 1px solid red
         }
         #popup_login_form input.error::placeholder {
         color: red
         }
         #popup_login_form input.error:focus,
         #popup_login_form input.error:active {
         outline: none;
         }
         .main-job-alert .information {
         height: 100%
         }
         .dtpicker-twoButtons a:not([href]):not([tabindex]),
         .dtpicker-twoButtons a:not([href]):not([tabindex]):hover,
         .dtpicker-twoButtons a:not([href]):not([tabindex]):focus {
         color: #ffffff;
         }
         .job-detail-bottom-banner img,
         .job-bottom-banner img,
         .banner-ad img {
         height: auto !important
         }
         .search-result-list .job-item .figure .image a {
         display: flex;
         width: 100%;
         height: 100%;
         align-items: center;
         justify-content: center
         }
         .job-detail-content .detail-box .map p a {
         display: inline-block;
         }
         .maps-modal .tabs-toggle .item {
         color: #5d677a;
         text-decoration: none;
         }
         .main-box.active {
         background-color: #FFFFFF;
         -webkit-transition: background-color 1000ms linear;
         -moz-transition: background-color 1000ms linear;
         -o-transition: background-color 1000ms linear;
         -ms-transition: background-color 1000ms linear;
         transition: background-color 1000ms linear
         }
         .swiper-nav.swiper-button-disabled,
         .swiper-nav.swiper-button-disabled:hover,
         .swiper-nav.swiper-button-disabled:focus {
         background: none !important;
         border: 0 !important;
         cursor: auto !important;
         outline: none
         }
         .swiper-nav.swiper-button-disabled span,
         .swiper-nav.swiper-button-disabled:hover span {
         display: none !important;
         border: 0 !important;
         cursor: auto !important
         }
         .swiper-nav.swiper-button-disabled span,
         .swiper-nav.swiper-button-disabled:hover span {
         display: none !important;
         border: 0 !important;
         cursor: auto !important
         }
         .searchable-cv-widget a {
         -ms-flex: 0 0 33.333333%;
         flex: 0 0 33.333333%;
         max-width: 33.333333%
         }
         .jobalert-cv-widget a {
         -ms-flex: 0 0 50%;
         flex: 0 0 50%;
         max-width: 50%
         }
         .switch-status {
         display: -ms-flexbox;
         display: flex;
         background-color: #fff;
         border: 4px solid #fff;
         border-radius: 26px;
         margin-bottom: 20px
         }
         .switch-status a {
         display: inline-block;
         padding: 10px 0;
         color: #5d677a;
         text-align: center;
         border-radius: 26px;
         font-size: 14.5px;
         font-weight: bold
         }
         .switch-status a:hover {
         text-decoration: none
         }
         .switch-status .inactive:hover,
         .switch-status .inactive.focus {
         background-color: #f5f6f7;
         color: #000
         }
         .switch-status .passive:hover,
         .switch-status .passive.focus {
         background-color: #2f4ba0;
         color: #fff
         }
         .switch-status .actives:hover,
         .switch-status .actives.focus {
         background-color: #00b2a3;
         color: #fff
         }
         @media (min-width:768px) {
         .search-result-list .job-item .figure .image {
         height: 135px
         }
         .search-result-list .job-item .figure .figcaption {
         max-width: calc(100% - 310px)
         }
         .job-item .bottom-right-icon ul li {
         float: left;
         width: 100%;
         display: block;
         text-align: right
         }
         }
         @media (max-width:768px) {
         .container {
         padding: 0 15px;
         }
         .job-item .bottom-right-icon ul {
         float: none;
         display: flex;
         justify-content: center;
         }
         }
         .non-member-form .save-and-allow {
         margin-bottom: 30px
         }
         .non-member-form .form-captcha,
         .member-form .form-captcha {
         float: left;
         width: 100%
         }
         .non-member-form .form-submit,
         .member-form .form-submit {
         clear: both;
         padding-top: 0 !important
         }
         .cb-box-find .reset-form,
         .cb-box-find .main-box .toggle-search {
         float: left;
         width: 50%
         }
         .cb-box-find .reset-form {
         font-size: 14.5px;
         margin-top: 10px
         }
         .cb-box-find .reset-form a {
         color: #5d677a;
         }
         .cb-box-find .reset-form i.fa {
         display: inline-block;
         padding-right: 5px
         }
         .cb-box-find .main-box .find-jobs {
         clear: both
         }
         #tooltip-copy {
         display: none;
         margin-left: 150px;
         padding: 5px 10px;
         background-color: #2aba2a;
         border-radius: 4px;
         color: #fff;
         top: 110px;
         position: absolute;
         z-index: 99999
         }
         .search-result-list-page .switch-group .toolip {
         z-index: 21
         }
         .search-result-list .job-bottom-banner {
         margin: 0
         }
         .search-result-list .job-bottom-banner img,
         .search-result-list .job-bottom-banner embed,
         .search-result-list .job-bottom-banner iframe {
         margin-bottom: 30px
         }
         .text-industryInfo {
         display: -ms-flexbox;
         display: flex;
         padding: 40px 0;
         background-color: rgba(245, 245, 245, .4);
         }
         .text-industryInfo h2 {
         font-size: 18px;
         font-weight: normal;
         padding-bottom: 10px;
         }
         .text-industryInfo p {
         padding-bottom: 10px
         }
         .text-industryInfo ul {
         list-style: inherit !important
         }
         .text-industryInfo ul li {
         list-style: disc
         }
         .text-industryInfo ul li,
         .text-industryInfo ol li {
         padding-bottom: 5px !important;
         padding-left: 10px !important
         }
         .text-industryInfo ul,
         .text-industryInfo ol {
         padding-left: 40px !important
         }
         .text-industryInfo a {
         color: #2f4ba0 !important
         }
         .text-industryInfo,
         .text-industryInfo h2,
         .text-industryInfo span,
         .text-industryInfo p,
         .text-industryInfo ul li,
         .text-industryInfo a {
         font-family: 'Barlow' !important
         }
         .pointer {
         cursor: pointer;
         }
         .job-found .job-found-amout {
         max-width: 60%;
         }
         .job-found .job-found-amout p,
         .job-found .job-found-amout h1 {
         max-width: 450px;
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap;
         }
         .autocomplete-suggestions {
         scrollbar-width: thin;
         scrollbar-color: #00b2a3 #cdcdcd
         }
         .autocomplete-suggestions::-webkit-scrollbar {
         width: 6px !important;
         }
         .autocomplete-suggestions::-webkit-scrollbar-track {
         background: #eaeaea !important;
         }
         .autocomplete-suggestions::-webkit-scrollbar-thumb {
         background: #00b2a3 !important;
         }
         .autocomplete-suggestions::-webkit-scrollbar-thumb:hover {
         background: #00b2a3 !important;
         }
      </style>
      <a class="feedback-btn" data-fancybox data-type="ajax" data-src="https://careerbuilder.vn/vi/jobseekers/index/sendfeedback?from=jobseeker&newlayout=1" title="Feedback" href="javascript:void(0);"><span>Feedback</span></a>
   </body>
</html>
<!--End New Layout CB -->