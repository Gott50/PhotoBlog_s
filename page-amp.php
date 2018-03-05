<?php
/**
 * The template for displaying your latest blog posts at the home directory
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoBlog_s
 */
?>
<!doctype html>
<html ⚡ <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

        <style amp-custom>
            html {
                font-family: sans-serif;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%; }

            body {
                margin: 0;
                min-height: 100vh;
                position: relative; }

            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            main,
            menu,
            nav,
            section,
            summary {
                display: block; }

            audio,
            canvas,
            progress,
            video {
                display: inline-block;
                vertical-align: baseline; }

            audio:not([controls]) {
                display: none;
                height: 0; }

            [hidden],
            template {
                display: none; }

            a {
                background-color: transparent; }

            a:active,
            a:hover {
                outline: 0; }

            abbr[title] {
                border-bottom: 1px dotted; }

            b,
            strong {
                font-weight: bold; }

            dfn {
                font-style: italic; }

            h1 {
                font-size: 2em;
                margin: 0.67em 0; }

            mark {
                background: #ff0;
                color: #000; }

            small {
                font-size: 80%; }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline; }

            sup {
                top: -0.5em; }

            sub {
                bottom: -0.25em; }

            img {
                border: 0; }

            svg:not(:root) {
                overflow: hidden; }

            figure {
                margin: 1em 40px; }

            hr {
                box-sizing: content-box;
                height: 0; }

            pre {
                overflow: auto; }

            code,
            kbd,
            pre,
            samp {
                font-family: monospace, monospace;
                font-size: 1em; }

            button,
            input,
            optgroup,
            select,
            textarea {
                color: inherit;
                font: inherit;
                margin: 0; }

            button {
                overflow: visible; }

            button,
            select {
                text-transform: none; }

            button,
            html input[type="button"],
            input[type="reset"],
            input[type="submit"] {
                -webkit-appearance: button;
                cursor: pointer; }

            button[disabled],
            html input[disabled] {
                cursor: default; }

            button::-moz-focus-inner,
            input::-moz-focus-inner {
                border: 0;
                padding: 0; }

            input {
                line-height: normal; }

            input[type="checkbox"],
            input[type="radio"] {
                box-sizing: border-box;
                padding: 0; }

            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                height: auto; }

            input[type="search"]::-webkit-search-cancel-button,
            input[type="search"]::-webkit-search-decoration {
                -webkit-appearance: none; }

            fieldset {
                border: 1px solid #c0c0c0;
                margin: 0 2px;
                padding: 0.35em 0.625em 0.75em; }

            legend {
                border: 0;
                padding: 0; }

            textarea {
                overflow: auto; }

            optgroup {
                font-weight: bold; }

            table {
                border-collapse: collapse;
                border-spacing: 0; }

            td,
            th {
                padding: 0; }

            /*--------------------------------------------------------------
			# Typography
			--------------------------------------------------------------*/
            /* cyrillic-ext */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 400;
                src: local("Tahoma"), url(https://fonts.gstatic.com/l/font?kit=EidOQW82QWb1Qs4tAAhmC_esZW2xOQ-xsNqO47m55DA&skey=9d22fae1754942f6&v=v8) format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F; }
            /* cyrillic */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 400;
                src: local("Tahoma"), url(https://fonts.gstatic.com/l/font?kit=jNku2AAYcpd9xydwEGbwnfesZW2xOQ-xsNqO47m55DA&skey=9d22fae1754942f6&v=v8) format("woff2");
                unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116; }
            /* greek-ext */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 400;
                src: local("Tahoma"), url(https://fonts.gstatic.com/l/font?kit=xcaDjEuLNgH1jcElPZ46v_esZW2xOQ-xsNqO47m55DA&skey=9d22fae1754942f6&v=v8) format("woff2");
                unicode-range: U+1F00-1FFF; }
            /* greek */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 400;
                src: local("Tahoma"), url(https://fonts.gstatic.com/l/font?kit=xCwUbSSTo2nEtjybxd09YPesZW2xOQ-xsNqO47m55DA&skey=9d22fae1754942f6&v=v8) format("woff2");
                unicode-range: U+0370-03FF; }
            /* latin-ext */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 400;
                src: local("Tahoma"), url(https://fonts.gstatic.com/l/font?kit=Z_5wfCbanwmVVGrTKZIt9fesZW2xOQ-xsNqO47m55DA&skey=9d22fae1754942f6&v=v8) format("woff2");
                unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF; }
            /* latin */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 400;
                src: local("Tahoma"), url(https://fonts.gstatic.com/l/font?kit=FjtPnQNs4_A_6qbTEDtLIg&skey=9d22fae1754942f6&v=v8) format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215; }
            /* cyrillic-ext */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 700;
                src: local("Tahoma Negreta"), local("Tahoma-Bold"), url(https://fonts.gstatic.com/l/font?kit=H8nebT5-Cz0tg0N7UEroURJtnKITppOI_IvcXXDNrsc&skey=325a0ea84e3a99&v=v8) format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F; }
            /* cyrillic */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 700;
                src: local("Tahoma Negreta"), local("Tahoma-Bold"), url(https://fonts.gstatic.com/l/font?kit=TWCvOMyHogy1VEWzcaw7IxJtnKITppOI_IvcXXDNrsc&skey=325a0ea84e3a99&v=v8) format("woff2");
                unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116; }
            /* greek-ext */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 700;
                src: local("Tahoma Negreta"), local("Tahoma-Bold"), url(https://fonts.gstatic.com/l/font?kit=Prx2OTRkYtP9EyiX4K3sjBJtnKITppOI_IvcXXDNrsc&skey=325a0ea84e3a99&v=v8) format("woff2");
                unicode-range: U+1F00-1FFF; }
            /* greek */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 700;
                src: local("Tahoma Negreta"), local("Tahoma-Bold"), url(https://fonts.gstatic.com/l/font?kit=6UZQF2rQOA9jslTXSpi5nRJtnKITppOI_IvcXXDNrsc&skey=325a0ea84e3a99&v=v8) format("woff2");
                unicode-range: U+0370-03FF; }
            /* latin-ext */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 700;
                src: local("Tahoma Negreta"), local("Tahoma-Bold"), url(https://fonts.gstatic.com/l/font?kit=0MfEFLUakMjeBj77Cy0jChJtnKITppOI_IvcXXDNrsc&skey=325a0ea84e3a99&v=v8) format("woff2");
                unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF; }
            /* latin */
            @font-face {
                font-family: 'Tahoma';
                font-style: normal;
                font-weight: 700;
                src: local("Tahoma Negreta"), local("Tahoma-Bold"), url(https://fonts.gstatic.com/l/font?kit=UZitz9TRmpLL1nUOXSmd71tXRa8TVwTICgirnJhmVJw&skey=325a0ea84e3a99&v=v8) format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215; }
            body,
            button,
            input,
            select,
            optgroup,
            textarea {
                color: #222222;
                font-family: Tahoma, sans-serif;
                font-weight: 400;
                font-size: 16px;
                font-size: 1rem;
                line-height: 1.5; }

            h1, h2, h3, h4, h5, h6 {
                clear: both; }

            p {
                margin-bottom: 1.5em; }

            dfn, cite, em, i {
                font-style: italic; }

            blockquote {
                margin: 0 1.5em; }

            address {
                margin: 0 0 1.5em; }

            pre {
                background: #eee;
                font-family: "Courier 10 Pitch", Courier, monospace;
                font-size: 15px;
                font-size: 0.9375rem;
                line-height: 1.6;
                margin-bottom: 1.6em;
                max-width: 100%;
                overflow: auto;
                padding: 1.6em; }

            code, kbd, tt, var {
                font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
                font-size: 15px;
                font-size: 0.9375rem; }

            abbr, acronym {
                border-bottom: 1px dotted #666;
                cursor: help; }

            mark, ins {
                background: #fff9c0;
                text-decoration: none; }

            big {
                font-size: 125%; }

            /*--------------------------------------------------------------
			# Elements
			--------------------------------------------------------------*/
            html {
                box-sizing: border-box; }

            *,
            *:before,
            *:after {
                /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
                box-sizing: inherit; }

            body {
                background: #b9bac0;
                /* Fallback for when there is no custom background color defined. */ }

            blockquote, q {
                quotes: "" ""; }
            blockquote:before, blockquote:after, q:before, q:after {
                content: ""; }

            hr {
                background-color: #ccc;
                border: 0;
                height: 1px;
                margin-bottom: 1.5em; }

            ul, ol {
                margin: 0 0 1.5em 3em; }

            ul {
                list-style: disc; }

            ol {
                list-style: decimal; }

            li > ul,
            li > ol {
                margin-bottom: 0;
                margin-left: 1.5em; }

            dt {
                font-weight: bold; }

            dd {
                margin: 0 1.5em 1.5em; }

            img {
                height: auto;
                /* Make sure images are scaled correctly. */
                max-width: 100%;
                /* Adhere to container width. */ }

            figure {
                margin: 1em 0;
                /* Extra wide images within figure tags don't overflow the content area. */ }

            table {
                margin: 0 0 1.5em;
                width: 100%; }

            /*--------------------------------------------------------------
			# Forms
			--------------------------------------------------------------*/
            button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"] {
                border: 1px solid;
                border-color: #ccc #ccc #bbb;
                border-radius: 3px;
                background: #e6e6e6;
                color: rgba(0, 0, 0, 0.8);
                font-size: 12px;
                font-size: 0.75rem;
                line-height: 1;
                padding: .6em 1em .4em; }
            button:hover,
            input[type="button"]:hover,
            input[type="reset"]:hover,
            input[type="submit"]:hover {
                border-color: #ccc #bbb #aaa; }
            button:active, button:focus,
            input[type="button"]:active,
            input[type="button"]:focus,
            input[type="reset"]:active,
            input[type="reset"]:focus,
            input[type="submit"]:active,
            input[type="submit"]:focus {
                border-color: #aaa #bbb #bbb; }

            input[type="text"],
            input[type="email"],
            input[type="url"],
            input[type="password"],
            input[type="search"],
            input[type="number"],
            input[type="tel"],
            input[type="range"],
            input[type="date"],
            input[type="month"],
            input[type="week"],
            input[type="time"],
            input[type="datetime"],
            input[type="datetime-local"],
            input[type="color"],
            textarea {
                color: #666;
                border: 1px solid #ccc;
                border-radius: 3px;
                padding: 3px; }
            input[type="text"]:focus,
            input[type="email"]:focus,
            input[type="url"]:focus,
            input[type="password"]:focus,
            input[type="search"]:focus,
            input[type="number"]:focus,
            input[type="tel"]:focus,
            input[type="range"]:focus,
            input[type="date"]:focus,
            input[type="month"]:focus,
            input[type="week"]:focus,
            input[type="time"]:focus,
            input[type="datetime"]:focus,
            input[type="datetime-local"]:focus,
            input[type="color"]:focus,
            textarea:focus {
                color: #111; }

            select {
                border: 1px solid #ccc; }

            textarea {
                width: 100%; }

            /*--------------------------------------------------------------
			# Navigation
			--------------------------------------------------------------*/
            /*--------------------------------------------------------------
			## Links
			--------------------------------------------------------------*/
            a {
                color: #053d7e;
                text-decoration: none; }
            a:visited {
                color: #053d7e; }
            a:hover, a:focus, a:active {
                color: #053d7e;
                text-decoration: underline; }
            a:focus {
                outline: thin dotted; }
            a:hover, a:active {
                outline: 0; }

            /*--------------------------------------------------------------
			## Main-navigation
			--------------------------------------------------------------*/
            .main-navigation {
                background: #f6f6ff;
                font-size: 14px;
                text-align: center;
                display: flex;
                justify-content: space-between;
                align-items: center; }
            .main-navigation .nav-site-title,
            .main-navigation .menu-primary-container,
            .main-navigation .social-navigation {
                flex-grow: 1; }
            .main-navigation a {
                display: block;
                padding: 10px;
                font-size: 1rem;
                width: 200px; }
            .main-navigation .menu > li {
                display: inline-block; }
            .main-navigation .nav-site-title {
                display: inline-block;
                width: auto;
                padding: 11px; }
            .main-navigation .nav-site-title .site-title {
                margin: 0; }
            .main-navigation .nav-site-title .custom-logo {
                height: 41px; }
            .main-navigation .social-navigation {
                float: right; }
            .main-navigation .menu-primary-container {
                display: inline-block; }
            .main-navigation .menu-primary-container .menu {
                padding: 23px; }

            .menu-toggle,
            .menu-scroll-down {
                display: none; }

            /*--------------------------------------------------------------
			## Menus
			--------------------------------------------------------------*/
            .menu {
                flex-direction: column;
                font-size: 1.7em;
                font-weight: bold; }
            .menu a:not(:hover) {
                color: #222222; }
            .menu a:hover {
                color: #053d7e; }
            .menu a {
                text-decoration: none; }

            ul.menu {
                list-style: none;
                margin: 0;
                padding-left: 0; }
            ul.menu ul {
                margin: 0;
                padding: 0;
                list-style: none;
                float: left;
                position: absolute;
                top: 100%;
                left: -999em;
                z-index: 99999; }
            ul.menu ul ul {
                left: -999em;
                top: 0; }
            ul.menu ul a {
                width: 200px;
                background-color: rgba(0, 0, 0, 0.75); }
            ul.menu li:hover > ul,
            ul.menu li.focus > ul {
                left: 0;
                position: relative; }
            ul.menu li {
                display: flex; }

            /*--------------------------------------------------------------
			### Social-Links-Menu
			--------------------------------------------------------------*/
            #menu-social-links {
                display: flex;
                flex-direction: row;
                justify-content: center; }
            #menu-social-links a {
                width: auto; }
            #menu-social-links li a {
                margin: 0 10px;
                padding: 10px;
                background: #f6f6ff;
                border-radius: 100%;
                line-height: 0; }

            /*--------------------------------------------------------------
			## Post-navigation
			--------------------------------------------------------------*/
            .post-navigation {
                position: fixed;
                top: 0; }
            .post-navigation .icon {
                top: 50%;
                font-size: 4em; }
            .post-navigation .posts-preview {
                display: flex;
                flex-direction: column;
                justify-content: center;
                background: #FAFAFA;
                padding: 22px;
                padding-top: 140px;
                width: 344px; }
            .post-navigation.nav-previous:hover, .post-navigation.nav-next:hover {
                margin: 0; }
            .post-navigation.nav-previous a, .post-navigation.nav-next a {
                display: flex;
                height: 100vh; }
            .post-navigation.nav-previous {
                left: 0;
                transition: margin-left 1s;
                margin-left: -344px; }
            .post-navigation.nav-previous .icon-angle-down {
                transform: rotate(90deg); }
            .post-navigation.nav-next {
                right: 0;
                transition: margin-right 1s;
                margin-right: -344px;
                text-align: right; }
            .post-navigation.nav-next .icon-angle-down {
                transform: rotate(270deg); }

            .site-main .comment-navigation,
            .site-main .posts-navigation {
                margin: 0 0 1.5em;
                overflow: hidden; }
            .comment-navigation .nav-previous, .posts-navigation .nav-previous {
                float: left;
                width: 50%; }
            .comment-navigation .nav-next, .posts-navigation .nav-next {
                float: right;
                text-align: right;
                width: 50%; }

            /*--------------------------------------------------------------
			# Accessibility
			--------------------------------------------------------------*/
            /* Text meant only for screen readers. */
            .screen-reader-text {
                clip: rect(1px, 1px, 1px, 1px);
                position: absolute ;
                height: 1px;
                width: 1px;
                overflow: hidden;
                word-wrap: normal ;
                /* Many screen reader and browser combinations announce broken words as they would appear visually. */ }
            .screen-reader-text:focus {
                background-color: #f1f1f1;
                border-radius: 3px;
                box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
                clip: auto ;
                color: #21759b;
                display: block;
                font-size: 14px;
                font-size: 0.875rem;
                font-weight: bold;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000;
                /* Above WP toolbar. */ }

            /* Do not show the outline on the skip link target. */
            #content[tabindex="-1"]:focus {
                outline: 0; }

            /*--------------------------------------------------------------
			# Alignments
			--------------------------------------------------------------*/
            .alignleft {
                display: inline;
                float: left;
                margin-right: 1.5em; }

            .alignright {
                display: inline;
                float: right;
                margin-left: 1.5em; }

            .aligncenter {
                clear: both;
                display: block;
                margin-left: auto;
                margin-right: auto; }

            /*--------------------------------------------------------------
			# Clearings
			--------------------------------------------------------------*/
            .clear:before,
            .clear:after,
            .entry-content:before,
            .entry-content:after,
            .comment-content:before,
            .comment-content:after,
            .site-header:before,
            .site-header:after,
            .site-content:before,
            .site-content:after,
            .site-footer:before,
            .site-footer:after {
                content: "";
                display: table;
                table-layout: fixed; }

            .clear:after,
            .entry-content:after,
            .comment-content:after,
            .site-header:after,
            .site-content:after,
            .site-footer:after {
                clear: both; }

            /*--------------------------------------------------------------
			# Widgets
			--------------------------------------------------------------*/
            .widget-area {
                color: black;
                font-size: 16px;
                display: flex;
                flex-wrap: wrap; }
            @media (min-width: 1440px) {
                .widget-area {
                    display: block; } }
            .widget-area .widget {
                border: 0 solid #e4e7e9;
                border-left-width: 1px;
                margin: 30px;
                padding-left: 30px;
                flex: 330px;
                /* Make sure select elements fit in widgets. */ }
            .widget-area .widget select {
                max-width: 100%; }
            .widget-area .widget a {
                color: black;
                text-decoration: none; }
            .widget-area .widget a:hover {
                color: #053d7e; }
            .widget-area .widget ul {
                margin-left: 0;
                list-style: none; }
            .widget-area .widget .widget-title {
                margin-bottom: 0; }
            .widget-area .widget_media_image {
                flex-grow: 0; }

            /*--------------------------------------------------------------
			# Site
			--------------------------------------------------------------*/
            .content-area {
                width: 1050px;
                max-width: 100%; }

            .site-content .widget-area {
                overflow: hidden;
                flex: 400px; }

            .site-footer {
                clear: both;
                width: 100%; }

            .site-content {
                display: flex;
                justify-content: center;
                flex-wrap: wrap; }

            /*--------------------------------------------------------------
			## Header
			--------------------------------------------------------------*/
            .site-header {
                position: relative;
                z-index: 1000; }
            .site-header:hover {
                box-shadow: inset 0 0 150px 0 black; }
            .site-header a {
                width: 100%;
                height: 100%;
                text-decoration: none;
                color: #053d7e; }
            .site-header a.overlay {
                display: none;
                position: absolute;
                top: 0; }
            .site-header a :hover {
                color: #053d7e; }
            .site-header .site-title {
                font-family: Tahoma, sans-serif; }
            .site-header .custom-header {
                display: none;
                position: absolute;
                z-index: -100;
                width: 100%;
                height: 50vh;
                overflow: hidden; }
            .site-header .custom-header div, .site-header .custom-header img {
                min-height: 50vh;
                width: 100%;
                max-width: unset; }
            .site-header .site-branding-wrapper {
                display: none;
                height: 50vh;
                text-align: center;
                text-shadow: 2px 2px black; }
            .site-header .site-branding-wrapper .site-branding {
                margin: 10% auto auto;
                z-index: 1;
                background: transparent;
                display: inline-block; }
            .site-header .site-branding-wrapper .custom-logo {
                height: 50%; }
            .site-header .site-branding-wrapper .custom-logo img {
                height: 100%;
                width: auto; }
            .site-header .site-branding-wrapper h1, .site-header .site-branding-wrapper p {
                margin: 0; }
            .site-header .site-branding-wrapper h1 {
                font-size: 4em; }
            .site-header .site-branding-wrapper p {
                font-size: 2em; }
            .site-header .menu-scroll-down {
                display: none;
                height: auto;
                width: auto;
                position: absolute;
                bottom: 0;
                right: 0;
                margin: 5em; }
            .site-header .menu-scroll-down .icon {
                -webkit-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
                width: 6em;
                height: 6em;
                background: #0000003d;
                border-radius: 100%;
                padding: 10px; }

            /*--------------------------------------------------------------

			## Footer
			--------------------------------------------------------------*/
            .site-footer {
                background: #f6f6ff;
                font-size: 14px;
                text-align: center; }
            .site-footer a {
                display: block;
                padding: 23px 10px;
                font-size: 1rem;
                width: 200px; }
            .site-footer .menu > li {
                display: inline-block; }

            /*--------------------------------------------------------------

			## Content
			--------------------------------------------------------------*/
            /*--------------------------------------------------------------
			### Home
			--------------------------------------------------------------*/
            .home .site-content {
                background: none; }
            .home .content-area {
                width: 100%; }
            .home .site-main {
                background: none; }
            .home .custom-header {
                height: 100vh; }
            .home .custom-header div, .home .custom-header img {
                min-height: 100vh; }
            .home .site-branding-wrapper {
                height: 100vh; }
            .home .menu-scroll-down {
                display: none; }

            .content-home {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                font-size: 16px; }
            .content-home.site-main {
                border: none; }
            .content-home article {
                position: relative;
                flex: 0 450px;
                margin: 10px;
                display: flex;
                background-color: #FAFAFA;
                flex-flow: wrap; }
            .content-home article:hover .thumbnail {
                margin-bottom: -200px; }
            .content-home article:hover .entry-excerpt {
                height: 200px; }
            .content-home article .entry-excerpt {
                transition: height 1s;
                height: 0;
                overflow: hidden; }
            .content-home article .thumbnail {
                transition: margin-bottom 1s; }
            .content-home article a, .content-home article .thumbnail {
                width: 100%; }
            .content-home article h1, .content-home article h2, .content-home article a {
                color: #222222;
                font-size: 1em;
                line-height: 1.1538461538em;
                text-decoration: none; }
            .content-home article h1:hover, .content-home article h2:hover, .content-home article a:hover {
                color: #053d7e; }
            .content-home article .entry-header {
                width: 100%;
                background: #FAFAFA;
                display: block;
                min-height: 81px;
                position: relative;
                padding: 22px;
                z-index: 17; }
            .content-home article .thumbnail img {
                min-width: 100%; }
            .content-home article .postmetadata {
                font-size: 0.8461538462em; }
            .content-home article .postmetadata,
            .content-home article .postmetadata a:not(:hover) {
                color: #78797a; }

            /*--------------------------------------------------------------
			### Archive
			--------------------------------------------------------------*/
            .archive .entry-content {
                display: flex;
                flex-wrap: wrap;
                justify-content: center; }
            .archive .entry-content div {
                flex-basis: 300px; }
            .archive .thumbnail {
                flex-grow: 0; }
            .archive .excerpt {
                flex-grow: 1; }
            .archive .excerpt p {
                margin: 0 10px; }
            .archive .site-content {
                font-size: 20px; }
            .archive .content-area {
                width: 57em;
                max-width: 100%;
                padding: 0 10em; }
            .archive .site-main {
                width: 37em;
                max-width: 100%;
                margin: 0 auto 0 auto; }
            .archive .site-main .entry-content .alignleft {
                margin-left: -10em; }
            .archive .site-main .entry-content .alignright {
                margin-right: -10em; }

            /*--------------------------------------------------------------
			### SinglePost
			--------------------------------------------------------------*/
            .single-post .content-area {
                width: 52em;
                max-width: 100%;
                flex-grow: 99999;
                padding: 0 10em; }
            .single-post .site-content {
                font-size: 20px; }
            .single-post .site-main {
                width: 32em;
                max-width: 100%;
                margin: 0 auto 0 auto; }
            .single-post .site-main .entry-content .alignleft {
                margin-left: -10em; }
            .single-post .site-main .entry-content .alignright {
                margin-right: -10em; }
            .single-post .entry-title {
                margin-bottom: 0; }
            .single-post .entry-footer span {
                display: block;
                font-style: italic;
                font-size: smaller; }
            .single-post .entry-meta span {
                font-style: italic;
                font-size: smaller; }
            .single-post .single-post-comments {
                min-height: 100px; }
            .single-post .single-post-comments ul {
                max-height: 0;
                overflow: scroll;
                transition: max-height 1s;
                margin: 0;
                padding: 0; }
            .single-post .single-post-comments button {
                display: block;
                background: none;
                font-style: italic;
                font-size: inherit;
                margin: auto;
                padding-left: 0;
                padding-right: 0;
                border: 0 #053d7e solid;
                border-bottom-width: 3px;
                border-radius: 0; }
            .single-post .single-post-comments .comments-area {
                display: none; }
            .single-post .single-post-comments.toggled .comments-area {
                display: block; }
            .single-post .single-post-comments.toggled ul {
                max-height: 2000px; }

            .site-content {
                min-height: 93vh;
                background: white; }

            /*--------------------------------------------------------------
			## Posts and pages
			--------------------------------------------------------------*/
            .sticky {
                display: block; }

            .hentry {
                margin: 0 0 1.5em; }

            .updated:not(.published) {
                display: none; }

            .page-content,
            .entry-content,
            .entry-summary {
                margin: 1.5em 0 0; }

            .page-links {
                clear: both;
                margin: 0 0 1.5em; }

            .site-main {
                background-color: rgba(255, 255, 255, 0);
                border: 10px transparent solid;
                border-radius: 5px; }

            /*--------------------------------------------------------------
			## Comments
			--------------------------------------------------------------*/
            .comment-content a {
                word-wrap: break-word; }

            .bypostauthor {
                display: block; }

            /*--------------------------------------------------------------
			# Infinite scroll
			--------------------------------------------------------------*/
            /* Globally hidden elements when Infinite Scroll is supported and in use. */
            .infinite-scroll .posts-navigation,
            .infinite-scroll.neverending .site-footer {
                /* Theme Footer (when set to scrolling) */
                display: none; }

            /* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
            .infinity-end.neverending .site-footer {
                display: block; }

            /*--------------------------------------------------------------
			# Media
			--------------------------------------------------------------*/
            .page-content .wp-smiley,
            .entry-content .wp-smiley,
            .comment-content .wp-smiley {
                border: none;
                margin-bottom: 0;
                margin-top: 0;
                padding: 0; }

            /* Make sure embeds and iframes fit their containers. */
            embed,
            iframe,
            object {
                max-width: 100%; }

            /* Make sure logo link wraps around logo image. */
            .custom-logo-link {
                display: inline-block; }

            /*--------------------------------------------------------------
			## Captions
			--------------------------------------------------------------*/
            .wp-caption {
                margin-bottom: 1.5em;
                max-width: 100%; }
            .wp-caption img[class*="wp-image-"] {
                display: block;
                margin-left: auto;
                margin-right: auto; }
            .wp-caption .wp-caption-text {
                margin: 0.8075em 0; }

            .wp-caption-text {
                text-align: center; }

            /*--------------------------------------------------------------
			## Galleries
			--------------------------------------------------------------*/
            .gallery {
                margin-bottom: 1.5em; }

            .gallery-item {
                display: inline-block;
                text-align: center;
                vertical-align: top;
                width: 100%; }
            .gallery-columns-2 .gallery-item {
                max-width: 50%; }
            .gallery-columns-3 .gallery-item {
                max-width: 33.33%; }
            .gallery-columns-4 .gallery-item {
                max-width: 25%; }
            .gallery-columns-5 .gallery-item {
                max-width: 20%; }
            .gallery-columns-6 .gallery-item {
                max-width: 16.66%; }
            .gallery-columns-7 .gallery-item {
                max-width: 14.28%; }
            .gallery-columns-8 .gallery-item {
                max-width: 12.5%; }
            .gallery-columns-9 .gallery-item {
                max-width: 11.11%; }

            .gallery-caption {
                display: block; }

            /*--------------------------------------------------------------
			## Icons
			--------------------------------------------------------------*/
            .icon {
                width: 1em;
                height: 1em;
                display: inline-block;
                fill: currentColor;
                position: relative;
                top: -0.0625em;
                vertical-align: middle; }

            /*--------------------------------------------------------------
			# Mobile
			--------------------------------------------------------------*/
            @media screen and (max-width: 1024px) {
                /* Header */
                .site-branding-wrapper {
                    font-size: 8px; }

                /* Layout */
                #primary,
                #main {
                    margin-right: auto;
                    margin-left: auto; }

                #secondary {
                    width: 100%;
                    margin-right: 0; } }
            @media screen and (max-width: 640px) {
                .site-content {
                    margin-left: 0;
                    margin-right: 0; }

                .single-post .site-content {
                    font-size: 16px; }

                .single-post .content-area {
                    padding: 0; }
                .single-post .content-area .entry-content .alignleft, .single-post .content-area .entry-content .alignright {
                    margin: 0; }

                .post-navigation {
                    display: none; }

                .main-navigation .nav-site-title {
                    font-size: 3.5vmin; }

                .widget-area .widget {
                    margin: auto;
                    padding: 10px;
                    border: 0; }

                .home .site-main {
                    border: none; }
                .home article {
                    margin: 5px; }
                .home article .entry-header {
                    padding: 5px; } }
            @media screen and (min-width: 641px) and (max-width: 1024px) {
                .single-post .site-content {
                    font-size: 16px; }

                .single-post .content-area {
                    font-size: 16px;
                    padding: 0 5em; }
                .single-post .content-area .entry-content .alignleft {
                    margin-left: -5em; }
                .single-post .content-area .entry-content .alignright {
                    margin-right: -5em; } }
            @media screen and (max-width: 1024px) {
                .main-navigation {
                    clear: both;
                    display: block;
                    float: left;
                    width: 100%;
                    padding: 10px 0 10px 10px;
                    text-align: left; }
                .main-navigation .nav-site-title {
                    width: 100%;
                    padding: 0 0 0 33px;
                    text-align: center; }
                .main-navigation .nav-menu li {
                    width: 100%; }
                .main-navigation.toggled {
                    background-color: #f6f6ff; }
                .main-navigation .widget-area {
                    display: none;
                    margin-top: 4em; }
                .main-navigation ul {
                    display: none; }
                .main-navigation .social-navigation {
                    width: 100%;
                    text-align: center; }

                /* Small menu. */
                .menu-toggle,
                .main-navigation.toggled {
                    border: none; }
                .menu-toggle ul,
                .menu-toggle .widget-area,
                .main-navigation.toggled ul,
                .main-navigation.toggled .widget-area {
                    display: block; }

                .menu-toggle {
                    position: absolute;
                    display: inline-block;
                    color: white;
                    font-size: 35px;
                    padding: 0;
                    background: none; }
                .menu-toggle .icon-close {
                    display: none; }

                .toggled .menu-toggle {
                    color: white; }
                .toggled .menu-toggle .icon-close {
                    display: block; }
                .toggled .menu-toggle .icon-bars {
                    display: none; } }
            /*--------------------------------------------------------------
			# Plugins
			--------------------------------------------------------------*/
            /*--------------------------------------------------------------
			## Jetpack
			--------------------------------------------------------------*/
            div.sharedaddy {
                display: table-cell;
                width: auto ; }

            .none {
                display: none; }

            /*# sourceMappingURL=style.css.map */

        </style>

        <title><?php bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    </head>

<body <?php body_class(); ?>>

<amp-sidebar class="main-navigation toggled" id="sidebar1" layout="nodisplay" side="right">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
	) );
	?>
</amp-sidebar>

<div id="target-element">
</div>

<div id="page" class="site">
    <header id="masthead" class="site-header">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>

            <nav id="site-navigation" class="main-navigation">
                <button on='tap:sidebar1.toggle' class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false">
					<?php
					echo photoblog_s_get_svg(array('icon' => 'bars'));
					echo photoblog_s_get_svg(array('icon' => 'close'));
					?>
                </button>

                <a class="nav-site-title" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ):?>
                        <amp-img class="custom-logo" height="400" width="400" src="<?php echo esc_url( $logo[0] ) ?>"></amp-img>
					<?php else : ?>
                        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<?php
					endif; ?>
                </a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				) );
				?>

				<?php
				if ( has_nav_menu( 'social' ) ) : ?>
                    <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'photoblog_s' ); ?>">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class' => 'menu social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . photoblog_s_get_svg( array( 'icon' => 'chain' ) ),
						) );
						?>
                    </nav><!-- .social-navigation -->
				<?php endif;?>
            </nav><!-- #site-navigation -->
		<?php endif;?>

        <a href="#content" class="menu-scroll-down"><?php echo photoblog_s_get_svg(array('icon' => 'arrow-right')); ?>
            <span class="screen-reader-text"><?php _e('Scroll down to content', 'photoblog_s'); ?></span>
        </a>

    </header><!-- #masthead -->

    <div id="content" class="site-content">

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

			<?php
            $query = new WP_Query("posts_per_page=-1");
			if ( $query->have_posts() ) :
				?>

                <div class="content-home">
					<?php
					/* Start the Loop */
					while ( $query->have_posts() ) : $query->the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
                            get_template_part( 'template-parts/content', 'amp' );

					endwhile;
					?>
                </div>

				<?php
				the_posts_navigation();

			else :

                get_template_part( 'template-parts/content', 'none' );

			endif;
            wp_reset_postdata();
			?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div><!-- #content -->
    <footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<?php
			wp_nav_menu(array(
				'theme_location'=>'footer',
				'menu_id'        => 'footer-menu',));
			?>
		<?php endif;?>
    </footer><!-- #colophon -->
</div><!-- #page -->
</body>
</html>
