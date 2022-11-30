<main>
        <style>
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

            /*apply-form-success-new.css*/

            .cb-section {
                padding: 20px 0
            }

            .justify-content-center {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .btn {
                display: inline-block;
                font-weight: 500;
                color: #212529;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                padding: 5px 20px;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 8px;
                transition: all 200ms ease-in
            }

            .btn:focus {
                outline: 0;
                border: 0
            }

            .btn-gradient {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 8px 20px;
                border-radius: 5px;
                background-image: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
                background-image: -o-linear-gradient(left, #42ecce, #00b2a3, #42ecce);
                background-image: linear-gradient(to right, #42ecce, #00b2a3, #42ecce);
                color: #fff;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                text-decoration: none;
                transition: all 0.4s ease-in-out;
                -webkit-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
            }

            .btn-gradient:hover {
                background-position: 100% 0;
                text-decoration: none;
                color: #fff
            }

            .ads-zone img {
                width: 100%;
                max-width: 1440px
            }

            .job-item {
                position: relative;
            }

            .job-item a {
                text-decoration: none;
            }

            .job-item .figure {
                -ms-flex-wrap: wrap;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                flex-wrap: wrap;
                padding: 15px 10px;
                overflow: hidden;
                border-top: 1px solid #e5e5e5;
                border-right: 1px solid #e5e5e5;
                border-radius: 5px;
                border-top-left-radius: 4px;
                transition: 0.4s ease-in-out all;
            }

            .job-item .figure .image {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 79px;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 79px;
                align-items: center;
                justify-content: center;
                max-width: 79px;
                height: 79px;
                padding: 5px;
                border: 1px solid #e5e5e5;
                border-radius: 5px;
            }

            .job-item .figure .image img {
                max-width: 100%;
                max-height: 100%;
            }

            .job-item .figure .figcaption {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                max-width: calc(100% - 79px);
                padding-left: 15px;
            }

            .job-item .figure .title {
                margin-bottom: 3px;
            }

            .job-item .figure .title p,
            .job-item .figure .title a {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                color: #172642;
                font-size: 16px;
                font-weight: 700;
                line-height: 1.2;
                text-overflow: ellipsis;
            }

            .job-item .figure .title.is-orange p,
            .job-item .figure .title.is-orange a {
                color: #e8c80d;
            }

            .job-item .figure .title.is-red p,
            .job-item .figure .title.is-red a {
                color: #fc0821;
            }

            @media (max-width:576px) {
                .job-item .figure .title p,
                .job-item .figure .title a {
                    -webkit-line-clamp: initial;
                }
            }

            .job-item .figure .caption {
                color: #5d677a;
                font-size: 14.5px;
                line-height: 1.4;
            }

            .job-item .figure .caption .salary {
                color: #008563;
            }

            .job-item .figure .caption .company-name {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                color: #5d677a;
                text-overflow: ellipsis;
                width: 90%
            }

            @media (max-width:576px) {
                .job-item .figure .caption .company-name {
                    -webkit-line-clamp: initial;
                }
            }

            .job-item .figure .caption .welfare {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .job-item .figure .caption .welfare li {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .job-item .figure .caption .welfare li span {
                margin-right: 4px;
                line-height: initial;
            }

            .job-item .figure .caption .welfare li+li {
                margin-left: 12px;
            }

            .job-item .figure .caption .location p {
                -webkit-box-orient: vertical;
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                display: -webkit-box;
                height: 21px;
                padding-left: 0;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .job-item .figure .caption .location p+p {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .job-item .figure .caption .location p+p:before {
                margin: 0;
                margin-right: 8px;
                content: "|";
            }

            .job-item .figure .caption .location ul {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .job-item .figure .caption .location ul li {
                padding-left: 0;
            }

            .job-item .figure .caption .location ul li+li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .job-item .figure .caption .location ul li+li:before {
                margin: 0;
                margin-right: 8px;
                margin-left: 8px;
                content: "|";
            }

            .job-item .figure .top-icon {
                display: none;
                z-index: 11;
                position: absolute;
                top: 0;
                right: 0;
            }

            .job-item .figure .top-icon span {
                margin-bottom: 2px;
            }

            .job-item .figure .top-icon .top {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 32px;
                height: 16px;
                padding: 1.5px 4.5px;
                border-top-right-radius: 4px;
                border-bottom-left-radius: 4px;
                background: #e8c80d;
                color: #ffffff;
                font-size: 12px;
                line-height: 1;
                text-transform: uppercase;
            }

            .job-item .figure .top-icon .new {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 32px;
                height: 16px;
                padding: 1.5px 4.5px;
                border-top-right-radius: 4px;
                border-bottom-left-radius: 4px;
                background: none;
                color: #ff0000;
                font-size: 12px;
                font-weight: 600;
                line-height: 1;
                text-transform: uppercase;
            }

            @media (max-width:1200px) {
                .job-item .figure .top-icon {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    top: 2px;
                }
                .job-item .figure .top-icon span {
                    margin-bottom: 0;
                    margin-left: 2px;
                }
            }

            .job-item .figure .timeago {
                font-size: 12px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .job-item .figure .timeago span {
                color: red;
            }

            .job-item .bottom-right-icon,
            .job-item .bottom-right-icon-new-2 {
                position: absolute;
                right: 30px;
                bottom: 25px;
            }

            .job-item .bottom-right-icon .applied-icon,
            .job-item .bottom-right-icon-new-2 .applied-icon {
                max-width: 92px;
                margin-left: auto;
                padding: 1.5px 3px;
                border-radius: 0 4px 0 4px;
                background: #2f4ba0;
                color: #fff;
                font-size: 12px;
                text-align: center;
            }

            .job-item .bottom-right-icon ul,
            .job-item .bottom-right-icon-new-2 ul {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin-top: 10px;
            }

            .job-item .bottom-right-icon ul li a,
            .job-item .bottom-right-icon-new-2 ul li a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                color: inherit;
                text-decoration: none;
            }

            .job-item .bottom-right-icon ul li a span,
            .job-item .bottom-right-icon-new-2 ul li a span {
                margin-right: 8px;
            }

            .job-item .bottom-right-icon ul li a:hover,
            .job-item .bottom-right-icon-new-2 ul li a:hover {
                color: #e8c80d;
            }

            .job-item .bottom-right-icon ul li a.saved,
            .job-item .bottom-right-icon-new-2 ul li a.saved {
                color: rgba(93, 103, 122, 0.5);
            }

            .job-item .bottom-right-icon ul li+li,
            .job-item .bottom-right-icon-new-2 ul li+li {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                margin-left: 15px;
            }

            .job-item .bottom-right-icon ul li+li:before,
            .job-item .bottom-right-icon-new-2 ul li+li:before {
                margin-right: 15px;
                content: "|";
            }

            .job-item .bottom-right-icon.check-box .check,
            .job-item .bottom-right-icon-new-2.check-box .check {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: flex-end;
            }

            .job-item .bottom-right-icon.check-box .check label,
            .job-item .bottom-right-icon-new-2.check-box .check label {
                position: relative;
                padding-left: 25px;
                cursor: pointer;
            }

            .job-item .bottom-right-icon.check-box .check label:before,
            .job-item .bottom-right-icon-new-2.check-box .check label:before {
                position: absolute;
                top: -22px;
                left: 0;
                color: #5d677a;
                font-family: "Material Design Icons";
                font-size: 24px;
                content: "\f131";
            }

            .job-item .bottom-right-icon.check-box .check input,
            .job-item .bottom-right-icon-new-2.check-box .check input {
                display: none;
            }

            .job-item .bottom-right-icon.check-box .check input:checked,
            .job-item .bottom-right-icon-new-2.check-box .check input:checked {
                background: black;
            }

            .job-item .bottom-right-icon.check-box .check input:checked~label:before,
            .job-item .bottom-right-icon-new-2.check-box .check input:checked~label:before {
                color: #5d677a;
                content: "\f132";
            }

            .job-item.has-background {
                margin-bottom: 10px;
                background: #ebf8ff;
            }

            .job-item.has-background .figure {
                border-top: 0;
            }

            .job-item.active {
                border: 1px solid #00b2a3;
            }

            @media (max-width:1025px) {
                .job-item .figure .caption .welfare {
                    display: none;
                }
            }

            @media (max-width:576px) {
                .job-item .figure {
                    padding: 20px 15px 10px 15px;
                }
                .job-item .figure .title h3 {
                    -o-text-overflow: ellipsis;
                    -webkit-line-clamp: 1;
                    -webkit-box-orient: vertical;
                    display: -webkit-box;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }
                .job-item .bottom-right-icon,
                .job-item .bottom-right-icon-new-2 {
                    position: static;
                    width: 100%;
                    margin-top: 10px;
                    padding: 0 15px 20px 15px;
                    text-align: right;
                }
                .job-item .bottom-right-icon ul,
                .job-item .bottom-right-icon-new-2 ul {
                    -webkit-box-pack: end;
                    -ms-flex-pack: end;
                    justify-content: flex-end;
                }
            }

            .is-browser-IE .job-item .figure .image img {
                width: 100%;
            }

            .job-item .figure:hover {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .job-item .figure .title a:hover {
                color: #e8c80d;
            }

            .cb-job-hunt,
            .career-development {
                border-bottom: 1px solid #e9e9e9;
            }

            .cb-job-hunt .cb-title h2 {
                margin-bottom: 10px;
                color: #00b72f;
            }

            .cb-job-hunt .cb-title a:hover {
                text-decoration: none;
            }

            .cb-job-hunt .cb-description {
                margin-bottom: 20px;
                color: #5d677a;
                font-size: 16px;
                font-weight: 500;
                text-align: center;
            }

            .cb-job-hunt .cb-description bold {
                color: #2f4ba0;
                font-size: 16px;
                font-weight: 700;
            }

            .company-follow {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .company-follow .form-group {
                position: relative;
                min-width: 50px;
                margin-bottom: 9px;
            }

            .company-follow .form-group label {
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

            .company-follow .form-group .slider {
                -webkit-transition: 0.4s;
                -o-transition: 0.4s;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                top: -5px;
                right: 0;
                width: 35px;
                height: 18px;
                border-radius: 9px;
                background-color: #ccc;
                cursor: pointer;
                transition: 0.4s;
            }

            .company-follow .form-group .slider::before {
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

            .company-follow .form-group input {
                display: none;
            }

            .company-follow .form-group input:checked~.slider {
                background-color: #2aba2a;
            }

            .company-follow .form-group input:focus~.slider {
                -webkit-box-shadow: 0 0 1px #2aba2a;
                box-shadow: 0 0 1px #2aba2a;
            }

            .company-follow .form-group input:checked~.slider::before {
                -webkit-transform: translate(16px, -50%);
                -ms-transform: translate(16px, -50%);
                transform: translate(16px, -50%);
            }

            .company-follow .txt-follow {
                margin-left: 10px;
                color: #172642
            }

            .cb-recommended-jobs-hunt .cus-row,
            .cb-recommended-jobs-hunt .recommended-jobs .row>* {
                margin-bottom: 0;
            }

            .cb-recommended-jobs-hunt .job-item {
                border-bottom: 1px solid #e9e9e9;
            }

            .cb-recommended-jobs-hunt .job-item .figure {
                border: none;
            }

            .cb-recommended-jobs-hunt .job-item .figure .caption .salary {
                color: #008563;
            }

            .cb-recommended-jobs-hunt .job-item .figure .caption .salary em {
                width: 15px;
                text-align: center;
            }

            .cb-recommended-jobs-hunt .job-item .figure .caption .location {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .cb-recommended-jobs-hunt .job-item .figure .caption .location em {
                width: 15px;
            }

            @media (max-width:576px) {
                .cb-recommended-jobs-hunt .job-item .figure .title {
                    padding-right: 65px;
                }
            }

            .cb-recommended-jobs-hunt .job-item .already-icon {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                max-width: 92px;
                height: 16px;
                margin-top: 2px;
                border-top-right-radius: 4px;
                border-bottom-left-radius: 4px;
                background: #2f4ba0;
            }

            .cb-recommended-jobs-hunt .job-item .already-icon span {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
                font-size: 12px;
                font-weight: 700;
            }

            .cb-recommended-jobs-hunt .job-item .apply-now {
                color: #2f4ba0;
                font-size: 16px;
                font-weight: 500;
                z-index: 11;
                position: absolute;
                top: 45px;
                right: 15px;
            }

            .cb-recommended-jobs-hunt .cus-col:last-child .job-item {
                border-bottom: none;
            }

            @media (min-width:576px) {
                .cb-recommended-jobs-hunt .cus-col:last-child .job-item {
                    border-bottom: 1px solid #e9e9e9;
                }
            }

            @media (min-width:1025px) {
                .cb-recommended-jobs-hunt .job-item .figure {
                    border-radius: 0;
                }
                .cb-recommended-jobs-hunt .job-item .figure .top-icon {
                    top: 10px;
                    right: 10px;
                }
                .cb-recommended-jobs-hunt .job-item .figure .figcaption {
                    padding-left: 20px;
                }
                .cb-recommended-jobs-hunt .job-item .figure:hover .figcaption .title a {
                    text-decoration: none;
                }
            }

            .apply-slted {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: end;
                justify-content: flex-end;
                margin-top: 20px
            }

            .apply-slted a {
                margin-left: 15px
            }

            .apply-slted .viewjob-more {
                color: #2f4ba0;
                font-size: 14.5px;
                font-weight: 700
            }

            .site-list .ifm-chart {
                width: 100%;
                border: 0;
                min-height: 370px
            }

            .site-list .row,
            .site-list .image {
                margin-bottom: 0
            }

            .site-list .txt-site {
                font-size: 24px;
                margin: 0
            }

            .site-list .txt-site a {
                color: #008c45;
            }

            .site-list .txt-site p:first-child {
                color: #008c45;
                font-size: 30px;
                font-weight: bold;
                margin-bottom: 5px
            }

            @media screen and (max-width:768px) {
                .site-list .txt-site {
                    font-size: 18px;
                }
                .site-list .txt-site p:first-child {
                    font-size: 26px;
                    margin-bottom: 0
                }
            }

            @media screen and (max-width:480px) {
                .site-list .txt-site {
                    font-size: 16px;
                }
                .site-list .txt-site p:first-child {
                    font-size: 23px;
                }
            }

            .des {
                margin-bottom: 20px;
                color: #5d677a;
                font-size: 16px;
                font-weight: 500;
                text-align: center;
            }

            @media (min-width:768px) {
                .des {
                    font-size: 18px;
                }
            }

            @media (min-width:1024px) {
                .des {
                    font-size: 20px;
                }
            }

            @media (min-width:1200px) {
                .des {
                    font-size: 24px;
                }
            }

            .career-map-active-4 {
                background-color: #ebf8ff
            }

            .career-map-active-4 .cb-title h2 {
                margin-bottom: 10px;
                line-height: 1.1;
            }

            .career-map-active-4 .des {
                margin-bottom: 10px;
            }

            .career-map-active-4 .main-career ul {
                -ms-flex-wrap: wrap;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin: 0 -5px;
            }

            .career-map-active-4 .main-career ul li {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                margin-top: 20px;
                padding: 0 5px;
                text-align: center;
            }

            .career-map-active-4 .main-career ul li .icon {
                position: relative;
                padding-bottom: 4px;
            }

            .career-map-active-4 .main-career ul li .dotted {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                z-index: 11;
                position: absolute;
                top: 100%;
                left: 48%;
                width: 12px;
                height: 12px;
                transform: translateX(-50%);
            }

            .career-map-active-4 .main-career ul li .dotted:before {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                position: absolute;
                top: 50%;
                left: 50%;
                width: 12px;
                height: 12px;
                transform: translate(-50%, -50%);
                border: 1px solid #85ce3f;
                border-radius: 50%;
                background: #ffffff;
                content: "";
            }

            .career-map-active-4 .main-career ul li .dotted::after {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                position: absolute;
                top: 50%;
                left: 50%;
                width: 2px;
                height: 2px;
                transform: translate(-50%, -50%);
                border: 1px solid #85ce3f;
                border-radius: 50%;
                background: #ffffff;
                content: "";
            }

            .career-map-active-4 .main-career ul li .name {
                padding-top: 15px;
            }

            .career-map-active-4 .main-career ul li .name h3 {
                margin-bottom: 10px;
                color: #85ce3f;
                font-size: 16px;
                font-weight: 700;
                line-height: 1.1;
                text-decoration: none;
                text-transform: uppercase;
            }

            @media (min-width:1024px) {
                .career-map-active-4 .main-career ul li .name h3 {
                    font-size: 18px;
                }
            }

            .career-map-active-4 .main-career ul li .name p {
                color: #333333;
                font-size: 16px;
                font-weight: 500;
                line-height: 1.2;
            }

            .career-map-active-4 .main-career ul li.careerbuilder .dotted::before,
            .career-map-active-4 .main-career ul li.careerbuilder .dotted:after {
                border: 1px solid #85ce3f;
            }

            .career-map-active-4 .main-career ul li.careerbuilder .name h3 {
                color: #85ce3f;
            }

            .career-map-active-4 .main-career ul li.cvhay .dotted::before,
            .career-map-active-4 .main-career ul li.cvhay .dotted:after {
                border: 1px solid #2f4ba0;
            }

            .career-map-active-4 .main-career ul li.cvhay .name h3 {
                color: #2f4ba0;
            }

            .career-map-active-4 .main-career ul li.vietnamsalary .dotted::before,
            .career-map-active-4 .main-career ul li.vietnamsalary .dotted:after {
                border: 1px solid #63c0b9;
            }

            .career-map-active-4 .main-career ul li.vietnamsalary .name h3 {
                color: #63c0b9;
            }

            .career-map-active-4 .main-career ul li.vieclamit .dotted::before,
            .career-map-active-4 .main-career ul li.vieclamit .dotted:after {
                border: 1px solid #e78523;
            }

            .career-map-active-4 .main-career ul li.vieclamit .name h3 {
                color: #e78523;
            }

            .career-map-active-4 .main-career ul li.talent-company .dotted::before,
            .career-map-active-4 .main-career ul li.talent-company .dotted:after {
                border: 1px solid #fdb816;
            }

            .career-map-active-4 .main-career ul li.talent-company .name h3 {
                color: #fdb816;
            }

            @media (min-width:600px) {
                .career-map-active-4 .main-career ul li {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 33.3333%;
                    flex: 0 0 33.3333%;
                    max-width: 33.3333%;
                }
                .career-map-active-4 .main-career ul li .dotted {
                    left: 47.5%;
                }
            }

            @media (min-width:1024px) {
                .career-map-active-4 .main-career ul li {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 20%;
                    position: relative;
                    flex: 0 0 20%;
                    max-width: 20%;
                    padding: 15px;
                }
                .career-map-active-4 .main-career ul li:before {
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    -webkit-transition: 0.4s ease-in-out all;
                    -o-transition: 0.4s ease-in-out all;
                    -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: calc(100% - 10px);
                    height: 100%;
                    transform: translate(-50%, -50%);
                    border: 1px solid #e5e5e5;
                    border-radius: 10px;
                    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                    content: "";
                    opacity: 0;
                    pointer-events: none;
                    transition: 0.4s ease-in-out all;
                }
                .career-map-active-4 .main-career ul li .dotted {
                    left: 46.5%;
                }
                .career-map-active-4 .main-career ul li .name {
                    padding-top: 20px;
                }
                .career-map-active-4 .main-career ul li:hover:before {
                    opacity: 1;
                }
                .career-map-active-4 .main-career ul li:hover .name h3 {
                    text-decoration: underline;
                }
            }

            @media (min-width:1024px) {
                .career-map-active-4 .main-career ul {
                    position: relative;
                }
                .career-map-active-4 .main-career ul:before {
                    -webkit-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    position: absolute;
                    top: 140.5px;
                    left: 50%;
                    width: 100%;
                    height: 5px;
                    transform: translateX(-50%);
                    border-top: 2px dashed #e8effd;
                    content: "";
                    pointer-events: none;
                }
            }

            @media (min-width:1200px) {
                .career-map-active-4 .col-xl-10 {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 1200px;
                    flex: 0 0 1200px;
                    width: 100%;
                    max-width: 1200px;
                }
            }

            .talent-network .row {
                margin: 0 -10px -10px;
            }

            .talent-network .row>* {
                margin-bottom: 20px;
                padding: 0 10px;
            }

            .talent-network .row.align-items-center {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .talent-network .item {
                position: relative;
                border: 1px solid #e9e9e9;
                background: #fff;
            }

            .talent-network .item:before {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                -webkit-transition: 0.3s ease-in-out all;
                -o-transition: 0.3s ease-in-out all;
                z-index: 1;
                position: absolute;
                top: 50%;
                left: 50%;
                width: calc(100% + 2px);
                height: calc(100% + 2px);
                transform: translate(-50%, -50%);
                border-radius: 3px;
                background: -webkit-gradient(linear, left top, right top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
                background: -o-linear-gradient(left, #42ecce, #00b2a3, #42ecce);
                background: linear-gradient(to right, #42ecce, #00b2a3, #42ecce);
                content: "";
                opacity: 0;
                transition: 0.3s ease-in-out all;
            }

            .talent-network .item .image {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                z-index: 2;
                position: relative;
                align-items: center;
                justify-content: center;
                height: 90px;
                background: #fff;
            }

            .talent-network .item:hover:before {
                opacity: 1;
            }

            .talent-network .title-wrap {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 284px;
            }

            .talent-network .title-wrap .title {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
            }

            .talent-network .title-wrap .title .quote-left {
                padding-right: 10px;
            }

            .talent-network .title-wrap .title .quote-right {
                -webkit-box-align: end;
                -ms-flex-align: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: flex-end;
                margin-bottom: -20px;
                padding-left: 5px;
            }

            .talent-network .title-wrap .title h2 {
                display: inline-block;
                color: #e8c80d;
                font-size: 1.8rem;
                font-weight: 700;
            }

            .talent-network .title-wrap .title h2 span {
                display: block;
                color: #2f4ba0;
                font-size: 1.3rem;
                text-align: right;
            }

            @media screen and (max-width:1280px) {
                .talent-network .title-wrap .title .quote-left img {
                    width: 40px;
                }
                .talent-network .title-wrap .title .quote-right img {
                    width: 28px;
                }
            }

            @media screen and (max-width:1200px) {
                .talent-network .title-wrap .title .quote-left img {
                    width: 40px;
                }
                .talent-network .title-wrap .title h2 {
                    font-size: 1.4rem;
                }
                .talent-network .title-wrap .title h2 span {
                    font-size: 1rem;
                }
            }

            .career-development .career-development-slide {
                position: relative;
            }

            .career-development .swiper-prev,
            .career-development .swiper-next {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                z-index: 20;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                outline: none;
                cursor: pointer;
            }

            .career-development .swiper-prev span,
            .career-development .swiper-next span {
                font-size: 32px;
            }

            .career-development .swiper-prev {
                left: -40px;
            }

            .career-development .swiper-next {
                right: -40px;
            }

            .career-development .item {
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                position: relative;
                overflow: hidden;
                border: 2px solid transparent;
                border-radius: 5px;
                transition: 0.3s all;
            }

            .career-development .item .img {
                display: block;
                position: relative;
                padding-top: 100%;
            }

            .career-development .item .img img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .career-development .item .caption {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 115px;
                padding: 15px;
                text-align: center;
            }

            .career-development .item .caption .category-title {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                color: #5d677a;
                font-size: 13px;
                letter-spacing: 0.05rem;
                text-overflow: ellipsis;
                text-transform: uppercase;
            }

            .career-development .item .caption .title,
            .career-development .item .caption a {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                color: #182642;
                font-size: 18px;
                font-weight: 700;
                text-overflow: ellipsis;
            }

            .career-development .item.bg-trends .caption {
                background: rgba(226, 245, 255, 0.9);
            }

            .career-development .item.bg-tips .caption {
                background: rgba(226, 255, 242, 0.9);
            }

            .career-development .item.bg-self .caption {
                background: rgba(255, 244, 226, 0.9);
            }

            .career-development .item.bg-default .caption {
                background: rgba(226, 245, 255, 0.9);
            }

            .career-development .item:hover {
                -webkit-box-shadow: 0 0 15px rgba(45, 123, 183, 0.5);
                border: 2px solid #2f4ba0;
                box-shadow: 0 0 15px rgba(45, 123, 183, 0.5);
            }

            @media screen and (max-width:1441px) {
                .career-development .swiper-prev,
                .career-development .swiper-next {
                    color: #fff;
                }
                .career-development .swiper-prev {
                    left: 0;
                }
                .career-development .swiper-next {
                    right: 0;
                }
            }

            .career-map-active-5 {
                padding: 10px 0;
                background-size: cover;
            }

            .career-map-active-5 .list-number {
                -ms-flex-wrap: wrap;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                max-width: 1170px;
                margin: 0 auto;
                text-align: center;
            }

            .career-map-active-5 .item-number {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 100%;
                flex-direction: column;
                align-items: center;
                justify-items: center;
                max-width: 100%;
                margin-top: 20px;
            }

            .career-map-active-5 .item-number:first-child {
                margin-top: 0;
            }

            @media (min-width:576px) {
                .career-map-active-5 .item-number {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .career-map-active-5 .item-number:nth-child(2) {
                    margin-top: 0;
                }
            }

            @media (min-width:768px) {
                .career-map-active-5 .item-number {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 33.3333%;
                    flex: 0 0 33.3333%;
                    max-width: 33.3333%;
                    margin-top: 0;
                }
            }

            .career-map-active-5 .number {
                margin-top: 15px;
            }

            .career-map-active-5 .number span {
                color: #ffffff;
                font-size: 20px;
                font-weight: 700;
                line-height: 1;
            }

            @media (min-width:768px) {
                .career-map-active-5 .number span {
                    font-size: 24px;
                }
            }

            @media (min-width:1024px) {
                .career-map-active-5 .number {
                    margin-top: 20px;
                }
                .career-map-active-5 .number span {
                    font-size: 26px;
                }
            }

            @media (min-width:1200px) {
                .career-map-active-5 .number span {
                    font-size: 30px;
                }
            }

            .career-map-active-5 .name {
                margin-top: 10px;
            }

            .career-map-active-5 .name h3 {
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                line-height: 1;
                text-transform: uppercase;
            }

            .career-map-active-5 .name h3 span {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                margin-top: 10px;
                color: #182642;
                font-size: 16px;
                font-weight: 500;
                text-transform: none;
            }

            @media (min-width:1024px) {
                .career-map-active-5 .name {
                    margin-top: 13px;
                }
            }

            @media (min-width:1200px) {
                .career-map-active-5 {
                    padding: 20px 0;
                }
            }

            @-webkit-keyframes rotate-one {
                100% {
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }
            }

            @keyframes rotate-one {
                100% {
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }
            }

            @-webkit-keyframes rotate-two {
                0% {
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }
                100% {
                    -webkit-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
            }

            @keyframes rotate-two {
                0% {
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }
                100% {
                    -webkit-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
            }

            @-webkit-keyframes rotate-three {
                0% {
                    -webkit-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
                100% {
                    -webkit-transform: rotate(135deg);
                    transform: rotate(135deg);
                }
            }

            @keyframes rotate-three {
                0% {
                    -webkit-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
                100% {
                    -webkit-transform: rotate(135deg);
                    transform: rotate(135deg);
                }
            }

            @-webkit-keyframes rotate-four {
                0% {
                    -webkit-transform: rotate(135deg);
                    transform: rotate(135deg);
                }
                100% {
                    -webkit-transform: rotate(180deg);
                    transform: rotate(180deg);
                }
            }

            @keyframes rotate-four {
                0% {
                    -webkit-transform: rotate(135deg);
                    transform: rotate(135deg);
                }
                100% {
                    -webkit-transform: rotate(180deg);
                    transform: rotate(180deg);
                }
            }

            .cb-recommended-jobs-hunt {
                padding-bottom: 0;
            }

            .apply-job-area {
                padding-bottom: 40px;
            }

            .apply-job-area .list-job>.item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding-right: 15px;
            }

            .apply-job-area .list-job>.item .ckb-item {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333%;
                flex: 0 0 20px;
                max-width: 20px;
            }

            .apply-job-area .list-job>.item .job-item {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 20px);
                flex: 0 0 calc(100% - 20px);
                max-width: calc(100% - 20px);
                padding-left: 15px;
            }

            .container-ckb {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                top: -12px;
            }

            .container-ckb input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
            }

            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 20px;
                width: 20px;
                background-color: #636363;
            }

            .container-ckb:hover input~.checkmark {
                background-color: #636363;
            }

            .container-ckb input:checked~.checkmark {
                background-color: #636363;
            }

            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            .container-ckb input:checked~.checkmark:after {
                display: block;
            }

            .container-ckb .checkmark:after {
                left: 8px;
                top: 4px;
                width: 5px;
                height: 10px;
                border: solid white;
                border-width: 0 2px 2px 0;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            .list-job {
                height: 500px;
                overflow-y: auto;
            }

            .list-job::-webkit-scrollbar {
                width: 6px;
                background: #eaeaea;
            }

            .list-job::-webkit-scrollbar-thumb {
                background: #00b2a3;
            }

            .apply-job-area .job-item .figure {
                border: 1px solid #e5e5e5;
                border-radius: 4px;
            }

            .apply-job-area .item.active .job-item .figure {
                border-color: #00b2a3;
            }

            .apply-job-area .job-item {
                margin-bottom: 15px;
            }

            .apply-job-area .job-desc::-webkit-scrollbar {
                width: 6px;
                background: #eaeaea;
            }

            .apply-job-area .job-desc {
                height: 483px;
                overflow-y: auto;
                border: 1px solid #e5e5e5;
            }

            .apply-job-area .job-desc::-webkit-scrollbar-thumb {
                background: #00b2a3;
            }

            .apply-job-area .job-desc .job-item .figure {
                border: none;
                padding: 10px;
            }

            .apply-job-area .job-desc .job-item {
                margin-bottom: 0;
            }

            .apply-job-area .job-desc .job-detail {
                padding: 0 20px;
            }

            .apply-job-area .job-desc .job-detail .row-detail>h3,
            .apply-job-area .job-desc .job-detail .row-detail .box-info h4 {
                color: #172642;
                font-size: 16px;
                font-weight: 700;
                line-height: 1.2;
                margin-bottom: 10px;
            }

            .apply-job-area .job-desc .job-detail .row-detail {
                margin-bottom: 20px;
            }

            .apply-job-area .job-desc .job-detail .row-detail .box-info h4 {
                margin-bottom: 5px;
            }

            .apply-job-area .job-desc .job-detail .row-detail .row-custom {
                margin-bottom: -10px;
            }

            .apply-job-area .job-desc .job-detail .row-detail .row-custom [class*="col-"] {
                margin-bottom: 10px;
            }

            .apply-job-area .job-desc .job-detail .row-detail .welfare-list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                margin-bottom: -7px;
            }

            .apply-job-area .job-desc .job-detail .row-detail .welfare-list li {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333%;
                flex: 0 0 33.333%;
                max-width: 33.333%;
                margin-bottom: 7px;
            }

            .apply-job-area .job-desc .job-detail .row-detail .welfare-list li span {
                width: 25px;
            }

            .apply-job-area .job-desc .job-detail .row-detail .text-desc p:not(:last-child) {
                margin-bottom: 5px;
            }

            .apply-job-area .follow-area,
            .apply-job-area .right-follow {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .apply-job-area .follow-area {
                justify-content: space-between;
                margin-top: 20px;
                align-items: center;
            }

            .apply-job-area .follow-area .right-follow a:hover {
                text-decoration: none;
            }

            .apply-job-area .follow-area .left-follow {
                text-decoration: underline;
                font-style: italic;
                color: #172642;
            }

            .apply-job-area .follow-area .left-follow:hover {
                color: #0056b3;
            }

            .apply-job-area .follow-area .right-follow a:not(:last-child) {
                margin-right: 15px;
            }

            .apply-job-area .follow-area .right-follow a.btn-gradient {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 35px;
                border-radius: 5px;
                background-image: -webkit-gradient(linear, right top, left top, from(#00b2a3), color-stop(#00b2a3), to(#00b2a3));
                background-image: -o-linear-gradient(right, #42ecce, #00b2a3, #42ecce);
                background-image: linear-gradient(to left, #42ecce, #00b2a3, #42ecce);
                color: #fff;
                font-weight: 500;
                text-decoration: none;
                padding: 0 30px;
            }

            .apply-job-area .follow-area .right-follow a.btn-gradient-1 {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 35px;
                border-radius: 5px;
                color: #fff;
                font-weight: 500;
                text-decoration: none;
                padding: 0 30px;
            }

            @media (max-width:1024px) {
                .apply-job-area .job-desc .job-detail .row-detail .row-custom [class*="col-"] {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 33.333%;
                    flex: 0 0 33.333%;
                    max-width: 33.333%;
                }
            }

            @media (max-width:767px) {
                .apply-job-area .job-desc .job-detail .row-detail .row-custom [class*="col-"],
                .apply-job-area .job-desc .job-detail .row-detail .welfare-list li {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
            }

            @media (max-width:576px) {
                .apply-job-area .follow-area {
                    flex-direction: column;
                }
                .apply-job-area .follow-area .left-follow {
                    margin-bottom: 10px;
                }
            }

            .apply-job-area .list-job>.item:last-child .job-item {
                margin-bottom: 2px;
            }

            .apply-job-area .load-more {
                text-align: right;
                padding-right: 20px;
                margin-top: 5px;
            }

            .apply-job-area .load-more a {
                color: #2f4ba0;
                font-weight: bold;
                font-size: 14.5px;
            }

            .apply-job-area .load-more a em {
                margin-left: 3px;
            }

            .cb-recommended-jobs-hunt .job-item {
                border-bottom: 0;
            }

            .cb-job-hunt .cb-title>h2 {
                margin-bottom: 0;
            }

            .cb-job-hunt .cb-title>p {
                font-size: 18px;
                color: #5d677a;
                font-weight: normal;
            }

            .list-job-hunt .job-item .figure {
                border: none;
                padding: 0;
            }

            .job-hunt-wrapper {
                max-width: 750px;
                width: 100%;
                margin: 0 auto;
            }

            .list-job-hunt .job-item .figure .caption {
                position: relative;
            }

            .list-job-hunt .job-item .figure .caption .company-follow {
                position: absolute;
                right: 0;
                bottom: 0;
                width: 150px;
            }

            .list-job-hunt .job-item .figure .figcaption {
                flex: 0 0 calc(100% - 79px);
            }

            .list-job-hunt .job-item:not(:last-child) {
                margin-bottom: 15px;
            }

            .list-job-hunt .job-item .figure .caption .company-follow .btn-follow {
                margin-bottom: 0 !important;
            }

            .list-job-hunt .job-item .figure .caption .company-follow .btn-follow a {
                height: 35px;
                width: 150px;
            }

            .cb-job-hunt .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: flex-start;
            }

            .cb-job-hunt .company-follow .follower-number {
                color: #2f4ba0;
                font-size: 18px;
            }

            .cb-job-hunt .company-follow .btn-follow {
                margin-top: 10px;
                margin-right: 24px;
            }

            .cb-job-hunt .company-follow .btn-follow a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 180px;
                height: 40px;
                border-radius: 5px;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
                background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow a {
                position: relative;
                background-image: -webkit-gradient(linear, left top, right top, from(#2f4ba0), to(#2f4ba0));
                background-image: -o-linear-gradient(left, #2f4ba0 0%, #2f4ba0 100%);
                background-image: linear-gradient(to right, #2f4ba0 0%, #2f4ba0 100%);
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow a:before {
                color: #ffffff;
                content: "Follow";
                opacity: 1;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow a span {
                display: none;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow a em {
                display: none;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a {
                position: relative;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:before {
                color: #ffffff;
                content: "Unfollow";
                opacity: 0;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a em {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                display: block;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 25px;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:hover {
                background: #cacaca;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:hover:before {
                opacity: 1;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:hover em {
                opacity: 0;
            }

            @media (max-width:576px) {
                .list-job-hunt .job-item .figure .caption .company-follow {
                    position: static;
                    margin-top: 5px;
                }
                .cb-job-hunt .company-follow .btn-follow {
                    margin-top: 0;
                }
            }

            .apply-job-area .load-more {
                margin-top: 0;
            }

            .apply-job-area .action {
                margin-top: 10px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .apply-job-area .action .check-area a {
                font-size: 14.5px;
                color: #172642;
                font-weight: 600;
            }

            .apply-job-area .action .check-area a:hover {
                color: #0056b3;
            }

            .btn-applied {
                margin-top: 20px;
                text-align: center;
            }

            .btn-applied a {
                display: inline-flex;
            }

            .multi-apply-button {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-image: -webkit-gradient(linear, right top, left top, from(#2d7cb8), color-stop(#1f9ad2), to(#2d7cb8));
                background-image: -o-linear-gradient(right, #2d7cb8, #1f9ad2, #2d7cb8);
                background-image: linear-gradient(to left, #2d7cb8, #1f9ad2, #2d7cb8);
                z-index: 2147482000;
                padding: 10px 0
            }

            .multi-apply-button .no-gutters {
                -ms-flex-align: center;
                align-items: center;
            }

            .multi-apply-button .row,
            .multi-apply-button .row>* {
                margin: 0
            }

            .multi-apply-button .text font {
                margin-left: 20px;
                padding: 5px 0 5px 30px;
                background: url("https://static.careerbuilder.vn/themes/careerbuilder/images/save_success.png") no-repeat left center;
                color: #fff;
                display: -ms-flexbox;
                display: flex;
                max-width: 40%;
                font-size: 13px
            }

            .multi-apply-button .text .title {
                color: #fff;
                font-weight: bold;
                padding-bottom: 5px
            }

            .multi-apply-button .text span {
                color: #fff;
                display: -ms-flexbox;
                display: flex;
                max-width: 40%;
                padding-right: 20px;
                font-size: 14.5px
            }

            .multi-apply-button .BtnButton {
                padding: 8px 40px;
                border: 0;
            }

            .text-intro-section {
                background: #e8c80d;
                color: #172642;
                padding: 40px 0;
            }

            .text-intro-section .inner {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: flex-end;
            }

            .text-intro-section .box-left h3 {
                font-size: 1.875rem;
                margin-bottom: 10px;
                line-height: 1.25em;
            }

            .text-intro-section .box-left p {
                font-size: 1.4rem;
            }

            .text-intro-section .inner button {
                background: #fff;
                border-radius: 5px;
                color: #172642;
                border: none;
                padding: 8px 30px;
                margin-left: 30px;
                position: relative;
                top: 4px;
            }

            .choose-profile-modal>span {
                color: #ec4570;
                display: inline-block;
                margin-bottom: 5px;
                font-size: 16px;
            }

            .choose-profile-modal>p {
                margin-bottom: 25px;
                color: #0E0E24;
                font-size: 16px;
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

            .choose-profile-modal {
                max-width: 600px;
                width: 100%;
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
                font-size: 16px;
            }

            .choose-profile-modal ul li button:focus {
                border: none !important;
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
                .choose-profile-modal.fancybox-content,
                .modal-update-info.fancybox-content {
                    padding: 20px;
                    width: 100%;
                }
                .choose-profile-modal ul li button {
                    width: 135px;
                    padding-left: 10px;
                    padding-right: 10px;
                }
            }

            .status-area {
                margin-bottom: 20px;
            }

            .status-area>p {
                font-weight: 600;
                color: #172642;
                font-size: 20px;
            }

            .status-area .switch-status {
                max-width: 100%;
                background: #f8faf9;
                border: none;
                margin-top: 15px;
                margin-bottom: 15px;
                -ms-flex-align: center;
                align-items: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
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

            @media (max-width:576px) {
                .status-area>p {
                    font-size: 16px;
                }
            }

            .swap-content-1 [class*="content-"] {
                display: none;
            }

            .swap-content-1 .active {
                display: block;
            }

            .list-radio-area .visible {
                pointer-events: none;
                color: #ccc;
            }

            /*details.css*/

            .d-flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            main.no-padding {
                padding-top: 0;
            }

            .align-center {
                align-items: center;
            }

            .page-heading-tool {
                padding-top: 77px;
            }

            .page-heading-tool .inner {
                background: #E1F5FE;
                padding: 10px 0;
            }

            .page-heading-tool .list-form-group {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .page-heading-tool .list-form-group .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                position: relative;
                flex: 0 0 100%;
                width: 100%;
                max-width: 100%;
                margin-top: 10px;
            }

            .page-heading-tool .list-form-group .form-group input,
            .page-heading-tool .list-form-group .form-group select {
                border: 1px solid #ddd;
                border-radius: 5px;
            }

            .page-heading-tool .list-form-group .form-group input,
            .page-heading-tool .list-form-group .form-group select {
                width: 100%;
                height: 40px;
                padding: 5px 15px;
                color: #666666;
                font-size: 14px;
                font-weight: 400;
            }

            .page-heading-tool .list-form-group .form-group select {
                background-color: #fff;
                -webkit-appearance: none;
                -moz-appearance: none;
                color: #666;
            }

            .page-heading-tool .list-form-group .form-group.form-submit button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                width: 100%;
                height: 40px;
                border-radius: 5px;
                background: #00b2a3;
            }

            @media (min-width:992px) {
                .page-heading-tool .list-form-group .form-group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc((100% - 80px) / 4);
                    flex: 0 0 calc((100% - 80px) / 4);
                    max-width: calc((100% - 80px) / 4);
                    margin-top: 0;
                    margin-right: 10px;
                }
                .page-heading-tool .list-form-group .form-group.form-submit {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 40px;
                    flex: 0 0 40px;
                    max-width: 40px;
                    margin-right: 0;
                }
            }

            .job-alert {
                background: #E1F5FE;
                padding: 45px 80px;
                justify-content: space-between;
            }

            .job-alert .box-desc h3 {
                font-size: 30px;
                color: #073A4B;
                margin-right: 5px;
            }

            .job-alert .box-desc p {
                font-size: 20px;
                margin-top: 5px;
            }

            .job-alert .box-desc p strong {
                color: #073A4B;
            }

            .job-alert .box-input .form-group input {
                width: 370px;
                height: 40px;
                padding: 5px 15px;
                color: #666666;
                font-size: 14px;
                font-weight: 400;
                border: 1px solid #ddd;
            }

            .job-alert .box-input .form-group:first-child {
                margin-right: 10px;
            }

            .job-alert .box-input .form-submit button {
                background: #00B2A3;
                height: 40px;
                padding: 0 20px;
                border-radius: 5px;
                transition: 300ms;
            }

            .job-alert .box-input .form-submit button:hover {
                color: #fff;
            }

            @media (max-width:1600px) {
                .job-alert {
                    flex-direction: column;
                    flex-wrap: wrap;
                }
                .job-alert .box-desc {
                    margin-bottom: 10px;
                }
                .job-alert .box-desc h3 {
                    font-size: 22px;
                }
                .job-alert .box-desc p {
                    font-size: 16px;
                    margin-top: 3px;
                }
                .job-alert {
                    padding: 20px;
                }
            }

            @media (max-width:767px) {
                .job-alert .box-desc {
                    display: block;
                    text-align: center;
                }
            }

            @media (max-width:576px) {
                .job-alert .box-input .form-group input {
                    width: 220px;
                }
                .job-alert .box-input .form-submit button {
                    padding: 0 10px;
                }
            }

            .section-tags {
                padding: 30px 0 0px 0;
            }

            .section-tags .cb-title>span {
                color: #767676;
                font-size: 20px;
                margin-bottom: 0;
                font-weight: normal;
            }

            .section-tags .cb-title-sp {
                margin-bottom: 30px;
            }

            .section-tags .cb-title-sp h2 {
                margin-bottom: 0;
            }

            .list-tag {
                text-align: center;
            }

            .list-tag ul {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }

            .list-tag ul li {
                margin: 0 15px 15px 0;
            }

            .list-tag ul li a {
                background: #e5e5e5;
                color: #464545;
                font-size: 17px;
                display: inline-block;
                padding: 10px 40px;
                border-radius: 25px;
                transition: 300ms;
            }

            .list-tag ul li a:hover {
                text-decoration: none;
                background: #00B2A3;
                color: #fff;
            }

            .home-salary-banner-adv {
                padding: 40px 0;
            }

            .news-section {
                padding: 0 0 30px 0;
            }

            .list-news .news-item .box-desc {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100px;
                background: rgba(189, 234, 254, 0.8);
                text-align: center;
                padding: 10px;
            }

            .list-news .news-item .box-desc h4 a {
                color: #373737;
                transition: 300ms;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                line-height: 1.3;
                text-overflow: ellipsis;
            }

            .list-news .news-item .box-desc h4 a:hover {
                color: #00b2a3;
            }

            .box-view-more {
                text-align: right;
                margin-top: 30px;
            }

            .box-view-more a {
                color: #2F4BA0;
            }

            .head-job-title h3 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .job-area {
                margin-top: 20px;
            }

            .list-job .job-item {
                color: #000;
                margin-bottom: 20px;
            }

            .list-job .job-item .job-image {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100px;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 100px;
                align-items: center;
                justify-content: center;
                max-width: 100px;
                height: 100px;
                padding: 5px;
                border: 1px solid #e5e5e5;
                border-radius: 5px;
            }

            .list-job .job-item .job-desc {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                max-width: calc(100% - 100px);
                padding-left: 15px;
            }

            .list-job .job-item .job-desc h4 a {
                color: #000;
                font-size: 20px;
                transition: 300ms;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                line-height: 1.3;
                text-overflow: ellipsis;
                transition: 300ms;
                font-weight: 500;
            }

            .list-job .job-item .job-desc h4 a:hover {
                color: #00B2A3;
            }

            .list-job .job-item .job-desc .company-info p.name {
                color: #000;
                font-weight: 500;
            }

            .list-job .job-item .job-desc .company-info p em {
                font-size: 20px;
                margin-right: 2px;
            }

            .list-job .job-item .job-desc .company-info p {
                display: flex;
                align-items: center;
            }

            .list-job .job-item .job-desc .details-info {
                align-items: center;
                justify-content: space-between;
            }

            .list-job .job-item .job-desc .details-info em {
                margin-right: 7px;
            }

            .list-job .job-item .job-desc .details-info p {
                position: relative;
                left: 5px;
                color: #008563;
            }

            .job-area .box-view-more {
                margin-top: 10px;
            }

            .job-area .row {
                margin-bottom: 0;
            }

            .job-area .row>* {
                margin-bottom: 0;
            }

            .chart-title {
                margin-bottom: 15px;
            }

            .chart-title h3 {
                font-size: 1.6rem;
                color: #464545;
            }

            .chart-title h3 span {
                color: #073A4B;
            }

            .chart-title>span {
                color: #464545;
            }

            .chart-title span em {
                margin-right: 5px;
            }

            .chart-title .title-row {
                justify-content: space-between;
            }

            .chart-title .title-row a {
                border-bottom: 1px solid #09a0db;
            }

            .chart-title .title-row a:hover {
                border-bottom-color: #0056b3;
            }

            .chart-2-ct .row-chart span,
            .chart-4-ct .row-chart span {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 150px;
                max-width: 150px;
                color: #000;
                justify-content: flex-end;
                padding-right: 20px;
            }

            .chart-2-ct .row-chart {
                margin-bottom: 15px;
            }

            .chart-2-ct .row-chart .line {
                -ms-flex: 0 0 calc(100% - 150px);
                flex: 0 0 calc(100% - 150px);
                max-width: calc(100% - 150px);
            }

            .chart-2-ct .row-chart .line .progress-line {
                background: #2F4BA0;
                height: 15px;
                position: relative;
            }

            .chart-2-ct .row-chart .line .progress-line em {
                position: absolute;
                right: 0;
                top: -22px;
                font-style: normal;
                color: #000;
            }

            .chart-4-ct .row-chart {
                margin-bottom: 15px;
            }

            .chart-4-ct .row-chart .line {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                max-width: calc(100% - 150px);
            }

            .chart-4-ct ul li em {
                font-size: 25px;
            }

            .chart-4-ct .cl-1 {
                color: #00B2A3;
            }

            .chart-4-ct .cl-2 {
                color: #2F4BA0;
            }

            .chart-4-ct .cl-3 {
                color: #E8C80D;
            }

            .chart-4-ct .row-chart strong {
                color: #000;
                display: inline-flex;
                margin-left: 15px;
            }

            .block-chart-1 {
                margin-bottom: 20px;
            }

            .block-chart-1>.row {
                align-items: center;
                padding-bottom: 5px;
            }

            .block-chart>.row {
                margin-left: -50px;
                margin-right: -50px;
            }

            .block-chart>.row>[class*="col-"] {
                padding: 0 50px;
            }

            .progress-salary {
                padding-top: 100px;
                margin-bottom: 50px;
            }

            .progress-salary .list-progress {
                display: flex;
                flex-wrap: wrap;
                background: #fff;
                height: 15px;
                width: 100%;
            }

            .list-progress .square {
                height: 15px;
                position: relative;
                z-index: 1;
            }

            .list-progress .square>span {
                color: #000;
                position: absolute;
            }

            .list-progress .square-min {
                background: #EE3959;
            }

            .list-progress .square-min.active .numb {
                left: -30px;
            }

            .list-progress .square-min.active .numb-1 {
                left: auto;
                right: -20px;
            }

            .list-progress .square .text {
                left: 0;
                top: 25px;
                font-size: 14px;
            }

            .list-progress .square .numb {
                left: 0;
                top: -25px;
                font-size: 14px;
            }

            .list-progress .square .numb-1 {
                left: auto;
                right: -30px;
            }

            .list-progress .square-real {
                background: #E8C80D;
            }

            .list-progress .square-real:after {
                content: '';
                width: 2px;
                height: 100%;
                background: #fff;
                position: absolute;
                left: 50%;
                transform: translateX(-1px);
            }

            .list-progress .square-real .text {
                left: 50%;
                transform: translateX(-50%);
                white-space: nowrap;
            }

            .list-progress .square-real .numb {
                left: auto;
                right: -30px;
            }

            .list-progress .square-max {
                background: #00B2A3;
            }

            .list-progress .square-max .text,
            .list-progress .square-max .numb {
                left: auto;
                right: 0;
            }

            .list-progress .square-max.active .numb {
                right: -20px;
            }

            .avg {
                position: absolute;
                bottom: 50px;
                left: 50%;
                transform: translateX(-70%);
            }

            .box-avg-number {
                box-shadow: 0 0 8px 0 #ccc;
                display: block;
                position: relative;
                width: 145px;
            }

            .box-avg-number:before {
                content: "";
                width: 14px;
                height: 14px;
                position: absolute;
                bottom: -7px;
                left: 50%;
                margin-left: -7px;
                background: #fff;
                transform: rotate(45deg);
                box-shadow: 0 0 8px 0 #ccc;
            }

            .box-avg-number.active-1:before {
                left: 17px;
            }

            .box-avg-number.active-2:before {
                left: auto;
                right: 17px;
                margin-left: auto;
                margin-right: -7px;
            }

            .box-avg-number .avg-content {
                background: #fff;
                position: relative;
            }

            .avg-content {
                color: #000;
                text-align: center;
            }

            .avg-content .top {
                border-bottom: 2px solid #767676;
                padding: 3px 5px;
            }

            .mdi-triangle {
                font-size: 14px;
            }

            .mdi-triangle.down:before {
                transform: rotate(180deg);
            }

            .avg-content .bot {
                padding: 3px 5px;
                display: flex;
                align-items: center;
                font-size: 14px;
            }

            .avg-content .bot img {
                margin: 0 5px;
            }

            .avg-content .bot span.numb {
                color: #ED4770;
            }

            .chart-1-ct>p {
                color: #000;
            }

            .chart-1-ct>p span {
                color: #ED4770;
            }

            .progress-salary.active .list-progress .square-min .text-full,
            .progress-salary .square-min .text-short,
            .progress-salary .square-real .text-short {
                display: none;
            }

            .progress-salary.active .list-progress .square-min .text-short {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                top: 30px;
            }

            .progress-salary .toolip {
                padding: 3px 5px;
            }

            .progress-salary .toolip:before,
            .progress-salary .toolip:after {
                left: 7px;
            }

            .square-real.active .text-full {
                display: none;
            }

            .square-real.active .text-short {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                top: 30px;
            }

            @media (max-width:1440px) {
                .progress-salary .list-progress .square-real .text-full {
                    display: none;
                }
                .progress-salary .list-progress .square-real .text-short {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    top: 30px;
                }
            }

            @media (max-width:767px) {
                .progress-salary .list-progress .square-min .text-full {
                    display: none;
                }
                .progress-salary .list-progress .square-min .text-short {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    top: 30px;
                }
            }

            @media (max-width:1024px) {
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

            @media (max-width:767px) {
                .progress-salary .list-progress .square-real .text-full {
                    display: none;
                }
                .progress-salary .list-progress .square-real .text-short {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    top: 30px;
                }
                .progress-salary .list-progress .square-real .toolip:before,
                .progress-salary .list-progress .square-real .toolip:after {
                    left: 7px;
                }
            }

            .list-progress .square-out {
                background: #767676;
            }

            .list-progress .square-out.left {
                border-radius: 10px 0 0 10px;
            }

            .list-progress .square-out.right {
                border-radius: 0 10px 10px 0;
            }

            .list-progress .square-out .avg {
                transform: none;
            }

            .list-progress .square-out.left .avg {
                left: 0;
            }

            .list-progress .square-out.left .avg .box-avg-number:before {
                margin-left: 0;
                left: 10px;
            }

            .list-progress .square-out.right .avg {
                right: 0;
                left: auto;
            }

            .list-progress .square-out.right .avg .box-avg-number:before {
                margin-left: 0;
                left: auto;
                right: 10px;
            }

            .chart-3-ct {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                padding-top: 30px;
            }

            .chart-3-ct .main-chart {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 220px);
                position: relative;
                flex: 0 0 calc(100% - 220px);
                width: calc(100% - 220px);
                max-width: calc(100% - 220px);
            }

            .chart-3-ct .statistic {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 220px;
                position: relative;
                flex: 0 0 220px;
                width: 220px;
                max-width: 220px;
                color: #000;
            }

            .chart-3-ct .statistic ul li:not(:last-child) {
                margin-bottom: 15px;
            }

            .chart-3-ct .statistic .item p {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 150px;
                position: relative;
                flex: 0 0 150px;
                width: 150px;
                max-width: 150px;
                display: flex;
                justify-content: flex-end;
                padding-right: 20px;
            }

            .chart-3-ct .statistic .item .salary-number {
                font-weight: bold;
                color: #2F4BA0;
            }

            .chart-3-ct .statistic .item span em {
                font-size: 14px;
            }

            .chart-3-ct .statistic .item.down span em:before {
                transform: rotate(180deg);
            }

            .chart-3-ct .statistic .item.down span em {
                color: #ED4770;
            }

            .chart-3-ct .statistic .item.up span em {
                color: #00B2A3;
            }

            .chart-3 .desc {
                margin-top: 20px;
            }

            .chart-3 .desc span {
                color: #000;
                font-size: 16px;
            }

            .chart-3 .desc span span {
                font-weight: 600;
            }

            .chart-5 {
                margin-top: 50px;
            }

            .chart-5 .box-chart {
                padding-left: 72px;
            }

            @media (max-width:1600px) {
                .block-chart>.row {
                    margin-left: -25px;
                    margin-right: -25px;
                }
                .block-chart>.row>[class*="col-"] {
                    padding: 0 25px;
                }
                .chart-5 {
                    margin-top: 40px;
                }
            }

            @media (max-width:1440px) {
                .block-chart>.row .col-xl-8 {
                    -ms-flex: 0 0 60%;
                    -webkit-box-flex: 0;
                    flex: 0 0 55%;
                    max-width: 55%;
                }
                .block-chart>.row .col-xl-4 {
                    -ms-flex: 0 0 45%;
                    -webkit-box-flex: 0;
                    flex: 0 0 45%;
                    max-width: 45%;
                }
                .block-chart>.row {
                    margin-left: -15px;
                    margin-right: -15px;
                }
                .block-chart>.row>[class*="col-"] {
                    padding: 0 15px;
                }
                .chart-3-ct {
                    flex-wrap: wrap;
                }
                .chart-3-ct .statistic,
                .chart-3-ct .main-chart {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    position: relative;
                    flex: 0 0 100%;
                    width: 100%;
                    max-width: 100%;
                }
                .chart-3-ct .statistic {
                    display: flex;
                    justify-content: center;
                    margin-top: 20px;
                }
            }

            .section-description .text-ct span {
                font-size: 16px;
            }

            .full-text {
                display: none;
            }

            @media (max-width:1440px) {
                .chart-title h3,
                .head-job-title h3,
                .job-alert .box-desc h3,
                .section-description h2,
                .cb-title * {
                    font-size: 1.6rem !important;
                }
            }

            @media (max-width:1200px) {
                .chart-title h3,
                .head-job-title h3,
                .job-alert .box-desc h3,
                .section-description h2,
                .cb-title * {
                    font-size: 1.5rem !important;
                }
                .section-tags .cb-title>span {
                    font-size: 16px !important;
                }
                .chart-3 .desc span,
                .section-description .text-ct span {
                    font-size: 14px;
                }
            }

            @media (max-width:1200px) {
                .block-chart>.row .col-xl-8,
                .block-chart>.row .col-xl-4 {
                    -ms-flex: 0 0 100%;
                    -webkit-box-flex: 0;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .list-job .job-item .job-desc h4 a {
                    font-size: 18px;
                }
                .chart-2-ct .row-chart span,
                .chart-4-ct .row-chart span {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex: 0 0 80px;
                    max-width: 80px;
                    color: #000;
                    justify-content: flex-start;
                    padding-right: 20px;
                }
                .chart-2-ct .row-chart .line {
                    -ms-flex: 0 0 calc(100% - 80px);
                    flex: 0 0 calc(100% - 80px);
                    max-width: calc(100% - 80px);
                }
                .chart-4-ct ul li em {
                    font-size: 20px;
                }
                .chart-5 .box-chart {
                    padding-left: 0;
                }
            }

            @media (max-width:576px) {
                .job-alert .box-input {
                    flex-direction: column;
                }
                .job-alert .box-input .form-submit button {
                    margin-top: 10px;
                }
                .box-avg-number {
                    width: 110px;
                }
                .avg-content .bot {
                    padding: 3px;
                }
                .avg-content .bot *,
                .list-progress .square .text,
                .list-progress .square>span {
                    font-size: 12px !important;
                }
                .list-progress .square .numb-1,
                .list-progress .square-real .numb {
                    right: -20px;
                }
                .chart-3-ct {
                    padding-top: 15px;
                }
                .list-progress .square-min .numb {
                    left: -25px;
                }
                .list-progress .square-min .numb-1 {
                    left: auto;
                    right: -25px;
                }
            }

            .section-description {
                margin-bottom: 40px;
            }

            .section-description h2 {
                font-size: 1.6rem;
                color: #464545;
                margin-bottom: 5px;
            }

            .section-description h2 span {
                color: #073A4B;
            }

            .list-hl-company {
                margin-bottom: 45px;
            }

            .hl-company-slider {
                position: relative;
                padding: 0 30px;
            }

            .hl-company-slider .item {
                text-align: center;
            }

            .hl-company-slider .item img {
                max-width: 100%;
            }

            .hl-company-slider .item span {
                display: block;
                margin-top: 7px;
                color: #073A4B;
            }

            .hl-company-slider .swiper-wrapper {
                align-items: center;
            }

            .hl-company-slider .swiper-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }

            .hl-company-slider .swiper-nav:hover {
                cursor: pointer;
            }

            .hl-company-slider .swiper-prev {
                left: 0;
            }

            .hl-company-slider .swiper-next {
                right: 0;
            }

            .hl-company-slider .swiper-nav em {
                font-size: 40px;
                color: #00B2A3;
            }

            .hl-company-slider .swiper-nav.swiper-button-disabled em {
                color: #5d677a;
            }

            @media (max-width:576px) {
                .hl-company-slider .swiper-prev {
                    left: -10px;
                }
                .hl-company-slider .swiper-next {
                    right: -10px;
                }
            }

            .career-paths .head-job-title {
                margin-bottom: -150px;
            }

            @media (max-width:1200px) {
                .career-paths .head-job-title {
                    margin-bottom: -100px;
                }
            }

            @media (max-width:767px) {
                .career-paths .head-job-title {
                    margin-bottom: -50px;
                }
            }

            #tree-map {
                max-width: 1100px;
            }

            .mitch-d3-tree.boxed-tree.default .node .body-group .body-box {
                stroke: #5cc9c5 !important;
                fill: #ffffff !important;
                stroke-width: 2 !important;
            }

            .mitch-d3-tree.boxed-tree.default .parent .body-group .body-box {
                stroke: #004e4b !important;
                fill: #ffffff !important;
                stroke-width: 4 !important;
            }

            .mitch-d3-tree.boxed-tree.default .node .title-group text {
                font-size: 12px !important;
                font-weight: 500 !important;
            }

            .mitch-d3-tree.boxed-tree.default .link {
                stroke: #00aaa4 !important;
                stroke-width: 5px !important;
            }

            .mitch-d3-tree.boxed-tree .node .body-group text {
                font-size: 14px !important
            }

            .path-desc {
                max-width: 1100px;
                border: 1px solid #e8e8e8;
                justify-content: space-between;
                padding: 15px 20px;
            }

            .path-desc .item strong {
                font-weight: normal;
                color: #000;
            }

            .path-desc .item {
                align-items: center;
            }

            .path-desc .item span {
                margin-right: 10px;
            }

            .path-desc .item.item-1 span {
                width: 20px;
                height: 20px;
                background: #004e4b;
            }

            .path-desc .item.item-2 span {
                width: 20px;
                height: 10px;
                background: #00aaa4;
            }

            .path-desc .item.item-3 span {
                width: 20px;
                height: 5px;
                background: #5cc9c5;
            }

            @media (max-width:767px) {
                .path-desc {
                    flex-direction: column;
                }
                .path-desc .item:not(:last-child) {
                    margin-bottom: 10px;
                }
            }

            .statistic-area {
                justify-content: flex-start;
                flex-wrap: wrap;
                width: 100%;
                margin-top: 15px;
                align-items: flex-end;
            }

            .statistic-area .item span {
                margin-right: 10px;
                color: #000;
                font-weight: 500;
            }

            .statistic-area .item strong {
                font-weight: 700;
                color: #000;
                line-height: 1;
            }

            .statistic-area .item-1 span {
                color: #E8C80D;
            }

            .statistic-area .item-1 strong {
                font-size: 40px;
            }

            .statistic-area .item-2 .row-data-2 span {
                color: #EE3959;
            }

            .statistic-area .item-2 .row-data span,
            .statistic-area .item-3 .row-data span {
                width: 120px;
                display: inline-block;
            }

            .statistic-area .item-3 .row-data-2 span {
                color: #00B2A3;
            }

            .statistic-area .item:not(:last-child) {
                margin-right: 60px;
            }

            @media screen and (min-width:1200px) and (max-width:1440px) {
                .statistic-area .item {
                    margin: 0 !important;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .statistic-area .item-1 strong {
                    font-size: 25px;
                }
                .statistic-area .item-1 {
                    flex: 0 0 100%;
                    max-width: 100%;
                    margin-bottom: 20px !important;
                    text-align: center;
                }
                .statistic-area .item-2 {
                    text-align: right;
                    padding-right: 30px;
                }
                .statistic-area .item-3 {
                    text-align: left;
                    padding-left: 30px;
                }
                .chart-1-ct>p {
                    text-align: center;
                }
            }

            @media screen and (min-width:640px) and (max-width:1440px) {
                .chart-3-ct .statistic ul {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                }
                .chart-3-ct .statistic ul li {
                    flex: 0 0 50%;
                    max-width: 50%;
                    text-align: right;
                }
                .chart-3-ct .statistic ul li:nth-child(odd) .item {
                    justify-content: flex-end;
                    padding-right: 20px;
                }
                .chart-3-ct .statistic ul li:nth-child(even) .item {
                    justify-content: flex-start;
                    margin-left: -20px;
                }
            }

            @media (max-width:992px) {
                .statistic-area .item:not(:last-child) {
                    margin-right: 25px;
                }
                .statistic-area .item-2 .row-data span,
                .statistic-area .item-3 .row-data span {
                    width: 150px;
                }
                .statistic-area .item-1 strong {
                    font-size: 30px;
                }
            }

            @media (max-width:767px) {
                .statistic-area {
                    flex-direction: row;
                }
                .statistic-area .item {
                    margin: 0 !important;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .statistic-area .item-1 strong {
                    font-size: 25px;
                }
                .statistic-area .item-1 {
                    flex: 0 0 100%;
                    max-width: 100%;
                    margin-bottom: 20px !important;
                    text-align: center;
                    width: 100%;
                }
                .statistic-area .item-2 {
                    text-align: right;
                    padding-right: 10px;
                }
                .statistic-area .item-3 {
                    text-align: left;
                    padding-left: 10px;
                }
                .chart-1-ct>p {
                    text-align: center;
                }
                .statistic-area .item-2 .row-data span,
                .statistic-area .item-3 .row-data span {
                    width: 100px;
                }
            }

            @media (max-width:640px) {
                .chart-3-ct .statistic ul {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                }
                .chart-3-ct .statistic ul li {
                    flex: 0 0 50%;
                    max-width: 50%;
                    text-align: right;
                }
                .chart-3-ct .statistic ul li:nth-child(odd) .item {
                    justify-content: flex-end;
                    padding-right: 10px;
                }
                .chart-3-ct .statistic ul li:nth-child(even) .item {
                    justify-content: flex-start;
                    text-align: left;
                    margin-left: 20px;
                }
                .chart-3-ct .statistic ul li .item {
                    display: block;
                }
                .chart-3-ct .statistic ul li .item>* {
                    display: inline-block !important;
                    width: auto;
                    max-width: inherit;
                }
                .chart-3-ct .statistic ul li .item p {
                    padding-right: 5px;
                }
                .chart-3-ct .statistic ul li:not(:first-child) .item p {
                    width: 60px;
                }
            }

            .no-result .inner {
                text-align: center;
                padding: 50px 0 40px;
            }

            .no-result .inner p {
                max-width: 750px;
                margin: 0 auto;
                color: #000;
            }

            .no-result .inner img {
                margin-top: 9px;
            }

            @media (min-width:1200px) {
                .no-result .inner p {
                    font-size: 20px;
                }
            }
        </style>
        <link href="https://static.careerbuilder.vn/js/datetimepicker/DateTimePicker.css" rel="stylesheet" />
        <script src="https://static.careerbuilder.vn/js/datetimepicker/DateTimePicker.js" type="text/javascript"></script>
        <script src="https://static.careerbuilder.vn/js/datetimepicker/i18n/DateTimePicker-i18n.js" type="text/javascript"></script>
        <script src="https://static.careerbuilder.vn/js/autoNumeric.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://careerbuilder.vn/cv-hay/getdistricts"></script>

        <style>
            .cb-job-hunt .company-follow .btn-follow.icon-follow a:before {
                content: "Theo dõi";
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow.followed a:before {
                content: "Hủy theo dõi";
            }
        </style>


      

        <section class="cb-job-hunt cb-section">
            <div class="container">
                <div class="job-hunt-wrapper">
                    <div class="cb-title cb-title-center">
                        <h2><span style="font-size:25px; color:#00b72f">Ứng tuyển thành công. Chúc Bạn sớm tìm được sự nghiệp như ý!</span></h2>
                        <p>

                        </p>
                    </div>
                    <div class="list-job-hunt">
                        <div class="job-item">
                            <div class="figure">
                                <div class="image">
                             <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/sabeco-saigon-beer-alcohol-beverage-corporation.35A84FDF.html" title="SABECO - Saigon Beer-Alcohol-Beverage Corporation" target="_blank"><img class="lazy-bg"
                     src="<?= _WEB_ROOT.'app/public/assets/employer/images/'.$job_post["logo"] ?>" src="../kiemviecv32/images/graphics/blank.gif"
                          alt="SABECO - Saigon Beer-Alcohol-Beverage Corporation"></a>
                                </div>
                                <div class="figcaption">
                                    <div class="title"><a href="https://careerbuilder.vn/vi/tim-viec-lam/director-bod-office.35BB0305.html" title="Director - BOD Office"><?= $job_post["job_title"] ?></a>
                                        <input type="hidden" name="title_tmp" id="title_tmp" value="Director - BOD Office" />
                                    </div>
                                    <div class="caption">
                                        <p class="company-name"><?= $job_post["company_name"] ?></p>
                                        <p class="salary"><em class="fa fa-usd"></em>
                                        <?= format_price($job_post["min_salary"]).'-'.format_price($job_post["max_salary"]).' VND' ?>
                                    </p>
                                        <!-- <div class="location">
                                            <ul>
                                                <li> Hồ Chí Minh</li>
                                            </ul>
                                        </div> -->
                                        <input type="hidden" name="isTS" id="isTS" value="0" />
                                        <input type="hidden" name="emp_websitets" id="emp_websitets" value="" />
                                        <!-- <div class="company-follow">
                                            <div class="btn-follow icon-follow followed" rel="0"><a class="btn-gradient" href="javascript:void(0)" onclick="followClick('222943', '35A84FDF', '360574AB',  0 )">
                              <em class="fa fa-check-circle-o"></em></a></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-applied">
                        <a href="javascript:void(0)" class="btn-apply-now btn-gradient">
              Xem các công việc đã ứng tuyển
            </a>
                    </div>
                </div>
            </div>
        </section>
     
        

        <style>
            .detail-loading {
                display: none;
            }
        </style>
       

      
   
   

  

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


    

     
      

      

        <div class="back-drop"></div>
    </main>