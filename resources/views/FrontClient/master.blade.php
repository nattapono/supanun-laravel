<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>
    document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <title>ศรีภุชงค์ทรัพย์อนันต</title>
    <meta name='robots' content='noindex, nofollow' />
    <link rel="stylesheet" id="synastry-core-style-css" href="https://synastry.qodeinteractive.com/wp-content/plugins/synastry-core/assets/css/synastry-core.min.css?ver=6.3.2" type="text/css" media="all">
    <link rel='dns-prefetch' href='//code.jquery.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Augury WordPress Theme &raquo; Feed"
        href="https://ศรีภุชงค์ทรัพย์อนันต.com" />
    <script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/dtaugury.wpengine.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                        );
                case "emoji":
                    return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                        "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                            .toString()
                        ].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    </script>
    <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://dtaugury.wpengine.com/wp-includes/css/dist/block-library/style.min.css?ver=6.3' type='text/css'
        media='all' />
    <style id='wp-block-library-theme-inline-css' type='text/css'>
    .w-100 {
        width: 100%;
    }

    .w-50 {
        width: 50%;
    }

    .text-center {
        text-align: center;
    }
    .text-nowrap {
        white-space: nowrap;
    }


    .wp-block-audio figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-audio figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-audio {
        margin: 0 0 1em
    }

    .wp-block-code {
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: Menlo, Consolas, monaco, monospace;
        padding: .8em 1em
    }

    .wp-block-embed figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-embed figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-embed {
        margin: 0 0 1em
    }

    .blocks-gallery-caption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .blocks-gallery-caption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-image figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image {
        margin: 0 0 1em
    }

    .wp-block-pullquote {
        border-bottom: 4px solid;
        border-top: 4px solid;
        color: currentColor;
        margin-bottom: 1.75em
    }

    .wp-block-pullquote cite,
    .wp-block-pullquote footer,
    .wp-block-pullquote__citation {
        color: currentColor;
        font-size: .8125em;
        font-style: normal;
        text-transform: uppercase
    }

    .wp-block-quote {
        border-left: .25em solid;
        margin: 0 0 1.75em;
        padding-left: 1em
    }

    .wp-block-quote cite,
    .wp-block-quote footer {
        color: currentColor;
        font-size: .8125em;
        font-style: normal;
        position: relative
    }

    .wp-block-quote.has-text-align-right {
        border-left: none;
        border-right: .25em solid;
        padding-left: 0;
        padding-right: 1em
    }

    .wp-block-quote.has-text-align-center {
        border: none;
        padding-left: 0
    }

    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large,
    .wp-block-quote.is-style-plain {
        border: none
    }

    .wp-block-search .wp-block-search__label {
        font-weight: 700
    }

    .wp-block-search__button {
        border: 1px solid #ccc;
        padding: .375em .625em
    }

    :where(.wp-block-group.has-background) {
        padding: 1.25em 2.375em
    }

    .wp-block-separator.has-css-opacity {
        opacity: .4
    }

    .wp-block-separator {
        border: none;
        border-bottom: 2px solid;
        margin-left: auto;
        margin-right: auto
    }

    .wp-block-separator.has-alpha-channel-opacity {
        opacity: 1
    }

    .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
        width: 100px
    }

    .wp-block-separator.has-background:not(.is-style-dots) {
        border-bottom: none;
        height: 1px
    }

    .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
        height: 2px
    }

    .wp-block-table {
        margin: 0 0 1em
    }

    .wp-block-table td,
    .wp-block-table th {
        word-break: normal
    }

    .wp-block-table figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-table figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-video figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video {
        margin: 0 0 1em
    }

    .wp-block-template-part.has-background {
        margin-bottom: 0;
        margin-top: 0;
        padding: 1.25em 2.375em
    }
    </style>
    <link rel='stylesheet' id='wc-blocks-vendors-style-css'
        href='https://dtaugury.wpengine.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=10.4.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://dtaugury.wpengine.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=10.4.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css'
        href='https://dtaugury.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css'
        href='https://dtaugury.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css?ver=4.7.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'
        href='//dtaugury.wpengine.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=3.1.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css'
        href='https://dtaugury.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=3.23.0'
        type='text/css' media='all' />
    <style id='yith-wcwl-main-inline-css' type='text/css'>
    .yith-wcwl-share li a {
        color: #FFFFFF;
    }

    .yith-wcwl-share li a:hover {
        color: #FFFFFF;
    }

    .yith-wcwl-share a.facebook {
        background: #39599E;
        background-color: #39599E;
    }

    .yith-wcwl-share a.facebook:hover {
        background: #39599E;
        background-color: #39599E;
    }

    .yith-wcwl-share a.twitter {
        background: #45AFE2;
        background-color: #45AFE2;
    }

    .yith-wcwl-share a.twitter:hover {
        background: #39599E;
        background-color: #39599E;
    }

    .yith-wcwl-share a.pinterest {
        background: #AB2E31;
        background-color: #AB2E31;
    }

    .yith-wcwl-share a.pinterest:hover {
        background: #39599E;
        background-color: #39599E;
    }

    .yith-wcwl-share a.email {
        background: #FBB102;
        background-color: #FBB102;
    }

    .yith-wcwl-share a.email:hover {
        background: #39599E;
        background-color: #39599E;
    }

    .yith-wcwl-share a.whatsapp {
        background: #00A901;
        background-color: #00A901;
    }

    .yith-wcwl-share a.whatsapp:hover {
        background: #39599E;
        background-color: #39599E;
    }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--primary: #ffffff;
        --wp--preset--color--secondary: #ffa35a;
        --wp--preset--color--tertiary: #ffffff;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }
    body {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 300;
        font-style: normal;
        text-transform: none;
        font-size: 1.2rem;
        line-height: 36px;
    }
    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }

    @media (max-width:480px) {
        .col-w-100 {
            width: 100%;
        }

        .col-md-w-50 {
            /* width: 50%; */
        }
    }

    @media (min-width:481px) {
        .col-w-100 {
            /* width: 100%; */
        }

        .col-md-w-50 {
            width: 50%;
        }
    }

    ol li {
        line-height: 0;
        padding-bottom: 10px;
    }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/styles.css?ver=5.7.7' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-all-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/fontawesome-all.min.css?ver=6.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dt-booking-manager-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/booking.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-ui-datepicker-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jquery-ui.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-icons-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/fontawesome-all.min.css?ver=6.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dtportfolio-animation-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/animations.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='dtportfolio-fullpage-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jquery.fullPage.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='dtportfolio-ilightbox-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/ilightbox.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='dtportfolio-multiscroll-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jquery.multiscroll.css?ver=6.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dtportfolio-swiper-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/swiper.min.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='dtportfolio-frontend-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/frontend.css?ver=6.3' type='text/css' media='all' />
    <style id='dtportfolio-frontend-inline-css' type='text/css'>
    .dtportfolio-item .dtportfolio-image-overlay .links a:hover,
    .dtportfolio-item .dtportfolio-image-overlay a:hover,
    .dtportfolio-fullpage-carousel .dtportfolio-fullpage-carousel-content a:hover,
    .dtportfolio-item.dtportfolio-hover-modern-title .dtportfolio-image-overlay .links a:hover,
    .dtportfolio-swiper-pagination-holder .dtportfolio-swiper-playpause:hover,
    .dtportfolio-categories a:hover {
        color: #ffffff;
    }

    .dtportfolio-swiper-pagination-holder .swiper-pagination-bullet-active {
        background: #ffffff;
    }
    </style>
    <link rel='stylesheet' id='dtportfolio-responsive-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/responsive.css?ver=6.3' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
    </style>
    <link rel='stylesheet' id='jquery-colorbox-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/colorbox.css?ver=1.4.21' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-quick-view-css'
        href=https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/yith-quick-view.css?ver=1.29.0' type='text/css'
        media='all' />
    <style id='yith-quick-view-inline-css' type='text/css'>
    #yith-quick-view-modal .yith-wcqv-main {
        background: #ffffff;
    }

    #yith-quick-view-close {
        color: #cdcdcd;
    }

    #yith-quick-view-close:hover {
        color: #ff0000;
    }
    </style>
    <link rel='stylesheet' id='jet-elements-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jet-elements.css?ver=2.6.11' type='text/css' media='all' />
    <link rel='stylesheet' id='jet-elements-skin-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jet-elements-skin.css?ver=2.6.11' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href=https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/elementor-icons.min.css?ver=5.20.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/frontend-legacy.min.css?ver=3.14.1' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/frontend.min.css?ver=3.14.1' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/swiper.min.css?ver=5.3.6' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-25447-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25447.css?ver=1692845409' type='text/css'
        media='all' />
    <link rel='stylesheet' id='jet-tabs-frontend-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jet-tabs-frontend.css?ver=2.1.22' type='text/css'
        media='all' />
    <link rel='stylesheet' id='jet-tricks-frontend-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jet-tricks-frontend.css?ver=1.4.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/global.css?ver=1692845410' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-20398-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-20398.css?ver=1692845412' type='text/css'
        media='all' />
    <link rel='stylesheet' id='augury-css' href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/style.css?ver=2.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='augury-base-css' href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/base.css?ver=2.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='augury-grid-css' href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/grid.css?ver=2.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='augury-widget-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/widget.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='augury-layout-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/layout.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='augury-blog-css' href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/blog.css?ver=2.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='augury-custom-class-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/custom-class.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='augury-browsers-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/browsers.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='augury-animations-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/animations.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='prettyphoto-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/prettyPhoto.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-font-awesome-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/all.min.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='pe-icon-7-stroke-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/pe-icon-7-stroke.css?ver=6.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='stroke-gap-icons-style-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/stroke-gap-icons-style.css?ver=6.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='icon-moon-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/icon-moon.css?ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='material-design-iconic-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/material-design-iconic-font.min.css?ver=6.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='augury-woo-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/woocommerce.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='augury-woo-default-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/woocommerce-default.css?ver=2.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='augury-woo-hovers-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/woocommerce-hovers.css?ver=2.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='augury-woo-custom-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/woocommerce-custom.css?ver=2.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='augury-customevent-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/custom.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='augury-magnific-popup-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/magnific-popup.css?ver=2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-bxslider-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/jquery.bxslider.min.css?ver=2.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='augury-custom-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/blog-single.css?ver=2.3' type='text/css' media='all' />
    <style id='augury-custom-inline-css' type='text/css'>
    .dt-sc-menu-sorting a {
        color: rgba(255, 255, 255, 0.6)
    }

    .portfolio .image-overlay,
    .recent-portfolio-widget ul li a:before {
        background: rgba(255, 255, 255, 0.9)
    }

    .dt-sc-boxed-style.dt-sc-post-entry .blog-entry.sticky,
    .dt-sc-post-entry.entry-cover-layout .blog-entry.sticky {
        box-shadow: inset 0 0 1px 3px #ffffff
    }

    .apply-no-space .dt-sc-boxed-style.dt-sc-post-entry .blog-entry.sticky,
    .apply-no-space .dt-sc-post-entry.entry-cover-layout .blog-entry.sticky {
        box-shadow: inset 0 0 1px 3px #ffffff
    }

    .dt-related-carousel div[class*="carousel-"]>div {
        box-shadow: 0 0 1px 1px #ffffff
    }

    .dt-sc-content-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry.sticky .entry-thumb {
        box-shadow: 0 -3px 0 0 #ffffff
    }

    .dt-sc-modern-style.dt-sc-post-entry .blog-entry:hover {
        box-shadow: 0 5px 0 0 #ffffff
    }

    .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry:before,
    .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry:before {
        box-shadow: inset 0 0 0 1px #ffffff
    }

    .portfolio.type4 .image-overlay,
    .dt-sc-event-addon>.dt-sc-event-addon-date,
    .dt-sc-course .dt-sc-course-overlay,
    .dt-sc-process-steps .dt-sc-process-thumb-overlay {
        background: rgba(255, 255, 255, 0.85)
    }

    .dt-sc-product-image-360-popup-viewer-holder .dt-sc-product-image-360-viewer-enlarger {
        background-color: rgba(255, 255, 255, 0.75)
    }

    .dt-sc-product-image-gallery-container .dt-sc-product-image-gallery-thumb-enlarger {
        background-color: rgba(255, 255, 255, 0.95)
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-left.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-left.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-left.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-left.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: -4px 0 0 0 #ffffff;
        box-shadow: -4px 0 0 0 #ffffff;
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-right.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-right.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-right.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-right.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: 4px 0 0 0 #ffffff;
        box-shadow: 4px 0 0 0 #ffffff;
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-top.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-top.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-top.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-top.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: 0 -4px 0 0 #ffffff;
        box-shadow: 0 -4px 0 0 #ffffff;
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-bottom.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-bottom.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-bottom.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-bottom.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: 0 4px 0 0 #ffffff;
        box-shadow: 0 4px 0 0 #ffffff;
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-top-left.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-top-left.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-top-left.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-top-left.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: -4px -4px 0 0 #ffffff;
        box-shadow: -4px -4px 0 0 #ffffff;
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-top-right.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-top-right.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-top-right.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-top-right.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: 4px -4px 0 0 #ffffff;
        box-shadow: 4px -4px 0 0 #ffffff;
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-bottom-left.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-bottom-left.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-bottom-left.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-bottom-left.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: -4px 4px 0 0 #ffffff;
        box-shadow: -4px 4px 0 0 #ffffff;
    }

    .woocommerce ul.products.product-border-type-default.product-border-position-bottom-right.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-bottom-right.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-border-type-default.product-border-position-bottom-right.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-bottom-right.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: 4px 4px 0 0 #ffffff;
        box-shadow: 4px 4px 0 0 #ffffff;
    }

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-default.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-default.product-bordershadow-highlight-default li.product .product-wrapper .product-thumb,

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-default.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-default.product-bordershadow-highlight-onhover li.product:hover .product-wrapper .product-thumb {
        -webkit-box-shadow: 0 0 5px 1px #ffffff;
        box-shadow: 0 0 5px 1px #ffffff;
    }

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-top-left.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-top-left.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-top-left.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-top-left.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: -5px -5px 5px 0 #ffffff;
        box-shadow: -5px -5px 5px 0 #ffffff;
    }

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-top-right.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-top-right.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-top-right.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-top-right.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: 5px -5px 5px 0 #ffffff;
        box-shadow: 5px -5px 5px 0 #ffffff;
    }

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-bottom-left.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-bottom-left.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-bottom-left.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-bottom-left.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: -5px 5px 5px 0 #ffffff;
        box-shadow: -5px 5px 5px 0 #ffffff;
    }

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-bottom-right.product-bordershadow-highlight-default li.product .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-bottom-right.product-bordershadow-highlight-default li.product .product-thumb,

    .woocommerce ul.products.product-shadow-type-default.product-shadow-position-bottom-right.product-bordershadow-highlight-onhover li.product:hover .product-wrapper,
    .woocommerce ul.products.product-shadow-type-thumb.product-shadow-position-bottom-right.product-bordershadow-highlight-onhover li.product:hover .product-thumb {
        -webkit-box-shadow: 5px 5px 5px 0 #ffffff;
        box-shadow: 5px 5px 5px 0 #ffffff;
    }

    .dt-sc-event-month-thumb .dt-sc-event-read-more,
    .dt-sc-training-thumb-overlay {
        background: rgba(255, 163, 90, 0.85)
    }

    .dt-sc-faculty .dt-sc-faculty-thumb-overlay {
        background: rgba(255, 255, 255, 0.9)
    }

    @-webkit-keyframes color-change {
        0% {
            color: #ffffff;
        }

        50% {
            color: #ffa35a;
        }

        100% {
            color: #ffffff;
        }
    }

    @-moz-keyframes color-change {
        0% {
            color: #ffffff;
        }

        50% {
            color: #ffa35a;
        }

        100% {
            color: #ffffff;
        }
    }

    @-ms-keyframes color-change {
        0% {
            color: #ffffff;
        }

        50% {
            color: #ffa35a;
        }

        100% {
            color: #ffffff;
        }
    }

    @-o-keyframes color-change {
        0% {
            color: #ffffff;
        }

        50% {
            color: #ffa35a;
        }

        100% {
            color: #ffffff;
        }
    }

    @keyframes color-change {
        0% {
            color: #ffffff;
        }

        50% {
            color: #ffa35a;
        }

        100% {
            color: #ffffff;
        }
    }

    .dt-sc-destination-item .image-overlay:before {
        background: linear-gradient(to right, rgba(255, 163, 90, 0.9) 0%, rgba(255, 255, 255, 0.9) 100%);
        background: -webkit-linear-gradient(to right, rgba(255, 163, 90, 0.9) 0%, rgba(255, 255, 255, 0.9) 100%);
        background: -moz-linear-gradient(to right, rgba(255, 163, 90, 0.9) 0%, rgba(255, 255, 255, 0.9) 100%);
        background: -ms-linear-gradient(to right, rgba(255, 163, 90, 0.9) 0%, rgba(255, 255, 255, 0.9) 100%);
    }
    </style>
    <link rel='stylesheet' id='augury-gutenberg-css'
        href='https://dtaugury.wpengine.com/wp-content/themes/augury/css/gutenberg.css?ver=2.3' type='text/css'
        media='all' />
    <style id='augury-gutenberg-inline-css' type='text/css'>
    .has-primary-background-color {
        background-color: #ffffff;
    }

    .has-primary-color {
        color: #ffffff;
    }

    .has-secondary-background-color {
        background-color: #ffa35a;
    }

    .has-secondary-color {
        color: #ffa35a;
    }

    .has-tertiary-background-color {
        background-color: #ffffff;
    }

    .has-tertiary-color {
        color: #ffffff;
    }
    </style>
    <link rel='stylesheet' id='dt_booking-default-css'
        href='https://dtaugury.wpengine.com/wp-content/plugins/designthemes-booking-manager/css/default.css?ver=6.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dtportfolio-designthemes-css'
        href='https://dtaugury.wpengine.com/wp-content/plugins/designthemes-portfolio-addon/css/designthemes.css?ver=6.3'
        type='text/css' media='all' />
    <style id='augury-customiser-skin-inline-inline-css' type='text/css'>
    a,
    h1 a:hover,
    h2 a:hover,
    h3 a:hover,
    h4 a:hover,
    h5 a:hover,
    h6 a:hover,
    .breadcrumb a:hover {
        color: #ffffff;
    }

    .widget #wp-calendar td a:hover,
    .dt-sc-dark-bg .widget #wp-calendar td a:hover,
    .secondary-sidebar .widget ul li>a:hover,
    .secondary-sidebar .type15 .widget.widget_recent_reviews ul li .reviewer,
    .secondary-sidebar .type15 .widget.widget_top_rated_products ul li .amount.amount,

    #main-menu .menu-item-widget-area-container .widget ul li>a:hover,
    #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget ul li>a:hover,
    #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget_recent_posts .entry-title h4 a:hover,
    #main-menu ul li.menu-item-simple-parent.dt-sc-dark-bg ul li a:hover,
    #main-menu .menu-item-widget-area-container .widget li:hover:before,
    .widget .recent-posts-widget li .entry-meta p span {
        color: #ffffff;
    }

    .intro-section .elementor-column-wrap.elementor-element-populated:hover .elementor-widget-button a.elementor-button,
    /*#searchform:hover:before, */
    .elementor-widget-jet-map .gm-style .gm-style-iw-d span,
    .contact-info a:hover,
    .elementor-widget-icon-list .elementor-icon-list-text:hover,
    .services-provided .elementor-column-wrap:hover .elementor-widget-heading.elementor-widget-heading h2.elementor-heading-title,
    #footer .footer-social .elementor-social-icon:hover i,
    .dt-sc-simple-style.dt-sc-post-entry .blog-entry:hover .entry-button a.dt-sc-button span,
    .dtportfolio-sorting a:hover,
    .dtportfolio-sorting a.active-sort,
    .post-nav-container .post-next-link a:hover,
    .post-nav-container .post-prev-link a:hover,
    .post-nav-container .post-archive-link-wrapper a:hover,
    article.blog-single-entry.post-overlay>.entry-categories>a:hover,
    .dt-elementor-ordered-list-items .dt-elementor-ordered-list-item:before,
    .dt-sc-header-icons-list>div.loginlogout-item a span i {
        color: #ffffff;
    }

    .elementor-jet-pricing-table .pricing-table:hover .pricing-table__icon-box>* svg,
    .footer .elementor-jet-pricing-table .pricing-table:hover .pricing-table__icon-box>* svg {
        fill: #ffffff;
    }

    .ico-hover-bg.elementor-widget-icon-box.elementor-view-stacked:hover .elementor-icon,
    .elementor-widget-icon-box.elementor-view-stacked.ico-type1.alter:hover .elementor-icon,
    .woocommerce nav.woocommerce-pagination ul li a:focus,
    .woocommerce nav.woocommerce-pagination ul li a:hover,
    .woocommerce nav.woocommerce-pagination ul li span.current,
    .woocommerce nav.woocommerce-pagination ul li .page-numbers.dots,
    #main .white .elementor-button:hover,
    .elementor-widget-image-box.ico-type1.alter:hover .elementor-image-box-img,

    .woocommerce .product-loop-sorting .product-display-controller .product-change-display li span,
    .woocommerce .product-loop-sorting .product-layout-controller .product-change-layout li span,
    .woocommerce .product-loop-sorting .product-list-options-controller .product-list-options li span {
        background-color: #ffffff;
    }

    .dt-sc-post-entry .blog-entry a,
    .dt-sc-post-entry .blog-entry .entry-title h4 a:hover,
    .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-title h4 a:hover,
    .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-button a.dt-sc-button:hover,
    .dt-sc-post-entry.entry-cover-layout .blog-entry:after,
    .dt-sc-boxed-style.dt-sc-post-entry .blog-entry>div.entry-meta-group .div:not(.entry-social-share) i,
    .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-format a:after,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry.type-post .entry-format a:hover,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-tags a,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry>div.entry-date i,
    .dt-sc-post-entry.entry-cover-layout .blog-entry>div.entry-format a:hover,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-social-share .share>i,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-format a,
    .dt-sc-trendy-style.dt-sc-post-entry.entry-cover-layout .blog-entry .entry-details a,
    .dt-sc-trendy-style.dt-sc-post-entry.entry-cover-layout .blog-entry>div a,
    .dt-sc-trendy-style.dt-sc-post-entry.entry-cover-layout .blog-entry>div.entry-button a:hover,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout:hover .blog-entry .entry-title h4 a:hover,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout:hover .blog-entry:before,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry.sticky:before,
    .pagination ul li a,
    .dt-sc-alternate-style.dt-sc-post-entry:hover .blog-entry .entry-format a:before,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-title h4 span.sticky-post,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-title h4 span.sticky-post i,
    .dt-sc-classic-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry>.entry-tags>a,
    .dt-sc-classic-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry.sticky .entry-thumb .entry-format a:before,
    .dt-sc-classic-overlay-style.dt-sc-post-entry .blog-entry .entry-thumb:first-child+.entry-meta-group>div>a:hover,
    /*.blog-single-entry.post-custom-minimal div[class*="metagroup-"]:not(.metagroup-elements-boxed) div[class*="entry-"] a:hover, */
    .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry.has-post-thumbnail>div.entry-thumb+div.entry-comments a:hover,
    .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry.has-post-thumbnail>div.entry-thumb+div.entry-likes-views a:hover,
    .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry:not(.has-post-thumbnail)>div.entry-comments:first-child a:hover,
    .dt-sc-grungy-boxed-style.dt-sc-post-entry .blog-entry:not(.has-post-thumbnail)>div.entry-likes-views:first-child a:hover,
    .commentlist li.comment .reply a,
    .blog-single-entry .related-article .content>span,
    .blog-single-entry .related-article article .entry-summary h2,
    .blog-single-entry.post-overlay>.entry-thumb>.entry-format>a:hover,
    .blog-single-entry.post-overlay>.entry-author span:hover,
    .blog-single-entry.post-overlay>.entry-author span:hover a,
    .blog-single-entry.post-overlay>.entry-categories a,
    .blog-single-entry.post-overlay>.entry-title h1:hover a,
    .blog-single-entry.post-overlay>.entry-tags a:hover,
    .blog-single-entry.post-overlay>.entry-comments a:hover,
    .blog-single-entry.post-overlay>.entry-likes-views .dt-sc-like-views a:hover,
    .blog-single-entry.post-overlay>.entry-social-share .share .dt-share-list li a:hover,
    .blog-single-entry.post-overlay>.entry-author-bio .details h3 a:hover,
    .blog-single-entry.post-overlay>.entry-post-navigation .post-prev-link:hover p,
    .blog-single-entry.post-overlay>.entry-post-navigation .post-next-link:hover p,
    .blog-single-entry.post-overlay>.entry-post-navigation .post-prev-link:hover span,
    .blog-single-entry.post-overlay>.entry-post-navigation .post-next-link:hover span,
    .blog-single-entry.post-overlay>div.entry-meta-group .share .dt-share-list li a:hover,
    .blog-single-entry.post-overlay>div.entry-meta-group .entry-categories a:hover,
    .blog-single-entry.post-overlay>div.entry-meta-group .entry-author span:hover,
    .blog-single-entry.post-overlay>div.entry-meta-group .entry-author span:hover a,
    .blog-single-entry.post-overlap>.entry-thumb .entry-overlap .entry-bottom-details>* a:hover,
    .blog-single-entry.post-overlap>.entry-author-bio>.details h3 a:hover,
    .blog-single-entry.post-breadcrumb-fixed>.dt-post-sticky-wrapper h4>span,
    .blog-single-entry.post-overlap>.commententries #respond h3#reply-title small a:hover,
    .blog-single-entry.post-breadcrumb-fixed .entry-author-bio>.details h3 a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-tags a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-categories a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-comments a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-author a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-likes-views .dt-sc-like-views a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-social-share .share .dt-share-list li a:hover,
    .blog-single-entry.post-custom-classic div[class*="meta-elements-boxed"]:hover i,
    .blog-single-entry.post-custom-classic div[class*="meta-elements-boxed"] a:hover,
    .blog-single-entry[class*="post-custom-classic"] .entry-author-bio .details h3 span,
    .blog-single-entry[class*="post-custom-classic"] .entry-post-navigation>div>.nav-title-wrap h3 a:hover,
    div[class*="metagroup-"] div[class*="entry-"] a,
    div[class*="meta-elements"] a,
    .blog-single-entry.post-custom-classic div[class*="metagroup-"] div[class*="entry-"] a:hover,
    .page-link a,
    .page-link a>span,
    .blog-single-entry.post-breadcrumb-parallax>.entry-meta-group>div a:hover,
    .dt-sc-post-entry .blog-entry .entry-format a.ico-format:hover,
    .blog-single-entry.post-overlay>.entry-title h1 a,
    .blog-single-entry.post-overlay>.entry-author-bio .details h3 a,
    .blog-single-entry.post-overlap>.entry-thumb .entry-overlap .entry-title h1 a,
    .blog-single-entry.post-overlap>.entry-thumb .entry-overlap .entry-bottom-details>* i,
    .blog-single-entry.post-overlap>.entry-thumb .entry-overlap .entry-bottom-details>* a,
    .blog-single-entry.post-overlap>.entry-tags a,
    .blog-single-entry.post-overlap>.entry-social-share .share .dt-share-list li a,
    .blog-single-entry.post-overlap>.entry-likes-views .dt-sc-like-views>div>a,
    .blog-single-entry.post-overlap>.entry-categories a,
    .blog-single-entry.post-overlap .entry-author>.author-wrap>a,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-tags a,
    .blog-single-entry.post-overlap>div.entry-meta-group .share .dt-share-list li a,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-likes-views .dt-sc-like-views>div>a,
    .blog-single-entry.post-overlap>div.entry-meta-group>.entry-categories a,
    .blog-single-entry.post-overlap>div.entry-meta-group>.entry-author>.author-wrap>a,
    .blog-single-entry.post-overlap>.entry-author-bio>.details h3>a,
    .blog-single-entry.post-overlap>.entry-title h1 a,
    .blog-single-entry.post-overlap>.commententries #respond h3#reply-title small a,
    .single-post-header-wrapper>.container h1,
    .blog-single-entry.post-breadcrumb-fixed .entry-author-bio>.details h3 a,
    .blog-single-entry.post-breadcrumb-fixed .entry-title h1 a,
    .blog-single-entry.post-breadcrumb-fixed .entry-related-posts>h4,
    .blog-single-entry.post-breadcrumb-fixed .commententries .comments-area>h3,
    .blog-single-entry.post-breadcrumb-fixed .commententries #respond h3#reply-title,
    .blog-single-entry.post-breadcrumb-fixed .commententries #respond h3#reply-title small a,
    .blog-single-entry.post-breadcrumb-fixed .entry-comments a,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-tags a:hover,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group>.entry-categories>.category-wrap>a:hover,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .share .dt-share-list li a:hover,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-date .date-wrap i,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-author i,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-comments i,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-likes-views .dt-sc-like-views>div>i,
    .blog-single-entry.post-breadcrumb-fixed .entry-tags a,
    .blog-single-entry.post-breadcrumb-fixed .entry-categories>.category-wrap>a,
    .blog-single-entry.post-breadcrumb-fixed .entry-social-share .share .dt-share-list li a,
    .blog-single-entry.post-breadcrumb-fixed .entry-date .date-wrap,
    .blog-single-entry.post-breadcrumb-fixed .entry-author>.author-wrap>a,
    .blog-single-entry.post-breadcrumb-fixed .entry-likes-views .dt-sc-like-views>div>a,
    .single-post-header-wrapper.dt-parallax-bg>.container .post-meta .post-author a:hover,
    .single-post-header-wrapper.dt-parallax-bg>.container .post-meta>.post-comments a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-title h1 a,
    .blog-single-entry.post-breadcrumb-parallax>.entry-tags a,
    .blog-single-entry.post-breadcrumb-parallax>.entry-categories a,
    .blog-single-entry.post-breadcrumb-parallax>.entry-comments a,
    .blog-single-entry.post-breadcrumb-parallax>.entry-author a,
    .blog-single-entry.post-breadcrumb-parallax>.entry-likes-views .dt-sc-like-views a,
    .blog-single-entry.post-breadcrumb-parallax>.entry-social-share .share .dt-share-list li a,
    .blog-single-entry.post-breadcrumb-parallax>[class*="entry-"]>i,
    .blog-single-entry.post-breadcrumb-parallax>.entry-tags a:not(:last-child):after,
    .blog-single-entry.post-breadcrumb-parallax>.entry-categories a:not(:last-child):after,
    .blog-single-entry.post-breadcrumb-parallax>.entry-author,
    .blog-single-entry.post-breadcrumb-parallax>.entry-date,
    .blog-single-entry.post-breadcrumb-parallax>.entry-author-bio .details h3 a,
    .blog-single-entry.post-custom-classic .entry-title h1 a,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-date .date-wrap,
    .blog-single-entry.post-overlap>.entry-date .date-wrap,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-comments a,
    .blog-single-entry.post-overlap>.entry-comments a,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-likes-views .dt-sc-like-views>div,
    .single-post-header-wrapper>.container .post-meta-data .date,
    .blog-single-entry.post-breadcrumb-fixed>.dt-post-sticky-wrapper h4,
    .blog-single-entry.post-breadcrumb-fixed div[class*="metagroup-elements-boxed"].dt-sc-posts-meta-group .entry-likes-views:hover .dt-sc-like-views>div i,
    .blog-single-entry.post-breadcrumb-fixed div[class*="metagroup-elements-filled"].dt-sc-posts-meta-group .entry-likes-views:hover .dt-sc-like-views>div i:before,
    .elementor-button.dt-elementor-button.dt-bordered,
    .post-custom-modern .entry-post-navigation>div:hover div.nav-title-wrap h3 a,
    .blog-single-entry.post-breadcrumb-parallax .entry-post-navigation>.post-prev-link .nav-title-wrap h3 a:hover,
    .wp-block-image figcaption {
        color: #ffffff;
    }

    .portfolio .image-overlay .links a:hover,
    .portfolio.type7 .image-overlay .links a,
    .project-details li a:hover,
    .portfolio-categories a:hover,
    .dt-portfolio-single-slider-wrapper #bx-pager a.active:hover:before,
    .dt-portfolio-single-slider-wrapper #bx-pager a,
    .portfolio.type8 .image-overlay .links a {
        color: #ffffff;
    }

    .dt-skin-primary-color,
    ul.side-nav li a:hover,
    .dt-sc-events-list .dt-sc-event-title h5 a,
    .woocommerce-MyAccount-navigation ul>li.is-active>a,
    .side-navigation.type5 ul.side-nav li.current_page_item a,
    .side-navigation.type5 ul.side-nav>li>a:hover,
    .carousel-arrows a:hover:before,

    .dt-sc-counter-wrapper.type2 .dt-sc-counter-inner .dt-sc-counter-icon-wrapper>*,
    .elementor-widget-tabs.elementor-tabs-view-vertical.dt-vertical-bordered .elementor-tabs-wrapper .elementor-tab-title a:hover,
    .elementor-widget-tabs.elementor-tabs-view-vertical.dt-vertical-bordered .elementor-tabs-wrapper .elementor-tab-title.elementor-active a,
    .elementor-element.elementor-widget-image-box:hover .elementor-image-box-wrapper .elementor-image-box-content .elementor-image-box-description,
    .elementor-element .elementor-jet-pricing-table .pricing-table:hover .pricing-table__subtitle,
    .elementor-element .elementor-jet-pricing-table .pricing-table:hover span.pricing-table__price-val,
    .elementor-element .elementor-jet-pricing-table .pricing-table:hover span.pricing-table__price-prefix {
        color: #ffffff;
    }

    ul.dt-sc-tabs-vertical-frame>li>a:hover,
    ul.dt-sc-tabs-vertical-frame>li.current a,
    ul.dt-sc-tabs-vertical>li>a.current,
    .dt-sc-tabs-vertical-frame-container.type2 ul.dt-sc-tabs-vertical-frame>li>a.current:before,
    ul.dt-sc-tabs-vertical>li>a:hover,
    .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame>li>a.current,
    .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame>li>a:hover {
        color: #ffffff;
    }

    .dt-sc-event-image-caption .dt-sc-image-content h3 {
        color: #ffffff;
    }

    .page-template-default .blog-single-entry table thead,
    .post-template-default .blog-single-entry table thead,
    table:not(.shop_attributes)>tbody:first-child>tr>th,
    th {
        background-color: #ffffff;
    }

    #footer .wpcf7-form.bottom-bordered input[type="submit"]:hover,
    #footer .wpcf7-form.bottom-bordered button:hover,
    #footer .wpcf7-form.bottom-bordered input[type="button"]:hover,
    #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover {
        background-color: #ffffff;
    }

    .tagcloud a:hover,
    .widgettitle:before,
    .dt-sc-dark-bg .tagcloud a:hover,
    .dt-sc-dark-bg .widget.widget_categories ul li>a:hover span,
    #footer .dt-sc-dark-bg .widget.widget_categories ul li>a:hover span,
    #footer .dt-sc-dark-bg .widget.widget_archive ul li>a:hover span {
        background-color: #ffffff;
    }

    .blog-entry .entry-title h4 span.sticky-post,
    .blog-entry .entry-social-share .share>i,
    .dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button,
    .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-social-share .share>i,
    .dt-sc-post-entry .blog-entry .entry-format a,
    .dt-sc-simple-style.dt-sc-post-entry .blog-entry .entry-format a:hover,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-categories a,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry>div.entry-tags a:hover,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry>div.entry-author>a:hover,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-comments>a:hover,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-tags a:hover,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-format a:hover,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry.sticky .entry-format a,
    .dt-sc-simple-withbg-style.dt-sc-post-entry.entry-grid-layout .blog-entry .entry-thumb .bx-wrapper,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout:hover .blog-entry div.entry-format a,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry.sticky div.entry-format a,
    .pagination .newer-posts a,
    .pagination .older-posts a,
    .pagination ul li span,
    .pagination ul li a:hover,
    .pagination a.loadmore-btn,
    .dt-sc-alternate-style.dt-sc-post-entry:hover .entry-title h4 a:before,
    .dt-sc-alternate-style.dt-sc-post-entry .blog-entry .entry-format a:after,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-author a:hover,
    .dt-sc-classic-overlay-style.dt-sc-post-entry .blog-entry>.entry-categories>a:hover,
    .dt-sc-overlap-style.dt-sc-post-entry .blog-entry .entry-format a:after,
    .dt-related-carousel div[class*="carousel-"]>div,
    .dt-related-carousel .carousel-pager>a.selected,
    .dt-related-carousel .carousel-pager>a:hover,
    .dt-sc-overlay-iii-style.dt-sc-post-entry.entry-list-layout .blog-entry>.entry-thumb:before,
    .dt-sc-modern-style.dt-sc-post-entry .blog-entry .entry-meta-group div.entry-tags a,
    .dt-sc-overlay-style.dt-sc-post-entry.entry-cover-layout .blog-entry .entry-details>.entry-tags,
    .dt-sc-minimal-style.dt-sc-post-entry.entry-grid-layout .blog-entry:after,
    .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry.sticky>div.entry-title:before,
    .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry:hover>div.entry-title:before,
    .post-edit-link:hover,
    .vc_inline-link:hover,
    ul.commentlist li .reply a:hover,
    .single-post-header-wrapper>.container .post-categories a,
    .blog-single-entry .related-article .arrow,
    .blog-single-entry.post-overlay>.entry-thumb>.entry-format>a,
    .blog-single-entry.post-overlay>.entry-thumb .share .dt-share-list li a:hover,
    .blog-single-entry.post-overlay:hover>.entry-title h1:before,
    .blog-single-entry.post-overlay>.entry-author span,
    .blog-single-entry.post-overlap>.entry-thumb>.entry-format>a,
    .blog-single-entry.post-overlap>.entry-comments a:hover i,
    .blog-single-entry.post-overlap>.entry-author>.author-wrap:hover i,
    .blog-single-entry.post-overlap>.entry-date>.date-wrap:hover i,
    .blog-single-entry.post-overlap>.entry-categories>.category-wrap:hover i,
    .blog-single-entry.post-overlap>.entry-likes-views .dt-sc-like-views>div:hover>i,
    .blog-single-entry.post-overlay>div.entry-meta-group .entry-author span,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-comments a:hover i,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-author>.author-wrap:hover i,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-date>.date-wrap:hover i,
    .blog-single-entry.post-overlap>div.entry-meta-group>.entry-categories>.category-wrap:hover i,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-likes-views .dt-sc-like-views>div:hover>i,
    .blog-single-entry.post-breadcrumb-fixed>.dt-post-sticky-wrapper .entry-social-share .share ul li:hover,
    .blog-single-entry.post-breadcrumb-fixed>.column .commententries #respond h3#reply-title small a:hover,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-comments a:hover i,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-author>.author-wrap:hover i,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-likes-views .dt-sc-like-views>div:hover>i,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-date .date-wrap:hover i,
    .blog-single-entry.post-breadcrumb-fixed .entry-comments a:hover i,
    .blog-single-entry.post-breadcrumb-fixed .entry-author>.author-wrap:hover i,
    .blog-single-entry.post-breadcrumb-fixed .entry-likes-views .dt-sc-like-views>div:hover>i,
    .blog-single-entry.post-breadcrumb-fixed .entry-date .date-wrap:hover i,
    .single-post-header-wrapper.dt-parallax-bg>.container .post-categories a:hover,
    .blog-single-entry.post-breadcrumb-parallax>.entry-thumb>.entry-format>a,
    .blog-single-entry.post-custom-classic div[class*="entry-format"] a,
    div[class*="metagroup-elements-filled"] div[class*="entry-"],
    div[class*="meta-elements-filled"],
    div[class*="metagroup-elements-boxed"] div[class*="entry-"]:hover,
    div[class*="metagroup-elements-filled"] div[class*="entry-social"]:hover .share>i,
    div[class*="meta-elements-boxed"]:hover,
    .blog-single-entry div[class*="meta-elements-filled"]:hover .share>i,
    .post-custom-modern div.nav-title-wrap>span,
    .page-link>span,
    .page-link>a:hover,
    div[class*="meta-elements"].entry-social-share .share:hover>i,
    .blog-single-entry .entry-format a,
    .blog-single-entry div[class*="meta-elements-filled"]:hover,
    .metagroup-dot-separator div[class*="entry-"]:not(:last-child):before,
    .post-default>div[class*="entry-meta-group"] div[class*=entry-]:hover,
    div[class*="metagroup-"] .entry-social-share .share>i,
    div[class*="metagroup-elements-filled"] div[class*=entry-]:hover,
    div[class*="metagroup-elements-filled"] div[class*=entry-social] .share>i,
    div[class*="meta-elements"].entry-social-share .share>i,
    div[class*="meta-elements-boxed"].entry-social-share .share>i,
    div[class*="meta-elements-filled"].entry-social-share .share>i,
    div[class*="meta-elements-filled"]:hover,
    .blog-single-entry.post-overlap>.entry-author i,
    .blog-single-entry.post-overlap>.entry-author-bio>.details h3:before,
    .blog-single-entry.post-overlap>.entry-categories>.category-wrap>i,
    .blog-single-entry.post-overlap>.entry-comments a i,
    .blog-single-entry.post-overlap>.entry-date .date-wrap i,
    .blog-single-entry.post-overlap>.entry-likes-views .dt-sc-like-views>div>i,
    .blog-single-entry.post-overlap>.entry-social-share .share .dt-share-list li a:hover,
    .blog-single-entry.post-overlap>.entry-tags a:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-author i,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-comments a i,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-date .date-wrap i,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-likes-views .dt-sc-like-views>div>i,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-tags a:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group .share .dt-share-list li a:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group>.entry-categories>.category-wrap>i,
    .blog-single-entry.post-custom-classic div[class*="metagroup-"] .entry-social-share:hover .share>i,
    article[class*="post-custom"].blog-single-entry div.dt-sc-posts-meta-group[class*="metagroup-elements-filled"] .entry-social-share .share:hover>i,
    .blog-single-entry[class*="post-custom-classic"] div[class*="meta-elements-"].entry-social-share:hover .share {
        background-color: #ffffff;
    }

    .dt-sc-portfolio-sorting a.active-sort,
    .dt-sc-portfolio-sorting a:hover,
    .dt-sc-portfolio-sorting a:hover:before,
    .dt-sc-portfolio-sorting a:hover:after,
    .dt-sc-portfolio-sorting a.active-sort:before,
    .dt-sc-portfolio-sorting a.active-sort:after,
    .portfolio.type2 .image-overlay-details,
    .portfolio.type2 .image-overlay .links a:hover,
    .dt-sc-portfolio-sorting.type2,
    .dt-sc-portfolio-sorting.type2:before,
    .portfolio.type6 .image-overlay .links a:hover,
    .portfolio.type7 .image-overlay-details .categories a:before,
    .portfolio.type7 .image-overlay .links a:hover:before {
        background-color: #ffffff;
    }

    .dt-skin-primary-bg,
    div[class*="dt-skin-primary-bg-opaque"] .upb_row_bg:before,
    section[class*="dt-skin-primary-bg-opaque"]:before,
    ul.side-nav li a:hover:before,
    ul.side-nav>li.current_page_item>a:before,
    ul.side-nav>li>ul>li.current_page_item>a:before,
    ul.side-nav>li>ul>li>ul>li.current_page_item>a:before,
    .dt-sc-skin-highlight,
    .two-color-section:before,
    .dt-sc-readmore-plus-icon:hover:before,
    .dt-sc-readmore-plus-icon:hover:after,
    .dt-sc-contact-details-on-map .map-switch-icon,
    .side-navigation.type2 ul.side-nav>li.current_page_item>a,
    .side-navigation.type4 ul.side-nav li a:after,
    .side-navigation.type5 ul.side-nav li:after,

    .dt-sc-counter-wrapper.type1 .dt-sc-counter-inner .dt-sc-counter-title:after,
    .dt-sc-counter-wrapper.type2:hover .dt-sc-counter-inner .dt-sc-counter-icon-wrapper,
    .dt-sc-any-carousel-wrapper .swiper-pagination.swiper-pagination-bullets .swiper-pagination-bullet-active,
    .dt-sc-any-carousel-wrapper .swiper-pagination-progressbar .swiper-pagination-progressbar-fill,
    .dt-sc-any-carousel-wrapper .swiper-scrollbar .swiper-scrollbar-drag,

    .jet-carousel .jet-slick-dots li:hover span,
    .jet-carousel .jet-slick-dots li.slick-active span,
    .swiper-scrollbar .swiper-scrollbar-drag,
    .dt-sc-header-icons-list>div.search-item .dt-sc-search-form-container.search-overlay .dt-sc-search-overlay-form-close {
        background-color: #ffffff;
    }

    .elementor-button.dt-elementor-button {
        background-color: #ffffff;
    }

    .mz-title .mz-title-content h2,
    .mz-title-content h3.widgettitle,
    .mz-title .mz-title-content:before,
    .mz-blog .comments a,
    .mz-blog div.vc_gitem-post-category-name,
    .mz-blog .ico-format,
    .side-navigation-content .dt-sc-wings-heading:after,
    .animated-twin-lines:after {
        background-color: #ffffff;
    }

    .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a:hover,
    .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a.current,
    .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame>li>a.current:before {
        background-color: #ffffff;
    }

    .live-chat a,
    .dt-sc-menu .menu-categories a:before,
    .dt-sc-training-details-overlay,
    .custom-navigation .vc_images_carousel .vc_carousel-indicators li,
    .dt-sc-procedure-item:hover,
    ul.dt-sc-vertical-nav>li.active>a,
    ul.time-slots>li a:hover,
    #wpsl-search-btn,
    #wpsl-stores li>p span,
    #wpsl-stores li>p,
    #wpsl-stores li>p~.wpsl-directions,
    .dt-sc-toggle-advanced-options span,
    .slick-dots li.slick-active,
    .slick-dots li:hover {
        background-color: #ffffff;
    }

    #footer .wpcf7-form.bottom-bordered input[type="submit"]:hover,
    #footer .wpcf7-form.bottom-bordered button:hover,
    #footer .wpcf7-form.bottom-bordered input[type="button"]:hover,
    #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover {
        border-color: #ffffff;
    }

    .tagcloud a:hover,
    .dt-sc-dark-bg .tagcloud a:hover,
    .secondary-sidebar .type3 .widgettitle,
    .secondary-sidebar .type6 .widgettitle,
    .secondary-sidebar .type13 .widgettitle:before,
    .secondary-sidebar .type14 .widgettitle,
    .secondary-sidebar .type16 .widgettitle {
        border-color: #ffffff;
    }

    .pagination ul li span,
    .pagination ul li a:hover,
    .blog-entry .entry-social-share .share,
    .dt-sc-post-entry.entry-cover-layout .blog-entry.sticky,
    .dt-sc-post-entry.entry-cover-layout .blog-entry .entry-social-share .share,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-tags a:hover,
    .dt-sc-classic-style.dt-sc-post-entry .blog-entry.sticky>div.entry-meta-group>div,
    .dt-sc-classic-overlay-style.dt-sc-post-entry .blog-entry>.entry-categories>a:hover,
    .dt-sc-overlay-style.dt-sc-post-entry.entry-list-layout .blog-entry .entry-thumb,
    .dt-sc-overlay-style.dt-sc-post-entry.entry-list-layout.entry-right-thumb .blog-entry .entry-thumb,
    .dt-sc-overlay-style.dt-sc-post-entry.entry-grid-layout .blog-entry>div.entry-thumb,
    .dt-sc-minimal-style.dt-sc-post-entry.entry-list-layout .blog-entry.sticky,
    .dt-sc-minimal-style.dt-sc-post-entry.entry-list-layout .blog-entry.sticky>div.entry-meta-group,
    .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry.sticky>div.entry-title:after,
    .dt-sc-title-overlap-style.dt-sc-post-entry .blog-entry:hover>div.entry-title:after,
    .blog-single-entry.post-overlay .author span,
    .commentlist li.comment .reply a,
    .blog-single-entry.post-overlap>.entry-comments a:hover,
    .blog-single-entry.post-overlap>.entry-author>.author-wrap:hover,
    .blog-single-entry.post-overlap>.entry-date>.date-wrap:hover,
    .blog-single-entry.post-overlap>.entry-categories>.category-wrap:hover,
    .blog-single-entry.post-overlap>.entry-likes-views .dt-sc-like-views>div:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-comments a:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-author>.author-wrap:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-date>.date-wrap:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group>.entry-categories>.category-wrap:hover,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-likes-views .dt-sc-like-views>div:hover,
    .blog-single-entry.post-breadcrumb-fixed,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-comments a:hover,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-author>.author-wrap:hover,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-likes-views .dt-sc-like-views>div:hover,
    .blog-single-entry.post-breadcrumb-fixed div.entry-meta-group .entry-date .date-wrap:hover,
    .blog-single-entry.post-breadcrumb-fixed .entry-comments a:hover,
    .blog-single-entry.post-breadcrumb-fixed .entry-author>.author-wrap:hover,
    .blog-single-entry.post-breadcrumb-fixed .entry-likes-views .dt-sc-like-views>div:hover,
    .blog-single-entry.post-breadcrumb-fixed .entry-date .date-wrap:hover,
    .single-post-header-wrapper.dt-parallax-bg>.container .post-categories a:hover,
    div[class*="metagroup-elements-filled"] div[class*="entry-"],
    div[class*="meta-elements-filled"],
    div[class*="metagroup-elements-boxed"] div[class*="entry-"]:hover,
    div[class*="meta-elements-boxed"]:hover,
    .dt-related-carousel .carousel-pager>a,
    .page-link>span,
    .page-link>a:hover,
    .page-link a,
    .page-link>span,
    .blog-single-entry.post-overlap>.entry-tags a,
    .blog-single-entry.post-overlap>.entry-social-share .share .dt-share-list li a,
    .blog-single-entry.post-overlap>.entry-comments a,
    .blog-single-entry.post-overlap>.entry-likes-views .dt-sc-like-views>div,
    .blog-single-entry.post-overlap>.entry-tags a,
    .blog-single-entry.post-overlap>.entry-social-share .share .dt-share-list li a,
    .blog-single-entry.post-overlap>.entry-comments a,
    .blog-single-entry.post-overlap>.entry-likes-views .dt-sc-like-views>div,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-tags a,
    .blog-single-entry.post-overlap>div.entry-meta-group .share .dt-share-list li a,
    .blog-single-entry.post-overlap>div.entry-meta-group:before,
    .blog-single-entry.post-overlap>div.entry-meta-group:after,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-comments a,
    .blog-single-entry.post-overlap>div.entry-meta-group .entry-likes-views .dt-sc-like-views>div,
    .blog-single-entry.post-overlap>.entry-related-posts>h4,
    .blog-single-entry.post-breadcrumb-fixed .entry-comments a,
    .blog-single-entry.post-breadcrumb-fixed .entry-categories>.category-wrap>a,
    .blog-single-entry.post-breadcrumb-fixed .entry-tags a,
    .blog-single-entry.post-breadcrumb-fixed .entry-social-share .share .dt-share-list li a,
    .blog-single-entry.post-breadcrumb-parallax>.entry-meta-group,
    .blog-single-entry.post-breadcrumb-parallax>.entry-meta-group:before,
    .blog-single-entry.post-breadcrumb-parallax>.entry-meta-group:after,
    .post-custom-minimal.blog-single-entry .write-comment-button a,
    .blog-single-entry.post-overlap>div.entry-meta-group>.entry-categories>.category-wrap,
    .blog-single-entry.post-overlap>.entry-categories>.category-wrap,
    .blog-single-entry.post-overlap>div.entry-meta-group>.entry-author>.author-wrap,
    .blog-single-entry.post-overlap>.entry-author>.author-wrap,
    article[class*="post-custom-"].blog-single-entry .entry-social-share>.share {
        border-color: #ffffff;
    }

    .dt-sc-portfolio-sorting a.active-sort,
    .dt-sc-portfolio-sorting a:hover,
    .portfolio.type7 .image-overlay .links a:before {
        border-color: #ffffff;
    }

    ul.dt-sc-tabs-vertical>li>a.current,
    .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a:hover,
    .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a.current,
    .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame>li>a.current:before,
    .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame>li>a.current:before {
        border-color: #ffffff;
    }

    .blog-single-entry.post-breadcrumb-fixed .entry-thumb>.entry-format a:after {
        border-top-color: #ffffff;
    }

    .dt-skin-primary-border,
    carousel-arrows a:hover,
    ul.dt-sc-vertical-nav,
    ul.dt-sc-vertical-nav>li:first-child>a,
    .dt-sc-loading:before,
    .side-navigation.type2 ul.side-nav,
    .side-navigation.type2 ul.side-nav li,
    .side-navigation.type2 ul.side-nav li ul,
    .dt-sc-images-carousel li,
    .dt-sc-counter-wrapper.type2 .dt-sc-counter-inner .dt-sc-counter-icon-wrapper:after,
    .elementor-button.dt-elementor-button.dt-bordered:hover {
        border-color: #ffffff;
    }

    .dt-sc-up-arrow:before {
        border-bottom-color: #ffffff;
    }

    .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a.current:before,
    .dt-sc-event-image-caption:hover .dt-sc-image-content:before,
    .side-navigation.type2 ul.side-nav>li.current_page_item>a:after,
    .side-navigation.type2 ul.side-nav>li>ul>li.current_page_item>a:after {
        border-left-color: #ffffff;
    }

    .dt-sc-menu-sorting a.active-sort,
    .dt-sc-menu .image-overlay .price {
        border-color: #ffffff;
    }

    .error404 .type2 a.dt-sc-back,
    .error404 .type4 .error-box:before,
    .error404 .type8 .dt-go-back {
        background-color: #ffffff;
    }

    .error404 h2,
    .error404 .type5 h2,
    .error404 .type6 .error-box h2,
    .error404 .type2 h2,
    .error404 .type8 h2,
    .error404 .type8 .dt-go-back:hover i,
    .error404 .type1 .dt-sc-button:before {
        color: #ffffff;
    }

    .under-construction.type4 .dt-sc-counter-wrapper,
    .under-construction.type1 .dt-sc-counter-wrapper .counter-icon-wrapper:before,
    .under-construction.type7 .dt-sc-counter-wrapper {
        background-color: #ffffff;
    }

    .under-construction.type4 .wpb_wrapper>h2 span,
    .under-construction.type4 .read-more i,
    .under-construction.type4 .wpb_wrapper>h4:after,
    .under-construction.type4 .wpb_wrapper>h4:before,
    .under-construction.type1 .read-more span.fa,
    .under-construction.type1 .read-more a:hover,
    .under-construction.type2 .counter-icon-wrapper .dt-sc-counter-number,
    .under-construction.type2 h2,
    .under-construction.type2 .dt-sc-counter-wrapper h3,
    .under-construction.type2 .mailchimp-newsletter h3,
    .under-construction.type7 h2,
    .under-construction.type7 .mailchimp-newsletter h3,
    .under-construction.type3 p,
    .under-construction.type5 h2 span,
    .under-construction.type5 .dt-sc-counter-number,
    .under-construction.type5 input[type="email"],
    .under-construction.type7 .aligncenter .wpb_text_column h2 {
        color: #ffffff;
    }

    #buddypress div.pagination .pagination-links span,
    #buddypress div.pagination .pagination-links a:hover,
    #buddypress #group-create-body #group-creation-previous,
    #item-header-content #item-meta>#item-buttons .group-button,
    #buddypress div#subnav.item-list-tabs ul li.feed a:hover,
    #buddypress div.activity-meta a:hover,
    #buddypress div.item-list-tabs ul li.selected a span,
    #buddypress .activity-list li.load-more a,
    #buddypress .activity-list li.load-newest a {
        background-color: #ffffff;
    }

    #buddypress div.pagination .pagination-links span,
    #buddypress div.pagination .pagination-links a:hover,
    #buddypress #members-dir-list ul li:hover {
        border-color: #ffffff;
    }

    #members-list.item-list.single-line li h5 span.small a.button,
    #buddypress div.item-list-tabs ul li.current a,
    #buddypress #group-create-tabs ul li.current a,
    #buddypress a.bp-primary-action:hover span,
    #buddypress div.item-list-tabs ul li.selected a,
    .widget.buddypress div.item-options a:hover,
    .widget.buddypress div.item-options a.selected,
    #footer .footer-widgets.dt-sc-dark-bg .widget.buddypress div.item-options a.selected,
    .widget.widget_bp_core_members_widget div.item .item-title a:hover,
    .widget.buddypress .bp-login-widget-user-links>div.bp-login-widget-user-link a:hover {
        color: #ffffff;
    }

    #bbpress-forums li.bbp-header,
    .bbp-submit-wrapper #bbp_topic_submit,
    .bbp-reply-form #bbp_reply_submit,
    .bbp-pagination-links a:hover,
    .bbp-pagination-links span.current,
    #bbpress-forums #subscription-toggle a.subscription-toggle {
        background-color: #ffffff;
    }

    .bbp-pagination-links a:hover,
    .bbp-pagination-links span.current {
        border-color: #ffffff;
    }

    .bbp-forums .bbp-body .bbp-forum-info::before {
        color: #ffffff;
    }

    #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a:hover,
    #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active a:hover,
    #tribe-bar-form .tribe-bar-submit input[type="submit"],
    #tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a,
    .tribe-events-calendar thead th,
    #tribe-events-content .tribe-events-tooltip h4,
    .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"],
    .tribe-events-read-more,
    #tribe-events .tribe-events-button,
    .tribe-events-button,
    .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"]>a,
    .tribe-events-back>a,
    #tribe_events_filters_toggle {
        background-color: #ffffff;
    }

    .tribe-events-list .tribe-events-event-cost span {
        border-color: #ffffff;
    }

    .tribe-grid-header,
    .tribe-grid-allday .tribe-events-week-allday-single,
    .tribe-grid-body .tribe-events-week-hourly-single {
        background-color: #ffffff;
    }

    .type1.tribe_events .event-image-wrapper .event-datetime>span,
    .type3.tribe_events .event-date {
        background-color: #ffffff;
    }

    .type1 .event-schedule,
    .type1.tribe_events .nav-top-links a:hover,
    .type1.tribe_events .event-image-wrapper .event-datetime>i,
    .type1.tribe_events .event-image-wrapper .event-venue>i,
    .type1.tribe_events h4 a,
    .type2.tribe_events .date-wrapper p span,
    .type2.tribe_events h4 a,
    .type3.tribe_events .right-calc a:hover,
    .type3.tribe_events .tribe-events-sub-nav li a:hover,
    .type3.tribe_events .tribe-events-sub-nav li a span,
    .type4.tribe_events .data-wrapper p span,
    .type4.tribe_events .data-wrapper p i,
    .type4.tribe_events .event-organize h4 a,
    .type4.tribe_events .event-venue h4 a,
    .type5.tribe_events .event-details h3,
    .type5.tribe_events .event-organize h3,
    .type5.tribe_events .event-venue h3,
    .type5.tribe_events .data-wrapper p span,
    .data-wrapper p i,
    .type5.tribe_events .event-organize h4 a,
    .type5.tribe_events .event-venue h4 a {
        color: #ffffff;
    }

    .dt-sc-event.type1 .dt-sc-event-thumb p,
    .dt-sc-event.type1 .dt-sc-event-meta:before,
    .dt-sc-event.type2:hover .dt-sc-event-meta,
    .dt-sc-event.type3 .dt-sc-event-date,
    .dt-sc-event.type3:hover .dt-sc-event-meta {
        background-color: #ffffff;
    }

    .dt-sc-event.type4 .dt-sc-event-date:after {
        border-bottom-color: #ffffff;
    }

    .dt-sc-event.type1 .dt-sc-event-meta p span,
    .dt-sc-event.type1:hover h2.entry-title a,
    .dt-sc-event.type3:hover h2.entry-title a,
    .dt-sc-event.type4 .dt-sc-event-date span {
        color: #ffffff;
    }

    .widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td,

    .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present,
    .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today,
    .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover,
    .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover,

    .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present,
    .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today,
    .dt-sc-dark-bg .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover,
    .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover {
        background-color: #ffffff;
    }

    .widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td {
        border-color: #ffffff;
    }

    .widget.tribe-events-countdown-widget .tribe-countdown-text a:hover {
        color: #ffffff;
    }

    .woocommerce ul.products li.product .featured-tag:after,
    .woocommerce ul.products li.product:hover .featured-tag:after,
    .woocommerce.single-product .featured-tag:after,

    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-brdrfill .yith-wcwl-add-to-wishlist a:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.product-button.style-bgfill.hide-button-text .compare:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.product-button.style-bgfill.hide-button-text .yith-wcwl-add-to-wishlist a:hover,

    .woocommerce ul.products.product-hover-fade-skinborder li.product:hover .product-wrapper:before,
    .woocommerce ul.products.product-hover-thumb-fade-skinborder li.product:hover .product-thumb .image:before,
    .woocommerce ul.products.product-border-type-thumb.product-border-position-default[class*="product-bordershadow-highlight"] li.product .product-thumb,
    .woocommerce ul.products.product-border-type-default.product-border-position-default[class*="product-bordershadow-highlight"] li.product .product-wrapper,

    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a:after,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a.button:after,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button:after,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button.button:after,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline .button:after,
    .woocommerce nav.woocommerce-pagination ul li a:focus,
    .woocommerce nav.woocommerce-pagination ul li a:hover,
    .woocommerce nav.woocommerce-pagination ul li span.current,
    .woocommerce nav.woocommerce-pagination ul li .page-numbers.dots {
        border-color: #ffffff;
    }

    .woocommerce ul.products li.product .product-details div[class$="product-buttons-wrapper"] a,
    .woocommerce ul.products li.product .product-details div[class$="product-buttons-wrapper"] button,
    .woocommerce ul.products li.product .product-details div[class$="product-buttons-wrapper"] .button,

    .woocommerce .woocommerce-breadcrumb a:hover,
    .dt-sc-single-product-nav .dt-sc-single-product-nav-btn a:hover span:before,
    .dt-sc-single-product-nav .dt-sc-single-product-nav-back-btn:hover span:before,
    .dt-sc-single-product-nav .dt-sc-single-product-nav-back-btn:hover span:after,


    .woocommerce .product .summary .product-button.style-simple .compare:hover,
    .woocommerce .product .summary .product-button.style-simple .dt-wcsg-button:hover,
    .woocommerce .product .summary .product-button.style-simple .yith-wcqv-button:hover,
    .woocommerce .product .summary .product-button.style-simple .yith-wcwl-add-to-wishlist a:hover,

    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline a:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline a.button:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline button:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline button.button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline .button:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline .button.alt:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline .button.disabled:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline .button[disabled]:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline .button.alt.disabled:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper .wc_btn_inline .button.alt[disabled]:hover,

    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline a,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline a.button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline button.button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline .button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline .button.alt,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline .button.disabled,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline .button[disabled],
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline .button.alt.disabled,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-brdrfill .wc_btn_inline .button.alt[disabled],

    .dt-sc-single-product-share-list li a:hover,
    .dt-sc-single-product-follow-list li a:hover,
    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-share-container.style-simple .dt-sc-single-product-share-list li a:hover,
    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-follow-container.style-simple .dt-sc-single-product-follow-list li a:hover,

    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-share-container.style-brdrfill .dt-sc-single-product-share-list li a:hover,
    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-follow-container.style-brdrfill .dt-sc-single-product-follow-list li a:hover,

    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-share-container.style-skin-brdrfill .dt-sc-single-product-share-list li a,
    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-follow-container.style-skin-brdrfill .dt-sc-single-product-follow-list li a,

    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-brdrfill .yith-wcwl-add-to-wishlist a:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline .variations_button .quantity a:hover,

    .woocommerce .cart .quantity>a[class*="arrow"]:hover,
    .woocommerce-page .cart .quantity>a[class*="arrow"]:hover,
    .woocommerce.single-product div.product .cart .quantity>a[class*="arrow"]:hover,
    .woocommerce table.cart td.product-name a:not(.button):hover,
    .woocommerce-page .woocommerce table.shop_table tbody td .quantity>a:hover,
    .woocommerce .quantity.quantity-with-plusminus input:not(.qty):hover,
    .woocommerce-page .quantity.quantity-with-plusminus input:not(.qty):hover,

    .woocommerce div.product .dt-sc-single-product-nav-intro-wrapper .product-nav-intro .product-nav-intro-description a.product-title:hover,
    .woocommerce .woocommerce-MyAccount-content a:hover,
    .woocommerce .product .summary form.cart .group_table td label a:hover,
    .woocommerce-page table.shop_table.cart .quantity>a:hover i,

    .woocommerce ul.products.product-thumb-iconsgroup-style-simple li.product .product-thumb .product-buttons-wrapper.product-icons a:hover,
    .woocommerce ul.products.product-thumb-iconsgroup-style-simple li.product .product-thumb .product-buttons-wrapper.product-icons a.button:hover,
    .woocommerce ul.products.product-thumb-iconsgroup-style-simple li.product .product-thumb .product-buttons-wrapper.product-icons button:hover,
    .woocommerce ul.products.product-thumb-iconsgroup-style-simple li.product .product-thumb .product-buttons-wrapper.product-icons button.button:hover,
    .woocommerce ul.products.product-thumb-iconsgroup-style-simple li.product .product-thumb .product-buttons-wrapper.product-icons .button:hover,

    .woocommerce ul.products.product-thumb-buttonelement-style-simple li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline:hover,
    .woocommerce ul.products.product-thumb-buttonelement-style-simple li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline a:hover,
    .woocommerce ul.products.product-thumb-buttonelement-style-simple li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline a.button:hover,
    .woocommerce ul.products.product-thumb-buttonelement-style-simple li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline button:hover,
    .woocommerce ul.products.product-thumb-buttonelement-style-simple li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline button.button:hover,
    .woocommerce ul.products.product-thumb-buttonelement-style-simple li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline .button:hover,

    .woocommerce ul.products.product-content-iconsgroup-style-simple li.product .product-details .product-buttons-wrapper.product-icons a:hover,
    .woocommerce ul.products.product-content-iconsgroup-style-simple li.product .product-details .product-buttons-wrapper.product-icons a.button:hover,
    .woocommerce ul.products.product-content-iconsgroup-style-simple li.product .product-details .product-buttons-wrapper.product-icons button:hover,
    .woocommerce ul.products.product-content-iconsgroup-style-simple li.product .product-details .product-buttons-wrapper.product-icons button.button:hover,
    .woocommerce ul.products.product-content-iconsgroup-style-simple li.product .product-details .product-buttons-wrapper.product-icons .button:hover,

    .woocommerce ul.products.product-content-buttonelement-style-simple li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline:hover,
    .woocommerce ul.products.product-content-buttonelement-style-simple li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline a:hover,
    .woocommerce ul.products.product-content-buttonelement-style-simple li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline a.button:hover,
    .woocommerce ul.products.product-content-buttonelement-style-simple li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline button:hover,
    .woocommerce ul.products.product-content-buttonelement-style-simple li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline button.button:hover,
    .woocommerce ul.products.product-content-buttonelement-style-simple li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline .button:hover,

    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons a:hover,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons a.button:hover,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons button:hover,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons button.button:hover,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons .button:hover,

    .woocommerce ul.products[class*="product-thumb-buttonelement-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline:hover,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline a:hover,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline a.button:hover,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline button:hover,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline button.button:hover,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline .button:hover,

    .woocommerce ul.products[class*="product-content-iconsgroup-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-icons a:hover,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-icons a.button:hover,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-icons button:hover,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-icons button.button:hover,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-icons .button:hover,

    .woocommerce ul.products[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline:hover,
    .woocommerce ul.products[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline a:hover,
    .woocommerce ul.products[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline a.button:hover,
    .woocommerce ul.products[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline button:hover,
    .woocommerce ul.products[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline button.button:hover,
    .woocommerce ul.products[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline .button:hover,

    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons a,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons a.button,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons button,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons button.button,
    .woocommerce ul.products[class*="product-thumb-iconsgroup-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons .button,

    .woocommerce ul.products[class*="product-thumb-buttonelement-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline a,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline a.button,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline button,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline button.button,
    .woocommerce ul.products[class*="product-thumb-buttonelement-style-skinbrdrfill"] li.product .product-thumb .product-buttons-wrapper.product-button .wc_btn_inline .button,

    .woocommerce ul.products[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons a,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons a.button,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons button,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons button.button,
    .woocommerce ul.products[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons .button,

    .woocommerce ul.products[class*="product-content-buttonelement-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline,
    .woocommerce ul.products[class*="product-content-buttonelement-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline a,
    .woocommerce ul.products[class*="product-content-buttonelement-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline a.button,
    .woocommerce ul.products[class*="product-content-buttonelement-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline button,
    .woocommerce ul.products[class*="product-content-buttonelement-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline button.button,
    .woocommerce ul.products[class*="product-content-buttonelement-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline .button,

    .woocommerce ul.products.dt-reebok-layout li.product .product-wrapper .product-details .product-title h5 a:not(:hover),
    .woocommerce nav.woocommerce-pagination ul li a,
    .woocommerce nav.woocommerce-pagination ul li a,
    .woocommerce nav.woocommerce-pagination ul li span,
    a.shipping-calculator-button:hover,
    .woocommerce-form__label-for-checkbox>span::before,
    .woocommerce .woocommerce-shipping-methods input[type="radio"]~label::before,
    .woocommerce-page #payment.woocommerce-checkout-payment ul.payment_methods li input[type="radio"]~label::before,
    .comment-form-dt-privatepolicy input[type="checkbox"]~label::before,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
    .woocommerce form.login .woocommerce-form-row label:before,
    .woocommerce form.register .woocommerce-form-row label:before {
        color: #ffffff;
    }

    .dt-inline-modal>h4 {
        background-color: #ffffff;
    }

    .dt-header-menu ul.dt-primary-nav li>a:hover,
    .dt-header-menu ul.dt-primary-nav li:hover>a,
    .dt-header-menu ul.dt-primary-nav li ul.children li>a:hover,
    .dt-header-menu ul.dt-primary-nav li ul.children li:hover>a,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li>a:hover,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li:hover>a,

    .dt-header-menu ul.dt-primary-nav li.current-menu-item>a,
    .dt-header-menu ul.dt-primary-nav li.current-page-item>a,
    .dt-header-menu ul.dt-primary-nav li.current-menu-ancestor>a,
    .dt-header-menu ul.dt-primary-nav li.current-page-ancestor>a,

    .dt-header-menu ul.dt-primary-nav li.current_menu_item>a,
    .dt-header-menu ul.dt-primary-nav li.current_page_item>a,
    .dt-header-menu ul.dt-primary-nav li.current_menu_ancestor>a,
    .dt-header-menu ul.dt-primary-nav li.current_page_ancestor>a,

    .dt-header-menu ul.dt-primary-nav li ul.children li.current-menu-item>a,
    .dt-header-menu ul.dt-primary-nav li ul.children li.current-page-item>a,
    .dt-header-menu ul.dt-primary-nav li ul.children li.current-menu-ancestor>a,
    .dt-header-menu ul.dt-primary-nav li ul.children li.current-page-ancestor>a,

    .dt-header-menu ul.dt-primary-nav li ul.children li.current_menu_item>a,
    .dt-header-menu ul.dt-primary-nav li ul.children li.current_page_item>a,
    .dt-header-menu ul.dt-primary-nav li ul.children li.current_menu_ancestor>a,
    .dt-header-menu ul.dt-primary-nav li ul.children li.current_page_ancestor>a,

    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-item>a,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-page-item>a,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-ancestor>a,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-page-ancestor>a,

    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_item>a,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item>a,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_ancestor>a,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_ancestor>a,

    .mobile-menu ul.dt-primary-nav li>a:hover,
    .mobile-menu ul.dt-primary-nav li:hover>a,
    .mobile-menu ul.dt-primary-nav li ul.children li>a:hover,
    .mobile-menu ul.dt-primary-nav li ul.children li:hover>a,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li>a:hover,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li:hover>a,

    .mobile-menu ul.dt-primary-nav li.current-menu-item>a,
    .mobile-menu ul.dt-primary-nav li.current-page-item>a,
    .mobile-menu ul.dt-primary-nav li.current-menu-ancestor>a,
    .mobile-menu ul.dt-primary-nav li.current-page-ancestor>a,

    .mobile-menu ul.dt-primary-nav li.current_menu_item>a,
    .mobile-menu ul.dt-primary-nav li.current_page_item>a,
    .mobile-menu ul.dt-primary-nav li.current_menu_ancestor>a,
    .mobile-menu ul.dt-primary-nav li.current_page_ancestor>a,

    .mobile-menu ul.dt-primary-nav li ul.children li.current-menu-item>a,
    .mobile-menu ul.dt-primary-nav li ul.children li.current-page-item>a,
    .mobile-menu ul.dt-primary-nav li ul.children li.current-menu-ancestor>a,
    .mobile-menu ul.dt-primary-nav li ul.children li.current-page-ancestor>a,

    .mobile-menu ul.dt-primary-nav li ul.children li.current_menu_item>a,
    .mobile-menu ul.dt-primary-nav li ul.children li.current_page_item>a,
    .mobile-menu ul.dt-primary-nav li ul.children li.current_menu_ancestor>a,
    .mobile-menu ul.dt-primary-nav li ul.children li.current_page_ancestor>a,

    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-item>a,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-page-item>a,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-ancestor>a,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-page-ancestor>a,

    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_item>a,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item>a,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_ancestor>a,
    .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_page_ancestor>a,

    .menu-icons-wrapper .overlay-search #searchform:before,

    .elementor-element.elementor-widget-image-box:hover .elementor-image-box-wrapper .elementor-image-box-content .elementor-image-box-title {
        color: #ffa35a;
    }

    .dt-skin-secondary-color,
    .elementor-element .dt-skin-secondary-color .elementor-heading-title,
    .commententries ul.commentlist li .reply a.comment-reply-login:hover,
    .blog-single-entry.post-overlap>.entry-meta-group>.entry-categories>.category-wrap>a:hover,
    .blog-single-entry.post-overlap>.entry-categories>.category-wrap>a:hover,
    .blog-single-entry.post-overlap>.entry-meta-group .entry-likes-views .dt-sc-like-views>div>a:hover,
    .blog-single-entry.post-overlap>.entry-meta-group>.entry-author>.author-wrap>a:hover,
    .blog-single-entry.post-overlap>.entry-author>.author-wrap>a:hover,
    .blog-single-entry[class*="post-custom-classic"] .entry-post-navigation>div>.nav-title-wrap h3 a:hover,
    .post-custom-minimal.blog-single-entry .entry-post-navigation>.post-prev-link h3 a:hover,
    .dt-sc-header-icons-list>div.loginlogout-item a:hover i,

    .dt-advanced-carousel-wrapper:hover .slick-arrow:hover,
    .dt-advanced-carousel-wrapper:hover .slick-arrow:focus,
    .dt-advanced-carousel-item-wrapper.slick-current.slick-active .testimonial-wrapper .author-name .elementor-heading-title,
    .dt-advanced-carousel-item-wrapper .testimonial-wrapper:hover .author-name .elementor-heading-title,
    .header-contact-info .elementor-icon-box-wrapper:hover .elementor-icon-box-content .elementor-icon-box-title,
    .header-contact-info .elementor-icon-box-wrapper:hover .elementor-icon-box-content .elementor-icon-box-title a,
    .footer-social-share .elementor-social-icon:hover i,
    .elementor-element .elementor-jet-pricing-table .pricing-table:hover .pricing-table__title,
    .side-navigation.type3 ul.side-nav>li.current_page_item>a,
    .side-navigation.type3 ul.side-nav>li.current_page_item>a:before,
    .side-navigation.type3 ul.side-nav>li:hover>a,
    .side-navigation.type3 ul.side-nav>li:hover>a:before,
    .elementor-element.contact-info .elementor-icon-box-title,
    .elementor-element.contact-info .elementor-icon-box-icon span,
    .elementor-element.contact-info .elementor-icon-box-content .elementor-icon-box-description a:hover,
    .side-navigation.type4 ul.side-nav li.current_page_item a,
    .side-navigation.type4 ul.side-nav li:hover a,
    .blog-single-entry.post-custom-classic .entry-categories a,
    .blog-single-entry.post-custom-classic .entry-meta-group .entry-author a:hover,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry:hover .entry-title h4 a,
    .post-nav-container.type3 div:hover *,

    body .blog-single-entry ul li .comment-body .comment-author a:hover,
    body .blog-single-entry ul li .comment-body .comment-content a:hover,
    .dtportfolio-item .details-holder .categories a,
    .dtportfolio-item .details-holder h2:hover a,
    .woocommerce .woocommerce-MyAccount-content a:not(.button):hover,

    .secondary-sidebar .widget ul li>a:hover,
    .secondary-sidebar .widget ul li>span>a:hover,
    .secondary-sidebar .widget .recent-posts-widget li .entry-title h4 a:hover,
    .secondary-sidebar .widget .recent-posts-widget li .entry-meta a:hover,
    .dt-sc-post-entry.dt-sc-content-overlay-style .blog-entry .entry-button a.dt-sc-button:hover,

    .header-contact-info .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-description a:hover,
    .comment-metadata a:hover,
    .woocommerce.single-product div.product form.cart div.quantity:not(.quantity-with-plusminus)>a>i:hover,
    .woocommerce .product .summary .product_meta>span a:hover,
    .commententries .nav-links>div a:hover,
    .blog-single-entry .entry-body tbody th a:hover,
    ul.time-table>li:hover>span,
    ul.time-table>li.selected>span,
    .dt-sc-service-item:hover .service-details h3 a,
    .dt-sc-person-item:hover .person-details h3 a,
    .woocommerce-checkout #payment ul.payment_methods li a:hover,
    .woocommerce-MyAccount-navigation>ul li a:hover,
    .menu-item .active-tab .jet-tabs__label-text,
    .mobile-menu .menu-item .active-tab .jet-tabs__label-text,
    .dt-sc-iconbox-wrapper:hover .dt-sc-iconbox-description h3 a {
        color: #ffa35a;
    }

    .dt-skin-secondary-bg,
    div[class*="dt-skin-secondary-bg-opaque"] .upb_row_bg:before,
    section[class*="dt-skin-secondary-bg-opaque"]:before,
    input[type="submit"]:hover,
    input[type="button"]:hover,
    input[type="reset"]:hover,
    button[type="button"]:hover,
    .button:hover,
    a.button:hover,
    .mz-blog .comments a:hover,
    .mz-blog div.vc_gitem-post-category-name:hover,
    .dt-sc-infinite-portfolio-load-more:hover,
    .side-navigation.type2 ul.side-nav li a:before,
    .side-navigation.type2 ul.side-nav>li.current_page_item>a:before,
    .side-navigation.type2 ul.side-nav>li>ul>li.current_page_item>a:before,
    .side-navigation.type2 ul.side-nav>li>ul>li>ul>li.current_page_item>a:before,
    .slick-dots li,
    .dt-related-carousel .carousel-pager>a,
    .dt-related-carousel div[class*=carousel-]>div:hover,
    #wpsl-stores li>p~.wpsl-directions:hover,
    /* New */
    .intro-section .elementor-column-wrap.elementor-element-populated .elementor-widget-button a.elementor-button:hover,
    .dt-sc-button:hover,
    .dt-sc-button:focus,
    div[class*="entry-"].dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-meta-group>div:not(:last-child):before,
    ul.time-table>li ul.time-slots>li a:hover,
    ul.time-table>li ul.time-slots>li a.selected,
    ul.time-table>li ul.time-slots>li a.selected:hover,
    ul.time-slots>li a:hover,
    .dt-sc-schedule-progress.dt-sc-current-step .dt-sc-progress-step span,

    .dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button:hover,
    .dt-sc-overlap-style.dt-sc-post-entry .blog-entry .entry-format a:hover:after,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry>div.entry-author>a,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry>div.entry-likes-views .dt-sc-like-views>div,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-comments>a,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-categories a:hover,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-likes-views .dt-sc-like-views>div,
    .dt-sc-content-overlay-style.dt-sc-post-entry .blog-entry div.entry-author a,
    .dt-sc-simple-withbg-style.dt-sc-post-entry .blog-entry .entry-button a.dt-sc-button:hover,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry div.entry-format a,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry.sticky div.entry-format a,
    .dt-sc-mobilephone-style.dt-sc-post-entry.entry-cover-layout .blog-entry .entry-button a.dt-sc-button:hover,
    div.dt-sc-posts-meta-group[class*="metagroup-elements-filled"] div[class*="entry-"]:hover,
    article[class*="post-custom"].blog-single-entry div.dt-sc-posts-meta-group[class*="metagroup-elements-filled"] .entry-social-share .share>i,
    .blog-single-entry.post-overlay div[class*="meta-elements-"].entry-social-share:hover .share i,
    .blog-single-entry.post-overlay div[class*="meta-elements-filled"].entry-social-share .share i,
    .blog-single-entry.post-overlap div[class*="meta-elements-"].entry-social-share:hover .share i,
    .blog-single-entry.post-overlap div[class*="meta-elements-filled"].entry-social-share .share i,
    article[class*="custom-"].blog-single-entry div[class*="meta-elements-"].entry-social-share .share i,
    .elementor-button.dt-elementor-button:hover,
    .elementor-button.dt-elementor-button.dt-bordered:hover,
    #toTop,
    .dt-sc-header-icons-list>div.search-item .dt-sc-search-form-container.search-overlay .dt-sc-search-overlay-form-close:hover,
    .elementor-element.elementor-widget-button .elementor-widget-container a.elementor-button:hover,
    inputinput[type="submit"]:hover,
    input[type="button"]:hover,
    input[type="reset"]:hover,
    button[type="button"]:hover,
    .button:hover,
    a.button:hover,
    span#toTopHover,

    #searchform:hover:before,
    .wp-block-button:not(.is-style-outline) .wp-block-button__link:hover,
    .tagcloud a:hover {
        background-color: #ffa35a;
    }

    .woocommerce ul.products li.product .product-buttons-wrapper.product-button .wc_inline_buttons .wc_btn_inline,
    .woocommerce ul.products li.product .product-buttons-wrapper.product-icons a,
    .woocommerce ul.products li.product .product-buttons-wrapper.product-icons button,
    .woocommerce ul.products li.product .product-buttons-wrapper.product-icons .button,
    .woocommerce ul.products li.product .product-buttons-wrapper.product-icons a.button,

    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    .woocommerce #respond input#submit.alt,
    .woocommerce .wishlist_table .add_to_cart.button,
    .woocommerce .yith-wcwl-popup-button a.add_to_wishlist,
    .woocommerce .wishlist_table a.ask-an-estimate-button,
    .woocommerce .wishlist-title a.show-title-form,
    .woocommerce .hidden-title-form a.hide-title-form,
    .woocommerce .yith-wcwl-wishlist-new button,
    .woocommerce .wishlist_manage_table a.create-new-wishlist,
    .woocommerce .wishlist_manage_table button.submit-wishlist-changes,
    .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button,
    .woocommerce .cart input.button,
    .woocommerce .shop_table th,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after,
    .woocommerce-page a.button,
    .woocommerce-page button.button,
    .woocommerce-page button,
    .woocommerce-page input.button,
    .woocommerce-page input[type=button],
    .woocommerce-page input[type=submit],
    .woocommerce-page #respond input#submit,
    .woocommerce-page a.button.alt,
    .woocommerce-page button.button.alt,
    .woocommerce-page input.button.alt,
    .woocommerce-page #respond input#submit.alt,
    .woocommerce-page .wishlist_table .add_to_cart.button,
    .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist,
    .woocommerce-page .wishlist_table a.ask-an-estimate-button,
    .woocommerce-page .wishlist-title a.show-title-form,
    .woocommerce-page .hidden-title-form a.hide-title-form,
    .woocommerce-page .yith-wcwl-wishlist-new button,
    .woocommerce-page .wishlist_manage_table a.create-new-wishlist,
    .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes,
    .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button,
    .woocommerce-page .cart input.button,

    .woocommerce-page .shop_table th,
    .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a:after,
    .woocommerce ul.products li.product .featured-tag,
    .woocommerce ul.products li.product:hover .featured-tag,
    .woocommerce.single-product .featured-tag,
    .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
    .woocommerce ul.products li.product .dt-default .product-buttons-wrapper .wc_inline_buttons>.wc_btn_inline a:hover,
    .woocommerce .view-mode a:hover,
    .woocommerce .view-mode a.active,
    .swiper-button-prev,
    .swiper-button-next,
    .woocommerce ul.products li.product .dt-default .product-buttons-wrapper a.added_to_cart.wc-forward,

    .woocommerce .product .summary a.button:hover,
    .woocommerce .product .summary button.button:hover,
    .woocommerce .product .summary button:hover,
    .woocommerce .product .summary .button:hover,
    .woocommerce .product .summary .compare:hover,
    .woocommerce .product .summary .dt-wcsg-button:hover,
    .woocommerce .product .summary .yith-wcqv-button:hover,
    .woocommerce .product .summary .yith-wcwl-add-to-wishlist a:hover,

    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline a,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline a.button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline button.button,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline .button.alt,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline .button.disabled,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline .button[disabled],
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline .button.alt.disabled,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-skin-bgfill .wc_btn_inline .button.alt[disabled],

    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline a:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline a.button:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline button:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline button.button:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline .button.alt:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline .button.disabled:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline .button[disabled]:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline .button.alt.disabled:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.style-bgfill .wc_btn_inline .button.alt[disabled]:hover,

    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.product-button.style-bgfill.hide-button-text .compare:hover,
    .woocommerce .product .dt-sc-product-summary .product-buttons-wrapper.product-button.style-bgfill.hide-button-text .yith-wcwl-add-to-wishlist a:hover,

    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-share-container.style-bgfill .dt-sc-single-product-share-list li a:hover,
    .woocommerce .product .dt-sc-product-summary .dt-sc-single-product-follow-container.style-bgfill .dt-sc-single-product-follow-list li a:hover,

    .dt-sc-single-product-share-container.style-bgfill .dt-sc-single-product-share-list li a:hover,
    .dt-sc-single-product-follow-container.style-bgfill .dt-sc-single-product-follow-list li a:hover,

    .dt-sc-single-product-share-container.style-skin-bgfill .dt-sc-single-product-share-list li a,
    .dt-sc-single-product-follow-container.style-skin-bgfill .dt-sc-single-product-follow-list li a,

    .woocommerce div.product .dt-sc-product-tabs .woocommerce-tabs ul.tabs li a:before,
    .woocommerce div.product .dt-sc-product-tabs .woocommerce-tabs ul.tabs li a:after,

    .woocommerce .product>.summary form.cart div.quantity~.single_add_to_cart_button:hover,
    .dt-sc-shop-single-sticky-addtocart-section a.added_to_cart.wc-forward,
    .woocommerce-page .woocommerce .dt-sc-cart-coupon-holder .coupon .button:hover,
    .woocommerce-page .woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout a:hover,
    .woocommerce-account .woocommerce .woocommerce-MyAccount-content button:hover,
    .woocommerce form.login .button:hover,
    .woocommerce .wishlist_table td.product-add-to-cart a:hover,
    .woocommerce .cart-collaterals table.shop_table tr td .woocommerce-shipping-calculator button:hover,
    .woocommerce-checkout-header .woocommerce-checkout-header-coupon .checkout_coupon .form-row-last .button:hover,
    .woocommerce-checkout #payment div.form-row.place-order>#place_order:hover,

    .dt-sc-shop-menu-icon ul.cart_list li a.remove:hover,
    .dt-sc-product-pagination ul li a:hover,
    .dt-sc-product-pagination ul li span.current,
    .dt-sc-product-pagination .prev-post a:hover,
    .dt-sc-product-pagination .next-post a:hover,

    .woocommerce ul.products.dt-redart-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a:after,
    .woocommerce ul.products.dt-redart-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a.button:after,
    .woocommerce ul.products.dt-redart-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button:after,
    .woocommerce ul.products.dt-redart-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button.button:after,
    .woocommerce ul.products.dt-redart-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline .button:after,

    .woocommerce ul.products.dt-petworld-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a:hover,
    .woocommerce ul.products.dt-petworld-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a.button:hover,
    .woocommerce ul.products.dt-petworld-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button:hover,
    .woocommerce ul.products.dt-petworld-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button.button:hover,
    .woocommerce ul.products.dt-petworld-layout[class*="product-thumb-iconsgroup-style-skinbgfill"] li.product .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline .button:hover,

    .woocommerce ul.products.dt-spalab-layout[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a:hover:after,
    .woocommerce ul.products.dt-spalab-layout[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a.button:hover:after,
    .woocommerce ul.products.dt-spalab-layout[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button:hover:after,
    .woocommerce ul.products.dt-spalab-layout[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button.button:hover:after,
    .woocommerce ul.products.dt-spalab-layout[class*="product-content-iconsgroup-style-skinbrdrfill"] li.product .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline .button:hover:after,

    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline a.button,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline button.button,
    .woocommerce ul.products.dt-hifashion-layout li.product:hover .product-wrapper .product-details .product-buttons-wrapper.product-icons .wc_inline_buttons>.wc_btn_inline .button,

    .woocommerce ul.products.dt-petworld-layout li.product .product-price .price,

    .woocommerce ul.products.dt-breezewedding-layout li.product .product-thumb-content .product-element-group-wrapper .product-title h5 a,
    .woocommerce ul.products.dt-breezewedding-layout li.product .product-thumb-content .product-element-group-wrapper .product-price,
    .woocommerce-cart-form .actions.dt-sc-cart-button button:hover,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~button,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~button.button,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~.button:hover,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~.button.alt:hover {
        background-color: #ffa35a;
    }

    .woocommerce ul.products.dt-augury-default li.product .product-thumb .product-buttons-wrapper.product-icons a:hover,
    .woocommerce ul.products.dt-augury-default li.product .product-thumb .product-buttons-wrapper.product-icons a.button:hover,
    .woocommerce ul.products.dt-augury-default li.product .product-thumb .product-buttons-wrapper.product-icons button:hover,
    .woocommerce ul.products.dt-augury-default li.product .product-thumb .product-buttons-wrapper.product-icons button.button:hover,
    .woocommerce ul.products.dt-augury-default li.product .product-thumb .product-buttons-wrapper.product-icons .button:hover,

    .woocommerce ul.products.dt-augury-default[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline:hover {
        background-color: #ffa35a !important;
    }

    .dt-sc-simple-style.dt-sc-post-entry .blog-entry:hover .entry-button a.dt-sc-button:hover span,
    .elementor-element.our-services-box:hover .elementor-button-wrapper a.elementor-button,
    .dt-advanced-carousel-item-wrapper.slick-current.slick-active .testimonial-wrapper .author-name .elementor-heading-title:after,
    .dt-advanced-carousel-item-wrapper .testimonial-wrapper:hover .author-name .elementor-heading-title:after,
    .elementor-element .elementor-jet-pricing-table .pricing-table:hover .pricing-table__action a,
    .pagination a.loadmore-btn.more-items:hover {
        background-color: #ffa35a;
    }

    .dt-skin-secondary-border,
    .side-navigation.type5 ul.side-nav,
    .side-navigation.type5 ul.side-nav li a,
    .side-navigation.type5 ul.side-nav li ul,
    /* New */
    .intro-section .elementor-column-wrap.elementor-element-populated:hover .elementor-widget-button a.elementor-button,
    .dt-sc-simple-style.dt-sc-post-entry .blog-entry:hover .entry-button a.dt-sc-button span,
    .active-centered .dt-sc-simple-style.dt-sc-post-entry.entry-grid-layout:nth-child(3) .blog-entry .entry-button a.dt-sc-button span,
    .fullwidth-icon-carousel .elementor-column-gap-extended>.elementor-row>.elementor-column>.elementor-element-populated .elementor-widget-button a.elementor-button:hover,
    .fullwidth-icon-carousel .elementor-column-gap-extended>.elementor-row>.elementor-column>.elementor-element-populated:hover .elementor-widget-button a.elementor-button,
    .elementor-button.dt-elementor-button.dt-bordered:hover,
    .elementor-element.elementor-widget-button .elementor-widget-container a.elementor-button:hover,
    input[type="submit"]:hover,
    input[type="button"]:hover,
    input[type="reset"]:hover,
    button[type="button"]:hover,
    .button:hover,
    a.button:hover,
    .no-header-menu ul li ul.children,
    .dt-header-menu ul.dt-primary-nav li ul.sub-menu,
    .woocommerce ul.products.dt-augury-default[class*="product-content-buttonelement-style-brdrfill"] li.product .product-details .product-buttons-wrapper.product-button .wc_btn_inline:hover,
    .widget #searchform:hover input[type="submit"],
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~button,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~button.button,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~.button:hover,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple form.cart div.quantity~.button.alt:hover,
    .woocommerce .product .summary .product-button.style-simple .yith-wcwl-add-to-wishlist a:hover,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple .wc_btn_inline a:hover,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple .wc_btn_inline a.button:hover,
    .woocommerce .product .summary .product-button.style-simple .yith-wcwl-add-to-wishlist a:hover,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple .wc_btn_inline a:hover,
    .dt-sc-product-summary .product-buttons-wrapper.style-simple .wc_btn_inline a.button:hover,
    .woocommerce #review_form #respond .form-submit input:hover,
    .dt-sc-button:hover,
    .dt-sc-button:focus,
    .dt-sc-schedule-progress.dt-sc-current-step .dt-sc-progress-step span,
    .loadmore-btn.more-items:hover,
    .woocommerce.single-product .images .featured-tag:after,
    .dt-sc-product-image-gallery-container .featured-tag:after {
        border-color: #ffa35a;
    }

    .error404 .type2 a.dt-sc-back:hover {
        background-color: #ffa35a;
    }

    #item-header-content #item-meta>#item-buttons .group-button:hover,
    #buddypress .activity-list li.load-more a:hover,
    #buddypress .activity-list li.load-newest a:hover {
        background-color: #ffa35a;
    }

    #bbpress-forums #subscription-toggle a.subscription-toggle:hover,
    .bbp-submit-wrapper #bbp_topic_submit:hover {
        background-color: #ffa35a;
    }

    #tribe-bar-form .tribe-bar-submit input[type="submit"]:hover,
    .tribe-events-read-more:hover,
    #tribe-events .tribe-events-button:hover,
    .tribe-events-button:hover,
    .tribe-events-back>a:hover,
    .datepicker thead tr:first-child th:hover,
    .datepicker tfoot tr th:hover,
    #tribe_events_filters_toggle:hover,
    .tribe-events-grid .tribe-grid-header .tribe-week-today,
    .tribe-grid-body div[id*="tribe-events-event-"]:hover {
        background-color: #ffa35a;
    }

    .tribe-grid-header .tribe-week-today {
        background-color: #ffa35a;
    }

    .woocommerce ul.products li.product .product-buttons-wrapper.product-icons .wc_inline_buttons .wc_btn_inline a:hover,
    .woocommerce ul.products li.product .product-buttons-wrapper.product-icons .wc_inline_buttons .wc_btn_inline button:hover,

    .woocommerce a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce button:hover,
    .woocommerce input.button:hover,
    .woocommerce input[type=button]:hover,
    .woocommerce input[type=submit]:hover,
    .woocommerce #respond input#submit:hover,

    .woocommerce a.button.alt:hover,
    .woocommerce button.button.alt:hover,
    .woocommerce input.button.alt:hover,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce .wishlist_table .add_to_cart.button:hover,
    .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover,
    .woocommerce .wishlist_table a.ask-an-estimate-button:hover,
    .woocommerce .wishlist-title a.show-title-form:hover,
    .woocommerce .hidden-title-form a.hide-title-form:hover,
    .woocommerce .yith-wcwl-wishlist-new button:hover,
    .woocommerce .wishlist_manage_table a.create-new-wishlist:hover,
    .woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover,
    .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover,
    .woocommerce .cart input.button:hover,

    .woocommerce-page a.button:hover,
    .woocommerce-page button.button:hover,
    .woocommerce-page button:hover,
    .woocommerce-page input.button:hover,
    .woocommerce-page input[type=button]:hover,
    .woocommerce-page input[type=submit]:hover,
    .woocommerce-page #respond input#submit:hover,
    .woocommerce-page a.button.alt:hover,
    .woocommerce-page button.button.alt:hover,
    .woocommerce-page input.button.alt:hover,
    .woocommerce-page #respond input#submit.alt:hover,
    .woocommerce-page .wishlist_table .add_to_cart.button:hover,
    .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist:hover,
    .woocommerce-page .wishlist_table a.ask-an-estimate-button:hover,
    .woocommerce-page .wishlist-title a.show-title-form:hover,
    .woocommerce-page .hidden-title-form a.hide-title-form:hover,
    .woocommerce-page .yith-wcwl-wishlist-new button:hover,
    .woocommerce-page .wishlist_manage_table a.create-new-wishlist:hover,
    .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes:hover,
    .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover,
    .woocommerce-page .cart input.button:hover,

    .woocommerce a.button.disabled:hover,
    .woocommerce a.button:disabled:hover,
    .woocommerce a.button:disabled[disabled]:hover,
    .woocommerce button.button.disabled:hover,
    .woocommerce button.button:disabled:hover,
    .woocommerce button.button:disabled[disabled]:hover,
    .woocommerce input.button.disabled:hover,
    .woocommerce input.button:disabled:hover,
    .woocommerce input.button:disabled[disabled]:hover,
    .woocommerce #respond input#submit.disabled:hover,
    .woocommerce #respond input#submit:disabled:hover,
    .woocommerce #respond input#submit:disabled[disabled]:hover,

    .woocommerce a.button.alt.disabled,
    .woocommerce a.button.alt[disabled]:disabled,
    .woocommerce button.button.alt.disabled,
    .woocommerce button.button.alt:disabled,
    .woocommerce button.button.alt[disabled]:disabled,
    .woocommerce input.button.alt.disabled,
    .woocommerce input.button.alt:disabled,
    .woocommerce input.button.alt[disabled]:disabled,
    .woocommerce #respond input#submit.alt.disabled,
    .woocommerce #respond input#submit.alt:disabled,
    .woocommerce #respond input#submit.alt[disabled]:disabled,

    .woocommerce a.button.alt.disabled:hover,
    .woocommerce a.button.alt[disabled]:disabled:hover,
    .woocommerce button.button.alt.disabled:hover,
    .woocommerce button.button.alt:disabled:hover,
    .woocommerce button.button.alt[disabled]:disabled:hover,
    .woocommerce input.button.alt.disabled:hover,
    .woocommerce input.button.alt:disabled:hover,
    .woocommerce input.button.alt[disabled]:disabled:hover,
    .woocommerce #respond input#submit.alt.disabled:hover,
    .woocommerce #respond input#submit.alt:disabled:hover,
    .woocommerce #respond input#submit.alt[disabled]:disabled:hover,
    .commentlist li.comment .reply a:hover {
        background-color: #ffa35a;
    }

    .our-services-box:hover .elementor-button-wrapper a.elementor-button,
    .elementor-element .header-author .elementor-image a:hover img,
    .woocommerce ul.products.product-overlay-dark-bgcolor[class*="product-thumb-iconsgroup-style-brdrfill"] li.product .product-thumb .product-buttons-wrapper.product-icons a:hover,
    .commentlist li.comment .reply a:hover {
        border-color: #ffa35a;
    }

    .dt-skin-tertiary-color {
        color: #ffffff;
    }

    .elementor-widget-icon-box.elementor-view-stacked.ico-type1.alter .elementor-icon,
    .elementor-widget-image-box.ico-type1.alter .elementor-image-box-img {
        background-color: #ffffff;
    }

    .dt-skin-tertiary-border {
        border-color: #ffffff;
    }

    .dt-skin-tertiary-bg,
    div[class*="dt-skin-tertiary-bg-opaque"] .upb_row_bg:before,
    section[class*="dt-skin-tertiary-bg-opaque"]:before,
    .side-navigation.type1 ul.side-nav>li.current_page_item>a,
    .side-navigation.type1 ul.side-nav>li>ul>li.current_page_item>a,
    .side-navigation.type1 ul.side-nav>li>ul>li>ul>li.current_page_item>a,
    .dt-sc-shop-single-sticky-addtocart-section a.added_to_cart.wc-forward:hover {
        background-color: #ffffff;
    }

    .dt-skin-tertiary-border,
    .elementor-widget-dt-counter .dt-sc-counter-wrapper.type2 .dt-sc-counter-inner {
        border-color: #ffffff;
    }
    </style>
    <style id='augury-customiser-inline-inline-css' type='text/css'>
    body,
    .woocommerce ul.products li .product-wrapper,
    .woocommerce-tabs .panel,
    .select2-results,
    .woocommerce table .quantity .qty,
    .select2-dropdown .select2-search .select2-search__field,
    .dt-sc-schedule-progress .dt-sc-progress-step span,
    .dt-sc-goback-box .appointment-goback {
        background-color: #030303;
        /* background-image: linear-gradient(to bottom right, #1a7631, #afd52e); */
    }

    /* body { color:#a3a1a1;} */
    #main {
        background-image: url(https://ศรีภุชงค์ทรัพย์อนันต.com/resources/img/bg/380417699_7126913317319857_6715888784578953039_n.png);
        background-size: cover;
        background-position: center;
    }

    a {
        color: #ffffff;
    }

    a:hover {
        color: #ffa35a;
    }

    body {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 300;
        font-style: normal;
        text-transform: none;
        font-size: 1.2rem;
        line-height: 36px;
    }

    .no-header-menu ul li a,
    .dt-header-menu .dt-primary-nav li a {
        color: #ffffff;
    }

    h1 {
        color: #ffffff;
    }

    h2 {
        color: #ffffff;
    }

    h3 {
        color: #ffffff;
    }

    h4 {
        color: #ffffff;
    }

    h5 {
        color: #ffffff;
    }

    h6 {
        color: #ffffff;
    }

    .no-header-menu ul li a,
    .dt-header-menu .dt-primary-nav li a {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 600;
        font-style: normal;
        text-transform: uppercase;
        font-size: 15px;
    }

    h1 {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 60px;
        line-height: 1.5em;
    }

    h2 {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 55px;
        line-height: 68px;
    }

    h3 {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 38px;
    }

    h4 {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 28px;
    }

    h5 {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 22px;
    }

    h6 {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 18px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="url"],
    input[type="tel"],
    input[type="number"],
    input[type="range"],
    input[type="date"],
    textarea,
    input.text,
    input[type="search"],
    select,
    textarea,
    .form-calender-icon input[type="text"],
    .select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    #main-menu ul.menu>li>a,
    .dt-sc-portfolio-sorting a,
    .minimal .dt-sc-price p,
    .dt-sc-bar-text,
    .pagination,
    .dt-sc-any-carousel-wrapper .swiper-slide .dt-swiper-content-title,
    .dt-sc-any-carousel-wrapper .slick-slide .dt-slick-content-title,
    .woocommerce div.product .dt-sc-product-tabs .woocommerce-tabs ul.tabs li a,
    .woocommerce #review_form #respond .comment-reply-title {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 700;
        font-style: normal;
    }

    .secondary-sidebar .widgettitle,
    .secondary-sidebar .widgettitle>a,
    .secondary-sidebar .type2 .widgettitle,
    .secondary-sidebar .type10 .widgettitle,
    .secondary-sidebar .type10 .widgettitle>a,
    .secondary-sidebar .type17 .widget-title-wrapper .widget-title-content h2,
    .secondary-sidebar .type17 .widget-title-content h3.widgettitle,
    .secondary-sidebar .type17 .widget-title-content h3.widgettitle>a,
    .secondary-sidebar .type14 .widgettitle,
    .secondary-sidebar .type15 .widgettitle,
    .mz-stripe-title .mz-stripe-title-content h3.widgettitle {
        color: #ffffff
    }

    .secondary-sidebar .widget {
        color: #ffffff;
    }

    .secondary-sidebar .widget ul li>a,
    .secondary-sidebar .widget ul li>span>a,
    .secondary-sidebar .widget .recent-posts-widget li .entry-title h4 a,
    .secondary-sidebar .widget .recent-posts-widget li .entry-meta a {
        color: #ffffff;
    }

    .secondary-sidebar .widget ul li>a:hover,
    .secondary-sidebar .widget ul li>span>a:hover,
    .secondary-sidebar .widget .recent-posts-widget li .entry-title h4 a:hover,
    .secondary-sidebar .widget .recent-posts-widget li .entry-meta a:hover {
        color: #ffa35a;
    }

    .secondary-sidebar .widgettitle {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .secondary-sidebar .widget {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 300;
        font-style: normal;
    }

    div.footer-widgets .widgettitle,
    #footer .widgettitle {
        color: #ffffff;
    }

    #footer,
    .footer-copyright,
    div.footer-widgets .widget {
        color: #ffffff;
    }

    .footer-widgets a,
    #footer a {
        color: #ffffff;
    }

    .footer-widgets a:hover,
    #footer a:hover {
        color: #000000;
    }

    div.footer-widgets .widgettitle,
    #footer .widgettitle {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 25px;
        line-height: 36px;
    }

    #footer,
    .footer-copyright,
    div.footer-widgets .widget {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 300;
        font-style: normal;
        font-size: 25px;
        line-height: 36px;
        padding-top: 100px;
        background: rgba(0, 0, 0, 0.4);
    }

    .site-title {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 36px;
        line-height: 60px;
    }

    .site-tag-line {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .main-title-section-wrapper .main-title-section-bg {
        background-image: url(https://dtaugury.wpengine.com/wp-content/uploads/2020/01/breadcrumb.jpg);
        background-position: center center;
        background-size: auto;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }

    .main-title-section-wrapper .main-title-section-bg:after {
        background-color: rgba(0, 0, 0, 0)
    }

    .main-title-section h1,
    .dark-bg-breadcrumb .main-title-section h1 {
        color: #ffffff;
    }

    .breadcrumb span.current,
    .dark-bg-breadcrumb .breadcrumb span.current {
        color: #ffffff;
    }

    .breadcrumb a,
    .dark-bg-breadcrumb .breadcrumb a,
    .dark-bg-breadcrumb .breadcrumb span:not(.current) {
        color: #ffffff;
    }

    .breadcrumb a:hover,
    .dark-bg-breadcrumb .breadcrumb a:hover {
        color: #ffa35a;
    }

    .main-title-section h1 {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: 600;
        font-style: normal;
        text-transform: none;
        font-size: 60px;
        line-height: 68px;
    }

    .breadcrumb {
        font-family: Josefin Sans, 'Josefin Sans', sans-serif;
        font-weight: inherit;
        font-style: normal;
        font-size: 18px;
    }

    .elementor-20331 .elementor-element.elementor-element-8be958c .elementor-heading-title {
        color: #FFFFFF;
        font-size: 25px;
        font-weight: normal;
    }

    .elementor-20331 .elementor-element.elementor-element-e0268d4 .elementor-heading-title {
        color: #FFFFFF;
        font-size: 25px;
        font-weight: 300;
        line-height: 36px;
    }

    .elementor-20331 .elementor-element.elementor-element-33ec241 .elementor-heading-title {
        color: #FFFFFF;
        font-size: 25px;
        font-weight: normal;
    }

    .elementor-20331 .elementor-element.elementor-element-c547f60 {
        text-align: center;
    }

    .elementor-20331 .elementor-element.elementor-element-c547f60 .elementor-heading-title {
        color: #ABABAB;
        font-size: 16px;
        font-weight: 400;
        line-height: 28px;
    }

    body:not(.rtl) .elementor-20398 .elementor-element.elementor-element-8ad355e {
        left: -8%;
    }

    .elementor-20398 .elementor-element.elementor-element-8ad355e {
        width: auto;
        max-width: auto;
        top: -50%;
        z-index: 0;
    }

    #grad {
        background-image: linear-gradient(to bottom right, red, yellow);
    }
    </style>
    <link rel='stylesheet' id='052f9f08db4c06ac39b7b026bb6eb41f-css'
        href='//fonts.googleapis.com/css?family=Josefin+Sans:300&#038;subset=latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='d2ff107d8548ad953e54e261eba4ae88-css'
        href='//fonts.googleapis.com/css?family=Josefin+Sans:600&#038;subset=latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='663106d79f3666b296514044d615e164-css'
        href='//fonts.googleapis.com/css?family=Josefin+Sans:400&#038;subset=latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='cbcb0fa46944024be16c50a27c2a69e9-css'
        href='//fonts.googleapis.com/css?family=Josefin+Sans:700&#038;subset=latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='aed640b78de56ff408960ee13ed0a313-css'
        href='//fonts.googleapis.com/css?family=Josefin+Sans&#038;subset=latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='12eb8c354fb70896a233f5f25c7e399e-css'
        href='//fonts.googleapis.com/css?family=Josefin+Sans:inherit&#038;subset=latin-ext' type='text/css'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Josefin+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.3'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type='text/javascript' id='jquery-core-js-extra'>
    /* <![CDATA[ */
    var dttheme_urls = {
        "theme_base_url": "https:\/\/dtaugury.wpengine.com\/wp-content\/themes\/augury",
        "framework_base_url": "https:\/\/dtaugury.wpengine.com\/wp-content\/themes\/augury\/framework\/",
        "ajaxurl": "https:\/\/dtaugury.wpengine.com\/wp-admin\/admin-ajax.php",
        "url": "https:\/\/dtaugury.wpengine.com",
        "isRTL": "",
        "loadingbar": "disable",
        "advOptions": "Show Advanced Options",
        "wpnonce": "e50ecb1032",
        "enable_ajax_addtocart": "",
        "enable_totop": "1",
        "disable_mouse_animation": ""
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://dtaugury.wpengine.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.0'
        id='jquery-core-js'></script>
    <script type='text/javascript'
        src='https://dtaugury.wpengine.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://dtaugury.wpengine.com/wp-content/themes/augury/framework/js/modernizr.custom.js?ver=6.3'
        id='modernizr-custom-js'></script>
    <link rel="https://api.w.org/" href="https://dtaugury.wpengine.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://dtaugury.wpengine.com/wp-json/wp/v2/pages/20398" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://dtaugury.wpengine.com/xmlrpc.php?rsd" />
    <link rel="canonical" href="https://dtaugury.wpengine.com/" />
    <link rel='shortlink' href='https://dtaugury.wpengine.com/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://dtaugury.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdtaugury.wpengine.com%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://dtaugury.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdtaugury.wpengine.com%2F&#038;format=xml" />

    <script type="text/javascript">
    var jQueryMigrateHelperHasSentDowngrade = false;

    window.onerror = function(msg, url, line, col, error) {
        // Break out early, do not processing if a downgrade reqeust was already sent.
        if (jQueryMigrateHelperHasSentDowngrade) {
            return true;
        }

        var xhr = new XMLHttpRequest();
        var nonce = 'abae996d71';
        var jQueryFunctions = [
            'andSelf',
            'browser',
            'live',
            'boxModel',
            'support.boxModel',
            'size',
            'swap',
            'clean',
            'sub',
        ];
        var match_pattern = /\)\.(.+?) is not a function/;
        var erroredFunction = msg.match(match_pattern);

        // If there was no matching functions, do not try to downgrade.
        if (typeof erroredFunction !== 'object' || typeof erroredFunction[1] === "undefined" || -1 ===
            jQueryFunctions.indexOf(erroredFunction[1])) {
            return true;
        }

        // Set that we've now attempted a downgrade request.
        jQueryMigrateHelperHasSentDowngrade = true;

        xhr.open('POST', 'https://dtaugury.wpengine.com/wp-admin/admin-ajax.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            var response,
                reload = false;

            if (200 === xhr.status) {
                try {
                    response = JSON.parse(xhr.response);

                    reload = response.data.reload;
                } catch (e) {
                    reload = false;
                }
            }

            // Automatically reload the page if a deprecation caused an automatic downgrade, ensure visitors get the best possible experience.
            if (reload) {
                location.reload();
            }
        };

        xhr.send(encodeURI('action=jquery-migrate-downgrade-version&_wpnonce=' + nonce));

        // Suppress error alerts in older browsers
        return true;
    }
    </script>

    <noscript>
        <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.14.1; features: a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.13 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/cropped-favicon-100x100.png"
        sizes="32x32" />
    <link rel="icon" href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/cropped-favicon-300x300.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/cropped-favicon-300x300.png" />
    <meta name="msapplication-TileImage"
        content="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/cropped-favicon-300x300.png" />
    <script>
    function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
        //});
    };
    </script>
    <style id='augury-custom-inline-inline-css' type='text/css'>
    div#dt-1aab21f img {
        width: 210px;
    }

    @media only screen and (max-width: 767px) {
        div#dt-1aab21f img {
            width: 210px;
        }
    }
    </style>
    <style>
    .elementor-20488 .elementor-element.elementor-element-39a37cc8 .elementor-repeater-item-7ee6690.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f.elementor-position-right .elementor-image-box-img {
        margin-left: 0px;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f.elementor-position-left .elementor-image-box-img {
        margin-right: 0px;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f.elementor-position-top .elementor-image-box-img {
        margin-bottom: 0px;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f .elementor-image-box-wrapper .elementor-image-box-img {
        width: 100%;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img img {
        transition-duration: 0.3s;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f .elementor-image-box-title {
        margin-bottom: 20px;
        color: #000000;
        font-size: 22px;
        font-weight: 600;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f .elementor-image-box-description {
        color: #626161;
        font-size: 15px;
        font-weight: 600;
        line-height: 20px;
    }

    .elementor-20488 .elementor-element.elementor-element-73dfe88f>.elementor-widget-container {
        padding: 35px 50px 35px 50px;
    }

    .elementor-20488 .elementor-element.elementor-element-7011684d .elementor-button {
        font-size: 20px;
        fill: #FFFFFF;
        color: #FFFFFF;
        background-color: rgba(2, 1, 1, 0);
        border-style: solid;
        border-width: 2px 2px 2px 2px;
        border-color: #2A2A2A;
        border-radius: 50px 50px 50px 50px;
        padding: 15px 35px 12px 35px;
    }

    .elementor-20488 .elementor-element.elementor-element-7011684d .elementor-button:hover,
    .elementor-20488 .elementor-element.elementor-element-7011684d .elementor-button:focus {
        color: #000000;
        background-color: #FFA35A;
    }

    .elementor-20488 .elementor-element.elementor-element-7011684d .elementor-button:hover svg,
    .elementor-20488 .elementor-element.elementor-element-7011684d .elementor-button:focus svg {
        fill: #000000;
    }

    .elementor-20488 .elementor-element.elementor-element-7011684d>.elementor-widget-container {
        margin: 25px 0px 0px 0px;
    }

    @media(max-width:767px) {
        .elementor-20488 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img {
            margin-bottom: 0px;
        }
    }
    </style>
    <style>
    .elementor-25218 .elementor-element.elementor-element-39a37cc8 .elementor-repeater-item-7ee6690.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f.elementor-position-right .elementor-image-box-img {
        margin-left: 0px;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f.elementor-position-left .elementor-image-box-img {
        margin-right: 0px;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f.elementor-position-top .elementor-image-box-img {
        margin-bottom: 0px;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f .elementor-image-box-wrapper .elementor-image-box-img {
        width: 100%;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img img {
        transition-duration: 0.3s;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f .elementor-image-box-title {
        margin-bottom: 20px;
        color: #000000;
        font-size: 22px;
        font-weight: 600;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f .elementor-image-box-description {
        color: #626161;
        font-size: 15px;
        font-weight: 600;
        line-height: 20px;
    }

    .elementor-25218 .elementor-element.elementor-element-73dfe88f>.elementor-widget-container {
        padding: 35px 50px 35px 50px;
    }

    .elementor-25218 .elementor-element.elementor-element-7011684d .elementor-button {
        font-size: 20px;
        fill: #FFFFFF;
        color: #FFFFFF;
        background-color: rgba(2, 1, 1, 0);
        border-style: solid;
        border-width: 2px 2px 2px 2px;
        border-color: #2A2A2A;
        border-radius: 50px 50px 50px 50px;
        padding: 15px 35px 12px 35px;
    }

    .elementor-25218 .elementor-element.elementor-element-7011684d .elementor-button:hover,
    .elementor-25218 .elementor-element.elementor-element-7011684d .elementor-button:focus {
        color: #000000;
        background-color: #FFA35A;
    }

    .elementor-25218 .elementor-element.elementor-element-7011684d .elementor-button:hover svg,
    .elementor-25218 .elementor-element.elementor-element-7011684d .elementor-button:focus svg {
        fill: #000000;
    }

    .elementor-25218 .elementor-element.elementor-element-7011684d>.elementor-widget-container {
        margin: 25px 0px 0px 0px;
    }

    @media(max-width:767px) {
        .elementor-25218 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img {
            margin-bottom: 0px;
        }
    }
    </style>
    <style>
    .elementor-25219 .elementor-element.elementor-element-39a37cc8 .elementor-repeater-item-7ee6690.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f.elementor-position-right .elementor-image-box-img {
        margin-left: 0px;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f.elementor-position-left .elementor-image-box-img {
        margin-right: 0px;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f.elementor-position-top .elementor-image-box-img {
        margin-bottom: 0px;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f .elementor-image-box-wrapper .elementor-image-box-img {
        width: 100%;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img img {
        transition-duration: 0.3s;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f .elementor-image-box-title {
        margin-bottom: 20px;
        color: #000000;
        font-size: 22px;
        font-weight: 600;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f .elementor-image-box-description {
        color: #626161;
        font-size: 15px;
        font-weight: 600;
        line-height: 20px;
    }

    .elementor-25219 .elementor-element.elementor-element-73dfe88f>.elementor-widget-container {
        padding: 35px 50px 35px 50px;
    }

    .elementor-25219 .elementor-element.elementor-element-7011684d .elementor-button {
        font-size: 20px;
        fill: #FFFFFF;
        color: #FFFFFF;
        background-color: rgba(2, 1, 1, 0);
        border-style: solid;
        border-width: 2px 2px 2px 2px;
        border-color: #2A2A2A;
        border-radius: 50px 50px 50px 50px;
        padding: 15px 35px 12px 35px;
    }

    .elementor-25219 .elementor-element.elementor-element-7011684d .elementor-button:hover,
    .elementor-25219 .elementor-element.elementor-element-7011684d .elementor-button:focus {
        color: #000000;
        background-color: #FFA35A;
    }

    .elementor-25219 .elementor-element.elementor-element-7011684d .elementor-button:hover svg,
    .elementor-25219 .elementor-element.elementor-element-7011684d .elementor-button:focus svg {
        fill: #000000;
    }

    .elementor-25219 .elementor-element.elementor-element-7011684d>.elementor-widget-container {
        margin: 25px 0px 0px 0px;
    }

    @media(max-width:767px) {
        .elementor-25219 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img {
            margin-bottom: 0px;
        }
    }
    </style>
    <style>
    .elementor-25220 .elementor-element.elementor-element-39a37cc8 .elementor-repeater-item-7ee6690.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f.elementor-position-right .elementor-image-box-img {
        margin-left: 0px;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f.elementor-position-left .elementor-image-box-img {
        margin-right: 0px;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f.elementor-position-top .elementor-image-box-img {
        margin-bottom: 0px;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f .elementor-image-box-wrapper .elementor-image-box-img {
        width: 100%;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img img {
        transition-duration: 0.3s;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f .elementor-image-box-title {
        margin-bottom: 20px;
        color: #000000;
        font-size: 22px;
        font-weight: 600;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f .elementor-image-box-description {
        color: #626161;
        font-size: 15px;
        font-weight: 600;
        line-height: 20px;
    }

    .elementor-25220 .elementor-element.elementor-element-73dfe88f>.elementor-widget-container {
        padding: 35px 50px 35px 50px;
    }

    .elementor-25220 .elementor-element.elementor-element-7011684d .elementor-button {
        font-size: 20px;
        fill: #FFFFFF;
        color: #FFFFFF;
        background-color: rgba(2, 1, 1, 0);
        border-style: solid;
        border-width: 2px 2px 2px 2px;
        border-color: #2A2A2A;
        border-radius: 50px 50px 50px 50px;
        padding: 15px 35px 12px 35px;
    }

    .elementor-25220 .elementor-element.elementor-element-7011684d .elementor-button:hover,
    .elementor-25220 .elementor-element.elementor-element-7011684d .elementor-button:focus {
        color: #000000;
        background-color: #FFA35A;
    }

    .elementor-25220 .elementor-element.elementor-element-7011684d .elementor-button:hover svg,
    .elementor-25220 .elementor-element.elementor-element-7011684d .elementor-button:focus svg {
        fill: #000000;
    }

    .elementor-25220 .elementor-element.elementor-element-7011684d>.elementor-widget-container {
        margin: 25px 0px 0px 0px;
    }

    @media(max-width:767px) {
        .elementor-25220 .elementor-element.elementor-element-73dfe88f .elementor-image-box-img {
            margin-bottom: 0px;
        }
    }
    </style>
    <style>
    .elementor-20526 .elementor-element.elementor-element-269803ef .elementor-repeater-item-7dfc0a4.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-20526 .elementor-element.elementor-element-c6a9fdc {
        text-align: center;
    }

    .elementor-20526 .elementor-element.elementor-element-c6a9fdc img {
        border-radius: 50% 50% 50% 50%;
    }

    .elementor-20526 .elementor-element.elementor-element-10d86c14 {
        text-align: center;
        color: #FFFFFF;
        font-size: 20px;
        line-height: 30px;
    }

    .elementor-20526 .elementor-element.elementor-element-6cd2492 {
        text-align: center;
    }

    .elementor-20526 .elementor-element.elementor-element-6cd2492 .elementor-heading-title {
        font-size: 25px;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon i {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon svg {
        fill: #FFFFFF;
        transition: fill 0.3s;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon i {
        color: #FFFFFF;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
        fill: #FFFFFF;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 {
        --e-icon-list-icon-size: 18px;
        --e-icon-list-icon-align: center;
        --e-icon-list-icon-margin: 0 calc(var(--e-icon-list-icon-size, 1em) * 0.125);
        --icon-vertical-offset: 0px;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon {
        padding-right: 8px;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>a {
        font-size: 16px;
        font-weight: 300;
        text-transform: uppercase;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-text {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-20526 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-text {
        color: #FFFFFF;
    }
    </style>
    <style>
    .elementor-25203 .elementor-element.elementor-element-269803ef .elementor-repeater-item-7dfc0a4.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-25203 .elementor-element.elementor-element-c6a9fdc {
        text-align: center;
    }

    .elementor-25203 .elementor-element.elementor-element-c6a9fdc img {
        border-radius: 50% 50% 50% 50%;
    }

    .elementor-25203 .elementor-element.elementor-element-10d86c14 {
        text-align: center;
        color: #FFFFFF;
        font-size: 20px;
        line-height: 30px;
    }

    .elementor-25203 .elementor-element.elementor-element-6cd2492 {
        text-align: center;
    }

    .elementor-25203 .elementor-element.elementor-element-6cd2492 .elementor-heading-title {
        font-size: 25px;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon i {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon svg {
        fill: #FFFFFF;
        transition: fill 0.3s;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon i {
        color: #FFFFFF;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
        fill: #FFFFFF;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 {
        --e-icon-list-icon-size: 18px;
        --e-icon-list-icon-align: center;
        --e-icon-list-icon-margin: 0 calc(var(--e-icon-list-icon-size, 1em) * 0.125);
        --icon-vertical-offset: 0px;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon {
        padding-right: 8px;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>a {
        font-size: 16px;
        font-weight: 300;
        text-transform: uppercase;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-text {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-25203 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-text {
        color: #FFFFFF;
    }
    </style>
    <style>
    .elementor-25204 .elementor-element.elementor-element-269803ef .elementor-repeater-item-7dfc0a4.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-25204 .elementor-element.elementor-element-c6a9fdc {
        text-align: center;
    }

    .elementor-25204 .elementor-element.elementor-element-c6a9fdc img {
        border-radius: 50% 50% 50% 50%;
    }

    .elementor-25204 .elementor-element.elementor-element-10d86c14 {
        text-align: center;
        color: #FFFFFF;
        font-size: 20px;
        line-height: 30px;
    }

    .elementor-25204 .elementor-element.elementor-element-6cd2492 {
        text-align: center;
    }

    .elementor-25204 .elementor-element.elementor-element-6cd2492 .elementor-heading-title {
        font-size: 25px;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon i {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon svg {
        fill: #FFFFFF;
        transition: fill 0.3s;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon i {
        color: #FFFFFF;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
        fill: #FFFFFF;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 {
        --e-icon-list-icon-size: 18px;
        --e-icon-list-icon-align: center;
        --e-icon-list-icon-margin: 0 calc(var(--e-icon-list-icon-size, 1em) * 0.125);
        --icon-vertical-offset: 0px;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon {
        padding-right: 8px;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>a {
        font-size: 16px;
        font-weight: 300;
        text-transform: uppercase;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-text {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-25204 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-text {
        color: #FFFFFF;
    }
    </style>
    <style>
    .elementor-25232 .elementor-element.elementor-element-269803ef .elementor-repeater-item-7dfc0a4.jet-parallax-section__layout .jet-parallax-section__image {
        background-size: auto;
    }

    .elementor-25232 .elementor-element.elementor-element-c6a9fdc {
        text-align: center;
    }

    .elementor-25232 .elementor-element.elementor-element-c6a9fdc img {
        border-radius: 50% 50% 50% 50%;
    }

    .elementor-25232 .elementor-element.elementor-element-10d86c14 {
        text-align: center;
        color: #FFFFFF;
        font-size: 20px;
        line-height: 30px;
    }

    .elementor-25232 .elementor-element.elementor-element-6cd2492 {
        text-align: center;
    }

    .elementor-25232 .elementor-element.elementor-element-6cd2492 .elementor-heading-title {
        font-size: 25px;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon i {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon svg {
        fill: #FFFFFF;
        transition: fill 0.3s;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon i {
        color: #FFFFFF;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
        fill: #FFFFFF;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 {
        --e-icon-list-icon-size: 18px;
        --e-icon-list-icon-align: center;
        --e-icon-list-icon-margin: 0 calc(var(--e-icon-list-icon-size, 1em) * 0.125);
        --icon-vertical-offset: 0px;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-icon {
        padding-right: 8px;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>.elementor-icon-list-text,
    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item>a {
        font-size: 16px;
        font-weight: 300;
        text-transform: uppercase;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-text {
        color: #FFFFFF;
        transition: color 0.3s;
    }

    .elementor-25232 .elementor-element.elementor-element-243a7356 .elementor-icon-list-item:hover .elementor-icon-list-text {
        color: #FFFFFF;
    }
    </style>
</head>



<body
    class="home page-template-default page page-id-20398 wp-embed-responsive theme-augury woocommerce-no-js layout-wide page-with-slider no-breadcrumb elementor-default elementor-kit-25447 elementor-page elementor-page-20398">
    <div class="circle-cursor circle-cursor--outer"></div>
    <div class="circle-cursor circle-cursor--inner"></div>
    <!-- **Wrapper** -->
    <div class="wrapper">
        <!-- ** Inner Wrapper ** -->
        <div class="inner-wrapper">
            <!-- ** Header Wrapper ** -->
            <div id="header-wrapper" class="header-top-absolute">
                <!-- Start of header section -->
                @yield('header')
                <!-- End of header section -->
                <!-- Start of Banner section  -->

                <!-- End of Featured section  -->
                @yield('content')
                <!-- End of Newslatter  section  -->

                <!-- Start of Footer  section  -->
                @yield('footer')
                <!-- End of Footer  section  -->
            </div>
        </div>
    </div>
    <script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
    </script>

    <div id="yith-quick-view-modal">
        <div class="yith-quick-view-overlay"></div>
        <div class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
                </div>
                <div id="yith-quick-view-content" class="woocommerce single-product"></div>
            </div>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400%7CJosefin+Sans:600%2C300&display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">

    <script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
    </script>
    <script>
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            console.log(
                "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
            );
            console.log("To fix this, you can:");
            console.log(
                "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
            );
            console.log("2. Find the double jQuery.js inclusion and remove it");
            return "Double Included jQuery Library";
        }
    }
    </script>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">data.variation.variation_description</div>
	<div class="woocommerce-variation-price">data.variation.price_html</div>
	<div class="woocommerce-variation-availability">data.variation.availability_html</div>
</script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
    <link rel='stylesheet' id='elementor-post-20376-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-20376.css?ver=1692845412' type='text/css'
        media='all' />

    <link rel='stylesheet' id='elementor-post-20488-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-20488.css?ver=1692845412' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-25493-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25493.css?ver=1692845412' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-25498-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25498.css?ver=1692845412' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/fontawesome.min.css?ver=5.15.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/solid.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-25218-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25218.css?ver=1692845413' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-25219-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25219.css?ver=1692845413' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-25220-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25220.css?ver=1692845413' type='text/css'
        media='all' />
    <link rel='stylesheet' id='slick-css' href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/slick.css?ver=1.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dt-advanced-carousel-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/dt-advanced-carousel.css?ver=1.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-20526-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-20526.css?ver=1692845413' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-25203-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25203.css?ver=1692845413' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-25204-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25204.css?ver=1692845414' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-25232-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-25232.css?ver=1692845414' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dtel-products-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/style.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-20331-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/post-20331.css?ver=1692845414' type='text/css'
        media='all' />
    <link rel='stylesheet' id='photoswipe-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/photoswipe.min.css?ver=7.9.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='photoswipe-default-skin-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/default-skin.min.css?ver=7.9.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/animations.min.css?ver=3.14.1' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/brands.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/css/rs6.css?ver=6.6.13' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
    @keyframes move-twink-back {
        from {
            background-position: 0 0
        }

        to {
            background-position: -10000px 5000px
        }
    }

    @-webkit-keyframes move-twink-back {
        from {
            background-position: 0 0
        }

        to {
            background-position: -10000px 5000px
        }
    }

    @-moz-keyframes move-twink-back {
        from {
            background-position: 0 0
        }

        to {
            background-position: -10000px 5000px
        }
    }

    @-ms-keyframes move-twink-back {
        from {
            background-position: 0 0
        }

        to {
            background-position: -10000px 5000px
        }
    }

    .stars,
    .twinkling,
    .clouds {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        display: block
    }

    .stars {
        background: #0f0f0f url(https://dtaugury.wpengine.com/wp-content/uploads/2018/02/stars.png) repeat top center;
        z-index: 0
    }

    .twinkling {
        background: transparent url(https://dtaugury.wpengine.com/wp-content/uploads/2018/02/twinkling2.png) repeat top center;
        z-index: 1;
        -moz-animation: move-twink-back 200s linear infinite;
        -ms-animation: move-twink-back 200s linear infinite;
        -o-animation: move-twink-back 200s linear infinite;
        -webkit-animation: move-twink-back 200s linear infinite;
        animation: move-twink-back 200s linear infinite
    }
    </style>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.selectBox.min.js?ver=1.2.0'
        id='jquery-selectBox-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.prettyPhoto.min.js?ver=3.1.6' id='prettyPhoto-js'>
    </script>
    <script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "yith_wcwl_button_position": "after_add_to_cart",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "enable_ajax_loading": "",
        "ajax_loader_url": "https:\/\/dtaugury.wpengine.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
        "remove_from_wishlist_after_add_to_cart": "1",
        "is_wishlist_responsive": "1",
        "time_to_close_prettyphoto": "3000",
        "fragments_index_glue": ".",
        "reload_on_found_variation": "1",
        "mobile_media_query": "768",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
            "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
            "load_mobile_action": "load_mobile",
            "delete_item_action": "delete_item",
            "save_title_action": "save_title",
            "save_privacy_action": "save_privacy",
            "load_fragments": "load_fragments"
        },
        "nonce": {
            "add_to_wishlist_nonce": "b1013c0c42",
            "remove_from_wishlist_nonce": "1a6afa1055",
            "reload_wishlist_and_adding_elem_nonce": "f702a7ef60",
            "load_mobile_nonce": "f4a7f18ccc",
            "delete_item_nonce": "c003d98434",
            "save_title_nonce": "e7b2afec7b",
            "save_privacy_nonce": "549763cd7e",
            "load_fragments_nonce": "0b06847d41"
        },
        "redirect_after_ask_estimate": "",
        "ask_estimate_redirect_url": "https:\/\/dtaugury.wpengine.com"
    };
    /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.yith-wcwl.min.js?ver=3.23.0' id='jquery-yith-wcwl-js'>
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/index.js?ver=5.7.7' id='swv-js'>
    </script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/dtaugury.wpengine.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/index.js?ver=5.7.7'
        id='contact-form-7-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/booking.js?ver=6.3'
        id='dt-booking-manager-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/core.min.js?ver=1.13.2'
        id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/datepicker.min.js?ver=1.13.2'
        id='jquery-ui-datepicker-js'></script>
    <script id="jquery-ui-datepicker-js-after" type="text/javascript">
    jQuery(function(jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                "Nov", "Dec"
            ],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
    </script>
    <script type='text/javascript' id='dt-reservation-js-extra'>
    /* <![CDATA[ */
    var dtBookingManager = {
        "ajaxurl": "https:\/\/dtaugury.wpengine.com\/wp-admin\/admin-ajax.php",
        "plugin_url": "https:\/\/dtaugury.wpengine.com\/wp-content\/plugins\/designthemes-booking-manager\/vc\/",
        "eraptdatepicker": "Please Select Service and Date"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/reservation.js?ver=6.3'
        id='dt-reservation-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.validate.min.js?ver=6.3'
        id='jquery-validate-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/script.js?ver=6.3'
        id='dt-fbpixel-script-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.plugins.js?ver=6.3'
        id='dtportfolio-plugins-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/isotope.pkgd.min.js?ver=6.3'
        id='dtportfolio-isotope-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.fullPage.min.js?ver=6.3'
        id='dtportfolio-fullpage-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/ilightbox.min.js?ver=6.3'
        id='dtportfolio-ilightbox-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jarallax.js?ver=6.3'
        id='dtportfolio-jarallax-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.multiscroll.min.js?ver=6.3'
        id='dtportfolio-multiscroll-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.inview.js?ver=6.3'
        id='dtportfolio-inview-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/swiper.min.js?ver=6.3'
        id='dtportfolio-swiper-js'></script>
    <script type='text/javascript' id='dtportfolio-frontend-js-extra'>
    /* <![CDATA[ */
    var dtportfoliofrontendobject = {
        "ajaxurl": "https:\/\/dtaugury.wpengine.com\/wp-admin\/admin-ajax.php",
        "page_builder": "elementor",
        "elementor_preview_mode": ""
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/frontend.js?ver=6.3'
        id='dtportfolio-frontend-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/rbtools.min.js?ver=6.6.13' defer
        async id='tp-tools-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/rs6.min.js?ver=6.6.13' defer async
        id='revmin-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.blockUI.min.js?ver=2.7.0-wc.7.9.0'
        id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/dtaugury.wpengine.com\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/add-to-cart.min.js?ver=7.9.0'
        id='wc-add-to-cart-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/js.cookie.min.js?ver=2.1.4-wc.7.9.0' id='js-cookie-js'>
    </script>
    <script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/woocommerce.min.js?ver=7.9.0'
        id='woocommerce-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.tabs.min.js?ver=6.3'
        id='jquery.tabs-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/privacy.js?ver=6.3'
        id='dt.privacy.script-js'></script>
    <script type='text/javascript' id='yith-woocompare-main-js-extra'>
    /* <![CDATA[ */
    var yith_woocompare = {
        "ajaxurl": "\/?wc-ajax=%%endpoint%%",
        "actionadd": "yith-woocompare-add-product",
        "actionremove": "yith-woocompare-remove-product",
        "actionview": "yith-woocompare-view-table",
        "actionreload": "yith-woocompare-reload-product",
        "added_label": "Added",
        "table_title": "Product Comparison",
        "auto_open": "yes",
        "loader": "https:\/\/dtaugury.wpengine.com\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif",
        "button_text": "Compare",
        "cookie_name": "yith_woocompare_list_1",
        "close_label": "Close"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/woocompare.min.js?ver=2.27.0'
        id='yith-woocompare-main-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.colorbox-min.js?ver=1.4.21'
        id='jquery-colorbox-js'></script>
    <script type='text/javascript' id='yith-wcqv-frontend-js-extra'>
    /* <![CDATA[ */
    var yith_qv = {
        "ajaxurl": "\/wp-admin\/admin-ajax.php",
        "loader": "https:\/\/dtaugury.wpengine.com\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif",
        "lang": ""
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/frontend.min.js?ver=1.29.0'
        id='yith-wcqv-frontend-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.ui.totop.min.js?ver=6.3'
        id='jquery-ui-totop-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.easing.js?ver=6.3'
        id='jquery-easing-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.caroufredsel.js?ver=6.3'
        id='jquery-caroufredsel-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.debouncedresize.js?ver=6.3'
        id='jquery-debouncedresize-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.prettyphoto.js?ver=6.3'
        id='jquery-prettyphoto-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.touchswipe.js?ver=6.3'
        id='jquery-touchswipe-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.parallax.js?ver=6.3'
        id='jquery-parallax-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.downcount.js?ver=6.3'
        id='jquery-downcount-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.nicescroll.js?ver=6.3'
        id='jquery-nicescroll-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.bxslider.js?ver=6.3'
        id='jquery-bxslider-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.fitvids.js?ver=6.3'
        id='jquery-fitvids-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.simple-sidebar.js?ver=6.3'
        id='jquery-simple-sidebar-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.classie.js?ver=6.3'
        id='jquery-classie-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.placeholder.js?ver=6.3'
        id='jquery-placeholder-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.visualNav.min.js?ver=6.3'
        id='jquery-visualnav-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/ResizeSensor.min.js?ver=6.3'
        id='resizesensor-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/theia-sticky-sidebar.min.js?ver=6.3'
        id='theia-sticky-sidebar-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/matchHeight.js?ver=6.3'
        id='matchheight-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.waypoints.min.js?ver=6.3'
        id='jquery-waypoints-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.inview.js?ver=6.3'
        id='jquery-inview-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/isotopes.pkgd.min.js?ver=6.3'
        id='isotope-pkgd-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.magnific-popup.min.js?ver=6.3'
        id='jquery-magnific-popup-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/woocommerce.js?ver=6.3'
        id='augury-woocommerce-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/custom.js?ver=6.3'
        id='augury-jqcustom-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/slick.min.js?ver=1.0'
        id='slick-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/dt-advanced-carousel.js?ver=1.0'
        id='dt-advanced-carousel-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery-numerator.min.js?ver=0.2.1'
        id='jquery-numerator-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/scripts.js?ver=1.0'
        id='dtel-products-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/underscore.min.js?ver=1.13.4'
        id='underscore-js'></script>


    <script type='text/javascript' id='wp-util-js-extra'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/wp-util.min.js?ver=6.3'
        id='wp-util-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/add-to-cart-variation.min.js?ver=7.9.0'
        id='wc-add-to-cart-variation-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jquery.zoom.min.js?ver=1.7.21-wc.7.9.0' id='zoom-js'>
    </script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/photoswipe.min.js?ver=4.1.1-wc.7.9.0' id='photoswipe-js'>
    </script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/photoswipe-ui-default.min.js?ver=4.1.1-wc.7.9.0'
        id='photoswipe-ui-default-js'></script>
    <script type='text/javascript' id='wc-single-product-js-extra'>
    /* <![CDATA[ */
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes",
        "flexslider": {
            "rtl": false,
            "animation": "slide",
            "smoothHeight": true,
            "directionNav": false,
            "controlNav": "thumbnails",
            "slideshow": false,
            "animationSpeed": 500,
            "animationLoop": false,
            "allowOneSlide": false
        },
        "zoom_enabled": "1",
        "zoom_options": [],
        "photoswipe_enabled": "1",
        "photoswipe_options": {
            "shareEl": false,
            "closeOnScroll": false,
            "history": false,
            "hideAnimationDuration": 0,
            "showAnimationDuration": 0
        },
        "flexslider_enabled": "1"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/single-product.min.js?ver=7.9.0'
        id='wc-single-product-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/webpack.runtime.min.js?ver=3.14.1'
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/frontend-modules.min.js?ver=3.14.1'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/waypoints.min.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/swiper.min.js?ver=5.3.6'
        id='swiper-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/share-link.min.js?ver=3.14.1'
        id='share-link-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/dialog.min.js?ver=4.9.0'
        id='elementor-dialog-js'></script>
    <script id="elementor-frontend-js-before" type="text/javascript">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.14.1",
        "is_static": false,
        "experimentalFeatures": {
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "landing-pages": true
        },
        "urls": {
            "assets": "https:\/\/dtaugury.wpengine.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper-container",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "global_image_lightbox": "yes",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 20398,
            "title": "Augury%20WordPress%20Theme%20%E2%80%93%20Your%20SUPER-powered%20WP%20Engine%20Site",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/frontends.min.js?ver=3.14.1'
        id='elementor-frontend-js'></script>
    <script type='text/javascript' id='jet-elements-js-extra'>
    /* <![CDATA[ */
    var jetElements = {
        "ajaxUrl": "https:\/\/dtaugury.wpengine.com\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "templateApiUrl": "https:\/\/dtaugury.wpengine.com\/wp-json\/jet-elements-api\/v1\/elementor-template",
        "devMode": "false",
        "messages": {
            "invalidMail": "Please specify a valid e-mail"
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jet-elements.min.js?ver=2.6.11'
        id='jet-elements-js'></script>
    <script type='text/javascript' id='jet-tabs-frontend-js-extra'>
    /* <![CDATA[ */
    var JetTabsSettings = {
        "ajaxurl": "https:\/\/dtaugury.wpengine.com\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "templateApiUrl": "https:\/\/dtaugury.wpengine.com\/wp-json\/jet-tabs-api\/v1\/elementor-template",
        "devMode": "false"
    };
    /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jet-tabs-frontend.min.js?ver=2.1.22'
        id='jet-tabs-frontend-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/popperjs.js?ver=2.5.2'
        id='jet-tricks-popperjs-js'></script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/tippy-bundle.js?ver=6.3.1'
        id='jet-tricks-tippy-bundle-js'></script>
    <script type='text/javascript' id='jet-tricks-frontend-js-extra'>
    /* <![CDATA[ */
    var JetTricksSettings = {
        "elements_data": {
            "sections": {
                "967d606": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "39a37cc8": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "c711845": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "22b58ec": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "de2eff1": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "cb483d7": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "6b56aff": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "b1fe580": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "ae17e8d": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "50c980a": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "517f8dd": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "bb37020": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "97201ab": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "d775afc": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "586d458": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "d676024": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "2d423dc": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "c11e42e": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "6f8eb4f": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "9219d12": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "1ebafb8": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "edaa091": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "2a0601f": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "269803ef": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "49cd422": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "89cdf1b": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "c2e23a4": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "8b666af": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "cc79a2b": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "f10af8b": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "e513916": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "4837477": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "77224d7": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                },
                "9784735": {
                    "view_more": false,
                    "particles": "false",
                    "particles_json": null
                }
            },
            "columns": [],
            "widgets": {
                "1aab21f": [],
                "d291e16": [],
                "24e37b9": [],
                "df1e196": [],
                "21dbe73": [],
                "9402cb7": [],
                "73dfe88f": [],
                "7011684d": [],
                "9038a32": [],
                "0592a2a": [],
                "1db6614": [],
                "056b20a": [],
                "2c2f838": [],
                "964ae64": [],
                "cfce6c9": [],
                "5dfd8ef": [],
                "17b6f10": [],
                "6ff3b6c": [],
                "3e76fa27": [],
                "5a1f542": [],
                "829d038": [],
                "b148c7f": [],
                "b1bda54": [],
                "5038b01": [],
                "6e6250f": [],
                "f597090": [],
                "b506093": [],
                "20c02c5": [],
                "0200365": [],
                "e3ee78d": [],
                "1aecbe4": [],
                "59738c1": [],
                "ce34165": [],
                "16f7386": [],
                "68c02c5": [],
                "b784976": [],
                "0231c69": [],
                "51d11ed": [],
                "79e4e83": [],
                "6b8fb85": [],
                "aee2470": [],
                "18d4521": [],
                "1c6afd6": [],
                "8916b8b": [],
                "f288b51": [],
                "cb57658": [],
                "e2bcded": [],
                "19f458c": [],
                "a846109": [],
                "849593b": {
                    "parallax": "true",
                    "invert": "false",
                    "speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "stickyOn": ["desktop", "tablet"]
                },
                "dc83678": [],
                "b8f8bb7": [],
                "fd696af": [],
                "1f04d7b": [],
                "c6a9fdc": [],
                "10d86c14": [],
                "6cd2492": [],
                "243a7356": [],
                "eb1c940": [],
                "0d163bb": [],
                "8d3d6c6": [],
                "5d61aa1": [],
                "5d326ea": [],
                "8ad355e": {
                    "parallax": "true",
                    "invert": "false",
                    "speed": {
                        "unit": "%",
                        "size": 20,
                        "sizes": []
                    },
                    "stickyOn": ["desktop", "tablet"]
                },
                "8f74bfa": [],
                "ae5dd92": [],
                "7f5480a": [],
                "33ec241": [],
                "5f2c516": [],
                "606c4c8": [],
                "e0268d4": [],
                "8be958c": [],
                "85e1c24": [],
                "a7f848b": [],
                "c547f60": []
            }
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/jet-tricks-frontend.js?ver=1.4.4'
        id='jet-tricks-frontend-js'></script>
    <script type='text/javascript'
        src='https://ศรีภุชงค์ทรัพย์อนันต.com/resources/js/preloaded-modules.min.js?ver=3.14.1'
        id='preloaded-modules-js'></script>
    <script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi1;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider11"] = {
        once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
        init: function() {
            window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1
                .length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
            if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
                window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
                if (window.revapi1initTry < 20) requestAnimationFrame(function() {
                    RS_MODULES.modules["revslider11"].init()
                });
                return;
            }
            window.revapi1 = jQuery(window.revapi1);
            if (window.revapi1.revolution == undefined) {
                revslider_showDoubleJqueryError("rev_slider_1_1");
                return;
            }
            revapi1.revolutionInit({
                revapi: "revapi1",
                sliderLayout: "fullwidth",
                visibilityLevels: "1240,1024,778,480",
                gridwidth: "1390,1024,778,480",
                gridheight: "800,550,500,450",
                lazyType: "smart",
                spinner: "spinner0",
                perspectiveType: "local",
                keepBPHeight: true,
                editorheight: "800,550,500,450",
                responsiveLevels: "1240,1024,778,480",
                progressBar: {
                    disableProgressBar: true
                },
                navigation: {
                    onHoverStop: false
                },
                viewPort: {
                    global: true,
                    globalDist: "-200px",
                    enable: false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });

        }
    } // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) {
        window.RS_MODULES.checkMinimal();
    };
    </script>
</body>

</html>
