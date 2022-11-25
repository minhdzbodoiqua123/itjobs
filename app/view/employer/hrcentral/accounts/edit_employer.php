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
        <script language="javascript" src="https://static.careerbuilder.vn/ckeditor445/ckeditor.js"></script>
        <script language="javascript" src="https://static.careerbuilder.vn/ckeditor445/adapters/jquery.js"></script>
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
                    <time>22-11-2022 22:12:40</time>
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
                            <li class="active"><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/edit_employer" alt="Thông tin công ty"><span>Thông tin công ty</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/edit_contact" alt="Thông tin liên hệ"><span>Thông tin liên hệ</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/worklocation" alt="Quản Lý Địa Điểm Làm Việc"><span>Quản Lý Địa Điểm Làm Việc</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/report_task_log" alt="Báo cáo tác vụ"><span>Báo cáo tác vụ</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/changepassword" alt="Đổi mật khẩu"><span>Đổi mật khẩu</span></a></li>
                        </ul>
                        <div class="tabslet-content active" id="tab-2">
                            <form name="editCompany" id="editCompany" action="" method="post" enctype="multipart/form-data">
                                <div class="main-application-information">
                                    <h2 class="title-application no-bg no-pad">
                                        CHỈNH SỬA THÔNG TIN CÔNG TY</h2>
                                    <h2 class="title-application">THÔNG TIN CÔNG TY</h2>
                                    <div class="form-wrap">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="text" name="EMP_NAME" id="EMP_NAME" value="Công ty it minh nguyễn" maxlength="150" onkeyup="this.setAttribute('value', this.value);">
                                                    <label>Tên công ty   <font style="color: red">*</font></label>
                                                    <span class="error error_EMP_NAME"> </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="noti mt-20"><em class="material-icons">info</em>
                                                    <div class="toolip">
                                                        <p>Vui lòng nhập tối thiểu 3 ký tự!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-select">
                                                    <label>Tổng số nhân viên</label>
                                                    <select name="EMP_TOTALSTAFF">
                                                                <option value="">Chọn số nhân viên</option>
                                                                                                                                    <option value="Ít hơn 10" >Ít hơn 10</option>
                                                                                                                                    <option value="10-20" >10-20</option>
                                                                                                                                    <option value="25-99" >25-99</option>
                                                                                                                                    <option value="100-499" >100-499</option>
                                                                                                                                    <option value="500-999"  selected="selected">500-999</option>
                                                                                                                                    <option value="1.000-4.999" >1.000-4.999</option>
                                                                                                                                    <option value="5.000-9.999" >5.000-9.999</option>
                                                                                                                                    <option value="10.000-19.999" >10.000-19.999</option>
                                                                                                                                    <option value="20.000-49.999" >20.000-49.999</option>
                                                                                                                                    <option value="Nhiều hơn 50.000" >Nhiều hơn 50.000</option>
                                                                                                                               </select>
                                                    <span class="error error_EMP_TOTALSTAFF"> </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group form-select">
                                                    <label>Loại hình hoạt động</label>
                                                    <select name="Company_type" id="company_type" class="width_160">
                                                        <option value="">Vui lòng chọn</option>
                                                                                                                    <option value="6" >100% vốn nước ngoài</option>
                                                                                                                    <option value="4" selected="selected"
                                                            >Cá nhân</option>
                                                                                                                    <option value="7" >Công ty đa quốc gia</option>
                                                                                                                    <option value="2" >Cổ phần</option>
                                                                                                                    <option value="5" >Liên doanh</option>
                                                                                                                    <option value="1" >Nhà nước</option>
                                                                                                                    <option value="3" >Trách nhiệm hữu hạn</option>
                                                                                                                </select>
                                                    <span class="error error_Company_type"> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group form-select">
                                                        <label>Loại hình hoạt động</label>
                                                        <select name="Company_type" class="width_160">
                                                                                                                            <option value="0" >Array</option>
                                                                                                                            <option value="1" >Array</option>
                                                                                                                            <option value="2" >Array</option>
                                                                                                                            <option value="3" >Array</option>
                                                                                                                            <option value="4" selected="selected"
                                                                    >Array</option>
                                                                                                                            <option value="5" >Array</option>
                                                                                                                            <option value="6" >Array</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>-->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="text" name="EMP_WEBSITE" id="EMP_WEBSITE" value="" onkeyup="this.setAttribute('value', this.value);" maxlength="100">
                                                    <label>Website công ty</label>
                                                    <span class="error error_EMP_WEBSITE"> </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="text" name="EMP_TAXID" id="EMP_TAXID" value="" onkeyup="this.setAttribute('value', this.value);" maxlength="100">
                                                    <label>Mã số thuế</label>
                                                    <span class="error error_EMP_TAXID"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap logo-wrap">
                                        <div class="main-image">
                                            <div class="form-group">
                                                <p class="title-label">Logo</p>
                                            </div>
                                            <div class="list-image">
                                                <div class="image-item" id="logo_path">

                                                </div>
                                            </div>
                                            <div class="upload-img">
                                                <input type="file" id="logo" name="logo" value="">
                                                <input type="hidden" name="logo_h" id="logo_h" value="" />
                                                <input type="hidden" name="logo_old" id="logo_old" value="" />
                                                <input type="hidden" name="logo_new" id="logo_new" value="" />
                                                <label for="logo"><em class="material-icons">folder_open</em>Tải ảnh từ máy tính</label>
                                                <div class="noti"> <em class="material-icons">info </em>
                                                    <div class="toolip">
                                                        <p>Định dạng: gif, jpg, png, kích thước đẹp nhất 240x160px</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap banner-wrap">
                                        <div class="main-image">
                                            <div class="form-group">
                                                <p class="title-label">Cover/ Banner
                                                    <a class="btn-view-banner-location" href="https://static.careerbuilder.vn/themes/kiemviecv32/employersnews/images/graphics/cover-tip.jpg" class="line_bot fancybox"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/icons/icon_help.png" align="absmiddle" title="Click để xem vị trí của Cover / Banner">Click để xem vị trí của Cover / Banner </a></p>
                                            </div>
                                            <div class="list-image">
                                                <div class="image-item" id="image1_path">

                                                </div>
                                            </div>
                                            <div class="upload-img">
                                                <input type="file" name="image1" id="image1" value="" />
                                                <label for="image1"><em class="material-icons">folder_open</em>Tải ảnh từ máy tính</label>
                                                <input type="hidden" class="li_dmk_width252" name="image1_h" id="image1_h" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image1_old" id="image1_old" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image1_new" id="image1_new" value="" />
                                                <div class="noti"> <em class="material-icons">info </em>
                                                    <div class="toolip">
                                                        <p>Định dạng: *.gif, *.jpg, *.png. Kích thước đẹp nhất 1380x290px</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="form-group form-editor" id="div_jobdesc">
                                            <label>Giới thiệu về công ty   <font style="color: red">*</font></label>
                                            <textarea cols="80" rows="5" name="EMP_DESC" id="EMP_DESC" class="editor"><p>Ngân hàng Thương mại Cổ phần Quân đội (tên giao dịch tiếng Anh là Military Commercial Joint Stock Bank), gọi tắt là Ngân hàng Quân đội, viết tắt là MB, là một ngân hàng thương mại cổ phần của Việt Nam, một doanh nghiệp trực thuộc Bộ Quốc phòng.</p></textarea>
                                            <div class="note">
                                                <p>Vui lòng không nhập email,số điện thoại và số lượng kí tự phải lớn hơn 10
                                                </p>
                                            </div>
                                            <span class="error error_EMP_DESC"> </span>

                                            <div class="note">
                                                <p> </p>
                                            </div>
                                        </div>
                                        <div class="form-group form-editor" id="div_jobreq">
                                            <label>Thông điệp từ công ty</label>

                                            <textarea cols="80" rows="5" id="EMP_MESSAGE" name="EMP_MESSAGE" class="editor"></textarea>
                                            <div class="note">
                                                <p>Vui lòng không nhập email,số điện thoại và số lượng kí tự phải lớn hơn 10
                                                </p>
                                            </div>
                                            <span class="error error_EMP_MESSAGE"> </span>
                                            <div class="note">
                                                <p> </p>
                                            </div>
                                        </div>
                                        <div class="main-image">
                                            <div class="list-image">
                                                <div class="image-item" id="image2_path">

                                                </div>
                                            </div>
                                            <div class="upload-img">
                                                <input type="file" name="image2" id="image2" value="" />
                                                <label for="image2"><em class="material-icons">folder_open</em>Tải ảnh từ máy tính</label>
                                                <input type="hidden" class="li_dmk_width252" name="image2_h" id="image2_h" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image2_old" id="image2_old" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image2_new" id="image2_new" value="" />
                                                <div class="noti"> <em class="material-icons">info </em>
                                                    <div class="toolip">
                                                        <p>Định dạng: *.gif, *.jpg, *.png. Kích thước
                                                            <1mb</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="strPhoto" name="strPhoto" value="" />
                                    <input type="hidden" id="strPhotoDelete" name="strPhotoDelete" value="" />
                                    <input type="hidden" id="checkYouTube" name="checkYouTube" />
                                    <h2 class="title-application">Video và hình ảnh <span class="txt_required mả_left10">(Không bắt buộc)</span> </h2>
                                    <div class="form-wrap video-wrap">
                                        <div class="noti">
                                            <p> <em class="material-icons">info </em>Link video youtube</p>
                                            <div class="toolip">
                                                Nhập thêm video và hình ảnh giới thiệu về công ty sẽ thu hút ứng viên nộp đơn ứng tuyển. <br>Video và hình ảnh này sẽ được sử dụng chung cho tất cả
                                                <a class="line_bot fancybox" href="https://static.careerbuilder.vn/themes/kiemviecv32/employersnews/images/graphics/ex1.gif">thông tin tuyển dụng</a> và
                                                <a class="line_bot fancybox" href="https://static.careerbuilder.vn/themes/kiemviecv32/employersnews/images/graphics/ex2.gif">trang giới thiệu về công ty</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text">
                                                    <input type="text" placeholder="Link video youtube" id="strVideo" name="strVideo" onblur="checkYoutubeValid(0);" value="https://www.youtube.com/watch?v=ona6XcLmgcs&list=PLiyVagO7GfBE1j4vjp-QLc1KHR1LPIl3G&index=2">
                                                </div>
                                                <span class="error error_strVideo"> </span>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="noti mt-20">
                                                    <p> <em class="material-icons">info </em></p>
                                                    <div class="toolip">
                                                        Ví dụ: https://www.youtube.com/watch?v=egYcmuk3dso
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="preview"><a class="btn-preview" href="javascript:void(0);" onclick="checkYoutubeValid(1)">Xem trước</a></div>
                                        <div class="main-image">
                                            <div class="form-group">
                                                <p class="title-label">Hình ảnh <br /><span class="note2">(Tối đa 5 ảnh)</span></p>
                                            </div>
                                            <div class="list-image" id="list-image">
                                            </div>
                                            <div class="upload-img">
                                                <input type="file" id="filephoto" onchange="return ajaxPhotoUpload();">
                                                <label for="filephoto" class=""><em class="material-icons">folder_open</em>Tải Ảnh từ máy tính</label>
                                                <div class="noti"> <em class="material-icons">info </em>
                                                    <div class="toolip">
                                                        <div class="clear note2 pad_top8">- Hỗ trợ định dạng .jpg, .gif, .png; dung lượng mỗi ảnh không vượt quá 1mb</div>
                                                        <div class="clear note2">- Chiều cao mỗi ảnh phải >135px và
                                                            < 1,500px</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="show-video">
                                                <div class="form-group form-checkbox">
                                                    <input type="checkbox" id="isdisplay" name="isdisplay" value="1">
                                                    <label for="isdisplay"><strong>Hiển thị video và ảnh này trên trang giới thiệu về công ty</strong></label>
                                                    <span id="loading" class="img_loading" style="display:none"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/css/images/graphics/loading.gif"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                checkYoutubeValid();
                                                eventAfterAjax();
                                                deletePhotoCompany();
                                            });


                                            var is_execute_profile = false;

                                            function ajaxPhotoUpload() {
                                                $('#filephoto').prop('disabled', true);
                                                var strPhoto = $("#strPhoto").val();
                                                if (is_execute_profile)
                                                    return false;
                                                is_execute_profile = true;

                                                var file = $('#filephoto')[0].files;

                                                var formdata = false;
                                                if (window.FormData) {
                                                    formdata = new FormData();
                                                }
                                                formdata.append("filephoto", file[0]);
                                                $('#filephoto').val('');
                                                $.ajax({
                                                    url: 'https://careerbuilder.vn/vi/employers/postjobs/uploadphoto',
                                                    type: "POST",
                                                    data: formdata,
                                                    processData: false,
                                                    contentType: false,
                                                    dataType: 'json',
                                                    success: function(data) {
                                                        is_execute_profile = false;
                                                        if (typeof(data.error) != 'undefined') {
                                                            if (data.error != '') {
                                                                show_noti(2, data.error);
                                                            } else {
                                                                $("#list-image").append('<div class="image-item"><img src="' + data.path + '"><a class="btn-del-img company-btn-del-img" href="javascript:void(0);" data-src="' + data.msg + '" title="Xóa ảnh\"><em class="material-icons">clear</em></a></div>');
                                                                $('#isdisplay').prop('disabled', false);
                                                                if (strPhoto != '')
                                                                    strPhoto += ',';
                                                                strPhoto += data.msg;
                                                                $("#strPhoto").val(strPhoto);
                                                            }
                                                        }
                                                        eventAfterAjax();
                                                    }
                                                });

                                                return false;
                                            }

                                            function eventAfterAjax() {
                                                $("#loading").hide();
                                                var num = $("#strPhoto").val().split(",").length;
                                                if (num >= 5) {
                                                    $('#filephoto').prop('disabled', true);
                                                } else {
                                                    $('#filephoto').prop('disabled', false);
                                                }
                                            }


                                            function deletePhotoCompany() {
                                                $(document).on('click', ".company-btn-del-img", function() {
                                                    var name = $(this).data('src');
                                                    $(this).closest('.image-item').remove();
                                                    var strPhoto = $("#strPhoto").val();
                                                    var strPhotoDelete = $("#strPhotoDelete").val();
                                                    // Add in hidden delete
                                                    if (strPhotoDelete != '')
                                                        strPhotoDelete += ',';
                                                    strPhotoDelete += name;
                                                    $("#strPhotoDelete").val(strPhotoDelete);
                                                    // Remove in hidden upload
                                                    var posName = strPhoto.indexOf(name);
                                                    var posTemp = strPhoto.indexOf(',');
                                                    if (posName == 0) {
                                                        if (posTemp > 0)
                                                            name += ',';
                                                    } else {
                                                        name = ',' + name;
                                                    }
                                                    $("#strPhoto").val(strPhoto.replace(name, ''));
                                                    // Check exist image and video
                                                    checkYoutubeValid(2);
                                                    if ($("#strPhoto").val() == '' && $("#checkYouTube").val() == 'false') {
                                                        $('#isdisplay').prop('checked', false);
                                                        $('#isdisplay').prop('disabled', true);
                                                    }
                                                    $('#filephoto').prop('disabled', false);
                                                });
                                            }

                                            /* XÓA KHI UPDATE SAU */
                                            function ajaxPhotoDelete(name) {
                                                var strPhoto = $("#strPhoto").val();
                                                var strPhotoDelete = $("#strPhotoDelete").val();
                                                // Add in hidden delete
                                                if (strPhotoDelete != '')
                                                    strPhotoDelete += ',';
                                                strPhotoDelete += name;
                                                $("#strPhotoDelete").val(strPhotoDelete);
                                                // Remove in hidden upload
                                                var posName = strPhoto.indexOf(name);
                                                var posTemp = strPhoto.indexOf(',');
                                                if (posName == 0) {
                                                    if (posTemp > 0)
                                                        name += ',';
                                                } else {
                                                    name = ',' + name;
                                                }
                                                $("#strPhoto").val(strPhoto.replace(name, ''));
                                                // Check exist image and video
                                                checkYoutubeValid(2);
                                                if ($("#strPhoto").val() == '' && $("#checkYouTube").val() == 'false') {
                                                    $('#isdisplay').prop('checked', false);
                                                    $('#isdisplay').prop('disabled', true);
                                                }
                                                $('#filephoto').prop('disabled', false);
                                            }
                                            /* XÓA KHI UPDATE SAU */


                                            /* type 0: check message error, 1: check message error and show video, 2: check */
                                            function checkYoutubeValid(type) {
                                                var url = $('#strVideo').val();
                                                url = url.replace(/^\s+|\s+$/g, "");

                                                if (url != '') {
                                                    var pos = url.indexOf('youtube.com/watch?v=');
                                                    // Check youtube link valid before check video valid on server
                                                    if (pos < 0) {

                                                        if (type != 2) {
                                                            $('#eVideo').remove();
                                                            $('#strVideo').after('<span class="form-error" id="eVideo" generated="true" style="width:480px">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                        }
                                                        // Check exist image and video
                                                        if ($("#strPhoto").val() == '') {
                                                            $('#isdisplay').prop('checked', false);
                                                            $('#isdisplay').prop('disabled', true);
                                                        }

                                                        $('#checkYouTube').val('false');
                                                        return false;
                                                    }

                                                    $.ajax({
                                                        type: "POST",
                                                        url: domain + 'employers/postjobs/checklinkyoutube',
                                                        dataType: 'JSON',
                                                        data: 'link=' + url,
                                                        success: function(rs) {
                                                            if (rs == '0') {
                                                                // Message error when input link youtube
                                                                if (type != 2) {
                                                                    $('#eVideo').remove();
                                                                    $('#strVideo').after('<span class="form-error" id="eVideo" generated="true" style="width:480px">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');

                                                                }
                                                                // Check exist image and video
                                                                if ($("#strPhoto").val() == '') {
                                                                    $('#isdisplay').prop('checked', false);
                                                                    $('#isdisplay').prop('disabled', true);
                                                                }
                                                                $('#checkYouTube').val('false');



                                                                return false;
                                                            } else {

                                                                if (type != 2) {
                                                                    $('#eVideo').remove();
                                                                    $('#isdisplay').prop('disabled', false);
                                                                    // Check button view youtube
                                                                    if (type == 1) {
                                                                        $.fancybox.open({
                                                                            'closeExisting': true,
                                                                            'src': url.replace(new RegExp("watch\\?v=", "i"), 'embed/') + '?autoplay=1&rel=0',
                                                                            'type': 'iframe'
                                                                        });
                                                                    }
                                                                }
                                                                $('#checkYouTube').val('true');
                                                                return true;
                                                            }
                                                        }
                                                    });
                                                } else {
                                                    /* Don't input link youtube */
                                                    $('#eVideo').remove();
                                                    // check button view
                                                    if (type == 1) {
                                                        $('#strVideo').after('<span class="form-error" id="eVideo" generated="true" style="width:480px">Link video không dúng định dạng. Bạn vui lòng nhập lại.</span>');
                                                    }
                                                    // Check exist image and video
                                                    if ($("#strPhoto").val() == '') {
                                                        $('#isdisplay').prop('checked', false);
                                                        $('#isdisplay').prop('disabled', true);
                                                    }
                                                    $('#checkYouTube').val('false');
                                                    return false;
                                                }
                                            }
                                        </script>

                                        <h2 class="title-application">Phúc lợi</h2>
                                        <div class="checkbox-wrap">
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_2" name="BENEFIT_ID[]" value="2" checked="checked">
                                                        <label for="BENEFIT_ID_2"> <em class="fa fa-medkit"></em>Chế độ bảo hiểm</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_3" name="BENEFIT_ID[]" value="3" checked="checked">
                                                        <label for="BENEFIT_ID_3"> <em class="fa fa-plane"></em>Du Lịch</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_8" name="BENEFIT_ID[]" value="8" checked="checked">
                                                        <label for="BENEFIT_ID_8"> <em class="fa fa-usd"></em>Chế độ thưởng</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_9" name="BENEFIT_ID[]" value="9" checked="checked">
                                                        <label for="BENEFIT_ID_9"> <em class="fa fa-user-md"></em>Chăm sóc sức khỏe</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_10" name="BENEFIT_ID[]" value="10" checked="checked">
                                                        <label for="BENEFIT_ID_10"> <em class="fa fa-graduation-cap"></em>Đào tạo</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_11" name="BENEFIT_ID[]" value="11" checked="checked">
                                                        <label for="BENEFIT_ID_11"> <em class="fa fa-line-chart"></em>Tăng lương</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_1" name="BENEFIT_ID[]" value="1">
                                                        <label for="BENEFIT_ID_1"> <em class="fa fa-laptop"></em>Laptop</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_4" name="BENEFIT_ID[]" value="4">
                                                        <label for="BENEFIT_ID_4"> <em class="fa fa-money"></em>Phụ cấp</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_5" name="BENEFIT_ID[]" value="5">
                                                        <label for="BENEFIT_ID_5"> <em class="fa fa-taxi"></em>Xe đưa đón</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_6" name="BENEFIT_ID[]" value="6">
                                                        <label for="BENEFIT_ID_6"> <em class="fa fa-fighter-jet"></em>Du lịch nước ngoài</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_7" name="BENEFIT_ID[]" value="7">
                                                        <label for="BENEFIT_ID_7"> <em class="fa fa-black-tie"></em>Đồng phục</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_12" name="BENEFIT_ID[]" value="12">
                                                        <label for="BENEFIT_ID_12"> <em class="fa fa-credit-card"></em>Công tác phí</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_13" name="BENEFIT_ID[]" value="13">
                                                        <label for="BENEFIT_ID_13"> <em class="fa fa-money"></em>Phụ cấp thâm niên</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_14" name="BENEFIT_ID[]" value="14">
                                                        <label for="BENEFIT_ID_14"> <em class="fa fa-briefcase"></em>Nghỉ phép năm</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="form-group form-checkbox">
                                                        <input type="checkbox" class="" id="BENEFIT_ID_15" name="BENEFIT_ID[]" value="15">
                                                        <label for="BENEFIT_ID_15"> <em class="fa fa-heartbeat"></em>CLB thể thao</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noted">
                                            <p>
                                                <font style="color: red">*</font> Thông tin bắt buộc</p>
                                        </div>
                                        <div class="form-group form-submit form-continue">
                                            <a class="btn-cancel btn-preview-account-user" href="javascript:;" onclick="window.open('https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-it-minh-nguyen.35A94C80.html', '_blank'); return false;  ">
                                        Xem lại</a>
                                            <button class="btn-gradient btn-submit" type="submit" id="update_info_company_form" onclick="updateInfoCompany()">Cập nhật</button>
                                        </div>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        
      
    </main>