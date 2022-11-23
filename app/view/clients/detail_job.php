
<main>
        <style>
            /*popup-matching-job.css*/

            .box-percent {
                text-align: center;
            }

            .percircle {
                float: none;
                margin: 30px auto;
            }

            .percircle.big {
                font-size: 150px;
            }

            .percircle.animate>span {
                font-weight: bold;
                color: #fc5b56;
            }

            .percircle .bar {
                border-color: #fc5b56;
            }

            .percircle:after {
                background: #fff;
            }

            .percircle {
                background: #d8d8d8;
            }

            .percircle:hover:after {
                transform: none;
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
                .toollips .toolip {
                    display: block;
                }
            }

            .fit-modal {
                padding: 0 !important;
                overflow: hidden;
                border: 1px solid #e3e3e3;
                border-radius: 5px;
                background: #ffffff;
                max-width: 800px;
                width: 100%;
            }

            .fit-modal .modal-title {
                padding: 10px 15px;
                border-bottom: 1px solid #e5e5e5;
                text-align: center;
            }

            .fit-modal .modal-title h3 {
                color: #172642;
                font-size: 20px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .fit-modal .modal-body {
                padding: 20px;
            }

            .fit-modal .modal-body .sub-title {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .fit-modal .modal-body .sub-title>h5 {
                font-size: 20px;
                color: #172642;
            }

            .fit-modal .modal-body .sub-title .tips {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                cursor: pointer;
                margin-left: 15px;
            }

            .fit-modal .modal-body .sub-title .tips .icon {
                justify-content: center;
                width: 20px;
                min-width: 20px;
                height: 20px;
                overflow: hidden;
                border-radius: 50%;
                background: #2f4ba0;
                align-items: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .fit-modal .modal-body .sub-title .tips .icon em {
                color: #ffffff;
                font-size: 14.5px;
            }

            .fit-modal .modal-body .sub-title .tips p {
                padding-left: 5px;
                font-size: 14.5px;
            }

            .fit-modal .modal-body .sub-title .tips .toolip {
                z-index: 11;
                width: 250px;
            }

            .fit-modal .modal-body .sub-title .tips .toolip:before {
                top: -7.5px;
                left: 30px;
            }

            .fit-modal .modal-body .sub-title .tips .toolip:after {
                top: -5px;
                left: 30px;
            }

            .fit-modal .row-data-2 {
                padding: 0 50px;
            }

            .fit-modal .box-statistic h5 {
                font-size: 16px;
                color: #172642;
                margin-bottom: 5px;
            }

            .fit-modal .box-statistic p {
                border-bottom: 1px solid #e5e5e5;
                margin-bottom: 12px;
                padding-bottom: 7px;
                font-size: 16px;
            }

            .fit-modal .box-statistic p span {
                color: #526dda;
                font-weight: 700;
            }

            .fit-modal .box-statistic ul {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }

            .fit-modal .box-statistic ul li {
                margin-bottom: 10px;
                margin-right: 10px;
                padding: 7px 15px;
                border: 1px solid #526dda;
                border-radius: 25px;
            }

            .fit-modal .box-statistic ul li span {
                font-size: 16px;
            }

            .fit-modal .box-statistic ul li em {
                margin-right: 7px;
                font-size: 20px;
                position: relative;
                top: 2px;
            }

            .fit-modal .box-statistic ul li.active {
                background: #526dda;
            }

            .fit-modal .box-statistic ul li.active * {
                color: #fff;
            }

            .fit-modal .col-progress .inner strong {
                font-size: 16px;
                color: #172642;
            }

            .fit-modal .box-progress {
                text-align: right;
            }

            .fit-modal .box-progress .progress-bar {
                height: 7px;
                background: #dbdbdb;
                border-radius: 10px;
                margin: 12px 0;
                position: relative;
            }

            .fit-modal .box-progress .progress-bar>span {
                position: absolute;
                height: 7px;
                left: 0;
                top: 0;
                border-radius: 10px;
            }

            .fit-modal .box-progress .progress-bar-1 span {
                background: #526dda;
            }

            .fit-modal .box-progress .progress-bar-2 span {
                background: #fc5b56;
            }

            .fit-modal .box-progress .progress-bar-3 span {
                background: #f1bdc7;
            }

            .fit-modal .box-progress .progress-bar-4 span {
                background: #fdca2e;
            }

            .fit-modal .box-progress>span {
                font-size: 16px;
            }

            @media (min-width:1024px) {
                .fit-modal .modal-title {
                    padding: 6.5px 44px;
                }
                .fit-modal .modal-title h3 {
                    font-size: 24px;
                }
            }

            @media (max-width:767px) {
                .fit-modal .row-data-1 {
                    margin-bottom: -10px;
                }
                .fit-modal .row-data-1>* {
                    margin-bottom: 10px;
                }
                .fit-modal .row-data-2 {
                    padding: 0;
                }
                .fit-modal .modal-body .sub-title {
                    flex-direction: column;
                }
                .fit-modal .modal-body .sub-title .tips {
                    margin-left: 0;
                    margin-top: 5px;
                }
            }
        </style>
        <style>
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

            /*search-result-list-detail.css*/

            @charset "UTF-8";
            .page-heading-tool {
                z-index: 555;
                position: -webkit-sticky;
                position: sticky;
                top: 80px;
                left: 0;
                width: 100%;
                padding: 0 !important;
                border-bottom: 1px solid #e5e5e5;
                background: #F2F2F2;
            }

            .page-heading-tool .mdi-close-circle:before {
                content: "\f159";
            }

            .page-heading-tool .lnr-cross:before {
                content: "\e870";
            }

            @media (max-width:1200px) {
                .page-heading-tool {
                    top: 60px;
                }
            }

            .page-heading-tool .close-input-filter {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                display: none;
                z-index: 11;
                position: absolute;
                top: 0;
                right: 10px;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: 0.4s ease-in-out all;
            }

            .page-heading-tool .close-input-filter em {
                font-size: 16px;
            }

            .page-heading-tool .tool-wrapper {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                flex-wrap: wrap;
                align-items: center;
                width: 100%;
                margin: 0 -5px;
                padding: 8px 0;
            }

            @media (max-width:1023px) {
                .page-heading-tool .tool-wrapper.mobile-height .search-job {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 40px);
                    flex: 0 0 calc(100% - 40px);
                    max-width: calc(100% - 40px);
                }
                .page-heading-tool .tool-wrapper.mobile-height .search-job .form-group.form-select-chosen {
                    display: none;
                }
                .page-heading-tool .tool-wrapper.mobile-height .search-job .form-group.form-submit {
                    display: none;
                }
                .page-heading-tool .tool-wrapper.mobile-height .mobile-filter .toolip {
                    display: none;
                }
                .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
                    right: 0;
                    opacity: 1;
                }
                .page-heading-tool .tool-wrapper.mobile-show .switch-group {
                    display: block;
                    width: auto;
                    max-width: auto;
                    height: 30px;
                    margin-top: 10px;
                    padding: 0 5px;
                    overflow: initial;
                    opacity: 1;
                    pointer-events: auto;
                }
                .page-heading-tool .tool-wrapper.mobile-show .mobile-filter {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 200px);
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    right: 40px;
                    flex: 0 0 calc(100% - 200px);
                    justify-content: flex-start;
                    max-width: calc(100% - 200px);
                    margin-top: 10px;
                    opacity: 1;
                    pointer-events: auto;
                }
                .page-heading-tool .tool-wrapper.mobile-show .mobile-filter p {
                    display: block;
                }
                .page-heading-tool .tool-wrapper.mobile-show .mobile-filter-2 {
                    -webkit-transition: 0.1s;
                    -o-transition: 0.1s;
                    right: -20px;
                    opacity: 0;
                    transition: 0.1s;
                }
            }

            @media (max-width:576px) {
                .page-heading-tool .tool-wrapper.mobile-show .mobile-filter {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 170px);
                    flex: 0 0 calc(100% - 170px);
                    max-width: calc(100% - 170px);
                }
            }

            .page-heading-tool .Advanced-Search-Popup {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 10%;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 10%;
                align-items: center;
                justify-content: center;
                max-width: 10%;
                padding: 0 5px;
                cursor: pointer;
            }

            .page-heading-tool .Advanced-Search-Popup i {
                font-size: 30px;
            }

            @media (min-width:1024px) {
                .page-heading-tool .Advanced-Search-Popup {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 5%;
                    flex: 0 0 5%;
                    max-width: 5%;
                }
            }

            @media (min-width:1200px) {
                .page-heading-tool .Advanced-Search-Popup {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 4%;
                    flex: 0 0 4%;
                    max-width: 4%;
                }
            }

            .page-heading-tool .search-job {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0 5px;
                transition: 0.4s ease-in-out all;
            }

            .page-heading-tool .search-job .form-group {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                position: relative;
                align-items: center;
                width: 100%;
            }

            .page-heading-tool .search-job .form-group button {
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
                height: 35px;
                border-radius: 4px;
                background: #00b2a3;
                color: #fff;
            }

            .page-heading-tool .search-job .form-group button span {
                height: 24px;
                font-size: 24px;
            }

            @media (min-width:1024px) {
                .page-heading-tool .search-job .form-group button {
                    width: 40px;
                    height: 40px;
                }
            }

            .page-heading-tool .search-job .form-group input {
                width: 100%;
                height: 40px;
                padding: 0 40px 0 16px;
                border: 1px solid #e5e5e5;
                border-radius: 3px;
                color: #000;
                font-size: 15px;
                font-weight: 400;
            }

            .page-heading-tool .search-job .form-group input::-webkit-input-placeholder {
                color: #999999;
                font-weight: 400;
            }

            .page-heading-tool .search-job .form-group input::-moz-placeholder {
                color: #999999;
                font-weight: 400;
            }

            .page-heading-tool .search-job .form-group input:-ms-input-placeholder {
                color: #999999;
                font-weight: 400;
            }

            .page-heading-tool .search-job .form-group input::-ms-input-placeholder {
                color: #999999;
                font-weight: 400;
            }

            .page-heading-tool .search-job .form-group input::placeholder {
                color: #999999;
                font-weight: 400;
            }

            .page-heading-tool .search-job .form-group.form-keyword {
                position: relative;
            }

            .page-heading-tool .search-job .form-group.form-keyword .cleartext {
                z-index: 11;
                position: absolute;
                top: 8px;
                right: 15px;
                color: #cccccc;
                cursor: pointer;
                opacity: 0;
            }

            .page-heading-tool .search-job .form-group.form-keyword .cleartext em {
                color: #cccccc;
                font-size: 18px;
            }

            .page-heading-tool .search-job .form-group.form-keyword .cleartext.active {
                opacity: 1;
            }

            @media (min-width:1200px) {
                .page-heading-tool .search-job .form-group.form-keyword .cleartext {
                    top: 8px;
                }
            }

            .page-heading-tool .form-group.form-select-chosen select {
                display: none;
            }

            .page-heading-tool .form-group.form-select-chosen label {
                margin-bottom: 5px;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container {
                width: 100% !important;
                height: 40px !important;
                position: relative;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container:after {
                content: '';
                width: 12px;
                height: 7px;
                background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/arrow-down.png") no-repeat;
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices {
                -webkit-box-shadow: none;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                height: 40px;
                padding: 0.5px 16px 0.5px 16px;
                padding-left: 16px;
                border: none;
                border: 1px solid #e5e5e5;
                border-radius: 4px;
                background-image: none;
                box-shadow: none;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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
                margin-top: 5px;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
                background: none !important;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
                color: #5d677a;
                font-family: "Material Design Icons";
                font-size: 11px;
                content: "\f156";
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
                color: #fc0821;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field {
                padding: 2px 0;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
                font-family: "Roboto", sans-serif !important;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                color: #999999;
                font-size: 15px;
                font-weight: 400;
                margin-top: 4px;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
                width: 6px !important;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
                background: #eaeaea !important;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
                background: #00b2a3 !important;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
                background: #00b2a3 !important;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #5d677a;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f131";
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
                color: #ffffff;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
                color: #ffffff;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
                color: #ffffff;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
                color: #ffffff;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #287ab9;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f132";
                opacity: 1;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
                color: #182642;
                cursor: pointer;
            }

            .page-heading-tool .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
                color: #287ab9;
            }

            .page-heading-tool .search-job .form-group.form-submit button p {
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
                display: none;
            }

            @media (min-width:1024px) {
                .filters-wrapper .col-lg-2 {
                    -ms-flex: 0 0 20%;
                    -webkit-box-flex: 0;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
            }

            .page-heading-tool .search-job .form-wrap {
                -ms-flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin: 0 -1px;
            }

            .page-heading-tool .search-job .form-wrap .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0 1px;
            }

            @media (min-width:1024px) {
                .page-heading-tool .search-job {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 280px);
                    flex: 0 0 calc(100% - 280px);
                    max-width: calc(100% - 280px);
                }
                .page-heading-tool .search-job .form-wrap {
                    -ms-flex-wrap: wrap;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    align-items: center;
                    margin: 0 -5px;
                }
                .page-heading-tool .search-job .form-wrap .form-group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc((100% - 60px) / 3);
                    flex: 0 0 calc((100% - 60px) / 3);
                    max-width: calc((100% - 60px) / 3);
                    padding: 0 5px;
                }
                .page-heading-tool .search-job .form-wrap .form-group input {
                    margin-bottom: 0;
                }
                .page-heading-tool .search-job .form-wrap .form-group.form-submit {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50px;
                    flex: 0 0 50px;
                    max-width: 50px;
                    padding: 0;
                    margin-left: 10px;
                }
                .page-heading-tool .search-job .form-wrap .form-group:nth-child(3) {
                    padding-right: 0;
                }
                .page-heading-tool .box-right-action {
                    flex: 0 0 280px;
                    max-width: 280px;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
            }

            @media (min-width:1200px) {
                .page-heading-tool .search-job {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 280px);
                    flex: 0 0 calc(100% - 280px);
                    max-width: calc(100% - 280px);
                }
            }

            .page-heading-tool .mobile-filter {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 150px);
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                -webkit-transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
                -o-transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
                -webkit-transition: width 2s;
                -o-transition: width 2s;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                z-index: 100;
                position: relative;
                flex: 0 0 calc(100% - 150px);
                align-items: center;
                justify-content: flex-start;
                order: 3;
                max-width: calc(100% - 150px);
                margin-top: 10px;
                padding: 0 5px;
                cursor: pointer;
                transition: width 2s;
                transition-timing-function: cubic-bezier(0.55, 0.06, 0.68, 0.19);
            }

            .page-heading-tool .mobile-filter span {
                height: 30px;
                font-size: 30px;
            }

            @media (max-width:576px) {
                .page-heading-tool .mobile-filter span {
                    font-size: 24px;
                }
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item {
                position: relative;
                pointer-events: auto;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-title {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                cursor: pointer;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-title .mdi {
                padding-left: 10px;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu {
                -webkit-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.05);
                display: none;
                z-index: 10;
                position: absolute;
                top: calc(100% + 30px);
                right: 0;
                min-width: 200px;
                max-height: calc(100vh - 250px);
                padding: 20px;
                overflow-y: auto !important;
                background: rgba(255, 255, 255, 0.9);
                box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.05);
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu::-webkit-scrollbar {
                width: 6px;
                background: #eaeaea;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu::-webkit-scrollbar-thumb {
                background: #00b2a3;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu:before {
                position: absolute;
                bottom: 100%;
                left: 0;
                width: 100%;
                height: 30px;
                content: "";
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu span {
                height: auto;
                font-size: 14px;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu .title-drop {
                display: block;
                margin-bottom: 3px;
                font-size: 15px;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu .filter-list .form-group label {
                padding-right: 10px;
                white-space: nowrap;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu {
                padding-right: 5px;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list {
                max-height: 150px;
                padding-right: 10px;
                overflow-y: scroll;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list::-webkit-scrollbar {
                width: 6px;
                background: #eaeaea;
            }

            .page-heading-tool .mobile-filter.dropdown-filter-item .dropdown-menu.scroll-menu .filter-list::-webkit-scrollbar-thumb {
                background: #00b2a3;
            }

            @media (min-width:1024px) {
                .page-heading-tool .mobile-filter.dropdown-filter-item {
                    cursor: pointer;
                }
            }

            @media (min-width:576px) {
                .page-heading-tool .mobile-filter {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 170px);
                    flex: 0 0 calc(100% - 170px);
                    max-width: calc(100% - 170px);
                }
            }

            @media (min-width:1024px) {
                .page-heading-tool .mobile-filter {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 35px;
                    -webkit-box-ordinal-group: 3;
                    -ms-flex-order: 1;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    flex: 0 0 35px;
                    justify-content: center;
                    max-width: 35px;
                    margin-top: 0;
                    order: 1;
                    display: none;
                }
                .page-heading-tool .mobile-filter p {
                    display: none;
                }
            }

            @media (min-width:1024px) {
                .page-heading-tool .mobile-filter .toolip::before {
                    top: -7.5px;
                }
                .page-heading-tool .mobile-filter .toolip:after {
                    top: -5px;
                }
                .page-heading-tool .mobile-filter:hover .toolip {
                    -webkit-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    left: 50%;
                    transform: translateX(-50%);
                    opacity: 1;
                }
                .page-heading-tool .mobile-filter:hover .toolip p {
                    display: block;
                }
                .page-heading-tool .mobile-filter:hover .toolip:before {
                    z-index: -1;
                }
            }

            .page-heading-tool .mobile-filter-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                z-index: 11;
                position: absolute;
                top: 5px;
                right: -20px;
                order: 2;
                overflow: hidden;
                opacity: 0;
                transition: 0.4s ease-in-out all;
            }

            .page-heading-tool .mobile-filter-2 span {
                height: 30px;
                font-size: 30px;
            }

            @media (max-width:576px) {
                .page-heading-tool .mobile-filter-2 span {
                    font-size: 24px;
                }
            }

            .page-heading-tool .switch-group {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 190px;
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                flex: 0 0 190px;
                order: 2;
                max-width: 190px;
                margin-top: 10px;
                margin-bottom: 0;
                padding: 0 7px;
                transition: 0.4s ease-in-out all;
            }

            .page-heading-tool .switch-group .form-group {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                position: relative;
            }

            .page-heading-tool .switch-group .form-group label {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                width: 100%;
                padding-left: 56px;
                color: #8E9094;
                font-size: 15px;
                font-weight: 400;
                line-height: 1;
            }

            @media (max-width:576px) {
                .page-heading-tool .switch-group .form-group label {
                    padding-right: 40px;
                    font-size: 15px;
                }
            }

            .page-heading-tool .switch-group .form-group .slider {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -webkit-transition: 0.4s;
                -o-transition: 0.4s;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                top: 50%;
                left: 0;
                width: 50px;
                height: 26px;
                transform: translateY(-50%);
                border-radius: 20px;
                background-color: #D9D9D9;
                cursor: pointer;
                transition: 0.4s;
            }

            .page-heading-tool .switch-group .form-group .slider::before {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -webkit-transition: 0.4s;
                -o-transition: 0.4s;
                position: absolute;
                top: 50%;
                left: 1px;
                width: 24px;
                height: 24px;
                transform: translateY(-50%);
                border-radius: 50%;
                background: #182642;
                content: "";
                transition: 0.4s;
            }

            .page-heading-tool .switch-group .form-group input {
                display: none;
            }

            .page-heading-tool .switch-group .form-group input:checked~.slider {
                background-color: #6383c5;
            }

            .page-heading-tool .switch-group .form-group input:focus~.slider {
                -webkit-box-shadow: 0 0 1px #2aba2a;
                box-shadow: 0 0 1px #2aba2a;
            }

            .page-heading-tool .switch-group .form-group input:checked~.slider::before {
                -webkit-transform: translate(24px, -50%);
                -ms-transform: translate(24px, -50%);
                transform: translate(24px, -50%);
            }

            @media (min-width:576px) {
                .page-heading-tool .switch-group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 200px;
                    flex: 0 0 200px;
                    max-width: 200px;
                }
            }

            @media (min-width:1024px) {
                .page-heading-tool .switch-group {
                    -webkit-box-ordinal-group: 4;
                    -ms-flex-order: 2;
                    order: 2;
                    margin-top: 0;
                }
            }

            .page-heading-tool .filters-wrapper {
                position: static;
                top: 100%;
                width: 100%;
                background: #F2F2F2;
            }

            .page-heading-tool .filters-wrapper.active .filter-extend {
                animation: opacity 400ms forwards;
            }

            .page-heading-tool .filters-wrapper.active {
                overflow: inherit !important;
            }

            .page-heading-tool .filters-wrapper .switch-group {
                margin-top: 15px;
            }

            .page-heading-tool .filters-wrapper .title-filter {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                justify-content: space-between;
                color: #172642;
                font-size: 16px;
                font-weight: 400;
                text-transform: uppercase;
            }

            .page-heading-tool .filters-wrapper .title-filter .close-filter {
                z-index: 11;
                position: absolute;
                top: 0;
                right: 0;
                cursor: pointer;
            }

            .page-heading-tool .filters-wrapper .title-filter .close-filter em {
                color: #172642;
                font-size: 16px;
            }

            .page-heading-tool .filters-wrapper .row {
                margin-bottom: 0;
            }

            .page-heading-tool .filters-wrapper .row>* {
                margin-bottom: 0;
            }

            .page-heading-tool .filters-wrapper .form-group label {
                width: 100%;
                margin-bottom: 5px;
                color: #5d677a;
                font-size: 16px;
                font-weight: 400;
            }

            .page-heading-tool .filters-wrapper .form-group select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                width: 100% !important;
                height: 30px;
                padding: 0 40px 0 16px;
                border: 1px solid #e5e5e5;
                border-radius: 4px;
                background-color: #ffffff;
                font-size: 16px;
            }

            .edit-multiselect button.ui-multiselect {
                width: 100% !important;
            }

            .edit-multiselect .ui-multiselect-menu {
                width: 88.9% !important;
            }

            .page-heading-tool .filters-wrapper .form-group select::-webkit-input-placeholder {
                color: #999999;
            }

            .page-heading-tool .filters-wrapper .form-group select::-moz-placeholder {
                color: #999999;
            }

            .page-heading-tool .filters-wrapper .form-group select:-ms-input-placeholder {
                color: #999999;
            }

            .page-heading-tool .filters-wrapper .form-group select::-ms-input-placeholder {
                color: #999999;
            }

            .page-heading-tool .filters-wrapper .form-group select::placeholder {
                color: #999999;
            }

            .page-heading-tool .filters-wrapper .form-group select:focus {
                outline: none;
            }

            .page-heading-tool .filters-wrapper .form-group select::-ms-expand {
                display: none;
            }

            .page-heading-tool .filters-wrapper .form-group select option {
                color: #182642;
            }

            .page-heading-tool .filters-wrapper .form-group.form-submit {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                bottom: 0;
                align-items: center;
                justify-content: center;
                margin-top: 10px;
                margin-bottom: 0;
            }

            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: flex-end;
                margin-right: 10px;
                padding: 6px 10px;
                border: 1px solid #e5e5e5;
                border-radius: 4px;
                background: #ffffff;
                color: #666666;
                font-size: 14px;
            }

            .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: 10px;
                padding: 6px 25px;
                border-radius: 4px;
                background: #00b2a3;
                color: #fff;
                font-size: 14px;
                text-transform: uppercase;
            }

            @keyframes opacity {
                0% {
                    opacity: 0;
                }
                50% {
                    opacity: 0.7;
                }
                100% {
                    opacity: 1;
                }
            }

            @media (min-width:1024px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                    padding: 6px 10px;
                }
            }

            @media (min-width:1200px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                    margin-left: 15px;
                }
            }

            @media (min-width:1440px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                    padding: 6px 25px;
                }
            }

            @media (min-width:541px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
                    -webkit-box-ordinal-group: 3;
                    -ms-flex-order: 2;
                    order: 2;
                    margin-left: 15px;
                }
                .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                    -webkit-box-ordinal-group: 2;
                    -ms-flex-order: 1;
                    order: 1;
                    margin-left: 0;
                }
            }

            @media (min-width:576px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit {
                    -webkit-box-pack: end;
                    -ms-flex-pack: end;
                    justify-content: flex-end;
                    margin-top: 10px;
                }
                .page-heading-tool .filters-wrapper .form-group.form-submit .btn-reset {
                    margin-right: 0;
                }
                .page-heading-tool .filters-wrapper .form-group.form-submit .btn-gradient {
                    margin-left: 15px;
                }
            }

            @media (min-width:1200px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit {
                    -webkit-box-pack: end;
                    -ms-flex-pack: end;
                    justify-content: flex-end;
                }
            }

            @media (min-width:1440px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit {
                    margin-top: 28px;
                }
            }

            @media (min-width:1024px) {
                .page-heading-tool .filters-wrapper .form-group {
                    margin-bottom: 0;
                }
            }

            @media (max-width:1440px) {
                .page-heading-tool .filters-wrapper .form-group label {
                    font-size: 14px;
                }
                .page-heading-tool .filters-wrapper .form-group select {
                    font-size: 15px;
                }
            }

            .page-heading-tool .tool-wrapper.mobile-height.mobile-show {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                transition: 0.4s ease-in-out all;
            }

            .page-heading-tool .tool-wrapper.mobile-height.mobile-show .mobile-filter,
            .page-heading-tool .tool-wrapper.mobile-height.mobile-show .switch-group {
                opacity: 1;
            }

            @media (max-width:1023px) {
                .page-heading-tool .tool-wrapper {
                    padding-bottom: 60px;
                }
                .page-heading-tool .tool-wrapper .mobile-filter .toolip,
                .page-heading-tool .tool-wrapper .switch-group .toolip {
                    display: none;
                }
                .page-heading-tool .tool-wrapper.mobile-height {
                    -webkit-transition: 0.4s ease-in-out all;
                    -o-transition: 0.4s ease-in-out all;
                    padding-bottom: 0;
                    transition: 0.4s ease-in-out all;
                }
                .page-heading-tool .tool-wrapper.mobile-height .mobile-filter,
                .page-heading-tool .tool-wrapper.mobile-height .switch-group {
                    -webkit-transition: 0.2s ease all;
                    -o-transition: 0.2s ease all;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    opacity: 0;
                    pointer-events: none;
                    transition: 0.2s ease all;
                }
                .page-heading-tool .tool-wrapper.mobile-show .mobile-filter,
                .page-heading-tool .tool-wrapper.mobile-show .switch-group {
                    pointer-events: auto;
                }
                .page-heading-tool .tool-wrapper.mobile-show .switch-group {
                    right: 135px;
                    bottom: -2px;
                }
            }

            @media (max-width:1023px) {
                .page-heading-tool .mobile-filter {
                    -webkit-transition: 0.1s ease-in-out all;
                    -o-transition: 0.1s ease-in-out all;
                    z-index: 11;
                    position: absolute;
                    right: 0;
                    bottom: -5px;
                    transition: 0.1s ease-in-out all;
                }
            }

            @media (max-width:1023px) {
                .page-heading-tool .switch-group {
                    -webkit-transition: 0.1s ease-in-out all;
                    -o-transition: 0.1s ease-in-out all;
                    z-index: 11;
                    position: absolute;
                    right: 95px;
                    bottom: -9px;
                    height: 30px;
                    transition: 0.1s ease-in-out all;
                }
                .page-heading-tool .filters-wrapper .switch-group {
                    position: static;
                    margin-top: 0;
                }
                .page-heading-tool .switch-group-sp {
                    display: flex;
                    left: 0;
                    margin-top: 0;
                    bottom: 15px;
                }
                .switch-group-hidden-mb {
                    display: none;
                }
            }

            .page-heading-tool .filters-wrapper .switch-group.toollips .form-group label {
                margin-bottom: 0;
            }

            @media (min-width:1024px) {
                .page-heading-tool .filters-wrapper .inner .col-lg-4 {
                    -ms-flex: 0 0 40%;
                    -webkit-box-flex: 0;
                    flex: 0 0 40%;
                    max-width: 40%;
                }
                .page-heading-tool .filters-wrapper .inner .col-lg-8 {
                    -ms-flex: 0 0 60%;
                    -webkit-box-flex: 0;
                    flex: 0 0 60%;
                    max-width: 60%;
                }
                .page-heading-tool .filters-wrapper .switch-group .form-group {
                    margin-bottom: 0;
                }
            }

            .page-heading-tool .filters-wrapper .switch-group {
                margin-top: 3px;
            }

            .edit-multiselect .ui-multiselect-menu {
                width: 94.7% !important;
            }

            @media (min-width:576px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit {
                    margin-top: 0px;
                }
            }

            .page-heading-tool .mobile-filter.toollips>span,
            .page-heading-tool .mobile-filter-2>span {
                position: relative;
            }

            .page-heading-tool .mobile-filter.toollips>span em,
            .page-heading-tool .mobile-filter-2>span em {
                position: absolute;
                background: #ff0000;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                top: 0;
                right: -3px;
                font-style: normal;
                font-size: 11px;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .page-heading-tool .mobile-filter p {
                display: block;
                margin-left: 5px;
                font-size: 14px;
            }

            @media (max-width:1023px) {
                .page-heading-tool .change-display {
                    display: none;
                }
                .page-heading-tool .mobile-filter {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    max-width: auto !important;
                    position: absolute;
                    top: auto;
                    right: 0;
                    bottom: 13px;
                }
                .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
                    right: 0;
                    opacity: 1;
                    padding-right: 5px;
                    padding-top: 5px;
                    top: 0px;
                }
            }

            @media (max-width:576px) {
                .page-heading-tool .mobile-filter span,
                .page-heading-tool .mobile-filter-2 span {
                    font-size: 30px;
                }
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
                height: 30px;
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                margin-top: 1px;
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
                margin-top: 3px;
            }

            .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
                height: 30px !important;
            }

            .page-heading-tool .filters-wrapper .switch-group.toollips .form-group label {
                margin-bottom: 0;
            }

            @media (min-width:1024px) {
                .page-heading-tool .filters-wrapper .inner .col-lg-4 {
                    -ms-flex: 0 0 40%;
                    -webkit-box-flex: 0;
                    flex: 0 0 40%;
                    max-width: 40%;
                }
                .page-heading-tool .filters-wrapper .inner .col-lg-8 {
                    -ms-flex: 0 0 60%;
                    -webkit-box-flex: 0;
                    flex: 0 0 60%;
                    max-width: 60%;
                }
                .page-heading-tool .filters-wrapper .switch-group .form-group {
                    margin-bottom: 0;
                }
            }

            .page-heading-tool .filters-wrapper .switch-group {
                margin-top: 3px;
            }

            .edit-multiselect .ui-multiselect-menu {
                width: 94.7% !important;
            }

            @media (min-width:576px) {
                .page-heading-tool .filters-wrapper .form-group.form-submit {
                    margin-top: 0px;
                }
            }

            .page-heading-tool .mobile-filter.toollips>span,
            .page-heading-tool .mobile-filter-2>span {
                position: relative;
            }

            .page-heading-tool .mobile-filter.toollips>span em,
            .page-heading-tool .mobile-filter-2>span em {
                position: absolute;
                background: #ff0000;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                top: 0;
                right: -3px;
                font-style: normal;
                font-size: 11px;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .page-heading-tool .mobile-filter p {
                display: block;
                margin-left: 5px;
                font-size: 14px;
            }

            @media (max-width:1023px) {
                .page-heading-tool .change-display {
                    display: none;
                }
                .page-heading-tool .mobile-filter {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    max-width: auto !important;
                    position: absolute;
                    top: auto;
                    right: 0;
                    bottom: 13px;
                }
                .page-heading-tool .tool-wrapper.mobile-height .mobile-filter-2 {
                    right: 0;
                    opacity: 1;
                    padding-right: 5px;
                    padding-top: 5px;
                    top: 0px;
                }
            }

            @media (max-width:576px) {
                .page-heading-tool .mobile-filter span,
                .page-heading-tool .mobile-filter-2 span {
                    font-size: 30px;
                }
            }

            .page-heading-tool .filters-wrapper .form-group select,
            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
                background: #F2F2F2;
                border: none;
            }

            .page-heading-tool .change-display {
                order: 2;
                margin-right: -9px !important;
                margin-top: 4px;
            }

            .page-heading-tool .change-display ul {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .page-heading-tool .change-display ul li em {
                font-size: 30px;
                color: #8E9094;
            }

            .page-heading-tool .change-display ul li a.active em {
                color: #F2994A;
            }

            .page-heading-tool .change-display .grid-view em {
                font-size: 33px;
            }

            .filter-extend {
                border-top: 1px solid #D9D9D9;
                padding: 6px 0;
            }

            .filter-extend .filter-action a.btn-clear {
                border-bottom: 1px solid #09a0db;
                line-height: 1;
                transition: all .4s;
            }

            .filter-extend .filter-action a.btn-apply {
                display: none;
            }

            .filter-extend .filter-action:hover {
                text-decoration: none;
                border-color: #0056b3;
            }

            .filters-wrapper .filter-extend .list-filter-extend,
            .filter-extend {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }

            .filters-wrapper .filter-extend .list-filter-extend {
                flex: 0 0 calc(100% - 100px);
                max-width: calc(100% - 100px);
                padding-right: 20px;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item {
                flex: 0 0 215px;
                max-width: 215px;
                height: 30px;
                position: relative;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item.show-mb {
                display: none;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item:after {
                content: '';
                width: 1px;
                height: 30px;
                background: #D9D9D9;
                position: absolute;
                top: 0;
                right: 0;
            }

            .filters-wrapper .filter-extend .list-filter-extend .item:last-child:after {
                display: none;
            }

            .filters-wrapper .filter-extend .filter-action {
                flex: 0 0 100px;
                max-width: 100px;
                text-align: right;
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
                height: 30px;
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                margin-top: 1px;
            }

            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
                margin-top: 3px;
            }

            .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
                height: 30px !important;
            }

            .page-heading-tool .filters-wrapper .form-group select,
            .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices {
                background: #F2F2F2;
                border: none;
            }

            .page-heading-tool .change-display {
                order: 2;
                margin-right: -9px !important;
                margin-top: 4px;
            }

            .page-heading-tool .change-display ul {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .page-heading-tool .change-display ul li em {
                font-size: 30px;
                color: #8E9094;
            }

            .page-heading-tool .change-display ul li a.active em {
                color: #F2994A;
            }

            .page-heading-tool .change-display .grid-view em {
                font-size: 33px;
            }

            @media (max-width:1440px) {
                .filters-wrapper .filter-extend .list-filter-extend .item {
                    flex: 0 0 200px;
                    max-width: 200px;
                }
            }

            @media (max-width:1200px) {
                .filters-wrapper .filter-extend .list-filter-extend {
                    margin-bottom: -5px;
                }
                .filters-wrapper .filter-extend .list-filter-extend .item {
                    margin-bottom: 5px;
                }
            }

            @media (min-width:1024px) {
                .filter-extend {
                    height: auto !important;
                }
            }

            @media (max-width:1023px) {
                .page-heading-tool .tool-wrapper {
                    margin: 0;
                }
                .page-heading-tool .search-job {
                    padding: 0;
                }
                .filters-wrapper .filter-extend .list-filter-extend {
                    margin: 0 -7.5px -15px;
                    flex: 0 0 calc(100% + 15px) !important;
                    max-width: calc(100% + 15px) !important;
                    padding-right: 0;
                }
                .filters-wrapper .filter-extend .list-filter-extend .item {
                    flex: 0 0 50%;
                    max-width: 50%;
                    padding: 0 7.5px;
                    margin-bottom: 15px;
                }
                .filters-wrapper .filter-extend .filter-action {
                    flex: 0 0 100%;
                    max-width: 100%;
                    padding: 0;
                }
                .filters-wrapper .filter-extend .list-filter-extend .item:after {
                    display: none;
                }
                .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container .chosen-choices {
                    background: #fff;
                    border-radius: 3px;
                }
                .filters-wrapper .filter-extend .list-filter-extend .item.show-mb {
                    display: block;
                }
                .filter-extend .filter-action {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    margin-top: 15px;
                }
                .filter-extend .filter-action a.btn-apply {
                    display: inline-flex;
                    text-transform: uppercase;
                    color: #fff;
                    height: 50px;
                    align-items: center;
                    justify-content: center;
                    padding: 0 40px;
                    background: #00b2a3;
                    border-radius: 3px;
                    font-weight: 700;
                }
                .page-heading-tool .tool-wrapper .search-job .form-group.form-select-chosen {
                    display: none !important;
                }
                .page-heading-tool .search-job .form-group {
                    flex: 0 0 calc(100% - 40px) !important;
                    max-width: calc(100% - 40px) !important;
                    padding-right: 10px !important;
                }
                .page-heading-tool .search-job .form-wrap .form-submit {
                    flex: 0 0 40px !important;
                    max-width: 40px !important;
                }
                .page-heading-tool .search-job .form-group button {
                    height: 40px;
                    flex: 0 0 40px;
                    max-width: 40px;
                }
                .page-heading-tool .tool-wrapper {
                    padding-top: 15px;
                }
                .page-heading-tool .switch-group {
                    flex: 0 0 250px;
                    max-width: 250px;
                }
                .filter-extend .filter-action a.btn-clear {
                    font-size: 15px;
                }
                .filter-extend {
                    align-items: flex-start;
                    position: relative;
                }
                .filter-extend .filter-action {
                    position: absolute;
                    width: 100%;
                    bottom: 15px;
                    left: 0;
                }
                .filters-wrapper {
                    display: none;
                }
                .filters-wrapper .filter-extend .form-select {
                    background-color: #fff;
                }
                .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices,
                .page-heading-tool .filters-wrapper .form-group select,
                .page-heading-tool .filter-extend .form-group.form-select-chosen .chosen-container {
                    height: 40px !important;
                }
                .page-heading-tool .filters-wrapper .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                    margin-top: 6px;
                }
                .filters-wrapper .filter-extend .list-filter-extend .item {
                    height: auto;
                }
            }

            @media (max-width:576px) {
                .filters-wrapper .filter-extend .list-filter-extend .item {
                    flex: 0 0 100%;
                    max-width: 100%;
                    padding: 0px;
                    margin-bottom: 10px;
                }
                .filters-wrapper .filter-extend .list-filter-extend {
                    margin: 0 0 -15px;
                    flex: 0 0 100% !important;
                    max-width: 100% !important;
                    padding-right: 0;
                }
            }

            .filters-wrapper .filter-extend .select-custom {
                background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/arrow-down.png") no-repeat calc(100% - 20px) center !important;
                color: #8E9094;
            }

            .filters-wrapper .filter-extend .select-custom option {
                color: #1E1E1E;
            }

            .find-jobs-form {
                padding: 10px 0;
                border-bottom: 1px solid #e7e7e7;
                background: #fbfbfb;
            }

            .find-jobs-form .mdi-close-circle:before {
                content: "\f159";
            }

            .find-jobs-form .close-input-filter {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: none;
                z-index: 11;
                position: absolute;
                top: 0;
                right: 10px;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }

            .find-jobs-form .close-input-filter em {
                font-size: 16px;
            }

            @media (max-width:1024px) {
                .find-jobs-form .close-input-filter.active {
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
            }

            .find-jobs-form .lnr-cross:before {
                content: "\e870";
            }

            .find-jobs-form .main-form {
                position: relative;
            }

            .find-jobs-form .main-form .advanced-search {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                flex-wrap: wrap;
            }

            .find-jobs-form .main-form .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 35px);
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                position: relative;
                flex: 0 0 calc(100% - 35px);
                order: 1;
                max-width: calc(100% - 35px);
                margin-bottom: 5px;
                padding: 0 4px;
            }

            .find-jobs-form .main-form .form-group label {
                z-index: 11;
                position: absolute;
                top: 5px;
                left: 17px;
                color: #cccccc;
                font-size: 20px;
            }

            .find-jobs-form .main-form .form-group input,
            .find-jobs-form .main-form .form-group .chosen-container {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                width: 100% !important;
                height: 35px;
                padding: 5px 10px;
                border: 1px solid #cccccc;
                border-radius: 4px;
                background: #fff;
                color: #999999;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group input:focus,
            .find-jobs-form .main-form .form-group .chosen-container:focus {
                border-color: #4fb45e;
                outline: none;
            }

            .find-jobs-form .main-form .form-group input::-webkit-input-placeholder,
            .find-jobs-form .main-form .form-group .chosen-container::-webkit-input-placeholder {
                color: #999999;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group input::-moz-placeholder,
            .find-jobs-form .main-form .form-group .chosen-container::-moz-placeholder {
                color: #999999;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group input:-ms-input-placeholder,
            .find-jobs-form .main-form .form-group .chosen-container:-ms-input-placeholder {
                color: #999999;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group input::-ms-input-placeholder,
            .find-jobs-form .main-form .form-group .chosen-container::-ms-input-placeholder {
                color: #999999;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group input::placeholder,
            .find-jobs-form .main-form .form-group .chosen-container::placeholder {
                color: #999999;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
                width: auto !important;
            }

            .find-jobs-form .main-form .form-group .chosen-container .chosen-choices {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-shadow: none;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                border: 0;
                background-image: none;
                box-shadow: none;
            }

            .find-jobs-form .main-form .form-group .chosen-container .chosen-choices:focus {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .find-jobs-form .main-form .form-group .chosen-container .chosen-choices li.search-choice {
                white-space: nowrap;
            }

            .find-jobs-form .main-form .form-group .chosen-container .chosen-choices li.search-choice .search-choice-close {
                background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/chosen-sprite.png") -42px 1px no-repeat;
            }

            @media (min-width:1024px) {
                .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
                    -webkit-box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
                    top: calc(100% + 2px);
                    left: 0;
                    width: 100% !important;
                    border: none !important;
                    box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
                }
            }

            @media (max-width:1023px) {
                .find-jobs-form .main-form .form-group .chosen-container .chosen-drop {
                    top: calc(100% + 2px);
                    left: 0;
                    width: 100% !important;
                }
            }

            .find-jobs-form .main-form .form-group.form-keyword {
                position: relative;
            }

            .find-jobs-form .main-form .form-group.form-keyword .cleartext {
                z-index: 11;
                position: absolute;
                top: 8px;
                right: 8px;
                color: #cccccc;
                cursor: pointer;
                opacity: 0;
            }

            .find-jobs-form .main-form .form-group.form-keyword .cleartext em {
                color: #cccccc;
                font-size: 18px;
            }

            .find-jobs-form .main-form .form-group.form-keyword .cleartext.active {
                opacity: 1;
            }

            @media (min-width:1200px) {
                .find-jobs-form .main-form .form-group.form-keyword .cleartext {
                    top: 6px;
                }
            }

            .find-jobs-form .main-form .form-group.form-select-chosen select {
                display: none;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen label {
                margin-bottom: 5px;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container {
                width: 100% !important;
                height: 35px !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results {
                scrollbar-width: thin;
                scrollbar-color: #00b2a3 #cdcdcd
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar {
                width: 6px !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar-track {
                background: #cdcdcd !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar-thumb {
                background: #00b2a3 !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container-multi .chosen-results::-webkit-scrollbar-thumb:hover {
                background: #00b2a3 !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices {
                height: 100%;
                padding: 5px;
                padding-left: 0;
                border: none;
                background-image: none;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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
                margin: 0 !important;
                margin-right: 5px !important;
                border: none !important;
                background: #ebf8ff !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
                background: none !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
                color: #5d677a;
                font-family: "Material Design Icons";
                font-size: 11px;
                content: "\f156";
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
                color: #fc0821;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
                color: #999999;
                font-family: "Roboto", sans-serif !important;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                color: #999999;
                font-size: 14px;
                font-weight: 400;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
                width: 6px !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
                background: #eaeaea !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
                background: #00b2a3 !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
                background: #00b2a3 !important;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #5d677a;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f131";
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
                color: #ffffff;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
                color: #ffffff;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
                color: #ffffff;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
                color: #ffffff;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
                position: absolute;
                top: 5px;
                left: 20px;
                color: #287ab9;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 15px;
                content: "\f132";
                opacity: 1;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
                color: #182642;
                cursor: pointer;
            }

            .find-jobs-form .main-form .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
                color: #287ab9;
            }

            @media (max-width:1023px) {
                .find-jobs-form .main-form .form-group.form-select-chosen {
                    display: none;
                }
            }

            .find-jobs-form .main-form .form-group.find-jobs {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                margin-bottom: 0;
                transition: 0.4s ease-in-out all;
            }

            .find-jobs-form .main-form .form-group.find-jobs button p {
                color: #ffffff;
                font-size: 14px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .find-jobs-form .main-form .form-group.find-jobs button span {
                display: none;
            }

            @media (min-width:1024px) {
                .find-jobs-form .main-form .form-group.find-jobs button p {
                    display: none;
                }
                .find-jobs-form .main-form .form-group.find-jobs button span {
                    display: block;
                }
            }

            @media (max-width:1024px) {
                .find-jobs-form .main-form .form-group.find-jobs {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 10%;
                    -webkit-transition: initial;
                    -o-transition: initial;
                    flex: 0 0 10%;
                    width: 100%;
                    max-width: 10%;
                    margin-bottom: 5px;
                    transition: initial;
                }
                .find-jobs-form .main-form .form-group.find-jobs.w-100 {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 90%;
                    flex: 0 0 90%;
                    max-width: 90%;
                }
            }

            @media (max-width:1023px) {
                .find-jobs-form .main-form .form-group.find-jobs {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 90%;
                    display: none;
                    flex: 0 0 90%;
                    max-width: 90%;
                }
                .find-jobs-form .main-form .form-group.find-jobs span {
                    display: none;
                }
            }

            @media (max-width:800px) {
                .find-jobs-form .main-form .form-group.find-jobs {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 35px);
                    flex: 0 0 calc(100% - 35px);
                    max-width: calc(100% - 35px);
                }
                .find-jobs-form .main-form .form-group.find-jobs button {
                    padding: 8px 11px;
                }
                .find-jobs-form .main-form .form-group.find-jobs.w-100 {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 35px);
                    flex: 0 0 calc(100% - 35px);
                    max-width: calc(100% - 35px);
                    margin-left: 0;
                    padding-right: 5px;
                    padding-left: 5px;
                }
            }

            .find-jobs-form .main-form .form-group.animation {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                display: none;
                z-index: 22;
                position: absolute;
                top: 0;
                right: 0;
                pointer-events: none;
                transition: 0.4s ease-in-out all;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient {
                -webkit-transition: all 0.4s ease-in-ou;
                -o-transition: all 0.4s ease-in-ou;
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
                padding: 7px 11px;
                border-radius: 4px;
                background: #00b2a3;
                color: #ffffff;
                font-size: 18px;
                font-weight: 700;
                text-transform: uppercase;
                transition: all 0.4s ease-in-ou;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient p {
                color: #ffffff;
                font-size: 14px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .find-jobs-form .main-form .form-group.animation .btn-gradient span {
                display: none;
            }

            @media (max-width:1023px) {
                .find-jobs-form .main-form .form-group.animation {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(10% + 8px);
                    -webkit-transition: 0.2s ease-in-out all;
                    -o-transition: 0.2s ease-in-out all;
                    display: block;
                    flex: 0 0 calc(10% + 8px);
                    width: 100%;
                    max-width: calc(10% + 8px);
                    overflow: hidden;
                    opacity: 1;
                    pointer-events: auto;
                    transition: 0.2s ease-in-out all;
                }
                .find-jobs-form .main-form .form-group.animation p {
                    display: block;
                }
                .find-jobs-form .main-form .form-group.animation span {
                    display: none;
                }
                .find-jobs-form .main-form .form-group.animation.active {
                    -webkit-transition: 0.5s ease-in-out all;
                    -o-transition: 0.5s ease-in-out all;
                    opacity: 0;
                    pointer-events: none;
                    transition: 0.5s ease-in-out all;
                }
            }

            @media (max-width:800px) {
                .find-jobs-form .main-form .form-group.animation {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 40px;
                    flex: 0 0 40px;
                    max-width: 40px;
                    padding-right: 0;
                    padding-left: 0;
                }
                .find-jobs-form .main-form .form-group.animation .btn-gradient {
                    padding: 8px 11px;
                }
                .find-jobs-form .main-form .form-group.animation .btn-gradient p {
                    display: none;
                }
                .find-jobs-form .main-form .form-group.animation .btn-gradient span {
                    display: block;
                }
            }

            @media (min-width:801px) {
                .find-jobs-form .main-form .form-group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 90%;
                    flex: 0 0 90%;
                    max-width: 90%;
                }
            }

            @media (min-width:1024px) {
                .find-jobs-form .main-form .advanced-search .form-group {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc((100% - 40px)/3);
                    flex: 0 0 calc((100% - 40px)/3);
                    max-width: calc((100% - 40px)/3);
                    margin-bottom: 0;
                }
                .find-jobs-form .main-form .advanced-search .form-group.find-jobs {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 40px;
                    flex: 0 0 40px;
                    max-width: 40px;
                    padding-left: 0;
                }
                .find-jobs-form .main-form .advanced-search .form-group:nth-child(3) {
                    padding-right: 0;
                }
            }

            .find-jobs-form .find-jobs {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 100%;
                align-items: center;
                justify-content: center;
                order: 3;
                max-width: 100%;
                margin-bottom: 0;
                padding: 0 4px;
            }

            .find-jobs-form .find-jobs button {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                padding: 7px 11px;
                border-radius: 4px;
                background: #00b2a3;
                color: #ffffff;
                font-size: 18px;
                font-weight: 700;
                text-transform: uppercase;
                transition: all 0.4s ease-in-out;
            }

            .find-jobs-form .Advanced-Search-Popup {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 10%;
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex: 0 0 10%;
                align-items: center;
                justify-content: center;
                order: 2;
                max-width: 10%;
                margin-top: 5px;
                margin-bottom: 10px;
                padding: 0 4px;
                cursor: pointer;
            }

            .find-jobs-form .Advanced-Search-Popup i {
                font-size: 30px;
            }

            @media (min-width:1200px) {
                .find-jobs-form .main-form .advanced-search {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    -ms-flex-wrap: wrap;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    align-items: center;
                    margin: 0 -1px;
                }
                .find-jobs-form .main-form .form-group {
                    padding: 0 1px;
                }
                .find-jobs-form .Advanced-Search-Popup {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 3%;
                    -webkit-box-ordinal-group: 4;
                    -ms-flex-order: 3;
                    flex: 0 0 3%;
                    order: 3;
                    max-width: 3%;
                    margin-top: 0;
                    margin-bottom: 0;
                    padding: 0 15px;
                }
                .find-jobs-form .find-jobs {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                .find-jobs-form .find-jobs button {
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-width: 35px;
                    height: 35px;
                    padding: 2px 10px;
                }
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
                color: #fb9104;
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
                font-size: 14px;
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
                background: #f7a334;
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

            .job-item .figure .premium-icon {
                position: absolute;
                top: -15px;
                right: -15px;
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
                background: #287ab9;
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
                color: #fb9104;
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
                border: 1px solid #009B74;
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

            .job-found {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 20px;
                padding-bottom: 5px;
                border-bottom: 1px solid #e5e5e5;
            }

            .job-found .job-found-amout p {
                color: #172642;
                font-size: 1.125rem;
                font-weight: 700;
            }

            .job-found .job-found-sort {
                font-size: 14px;
            }

            .job-found .job-found-sort .sort-title {
                margin-right: 5px;
                cursor: pointer;
            }

            .job-found .job-found-sort a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                align-items: center;
                color: inherit;
            }

            .job-found .job-found-sort a.active {
                font-weight: 700;
            }

            .job-found .job-found-sort a+a:before {
                margin: 0 5px;
                content: "|";
            }

            .job-found .job-found-sort .dropdown-menu {
                min-width: -webkit-max-content;
                min-width: -moz-max-content;
                min-width: max-content;
                padding-top: 10px;
            }

            .jobs-side-list {
                max-height: calc(100vh - 210px);
                padding-right: 10px;
                overflow-y: auto;
            }

            .jobs-side-list::-webkit-scrollbar {
                width: 6px;
                background: #eaeaea;
            }

            .jobs-side-list::-webkit-scrollbar-thumb {
                background: #00b2a3;
            }

            .jobs-side-list .job-item .figure {
                border-right: 0;
                border-radius: 0;
            }

            .jobs-side-list .jobs-list .job-item:first-child .figure {
                padding-top: 10px;
                border-top: 0;
            }

            .jobs-side-list .load-more a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 80%;
                max-width: 18.875rem;
                height: 46px;
                margin: 30px auto;
                border: 2px solid #287ab9;
                border-radius: 5px;
                color: #287ab9;
                font-weight: 700;
                letter-spacing: 0.1rem;
                text-decoration: none;
                text-transform: uppercase;
                transition: 0.3s all;
            }

            .jobs-side-list .load-more a span {
                margin-left: 8px;
            }

            .jobs-side-list .load-more a:hover {
                background: #287ab9;
                color: #fff;
            }

            @media screen and (max-width:1023px) {
                .jobs-side-list {
                    max-height: none;
                    overflow-y: visible;
                }
            }

            .apply-now-banner {
                -webkit-box-align: end;
                -ms-flex-align: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                align-items: flex-end;
                height: 310px;
            }

            .apply-now-banner .image {
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
                height: 100%;
            }

            .apply-now-banner .image img {
                -o-object-fit: cover;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .apply-now-banner .apply-now-content {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
            }

            @media (max-width:1200px) {
                .apply-now-banner {
                    position: relative;
                    padding-bottom: 50px;
                }
                .apply-now-banner .apply-now-content {
                    -webkit-box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    position: absolute;
                    bottom: 0;
                    bottom: 0;
                    left: 0;
                    align-items: center;
                    justify-content: space-between;
                    width: calc(100% - 30px);
                    margin: 0 15px;
                    border-radius: 5px;
                    background: #ffffff;
                    box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
                }
                .apply-now-banner .apply-now-content .job-desc .title {
                    text-align: left;
                }
                .apply-now-banner .apply-now-content .job-desc .employer {
                    text-align: left;
                }
                .apply-now-banner .apply-now-content .job-desc .salary {
                    text-align: center;
                }
                .apply-now-banner .apply-now-content .apply-now-btn {
                    text-align: center;
                }
            }

            @media (max-width:1024px) {
                .apply-now-banner {
                    height: auto !important;
                }
                .apply-now-banner .image img {
                    -o-object-fit: contain;
                    object-fit: contain;
                }
            }

            @media (max-width:576px) {
                .apply-now-banner {
                    padding-bottom: 90px;
                }
                .apply-now-banner .apply-now-content .job-desc .title {
                    text-align: center;
                }
                .apply-now-banner .apply-now-content .job-desc .employer {
                    display: block;
                    text-align: center;
                }
            }

            @media (max-width:340px) {
                .apply-now-banner {
                    padding-bottom: 110px;
                }
            }

            .apply-now-content {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                padding: 20px 30px;
                background: rgba(255, 255, 255, 0.85);
            }

            .apply-now-content .job-desc .title {
                color: #172642;
                font-size: 1.25rem;
                font-weight: 700;
                line-height: 1.25rem;
            }

            .apply-now-content .job-desc .title a {
                color: #172642;
                font-size: 1.25rem;
                font-weight: 700;
                line-height: 1.25rem;
            }

            .apply-now-content .job-desc .title a:hover {
                text-decoration: none;
            }

            @media (max-width:1440px) {
                .apply-now-content .job-desc .title {
                    font-size: 0.875rem !important;
                }
                .apply-now-content .job-desc .title a {
                    font-size: 0.875rem !important;
                }
            }

            .apply-now-content .job-desc .employer {
                color: #5d677a;
                font-weight: 700;
                line-height: 1.25rem;
            }

            .apply-now-content .job-desc .salary {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }

            .apply-now-btn a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 15.9375rem;
                height: 35px;
                border-radius: 5px;
                background: #00b2a3;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            @media (max-width:1440px) {
                .apply-now-btn a {
                    font-size: 14px;
                }
            }

            .apply-now-btn.success a {
                background: #dcdcdc !important;
                color: #169b74;
            }

            @media screen and (max-width:576px) {
                .apply-now-content {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    -webkit-box-align: start;
                    -ms-flex-align: start;
                    flex-direction: column;
                    align-items: flex-start;
                }
                .apply-now-btn {
                    margin-top: 10px;
                }
            }

            .job-result-nav {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top: 15px;
                margin-bottom: 15px;
                padding-bottom: 5px;
                border-bottom: 1px solid #eaeaea;
            }

            .job-result-nav>ul {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .job-result-nav>ul li {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                position: relative;
                font-weight: 400;
                transition: 0.4s ease-in-out all;
            }

            .job-result-nav>ul li+li {
                margin-left: 40px;
            }

            .job-result-nav>ul li a {
                color: #5d677a;
                font-size: 15px;
                text-decoration: none;
            }

            .job-result-nav>ul li:before {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                position: absolute;
                bottom: -8px;
                left: 0;
                width: 0;
                height: 4px;
                background: #287ab9;
                content: "";
                transition: 0.4s ease-in-out all;
            }

            .job-result-nav>ul li.active a {
                color: #182642;
                font-size: 15px;
                font-weight: 700;
            }

            .job-result-nav>ul li.active::before {
                width: 100%;
            }

            .job-result-nav>ul li:hover a {
                color: #182642;
            }

            .job-result-nav>ul li:hover::before {
                width: 100%;
            }

            .job-result-nav .job-detail-tool .tabs-saved li {
                display: inline-block;
            }

            .job-result-nav .job-detail-tool .tabs-saved li+li {
                margin-left: 10px;
            }

            .job-result-nav .job-detail-tool .tabs-saved li a,
            .job-result-nav .job-detail-tool .tabs-saved li .mdi,
            .job-result-nav .job-detail-tool .tabs-saved li .fa {
                color: inherit;
                font-size: 1.25rem;
                text-decoration: none;
                cursor: pointer;
            }

            .job-result-nav .job-detail-tool .tabs-saved li a:hover,
            .job-result-nav .job-detail-tool .tabs-saved li .mdi:hover,
            .job-result-nav .job-detail-tool .tabs-saved li .fa:hover {
                color: #fb9104;
            }

            .job-result-nav .job-detail-tool .tabs-saved li a.saved,
            .job-result-nav .job-detail-tool .tabs-saved li .mdi.saved,
            .job-result-nav .job-detail-tool .tabs-saved li .fa.saved {
                color: #fb9104;
            }

            .job-result-nav .job-detail-tool .tabs-saved li .toollips .toolip {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                z-index: 111;
                left: 50%;
                transform: translateX(-50%);
            }

            .job-result-nav .job-detail-tool .tabs-saved li .toollips .toolip:before {
                top: -7.5px;
            }

            .job-result-nav .job-detail-tool .tabs-saved li .toollips .toolip:after {
                top: -5px;
            }

            .job-result-nav .job-detail-tool .tabs-saved li .dropdown .dropdown-menu {
                min-width: 180px;
                padding-top: 10px;
            }

            .job-result-nav .job-detail-tool .tabs-saved li .dropdown .dropdown-menu .social-list {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 15px;
            }

            .job-result-nav .job-detail-tool .tabs-saved .saved i {
                color: #fb9104;
            }

            .job-detail-content .mdi-home-city:before {
                content: "\fcf1";
            }

            .job-detail-content .mdi-update:before {
                content: "\f6af";
            }

            .job-detail-content .mdi-briefcase:before {
                content: "\f0d6";
            }

            .job-detail-content .mdi-briefcase-edit:before {
                content: "\fa97";
            }

            .job-detail-content .bg-blue {
                background: #f1f9fc;
            }

            .job-detail-content .bg-blue .row>* {
                margin-bottom: 0;
            }

            .job-detail-content .row {
                margin: 0 -10px -20px;
            }

            .job-detail-content .row>* {
                margin-bottom: 20px;
                padding: 0 10px;
            }

            .job-detail-content .banner-ad {
                display: none;
            }

            @media (max-width:800px) {
                .job-detail-content .banner-ad {
                    display: block;
                    width: 30%;
                    float: right;
                }
            }

            @media (max-width:599px) {
                .job-detail-content .banner-ad {
                    display: none;
                }
            }

            .job-detail-content .detail-box {
                padding: 15px;
            }

            .job-detail-content .detail-box strong,
            .job-detail-content .detail-box b {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                color: #182642;
                font-size: 16px;
            }

            .job-detail-content .detail-box strong em,
            .job-detail-content .detail-box b em {
                width: 20px;
                padding-right: 5px;
                line-height: 1.5;
            }

            .job-detail-content .detail-box p,
            .job-detail-content .detail-box li {
                font-size: 14px;
            }

            .job-detail-content .detail-box .salary,
            .job-detail-content .detail-box .update-date,
            .job-detail-content .detail-box .form-of-work,
            .job-detail-content .detail-box .industry {
                margin-top: 1.25rem;
            }

            .job-detail-content .detail-box .update-date,
            .job-detail-content .detail-box .form-of-work,
            .job-detail-content .detail-box .industry {
                padding-left: 15px;
            }

            @media (min-width:1025px) {
                .job-detail-content .detail-box .update-date {
                    margin-top: 0;
                }
            }

            .job-detail-content .detail-box .update-date ul {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .update-date p {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .update-date time {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .industry p {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .industry ul {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .form-of-work p {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .form-of-work ul {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .map p {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .map ul {
                padding-left: 21px;
            }

            .job-detail-content .detail-box .map p a {
                position: relative;
                padding-right: 10px;
            }

            .job-detail-content .detail-box .map p a:before {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                position: absolute;
                top: 50%;
                right: 3px;
                transform: translateY(-50%);
                font-size: 16px;
                content: "|";
            }

            .job-detail-content .detail-box .map p a:last-child {
                padding-right: 0;
            }

            .job-detail-content .detail-box .map p a:last-child:before {
                display: none;
            }

            .job-detail-content .detail-box .type-of-work {
                margin-top: 1.25rem;
            }

            .job-detail-content .detail-box .type-of-work ul {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                padding-left: 21px;
            }

            .job-detail-content .detail-box .type-of-work li {
                -webkit-box-orient: vertical;
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                display: -webkit-box;
                height: 21px;
                padding-left: 0;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .job-detail-content .detail-box .type-of-work li+li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .job-detail-content .detail-box .type-of-work li+li:before {
                margin: 0;
                margin-right: 8px;
                margin-left: 8px;
                content: "|";
            }

            @media (max-width:800px) {
                .job-detail-content .detail-box .type-of-work {
                    position: relative;
                }
                .job-detail-content .detail-box .type-of-work:before {
                    position: absolute;
                    bottom: -15px;
                    left: 0;
                    width: 100%;
                    height: 1px;
                    background: #e9e9e9;
                    content: "";
                }
            }

            .job-detail-content .detail-box .map strong {
                display: block;
            }

            .job-detail-content .detail-box .map b,
            .job-detail-content .detail-box .map p {
                display: block;
                margin-bottom: 0.625rem;
            }

            .job-detail-content .detail-box .map a {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                z-index: 111;
                height: 100%;
                overflow: hidden;
                pointer-events: auto;
            }

            .job-detail-content .detail-box .map a img {
                height: 85px;
            }

            .job-detail-content .detail-box .map iframe {
                width: 100%;
                height: 143px;
                pointer-events: none;
            }

            .job-detail-content .detail-box .map svg {
                width: 100%;
                height: 100%;
            }

            @media (max-width:576px) {
                .job-detail-content .detail-box .map {
                    padding-top: 15px;
                }
                .job-detail-content .detail-box .map a img {
                    -o-object-fit: cover;
                    height: 100%;
                    object-fit: cover;
                }
            }

            .job-detail-content .detail-box.has-background ul li {
                padding-bottom: 5px;
            }

            .job-detail-content .detail-box.has-background ul li strong {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .job-detail-content .detail-box.has-background ul li strong i {
                width: 16px;
                margin-right: 5px;
            }

            .job-detail-content .detail-box.has-background ul li strong i.fa {
                font-size: 12px;
            }

            .job-detail-content .detail-box.has-background ul li strong em {
                width: 16px;
                margin-right: 5px;
            }

            .job-detail-content .detail-box.has-background ul li strong em.mdi {
                font-size: 12px;
            }

            .job-detail-content .detail-box.has-background ul li p {
                padding-left: 21px;
            }

            .job-detail-content .detail-box.has-background ul li+li {
                padding-top: 8px;
                border-top: 1px solid #e9e9e9;
            }

            @media (max-width:1440px) {
                .job-detail-content .detail-box strong {
                    font-size: 15px;
                }
            }

            @media (max-width:576px) {
                .job-detail-content .detail-box strong {
                    font-size: 16px;
                }
            }

            .job-detail-content .detail-row {
                margin-top: 40px;
            }

            .job-detail-content .detail-row .detail-title {
                margin-bottom: 1.25rem;
                font-size: 1.125rem;
                font-weight: 700;
                text-transform: uppercase;
                color: #172642;
            }

            @media (max-width:1440px) {
                .job-detail-content .detail-row .detail-title {
                    font-size: 15px;
                }
            }

            @media (max-width:576px) {
                .job-detail-content .detail-row .detail-title {
                    font-size: 1.125rem;
                }
            }

            .job-detail-content .detail-row .welfare-list {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                padding-left: 0;
            }

            .job-detail-content .detail-row .welfare-list li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                width: 33.33%;
                font-size: 15px;
            }

            .job-detail-content .detail-row .welfare-list li .mdi,
            .job-detail-content .detail-row .welfare-list li .fa {
                width: 17px;
                height: 15px;
                margin-right: 8px;
                padding-top: 2px;
            }

            .job-detail-content .detail-row ol {
                padding-left: 2rem;
            }

            .job-detail-content .detail-row ul {
                padding-left: 2rem;
                list-style: disc;
            }

            .job-detail-content .detail-row p {
                margin-bottom: 10px;
            }

            .job-detail-content .detail-row p+p {
                margin-top: 10px;
            }

            .job-detail-content .detail-row ul,
            .job-detail-content .detail-row ol {
                margin-bottom: 20px;
            }

            .job-detail-content .detail-row ul+ul,
            .job-detail-content .detail-row ul ol,
            .job-detail-content .detail-row ol+ul,
            .job-detail-content .detail-row ol ol {
                margin-top: 10px;
            }

            @media (max-width:1440px) {
                .job-detail-content .detail-row p,
                .job-detail-content .detail-row li,
                .job-detail-content .detail-row a,
                .job-detail-content .detail-row td {
                    font-size: 15px;
                }
            }

            @media (max-width:576px) {
                .job-detail-content .detail-row p,
                .job-detail-content .detail-row li,
                .job-detail-content .detail-row a,
                .job-detail-content .detail-row td {
                    font-size: 16px;
                }
            }

            .job-detail-content .table-salary table {
                width: 100%;
            }

            .job-detail-content .salary-range {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                flex-wrap: wrap;
                padding-top: 125px;
                padding-bottom: 40px;
                clear: both;
            }

            .job-detail-content .salary-range .progress-salary {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                flex-wrap: wrap;
                width: 100%;
            }

            .job-detail-content .salary-range .square-min,
            .job-detail-content .salary-range .square-max {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 55px;
                position: relative;
                flex: 0 0 55px;
                max-width: 55px;
                height: 47px;
                background: #f2f2f2;
            }

            .job-detail-content .salary-range .square-min .value-text-medium,
            .job-detail-content .salary-range .square-max .value-text-medium {
                z-index: 11;
                position: absolute;
                top: 100%;
                width: 80px;
                padding: 5px 0;
                padding-bottom: 0;
            }

            .job-detail-content .salary-range .square-min .value-text-medium p,
            .job-detail-content .salary-range .square-max .value-text-medium p {
                margin-bottom: 0;
                color: #999999;
                font-size: 14px;
                font-weight: 500;
                line-height: 1.2;
                text-align: center;
            }

            .job-detail-content .salary-range .square-min .value-text-medium span,
            .job-detail-content .salary-range .square-max .value-text-medium span {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #999999;
                font-size: 14px;
                font-weight: 500;
                line-height: 1.2;
            }

            .job-detail-content .salary-range .square-min .value-text-medium {
                right: -45px;
            }

            .job-detail-content .salary-range .square-max .value-text-medium {
                left: -45px;
            }

            .job-detail-content .salary-range .square-real {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 calc(100% - 110px);
                flex: 0 0 calc(100% - 110px);
                max-width: calc(100% - 110px);
                height: 47px;
                background: #71d2fa;
            }

            .job-detail-content .salary-range .rectangle-color {
                z-index: 11;
                position: absolute;
                left: 30%;
                width: 96px;
                height: 100%;
                background: #15a1db;
            }

            .job-detail-content .salary-range .rectangle-color .value-point-medium {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                z-index: 12;
                position: absolute;
                left: 50%;
                width: 2px;
                height: 100%;
                transform: translateX(-50%);
                background: #fdb816;
            }

            .job-detail-content .salary-range .rectangle-color .value-text-medium {
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                z-index: 11;
                position: absolute;
                top: 100%;
                left: 50%;
                width: 100%;
                padding: 5px 0;
                padding-bottom: 0;
                transform: translateX(-50%);
                text-align: center;
            }

            .job-detail-content .salary-range .rectangle-color .value-text-medium p {
                margin-bottom: 0;
                color: #999999;
                font-size: 14px;
                font-weight: 500;
                line-height: 1.2;
                text-align: center;
            }

            .job-detail-content .salary-range .rectangle-color .value-text-medium span {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #999999;
                font-size: 14px;
                font-weight: 500;
                line-height: 1.2;
            }

            .job-detail-content .salary-range .rectangle-color .value-point-popular {
                z-index: 11;
                position: absolute;
                bottom: 100%;
                width: 80px;
            }

            .job-detail-content .salary-range .rectangle-color .value-point-popular.value-point-popular-min {
                left: -40px;
            }

            .job-detail-content .salary-range .rectangle-color .value-point-popular.value-point-popular-max {
                right: -40px;
            }

            .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium {
                top: initial;
                bottom: 0;
                width: 100%;
                padding: 0;
            }

            .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium p {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                margin-bottom: 3px;
                padding: 1px 12.5px;
                border-radius: 3px;
                background: #009a74;
                color: #ffffff;
                font-size: 15px;
                font-weight: 400;
            }

            .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium span {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #999999;
                font-size: 14px;
                font-weight: 500;
            }

            .job-detail-content .salary-range .salary-of-you {
                z-index: 22;
                position: absolute;
                bottom: 18px;
                left: 70%;
            }

            .job-detail-content .salary-range .salary-of-you .text {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                bottom: 100%;
                left: 50%;
                align-items: center;
                justify-content: center;
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                padding: 1px 7px;
                transform: translateX(-50%);
                border-radius: 5px;
                background: #fdb816;
            }

            .job-detail-content .salary-range .salary-of-you .text p {
                margin-bottom: 0;
                color: #ffffff;
                font-size: 15px;
                font-weight: 400;
            }

            .job-detail-content .share-this-job {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                margin-top: 1.25rem;
                padding: 7px 15px;
                background: #f1f1f1;
            }

            .job-detail-content .share-this-job>span {
                margin-right: 15px;
                font-size: 14px;
            }

            .job-detail-content .share-this-job a {
                color: inherit;
            }

            .job-detail-content .share-this-job a+a {
                margin-left: 15px;
            }

            .job-detail-content .share-this-job a:hover {
                color: #fb9104;
            }

            .job-detail-content .share-this-job .zalo-share-button {
                margin-left: 15px;
            }

            .job-detail-content .share-this-job .zalo-share-button:before {
                top: 3px;
            }

            .job-detail-content .job-detail-bottom {
                position: relative;
            }

            .job-detail-content .job-detail-bottom.sticky {
                z-index: 222;
                position: -webkit-sticky;
                position: sticky;
                bottom: 5px;
            }

            .job-detail-content .job-detail-bottom .apply-now-content {
                padding: 10px 15px !important;
            }

            .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
                position: relative;
                margin-top: 40px;
                margin-bottom: 20px;
                background: #fff;
            }

            .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper:before {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                -webkit-transition: 0.3s ease-in-out all;
                -o-transition: 0.3s ease-in-out all;
                z-index: -1;
                position: absolute;
                top: 50%;
                left: 50%;
                width: calc(100% + 2px);
                height: calc(100% + 2px);
                transform: translate(-50%, -50%);
                border-radius: 4px;
                background: #00b2a3;
                content: "";
                transition: 0.3s ease-in-out all;
            }

            @media (max-width:576px) {
                .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
                    margin-bottom: 0;
                }
            }

            .job-detail-content .job-detail-bottom .title {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .job-detail-content .job-detail-bottom .employer {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            @media (min-width:1025px) {
                .job-detail-content .job-detail-bottom .job-desc .save-job,
                .job-detail-content .job-detail-bottom .job-desc .email,
                .job-detail-content .job-detail-bottom .job-desc .report-job {
                    position: relative;
                }
                .job-detail-content .job-detail-bottom .job-desc .save-job:hover .toolip,
                .job-detail-content .job-detail-bottom .job-desc .email:hover .toolip,
                .job-detail-content .job-detail-bottom .job-desc .report-job:hover .toolip,
                    {
                    opacity: 1;
                }
                .job-detail-content .job-detail-bottom .job-desc .save-job:hover .toolip:before,
                .job-detail-content .job-detail-bottom .job-desc .email:hover .toolip:before,
                .job-detail-content .job-detail-bottom .job-desc .report-job:hover .toolip:before {
                    z-index: 11;
                    top: initial;
                    bottom: 100%;
                }
                .job-detail-content .job-detail-bottom .job-desc .save-job:hover .toolip:after,
                .job-detail-content .job-detail-bottom .job-desc .email:hover .toolip:after,
                .job-detail-content .job-detail-bottom .job-desc .report-job:hover .toolip:after {
                    top: initial;
                    bottom: 100%;
                }
            }

            .job-detail-content .job-detail-bottom:after {
                position: absolute;
                top: 0;
                left: 0;
                width: 6px;
                height: 100%;
                background: #00b2a3;
                content: "";
            }

            .job-detail-content .job-detail-bottom .apply-now-right {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: flex-end;
            }

            .job-detail-content .job-detail-bottom .apply-now-right>a {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                color: inherit;
                font-size: 14px;
            }

            .job-detail-content .job-detail-bottom .apply-now-right>a i {
                padding-right: 8px;
                line-height: 1.5;
            }

            .job-detail-content .job-detail-bottom .apply-now-right>a.saved {
                color: #fb9104;
            }

            .job-detail-content .job-detail-bottom-banner {
                margin-top: 40px;
            }

            .job-detail-content .job-detail-bottom-banner img {
                width: 100%;
            }

            .job-detail-content .job-tags {
                margin-top: 0;
            }

            .job-detail-content .job-tags ul {
                padding-left: 0;
            }

            @media (max-width:800px) {
                .job-detail-content .job-tags {
                    width: 70%;
                }
            }

            @media (max-width:599px) {
                .job-detail-content .job-tags {
                    width: 100%;
                }
            }

            .job-detail-content .apply-now-btn {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                transition: 0.4s ease-in-out all;
            }

            .job-detail-content .apply-now-btn a {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                height: 35px !important;
                padding: 0 15px;
                transition: 0.4s ease-in-out all;
            }

            .job-detail-content .apply-now-btn a:hover {
                -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
            }

            @media screen and (max-width:768px) {
                .job-detail-content .job-detail-bottom {
                    margin-top: 30px;
                }
                .job-detail-content .job-detail-bottom .apply-now-right {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                    margin-top: 10px;
                    margin-left: -25px;
                }
                .job-detail-content .detail-row {
                    margin-top: 30px;
                }
                .job-detail-content .detail-row .welfare-list li {
                    width: 50%;
                }
                .job-detail-content .job-detail-bottom-banner {
                    margin-top: 30px;
                }
            }

            @media screen and (max-width:576px) {
                .job-detail-content .detail-box {
                    padding: 15px;
                }
                .job-detail-content .detail-row .welfare-list li {
                    width: 100%;
                }
                .job-detail-content .apply-now-btn {
                    width: 100%;
                }
                .job-detail-content .apply-now-btn a {
                    width: 100%;
                }
                .job-detail-content .job-detail-bottom-wrapper {
                    margin-right: 2px;
                }
                .job-detail-content .job-detail-bottom {
                    z-index: 11;
                    position: -webkit-sticky;
                    position: sticky;
                    bottom: 0;
                }
                .job-detail-content .job-detail-bottom .apply-now-content {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    -webkit-box-orient: initial;
                    -webkit-box-direction: initial;
                    -ms-flex-direction: initial;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-direction: initial;
                    align-items: center;
                }
                .job-detail-content .job-detail-bottom .apply-now-content .job-desc {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    width: auto;
                }
                .job-detail-content .job-detail-bottom .apply-now-content .job-desc a {
                    width: 100%;
                    margin-top: 0;
                }
                .job-detail-content .job-detail-bottom .apply-now-content .job-desc a span {
                    display: none;
                }
                .job-detail-content .job-detail-bottom .apply-now-content .apply-now-right {
                    margin-top: 0;
                    margin-left: 0;
                }
                .job-detail-content .job-detail-bottom .apply-now-content .apply-now-right .apply-now-btn {
                    margin: 0;
                }
                .job-detail-content .job-detail-bottom .apply-now-content .apply-now-right .apply-now-btn a {
                    width: -webkit-max-content;
                    width: -moz-max-content;
                    width: max-content;
                }
            }

            @media (max-width:800px) {
                .job-detail-content .bg-blue .item-blue:first-child {
                    -webkit-box-ordinal-group: 2;
                    -ms-flex-order: 1;
                    order: 1;
                }
                .job-detail-content .bg-blue .item-blue:first-child .detail-box .type-of-work {
                    display: none;
                }
                .job-detail-content .bg-blue .item-blue:nth-child(2) {
                    -webkit-box-ordinal-group: 4;
                    -ms-flex-order: 3;
                    order: 3;
                }
                .job-detail-content .bg-blue .item-blue:nth-child(2) .detail-box {
                    display: none;
                }
                .job-detail-content .bg-blue .item-blue:last-child {
                    -webkit-box-ordinal-group: 3;
                    -ms-flex-order: 2;
                    order: 2;
                }
                .job-detail-content .bg-blue .item-blue:last-child .type-of-work {
                    margin-top: 0;
                    margin-bottom: 8px;
                    padding-bottom: 5px;
                    border-bottom: 1px solid #e9e9e9;
                }
                .job-detail-content .bg-blue .item-blue:last-child .type-of-work:before {
                    display: none;
                }
                .job-detail-content .bg-blue .item-blue:last-child .type-of-work ul li {
                    padding: 0;
                    border: none;
                }
            }

            @media (max-width:576px) {
                .job-detail-content .bg-blue .item-blue:first-child {
                    -webkit-box-ordinal-group: 2;
                    -ms-flex-order: 1;
                    order: 1;
                }
                .job-detail-content .bg-blue .item-blue:first-child .detail-box .type-of-work {
                    display: block;
                }
                .job-detail-content .bg-blue .item-blue:first-child .detail-box.has-background {
                    display: none;
                }
                .job-detail-content .bg-blue .item-blue:nth-child(2) {
                    -webkit-box-ordinal-group: 3;
                    -ms-flex-order: 2;
                    order: 2;
                }
                .job-detail-content .bg-blue .item-blue:nth-child(2) .detail-box {
                    display: block;
                }
                .job-detail-content .bg-blue .item-blue:last-child {
                    -webkit-box-ordinal-group: 4;
                    -ms-flex-order: 3;
                    order: 3;
                }
                .job-detail-content .bg-blue .item-blue:last-child .type-of-work {
                    display: none;
                }
            }

            .feedback-modal {
                width: 560px;
            }

            .feedback-modal .logo {
                margin-bottom: 20px;
                text-align: center;
            }

            .feedback-modal .text {
                margin-bottom: 20px;
            }

            .feedback-modal .text p {
                font-size: 14px;
            }

            .feedback-modal .text p+p {
                margin-top: 10px;
            }

            .feedback-modal .text p strong {
                font-size: 18px;
            }

            .feedback-modal .form-group+.form-group {
                margin-top: 15px;
            }

            .feedback-modal .form-group label {
                display: block;
                margin-bottom: 5px;
            }

            .feedback-modal .form-group input[type=text],
            .feedback-modal .form-group textarea {
                width: 100%;
            }

            .feedback-modal .form-group input[type=text] {
                height: 40px;
                padding: 0 15px;
            }

            .feedback-modal .form-group textarea {
                height: 120px;
                padding: 5px 15px;
            }

            .feedback-modal .form-group span {
                color: red;
                font-size: 12px;
                font-style: italic;
                font-weight: 400;
            }

            .feedback-modal .form-group .note {
                font-size: 12px;
            }

            .feedback-modal .form-group.form-submit {
                margin-top: 30px;
                text-align: center;
            }

            .feedback-modal .form-group.form-submit input {
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                width: 80px;
                height: 36px;
                border: 0;
                background: #f79d25;
                color: #fff;
                font-size: 14px;
                transition: 0.3s all;
            }

            .feedback-modal .form-group.form-submit input:hover {
                background: #e18408;
            }

            .feedback-modal .fancybox-close-small {
                background: #f7a334;
                opacity: 1;
            }

            .feedback-modal .fancybox-close-small svg path {
                fill: #fff;
            }

            .apply-job-modal {
                width: 620px;
            }

            .apply-job-modal h3 {
                color: #f79d25;
                font-size: 18px;
            }

            .apply-job-modal h3 span {
                color: #5d677a;
            }

            .apply-job-modal h4 {
                font-size: 14px;
                font-weight: normal;
            }

            .apply-job-modal .note {
                font-size: 12px;
            }

            .apply-job-modal .login-form {
                margin-top: 20px;
            }

            .apply-job-modal .login-form .note {
                margin-bottom: 8px;
            }

            .apply-job-modal .form-group+.form-group {
                margin-top: 15px;
            }

            .apply-job-modal .form-group label {
                display: block;
                margin-bottom: 5px;
            }

            .apply-job-modal .form-group input[type=text],
            .apply-job-modal .form-group input[type=password] {
                width: 100%;
                height: 40px;
                padding: 0 15px;
            }

            .apply-job-modal .form-group span {
                color: red;
                font-size: 12px;
                font-style: italic;
                font-weight: 400;
            }

            .apply-job-modal .form-group.form-submit input {
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                height: 36px;
                padding: 0 15px;
                border: 0;
                background: #f79d25;
                color: #fff;
                font-size: 14px;
                transition: 0.3s all;
            }

            .apply-job-modal .form-group.form-submit input:hover {
                background: #e18408;
            }

            .apply-job-modal .apply-not-login {
                margin-top: 30px;
                padding-top: 30px;
                border-top: 1px solid #bababa;
            }

            .apply-job-modal .apply-not-login>strong {
                font-size: 14px;
            }

            .apply-job-modal .apply-not-login .note {
                margin-bottom: 15px;
            }

            .apply-job-modal .btn-group {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .apply-job-modal .btn-group a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                height: 40px;
                border-radius: 4px;
                color: #fff;
                font-size: 12px;
                text-decoration: none;
                transition: 0.3s all;
            }

            .apply-job-modal .btn-group a.btn-apply-non-member {
                padding: 0 15px;
                background: #52a318;
            }

            .apply-job-modal .btn-group a.btn-apply-non-member:hover {
                background: #3c7711;
            }

            .apply-job-modal .btn-group a.btn-apply-facebook {
                padding-left: 15px;
                background: #3b5998;
            }

            .apply-job-modal .btn-group a.btn-apply-facebook strong {
                margin-left: 2.5px;
                font-size: 12px;
            }

            .apply-job-modal .btn-group a.btn-apply-facebook i {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                margin-left: 15px;
                border-left: 1px solid rgba(255, 255, 255, 0.25);
                font-size: 16px;
            }

            .apply-job-modal .btn-group a.btn-apply-facebook:hover {
                background: #2d4373;
            }

            .apply-job-modal .btn-group .or-text {
                margin: 0 15px;
                font-size: 12px;
            }

            @media (max-width:576px) {
                .apply-job-modal .btn-group {
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                }
                .apply-job-modal .btn-group a {
                    margin-top: 15px;
                }
                .apply-job-modal .btn-group a.btn-apply-non-member {
                    padding: 0 10px;
                }
                .apply-job-modal .btn-group a.btn-apply-facebook {
                    padding-left: 10px;
                }
                .apply-job-modal .btn-group .or-text {
                    margin-top: 15px;
                }
            }

            .apply-job-modal .fancybox-close-small {
                background: #f7a334;
                opacity: 1;
            }

            .apply-job-modal .fancybox-close-small svg path {
                fill: #fff;
            }

            .maps-modal {
                width: 100%;
                padding: 15px;
            }

            .maps-modal .box-modal {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                height: 100%;
            }

            .maps-modal .map {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .maps-modal .map iframe {
                width: 100%;
                height: 100%;
                min-height: 700px;
            }

            @media (min-width:1025px) {
                .maps-modal .map {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 65%;
                    flex: 0 0 65%;
                    max-width: 65%;
                    margin-bottom: 0;
                }
            }

            .maps-modal .info {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 20px;
            }

            .maps-modal .info .tab-content {
                max-height: 600px;
                padding-right: 10px;
                overflow: auto;
            }

            .maps-modal .info .tab-content::-webkit-scrollbar {
                width: 6px;
                background: #eaeaea;
            }

            .maps-modal .info .tab-content::-webkit-scrollbar-thumb {
                background: #00b2a3;
            }

            @media (min-width:1025px) {
                .maps-modal .info {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 35%;
                    flex: 0 0 35%;
                    max-width: 35%;
                }
            }

            .maps-modal .tabs-toggle {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                margin-bottom: 25px;
            }

            .maps-modal .tabs-toggle .item {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                position: relative;
                font-weight: 400;
                cursor: pointer;
                transition: 0.4s ease-in-out all;
            }

            .maps-modal .tabs-toggle .item+.item {
                margin-left: 40px;
            }

            .maps-modal .tabs-toggle .item:before {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                position: absolute;
                bottom: -8px;
                left: 0;
                width: 0;
                height: 4px;
                background: #287ab9;
                content: "";
                transition: 0.4s ease-in-out all;
            }

            .maps-modal .tabs-toggle .item.active a {
                color: #182642;
            }

            .maps-modal .tabs-toggle .item.active::before {
                width: 100%;
            }

            .maps-modal .tabs-toggle .item:hover a {
                color: #182642;
            }

            .maps-modal .tabs-toggle .item:hover::before {
                width: 100%;
            }

            .maps-modal .job-item .figure:hover {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .maps-modal .job-item .figure .caption .salary em {
                width: 15px;
                text-align: center;
            }

            .maps-modal .job-item .figure .caption .location {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .maps-modal .job-item .figure .caption .location em {
                width: 15px;
            }

            .maps-modal .main-content .tab-content {
                display: none;
            }

            .maps-modal .main-content .tab-content.active {
                display: block;
            }

            .maps-modal .title-h4 h4 {
                margin-bottom: 0.5rem;
                font-size: 1.125rem;
                font-weight: 700;
                text-transform: uppercase;
            }

            .maps-modal .box-about {
                padding-bottom: 15px;
                border-bottom: 1px solid #cccccc;
            }

            .maps-modal .box-about .figure {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .maps-modal .box-about .figure .image {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 70px;
                height: 70px;
                padding: 5px;
                border: 1px solid #f1f1f1;
            }

            .maps-modal .box-about .figure .figcaption {
                padding-left: 20px;
            }

            .maps-modal .box-about .figure .figcaption h5 {
                font-size: 1rem;
                font-weight: 700;
            }

            .maps-modal .box-info {
                padding-top: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid #cccccc;
            }

            .maps-modal .box-info .content p {
                font-size: 16px;
                font-weight: 400;
            }

            .maps-modal .box-info .content p.blue {
                color: #0056b3;
            }

            .maps-modal .box-info .content table {
                width: 100%;
            }

            .maps-modal .box-info .content table tr td {
                font-size: 14px;
                font-weight: 400;
            }

            .maps-modal .box-info .content table tr td:first-child {
                width: 130px;
            }

            .maps-modal .box-local {
                padding-top: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid #cccccc;
            }

            .maps-modal .box-local .content em {
                padding-right: 5px;
            }

            .maps-modal .box-local .content a {
                font-size: 16px;
                font-weight: 400;
            }

            .maps-modal .box-apply {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                padding-top: 15px;
            }

            .maps-modal .box-apply a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 15.9375rem;
                height: 44px;
                border-radius: 5px;
                background: #00b2a3;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .maps-modal .box-apply.success a {
                background: #dcdcdc !important;
                color: #169b74;
            }

            .maps-modal .box-contact {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                padding-top: 15px;
            }

            .maps-modal .box-contact ul {
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

            .maps-modal .box-contact ul li {
                margin: 0 10px;
            }

            .maps-modal .box-contact ul li a {
                color: inherit;
            }

            .maps-modal .box-contact ul li a.saved {
                color: #fb9104;
            }

            @media (min-width:1200px) {
                .maps-modal {
                    height: 679px;
                }
            }

            .company-overview>* {
                margin-top: 40px;
            }

            .company-overview .company-heading-title {
                margin-bottom: 10px;
                color: #182642;
                font-size: 18px;
                text-transform: uppercase;
            }

            .company-overview .company-introduction {
                padding: 20px;
                background: #f1f9fd;
            }

            .company-overview .company-introduction .title-company .new {
                font-weight: 700;
                text-transform: uppercase;
            }

            .company-overview .company-info .name {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                color: #182642;
                font-size: 18px;
                font-weight: 700;
                text-transform: uppercase;
                transition: 0.4s ease-in-out all;
            }

            .company-overview .company-info .info .img {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                float: left;
            }

            .company-overview .company-info .info .img .logo-company {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                display: flex;
                align-items: center;
                align-items: center;
                justify-content: center;
                justify-content: center;
                width: 100%;
                width: 8.625rem;
                height: 100%;
                height: 9.0625rem;
                border: 1px solid #e5e5e5;
                border-radius: 4px;
                background: #fff;
            }

            .company-overview .company-info .info .content {
                width: calc(100% - 8.625rem);
                padding-left: 1.875rem;
                float: left;
            }

            .company-overview .company-info .info .content hr {
                margin: 5px 0;
                border: 0;
                border-top: 1px solid #e9e9e9;
            }

            .company-overview .company-info .info .content strong {
                padding-right: 5px;
                color: #182642;
            }

            .company-overview .company-info .info .content p,
            .company-overview .company-info .info .content ul {
                font-size: 14px;
            }

            .company-overview .company-info .info .content ul li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .company-overview .company-info .info .content ul li a {
                color: inherit;
            }

            .company-overview .company-info .info .content ul li span {
                margin-right: 5px;
                font-size: 16px;
                line-height: 16px;
            }

            @media (min-width:1200px) {
                .company-overview .company-info .info .content ul {
                    -ms-flex-wrap: wrap;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                }
                .company-overview .company-info .info .content ul li {
                    margin-top: 5px;
                    padding-right: 20px;
                }
                .company-overview .company-info .info .content ul li:last-child {
                    padding-right: 0;
                }
            }

            @media (min-width:1440px) {
                .company-overview .company-info .info .content ul li {
                    padding-right: 30px;
                }
            }

            @media (min-width:576px) {
                .company-overview .company-info .info {
                    -ms-flex-wrap: wrap;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    position: relative;
                    flex-wrap: wrap;
                    margin-top: 10px;
                    padding-top: 27px;
                }
                .company-overview .company-info .info .img {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 8.625rem;
                    -webkit-box-align: start;
                    -ms-flex-align: start;
                    flex: 0 0 8.625rem;
                    align-items: flex-start;
                    width: 100%;
                    max-width: 8.625rem;
                }
                .company-overview .company-info .info .img .title-company {
                    position: absolute;
                    top: 0;
                }
                .company-overview .company-info .info .content {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 8.625rem);
                    flex: 0 0 calc(100% - 8.625rem);
                    width: 100%;
                    max-width: calc(100% - 8.625rem);
                }
            }

            .company-overview .company-info:after {
                display: block;
                clear: both;
                content: "";
            }

            .company-overview .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: flex-end;
                margin-top: 15px;
            }

            .company-overview .company-follow .follower-number {
                color: #287ab9;
                font-size: 18px;
            }

            .company-overview .company-follow .btn-follow {
                padding-left: 15px;
            }

            .company-overview .company-follow .btn-follow a {
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
                height: 35px;
                border-radius: 5px;
                background: #2f4ba0;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .company-overview .company-follow .btn-follow.icon-follow a {
                position: relative;
                background: #2f4ba0;
            }

            .company-overview .company-follow .btn-follow.icon-follow a:before {
                color: #ffffff;
                content: "Follow";
                opacity: 1;
            }

            .company-overview .company-follow .btn-follow.icon-follow a span {
                display: none;
            }

            .company-overview .company-follow .btn-follow.icon-follow a em {
                display: none;
            }

            .company-overview .company-follow .btn-follow.icon-follow.followed a {
                position: relative;
            }

            .company-overview .company-follow .btn-follow.icon-follow.followed a:before {
                color: #ffffff;
                content: "Unfollow";
                opacity: 0;
            }

            .company-overview .company-follow .btn-follow.icon-follow.followed a em {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                display: block;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 25px;
            }

            .company-overview .company-follow .btn-follow.icon-follow.followed a:hover {
                background: #cacaca;
            }

            .company-overview .company-follow .btn-follow.icon-follow.followed a:hover:before {
                opacity: 1;
            }

            .company-overview .company-follow .btn-follow.icon-follow.followed a:hover em {
                opacity: 0;
            }

            .company-overview .company-follow .btn-join {
                padding-top: 15px;
                padding-left: 15px;
            }

            .company-overview .company-follow .btn-join a {
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
                padding: 0 15px;
                border-radius: 5px;
                background: #00b2a3;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .company-overview .company-follow .btn-join a:hover {
                background-position: 100% 0;
                text-decoration: none;
            }

            @media (min-width:576px) {
                .company-overview .company-follow .btn-join {
                    padding-top: 0;
                }
            }

            @media (min-width:1025px) {
                .company-overview .company-follow .btn-join {
                    padding-top: 15px;
                }
            }

            @media (min-width:1200px) {
                .company-overview .company-follow .btn-join {
                    padding-top: 0;
                }
            }

            @media (max-width:1440px) {
                .company-overview .company-follow .btn-follow a,
                .company-overview .company-follow .btn-join a {
                    width: -webkit-max-content;
                    width: -moz-max-content;
                    width: max-content;
                    padding: 0 15px;
                    font-size: 14px !important;
                }
                .company-overview .company-follow .follower-number {
                    font-size: 14px;
                }
            }

            .company-overview .company-jobs-opening .row {
                margin-bottom: 0;
            }

            .company-overview .company-jobs-opening .row>* {
                margin-bottom: 0;
            }

            .company-overview .company-jobs-opening .job-item {
                padding: 10px 0;
                border-bottom: 1px solid #e5e5e5;
            }

            .company-overview .company-jobs-opening .job-item .figure {
                -webkit-box-shadow: none !important;
                padding: 0;
                border: 0;
                box-shadow: none !important;
            }

            .company-overview .company-jobs-opening .job-item .figcaption {
                padding: 0;
            }

            .company-overview .company-jobs-opening .view-more {
                margin-top: 30px;
            }

            .company-overview .company-jobs-opening .view-more a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 240px;
                height: 40px;
                margin: 0 auto;
                border-radius: 5px;
                background: #2f4ba0;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .company-overview .company-content ul,
            .company-overview .company-content ol {
                padding-left: 1rem;
            }

            .company-overview .company-content p {
                font-size: 14px;
            }

            .company-overview .company-content p+p {
                margin-top: 15px;
            }

            @media (min-width:1440px) {
                .company-overview .company-content p {
                    font-size: 15px;
                }
                .company-overview .company-content p+p {
                    margin-top: 20px;
                }
            }

            .company-overview .company-photo .album {
                position: relative;
            }

            .company-overview .company-photo .album:before {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                z-index: 3;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff;
                font-family: Material Design Icons;
                font-size: 1.875rem;
                content: "\f2e9";
                pointer-events: none;
            }

            .company-overview .company-photo .album:after {
                z-index: 2;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.2);
                content: "";
                pointer-events: none;
            }

            .company-overview .company-photo .album a {
                display: block;
                position: relative;
                padding-top: 63.829787234%;
            }

            .company-overview .company-photo .album a img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .company-overview .company-photo .swiper-navigation {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                margin-top: 30px;
            }

            .company-overview .company-photo .swiper-navigation .swiper-nav {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                border: 1px solid #e5e5e5;
                border-radius: 50%;
                font-size: 18px;
                cursor: pointer;
                transition: 0.3s all;
            }

            .company-overview .company-photo .swiper-navigation .swiper-nav:hover {
                border: 1px solid transparent;
                background: #00b2a3;
                color: #fff;
            }

            .company-overview .company-photo .swiper-navigation .swiper-nav+.swiper-nav {
                margin-left: 10px;
            }

            .company-overview .company-photo .swiper-navigation .swiper-nav span {
                height: 18px;
            }

            @media screen and (max-width:768px) {
                .company-overview .company-introduction {
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                }
                .company-overview .company-info {
                    width: 100%;
                }
                .company-overview .company-info .info .img .logo-company {
                    width: 80px;
                    height: 80px;
                    padding: 5px;
                }
                .company-overview .company-info .info .content {
                    width: calc(100% - 80px);
                }
                .company-overview .company-follow {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    width: 100%;
                    margin-top: 10px;
                    padding-left: 0;
                }
                .company-overview .company-follow .btn-follow {
                    margin: 0;
                }
                .company-overview .company-follow .btn-follow a {
                    width: 120px;
                }
                .company-overview .company-follow .btn-follow.followed a {
                    background: #f1f1f1;
                }
                .company-overview .company-follow .btn-join {
                    padding-top: 10px;
                }
            }

            @media screen and (max-width:576px) {
                .company-overview .company-info .info .img {
                    position: relative;
                    float: none;
                }
                .company-overview .company-info .info .content {
                    width: 100%;
                    padding-top: 20px;
                    padding-left: 0;
                    float: none;
                }
                .company-overview .company-info {
                    position: relative;
                }
                .company-overview .company-info .title-company {
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    z-index: 11;
                    position: absolute;
                    top: 50%;
                    right: 0;
                    width: calc(100% - 90px);
                    transform: translateY(-50%);
                }
                .company-overview .company-info .title-company a {
                    width: 100%;
                    font-size: 16px;
                }
                .company-overview .company-follow {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    justify-content: flex-start;
                    padding-left: 0;
                }
                .company-overview .company-follow>* {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                    padding-left: 0;
                }
                .company-overview .company-follow .btn-follow {
                    -webkit-box-ordinal-group: 2;
                    -ms-flex-order: 1;
                    order: 1;
                }
                .company-overview .company-follow .follower-number {
                    -webkit-box-ordinal-group: 3;
                    -ms-flex-order: 2;
                    order: 2;
                    padding-top: 10px;
                }
                .company-overview .company-follow .btn-join {
                    -webkit-box-ordinal-group: 4;
                    -ms-flex-order: 3;
                    order: 3;
                    padding-top: 10px;
                }
                .company-overview .company-follow .btn-follow,
                .company-overview .company-follow .btn-join {
                    padding-left: 0;
                }
            }

            .company-overview .job-item .figure .title {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .company-overview .job-item .figure .title a {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                transition: 0.4s ease-in-out all;
            }

            .company-overview .job-item .figure .title .new {
                padding-left: 5px;
                font-size: 14px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .company-overview .job-item:hover .figure .title a {
                color: #f7a334;
            }

            .advanced-search-modal {
                width: 620px;
            }

            .advanced-search-modal h3 {
                color: #f79d25;
                font-size: 18px;
            }

            .advanced-search-modal h3 span {
                color: #5d677a;
            }

            .advanced-search-modal h4 {
                font-size: 14px;
                font-weight: normal;
            }

            .advanced-search-modal .note {
                font-size: 12px;
            }

            .advanced-search-modal .search-form {
                margin-top: 20px;
            }

            .advanced-search-modal .search-form .note {
                margin-bottom: 8px;
            }

            .advanced-search-modal .form-group+.form-group {
                margin-top: 15px;
            }

            .advanced-search-modal .form-group label {
                display: block;
                margin-bottom: 5px;
            }

            .advanced-search-modal .form-group input[type=text] {
                width: 100%;
                height: 40px;
                padding: 0 15px;
            }

            .advanced-search-modal .form-group span {
                color: red;
                font-size: 12px;
                font-style: italic;
                font-weight: 400;
            }

            .advanced-search-modal .form-group.form-submit button {
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                height: 36px;
                padding: 0 15px;
                border: 0;
                background: #f79d25;
                color: #fff;
                font-size: 14px;
                transition: 0.3s all;
            }

            .advanced-search-modal .form-group.form-submit button:hover {
                background: #e18408;
            }

            .advanced-search-modal .form-group.form-select-chosen select {
                display: none;
            }

            .advanced-search-modal .form-group.form-select-chosen label {
                margin-bottom: 5px;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container {
                width: 100% !important;
                min-height: 40px !important;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices {
                height: 100%;
                padding: 5px;
                padding-left: 0;
                border: none;
                border-bottom: 1px solid #93bcdc;
                background-image: none;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice {
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

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice span {
                color: #333333;
                font-size: 14px;
                font-style: normal;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close {
                background: none !important;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:before {
                color: #5d677a;
                font-family: "Material Design Icons";
                font-size: 11px;
                content: "\f156";
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-choice .search-choice-close:hover:before {
                color: #fc0821;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-field input {
                font-family: "Roboto", sans-serif !important;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-choices .search-field .chosen-search-input {
                color: #172642;
                font-size: 16px;
                font-weight: 700;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar {
                width: 6px !important;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-track {
                background: #eaeaea !important;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb {
                background: #00b2a3 !important;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .chosen-results::-webkit-scrollbar-thumb:hover {
                background: #00b2a3 !important;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result::after {
                position: absolute;
                top: 2px;
                left: 20px;
                color: #5d677a;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 18px;
                content: "\f131";
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover {
                color: #ffffff;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result:hover::after {
                color: #ffffff;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted {
                color: #ffffff;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .active-result.highlighted::after {
                color: #ffffff;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected {
                position: relative;
                padding-left: 43px;
                color: #182642;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected::after {
                position: absolute;
                top: 2px;
                left: 20px;
                color: #287ab9;
                font: normal normal normal 24px/1 Material Design Icons;
                font-size: 18px;
                content: "\f132";
                opacity: 1;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover {
                color: #182642;
                cursor: pointer;
            }

            .advanced-search-modal .form-group.form-select-chosen .chosen-container .chosen-drop .result-selected:hover::after {
                color: #287ab9;
            }

            .no-search .image {
                padding-top: 20px;
            }

            .no-search .image figure {
                margin: 0;
                text-align: center;
            }

            .no-search .image img {
                max-width: 300px;
            }

            .no-search .image figcaption {
                padding-top: 10px;
                color: #F7A334;
                font-size: 18px;
                font-weight: 600;
            }

            @media (min-width:1025px) {
                .no-search .image {
                    padding-bottom: 25px;
                }
                .no-search .image figcaption {
                    padding-top: 15px;
                }
            }

            @media (min-width:1200px) {
                .no-search .image {
                    padding-bottom: 35px;
                }
            }

            .no-search .job-search-suggestions {
                text-align: center;
            }

            .no-search .job-search-suggestions h3 {
                margin-bottom: 10px;
                color: #7CC74D;
                font-size: 17px;
                font-weight: 700;
            }

            .no-search .job-search-suggestions>* {
                margin-bottom: 7px;
                line-height: 1.3;
            }

            @media (min-width:1025px) {
                .no-search .job-search-suggestions h3 {
                    margin-bottom: 15px;
                }
            }

            .no-search .job-tags ul {
                text-align: center;
            }

            .no-search .apply-now-banner {
                display: none !important;
            }

            .no-jobs .image {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                padding-top: 15px;
            }

            @media (min-width:1025px) {
                .no-jobs .image {
                    padding-top: 150px;
                }
                .no-jobs .image img {
                    min-width: 300px;
                }
            }

            @media (min-width:1200px) {
                .no-jobs .image {
                    padding-top: 150px;
                }
                .no-jobs .image img {
                    min-width: 500px;
                    max-width: 400px;
                }
            }

            .cb-job-hunt {
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
                font-weight: 400;
                text-align: center;
            }

            .cb-job-hunt .cb-description bold {
                color: #287ab9;
                font-size: 16px;
                font-weight: 700;
            }

            @media (min-width:1025px) {
                .cb-job-hunt .cb-description {
                    margin-bottom: 27px;
                }
            }

            .cb-job-hunt .company-introduction {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
                padding: 20px;
                background: #f1f9fd;
            }

            .cb-job-hunt .company-info {
                width: 100%;
                padding-right: 10px;
            }

            .cb-job-hunt .company-info .name {
                color: #182642;
                font-size: 18px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .cb-job-hunt .company-info .name a {
                color: #182642;
                font-size: 18px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .cb-job-hunt .company-info .name a:hover {
                text-decoration: none;
            }

            .cb-job-hunt .company-info .info .img {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 10rem;
                height: 10rem;
                padding: 15px;
                float: left;
                border-radius: 4px;
                background: #fff;
            }

            .cb-job-hunt .company-info .info .content {
                width: calc(100% - 160px);
                padding-left: 36px;
                float: left;
            }

            .cb-job-hunt .company-info .info .content .name {
                margin-bottom: 2px;
                font-size: 18px;
                font-weight: 700;
            }

            .cb-job-hunt .company-info .info .content hr {
                margin: 10px 0;
                margin-top: 20px;
                border: 0;
                border-top: 1px solid #e9e9e9;
            }

            .cb-job-hunt .company-info .info .content strong {
                color: #182642;
            }

            .cb-job-hunt .company-info .info .content p,
            .cb-job-hunt .company-info .info .content ul {
                font-size: 14px;
            }

            .cb-job-hunt .company-info .info .content ul li {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
            }

            .cb-job-hunt .company-info .info .content ul li a {
                color: inherit;
            }

            .cb-job-hunt .company-info .info .content ul li span {
                margin-right: 5px;
                font-size: 16px;
                line-height: 16px;
            }

            .cb-job-hunt .company-info:after {
                display: block;
                clear: both;
                content: "";
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
                color: #287ab9;
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
                background: #2f4ba0;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .cb-job-hunt .company-follow .btn-follow.icon-follow a {
                position: relative;
                background: #2f4ba0;
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

            @media screen and (max-width:768px) {
                .cb-job-hunt .company-introduction {
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                }
                .cb-job-hunt .company-info {
                    width: 100%;
                }
                .cb-job-hunt .company-info .info .img {
                    width: 80px;
                    height: 80px;
                    padding: 5px;
                }
                .cb-job-hunt .company-info .info .content {
                    width: calc(100% - 80px);
                }
                .cb-job-hunt .company-follow {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    width: 100%;
                    margin-top: 10px;
                }
                .cb-job-hunt .company-follow .btn-follow {
                    margin: 0;
                    margin-right: 24px;
                }
                .cb-job-hunt .company-follow .btn-follow a {
                    width: 120px;
                }
            }

            @media screen and (max-width:576px) {
                .cb-job-hunt .company-info .info {
                    position: relative;
                }
                .cb-job-hunt .company-info .info .img {
                    float: none;
                }
                .cb-job-hunt .company-info .info .content {
                    width: 100%;
                    padding-top: 20px;
                    padding-left: 0;
                    float: none;
                }
                .cb-job-hunt hr {
                    display: none;
                }
                .cb-job-hunt .company-follow {
                    -ms-flex-wrap: wrap;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    position: absolute;
                    top: 0;
                    right: -15px;
                    flex-wrap: wrap;
                    width: 150px;
                    margin-top: 0;
                    padding-left: 0;
                    pointer-events: none;
                }
                .cb-job-hunt .company-follow .btn-follow {
                    -webkit-box-ordinal-group: 3;
                    -ms-flex-order: 2;
                    order: 2;
                }
                .cb-job-hunt .company-follow .follower-number {
                    -webkit-box-ordinal-group: 2;
                    -ms-flex-order: 1;
                    -webkit-box-pack: end;
                    -ms-flex-pack: end;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: flex-end;
                    order: 1;
                }
                .cb-job-hunt .company-follow .btn-follow,
                .cb-job-hunt .company-follow .follower-number {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                    margin-right: 0;
                    margin-bottom: 10px;
                    pointer-events: auto;
                }
                .cb-job-hunt .company-follow .btn-follow a,
                .cb-job-hunt .company-follow .follower-number a {
                    margin-right: 0;
                    margin-left: auto;
                }
            }

            .cb-recommended-jobs-hunt {
                border-bottom: 1px solid #e9e9e9;
            }

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
                color: #00b72f;
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
                background: #287ab9;
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
                color: #287ab9;
                font-size: 16px;
                font-weight: 400;
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
                .cb-recommended-jobs-hunt .cus-col {
                    padding: 0 45px;
                }
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
                .cb-recommended-jobs-hunt .job-item .apply-now:hover {
                    color: #fb9104;
                    text-decoration: underline;
                }
            }

            @media (min-width:1200px) {
                .cb-recommended-jobs-hunt {
                    padding-bottom: 90px;
                }
            }

            @media (min-width:1450px) {
                .cb-recommended-jobs-hunt .cus-row {
                    margin: 0 -45px;
                }
            }

            .search-result-list-detail-page .job-item .figure:hover {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .search-result-list-detail-page .job-item .figure .title a:hover {
                color: #f7a334;
            }

            .search-result-list-detail-page .job-item .figure .caption .salary em {
                padding-right: 5px;
                padding-left: 3px;
            }

            .search-result-list-detail-page .job-item .figure .caption .location {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .search-result-list-detail-page .job-item .figure .caption .location em {
                padding-right: 2px;
                line-height: 1.5;
            }

            .search-result-list-detail {
                padding: 40px 0;
            }

            .search-result-list-detail .side-wrapper {
                padding-left: 1.875rem;
            }

            .search-result-list-detail .side-wrapper .banner-ad {
                margin-bottom: 20px;
            }

            @media (max-width:576px) {
                .search-result-list-detail .side-wrapper {
                    -ms-flex-wrap: wrap;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                }
                .search-result-list-detail .side-wrapper .banner-ad,
                .search-result-list-detail .side-wrapper .similar-jobs,
                .search-result-list-detail .side-wrapper .jobs-side-list {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .search-result-list-detail .side-wrapper .banner-ad {
                    -webkit-box-ordinal-group: 4;
                    -ms-flex-order: 3;
                    order: 3;
                    margin-bottom: 0;
                }
            }

            .search-result-list-detail .job-item .figure .image {
                padding: 0;
            }

            .search-result-list-detail .job-item .figure .image a {
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
                height: 100%;
                padding: 5px;
            }

            .search-result-list-detail .job-item .figure .bottom-right-icon {
                right: 10px;
            }

            .search-result-list-detail .job-item .figure .figcaption .caption .location {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .search-result-list-detail .job-item .figure .figcaption .caption .location em {
                padding-right: 2px;
                line-height: 1.5;
            }

            .search-result-list-detail .similar-jobs {
                margin-bottom: 10px;
            }

            .search-result-list-detail .similar-jobs p {
                color: #5d677a;
                font-size: 15px;
                font-weight: 700;
                text-transform: uppercase;
            }

            @media (min-width:1025px) {
                .search-result-list-detail .similar-jobs p {
                    font-size: 15px;
                    font-weight: 700;
                    text-transform: uppercase;
                }
            }

            .search-result-list-detail .apply-now-banner {
                height: 360px;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .search-result-list-detail .job-result-nav {
                margin-top: 0;
            }

            @media (max-width:1440px) {
                .search-result-list-detail .job-result-nav {
                    margin-bottom: 15px;
                }
            }

            @media (max-width:576px) {
                .search-result-list-detail .job-result-nav {
                    margin-bottom: 20px;
                }
            }

            @media (max-width:1024px) {
                .search-result-list-detail .feedback-btn {
                    display: none !important;
                }
            }

            @media (max-width:800px) {
                .search-result-list-detail .feedback-btn {
                    display: none;
                }
            }

            @media (max-width:1023px) {
                .search-result-list-detail .side-wrapper {
                    padding-left: 0;
                }
            }

            @media (max-width:800px) {
                .search-result-list-detail .side-wrapper .banner-ad {
                    display: none;
                }
            }

            @media (max-width:599px) {
                .search-result-list-detail .side-wrapper .banner-ad {
                    display: block;
                }
            }

            @media (min-width:1025px) {
                .search-result-list-detail .apply-now-banner .apply-now-btn a {
                    width: 390px;
                }
            }

            .search-result-list-detail .jobs-side-list {
                max-height: 100%;
                padding-right: 0;
                overflow-y: hidden;
            }

            .search-result-list-detail .jobs-side-list .job-item .figure:hover {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .search-result-list-detail .jobs-side-list .job-item .figure:hover .title a {
                color: #f7a334;
            }

            .search-result-list-detail .cb-recommended-jobs-hunt {
                border-bottom: none;
            }

            .search-result-list-detail .cb-recommended-jobs-hunt {
                padding-bottom: 40px;
            }

            .search-result-list-detail .apply-form-success-image {
                padding: 0;
            }

            .search-result-list-detail .apply-form-success-image .image img {
                max-width: 100%;
                height: auto;
            }

            .page-heading-tool .filters-wrapper .switch-group {
                margin-top: 15px;
            }

            @keyframes opacity {
                0% {
                    opacity: 0;
                }
                90% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }

            @media (min-width:1025px) {
                .search-result-list-detail .cb-recommended-jobs-hunt .cus-row {
                    margin: 0 -15px;
                }
                .search-result-list-detail .cb-recommended-jobs-hunt .cus-col {
                    padding: 0 15px;
                }
                .search-result-list-detail .job-item .figure:hover .caption .company-name {
                    display: block;
                }
            }

            @media (min-width:1024px) {
                .search-result-list-detail .col-custom-xxl-9 {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 275px);
                    flex: 0 0 calc(100% - 275px);
                    max-width: calc(100% - 275px);
                }
                .search-result-list-detail .col-custom-xxl-3 {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 275px;
                    flex: 0 0 275px;
                    max-width: 275px;
                }
                .filters-wrapper .col-lg-2 {
                    -ms-flex: 0 0 20%;
                    -webkit-box-flex: 0;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
            }

            @media (max-width:576px) {
                .search-result-list-detail .job-detail-content .job-detail-bottom {
                    z-index: 111;
                    position: sticky;
                    position: -webkit-sticky;
                    bottom: 2px;
                    left: 0;
                    width: 100%;
                    margin-top: 0;
                }
                .search-result-list-detail .job-detail-content .job-detail-bottom:after {
                    width: 3px;
                }
                .search-result-list-detail .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
                    margin-top: 0;
                }
            }

            @media (max-width:768px) {
                .search-result-list-detail .job-detail-content .job-tags {
                    margin-top: 0;
                }
            }

            .search-result-list-detail .mb-15 {
                margin-bottom: 15px;
            }

            .search-result-list-detail .job-detail-bottom-banner img {
                width: 100%;
            }

            .search-result-list-detail .job-detail-content .job-detail-bottom .apply-now-content {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .chat-with-us {
                bottom: 75px;
            }

            @media (max-width:1024px) {
                .search-result-list-detail .apply-now-banner {
                    height: 100% !important;
                }
            }

            .login-modal {
                width: 100%;
                max-width: 730px;
            }

            .is-browser-IE .job-item .figure .image img {
                width: 100%;
            }

            .is-browser-IE .job-detail-content .salary-range .square-real {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 80%;
                flex: 0 0 80%;
            }

            .is-browser-IE .job-detail-content .salary-range .square-min,
            .is-browser-IE .job-detail-content .salary-range .square-max {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 10%;
                flex: 0 0 10%;
            }

            .is-browser-IE .job-detail-content .salary-range .salary-of-you .text {
                width: 100px;
            }

            .is-browser-IE .job-detail-content .salary-range .rectangle-color .value-point-popular .value-text-medium {
                top: auto;
            }

            .is-browser-IE .job-detail-content .job-detail-bottom .job-desc .save-job .toolip {
                width: 120px;
            }

            .is-browser-IE .job-detail-content .job-detail-bottom .job-detail-bottom-wrapper {
                border-right: 1px solid #86cb49;
            }

            .is-browser-IE .maps-tooltip .image img {
                width: 100%;
            }

            .is-browser-IE .login-modal .modal-title {
                padding: 15px 30px;
            }

            .edit-multiselect button.ui-multiselect {
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                border: 1px solid #ccc;
                border-radius: 4px;
                background: #fff;
            }

            .edit-multiselect .ui-multiselect-open .ui-icon {
                background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/img/sl.png");
                width: 8px;
                height: 5px;
                background-position: 0 0;
                margin: 0 -2px 0 0;
                display: inline-block;
                z-index: 1111;
                position: relative;
                top: -2px;
            }

            .edit-multiselect .ui-multiselect-menu {
                top: 62px !important;
                left: 15px !important;
            }

            .ui-multiselect-menu {
                z-index: 1111;
                padding: 0;
            }

            .ui-multiselect-header {
                padding: 0;
                margin-bottom: 0;
            }

            .ui-multiselect-checkboxes {
                width: 100%;
                background: #fff;
                padding: 3px;
            }

            .ui-multiselect-checkboxes li label span {
                margin-left: 5px;
            }

            .ui-multiselect-header ul li:first-child {
                color: #fff;
                font-size: 12px;
                padding: 3px;
            }

            .ui-multiselect-header .ui-helper-reset {
                overflow: hidden;
                background: #009b74 !important;
            }

            .ui-widget-content {
                border: 1px solid #009b74;
            }

            .ui-multiselect-close .ui-icon-circle-close {
                background-image: url("https://static.careerbuilder.vn/themes/careerbuilder/images/ui-icons_ffffff_256x240.png");
                width: 16px;
                height: 16px;
                background-position: -32px -192px;
                position: relative;
                top: 2px;
                right: 2px;
            }

            @media (max-width:1023px) {
                .edit-multiselect .ui-multiselect-menu {
                    top: 60px !important;
                }
            }

            .job-detail-content .about-company {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                z-index: 2;
                position: relative;
                flex-direction: column;
                margin-top: 20px;
            }

            .job-detail-content .about-company .bg-about-company {
                z-index: 0;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }

            .job-detail-content .about-company .bg-about-company img {
                -o-object-fit: cover;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .job-detail-content .about-company .title,
            .job-detail-content .about-company .company-introduction {
                z-index: 2;
            }

            .job-detail-content .about-company .title {
                color: #5d677a;
                font-size: 15px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .job-detail-content .about-company .company-introduction {
                background: #ffffff;
            }

            .job-detail-content .about-company .company-introduction .company-info .name {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                color: #5d677a;
                font-size: 15px;
                font-weight: 700;
                line-height: 1.2;
                transition: 0.4s ease-in-out all;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .img {
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                float: left;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .img .logo-company {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                display: flex;
                align-items: center;
                align-items: center;
                justify-content: center;
                justify-content: center;
                width: 100%;
                width: 8.125rem;
                height: 100%;
                height: 8.125rem;
                border: 1px solid #e5e5e5;
                border-radius: 4px;
                background: #fff;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content {
                width: calc(100% - 8.625rem);
                padding-left: 1.875rem;
                float: left;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content .des {
                -o-text-overflow: ellipsis;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content hr {
                margin: 5px 0;
                border: 0;
                border-top: 1px solid #e9e9e9;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content strong {
                padding-right: 5px;
                color: #182642;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content p,
            .job-detail-content .about-company .company-introduction .company-info .info .content ul {
                font-size: 14px;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content ul li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content ul li a {
                color: inherit;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content ul li span {
                margin-right: 5px;
                font-size: 16px;
                line-height: 16px;
            }

            @media (min-width:1200px) {
                .job-detail-content .about-company .company-introduction .company-info .info .content ul {
                    -ms-flex-wrap: wrap;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .content ul li {
                    margin-top: 5px;
                    padding-right: 20px;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .content ul li:last-child {
                    padding-right: 0;
                }
            }

            @media (min-width:1440px) {
                .job-detail-content .about-company .company-introduction .company-info .info .content ul li {
                    padding-right: 30px;
                }
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact {
                -ms-flex-wrap: wrap;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                margin-top: 10px;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li {
                position: relative;
                padding-right: 20px;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li::before {
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                position: absolute;
                top: 50%;
                left: calc(100% - 10px);
                width: 1px;
                height: 16px;
                transform: translateY(-50%);
                background: #597e96;
                content: "";
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li:last-child::before {
                display: none;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li a {
                color: #287ab9;
                font-size: 14px;
                font-weight: 400;
            }

            .job-detail-content .about-company .company-introduction .company-info .info .content .link-contact li a em {
                padding-right: 10px;
            }

            @media (min-width:576px) {
                .job-detail-content .about-company .company-introduction .company-info .info {
                    -ms-flex-wrap: wrap;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    position: relative;
                    flex-wrap: wrap;
                    margin-top: 20px;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .img {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 8.125rem;
                    -webkit-box-align: start;
                    -ms-flex-align: start;
                    flex: 0 0 8.125rem;
                    align-items: flex-start;
                    width: 100%;
                    max-width: 8.125rem;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .img .title-company {
                    position: absolute;
                    top: 0;
                    margin-bottom: 5px;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .content {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 calc(100% - 8.625rem);
                    flex: 0 0 calc(100% - 8.625rem);
                    width: 100%;
                    max-width: calc(100% - 8.625rem);
                }
            }

            .job-detail-content .about-company .company-introduction .company-info:after {
                display: block;
                clear: both;
                content: "";
            }

            .job-detail-content .about-company .company-introduction .company-follow {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-flex-wrap: wrap;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: flex-end;
                margin-top: 15px;
                padding-top: 15px;
                border-top: 1px solid #e6ecef;
            }

            @media (min-width:576px) {
                .job-detail-content .about-company .company-introduction .company-follow {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                .job-detail-content .about-company .company-introduction .company-follow .left-follow {
                    margin-right: 20px;
                }
            }

            @media (min-width:768px) {
                .job-detail-content .about-company .company-introduction .company-follow {
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    justify-content: space-between;
                }
            }

            @media (min-width:1024px) {
                .job-detail-content .about-company .company-introduction .company-follow {
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: space-between;
                }
            }

            @media (min-width:1200px) {
                .job-detail-content .about-company .company-introduction .company-follow .right-follow {
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
            }

            .job-detail-content .about-company .company-introduction .company-follow .follower-number {
                color: #287ab9;
                font-size: 18px;
                font-weight: 500;
            }

            .job-detail-content .about-company .company-introduction .company-follow .left-follow {
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

            .job-detail-content .about-company .company-introduction .company-follow .left-follow .view-more {
                margin-top: 0;
            }

            .job-detail-content .about-company .company-introduction .company-follow .left-follow .view-more a {
                color: #5d677a;
                font-size: 13px;
                font-weight: 700;
            }

            .job-detail-content .about-company .company-introduction .company-follow .left-follow .view-more a em {
                padding-left: 5px;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
                padding-top: 10px;
            }

            @media (min-width:1200px) {
                .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
                    padding-top: 0;
                    padding-left: 15px;
                }
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow a {
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
                height: 35px;
                border-radius: 5px;
                background: #2f4ba0;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a {
                position: relative;
                background: #2f4ba0;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a:before {
                color: #ffffff;
                content: "Follow";
                opacity: 1;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a span {
                display: none;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow a em {
                display: none;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a {
                position: relative;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:before {
                color: #ffffff;
                content: "Unfollow";
                opacity: 0;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a em {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                display: block;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 25px;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:hover {
                background: #cacaca;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:hover:before {
                opacity: 1;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-follow.icon-follow.followed a:hover em {
                opacity: 0;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                padding-top: 15px;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-join a {
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
                padding: 0 15px;
                border-radius: 5px;
                background: #00b2a3;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .job-detail-content .about-company .company-introduction .company-follow .btn-join a:hover {
                background-position: 100% 0;
                text-decoration: none;
            }

            @media (min-width:576px) {
                .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                    padding-top: 10px;
                }
            }

            @media (min-width:1025px) {
                .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                    padding-top: 15px;
                }
            }

            @media (min-width:1200px) {
                .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                    padding-top: 0;
                    padding-left: 15px;
                }
            }

            @media (max-width:1440px) {
                .job-detail-content .about-company .company-introduction .company-follow .btn-follow a,
                .job-detail-content .about-company .company-introduction .company-follow .btn-join a {
                    width: -webkit-max-content;
                    width: -moz-max-content;
                    width: max-content;
                    padding: 0 15px;
                    font-size: 14px !important;
                }
                .job-detail-content .about-company .company-introduction .company-follow .follower-number {
                    font-size: 14px;
                }
            }

            .job-detail-content .about-company .company-introduction .company-jobs-opening .row {
                margin-bottom: 0;
            }

            .job-detail-content .about-company .company-introduction .company-jobs-opening .row>* {
                margin-bottom: 0;
            }

            .job-detail-content .about-company .company-introduction .company-jobs-opening .job-item {
                padding: 10px 0;
                border-bottom: 1px solid #e5e5e5;
            }

            .job-detail-content .about-company .company-introduction .company-jobs-opening .job-item .figure {
                -webkit-box-shadow: none !important;
                padding: 0;
                border: 0;
                box-shadow: none !important;
            }

            .job-detail-content .about-company .company-introduction .company-jobs-opening .job-item .figcaption {
                padding: 0;
            }

            .job-detail-content .about-company .company-introduction .company-jobs-opening .view-more {
                margin-top: 30px;
            }

            .job-detail-content .about-company .company-introduction .company-jobs-opening .view-more a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 240px;
                height: 40px;
                margin: 0 auto;
                border-radius: 5px;
                background: #2f4ba0;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .job-detail-content .about-company .company-introduction .company-content ul,
            .job-detail-content .about-company .company-introduction .company-content ol {
                padding-left: 1rem;
            }

            .job-detail-content .about-company .company-introduction .company-content p {
                font-size: 14px;
            }

            .job-detail-content .about-company .company-introduction .company-content p+p {
                margin-top: 15px;
            }

            @media (min-width:1440px) {
                .job-detail-content .about-company .company-introduction .company-content p {
                    font-size: 15px;
                }
                .job-detail-content .about-company .company-introduction .company-content p+p {
                    margin-top: 20px;
                }
            }

            .job-detail-content .about-company .company-introduction .company-photo .album {
                position: relative;
            }

            .job-detail-content .about-company .company-introduction .company-photo .album:before {
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                z-index: 3;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff;
                font-family: Material Design Icons;
                font-size: 1.875rem;
                content: "\f2e9";
                pointer-events: none;
            }

            .job-detail-content .about-company .company-introduction .company-photo .album:after {
                z-index: 2;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.2);
                content: "";
                pointer-events: none;
            }

            .job-detail-content .about-company .company-introduction .company-photo .album a {
                display: block;
                position: relative;
                padding-top: 63.829787234%;
            }

            .job-detail-content .about-company .company-introduction .company-photo .album a img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                margin-top: 30px;
            }

            .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                border: 1px solid #e5e5e5;
                border-radius: 50%;
                font-size: 18px;
                cursor: pointer;
                transition: 0.3s all;
            }

            .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav:hover {
                border: 1px solid transparent;
                background: #00b2a3;
                color: #fff;
            }

            .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav+.swiper-nav {
                margin-left: 10px;
            }

            .job-detail-content .about-company .company-introduction .company-photo .swiper-navigation .swiper-nav span {
                height: 18px;
            }

            @media screen and (max-width:768px) {
                .job-detail-content .about-company .company-introduction .company-introduction {
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                }
                .job-detail-content .about-company .company-introduction .company-info {
                    width: 100%;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .img .logo-company {
                    width: 80px;
                    height: 80px;
                    padding: 5px;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .content {
                    width: calc(100% - 80px);
                }
                .job-detail-content .about-company .company-introduction .company-follow {
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    width: 100%;
                    margin-top: 10px;
                    padding-left: 0;
                }
                .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
                    margin: 0;
                }
                .job-detail-content .about-company .company-introduction .company-follow .btn-follow a {
                    width: 120px;
                }
                .job-detail-content .about-company .company-introduction .company-follow .btn-follow.followed a {
                    background: #f1f1f1;
                }
                .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                    padding-top: 10px;
                }
            }

            @media screen and (max-width:576px) {
                .job-detail-content .about-company .company-introduction .company-info .info .img {
                    position: relative;
                    float: none;
                }
                .job-detail-content .about-company .company-introduction .company-info .info .content {
                    width: 100%;
                    padding-top: 20px;
                    padding-left: 0;
                    float: none;
                }
                .job-detail-content .about-company .company-introduction .company-follow {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    justify-content: flex-start;
                    padding-left: 0;
                }
                .job-detail-content .about-company .company-introduction .company-follow>* {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                    padding-left: 0;
                }
                .job-detail-content .about-company .company-introduction .company-follow .btn-follow {
                    -webkit-box-ordinal-group: 2;
                    -ms-flex-order: 1;
                    order: 1;
                }
                .job-detail-content .about-company .company-introduction .company-follow .follower-number {
                    -webkit-box-ordinal-group: 3;
                    -ms-flex-order: 2;
                    order: 2;
                    padding-top: 10px;
                }
                .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                    -webkit-box-ordinal-group: 4;
                    -ms-flex-order: 3;
                    order: 3;
                    padding-top: 10px;
                }
                .job-detail-content .about-company .company-introduction .company-follow .btn-follow,
                .job-detail-content .about-company .company-introduction .company-follow .btn-join {
                    padding-left: 0;
                }
            }

            .job-detail-content .about-company .company-introduction .job-item .figure .title {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .job-detail-content .about-company .company-introduction .job-item .figure .title a {
                -webkit-transition: 0.4s ease-in-out all;
                -o-transition: 0.4s ease-in-out all;
                transition: 0.4s ease-in-out all;
            }

            .job-detail-content .about-company .company-introduction .job-item .figure .title .new {
                padding-left: 5px;
                font-size: 14px;
                font-weight: 700;
                text-transform: uppercase;
            }

            .job-detail-content .about-company .company-introduction .job-item:hover .figure .title a {
                color: #f7a334;
            }

            .box-most-find {
                border: 1px solid #EAEAEA;
                margin-bottom: 15px;
            }

            .box-most-find .box-title {
                background: #E6EEFA;
            }

            .box-most-find .box-title h4 {
                font-weight: 700;
                color: #1E1E1E;
                font-size: 21px;
                padding: 14px 50px;
                text-align: center;
            }

            .box-most-find .box-content {
                padding: 30px 20px;
            }

            .box-most-find .box-content ul {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                margin-bottom: -10px;
            }

            .box-most-find .box-content ul li {
                margin-bottom: 10px;
            }

            .box-most-find .box-content ul li:not(:last-child) {
                margin-right: 10px;
            }

            .box-most-find .box-content ul li a {
                color: #2f4ba0;
                padding: 10px;
                display: inline-flex;
                font-size: 16px;
                background: #F5F5F5;
                border-radius: 4px;
            }

            @media (min-width:1024px) {
                .job-detail-content .about-company {
                    margin-top: 40px;
                }
            }

            .txt-space {
                display: inline-block;
                font-size: 14px;
                margin: 5px 0 0 0;
            }

            .txt-space.mr-left {
                margin-left: 21px;
            }

            .fast-apply-btn a,
            .apply-now-btn a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: auto !important;
                padding: 0 30px;
                height: 35px;
                border-radius: 5px;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            .apply-now-btn a {
                background: #00b2a3;
            }

            .apply-type {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .apply-type .fast-apply-btn {
                margin-right: 20px;
            }

            .apply-type a em {
                margin-right: 10px;
                font-size: 16px;
            }

            .fast-apply-btn a em {
                width: 20px;
                height: 20px;
                display: inline-block;
                background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/sm-icon-logo.svg") center center no-repeat !important;
                background-size: cover !important;
            }

            @media (max-width:1440px) {
                .fast-apply-btn a,
                .apply-now-btn a {
                    font-size: 14px !important;
                    padding: 0 20px;
                }
            }

            @media screen and (min-width:1023px) and (max-width:1199px) {
                .apply-type {
                    flex-direction: column;
                }
                .apply-type .fast-apply-btn {
                    margin: 0 0 10px 0;
                }
                .apply-type a {
                    width: 220px !important;
                    padding: 0 !important;
                }
            }

            @media screen and (max-width:992px) {
                .apply-type {
                    flex-direction: column;
                }
                .apply-type .fast-apply-btn {
                    margin: 0 0 10px 0;
                }
                .apply-type a {
                    width: 220px !important;
                    padding: 0;
                }
            }

            @media screen and (max-width:576px) {
                .apply-type .fast-apply-btn {
                    margin: 10px 0 0 0;
                }
            }

            .fast-apply-modal {
                width: 100%;
                max-width: 730px !important;
                padding: 0 !important;
            }

            .fast-apply-modal .modal-title {
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

            .fast-apply-modal .modal-title p {
                margin-bottom: 0;
                font-size: 18px;
                font-weight: 700;
                line-height: 1;
                text-transform: uppercase;
            }

            .fast-apply-modal .modal-body {
                padding: 30px;
            }

            .fast-apply-modal .modal-body>p,
            .fast-apply-modal .modal-body .choose-area {
                margin-bottom: 15px;
            }

            .fast-apply-modal .modal-body .notes-area {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-top: 1px solid #eaeaea;
                padding-top: 15px;
            }

            .fast-apply-modal .modal-body .notes-area>p {
                max-width: 50%;
            }

            .fast-apply-modal .modal-body .notes-area>a {
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 200px;
                height: 35px;
                border-radius: 5px;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                text-transform: uppercase;
            }

            @media screen and (max-width:767px) {
                .search-result-list-detail .apply-now-content .apply-now-right {
                    margin-top: 0;
                }
            }

            @media screen and (max-width:576px) {
                .search-result-list-detail .job-detail-content .job-detail-bottom .apply-now-content {
                    flex-direction: column;
                }
                .search-result-list-detail .job-detail-content .job-detail-bottom .fast-apply-btn {
                    margin-bottom: 10px;
                }
            }
        </style>
        <style>
            /*common-job-detail.css*/

            #job-detail-template .search-result {
                padding-top: 0
            }

            .search-result-list-detail {
                padding-top: 10px
            }

            .apply-now-banner,
            .search-result-list-detail .apply-now-banner {
                height: 290px
            }

            .apply-now-banner.nobanner {
                height: auto;
                padding-bottom: 0
            }

            .apply-now-banner.nobanner .apply-now-content {
                padding: 15px;
                background-color: #FFF;
                border: 1px solid #E9E9E9;
                border-radius: 5px;
                border-top: 4px solid #00b2a3;
                margin-bottom: 0;
                color: #5D677A;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-box-shadow: 0 2px 9px 0 rgba(46, 46, 46, 0.15);
                -moz-box-shadow: 0 2px 9px 0 rgba(46, 46, 46, 0.15);
                box-shadow: 0 2px 9px 0 rgba(46, 46, 46, 0.15)
            }

            .apply-now-content {
                padding: 15px 30px
            }

            .apply-now-content .job-desc .title {
                font-size: 1rem
            }

            .apply-now-content .job-desc .employer {
                font-size: 14.5px
            }

            .job-detail-bottom .apply-now-content {
                padding: 15px
            }

            .job-detail-bottom .job-desc,
            .job-detail-bottom .job-desc>a {
                display: flex;
                align-items: center;
            }

            .job-detail-bottom .job-desc>a {
                color: inherit;
                font-size: 14.5px;
                margin-right: 20px
            }

            .job-detail-bottom .job-desc>a i {
                padding-right: 8px;
                line-height: 1.5;
                font-size: 20px;
            }

            .job-detail-bottom .job-desc>a.saved {
                color: #e8c80d
            }

            .job-detail-bottom .apply-now-right .apply-now-btn a {
                height: 40px
            }

            .job-detail-content .detail-box .map p a {
                display: inline-block;
            }

            .job-detail-content .job-detail-bottom {
                clear: both;
                position: sticky;
                bottom: 0;
                z-index: 111;
            }

            .job-detail-content .share-this-job {
                margin-top: 20px
            }

            .content_fck {
                line-height: 1.5 !important;
                font-size: 16px !important;
                word-wrap: break-word
            }

            .content_fck ul {
                list-style: inherit !important
            }

            .content_fck ul li {
                list-style: disc
            }

            .content_fck ul li,
            .content_fck ol li {
                padding-bottom: 5px !important
            }

            .content_fck ul,
            .content_fck ol,
            .job_content .content_fck ul,
            .job_content .content_fck ol {
                padding-left: 26px !important
            }

            .job-tags,
            .job-detail-content .share-this-job {
                float: left;
                width: 100%;
                margin-bottom: 30px;
                margin-top: 0
            }

            .job-tags h2 {
                margin-bottom: 10px;
                font-size: 15px;
                color: #172642;
                text-transform: uppercase
            }

            .recommended-jobs-template {
                float: left;
                width: 100%;
                margin-bottom: 30px;
            }

            .ViewRecommendJob {
                float: left;
                width: 100%;
                margin-bottom: 15px;
            }

            @media screen and (max-width:576px) {
                .recommended-jobs-template {
                    margin-bottom: 25px;
                }
            }

            .recommended-jobs-template .cb-section {
                padding: 0
            }

            .recommended-jobs-template .cb-title.cb-title-center {
                text-align: left
            }

            .recommended-jobs-template .cb-title h2,
            .ViewRecommendJob h2 {
                font-size: 15px;
                color: #172642;
                margin-bottom: 10px;
                text-transform: uppercase;
            }

            .ViewRecommendJob {
                font-size: 14.5px;
                margin-bottom: 40px
            }

            .ViewRecommendJob ul li {
                padding: 5px 0;
                border-bottom: 1px dotted #ebeaea
            }

            .photo-jobdetail {
                float: left;
                width: 100%;
                position: relative
            }

            .photo-jobdetail .company-heading-title {
                color: #172642;
                font-size: 15px;
                text-transform: uppercase;
                padding-bottom: 10px
            }

            .photo-jobdetail .album {
                position: relative
            }

            .photo-jobdetail .album:before {
                z-index: 3;
                position: absolute;
                top: 50%;
                left: 50%;
                color: #fff;
                font-family: Material Design Icons;
                font-size: 1.875rem;
                content: "\f2e9";
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                pointer-events: none
            }

            .photo-jobdetail .album:after {
                z-index: 2;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.2);
                content: "";
                pointer-events: none
            }

            .photo-jobdetail .album a {
                display: block;
                position: relative;
                padding-top: 63.829787234%
            }

            .photo-jobdetail .album a img {
                -o-object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover
            }

            .photo-jobdetail .album.video:before {
                content: "\f40d"
            }

            .photo-jobdetail .swiper-navigation {
                justify-content: center;
                z-index: 11;
                position: absolute;
                margin-top: 0
            }

            .photo-jobdetail .swiper-navigation .swiper-nav {
                width: 30px;
                height: 30px;
                border: 1px solid #e5e5e5;
                font-size: 18px;
                text-align: center;
                border-radius: 50%;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-transition: 0.3s all;
                -o-transition: 0.3s all;
                display: -webkit-box;
                display: -ms-flexbox;
                display: inline-block;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: 0.3s all;
            }

            .photo-jobdetail .swiper-navigation .swiper-nav:hover {
                color: #fff;
                border: 1px solid transparent;
                background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
                background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
                background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            }

            .photo-jobdetail .swiper-navigation .swiper-nav+.swiper-nav {
                margin-left: 5px
            }

            .photo-jobdetail .swiper-navigation .swiper-nav span {
                height: 18px
            }

            @media (max-width:1200px) {
                .job-detail-bottom .job-desc>a>span {
                    display: none;
                }
            }

            @media (max-width:576px) {
                .job-detail-bottom .job-desc>a i {
                    font-size: 14.5px;
                }
                .apply-now-banner .apply-now-content {
                    flex-direction: column;
                }
                .apply-now-banner .apply-now-content .apply-now-btn {
                    margin-top: 10px;
                }
            }

            @media (max-width:350px) {
                .job-detail-bottom .job-desc>a {
                    margin-right: 10px;
                }
                .job-detail-bottom .job-desc>a:last-child {
                    margin-right: 0;
                }
                .job-detail-bottom .job-desc>a:last-child i {
                    padding-right: 0;
                }
                .job-detail-bottom .apply-now-btn a {
                    font-size: 12px;
                    height: 30px !important;
                    padding: 0 12px;
                }
            }

            @media (max-width:300px) {
                .job-detail-bottom .job-desc>a {
                    margin-right: 5px;
                }
            }

            .info-company .text-job a,
            .text-break-all {
                word-break: break-all;
            }

            .apply-now-banner .image {
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
                height: 100%;
            }

            .apply-now-banner .image img {
                -o-object-fit: cover;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .apply-now-banner .apply-now-content {
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: 1;
            }

            .info-company .text-job a {
                word-break: break-all;
            }

            .apply-now-banner.nobanner .apply-now-content {
                position: static !important;
                width: 100% !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .photo-jobdetail .swiper-navigation {
                display: flex;
                align-content: center;
            }

            .photo-jobdetail .swiper-nav {
                outline: none;
            }

            .photo-jobdetail .swiper-nav.swiper-button-disabled,
            .photo-jobdetail .swiper-nav.swiper-button-disabled:hover,
            .photo-jobdetail .swiper-nav.swiper-button-disabled:focus {
                background: #dcdcdc !important;
                border: 1px solid #e5e5e5 !important;
                cursor: auto !important;
                outline: none;
            }

            .photo-jobdetail .swiper-nav.swiper-button-disabled:hover {
                color: #5d677a;
            }

            .photo-jobdetail .swiper-nav.swiper-button-disabled span,
            .photo-jobdetail .swiper-nav.swiper-button-disabled:hover span {
                display: inline-block !important;
            }

            @media (max-width:1024px) {
                .apply-now-banner {
                    height: auto !important;
                }
            }

            @media (max-width:767px) {
                .template-201 .left-col,
                .template-201 .right-col {
                    width: 100% !important;
                }
            }

            @media (max-width:360px) {
                .job-detail-content .detail-row .welfare-list li {
                    width: 100% !important;
                }
            }
        </style>
        <section class="find-jobs-form">
            <div class="container">
                <div class="main-form">
                    <div class="close-input-filter"><em class="lnr lnr-cross"></em></div>
                    <form>
                        <div class="advanced-search">
                            <div class="form-group form-keyword">
                                <input type="search" class="keyword" name="keyword" id="keyword" placeholder="Chức danh, Kỹ năng, Tên công ty">
                                <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                            </div>
                            <div class="form-group form-select-chosen">
                                <select id="industry" name="industry" class="chosen-select-max-three" data-placeholder="Tất cả ngành nghề" multiple>
  	<option value="">Chọn ngành nghề</option>
    <option value="an-ninh-bao-ve_51">An Ninh / Bảo Vệ</option><option value="an-toan-lao-dong_58">An toàn lao động</option><option value="ban-hang-kinh-doanh_31">Bán hàng / Kinh doanh</option><option value="ban-le-ban-si_30">Bán lẻ / Bán sỉ</option><option value="bao-hiem_23">Bảo hiểm</option><option value="bat-dong-san_28">Bất động sản</option><option value="bien-phien-dich_38">Biên phiên dịch</option><option value="buu-chinh-vien-thong_32">Bưu chính viễn thông</option><option value="chan-nuoi-thu-y_52">Chăn nuôi / Thú y</option><option value="chung-khoan_46">Chứng khoán</option><option value="cntt-phan-cung-mang_63">CNTT - Phần cứng / Mạng</option><option value="cntt-phan-mem_1">CNTT - Phần mềm</option><option value="cong-nghe-sinh-hoc_69">Công nghệ sinh học</option><option value="cong-nghe-thuc-pham-dinh-duong_70">Công nghệ thực phẩm / Dinh dưỡng</option><option value="co-khi-o-to-tu-dong-hoa_14">Cơ khí / Ô tô / Tự động hóa</option><option value="dau-khi_26">Dầu khí</option><option value="det-may-da-giay-thoi-trang_39">Dệt may / Da giày / Thời trang</option><option value="dich-vu-khach-hang_12">Dịch vụ khách hàng</option><option value="du-lich_34">Du lịch</option><option value="duoc-pham_7">Dược phẩm</option><option value="dien-dien-tu-dien-lanh_48">Điện / Điện tử / Điện lạnh</option><option value="do-go_35">Đồ gỗ</option><option value="giai-tri_15">Giải trí</option><option value="giao-duc-dao-tao_13">Giáo dục / Đào tạo</option><option value="hang-gia-dung-cham-soc-ca-nhan_10">Hàng gia dụng / Chăm sóc cá nhân</option><option value="hang-hai_61">Hàng hải</option><option value="hang-khong_60">Hàng không</option><option value="hanh-chinh-thu-ky_3">Hành chính / Thư ký</option><option value="hoa-hoc_41">Hóa học</option><option value="in-an-xuat-ban_64">In ấn / Xuất bản</option><option value="ke-toan-kiem-toan_2">Kế toán / Kiểm toán</option><option value="khoang-san_65">Khoáng sản</option><option value="kien-truc_6">Kiến trúc</option><option value="lao-dong-pho-thong_44">Lao động phổ thông</option><option value="lam-nghiep_50">Lâm Nghiệp</option><option value="luat-phap-ly_24">Luật / Pháp lý</option><option value="moi-truong_16">Môi trường</option><option value="moi-tot-nghiep-thuc-tap_45">Mới tốt nghiệp / Thực tập</option><option value="my-thuat-nghe-thuat-thiet-ke_11">Mỹ thuật / Nghệ thuật / Thiết kế</option><option value="ngan-hang_19">Ngân hàng</option><option value="nha-hang-khach-san_29">Nhà hàng / Khách sạn</option><option value="nhan-su_22">Nhân sự</option><option value="noi-ngoai-that_47">Nội ngoại thất</option><option value="nong-nghiep_5">Nông nghiệp</option><option value="phi-chinh-phu-phi-loi-nhuan_20">Phi chính phủ / Phi lợi nhuận</option><option value="quan-ly-chat-luong-qa-qc_42">Quản lý chất lượng (QA/QC)</option><option value="quan-ly-dieu-hanh_17">Quản lý điều hành</option><option value="quang-cao-doi-ngoai-truyen-thong_67">Quảng cáo / Đối ngoại / Truyền Thông</option><option value="san-xuat-van-hanh-san-xuat_25">Sản xuất / Vận hành sản xuất</option><option value="tai-chinh-dau-tu_59">Tài chính / Đầu tư</option><option value="thong-ke_36">Thống kê</option><option value="thu-mua-vat-tu_43">Thu mua / Vật tư</option><option value="thuy-loi_53">Thủy lợi</option><option value="thuy-san-hai-san_49">Thủy sản / Hải sản</option><option value="thu-vien_57">Thư viện</option><option value="thuc-pham-do-uong_21">Thực phẩm &amp; Đồ uống</option><option value="tiep-thi-marketing_4">Tiếp thị / Marketing</option><option value="tiep-thi-truc-tuyen_37">Tiếp thị trực tuyến</option><option value="to-chuc-su-kien_68">Tổ chức sự kiện</option><option value="trac-dia-dia-chat_54">Trắc địa / Địa Chất</option><option value="truyen-hinh-bao-chi-bien-tap_66">Truyền hình / Báo chí / Biên tập</option><option value="tu-van_9">Tư vấn</option><option value="van-chuyen-giao-nhan-kho-van_33">Vận chuyển / Giao nhận /  Kho vận</option><option value="xay-dung_8">Xây dựng</option><option value="xuat-nhap-khau_18">Xuất nhập khẩu</option><option value="y-te-cham-soc-suc-khoe_56">Y tế / Chăm sóc sức khỏe</option><option value="bao-tri-sua-chua_71">Bảo trì / Sửa chữa</option><option value="nganh-khac_27">Ngành khác</option>  </select>
                            </div>
                            <div class="form-group form-select-chosen">
                                <select id="location" name="location" class="chosen-select-max-three" data-placeholder="Tất cả địa điểm" multiple>
    <option value="">Chọn địa điểm</option>
	<option value="ha-noi_4">Hà Nội</option><option value="ho-chi-minh_8">Hồ Chí Minh</option><option value="an-giang_76">An Giang</option><option value="ba-ria-vung-tau_64">Bà Rịa - Vũng Tàu</option><option value="bac-lieu_781">Bạc Liêu</option><option value="bac-can_281">Bắc Cạn</option><option value="bac-giang_240">Bắc Giang</option><option value="bac-ninh_241">Bắc Ninh</option><option value="ben-tre_75">Bến Tre</option><option value="binh-duong_650">Bình Dương</option><option value="binh-dinh_56">Bình Định</option><option value="binh-phuoc_651">Bình Phước</option><option value="binh-thuan_62">Bình Thuận</option><option value="ca-mau_78">Cà Mau</option><option value="cao-bang_26">Cao Bằng</option><option value="can-tho_71">Cần Thơ</option><option value="dak-lak_50">Dak Lak</option><option value="dak-nong_1042">Dak Nông</option><option value="da-nang_511">Đà Nẵng</option><option value="dien-bien_900">Điện Biên</option><option value="dong-bang-song-cuu-long_1064">Đồng Bằng Sông Cửu Long</option><option value="dong-nai_61">Đồng Nai</option><option value="dong-thap_67">Đồng Tháp</option><option value="gia-lai_59">Gia Lai</option><option value="ha-giang_19">Hà Giang</option><option value="ha-nam_351">Hà Nam</option><option value="ha-tinh_39">Hà Tĩnh</option><option value="hai-duong_320">Hải Dương</option><option value="hai-phong_31">Hải Phòng</option><option value="hau-giang_780">Hậu Giang</option><option value="hoa-binh_18">Hòa Bình</option><option value="hung-yen_321">Hưng Yên</option><option value="khac_901">Khác</option><option value="khanh-hoa_58">Khánh Hòa</option><option value="kien-giang_77">Kiên Giang</option><option value="kon-tum_60">Kon Tum</option><option value="kv-bac-trung-bo_1071">KV Bắc Trung Bộ</option><option value="kv-dong-nam-bo_1069">KV Đông Nam Bộ</option><option value="kv-nam-trung-bo_1070">KV Nam Trung Bộ</option><option value="kv-tay-nguyen_1072">KV Tây Nguyên</option><option value="lai-chau_23">Lai Châu</option><option value="lang-son_25">Lạng Sơn</option><option value="lao-cai_20">Lào Cai</option><option value="lam-dong_63">Lâm Đồng</option><option value="long-an_72">Long An</option><option value="nam-dinh_350">Nam Định</option><option value="nghe-an_38">Nghệ An</option><option value="ninh-binh_30">Ninh Bình</option><option value="ninh-thuan_68">Ninh Thuận</option><option value="phu-tho_210">Phú Thọ</option><option value="phu-yen_57">Phú Yên</option><option value="quang-binh_52">Quảng Bình</option><option value="quang-nam_510">Quảng Nam</option><option value="quang-ngai_55">Quảng Ngãi</option><option value="quang-ninh_33">Quảng Ninh</option><option value="quang-tri_53">Quảng Trị</option><option value="soc-trang_79">Sóc Trăng</option><option value="son-la_22">Sơn La</option><option value="tay-ninh_66">Tây Ninh</option><option value="thai-binh_36">Thái Bình</option><option value="thai-nguyen_280">Thái Nguyên</option><option value="thanh-hoa_37">Thanh Hóa</option><option value="thua-thien-hue_54">Thừa Thiên- Huế</option><option value="tien-giang_73">Tiền Giang</option><option value="toan-quoc_1065">Toàn quốc</option><option value="tra-vinh_74">Trà Vinh</option><option value="tuyen-quang_27">Tuyên Quang</option><option value="vinh-long_70">Vĩnh Long</option><option value="vinh-phuc_211">Vĩnh Phúc</option><option value="yen-bai_29">Yên Bái</option><option value="banteay-meanchey_1098">Banteay Meanchey</option><option value="battambang_1096">Battambang</option><option value="kampong-chhnang_1092">Kampong Chhnang</option><option value="kampong-speu_1090">Kampong Speu</option><option value="kampot_1085">Kampot</option><option value="kandal_1088">Kandal</option><option value="kep_1084">Kep</option><option value="koh-kong_1091">Koh Kong</option><option value="kratie_1093">Kratie</option><option value="otdar-meanchey_1104">Otdar Meanchey</option><option value="pailin_1103">Pailin</option><option value="phnompenh_1041">Phnompenh</option><option value="preah-vihear_1099">Preah Vihear</option><option value="prey-veng_1089">Prey Veng</option><option value="siem-reap_1097">Siem Reap</option><option value="stung-treng_1100">Stung Treng</option><option value="svay-rieng_1087">Svay Rieng</option><option value="tbong-khmum_1082">Tbong Khmum</option><option value="chicago_1034">Chicago</option><option value="florida_1077">Florida</option><option value="miami_1033">Miami</option><option value="san-diego_1039">San Diego</option><option value="hong-kong_1079">Hồng Kông</option><option value="khac_1318">Khác</option><option value="attapeu_1106">Attapeu</option><option value="bokeo_1107">Bokeo</option><option value="champasak_1109">Champasak</option><option value="houaphanh_1110">Houaphanh</option><option value="khammouane_1111">Khammouane</option><option value="luang-prabang_1113">Luang Prabang</option><option value="phongsaly_1115">Phongsaly</option><option value="vientiane_1059">Vientiane</option><option value="xiangkhouang_1120">Xiangkhouang</option><option value="kuala-lumpur_1019">Kuala Lumpur</option><option value="malaysia_1078">Malaysia</option><option value="yangon_1320">Yangon</option><option value="hokkaido_1043">Hokkaido</option><option value="tokyo_1001">Tokyo</option><option value="yokohama_1002">Yokohama</option><option value="qatar_1055">Qatar</option><option value="quoc-te_1073">Quốc tế</option><option value="singapore_1040">Singapore</option><option value="kharkiv_1053">Kharkiv</option>  </select>
                            </div>
                            <div class="form-group find-jobs">
                                <button class="btn-gradient" onClick="return validDatasearchJobsByKeyword('vi');">
  <p>Tìm Ngay</p>
  <span class="mdi mdi-magnify"></span> </button>
                            </div>
                            <div class="form-group animation">
                                <button class="btn-gradient" onClick="return validDatasearchJobsByKeyword('vi');">
  <p>Tìm Ngay</p>
  <span class="mdi mdi-magnify"></span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="search-result-list-detail template-2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 mb-15">
                        <section class="apply-now-banner  ">
                            <div class="image"><img src="https://images.careerbuilder.vn/employer_folders/lot7/167327/173345banner.jpg" alt="Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL ">
                            </div>
                            <div class="apply-now-content">
                                <div class="job-desc">
                                    <h1 class="title">KẾ TOÁN NỢ PHẢI THU</h1>
                                    <a class="employer job-company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-du-lich-anh-sao-thien-ast-travel.35A7769F.html">Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL </a>
                                </div>
                                <div class="apply-type">
                                    <div class="apply-now-btn "> <a href="javascript:void(0);" class="btn-gradient btnApplyClick"> Nộp Đơn Ứng Tuyển </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-7 col-custom-xxl-9">
                        <div class="tabs">
                            <nav class="job-result-nav">
                                <ul class="tabs-toggle">
                                    <li id="tabs-job-detail"><a href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html" data-href="#tab-1" title="Chi tiết">Chi tiết</a></li>
                                    <li id="tabs-job-company"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-du-lich-anh-sao-thien-ast-travel.35A7769F.html" data-href="#tab-2" title="Tổng quan công ty">Tổng quan công ty</a></li>
                                </ul>
                                <div class="job-detail-tool">
                                    <ol class="tabs-saved">
                                        <li>
                                            <a class="toollips save-job chk_save_35BB02B3 " href="javascript:void(0);" data-id="35BB02B3" onclick="popuplogin()">
    <i class="mdi mdi-heart-outline"></i>
    	<div class="toolip">
		<p>Lưu việc làm</p>
	</div>
    </a>
                                        </li>
                                        <li>
                                            <div class="dropdown"> <i class="mdi mdi-share-variant"></i>
                                                <div class="dropdown-menu">
                                                    <div class="social-list">
                                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"><i class="fa fa-linkedin"></i></a>
                                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"><i class="fa fa-google"></i></a>
                                                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize=false></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="report-job toollips" href="javascript:void(0)"><i class="fa fa-flag-o"></i><div class="toolip">
  <p> Báo xấu </p>
</div>
</a> </li>
                                    </ol>
                                </div>
                            </nav>
                            <div class="tab-content" id="tab-1">
                                <section class="job-detail-content">
                                    <div class="bg-blue">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box">
                                                    <div class="map">
                                                        <strong><em class="mdi mdi-map-marker"></em>Địa điểm</strong>
                                                        <p><a href="https://careerbuilder.vn/viec-lam/ho-chi-minh-l8-vi.html">Hồ Chí Minh</a></p>
                                                        <a href="javascript:void(0)" onclick="show_map_detail_job();"><img src="img/icon-map.svg" alt=" Hồ Chí Minh"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box has-background">
                                                    <ul>
                                                        <li> <strong><em class="mdi mdi-update"> </em>Ngày cập nhật</strong>
                                                            <p>23/11/2022</p>
                                                        </li>
                                                        <li> <strong> <em class="mdi mdi-briefcase"></em>Ngành nghề</strong>
                                                            <p> <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html">
                                            Hành chính / Thư ký
                                    </a> , <a href="https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html">
                                            Kế toán / Kiểm toán
                                    </a> , <a href="https://careerbuilder.vn/viec-lam/du-lich-c34-vi.html">
                                            Du lịch
                                    </a>
                                                            </p>
                                                        </li>
                                                        <li> <strong><em class="mdi mdi-briefcase-edit"> </em>Hình thức</strong>
                                                            <p>Nhân viên chính thức</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box has-background">
                                                    <ul>
                                                        <li><strong><i class="fa fa-usd"></i>Lương</strong>
                                                            <p>8 Tr - 15 Tr VND</p>
                                                        </li>
                                                        <li>
                                                            <strong><i class="fa fa-briefcase"></i>Kinh nghiệm</strong>
                                                            <p>
                                                                2 - 5 Năm
                                                            </p>
                                                        </li>
                                                        <li><strong><i class="mdi mdi-account"></i>Cấp bậc</strong>
                                                            <p>Nhân viên</p>
                                                        </li>
                                                        <li><strong><i class="mdi mdi-calendar-check"></i>Hết hạn nộp</strong>
                                                            <p>11/12/2022</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-row">
                                        <h2 class="detail-title">Phúc lợi </h2>
                                        <ul class="welfare-list">
                                            <li><span class="fa fa-medkit"></span> Chế độ bảo hiểm</li>
                                            <li><span class="fa fa-plane"></span> Du Lịch</li>
                                            <li><span class="fa fa-money"></span> Phụ cấp</li>
                                            <li><span class="fa fa-black-tie"></span> Đồng phục</li>
                                            <li><span class="fa fa-usd"></span> Chế độ thưởng</li>
                                            <li><span class="fa fa-user-md"></span> Chăm sóc sức khỏe</li>
                                            <li><span class="fa fa-graduation-cap"></span> Đào tạo</li>
                                            <li><span class="fa fa-line-chart"></span> Tăng lương</li>
                                            <li><span class="fa fa-money"></span> Phụ cấp thâm niên</li>
                                            <li><span class="fa fa-briefcase"></span> Nghỉ phép năm</li>
                                        </ul>





                                    </div>
                                    <div class="detail-row reset-bullet">
                                        <h2 class="detail-title">Mô tả Công việc</h2>
                                        <p>· Ghi nhận doanh thu và lập chứng từ bán hàng, xuất hoá đơn GTGT.</p>
                                        <p>· Đối chiếu và kiểm ta chứng từ, đối chiếu công nợ.</p>
                                        <p>· Xác minh thông tin giao dịch trước khi nhận doanh thu, lập và gửi hoá đơn qua email.</p>
                                        <p>· Xác định tài khoản quá hạn phải thu/thanh toán cũng như các khoản thanh toán còn thiếu.</p>
                                        <p>· Theo dõi và quản lý công nợ các công ty phụ trách.</p>
                                        <p>· Đề xuất và xử lý những trường hợp công nợ phải thu khó đòi.</p>
                                    </div>
                                    <div class="detail-row" reset-bullet>
                                        <h2 class="detail-title">Yêu Cầu Công Việc</h2>
                                        <ul>
                                            <li>Tốt nghiệp cao đẳng trở lên.&nbsp;</li>
                                            <li>Có bằng cấp/chứng chỉ Kế toán.&nbsp;</li>
                                            <li>Có ít nhất 02 năm kinh nghiệm về kế toán công nợ / vị trí tương đương.&nbsp;</li>
                                            <li>Đã từng làm cho công ty du lịch là một lợi thế.&nbsp;</li>
                                            <li>Biết&nbsp;tiếng Anh (giao tiếp qua mail)&nbsp;là một lợi thế.</li>
                                            <li>Sử dụng thành thạo MS Word và&nbsp;Excel&nbsp;trong công việc và biết sử dụng phần mềm kế toán.</li>
                                            <li>Trung thực, thái độ làm việc có trách nhiệm, nhiệt tình và hoà đồng.</li>
                                        </ul>
                                    </div>
                                    <div class="detail-row">
                                        <h3 class="detail-title">Thông tin khác</h3>
                                        <!-----
<div class="content_fck ">
  ------>
                                        <div class="content_fck ">
                                            <ul>
                                                <li> Bằng cấp: Cao đẳng
                                                </li>
                                                <li> Phụ cấp khác:
                                                    <p>Hỗ trợ ăn trưa tại Công ty.<br /> Tặng gói bảo hiểm sức khoẻ của Bảo Việt.<br />
                                                        <br />
                                                    </p>
                                                </li>
                                                <li> Cơ hội huấn luyện:
                                                    <p>Được tham gia các khóa đào tạo chuyên môn, nâng cao nghiệp vụ theo yêu cầu thực tế. <br />
                                                        <br />
                                                    </p>
                                                </li>
                                                <li> Độ tuổi: Không giới hạn tuổi

                                                </li>
                                                <li> Đồng nghiệp:
                                                    <p>Làm việc trong môi trường năng động, thân thiện, có cơ hội thăng tiến nghề nghiệp.<br />
                                                        <br />
                                                    </p>
                                                </li>
                                                <li> Phúc lợi:
                                                    <p>Thưởng Lễ, Tết, lương tháng 13 và xét nâng lương hàng năm theo quy định Công ty. Có chế độ đãi ngộ cao với nhân viên gắn bó lâu năm.<br /> Được hưởng đầy đủ các quyền lợi theo quy định của pháp luật
                                                        (nghỉ Lễ, Tết,…tham gia BHXH, BHYT, BHTN)<br />
                                                        <br />
                                                    </p>
                                                </li>
                                                <li>Lương: 8 Tr - 15 Tr VND
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="share-this-job">
                                        <span>Chia sẻ việc làm này:</span>
                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"> <i class="fa fa-facebook"></i> </a>
                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0">  <i class="fa fa-linkedin"></i></a>
                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0">  <i class="fa fa-google"></i></a>
                                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize=false></div>

                                    </div>

                                    <div class="job-tags ">
                                        <h2>Job tags / skills</h2>
                                        <ul>
                                            <li><a href="https://careerbuilder.vn/vi/tag/thong-ke.html" title=" thống kê"> thống kê</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan.html" title=" Kế toán "> Kế toán </a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/nhan-vien-ke-toan.html" title=" Nhân viên kế toán"> Nhân viên kế toán</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan-vien.html" title=" Kế toán viên"> Kế toán viên</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan-cong-no.html" title=" Kế toán công nợ"> Kế toán công nợ</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan-thanh-toan.html" title=" Kế toán thanh toán"> Kế toán thanh toán</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/nhan-vien-ke-toan-cong-no.html" title=" Nhân viên kế toán công nợ"> Nhân viên kế toán công nợ</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/cong-no.html" title=" công nợ "> công nợ </a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/receivable-accountant.html" title=" Receivable accountant"> Receivable accountant</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/accountant.html" title=" Accountant"> Accountant</a></li>
                                        </ul>
                                    </div>

                                    <div class="job-detail-bottom">
                                        <div class="job-detail-bottom-wrapper">
                                            <div class="apply-now-content">
                                                <div class="job-desc">
                                                    <a class="toollips save-job chk_save_35BB02B3 " href="javascript:void(0);" data-id="35BB02B3" onclick="popuplogin()">
    <i class="mdi mdi-heart-outline"></i>
        <span class="text">Lưu việc làm</span>
	</a>
                                                    <a href="javascript:void(0);" onclick="showboxJobalert()"><i class="mdi mdi-email-outline"></i><span class="text">Gửi tôi việc làm tương tự</span></a>
                                                    <a class="report-job toollips" href="javascript:void(0)"><i class="fa fa-flag-o"></i><span>Báo xấu</span><div class="toolip">
  <p> Báo xấu </p>
</div>
</a>
                                                    <div class="report-modal" style="display: none">
                                                        <div class="modal-title">
                                                            <p>Vì sao bạn muốn báo xấu nhà tuyển dụng này? </p>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form name="feedback_job" id="feedback_job" method="POST" autocomplete="off">
                                                                <input type="hidden" name="job_url" id="job_url" value="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html" />
                                                                <div class="form-group">
                                                                    <input type="text" id="email" name="email" placeholder="Nhập địa chỉ email " onkeyup="this.setAttribute('value', this.value);" value="">
                                                                    <p class="text-validate error_email"> </p>
                                                                </div>
                                                                <div class="list-radio" id="reason" name='reason'>
                                                                    <input type="radio" id="reason-1" name="reason" value="1">
                                                                    <label for="reason-1"> Việc làm không hợp pháp </label>
                                                                    <br>
                                                                    <input type="radio" id="reason-2" name="reason" value="2">
                                                                    <label for="reason-2"> Không cung cấp đủ thông tin </label>
                                                                    <br>
                                                                    <input type="radio" id="reason-3" name="reason" value="3">
                                                                    <label for="reason-3"> Khác </label>
                                                                    <p class="text-validate error_reason"></p>
                                                                </div>
                                                                <div class="box-reason form-group">
                                                                    <input type="text" id="box_reason" name="box_reason">
                                                                    <p class="text-validate error_box_reason"> </p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="captcha" id="captcha" autocomplete="off" placeholder="Mã xác nhận" onkeyup="this.setAttribute('value', this.value);" value="">
                                                                    <p class="text-validate error_captcha"></p>
                                                                </div>
                                                                <div id="captchaim" style="float:left" class="form-group"><img width="150" height="50" alt="captcha" src="https://images.careerbuilder.vn/rws/captcha/a4086c09dc2dcbca6df3753e25108f3a.png" class="img_code" /><input type="hidden" name="key_captcha"
                                                                        id="key_captcha" value="a4086c09dc2dcbca6df3753e25108f3a"></div>
                                                                <a style="padding-left: 10px" onclick="refeshImgCaptcha('captchaim');" href="javascript:void(0);" class="line_bot" id="trynewcode">Thử mã mới</a>
                                                                <div class="form-group" style="clear:left">
                                                                    <button class="btn-send-report" onclick="saveFeedbackJob();return false;"> Báo xấu </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="apply-now-right">
                                                    <div class="apply-now-btn  "> <a href="javascript:void(0);" class="btn-gradient btnApplyClick"> Nộp Đơn Ứng Tuyển </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="salary_taskbar" name="salary_taskbar" value="8000000" />
                                    <input type="hidden" id="industry_taskbar" name="industry_taskbar" value="3,2,34" />
                                    <input type="hidden" id="location_taskbar" name="location_taskbar" value="8" />
                                    <input type="hidden" id="keyword_taskbar" name="keyword_taskbar" value="KẾ TOÁN NỢ PHẢI THU" />
                                    <input type="hidden" id="title_alert" value="KẾ TOÁN NỢ PHẢI THU" />

                                    



                                    <div class="job-detail-bottom-banner " id="">
                                        <div class="adsBannerOA" data-id="852"></div>
                                    </div>

                                  


                                </section>

                                <div class="maps-modal" style="display: none">
                                    <div class="d-flex box-modal">
                                        <div class="map" id="jobMap" style="display: none;"></div>
                                        <div class="info">
                                            <div class="tabs-toggle">
                                                <a href="javascript:void(0);" class="item active" data-tab="1">Thông Tin Tuyển Dụng</a>
                                                <a href="javascript:void(0);" class="item" data-tab="2">Các công việc tương tự</a>
                                            </div>
                                            <div class="main-content">
                                                <div class="tab-content active" id="maps-tab-1">
                                                    <div class="box-about">
                                                        <div class="title-h4">
                                                            <h4>Giới thiệu về công ty</h4>
                                                        </div>
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-du-lich-anh-sao-thien-ast-travel.35A7769F.html" target="_blank">
                                    <img
									class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot7/167327/110x55/141932ast_iatalogosizelo-n.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL ">
                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <h5>Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-info">
                                                        <div class="title-h4">
                                                            <h4>Thông Tin Tuyển Dụng</h4>
                                                        </div>
                                                        <div class="content">
                                                            <p class="blue">KẾ TOÁN NỢ PHẢI THU</p>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Cấp bậc</td>
                                                                        <td>Nhân viên</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Lương</td>
                                                                        <td>$ 8,000,000 - 15,000,000 VND
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Hết hạn nộp</td>
                                                                        <td>11/12/2022</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ngành nghề</td>
                                                                        <td>
                                                                            <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html">
                                                                                                        Hành chính / Thư ký
                                                                                                        ,                                                </a>
                                                                            <a href="https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html">
                                                                                                        Kế toán / Kiểm toán
                                                                                                        ,                                                </a>
                                                                            <a href="https://careerbuilder.vn/viec-lam/du-lich-c34-vi.html">
                                                                                                        Du lịch
                                                                                                                                                        </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Kinh nghiệm</td>
                                                                        <td>
                                                                            2 - 5 Năm
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="box-local">
                                                        <div class="title-h4">
                                                            <h4>Địa điểm</h4>
                                                        </div>
                                                        <div class="content">
                                                            <p>Hồ Chí Minh</p>
                                                            <ul class="clearall">
                                                                <li>
                                                                    <em class="mdi mdi-map-marker"></em>
                                                                    <a href="javascript:void(0);" onclick="movetoCenter(0)">57 Trần Quốc Thảo, Phường Võ Thị Sáu, Quận 3, Thành phố Hồ Chí Minh</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="box-apply ">
                                                        <a href="javascript:void(0);" class="btn-gradient btnApplyClick">
                                    Nộp Đơn Ứng Tuyển
                                </a>
                                                    </div>

                                                    <div class="box-contact">
                                                        <ul>
                                                            <li>
                                                                <a class="toollips save-job chk_save_35BB02B3 " href="javascript:void(0);" data-id="35BB02B3" onclick="popuplogin()">
    <i class="mdi mdi-heart-outline"></i>
    	<div class="toolip">
		<p>Lưu việc làm</p>
	</div>
    </a>
                                                            </li>
                                                            <li> <a class="email" href="javascript:void(0);" onclick="showboxJobalert()"><i class="mdi mdi-email"></i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="tab-content" id="maps-tab-2">
                                                    <section class="jobs-side-list"></section>
                                                    <div class="jobs-list">


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-dtc.35A74C18.html" target="_blank" title="Công Ty TNHH Thương Mại Dịch Vụ DTC">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot0/156440/67x67/103718logophu.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH Thương Mại Dịch Vụ DTC">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="KẾ TOÁN CÔNG NỢ PHẢI THU/PHẢI TRẢ" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-thu-phai-tra.35BACD87.html?s=rec">KẾ TOÁN CÔNG NỢ PHẢI THU/PHẢI TRẢ</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">Công Ty TNHH Thương Mại Dịch Vụ DTC</p>
                                                                        <p class="salary">$ Cạnh tranh</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-truyen-thong-3t.35A8685F.html" target="_blank" title="CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot5/229215/67x67/130128capture-002.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="KẾ TOÁN CÔNG NỢ PHẢI THU TRẢ" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-thu-tra.35BA6E68.html?s=rec">KẾ TOÁN CÔNG NỢ PHẢI THU TRẢ</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T</p>
                                                                        <p class="salary">$ 8 Tr - 12 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-maison-retail-management-international.35A7715A.html" target="_blank" title="CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot8/165978/67x67/112655maisonrmilogo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="HCM - Nhân Viên Kế Toán Phải Thu" href="https://careerbuilder.vn/vi/tim-viec-lam/hcm-nhan-vien-ke-toan-phai-thu.35BA82C3.html?s=rec">HCM - Nhân Viên Kế Toán Phải Thu</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL</p>
                                                                        <p class="salary">$ Cạnh tranh</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-ky-thuat-viet-son.35A7C753.html" target="_blank" title="CÔNG TY CP KỸ THUẬT VIỆT SƠN">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot7/187987/67x67/124531logo_vs-002.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CP KỸ THUẬT VIỆT SƠN">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="Nhân Viên Kế Toán Công Nợ Phải Thu" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-thu.35BAFB5D.html?s=rec">Nhân Viên Kế Toán Công Nợ Phải Thu</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">CÔNG TY CP KỸ THUẬT VIỆT SƠN</p>
                                                                        <p class="salary">$ 9 Tr - 11 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sx-va-tm-quan-dat.35A54CC9.html" target="_blank" title="Công Ty TNHH SX Và TM Quân Đạt">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employers/25545/67x67/83710taixuong.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH SX Và TM Quân Đạt">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="Nhân viên Kế toán - Công nợ phải thu" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-thu.35BAE166.html?s=rec">Nhân viên Kế toán - Công nợ phải thu</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">Công Ty TNHH SX Và TM Quân Đạt</p>
                                                                        <p class="salary">$ 10 Tr - 15 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-phan-phoi-t-k.35A50AB9.html" target="_blank" title="Công Ty CP Phân Phối T.K.">
                                        <img class="lazy-hidden" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty CP Phân Phối T.K.">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="Kế Toán Viên (Ngân hàng / Công nợ phải thu / phải trả / Kế toán kho)" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-vien-ngan-hang-cong-no-phai-thu-phai-tra-ke-toan-kho.35BA73A5.html?s=rec">Kế Toán Viên (Ngân hàng / Công nợ phải thu / phải trả / Kế toán kho)</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">Công Ty CP Phân Phối T.K.</p>
                                                                        <p class="salary">$ 8 Tr - 10 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/vascara-group.35A67947.html" target="_blank" title="Vascara Group">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot1/102471/67x67/173020logo1.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Vascara Group">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="Kế toán công nợ phải trả" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-tra.35BACEF9.html?s=rec">Kế toán công nợ phải trả</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">Vascara Group</p>
                                                                        <p class="salary">$ 8 Tr - 12 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thoi-trang-my-pham-duy-anh-dafc.35A52C9D.html" target="_blank" title="Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employers/17309/67x67/141952dafc-logo-chuky-new-02.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="Kế Toán Công Nợ Phải Trả" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-tra.35BAFBAE.html?s=rec">Kế Toán Công Nợ Phải Trả</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)</p>
                                                                        <p class="salary">$ 12 Tr - 15 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-ktg-electric.35A8A3A2.html" target="_blank" title="CÔNG TY CỔ PHẦN  KTG ELECTRIC">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot6/244386/67x67/135946ktge_logocongty.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN  KTG ELECTRIC">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="Nhân viên kế toán công nợ phải trả" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-tra.35BA8810.html?s=rec">Nhân viên kế toán công nợ phải trả</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">CÔNG TY CỔ PHẦN KTG ELECTRIC</p>
                                                                        <p class="salary">$ 8 Tr - 12 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image">
                                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/aa-corporation.35A4EDE4.html" target="_blank" title="AA Corporation">
                                        <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employers/1252/67x67/151201aacorp.gif" src="../kiemviecv32/images/graphics/blank.gif" alt="AA Corporation">
                                    </a>
                                                                </div>
                                                                <div class="figcaption">
                                                                    <div class="timeago"></div>
                                                                    <div class="title"><a target="_blank" title="Nhân viên Kế toán phải trả hóa đơn (AP)" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-phai-tra-hoa-don-ap.35BADEC3.html?s=rec">Nhân viên Kế toán phải trả hóa đơn (AP)</a></div>
                                                                    <div class="caption">
                                                                        <p class="company-name">AA Corporation</p>
                                                                        <p class="salary">$ Cạnh tranh</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script src='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.js'></script>
                                <link href='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.css' rel='stylesheet' />

                              
                              
                            </div>
                            <div class="tab-content" id="tab-2"></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-custom-xxl-3">
                        <div class="side-wrapper">
                            <div class="banner-ad">
                                <script type='text/javascript'>
                                    OA_show(854);
                                </script>
                            </div>


                            <div class="similar-jobs">
                                <p>Các công việc tương tự</p>
                            </div>
                            <section class="jobs-side-list">
                                <div class="jobs-list">
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-dtc.35A74C18.html" target="_blank" title="Công Ty TNHH Thương Mại Dịch Vụ DTC"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot0/156440/67x67/103718logophu.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH Thương Mại Dịch Vụ DTC"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-thu-phai-tra.35BACD87.html" target="_blank" title="KẾ TOÁN CÔNG NỢ PHẢI THU/PHẢI TRẢ"> KẾ TOÁN CÔNG NỢ PHẢI THU/PHẢI TRẢ </a>                                                    </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-dtc.35A74C18.html" title="Công Ty TNHH Thương Mại Dịch Vụ DTC">Công Ty TNHH Thương Mại Dịch Vụ DTC</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương:Cạnh tranh</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-truyen-thong-3t.35A8685F.html" target="_blank" title="CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot5/229215/67x67/130128capture-002.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-thu-tra.35BA6E68.html" target="_blank" title="KẾ TOÁN CÔNG NỢ PHẢI THU TRẢ"> KẾ TOÁN CÔNG NỢ PHẢI THU TRẢ </a> </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-truyen-thong-3t.35A8685F.html" title="CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T">CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: 8 Tr - 12 Tr VND</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-maison-retail-management-international.35A7715A.html" target="_blank" title="CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot8/165978/67x67/112655maisonrmilogo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/hcm-nhan-vien-ke-toan-phai-thu.35BA82C3.html" target="_blank" title="HCM - Nhân Viên Kế Toán Phải Thu"> HCM - Nhân Viên Kế Toán Phải Thu </a>                                                    </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-maison-retail-management-international.35A7715A.html" title="CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL">CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương:Cạnh tranh</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-ky-thuat-viet-son.35A7C753.html" target="_blank" title="CÔNG TY CP KỸ THUẬT VIỆT SƠN"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot7/187987/67x67/124531logo_vs-002.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CP KỸ THUẬT VIỆT SƠN"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-thu.35BAFB5D.html" target="_blank" title="Nhân Viên Kế Toán Công Nợ Phải Thu"> Nhân Viên Kế Toán Công Nợ Phải Thu </a>                                                    </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-ky-thuat-viet-son.35A7C753.html" title="CÔNG TY CP KỸ THUẬT VIỆT SƠN">CÔNG TY CP KỸ THUẬT VIỆT SƠN</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: 9 Tr - 11 Tr VND</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sx-va-tm-quan-dat.35A54CC9.html" target="_blank" title="Công Ty TNHH SX Và TM Quân Đạt"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employers/25545/67x67/83710taixuong.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH SX Và TM Quân Đạt"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-thu.35BAE166.html" target="_blank" title="Nhân viên Kế toán - Công nợ phải thu"> Nhân viên Kế toán - Công nợ phải thu </a>                                                    </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sx-va-tm-quan-dat.35A54CC9.html" title="Công Ty TNHH SX Và TM Quân Đạt">Công Ty TNHH SX Và TM Quân Đạt</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: 10 Tr - 15 Tr VND</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-phan-phoi-t-k.35A50AB9.html" target="_blank" title="Công Ty CP Phân Phối T.K."> <img  class="lazy-bg" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty CP Phân Phối T.K."> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-vien-ngan-hang-cong-no-phai-thu-phai-tra-ke-toan-kho.35BA73A5.html" target="_blank" title="Kế Toán Viên (Ngân hàng / Công nợ phải thu / phải trả / Kế toán kho)"> Kế Toán Viên (Ngân hàng / Công nợ phải thu / phải trả / Kế toán kho) </a>                                                    </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-phan-phoi-t-k.35A50AB9.html" title="Công Ty CP Phân Phối T.K.">Công Ty CP Phân Phối T.K.</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: 8 Tr - 10 Tr VND</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/vascara-group.35A67947.html" target="_blank" title="Vascara Group"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot1/102471/67x67/173020logo1.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Vascara Group"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-tra.35BACEF9.html" target="_blank" title="Kế toán công nợ phải trả"> Kế toán công nợ phải trả </a> </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/vascara-group.35A67947.html" title="Vascara Group">Vascara Group</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: 8 Tr - 12 Tr VND</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thoi-trang-my-pham-duy-anh-dafc.35A52C9D.html" target="_blank" title="Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employers/17309/67x67/141952dafc-logo-chuky-new-02.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-tra.35BAFBAE.html" target="_blank" title="Kế Toán Công Nợ Phải Trả"> Kế Toán Công Nợ Phải Trả </a> </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thoi-trang-my-pham-duy-anh-dafc.35A52C9D.html" title="Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)">Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: 12 Tr - 15 Tr VND</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-ktg-electric.35A8A3A2.html" target="_blank" title="CÔNG TY CỔ PHẦN  KTG ELECTRIC"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot6/244386/67x67/135946ktge_logocongty.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN  KTG ELECTRIC"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-tra.35BA8810.html" target="_blank" title="Nhân viên kế toán công nợ phải trả"> Nhân viên kế toán công nợ phải trả </a>                                                    </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-ktg-electric.35A8A3A2.html" title="CÔNG TY CỔ PHẦN  KTG ELECTRIC">CÔNG TY CỔ PHẦN  KTG ELECTRIC</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: 8 Tr - 12 Tr VND</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/aa-corporation.35A4EDE4.html" target="_blank" title="AA Corporation"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employers/1252/67x67/151201aacorp.gif" src="../kiemviecv32/images/graphics/blank.gif" alt="AA Corporation"> </a>                                                </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-phai-tra-hoa-don-ap.35BADEC3.html" target="_blank" title="Nhân viên Kế toán phải trả hóa đơn (AP)"> Nhân viên Kế toán phải trả hóa đơn (AP) </a>                                                    </div>
                                                <div class="caption">
                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/aa-corporation.35A4EDE4.html" title="AA Corporation">AA Corporation</a>
                                                    <p class="salary"><em class="fa fa-usd"></em>Lương:Cạnh tranh</p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>Hồ Chí Minh</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more"><a href="https://careerbuilder.vn/viec-lam-tuong-tu/KẾ-TOÁN-NỢ-PHẢI-THU-tai-ho-chi-minh-kl8-vi.html" title="jobs recommend">Xem tất cả</a></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="login-modal" style="display: none">
            <div class="modal-title">
                <p>Vui lòng đăng nhập để thực hiện chức năng này</p>
            </div>
            <div class="modal-body">
                <form method="POST" id="popup_login_form" action="https://careerbuilder.vn/vi/jobseekers/member/login" autocomplete="off">
                    <div class="row">
                        <div class="form-group col-12">
                            <input type="text" id="username" name="username" placeholder="Username / Email" autocomplete="off">
                        </div>
                        <div class="form-group col-8">
                            <input type="password" name="password" id="password" placeholder="Mật khẩu" autocomplete="off">
                        </div>
                        <div class="form-group col-4">
                            <input type="hidden" name="csrf_token" value="c309fd88e4ebe866d359fc037715f4d39b27c44feecb74cbd4bc24a24e6a5a53" />
                            <button type="submit">Đăng nhập</button>
                        </div>
                    </div>

                </form>
                <div class="sign-in-by"><span>Đăng nhập bằng:</span>
                    <ul class="list-follow">
                        <li><a class="fb" href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><em class="fa fa-facebook"></em>Facebook</a></li>
                        <li><a class="gg" href="javascript:void(0);" onclick="popupapi('google','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5nb29nbGU=');"><em class="fa fa-google"></em>Google</a></li>
                    </ul>
                </div>
                <a class="register" href="https://careerbuilder.vn/vi/jobseekers/register" title="Đăng ký">Đăng ký </a><a class="forget-password" href="https://careerbuilder.vn/vi/jobseekers/forgotpassword" title="Quên mật khẩu?" rel="nofollow">Quên mật khẩu?</a>
            </div>
        </div>
       

        <div class="apply-job-modal" id="apply-job-modal" style="display: none">
            <h3>Apply for: <span class="job-title" id="span_title">KẾ TOÁN NỢ PHẢI THU</span></h3>
            <h4>Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL </h4>

            <div class="login-form">
                <form id="frmLogin" name="frmLogin" method="POST" action="https://careerbuilder.vn/vi/jobseekers/member/login">
                    <p class="note"> Thành viên đăng nhập <span class="note" style="font-weight:100">(Nếu bạn đã có hồ sơ tại CareerBuilder)</span></p>
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="username" value="" title="Email">
                        <span class="error_username"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Mật khẩu">
                        <span class="error_password"></span>
                    </div>
                    <div class="form-group form-submit">
                        <input type="hidden" name="csrf_token_apply" value="e45e642aa6ebc22e31fa3c249b5c93966da1a2b09217ff690065f0f1b261d46e" />
                        <input type="submit" value="Sign in and Apply">
                    </div>
                </form>
            </div>
            <div class="apply-not-login">
                <strong>Nộp đơn ứng tuyển nhanh không cần đăng ký tài khoản</strong>
                <p class="note">Bạn có thể nộp đơn ứng tuyển không cần đăng nhập hoặc chưa là thành viên của CareerBuilder.</p>
                <div class="btn-group">
                    <a class="btn-apply-non-member" id="apply_url" href="https://careerbuilder.vn/vi/jobseekers/jobs/apply?s=cbnon&job_id=35BB02B3" rel="nofollow">Ứng Tuyển Ngay</a>
                    <span class="or-text">hoặc</span>
                    <a class="btn-apply-facebook" href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaz9hcHBseV91cmw9aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvam9icy9hcHBseT9qb2JfaWQ9MzVCQjAyQjM=');"
                        rel="nofollow"> Apply with <strong>Facebook</strong><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>


      
        <input type="hidden" value="" name="from_action" id="from_action" />
   
 


        <style>
            /*industry-location.css*/

            .industy-location {
                display: -ms-flexbox;
                display: flex;
                margin-bottom: 40px
            }

            .box-job-type h4 {
                color: #333;
                font-weight: 600;
                margin-bottom: 15px;
            }

            .box-job-type {
                height: 100%;
                background: rgba(147, 209, 254, 0.3);
                border-radius: 5px;
                padding: 20px 25px;
            }

            .box-job-type ul li a {
                color: #666;
                font-weight: normal;
                font-size: 14.5px;
            }

            .box-job-type ul li a:hover {
                color: #00b2a3
            }

            .box-job-type ul {
                height: 200px;
                overflow-y: auto;
                margin-right: -25px;
                scrollbar-width: thin;
                scrollbar-color: #00b2a3 #cdcdcd
            }

            .box-job-type ul::-webkit-scrollbar {
                width: 6px;
                background: none;
            }

            .box-job-type ul::-webkit-scrollbar-thumb {
                background: #cdcdcd;
                border-radius: 6px;
            }

            .box-job-type ul li:not(:last-child) {
                margin-bottom: 4px;
            }

            .box-job-type ul li a:hover {
                text-decoration: none;
            }
        </style>
        <div class="back-drop"></div>
        <div class="industy-location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="box-job-type">
                            <h4>
                                Tìm việc làm theo ngành nghề
                            </h4>
                            <ul>
                                <li><a href='https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html' title='Việc làm Kế toán'>Việc làm Kế toán</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/xay-dung-c8-vi.html' title='Việc làm Xây dựng'>Việc làm Xây dựng</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/an-ninh-bao-ve-c51-vi.html' title='Việc làm Bảo Vệ'>Việc làm Bảo Vệ</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/ngan-hang-c19-vi.html' title='Việc làm Ngân hàng'>Việc làm Ngân hàng</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/nong-nghiep-c5-vi.html' title='Việc làm Nông nghiệp'>Việc làm Nông nghiệp</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/cong-nghe-sinh-hoc-c69-vi.html' title='Việc làm Công nghệ sinh học'>Việc làm Công nghệ sinh học</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/thuy-san-hai-san-c49-vi.html' title='Việc làm Thủy sản'>Việc làm Thủy sản</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/cong-nghe-thuc-pham-dinh-duong-c70-vi.html' title='Việc làm Công nghệ thực phẩm'>Việc làm Công nghệ thực phẩm</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/co-khi-o-to-tu-dong-hoa-c14-vi.html' title='Việc làm Cơ khí'>Việc làm Cơ khí</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/tiep-thi-marketing-c4-vi.html' title='Việc làm Marketing'>Việc làm Marketing</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/xuat-nhap-khau-c18-vi.html' title='Việc làm Xuất nhập khẩu'>Việc làm Xuất nhập khẩu</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/moi-truong-c16-vi.html' title='Việc làm Môi trường'>Việc làm Môi trường</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/nhan-su-c22-vi.html' title='Việc làm Nhân sự'>Việc làm Nhân sự</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/co-khi-o-to-tu-dong-hoa-c14-vi.html' title='Việc làm Ô tô'>Việc làm Ô tô</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/bat-dong-san-c28-vi.html' title='Việc làm Bất động sản'>Việc làm Bất động sản</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/nha-hang-khach-san-c29-vi.html' title='Việc làm Khách sạn'>Việc làm Khách sạn</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/hoa-hoc-c41-vi.html' title='Việc làm Hóa học'>Việc làm Hóa học</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/du-lich-c34-vi.html' title='Việc làm Du lịch'>Việc làm Du lịch</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/dau-khi-c26-vi.html' title='Việc làm Dầu khí'>Việc làm Dầu khí</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html' title='Việc làm Hành chính'>Việc làm Hành chính</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/ban-hang-kinh-doanh-c31-vi.html' title='Việc làm Kinh doanh'>Việc làm Kinh doanh</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/co-khi-o-to-tu-dong-hoa-c14-vi.html' title='Việc làm Tự động hóa'>Việc làm Tự động hóa</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/chung-khoan-c46-vi.html' title='Việc làm Chứng khoán'>Việc làm Chứng khoán</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/van-chuyen-giao-nhan-kho-van-c33-vi.html' title='Việc làm Kho vận'>Việc làm Kho vận</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/thu-mua-vat-tu-c43-vi.html' title='Việc làm Thu mua'>Việc làm Thu mua</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/ban-hang-kinh-doanh-c31-vi.html' title='Việc làm Bán hàng'>Việc làm Bán hàng</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/det-may-da-giay-thoi-trang-c39-vi.html' title='Việc làm Dệt may'>Việc làm Dệt may</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/tai-chinh-dau-tu-c59-vi.html' title='Việc làm Tài chính'>Việc làm Tài chính</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/y-te-cham-soc-suc-khoe-c56-vi.html' title='Việc làm Y tế'>Việc làm Y tế</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/dien-dien-tu-dien-lanh-c48-vi.html' title='Việc làm Điện lạnh'>Việc làm Điện lạnh</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/bao-hiem-c23-vi.html' title='Việc làm Bảo hiểm'>Việc làm Bảo hiểm</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/lao-dong-pho-thong-c44-vi.html' title='Việc làm Lao động phổ thông'>Việc làm Lao động phổ thông</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/luat-phap-ly-c24-vi.html' title='Việc làm Pháp lý'>Việc làm Pháp lý</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/chan-nuoi-thu-y-c52-vi.html' title='Việc làm Thú y'>Việc làm Thú y</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/nha-hang-khach-san-c29-vi.html' title='Việc làm Nhà hàng'>Việc làm Nhà hàng</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/an-toan-lao-dong-c58-vi.html' title='Việc làm An toàn lao động'>Việc làm An toàn lao động</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/bao-tri-sua-chua-c71-vi.html' title='Việc làm Bảo trì'>Việc làm Bảo trì</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/giao-duc-dao-tao-c13-vi.html' title='Việc làm Giáo dục'>Việc làm Giáo dục</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/phi-chinh-phu-phi-loi-nhuan-c20-vi.html' title='Việc làm Phi chính phủ'>Việc làm Phi chính phủ</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/my-thuat-nghe-thuat-thiet-ke-c11-vi.html' title='Việc làm Thiết kế'>Việc làm Thiết kế</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/quang-cao-doi-ngoai-truyen-thong-c67-vi.html' title='Việc làm Truyền Thông'>Việc làm Truyền Thông</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/trac-dia-dia-chat-c54-vi.html' title='Việc làm Trắc địa'>Việc làm Trắc địa</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/dien-dien-tu-dien-lanh-c48-vi.html' title='Việc làm Điện tử'>Việc làm Điện tử</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/san-xuat-van-hanh-san-xuat-c25-vi.html' title='Việc làm Sản xuất'>Việc làm Sản xuất</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/dien-dien-tu-dien-lanh-c48-vi.html' title='Việc làm Điện'>Việc làm Điện</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/lam-nghiep-c50-vi.html' title='Việc làm Lâm Nghiệp'>Việc làm Lâm Nghiệp</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/my-thuat-nghe-thuat-thiet-ke-c11-vi.html' title='Việc làm Mỹ thuật'>Việc làm Mỹ thuật</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/chan-nuoi-thu-y-c52-vi.html' title='Việc làm Chăn nuôi'>Việc làm Chăn nuôi</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/in-an-xuat-ban-c64-vi.html' title='Việc làm In ấn'>Việc làm In ấn</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html' title='Việc làm Kiểm toán'>Việc làm Kiểm toán</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/quang-cao-doi-ngoai-truyen-thong-c67-vi.html' title='Việc làm Quảng cáo'>Việc làm Quảng cáo</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/hang-khong-c60-vi.html' title='Việc làm Hàng không'>Việc làm Hàng không</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/truyen-hinh-bao-chi-bien-tap-c66-vi.html' title='Việc làm Biên tập'>Việc làm Biên tập</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/in-an-xuat-ban-c64-vi.html' title='Việc làm Xuất bản'>Việc làm Xuất bản</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/duoc-pham-c7-vi.html' title='Việc làm Dược phẩm'>Việc làm Dược phẩm</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/giai-tri-c15-vi.html' title='Việc làm Giải trí'>Việc làm Giải trí</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/my-thuat-nghe-thuat-thiet-ke-c11-vi.html' title='Việc làm Nghệ thuật'>Việc làm Nghệ thuật</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/thong-ke-c36-vi.html' title='Việc làm Thống kê'>Việc làm Thống kê</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/bien-phien-dich-c38-vi.html' title='Việc làm Biên phiên dịch'>Việc làm Biên phiên dịch</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/truyen-hinh-bao-chi-bien-tap-c66-vi.html' title='Việc làm Báo chí'>Việc làm Báo chí</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/buu-chinh-vien-thong-c32-vi.html' title='Việc làm Bưu chính viễn thông'>Việc làm Bưu chính viễn thông</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/y-te-cham-soc-suc-khoe-c56-vi.html' title='Việc làm Chăm sóc sức khỏe'>Việc làm Chăm sóc sức khỏe</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/van-chuyen-giao-nhan-kho-van-c33-vi.html' title='Việc làm Giao nhận'>Việc làm Giao nhận</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/hang-hai-c61-vi.html' title='Việc làm Hàng hải'>Việc làm Hàng hải</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/kien-truc-c6-vi.html' title='Việc làm Kiến trúc'>Việc làm Kiến trúc</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/luat-phap-ly-c24-vi.html' title='Việc làm Luật'>Việc làm Luật</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html' title='Việc làm Thư ký'>Việc làm Thư ký</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/thu-vien-c57-vi.html' title='Việc làm Thư viện'>Việc làm Thư viện</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/det-may-da-giay-thoi-trang-c39-vi.html' title='Việc làm Thời trang'>Việc làm Thời trang</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/thuc-pham-do-uong-c21-vi.html' title='Việc làm Thực phẩm & Đồ uống'>Việc làm Thực phẩm & Đồ uống</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/tiep-thi-marketing-c4-vi.html' title='Việc làm Tiếp thị'>Việc làm Tiếp thị</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/truyen-hinh-bao-chi-bien-tap-c66-vi.html' title='Việc làm Truyền hình'>Việc làm Truyền hình</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/tu-van-c9-vi.html' title='Việc làm Tư vấn'>Việc làm Tư vấn</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/to-chuc-su-kien-c68-vi.html' title='Việc làm Tổ chức sự kiện'>Việc làm Tổ chức sự kiện</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/tai-chinh-dau-tu-c59-vi.html' title='Việc làm Đầu tư'>Việc làm Đầu tư</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/trac-dia-dia-chat-c54-vi.html' title='Việc làm Địa Chất'>Việc làm Địa Chất</a></li>
                                <li><a href='https://careerbuilder.vn/viec-lam/giao-duc-dao-tao-c13-vi.html' title='Việc làm Đào tạo'>Việc làm Đào tạo</a></li>



                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-job-type">
                            <h4>
                                Việc làm theo khu vực
                            </h4>
                            <ul>
                                <li><a href="https://careerbuilder.vn/viec-lam/ho-chi-minh-l8-vi.html" title="Việc làm Hồ Chí Minh">Việc làm Hồ Chí Minh</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ha-noi-l4-vi.html" title="Việc làm Hà Nội">Việc làm Hà Nội</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/binh-duong-l650-vi.html" title="Việc làm Bình Dương">Việc làm Bình Dương</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/dong-nai-l61-vi.html">Việc làm Đồng Nai</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/long-an-l72-vi.html" title="Việc làm Long An">Việc làm Long An</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/da-nang-l511-vi.html">Việc làm Đà Nẵng</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/hai-phong-l31-vi.html" title="Việc làm Hải Phòng">Việc làm Hải Phòng</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/hung-yen-l321-vi.html">Việc làm Hưng Yên</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ba-ria-vung-tau-l64-vi.html" title="Việc làm Bà Rịa - Vũng Tàu">Việc làm Bà Rịa - Vũng Tàu</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/bac-ninh-l241-vi.html" title="Việc làm Bắc Ninh">Việc làm Bắc Ninh</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/can-tho-l71-vi.html">Việc làm Cần Thơ</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/tay-ninh-l66-vi.html" title="Việc làm Tây Ninh">Việc làm Tây Ninh</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/quang-ngai-l55-vi.html">Việc làm Quãng Ngải</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/an-giang-l76-vi.html" title="Việc làm An Giang">Việc làm An Giang</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/gia-lai-l59-vi.html">Việc làm Gia Lai</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/thanh-hoa-l37-vi.html" title="Việc làm Thanh Hóa">Việc làm Thanh Hóa</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ben-tre-l75-vi.html">Việc làm Bến Tre</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/nam-dinh-l350-vi.html" title="Việc làm Nam Định">Việc làm Nam Định</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ca-mau-l78-vi.html">Việc làm Cà Mau</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/hai-duong-l320-vi.html" title="Việc làm Hải Dương">Việc làm Hải Dương</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/vinh-phuc-l211-vi.html">Việc làm Vĩnh Phúc</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/binh-dinh-l56-vi.html" title="Việc làm Bình Định">Việc làm Bình Định</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ha-nam-l351-vi.html">Việc làm Hà Nam</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/kon-tum-l60-vi.html" title="Việc làm Kon Tum">Việc làm Kon Tum</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ninh-thuan-l68-vi.html">Việc làm Ninh Thuận</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/soc-trang-l79-vi.html" title="Việc làm Sóc Trăng">Việc làm Sóc Trăng</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/thai-binh-l36-vi.html">Việc làm Thái Bình</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/thai-nguyen-l280-vi.html" title="Việc làm Thái Nguyên">Việc làm Thái Nguyên</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/tien-giang-l73-vi.html" title="Việc làm Tiền Giang">Việc làm Tiền Giang</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/vinh-long-l70-vi.html" title="Việc làm Vĩnh Long">Việc làm Vĩnh Long</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/dong-thap-l67-vi.html">Việc làm Đồng Tháp</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/binh-thuan-l62-vi.html" title="Việc làm Bình Thuận">Việc làm Bình Thuận</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/bac-lieu-l781-vi.html">Việc làm Bạc Liêu</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/bac-giang-l240-vi.html" title="Việc làm Bắc Giang">Việc làm Bắc Giang</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ninh-binh-l30-vi.html">Việc làm Ninh Bình</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/tra-vinh-l74-vi.html" title="Việc làm Trà Vinh">Việc làm Trà Vinh</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/kien-giang-l77-vi.html">Việc làm Kiên Giang</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/nghe-an-l38-vi.html" title="Việc làm Nghệ An">Việc làm Nghệ An</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/binh-phuoc-l651-vi.html">Việc làm Bình Phước</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ha-tinh-l39-vi.html" title="Việc làm Hà Tĩnh">Việc làm Hà Tĩnh</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/phu-tho-l210-vi.html">Việc làm Phú Thọ</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/quang-nam-l510-vi.html" title="Việc làm Quảng Nam">Việc làm Quảng Nam</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/khanh-hoa-l58-vi.html">Việc làm Khánh Hòa</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/hau-giang-l780-vi.html" title="Việc làm Hậu Giang">Việc làm Hậu Giang</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/dak-lak-l50-vi.html">Việc làm Dak Lak</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/cao-bang-l26-vi.html" title="Việc làm Cao Bằng">Việc làm Cao Bằng</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ha-giang-l19-vi.html">Việc làm Hà Giang</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/hoa-binh-l18-vi.html" title="Việc làm Hòa Bình">Việc làm Hòa Bình</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/dien-bien-l900-vi.html" title="Việcl àm Điện Biên">Việc làm Điện Biên</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-job-type">
                            <h4>
                                Việc làm phổ biến
                            </h4>
                            <ul>
                                <li><a href="https://careerbuilder.vn/viec-lam/B%C3%A1n-th%E1%BB%9Di-gian-k-vi.html">Việc làm online tại nhà</a></li>
                                <li><span><a href="https://careerbuilder.vn/viec-lam/parttime-k-vi.html" title="Việc làm part time">Việc làm part-time</a></span></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Google-Adwords-k-vi.html"><span>Việc làm tại google</span></a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Freelancer-k-vi.html" title="Việc làm freelancer">Việc làm Freelancer</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/cntt-phan-mem-tai-ho-chi-minh-c1l8-vi.html" title="Việc làm it">Việc làm IT</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/T%C3%A0i-x%E1%BA%BF-ch%E1%BA%A1y-xe-7-ch%E1%BB%97-k-vi.html">Việc làm tài xế</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Nh%C3%A2n-vi%C3%AAn-h%C3%A0nh-ch%C3%ADnh-nh%C3%A2n-s%E1%BB%B1-k-vi.html">Việc làm hành chính nhân sự</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Thi%E1%BA%BFt-k%E1%BA%BF-%C4%91%E1%BB%93-h%E1%BB%8Da-k-vi.html">Việc làm thiết kế đồ họa</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/K%E1%BB%B9-s%C6%B0-x%C3%A2y-d%E1%BB%B1ng-k-vi.html">Việc làm kỹ sư xây dựng</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Nh%C3%A2n-Vi%C3%AAn-Telesale-k-vi.html">Việc làm telesale</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/L%E1%BB%85-t%C3%A2n-k-vi.html">Việc làm lễ tân</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Nh%C3%A2n-Vi%C3%AAn-V%C4%83n-Ph%C3%B2ng-k-vi.html">Việc làm nhân viên văn phòng</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Gi%C3%A1o-vi%C3%AAn-ti%E1%BA%BFng-Anh-k-vi.html">Việc làm giáo viên tiếng anh</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/nh%C3%A2n-vi%C3%AAn-kinh-doanh-k-vi.html">Việc làm nhân viên kinh doanh</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-to%C3%A1n-tr%C6%B0%E1%BB%9Fng-k-vi.html">Việc làm kế toán trưởng</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/lao-dong-pho-thong-tai-ho-chi-minh-c44l8-vi.html">Việc làm lao động phổ thông</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Thi%E1%BA%BFt-k%E1%BA%BF-n%E1%BB%99i-th%E1%BA%A5t-k-vi.html">Việc làm thiết kế nội thất</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/IT-Helpdesk-k-vi.html">Việc làm it helpdesk</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/ki%E1%BB%83m-so%C3%A1t-n%E1%BB%99i-b%E1%BB%99-k-vi.html">Việc làm kiểm soát nội bộ</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/Thu-ng%C3%A2n-k-vi.html">Việc làm thu ngân</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/muc-luong-20trvnd-s20-vi.html">Việc làm lương cao</a></li>
                                <li><a href="https://careerbuilder.vn/viec-lam/quan-ly-dieu-hanh-c17-vi.html">Việc làm quản lý</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    



     


        <div class="back-drop"></div>
    </main>