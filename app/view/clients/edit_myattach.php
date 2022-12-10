<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/myattach.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/bootstrap.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/my_profile.css" ?>">

<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/myattach.js" ?>"></script>
<style>
    .pristine-error{
        color:red;
    }
</style>
<!--Start New Layout CB -->
<!DOCTYPE html>
<html lang="vi">

<head>
  
    <meta property="og:image" content="https://static.careerbuilder.vn/themes/careerbuilder/img/CareerBuilder-social.png" />
    <link data-page-subject="true" href="https://static.careerbuilder.vn/themes/careerbuilder/img/CareerBuilder-social.png" rel="image_src" />
    <meta property="fb:app_id" content="143458889176984" />
    <link rel="shortcut icon" href="https://careerbuilder.vn/favicon_careerbuilder_v2.ico?t=1" />
    <link href="https://careerbuilder.vn/vi/jobseekers/myresume/myattach" rel="canonical" />
  
 
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Careerbuilder Vietnam",
            "alternateName": "careerbuilder.vn",
            "url": "https://careerbuilder.vn/",
            "sameAs": [
                "https://www.facebook.com/CareerbuilderVietnam/",
                "https://www.linkedin.com/company/3216963/"
            ],
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://careerbuilder.vn/viec-lam/{search_term_string}-k-vi.html",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <script>
        /*global.js*/

        function dropdownMenu() {
            $(".dropdown-mobile").each((function() {
                $(this).on("click", (function() {
                    $(this).hasClass("show-menu") ? $(".dropdown-mobile").removeClass("show-menu") : ($(".dropdown-mobile").removeClass("show-menu"), $(this).addClass("show-menu")), $(this).hasClass("dropdown-2-menu") && $(this).addClass("show-menu")
                }))
            })), $(".dropdown-mobile-2").each((function() {
                $(this).on("click", (function() {
                    $(".dropdown-2-menu").addClass("show-menu"), $(this).hasClass("show-menu-2") ? $(".dropdown-mobile-2").removeClass("show-menu-2") : ($(".dropdown-mobile-2").removeClass("show-menu-2"), $(this).addClass("show-menu-2"))
                }))
            }))
        }

        function menuMobile() {
            $(".button-hambuger").on("click", (function() {
                $(".mobile-menu").toggleClass("show"), $("html").toggleClass("menu-mobile-active"), $(".back-drop").addClass("active"), $("html").hasClass("menu-mobile-active") ? $(".back-drop").addClass("active") : $(".back-drop").removeClass("active")
            })), $(".back-drop").on("click", (function() {
                $(".mobile-menu").removeClass("show"), $("html").removeClass("menu-mobile-active"), $(".back-drop").removeClass("active"), $("header .main-login .dropdown-menu").slideUp(), $(".edit-db-career-goals").removeClass("active"), $(".edit-db-outstanding-achievements").removeClass("active")
            })), $(".dropdown-search-jobs").on("click", (function() {
                $(".dropdown-search-jobs .dropdown-menu").slideToggle()
            })), $("header .main-login .title-login").on("click", (function() {
                $("header .main-login .dropdown-menu").slideToggle(), $(".back-drop").toggleClass("active")
            }))
        }

        function clickMyCareerBuilder() {
            $("header .mobile-menu .header-bottom-bottom .authentication-links .My-CareerBuilder").on("click", (function() {
                $("header .mobile-menu .profile .back-menu-normal").addClass("active"), $("header .mobile-menu .menu").addClass("active"), $("header .mobile-menu .menu .menu-normal").addClass("active"), $("header .mobile-menu .menu .menu-logged").addClass("active"), $("header .mobile-menu .header-bottom-bottom .authentication-links").addClass("active")
            })), $("header .mobile-menu .profile .back-menu-normal").on("click", (function() {
                $("header .mobile-menu .profile .back-menu-normal").removeClass("active"), $("header .mobile-menu .menu").removeClass("active"), $("header .mobile-menu .menu .menu-normal").removeClass("active"), $("header .mobile-menu .menu .menu-logged").removeClass("active"), $("header .mobile-menu .header-bottom-bottom .authentication-links").removeClass("active")
            }))
        }

        function menuDashBoard() {
            $("header .mobile-menu .menu .menu-logged ul .menu-dashboard").on("click", (function() {
                $("header .mobile-menu .menu .menu-logged").addClass("active-2"), $("header .mobile-menu .menu .menu-logged ul .menu-dashboard .list-unstyled").removeClass("active"), $(this).find(".list-unstyled").addClass("active"), $("header .mobile-menu .profile .back-menu-normal-2").addClass("active"), $("header .mobile-menu .profile .back-menu-normal").removeClass("active")
            })), $("header .mobile-menu .profile .back-menu-normal-2").on("click", (function() {
                $(this).removeClass("active"), $("header .mobile-menu .profile .back-menu-normal").addClass("active"), $("header .mobile-menu .menu .menu-logged ul .menu-dashboard .list-unstyled").removeClass("active"), $("header .mobile-menu .menu .menu-logged").removeClass("active-2")
            }))
        }! function(e, t) {
            "use strict";
            "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
                if (!e.document) throw new Error("jQuery requires a window with a document");
                return t(e)
            } : t(e)
        }("undefined" != typeof window ? window : this, (function(e, t) {
            "use strict";
            var n = [],
                r = Object.getPrototypeOf,
                i = n.slice,
                o = n.flat ? function(e) {
                    return n.flat.call(e)
                } : function(e) {
                    return n.concat.apply([], e)
                },
                a = n.push,
                s = n.indexOf,
                l = {},
                u = l.toString,
                c = l.hasOwnProperty,
                d = c.toString,
                f = d.call(Object),
                p = {},
                h = function(e) {
                    return "function" == typeof e && "number" != typeof e.nodeType
                },
                m = function(e) {
                    return null != e && e === e.window
                },
                g = e.document,
                v = {
                    type: !0,
                    src: !0,
                    nonce: !0,
                    noModule: !0
                };

            function y(e, t, n) {
                var r, i, o = (n = n || g).createElement("script");
                if (o.text = e, t)
                    for (r in v)(i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
                n.head.appendChild(o).parentNode.removeChild(o)
            }

            function b(e) {
                return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[u.call(e)] || "object" : typeof e
            }
            var x = "3.5.1",
                w = function(e, t) {
                    return new w.fn.init(e, t)
                };

            function C(e) {
                var t = !!e && "length" in e && e.length,
                    n = b(e);
                return !h(e) && !m(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
            }
            w.fn = w.prototype = {
                jquery: x,
                constructor: w,
                length: 0,
                toArray: function() {
                    return i.call(this)
                },
                get: function(e) {
                    return null == e ? i.call(this) : e < 0 ? this[e + this.length] : this[e]
                },
                pushStack: function(e) {
                    var t = w.merge(this.constructor(), e);
                    return t.prevObject = this, t
                },
                each: function(e) {
                    return w.each(this, e)
                },
                map: function(e) {
                    return this.pushStack(w.map(this, (function(t, n) {
                        return e.call(t, n, t)
                    })))
                },
                slice: function() {
                    return this.pushStack(i.apply(this, arguments))
                },
                first: function() {
                    return this.eq(0)
                },
                last: function() {
                    return this.eq(-1)
                },
                even: function() {
                    return this.pushStack(w.grep(this, (function(e, t) {
                        return (t + 1) % 2
                    })))
                },
                odd: function() {
                    return this.pushStack(w.grep(this, (function(e, t) {
                        return t % 2
                    })))
                },
                eq: function(e) {
                    var t = this.length,
                        n = +e + (e < 0 ? t : 0);
                    return this.pushStack(0 <= n && n < t ? [this[n]] : [])
                },
                end: function() {
                    return this.prevObject || this.constructor()
                },
                push: a,
                sort: n.sort,
                splice: n.splice
            }, w.extend = w.fn.extend = function() {
                var e, t, n, r, i, o, a = arguments[0] || {},
                    s = 1,
                    l = arguments.length,
                    u = !1;
                for ("boolean" == typeof a && (u = a, a = arguments[s] || {}, s++), "object" == typeof a || h(a) || (a = {}), s === l && (a = this, s--); s < l; s++)
                    if (null != (e = arguments[s]))
                        for (t in e) r = e[t], "__proto__" !== t && a !== r && (u && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (n = a[t], o = i && !Array.isArray(n) ? [] : i || w.isPlainObject(n) ? n : {}, i = !1, a[t] = w.extend(u, o, r)) : void 0 !== r && (a[t] = r));
                return a
            }, w.extend({
                expando: "jQuery" + (x + Math.random()).replace(/\D/g, ""),
                isReady: !0,
                error: function(e) {
                    throw new Error(e)
                },
                noop: function() {},
                isPlainObject: function(e) {
                    var t, n;
                    return !(!e || "[object Object]" !== u.call(e) || (t = r(e)) && ("function" != typeof(n = c.call(t, "constructor") && t.constructor) || d.call(n) !== f))
                },
                isEmptyObject: function(e) {
                    var t;
                    for (t in e) return !1;
                    return !0
                },
                globalEval: function(e, t, n) {
                    y(e, {
                        nonce: t && t.nonce
                    }, n)
                },
                each: function(e, t) {
                    var n, r = 0;
                    if (C(e))
                        for (n = e.length; r < n && !1 !== t.call(e[r], r, e[r]); r++);
                    else
                        for (r in e)
                            if (!1 === t.call(e[r], r, e[r])) break;
                    return e
                },
                makeArray: function(e, t) {
                    var n = t || [];
                    return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : a.call(n, e)), n
                },
                inArray: function(e, t, n) {
                    return null == t ? -1 : s.call(t, e, n)
                },
                merge: function(e, t) {
                    for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
                    return e.length = i, e
                },
                grep: function(e, t, n) {
                    for (var r = [], i = 0, o = e.length, a = !n; i < o; i++) !t(e[i], i) !== a && r.push(e[i]);
                    return r
                },
                map: function(e, t, n) {
                    var r, i, a = 0,
                        s = [];
                    if (C(e))
                        for (r = e.length; a < r; a++) null != (i = t(e[a], a, n)) && s.push(i);
                    else
                        for (a in e) null != (i = t(e[a], a, n)) && s.push(i);
                    return o(s)
                },
                guid: 1,
                support: p
            }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), (function(e, t) {
                l["[object " + t + "]"] = t.toLowerCase()
            }));
            var T = function(e) {
                var t, n, r, i, o, a, s, l, u, c, d, f, p, h, m, g, v, y, b, x = "sizzle" + 1 * new Date,
                    w = e.document,
                    C = 0,
                    T = 0,
                    k = le(),
                    E = le(),
                    A = le(),
                    S = le(),
                    N = function(e, t) {
                        return e === t && (d = !0), 0
                    },
                    D = {}.hasOwnProperty,
                    j = [],
                    $ = j.pop,
                    L = j.push,
                    q = j.push,
                    H = j.slice,
                    M = function(e, t) {
                        for (var n = 0, r = e.length; n < r; n++)
                            if (e[n] === t) return n;
                        return -1
                    },
                    O = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    P = "[\\x20\\t\\r\\n\\f]",
                    R = "(?:\\\\[\\da-fA-F]{1,6}" + P + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
                    z = "\\[" + P + "*(" + R + ")(?:" + P + "*([*^$|!~]?=)" + P + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + P + "*\\]",
                    I = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + z + ")*)|.*)\\)|)",
                    W = new RegExp(P + "+", "g"),
                    B = new RegExp("^" + P + "+|((?:^|[^\\\\])(?:\\\\.)*)" + P + "+$", "g"),
                    F = new RegExp("^" + P + "*," + P + "*"),
                    _ = new RegExp("^" + P + "*([>+~]|" + P + ")" + P + "*"),
                    U = new RegExp(P + "|>"),
                    X = new RegExp(I),
                    V = new RegExp("^" + R + "$"),
                    G = {
                        ID: new RegExp("^#(" + R + ")"),
                        CLASS: new RegExp("^\\.(" + R + ")"),
                        TAG: new RegExp("^(" + R + "|[*])"),
                        ATTR: new RegExp("^" + z),
                        PSEUDO: new RegExp("^" + I),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + P + "*(even|odd|(([+-]|)(\\d*)n|)" + P + "*(?:([+-]|)" + P + "*(\\d+)|))" + P + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + O + ")$", "i"),
                        needsContext: new RegExp("^" + P + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + P + "*((?:-\\d)?\\d*)" + P + "*\\)|)(?=[^-]|$)", "i")
                    },
                    Y = /HTML$/i,
                    Q = /^(?:input|select|textarea|button)$/i,
                    J = /^h\d$/i,
                    K = /^[^{]+\{\s*\[native \w/,
                    Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    ee = /[+~]/,
                    te = new RegExp("\\\\[\\da-fA-F]{1,6}" + P + "?|\\\\([^\\r\\n\\f])", "g"),
                    ne = function(e, t) {
                        var n = "0x" + e.slice(1) - 65536;
                        return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320))
                    },
                    re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                    ie = function(e, t) {
                        return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                    },
                    oe = function() {
                        f()
                    },
                    ae = xe((function(e) {
                        return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase()
                    }), {
                        dir: "parentNode",
                        next: "legend"
                    });
                try {
                    q.apply(j = H.call(w.childNodes), w.childNodes), j[w.childNodes.length].nodeType
                } catch (t) {
                    q = {
                        apply: j.length ? function(e, t) {
                            L.apply(e, H.call(t))
                        } : function(e, t) {
                            for (var n = e.length, r = 0; e[n++] = t[r++];);
                            e.length = n - 1
                        }
                    }
                }

                function se(e, t, r, i) {
                    var o, s, u, c, d, h, v, y = t && t.ownerDocument,
                        w = t ? t.nodeType : 9;
                    if (r = r || [], "string" != typeof e || !e || 1 !== w && 9 !== w && 11 !== w) return r;
                    if (!i && (f(t), t = t || p, m)) {
                        if (11 !== w && (d = Z.exec(e)))
                            if (o = d[1]) {
                                if (9 === w) {
                                    if (!(u = t.getElementById(o))) return r;
                                    if (u.id === o) return r.push(u), r
                                } else if (y && (u = y.getElementById(o)) && b(t, u) && u.id === o) return r.push(u), r
                            } else {
                                if (d[2]) return q.apply(r, t.getElementsByTagName(e)), r;
                                if ((o = d[3]) && n.getElementsByClassName && t.getElementsByClassName) return q.apply(r, t.getElementsByClassName(o)), r
                            }
                        if (n.qsa && !S[e + " "] && (!g || !g.test(e)) && (1 !== w || "object" !== t.nodeName.toLowerCase())) {
                            if (v = e, y = t, 1 === w && (U.test(e) || _.test(e))) {
                                for ((y = ee.test(e) && ve(t.parentNode) || t) === t && n.scope || ((c = t.getAttribute("id")) ? c = c.replace(re, ie) : t.setAttribute("id", c = x)), s = (h = a(e)).length; s--;) h[s] = (c ? "#" + c : ":scope") + " " + be(h[s]);
                                v = h.join(",")
                            }
                            try {
                                return q.apply(r, y.querySelectorAll(v)), r
                            } catch (t) {
                                S(e, !0)
                            } finally {
                                c === x && t.removeAttribute("id")
                            }
                        }
                    }
                    return l(e.replace(B, "$1"), t, r, i)
                }

                function le() {
                    var e = [];
                    return function t(n, i) {
                        return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i
                    }
                }

                function ue(e) {
                    return e[x] = !0, e
                }

                function ce(e) {
                    var t = p.createElement("fieldset");
                    try {
                        return !!e(t)
                    } catch (e) {
                        return !1
                    } finally {
                        t.parentNode && t.parentNode.removeChild(t), t = null
                    }
                }

                function de(e, t) {
                    for (var n = e.split("|"), i = n.length; i--;) r.attrHandle[n[i]] = t
                }

                function fe(e, t) {
                    var n = t && e,
                        r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                    if (r) return r;
                    if (n)
                        for (; n = n.nextSibling;)
                            if (n === t) return -1;
                    return e ? 1 : -1
                }

                function pe(e) {
                    return function(t) {
                        return "input" === t.nodeName.toLowerCase() && t.type === e
                    }
                }

                function he(e) {
                    return function(t) {
                        var n = t.nodeName.toLowerCase();
                        return ("input" === n || "button" === n) && t.type === e
                    }
                }

                function me(e) {
                    return function(t) {
                        return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ae(t) === e : t.disabled === e : "label" in t && t.disabled === e
                    }
                }

                function ge(e) {
                    return ue((function(t) {
                        return t = +t, ue((function(n, r) {
                            for (var i, o = e([], n.length, t), a = o.length; a--;) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                        }))
                    }))
                }

                function ve(e) {
                    return e && void 0 !== e.getElementsByTagName && e
                }
                for (t in n = se.support = {}, o = se.isXML = function(e) {
                        var t = e.namespaceURI,
                            n = (e.ownerDocument || e).documentElement;
                        return !Y.test(t || n && n.nodeName || "HTML")
                    }, f = se.setDocument = function(e) {
                        var t, i, a = e ? e.ownerDocument || e : w;
                        return a != p && 9 === a.nodeType && a.documentElement && (h = (p = a).documentElement, m = !o(p), w != p && (i = p.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", oe, !1) : i.attachEvent && i.attachEvent("onunload", oe)), n.scope = ce((function(e) {
                            return h.appendChild(e).appendChild(p.createElement("div")), void 0 !== e.querySelectorAll && !e.querySelectorAll(":scope fieldset div").length
                        })), n.attributes = ce((function(e) {
                            return e.className = "i", !e.getAttribute("className")
                        })), n.getElementsByTagName = ce((function(e) {
                            return e.appendChild(p.createComment("")), !e.getElementsByTagName("*").length
                        })), n.getElementsByClassName = K.test(p.getElementsByClassName), n.getById = ce((function(e) {
                            return h.appendChild(e).id = x, !p.getElementsByName || !p.getElementsByName(x).length
                        })), n.getById ? (r.filter.ID = function(e) {
                            var t = e.replace(te, ne);
                            return function(e) {
                                return e.getAttribute("id") === t
                            }
                        }, r.find.ID = function(e, t) {
                            if (void 0 !== t.getElementById && m) {
                                var n = t.getElementById(e);
                                return n ? [n] : []
                            }
                        }) : (r.filter.ID = function(e) {
                            var t = e.replace(te, ne);
                            return function(e) {
                                var n = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
                                return n && n.value === t
                            }
                        }, r.find.ID = function(e, t) {
                            if (void 0 !== t.getElementById && m) {
                                var n, r, i, o = t.getElementById(e);
                                if (o) {
                                    if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                                    for (i = t.getElementsByName(e), r = 0; o = i[r++];)
                                        if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                                }
                                return []
                            }
                        }), r.find.TAG = n.getElementsByTagName ? function(e, t) {
                            return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0
                        } : function(e, t) {
                            var n, r = [],
                                i = 0,
                                o = t.getElementsByTagName(e);
                            if ("*" === e) {
                                for (; n = o[i++];) 1 === n.nodeType && r.push(n);
                                return r
                            }
                            return o
                        }, r.find.CLASS = n.getElementsByClassName && function(e, t) {
                            if (void 0 !== t.getElementsByClassName && m) return t.getElementsByClassName(e)
                        }, v = [], g = [], (n.qsa = K.test(p.querySelectorAll)) && (ce((function(e) {
                            var t;
                            h.appendChild(e).innerHTML = "<a id='" + x + "'></a><select id='" + x + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && g.push("[*^$]=" + P + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || g.push("\\[" + P + "*(?:value|" + O + ")"), e.querySelectorAll("[id~=" + x + "-]").length || g.push("~="), (t = p.createElement("input")).setAttribute("name", ""), e.appendChild(t), e.querySelectorAll("[name='']").length || g.push("\\[" + P + "*name" + P + "*=" + P + "*(?:''|\"\")"), e.querySelectorAll(":checked").length || g.push(":checked"), e.querySelectorAll("a#" + x + "+*").length || g.push(".#.+[+~]"), e.querySelectorAll("\\\f"), g.push("[\\r\\n\\f]")
                        })), ce((function(e) {
                            e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                            var t = p.createElement("input");
                            t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && g.push("name" + P + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && g.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && g.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), g.push(",.*:")
                        }))), (n.matchesSelector = K.test(y = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ce((function(e) {
                            n.disconnectedMatch = y.call(e, "*"), y.call(e, "[s!='']:x"), v.push("!=", I)
                        })), g = g.length && new RegExp(g.join("|")), v = v.length && new RegExp(v.join("|")), t = K.test(h.compareDocumentPosition), b = t || K.test(h.contains) ? function(e, t) {
                            var n = 9 === e.nodeType ? e.documentElement : e,
                                r = t && t.parentNode;
                            return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                        } : function(e, t) {
                            if (t)
                                for (; t = t.parentNode;)
                                    if (t === e) return !0;
                            return !1
                        }, N = t ? function(e, t) {
                            if (e === t) return d = !0, 0;
                            var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
                            return r || (1 & (r = (e.ownerDocument || e) == (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e == p || e.ownerDocument == w && b(w, e) ? -1 : t == p || t.ownerDocument == w && b(w, t) ? 1 : c ? M(c, e) - M(c, t) : 0 : 4 & r ? -1 : 1)
                        } : function(e, t) {
                            if (e === t) return d = !0, 0;
                            var n, r = 0,
                                i = e.parentNode,
                                o = t.parentNode,
                                a = [e],
                                s = [t];
                            if (!i || !o) return e == p ? -1 : t == p ? 1 : i ? -1 : o ? 1 : c ? M(c, e) - M(c, t) : 0;
                            if (i === o) return fe(e, t);
                            for (n = e; n = n.parentNode;) a.unshift(n);
                            for (n = t; n = n.parentNode;) s.unshift(n);
                            for (; a[r] === s[r];) r++;
                            return r ? fe(a[r], s[r]) : a[r] == w ? -1 : s[r] == w ? 1 : 0
                        }), p
                    }, se.matches = function(e, t) {
                        return se(e, null, null, t)
                    }, se.matchesSelector = function(e, t) {
                        if (f(e), n.matchesSelector && m && !S[t + " "] && (!v || !v.test(t)) && (!g || !g.test(t))) try {
                            var r = y.call(e, t);
                            if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
                        } catch (e) {
                            S(t, !0)
                        }
                        return 0 < se(t, p, null, [e]).length
                    }, se.contains = function(e, t) {
                        return (e.ownerDocument || e) != p && f(e), b(e, t)
                    }, se.attr = function(e, t) {
                        (e.ownerDocument || e) != p && f(e);
                        var i = r.attrHandle[t.toLowerCase()],
                            o = i && D.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !m) : void 0;
                        return void 0 !== o ? o : n.attributes || !m ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null
                    }, se.escape = function(e) {
                        return (e + "").replace(re, ie)
                    }, se.error = function(e) {
                        throw new Error("Syntax error, unrecognized expression: " + e)
                    }, se.uniqueSort = function(e) {
                        var t, r = [],
                            i = 0,
                            o = 0;
                        if (d = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(N), d) {
                            for (; t = e[o++];) t === e[o] && (i = r.push(o));
                            for (; i--;) e.splice(r[i], 1)
                        }
                        return c = null, e
                    }, i = se.getText = function(e) {
                        var t, n = "",
                            r = 0,
                            o = e.nodeType;
                        if (o) {
                            if (1 === o || 9 === o || 11 === o) {
                                if ("string" == typeof e.textContent) return e.textContent;
                                for (e = e.firstChild; e; e = e.nextSibling) n += i(e)
                            } else if (3 === o || 4 === o) return e.nodeValue
                        } else
                            for (; t = e[r++];) n += i(t);
                        return n
                    }, (r = se.selectors = {
                        cacheLength: 50,
                        createPseudo: ue,
                        match: G,
                        attrHandle: {},
                        find: {},
                        relative: {
                            ">": {
                                dir: "parentNode",
                                first: !0
                            },
                            " ": {
                                dir: "parentNode"
                            },
                            "+": {
                                dir: "previousSibling",
                                first: !0
                            },
                            "~": {
                                dir: "previousSibling"
                            }
                        },
                        preFilter: {
                            ATTR: function(e) {
                                return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                            },
                            CHILD: function(e) {
                                return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && se.error(e[0]), e
                            },
                            PSEUDO: function(e) {
                                var t, n = !e[6] && e[2];
                                return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                            }
                        },
                        filter: {
                            TAG: function(e) {
                                var t = e.replace(te, ne).toLowerCase();
                                return "*" === e ? function() {
                                    return !0
                                } : function(e) {
                                    return e.nodeName && e.nodeName.toLowerCase() === t
                                }
                            },
                            CLASS: function(e) {
                                var t = k[e + " "];
                                return t || (t = new RegExp("(^|" + P + ")" + e + "(" + P + "|$)")) && k(e, (function(e) {
                                    return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
                                }))
                            },
                            ATTR: function(e, t, n) {
                                return function(r) {
                                    var i = se.attr(r, e);
                                    return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && -1 < i.indexOf(n) : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? -1 < (" " + i.replace(W, " ") + " ").indexOf(n) : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-"))
                                }
                            },
                            CHILD: function(e, t, n, r, i) {
                                var o = "nth" !== e.slice(0, 3),
                                    a = "last" !== e.slice(-4),
                                    s = "of-type" === t;
                                return 1 === r && 0 === i ? function(e) {
                                    return !!e.parentNode
                                } : function(t, n, l) {
                                    var u, c, d, f, p, h, m = o !== a ? "nextSibling" : "previousSibling",
                                        g = t.parentNode,
                                        v = s && t.nodeName.toLowerCase(),
                                        y = !l && !s,
                                        b = !1;
                                    if (g) {
                                        if (o) {
                                            for (; m;) {
                                                for (f = t; f = f[m];)
                                                    if (s ? f.nodeName.toLowerCase() === v : 1 === f.nodeType) return !1;
                                                h = m = "only" === e && !h && "nextSibling"
                                            }
                                            return !0
                                        }
                                        if (h = [a ? g.firstChild : g.lastChild], a && y) {
                                            for (b = (p = (u = (c = (d = (f = g)[x] || (f[x] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[e] || [])[0] === C && u[1]) && u[2], f = p && g.childNodes[p]; f = ++p && f && f[m] || (b = p = 0) || h.pop();)
                                                if (1 === f.nodeType && ++b && f === t) {
                                                    c[e] = [C, p, b];
                                                    break
                                                }
                                        } else if (y && (b = p = (u = (c = (d = (f = t)[x] || (f[x] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[e] || [])[0] === C && u[1]), !1 === b)
                                            for (;
                                                (f = ++p && f && f[m] || (b = p = 0) || h.pop()) && ((s ? f.nodeName.toLowerCase() !== v : 1 !== f.nodeType) || !++b || (y && ((c = (d = f[x] || (f[x] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[e] = [C, b]), f !== t)););
                                        return (b -= i) === r || b % r == 0 && 0 <= b / r
                                    }
                                }
                            },
                            PSEUDO: function(e, t) {
                                var n, i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " + e);
                                return i[x] ? i(t) : 1 < i.length ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? ue((function(e, n) {
                                    for (var r, o = i(e, t), a = o.length; a--;) e[r = M(e, o[a])] = !(n[r] = o[a])
                                })) : function(e) {
                                    return i(e, 0, n)
                                }) : i
                            }
                        },
                        pseudos: {
                            not: ue((function(e) {
                                var t = [],
                                    n = [],
                                    r = s(e.replace(B, "$1"));
                                return r[x] ? ue((function(e, t, n, i) {
                                    for (var o, a = r(e, null, i, []), s = e.length; s--;)(o = a[s]) && (e[s] = !(t[s] = o))
                                })) : function(e, i, o) {
                                    return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop()
                                }
                            })),
                            has: ue((function(e) {
                                return function(t) {
                                    return 0 < se(e, t).length
                                }
                            })),
                            contains: ue((function(e) {
                                return e = e.replace(te, ne),
                                    function(t) {
                                        return -1 < (t.textContent || i(t)).indexOf(e)
                                    }
                            })),
                            lang: ue((function(e) {
                                return V.test(e || "") || se.error("unsupported lang: " + e), e = e.replace(te, ne).toLowerCase(),
                                    function(t) {
                                        var n;
                                        do {
                                            if (n = m ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                                        } while ((t = t.parentNode) && 1 === t.nodeType);
                                        return !1
                                    }
                            })),
                            target: function(t) {
                                var n = e.location && e.location.hash;
                                return n && n.slice(1) === t.id
                            },
                            root: function(e) {
                                return e === h
                            },
                            focus: function(e) {
                                return e === p.activeElement && (!p.hasFocus || p.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                            },
                            enabled: me(!1),
                            disabled: me(!0),
                            checked: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && !!e.checked || "option" === t && !!e.selected
                            },
                            selected: function(e) {
                                return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                            },
                            empty: function(e) {
                                for (e = e.firstChild; e; e = e.nextSibling)
                                    if (e.nodeType < 6) return !1;
                                return !0
                            },
                            parent: function(e) {
                                return !r.pseudos.empty(e)
                            },
                            header: function(e) {
                                return J.test(e.nodeName)
                            },
                            input: function(e) {
                                return Q.test(e.nodeName)
                            },
                            button: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && "button" === e.type || "button" === t
                            },
                            text: function(e) {
                                var t;
                                return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                            },
                            first: ge((function() {
                                return [0]
                            })),
                            last: ge((function(e, t) {
                                return [t - 1]
                            })),
                            eq: ge((function(e, t, n) {
                                return [n < 0 ? n + t : n]
                            })),
                            even: ge((function(e, t) {
                                for (var n = 0; n < t; n += 2) e.push(n);
                                return e
                            })),
                            odd: ge((function(e, t) {
                                for (var n = 1; n < t; n += 2) e.push(n);
                                return e
                            })),
                            lt: ge((function(e, t, n) {
                                for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r;) e.push(r);
                                return e
                            })),
                            gt: ge((function(e, t, n) {
                                for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                                return e
                            }))
                        }
                    }).pseudos.nth = r.pseudos.eq, {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) r.pseudos[t] = pe(t);
                for (t in {
                        submit: !0,
                        reset: !0
                    }) r.pseudos[t] = he(t);

                function ye() {}

                function be(e) {
                    for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
                    return r
                }

                function xe(e, t, n) {
                    var r = t.dir,
                        i = t.next,
                        o = i || r,
                        a = n && "parentNode" === o,
                        s = T++;
                    return t.first ? function(t, n, i) {
                        for (; t = t[r];)
                            if (1 === t.nodeType || a) return e(t, n, i);
                        return !1
                    } : function(t, n, l) {
                        var u, c, d, f = [C, s];
                        if (l) {
                            for (; t = t[r];)
                                if ((1 === t.nodeType || a) && e(t, n, l)) return !0
                        } else
                            for (; t = t[r];)
                                if (1 === t.nodeType || a)
                                    if (c = (d = t[x] || (t[x] = {}))[t.uniqueID] || (d[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t;
                                    else {
                                        if ((u = c[o]) && u[0] === C && u[1] === s) return f[2] = u[2];
                                        if ((c[o] = f)[2] = e(t, n, l)) return !0
                                    } return !1
                    }
                }

                function we(e) {
                    return 1 < e.length ? function(t, n, r) {
                        for (var i = e.length; i--;)
                            if (!e[i](t, n, r)) return !1;
                        return !0
                    } : e[0]
                }

                function Ce(e, t, n, r, i) {
                    for (var o, a = [], s = 0, l = e.length, u = null != t; s < l; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), u && t.push(s)));
                    return a
                }

                function Te(e, t, n, r, i, o) {
                    return r && !r[x] && (r = Te(r)), i && !i[x] && (i = Te(i, o)), ue((function(o, a, s, l) {
                        var u, c, d, f = [],
                            p = [],
                            h = a.length,
                            m = o || function(e, t, n) {
                                for (var r = 0, i = t.length; r < i; r++) se(e, t[r], n);
                                return n
                            }(t || "*", s.nodeType ? [s] : s, []),
                            g = !e || !o && t ? m : Ce(m, f, e, s, l),
                            v = n ? i || (o ? e : h || r) ? [] : a : g;
                        if (n && n(g, v, s, l), r)
                            for (u = Ce(v, p), r(u, [], s, l), c = u.length; c--;)(d = u[c]) && (v[p[c]] = !(g[p[c]] = d));
                        if (o) {
                            if (i || e) {
                                if (i) {
                                    for (u = [], c = v.length; c--;)(d = v[c]) && u.push(g[c] = d);
                                    i(null, v = [], u, l)
                                }
                                for (c = v.length; c--;)(d = v[c]) && -1 < (u = i ? M(o, d) : f[c]) && (o[u] = !(a[u] = d))
                            }
                        } else v = Ce(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, l) : q.apply(a, v)
                    }))
                }

                function ke(e) {
                    for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], l = a ? 1 : 0, c = xe((function(e) {
                            return e === t
                        }), s, !0), d = xe((function(e) {
                            return -1 < M(t, e)
                        }), s, !0), f = [function(e, n, r) {
                            var i = !a && (r || n !== u) || ((t = n).nodeType ? c(e, n, r) : d(e, n, r));
                            return t = null, i
                        }]; l < o; l++)
                        if (n = r.relative[e[l].type]) f = [xe(we(f), n)];
                        else {
                            if ((n = r.filter[e[l].type].apply(null, e[l].matches))[x]) {
                                for (i = ++l; i < o && !r.relative[e[i].type]; i++);
                                return Te(1 < l && we(f), 1 < l && be(e.slice(0, l - 1).concat({
                                    value: " " === e[l - 2].type ? "*" : ""
                                })).replace(B, "$1"), n, l < i && ke(e.slice(l, i)), i < o && ke(e = e.slice(i)), i < o && be(e))
                            }
                            f.push(n)
                        }
                    return we(f)
                }
                return ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = se.tokenize = function(e, t) {
                    var n, i, o, a, s, l, u, c = E[e + " "];
                    if (c) return t ? 0 : c.slice(0);
                    for (s = e, l = [], u = r.preFilter; s;) {
                        for (a in n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), l.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({
                                value: n,
                                type: i[0].replace(B, " ")
                            }), s = s.slice(n.length)), r.filter) !(i = G[a].exec(s)) || u[a] && !(i = u[a](i)) || (n = i.shift(), o.push({
                            value: n,
                            type: a,
                            matches: i
                        }), s = s.slice(n.length));
                        if (!n) break
                    }
                    return t ? s.length : s ? se.error(e) : E(e, l).slice(0)
                }, s = se.compile = function(e, t) {
                    var n, i, o, s, l, c, d = [],
                        h = [],
                        g = A[e + " "];
                    if (!g) {
                        for (t || (t = a(e)), n = t.length; n--;)(g = ke(t[n]))[x] ? d.push(g) : h.push(g);
                        (g = A(e, (i = h, s = 0 < (o = d).length, l = 0 < i.length, c = function(e, t, n, a, c) {
                            var d, h, g, v = 0,
                                y = "0",
                                b = e && [],
                                x = [],
                                w = u,
                                T = e || l && r.find.TAG("*", c),
                                k = C += null == w ? 1 : Math.random() || .1,
                                E = T.length;
                            for (c && (u = t == p || t || c); y !== E && null != (d = T[y]); y++) {
                                if (l && d) {
                                    for (h = 0, t || d.ownerDocument == p || (f(d), n = !m); g = i[h++];)
                                        if (g(d, t || p, n)) {
                                            a.push(d);
                                            break
                                        }
                                    c && (C = k)
                                }
                                s && ((d = !g && d) && v--, e && b.push(d))
                            }
                            if (v += y, s && y !== v) {
                                for (h = 0; g = o[h++];) g(b, x, t, n);
                                if (e) {
                                    if (0 < v)
                                        for (; y--;) b[y] || x[y] || (x[y] = $.call(a));
                                    x = Ce(x)
                                }
                                q.apply(a, x), c && !e && 0 < x.length && 1 < v + o.length && se.uniqueSort(a)
                            }
                            return c && (C = k, u = w), b
                        }, s ? ue(c) : c))).selector = e
                    }
                    return g
                }, l = se.select = function(e, t, n, i) {
                    var o, l, u, c, d, f = "function" == typeof e && e,
                        p = !i && a(e = f.selector || e);
                    if (n = n || [], 1 === p.length) {
                        if (2 < (l = p[0] = p[0].slice(0)).length && "ID" === (u = l[0]).type && 9 === t.nodeType && m && r.relative[l[1].type]) {
                            if (!(t = (r.find.ID(u.matches[0].replace(te, ne), t) || [])[0])) return n;
                            f && (t = t.parentNode), e = e.slice(l.shift().value.length)
                        }
                        for (o = G.needsContext.test(e) ? 0 : l.length; o-- && (u = l[o], !r.relative[c = u.type]);)
                            if ((d = r.find[c]) && (i = d(u.matches[0].replace(te, ne), ee.test(l[0].type) && ve(t.parentNode) || t))) {
                                if (l.splice(o, 1), !(e = i.length && be(l))) return q.apply(n, i), n;
                                break
                            }
                    }
                    return (f || s(e, p))(i, t, !m, n, !t || ee.test(e) && ve(t.parentNode) || t), n
                }, n.sortStable = x.split("").sort(N).join("") === x, n.detectDuplicates = !!d, f(), n.sortDetached = ce((function(e) {
                    return 1 & e.compareDocumentPosition(p.createElement("fieldset"))
                })), ce((function(e) {
                    return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
                })) || de("type|href|height|width", (function(e, t, n) {
                    if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
                })), n.attributes && ce((function(e) {
                    return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
                })) || de("value", (function(e, t, n) {
                    if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
                })), ce((function(e) {
                    return null == e.getAttribute("disabled")
                })) || de(O, (function(e, t, n) {
                    var r;
                    if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
                })), se
            }(e);
            w.find = T, w.expr = T.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = T.uniqueSort, w.text = T.getText, w.isXMLDoc = T.isXML, w.contains = T.contains, w.escapeSelector = T.escape;
            var k = function(e, t, n) {
                    for (var r = [], i = void 0 !== n;
                        (e = e[t]) && 9 !== e.nodeType;)
                        if (1 === e.nodeType) {
                            if (i && w(e).is(n)) break;
                            r.push(e)
                        }
                    return r
                },
                E = function(e, t) {
                    for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
                    return n
                },
                A = w.expr.match.needsContext;

            function S(e, t) {
                return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
            }
            var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

            function D(e, t, n) {
                return h(t) ? w.grep(e, (function(e, r) {
                    return !!t.call(e, r, e) !== n
                })) : t.nodeType ? w.grep(e, (function(e) {
                    return e === t !== n
                })) : "string" != typeof t ? w.grep(e, (function(e) {
                    return -1 < s.call(t, e) !== n
                })) : w.filter(t, e, n)
            }
            w.filter = function(e, t, n) {
                var r = t[0];
                return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, (function(e) {
                    return 1 === e.nodeType
                })))
            }, w.fn.extend({
                find: function(e) {
                    var t, n, r = this.length,
                        i = this;
                    if ("string" != typeof e) return this.pushStack(w(e).filter((function() {
                        for (t = 0; t < r; t++)
                            if (w.contains(i[t], this)) return !0
                    })));
                    for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
                    return 1 < r ? w.uniqueSort(n) : n
                },
                filter: function(e) {
                    return this.pushStack(D(this, e || [], !1))
                },
                not: function(e) {
                    return this.pushStack(D(this, e || [], !0))
                },
                is: function(e) {
                    return !!D(this, "string" == typeof e && A.test(e) ? w(e) : e || [], !1).length
                }
            });
            var j, $ = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
            (w.fn.init = function(e, t, n) {
                var r, i;
                if (!e) return this;
                if (n = n || j, "string" == typeof e) {
                    if (!(r = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : $.exec(e)) || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                    if (r[1]) {
                        if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : g, !0)), N.test(r[1]) && w.isPlainObject(t))
                            for (r in t) h(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                        return this
                    }
                    return (i = g.getElementById(r[2])) && (this[0] = i, this.length = 1), this
                }
                return e.nodeType ? (this[0] = e, this.length = 1, this) : h(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this)
            }).prototype = w.fn, j = w(g);
            var L = /^(?:parents|prev(?:Until|All))/,
                q = {
                    children: !0,
                    contents: !0,
                    next: !0,
                    prev: !0
                };

            function H(e, t) {
                for (;
                    (e = e[t]) && 1 !== e.nodeType;);
                return e
            }
            w.fn.extend({
                has: function(e) {
                    var t = w(e, this),
                        n = t.length;
                    return this.filter((function() {
                        for (var e = 0; e < n; e++)
                            if (w.contains(this, t[e])) return !0
                    }))
                },
                closest: function(e, t) {
                    var n, r = 0,
                        i = this.length,
                        o = [],
                        a = "string" != typeof e && w(e);
                    if (!A.test(e))
                        for (; r < i; r++)
                            for (n = this[r]; n && n !== t; n = n.parentNode)
                                if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
                                    o.push(n);
                                    break
                                }
                    return this.pushStack(1 < o.length ? w.uniqueSort(o) : o)
                },
                index: function(e) {
                    return e ? "string" == typeof e ? s.call(w(e), this[0]) : s.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                },
                add: function(e, t) {
                    return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))))
                },
                addBack: function(e) {
                    return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
                }
            }), w.each({
                parent: function(e) {
                    var t = e.parentNode;
                    return t && 11 !== t.nodeType ? t : null
                },
                parents: function(e) {
                    return k(e, "parentNode")
                },
                parentsUntil: function(e, t, n) {
                    return k(e, "parentNode", n)
                },
                next: function(e) {
                    return H(e, "nextSibling")
                },
                prev: function(e) {
                    return H(e, "previousSibling")
                },
                nextAll: function(e) {
                    return k(e, "nextSibling")
                },
                prevAll: function(e) {
                    return k(e, "previousSibling")
                },
                nextUntil: function(e, t, n) {
                    return k(e, "nextSibling", n)
                },
                prevUntil: function(e, t, n) {
                    return k(e, "previousSibling", n)
                },
                siblings: function(e) {
                    return E((e.parentNode || {}).firstChild, e)
                },
                children: function(e) {
                    return E(e.firstChild)
                },
                contents: function(e) {
                    return null != e.contentDocument && r(e.contentDocument) ? e.contentDocument : (S(e, "template") && (e = e.content || e), w.merge([], e.childNodes))
                }
            }, (function(e, t) {
                w.fn[e] = function(n, r) {
                    var i = w.map(this, t, n);
                    return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), 1 < this.length && (q[e] || w.uniqueSort(i), L.test(e) && i.reverse()), this.pushStack(i)
                }
            }));
            var M = /[^\x20\t\r\n\f]+/g;

            function O(e) {
                return e
            }

            function P(e) {
                throw e
            }

            function R(e, t, n, r) {
                var i;
                try {
                    e && h(i = e.promise) ? i.call(e).done(t).fail(n) : e && h(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
                } catch (e) {
                    n.apply(void 0, [e])
                }
            }
            w.Callbacks = function(e) {
                var t, n;
                e = "string" == typeof e ? (t = e, n = {}, w.each(t.match(M) || [], (function(e, t) {
                    n[t] = !0
                })), n) : w.extend({}, e);
                var r, i, o, a, s = [],
                    l = [],
                    u = -1,
                    c = function() {
                        for (a = a || e.once, o = r = !0; l.length; u = -1)
                            for (i = l.shift(); ++u < s.length;) !1 === s[u].apply(i[0], i[1]) && e.stopOnFalse && (u = s.length, i = !1);
                        e.memory || (i = !1), r = !1, a && (s = i ? [] : "")
                    },
                    d = {
                        add: function() {
                            return s && (i && !r && (u = s.length - 1, l.push(i)), function t(n) {
                                w.each(n, (function(n, r) {
                                    h(r) ? e.unique && d.has(r) || s.push(r) : r && r.length && "string" !== b(r) && t(r)
                                }))
                            }(arguments), i && !r && c()), this
                        },
                        remove: function() {
                            return w.each(arguments, (function(e, t) {
                                for (var n; - 1 < (n = w.inArray(t, s, n));) s.splice(n, 1), n <= u && u--
                            })), this
                        },
                        has: function(e) {
                            return e ? -1 < w.inArray(e, s) : 0 < s.length
                        },
                        empty: function() {
                            return s && (s = []), this
                        },
                        disable: function() {
                            return a = l = [], s = i = "", this
                        },
                        disabled: function() {
                            return !s
                        },
                        lock: function() {
                            return a = l = [], i || r || (s = i = ""), this
                        },
                        locked: function() {
                            return !!a
                        },
                        fireWith: function(e, t) {
                            return a || (t = [e, (t = t || []).slice ? t.slice() : t], l.push(t), r || c()), this
                        },
                        fire: function() {
                            return d.fireWith(this, arguments), this
                        },
                        fired: function() {
                            return !!o
                        }
                    };
                return d
            }, w.extend({
                Deferred: function(t) {
                    var n = [
                            ["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2],
                            ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"],
                            ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]
                        ],
                        r = "pending",
                        i = {
                            state: function() {
                                return r
                            },
                            always: function() {
                                return o.done(arguments).fail(arguments), this
                            },
                            catch: function(e) {
                                return i.then(null, e)
                            },
                            pipe: function() {
                                var e = arguments;
                                return w.Deferred((function(t) {
                                    w.each(n, (function(n, r) {
                                        var i = h(e[r[4]]) && e[r[4]];
                                        o[r[1]]((function() {
                                            var e = i && i.apply(this, arguments);
                                            e && h(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments)
                                        }))
                                    })), e = null
                                })).promise()
                            },
                            then: function(t, r, i) {
                                var o = 0;

                                function a(t, n, r, i) {
                                    return function() {
                                        var s = this,
                                            l = arguments,
                                            u = function() {
                                                var e, u;
                                                if (!(t < o)) {
                                                    if ((e = r.apply(s, l)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                                    u = e && ("object" == typeof e || "function" == typeof e) && e.then, h(u) ? i ? u.call(e, a(o, n, O, i), a(o, n, P, i)) : (o++, u.call(e, a(o, n, O, i), a(o, n, P, i), a(o, n, O, n.notifyWith))) : (r !== O && (s = void 0, l = [e]), (i || n.resolveWith)(s, l))
                                                }
                                            },
                                            c = i ? u : function() {
                                                try {
                                                    u()
                                                } catch (e) {
                                                    w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), o <= t + 1 && (r !== P && (s = void 0, l = [e]), n.rejectWith(s, l))
                                                }
                                            };
                                        t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c))
                                    }
                                }
                                return w.Deferred((function(e) {
                                    n[0][3].add(a(0, e, h(i) ? i : O, e.notifyWith)), n[1][3].add(a(0, e, h(t) ? t : O)), n[2][3].add(a(0, e, h(r) ? r : P))
                                })).promise()
                            },
                            promise: function(e) {
                                return null != e ? w.extend(e, i) : i
                            }
                        },
                        o = {};
                    return w.each(n, (function(e, t) {
                        var a = t[2],
                            s = t[5];
                        i[t[1]] = a.add, s && a.add((function() {
                            r = s
                        }), n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function() {
                            return o[t[0] + "With"](this === o ? void 0 : this, arguments), this
                        }, o[t[0] + "With"] = a.fireWith
                    })), i.promise(o), t && t.call(o, o), o
                },
                when: function(e) {
                    var t = arguments.length,
                        n = t,
                        r = Array(n),
                        o = i.call(arguments),
                        a = w.Deferred(),
                        s = function(e) {
                            return function(n) {
                                r[e] = this, o[e] = 1 < arguments.length ? i.call(arguments) : n, --t || a.resolveWith(r, o)
                            }
                        };
                    if (t <= 1 && (R(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || h(o[n] && o[n].then))) return a.then();
                    for (; n--;) R(o[n], s(n), a.reject);
                    return a.promise()
                }
            });
            var z = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
            w.Deferred.exceptionHook = function(t, n) {
                e.console && e.console.warn && t && z.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
            }, w.readyException = function(t) {
                e.setTimeout((function() {
                    throw t
                }))
            };
            var I = w.Deferred();

            function W() {
                g.removeEventListener("DOMContentLoaded", W), e.removeEventListener("load", W), w.ready()
            }
            w.fn.ready = function(e) {
                return I.then(e).catch((function(e) {
                    w.readyException(e)
                })), this
            }, w.extend({
                isReady: !1,
                readyWait: 1,
                ready: function(e) {
                    (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0) !== e && 0 < --w.readyWait || I.resolveWith(g, [w])
                }
            }), w.ready.then = I.then, "complete" === g.readyState || "loading" !== g.readyState && !g.documentElement.doScroll ? e.setTimeout(w.ready) : (g.addEventListener("DOMContentLoaded", W), e.addEventListener("load", W));
            var B = function(e, t, n, r, i, o, a) {
                    var s = 0,
                        l = e.length,
                        u = null == n;
                    if ("object" === b(n))
                        for (s in i = !0, n) B(e, t, s, n[s], !0, o, a);
                    else if (void 0 !== r && (i = !0, h(r) || (a = !0), u && (a ? (t.call(e, r), t = null) : (u = t, t = function(e, t, n) {
                            return u.call(w(e), n)
                        })), t))
                        for (; s < l; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
                    return i ? e : u ? t.call(e) : l ? t(e[0], n) : o
                },
                F = /^-ms-/,
                _ = /-([a-z])/g;

            function U(e, t) {
                return t.toUpperCase()
            }

            function X(e) {
                return e.replace(F, "ms-").replace(_, U)
            }
            var V = function(e) {
                return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
            };

            function G() {
                this.expando = w.expando + G.uid++
            }
            G.uid = 1, G.prototype = {
                cache: function(e) {
                    var t = e[this.expando];
                    return t || (t = {}, V(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                        value: t,
                        configurable: !0
                    }))), t
                },
                set: function(e, t, n) {
                    var r, i = this.cache(e);
                    if ("string" == typeof t) i[X(t)] = n;
                    else
                        for (r in t) i[X(r)] = t[r];
                    return i
                },
                get: function(e, t) {
                    return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][X(t)]
                },
                access: function(e, t, n) {
                    return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
                },
                remove: function(e, t) {
                    var n, r = e[this.expando];
                    if (void 0 !== r) {
                        if (void 0 !== t) {
                            n = (t = Array.isArray(t) ? t.map(X) : (t = X(t)) in r ? [t] : t.match(M) || []).length;
                            for (; n--;) delete r[t[n]]
                        }(void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                    }
                },
                hasData: function(e) {
                    var t = e[this.expando];
                    return void 0 !== t && !w.isEmptyObject(t)
                }
            };
            var Y = new G,
                Q = new G,
                J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
                K = /[A-Z]/g;

            function Z(e, t, n) {
                var r, i;
                if (void 0 === n && 1 === e.nodeType)
                    if (r = "data-" + t.replace(K, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(r))) {
                        try {
                            n = "true" === (i = n) || "false" !== i && ("null" === i ? null : i === +i + "" ? +i : J.test(i) ? JSON.parse(i) : i)
                        } catch (e) {}
                        Q.set(e, t, n)
                    } else n = void 0;
                return n
            }
            w.extend({
                hasData: function(e) {
                    return Q.hasData(e) || Y.hasData(e)
                },
                data: function(e, t, n) {
                    return Q.access(e, t, n)
                },
                removeData: function(e, t) {
                    Q.remove(e, t)
                },
                _data: function(e, t, n) {
                    return Y.access(e, t, n)
                },
                _removeData: function(e, t) {
                    Y.remove(e, t)
                }
            }), w.fn.extend({
                data: function(e, t) {
                    var n, r, i, o = this[0],
                        a = o && o.attributes;
                    if (void 0 === e) {
                        if (this.length && (i = Q.get(o), 1 === o.nodeType && !Y.get(o, "hasDataAttrs"))) {
                            for (n = a.length; n--;) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = X(r.slice(5)), Z(o, r, i[r]));
                            Y.set(o, "hasDataAttrs", !0)
                        }
                        return i
                    }
                    return "object" == typeof e ? this.each((function() {
                        Q.set(this, e)
                    })) : B(this, (function(t) {
                        var n;
                        if (o && void 0 === t) return void 0 !== (n = Q.get(o, e)) || void 0 !== (n = Z(o, e)) ? n : void 0;
                        this.each((function() {
                            Q.set(this, e, t)
                        }))
                    }), null, t, 1 < arguments.length, null, !0)
                },
                removeData: function(e) {
                    return this.each((function() {
                        Q.remove(this, e)
                    }))
                }
            }), w.extend({
                queue: function(e, t, n) {
                    var r;
                    if (e) return t = (t || "fx") + "queue", r = Y.get(e, t), n && (!r || Array.isArray(n) ? r = Y.access(e, t, w.makeArray(n)) : r.push(n)), r || []
                },
                dequeue: function(e, t) {
                    t = t || "fx";
                    var n = w.queue(e, t),
                        r = n.length,
                        i = n.shift(),
                        o = w._queueHooks(e, t);
                    "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, (function() {
                        w.dequeue(e, t)
                    }), o)), !r && o && o.empty.fire()
                },
                _queueHooks: function(e, t) {
                    var n = t + "queueHooks";
                    return Y.get(e, n) || Y.access(e, n, {
                        empty: w.Callbacks("once memory").add((function() {
                            Y.remove(e, [t + "queue", n])
                        }))
                    })
                }
            }), w.fn.extend({
                queue: function(e, t) {
                    var n = 2;
                    return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each((function() {
                        var n = w.queue(this, e, t);
                        w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e)
                    }))
                },
                dequeue: function(e) {
                    return this.each((function() {
                        w.dequeue(this, e)
                    }))
                },
                clearQueue: function(e) {
                    return this.queue(e || "fx", [])
                },
                promise: function(e, t) {
                    var n, r = 1,
                        i = w.Deferred(),
                        o = this,
                        a = this.length,
                        s = function() {
                            --r || i.resolveWith(o, [o])
                        };
                    for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;)(n = Y.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
                    return s(), i.promise(t)
                }
            });
            var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
                te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$", "i"),
                ne = ["Top", "Right", "Bottom", "Left"],
                re = g.documentElement,
                ie = function(e) {
                    return w.contains(e.ownerDocument, e)
                },
                oe = {
                    composed: !0
                };
            re.getRootNode && (ie = function(e) {
                return w.contains(e.ownerDocument, e) || e.getRootNode(oe) === e.ownerDocument
            });
            var ae = function(e, t) {
                return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === w.css(e, "display")
            };

            function se(e, t, n, r) {
                var i, o, a = 20,
                    s = r ? function() {
                        return r.cur()
                    } : function() {
                        return w.css(e, t, "")
                    },
                    l = s(),
                    u = n && n[3] || (w.cssNumber[t] ? "" : "px"),
                    c = e.nodeType && (w.cssNumber[t] || "px" !== u && +l) && te.exec(w.css(e, t));
                if (c && c[3] !== u) {
                    for (l /= 2, u = u || c[3], c = +l || 1; a--;) w.style(e, t, c + u), (1 - o) * (1 - (o = s() / l || .5)) <= 0 && (a = 0), c /= o;
                    c *= 2, w.style(e, t, c + u), n = n || []
                }
                return n && (c = +c || +l || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = u, r.start = c, r.end = i)), i
            }
            var le = {};

            function ue(e, t) {
                for (var n, r, i, o, a, s, l, u = [], c = 0, d = e.length; c < d; c++)(r = e[c]).style && (n = r.style.display, t ? ("none" === n && (u[c] = Y.get(r, "display") || null, u[c] || (r.style.display = "")), "" === r.style.display && ae(r) && (u[c] = (l = a = o = void 0, a = (i = r).ownerDocument, s = i.nodeName, (l = le[s]) || (o = a.body.appendChild(a.createElement(s)), l = w.css(o, "display"), o.parentNode.removeChild(o), "none" === l && (l = "block"), le[s] = l)))) : "none" !== n && (u[c] = "none", Y.set(r, "display", n)));
                for (c = 0; c < d; c++) null != u[c] && (e[c].style.display = u[c]);
                return e
            }
            w.fn.extend({
                show: function() {
                    return ue(this, !0)
                },
                hide: function() {
                    return ue(this)
                },
                toggle: function(e) {
                    return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each((function() {
                        ae(this) ? w(this).show() : w(this).hide()
                    }))
                }
            });
            var ce, de, fe = /^(?:checkbox|radio)$/i,
                pe = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
                he = /^$|^module$|\/(?:java|ecma)script/i;
            ce = g.createDocumentFragment().appendChild(g.createElement("div")), (de = g.createElement("input")).setAttribute("type", "radio"), de.setAttribute("checked", "checked"), de.setAttribute("name", "t"), ce.appendChild(de), p.checkClone = ce.cloneNode(!0).cloneNode(!0).lastChild.checked, ce.innerHTML = "<textarea>x</textarea>", p.noCloneChecked = !!ce.cloneNode(!0).lastChild.defaultValue, ce.innerHTML = "<option></option>", p.option = !!ce.lastChild;
            var me = {
                thead: [1, "<table>", "</table>"],
                col: [2, "<table><colgroup>", "</colgroup></table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: [0, "", ""]
            };

            function ge(e, t) {
                var n;
                return n = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && S(e, t) ? w.merge([e], n) : n
            }

            function ve(e, t) {
                for (var n = 0, r = e.length; n < r; n++) Y.set(e[n], "globalEval", !t || Y.get(t[n], "globalEval"))
            }
            me.tbody = me.tfoot = me.colgroup = me.caption = me.thead, me.th = me.td, p.option || (me.optgroup = me.option = [1, "<select multiple='multiple'>", "</select>"]);
            var ye = /<|&#?\w+;/;

            function be(e, t, n, r, i) {
                for (var o, a, s, l, u, c, d = t.createDocumentFragment(), f = [], p = 0, h = e.length; p < h; p++)
                    if ((o = e[p]) || 0 === o)
                        if ("object" === b(o)) w.merge(f, o.nodeType ? [o] : o);
                        else if (ye.test(o)) {
                    for (a = a || d.appendChild(t.createElement("div")), s = (pe.exec(o) || ["", ""])[1].toLowerCase(), l = me[s] || me._default, a.innerHTML = l[1] + w.htmlPrefilter(o) + l[2], c = l[0]; c--;) a = a.lastChild;
                    w.merge(f, a.childNodes), (a = d.firstChild).textContent = ""
                } else f.push(t.createTextNode(o));
                for (d.textContent = "", p = 0; o = f[p++];)
                    if (r && -1 < w.inArray(o, r)) i && i.push(o);
                    else if (u = ie(o), a = ge(d.appendChild(o), "script"), u && ve(a), n)
                    for (c = 0; o = a[c++];) he.test(o.type || "") && n.push(o);
                return d
            }
            var xe = /^key/,
                we = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
                Ce = /^([^.]*)(?:\.(.+)|)/;

            function Te() {
                return !0
            }

            function ke() {
                return !1
            }

            function Ee(e, t) {
                return e === function() {
                    try {
                        return g.activeElement
                    } catch (e) {}
                }() == ("focus" === t)
            }

            function Ae(e, t, n, r, i, o) {
                var a, s;
                if ("object" == typeof t) {
                    for (s in "string" != typeof n && (r = r || n, n = void 0), t) Ae(e, s, n, r, t[s], o);
                    return e
                }
                if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke;
                else if (!i) return e;
                return 1 === o && (a = i, (i = function(e) {
                    return w().off(e), a.apply(this, arguments)
                }).guid = a.guid || (a.guid = w.guid++)), e.each((function() {
                    w.event.add(this, t, i, r, n)
                }))
            }

            function Se(e, t, n) {
                n ? (Y.set(e, t, !1), w.event.add(e, t, {
                    namespace: !1,
                    handler: function(e) {
                        var r, o, a = Y.get(this, t);
                        if (1 & e.isTrigger && this[t]) {
                            if (a.length)(w.event.special[t] || {}).delegateType && e.stopPropagation();
                            else if (a = i.call(arguments), Y.set(this, t, a), r = n(this, t), this[t](), a !== (o = Y.get(this, t)) || r ? Y.set(this, t, !1) : o = {}, a !== o) return e.stopImmediatePropagation(), e.preventDefault(), o.value
                        } else a.length && (Y.set(this, t, {
                            value: w.event.trigger(w.extend(a[0], w.Event.prototype), a.slice(1), this)
                        }), e.stopImmediatePropagation())
                    }
                })) : void 0 === Y.get(e, t) && w.event.add(e, t, Te)
            }
            w.event = {
                global: {},
                add: function(e, t, n, r, i) {
                    var o, a, s, l, u, c, d, f, p, h, m, g = Y.get(e);
                    if (V(e))
                        for (n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(re, i), n.guid || (n.guid = w.guid++), (l = g.events) || (l = g.events = Object.create(null)), (a = g.handle) || (a = g.handle = function(t) {
                                return void 0 !== w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0
                            }), u = (t = (t || "").match(M) || [""]).length; u--;) p = m = (s = Ce.exec(t[u]) || [])[1], h = (s[2] || "").split(".").sort(), p && (d = w.event.special[p] || {}, p = (i ? d.delegateType : d.bindType) || p, d = w.event.special[p] || {}, c = w.extend({
                            type: p,
                            origType: m,
                            data: r,
                            handler: n,
                            guid: n.guid,
                            selector: i,
                            needsContext: i && w.expr.match.needsContext.test(i),
                            namespace: h.join(".")
                        }, o), (f = l[p]) || ((f = l[p] = []).delegateCount = 0, d.setup && !1 !== d.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(p, a)), d.add && (d.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? f.splice(f.delegateCount++, 0, c) : f.push(c), w.event.global[p] = !0)
                },
                remove: function(e, t, n, r, i) {
                    var o, a, s, l, u, c, d, f, p, h, m, g = Y.hasData(e) && Y.get(e);
                    if (g && (l = g.events)) {
                        for (u = (t = (t || "").match(M) || [""]).length; u--;)
                            if (p = m = (s = Ce.exec(t[u]) || [])[1], h = (s[2] || "").split(".").sort(), p) {
                                for (d = w.event.special[p] || {}, f = l[p = (r ? d.delegateType : d.bindType) || p] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = f.length; o--;) c = f[o], !i && m !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (f.splice(o, 1), c.selector && f.delegateCount--, d.remove && d.remove.call(e, c));
                                a && !f.length && (d.teardown && !1 !== d.teardown.call(e, h, g.handle) || w.removeEvent(e, p, g.handle), delete l[p])
                            } else
                                for (p in l) w.event.remove(e, p + t[u], n, r, !0);
                        w.isEmptyObject(l) && Y.remove(e, "handle events")
                    }
                },
                dispatch: function(e) {
                    var t, n, r, i, o, a, s = new Array(arguments.length),
                        l = w.event.fix(e),
                        u = (Y.get(this, "events") || Object.create(null))[l.type] || [],
                        c = w.event.special[l.type] || {};
                    for (s[0] = l, t = 1; t < arguments.length; t++) s[t] = arguments[t];
                    if (l.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, l)) {
                        for (a = w.event.handlers.call(this, l, u), t = 0;
                            (i = a[t++]) && !l.isPropagationStopped();)
                            for (l.currentTarget = i.elem, n = 0;
                                (o = i.handlers[n++]) && !l.isImmediatePropagationStopped();) l.rnamespace && !1 !== o.namespace && !l.rnamespace.test(o.namespace) || (l.handleObj = o, l.data = o.data, void 0 !== (r = ((w.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, s)) && !1 === (l.result = r) && (l.preventDefault(), l.stopPropagation()));
                        return c.postDispatch && c.postDispatch.call(this, l), l.result
                    }
                },
                handlers: function(e, t) {
                    var n, r, i, o, a, s = [],
                        l = t.delegateCount,
                        u = e.target;
                    if (l && u.nodeType && !("click" === e.type && 1 <= e.button))
                        for (; u !== this; u = u.parentNode || this)
                            if (1 === u.nodeType && ("click" !== e.type || !0 !== u.disabled)) {
                                for (o = [], a = {}, n = 0; n < l; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? -1 < w(i, this).index(u) : w.find(i, this, null, [u]).length), a[i] && o.push(r);
                                o.length && s.push({
                                    elem: u,
                                    handlers: o
                                })
                            }
                    return u = this, l < t.length && s.push({
                        elem: u,
                        handlers: t.slice(l)
                    }), s
                },
                addProp: function(e, t) {
                    Object.defineProperty(w.Event.prototype, e, {
                        enumerable: !0,
                        configurable: !0,
                        get: h(t) ? function() {
                            if (this.originalEvent) return t(this.originalEvent)
                        } : function() {
                            if (this.originalEvent) return this.originalEvent[e]
                        },
                        set: function(t) {
                            Object.defineProperty(this, e, {
                                enumerable: !0,
                                configurable: !0,
                                writable: !0,
                                value: t
                            })
                        }
                    })
                },
                fix: function(e) {
                    return e[w.expando] ? e : new w.Event(e)
                },
                special: {
                    load: {
                        noBubble: !0
                    },
                    click: {
                        setup: function(e) {
                            var t = this || e;
                            return fe.test(t.type) && t.click && S(t, "input") && Se(t, "click", Te), !1
                        },
                        trigger: function(e) {
                            var t = this || e;
                            return fe.test(t.type) && t.click && S(t, "input") && Se(t, "click"), !0
                        },
                        _default: function(e) {
                            var t = e.target;
                            return fe.test(t.type) && t.click && S(t, "input") && Y.get(t, "click") || S(t, "a")
                        }
                    },
                    beforeunload: {
                        postDispatch: function(e) {
                            void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                        }
                    }
                }
            }, w.removeEvent = function(e, t, n) {
                e.removeEventListener && e.removeEventListener(t, n)
            }, w.Event = function(e, t) {
                if (!(this instanceof w.Event)) return new w.Event(e, t);
                e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Te : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0
            }, w.Event.prototype = {
                constructor: w.Event,
                isDefaultPrevented: ke,
                isPropagationStopped: ke,
                isImmediatePropagationStopped: ke,
                isSimulated: !1,
                preventDefault: function() {
                    var e = this.originalEvent;
                    this.isDefaultPrevented = Te, e && !this.isSimulated && e.preventDefault()
                },
                stopPropagation: function() {
                    var e = this.originalEvent;
                    this.isPropagationStopped = Te, e && !this.isSimulated && e.stopPropagation()
                },
                stopImmediatePropagation: function() {
                    var e = this.originalEvent;
                    this.isImmediatePropagationStopped = Te, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
                }
            }, w.each({
                altKey: !0,
                bubbles: !0,
                cancelable: !0,
                changedTouches: !0,
                ctrlKey: !0,
                detail: !0,
                eventPhase: !0,
                metaKey: !0,
                pageX: !0,
                pageY: !0,
                shiftKey: !0,
                view: !0,
                char: !0,
                code: !0,
                charCode: !0,
                key: !0,
                keyCode: !0,
                button: !0,
                buttons: !0,
                clientX: !0,
                clientY: !0,
                offsetX: !0,
                offsetY: !0,
                pointerId: !0,
                pointerType: !0,
                screenX: !0,
                screenY: !0,
                targetTouches: !0,
                toElement: !0,
                touches: !0,
                which: function(e) {
                    var t = e.button;
                    return null == e.which && xe.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && we.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
                }
            }, w.event.addProp), w.each({
                focus: "focusin",
                blur: "focusout"
            }, (function(e, t) {
                w.event.special[e] = {
                    setup: function() {
                        return Se(this, e, Ee), !1
                    },
                    trigger: function() {
                        return Se(this, e), !0
                    },
                    delegateType: t
                }
            })), w.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout",
                pointerenter: "pointerover",
                pointerleave: "pointerout"
            }, (function(e, t) {
                w.event.special[e] = {
                    delegateType: t,
                    bindType: t,
                    handle: function(e) {
                        var n, r = e.relatedTarget,
                            i = e.handleObj;
                        return r && (r === this || w.contains(this, r)) || (e.type = i.origType, n = i.handler.apply(this, arguments), e.type = t), n
                    }
                }
            })), w.fn.extend({
                on: function(e, t, n, r) {
                    return Ae(this, e, t, n, r)
                },
                one: function(e, t, n, r) {
                    return Ae(this, e, t, n, r, 1)
                },
                off: function(e, t, n) {
                    var r, i;
                    if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
                    if ("object" == typeof e) {
                        for (i in e) this.off(i, t, e[i]);
                        return this
                    }
                    return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each((function() {
                        w.event.remove(this, e, n, t)
                    }))
                }
            });
            var Ne = /<script|<style|<link/i,
                De = /checked\s*(?:[^=]|=\s*.checked.)/i,
                je = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

            function $e(e, t) {
                return S(e, "table") && S(11 !== t.nodeType ? t : t.firstChild, "tr") && w(e).children("tbody")[0] || e
            }

            function Le(e) {
                return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
            }

            function qe(e) {
                return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
            }

            function He(e, t) {
                var n, r, i, o, a, s;
                if (1 === t.nodeType) {
                    if (Y.hasData(e) && (s = Y.get(e).events))
                        for (i in Y.remove(t, "handle events"), s)
                            for (n = 0, r = s[i].length; n < r; n++) w.event.add(t, i, s[i][n]);
                    Q.hasData(e) && (o = Q.access(e), a = w.extend({}, o), Q.set(t, a))
                }
            }

            function Me(e, t, n, r) {
                t = o(t);
                var i, a, s, l, u, c, d = 0,
                    f = e.length,
                    m = f - 1,
                    g = t[0],
                    v = h(g);
                if (v || 1 < f && "string" == typeof g && !p.checkClone && De.test(g)) return e.each((function(i) {
                    var o = e.eq(i);
                    v && (t[0] = g.call(this, i, o.html())), Me(o, t, n, r)
                }));
                if (f && (a = (i = be(t, e[0].ownerDocument, !1, e, r)).firstChild, 1 === i.childNodes.length && (i = a), a || r)) {
                    for (l = (s = w.map(ge(i, "script"), Le)).length; d < f; d++) u = i, d !== m && (u = w.clone(u, !0, !0), l && w.merge(s, ge(u, "script"))), n.call(e[d], u, d);
                    if (l)
                        for (c = s[s.length - 1].ownerDocument, w.map(s, qe), d = 0; d < l; d++) u = s[d], he.test(u.type || "") && !Y.access(u, "globalEval") && w.contains(c, u) && (u.src && "module" !== (u.type || "").toLowerCase() ? w._evalUrl && !u.noModule && w._evalUrl(u.src, {
                            nonce: u.nonce || u.getAttribute("nonce")
                        }, c) : y(u.textContent.replace(je, ""), u, c))
                }
                return e
            }

            function Oe(e, t, n) {
                for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || w.cleanData(ge(r)), r.parentNode && (n && ie(r) && ve(ge(r, "script")), r.parentNode.removeChild(r));
                return e
            }
            w.extend({
                htmlPrefilter: function(e) {
                    return e
                },
                clone: function(e, t, n) {
                    var r, i, o, a, s, l, u, c = e.cloneNode(!0),
                        d = ie(e);
                    if (!(p.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e)))
                        for (a = ge(c), r = 0, i = (o = ge(e)).length; r < i; r++) s = o[r], "input" === (u = (l = a[r]).nodeName.toLowerCase()) && fe.test(s.type) ? l.checked = s.checked : "input" !== u && "textarea" !== u || (l.defaultValue = s.defaultValue);
                    if (t)
                        if (n)
                            for (o = o || ge(e), a = a || ge(c), r = 0, i = o.length; r < i; r++) He(o[r], a[r]);
                        else He(e, c);
                    return 0 < (a = ge(c, "script")).length && ve(a, !d && ge(e, "script")), c
                },
                cleanData: function(e) {
                    for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++)
                        if (V(n)) {
                            if (t = n[Y.expando]) {
                                if (t.events)
                                    for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
                                n[Y.expando] = void 0
                            }
                            n[Q.expando] && (n[Q.expando] = void 0)
                        }
                }
            }), w.fn.extend({
                detach: function(e) {
                    return Oe(this, e, !0)
                },
                remove: function(e) {
                    return Oe(this, e)
                },
                text: function(e) {
                    return B(this, (function(e) {
                        return void 0 === e ? w.text(this) : this.empty().each((function() {
                            1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                        }))
                    }), null, e, arguments.length)
                },
                append: function() {
                    return Me(this, arguments, (function(e) {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || $e(this, e).appendChild(e)
                    }))
                },
                prepend: function() {
                    return Me(this, arguments, (function(e) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var t = $e(this, e);
                            t.insertBefore(e, t.firstChild)
                        }
                    }))
                },
                before: function() {
                    return Me(this, arguments, (function(e) {
                        this.parentNode && this.parentNode.insertBefore(e, this)
                    }))
                },
                after: function() {
                    return Me(this, arguments, (function(e) {
                        this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                    }))
                },
                empty: function() {
                    for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ge(e, !1)), e.textContent = "");
                    return this
                },
                clone: function(e, t) {
                    return e = null != e && e, t = null == t ? e : t, this.map((function() {
                        return w.clone(this, e, t)
                    }))
                },
                html: function(e) {
                    return B(this, (function(e) {
                        var t = this[0] || {},
                            n = 0,
                            r = this.length;
                        if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                        if ("string" == typeof e && !Ne.test(e) && !me[(pe.exec(e) || ["", ""])[1].toLowerCase()]) {
                            e = w.htmlPrefilter(e);
                            try {
                                for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ge(t, !1)), t.innerHTML = e);
                                t = 0
                            } catch (e) {}
                        }
                        t && this.empty().append(e)
                    }), null, e, arguments.length)
                },
                replaceWith: function() {
                    var e = [];
                    return Me(this, arguments, (function(t) {
                        var n = this.parentNode;
                        w.inArray(this, e) < 0 && (w.cleanData(ge(this)), n && n.replaceChild(t, this))
                    }), e)
                }
            }), w.each({
                appendTo: "append",
                prependTo: "prepend",
                insertBefore: "before",
                insertAfter: "after",
                replaceAll: "replaceWith"
            }, (function(e, t) {
                w.fn[e] = function(e) {
                    for (var n, r = [], i = w(e), o = i.length - 1, s = 0; s <= o; s++) n = s === o ? this : this.clone(!0), w(i[s])[t](n), a.apply(r, n.get());
                    return this.pushStack(r)
                }
            }));
            var Pe = new RegExp("^(" + ee + ")(?!px)[a-z%]+$", "i"),
                Re = function(t) {
                    var n = t.ownerDocument.defaultView;
                    return n && n.opener || (n = e), n.getComputedStyle(t)
                },
                ze = function(e, t, n) {
                    var r, i, o = {};
                    for (i in t) o[i] = e.style[i], e.style[i] = t[i];
                    for (i in r = n.call(e), t) e.style[i] = o[i];
                    return r
                },
                Ie = new RegExp(ne.join("|"), "i");

            function We(e, t, n) {
                var r, i, o, a, s = e.style;
                return (n = n || Re(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = w.style(e, t)), !p.pixelBoxStyles() && Pe.test(a) && Ie.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
            }

            function Be(e, t) {
                return {
                    get: function() {
                        if (!e()) return (this.get = t).apply(this, arguments);
                        delete this.get
                    }
                }
            }! function() {
                function t() {
                    if (c) {
                        u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", re.appendChild(u).appendChild(c);
                        var t = e.getComputedStyle(c);
                        r = "1%" !== t.top, l = 12 === n(t.marginLeft), c.style.right = "60%", a = 36 === n(t.right), i = 36 === n(t.width), c.style.position = "absolute", o = 12 === n(c.offsetWidth / 3), re.removeChild(u), c = null
                    }
                }

                function n(e) {
                    return Math.round(parseFloat(e))
                }
                var r, i, o, a, s, l, u = g.createElement("div"),
                    c = g.createElement("div");
                c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", p.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(p, {
                    boxSizingReliable: function() {
                        return t(), i
                    },
                    pixelBoxStyles: function() {
                        return t(), a
                    },
                    pixelPosition: function() {
                        return t(), r
                    },
                    reliableMarginLeft: function() {
                        return t(), l
                    },
                    scrollboxSize: function() {
                        return t(), o
                    },
                    reliableTrDimensions: function() {
                        var t, n, r, i;
                        return null == s && (t = g.createElement("table"), n = g.createElement("tr"), r = g.createElement("div"), t.style.cssText = "position:absolute;left:-11111px", n.style.height = "1px", r.style.height = "9px", re.appendChild(t).appendChild(n).appendChild(r), i = e.getComputedStyle(n), s = 3 < parseInt(i.height), re.removeChild(t)), s
                    }
                }))
            }();
            var Fe = ["Webkit", "Moz", "ms"],
                _e = g.createElement("div").style,
                Ue = {};

            function Xe(e) {
                return w.cssProps[e] || Ue[e] || (e in _e ? e : Ue[e] = function(e) {
                    for (var t = e[0].toUpperCase() + e.slice(1), n = Fe.length; n--;)
                        if ((e = Fe[n] + t) in _e) return e
                }(e) || e)
            }
            var Ve = /^(none|table(?!-c[ea]).+)/,
                Ge = /^--/,
                Ye = {
                    position: "absolute",
                    visibility: "hidden",
                    display: "block"
                },
                Qe = {
                    letterSpacing: "0",
                    fontWeight: "400"
                };

            function Je(e, t, n) {
                var r = te.exec(t);
                return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
            }

            function Ke(e, t, n, r, i, o) {
                var a = "width" === t ? 1 : 0,
                    s = 0,
                    l = 0;
                if (n === (r ? "border" : "content")) return 0;
                for (; a < 4; a += 2) "margin" === n && (l += w.css(e, n + ne[a], !0, i)), r ? ("content" === n && (l -= w.css(e, "padding" + ne[a], !0, i)), "margin" !== n && (l -= w.css(e, "border" + ne[a] + "Width", !0, i))) : (l += w.css(e, "padding" + ne[a], !0, i), "padding" !== n ? l += w.css(e, "border" + ne[a] + "Width", !0, i) : s += w.css(e, "border" + ne[a] + "Width", !0, i));
                return !r && 0 <= o && (l += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - l - s - .5)) || 0), l
            }

            function Ze(e, t, n) {
                var r = Re(e),
                    i = (!p.boxSizingReliable() || n) && "border-box" === w.css(e, "boxSizing", !1, r),
                    o = i,
                    a = We(e, t, r),
                    s = "offset" + t[0].toUpperCase() + t.slice(1);
                if (Pe.test(a)) {
                    if (!n) return a;
                    a = "auto"
                }
                return (!p.boxSizingReliable() && i || !p.reliableTrDimensions() && S(e, "tr") || "auto" === a || !parseFloat(a) && "inline" === w.css(e, "display", !1, r)) && e.getClientRects().length && (i = "border-box" === w.css(e, "boxSizing", !1, r), (o = s in e) && (a = e[s])), (a = parseFloat(a) || 0) + Ke(e, t, n || (i ? "border" : "content"), o, r, a) + "px"
            }

            function et(e, t, n, r, i) {
                return new et.prototype.init(e, t, n, r, i)
            }
            w.extend({
                cssHooks: {
                    opacity: {
                        get: function(e, t) {
                            if (t) {
                                var n = We(e, "opacity");
                                return "" === n ? "1" : n
                            }
                        }
                    }
                },
                cssNumber: {
                    animationIterationCount: !0,
                    columnCount: !0,
                    fillOpacity: !0,
                    flexGrow: !0,
                    flexShrink: !0,
                    fontWeight: !0,
                    gridArea: !0,
                    gridColumn: !0,
                    gridColumnEnd: !0,
                    gridColumnStart: !0,
                    gridRow: !0,
                    gridRowEnd: !0,
                    gridRowStart: !0,
                    lineHeight: !0,
                    opacity: !0,
                    order: !0,
                    orphans: !0,
                    widows: !0,
                    zIndex: !0,
                    zoom: !0
                },
                cssProps: {},
                style: function(e, t, n, r) {
                    if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                        var i, o, a, s = X(t),
                            l = Ge.test(t),
                            u = e.style;
                        if (l || (t = Xe(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : u[t];
                        "string" == (o = typeof n) && (i = te.exec(n)) && i[1] && (n = se(e, t, i), o = "number"), null != n && n == n && ("number" !== o || l || (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), p.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (u[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (l ? u.setProperty(t, n) : u[t] = n))
                    }
                },
                css: function(e, t, n, r) {
                    var i, o, a, s = X(t);
                    return Ge.test(t) || (t = Xe(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = We(e, t, r)), "normal" === i && t in Qe && (i = Qe[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
                }
            }), w.each(["height", "width"], (function(e, t) {
                w.cssHooks[t] = {
                    get: function(e, n, r) {
                        if (n) return !Ve.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? Ze(e, t, r) : ze(e, Ye, (function() {
                            return Ze(e, t, r)
                        }))
                    },
                    set: function(e, n, r) {
                        var i, o = Re(e),
                            a = !p.scrollboxSize() && "absolute" === o.position,
                            s = (a || r) && "border-box" === w.css(e, "boxSizing", !1, o),
                            l = r ? Ke(e, t, r, s, o) : 0;
                        return s && a && (l -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ke(e, t, "border", !1, o) - .5)), l && (i = te.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Je(0, n, l)
                    }
                }
            })), w.cssHooks.marginLeft = Be(p.reliableMarginLeft, (function(e, t) {
                if (t) return (parseFloat(We(e, "marginLeft")) || e.getBoundingClientRect().left - ze(e, {
                    marginLeft: 0
                }, (function() {
                    return e.getBoundingClientRect().left
                }))) + "px"
            })), w.each({
                margin: "",
                padding: "",
                border: "Width"
            }, (function(e, t) {
                w.cssHooks[e + t] = {
                    expand: function(n) {
                        for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + ne[r] + t] = o[r] || o[r - 2] || o[0];
                        return i
                    }
                }, "margin" !== e && (w.cssHooks[e + t].set = Je)
            })), w.fn.extend({
                css: function(e, t) {
                    return B(this, (function(e, t, n) {
                        var r, i, o = {},
                            a = 0;
                        if (Array.isArray(t)) {
                            for (r = Re(e), i = t.length; a < i; a++) o[t[a]] = w.css(e, t[a], !1, r);
                            return o
                        }
                        return void 0 !== n ? w.style(e, t, n) : w.css(e, t)
                    }), e, t, 1 < arguments.length)
                }
            }), ((w.Tween = et).prototype = {
                constructor: et,
                init: function(e, t, n, r, i, o) {
                    this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px")
                },
                cur: function() {
                    var e = et.propHooks[this.prop];
                    return e && e.get ? e.get(this) : et.propHooks._default.get(this)
                },
                run: function(e) {
                    var t, n = et.propHooks[this.prop];
                    return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : et.propHooks._default.set(this), this
                }
            }).init.prototype = et.prototype, (et.propHooks = {
                _default: {
                    get: function(e) {
                        var t;
                        return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
                    },
                    set: function(e) {
                        w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !w.cssHooks[e.prop] && null == e.elem.style[Xe(e.prop)] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit)
                    }
                }
            }).scrollTop = et.propHooks.scrollLeft = {
                set: function(e) {
                    e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
                }
            }, w.easing = {
                linear: function(e) {
                    return e
                },
                swing: function(e) {
                    return .5 - Math.cos(e * Math.PI) / 2
                },
                _default: "swing"
            }, w.fx = et.prototype.init, w.fx.step = {};
            var tt, nt, rt, it, ot = /^(?:toggle|show|hide)$/,
                at = /queueHooks$/;

            function st() {
                nt && (!1 === g.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(st) : e.setTimeout(st, w.fx.interval), w.fx.tick())
            }

            function lt() {
                return e.setTimeout((function() {
                    tt = void 0
                })), tt = Date.now()
            }

            function ut(e, t) {
                var n, r = 0,
                    i = {
                        height: e
                    };
                for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = ne[r])] = i["padding" + n] = e;
                return t && (i.opacity = i.width = e), i
            }

            function ct(e, t, n) {
                for (var r, i = (dt.tweeners[t] || []).concat(dt.tweeners["*"]), o = 0, a = i.length; o < a; o++)
                    if (r = i[o].call(n, t, e)) return r
            }

            function dt(e, t, n) {
                var r, i, o = 0,
                    a = dt.prefilters.length,
                    s = w.Deferred().always((function() {
                        delete l.elem
                    })),
                    l = function() {
                        if (i) return !1;
                        for (var t = tt || lt(), n = Math.max(0, u.startTime + u.duration - t), r = 1 - (n / u.duration || 0), o = 0, a = u.tweens.length; o < a; o++) u.tweens[o].run(r);
                        return s.notifyWith(e, [u, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [u, 1, 0]), s.resolveWith(e, [u]), !1)
                    },
                    u = s.promise({
                        elem: e,
                        props: w.extend({}, t),
                        opts: w.extend(!0, {
                            specialEasing: {},
                            easing: w.easing._default
                        }, n),
                        originalProperties: t,
                        originalOptions: n,
                        startTime: tt || lt(),
                        duration: n.duration,
                        tweens: [],
                        createTween: function(t, n) {
                            var r = w.Tween(e, u.opts, t, n, u.opts.specialEasing[t] || u.opts.easing);
                            return u.tweens.push(r), r
                        },
                        stop: function(t) {
                            var n = 0,
                                r = t ? u.tweens.length : 0;
                            if (i) return this;
                            for (i = !0; n < r; n++) u.tweens[n].run(1);
                            return t ? (s.notifyWith(e, [u, 1, 0]), s.resolveWith(e, [u, t])) : s.rejectWith(e, [u, t]), this
                        }
                    }),
                    c = u.props;
                for (function(e, t) {
                        var n, r, i, o, a;
                        for (n in e)
                            if (i = t[r = X(n)], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a)
                                for (n in o = a.expand(o), delete e[r], o) n in e || (e[n] = o[n], t[n] = i);
                            else t[r] = i
                    }(c, u.opts.specialEasing); o < a; o++)
                    if (r = dt.prefilters[o].call(u, e, c, u.opts)) return h(r.stop) && (w._queueHooks(u.elem, u.opts.queue).stop = r.stop.bind(r)), r;
                return w.map(c, ct, u), h(u.opts.start) && u.opts.start.call(e, u), u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always), w.fx.timer(w.extend(l, {
                    elem: e,
                    anim: u,
                    queue: u.opts.queue
                })), u
            }
            w.Animation = w.extend(dt, {
                tweeners: {
                    "*": [function(e, t) {
                        var n = this.createTween(e, t);
                        return se(n.elem, e, te.exec(t), n), n
                    }]
                },
                tweener: function(e, t) {
                    h(e) ? (t = e, e = ["*"]) : e = e.match(M);
                    for (var n, r = 0, i = e.length; r < i; r++) n = e[r], dt.tweeners[n] = dt.tweeners[n] || [], dt.tweeners[n].unshift(t)
                },
                prefilters: [function(e, t, n) {
                    var r, i, o, a, s, l, u, c, d = "width" in t || "height" in t,
                        f = this,
                        p = {},
                        h = e.style,
                        m = e.nodeType && ae(e),
                        g = Y.get(e, "fxshow");
                    for (r in n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function() {
                            a.unqueued || s()
                        }), a.unqueued++, f.always((function() {
                            f.always((function() {
                                a.unqueued--, w.queue(e, "fx").length || a.empty.fire()
                            }))
                        }))), t)
                        if (i = t[r], ot.test(i)) {
                            if (delete t[r], o = o || "toggle" === i, i === (m ? "hide" : "show")) {
                                if ("show" !== i || !g || void 0 === g[r]) continue;
                                m = !0
                            }
                            p[r] = g && g[r] || w.style(e, r)
                        }
                    if ((l = !w.isEmptyObject(t)) || !w.isEmptyObject(p))
                        for (r in d && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (u = g && g.display) && (u = Y.get(e, "display")), "none" === (c = w.css(e, "display")) && (u ? c = u : (ue([e], !0), u = e.style.display || u, c = w.css(e, "display"), ue([e]))), ("inline" === c || "inline-block" === c && null != u) && "none" === w.css(e, "float") && (l || (f.done((function() {
                                h.display = u
                            })), null == u && (c = h.display, u = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", f.always((function() {
                                h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                            }))), l = !1, p) l || (g ? "hidden" in g && (m = g.hidden) : g = Y.access(e, "fxshow", {
                            display: u
                        }), o && (g.hidden = !m), m && ue([e], !0), f.done((function() {
                            for (r in m || ue([e]), Y.remove(e, "fxshow"), p) w.style(e, r, p[r])
                        }))), l = ct(m ? g[r] : 0, r, f), r in g || (g[r] = l.start, m && (l.end = l.start, l.start = 0))
                }],
                prefilter: function(e, t) {
                    t ? dt.prefilters.unshift(e) : dt.prefilters.push(e)
                }
            }), w.speed = function(e, t, n) {
                var r = e && "object" == typeof e ? w.extend({}, e) : {
                    complete: n || !n && t || h(e) && e,
                    duration: e,
                    easing: n && t || t && !h(t) && t
                };
                return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function() {
                    h(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue)
                }, r
            }, w.fn.extend({
                fadeTo: function(e, t, n, r) {
                    return this.filter(ae).css("opacity", 0).show().end().animate({
                        opacity: t
                    }, e, n, r)
                },
                animate: function(e, t, n, r) {
                    var i = w.isEmptyObject(e),
                        o = w.speed(t, n, r),
                        a = function() {
                            var t = dt(this, w.extend({}, e), o);
                            (i || Y.get(this, "finish")) && t.stop(!0)
                        };
                    return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
                },
                stop: function(e, t, n) {
                    var r = function(e) {
                        var t = e.stop;
                        delete e.stop, t(n)
                    };
                    return "string" != typeof e && (n = t, t = e, e = void 0), t && this.queue(e || "fx", []), this.each((function() {
                        var t = !0,
                            i = null != e && e + "queueHooks",
                            o = w.timers,
                            a = Y.get(this);
                        if (i) a[i] && a[i].stop && r(a[i]);
                        else
                            for (i in a) a[i] && a[i].stop && at.test(i) && r(a[i]);
                        for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
                        !t && n || w.dequeue(this, e)
                    }))
                },
                finish: function(e) {
                    return !1 !== e && (e = e || "fx"), this.each((function() {
                        var t, n = Y.get(this),
                            r = n[e + "queue"],
                            i = n[e + "queueHooks"],
                            o = w.timers,
                            a = r ? r.length : 0;
                        for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                        for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                        delete n.finish
                    }))
                }
            }), w.each(["toggle", "show", "hide"], (function(e, t) {
                var n = w.fn[t];
                w.fn[t] = function(e, r, i) {
                    return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i)
                }
            })), w.each({
                slideDown: ut("show"),
                slideUp: ut("hide"),
                slideToggle: ut("toggle"),
                fadeIn: {
                    opacity: "show"
                },
                fadeOut: {
                    opacity: "hide"
                },
                fadeToggle: {
                    opacity: "toggle"
                }
            }, (function(e, t) {
                w.fn[e] = function(e, n, r) {
                    return this.animate(t, e, n, r)
                }
            })), w.timers = [], w.fx.tick = function() {
                var e, t = 0,
                    n = w.timers;
                for (tt = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
                n.length || w.fx.stop(), tt = void 0
            }, w.fx.timer = function(e) {
                w.timers.push(e), w.fx.start()
            }, w.fx.interval = 13, w.fx.start = function() {
                nt || (nt = !0, st())
            }, w.fx.stop = function() {
                nt = null
            }, w.fx.speeds = {
                slow: 600,
                fast: 200,
                _default: 400
            }, w.fn.delay = function(t, n) {
                return t = w.fx && w.fx.speeds[t] || t, n = n || "fx", this.queue(n, (function(n, r) {
                    var i = e.setTimeout(n, t);
                    r.stop = function() {
                        e.clearTimeout(i)
                    }
                }))
            }, rt = g.createElement("input"), it = g.createElement("select").appendChild(g.createElement("option")), rt.type = "checkbox", p.checkOn = "" !== rt.value, p.optSelected = it.selected, (rt = g.createElement("input")).value = "t", rt.type = "radio", p.radioValue = "t" === rt.value;
            var ft, pt = w.expr.attrHandle;
            w.fn.extend({
                attr: function(e, t) {
                    return B(this, w.attr, e, t, 1 < arguments.length)
                },
                removeAttr: function(e) {
                    return this.each((function() {
                        w.removeAttr(this, e)
                    }))
                }
            }), w.extend({
                attr: function(e, t, n) {
                    var r, i, o = e.nodeType;
                    if (3 !== o && 8 !== o && 2 !== o) return void 0 === e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? ft : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r)
                },
                attrHooks: {
                    type: {
                        set: function(e, t) {
                            if (!p.radioValue && "radio" === t && S(e, "input")) {
                                var n = e.value;
                                return e.setAttribute("type", t), n && (e.value = n), t
                            }
                        }
                    }
                },
                removeAttr: function(e, t) {
                    var n, r = 0,
                        i = t && t.match(M);
                    if (i && 1 === e.nodeType)
                        for (; n = i[r++];) e.removeAttribute(n)
                }
            }), ft = {
                set: function(e, t, n) {
                    return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n
                }
            }, w.each(w.expr.match.bool.source.match(/\w+/g), (function(e, t) {
                var n = pt[t] || w.find.attr;
                pt[t] = function(e, t, r) {
                    var i, o, a = t.toLowerCase();
                    return r || (o = pt[a], pt[a] = i, i = null != n(e, t, r) ? a : null, pt[a] = o), i
                }
            }));
            var ht = /^(?:input|select|textarea|button)$/i,
                mt = /^(?:a|area)$/i;

            function gt(e) {
                return (e.match(M) || []).join(" ")
            }

            function vt(e) {
                return e.getAttribute && e.getAttribute("class") || ""
            }

            function yt(e) {
                return Array.isArray(e) ? e : "string" == typeof e && e.match(M) || []
            }
            w.fn.extend({
                prop: function(e, t) {
                    return B(this, w.prop, e, t, 1 < arguments.length)
                },
                removeProp: function(e) {
                    return this.each((function() {
                        delete this[w.propFix[e] || e]
                    }))
                }
            }), w.extend({
                prop: function(e, t, n) {
                    var r, i, o = e.nodeType;
                    if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
                },
                propHooks: {
                    tabIndex: {
                        get: function(e) {
                            var t = w.find.attr(e, "tabindex");
                            return t ? parseInt(t, 10) : ht.test(e.nodeName) || mt.test(e.nodeName) && e.href ? 0 : -1
                        }
                    }
                },
                propFix: {
                    for: "htmlFor",
                    class: "className"
                }
            }), p.optSelected || (w.propHooks.selected = {
                get: function(e) {
                    var t = e.parentNode;
                    return t && t.parentNode && t.parentNode.selectedIndex, null
                },
                set: function(e) {
                    var t = e.parentNode;
                    t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
                }
            }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], (function() {
                w.propFix[this.toLowerCase()] = this
            })), w.fn.extend({
                addClass: function(e) {
                    var t, n, r, i, o, a, s, l = 0;
                    if (h(e)) return this.each((function(t) {
                        w(this).addClass(e.call(this, t, vt(this)))
                    }));
                    if ((t = yt(e)).length)
                        for (; n = this[l++];)
                            if (i = vt(n), r = 1 === n.nodeType && " " + gt(i) + " ") {
                                for (a = 0; o = t[a++];) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                                i !== (s = gt(r)) && n.setAttribute("class", s)
                            }
                    return this
                },
                removeClass: function(e) {
                    var t, n, r, i, o, a, s, l = 0;
                    if (h(e)) return this.each((function(t) {
                        w(this).removeClass(e.call(this, t, vt(this)))
                    }));
                    if (!arguments.length) return this.attr("class", "");
                    if ((t = yt(e)).length)
                        for (; n = this[l++];)
                            if (i = vt(n), r = 1 === n.nodeType && " " + gt(i) + " ") {
                                for (a = 0; o = t[a++];)
                                    for (; - 1 < r.indexOf(" " + o + " ");) r = r.replace(" " + o + " ", " ");
                                i !== (s = gt(r)) && n.setAttribute("class", s)
                            }
                    return this
                },
                toggleClass: function(e, t) {
                    var n = typeof e,
                        r = "string" === n || Array.isArray(e);
                    return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : h(e) ? this.each((function(n) {
                        w(this).toggleClass(e.call(this, n, vt(this), t), t)
                    })) : this.each((function() {
                        var t, i, o, a;
                        if (r)
                            for (i = 0, o = w(this), a = yt(e); t = a[i++];) o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
                        else void 0 !== e && "boolean" !== n || ((t = vt(this)) && Y.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : Y.get(this, "__className__") || ""))
                    }))
                },
                hasClass: function(e) {
                    var t, n, r = 0;
                    for (t = " " + e + " "; n = this[r++];)
                        if (1 === n.nodeType && -1 < (" " + gt(vt(n)) + " ").indexOf(t)) return !0;
                    return !1
                }
            });
            var bt = /\r/g;
            w.fn.extend({
                val: function(e) {
                    var t, n, r, i = this[0];
                    return arguments.length ? (r = h(e), this.each((function(n) {
                        var i;
                        1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, (function(e) {
                            return null == e ? "" : e + ""
                        }))), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
                    }))) : i ? (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof(n = i.value) ? n.replace(bt, "") : null == n ? "" : n : void 0
                }
            }), w.extend({
                valHooks: {
                    option: {
                        get: function(e) {
                            var t = w.find.attr(e, "value");
                            return null != t ? t : gt(w.text(e))
                        }
                    },
                    select: {
                        get: function(e) {
                            var t, n, r, i = e.options,
                                o = e.selectedIndex,
                                a = "select-one" === e.type,
                                s = a ? null : [],
                                l = a ? o + 1 : i.length;
                            for (r = o < 0 ? l : a ? o : 0; r < l; r++)
                                if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !S(n.parentNode, "optgroup"))) {
                                    if (t = w(n).val(), a) return t;
                                    s.push(t)
                                }
                            return s
                        },
                        set: function(e, t) {
                            for (var n, r, i = e.options, o = w.makeArray(t), a = i.length; a--;)((r = i[a]).selected = -1 < w.inArray(w.valHooks.option.get(r), o)) && (n = !0);
                            return n || (e.selectedIndex = -1), o
                        }
                    }
                }
            }), w.each(["radio", "checkbox"], (function() {
                w.valHooks[this] = {
                    set: function(e, t) {
                        if (Array.isArray(t)) return e.checked = -1 < w.inArray(w(e).val(), t)
                    }
                }, p.checkOn || (w.valHooks[this].get = function(e) {
                    return null === e.getAttribute("value") ? "on" : e.value
                })
            })), p.focusin = "onfocusin" in e;
            var xt = /^(?:focusinfocus|focusoutblur)$/,
                wt = function(e) {
                    e.stopPropagation()
                };
            w.extend(w.event, {
                trigger: function(t, n, r, i) {
                    var o, a, s, l, u, d, f, p, v = [r || g],
                        y = c.call(t, "type") ? t.type : t,
                        b = c.call(t, "namespace") ? t.namespace.split(".") : [];
                    if (a = p = s = r = r || g, 3 !== r.nodeType && 8 !== r.nodeType && !xt.test(y + w.event.triggered) && (-1 < y.indexOf(".") && (y = (b = y.split(".")).shift(), b.sort()), u = y.indexOf(":") < 0 && "on" + y, (t = t[w.expando] ? t : new w.Event(y, "object" == typeof t && t)).isTrigger = i ? 2 : 3, t.namespace = b.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + b.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = r), n = null == n ? [t] : w.makeArray(n, [t]), f = w.event.special[y] || {}, i || !f.trigger || !1 !== f.trigger.apply(r, n))) {
                        if (!i && !f.noBubble && !m(r)) {
                            for (l = f.delegateType || y, xt.test(l + y) || (a = a.parentNode); a; a = a.parentNode) v.push(a), s = a;
                            s === (r.ownerDocument || g) && v.push(s.defaultView || s.parentWindow || e)
                        }
                        for (o = 0;
                            (a = v[o++]) && !t.isPropagationStopped();) p = a, t.type = 1 < o ? l : f.bindType || y, (d = (Y.get(a, "events") || Object.create(null))[t.type] && Y.get(a, "handle")) && d.apply(a, n), (d = u && a[u]) && d.apply && V(a) && (t.result = d.apply(a, n), !1 === t.result && t.preventDefault());
                        return t.type = y, i || t.isDefaultPrevented() || f._default && !1 !== f._default.apply(v.pop(), n) || !V(r) || u && h(r[y]) && !m(r) && ((s = r[u]) && (r[u] = null), w.event.triggered = y, t.isPropagationStopped() && p.addEventListener(y, wt), r[y](), t.isPropagationStopped() && p.removeEventListener(y, wt), w.event.triggered = void 0, s && (r[u] = s)), t.result
                    }
                },
                simulate: function(e, t, n) {
                    var r = w.extend(new w.Event, n, {
                        type: e,
                        isSimulated: !0
                    });
                    w.event.trigger(r, null, t)
                }
            }), w.fn.extend({
                trigger: function(e, t) {
                    return this.each((function() {
                        w.event.trigger(e, t, this)
                    }))
                },
                triggerHandler: function(e, t) {
                    var n = this[0];
                    if (n) return w.event.trigger(e, t, n, !0)
                }
            }), p.focusin || w.each({
                focus: "focusin",
                blur: "focusout"
            }, (function(e, t) {
                var n = function(e) {
                    w.event.simulate(t, e.target, w.event.fix(e))
                };
                w.event.special[t] = {
                    setup: function() {
                        var r = this.ownerDocument || this.document || this,
                            i = Y.access(r, t);
                        i || r.addEventListener(e, n, !0), Y.access(r, t, (i || 0) + 1)
                    },
                    teardown: function() {
                        var r = this.ownerDocument || this.document || this,
                            i = Y.access(r, t) - 1;
                        i ? Y.access(r, t, i) : (r.removeEventListener(e, n, !0), Y.remove(r, t))
                    }
                }
            }));
            var Ct = e.location,
                Tt = {
                    guid: Date.now()
                },
                kt = /\?/;
            w.parseXML = function(t) {
                var n;
                if (!t || "string" != typeof t) return null;
                try {
                    n = (new e.DOMParser).parseFromString(t, "text/xml")
                } catch (t) {
                    n = void 0
                }
                return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n
            };
            var Et = /\[\]$/,
                At = /\r?\n/g,
                St = /^(?:submit|button|image|reset|file)$/i,
                Nt = /^(?:input|select|textarea|keygen)/i;

            function Dt(e, t, n, r) {
                var i;
                if (Array.isArray(t)) w.each(t, (function(t, i) {
                    n || Et.test(e) ? r(e, i) : Dt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r)
                }));
                else if (n || "object" !== b(t)) r(e, t);
                else
                    for (i in t) Dt(e + "[" + i + "]", t[i], n, r)
            }
            w.param = function(e, t) {
                var n, r = [],
                    i = function(e, t) {
                        var n = h(t) ? t() : t;
                        r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
                    };
                if (null == e) return "";
                if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, (function() {
                    i(this.name, this.value)
                }));
                else
                    for (n in e) Dt(n, e[n], t, i);
                return r.join("&")
            }, w.fn.extend({
                serialize: function() {
                    return w.param(this.serializeArray())
                },
                serializeArray: function() {
                    return this.map((function() {
                        var e = w.prop(this, "elements");
                        return e ? w.makeArray(e) : this
                    })).filter((function() {
                        var e = this.type;
                        return this.name && !w(this).is(":disabled") && Nt.test(this.nodeName) && !St.test(e) && (this.checked || !fe.test(e))
                    })).map((function(e, t) {
                        var n = w(this).val();
                        return null == n ? null : Array.isArray(n) ? w.map(n, (function(e) {
                            return {
                                name: t.name,
                                value: e.replace(At, "\r\n")
                            }
                        })) : {
                            name: t.name,
                            value: n.replace(At, "\r\n")
                        }
                    })).get()
                }
            });
            var jt = /%20/g,
                $t = /#.*$/,
                Lt = /([?&])_=[^&]*/,
                qt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
                Ht = /^(?:GET|HEAD)$/,
                Mt = /^\/\//,
                Ot = {},
                Pt = {},
                Rt = "*/".concat("*"),
                zt = g.createElement("a");

            function It(e) {
                return function(t, n) {
                    "string" != typeof t && (n = t, t = "*");
                    var r, i = 0,
                        o = t.toLowerCase().match(M) || [];
                    if (h(n))
                        for (; r = o[i++];) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
                }
            }

            function Wt(e, t, n, r) {
                var i = {},
                    o = e === Pt;

                function a(s) {
                    var l;
                    return i[s] = !0, w.each(e[s] || [], (function(e, s) {
                        var u = s(t, n, r);
                        return "string" != typeof u || o || i[u] ? o ? !(l = u) : void 0 : (t.dataTypes.unshift(u), a(u), !1)
                    })), l
                }
                return a(t.dataTypes[0]) || !i["*"] && a("*")
            }

            function Bt(e, t) {
                var n, r, i = w.ajaxSettings.flatOptions || {};
                for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
                return r && w.extend(!0, e, r), e
            }
            zt.href = Ct.href, w.extend({
                active: 0,
                lastModified: {},
                etag: {},
                ajaxSettings: {
                    url: Ct.href,
                    type: "GET",
                    isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Ct.protocol),
                    global: !0,
                    processData: !0,
                    async: !0,
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    accepts: {
                        "*": Rt,
                        text: "text/plain",
                        html: "text/html",
                        xml: "application/xml, text/xml",
                        json: "application/json, text/javascript"
                    },
                    contents: {
                        xml: /\bxml\b/,
                        html: /\bhtml/,
                        json: /\bjson\b/
                    },
                    responseFields: {
                        xml: "responseXML",
                        text: "responseText",
                        json: "responseJSON"
                    },
                    converters: {
                        "* text": String,
                        "text html": !0,
                        "text json": JSON.parse,
                        "text xml": w.parseXML
                    },
                    flatOptions: {
                        url: !0,
                        context: !0
                    }
                },
                ajaxSetup: function(e, t) {
                    return t ? Bt(Bt(e, w.ajaxSettings), t) : Bt(w.ajaxSettings, e)
                },
                ajaxPrefilter: It(Ot),
                ajaxTransport: It(Pt),
                ajax: function(t, n) {
                    "object" == typeof t && (n = t, t = void 0), n = n || {};
                    var r, i, o, a, s, l, u, c, d, f, p = w.ajaxSetup({}, n),
                        h = p.context || p,
                        m = p.context && (h.nodeType || h.jquery) ? w(h) : w.event,
                        v = w.Deferred(),
                        y = w.Callbacks("once memory"),
                        b = p.statusCode || {},
                        x = {},
                        C = {},
                        T = "canceled",
                        k = {
                            readyState: 0,
                            getResponseHeader: function(e) {
                                var t;
                                if (u) {
                                    if (!a)
                                        for (a = {}; t = qt.exec(o);) a[t[1].toLowerCase() + " "] = (a[t[1].toLowerCase() + " "] || []).concat(t[2]);
                                    t = a[e.toLowerCase() + " "]
                                }
                                return null == t ? null : t.join(", ")
                            },
                            getAllResponseHeaders: function() {
                                return u ? o : null
                            },
                            setRequestHeader: function(e, t) {
                                return null == u && (e = C[e.toLowerCase()] = C[e.toLowerCase()] || e, x[e] = t), this
                            },
                            overrideMimeType: function(e) {
                                return null == u && (p.mimeType = e), this
                            },
                            statusCode: function(e) {
                                var t;
                                if (e)
                                    if (u) k.always(e[k.status]);
                                    else
                                        for (t in e) b[t] = [b[t], e[t]];
                                return this
                            },
                            abort: function(e) {
                                var t = e || T;
                                return r && r.abort(t), E(0, t), this
                            }
                        };
                    if (v.promise(k), p.url = ((t || p.url || Ct.href) + "").replace(Mt, Ct.protocol + "//"), p.type = n.method || n.type || p.method || p.type, p.dataTypes = (p.dataType || "*").toLowerCase().match(M) || [""], null == p.crossDomain) {
                        l = g.createElement("a");
                        try {
                            l.href = p.url, l.href = l.href, p.crossDomain = zt.protocol + "//" + zt.host != l.protocol + "//" + l.host
                        } catch (t) {
                            p.crossDomain = !0
                        }
                    }
                    if (p.data && p.processData && "string" != typeof p.data && (p.data = w.param(p.data, p.traditional)), Wt(Ot, p, n, k), u) return k;
                    for (d in (c = w.event && p.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), p.type = p.type.toUpperCase(), p.hasContent = !Ht.test(p.type), i = p.url.replace($t, ""), p.hasContent ? p.data && p.processData && 0 === (p.contentType || "").indexOf("application/x-www-form-urlencoded") && (p.data = p.data.replace(jt, "+")) : (f = p.url.slice(i.length), p.data && (p.processData || "string" == typeof p.data) && (i += (kt.test(i) ? "&" : "?") + p.data, delete p.data), !1 === p.cache && (i = i.replace(Lt, "$1"), f = (kt.test(i) ? "&" : "?") + "_=" + Tt.guid++ + f), p.url = i + f), p.ifModified && (w.lastModified[i] && k.setRequestHeader("If-Modified-Since", w.lastModified[i]), w.etag[i] && k.setRequestHeader("If-None-Match", w.etag[i])), (p.data && p.hasContent && !1 !== p.contentType || n.contentType) && k.setRequestHeader("Content-Type", p.contentType), k.setRequestHeader("Accept", p.dataTypes[0] && p.accepts[p.dataTypes[0]] ? p.accepts[p.dataTypes[0]] + ("*" !== p.dataTypes[0] ? ", " + Rt + "; q=0.01" : "") : p.accepts["*"]), p.headers) k.setRequestHeader(d, p.headers[d]);
                    if (p.beforeSend && (!1 === p.beforeSend.call(h, k, p) || u)) return k.abort();
                    if (T = "abort", y.add(p.complete), k.done(p.success), k.fail(p.error), r = Wt(Pt, p, n, k)) {
                        if (k.readyState = 1, c && m.trigger("ajaxSend", [k, p]), u) return k;
                        p.async && 0 < p.timeout && (s = e.setTimeout((function() {
                            k.abort("timeout")
                        }), p.timeout));
                        try {
                            u = !1, r.send(x, E)
                        } catch (t) {
                            if (u) throw t;
                            E(-1, t)
                        }
                    } else E(-1, "No Transport");

                    function E(t, n, a, l) {
                        var d, f, g, x, C, T = n;
                        u || (u = !0, s && e.clearTimeout(s), r = void 0, o = l || "", k.readyState = 0 < t ? 4 : 0, d = 200 <= t && t < 300 || 304 === t, a && (x = function(e, t, n) {
                            for (var r, i, o, a, s = e.contents, l = e.dataTypes;
                                "*" === l[0];) l.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                            if (r)
                                for (i in s)
                                    if (s[i] && s[i].test(r)) {
                                        l.unshift(i);
                                        break
                                    }
                            if (l[0] in n) o = l[0];
                            else {
                                for (i in n) {
                                    if (!l[0] || e.converters[i + " " + l[0]]) {
                                        o = i;
                                        break
                                    }
                                    a || (a = i)
                                }
                                o = o || a
                            }
                            if (o) return o !== l[0] && l.unshift(o), n[o]
                        }(p, k, a)), !d && -1 < w.inArray("script", p.dataTypes) && (p.converters["text script"] = function() {}), x = function(e, t, n, r) {
                            var i, o, a, s, l, u = {},
                                c = e.dataTypes.slice();
                            if (c[1])
                                for (a in e.converters) u[a.toLowerCase()] = e.converters[a];
                            for (o = c.shift(); o;)
                                if (e.responseFields[o] && (n[e.responseFields[o]] = t), !l && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = o, o = c.shift())
                                    if ("*" === o) o = l;
                                    else if ("*" !== l && l !== o) {
                                if (!(a = u[l + " " + o] || u["* " + o]))
                                    for (i in u)
                                        if ((s = i.split(" "))[1] === o && (a = u[l + " " + s[0]] || u["* " + s[0]])) {
                                            !0 === a ? a = u[i] : !0 !== u[i] && (o = s[0], c.unshift(s[1]));
                                            break
                                        }
                                if (!0 !== a)
                                    if (a && e.throws) t = a(t);
                                    else try {
                                        t = a(t)
                                    } catch (e) {
                                        return {
                                            state: "parsererror",
                                            error: a ? e : "No conversion from " + l + " to " + o
                                        }
                                    }
                            }
                            return {
                                state: "success",
                                data: t
                            }
                        }(p, x, k, d), d ? (p.ifModified && ((C = k.getResponseHeader("Last-Modified")) && (w.lastModified[i] = C), (C = k.getResponseHeader("etag")) && (w.etag[i] = C)), 204 === t || "HEAD" === p.type ? T = "nocontent" : 304 === t ? T = "notmodified" : (T = x.state, f = x.data, d = !(g = x.error))) : (g = T, !t && T || (T = "error", t < 0 && (t = 0))), k.status = t, k.statusText = (n || T) + "", d ? v.resolveWith(h, [f, T, k]) : v.rejectWith(h, [k, T, g]), k.statusCode(b), b = void 0, c && m.trigger(d ? "ajaxSuccess" : "ajaxError", [k, p, d ? f : g]), y.fireWith(h, [k, T]), c && (m.trigger("ajaxComplete", [k, p]), --w.active || w.event.trigger("ajaxStop")))
                    }
                    return k
                },
                getJSON: function(e, t, n) {
                    return w.get(e, t, n, "json")
                },
                getScript: function(e, t) {
                    return w.get(e, void 0, t, "script")
                }
            }), w.each(["get", "post"], (function(e, t) {
                w[t] = function(e, n, r, i) {
                    return h(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({
                        url: e,
                        type: t,
                        dataType: i,
                        data: n,
                        success: r
                    }, w.isPlainObject(e) && e))
                }
            })), w.ajaxPrefilter((function(e) {
                var t;
                for (t in e.headers) "content-type" === t.toLowerCase() && (e.contentType = e.headers[t] || "")
            })), w._evalUrl = function(e, t, n) {
                return w.ajax({
                    url: e,
                    type: "GET",
                    dataType: "script",
                    cache: !0,
                    async: !1,
                    global: !1,
                    converters: {
                        "text script": function() {}
                    },
                    dataFilter: function(e) {
                        w.globalEval(e, t, n)
                    }
                })
            }, w.fn.extend({
                wrapAll: function(e) {
                    var t;
                    return this[0] && (h(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map((function() {
                        for (var e = this; e.firstElementChild;) e = e.firstElementChild;
                        return e
                    })).append(this)), this
                },
                wrapInner: function(e) {
                    return h(e) ? this.each((function(t) {
                        w(this).wrapInner(e.call(this, t))
                    })) : this.each((function() {
                        var t = w(this),
                            n = t.contents();
                        n.length ? n.wrapAll(e) : t.append(e)
                    }))
                },
                wrap: function(e) {
                    var t = h(e);
                    return this.each((function(n) {
                        w(this).wrapAll(t ? e.call(this, n) : e)
                    }))
                },
                unwrap: function(e) {
                    return this.parent(e).not("body").each((function() {
                        w(this).replaceWith(this.childNodes)
                    })), this
                }
            }), w.expr.pseudos.hidden = function(e) {
                return !w.expr.pseudos.visible(e)
            }, w.expr.pseudos.visible = function(e) {
                return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
            }, w.ajaxSettings.xhr = function() {
                try {
                    return new e.XMLHttpRequest
                } catch (e) {}
            };
            var Ft = {
                    0: 200,
                    1223: 204
                },
                _t = w.ajaxSettings.xhr();
            p.cors = !!_t && "withCredentials" in _t, p.ajax = _t = !!_t, w.ajaxTransport((function(t) {
                var n, r;
                if (p.cors || _t && !t.crossDomain) return {
                    send: function(i, o) {
                        var a, s = t.xhr();
                        if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
                            for (a in t.xhrFields) s[a] = t.xhrFields[a];
                        for (a in t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest"), i) s.setRequestHeader(a, i[a]);
                        n = function(e) {
                            return function() {
                                n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Ft[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {
                                    binary: s.response
                                } : {
                                    text: s.responseText
                                }, s.getAllResponseHeaders()))
                            }
                        }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function() {
                            4 === s.readyState && e.setTimeout((function() {
                                n && r()
                            }))
                        }, n = n("abort");
                        try {
                            s.send(t.hasContent && t.data || null)
                        } catch (i) {
                            if (n) throw i
                        }
                    },
                    abort: function() {
                        n && n()
                    }
                }
            })), w.ajaxPrefilter((function(e) {
                e.crossDomain && (e.contents.script = !1)
            })), w.ajaxSetup({
                accepts: {
                    script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
                },
                contents: {
                    script: /\b(?:java|ecma)script\b/
                },
                converters: {
                    "text script": function(e) {
                        return w.globalEval(e), e
                    }
                }
            }), w.ajaxPrefilter("script", (function(e) {
                void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
            })), w.ajaxTransport("script", (function(e) {
                var t, n;
                if (e.crossDomain || e.scriptAttrs) return {
                    send: function(r, i) {
                        t = w("<script>").attr(e.scriptAttrs || {}).prop({
                            charset: e.scriptCharset,
                            src: e.url
                        }).on("load error", n = function(e) {
                            t.remove(), n = null, e && i("error" === e.type ? 404 : 200, e.type)
                        }), g.head.appendChild(t[0])
                    },
                    abort: function() {
                        n && n()
                    }
                }
            }));
            var Ut, Xt = [],
                Vt = /(=)\?(?=&|$)|\?\?/;
            w.ajaxSetup({
                jsonp: "callback",
                jsonpCallback: function() {
                    var e = Xt.pop() || w.expando + "_" + Tt.guid++;
                    return this[e] = !0, e
                }
            }), w.ajaxPrefilter("json jsonp", (function(t, n, r) {
                var i, o, a, s = !1 !== t.jsonp && (Vt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Vt.test(t.data) && "data");
                if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = h(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Vt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function() {
                    return a || w.error(i + " was not called"), a[0]
                }, t.dataTypes[0] = "json", o = e[i], e[i] = function() {
                    a = arguments
                }, r.always((function() {
                    void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Xt.push(i)), a && h(o) && o(a[0]), a = o = void 0
                })), "script"
            })), p.createHTMLDocument = ((Ut = g.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Ut.childNodes.length), w.parseHTML = function(e, t, n) {
                return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (p.createHTMLDocument ? ((r = (t = g.implementation.createHTMLDocument("")).createElement("base")).href = g.location.href, t.head.appendChild(r)) : t = g), o = !n && [], (i = N.exec(e)) ? [t.createElement(i[1])] : (i = be([e], t, o), o && o.length && w(o).remove(), w.merge([], i.childNodes)));
                var r, i, o
            }, w.fn.load = function(e, t, n) {
                var r, i, o, a = this,
                    s = e.indexOf(" ");
                return -1 < s && (r = gt(e.slice(s)), e = e.slice(0, s)), h(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), 0 < a.length && w.ajax({
                    url: e,
                    type: i || "GET",
                    dataType: "html",
                    data: t
                }).done((function(e) {
                    o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e)
                })).always(n && function(e, t) {
                    a.each((function() {
                        n.apply(this, o || [e.responseText, t, e])
                    }))
                }), this
            }, w.expr.pseudos.animated = function(e) {
                return w.grep(w.timers, (function(t) {
                    return e === t.elem
                })).length
            }, w.offset = {
                setOffset: function(e, t, n) {
                    var r, i, o, a, s, l, u = w.css(e, "position"),
                        c = w(e),
                        d = {};
                    "static" === u && (e.style.position = "relative"), s = c.offset(), o = w.css(e, "top"), l = w.css(e, "left"), ("absolute" === u || "fixed" === u) && -1 < (o + l).indexOf("auto") ? (a = (r = c.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(l) || 0), h(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (d.top = t.top - s.top + a), null != t.left && (d.left = t.left - s.left + i), "using" in t ? t.using.call(e, d) : ("number" == typeof d.top && (d.top += "px"), "number" == typeof d.left && (d.left += "px"), c.css(d))
                }
            }, w.fn.extend({
                offset: function(e) {
                    if (arguments.length) return void 0 === e ? this : this.each((function(t) {
                        w.offset.setOffset(this, e, t)
                    }));
                    var t, n, r = this[0];
                    return r ? r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
                        top: t.top + n.pageYOffset,
                        left: t.left + n.pageXOffset
                    }) : {
                        top: 0,
                        left: 0
                    } : void 0
                },
                position: function() {
                    if (this[0]) {
                        var e, t, n, r = this[0],
                            i = {
                                top: 0,
                                left: 0
                            };
                        if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect();
                        else {
                            for (t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement; e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position");) e = e.parentNode;
                            e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0))
                        }
                        return {
                            top: t.top - i.top - w.css(r, "marginTop", !0),
                            left: t.left - i.left - w.css(r, "marginLeft", !0)
                        }
                    }
                },
                offsetParent: function() {
                    return this.map((function() {
                        for (var e = this.offsetParent; e && "static" === w.css(e, "position");) e = e.offsetParent;
                        return e || re
                    }))
                }
            }), w.each({
                scrollLeft: "pageXOffset",
                scrollTop: "pageYOffset"
            }, (function(e, t) {
                var n = "pageYOffset" === t;
                w.fn[e] = function(r) {
                    return B(this, (function(e, r, i) {
                        var o;
                        if (m(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
                        o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
                    }), e, r, arguments.length)
                }
            })), w.each(["top", "left"], (function(e, t) {
                w.cssHooks[t] = Be(p.pixelPosition, (function(e, n) {
                    if (n) return n = We(e, t), Pe.test(n) ? w(e).position()[t] + "px" : n
                }))
            })), w.each({
                Height: "height",
                Width: "width"
            }, (function(e, t) {
                w.each({
                    padding: "inner" + e,
                    content: t,
                    "": "outer" + e
                }, (function(n, r) {
                    w.fn[r] = function(i, o) {
                        var a = arguments.length && (n || "boolean" != typeof i),
                            s = n || (!0 === i || !0 === o ? "margin" : "border");
                        return B(this, (function(t, n, i) {
                            var o;
                            return m(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s)
                        }), t, a ? i : void 0, a)
                    }
                }))
            })), w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], (function(e, t) {
                w.fn[t] = function(e) {
                    return this.on(t, e)
                }
            })), w.fn.extend({
                bind: function(e, t, n) {
                    return this.on(e, null, t, n)
                },
                unbind: function(e, t) {
                    return this.off(e, null, t)
                },
                delegate: function(e, t, n, r) {
                    return this.on(t, e, n, r)
                },
                undelegate: function(e, t, n) {
                    return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
                },
                hover: function(e, t) {
                    return this.mouseenter(e).mouseleave(t || e)
                }
            }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), (function(e, t) {
                w.fn[t] = function(e, n) {
                    return 0 < arguments.length ? this.on(t, null, e, n) : this.trigger(t)
                }
            }));
            var Gt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            w.proxy = function(e, t) {
                var n, r, o;
                if ("string" == typeof t && (n = e[t], t = e, e = n), h(e)) return r = i.call(arguments, 2), (o = function() {
                    return e.apply(t || this, r.concat(i.call(arguments)))
                }).guid = e.guid = e.guid || w.guid++, o
            }, w.holdReady = function(e) {
                e ? w.readyWait++ : w.ready(!0)
            }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = S, w.isFunction = h, w.isWindow = m, w.camelCase = X, w.type = b, w.now = Date.now, w.isNumeric = function(e) {
                var t = w.type(e);
                return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
            }, w.trim = function(e) {
                return null == e ? "" : (e + "").replace(Gt, "")
            }, "function" == typeof define && define.amd && define("jquery", [], (function() {
                return w
            }));
            var Yt = e.jQuery,
                Qt = e.$;
            return w.noConflict = function(t) {
                return e.$ === w && (e.$ = Qt), t && e.jQuery === w && (e.jQuery = Yt), w
            }, void 0 === t && (e.jQuery = e.$ = w), w
        })),
        function(e, t) {
            var n = function(e, t) {
                "use strict";
                if (t.getElementsByClassName) {
                    var n, r, i = t.documentElement,
                        o = e.Date,
                        a = e.HTMLPictureElement,
                        s = "addEventListener",
                        l = "getAttribute",
                        u = e[s],
                        c = e.setTimeout,
                        d = e.requestAnimationFrame || c,
                        f = e.requestIdleCallback,
                        p = /^picture$/i,
                        h = ["load", "error", "lazyincluded", "_lazyloaded"],
                        m = {},
                        g = Array.prototype.forEach,
                        v = function(e, t) {
                            return m[t] || (m[t] = new RegExp("(\\s|^)" + t + "(\\s|$)")), m[t].test(e[l]("class") || "") && m[t]
                        },
                        y = function(e, t) {
                            v(e, t) || e.setAttribute("class", (e[l]("class") || "").trim() + " " + t)
                        },
                        b = function(e, t) {
                            var n;
                            (n = v(e, t)) && e.setAttribute("class", (e[l]("class") || "").replace(n, " "))
                        },
                        x = function(e, t, n) {
                            var r = n ? s : "removeEventListener";
                            n && x(e, t), h.forEach((function(n) {
                                e[r](n, t)
                            }))
                        },
                        w = function(e, r, i, o, a) {
                            var s = t.createEvent("Event");
                            return i || (i = {}), i.instance = n, s.initEvent(r, !o, !a), s.detail = i, e.dispatchEvent(s), s
                        },
                        C = function(t, n) {
                            var i;
                            !a && (i = e.picturefill || r.pf) ? (n && n.src && !t[l]("srcset") && t.setAttribute("srcset", n.src), i({
                                reevaluate: !0,
                                elements: [t]
                            })) : n && n.src && (t.src = n.src)
                        },
                        T = function(e, t) {
                            return (getComputedStyle(e, null) || {})[t]
                        },
                        k = function(e, t, n) {
                            for (n = n || e.offsetWidth; n < r.minSize && t && !e._lazysizesWidth;) n = t.offsetWidth, t = t.parentNode;
                            return n
                        },
                        E = function() {
                            var e, n, r = [],
                                i = [],
                                o = r,
                                a = function() {
                                    var t = o;
                                    for (o = r.length ? i : r, e = !0, n = !1; t.length;) t.shift()();
                                    e = !1
                                },
                                s = function(r, i) {
                                    e && !i ? r.apply(this, arguments) : (o.push(r), n || (n = !0, (t.hidden ? c : d)(a)))
                                };
                            return s._lsFlush = a, s
                        }(),
                        A = function(e, t) {
                            return t ? function() {
                                E(e)
                            } : function() {
                                var t = this,
                                    n = arguments;
                                E((function() {
                                    e.apply(t, n)
                                }))
                            }
                        },
                        S = function(e) {
                            var t, n = 0,
                                i = r.throttleDelay,
                                a = r.ricTimeout,
                                s = function() {
                                    t = !1, n = o.now(), e()
                                },
                                l = f && a > 49 ? function() {
                                    f(s, {
                                        timeout: a
                                    }), a !== r.ricTimeout && (a = r.ricTimeout)
                                } : A((function() {
                                    c(s)
                                }), !0);
                            return function(e) {
                                var r;
                                (e = !0 === e) && (a = 33), t || (t = !0, (r = i - (o.now() - n)) < 0 && (r = 0), e || r < 9 ? l() : c(l, r))
                            }
                        },
                        N = function(e) {
                            var t, n, r = 99,
                                i = function() {
                                    t = null, e()
                                },
                                a = function() {
                                    var e = o.now() - n;
                                    e < r ? c(a, r - e) : (f || i)(i)
                                };
                            return function() {
                                n = o.now(), t || (t = c(a, r))
                            }
                        };
                    ! function() {
                        var t, n = {
                            lazyClass: "lazyload",
                            loadedClass: "lazyloaded",
                            loadingClass: "lazyloading",
                            preloadClass: "lazypreload",
                            errorClass: "lazyerror",
                            autosizesClass: "lazyautosizes",
                            srcAttr: "data-src",
                            srcsetAttr: "data-srcset",
                            sizesAttr: "data-sizes",
                            minSize: 40,
                            customMedia: {},
                            init: !0,
                            expFactor: 1.5,
                            hFac: .8,
                            loadMode: 2,
                            loadHidden: !0,
                            ricTimeout: 0,
                            throttleDelay: 125
                        };
                        for (t in r = e.lazySizesConfig || e.lazysizesConfig || {}, n) t in r || (r[t] = n[t]);
                        e.lazySizesConfig = r, c((function() {
                            r.init && $()
                        }))
                    }();
                    var D = function() {
                            var a, d, f, h, m, k, D, $, L, q, H, M, O = /^img$/i,
                                P = /^iframe$/i,
                                R = "onscroll" in e && !/(gle|ing)bot/.test(navigator.userAgent),
                                z = 0,
                                I = 0,
                                W = 0,
                                B = -1,
                                F = function(e) {
                                    W--, e && e.target && x(e.target, F), (!e || W < 0 || !e.target) && (W = 0)
                                },
                                _ = function(e) {
                                    return null == M && (M = "hidden" == T(t.body, "visibility")), M || "hidden" != T(e.parentNode, "visibility") && "hidden" != T(e, "visibility")
                                },
                                U = function(e, n) {
                                    var r, o = e,
                                        a = _(e);
                                    for ($ -= n, H += n, L -= n, q += n; a && (o = o.offsetParent) && o != t.body && o != i;)(a = (T(o, "opacity") || 1) > 0) && "visible" != T(o, "overflow") && (r = o.getBoundingClientRect(), a = q > r.left && L < r.right && H > r.top - 1 && $ < r.bottom + 1);
                                    return a
                                },
                                X = function() {
                                    var e, o, s, u, c, f, p, m, g, v, y, b, x = n.elements;
                                    if ((h = r.loadMode) && W < 8 && (e = x.length)) {
                                        for (o = 0, B++, y = (v = !r.expand || r.expand < 1 ? i.clientHeight > 500 && i.clientWidth > 500 ? 500 : 370 : r.expand) * r.expFactor, b = r.hFac, M = null, I < y && W < 1 && B > 2 && h > 2 && !t.hidden ? (I = y, B = 0) : I = h > 1 && B > 1 && W < 6 ? v : z; o < e; o++)
                                            if (x[o] && !x[o]._lazyRace)
                                                if (R)
                                                    if ((m = x[o][l]("data-expand")) && (f = 1 * m) || (f = I), g !== f && (k = innerWidth + f * b, D = innerHeight + f, p = -1 * f, g = f), s = x[o].getBoundingClientRect(), (H = s.bottom) >= p && ($ = s.top) <= D && (q = s.right) >= p * b && (L = s.left) <= k && (H || q || L || $) && (r.loadHidden || _(x[o])) && (d && W < 3 && !m && (h < 3 || B < 4) || U(x[o], f))) {
                                                        if (ee(x[o]), c = !0, W > 9) break
                                                    } else !c && d && !u && W < 4 && B < 4 && h > 2 && (a[0] || r.preloadAfterLoad) && (a[0] || !m && (H || q || L || $ || "auto" != x[o][l](r.sizesAttr))) && (u = a[0] || x[o]);
                                        else ee(x[o]);
                                        u && !c && ee(u)
                                    }
                                },
                                V = S(X),
                                G = function(e) {
                                    y(e.target, r.loadedClass), b(e.target, r.loadingClass), x(e.target, Q), w(e.target, "lazyloaded")
                                },
                                Y = A(G),
                                Q = function(e) {
                                    Y({
                                        target: e.target
                                    })
                                },
                                J = function(e, t) {
                                    try {
                                        e.contentWindow.location.replace(t)
                                    } catch (n) {
                                        e.src = t
                                    }
                                },
                                K = function(e) {
                                    var t, n = e[l](r.srcsetAttr);
                                    (t = r.customMedia[e[l]("data-media") || e[l]("media")]) && e.setAttribute("media", t), n && e.setAttribute("srcset", n)
                                },
                                Z = A((function(e, t, n, i, o) {
                                    var a, s, u, d, h, m;
                                    (h = w(e, "lazybeforeunveil", t)).defaultPrevented || (i && (n ? y(e, r.autosizesClass) : e.setAttribute("sizes", i)), s = e[l](r.srcsetAttr), a = e[l](r.srcAttr), o && (d = (u = e.parentNode) && p.test(u.nodeName || "")), m = t.firesLoad || "src" in e && (s || a || d), h = {
                                        target: e
                                    }, m && (x(e, F, !0), clearTimeout(f), f = c(F, 2500), y(e, r.loadingClass), x(e, Q, !0)), d && g.call(u.getElementsByTagName("source"), K), s ? e.setAttribute("srcset", s) : a && !d && (P.test(e.nodeName) ? J(e, a) : e.src = a), o && (s || d) && C(e, {
                                        src: a
                                    })), e._lazyRace && delete e._lazyRace, b(e, r.lazyClass), E((function() {
                                        (!m || e.complete && e.naturalWidth > 1) && (m ? F(h) : W--, G(h))
                                    }), !0)
                                })),
                                ee = function(e) {
                                    var t, n = O.test(e.nodeName),
                                        i = n && (e[l](r.sizesAttr) || e[l]("sizes")),
                                        o = "auto" == i;
                                    (!o && d || !n || !e[l]("src") && !e.srcset || e.complete || v(e, r.errorClass) || !v(e, r.lazyClass)) && (t = w(e, "lazyunveilread").detail, o && j.updateElem(e, !0, e.offsetWidth), e._lazyRace = !0, W++, Z(e, t, o, i, n))
                                },
                                te = function() {
                                    if (!d) {
                                        if (o.now() - m < 999) return void c(te, 999);
                                        var e = N((function() {
                                            r.loadMode = 3, V()
                                        }));
                                        d = !0, r.loadMode = 3, V(), u("scroll", (function() {
                                            3 == r.loadMode && (r.loadMode = 2), e()
                                        }), !0)
                                    }
                                };
                            return {
                                _: function() {
                                    m = o.now(), n.elements = t.getElementsByClassName(r.lazyClass), a = t.getElementsByClassName(r.lazyClass + " " + r.preloadClass), u("scroll", V, !0), u("resize", V, !0), e.MutationObserver ? new MutationObserver(V).observe(i, {
                                        childList: !0,
                                        subtree: !0,
                                        attributes: !0
                                    }) : (i[s]("DOMNodeInserted", V, !0), i[s]("DOMAttrModified", V, !0), setInterval(V, 999)), u("hashchange", V, !0), ["focus", "mouseover", "click", "load", "transitionend", "animationend", "webkitAnimationEnd"].forEach((function(e) {
                                        t[s](e, V, !0)
                                    })), /d$|^c/.test(t.readyState) ? te() : (u("load", te), t[s]("DOMContentLoaded", V), c(te, 2e4)), n.elements.length ? (X(), E._lsFlush()) : V()
                                },
                                checkElems: V,
                                unveil: ee
                            }
                        }(),
                        j = function() {
                            var e, n = A((function(e, t, n, r) {
                                    var i, o, a;
                                    if (e._lazysizesWidth = r, r += "px", e.setAttribute("sizes", r), p.test(t.nodeName || ""))
                                        for (o = 0, a = (i = t.getElementsByTagName("source")).length; o < a; o++) i[o].setAttribute("sizes", r);
                                    n.detail.dataAttr || C(e, n.detail)
                                })),
                                i = function(e, t, r) {
                                    var i, o = e.parentNode;
                                    o && (r = k(e, o, r), (i = w(e, "lazybeforesizes", {
                                        width: r,
                                        dataAttr: !!t
                                    })).defaultPrevented || (r = i.detail.width) && r !== e._lazysizesWidth && n(e, o, i, r))
                                },
                                o = N((function() {
                                    var t, n = e.length;
                                    if (n)
                                        for (t = 0; t < n; t++) i(e[t])
                                }));
                            return {
                                _: function() {
                                    e = t.getElementsByClassName(r.autosizesClass), u("resize", o)
                                },
                                checkElems: o,
                                updateElem: i
                            }
                        }(),
                        $ = function() {
                            $.i || ($.i = !0, j._(), D._())
                        };
                    return n = {
                        cfg: r,
                        autoSizer: j,
                        loader: D,
                        init: $,
                        uP: C,
                        aC: y,
                        rC: b,
                        hC: v,
                        fire: w,
                        gW: k,
                        rAF: E
                    }
                }
            }(e, e.document);
            e.lazySizes = n, "object" == typeof module && module.exports && (module.exports = n)
        }(window),
        function(e, t) {
            "function" == typeof define && define.amd ? define([], (function() {
                return t(e)
            })) : "object" == typeof exports ? module.exports = t(e) : e.Mapping = t(e)
        }("undefined" != typeof global ? global : "undefined" != typeof window ? window : this, (function(e) {
            var t = {};
            return t.mapElements = {
                html: "",
                department: "",
                destination: "",
                from: function(e) {
                    try {
                        return this.department = document.querySelector(e), this.html = function(e) {
                            if (document.body.contains(e)) return e.parentElement.removeChild(e);
                            throw "Element is not found"
                        }(this.department), this
                    } catch (e) {}
                },
                to: function(e) {
                    try {
                        return this.destination = document.querySelector(e), this
                    } catch (e) {}
                },
                use: function(e) {
                    try {
                        switch (e) {
                            case "appendTo":
                                this.destination.append(this.html);
                                break;
                            case "prependTo":
                                this.destination.prepend(this.html);
                                break;
                            case "insertBefore":
                                this.destination.parentElement.insertBefore(this.html, this.destination);
                                break;
                            case "insertAfter":
                                t = this.html, (n = this.destination).parentNode.insertBefore(t, n.nextSibling)
                        }
                    } catch (e) {}
                    var t, n
                }
            }, t
        })),
        function(e, t) {
            "function" == typeof define && define.amd ? define([], (function() {
                return t(e)
            })) : "object" == typeof exports ? module.exports = t(e) : e.MappingListener = t(e)
        }("undefined" != typeof global ? global : "undefined" != typeof window ? window : this, (function(e) {
            "use strict";
            var t;
            t = {
                breakpoint: 992
            };
            var n = function() {
                var e = {},
                    t = !1,
                    r = 0;
                "[object Boolean]" === Object.prototype.toString.call(arguments[0]) && (t = arguments[0], r++);
                for (var i = function(r) {
                        for (var i in r) r.hasOwnProperty(i) && (t && "[object Object]" === Object.prototype.toString.call(r[i]) ? e[i] = n(e[i], r[i]) : e[i] = r[i])
                    }; r < arguments.length; r++) i(arguments[r]);
                return e
            };
            return function(r) {
                var i, o = {
                    switch: function() {
                        e.matchMedia("(min-width:" + i.breakpoint + "px)").matches ? Mapping.mapElements.from(i.selector).to(i.desktopWrapper).use(i.desktopMethod) : Mapping.mapElements.from(i.selector).to(i.mobileWrapper).use(i.mobileMethod)
                    },
                    watch: function() {
                        this.switch(), e.matchMedia("(min-width:" + i.breakpoint + "px)").addListener(o.switch)
                    },
                    init: function(e) {
                        i = function(e) {
                            switch (e.breakpoint) {
                                case "sm":
                                    e.breakpoint = 576;
                                    break;
                                case "md":
                                    e.breakpoint = 768;
                                    break;
                                case "lg":
                                    e.breakpoint = 992;
                                    break;
                                case "xl":
                                    e.breakpoint = 1200
                            }
                            return e
                        }(i = n(t, e || {}))
                    }
                };
                return o.init(r), o
            }
        })), $(document).ready((function() {
            $(".form-text input").blur((function() {
                $(this).val() ? $(this).addClass("label-active") : $(this).removeClass("label-active")
            }))
        })), $(document).ready((function() {
            $(".side-navbar .toggle-nav").on("click", (function() {
                $(this).toggleClass("active"), $(".page-content").toggleClass("page-content-active"), $(".side-navbar .list-unstyled li .list-unstyled").slideUp("fast"), $(".side-navbar .list-unstyled li a.collapse").removeClass("active")
            })), $(".side-navbar .list-unstyled li").each((function() {
                $(this).hasClass("show-list-unstyled") && ($(this).find("a.collapse").addClass("active"), $(this).find(".list-unstyled.collapse").slideDown())
            })), $(".side-navbar .list-unstyled li a.collapse").each((function() {
                $(this).on("click", (function(e) {
                    $(".page-content").hasClass("page-content-active") ? ($(".page-content").removeClass("page-content-active"), 1 == $(this).next().is(":hidden") ? (e.preventDefault(), setTimeout(() => {
                        $(".side-navbar .list-unstyled li a.collapse").removeClass("active"), $(this).addClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp(), $(this).next().slideDown()
                    }, 500)) : setTimeout(() => {
                        $(this).removeClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp()
                    }, 100)) : ($(".page-content").removeClass("page-content-active"), 1 == $(this).next().is(":hidden") ? (e.preventDefault(), setTimeout(() => {
                        $(".side-navbar .list-unstyled li a.collapse").removeClass("active"), $(this).addClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp(), $(this).next().slideDown()
                    }, 100)) : setTimeout(() => {
                        $(this).removeClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp()
                    }, 100))
                }))
            })), 1 == !!document.documentMode ? $("body").addClass("is-browser-IE") : $("body").removeClass("is-browser-IE")
        })), $(document).ready((function() {
            menuMobile(), menuDashBoard(), clickMyCareerBuilder(), dropdownMenu()
        }));
        /*jquery.lazy.js*/
        ;
        (function(window, undefined) {
            "use strict";
            var $ = window.jQuery || window.Zepto,
                lazyInstanceId = 0,
                windowLoaded = false;
            $.fn.Lazy = $.fn.lazy = function(settings) {
                return new LazyPlugin(this, settings);
            };
            $.Lazy = $.lazy = function(names, elements, loader) {
                if ($.isFunction(elements)) {
                    loader = elements;
                    elements = [];
                }
                if (!$.isFunction(loader)) {
                    return;
                }
                names = $.isArray(names) ? names : [names];
                elements = $.isArray(elements) ? elements : [elements];
                var config = LazyPlugin.prototype.config,
                    forced = config._f || (config._f = {});
                for (var i = 0, l = names.length; i < l; i++) {
                    if (config[names[i]] === undefined || $.isFunction(config[names[i]])) {
                        config[names[i]] = loader;
                    }
                }
                for (var c = 0, a = elements.length; c < a; c++) {
                    forced[elements[c]] = names[0];
                }
            };

            function _executeLazy(instance, config, items, events, namespace) {
                var _awaitingAfterLoad = 0,
                    _actualWidth = -1,
                    _actualHeight = -1,
                    _isRetinaDisplay = false,
                    _afterLoad = 'afterLoad',
                    _load = 'load',
                    _error = 'error',
                    _img = 'img',
                    _src = 'src',
                    _srcset = 'srcset',
                    _sizes = 'sizes',
                    _backgroundImage = 'background-image';

                function _initialize() {
                    _isRetinaDisplay = window.devicePixelRatio > 1;
                    items = _prepareItems(items);
                    if (config.delay >= 0) {
                        setTimeout(function() {
                            _lazyLoadItems(true);
                        }, config.delay);
                    }
                    if (config.delay < 0 || config.combined) {
                        events.e = _throttle(config.throttle, function(event) {
                            if (event.type === 'resize') {
                                _actualWidth = _actualHeight = -1;
                            }
                            _lazyLoadItems(event.all);
                        });
                        events.a = function(additionalItems) {
                            additionalItems = _prepareItems(additionalItems);
                            items.push.apply(items, additionalItems);
                        };
                        events.g = function() {
                            return (items = $(items).filter(function() {
                                return !$(this).data(config.loadedName);
                            }));
                        };
                        events.f = function(forcedItems) {
                            for (var i = 0; i < forcedItems.length; i++) {
                                var item = items.filter(function() {
                                    return this === forcedItems[i];
                                });
                                if (item.length) {
                                    _lazyLoadItems(false, item);
                                }
                            }
                        };
                        _lazyLoadItems();
                        $(config.appendScroll).on('scroll.' + namespace + ' resize.' + namespace, events.e);
                    }
                }

                function _prepareItems(items) {
                    var defaultImage = config.defaultImage,
                        placeholder = config.placeholder,
                        imageBase = config.imageBase,
                        srcsetAttribute = config.srcsetAttribute,
                        loaderAttribute = config.loaderAttribute,
                        forcedTags = config._f || {};
                    items = $(items).filter(function() {
                        var element = $(this),
                            tag = _getElementTagName(this);
                        return !element.data(config.handledName) && (element.attr(config.attribute) || element.attr(srcsetAttribute) || element.attr(loaderAttribute) || forcedTags[tag] !== undefined);
                    }).data('plugin_' + config.name, instance);
                    for (var i = 0, l = items.length; i < l; i++) {
                        var element = $(items[i]),
                            tag = _getElementTagName(items[i]),
                            elementImageBase = element.attr(config.imageBaseAttribute) || imageBase;
                        if (tag === _img && elementImageBase && element.attr(srcsetAttribute)) {
                            element.attr(srcsetAttribute, _getCorrectedSrcSet(element.attr(srcsetAttribute), elementImageBase));
                        }
                        if (forcedTags[tag] !== undefined && !element.attr(loaderAttribute)) {
                            element.attr(loaderAttribute, forcedTags[tag]);
                        }
                        if (tag === _img && defaultImage && !element.attr(_src)) {
                            element.attr(_src, defaultImage);
                        } else if (tag !== _img && placeholder && (!element.css(_backgroundImage) || element.css(_backgroundImage) === 'none')) {
                            element.css(_backgroundImage, "url('" + placeholder + "')");
                        }
                    }
                    return items;
                }

                function _lazyLoadItems(allItems, forced) {
                    if (!items.length) {
                        if (config.autoDestroy) {
                            instance.destroy();
                        }
                        return;
                    }
                    var elements = forced || items,
                        loadTriggered = false,
                        imageBase = config.imageBase || '',
                        srcsetAttribute = config.srcsetAttribute,
                        handledName = config.handledName;
                    for (var i = 0; i < elements.length; i++) {
                        if (allItems || forced || _isInLoadableArea(elements[i])) {
                            var element = $(elements[i]),
                                tag = _getElementTagName(elements[i]),
                                attribute = element.attr(config.attribute),
                                elementImageBase = element.attr(config.imageBaseAttribute) || imageBase,
                                customLoader = element.attr(config.loaderAttribute);
                            if (!element.data(handledName) && (!config.visibleOnly || element.is(':visible')) && ((attribute || element.attr(srcsetAttribute)) && ((tag === _img && (elementImageBase + attribute !== element.attr(_src) || element.attr(srcsetAttribute) !== element.attr(_srcset))) || (tag !== _img && elementImageBase + attribute !== element.css(_backgroundImage))) || customLoader)) {
                                loadTriggered = true;
                                element.data(handledName, true);
                                _handleItem(element, tag, elementImageBase, customLoader);
                            }
                        }
                    }
                    if (loadTriggered) {
                        items = $(items).filter(function() {
                            return !$(this).data(handledName);
                        });
                    }
                }

                function _handleItem(element, tag, imageBase, customLoader) {
                    ++_awaitingAfterLoad;
                    var errorCallback = function() {
                        _triggerCallback('onError', element);
                        _reduceAwaiting();
                        errorCallback = $.noop;
                    };
                    _triggerCallback('beforeLoad', element);
                    var srcAttribute = config.attribute,
                        srcsetAttribute = config.srcsetAttribute,
                        sizesAttribute = config.sizesAttribute,
                        retinaAttribute = config.retinaAttribute,
                        removeAttribute = config.removeAttribute,
                        loadedName = config.loadedName,
                        elementRetina = element.attr(retinaAttribute);
                    if (customLoader) {
                        var loadCallback = function() {
                            if (removeAttribute) {
                                element.removeAttr(config.loaderAttribute);
                            }
                            element.data(loadedName, true);
                            _triggerCallback(_afterLoad, element);
                            setTimeout(_reduceAwaiting, 1);
                            loadCallback = $.noop;
                        };
                        element.off(_error).one(_error, errorCallback).one(_load, loadCallback);
                        if (!_triggerCallback(customLoader, element, function(response) {
                                if (response) {
                                    element.off(_load);
                                    loadCallback();
                                } else {
                                    element.off(_error);
                                    errorCallback();
                                }
                            })) {
                            element.trigger(_error);
                        }
                    } else {
                        var imageObj = $(new Image());
                        imageObj.one(_error, errorCallback).one(_load, function() {
                            element.hide();
                            if (tag === _img) {
                                element.attr(_sizes, imageObj.attr(_sizes)).attr(_srcset, imageObj.attr(_srcset)).attr(_src, imageObj.attr(_src));
                            } else {
                                element.css(_backgroundImage, "url('" + imageObj.attr(_src) + "')");
                            }
                            element[config.effect](config.effectTime);
                            if (removeAttribute) {
                                element.removeAttr(srcAttribute + ' ' + srcsetAttribute + ' ' + retinaAttribute + ' ' + config.imageBaseAttribute);
                                if (sizesAttribute !== _sizes) {
                                    element.removeAttr(sizesAttribute);
                                }
                            }
                            element.data(loadedName, true);
                            _triggerCallback(_afterLoad, element);
                            imageObj.remove();
                            _reduceAwaiting();
                        });
                        var imageSrc = (_isRetinaDisplay && elementRetina ? elementRetina : element.attr(srcAttribute)) || '';
                        imageObj.attr(_sizes, element.attr(sizesAttribute)).attr(_srcset, element.attr(srcsetAttribute)).attr(_src, imageSrc ? imageBase + imageSrc : null);
                        imageObj.complete && imageObj.trigger(_load);
                    }
                }

                function _isInLoadableArea(element) {
                    var elementBound = element.getBoundingClientRect(),
                        direction = config.scrollDirection,
                        threshold = config.threshold,
                        vertical = ((_getActualHeight() + threshold) > elementBound.top) && (-threshold < elementBound.bottom),
                        horizontal = ((_getActualWidth() + threshold) > elementBound.left) && (-threshold < elementBound.right);
                    if (direction === 'vertical') {
                        return vertical;
                    } else if (direction === 'horizontal') {
                        return horizontal;
                    }
                    return vertical && horizontal;
                }

                function _getActualWidth() {
                    return _actualWidth >= 0 ? _actualWidth : (_actualWidth = $(window).width());
                }

                function _getActualHeight() {
                    return _actualHeight >= 0 ? _actualHeight : (_actualHeight = $(window).height());
                }

                function _getElementTagName(element) {
                    return element.tagName.toLowerCase();
                }

                function _getCorrectedSrcSet(srcset, imageBase) {
                    if (imageBase) {
                        var entries = srcset.split(',');
                        srcset = '';
                        for (var i = 0, l = entries.length; i < l; i++) {
                            srcset += imageBase + entries[i].trim() + (i !== l - 1 ? ',' : '');
                        }
                    }
                    return srcset;
                }

                function _throttle(delay, callback) {
                    var timeout, lastExecute = 0;
                    return function(event, ignoreThrottle) {
                        var elapsed = +new Date() - lastExecute;

                        function run() {
                            lastExecute = +new Date();
                            callback.call(instance, event);
                        }
                        timeout && clearTimeout(timeout);
                        if (elapsed > delay || !config.enableThrottle || ignoreThrottle) {
                            run();
                        } else {
                            timeout = setTimeout(run, delay - elapsed);
                        }
                    };
                }

                function _reduceAwaiting() {
                    --_awaitingAfterLoad;
                    if (!items.length && !_awaitingAfterLoad) {
                        _triggerCallback('onFinishedAll');
                    }
                }

                function _triggerCallback(callback, element, args) {
                    if ((callback = config[callback])) {
                        callback.apply(instance, [].slice.call(arguments, 1));
                        return true;
                    }
                    return false;
                }
                if (config.bind === 'event' || windowLoaded) {
                    _initialize();
                } else {
                    $(window).on(_load + '.' + namespace, _initialize);
                }
            }

            function LazyPlugin(elements, settings) {
                var _instance = this,
                    _config = $.extend({}, _instance.config, settings),
                    _events = {},
                    _namespace = _config.name + '-' + (++lazyInstanceId);
                _instance.config = function(entryName, value) {
                    if (value === undefined) {
                        return _config[entryName];
                    }
                    _config[entryName] = value;
                    return _instance;
                };
                _instance.addItems = function(items) {
                    _events.a && _events.a($.type(items) === 'string' ? $(items) : items);
                    return _instance;
                };
                _instance.getItems = function() {
                    return _events.g ? _events.g() : {};
                };
                _instance.update = function(useThrottle) {
                    _events.e && _events.e({}, !useThrottle);
                    return _instance;
                };
                _instance.force = function(items) {
                    _events.f && _events.f($.type(items) === 'string' ? $(items) : items);
                    return _instance;
                };
                _instance.loadAll = function() {
                    _events.e && _events.e({
                        all: true
                    }, true);
                    return _instance;
                };
                _instance.destroy = function() {
                    $(_config.appendScroll).off('.' + _namespace, _events.e);
                    $(window).off('.' + _namespace);
                    _events = {};
                    return undefined;
                };
                _executeLazy(_instance, _config, elements, _events, _namespace);
                return _config.chainable ? elements : _instance;
            }
            LazyPlugin.prototype.config = {
                name: 'lazy',
                chainable: true,
                autoDestroy: true,
                bind: 'load',
                threshold: 500,
                visibleOnly: false,
                appendScroll: window,
                scrollDirection: 'both',
                imageBase: null,
                defaultImage: 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==',
                placeholder: null,
                delay: -1,
                combined: false,
                attribute: 'data-src',
                srcsetAttribute: 'data-srcset',
                sizesAttribute: 'data-sizes',
                retinaAttribute: 'data-retina',
                loaderAttribute: 'data-loader',
                imageBaseAttribute: 'data-imagebase',
                removeAttribute: true,
                handledName: 'handled',
                loadedName: 'loaded',
                effect: 'show',
                effectTime: 0,
                enableThrottle: true,
                throttle: 250,
                beforeLoad: undefined,
                afterLoad: undefined,
                onError: undefined,
                onFinishedAll: undefined
            };
            $(window).on('load', function() {
                windowLoaded = true;
            });
        })(window);
        /*jquery.fancybox.js*/

        (function(window, document, $, undefined) {
            "use strict";
            window.console = window.console || {
                info: function(stuff) {}
            };
            if (!$) {
                return;
            }
            if ($.fn.fancybox) {
                console.info("fancyBox already initialized");
                return;
            }
            var defaults = {
                closeExisting: false,
                loop: false,
                gutter: 50,
                keyboard: true,
                preventCaptionOverlap: true,
                arrows: true,
                infobar: true,
                smallBtn: "auto",
                toolbar: "auto",
                buttons: ["zoom", "slideShow", "thumbs", "close"],
                idleTime: 3,
                protect: false,
                modal: false,
                image: {
                    preload: false
                },
                ajax: {
                    settings: {
                        data: {
                            fancybox: true
                        }
                    }
                },
                iframe: {
                    tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen" src=""></iframe>',
                    preload: true,
                    css: {},
                    attr: {
                        scrolling: "auto"
                    }
                },
                video: {
                    tpl: '<video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}">' + '<source src="{{src}}" type="{{format}}" />' + 'Sorry, your browser doesn\'t support embedded videos, <a href="{{src}}">download</a> and watch with your favorite video player!' + "</video>",
                    format: "",
                    autoStart: true
                },
                defaultType: "image",
                animationEffect: "zoom",
                animationDuration: 366,
                zoomOpacity: "auto",
                transitionEffect: "fade",
                transitionDuration: 366,
                slideClass: "",
                baseClass: "",
                baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1">' + '<div class="fancybox-bg"></div>' + '<div class="fancybox-inner">' + '<div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div>' + '<div class="fancybox-toolbar">{{buttons}}</div>' + '<div class="fancybox-navigation">{{arrows}}</div>' + '<div class="fancybox-stage"></div>' + '<div class="fancybox-caption"><div class="fancybox-caption__body"></div></div>' + "</div>" + "</div>",
                spinnerTpl: '<div class="fancybox-loading"></div>',
                errorTpl: '<div class="fancybox-error"><p>{{ERROR}}</p></div>',
                btnTpl: {
                    download: '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg>' + "</a>",
                    zoom: '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg>' + "</button>",
                    close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg>' + "</button>",
                    arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">' + '<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/></svg></div>' + "</button>",
                    arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">' + '<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/></svg></div>' + "</button>",
                    smallBtn: '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}">' + '<svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg>' + "</button>"
                },
                parentEl: "body",
                hideScrollbar: true,
                autoFocus: true,
                backFocus: true,
                trapFocus: true,
                fullScreen: {
                    autoStart: false
                },
                touch: {
                    vertical: true,
                    momentum: true
                },
                hash: null,
                media: {},
                slideShow: {
                    autoStart: false,
                    speed: 3000
                },
                thumbs: {
                    autoStart: false,
                    hideOnClose: true,
                    parentEl: ".fancybox-container",
                    axis: "y"
                },
                wheel: "auto",
                onInit: $.noop,
                beforeLoad: $.noop,
                afterLoad: $.noop,
                beforeShow: $.noop,
                afterShow: $.noop,
                beforeClose: $.noop,
                afterClose: $.noop,
                onActivate: $.noop,
                onDeactivate: $.noop,
                clickContent: function(current, event) {
                    return current.type === "image" ? "zoom" : false;
                },
                clickSlide: "close",
                clickOutside: "close",
                dblclickContent: false,
                dblclickSlide: false,
                dblclickOutside: false,
                mobile: {
                    preventCaptionOverlap: false,
                    idleTime: false,
                    clickContent: function(current, event) {
                        return current.type === "image" ? "toggleControls" : false;
                    },
                    clickSlide: function(current, event) {
                        return current.type === "image" ? "toggleControls" : "close";
                    },
                    dblclickContent: function(current, event) {
                        return current.type === "image" ? "zoom" : false;
                    },
                    dblclickSlide: function(current, event) {
                        return current.type === "image" ? "zoom" : false;
                    }
                },
                lang: "en",
                i18n: {
                    en: {
                        CLOSE: "Close",
                        NEXT: "Next",
                        PREV: "Previous",
                        ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                        PLAY_START: "Start slideshow",
                        PLAY_STOP: "Pause slideshow",
                        FULL_SCREEN: "Full screen",
                        THUMBS: "Thumbnails",
                        DOWNLOAD: "Download",
                        SHARE: "Share",
                        ZOOM: "Zoom"
                    },
                    de: {
                        CLOSE: "Schlie&szlig;en",
                        NEXT: "Weiter",
                        PREV: "Zur&uuml;ck",
                        ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es sp&auml;ter nochmal.",
                        PLAY_START: "Diaschau starten",
                        PLAY_STOP: "Diaschau beenden",
                        FULL_SCREEN: "Vollbild",
                        THUMBS: "Vorschaubilder",
                        DOWNLOAD: "Herunterladen",
                        SHARE: "Teilen",
                        ZOOM: "Vergr&ouml;&szlig;ern"
                    }
                }
            };
            var $W = $(window);
            var $D = $(document);
            var called = 0;
            var isQuery = function(obj) {
                return obj && obj.hasOwnProperty && obj instanceof $;
            };
            var requestAFrame = (function() {
                return (window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || function(callback) {
                    return window.setTimeout(callback, 1000 / 60);
                });
            })();
            var cancelAFrame = (function() {
                return (window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || window.oCancelAnimationFrame || function(id) {
                    window.clearTimeout(id);
                });
            })();
            var transitionEnd = (function() {
                var el = document.createElement("fakeelement"),
                    t;
                var transitions = {
                    transition: "transitionend",
                    OTransition: "oTransitionEnd",
                    MozTransition: "transitionend",
                    WebkitTransition: "webkitTransitionEnd"
                };
                for (t in transitions) {
                    if (el.style[t] !== undefined) {
                        return transitions[t];
                    }
                }
                return "transitionend";
            })();
            var forceRedraw = function($el) {
                return $el && $el.length && $el[0].offsetHeight;
            };
            var mergeOpts = function(opts1, opts2) {
                var rez = $.extend(true, {}, opts1, opts2);
                $.each(opts2, function(key, value) {
                    if ($.isArray(value)) {
                        rez[key] = value;
                    }
                });
                return rez;
            };
            var inViewport = function(elem) {
                var elemCenter, rez;
                if (!elem || elem.ownerDocument !== document) {
                    return false;
                }
                $(".fancybox-container").css("pointer-events", "none");
                elemCenter = {
                    x: elem.getBoundingClientRect().left + elem.offsetWidth / 2,
                    y: elem.getBoundingClientRect().top + elem.offsetHeight / 2
                };
                rez = document.elementFromPoint(elemCenter.x, elemCenter.y) === elem;
                $(".fancybox-container").css("pointer-events", "");
                return rez;
            };
            var FancyBox = function(content, opts, index) {
                var self = this;
                self.opts = mergeOpts({
                    index: index
                }, $.fancybox.defaults);
                if ($.isPlainObject(opts)) {
                    self.opts = mergeOpts(self.opts, opts);
                }
                if ($.fancybox.isMobile) {
                    self.opts = mergeOpts(self.opts, self.opts.mobile);
                }
                self.id = self.opts.id || ++called;
                self.currIndex = parseInt(self.opts.index, 10) || 0;
                self.prevIndex = null;
                self.prevPos = null;
                self.currPos = 0;
                self.firstRun = true;
                self.group = [];
                self.slides = {};
                self.addContent(content);
                if (!self.group.length) {
                    return;
                }
                self.init();
            };
            $.extend(FancyBox.prototype, {
                init: function() {
                    var self = this,
                        firstItem = self.group[self.currIndex],
                        firstItemOpts = firstItem.opts,
                        $container, buttonStr;
                    if (firstItemOpts.closeExisting) {
                        $.fancybox.close(true);
                    }
                    $("body").addClass("fancybox-active");
                    if (!$.fancybox.getInstance() && firstItemOpts.hideScrollbar !== false && !$.fancybox.isMobile && document.body.scrollHeight > window.innerHeight) {
                        $("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:' +
                            (window.innerWidth - document.documentElement.clientWidth) + "px;}</style>");
                        $("body").addClass("compensate-for-scrollbar");
                    }
                    buttonStr = "";
                    $.each(firstItemOpts.buttons, function(index, value) {
                        buttonStr += firstItemOpts.btnTpl[value] || "";
                    });
                    $container = $(self.translate(self, firstItemOpts.baseTpl.replace("{{buttons}}", buttonStr).replace("{{arrows}}", firstItemOpts.btnTpl.arrowLeft + firstItemOpts.btnTpl.arrowRight))).attr("id", "fancybox-container-" + self.id).addClass(firstItemOpts.baseClass).data("FancyBox", self).appendTo(firstItemOpts.parentEl);
                    self.$refs = {
                        container: $container
                    };
                    ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function(item) {
                        self.$refs[item] = $container.find(".fancybox-" + item);
                    });
                    self.trigger("onInit");
                    self.activate();
                    self.jumpTo(self.currIndex);
                },
                translate: function(obj, str) {
                    var arr = obj.opts.i18n[obj.opts.lang] || obj.opts.i18n.en;
                    return str.replace(/\{\{(\w+)\}\}/g, function(match, n) {
                        return arr[n] === undefined ? match : arr[n];
                    });
                },
                addContent: function(content) {
                    var self = this,
                        items = $.makeArray(content),
                        thumbs;
                    $.each(items, function(i, item) {
                        var obj = {},
                            opts = {},
                            $item, type, found, src, srcParts;
                        if ($.isPlainObject(item)) {
                            obj = item;
                            opts = item.opts || item;
                        } else if ($.type(item) === "object" && $(item).length) {
                            $item = $(item);
                            opts = $item.data() || {};
                            opts = $.extend(true, {}, opts, opts.options);
                            opts.$orig = $item;
                            obj.src = self.opts.src || opts.src || $item.attr("href");
                            if (!obj.type && !obj.src) {
                                obj.type = "inline";
                                obj.src = item;
                            }
                        } else {
                            obj = {
                                type: "html",
                                src: item + ""
                            };
                        }
                        obj.opts = $.extend(true, {}, self.opts, opts);
                        if ($.isArray(opts.buttons)) {
                            obj.opts.buttons = opts.buttons;
                        }
                        if ($.fancybox.isMobile && obj.opts.mobile) {
                            obj.opts = mergeOpts(obj.opts, obj.opts.mobile);
                        }
                        type = obj.type || obj.opts.type;
                        src = obj.src || "";
                        if (!type && src) {
                            if ((found = src.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i))) {
                                type = "video";
                                if (!obj.opts.video.format) {
                                    obj.opts.video.format = "video/" + (found[1] === "ogv" ? "ogg" : found[1]);
                                }
                            } else if (src.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i)) {
                                type = "image";
                            } else if (src.match(/\.(pdf)((\?|#).*)?$/i)) {
                                type = "iframe";
                                obj = $.extend(true, obj, {
                                    contentType: "pdf",
                                    opts: {
                                        iframe: {
                                            preload: false
                                        }
                                    }
                                });
                            } else if (src.charAt(0) === "#") {
                                type = "inline";
                            }
                        }
                        if (type) {
                            obj.type = type;
                        } else {
                            self.trigger("objectNeedsType", obj);
                        }
                        if (!obj.contentType) {
                            obj.contentType = $.inArray(obj.type, ["html", "inline", "ajax"]) > -1 ? "html" : obj.type;
                        }
                        obj.index = self.group.length;
                        if (obj.opts.smallBtn == "auto") {
                            obj.opts.smallBtn = $.inArray(obj.type, ["html", "inline", "ajax"]) > -1;
                        }
                        if (obj.opts.toolbar === "auto") {
                            obj.opts.toolbar = !obj.opts.smallBtn;
                        }
                        obj.$thumb = obj.opts.$thumb || null;
                        if (obj.opts.$trigger && obj.index === self.opts.index) {
                            obj.$thumb = obj.opts.$trigger.find("img:first");
                            if (obj.$thumb.length) {
                                obj.opts.$orig = obj.opts.$trigger;
                            }
                        }
                        if (!(obj.$thumb && obj.$thumb.length) && obj.opts.$orig) {
                            obj.$thumb = obj.opts.$orig.find("img:first");
                        }
                        if (obj.$thumb && !obj.$thumb.length) {
                            obj.$thumb = null;
                        }
                        obj.thumb = obj.opts.thumb || (obj.$thumb ? obj.$thumb[0].src : null);
                        if ($.type(obj.opts.caption) === "function") {
                            obj.opts.caption = obj.opts.caption.apply(item, [self, obj]);
                        }
                        if ($.type(self.opts.caption) === "function") {
                            obj.opts.caption = self.opts.caption.apply(item, [self, obj]);
                        }
                        if (!(obj.opts.caption instanceof $)) {
                            obj.opts.caption = obj.opts.caption === undefined ? "" : obj.opts.caption + "";
                        }
                        if (obj.type === "ajax") {
                            srcParts = src.split(/\s+/, 2);
                            if (srcParts.length > 1) {
                                obj.src = srcParts.shift();
                                obj.opts.filter = srcParts.shift();
                            }
                        }
                        if (obj.opts.modal) {
                            obj.opts = $.extend(true, obj.opts, {
                                trapFocus: true,
                                infobar: 0,
                                toolbar: 0,
                                smallBtn: 0,
                                keyboard: 0,
                                slideShow: 0,
                                fullScreen: 0,
                                thumbs: 0,
                                touch: 0,
                                clickContent: false,
                                clickSlide: false,
                                clickOutside: false,
                                dblclickContent: false,
                                dblclickSlide: false,
                                dblclickOutside: false
                            });
                        }
                        self.group.push(obj);
                    });
                    if (Object.keys(self.slides).length) {
                        self.updateControls();
                        thumbs = self.Thumbs;
                        if (thumbs && thumbs.isActive) {
                            thumbs.create();
                            thumbs.focus();
                        }
                    }
                },
                addEvents: function() {
                    var self = this;
                    self.removeEvents();
                    self.$refs.container.on("click.fb-close", "[data-fancybox-close]", function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        self.close(e);
                    }).on("touchstart.fb-prev click.fb-prev", "[data-fancybox-prev]", function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        self.previous();
                    }).on("touchstart.fb-next click.fb-next", "[data-fancybox-next]", function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        self.next();
                    }).on("click.fb", "[data-fancybox-zoom]", function(e) {
                        self[self.isScaledDown() ? "scaleToActual" : "scaleToFit"]();
                    });
                    $W.on("orientationchange.fb resize.fb", function(e) {
                        if (e && e.originalEvent && e.originalEvent.type === "resize") {
                            if (self.requestId) {
                                cancelAFrame(self.requestId);
                            }
                            self.requestId = requestAFrame(function() {
                                self.update(e);
                            });
                        } else {
                            if (self.current && self.current.type === "iframe") {
                                self.$refs.stage.hide();
                            }
                            setTimeout(function() {
                                self.$refs.stage.show();
                                self.update(e);
                            }, $.fancybox.isMobile ? 600 : 250);
                        }
                    });
                    $D.on("keydown.fb", function(e) {
                        var instance = $.fancybox ? $.fancybox.getInstance() : null,
                            current = instance.current,
                            keycode = e.keyCode || e.which;
                        if (keycode == 9) {
                            if (current.opts.trapFocus) {
                                self.focus(e);
                            }
                            return;
                        }
                        if (!current.opts.keyboard || e.ctrlKey || e.altKey || e.shiftKey || $(e.target).is("input,textarea,video,audio,select")) {
                            return;
                        }
                        if (keycode === 8 || keycode === 27) {
                            e.preventDefault();
                            self.close(e);
                            return;
                        }
                        if (keycode === 37 || keycode === 38) {
                            e.preventDefault();
                            self.previous();
                            return;
                        }
                        if (keycode === 39 || keycode === 40) {
                            e.preventDefault();
                            self.next();
                            return;
                        }
                        self.trigger("afterKeydown", e, keycode);
                    });
                    if (self.group[self.currIndex].opts.idleTime) {
                        self.idleSecondsCounter = 0;
                        $D.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function(e) {
                            self.idleSecondsCounter = 0;
                            if (self.isIdle) {
                                self.showControls();
                            }
                            self.isIdle = false;
                        });
                        self.idleInterval = window.setInterval(function() {
                            self.idleSecondsCounter++;
                            if (self.idleSecondsCounter >= self.group[self.currIndex].opts.idleTime && !self.isDragging) {
                                self.isIdle = true;
                                self.idleSecondsCounter = 0;
                                self.hideControls();
                            }
                        }, 1000);
                    }
                },
                removeEvents: function() {
                    var self = this;
                    $W.off("orientationchange.fb resize.fb");
                    $D.off("keydown.fb .fb-idle");
                    this.$refs.container.off(".fb-close .fb-prev .fb-next");
                    if (self.idleInterval) {
                        window.clearInterval(self.idleInterval);
                        self.idleInterval = null;
                    }
                },
                previous: function(duration) {
                    return this.jumpTo(this.currPos - 1, duration);
                },
                next: function(duration) {
                    return this.jumpTo(this.currPos + 1, duration);
                },
                jumpTo: function(pos, duration) {
                    var self = this,
                        groupLen = self.group.length,
                        firstRun, isMoved, loop, current, previous, slidePos, stagePos, prop, diff;
                    if (self.isDragging || self.isClosing || (self.isAnimating && self.firstRun)) {
                        return;
                    }
                    pos = parseInt(pos, 10);
                    loop = self.current ? self.current.opts.loop : self.opts.loop;
                    if (!loop && (pos < 0 || pos >= groupLen)) {
                        return false;
                    }
                    firstRun = self.firstRun = !Object.keys(self.slides).length;
                    previous = self.current;
                    self.prevIndex = self.currIndex;
                    self.prevPos = self.currPos;
                    current = self.createSlide(pos);
                    if (groupLen > 1) {
                        if (loop || current.index < groupLen - 1) {
                            self.createSlide(pos + 1);
                        }
                        if (loop || current.index > 0) {
                            self.createSlide(pos - 1);
                        }
                    }
                    self.current = current;
                    self.currIndex = current.index;
                    self.currPos = current.pos;
                    self.trigger("beforeShow", firstRun);
                    self.updateControls();
                    current.forcedDuration = undefined;
                    if ($.isNumeric(duration)) {
                        current.forcedDuration = duration;
                    } else {
                        duration = current.opts[firstRun ? "animationDuration" : "transitionDuration"];
                    }
                    duration = parseInt(duration, 10);
                    isMoved = self.isMoved(current);
                    current.$slide.addClass("fancybox-slide--current");
                    if (firstRun) {
                        if (current.opts.animationEffect && duration) {
                            self.$refs.container.css("transition-duration", duration + "ms");
                        }
                        self.$refs.container.addClass("fancybox-is-open").trigger("focus");
                        self.loadSlide(current);
                        self.preload("image");
                        return;
                    }
                    slidePos = $.fancybox.getTranslate(previous.$slide);
                    stagePos = $.fancybox.getTranslate(self.$refs.stage);
                    $.each(self.slides, function(index, slide) {
                        $.fancybox.stop(slide.$slide, true);
                    });
                    if (previous.pos !== current.pos) {
                        previous.isComplete = false;
                    }
                    previous.$slide.removeClass("fancybox-slide--complete fancybox-slide--current");
                    if (isMoved) {
                        diff = slidePos.left - (previous.pos * slidePos.width + previous.pos * previous.opts.gutter);
                        $.each(self.slides, function(index, slide) {
                            slide.$slide.removeClass("fancybox-animated").removeClass(function(index, className) {
                                return (className.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ");
                            });
                            var leftPos = slide.pos * slidePos.width + slide.pos * slide.opts.gutter;
                            $.fancybox.setTranslate(slide.$slide, {
                                top: 0,
                                left: leftPos - stagePos.left + diff
                            });
                            if (slide.pos !== current.pos) {
                                slide.$slide.addClass("fancybox-slide--" + (slide.pos > current.pos ? "next" : "previous"));
                            }
                            forceRedraw(slide.$slide);
                            $.fancybox.animate(slide.$slide, {
                                top: 0,
                                left: (slide.pos - current.pos) * slidePos.width + (slide.pos - current.pos) * slide.opts.gutter
                            }, duration, function() {
                                slide.$slide.css({
                                    transform: "",
                                    opacity: ""
                                }).removeClass("fancybox-slide--next fancybox-slide--previous");
                                if (slide.pos === self.currPos) {
                                    self.complete();
                                }
                            });
                        });
                    } else if (duration && current.opts.transitionEffect) {
                        prop = "fancybox-animated fancybox-fx-" + current.opts.transitionEffect;
                        previous.$slide.addClass("fancybox-slide--" + (previous.pos > current.pos ? "next" : "previous"));
                        $.fancybox.animate(previous.$slide, prop, duration, function() {
                            previous.$slide.removeClass(prop).removeClass("fancybox-slide--next fancybox-slide--previous");
                        }, false);
                    }
                    if (current.isLoaded) {
                        self.revealContent(current);
                    } else {
                        self.loadSlide(current);
                    }
                    self.preload("image");
                },
                createSlide: function(pos) {
                    var self = this,
                        $slide, index;
                    index = pos % self.group.length;
                    index = index < 0 ? self.group.length + index : index;
                    if (!self.slides[pos] && self.group[index]) {
                        $slide = $('<div class="fancybox-slide"></div>').appendTo(self.$refs.stage);
                        self.slides[pos] = $.extend(true, {}, self.group[index], {
                            pos: pos,
                            $slide: $slide,
                            isLoaded: false
                        });
                        self.updateSlide(self.slides[pos]);
                    }
                    return self.slides[pos];
                },
                scaleToActual: function(x, y, duration) {
                    var self = this,
                        current = self.current,
                        $content = current.$content,
                        canvasWidth = $.fancybox.getTranslate(current.$slide).width,
                        canvasHeight = $.fancybox.getTranslate(current.$slide).height,
                        newImgWidth = current.width,
                        newImgHeight = current.height,
                        imgPos, posX, posY, scaleX, scaleY;
                    if (self.isAnimating || self.isMoved() || !$content || !(current.type == "image" && current.isLoaded && !current.hasError)) {
                        return;
                    }
                    self.isAnimating = true;
                    $.fancybox.stop($content);
                    x = x === undefined ? canvasWidth * 0.5 : x;
                    y = y === undefined ? canvasHeight * 0.5 : y;
                    imgPos = $.fancybox.getTranslate($content);
                    imgPos.top -= $.fancybox.getTranslate(current.$slide).top;
                    imgPos.left -= $.fancybox.getTranslate(current.$slide).left;
                    scaleX = newImgWidth / imgPos.width;
                    scaleY = newImgHeight / imgPos.height;
                    posX = canvasWidth * 0.5 - newImgWidth * 0.5;
                    posY = canvasHeight * 0.5 - newImgHeight * 0.5;
                    if (newImgWidth > canvasWidth) {
                        posX = imgPos.left * scaleX - (x * scaleX - x);
                        if (posX > 0) {
                            posX = 0;
                        }
                        if (posX < canvasWidth - newImgWidth) {
                            posX = canvasWidth - newImgWidth;
                        }
                    }
                    if (newImgHeight > canvasHeight) {
                        posY = imgPos.top * scaleY - (y * scaleY - y);
                        if (posY > 0) {
                            posY = 0;
                        }
                        if (posY < canvasHeight - newImgHeight) {
                            posY = canvasHeight - newImgHeight;
                        }
                    }
                    self.updateCursor(newImgWidth, newImgHeight);
                    $.fancybox.animate($content, {
                        top: posY,
                        left: posX,
                        scaleX: scaleX,
                        scaleY: scaleY
                    }, duration || 366, function() {
                        self.isAnimating = false;
                    });
                    if (self.SlideShow && self.SlideShow.isActive) {
                        self.SlideShow.stop();
                    }
                },
                scaleToFit: function(duration) {
                    var self = this,
                        current = self.current,
                        $content = current.$content,
                        end;
                    if (self.isAnimating || self.isMoved() || !$content || !(current.type == "image" && current.isLoaded && !current.hasError)) {
                        return;
                    }
                    self.isAnimating = true;
                    $.fancybox.stop($content);
                    end = self.getFitPos(current);
                    self.updateCursor(end.width, end.height);
                    $.fancybox.animate($content, {
                        top: end.top,
                        left: end.left,
                        scaleX: end.width / $content.width(),
                        scaleY: end.height / $content.height()
                    }, duration || 366, function() {
                        self.isAnimating = false;
                    });
                },
                getFitPos: function(slide) {
                    var self = this,
                        $content = slide.$content,
                        $slide = slide.$slide,
                        width = slide.width || slide.opts.width,
                        height = slide.height || slide.opts.height,
                        maxWidth, maxHeight, minRatio, aspectRatio, rez = {};
                    if (!slide.isLoaded || !$content || !$content.length) {
                        return false;
                    }
                    maxWidth = $.fancybox.getTranslate(self.$refs.stage).width;
                    maxHeight = $.fancybox.getTranslate(self.$refs.stage).height;
                    maxWidth -= parseFloat($slide.css("paddingLeft")) +
                        parseFloat($slide.css("paddingRight")) +
                        parseFloat($content.css("marginLeft")) +
                        parseFloat($content.css("marginRight"));
                    maxHeight -= parseFloat($slide.css("paddingTop")) +
                        parseFloat($slide.css("paddingBottom")) +
                        parseFloat($content.css("marginTop")) +
                        parseFloat($content.css("marginBottom"));
                    if (!width || !height) {
                        width = maxWidth;
                        height = maxHeight;
                    }
                    minRatio = Math.min(1, maxWidth / width, maxHeight / height);
                    width = minRatio * width;
                    height = minRatio * height;
                    if (width > maxWidth - 0.5) {
                        width = maxWidth;
                    }
                    if (height > maxHeight - 0.5) {
                        height = maxHeight;
                    }
                    if (slide.type === "image") {
                        rez.top = Math.floor((maxHeight - height) * 0.5) + parseFloat($slide.css("paddingTop"));
                        rez.left = Math.floor((maxWidth - width) * 0.5) + parseFloat($slide.css("paddingLeft"));
                    } else if (slide.contentType === "video") {
                        aspectRatio = slide.opts.width && slide.opts.height ? width / height : slide.opts.ratio || 16 / 9;
                        if (height > width / aspectRatio) {
                            height = width / aspectRatio;
                        } else if (width > height * aspectRatio) {
                            width = height * aspectRatio;
                        }
                    }
                    rez.width = width;
                    rez.height = height;
                    return rez;
                },
                update: function(e) {
                    var self = this;
                    $.each(self.slides, function(key, slide) {
                        self.updateSlide(slide, e);
                    });
                },
                updateSlide: function(slide, e) {
                    var self = this,
                        $content = slide && slide.$content,
                        width = slide.width || slide.opts.width,
                        height = slide.height || slide.opts.height,
                        $slide = slide.$slide;
                    self.adjustCaption(slide);
                    if ($content && (width || height || slide.contentType === "video") && !slide.hasError) {
                        $.fancybox.stop($content);
                        $.fancybox.setTranslate($content, self.getFitPos(slide));
                        if (slide.pos === self.currPos) {
                            self.isAnimating = false;
                            self.updateCursor();
                        }
                    }
                    self.adjustLayout(slide);
                    if ($slide.length) {
                        $slide.trigger("refresh");
                        if (slide.pos === self.currPos) {
                            self.$refs.toolbar.add(self.$refs.navigation.find(".fancybox-button--arrow_right")).toggleClass("compensate-for-scrollbar", $slide.get(0).scrollHeight > $slide.get(0).clientHeight);
                        }
                    }
                    self.trigger("onUpdate", slide, e);
                },
                centerSlide: function(duration) {
                    var self = this,
                        current = self.current,
                        $slide = current.$slide;
                    if (self.isClosing || !current) {
                        return;
                    }
                    $slide.siblings().css({
                        transform: "",
                        opacity: ""
                    });
                    $slide.parent().children().removeClass("fancybox-slide--previous fancybox-slide--next");
                    $.fancybox.animate($slide, {
                        top: 0,
                        left: 0,
                        opacity: 1
                    }, duration === undefined ? 0 : duration, function() {
                        $slide.css({
                            transform: "",
                            opacity: ""
                        });
                        if (!current.isComplete) {
                            self.complete();
                        }
                    }, false);
                },
                isMoved: function(slide) {
                    var current = slide || this.current,
                        slidePos, stagePos;
                    if (!current) {
                        return false;
                    }
                    stagePos = $.fancybox.getTranslate(this.$refs.stage);
                    slidePos = $.fancybox.getTranslate(current.$slide);
                    return (!current.$slide.hasClass("fancybox-animated") && (Math.abs(slidePos.top - stagePos.top) > 0.5 || Math.abs(slidePos.left - stagePos.left) > 0.5));
                },
                updateCursor: function(nextWidth, nextHeight) {
                    var self = this,
                        current = self.current,
                        $container = self.$refs.container,
                        canPan, isZoomable;
                    if (!current || self.isClosing || !self.Guestures) {
                        return;
                    }
                    $container.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan");
                    canPan = self.canPan(nextWidth, nextHeight);
                    isZoomable = canPan ? true : self.isZoomable();
                    $container.toggleClass("fancybox-is-zoomable", isZoomable);
                    $("[data-fancybox-zoom]").prop("disabled", !isZoomable);
                    if (canPan) {
                        $container.addClass("fancybox-can-pan");
                    } else if (isZoomable && (current.opts.clickContent === "zoom" || ($.isFunction(current.opts.clickContent) && current.opts.clickContent(current) == "zoom"))) {
                        $container.addClass("fancybox-can-zoomIn");
                    } else if (current.opts.touch && (current.opts.touch.vertical || self.group.length > 1) && current.contentType !== "video") {
                        $container.addClass("fancybox-can-swipe");
                    }
                },
                isZoomable: function() {
                    var self = this,
                        current = self.current,
                        fitPos;
                    if (current && !self.isClosing && current.type === "image" && !current.hasError) {
                        if (!current.isLoaded) {
                            return true;
                        }
                        fitPos = self.getFitPos(current);
                        if (fitPos && (current.width > fitPos.width || current.height > fitPos.height)) {
                            return true;
                        }
                    }
                    return false;
                },
                isScaledDown: function(nextWidth, nextHeight) {
                    var self = this,
                        rez = false,
                        current = self.current,
                        $content = current.$content;
                    if (nextWidth !== undefined && nextHeight !== undefined) {
                        rez = nextWidth < current.width && nextHeight < current.height;
                    } else if ($content) {
                        rez = $.fancybox.getTranslate($content);
                        rez = rez.width < current.width && rez.height < current.height;
                    }
                    return rez;
                },
                canPan: function(nextWidth, nextHeight) {
                    var self = this,
                        current = self.current,
                        pos = null,
                        rez = false;
                    if (current.type === "image" && (current.isComplete || (nextWidth && nextHeight)) && !current.hasError) {
                        rez = self.getFitPos(current);
                        if (nextWidth !== undefined && nextHeight !== undefined) {
                            pos = {
                                width: nextWidth,
                                height: nextHeight
                            };
                        } else if (current.isComplete) {
                            pos = $.fancybox.getTranslate(current.$content);
                        }
                        if (pos && rez) {
                            rez = Math.abs(pos.width - rez.width) > 1.5 || Math.abs(pos.height - rez.height) > 1.5;
                        }
                    }
                    return rez;
                },
                loadSlide: function(slide) {
                    var self = this,
                        type, $slide, ajaxLoad;
                    if (slide.isLoading || slide.isLoaded) {
                        return;
                    }
                    slide.isLoading = true;
                    if (self.trigger("beforeLoad", slide) === false) {
                        slide.isLoading = false;
                        return false;
                    }
                    type = slide.type;
                    $slide = slide.$slide;
                    $slide.off("refresh").trigger("onReset").addClass(slide.opts.slideClass);
                    switch (type) {
                        case "image":
                            self.setImage(slide);
                            break;
                        case "iframe":
                            self.setIframe(slide);
                            break;
                        case "html":
                            self.setContent(slide, slide.src || slide.content);
                            break;
                        case "video":
                            self.setContent(slide, slide.opts.video.tpl.replace(/\{\{src\}\}/gi, slide.src).replace("{{format}}", slide.opts.videoFormat || slide.opts.video.format || "").replace("{{poster}}", slide.thumb || ""));
                            break;
                        case "inline":
                            if ($(slide.src).length) {
                                self.setContent(slide, $(slide.src));
                            } else {
                                self.setError(slide);
                            }
                            break;
                        case "ajax":
                            self.showLoading(slide);
                            ajaxLoad = $.ajax($.extend({}, slide.opts.ajax.settings, {
                                url: slide.src,
                                success: function(data, textStatus) {
                                    if (textStatus === "success") {
                                        self.setContent(slide, data);
                                    }
                                },
                                error: function(jqXHR, textStatus) {
                                    if (jqXHR && textStatus !== "abort") {
                                        self.setError(slide);
                                    }
                                }
                            }));
                            $slide.one("onReset", function() {
                                ajaxLoad.abort();
                            });
                            break;
                        default:
                            self.setError(slide);
                            break;
                    }
                    return true;
                },
                setImage: function(slide) {
                    var self = this,
                        ghost;
                    setTimeout(function() {
                        var $img = slide.$image;
                        if (!self.isClosing && slide.isLoading && (!$img || !$img.length || !$img[0].complete) && !slide.hasError) {
                            self.showLoading(slide);
                        }
                    }, 50);
                    self.checkSrcset(slide);
                    slide.$content = $('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(slide.$slide.addClass("fancybox-slide--image"));
                    if (slide.opts.preload !== false && slide.opts.width && slide.opts.height && slide.thumb) {
                        slide.width = slide.opts.width;
                        slide.height = slide.opts.height;
                        ghost = document.createElement("img");
                        ghost.onerror = function() {
                            $(this).remove();
                            slide.$ghost = null;
                        };
                        ghost.onload = function() {
                            self.afterLoad(slide);
                        };
                        slide.$ghost = $(ghost).addClass("fancybox-image").appendTo(slide.$content).attr("src", slide.thumb);
                    }
                    self.setBigImage(slide);
                },
                checkSrcset: function(slide) {
                    var srcset = slide.opts.srcset || slide.opts.image.srcset,
                        found, temp, pxRatio, windowWidth;
                    if (srcset) {
                        pxRatio = window.devicePixelRatio || 1;
                        windowWidth = window.innerWidth * pxRatio;
                        temp = srcset.split(",").map(function(el) {
                            var ret = {};
                            el.trim().split(/\s+/).forEach(function(el, i) {
                                var value = parseInt(el.substring(0, el.length - 1), 10);
                                if (i === 0) {
                                    return (ret.url = el);
                                }
                                if (value) {
                                    ret.value = value;
                                    ret.postfix = el[el.length - 1];
                                }
                            });
                            return ret;
                        });
                        temp.sort(function(a, b) {
                            return a.value - b.value;
                        });
                        for (var j = 0; j < temp.length; j++) {
                            var el = temp[j];
                            if ((el.postfix === "w" && el.value >= windowWidth) || (el.postfix === "x" && el.value >= pxRatio)) {
                                found = el;
                                break;
                            }
                        }
                        if (!found && temp.length) {
                            found = temp[temp.length - 1];
                        }
                        if (found) {
                            slide.src = found.url;
                            if (slide.width && slide.height && found.postfix == "w") {
                                slide.height = (slide.width / slide.height) * found.value;
                                slide.width = found.value;
                            }
                            slide.opts.srcset = srcset;
                        }
                    }
                },
                setBigImage: function(slide) {
                    var self = this,
                        img = document.createElement("img"),
                        $img = $(img);
                    slide.$image = $img.one("error", function() {
                        self.setError(slide);
                    }).one("load", function() {
                        var sizes;
                        if (!slide.$ghost) {
                            self.resolveImageSlideSize(slide, this.naturalWidth, this.naturalHeight);
                            self.afterLoad(slide);
                        }
                        if (self.isClosing) {
                            return;
                        }
                        if (slide.opts.srcset) {
                            sizes = slide.opts.sizes;
                            if (!sizes || sizes === "auto") {
                                sizes = (slide.width / slide.height > 1 && $W.width() / $W.height() > 1 ? "100" : Math.round((slide.width / slide.height) * 100)) + "vw";
                            }
                            $img.attr("sizes", sizes).attr("srcset", slide.opts.srcset);
                        }
                        if (slide.$ghost) {
                            setTimeout(function() {
                                if (slide.$ghost && !self.isClosing) {
                                    slide.$ghost.hide();
                                }
                            }, Math.min(300, Math.max(1000, slide.height / 1600)));
                        }
                        self.hideLoading(slide);
                    }).addClass("fancybox-image").attr("src", slide.src).appendTo(slide.$content);
                    if ((img.complete || img.readyState == "complete") && $img.naturalWidth && $img.naturalHeight) {
                        $img.trigger("load");
                    } else if (img.error) {
                        $img.trigger("error");
                    }
                },
                resolveImageSlideSize: function(slide, imgWidth, imgHeight) {
                    var maxWidth = parseInt(slide.opts.width, 10),
                        maxHeight = parseInt(slide.opts.height, 10);
                    slide.width = imgWidth;
                    slide.height = imgHeight;
                    if (maxWidth > 0) {
                        slide.width = maxWidth;
                        slide.height = Math.floor((maxWidth * imgHeight) / imgWidth);
                    }
                    if (maxHeight > 0) {
                        slide.width = Math.floor((maxHeight * imgWidth) / imgHeight);
                        slide.height = maxHeight;
                    }
                },
                setIframe: function(slide) {
                    var self = this,
                        opts = slide.opts.iframe,
                        $slide = slide.$slide,
                        $iframe;
                    slide.$content = $('<div class="fancybox-content' + (opts.preload ? " fancybox-is-hidden" : "") + '"></div>').css(opts.css).appendTo($slide);
                    $slide.addClass("fancybox-slide--" + slide.contentType);
                    slide.$iframe = $iframe = $(opts.tpl.replace(/\{rnd\}/g, new Date().getTime())).attr(opts.attr).appendTo(slide.$content);
                    if (opts.preload) {
                        self.showLoading(slide);
                        $iframe.on("load.fb error.fb", function(e) {
                            this.isReady = 1;
                            slide.$slide.trigger("refresh");
                            self.afterLoad(slide);
                        });
                        $slide.on("refresh.fb", function() {
                            var $content = slide.$content,
                                frameWidth = opts.css.width,
                                frameHeight = opts.css.height,
                                $contents, $body;
                            if ($iframe[0].isReady !== 1) {
                                return;
                            }
                            try {
                                $contents = $iframe.contents();
                                $body = $contents.find("body");
                            } catch (ignore) {}
                            if ($body && $body.length && $body.children().length) {
                                $slide.css("overflow", "visible");
                                $content.css({
                                    width: "100%",
                                    "max-width": "100%",
                                    height: "9999px"
                                });
                                if (frameWidth === undefined) {
                                    frameWidth = Math.ceil(Math.max($body[0].clientWidth, $body.outerWidth(true)));
                                }
                                $content.css("width", frameWidth ? frameWidth : "").css("max-width", "");
                                if (frameHeight === undefined) {
                                    frameHeight = Math.ceil(Math.max($body[0].clientHeight, $body.outerHeight(true)));
                                }
                                $content.css("height", frameHeight ? frameHeight : "");
                                $slide.css("overflow", "auto");
                            }
                            $content.removeClass("fancybox-is-hidden");
                        });
                    } else {
                        self.afterLoad(slide);
                    }
                    $iframe.attr("src", slide.src);
                    $slide.one("onReset", function() {
                        try {
                            $(this).find("iframe").hide().unbind().attr("src", "//about:blank");
                        } catch (ignore) {}
                        $(this).off("refresh.fb").empty();
                        slide.isLoaded = false;
                        slide.isRevealed = false;
                    });
                },
                setContent: function(slide, content) {
                    var self = this;
                    if (self.isClosing) {
                        return;
                    }
                    self.hideLoading(slide);
                    if (slide.$content) {
                        $.fancybox.stop(slide.$content);
                    }
                    slide.$slide.empty();
                    if (isQuery(content) && content.parent().length) {
                        if (content.hasClass("fancybox-content") || content.parent().hasClass("fancybox-content")) {
                            content.parents(".fancybox-slide").trigger("onReset");
                        }
                        slide.$placeholder = $("<div>").hide().insertAfter(content);
                        content.css("display", "inline-block");
                    } else if (!slide.hasError) {
                        if ($.type(content) === "string") {
                            content = $("<div>").append($.trim(content)).contents();
                        }
                        if (slide.opts.filter) {
                            content = $("<div>").html(content).find(slide.opts.filter);
                        }
                    }
                    slide.$slide.one("onReset", function() {
                        $(this).find("video,audio").trigger("pause");
                        if (slide.$placeholder) {
                            slide.$placeholder.after(content.removeClass("fancybox-content").hide()).remove();
                            slide.$placeholder = null;
                        }
                        if (slide.$smallBtn) {
                            slide.$smallBtn.remove();
                            slide.$smallBtn = null;
                        }
                        if (!slide.hasError) {
                            $(this).empty();
                            slide.isLoaded = false;
                            slide.isRevealed = false;
                        }
                    });
                    $(content).appendTo(slide.$slide);
                    if ($(content).is("video,audio")) {
                        $(content).addClass("fancybox-video");
                        $(content).wrap("<div></div>");
                        slide.contentType = "video";
                        slide.opts.width = slide.opts.width || $(content).attr("width");
                        slide.opts.height = slide.opts.height || $(content).attr("height");
                    }
                    slide.$content = slide.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first();
                    slide.$content.siblings().hide();
                    if (!slide.$content.length) {
                        slide.$content = slide.$slide.wrapInner("<div></div>").children().first();
                    }
                    slide.$content.addClass("fancybox-content");
                    slide.$slide.addClass("fancybox-slide--" + slide.contentType);
                    self.afterLoad(slide);
                },
                setError: function(slide) {
                    slide.hasError = true;
                    slide.$slide.trigger("onReset").removeClass("fancybox-slide--" + slide.contentType).addClass("fancybox-slide--error");
                    slide.contentType = "html";
                    this.setContent(slide, this.translate(slide, slide.opts.errorTpl));
                    if (slide.pos === this.currPos) {
                        this.isAnimating = false;
                    }
                },
                showLoading: function(slide) {
                    var self = this;
                    slide = slide || self.current;
                    if (slide && !slide.$spinner) {
                        slide.$spinner = $(self.translate(self, self.opts.spinnerTpl)).appendTo(slide.$slide).hide().fadeIn("fast");
                    }
                },
                hideLoading: function(slide) {
                    var self = this;
                    slide = slide || self.current;
                    if (slide && slide.$spinner) {
                        slide.$spinner.stop().remove();
                        delete slide.$spinner;
                    }
                },
                afterLoad: function(slide) {
                    var self = this;
                    if (self.isClosing) {
                        return;
                    }
                    slide.isLoading = false;
                    slide.isLoaded = true;
                    self.trigger("afterLoad", slide);
                    self.hideLoading(slide);
                    if (slide.opts.smallBtn && (!slide.$smallBtn || !slide.$smallBtn.length)) {
                        slide.$smallBtn = $(self.translate(slide, slide.opts.btnTpl.smallBtn)).appendTo(slide.$content);
                    }
                    if (slide.opts.protect && slide.$content && !slide.hasError) {
                        slide.$content.on("contextmenu.fb", function(e) {
                            if (e.button == 2) {
                                e.preventDefault();
                            }
                            return true;
                        });
                        if (slide.type === "image") {
                            $('<div class="fancybox-spaceball"></div>').appendTo(slide.$content);
                        }
                    }
                    self.adjustCaption(slide);
                    self.adjustLayout(slide);
                    if (slide.pos === self.currPos) {
                        self.updateCursor();
                    }
                    self.revealContent(slide);
                },
                adjustCaption: function(slide) {
                    var self = this,
                        current = slide || self.current,
                        caption = current.opts.caption,
                        preventOverlap = current.opts.preventCaptionOverlap,
                        $caption = self.$refs.caption,
                        $clone, captionH = false;
                    $caption.toggleClass("fancybox-caption--separate", preventOverlap);
                    if (preventOverlap && caption && caption.length) {
                        if (current.pos !== self.currPos) {
                            $clone = $caption.clone().appendTo($caption.parent());
                            $clone.children().eq(0).empty().html(caption);
                            captionH = $clone.outerHeight(true);
                            $clone.empty().remove();
                        } else if (self.$caption) {
                            captionH = self.$caption.outerHeight(true);
                        }
                        current.$slide.css("padding-bottom", captionH || "");
                    }
                },
                adjustLayout: function(slide) {
                    var self = this,
                        current = slide || self.current,
                        scrollHeight, marginBottom, inlinePadding, actualPadding;
                    if (current.isLoaded && current.opts.disableLayoutFix !== true) {
                        current.$content.css("margin-bottom", "");
                        if (current.$content.outerHeight() > current.$slide.height() + 0.5) {
                            inlinePadding = current.$slide[0].style["padding-bottom"];
                            actualPadding = current.$slide.css("padding-bottom");
                            if (parseFloat(actualPadding) > 0) {
                                scrollHeight = current.$slide[0].scrollHeight;
                                current.$slide.css("padding-bottom", 0);
                                if (Math.abs(scrollHeight - current.$slide[0].scrollHeight) < 1) {
                                    marginBottom = actualPadding;
                                }
                                current.$slide.css("padding-bottom", inlinePadding);
                            }
                        }
                        current.$content.css("margin-bottom", marginBottom);
                    }
                },
                revealContent: function(slide) {
                    var self = this,
                        $slide = slide.$slide,
                        end = false,
                        start = false,
                        isMoved = self.isMoved(slide),
                        isRevealed = slide.isRevealed,
                        effect, effectClassName, duration, opacity;
                    slide.isRevealed = true;
                    effect = slide.opts[self.firstRun ? "animationEffect" : "transitionEffect"];
                    duration = slide.opts[self.firstRun ? "animationDuration" : "transitionDuration"];
                    duration = parseInt(slide.forcedDuration === undefined ? duration : slide.forcedDuration, 10);
                    if (isMoved || slide.pos !== self.currPos || !duration) {
                        effect = false;
                    }
                    if (effect === "zoom") {
                        if (slide.pos === self.currPos && duration && slide.type === "image" && !slide.hasError && (start = self.getThumbPos(slide))) {
                            end = self.getFitPos(slide);
                        } else {
                            effect = "fade";
                        }
                    }
                    if (effect === "zoom") {
                        self.isAnimating = true;
                        end.scaleX = end.width / start.width;
                        end.scaleY = end.height / start.height;
                        opacity = slide.opts.zoomOpacity;
                        if (opacity == "auto") {
                            opacity = Math.abs(slide.width / slide.height - start.width / start.height) > 0.1;
                        }
                        if (opacity) {
                            start.opacity = 0.1;
                            end.opacity = 1;
                        }
                        $.fancybox.setTranslate(slide.$content.removeClass("fancybox-is-hidden"), start);
                        forceRedraw(slide.$content);
                        $.fancybox.animate(slide.$content, end, duration, function() {
                            self.isAnimating = false;
                            self.complete();
                        });
                        return;
                    }
                    self.updateSlide(slide);
                    if (!effect) {
                        slide.$content.removeClass("fancybox-is-hidden");
                        if (!isRevealed && isMoved && slide.type === "image" && !slide.hasError) {
                            slide.$content.hide().fadeIn("fast");
                        }
                        if (slide.pos === self.currPos) {
                            self.complete();
                        }
                        return;
                    }
                    $.fancybox.stop($slide);
                    effectClassName = "fancybox-slide--" + (slide.pos >= self.prevPos ? "next" : "previous") + " fancybox-animated fancybox-fx-" + effect;
                    $slide.addClass(effectClassName).removeClass("fancybox-slide--current");
                    slide.$content.removeClass("fancybox-is-hidden");
                    forceRedraw($slide);
                    if (slide.type !== "image") {
                        slide.$content.hide().show(0);
                    }
                    $.fancybox.animate($slide, "fancybox-slide--current", duration, function() {
                        $slide.removeClass(effectClassName).css({
                            transform: "",
                            opacity: ""
                        });
                        if (slide.pos === self.currPos) {
                            self.complete();
                        }
                    }, true);
                },
                getThumbPos: function(slide) {
                    var rez = false,
                        $thumb = slide.$thumb,
                        thumbPos, btw, brw, bbw, blw;
                    if (!$thumb || !inViewport($thumb[0])) {
                        return false;
                    }
                    thumbPos = $.fancybox.getTranslate($thumb);
                    btw = parseFloat($thumb.css("border-top-width") || 0);
                    brw = parseFloat($thumb.css("border-right-width") || 0);
                    bbw = parseFloat($thumb.css("border-bottom-width") || 0);
                    blw = parseFloat($thumb.css("border-left-width") || 0);
                    rez = {
                        top: thumbPos.top + btw,
                        left: thumbPos.left + blw,
                        width: thumbPos.width - brw - blw,
                        height: thumbPos.height - btw - bbw,
                        scaleX: 1,
                        scaleY: 1
                    };
                    return thumbPos.width > 0 && thumbPos.height > 0 ? rez : false;
                },
                complete: function() {
                    var self = this,
                        current = self.current,
                        slides = {},
                        $el;
                    if (self.isMoved() || !current.isLoaded) {
                        return;
                    }
                    if (!current.isComplete) {
                        current.isComplete = true;
                        current.$slide.siblings().trigger("onReset");
                        self.preload("inline");
                        forceRedraw(current.$slide);
                        current.$slide.addClass("fancybox-slide--complete");
                        $.each(self.slides, function(key, slide) {
                            if (slide.pos >= self.currPos - 1 && slide.pos <= self.currPos + 1) {
                                slides[slide.pos] = slide;
                            } else if (slide) {
                                $.fancybox.stop(slide.$slide);
                                slide.$slide.off().remove();
                            }
                        });
                        self.slides = slides;
                    }
                    self.isAnimating = false;
                    self.updateCursor();
                    self.trigger("afterShow");
                    if (!!current.opts.video.autoStart) {
                        current.$slide.find("video,audio").filter(":visible:first").trigger("play").one("ended", function() {
                            if (Document.exitFullscreen) {
                                Document.exitFullscreen();
                            } else if (this.webkitExitFullscreen) {
                                this.webkitExitFullscreen();
                            }
                            self.next();
                        });
                    }
                    if (current.opts.autoFocus && current.contentType === "html") {
                        $el = current.$content.find("input[autofocus]:enabled:visible:first");
                        if ($el.length) {
                            $el.trigger("focus");
                        } else {
                            self.focus(null, true);
                        }
                    }
                    current.$slide.scrollTop(0).scrollLeft(0);
                },
                preload: function(type) {
                    var self = this,
                        prev, next;
                    if (self.group.length < 2) {
                        return;
                    }
                    next = self.slides[self.currPos + 1];
                    prev = self.slides[self.currPos - 1];
                    if (prev && prev.type === type) {
                        self.loadSlide(prev);
                    }
                    if (next && next.type === type) {
                        self.loadSlide(next);
                    }
                },
                focus: function(e, firstRun) {
                    var self = this,
                        focusableStr = ["a[href]", "area[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "button:not([disabled]):not([aria-hidden])", "iframe", "object", "embed", "video", "audio", "[contenteditable]", '[tabindex]:not([tabindex^="-"])'].join(","),
                        focusableItems, focusedItemIndex;
                    if (self.isClosing) {
                        return;
                    }
                    if (e || !self.current || !self.current.isComplete) {
                        focusableItems = self.$refs.container.find("*:visible");
                    } else {
                        focusableItems = self.current.$slide.find("*:visible" + (firstRun ? ":not(.fancybox-close-small)" : ""));
                    }
                    focusableItems = focusableItems.filter(focusableStr).filter(function() {
                        return $(this).css("visibility") !== "hidden" && !$(this).hasClass("disabled");
                    });
                    if (focusableItems.length) {
                        focusedItemIndex = focusableItems.index(document.activeElement);
                        if (e && e.shiftKey) {
                            if (focusedItemIndex < 0 || focusedItemIndex == 0) {
                                e.preventDefault();
                                focusableItems.eq(focusableItems.length - 1).trigger("focus");
                            }
                        } else {
                            if (focusedItemIndex < 0 || focusedItemIndex == focusableItems.length - 1) {
                                if (e) {
                                    e.preventDefault();
                                }
                                focusableItems.eq(0).trigger("focus");
                            }
                        }
                    } else {
                        self.$refs.container.trigger("focus");
                    }
                },
                activate: function() {
                    var self = this;
                    $(".fancybox-container").each(function() {
                        var instance = $(this).data("FancyBox");
                        if (instance && instance.id !== self.id && !instance.isClosing) {
                            instance.trigger("onDeactivate");
                            instance.removeEvents();
                            instance.isVisible = false;
                        }
                    });
                    self.isVisible = true;
                    if (self.current || self.isIdle) {
                        self.update();
                        self.updateControls();
                    }
                    self.trigger("onActivate");
                    self.addEvents();
                },
                close: function(e, d) {
                    var self = this,
                        current = self.current,
                        effect, duration, $content, domRect, opacity, start, end;
                    var done = function() {
                        self.cleanUp(e);
                    };
                    if (self.isClosing) {
                        return false;
                    }
                    self.isClosing = true;
                    if (self.trigger("beforeClose", e) === false) {
                        self.isClosing = false;
                        requestAFrame(function() {
                            self.update();
                        });
                        return false;
                    }
                    self.removeEvents();
                    $content = current.$content;
                    effect = current.opts.animationEffect;
                    duration = $.isNumeric(d) ? d : effect ? current.opts.animationDuration : 0;
                    current.$slide.removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated");
                    if (e !== true) {
                        $.fancybox.stop(current.$slide);
                    } else {
                        effect = false;
                    }
                    current.$slide.siblings().trigger("onReset").remove();
                    if (duration) {
                        self.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing").css("transition-duration", duration + "ms");
                    }
                    self.hideLoading(current);
                    self.hideControls(true);
                    self.updateCursor();
                    if (effect === "zoom" && !($content && duration && current.type === "image" && !self.isMoved() && !current.hasError && (end = self.getThumbPos(current)))) {
                        effect = "fade";
                    }
                    if (effect === "zoom") {
                        $.fancybox.stop($content);
                        domRect = $.fancybox.getTranslate($content);
                        start = {
                            top: domRect.top,
                            left: domRect.left,
                            scaleX: domRect.width / end.width,
                            scaleY: domRect.height / end.height,
                            width: end.width,
                            height: end.height
                        };
                        opacity = current.opts.zoomOpacity;
                        if (opacity == "auto") {
                            opacity = Math.abs(current.width / current.height - end.width / end.height) > 0.1;
                        }
                        if (opacity) {
                            end.opacity = 0;
                        }
                        $.fancybox.setTranslate($content, start);
                        forceRedraw($content);
                        $.fancybox.animate($content, end, duration, done);
                        return true;
                    }
                    if (effect && duration) {
                        $.fancybox.animate(current.$slide.addClass("fancybox-slide--previous").removeClass("fancybox-slide--current"), "fancybox-animated fancybox-fx-" + effect, duration, done);
                    } else {
                        if (e === true) {
                            setTimeout(done, duration);
                        } else {
                            done();
                        }
                    }
                    return true;
                },
                cleanUp: function(e) {
                    var self = this,
                        instance, $focus = self.current.opts.$orig,
                        x, y;
                    self.current.$slide.trigger("onReset");
                    self.$refs.container.empty().remove();
                    self.trigger("afterClose", e);
                    if (!!self.current.opts.backFocus) {
                        if (!$focus || !$focus.length || !$focus.is(":visible")) {
                            $focus = self.$trigger;
                        }
                        if ($focus && $focus.length) {
                            x = window.scrollX;
                            y = window.scrollY;
                            $focus.trigger("focus");
                            $("html, body").scrollTop(y).scrollLeft(x);
                        }
                    }
                    self.current = null;
                    instance = $.fancybox.getInstance();
                    if (instance) {
                        instance.activate();
                    } else {
                        $("body").removeClass("fancybox-active compensate-for-scrollbar");
                        $("#fancybox-style-noscroll").remove();
                    }
                },
                trigger: function(name, slide) {
                    var args = Array.prototype.slice.call(arguments, 1),
                        self = this,
                        obj = slide && slide.opts ? slide : self.current,
                        rez;
                    if (obj) {
                        args.unshift(obj);
                    } else {
                        obj = self;
                    }
                    args.unshift(self);
                    if ($.isFunction(obj.opts[name])) {
                        rez = obj.opts[name].apply(obj, args);
                    }
                    if (rez === false) {
                        return rez;
                    }
                    if (name === "afterClose" || !self.$refs) {
                        $D.trigger(name + ".fb", args);
                    } else {
                        self.$refs.container.trigger(name + ".fb", args);
                    }
                },
                updateControls: function() {
                    var self = this,
                        current = self.current,
                        index = current.index,
                        $container = self.$refs.container,
                        $caption = self.$refs.caption,
                        caption = current.opts.caption;
                    current.$slide.trigger("refresh");
                    if (caption && caption.length) {
                        self.$caption = $caption;
                        $caption.children().eq(0).html(caption);
                    } else {
                        self.$caption = null;
                    }
                    if (!self.hasHiddenControls && !self.isIdle) {
                        self.showControls();
                    }
                    $container.find("[data-fancybox-count]").html(self.group.length);
                    $container.find("[data-fancybox-index]").html(index + 1);
                    $container.find("[data-fancybox-prev]").prop("disabled", !current.opts.loop && index <= 0);
                    $container.find("[data-fancybox-next]").prop("disabled", !current.opts.loop && index >= self.group.length - 1);
                    if (current.type === "image") {
                        $container.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href", current.opts.image.src || current.src).show();
                    } else if (current.opts.toolbar) {
                        $container.find("[data-fancybox-download],[data-fancybox-zoom]").hide();
                    }
                    if ($(document.activeElement).is(":hidden,[disabled]")) {
                        self.$refs.container.trigger("focus");
                    }
                },
                hideControls: function(andCaption) {
                    var self = this,
                        arr = ["infobar", "toolbar", "nav"];
                    if (andCaption || !self.current.opts.preventCaptionOverlap) {
                        arr.push("caption");
                    }
                    this.$refs.container.removeClass(arr.map(function(i) {
                        return "fancybox-show-" + i;
                    }).join(" "));
                    this.hasHiddenControls = true;
                },
                showControls: function() {
                    var self = this,
                        opts = self.current ? self.current.opts : self.opts,
                        $container = self.$refs.container;
                    self.hasHiddenControls = false;
                    self.idleSecondsCounter = 0;
                    $container.toggleClass("fancybox-show-toolbar", !!(opts.toolbar && opts.buttons)).toggleClass("fancybox-show-infobar", !!(opts.infobar && self.group.length > 1)).toggleClass("fancybox-show-caption", !!self.$caption).toggleClass("fancybox-show-nav", !!(opts.arrows && self.group.length > 1)).toggleClass("fancybox-is-modal", !!opts.modal);
                },
                toggleControls: function() {
                    if (this.hasHiddenControls) {
                        this.showControls();
                    } else {
                        this.hideControls();
                    }
                }
            });
            $.fancybox = {
                version: "3.5.7",
                defaults: defaults,
                getInstance: function(command) {
                    var instance = $('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),
                        args = Array.prototype.slice.call(arguments, 1);
                    if (instance instanceof FancyBox) {
                        if ($.type(command) === "string") {
                            instance[command].apply(instance, args);
                        } else if ($.type(command) === "function") {
                            command.apply(instance, args);
                        }
                        return instance;
                    }
                    return false;
                },
                open: function(items, opts, index) {
                    return new FancyBox(items, opts, index);
                },
                close: function(all) {
                    var instance = this.getInstance();
                    if (instance) {
                        instance.close();
                        if (all === true) {
                            this.close(all);
                        }
                    }
                },
                destroy: function() {
                    this.close(true);
                    $D.add("body").off("click.fb-start", "**");
                },
                isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                use3d: (function() {
                    var div = document.createElement("div");
                    return (window.getComputedStyle && window.getComputedStyle(div) && window.getComputedStyle(div).getPropertyValue("transform") && !(document.documentMode && document.documentMode < 11));
                })(),
                getTranslate: function($el) {
                    var domRect;
                    if (!$el || !$el.length) {
                        return false;
                    }
                    domRect = $el[0].getBoundingClientRect();
                    return {
                        top: domRect.top || 0,
                        left: domRect.left || 0,
                        width: domRect.width,
                        height: domRect.height,
                        opacity: parseFloat($el.css("opacity"))
                    };
                },
                setTranslate: function($el, props) {
                    var str = "",
                        css = {};
                    if (!$el || !props) {
                        return;
                    }
                    if (props.left !== undefined || props.top !== undefined) {
                        str = (props.left === undefined ? $el.position().left : props.left) + "px, " +
                            (props.top === undefined ? $el.position().top : props.top) + "px";
                        if (this.use3d) {
                            str = "translate3d(" + str + ", 0px)";
                        } else {
                            str = "translate(" + str + ")";
                        }
                    }
                    if (props.scaleX !== undefined && props.scaleY !== undefined) {
                        str += " scale(" + props.scaleX + ", " + props.scaleY + ")";
                    } else if (props.scaleX !== undefined) {
                        str += " scaleX(" + props.scaleX + ")";
                    }
                    if (str.length) {
                        css.transform = str;
                    }
                    if (props.opacity !== undefined) {
                        css.opacity = props.opacity;
                    }
                    if (props.width !== undefined) {
                        css.width = props.width;
                    }
                    if (props.height !== undefined) {
                        css.height = props.height;
                    }
                    return $el.css(css);
                },
                animate: function($el, to, duration, callback, leaveAnimationName) {
                    var self = this,
                        from;
                    if ($.isFunction(duration)) {
                        callback = duration;
                        duration = null;
                    }
                    self.stop($el);
                    from = self.getTranslate($el);
                    $el.on(transitionEnd, function(e) {
                        if (e && e.originalEvent && (!$el.is(e.originalEvent.target) || e.originalEvent.propertyName == "z-index")) {
                            return;
                        }
                        self.stop($el);
                        if ($.isNumeric(duration)) {
                            $el.css("transition-duration", "");
                        }
                        if ($.isPlainObject(to)) {
                            if (to.scaleX !== undefined && to.scaleY !== undefined) {
                                self.setTranslate($el, {
                                    top: to.top,
                                    left: to.left,
                                    width: from.width * to.scaleX,
                                    height: from.height * to.scaleY,
                                    scaleX: 1,
                                    scaleY: 1
                                });
                            }
                        } else if (leaveAnimationName !== true) {
                            $el.removeClass(to);
                        }
                        if ($.isFunction(callback)) {
                            callback(e);
                        }
                    });
                    if ($.isNumeric(duration)) {
                        $el.css("transition-duration", duration + "ms");
                    }
                    if ($.isPlainObject(to)) {
                        if (to.scaleX !== undefined && to.scaleY !== undefined) {
                            delete to.width;
                            delete to.height;
                            if ($el.parent().hasClass("fancybox-slide--image")) {
                                $el.parent().addClass("fancybox-is-scaling");
                            }
                        }
                        $.fancybox.setTranslate($el, to);
                    } else {
                        $el.addClass(to);
                    }
                    $el.data("timer", setTimeout(function() {
                        $el.trigger(transitionEnd);
                    }, duration + 33));
                },
                stop: function($el, callCallback) {
                    if ($el && $el.length) {
                        clearTimeout($el.data("timer"));
                        if (callCallback) {
                            $el.trigger(transitionEnd);
                        }
                        $el.off(transitionEnd).css("transition-duration", "");
                        $el.parent().removeClass("fancybox-is-scaling");
                    }
                }
            };

            function _run(e, opts) {
                var items = [],
                    index = 0,
                    $target, value, instance;
                if (e && e.isDefaultPrevented()) {
                    return;
                }
                e.preventDefault();
                opts = opts || {};
                if (e && e.data) {
                    opts = mergeOpts(e.data.options, opts);
                }
                $target = opts.$target || $(e.currentTarget).trigger("blur");
                instance = $.fancybox.getInstance();
                if (instance && instance.$trigger && instance.$trigger.is($target)) {
                    return;
                }
                if (opts.selector) {
                    items = $(opts.selector);
                } else {
                    value = $target.attr("data-fancybox") || "";
                    if (value) {
                        items = e.data ? e.data.items : [];
                        items = items.length ? items.filter('[data-fancybox="' + value + '"]') : $('[data-fancybox="' + value + '"]');
                    } else {
                        items = [$target];
                    }
                }
                index = $(items).index($target);
                if (index < 0) {
                    index = 0;
                }
                instance = $.fancybox.open(items, opts, index);
                instance.$trigger = $target;
            }
            $.fn.fancybox = function(options) {
                var selector;
                options = options || {};
                selector = options.selector || false;
                if (selector) {
                    $("body").off("click.fb-start", selector).on("click.fb-start", selector, {
                        options: options
                    }, _run);
                } else {
                    this.off("click.fb-start").on("click.fb-start", {
                        items: this,
                        options: options
                    }, _run);
                }
                return this;
            };
            $D.on("click.fb-start", "[data-fancybox]", _run);
            $D.on("click.fb-start", "[data-fancybox-trigger]", function(e) {
                $('[data-fancybox="' + $(this).attr("data-fancybox-trigger") + '"]').eq($(this).attr("data-fancybox-index") || 0).trigger("click.fb-start", {
                    $trigger: $(this)
                });
            });
            (function() {
                var buttonStr = ".fancybox-button",
                    focusStr = "fancybox-focus",
                    $pressed = null;
                $D.on("mousedown mouseup focus blur", buttonStr, function(e) {
                    switch (e.type) {
                        case "mousedown":
                            $pressed = $(this);
                            break;
                        case "mouseup":
                            $pressed = null;
                            break;
                        case "focusin":
                            $(buttonStr).removeClass(focusStr);
                            if (!$(this).is($pressed) && !$(this).is("[disabled]")) {
                                $(this).addClass(focusStr);
                            }
                            break;
                        case "focusout":
                            $(buttonStr).removeClass(focusStr);
                            break;
                    }
                });
            })();
        })(window, document, jQuery);
        (function($) {
            "use strict";
            var defaults = {
                youtube: {
                    matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
                    params: {
                        autoplay: 1,
                        autohide: 1,
                        fs: 1,
                        rel: 0,
                        hd: 1,
                        wmode: "transparent",
                        enablejsapi: 1,
                        html5: 1
                    },
                    paramPlace: 8,
                    type: "iframe",
                    url: "https://www.youtube-nocookie.com/embed/$4",
                    thumb: "https://img.youtube.com/vi/$4/hqdefault.jpg"
                },
                vimeo: {
                    matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
                    params: {
                        autoplay: 1,
                        hd: 1,
                        show_title: 1,
                        show_byline: 1,
                        show_portrait: 0,
                        fullscreen: 1
                    },
                    paramPlace: 3,
                    type: "iframe",
                    url: "//player.vimeo.com/video/$2"
                },
                instagram: {
                    matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
                    type: "image",
                    url: "//$1/p/$2/media/?size=l"
                },
                gmap_place: {
                    matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
                    type: "iframe",
                    url: function(rez) {
                        return ("//maps.google." +
                            rez[2] + "/?ll=" +
                            (rez[9] ? rez[9] + "&z=" + Math.floor(rez[10]) + (rez[12] ? rez[12].replace(/^\//, "&") : "") : rez[12] + "").replace(/\?/, "&") + "&output=" +
                            (rez[12] && rez[12].indexOf("layer=c") > 0 ? "svembed" : "embed"));
                    }
                },
                gmap_search: {
                    matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
                    type: "iframe",
                    url: function(rez) {
                        return "//maps.google." + rez[2] + "/maps?q=" + rez[5].replace("query=", "q=").replace("api=1", "") + "&output=embed";
                    }
                }
            };
            var format = function(url, rez, params) {
                if (!url) {
                    return;
                }
                params = params || "";
                if ($.type(params) === "object") {
                    params = $.param(params, true);
                }
                $.each(rez, function(key, value) {
                    url = url.replace("$" + key, value || "");
                });
                if (params.length) {
                    url += (url.indexOf("?") > 0 ? "&" : "?") + params;
                }
                return url;
            };
            $(document).on("objectNeedsType.fb", function(e, instance, item) {
                var url = item.src || "",
                    type = false,
                    media, thumb, rez, params, urlParams, paramObj, provider;
                media = $.extend(true, {}, defaults, item.opts.media);
                $.each(media, function(providerName, providerOpts) {
                    rez = url.match(providerOpts.matcher);
                    if (!rez) {
                        return;
                    }
                    type = providerOpts.type;
                    provider = providerName;
                    paramObj = {};
                    if (providerOpts.paramPlace && rez[providerOpts.paramPlace]) {
                        urlParams = rez[providerOpts.paramPlace];
                        if (urlParams[0] == "?") {
                            urlParams = urlParams.substring(1);
                        }
                        urlParams = urlParams.split("&");
                        for (var m = 0; m < urlParams.length; ++m) {
                            var p = urlParams[m].split("=", 2);
                            if (p.length == 2) {
                                paramObj[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
                            }
                        }
                    }
                    params = $.extend(true, {}, providerOpts.params, item.opts[providerName], paramObj);
                    url = $.type(providerOpts.url) === "function" ? providerOpts.url.call(this, rez, params, item) : format(providerOpts.url, rez, params);
                    thumb = $.type(providerOpts.thumb) === "function" ? providerOpts.thumb.call(this, rez, params, item) : format(providerOpts.thumb, rez);
                    if (providerName === "youtube") {
                        url = url.replace(/&t=((\d+)m)?(\d+)s/, function(match, p1, m, s) {
                            return "&start=" + ((m ? parseInt(m, 10) * 60 : 0) + parseInt(s, 10));
                        });
                    } else if (providerName === "vimeo") {
                        url = url.replace("&%23", "#");
                    }
                    return false;
                });
                if (type) {
                    if (!item.opts.thumb && !(item.opts.$thumb && item.opts.$thumb.length)) {
                        item.opts.thumb = thumb;
                    }
                    if (type === "iframe") {
                        item.opts = $.extend(true, item.opts, {
                            iframe: {
                                preload: false,
                                attr: {
                                    scrolling: "no"
                                }
                            }
                        });
                    }
                    $.extend(item, {
                        type: type,
                        src: url,
                        origSrc: item.src,
                        contentSource: provider,
                        contentType: type === "image" ? "image" : provider == "gmap_place" || provider == "gmap_search" ? "map" : "video"
                    });
                } else if (url) {
                    item.type = item.opts.defaultType;
                }
            });
            var VideoAPILoader = {
                youtube: {
                    src: "https://www.youtube.com/iframe_api",
                    class: "YT",
                    loading: false,
                    loaded: false
                },
                vimeo: {
                    src: "https://player.vimeo.com/api/player.js",
                    class: "Vimeo",
                    loading: false,
                    loaded: false
                },
                load: function(vendor) {
                    var _this = this,
                        script;
                    if (this[vendor].loaded) {
                        setTimeout(function() {
                            _this.done(vendor);
                        });
                        return;
                    }
                    if (this[vendor].loading) {
                        return;
                    }
                    this[vendor].loading = true;
                    script = document.createElement("script");
                    script.type = "text/javascript";
                    script.src = this[vendor].src;
                    if (vendor === "youtube") {
                        window.onYouTubeIframeAPIReady = function() {
                            _this[vendor].loaded = true;
                            _this.done(vendor);
                        };
                    } else {
                        script.onload = function() {
                            _this[vendor].loaded = true;
                            _this.done(vendor);
                        };
                    }
                    document.body.appendChild(script);
                },
                done: function(vendor) {
                    var instance, $el, player;
                    if (vendor === "youtube") {
                        delete window.onYouTubeIframeAPIReady;
                    }
                    instance = $.fancybox.getInstance();
                    if (instance) {
                        $el = instance.current.$content.find("iframe");
                        if (vendor === "youtube" && YT !== undefined && YT) {
                            player = new YT.Player($el.attr("id"), {
                                events: {
                                    onStateChange: function(e) {
                                        if (e.data == 0) {
                                            instance.next();
                                        }
                                    }
                                }
                            });
                        } else if (vendor === "vimeo" && Vimeo !== undefined && Vimeo) {
                            player = new Vimeo.Player($el);
                            player.on("ended", function() {
                                instance.next();
                            });
                        }
                    }
                }
            };
            $(document).on({
                "afterShow.fb": function(e, instance, current) {
                    if (instance.group.length > 1 && (current.contentSource === "youtube" || current.contentSource === "vimeo")) {
                        VideoAPILoader.load(current.contentSource);
                    }
                }
            });
        })(jQuery);
        (function(window, document, $) {
            "use strict";
            var requestAFrame = (function() {
                return (window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || function(callback) {
                    return window.setTimeout(callback, 1000 / 60);
                });
            })();
            var cancelAFrame = (function() {
                return (window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || window.oCancelAnimationFrame || function(id) {
                    window.clearTimeout(id);
                });
            })();
            var getPointerXY = function(e) {
                var result = [];
                e = e.originalEvent || e || window.e;
                e = e.touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e];
                for (var key in e) {
                    if (e[key].pageX) {
                        result.push({
                            x: e[key].pageX,
                            y: e[key].pageY
                        });
                    } else if (e[key].clientX) {
                        result.push({
                            x: e[key].clientX,
                            y: e[key].clientY
                        });
                    }
                }
                return result;
            };
            var distance = function(point2, point1, what) {
                if (!point1 || !point2) {
                    return 0;
                }
                if (what === "x") {
                    return point2.x - point1.x;
                } else if (what === "y") {
                    return point2.y - point1.y;
                }
                return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
            };
            var isClickable = function($el) {
                if ($el.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio,iframe') || $.isFunction($el.get(0).onclick) || $el.data("selectable")) {
                    return true;
                }
                for (var i = 0, atts = $el[0].attributes, n = atts.length; i < n; i++) {
                    if (atts[i].nodeName.substr(0, 14) === "data-fancybox-") {
                        return true;
                    }
                }
                return false;
            };
            var hasScrollbars = function(el) {
                var overflowY = window.getComputedStyle(el)["overflow-y"],
                    overflowX = window.getComputedStyle(el)["overflow-x"],
                    vertical = (overflowY === "scroll" || overflowY === "auto") && el.scrollHeight > el.clientHeight,
                    horizontal = (overflowX === "scroll" || overflowX === "auto") && el.scrollWidth > el.clientWidth;
                return vertical || horizontal;
            };
            var isScrollable = function($el) {
                var rez = false;
                while (true) {
                    rez = hasScrollbars($el.get(0));
                    if (rez) {
                        break;
                    }
                    $el = $el.parent();
                    if (!$el.length || $el.hasClass("fancybox-stage") || $el.is("body")) {
                        break;
                    }
                }
                return rez;
            };
            var Guestures = function(instance) {
                var self = this;
                self.instance = instance;
                self.$bg = instance.$refs.bg;
                self.$stage = instance.$refs.stage;
                self.$container = instance.$refs.container;
                self.destroy();
                self.$container.on("touchstart.fb.touch mousedown.fb.touch", $.proxy(self, "ontouchstart"));
            };
            Guestures.prototype.destroy = function() {
                var self = this;
                self.$container.off(".fb.touch");
                $(document).off(".fb.touch");
                if (self.requestId) {
                    cancelAFrame(self.requestId);
                    self.requestId = null;
                }
                if (self.tapped) {
                    clearTimeout(self.tapped);
                    self.tapped = null;
                }
            };
            Guestures.prototype.ontouchstart = function(e) {
                var self = this,
                    $target = $(e.target),
                    instance = self.instance,
                    current = instance.current,
                    $slide = current.$slide,
                    $content = current.$content,
                    isTouchDevice = e.type == "touchstart";
                if (isTouchDevice) {
                    self.$container.off("mousedown.fb.touch");
                }
                if (e.originalEvent && e.originalEvent.button == 2) {
                    return;
                }
                if (!$slide.length || !$target.length || isClickable($target) || isClickable($target.parent())) {
                    return;
                }
                if (!$target.is("img") && e.originalEvent.clientX > $target[0].clientWidth + $target.offset().left) {
                    return;
                }
                if (!current || instance.isAnimating || current.$slide.hasClass("fancybox-animated")) {
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
                self.realPoints = self.startPoints = getPointerXY(e);
                if (!self.startPoints.length) {
                    return;
                }
                if (current.touch) {
                    e.stopPropagation();
                }
                self.startEvent = e;
                self.canTap = true;
                self.$target = $target;
                self.$content = $content;
                self.opts = current.opts.touch;
                self.isPanning = false;
                self.isSwiping = false;
                self.isZooming = false;
                self.isScrolling = false;
                self.canPan = instance.canPan();
                self.startTime = new Date().getTime();
                self.distanceX = self.distanceY = self.distance = 0;
                self.canvasWidth = Math.round($slide[0].clientWidth);
                self.canvasHeight = Math.round($slide[0].clientHeight);
                self.contentLastPos = null;
                self.contentStartPos = $.fancybox.getTranslate(self.$content) || {
                    top: 0,
                    left: 0
                };
                self.sliderStartPos = $.fancybox.getTranslate($slide);
                self.stagePos = $.fancybox.getTranslate(instance.$refs.stage);
                self.sliderStartPos.top -= self.stagePos.top;
                self.sliderStartPos.left -= self.stagePos.left;
                self.contentStartPos.top -= self.stagePos.top;
                self.contentStartPos.left -= self.stagePos.left;
                $(document).off(".fb.touch").on(isTouchDevice ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", $.proxy(self, "ontouchend")).on(isTouchDevice ? "touchmove.fb.touch" : "mousemove.fb.touch", $.proxy(self, "ontouchmove"));
                if ($.fancybox.isMobile) {
                    document.addEventListener("scroll", self.onscroll, true);
                }
                if (!(self.opts || self.canPan) || !($target.is(self.$stage) || self.$stage.find($target).length)) {
                    if ($target.is(".fancybox-image")) {
                        e.preventDefault();
                    }
                    if (!($.fancybox.isMobile && $target.parents(".fancybox-caption").length)) {
                        return;
                    }
                }
                self.isScrollable = isScrollable($target) || isScrollable($target.parent());
                if (!($.fancybox.isMobile && self.isScrollable)) {
                    e.preventDefault();
                }
                if (self.startPoints.length === 1 || current.hasError) {
                    if (self.canPan) {
                        $.fancybox.stop(self.$content);
                        self.isPanning = true;
                    } else {
                        self.isSwiping = true;
                    }
                    self.$container.addClass("fancybox-is-grabbing");
                }
                if (self.startPoints.length === 2 && current.type === "image" && (current.isLoaded || current.$ghost)) {
                    self.canTap = false;
                    self.isSwiping = false;
                    self.isPanning = false;
                    self.isZooming = true;
                    $.fancybox.stop(self.$content);
                    self.centerPointStartX = (self.startPoints[0].x + self.startPoints[1].x) * 0.5 - $(window).scrollLeft();
                    self.centerPointStartY = (self.startPoints[0].y + self.startPoints[1].y) * 0.5 - $(window).scrollTop();
                    self.percentageOfImageAtPinchPointX = (self.centerPointStartX - self.contentStartPos.left) / self.contentStartPos.width;
                    self.percentageOfImageAtPinchPointY = (self.centerPointStartY - self.contentStartPos.top) / self.contentStartPos.height;
                    self.startDistanceBetweenFingers = distance(self.startPoints[0], self.startPoints[1]);
                }
            };
            Guestures.prototype.onscroll = function(e) {
                var self = this;
                self.isScrolling = true;
                document.removeEventListener("scroll", self.onscroll, true);
            };
            Guestures.prototype.ontouchmove = function(e) {
                var self = this;
                if (e.originalEvent.buttons !== undefined && e.originalEvent.buttons === 0) {
                    self.ontouchend(e);
                    return;
                }
                if (self.isScrolling) {
                    self.canTap = false;
                    return;
                }
                self.newPoints = getPointerXY(e);
                if (!(self.opts || self.canPan) || !self.newPoints.length || !self.newPoints.length) {
                    return;
                }
                if (!(self.isSwiping && self.isSwiping === true)) {
                    e.preventDefault();
                }
                self.distanceX = distance(self.newPoints[0], self.startPoints[0], "x");
                self.distanceY = distance(self.newPoints[0], self.startPoints[0], "y");
                self.distance = distance(self.newPoints[0], self.startPoints[0]);
                if (self.distance > 0) {
                    if (self.isSwiping) {
                        self.onSwipe(e);
                    } else if (self.isPanning) {
                        self.onPan();
                    } else if (self.isZooming) {
                        self.onZoom();
                    }
                }
            };
            Guestures.prototype.onSwipe = function(e) {
                var self = this,
                    instance = self.instance,
                    swiping = self.isSwiping,
                    left = self.sliderStartPos.left || 0,
                    angle;
                if (swiping === true) {
                    if (Math.abs(self.distance) > 10) {
                        self.canTap = false;
                        if (instance.group.length < 2 && self.opts.vertical) {
                            self.isSwiping = "y";
                        } else if (instance.isDragging || self.opts.vertical === false || (self.opts.vertical === "auto" && $(window).width() > 800)) {
                            self.isSwiping = "x";
                        } else {
                            angle = Math.abs((Math.atan2(self.distanceY, self.distanceX) * 180) / Math.PI);
                            self.isSwiping = angle > 45 && angle < 135 ? "y" : "x";
                        }
                        if (self.isSwiping === "y" && $.fancybox.isMobile && self.isScrollable) {
                            self.isScrolling = true;
                            return;
                        }
                        instance.isDragging = self.isSwiping;
                        self.startPoints = self.newPoints;
                        $.each(instance.slides, function(index, slide) {
                            var slidePos, stagePos;
                            $.fancybox.stop(slide.$slide);
                            slidePos = $.fancybox.getTranslate(slide.$slide);
                            stagePos = $.fancybox.getTranslate(instance.$refs.stage);
                            slide.$slide.css({
                                transform: "",
                                opacity: "",
                                "transition-duration": ""
                            }).removeClass("fancybox-animated").removeClass(function(index, className) {
                                return (className.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ");
                            });
                            if (slide.pos === instance.current.pos) {
                                self.sliderStartPos.top = slidePos.top - stagePos.top;
                                self.sliderStartPos.left = slidePos.left - stagePos.left;
                            }
                            $.fancybox.setTranslate(slide.$slide, {
                                top: slidePos.top - stagePos.top,
                                left: slidePos.left - stagePos.left
                            });
                        });
                        if (instance.SlideShow && instance.SlideShow.isActive) {
                            instance.SlideShow.stop();
                        }
                    }
                    return;
                }
                if (swiping == "x") {
                    if (self.distanceX > 0 && (self.instance.group.length < 2 || (self.instance.current.index === 0 && !self.instance.current.opts.loop))) {
                        left = left + Math.pow(self.distanceX, 0.8);
                    } else if (self.distanceX < 0 && (self.instance.group.length < 2 || (self.instance.current.index === self.instance.group.length - 1 && !self.instance.current.opts.loop))) {
                        left = left - Math.pow(-self.distanceX, 0.8);
                    } else {
                        left = left + self.distanceX;
                    }
                }
                self.sliderLastPos = {
                    top: swiping == "x" ? 0 : self.sliderStartPos.top + self.distanceY,
                    left: left
                };
                if (self.requestId) {
                    cancelAFrame(self.requestId);
                    self.requestId = null;
                }
                self.requestId = requestAFrame(function() {
                    if (self.sliderLastPos) {
                        $.each(self.instance.slides, function(index, slide) {
                            var pos = slide.pos - self.instance.currPos;
                            $.fancybox.setTranslate(slide.$slide, {
                                top: self.sliderLastPos.top,
                                left: self.sliderLastPos.left + pos * self.canvasWidth + pos * slide.opts.gutter
                            });
                        });
                        self.$container.addClass("fancybox-is-sliding");
                    }
                });
            };
            Guestures.prototype.onPan = function() {
                var self = this;
                if (distance(self.newPoints[0], self.realPoints[0]) < ($.fancybox.isMobile ? 10 : 5)) {
                    self.startPoints = self.newPoints;
                    return;
                }
                self.canTap = false;
                self.contentLastPos = self.limitMovement();
                if (self.requestId) {
                    cancelAFrame(self.requestId);
                }
                self.requestId = requestAFrame(function() {
                    $.fancybox.setTranslate(self.$content, self.contentLastPos);
                });
            };
            Guestures.prototype.limitMovement = function() {
                var self = this;
                var canvasWidth = self.canvasWidth;
                var canvasHeight = self.canvasHeight;
                var distanceX = self.distanceX;
                var distanceY = self.distanceY;
                var contentStartPos = self.contentStartPos;
                var currentOffsetX = contentStartPos.left;
                var currentOffsetY = contentStartPos.top;
                var currentWidth = contentStartPos.width;
                var currentHeight = contentStartPos.height;
                var minTranslateX, minTranslateY, maxTranslateX, maxTranslateY, newOffsetX, newOffsetY;
                if (currentWidth > canvasWidth) {
                    newOffsetX = currentOffsetX + distanceX;
                } else {
                    newOffsetX = currentOffsetX;
                }
                newOffsetY = currentOffsetY + distanceY;
                minTranslateX = Math.max(0, canvasWidth * 0.5 - currentWidth * 0.5);
                minTranslateY = Math.max(0, canvasHeight * 0.5 - currentHeight * 0.5);
                maxTranslateX = Math.min(canvasWidth - currentWidth, canvasWidth * 0.5 - currentWidth * 0.5);
                maxTranslateY = Math.min(canvasHeight - currentHeight, canvasHeight * 0.5 - currentHeight * 0.5);
                if (distanceX > 0 && newOffsetX > minTranslateX) {
                    newOffsetX = minTranslateX - 1 + Math.pow(-minTranslateX + currentOffsetX + distanceX, 0.8) || 0;
                }
                if (distanceX < 0 && newOffsetX < maxTranslateX) {
                    newOffsetX = maxTranslateX + 1 - Math.pow(maxTranslateX - currentOffsetX - distanceX, 0.8) || 0;
                }
                if (distanceY > 0 && newOffsetY > minTranslateY) {
                    newOffsetY = minTranslateY - 1 + Math.pow(-minTranslateY + currentOffsetY + distanceY, 0.8) || 0;
                }
                if (distanceY < 0 && newOffsetY < maxTranslateY) {
                    newOffsetY = maxTranslateY + 1 - Math.pow(maxTranslateY - currentOffsetY - distanceY, 0.8) || 0;
                }
                return {
                    top: newOffsetY,
                    left: newOffsetX
                };
            };
            Guestures.prototype.limitPosition = function(newOffsetX, newOffsetY, newWidth, newHeight) {
                var self = this;
                var canvasWidth = self.canvasWidth;
                var canvasHeight = self.canvasHeight;
                if (newWidth > canvasWidth) {
                    newOffsetX = newOffsetX > 0 ? 0 : newOffsetX;
                    newOffsetX = newOffsetX < canvasWidth - newWidth ? canvasWidth - newWidth : newOffsetX;
                } else {
                    newOffsetX = Math.max(0, canvasWidth / 2 - newWidth / 2);
                }
                if (newHeight > canvasHeight) {
                    newOffsetY = newOffsetY > 0 ? 0 : newOffsetY;
                    newOffsetY = newOffsetY < canvasHeight - newHeight ? canvasHeight - newHeight : newOffsetY;
                } else {
                    newOffsetY = Math.max(0, canvasHeight / 2 - newHeight / 2);
                }
                return {
                    top: newOffsetY,
                    left: newOffsetX
                };
            };
            Guestures.prototype.onZoom = function() {
                var self = this;
                var contentStartPos = self.contentStartPos;
                var currentWidth = contentStartPos.width;
                var currentHeight = contentStartPos.height;
                var currentOffsetX = contentStartPos.left;
                var currentOffsetY = contentStartPos.top;
                var endDistanceBetweenFingers = distance(self.newPoints[0], self.newPoints[1]);
                var pinchRatio = endDistanceBetweenFingers / self.startDistanceBetweenFingers;
                var newWidth = Math.floor(currentWidth * pinchRatio);
                var newHeight = Math.floor(currentHeight * pinchRatio);
                var translateFromZoomingX = (currentWidth - newWidth) * self.percentageOfImageAtPinchPointX;
                var translateFromZoomingY = (currentHeight - newHeight) * self.percentageOfImageAtPinchPointY;
                var centerPointEndX = (self.newPoints[0].x + self.newPoints[1].x) / 2 - $(window).scrollLeft();
                var centerPointEndY = (self.newPoints[0].y + self.newPoints[1].y) / 2 - $(window).scrollTop();
                var translateFromTranslatingX = centerPointEndX - self.centerPointStartX;
                var translateFromTranslatingY = centerPointEndY - self.centerPointStartY;
                var newOffsetX = currentOffsetX + (translateFromZoomingX + translateFromTranslatingX);
                var newOffsetY = currentOffsetY + (translateFromZoomingY + translateFromTranslatingY);
                var newPos = {
                    top: newOffsetY,
                    left: newOffsetX,
                    scaleX: pinchRatio,
                    scaleY: pinchRatio
                };
                self.canTap = false;
                self.newWidth = newWidth;
                self.newHeight = newHeight;
                self.contentLastPos = newPos;
                if (self.requestId) {
                    cancelAFrame(self.requestId);
                }
                self.requestId = requestAFrame(function() {
                    $.fancybox.setTranslate(self.$content, self.contentLastPos);
                });
            };
            Guestures.prototype.ontouchend = function(e) {
                var self = this;
                var swiping = self.isSwiping;
                var panning = self.isPanning;
                var zooming = self.isZooming;
                var scrolling = self.isScrolling;
                self.endPoints = getPointerXY(e);
                self.dMs = Math.max(new Date().getTime() - self.startTime, 1);
                self.$container.removeClass("fancybox-is-grabbing");
                $(document).off(".fb.touch");
                document.removeEventListener("scroll", self.onscroll, true);
                if (self.requestId) {
                    cancelAFrame(self.requestId);
                    self.requestId = null;
                }
                self.isSwiping = false;
                self.isPanning = false;
                self.isZooming = false;
                self.isScrolling = false;
                self.instance.isDragging = false;
                if (self.canTap) {
                    return self.onTap(e);
                }
                self.speed = 100;
                self.velocityX = (self.distanceX / self.dMs) * 0.5;
                self.velocityY = (self.distanceY / self.dMs) * 0.5;
                if (panning) {
                    self.endPanning();
                } else if (zooming) {
                    self.endZooming();
                } else {
                    self.endSwiping(swiping, scrolling);
                }
                return;
            };
            Guestures.prototype.endSwiping = function(swiping, scrolling) {
                var self = this,
                    ret = false,
                    len = self.instance.group.length,
                    distanceX = Math.abs(self.distanceX),
                    canAdvance = swiping == "x" && len > 1 && ((self.dMs > 130 && distanceX > 10) || distanceX > 50),
                    speedX = 300;
                self.sliderLastPos = null;
                if (swiping == "y" && !scrolling && Math.abs(self.distanceY) > 50) {
                    $.fancybox.animate(self.instance.current.$slide, {
                        top: self.sliderStartPos.top + self.distanceY + self.velocityY * 150,
                        opacity: 0
                    }, 200);
                    ret = self.instance.close(true, 250);
                } else if (canAdvance && self.distanceX > 0) {
                    ret = self.instance.previous(speedX);
                } else if (canAdvance && self.distanceX < 0) {
                    ret = self.instance.next(speedX);
                }
                if (ret === false && (swiping == "x" || swiping == "y")) {
                    self.instance.centerSlide(200);
                }
                self.$container.removeClass("fancybox-is-sliding");
            };
            Guestures.prototype.endPanning = function() {
                var self = this,
                    newOffsetX, newOffsetY, newPos;
                if (!self.contentLastPos) {
                    return;
                }
                if (self.opts.momentum === false || self.dMs > 350) {
                    newOffsetX = self.contentLastPos.left;
                    newOffsetY = self.contentLastPos.top;
                } else {
                    newOffsetX = self.contentLastPos.left + self.velocityX * 500;
                    newOffsetY = self.contentLastPos.top + self.velocityY * 500;
                }
                newPos = self.limitPosition(newOffsetX, newOffsetY, self.contentStartPos.width, self.contentStartPos.height);
                newPos.width = self.contentStartPos.width;
                newPos.height = self.contentStartPos.height;
                $.fancybox.animate(self.$content, newPos, 366);
            };
            Guestures.prototype.endZooming = function() {
                var self = this;
                var current = self.instance.current;
                var newOffsetX, newOffsetY, newPos, reset;
                var newWidth = self.newWidth;
                var newHeight = self.newHeight;
                if (!self.contentLastPos) {
                    return;
                }
                newOffsetX = self.contentLastPos.left;
                newOffsetY = self.contentLastPos.top;
                reset = {
                    top: newOffsetY,
                    left: newOffsetX,
                    width: newWidth,
                    height: newHeight,
                    scaleX: 1,
                    scaleY: 1
                };
                $.fancybox.setTranslate(self.$content, reset);
                if (newWidth < self.canvasWidth && newHeight < self.canvasHeight) {
                    self.instance.scaleToFit(150);
                } else if (newWidth > current.width || newHeight > current.height) {
                    self.instance.scaleToActual(self.centerPointStartX, self.centerPointStartY, 150);
                } else {
                    newPos = self.limitPosition(newOffsetX, newOffsetY, newWidth, newHeight);
                    $.fancybox.animate(self.$content, newPos, 150);
                }
            };
            Guestures.prototype.onTap = function(e) {
                var self = this;
                var $target = $(e.target);
                var instance = self.instance;
                var current = instance.current;
                var endPoints = (e && getPointerXY(e)) || self.startPoints;
                var tapX = endPoints[0] ? endPoints[0].x - $(window).scrollLeft() - self.stagePos.left : 0;
                var tapY = endPoints[0] ? endPoints[0].y - $(window).scrollTop() - self.stagePos.top : 0;
                var where;
                var process = function(prefix) {
                    var action = current.opts[prefix];
                    if ($.isFunction(action)) {
                        action = action.apply(instance, [current, e]);
                    }
                    if (!action) {
                        return;
                    }
                    switch (action) {
                        case "close":
                            instance.close(self.startEvent);
                            break;
                        case "toggleControls":
                            instance.toggleControls();
                            break;
                        case "next":
                            instance.next();
                            break;
                        case "nextOrClose":
                            if (instance.group.length > 1) {
                                instance.next();
                            } else {
                                instance.close(self.startEvent);
                            }
                            break;
                        case "zoom":
                            if (current.type == "image" && (current.isLoaded || current.$ghost)) {
                                if (instance.canPan()) {
                                    instance.scaleToFit();
                                } else if (instance.isScaledDown()) {
                                    instance.scaleToActual(tapX, tapY);
                                } else if (instance.group.length < 2) {
                                    instance.close(self.startEvent);
                                }
                            }
                            break;
                    }
                };
                if (e.originalEvent && e.originalEvent.button == 2) {
                    return;
                }
                if (!$target.is("img") && tapX > $target[0].clientWidth + $target.offset().left) {
                    return;
                }
                if ($target.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container")) {
                    where = "Outside";
                } else if ($target.is(".fancybox-slide")) {
                    where = "Slide";
                } else if (instance.current.$content && instance.current.$content.find($target).addBack().filter($target).length) {
                    where = "Content";
                } else {
                    return;
                }
                if (self.tapped) {
                    clearTimeout(self.tapped);
                    self.tapped = null;
                    if (Math.abs(tapX - self.tapX) > 50 || Math.abs(tapY - self.tapY) > 50) {
                        return this;
                    }
                    process("dblclick" + where);
                } else {
                    self.tapX = tapX;
                    self.tapY = tapY;
                    if (current.opts["dblclick" + where] && current.opts["dblclick" + where] !== current.opts["click" + where]) {
                        self.tapped = setTimeout(function() {
                            self.tapped = null;
                            if (!instance.isAnimating) {
                                process("click" + where);
                            }
                        }, 500);
                    } else {
                        process("click" + where);
                    }
                }
                return this;
            };
            $(document).on("onActivate.fb", function(e, instance) {
                if (instance && !instance.Guestures) {
                    instance.Guestures = new Guestures(instance);
                }
            }).on("beforeClose.fb", function(e, instance) {
                if (instance && instance.Guestures) {
                    instance.Guestures.destroy();
                }
            });
        })(window, document, jQuery);
        (function(document, $) {
            "use strict";
            $.extend(true, $.fancybox.defaults, {
                btnTpl: {
                    slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/></svg>' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/></svg>' + "</button>"
                },
                slideShow: {
                    autoStart: false,
                    speed: 3000,
                    progress: true
                }
            });
            var SlideShow = function(instance) {
                this.instance = instance;
                this.init();
            };
            $.extend(SlideShow.prototype, {
                timer: null,
                isActive: false,
                $button: null,
                init: function() {
                    var self = this,
                        instance = self.instance,
                        opts = instance.group[instance.currIndex].opts.slideShow;
                    self.$button = instance.$refs.toolbar.find("[data-fancybox-play]").on("click", function() {
                        self.toggle();
                    });
                    if (instance.group.length < 2 || !opts) {
                        self.$button.hide();
                    } else if (opts.progress) {
                        self.$progress = $('<div class="fancybox-progress"></div>').appendTo(instance.$refs.inner);
                    }
                },
                set: function(force) {
                    var self = this,
                        instance = self.instance,
                        current = instance.current;
                    if (current && (force === true || current.opts.loop || instance.currIndex < instance.group.length - 1)) {
                        if (self.isActive && current.contentType !== "video") {
                            if (self.$progress) {
                                $.fancybox.animate(self.$progress.show(), {
                                    scaleX: 1
                                }, current.opts.slideShow.speed);
                            }
                            self.timer = setTimeout(function() {
                                if (!instance.current.opts.loop && instance.current.index == instance.group.length - 1) {
                                    instance.jumpTo(0);
                                } else {
                                    instance.next();
                                }
                            }, current.opts.slideShow.speed);
                        }
                    } else {
                        self.stop();
                        instance.idleSecondsCounter = 0;
                        instance.showControls();
                    }
                },
                clear: function() {
                    var self = this;
                    clearTimeout(self.timer);
                    self.timer = null;
                    if (self.$progress) {
                        self.$progress.removeAttr("style").hide();
                    }
                },
                start: function() {
                    var self = this,
                        current = self.instance.current;
                    if (current) {
                        self.$button.attr("title", (current.opts.i18n[current.opts.lang] || current.opts.i18n.en).PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause");
                        self.isActive = true;
                        if (current.isComplete) {
                            self.set(true);
                        }
                        self.instance.trigger("onSlideShowChange", true);
                    }
                },
                stop: function() {
                    var self = this,
                        current = self.instance.current;
                    self.clear();
                    self.$button.attr("title", (current.opts.i18n[current.opts.lang] || current.opts.i18n.en).PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play");
                    self.isActive = false;
                    self.instance.trigger("onSlideShowChange", false);
                    if (self.$progress) {
                        self.$progress.removeAttr("style").hide();
                    }
                },
                toggle: function() {
                    var self = this;
                    if (self.isActive) {
                        self.stop();
                    } else {
                        self.start();
                    }
                }
            });
            $(document).on({
                "onInit.fb": function(e, instance) {
                    if (instance && !instance.SlideShow) {
                        instance.SlideShow = new SlideShow(instance);
                    }
                },
                "beforeShow.fb": function(e, instance, current, firstRun) {
                    var SlideShow = instance && instance.SlideShow;
                    if (firstRun) {
                        if (SlideShow && current.opts.slideShow.autoStart) {
                            SlideShow.start();
                        }
                    } else if (SlideShow && SlideShow.isActive) {
                        SlideShow.clear();
                    }
                },
                "afterShow.fb": function(e, instance, current) {
                    var SlideShow = instance && instance.SlideShow;
                    if (SlideShow && SlideShow.isActive) {
                        SlideShow.set();
                    }
                },
                "afterKeydown.fb": function(e, instance, current, keypress, keycode) {
                    var SlideShow = instance && instance.SlideShow;
                    if (SlideShow && current.opts.slideShow && (keycode === 80 || keycode === 32) && !$(document.activeElement).is("button,a,input")) {
                        keypress.preventDefault();
                        SlideShow.toggle();
                    }
                },
                "beforeClose.fb onDeactivate.fb": function(e, instance) {
                    var SlideShow = instance && instance.SlideShow;
                    if (SlideShow) {
                        SlideShow.stop();
                    }
                }
            });
            $(document).on("visibilitychange", function() {
                var instance = $.fancybox.getInstance(),
                    SlideShow = instance && instance.SlideShow;
                if (SlideShow && SlideShow.isActive) {
                    if (document.hidden) {
                        SlideShow.clear();
                    } else {
                        SlideShow.set();
                    }
                }
            });
        })(document, jQuery);
        (function(document, $) {
            "use strict";
            var fn = (function() {
                var fnMap = [
                    ["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
                    ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
                    ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
                    ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"],
                    ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]
                ];
                var ret = {};
                for (var i = 0; i < fnMap.length; i++) {
                    var val = fnMap[i];
                    if (val && val[1] in document) {
                        for (var j = 0; j < val.length; j++) {
                            ret[fnMap[0][j]] = val[j];
                        }
                        return ret;
                    }
                }
                return false;
            })();
            if (fn) {
                var FullScreen = {
                    request: function(elem) {
                        elem = elem || document.documentElement;
                        elem[fn.requestFullscreen](elem.ALLOW_KEYBOARD_INPUT);
                    },
                    exit: function() {
                        document[fn.exitFullscreen]();
                    },
                    toggle: function(elem) {
                        elem = elem || document.documentElement;
                        if (this.isFullscreen()) {
                            this.exit();
                        } else {
                            this.request(elem);
                        }
                    },
                    isFullscreen: function() {
                        return Boolean(document[fn.fullscreenElement]);
                    },
                    enabled: function() {
                        return Boolean(document[fn.fullscreenEnabled]);
                    }
                };
                $.extend(true, $.fancybox.defaults, {
                    btnTpl: {
                        fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/></svg>' + "</button>"
                    },
                    fullScreen: {
                        autoStart: false
                    }
                });
                $(document).on(fn.fullscreenchange, function() {
                    var isFullscreen = FullScreen.isFullscreen(),
                        instance = $.fancybox.getInstance();
                    if (instance) {
                        if (instance.current && instance.current.type === "image" && instance.isAnimating) {
                            instance.isAnimating = false;
                            instance.update(true, true, 0);
                            if (!instance.isComplete) {
                                instance.complete();
                            }
                        }
                        instance.trigger("onFullscreenChange", isFullscreen);
                        instance.$refs.container.toggleClass("fancybox-is-fullscreen", isFullscreen);
                        instance.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter", !isFullscreen).toggleClass("fancybox-button--fsexit", isFullscreen);
                    }
                });
            }
            $(document).on({
                "onInit.fb": function(e, instance) {
                    var $container;
                    if (!fn) {
                        instance.$refs.toolbar.find("[data-fancybox-fullscreen]").remove();
                        return;
                    }
                    if (instance && instance.group[instance.currIndex].opts.fullScreen) {
                        $container = instance.$refs.container;
                        $container.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function(e) {
                            e.stopPropagation();
                            e.preventDefault();
                            FullScreen.toggle();
                        });
                        if (instance.opts.fullScreen && instance.opts.fullScreen.autoStart === true) {
                            FullScreen.request();
                        }
                        instance.FullScreen = FullScreen;
                    } else if (instance) {
                        instance.$refs.toolbar.find("[data-fancybox-fullscreen]").hide();
                    }
                },
                "afterKeydown.fb": function(e, instance, current, keypress, keycode) {
                    if (instance && instance.FullScreen && keycode === 70) {
                        keypress.preventDefault();
                        instance.FullScreen.toggle();
                    }
                },
                "beforeClose.fb": function(e, instance) {
                    if (instance && instance.FullScreen && instance.$refs.container.hasClass("fancybox-is-fullscreen")) {
                        FullScreen.exit();
                    }
                }
            });
        })(document, jQuery);
        (function(document, $) {
            "use strict";
            var CLASS = "fancybox-thumbs",
                CLASS_ACTIVE = CLASS + "-active";
            $.fancybox.defaults = $.extend(true, {
                btnTpl: {
                    thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/></svg>' + "</button>"
                },
                thumbs: {
                    autoStart: false,
                    hideOnClose: true,
                    parentEl: ".fancybox-container",
                    axis: "y"
                }
            }, $.fancybox.defaults);
            var FancyThumbs = function(instance) {
                this.init(instance);
            };
            $.extend(FancyThumbs.prototype, {
                $button: null,
                $grid: null,
                $list: null,
                isVisible: false,
                isActive: false,
                init: function(instance) {
                    var self = this,
                        group = instance.group,
                        enabled = 0;
                    self.instance = instance;
                    self.opts = group[instance.currIndex].opts.thumbs;
                    instance.Thumbs = self;
                    self.$button = instance.$refs.toolbar.find("[data-fancybox-thumbs]");
                    for (var i = 0, len = group.length; i < len; i++) {
                        if (group[i].thumb) {
                            enabled++;
                        }
                        if (enabled > 1) {
                            break;
                        }
                    }
                    if (enabled > 1 && !!self.opts) {
                        self.$button.removeAttr("style").on("click", function() {
                            self.toggle();
                        });
                        self.isActive = true;
                    } else {
                        self.$button.hide();
                    }
                },
                create: function() {
                    var self = this,
                        instance = self.instance,
                        parentEl = self.opts.parentEl,
                        list = [],
                        src;
                    if (!self.$grid) {
                        self.$grid = $('<div class="' + CLASS + " " + CLASS + "-" + self.opts.axis + '"></div>').appendTo(instance.$refs.container.find(parentEl).addBack().filter(parentEl));
                        self.$grid.on("click", "a", function() {
                            instance.jumpTo($(this).attr("data-index"));
                        });
                    }
                    if (!self.$list) {
                        self.$list = $('<div class="' + CLASS + '__list">').appendTo(self.$grid);
                    }
                    $.each(instance.group, function(i, item) {
                        src = item.thumb;
                        if (!src && item.type === "image") {
                            src = item.src;
                        }
                        list.push('<a href="javascript:;" tabindex="0" data-index="' +
                            i + '"' +
                            (src && src.length ? ' style="background-image:url(' + src + ')"' : 'class="fancybox-thumbs-missing"') + "></a>");
                    });
                    self.$list[0].innerHTML = list.join("");
                    if (self.opts.axis === "x") {
                        self.$list.width(parseInt(self.$grid.css("padding-right"), 10) +
                            instance.group.length * self.$list.children().eq(0).outerWidth(true));
                    }
                },
                focus: function(duration) {
                    var self = this,
                        $list = self.$list,
                        $grid = self.$grid,
                        thumb, thumbPos;
                    if (!self.instance.current) {
                        return;
                    }
                    thumb = $list.children().removeClass(CLASS_ACTIVE).filter('[data-index="' + self.instance.current.index + '"]').addClass(CLASS_ACTIVE);
                    thumbPos = thumb.position();
                    if (self.opts.axis === "y" && (thumbPos.top < 0 || thumbPos.top > $list.height() - thumb.outerHeight())) {
                        $list.stop().animate({
                            scrollTop: $list.scrollTop() + thumbPos.top
                        }, duration);
                    } else if (self.opts.axis === "x" && (thumbPos.left < $grid.scrollLeft() || thumbPos.left > $grid.scrollLeft() + ($grid.width() - thumb.outerWidth()))) {
                        $list.parent().stop().animate({
                            scrollLeft: thumbPos.left
                        }, duration);
                    }
                },
                update: function() {
                    var that = this;
                    that.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible);
                    if (that.isVisible) {
                        if (!that.$grid) {
                            that.create();
                        }
                        that.instance.trigger("onThumbsShow");
                        that.focus(0);
                    } else if (that.$grid) {
                        that.instance.trigger("onThumbsHide");
                    }
                    that.instance.update();
                },
                hide: function() {
                    this.isVisible = false;
                    this.update();
                },
                show: function() {
                    this.isVisible = true;
                    this.update();
                },
                toggle: function() {
                    this.isVisible = !this.isVisible;
                    this.update();
                }
            });
            $(document).on({
                "onInit.fb": function(e, instance) {
                    var Thumbs;
                    if (instance && !instance.Thumbs) {
                        Thumbs = new FancyThumbs(instance);
                        if (Thumbs.isActive && Thumbs.opts.autoStart === true) {
                            Thumbs.show();
                        }
                    }
                },
                "beforeShow.fb": function(e, instance, item, firstRun) {
                    var Thumbs = instance && instance.Thumbs;
                    if (Thumbs && Thumbs.isVisible) {
                        Thumbs.focus(firstRun ? 0 : 250);
                    }
                },
                "afterKeydown.fb": function(e, instance, current, keypress, keycode) {
                    var Thumbs = instance && instance.Thumbs;
                    if (Thumbs && Thumbs.isActive && keycode === 71) {
                        keypress.preventDefault();
                        Thumbs.toggle();
                    }
                },
                "beforeClose.fb": function(e, instance) {
                    var Thumbs = instance && instance.Thumbs;
                    if (Thumbs && Thumbs.isVisible && Thumbs.opts.hideOnClose !== false) {
                        Thumbs.$grid.hide();
                    }
                }
            });
        })(document, jQuery);
        (function(document, $) {
            "use strict";
            $.extend(true, $.fancybox.defaults, {
                btnTpl: {
                    share: '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/></svg>' + "</button>"
                },
                share: {
                    url: function(instance, item) {
                        return ((!instance.currentHash && !(item.type === "inline" || item.type === "html") ? item.origSrc || item.src : false) || window.location);
                    },
                    tpl: '<div class="fancybox-share">' + "<h1>{{SHARE}}</h1>" + "<p>" + '<a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}">' + '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg>' + "<span>Facebook</span>" + "</a>" + '<a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}">' + '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg>' + "<span>Twitter</span>" + "</a>" + '<a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}">' + '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg>' + "<span>Pinterest</span>" + "</a>" + "</p>" + '<p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /></p>' + "</div>"
                }
            });

            function escapeHtml(string) {
                var entityMap = {
                    "&": "&amp;",
                    "<": "&lt;",
                    ">": "&gt;",
                    '"': "&quot;",
                    "'": "&#39;",
                    "/": "&#x2F;",
                    "`": "&#x60;",
                    "=": "&#x3D;"
                };
                return String(string).replace(/[&<>"'`=\/]/g, function(s) {
                    return entityMap[s];
                });
            }
            $(document).on("click", "[data-fancybox-share]", function() {
                var instance = $.fancybox.getInstance(),
                    current = instance.current || null,
                    url, tpl;
                if (!current) {
                    return;
                }
                if ($.type(current.opts.share.url) === "function") {
                    url = current.opts.share.url.apply(current, [instance, current]);
                }
                tpl = current.opts.share.tpl.replace(/\{\{media\}\}/g, current.type === "image" ? encodeURIComponent(current.src) : "").replace(/\{\{url\}\}/g, encodeURIComponent(url)).replace(/\{\{url_raw\}\}/g, escapeHtml(url)).replace(/\{\{descr\}\}/g, instance.$caption ? encodeURIComponent(instance.$caption.text()) : "");
                $.fancybox.open({
                    src: instance.translate(instance, tpl),
                    type: "html",
                    opts: {
                        touch: false,
                        animationEffect: false,
                        afterLoad: function(shareInstance, shareCurrent) {
                            instance.$refs.container.one("beforeClose.fb", function() {
                                shareInstance.close(null, 0);
                            });
                            shareCurrent.$content.find(".fancybox-share__button").click(function() {
                                window.open(this.href, "Share", "width=550, height=450");
                                return false;
                            });
                        },
                        mobile: {
                            autoFocus: false
                        }
                    }
                });
            });
        })(document, jQuery);
        (function(window, document, $) {
            "use strict";
            if (!$.escapeSelector) {
                $.escapeSelector = function(sel) {
                    var rcssescape = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g;
                    var fcssescape = function(ch, asCodePoint) {
                        if (asCodePoint) {
                            if (ch === "\0") {
                                return "\uFFFD";
                            }
                            return ch.slice(0, -1) + "\\" + ch.charCodeAt(ch.length - 1).toString(16) + " ";
                        }
                        return "\\" + ch;
                    };
                    return (sel + "").replace(rcssescape, fcssescape);
                };
            }

            function parseUrl() {
                var hash = window.location.hash.substr(1),
                    rez = hash.split("-"),
                    index = rez.length > 1 && /^\+?\d+$/.test(rez[rez.length - 1]) ? parseInt(rez.pop(-1), 10) || 1 : 1,
                    gallery = rez.join("-");
                return {
                    hash: hash,
                    index: index < 1 ? 1 : index,
                    gallery: gallery
                };
            }

            function triggerFromUrl(url) {
                if (url.gallery !== "") {
                    $("[data-fancybox='" + $.escapeSelector(url.gallery) + "']").eq(url.index - 1).focus().trigger("click.fb-start");
                }
            }

            function getGalleryID(instance) {
                var opts, ret;
                if (!instance) {
                    return false;
                }
                opts = instance.current ? instance.current.opts : instance.opts;
                ret = opts.hash || (opts.$orig ? opts.$orig.data("fancybox") || opts.$orig.data("fancybox-trigger") : "");
                return ret === "" ? false : ret;
            }
            $(function() {
                if ($.fancybox.defaults.hash === false) {
                    return;
                }
                $(document).on({
                    "onInit.fb": function(e, instance) {
                        var url, gallery;
                        if (instance.group[instance.currIndex].opts.hash === false) {
                            return;
                        }
                        url = parseUrl();
                        gallery = getGalleryID(instance);
                        if (gallery && url.gallery && gallery == url.gallery) {
                            instance.currIndex = url.index - 1;
                        }
                    },
                    "beforeShow.fb": function(e, instance, current, firstRun) {
                        var gallery;
                        if (!current || current.opts.hash === false) {
                            return;
                        }
                        gallery = getGalleryID(instance);
                        if (!gallery) {
                            return;
                        }
                        instance.currentHash = gallery + (instance.group.length > 1 ? "-" + (current.index + 1) : "");
                        if (window.location.hash === "#" + instance.currentHash) {
                            return;
                        }
                        if (firstRun && !instance.origHash) {
                            instance.origHash = window.location.hash;
                        }
                        if (instance.hashTimer) {
                            clearTimeout(instance.hashTimer);
                        }
                        instance.hashTimer = setTimeout(function() {
                            if ("replaceState" in window.history) {
                                window.history[firstRun ? "pushState" : "replaceState"]({}, document.title, window.location.pathname + window.location.search + "#" + instance.currentHash);
                                if (firstRun) {
                                    instance.hasCreatedHistory = true;
                                }
                            } else {
                                window.location.hash = instance.currentHash;
                            }
                            instance.hashTimer = null;
                        }, 300);
                    },
                    "beforeClose.fb": function(e, instance, current) {
                        if (!current || current.opts.hash === false) {
                            return;
                        }
                        clearTimeout(instance.hashTimer);
                        if (instance.currentHash && instance.hasCreatedHistory) {
                            window.history.back();
                        } else if (instance.currentHash) {
                            if ("replaceState" in window.history) {
                                window.history.replaceState({}, document.title, window.location.pathname + window.location.search + (instance.origHash || ""));
                            } else {
                                window.location.hash = instance.origHash;
                            }
                        }
                        instance.currentHash = null;
                    }
                });
                $(window).on("hashchange.fb", function() {
                    var url = parseUrl(),
                        fb = null;
                    $.each($(".fancybox-container").get().reverse(), function(index, value) {
                        var tmp = $(value).data("FancyBox");
                        if (tmp && tmp.currentHash) {
                            fb = tmp;
                            return false;
                        }
                    });
                    if (fb) {
                        if (fb.currentHash !== url.gallery + "-" + url.index && !(url.index === 1 && fb.currentHash == url.gallery)) {
                            fb.currentHash = null;
                            fb.close();
                        }
                    } else if (url.gallery !== "") {
                        triggerFromUrl(url);
                    }
                });
                setTimeout(function() {
                    if (!$.fancybox.getInstance()) {
                        triggerFromUrl(parseUrl());
                    }
                }, 50);
            });
        })(window, document, jQuery);
        (function(document, $) {
            "use strict";
            var prevTime = new Date().getTime();
            $(document).on({
                "onInit.fb": function(e, instance, current) {
                    instance.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function(e) {
                        var current = instance.current,
                            currTime = new Date().getTime();
                        if (instance.group.length < 2 || current.opts.wheel === false || (current.opts.wheel === "auto" && current.type !== "image")) {
                            return;
                        }
                        e.preventDefault();
                        e.stopPropagation();
                        if (current.$slide.hasClass("fancybox-animated")) {
                            return;
                        }
                        e = e.originalEvent || e;
                        if (currTime - prevTime < 250) {
                            return;
                        }
                        prevTime = currTime;
                        instance[(-e.deltaY || -e.deltaX || e.wheelDelta || -e.detail) < 0 ? "next" : "previous"]();
                    });
                }
            });
        })(document, jQuery);
        /*jquery.validate_vi.js*/

        (function($) {
            $.extend($.fn, {
                validate: function(options) {
                    if (!this.length) {
                        options && options.debug && window.console && console.warn("nothing selected, can't validate, returning nothing");
                        return;
                    }
                    var validator = $.data(this[0], 'validator');
                    if (validator) {
                        return validator;
                    }
                    validator = new $.validator(options, this[0]);
                    $.data(this[0], 'validator', validator);
                    if (validator.settings.onsubmit) {
                        this.find("input, button").filter(".cancel").click(function() {
                            validator.cancelSubmit = true;
                        });
                        if (validator.settings.submitHandler) {
                            this.find("input, button").filter(":submit").click(function() {
                                validator.submitButton = this;
                            });
                        }
                        this.submit(function(event) {
                            if (validator.settings.debug)
                                event.preventDefault();

                            function handle() {
                                if (validator.settings.submitHandler) {
                                    if (validator.submitButton) {
                                        var hidden = $("<input type='hidden'/>").attr("name", validator.submitButton.name).val(validator.submitButton.value).appendTo(validator.currentForm);
                                    }
                                    validator.settings.submitHandler.call(validator, validator.currentForm);
                                    if (validator.submitButton) {
                                        hidden.remove();
                                    }
                                    return false;
                                }
                                return true;
                            }
                            if (validator.cancelSubmit) {
                                validator.cancelSubmit = false;
                                return handle();
                            }
                            if (validator.form()) {
                                if (validator.pendingRequest) {
                                    validator.formSubmitted = true;
                                    return false;
                                }
                                return handle();
                            } else {
                                validator.focusInvalid();
                                return false;
                            }
                        });
                    }
                    return validator;
                },
                valid: function() {
                    if ($(this[0]).is('form')) {
                        return this.validate().form();
                    } else {
                        var valid = true;
                        var validator = $(this[0].form).validate();
                        this.each(function() {
                            valid &= validator.element(this);
                        });
                        return valid;
                    }
                },
                removeAttrs: function(attributes) {
                    var result = {},
                        $element = this;
                    $.each(attributes.split(/\s/), function(index, value) {
                        result[value] = $element.attr(value);
                        $element.removeAttr(value);
                    });
                    return result;
                },
                rules: function(command, argument) {
                    var element = this[0];
                    if (command) {
                        var settings = $.data(element.form, 'validator').settings;
                        var staticRules = settings.rules;
                        var existingRules = $.validator.staticRules(element);
                        switch (command) {
                            case "add":
                                $.extend(existingRules, $.validator.normalizeRule(argument));
                                staticRules[element.name] = existingRules;
                                if (argument.messages)
                                    settings.messages[element.name] = $.extend(settings.messages[element.name], argument.messages);
                                break;
                            case "remove":
                                if (!argument) {
                                    delete staticRules[element.name];
                                    return existingRules;
                                }
                                var filtered = {};
                                $.each(argument.split(/\s/), function(index, method) {
                                    filtered[method] = existingRules[method];
                                    delete existingRules[method];
                                });
                                return filtered;
                        }
                    }
                    var data = $.validator.normalizeRules($.extend({}, $.validator.metadataRules(element), $.validator.classRules(element), $.validator.attributeRules(element), $.validator.staticRules(element)), element);
                    if (data.required) {
                        var param = data.required;
                        delete data.required;
                        data = $.extend({
                            required: param
                        }, data);
                    }
                    return data;
                }
            });
            $.extend($.expr[":"], {
                blank: function(a) {
                    return !$.trim("" + a.value);
                },
                filled: function(a) {
                    return !!$.trim("" + a.value);
                },
                unchecked: function(a) {
                    return !a.checked;
                }
            });
            $.validator = function(options, form) {
                this.settings = $.extend(true, {}, $.validator.defaults, options);
                this.currentForm = form;
                this.init();
            };
            $.validator.format = function(source, params) {
                if (arguments.length == 1)
                    return function() {
                        var args = $.makeArray(arguments);
                        args.unshift(source);
                        return $.validator.format.apply(this, args);
                    };
                if (arguments.length > 2 && params.constructor != Array) {
                    params = $.makeArray(arguments).slice(1);
                }
                if (params.constructor != Array) {
                    params = [params];
                }
                $.each(params, function(i, n) {
                    source = source.replace(new RegExp("\\{" + i + "\\}", "g"), n);
                });
                return source;
            };
            $.extend($.validator, {
                defaults: {
                    messages: {},
                    groups: {},
                    rules: {},
                    errorClass: "error",
                    validClass: "valid",
                    errorElement: "label",
                    focusInvalid: true,
                    errorContainer: $([]),
                    errorLabelContainer: $([]),
                    onsubmit: true,
                    ignore: [],
                    ignoreTitle: false,
                    onfocusin: function(element) {
                        this.lastActive = element;
                        if (this.settings.focusCleanup && !this.blockFocusCleanup) {
                            this.settings.unhighlight && this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
                            this.addWrapper(this.errorsFor(element)).hide();
                        }
                    },
                    onfocusout: function(element) {
                        if (!this.checkable(element) && (element.name in this.submitted || !this.optional(element))) {
                            this.element(element);
                        }
                    },
                    onkeyup: function(element) {
                        if (element.name in this.submitted || element == this.lastElement) {
                            this.element(element);
                        }
                    },
                    onclick: function(element) {
                        if (element.name in this.submitted)
                            this.element(element);
                        else if (element.parentNode.name in this.submitted)
                            this.element(element.parentNode);
                    },
                    highlight: function(element, errorClass, validClass) {
                        if (element.type === 'radio') {
                            this.findByName(element.name).addClass(errorClass).removeClass(validClass);
                        } else {
                            $(element).addClass(errorClass).removeClass(validClass);
                        }
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        if (element.type === 'radio') {
                            this.findByName(element.name).removeClass(errorClass).addClass(validClass);
                        } else {
                            $(element).removeClass(errorClass).addClass(validClass);
                        }
                    }
                },
                setDefaults: function(settings) {
                    $.extend($.validator.defaults, settings);
                },
                messages: {
                    required: "Không được để trống.",
                    remote: "Please fix this field.",
                    email: "Địa chỉ email không hợp lệ.",
                    url: "Please enter a valid URL.",
                    date: "Please enter a valid date.",
                    dateISO: "Please enter a valid date (ISO).",
                    dateDE: "Bitte geben Sie ein gültiges Datum ein.",
                    number: "Vui lòng nhập số.",
                    numberDE: "Bitte geben Sie eine Nummer ein.",
                    digits: "Please enter only digits",
                    creditcard: "Please enter a valid credit card number.",
                    equalTo: "Please enter the same value again.",
                    accept: "Vui lòng chọn đúng định dạng file cho phép.",
                    maxlength: $.validator.format("Không được nhập quá {0} ký tự."),
                    minlength: $.validator.format("Không được nhập it hơn {0} ký tự."),
                    rangelength: $.validator.format("Vui lòng nhập trong khoảng từ {0} đến {1} ký tự."),
                    range: $.validator.format("Vui lòng nhập giá trị trong khoảng {0} - {1}."),
                    max: $.validator.format("Vui lòng nhập giá trị nhỏ hơn hoặc bằng {0}."),
                    min: $.validator.format("Vui lòng nhập giá trị lớn hơn hoặc bằng {0}.")
                },
                autoCreateRanges: false,
                prototype: {
                    init: function() {
                        this.labelContainer = $(this.settings.errorLabelContainer);
                        this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm);
                        this.containers = $(this.settings.errorContainer).add(this.settings.errorLabelContainer);
                        this.submitted = {};
                        this.valueCache = {};
                        this.pendingRequest = 0;
                        this.pending = {};
                        this.invalid = {};
                        this.reset();
                        var groups = (this.groups = {});
                        $.each(this.settings.groups, function(key, value) {
                            $.each(value.split(/\s/), function(index, name) {
                                groups[name] = key;
                            });
                        });
                        var rules = this.settings.rules;
                        $.each(rules, function(key, value) {
                            rules[key] = $.validator.normalizeRule(value);
                        });

                        function delegate(event) {
                            var validator = $.data(this[0].form, "validator"),
                                eventType = "on" + event.type.replace(/^validate/, "");
                            validator.settings[eventType] && validator.settings[eventType].call(validator, this[0]);
                        }
                        $(this.currentForm).validateDelegate(":text, :password, :file, select, textarea", "focusin focusout keyup", delegate).validateDelegate(":radio, :checkbox, select, option", "click", delegate);
                        if (this.settings.invalidHandler)
                            $(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler);
                    },
                    form: function() {
                        this.checkForm();
                        $.extend(this.submitted, this.errorMap);
                        this.invalid = $.extend({}, this.errorMap);
                        if (!this.valid())
                            $(this.currentForm).triggerHandler("invalid-form", [this]);
                        this.showErrors();
                        return this.valid();
                    },
                    checkForm: function() {
                        this.prepareForm();
                        for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
                            this.check(elements[i]);
                        }
                        return this.valid();
                    },
                    element: function(element) {
                        element = this.clean(element);
                        this.lastElement = element;
                        this.prepareElement(element);
                        this.currentElements = $(element);
                        var result = this.check(element);
                        if (result) {
                            delete this.invalid[element.name];
                        } else {
                            this.invalid[element.name] = true;
                        }
                        if (!this.numberOfInvalids()) {
                            this.toHide = this.toHide.add(this.containers);
                        }
                        this.showErrors();
                        return result;
                    },
                    showErrors: function(errors) {
                        if (errors) {
                            $.extend(this.errorMap, errors);
                            this.errorList = [];
                            for (var name in errors) {
                                this.errorList.push({
                                    message: errors[name],
                                    element: this.findByName(name)[0]
                                });
                            }
                            this.successList = $.grep(this.successList, function(element) {
                                return !(element.name in errors);
                            });
                        }
                        this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors();
                    },
                    resetForm: function() {
                        if ($.fn.resetForm)
                            $(this.currentForm).resetForm();
                        this.submitted = {};
                        this.prepareForm();
                        this.hideErrors();
                        this.elements().removeClass(this.settings.errorClass);
                    },
                    numberOfInvalids: function() {
                        return this.objectLength(this.invalid);
                    },
                    objectLength: function(obj) {
                        var count = 0;
                        for (var i in obj)
                            count++;
                        return count;
                    },
                    hideErrors: function() {
                        this.addWrapper(this.toHide).hide();
                    },
                    valid: function() {
                        return this.size() == 0;
                    },
                    size: function() {
                        return this.errorList.length;
                    },
                    focusInvalid: function() {
                        if (this.settings.focusInvalid) {
                            try {
                                $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin");
                            } catch (e) {}
                        }
                    },
                    findLastActive: function() {
                        var lastActive = this.lastActive;
                        return lastActive && $.grep(this.errorList, function(n) {
                            return n.element.name == lastActive.name;
                        }).length == 1 && lastActive;
                    },
                    elements: function() {
                        var validator = this,
                            rulesCache = {};
                        return $(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function() {
                            !this.name && validator.settings.debug && window.console && console.error("%o has no name assigned", this);
                            if (this.name in rulesCache || !validator.objectLength($(this).rules()))
                                return false;
                            rulesCache[this.name] = true;
                            return true;
                        });
                    },
                    clean: function(selector) {
                        return $(selector)[0];
                    },
                    errors: function() {
                        return $(this.settings.errorElement + "." + this.settings.errorClass, this.errorContext);
                    },
                    reset: function() {
                        this.successList = [];
                        this.errorList = [];
                        this.errorMap = {};
                        this.toShow = $([]);
                        this.toHide = $([]);
                        this.currentElements = $([]);
                    },
                    prepareForm: function() {
                        this.reset();
                        this.toHide = this.errors().add(this.containers);
                    },
                    prepareElement: function(element) {
                        this.reset();
                        this.toHide = this.errorsFor(element);
                    },
                    check: function(element) {
                        element = this.clean(element);
                        if (this.checkable(element)) {
                            element = this.findByName(element.name).not(this.settings.ignore)[0];
                        }
                        var rules = $(element).rules();
                        var dependencyMismatch = false;
                        for (var method in rules) {
                            var rule = {
                                method: method,
                                parameters: rules[method]
                            };
                            try {
                                var result = $.validator.methods[method].call(this, element.value.replace(/\r/g, ""), element, rule.parameters);
                                if (result == "dependency-mismatch") {
                                    dependencyMismatch = true;
                                    continue;
                                }
                                dependencyMismatch = false;
                                if (result == "pending") {
                                    this.toHide = this.toHide.not(this.errorsFor(element));
                                    return;
                                }
                                if (!result) {
                                    this.formatAndAdd(element, rule);
                                    return false;
                                }
                            } catch (e) {
                                this.settings.debug && window.console && console.log("exception occured when checking element " + element.id +
                                    ", check the '" + rule.method + "' method", e);
                                throw e;
                            }
                        }
                        if (dependencyMismatch)
                            return;
                        if (this.objectLength(rules))
                            this.successList.push(element);
                        return true;
                    },
                    customMetaMessage: function(element, method) {
                        if (!$.metadata)
                            return;
                        var meta = this.settings.meta ? $(element).metadata()[this.settings.meta] : $(element).metadata();
                        return meta && meta.messages && meta.messages[method];
                    },
                    customMessage: function(name, method) {
                        var m = this.settings.messages[name];
                        return m && (m.constructor == String ? m : m[method]);
                    },
                    findDefined: function() {
                        for (var i = 0; i < arguments.length; i++) {
                            if (arguments[i] !== undefined)
                                return arguments[i];
                        }
                        return undefined;
                    },
                    defaultMessage: function(element, method) {
                        return this.findDefined(this.customMessage(element.name, method), this.customMetaMessage(element, method), !this.settings.ignoreTitle && element.title || undefined, $.validator.messages[method], "<strong>Warning: No message defined for " + element.name + "</strong>");
                    },
                    formatAndAdd: function(element, rule) {
                        var message = this.defaultMessage(element, rule.method),
                            theregex = /\$?\{(\d+)\}/g;
                        if (typeof message == "function") {
                            message = message.call(this, rule.parameters, element);
                        } else if (theregex.test(message)) {
                            message = jQuery.format(message.replace(theregex, '{$1}'), rule.parameters);
                        }
                        this.errorList.push({
                            message: message,
                            element: element
                        });
                        this.errorMap[element.name] = message;
                        this.submitted[element.name] = message;
                    },
                    addWrapper: function(toToggle) {
                        if (this.settings.wrapper)
                            toToggle = toToggle.add(toToggle.parent(this.settings.wrapper));
                        return toToggle;
                    },
                    defaultShowErrors: function() {
                        for (var i = 0; this.errorList[i]; i++) {
                            var error = this.errorList[i];
                            this.settings.highlight && this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
                            this.showLabel(error.element, error.message);
                        }
                        if (this.errorList.length) {
                            this.toShow = this.toShow.add(this.containers);
                        }
                        if (this.settings.success) {
                            for (var i = 0; this.successList[i]; i++) {
                                this.showLabel(this.successList[i]);
                            }
                        }
                        if (this.settings.unhighlight) {
                            for (var i = 0, elements = this.validElements(); elements[i]; i++) {
                                this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
                            }
                        }
                        this.toHide = this.toHide.not(this.toShow);
                        this.hideErrors();
                        this.addWrapper(this.toShow).show();
                    },
                    validElements: function() {
                        return this.currentElements.not(this.invalidElements());
                    },
                    invalidElements: function() {
                        return $(this.errorList).map(function() {
                            return this.element;
                        });
                    },
                    showLabel: function(element, message) {
                        var label = this.errorsFor(element);
                        if (label.length) {
                            label.removeClass().addClass(this.settings.errorClass);
                            label.attr("generated") && label.html(message);
                        } else {
                            label = $("<" + this.settings.errorElement + "/>").attr({
                                "for": this.idOrName(element),
                                generated: true
                            }).addClass(this.settings.errorClass).html(message || "");
                            if (this.settings.wrapper) {
                                label = label.hide().show().wrap("<" + this.settings.wrapper + "/>").parent();
                            }
                            if (!this.labelContainer.append(label).length)
                                this.settings.errorPlacement ? this.settings.errorPlacement(label, $(element)) : label.insertAfter(element);
                        }
                        if (!message && this.settings.success) {
                            label.text("");
                            typeof this.settings.success == "string" ? label.addClass(this.settings.success) : this.settings.success(label);
                        }
                        this.toShow = this.toShow.add(label);
                    },
                    errorsFor: function(element) {
                        var name = this.idOrName(element);
                        return this.errors().filter(function() {
                            return $(this).attr('for') == name;
                        });
                    },
                    idOrName: function(element) {
                        return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
                    },
                    checkable: function(element) {
                        return /radio|checkbox/i.test(element.type);
                    },
                    findByName: function(name) {
                        var form = this.currentForm;
                        return $(document.getElementsByName(name)).map(function(index, element) {
                            return element.form == form && element.name == name && element || null;
                        });
                    },
                    getLength: function(value, element) {
                        switch (element.nodeName.toLowerCase()) {
                            case 'select':
                                return $("option:selected", element).length;
                            case 'input':
                                if (this.checkable(element))
                                    return this.findByName(element.name).filter(':checked').length;
                        }
                        return value.length;
                    },
                    depend: function(param, element) {
                        return this.dependTypes[typeof param] ? this.dependTypes[typeof param](param, element) : true;
                    },
                    dependTypes: {
                        "boolean": function(param, element) {
                            return param;
                        },
                        "string": function(param, element) {
                            return !!$(param, element.form).length;
                        },
                        "function": function(param, element) {
                            return param(element);
                        }
                    },
                    optional: function(element) {
                        return !$.validator.methods.required.call(this, $.trim(element.value), element) && "dependency-mismatch";
                    },
                    startRequest: function(element) {
                        if (!this.pending[element.name]) {
                            this.pendingRequest++;
                            this.pending[element.name] = true;
                        }
                    },
                    stopRequest: function(element, valid) {
                        this.pendingRequest--;
                        if (this.pendingRequest < 0)
                            this.pendingRequest = 0;
                        delete this.pending[element.name];
                        if (valid && this.pendingRequest == 0 && this.formSubmitted && this.form()) {
                            $(this.currentForm).submit();
                            this.formSubmitted = false;
                        } else if (!valid && this.pendingRequest == 0 && this.formSubmitted) {
                            $(this.currentForm).triggerHandler("invalid-form", [this]);
                            this.formSubmitted = false;
                        }
                    },
                    previousValue: function(element) {
                        return $.data(element, "previousValue") || $.data(element, "previousValue", {
                            old: null,
                            valid: true,
                            message: this.defaultMessage(element, "remote")
                        });
                    }
                },
                classRuleSettings: {
                    required: {
                        required: true
                    },
                    email: {
                        email: true
                    },
                    url: {
                        url: true
                    },
                    date: {
                        date: true
                    },
                    dateISO: {
                        dateISO: true
                    },
                    dateDE: {
                        dateDE: true
                    },
                    number: {
                        number: true
                    },
                    numberDE: {
                        numberDE: true
                    },
                    digits: {
                        digits: true
                    },
                    creditcard: {
                        creditcard: true
                    }
                },
                addClassRules: function(className, rules) {
                    className.constructor == String ? this.classRuleSettings[className] = rules : $.extend(this.classRuleSettings, className);
                },
                classRules: function(element) {
                    var rules = {};
                    var classes = $(element).attr('class');
                    classes && $.each(classes.split(' '), function() {
                        if (this in $.validator.classRuleSettings) {
                            $.extend(rules, $.validator.classRuleSettings[this]);
                        }
                    });
                    return rules;
                },
                attributeRules: function(element) {
                    var rules = {};
                    var $element = $(element);
                    for (var method in $.validator.methods) {
                        var value = $element.attr(method);
                        if (value) {
                            rules[method] = value;
                        }
                    }
                    if (rules.maxlength && /-1|2147483647|524288/.test(rules.maxlength)) {
                        delete rules.maxlength;
                    }
                    return rules;
                },
                metadataRules: function(element) {
                    if (!$.metadata) return {};
                    var meta = $.data(element.form, 'validator').settings.meta;
                    return meta ? $(element).metadata()[meta] : $(element).metadata();
                },
                staticRules: function(element) {
                    var rules = {};
                    var validator = $.data(element.form, 'validator');
                    if (validator.settings.rules) {
                        rules = $.validator.normalizeRule(validator.settings.rules[element.name]) || {};
                    }
                    return rules;
                },
                normalizeRules: function(rules, element) {
                    $.each(rules, function(prop, val) {
                        if (val === false) {
                            delete rules[prop];
                            return;
                        }
                        if (val.param || val.depends) {
                            var keepRule = true;
                            switch (typeof val.depends) {
                                case "string":
                                    keepRule = !!$(val.depends, element.form).length;
                                    break;
                                case "function":
                                    keepRule = val.depends.call(element, element);
                                    break;
                            }
                            if (keepRule) {
                                rules[prop] = val.param !== undefined ? val.param : true;
                            } else {
                                delete rules[prop];
                            }
                        }
                    });
                    $.each(rules, function(rule, parameter) {
                        rules[rule] = $.isFunction(parameter) ? parameter(element) : parameter;
                    });
                    $.each(['minlength', 'maxlength', 'min', 'max'], function() {
                        if (rules[this]) {
                            rules[this] = Number(rules[this]);
                        }
                    });
                    $.each(['rangelength', 'range'], function() {
                        if (rules[this]) {
                            rules[this] = [Number(rules[this][0]), Number(rules[this][1])];
                        }
                    });
                    if ($.validator.autoCreateRanges) {
                        if (rules.min && rules.max) {
                            rules.range = [rules.min, rules.max];
                            delete rules.min;
                            delete rules.max;
                        }
                        if (rules.minlength && rules.maxlength) {
                            rules.rangelength = [rules.minlength, rules.maxlength];
                            delete rules.minlength;
                            delete rules.maxlength;
                        }
                    }
                    if (rules.messages) {
                        delete rules.messages;
                    }
                    return rules;
                },
                normalizeRule: function(data) {
                    if (typeof data == "string") {
                        var transformed = {};
                        $.each(data.split(/\s/), function() {
                            transformed[this] = true;
                        });
                        data = transformed;
                    }
                    return data;
                },
                addMethod: function(name, method, message) {
                    $.validator.methods[name] = method;
                    $.validator.messages[name] = message != undefined ? message : $.validator.messages[name];
                    if (method.length < 3) {
                        $.validator.addClassRules(name, $.validator.normalizeRule(name));
                    }
                },
                methods: {
                    required: function(value, element, param) {
                        if (!this.depend(param, element))
                            return "dependency-mismatch";
                        switch (element.nodeName.toLowerCase()) {
                            case 'select':
                                var val = $(element).val();
                                return val && val.length > 0;
                            case 'input':
                                if (this.checkable(element))
                                    return this.getLength(value, element) > 0;
                            default:
                                return $.trim(value).length > 0;
                        }
                    },
                    remote: function(value, element, param) {
                        if (this.optional(element))
                            return "dependency-mismatch";
                        var previous = this.previousValue(element);
                        if (!this.settings.messages[element.name])
                            this.settings.messages[element.name] = {};
                        previous.originalMessage = this.settings.messages[element.name].remote;
                        this.settings.messages[element.name].remote = previous.message;
                        param = typeof param == "string" && {
                            url: param
                        } || param;
                        if (this.pending[element.name]) {
                            return "pending";
                        }
                        if (previous.old === value) {
                            return previous.valid;
                        }
                        previous.old = value;
                        var validator = this;
                        this.startRequest(element);
                        var data = {};
                        data[element.name] = value;
                        $.ajax($.extend(true, {
                            url: param,
                            mode: "abort",
                            port: "validate" + element.name,
                            dataType: "json",
                            data: data,
                            success: function(response) {
                                validator.settings.messages[element.name].remote = previous.originalMessage;
                                var valid = response === true;
                                if (valid) {
                                    var submitted = validator.formSubmitted;
                                    validator.prepareElement(element);
                                    validator.formSubmitted = submitted;
                                    validator.successList.push(element);
                                    validator.showErrors();
                                } else {
                                    var errors = {};
                                    var message = response || validator.defaultMessage(element, "remote");
                                    errors[element.name] = previous.message = $.isFunction(message) ? message(value) : message;
                                    validator.showErrors(errors);
                                }
                                previous.valid = valid;
                                validator.stopRequest(element, valid);
                            }
                        }, param));
                        return "pending";
                    },
                    minlength: function(value, element, param) {
                        return this.optional(element) || this.getLength($.trim(value), element) >= param;
                    },
                    maxlength: function(value, element, param) {
                        return this.optional(element) || this.getLength($.trim(value), element) <= param;
                    },
                    rangelength: function(value, element, param) {
                        var length = this.getLength($.trim(value), element);
                        return this.optional(element) || (length >= param[0] && length <= param[1]);
                    },
                    min: function(value, element, param) {
                        return this.optional(element) || value >= param;
                    },
                    max: function(value, element, param) {
                        return this.optional(element) || value <= param;
                    },
                    range: function(value, element, param) {
                        return this.optional(element) || (value >= param[0] && value <= param[1]);
                    },
                    email: function(value, element) {
                        return this.optional(element) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(value);
                    },
                    url: function(value, element) {
                        return this.optional(element) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
                    },
                    date: function(value, element) {
                        return this.optional(element) || !/Invalid|NaN/.test(new Date(value));
                    },
                    dateISO: function(value, element) {
                        return this.optional(element) || /^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(value);
                    },
                    number: function(value, element) {
                        return this.optional(element) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(value);
                    },
                    digits: function(value, element) {
                        return this.optional(element) || /^\d+$/.test(value);
                    },
                    creditcard: function(value, element) {
                        if (this.optional(element))
                            return "dependency-mismatch";
                        if (/[^0-9-]+/.test(value))
                            return false;
                        var nCheck = 0,
                            nDigit = 0,
                            bEven = false;
                        value = value.replace(/\D/g, "");
                        for (var n = value.length - 1; n >= 0; n--) {
                            var cDigit = value.charAt(n);
                            var nDigit = parseInt(cDigit, 10);
                            if (bEven) {
                                if ((nDigit *= 2) > 9)
                                    nDigit -= 9;
                            }
                            nCheck += nDigit;
                            bEven = !bEven;
                        }
                        return (nCheck % 10) == 0;
                    },
                    accept: function(value, element, param) {
                        param = typeof param == "string" ? param.replace(/,/g, '|') : "png|jpe?g|gif";
                        return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
                    },
                    equalTo: function(value, element, param) {
                        var target = $(param).unbind(".validate-equalTo").bind("blur.validate-equalTo", function() {
                            $(element).valid();
                        });
                        return value == target.val();
                    }
                }
            });
            $.format = $.validator.format;
        })(jQuery);;
        (function($) {
            var pendingRequests = {};
            if ($.ajaxPrefilter) {
                $.ajaxPrefilter(function(settings, _, xhr) {
                    var port = settings.port;
                    if (settings.mode == "abort") {
                        if (pendingRequests[port]) {
                            pendingRequests[port].abort();
                        }
                        pendingRequests[port] = xhr;
                    }
                });
            } else {
                var ajax = $.ajax;
                $.ajax = function(settings) {
                    var mode = ("mode" in settings ? settings : $.ajaxSettings).mode,
                        port = ("port" in settings ? settings : $.ajaxSettings).port;
                    if (mode == "abort") {
                        if (pendingRequests[port]) {
                            pendingRequests[port].abort();
                        }
                        return (pendingRequests[port] = ajax.apply(this, arguments));
                    }
                    return ajax.apply(this, arguments);
                };
            }
        })(jQuery);;
        (function($) {
            if (!jQuery.event.special.focusin && !jQuery.event.special.focusout && document.addEventListener) {
                $.each({
                    focus: 'focusin',
                    blur: 'focusout'
                }, function(original, fix) {
                    $.event.special[fix] = {
                        setup: function() {
                            this.addEventListener(original, handler, true);
                        },
                        teardown: function() {
                            this.removeEventListener(original, handler, true);
                        },
                        handler: function(e) {
                            arguments[0] = $.event.fix(e);
                            arguments[0].type = fix;
                            return $.event.handle.apply(this, arguments);
                        }
                    };

                    function handler(e) {
                        e = $.event.fix(e);
                        e.type = fix;
                        return $.event.handle.call(this, e);
                    }
                });
            };
            $.extend($.fn, {
                validateDelegate: function(delegate, type, handler) {
                    return this.bind(type, function(event) {
                        var target = $(event.target);
                        if (target.is(delegate)) {
                            return handler.apply(target, arguments);
                        }
                    });
                }
            });
        })(jQuery);
    </script>

    <script src='//cdnt.netcoresmartech.com/smartechclient.js'></script>
    <script src='https://ads.careerbuilder.vn/www/delivery/spcjs.php?id=23'></script>
    <script>
        $.fancybox.defaults.hash = false;
        $.fancybox.defaults.backFocus = false;
        if (!$.isFunction(window.smartech)) {
            function smartech(action, data) {
                console.log('smartech:' + action);
            }
        }
        if ($.isFunction(window.smartech)) {
            smartech('create', 'ADGMOT35CHFLVDHBJNIG50K96BT3VC7KA7MBJ665I14C320R3PRG');
            smartech('register', '87d64a04bc7036938e094b9327ac7fd1');
            smartech('identify', 'lop7cttnq@gmail.com');
            smartech('dispatch', 1, {});
        }
        if (!$.isFunction(window.OA_show)) {
            function OA_show(id) {
                console.log('ads:' + id)
            }
            var OA_output = Array();
        }
        var language_common = {
            title_popup: "Thông báo",
            popup_msg_success: "Lưu thành công",
            message_common: "Vui lòng thao tác đầy đủ để hoàn thành",
            popup_msg_error: "Vui lòng kiểm tra lại",
            popup_close_popup: "Đóng",
            job_message_save_job_succ_new: "job_message_save_job_succ_new",
            job_view_detail_saved_exists: "job_view_detail_saved_exists",
            job_message_error: "Lỗi trong quá trình thực thi",
            job_view_detail_saved_exists: "job_view_detail_saved_exists",
            popup_login_error: "Vui lòng nhập thông tin",
            job_message_delete_job_succ: "Xóa thành công",
            okButton: "Đồng ý",
            cancelButton: "Hủy",
            modal_matching_job_header_title: "modal_matching_job_header_title",
            modal_matching_job_body_title: "modal_matching_job_body_title",
            modal_matching_job_body_tips: "modal_matching_job_body_tips",
            modal_matching_job_skill: "modal_matching_job_skill",
            modal_matching_job_industry: "modal_matching_job_industry",
            modal_matching_job_location: "modal_matching_job_location",
            modal_matching_job_title: "modal_matching_job_title",
            modal_matching_job_experience: "modal_matching_job_experience",
            modal_matching_job_salary: "modal_matching_job_salary",
            modal_matching_job_degree: "modal_matching_job_degree",
            modal_matching_job_widget_skill_title: "modal_matching_job_widget_skill_title",
            modal_matching_job_widget_skill_content: "modal_matching_job_widget_skill_content",
            modal_matching_job_widget_degree_title: "modal_matching_job_widget_degree_title",
            modal_matching_job_widget_degree_content: "modal_matching_job_widget_degree_content"
        };
        if (typeof language === 'undefined') var language = language_common;
        else $.extend(language, language_common);
    </script>

</head>

<body class="">

  
    <main>
    
        <link href="https://static.careerbuilder.vn/js/datetimepicker/DateTimePicker.css" rel="stylesheet" />
        <script src="https://static.careerbuilder.vn/js/datetimepicker/DateTimePicker.js" type="text/javascript"></script>
        <script src="https://static.careerbuilder.vn/js/datetimepicker/i18n/DateTimePicker-i18n.js" type="text/javascript"></script>
        <script src="https://static.careerbuilder.vn/js/autoNumeric.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://careerbuilder.vn/cv-hay/getdistricts"></script>
        <script type="text/javascript" src="https://careerbuilder.vn/cv-hay/init-cv-building"></script>
        <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" data-app-key="wpcl6nfph1hzjf2" id="dropboxjs"></script>
        <script src="https://static.careerbuilder.vn/2012/dropboxresume.js" type="text/javascript"></script>
        <section class="cb-section">
            <div class="container">
                <div class="cb-title cb-title-center">
                    <h2>Tạo Hồ Sơ Đính Kèm</h2>
                </div>
          <div class="main-quick-upload-resume created-now-wrap">
        <form method="post" action="" name="frmResumeDetail" id="frmResumeDetail" enctype="multipart/form-data" class="frmEditAttach" autocomplete="off">
                        <input type="hidden" name="resume_id" id="resume_id" value="<?= $data_resume["id"] ?>" />
                        <input type="hidden" name="intSync" id="intSync" value="0" />
                        <input type="hidden" name="is_change" id="is_change" value="0" />
                        <input type="hidden" name="resume_kind" value="2" />
                        <input type="hidden" id="resume_path" name="resume_path" value="" />
                        <input type="hidden" id="resume_path_old" name="resume_path_old" value="" />
                        <input type="hidden" id="resume_path_convert" name="resume_path_convert" value="" />
                        <input type="hidden" id="resume_path_convert_old" name="resume_path_convert_old" value="" />
                        <input type="hidden" value="0000000000" id="strConfidential" name="strConfidential" />
                        <input type="hidden" value="0000000000" id="strConfidentialTmp" name="strConfidentialTmp" />
                        <input type="hidden" name="private_info" id="private_info" value="1" />
                        <input type="hidden" name="csrf_token" id="csrf_token" value="906af9a84261988d8408da0eef433a9e67591b3e9fb1f81a6477cac236e71ff5" />

                        <div class="quick-upload">
                            <div class="cb-title-h3">
                                <h3>Hồ sơ</h3>
                            </div>
                            <div class="form-show-file active" id="uploadFile_file">
                                <label>* Tên Hồ Sơ:</label>
                                <em class="material-icons">picture_as_pdf</em>
                                <p class="show-file"><?= $data_resume["file_location"] ?></p>
                                <a href="javascript:void(0)" class="removefile" onclick="removefile(); return false;"><em class="material-icons">highlight_off </em>Xóa</a>
                            </div>
                            <div class="form-show-file " id="uploadFile_file">
                                <label>* Tên Hồ Sơ:</label>
                                <em class="material-icons">picture_as_pdf</em>
                                <p class="show-file"></p>
                                <a href="javascript:void(0)" class="removefile" onclick="removefile(); return false;"><em class="material-icons">highlight_off </em>Xóa</a>
                            </div>


                            <div class="form-choose">
                                <div class="form-group">
                                    <label>* Hồ Sơ Đính Kèm<span>*Hỗ trợ định dạng *.doc, *.docx, *.pdf và không quá 5MB</span></label>
                                </div>
                                <div class="form-group">
                                    <div class="list-choose">
                                        <div class="choose-mycomputer">
                                            <label for="attach_file"><em class="mdi mdi-folder-outline"></em>Tải hồ sơ từ máy tính</label>
                                            <input class="d-none" type="file" id="attach_file" name="attach_file"    onchange=" return ajaxOnlyFile(this);">
                                        </div>
                                        <!--<a class="choose-drive" href="#"><img src="./img/quick-upload-resume/Google_Drive_logo.png" alt="">Choose From Google Drive</a>-->
                                        <button type="button" name="dropbox_button" id="dropbox_button" class="choose-dropbox file">
									<img src="./img/quick-upload-resume/Dropbox_Logo.png" alt="">Tải hồ sơ từ Dropbox
								</button>
                                        <!--<a class="choose-dropbox" href="#"><img src="./img/quick-upload-resume/Dropbox_Logo.png" alt="">Chọn file từ Dropbox</a> -->
                                        <input type="hidden" name="dropbox_file" id="dropbox_file" value="">
                                        <input type="hidden" name="dfile_title" id="dfile_title" value="">
                                        <input type="hidden" name="dfile_size" id="dfile_size" value="">

                                    </div>
                                    <span class="error_attach_file"></span>
                                </div>
                            </div>

                            <div class="form-group form-text">
                                <input type="text"  required 
                                                data-pristine-required-message="Không được để trống"    value="<?= $data_resume["resume_title"]
                                                 ?>"  name="resume_title" id="resume_title" maxlength="400" class="keyword" value="" autocomplete="off">
                                <label>* Tiêu đề hồ sơ</label>
                                <span class="error_resume_title"></span>
                                <div class="form-note">
                                    <p>Nhập vị trí hoặc chức danh. Ví dụ: Kế toán trưởng, Web designer</p>
                                </div>
                            </div>
                            <div class="form-group form-note">
                                <div class="box-noti">
                                    <p>
                                        <div style="clear:both;text-align:center;color:#ff0000; border:1px solid #FFE8C1; background:#FFFAF2; text-align:left; padding:10px; margin-bottom" 15px;
                                            "><b>Lưu ý:</b> Theo thống kê của CareerBuilder.vn hồ sơ Tiếng Anh được nhà tuyển dụng xem nhiều hơn 150% so với hồ sơ Tiếng Việt<br/> <span class="note ">Tất cả các bằng cấp, chứng chỉ kèm theo (nếu có) cần được gộp chung vào hồ sơ ứng tuyển với dung lượng không quá 5MB vì vượt quá dung lượng quy định có<br/>khả năng dẫn đến việc Nhà tuyển dụng không nhận được hồ sơ ứng tuyển; và chỉ hỗ trợ các định dạng .doc, .docx, *.pdf.</div>
</span></p>
            </div>
          </div>
        </div>
        <div class="quick-upload quick-upload-2 ">
          <div class="cb-title-h3 d-flex justify-content-sb align-center ">
			<h3>Thông tin cá nhân</h3>

			 <div class="link-edit "><a href="javascript:void(0) "data-bs-toggle="modal" data-bs-target="#thongtincanhan"> <em class="material-icons ">create</em><span> Chỉnh sửa</span></a></div>
			 </div>
			 <p class="noted "> Xin vui lòng cập nhật thông tin cá nhân để hoàn tất hồ sơ</p>
        </div>
        <div class="quick-upload quick-upload-2 ">
  <div class="cb-title-h3 ">
    <h3>Thông tin nghề nghiệp</h3>
    <div class="user-action ">
      <ul>
	  			<!-- <li> <a href="https://careerbuilder.vn/vi/jobseekers/myresume/myattach?sync=1 " title=" " class="action-1 "><em class="fa fa-sync "></em>Đồng bộ thông tin với Hồ Sơ CareerBuilder</a> </li> -->
		      </ul>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label>* Số năm kinh nghiệm</label>
        <input type="number" name="yearOfExperience" id="year_experience" <?= (int)$data_resume["year_of_experience"]===0 ? "disabled" :"" ?> value="<?= (int)$data_resume["year_of_experience"]!==0 ? $data_resume["year_of_experience"] :"" ?>"  maxlength="2" min="1" max="55">
        <span class="error_yearOfExperience "></span> </div>
    </div>
   
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label>* Bằng cấp cao nhất</label>
        <select  required required data-pristine-required-message="Không được để trống"name="degree" id="degree " class="required width_186 ">
          <option value="" >Chọn</option>
          <?php foreach ($data_degree as $item): ?>
          <option <?= $data_resume["degree_id"]== $item["id"] ? "selected":"" ?> value="<?= $item["id"] ?>"><?= $item["degree_name"] ?></option>
            
        <?php endforeach;?>


        </select>
        <span class="error_degree "></span> </div>
    </div>
    <div class="col-md-12 ">
      <div  class="form-group form-checkbox form-no-exp">
        <input type="checkbox" name="cboExper" id="cboExper" <?= $data_resume["year_of_experience"]==0?"checked":""  ?> value="1" >
        <label for="cboExper ">Chưa có kinh nghiệm</label>
      </div>
    </div>
    <script>
        const cboExper=document.querySelector('#cboExper');
    
        cboExper.addEventListener('click',(e)=>{
            console.log('a');
            if(e.target.checked){
           
            }
        })
    </script>
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label>* Cấp bậc mong muốn</label>
        <select  required required data-pristine-required-message="Không được để trống" name="level_id" id="level_id " >
          <option value="" >Chọn</option>
                <?php foreach ($data_job_position as $item):?>
                    <option <?= $data_resume["position_id"]== $item["id"] ? "selected":"" ?> value="<?= $item["id"] ?>"><?= $item["position"] ?></option>
              <?php  endforeach;?>

        </select>
        <span class="error_level_id "></span> </div>
    </div>
    <div id="dropdownSelected"></div>
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label for=" ">Cấp bậc hiện tại</label>
        <select class="width_186 "  name="levelcurrent_id" required required data-pristine-required-message="Không được để trống" id="levelcurrent_id " >
          <option value="" >Chọn</option>
          <?php foreach ($data_job_position as $item):?>
                    <option  <?= $data_resume["position_current_id"]== $item["id"] ? "selected":"" ?>><?= $item["position"] ?></option>
              <?php  endforeach;?>


        </select>
      </div>
    </div>
    <div class="col-md-6 ">
      <div class="form-group form-select-chosen ">
        <label for=" ">* Ngành nghề mong muốn</label>
        <select name="INDUSTRY_ID[]" id="select_industry_db "  multiple class="chosen-select-max-three " title="Vui lòng chọn ngành nghề ">
                    <?php foreach ($data_profession as $item): ?>
                        <option value="<?= $item["id"] ?>"<?php foreach ($seeker_profession_by_resume as $value) {
                         if($value["profession_id"]==$item["id"]){
                            echo "selected";
                         }
                         }?>><?= $item["profession_name"] ?></option>
                    
                   <?php endforeach;?>
                  </select>
        <span class="error_select_industry_db "></span> </div>
    </div>
    <div class="col-md-6 form-additional form-salary-cus ">
      <label>Mức lương mong muốn</label>
      <div class="form-big ">
        <div class="form-group form-select ">
          <select name="salary_unit " id="salary_unit ">
            <option value="vnd " >VNĐ</option>
          </select>
        </div>
        <div class="form-group form-text ">
          <input placeholder="Từ"type="text"required 
                                                data-pristine-required-message="Không được để trống" name="salary_from" id="salary_from"  value="<?= $data_resume["min_salary"] ?>">
        </div>
        <div class="form-group form-text ">
 <input type="text" required 
  data-pristine-required-message="Không được để trống"   name="salary_to" placeholder="Đến"id="salary_to" value="<?= $data_resume["max_salary"] ?>" >
        </div>
        <span class="error_salary_unit "></span> </div>
    </div>

    <div class="col-md-12 ">
      <div class="list-workplace-desired " id="list-workplace-desired "> <div class="row item active ">
    <div class="col-md-6 ">
        <div class="form-group form-select ">
            <label>* Nơi làm việc mong muốn</label>
            <select required required data-pristine-required-message="Không được để trống" name="provinces" id="select_location_id_1" >
                <option value="" >Chọn</option>
                               
                                
                            
                            </select>
            <span class="error_location_id error_select_location_id_1 "></span>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="form-group form-select-chosen ">
            <label for=" ">Quận</label>
            <select  required required data-pristine-required-message="Không được để trống" name="districts" id="select_district_id_1" class=" chosen-select-max-three"style="display:block;">
            </select>
            <span class="error_DISTRICT_ID "></span>
        </div>
        <div class="delete "><a href="javascript:void(0) "><em class="material-icons ">highlight_off</em>Xóa</a></div>
    </div>
</div>
<div class="row item ">
    <div class="col-md-6 ">
        <div class="form-group form-select ">
            <label for=" ">Nơi làm việc mong muốn</label>
            <select name="LOCATION_ID" id="select_location_id_2 " >
                           
                                   
                            </select>
            <span class="error_location_id error_select_location_id_2 "></span>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="form-group form-select-chosen ">
            <label for=" ">Quận</label>
            <select name="DISTRICT_ID" id="select_district_id_2 " class="chosen-select-max-three " multiple>
                <option value="0 " >Chọn</option>
            </select>
            <span class="error_DISTRICT_ID "></span>
        </div>
        <div class="delete active "><a href="javascript:void(0) "><em class="material-icons ">highlight_off</em>Xóa</a></div>
    </div>
</div>
<div class="row item ">
    <div class="col-md-6 ">
        <div class="form-group form-select ">
            <label for=" ">Nơi làm việc mong muốn</label>
            <select name="LOCATION_ID[] " id="select_location_id_3 " >
                <option value=" " >Chọn</option>
                                 
                              
                            </select>
            <span class="error_location_id error_select_location_id_3 "></span>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="form-group form-select-chosen ">
            <label for=" ">Quận</label>
            <select name="DISTRICT_ID[] " id="select_district_id_3 " class=" chosen-select-max-three " multiple disabled="disabled ">
                <option value="0 " >Chọn</option>
            </select>
            <span class="error_DISTRICT_ID "></span>
        </div>
        <div class="delete active "><a href="javascript:void(0) "><em class="material-icons ">highlight_off</em>Xóa</a></div>
    </div>
</div>


 </div>
    </div>
    <div class="col-md-12 ">
      <div class="row ">
       
        <div class="col-md-6 ">
          <div class="form-group form-select-chosen ">
            <label for="">Phúc lợi mong muốn</label>
            <select  required required data-pristine-required-message="Không được để trống" name="BENEFIT_ID[]" class="chosen-select-max-three " multiple="multiple " placeholder="Phúc lợi mong muốn">
            <?php foreach ($data_job_welfare as $item): ?>
                        <option value="<?= $item["id"] ?>"<?php foreach ($seeker_welfare_by_resume as $value) {
                         if($value["welfare_id"]==$item["id"]){
                            echo "selected";
                         }
                         }?>><?= $item["welfare_type"] ?></option>
                    
                   <?php endforeach;?>

                <!-- <?php foreach ($data_job_welfare as $item):?>
                    <option value="<?= $item["id"] ?>" ><?= $item["welfare_type"] ?></option>
                    
               <?php endforeach;?> -->
                      
                         </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 form-of-work ">
      <h6>* Hình thức làm việc</h6>
     
       <?php foreach ($data_job_type as $item) { ?>
    
          <div class="form-group form-checkbox ">
<input type="checkbox"     <?php foreach ($job_type_by_resume as $value) {
                         if($value["job_type_id"]==$item["id"]){
                            echo "checked";
                         }
            }?> name="chkResumeType[]" id="chkResumeType<?= $item["id"]?>"  value="<?= $item["id"] ?>">
            <label for="chkResumeType<?= $item["id"]?>"><?= $item["job_type"] ?></label>
          </div>
       
      <?php }?>
       
        
    
      <span class="error_chkResumeType_1 "></span> 
    </div>
    <div class="col-md-12 form-of-work ">
      <h6>Phương thức công việc</h6>
      <div class="row ">
        <div class="col-md-6 ">
          <div class="form-group form-checkbox ">
            <input type="checkbox" name="chkWorkHome" <?= $data_resume["wrk_from_home"]==1?"checked":"" ?>id="chkWorkHome "  value="1 ">
            <label for="chkWorkHome ">Làm việc từ nhà</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
@media (min-width: 1200px) {
  .main-quick-upload-resume .list-language .item .form-group {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 44%;
    flex: 0 0 44%;
    max-width: 100%;
    padding: 0 5px;
  }
}
</style>

			

<div class="quick-upload quick-upload-2 ">
  <div class="cb-title-h3 ">
    <h3>Quyền riêng tư của hồ sơ</h3>
  </div>
  <div style="display:flex;gap:15px;align-items:center;margin-bottom:30px;">
  <label for="khoa">Khóa</label>
    <input <?= $data_resume["resume_active"]=="1"?"checked":"" ?> type="radio" id="khoa" name="status"value="1">
    <label for="congkhai">Công khai</label>
    <input <?= $data_resume["resume_active"]=="2"?"checked":"" ?> type="radio" id="congkhai" name="status"value="2">
    <label for="khancap">Khẩn cấp</label>
    <input <?= $data_resume["resume_active"]=="3"?"checked":"" ?> type="radio" id="khancap" name="status"value="3">
  </div>
  
  <!-- <div class="row search-resume ">
    <div class="col-md-6 ">
      <div class="form-group ">
        <span class="hide-infor ">Ẩn một số thông tin</span>
      </div>
    </div>
  </div> -->
  <div class="row ">
    <div class="col-md-12 ">
   
	  <div class="form-group form-submit form-back "><button style="width:200px;"type="submit" class="btn-gradient save-and-finish">Lưu và hoàn thành</button></div>
    </div>
    <div class="col-md-12 ">
      <div class="form-group form-note ">
        <p>* Thông tin bắt buộc</p>
      </div>
    </div>
  </div>
</div>      </form>
    </div>
  </div>
</section>
<div class="hide-infor-modal " id="hide-info " style="display: none ">
	<div class="modal-title ">
		<p>Ẩn một số thông tin</p>
	</div>
	<div class="modal-body ">
		<form name="frmConfident " id="frmConfident " method="POST ">
			<input type="hidden " name="r_id " value="0 " />
			<input type="hidden " name="j_id " value="6344693 " />
									<div class="line ">
				<p>Thông tin cá nhân</p>
			</div>
			<div class="row data-list ">
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_6 " name="chkConfidential[6] " data-bit="6 " value="1 "  />
						<label for="chkConfidential_6 ">Tình trạng hôn nhân</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_0 " name="chkConfidential[0] " data-bit="0 " value="1 "  />
						<label for="chkConfidential_0 ">Ẩn Họ và tên</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_1 " name="chkConfidential[1] " data-bit="1 " value="1 "  />
						<label for="chkConfidential_1 ">Ẩn Địa chỉ</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " id="chkConfidential_2 " type="checkbox "  name="chkConfidential[3] " data-bit="3 " value="1 "  />
						<label for="chkConfidential_2 ">Ẩn Số điện thoại</label>
					</div>
				</div>
			</div>
			<div class="line ">
				<p>Thông tin công việc</p>
			</div>
			<div class="row data-list ">
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
                        <?php foreach ($data_job_welfare as $item): ?>
                      	<input class="input_confident" type="checkbox" id="chkConfidential_<?= $item["id"]?>" name="chkConfidential[]"  value="1"  />
                          <label for="chkConfidential_<?= $item["id"]?>"><?= $item["welfare_type"]?></label>
                     <?php endforeach;?>
					
					</div>
				</div>
				
				</div>
			</div>
		</form>
		<div class="button-modal "><a class="btn-gradient " onclick="saveConfResume(); "  href="javascript:void(0); ">Lưu lại</a></div>
	</div>

    <div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" id="thongtincanhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div style="width:730px;" class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h2 class="modal-title"    >Thông tin cá nhân</h2>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="my_profile/UpdateProfile" method="post" id="personalInfoForm" autocomplete="off">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* Họ và tên lót</label>
                                             <input 
                                                required 
                                                data-pristine-required-message="Không được để trống"   
                                                type="text" value="<?=  $informationUser["lastname"]?>"  name="lastname" id="lastname"  maxlength="30" class="valid">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* Tên</label>
                                             <input
                                                required 
                                                data-pristine-required-message="Không được để trống"   
                                                type="text" value="<?= $informationUser["firstname"] ?>"  name="firstname" id="firstname" value="Ba" maxlength="30">
                                             <span class="err_firstname" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-radio">
                                             <p style="width:100%;">* Giới tính</p>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="1") {echo 'checked';}  ?>  type="radio" id="gender_m" value="1" checked="checked" name="gender">
                                                <label for="gender_m">Nam</label>
                                             </div>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="2") {echo 'checked';}  ?> type="radio" id="gender_f" value="2" name="gender">
                                                <label for="gender_f">Nữ</label>
                                             </div>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="3") {echo 'checked';}  ?> type="radio" id="gender_other" value="3" name="gender">
                                                <label for="gender_other">Khác</label>
                                             </div>
                                             <span class="err_gender" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-birthday">
                                             <label for="">* Ngày sinh</label>
                                             <input 
                                                required 
                                                data-pristine-required-message="Nhập ngày tháng năm sinh của bạn"   
                                                type="text" value="<?=  formatDate($informationUser["date_of_birth"])?>" class="date_month" name="birthday" ">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label for="">* Số điện thoại</label>
                                             <input 
                                                required 
                                                data-pristine-required-message="Vui lòng nhập số điện thoại"   
                                                type="text"  name="mobile" id="mobile" value="<?= !empty($informationUser["contact_phone"])? $informationUser["contact_phone"]: "" ?>" maxlength="20" style="margin-top:5px">
                                             <span class="err_mobile" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label for="">* Email</label>
                                             <input type="text"  id="email_member_edit" value="<?= $informationUser["email"] ?>" readonly="readonly" disabled="disabled" style="margin-top:5px">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tình trạng hôn nhân</label>
                                             <select name="slMarritial">
                                                <option <?php 
                                                   if($informationUser["marital_status"]==1)
                                                   {echo 'selected';} 
                                                   
                                                   
                                                   ?> value="1" >Độc thân</option>
                                                <option <?php if($informationUser["marital_status"]==2){echo 'selected';} ?>  value="2">Đã kết hôn</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tỉnh / Thành phố</label>
                                             <select 
                                                name="slcity" id="slcity" class="select-province-city" >
                                                <option value="">Chọn</option>
                                             </select>
                                             <span class="err_slcity" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <!--id="areaDistrict"-->
                                          <div class="form-group form-select">
                                             <label for="">* Quận/huyện</label>
                                             <select
                                                required 
                                                data-pristine-required-message="Không được để trống"     
                                                name="sldistrict" id="sldistrict" class="select-district">
                                             </select>
                                             <span class="err_sldistrict" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="">* Địa chỉ (Số nhà, Đường)</label>
                                          <div class="form-group form-text">
                                             <input
                                                required 
                                                data-pristine-required-message="Không được để trống"  
                                                type="text"  name="address" value="<?= !empty($informationUser["address"])? $informationUser["address"]: "" ?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <div class="button-save button-center">
                                          <!-- data-bs-dismiss="modal" -->
                                          <button name="personalInfoForm" class="btn-primary" type="submit">Lưu lại</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>


</div>


<script type="text/javascript ">
$(document).ready(function() {
	$('#btnClose, .btn-close-modal').click(function(){
		$.fancybox.close();
	});

	$('.input_confident').click(
		function(){
			var cR = '';
			var name = $(this).attr('name');
			var vS = $('#strConfidential').val();
			if($(this).is(':checked'))
				cR = '1';
			else
				cR = '0';
			if(name == 'chkConfidential[0]')
				vS = vS.replaceAt(0, cR);
			else if(name == 'chkConfidential[1]')
				vS = vS.replaceAt(1, cR);
			else if(name == 'chkConfidential[3]')
				vS = vS.replaceAt(3, cR);
			else if(name == 'chkConfidential[6]')
				vS = vS.replaceAt(6, cR);
			else if(name == 'chkConfidential[7]')
				vS = vS.replaceAt(7, cR);
			else if(name == 'chkConfidential[8]')
				vS = vS.replaceAt(8, cR);
			else if(name == 'chkConfidential[9]')
				vS = vS.replaceAt(9, cR);
			$('#strConfidential').val(vS);
		}
	);

	String.prototype.replaceAt=function(index, char) {
		var a = this.split(" ");
		a[index] = char;
		return a.join(" ");
	}
});
function showConfident() {
	$.fancybox.close();
	$.fancybox.open({
		'src': '#confidential',
	});
}
function saveConfResume(){
	var arrConfident = $('#frmConfident').serializeArray()
    arrConfident.push({name:"csrf_token ", value:$("#csrf_token ").val()});
	if(resume_id > 0){
		$.ajax({
			type: "POST ",
			url: ROOT_KIEMVIEC + mapKeywords.cv_hay +'/saveconfiresume',
			data: arrConfident,
			success: function(data){
			}
		});
	}
	$.fancybox.close();
}
function showboxupdateinfor() {
	$.fancybox.close();
	$.fancybox.open({
		'src': '#AlertUpdateResume',
	});
}

function changeHiddenInfo(element, bit) {
	alert($(element).val());
}
</script>

<script>/*jquery.auto-complete.js*/

function removeUnicode(strings){var strTemp=strings;strTemp=strTemp.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a ");strTemp=strTemp.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e ");strTemp=strTemp.replace(/ì|í|ị|ỉ|ĩ/g,"i
                                            ");strTemp=strTemp.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o ");strTemp=strTemp.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u ");strTemp=strTemp.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y ");strTemp=strTemp.replace(/đ/g,"d ");strTemp=strTemp.replace(/̀|́|̣|̉|̃|/gi," ");return strTemp;}
(function($){$.fn.autoComplete=function(options){var o=$.extend({},$.fn.autoComplete.defaults,options);if(typeof options=='string'){this.each(function(){var that=$(this);if(options=='destroy'){$(window).off('resize.autocomplete',that.updateSC);that.off('blur.autocomplete focus.autocomplete keydown.autocomplete keyup.autocomplete');if(that.data('autocomplete'))
that.attr('autocomplete',that.data('autocomplete'));else
that.removeAttr('autocomplete');$(that.data('sc')).remove();that.removeData('sc').removeData('autocomplete');}});return this;}
return this.each(function(){var that=$(this);that.sc=$('<div class="autocomplete-suggestions '+o.menuClass+'
                                            "></div>');that.data('sc',that.sc).data('autocomplete',that.attr('autocomplete'));that.attr('autocomplete','off');that.cache={};that.last_val='';that.updateSC=function(resize,next){that.sc.css({top:that.offset().top+that.outerHeight(),left:that.offset().left,width:that.outerWidth()});if(!resize){that.sc.show();if(!that.sc.maxHeight)that.sc.maxHeight=parseInt(that.sc.css('max-height'));if(!that.sc.suggestionHeight)that.sc.suggestionHeight=$('.autocomplete-suggestion',that.sc).first().outerHeight();if(that.sc.suggestionHeight)
if(!next)that.sc.scrollTop(0);else{var scrTop=that.sc.scrollTop(),selTop=next.offset().top-that.sc.offset().top;if(selTop+that.sc.suggestionHeight-that.sc.maxHeight>0)
that.sc.scrollTop(selTop+that.sc.suggestionHeight+scrTop-that.sc.maxHeight);else if(selTop<0)
that.sc.scrollTop(selTop+scrTop);}}}
$(window).on('resize.autocomplete',that.updateSC);that.sc.appendTo('body');that.sc.on('mouseleave','.autocomplete-suggestion',function(){$('.autocomplete-suggestion.selected').removeClass('selected');});that.sc.on('mouseenter','.autocomplete-suggestion',function(){$('.autocomplete-suggestion.selected').removeClass('selected');$(this).addClass('selected');});that.sc.on('mousedown click','.autocomplete-suggestion',function(e){var item=$(this),v=item.data('val');if(v||item.hasClass('autocomplete-suggestion')){that.val(v);o.onSelect(e,v,item);that.sc.hide();}
return false;});that.on('blur.autocomplete',function(){try{over_sb=$('.autocomplete-suggestions:hover').length;}catch(e){over_sb=0;}
if(!over_sb){that.last_val=that.val();that.sc.hide();setTimeout(function(){that.sc.hide();},350);}else if(!that.is(':focus'))setTimeout(function(){that.focus();},20);});if(!o.minChars)that.on('focus.autocomplete',function(){that.last_val='\n';that.trigger('keyup.autocomplete');});function suggest(data){var val=that.val();that.cache[val]=data;if(data.length&&val.length>=o.minChars){var s='';for(var i=0;i<data.length;i++)s+=o.renderItem(data[i],val);that.sc.html(s);that.updateSC(0);}
else
that.sc.hide();}
that.on('keydown.autocomplete',function(e){if((e.which==40||e.which==38)&&that.sc.html()){var next,sel=$('.autocomplete-suggestion.selected',that.sc);if(!sel.length){next=(e.which==40)?$('.autocomplete-suggestion',that.sc).first():$('.autocomplete-suggestion',that.sc).last();that.val(next.addClass('selected').data('val'));}else{next=(e.which==40)?sel.next('.autocomplete-suggestion'):sel.prev('.autocomplete-suggestion');if(next.length){sel.removeClass('selected');that.val(next.addClass('selected').data('val'));}
else{sel.removeClass('selected');that.val(that.last_val);next=0;}}
that.updateSC(0,next);return false;}
else if(e.which==27)that.val(that.last_val).sc.hide();else if(e.which==13||e.which==9){var sel=$('.autocomplete-suggestion.selected',that.sc);if(sel.length&&that.sc.is(':visible')){o.onSelect(e,sel.data('val'),sel);setTimeout(function(){that.sc.hide();},20);}}});that.on('keyup.autocomplete',function(e){if(!~$.inArray(e.which,[13,27,35,36,37,38,39,40])){var val=that.val();if(val.length>=o.minChars){if(val!=that.last_val){that.last_val=val;clearTimeout(that.timer);if(o.cache){if(val in that.cache){suggest(that.cache[val]);return;}
for(var i=1;i<val.length-o.minChars;i++){var part=val.slice(0,val.length-i);if(part in that.cache&&!that.cache[part].length){suggest([]);return;}}}
that.timer=setTimeout(function(){o.source(val,suggest)},o.delay);}}else{that.last_val=val;that.sc.hide();}}});});}
$.fn.autoComplete.defaults={source:0,minChars:3,delay:150,cache:1,menuClass:'',renderItem:function(item,search){var item_convert=removeUnicode(item);var search_convert=removeUnicode(search);search=search.replace(/[-\/\\^$*+?.()|[\]{}]/g,'\\$&');var re=new RegExp("( "+search.split(' ').join('|')+") ","gi ");var re_convert=new RegExp("( "+search_convert+") ","gi
                                            ");var search_match=re_convert.exec(item_convert);if(search_match&&search_convert.length){var startpos=search_match.index;var prefix=item.slice(0,startpos);var fix=item.slice(startpos,startpos+search_convert.length);var suffix=item.slice(startpos+search_convert.length);return'<div class="autocomplete-suggestion " data-val=" '+item+' ">'+prefix+'<b>'+fix+'</b>'+suffix+'</div>';}else{return'<div class="autocomplete-suggestion " data-val=" '+item+' ">'+item.replace(re,"<b>$1</b>")+'</div>';}},onSelect:function(e,term,item){}};}(jQuery)); /*chosen.jquery.js*/ (function(){var $,AbstractChosen,Chosen,SelectParser,bind=function(fn,me){return function(){return fn.apply(me,arguments);};},extend=function(child,parent){for(var
                                        key in parent){if(hasProp.call(parent,key))child[key]=parent[key];}function ctor(){this.constructor=child;}ctor.prototype=parent.prototype;child.prototype=new ctor();child.__super__=parent.prototype;return child;},hasProp={}.hasOwnProperty;SelectParser=(function(){function
                                        SelectParser(){this.options_index=0;this.parsed=[];} SelectParser.prototype.add_node=function(child){if(child.nodeName.toUpperCase()==="OPTGROUP"){return this.add_group(child);}else{return this.add_option(child);}};SelectParser.prototype.add_group=function(group){var
                                        group_position,i,len,option,ref,results1;group_position=this.parsed.length;this.parsed.push({array_index:group_position,group:true,label:group.label,title:group.title?group.title:void 0,children:0,disabled:group.disabled,classes:group.className});ref=group.childNodes;results1=[];for(i=0,len=ref.length;i
                                        <len;i++){option=ref[i];results1.push(this.add_option(option,group_position,group.disabled));}
                                            return results1;};SelectParser.prototype.add_option=function(option,group_position,group_disabled){if(option.nodeName.toUpperCase()==="OPTION" ){if(option.text!=="" ){if(group_position!=null){this.parsed[group_position].children+=1;}
                                            this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,value:option.value,text:option.text,html:option.innerHTML,title:option.title?option.title:void 0,selected:option.selected,disabled:group_disabled===true?group_disabled:option.disabled,group_array_index:group_position,group_label:group_position!=null?this.parsed[group_position].label:null,classes:option.className,style:option.style.cssText});}else{this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,empty:true});}
                                            return this.options_index+=1;}};return SelectParser;})();SelectParser.select_to_array=function(select){var child,i,len,parser,ref;parser=new SelectParser();ref=select.childNodes;for(i=0,len=ref.length;i<len;i++){child=ref[i];parser.add_node(child);}
                                            return parser.parsed;};AbstractChosen=(function(){function AbstractChosen(form_field,options1){this.form_field=form_field;this.options=options1!=null?options1:{};this.label_click_handler=bind(this.label_click_handler,this);if(!AbstractChosen.browser_is_supported()){return;}
                                            this.is_multiple=this.form_field.multiple;this.set_default_text();this.set_default_values();this.setup();this.set_up_html();this.register_observers();this.on_ready();} AbstractChosen.prototype.set_default_values=function(){this.click_test_action=(function(_this){return
                                            function(evt){return _this.test_active_click(evt);};})(this);this.activate_action=(function(_this){return function(evt){return _this.activate_field(evt);};})(this);this.active_field=false;this.mouse_on_container=false;this.results_showing=false;this.result_highlighted=null;this.is_rtl=this.options.rtl||/\bchosen-rtl\b/.test(this.form_field.className);this.allow_single_deselect=(this.options.allow_single_deselect!=null)&&(this.form_field.options[0]!=null)&&this.form_field.options[0].text===""
                                            ?this.options.allow_single_deselect:false;this.disable_search_threshold=this.options.disable_search_threshold||0;this.disable_search=this.options.disable_search||false;this.enable_split_word_search=this.options.enable_split_word_search!=null?this.options.enable_split_word_search:true;this.group_search=this.options.group_search!=null?this.options.group_search:true;this.search_contains=this.options.search_contains||false;this.single_backstroke_delete=this.options.single_backstroke_delete!=null?this.options.single_backstroke_delete:true;this.max_selected_options=this.options.max_selected_options||Infinity;this.inherit_select_classes=this.options.inherit_select_classes||false;this.display_selected_options=this.options.display_selected_options!=null?this.options.display_selected_options:true;this.display_disabled_options=this.options.display_disabled_options!=null?this.options.display_disabled_options:true;this.include_group_label_in_selected=this.options.include_group_label_in_selected||false;this.max_shown_results=this.options.max_shown_results||Number.POSITIVE_INFINITY;this.case_sensitive_search=this.options.case_sensitive_search||false;return
                                            this.hide_results_on_select=this.options.hide_results_on_select!=null?this.options.hide_results_on_select:true;};AbstractChosen.prototype.set_default_text=function(){if(this.form_field.getAttribute(
                                            "data-placeholder")){this.default_text=this.form_field.getAttribute( "data-placeholder");}else if(this.is_multiple){this.default_text=this.options.placeholder_text_multiple||this.options.placeholder_text||AbstractChosen.default_multiple_text;}else{this.default_text=this.options.placeholder_text_single||this.options.placeholder_text||AbstractChosen.default_single_text;}
                                            this.default_text=this.escape_html(this.default_text);return this.results_none_found=this.form_field.getAttribute( "data-no_results_text")||this.options.no_results_text||AbstractChosen.default_no_result_text;};AbstractChosen.prototype.choice_label=function(item){if(this.include_group_label_in_selected&&(item.group_label!=null)){return
                                            "<b class='group-name'>"+(this.escape_html(item.group_label))+ "</b>"+item.html;}else{return item.html;}};AbstractChosen.prototype.mouse_enter=function(){return this.mouse_on_container=true;};AbstractChosen.prototype.mouse_leave=function(){return
                                            this.mouse_on_container=false;};AbstractChosen.prototype.input_focus=function(evt){if(this.is_multiple){if(!this.active_field){return setTimeout(((function(_this){return function(){return _this.container_mousedown();};})(this)),50);}}else{if(!this.active_field){return
                                            this.activate_field();}}};AbstractChosen.prototype.input_blur=function(evt){if(!this.mouse_on_container){this.active_field=false;return setTimeout(((function(_this){return function(){return _this.blur_test();};})(this)),100);}};AbstractChosen.prototype.label_click_handler=function(evt){if(this.is_multiple){return
                                            this.container_mousedown(evt);}else{return this.activate_field();}};AbstractChosen.prototype.results_option_build=function(options){var content,data,data_content,i,len,ref,shown_results;content='' ;shown_results=0;ref=this.results_data;for(i=0,len=ref.length;i<len;i++){data=ref[i];data_content=''
                                            ;if(data.group){data_content=this.result_add_group(data);}else{data_content=this.result_add_option(data);} if(data_content!=='' ){shown_results++;content+=data_content;} if(options!=null?options.first:void 0){if(data.selected&&this.is_multiple){this.choice_build(data);}else
                                            if(data.selected&&!this.is_multiple){this.single_set_selected_text(this.choice_label(data));}} if(shown_results>=this.max_shown_results){break;}} return content;};AbstractChosen.prototype.result_add_option=function(option){var classes,option_el;if(!option.search_match){return'';} if(!this.include_option_in_results(option)){return'';}
                                            classes=[];if(!option.disabled&&!(option.selected&&this.is_multiple)){classes.push("active-result");} if(option.disabled&&!(option.selected&&this.is_multiple)){classes.push("disabled-result");} if(option.selected){classes.push("result-selected");}
                                            if(option.group_array_index!=null){classes.push("group-option");} if(option.classes!==""){classes.push(option.classes);} option_el=document.createElement("li");option_el.className=classes.join(" ");if(option.style){option_el.style.cssText=option.style;}
                                            option_el.setAttribute("data-option-array-index",option.array_index);option_el.innerHTML=option.highlighted_html||option.html;if(option.title){option_el.title=option.title;} return this.outerHTML(option_el);};AbstractChosen.prototype.result_add_group=function(group){var
                                            classes,group_el;if(!(group.search_match||group.group_match)){return'';} if(!(group.active_options>0)){return'';} classes=[];classes.push("group-result");if(group.classes){classes.push(group.classes);} group_el=document.createElement("li");group_el.className=classes.join("
                                            ");group_el.innerHTML=group.highlighted_html||this.escape_html(group.label);if(group.title){group_el.title=group.title;} return this.outerHTML(group_el);};AbstractChosen.prototype.results_update_field=function(){this.set_default_text();if(!this.is_multiple){this.results_reset_cleanup();}
                                            this.result_clear_highlight();this.results_build();if(this.results_showing){return this.winnow_results();}};AbstractChosen.prototype.reset_single_select_options=function(){var i,len,ref,result,results1;ref=this.results_data;results1=[];for(i=0,len=ref.length;i
                                            <len;i++){result=ref[i];if(result.selected){results1.push(result.selected=false);}else{results1.push(void
                                                0);}} return results1;};AbstractChosen.prototype.results_toggle=function(){if(this.results_showing){return this.results_hide();}else{return this.results_show();}};AbstractChosen.prototype.results_search=function(evt){if(this.results_showing){return
                                                this.winnow_results();}else{return this.results_show();}};AbstractChosen.prototype.winnow_results=function(options){var escapedQuery,fix,i,len,option,prefix,query,ref,regex,results,results_group,search_match,startpos,suffix,text;this.no_results_clear();results=0;query=this.get_search_text();var
                                                strTemp=query.toLowerCase();strTemp=strTemp.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/gi, "a");strTemp=strTemp.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");strTemp=strTemp.replace(/ì|í|ị|ỉ|ĩ/gi, "i");strTemp=strTemp.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/gi,
                                                "o");strTemp=strTemp.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");strTemp=strTemp.replace(/ỳ|ý|ỵ|ỷ|ỹ/gi, "y");strTemp=strTemp.replace(/đ/gi, "d");strTemp=strTemp.replace(/̀|́|̣|̉|̃|/gi, "");escapedQuery=strTemp.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,
                                                "\\$&");regex=this.get_search_regex(escapedQuery);ref=this.results_data;for(i=0,len=ref.length;i<len;i++){option=ref[i];option.search_match=false;results_group=null;search_match=null;option.highlighted_html='' ;if(this.include_option_in_results(option)){if(option.group){option.group_match=false;option.active_options=0;}
                                                if((option.group_array_index!=null)&&this.results_data[option.group_array_index]){results_group=this.results_data[option.group_array_index];if(results_group.active_options===0&&results_group.search_match){results+=1;}
                                                results_group.active_options+=1;} text=option.group?option.label:option.text;if(!(option.group&&!this.group_search)){search_match=this.search_string_match(text,regex);option.search_match=search_match!=null;if(option.search_match&&!option.group){results+=1;}
                                                if(option.search_match){if(query.length){startpos=search_match.index;prefix=text.slice(0,startpos);fix=text.slice(startpos,startpos+query.length);suffix=text.slice(startpos+query.length);option.highlighted_html=(this.escape_html(prefix))+
                                                "<em>"+(this.escape_html(fix))+ "</em>"+(this.escape_html(suffix));} if(results_group!=null){results_group.group_match=true;}}else if((option.group_array_index!=null)&&this.results_data[option.group_array_index].search_match){option.search_match=true;}}}}
                                                this.result_clear_highlight();if(results<1&&query.length){this.update_results_content( "");return this.no_results(query);}else{this.update_results_content(this.results_option_build());if(!(options!=null?options.skip_highlight:void
                                                0)){return this.winnow_results_set_highlight();}}};AbstractChosen.prototype.get_search_regex=function(escaped_search_string){var regex_flag,regex_string;regex_string=this.search_contains?escaped_search_string:
                                                "(^|\\s|\\b)"+escaped_search_string+ "[^\\s]*";if(!(this.enable_split_word_search||this.search_contains)){regex_string="^" +regex_string;} regex_flag=this.case_sensitive_search? "": "i";return new RegExp(regex_string,regex_flag);};AbstractChosen.prototype.search_string_match=function(search_string,regex){var
                                                match;var strTemp=search_string.toLowerCase();strTemp=strTemp.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");strTemp=strTemp.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");strTemp=strTemp.replace(/ì|í|ị|ỉ|ĩ/g,
                                                "i");strTemp=strTemp.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");strTemp=strTemp.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");strTemp=strTemp.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");strTemp=strTemp.replace(/đ/g, "d");strTemp=strTemp.replace(/̀|́|̣|̉|̃|/gi,
                                                "");match=regex.exec(strTemp);if(!this.search_contains&&(match!=null?match[1]:void 0)){match.index+=1;} return match;};AbstractChosen.prototype.choices_count=function(){var i,len,option,ref;if(this.selected_option_count!=null){return
                                                this.selected_option_count;} this.selected_option_count=0;ref=this.form_field.options;for(i=0,len=ref.length;i<len;i++){option=ref[i];if(option.selected){this.selected_option_count+=1;}} return this.selected_option_count;};AbstractChosen.prototype.choices_click=function(evt){evt.preventDefault();this.activate_field();if(!(this.results_showing||this.is_disabled)){return
                                                this.results_show();}};AbstractChosen.prototype.keydown_checker=function(evt){var ref,stroke;stroke=(ref=evt.which)!=null?ref:evt.keyCode;this.search_field_scale();if(stroke!==8&&this.pending_backstroke){this.clear_backstroke();}
                                                switch(stroke){case 8:this.backstroke_length=this.get_search_field_value().length;break;case 9:if(this.results_showing&&!this.is_multiple){this.result_select(evt);} this.mouse_on_container=false;break;case 13:if(this.results_showing){evt.preventDefault();}
                                                break;case 27:if(this.results_showing){evt.preventDefault();} break;case 32:if(this.disable_search){evt.preventDefault();} break;case 38:evt.preventDefault();this.keyup_arrow();break;case 40:evt.preventDefault();this.keydown_arrow();break;}};AbstractChosen.prototype.keyup_checker=function(evt){var
                                                ref,stroke;stroke=(ref=evt.which)!=null?ref:evt.keyCode;this.search_field_scale();switch(stroke){case 8:if(this.is_multiple&&this.backstroke_length<1&&this.choices_count()>0){this.keydown_backstroke();}else if(!this.pending_backstroke){this.result_clear_highlight();this.results_search();} break;case 13:evt.preventDefault();if(this.results_showing){this.result_select(evt);} break;case
                                                27:if(this.results_showing){this.results_hide();} break;case 9:case 16:case 17:case 18:case 38:case 40:case 91:break;default:this.results_search();break;}};AbstractChosen.prototype.clipboard_event_checker=function(evt){if(this.is_disabled){return;}
                                                return setTimeout(((function(_this){return function(){return _this.results_search();};})(this)),50);};AbstractChosen.prototype.container_width=function(){if(this.options.width!=null){return this.options.width;}else{return
                                                this.form_field.offsetWidth+"px";}};AbstractChosen.prototype.include_option_in_results=function(option){if(this.is_multiple&&(!this.display_selected_options&&option.selected)){return false;} if(!this.display_disabled_options&&option.disabled){return
                                                false;} if(option.empty){return false;} return true;};AbstractChosen.prototype.search_results_touchstart=function(evt){this.touch_started=true;return this.search_results_mouseover(evt);};AbstractChosen.prototype.search_results_touchmove=function(evt){this.touch_started=false;return
                                                this.search_results_mouseout(evt);};AbstractChosen.prototype.search_results_touchend=function(evt){if(this.touch_started){return this.search_results_mouseup(evt);}};AbstractChosen.prototype.outerHTML=function(element){var
                                                tmp;if(element.outerHTML){return element.outerHTML;} tmp=document.createElement("div");tmp.appendChild(element);return tmp.innerHTML;};AbstractChosen.prototype.get_single_html=function(){return"<a class=\
                                                    "chosen-single chosen-default\">\n  <span>"+this.default_text+"</span>\n  <div><b></b></div>\n</a>\n
                                                <div class=\ "chosen-drop\">\n
                                                    <div class=\ "chosen-search\">\n <input class=\ "chosen-search-input\" type=\ "search\" autocomplete=\ "off\" />\n </div>\n
                                                    <ul class=\ "chosen-results\"></ul>\n</div>";};AbstractChosen.prototype.get_multi_html=function(){return"
                                                <ul class=\ "chosen-choices\">\n
                                                    <li class=\ "search-field\">\n <input class=\ "chosen-search-input\" type=\ "search\" autocomplete=\ "off\" value=\ ""+this.default_text+ "\" />\n </li>\n</ul>\n
                                                <div class=\ "chosen-drop\">\n
                                                    <ul class=\ "chosen-results\"></ul>\n</div>";};AbstractChosen.prototype.get_no_results_html=function(terms){return"
                                                <li class=\ "no-results\">\n "+this.results_none_found+" <span>"+(this.escape_html(terms))+"</span>\n</li>";};AbstractChosen.browser_is_supported=function(){if("Microsoft Internet Explorer"===window.navigator.appName){return document.documentMode>=8;}
                                                return true;};AbstractChosen.default_multiple_text="Select Some Options";AbstractChosen.default_single_text="Select an Option";AbstractChosen.default_no_result_text="No results match";return AbstractChosen;})();$=jQuery;$.fn.extend({chosen:function(options){if(!AbstractChosen.browser_is_supported()){return
                                                this;} return this.each(function(input_field){var $this,chosen;$this=$(this);chosen=$this.data('chosen');if(options==='destroy'){if(chosen instanceof Chosen){chosen.destroy();} return;} if(!(chosen instanceof
                                                Chosen)){$this.data('chosen',new Chosen(this,options));}});}});Chosen=(function(superClass){extend(Chosen,superClass);function Chosen(){return Chosen.__super__.constructor.apply(this,arguments);} Chosen.prototype.setup=function(){this.form_field_jq=$(this.form_field);return
                                                this.current_selectedIndex=this.form_field.selectedIndex;};Chosen.prototype.set_up_html=function(){var container_classes,container_props;container_classes=["chosen-container"];container_classes.push("chosen-container-"+(this.is_multiple?"multi":"single"));if(this.inherit_select_classes&&this.form_field.className){container_classes.push(this.form_field.className);}
                                                if(this.is_rtl){container_classes.push("chosen-rtl");} container_props={'class':container_classes.join(' '),'title':this.form_field.title};if(this.form_field.id.length){container_props.id=this.form_field.id.replace(/[^\w]/g,'_')+"_chosen";}
                                                this.container=$("
                                                <div />",container_props);this.container.width(this.container_width());if(this.is_multiple){this.container.html(this.get_multi_html());}else{this.container.html(this.get_single_html());} this.form_field_jq.hide().after(this.container);this.dropdown=this.container.find('div.chosen-drop').first();this.search_field=this.container.find('input').first();this.search_results=this.container.find('ul.chosen-results').first();this.search_field_scale();this.search_no_results=this.container.find('li.no-results').first();if(this.is_multiple){this.search_choices=this.container.find('ul.chosen-choices').first();this.search_container=this.container.find('li.search-field').first();}else{this.search_container=this.container.find('div.chosen-search').first();this.selected_item=this.container.find('.chosen-single').first();}
                                                this.results_build();this.set_tab_index();return this.set_label_behavior();};Chosen.prototype.on_ready=function(){return this.form_field_jq.trigger("chosen:ready",{chosen:this});};Chosen.prototype.register_observers=function(){this.container.on('touchstart.chosen',(function(_this){return
                                                function(evt){_this.container_mousedown(evt);};})(this));this.container.on('touchend.chosen',(function(_this){return function(evt){_this.container_mouseup(evt);};})(this));this.container.on('mousedown.chosen',(function(_this){return
                                                function(evt){_this.container_mousedown(evt);};})(this));this.container.on('mouseup.chosen',(function(_this){return function(evt){_this.container_mouseup(evt);};})(this));this.container.on('mouseenter.chosen',(function(_this){return
                                                function(evt){_this.mouse_enter(evt);};})(this));this.container.on('mouseleave.chosen',(function(_this){return function(evt){_this.mouse_leave(evt);};})(this));this.search_results.on('mouseup.chosen',(function(_this){return
                                                function(evt){_this.search_results_mouseup(evt);};})(this));this.search_results.on('mouseover.chosen',(function(_this){return function(evt){_this.search_results_mouseover(evt);};})(this));this.search_results.on('mouseout.chosen',(function(_this){return
                                                function(evt){_this.search_results_mouseout(evt);};})(this));this.search_results.on('mousewheel.chosen DOMMouseScroll.chosen',(function(_this){return function(evt){_this.search_results_mousewheel(evt);};})(this));this.search_results.on('touchstart.chosen',(function(_this){return
                                                function(evt){_this.search_results_touchstart(evt);};})(this));this.search_results.on('touchmove.chosen',(function(_this){return function(evt){_this.search_results_touchmove(evt);};})(this));this.search_results.on('touchend.chosen',(function(_this){return
                                                function(evt){_this.search_results_touchend(evt);};})(this));this.form_field_jq.on("chosen:updated.chosen",(function(_this){return function(evt){_this.results_update_field(evt);};})(this));this.form_field_jq.on("chosen:activate.chosen",(function(_this){return
                                                function(evt){_this.activate_field(evt);};})(this));this.form_field_jq.on("chosen:open.chosen",(function(_this){return function(evt){_this.container_mousedown(evt);};})(this));this.form_field_jq.on("chosen:close.chosen",(function(_this){return
                                                function(evt){_this.close_field(evt);};})(this));this.search_field.on('blur.chosen',(function(_this){return function(evt){_this.input_blur(evt);};})(this));this.search_field.on('keyup.chosen',(function(_this){return
                                                function(evt){_this.keyup_checker(evt);};})(this));this.search_field.on('keydown.chosen',(function(_this){return function(evt){_this.keydown_checker(evt);};})(this));this.search_field.on('focus.chosen',(function(_this){return
                                                function(evt){_this.input_focus(evt);};})(this));this.search_field.on('cut.chosen',(function(_this){return function(evt){_this.clipboard_event_checker(evt);};})(this));this.search_field.on('paste.chosen',(function(_this){return
                                                function(evt){_this.clipboard_event_checker(evt);};})(this));if(this.is_multiple){return this.search_choices.on('click.chosen',(function(_this){return function(evt){_this.choices_click(evt);};})(this));}else{return
                                                this.container.on('click.chosen',function(evt){evt.preventDefault();});}};Chosen.prototype.destroy=function(){$(this.container[0].ownerDocument).off('click.chosen',this.click_test_action);if(this.form_field_label.length>0){this.form_field_label.off('click.chosen');}
                                                if(this.search_field[0].tabIndex){this.form_field_jq[0].tabIndex=this.search_field[0].tabIndex;} this.container.remove();this.form_field_jq.removeData('chosen');return this.form_field_jq.show();};Chosen.prototype.search_field_disabled=function(){this.is_disabled=this.form_field.disabled||this.form_field_jq.parents('fieldset').is(':disabled');this.container.toggleClass('chosen-disabled',this.is_disabled);this.search_field[0].disabled=this.is_disabled;if(!this.is_multiple){this.selected_item.off('focus.chosen',this.activate_field);}
                                                if(this.is_disabled){return this.close_field();}else if(!this.is_multiple){return this.selected_item.on('focus.chosen',this.activate_field);}};Chosen.prototype.container_mousedown=function(evt){var ref;if(this.is_disabled){return;}
                                                if(evt&&((ref=evt.type)==='mousedown'||ref==='touchstart')&&!this.results_showing){evt.preventDefault();} if(!((evt!=null)&&($(evt.target)).hasClass("search-choice-close"))){if(!this.active_field){if(this.is_multiple){this.search_field.val("");}
                                                $(this.container[0].ownerDocument).on('click.chosen',this.click_test_action);this.results_show();}else if(!this.is_multiple&&evt&&(($(evt.target)[0]===this.selected_item[0])||$(evt.target).parents("a.chosen-single").length)){evt.preventDefault();this.results_toggle();}
                                                return this.activate_field();}};Chosen.prototype.container_mouseup=function(evt){if(evt.target.nodeName==="ABBR"&&!this.is_disabled){return this.results_reset(evt);}};Chosen.prototype.search_results_mousewheel=function(evt){var
                                                delta;if(evt.originalEvent){delta=evt.originalEvent.deltaY||-evt.originalEvent.wheelDelta||evt.originalEvent.detail;} if(delta!=null){evt.preventDefault();if(evt.type==='DOMMouseScroll'){delta=delta*40;}
                                                return this.search_results.scrollTop(delta+this.search_results.scrollTop());}};Chosen.prototype.blur_test=function(evt){if(!this.active_field&&this.container.hasClass("chosen-container-active")){return this.close_field();}};Chosen.prototype.close_field=function(){$(this.container[0].ownerDocument).off("click.chosen",this.click_test_action);this.active_field=false;this.results_hide();this.container.removeClass("chosen-container-active");this.clear_backstroke();this.show_search_field_default();this.search_field_scale();return
                                                this.search_field.blur();};Chosen.prototype.activate_field=function(){if(this.is_disabled){return;} this.container.addClass("chosen-container-active");this.active_field=true;this.search_field.val(this.search_field.val());return
                                                this.search_field.focus();};Chosen.prototype.test_active_click=function(evt){var active_container;active_container=$(evt.target).closest('.chosen-container');if(active_container.length&&this.container[0]===active_container[0]){return
                                                this.active_field=true;}else{return this.close_field();}};Chosen.prototype.results_build=function(){this.parsing=true;this.selected_option_count=null;this.results_data=SelectParser.select_to_array(this.form_field);if(this.is_multiple){this.search_choices.find("li.search-choice").remove();}else{this.single_set_selected_text();if(this.disable_search||this.form_field.options.length
                                                <=this.disable_search_threshold){this.search_field[0].readOnly=true;this.container.addClass(
                                                    "chosen-container-single-nosearch");}else{this.search_field[0].readOnly=false;this.container.removeClass( "chosen-container-single-nosearch");}} this.update_results_content(this.results_option_build({first:true}));this.search_field_disabled();this.show_search_field_default();this.search_field_scale();return
                                                    this.parsing=false;};Chosen.prototype.result_do_highlight=function(el){var high_bottom,high_top,maxHeight,visible_bottom,visible_top;if(el.length){this.result_clear_highlight();this.result_highlight=el;this.result_highlight.addClass(
                                                    "highlighted");maxHeight=parseInt(this.search_results.css( "maxHeight"),10);visible_top=this.search_results.scrollTop();visible_bottom=maxHeight+visible_top;high_top=this.result_highlight.position().top+this.search_results.scrollTop();high_bottom=high_top+this.result_highlight.outerHeight();if(high_bottom>=visible_bottom){return this.search_results.scrollTop((high_bottom-maxHeight)>0?high_bottom-maxHeight:0);}else if(high_top
                                                    <visible_top){return this.search_results.scrollTop(high_top);}}};Chosen.prototype.result_clear_highlight=function(){if(this.result_highlight){this.result_highlight.removeClass(
                                                        "highlighted");} return this.result_highlight=null;};Chosen.prototype.results_show=function(){if(this.is_multiple&&this.max_selected_options<=this.choices_count()){this.form_field_jq.trigger(
                                                        "chosen:maxselected",{chosen:this});return false;} this.container.addClass( "chosen-with-drop");this.results_showing=true;this.search_field.focus();this.search_field.val(this.get_search_field_value());this.winnow_results();return
                                                        this.form_field_jq.trigger( "chosen:showing_dropdown",{chosen:this});};Chosen.prototype.update_results_content=function(content){return this.search_results.html(content);};Chosen.prototype.results_hide=function(){if(this.results_showing){this.result_clear_highlight();this.container.removeClass(
                                                        "chosen-with-drop");this.form_field_jq.trigger( "chosen:hiding_dropdown",{chosen:this});} return this.results_showing=false;};Chosen.prototype.set_tab_index=function(el){var ti;if(this.form_field.tabIndex){ti=this.form_field.tabIndex;this.form_field.tabIndex=-1;return
                                                        this.search_field[0].tabIndex=ti;}};Chosen.prototype.set_label_behavior=function(){this.form_field_label=this.form_field_jq.parents( "label");if(!this.form_field_label.length&&this.form_field.id.length){this.form_field_label=$(
                                                        "label[for='"+this.form_field.id+ "']");} if(this.form_field_label.length>0){return this.form_field_label.on('click.chosen',this.label_click_handler);}};Chosen.prototype.show_search_field_default=function(){if(this.is_multiple&&this.choices_count()
                                                        <1&&!this.active_field){this.search_field.val(this.default_text);return
                                                            this.search_field.addClass( "default");}else{this.search_field.val( "");return this.search_field.removeClass( "default");}};Chosen.prototype.search_results_mouseup=function(evt){var target;target=$(evt.target).hasClass(
                                                            "active-result")?$(evt.target):$(evt.target).parents( ".active-result").first();if(target.length){this.result_highlight=target;this.result_select(evt);return this.search_field.focus();}};Chosen.prototype.search_results_mouseover=function(evt){var
                                                            target;target=$(evt.target).hasClass( "active-result")?$(evt.target):$(evt.target).parents( ".active-result").first();if(target){return this.result_do_highlight(target);}};Chosen.prototype.search_results_mouseout=function(evt){if($(evt.target).hasClass(
                                                            "active-result")||$(evt.target).parents( '.active-result').first()){return this.result_clear_highlight();}};Chosen.prototype.choice_build=function(item){var choice,close_link;choice=$( '<li />',{ "class":
                                                            "search-choice"}).html( "<span>"+(this.choice_label(item))+ "</span>");if(item.disabled){choice.addClass( 'search-choice-disabled');}else{close_link=$( '<a />',{ "class": 'search-choice-close',
                                                            'data-option-array-index':item.array_index});close_link.on( 'click.chosen',(function(_this){return function(evt){return _this.choice_destroy_link_click(evt);};})(this));choice.append(close_link);} return this.search_container.before(choice);};Chosen.prototype.choice_destroy_link_click=function(evt){evt.preventDefault();evt.stopPropagation();if(!this.is_disabled){return
                                                            this.choice_destroy($(evt.target));}};Chosen.prototype.choice_destroy=function(link){if(this.result_deselect(link[0].getAttribute( "data-option-array-index"))){if(this.active_field){this.search_field.focus();}else{this.show_search_field_default();}
                                                            if(this.is_multiple&&this.choices_count()>0&&this.get_search_field_value().length
                                                            <1){this.results_hide();} link.parents( 'li').first().remove();return this.search_field_scale();}};Chosen.prototype.results_reset=function(){this.reset_single_select_options();this.form_field.options[0].selected=true;this.single_set_selected_text();this.show_search_field_default();this.results_reset_cleanup();this.trigger_form_field_change();if(this.active_field){return
                                                                this.results_hide();}};Chosen.prototype.results_reset_cleanup=function(){this.current_selectedIndex=this.form_field.selectedIndex;return this.selected_item.find( "abbr").remove();};Chosen.prototype.result_select=function(evt){var
                                                                high,item;if(this.result_highlight){high=this.result_highlight;this.result_clear_highlight();if(this.is_multiple&&this.max_selected_options<=this.choices_count()){this.form_field_jq.trigger(
                                                                "chosen:maxselected",{chosen:this});return false;} if(this.is_multiple){high.removeClass( "active-result");}else{this.reset_single_select_options();} high.addClass( "result-selected");item=this.results_data[high[0].getAttribute(
                                                                "data-option-array-index")];item.selected=true;this.form_field.options[item.options_index].selected=true;this.selected_option_count=null;if(this.is_multiple){this.choice_build(item);}else{this.single_set_selected_text(this.choice_label(item));}
                                                                if(this.is_multiple&&(!this.hide_results_on_select||(evt.metaKey||evt.ctrlKey))){if(evt.metaKey||evt.ctrlKey){this.winnow_results({skip_highlight:true});}else{this.search_field.val( "");this.winnow_results();}}else{this.results_hide();this.show_search_field_default();}
                                                                if(this.is_multiple||this.form_field.selectedIndex!==this.current_selectedIndex){this.trigger_form_field_change({selected:this.form_field.options[item.options_index].value});} this.current_selectedIndex=this.form_field.selectedIndex;evt.preventDefault();return
                                                                this.search_field_scale();}};Chosen.prototype.single_set_selected_text=function(text){if(text==null){text=this.default_text;} if(text===this.default_text){this.selected_item.addClass(
                                                                "chosen-default");}else{this.single_deselect_control_build();this.selected_item.removeClass( "chosen-default");} return this.selected_item.find( "span").html(text);};Chosen.prototype.result_deselect=function(pos){var
                                                                result_data;result_data=this.results_data[pos];if(!this.form_field.options[result_data.options_index].disabled){result_data.selected=false;this.form_field.options[result_data.options_index].selected=false;this.selected_option_count=null;this.result_clear_highlight();if(this.results_showing){this.winnow_results();}
                                                                this.trigger_form_field_change({deselected:this.form_field.options[result_data.options_index].value});this.search_field_scale();return true;}else{return false;}};Chosen.prototype.single_deselect_control_build=function(){if(!this.allow_single_deselect){return;}
                                                                if(!this.selected_item.find( "abbr").length){this.selected_item.find( "span").first().after( "<abbr class=\"search-choice-close\ "></abbr>");} return this.selected_item.addClass(
                                                                "chosen-single-with-deselect");};Chosen.prototype.get_search_field_value=function(){return this.search_field.val();};Chosen.prototype.get_search_text=function(){return $.trim(this.get_search_field_value());};Chosen.prototype.escape_html=function(text){return
                                                                $( '<div/>').text(text).html();};Chosen.prototype.winnow_results_set_highlight=function(){var do_high,selected_results;selected_results=!this.is_multiple?this.search_results.find(
                                                                ".result-selected.active-result"):[];do_high=selected_results.length?selected_results.first():this.search_results.find( ".active-result").first();if(do_high!=null){return this.result_do_highlight(do_high);}};Chosen.prototype.no_results=function(terms){var
                                                                no_results_html;no_results_html=this.get_no_results_html(terms);this.search_results.append(no_results_html);return this.form_field_jq.trigger( "chosen:no_results",{chosen:this});};Chosen.prototype.no_results_clear=function(){return
                                                                this.search_results.find( ".no-results").remove();};Chosen.prototype.keydown_arrow=function(){var next_sib;if(this.results_showing&&this.result_highlight){next_sib=this.result_highlight.nextAll(
                                                                "li.active-result").first();if(next_sib){return this.result_do_highlight(next_sib);}}else{return this.results_show();}};Chosen.prototype.keyup_arrow=function(){var prev_sibs;if(!this.results_showing&&!this.is_multiple){return
                                                                this.results_show();}else if(this.result_highlight){prev_sibs=this.result_highlight.prevAll( "li.active-result");if(prev_sibs.length){return this.result_do_highlight(prev_sibs.first());}else{if(this.choices_count()>0){this.results_hide();} return this.result_clear_highlight();}}};Chosen.prototype.keydown_backstroke=function(){var next_available_destroy;if(this.pending_backstroke){this.choice_destroy(this.pending_backstroke.find("a").first());return
                                                                this.clear_backstroke();}else{next_available_destroy=this.search_container.siblings("li.search-choice").last();if(next_available_destroy.length&&!next_available_destroy.hasClass("search-choice-disabled")){this.pending_backstroke=next_available_destroy;if(this.single_backstroke_delete){return
                                                                this.keydown_backstroke();}else{return this.pending_backstroke.addClass("search-choice-focus");}}}};Chosen.prototype.clear_backstroke=function(){if(this.pending_backstroke){this.pending_backstroke.removeClass("search-choice-focus");}
                                                                return this.pending_backstroke=null;};Chosen.prototype.search_field_scale=function(){var div,i,len,style,style_block,styles,width;if(!this.is_multiple){return;} style_block={position:'absolute',left:'-1000px',top:'-1000px',display:'none',whiteSpace:'pre'};styles=['fontSize','fontStyle','fontWeight','fontFamily','lineHeight','textTransform','letterSpacing'];for(i=0,len=styles.length;i
                                                                <len;i++){style=styles[i];style_block[style]=this.search_field.css(style);} div=$( '<div />').css(style_block);div.text(this.get_search_field_value());$( 'body').append(div);width=div.width()+25;div.remove();if(this.container.is( ':visible')){width=Math.min(this.container.outerWidth()-10,width);}
                                                                    return this.search_field.width(width);};Chosen.prototype.trigger_form_field_change=function(extra){this.form_field_jq.trigger( "input",extra);return this.form_field_jq.trigger( "change",extra);};return
                                                                    Chosen;})(AbstractChosen);}).call(this); /*jquery.formatcurrency.js*/ (function($){$.formatCurrency={};$.formatCurrency.regions=[];$.formatCurrency.regions[ '']={symbol: '',positiveFormat:
                                                                    '%s%n',negativeFormat: '(%s%n)',decimalSymbol: '.',digitGroupSymbol: ',',groupDigits:true};$.fn.formatCurrency=function(destination,settings){if(arguments.length==1&&typeof destination!=="string"
                                                                    ){settings=destination;destination=false;} var defaults={name: "formatCurrency",colorize:false,region: '',global:true,roundToDecimalPlace:-1,eventOnDecimalsEntered:false};defaults=$.extend(defaults,$.formatCurrency.regions[
                                                                    '']);settings=$.extend(defaults,settings);if(settings.region.length>0){settings=$.extend(settings,getRegionOrCulture(settings.region));} settings.regex=generateRegex(settings);return this.each(function(){$this=$(this);var num='0';num=$this[$this.is('input,
                                                                    select, textarea')?'val':'html']().replace(/[^0-9\s]/gi,'');if(num.search('\\(')>=0){num='-'+num;} if(num===''||(num==='-'&&settings.roundToDecimalPlace===-1)){return;} if(isNaN(num)){num=num.replace(settings.regex,'');if(num===''||(num==='-'&&settings.roundToDecimalPlace===-1)){return;}
                                                                    if(settings.decimalSymbol!='.'){num=num.replace(settings.decimalSymbol,'.');} if(isNaN(num)){num='0';}} var numParts=String(num).split('.');var isPositive=(num==Math.abs(num));var hasDecimals=(numParts.length>1);var
                                                                    decimals=(hasDecimals?numParts[1].toString():'0');var originalDecimals=decimals;num=Math.abs(numParts[0]);num=isNaN(num)?0:num;if(settings.roundToDecimalPlace>=0){decimals=parseFloat('1.'+decimals);decimals=decimals.toFixed(settings.roundToDecimalPlace);if(decimals.substring(0,1)=='2'){num=Number(num)+1;}
                                                                    decimals=decimals.substring(2);} num=String(num);if(settings.groupDigits){for(var i=0;i
                                                                    <Math.floor((num.length-(1+i))/3);i++){num=num.substring(0,num.length-(4*i+3))+settings.digitGroupSymbol+num.substring(num.length-(4*i+3));}}
                                                                        if((hasDecimals&&settings.roundToDecimalPlace==-1)||settings.roundToDecimalPlace>0){num+=settings.decimalSymbol+decimals;} var format=isPositive?settings.positiveFormat:settings.negativeFormat;var money=format.replace(/%s/g,settings.symbol);money=money.replace(/%n/g,num);var
                                                                        $destination=$([]);if(!destination){$destination=$this;}else{$destination=$(destination);} $destination[$destination.is('input, select, textarea')?'val':'html'](money);if(hasDecimals&&settings.eventOnDecimalsEntered&&originalDecimals.length>settings.roundToDecimalPlace){$destination.trigger('decimalsEntered',originalDecimals);}
                                                                        if(settings.colorize){$destination.css('color',isPositive?'black':'red');}});};$.fn.toNumber=function(settings){var defaults=$.extend({name:"toNumber",region:'',global:true},$.formatCurrency.regions['']);settings=jQuery.extend(defaults,settings);if(settings.region.length>0){settings=$.extend(settings,getRegionOrCulture(settings.region));}
                                                                        settings.regex=generateRegex(settings);return this.each(function(){var method=$(this).is('input, select, textarea')?'val':'html';$(this)[method]($(this)[method]().replace('(','(-').replace(settings.regex,''));});};$.fn.asNumber=function(settings){var
                                                                        defaults=$.extend({name:"asNumber",region:'',parse:true,parseType:'Float',global:true},$.formatCurrency.regions['']);settings=jQuery.extend(defaults,settings);if(settings.region.length>0){settings=$.extend(settings,getRegionOrCulture(settings.region));}
                                                                        settings.regex=generateRegex(settings);settings.parseType=validateParseType(settings.parseType);var method=$(this).is('input, select, textarea')?'val':'html';var num=$(this)[method]();num=num?num:"";num=num.replace('(','(-');num=num.replace(settings.regex,'');if(!settings.parse){return
                                                                        num;} if(num.length==0){num='0';} if(settings.decimalSymbol!='.'){num=num.replace(settings.decimalSymbol,'.');} return window['parse'+settings.parseType](num);};function getRegionOrCulture(region){var
                                                                        regionInfo=$.formatCurrency.regions[region];if(regionInfo){return regionInfo;} else{if(/(\w+)-(\w+)/g.test(region)){var culture=region.replace(/(\w+)-(\w+)/g,"$1");return $.formatCurrency.regions[culture];}}
                                                                        return null;} function validateParseType(parseType){switch(parseType.toLowerCase()){case'int':return'Int';case'float':return'Float';default:throw'invalid parseType';}} function generateRegex(settings){if(settings.symbol===''){return
                                                                        new RegExp("[^\\d"+settings.decimalSymbol+"-]","g");} else{var symbol=settings.symbol.replace('$','\\$').replace('.','\\.');return new RegExp(symbol+"|[^\\d"+settings.decimalSymbol+"-]","g");}}
                                                                        $.fn.ForceNumericOnly=function(){$(this).keydown(function(e) {var key=e.charCode||e.keyCode||0;return(key==8||key==9||key==46||(key>=37&&key
                                                                        <=40)||(key>=48&&key
                                                                            <=57)||(key>=96&&key
                                                                                <=105));})}})(jQuery); /*myattach-resume.js*/ $(document).ready(function(){$( '.additional-information').on( 'click',function(e){e.preventDefault();$(this).slideUp() $(
                                                                                    '.add-infor-hide').slideUp() $( '.form-additional .form-child').slideDown() $( '.form-of-work').slideDown() $( '#outcountry').slideDown()}) $( ".add-references").each(function(){$(this).on(
                                                                                    "click",function(){$.fancybox.open($( ".references-modal"));});});$( ".hide-infor").each(function(){$(this).on( "click",function(e){e.preventDefault();$.fancybox.open($(
                                                                                    "#hide-info"));});});$( ".save-and-finish").each(function(){$(this).on( "click",function(e){e.preventDefault();$.fancybox.open($( ".saved-and-finish-modal"));});});$(
                                                                                    ".btn-close-modal").on( "click",function(){$.fancybox.close();});addEnglishLevel();addWorkplaceDesired() $( ".chosen-select").chosen();$( ".switch-status-element a").on( 'click',function(){let
                                                                                    obj=$(this);let type=obj.data( 'type');$( '.swap-content-1 p').removeClass( 'active');$( ".switch-status-element a").removeClass( 'active');$( '.swap-content-1 p.content-'+type).addClass(
                                                                                    'active');obj.addClass( 'active');if(type==1){$( "#rs_urgentjob").val(0);$( "#rs_chk_searchable").val(2);}else if(type==2){$( "#rs_urgentjob").val(0);$( "#rs_chk_searchable").val(1);}else
                                                                                    if(type==3){$( "#rs_urgentjob").val(1);$( "#rs_chk_searchable").val(1);}});});function addEnglishLevel(){$( '#list-language .btn-add').click(function(e){e.preventDefault();size_li=$(
                                                                                    "#list-language > .item").length;if(size_li<9){var html=$( "#language_hide").html();$( '#list-language #language_hide').before(html);} if(size_li+1>=2) $("#list-language > .item .btn-delete").show();$("#list-language > .item .form-text").addClass('active');});$(document).on('click','#list-language .btn-delete',function(e){e.preventDefault();size_li=$("#list-language
                                                                                    > .item").length;if(size_li>1) $(this).parent().parent().parent().parent().remove();if(size_li-1==1) $("#list-language > .item .btn-delete").hide();$("#list-language >
                                                                                    .item .form-text").removeClass('active');})} function addWorkplaceDesired(){size_li2=$("#list-workplace-desired .item").length y=1 $('#list-workplace-desired .btn-add').on('click',function(e){e.preventDefault();var
                                                                                    locationAdd=$('#list-workplace-desired .item.active').last().find('select').first().val();if(locationAdd=="") return true;$('#list-workplace-desired .item:not(.active)').first().addClass('active').find('.delete').addClass('active');});$('#list-workplace-desired
                                                                                    .delete').on('click',function(e){e.preventDefault();$(this).parent().parent().find('select').val('');$(this).parent().parent().find('select.chosen-select-max-three option').remove();$(this).parent().parent().find('select.chosen-select-max-three').trigger('chosen:updated');$(this).parent().parent().removeClass('active').find('.delete').removeClass('active');});}
                                                                                    /*my-cb.js*/ $(document).ready(function(){$("#company_domain_blacklist").focusin(function(){$("#company_domain_blacklist").val("@");});}) function choose_file(){$("#fileAvatar").click();}
                                                                                    function removeAvarta(){$.ajax({url:ROOT_KIEMVIEC+mapKeywords.cv_hay+'/deleteavatar',type:'POST',dataType:'json',}).done(function(response){show_noti(1,response.msg);$("#img_mem_avatar").attr("src",'./img/dash-board/1.png');});}
                                                                                    function ajaxFileUpload(){if($('#fileAvatar').val()){var data=new FormData();data.append('fileAvatar',$('#fileAvatar')[0].files[0]);$.ajax({url:ROOT_KIEMVIEC+mapKeywords.cv_hay+'/jcropimage?upload=fileAvatar',headers:{"cache-control":"no-cache",'Access-Control-Allow-Origin':'*'},type:'POST',data:data,cache:false,async:true,enctype:'multipart/form-data',timeout:600000,processData:false,contentType:false,dataType:'json',}).done(function(data){if(data.file&&data.error==""){$.fancybox.open({'type':'iframe',opts:{iframe:{css:{width:600,height:520}}},'src':ROOT_KIEMVIEC+mapKeywords.cv_hay+"/jcropimage?file="+encodeURIComponent(data.file)});$('#fileAvatar').val('');}else{show_noti(2,data.error);}
                                                                                    $('#fileAvatar').bind('change',function(){}) return false;});}} function showAvatar(file) {if(file) $("#img_mem_avatar").attr("src",PATH_IMAGES+'jobseekers/'+file);$.fancybox.close('all');}
                                                                                    $('#btn_view_cbprofile').on('click',function(){$.fancybox.open({'src':ROOT_KIEMVIEC+mapKeywords.cv_hay+"/cv-profile-preview?viewprofile=1&height="+($(window).height()-20)+"&newLayout=true",'type':'ajax',opts:{clickOutside:'close',clickSlide:'zoom',},});});function
                                                                                    downloadCvProfile(resume_id){if(resume_id>0) window.location.href=ROOT_KIEMVIEC+mapKeywords.cv_hay+'/cv-profile-download/resume/'+resume_id;} function downloadCvAttach(resume_id){if(resume_id>0)
                                                                                    window.location.href=PATH_KIEMVIEC+'jobseekers/myresume/downloadcvattach?resume_id='+resume_id;} function cv_searchable(thiss){if($(thiss).data('complete')==0){show_noti(2,language.js_resume_can_not_searchable);$(thiss).prop('checked',false);return
                                                                                    false;} $.alerts.okButton=language.js_default_resume;$.alerts.cancelButton=language.js_none_default_resume;var resume_active=0;var thisChk=thiss;var intResult;resume_chk_id=$(thiss).val();var
                                                                                    resume_title=$("#titleresume_"+resume_chk_id).html();if($(thiss).is(':checked')){jConfirm(language.js_resume_active_searchable1+' <strong>"'+resume_title+'"</strong> '+language.js_resume_active_searchable2,language.message_common,function(r){if(r==true){$('input[name=cv_searchable]').prop('checked',false);resume_active=1;intResult=updateStatusResume(resume_chk_id,resume_active);if(intResult==1){$(thisChk).prop('checked',true);show_noti(1,language.js_resume_searchable_success);}else{show_noti(2,language.js_resume_active_searchable_unsuccess);}}else{$(thiss).prop('checked',false);}})}else{$.alerts.okButton=language.js_default_resume_inactive;$.alerts.cancelButton=language.js_none_default_resume_inactive;jConfirm(language.js_resume_inactive_searchable1+'
                                                                                    <strong>"'+resume_title+'"</strong> '+language.js_resume_inactive_searchable2,language.message_common,function(r){if(r==true){resume_active=2;updateStatusResume(resume_chk_id,resume_active);show_noti(1,language.js_resume_unsearchable_success);}else{$(thiss).prop('checked',true);}})}
                                                                                    $.alerts.okButton=language.okButton;$.alerts.cancelButton=language.cancelButton;} function updateStatusResume(resume_chk_id,resume_active) {var data=new Object();var intResult;data.resume_id=resume_chk_id;data.resume_active=resume_active;var
                                                                                    dataString=$.toJSON(data);$.ajax({type:"POST",async:false,url:PATH_KIEMVIEC+'jobseekers/myresume/updatesearchable',data:'data='+dataString,dataType:'json',success:function(obj){intResult=obj.result;if(resume_active==1||resume_active==3)
                                                                                    var status_onoff='True';else var status_onoff='False';if($.isFunction(window.smartech)){smartech('contact','',{"pk^email":member_email,"CV_SEARCHABLE":status_onoff,});smartech('identify',member_email);}}});return
                                                                                    intResult;} function updateStatusJobalert(resume_chk_id,jobalert_active,thisJChk) {var data=new Object();data.resume_id=resume_chk_id;data.jobalert_active=jobalert_active;var
                                                                                    dataString=$.toJSON(data);$.ajax({type:"POST",url:PATH_KIEMVIEC+'jobseekers/myresume/updatecvjobalert',data:'data='+dataString,dataType:'json',success:function(obj){var
                                                                                    objParent=$("#cv_jobalert_"+resume_chk_id);if(obj.result==1){if(jobalert_active==1){show_noti(1,language.job_message_success);if($.isFunction(window.smartech)){smartech('dispatch','bt_save_job_alert_criteria',{"job_title":obj.detail.JSAVESEARCH_KEYWORD,"category_name":obj.detail.INDUSTRY_NAME,"category_name_id":obj.detail.INDUSTRY_ID,"from_salary":obj.detail.JSAVESEARCH_FROMSALARY,"to_salary":obj.detail.JSAVESEARCH_TOSALARY,"level":obj.detail.LEVEL_NAME,"level_id":obj.detail.LEVEL_ID,"email_frequency":language.job_alert_by_week,"email_frequency_id":obj.detail.LEVEL_ID});}}else{show_noti(1,language.job_message_nosuccess);}
                                                                                    objParent.find('a').removeClass('active');objParent.find('a[data-type="'+jobalert_active+'"]').addClass('active');}else{objParent.prop('checked',false);show_noti(2,language.job_savesearch_max_3_active);}}});}
                                                                                    function updateCvJobalert(e) {var alert_chk_id=0;$.alerts.okButton=language.okButton;$.alerts.cancelButton=language.cancelButton;var thisJChk=e;var jobalert_active=0;alert_chk_id=$(e).val();if($(e).is(':checked')){jConfirm(language.js_resume_active_jobalert,language.message_common,function(r){if(r==true){jobalert_active=1;updateStatusJobalert(alert_chk_id,jobalert_active,thisJChk);}else{$(thisJChk).prop('checked',false);}})}else{jConfirm(language.js_resume_inactive_jobalert,language.message_common,function(r){if(r==true){jobalert_active=0;updateStatusJobalert(alert_chk_id,jobalert_active,thisJChk);}else{$(thisJChk).prop('checked',true);}})}}
                                                                                    function editProfile(){$.fancybox.open({src:PATH_KIEMVIEC+'jobseekers/mykiemviec/edit-profile','type':'ajax',opts:{clickOutside:'close',clickSlide:'zoom',}});} function
                                                                                    loadInfoProfile(){$.ajax({type:"POST",url:PATH_KIEMVIEC+'jobseekers/mykiemviec/load-info-profile',success:function(data){$("#personalinfo-section").html(data);}});} function
                                                                                    checkCompleteProfile(){$.ajax({type:"POST",url:ROOT_KIEMVIEC+mapKeywords.cv_hay+'/check-complete-profile',data:{},success:function(data){}});} $(document).ready(function(){$(".group_jobalert").on('change',function(event){event.preventDefault();var
                                                                                    objThis=$(this);var rs_id=objThis.data('id');if(objThis.is(":checked")) {var rs_status=1;}else{var rs_status=0;} if(rs_status==1){jConfirm(language.js_resume_active_jobalert,language.message_common,function(r){if(r==true){updateStatusJobalert(rs_id,rs_status);}else{objThis.prop("checked",false);}});}else{jConfirm(language.js_resume_inactive_jobalert,language.message_common,function(r){if(r==true){updateStatusJobalert(rs_id,rs_status);}else{objThis.prop("checked",true);}});}});$(".group_jobalert_top
                                                                                    a").on('click',function(event){event.preventDefault();var objThis=$(this);var objThisParent=$(this).closest('div.group_jobalert_top');var rs_id=objThisParent.data('id');var
                                                                                    rs_status=objThis.data('type');if(rs_status==1){jConfirm(language.js_resume_active_jobalert,language.message_common,function(r){if(r==true){updateStatusJobalert(rs_id,rs_status);}});}else{jConfirm(language.js_resume_inactive_jobalert,language.message_common,function(r){if(r==true){updateStatusJobalert(rs_id,rs_status);}});}});$(".group_searchable
                                                                                    a").on('click',function(event){event.preventDefault();var objThis=$(this);var objParent=objThis.closest('div.group_searchable');var rs_id=objParent.data('id');var rs_complete=objParent.data('complete');var
                                                                                    rs_status=parseInt(objThis.data('type'));if(rs_complete==0){show_noti(2,language.js_resume_can_not_searchable);return false;} var resume_title=$("#titleresume_"+rs_id).html();if(rs_status==3){$.alerts.okButton=language.js_default_resume_urgentjob;$.alerts.cancelButton=language.js_none_default_resume_urgentjob;jConfirm(language.js_resume_urgentjob_searchable1+'
                                                                                    <strong>"'+resume_title+'"</strong> '+language.js_resume_urgentjob_searchable2,language.message_common,function(r){if(r==true){resume_active=3;intResult=updateStatusResume(rs_id,resume_active);if(intResult==1){active_searchable(objParent,'flash');show_noti(1,language.js_resume_urgentjob_success);}else{show_noti(2,language.js_resume_urgentjob_unsuccess);}}});}else
                                                                                    if(rs_status==1){$.alerts.okButton=language.js_default_resume;$.alerts.cancelButton=language.js_none_default_resume;jConfirm(language.js_resume_active_searchable1+' <strong>"'+resume_title+'"</strong>                                                                                    '+language.js_resume_active_searchable2,language.message_common,function(r){if(r==true){resume_active=1;intResult=updateStatusResume(rs_id,resume_active);if(intResult==1){active_searchable(objParent,'public');show_noti(1,language.js_resume_searchable_success);}else{show_noti(2,language.js_resume_active_searchable_unsuccess);}}});}else{$.alerts.okButton=language.js_default_resume_inactive;$.alerts.cancelButton=language.js_none_default_resume_inactive;jConfirm(language.js_resume_inactive_searchable1+'
                                                                                    <strong>"'+resume_title+'"</strong> '+language.js_resume_inactive_searchable2,language.message_common,function(r){if(r==true){resume_active=2;updateStatusResume(rs_id,resume_active);show_noti(1,language.js_resume_unsearchable_success);active_searchable(objParent,'lock');}});}});});function
                                                                                    active_searchable(elem,classactive){$(".group_searchable a").removeClass('active');$(".group_searchable a.lock").addClass('active');elem.find('a').removeClass('active');elem.find('a.'+classactive).addClass('active');let
                                                                                    type=elem.find('a.'+classactive).data('type');$(".text-notes").removeClass('d-block').addClass('d-none');$(".text-notes-2").removeClass('d-none').addClass('d-block');elem.closest('.attached-status-area').find('.text-notes-2').removeClass('d-block').addClass('d-none');elem.closest('.attached-status-area').find('.text-notes-'+type).removeClass('d-none').addClass('d-block');};function
                                                                                    addBlackListDashboard(){var bChecked=false;var company_id=parseInt($('#company_id_blacklist').val());if(company_id>0)bChecked=true;if(bChecked){var dataString=$("#frmAddBlacklist").serialize();$.ajax({type:"POST",url:PATH_KIEMVIEC+'jobseekers/blacklist/addEmpBlackList',data:dataString,success:function(data){if(parseInt(data)==1){$("#bt_blacklist_find").trigger("click");show_noti(1,language.job_message_add_success,'','',1);window.setTimeout(function(){location.reload()},3000);}}});return
                                                                                    false;}else{show_noti(2,language.job_blacklist_choose_emp,'','',1);}};function deleteBlackList(id) {jConfirm(language.job_message_delete,language.job_message,function(r){if(r==true){$.ajax({type:"POST",url:PATH_KIEMVIEC+'jobseekers/blacklist/deleteBlacklist',data:"jblacklist_id[]="+id,success:function(data)
                                                                                    {if(parseInt(data)==1) location.reload();else show_noti(2,language.job_message_error,language.job_message,'','',1);}});}});};function addBlackListDomain(){var bChecked=false;var
                                                                                    domainFormat=/^@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;var insertDomain=$("#company_domain_blacklist").val();if(insertDomain.match(domainFormat))bChecked=true;if(bChecked){$.ajax({type:"POST",url:PATH_KIEMVIEC+'jobseekers/blacklist/addblacklistdomain',data:'domain='+insertDomain,success:function(data){if(parseInt(data)==1){$("#bt_blacklist_find").trigger("click");show_noti(1,language.job_message_add_success,'','',1);window.setTimeout(function(){location.reload()},3000);}}});return
                                                                                    false;}else{show_noti(2,language.job_blacklist_choose_domain,'','',1);}};function deleteBlackListDomain(domain) {jConfirm(language.job_message_delete,language.job_message,function(r){if(r==true){$.ajax({type:"POST",url:PATH_KIEMVIEC+'jobseekers/blacklist/deleteBlacklistDomain',data:"domain="+domain,success:function(data)
                                                                                    {if(parseInt(data)==1) location.reload();else show_noti(2,language.job_message_error,language.job_message,'','',1);}});}});};
                                                                                    </script>

                                                                                    <script language="javascript">
                                                                                        var resume_id = 0;
                                                                                        var resume_id_rf = 0;
                                                                                        var numListRefer = 0;
                                                                                        var language_save_resume = {
                                                                                            job_message_profile_update: "Cập nhật thông tin cá nhân thành công",
                                                                                            job_message_delete: "Bạn có muốn xóa không?	",
                                                                                            job_message_delete_succ: "Xóa thành công",
                                                                                            job_message_error: "Lỗi trong quá trình thực thi",
                                                                                            js_resume_upload_success: "Upload thành công",
                                                                                            js_resume_upload_unsuccess: "Tập tin bạn vừa tải lên không thành công do sai định dạng. Hệ thống hiện chỉ hỗ trợ các tập tin có đuôi *.doc, *.docx hoặc *.pdf với dung lượng không vượt quá 5MB",
                                                                                            job_upload_not_found: "Not found",
                                                                                            js_resume_skill_success: "Cập nhật kỹ năng thành công",
                                                                                            js_resume_select_skill: "Vui lòng chọn kỹ năng làm việc",
                                                                                            js_resume_action_not_success: "Thực hiện không thành công",
                                                                                            js_resume_exp_insert_success: "Thêm kinh nghiệm thành công",
                                                                                            js_resume_exp_edit_success: "Thành công. (Thêm kinh nghiệm làm việc nếu số năm >0)",
                                                                                            js_resume_education_insert_success: "Thêm bằng cấp thành công",
                                                                                            js_resume_education_edit_success: "Cập nhật bằng cấp thành công",
                                                                                            job_message_delete_exp: "Bạn có muốn xóa kinh nghiệm này?",
                                                                                            job_message_delete_edu: "Bạn có muốn xóa học vấn này?",
                                                                                            job_message_delete_refer: "Bạn có muốn xóa người tham khảo này?",
                                                                                            js_resume_delete2: "Xóa",
                                                                                            js_resume_limit_check: "Tối đa 3 lựa chọn",
                                                                                            LANG_ERROR_RESUME_SALARY_FROM_TO: " Bạn vui lòng nhập mức lương tối thiểu là 500,000(VND) và tối đa 999,000,000(VND) hoặc tối thiểu 25(USD) và tối đa 99.999(USD).",
                                                                                            js_resume_Choice: "Chọn",
                                                                                            js_resume_All_Choice: "Chọn",
                                                                                            js_resume_selected: "# lựa chọn",
                                                                                            js_resume_exp_select: "Vui lòng chọn kinh nghiệm",
                                                                                            js_resume_jobtype_select: "Vui lòng chọn loại hình làm việc",
                                                                                            js_resume_workingtype_select: "Vui lòng chọn hình thức làm việc",
                                                                                            js_resume_currentlevel_select: "Vui lòng chọn cấp bậc hiện tại",
                                                                                            js_resume_degree_select: "Vui lòng chọn bằng cấp cao nhất",
                                                                                            js_resume_resume_title_required: "Vui lòng nhập vị trí mong muốn",
                                                                                            js_resume_level_required: "Vui lòng chọn cấp bậc",
                                                                                            js_resume_industry_required: "Vui lòng chọn ngành nghề",
                                                                                            js_resume_location_required: "Vui lòng chọn nơi muốn làm việc",
                                                                                            js_resume_objective_job_required: "Vui lòng nhập mục tiêu nghề nghiệp",
                                                                                            job_upload_max: "Dung lượng hồ sơ vượt quá giới hạn cho phép (<= 5MB). Bạn vui lòng gửi hồ sơ có dung lượng nhỏ hơn.",
                                                                                            job_message_update: "Cập nhật thành công",
                                                                                            message_common: "Vui lòng thao tác đầy đủ để hoàn thành",
                                                                                            job_message_update_resume: "<strong>Thông tin nghề nghiệp</strong> của bạn đã được cập nhật thành công. Vui lòng bấm <strong>Tiếp tục</strong> để đến bước tạo hồ sơ tiếp theo.",
                                                                                            js_resume_do_you_want_resume_searchable: "Chúc mừng bạn đã tạo hồ sơ thành công.<br / >Bạn vui lòng chọn <strong>Mặc định hồ sơ</strong> trong trường hợp muốn sử dụng hồ sơ này cho Nhà Tuyển Dụng tìm thấy bạn.<br / >Hoặc chọn <strong>Không mặc định hồ sơ</strong> trong trường hợp bạn không muốn Nhà Tuyển dụng tìm thấy bạn.<br / >(*) Bạn vẫn có thể sử dụng hồ sơ Không mặc định để nộp đơn trực tuyến cho Nhà Tuyển dụng.",
                                                                                            job_message_info_hotresume: 'Chúc bạn sẽ trở thành chủ nhân của iPad 2, Nokia E72 và nhiều giải thưởng hấp dẫn khác tại chương trình  <strong> <a href="https://www.hotresume.careerbuilder.vn" > HOT Resume </a> </strong>!',
                                                                                            js_resume_experience_resume_required: 'Vui lòng nhập Kinh nghiệm làm việc.',
                                                                                            js_resume_education_resume_required: 'Vui lòng nhập mục quá trình học vấn.',
                                                                                            js_resume_skill_resume_required: 'Vui lòng nhập Kỹ năng làm việc.',
                                                                                            job_createresume_input_full_charater: 'Bạn đã nhập quá số lượng ký tự cho phép.',
                                                                                            job_createresume_input_addtitioninfo2: 'ký tự',
                                                                                            job_createresume_input_over_charater: 'Vui lòng nhập tối đa không quá',
                                                                                            job_createresume_input_email_phone_exist: 'Vui lòng không nhập email hoặc số điện thoại',
                                                                                            js_plaese_resume_exp_company: 'Vui lòng nhập tên công ty',
                                                                                            js_plaese_resume_exp_position: 'Vui lòng nhập Vị trí / Chức danh',
                                                                                            js_plaese_resume_exp_city: 'js_plaese_resume_exp_city',
                                                                                            js_plaese_resume_exp_month_start: 'Vui lòng chọn tháng bắt đầu',
                                                                                            js_plaese_resume_exp_year_start: 'Vui lòng chọn năm bắt đầu',
                                                                                            js_plaese_resume_exp_finish_end: 'Vui lòng chọn thời gian kết thúc lớn hơn thời gian bắt đầu',
                                                                                            js_resume_notcomplete_status: 'Chưa hoàn tất',
                                                                                            js_resume_complete_status: 'Hoàn tất',
                                                                                            js_plaese_resume_edu_school: 'Vui lòng nhập Trường / khóa học',
                                                                                            js_plaese_resume_edu_country: 'js_plaese_resume_edu_country',
                                                                                            js_plaese_resume_edu_city: 'js_plaese_resume_edu_city',
                                                                                            js_plaese_resume_edu_graduation: 'js_plaese_resume_edu_graduation',
                                                                                            js_create_resume_edu_des: 'Mô tả chi tiết',
                                                                                            js_alert_successful_achievement: 'Cập nhật thành công',
                                                                                            js_alert_failed_achievement: 'js_alert_failed_achievement',
                                                                                            js_create_resume_max_des: 'Bạn nhập quá số ký tự cho phép nhập',
                                                                                            js_create_resume_refer_name: 'Vui lòng nhập họ và tên',
                                                                                            js_create_resume_refer_phone: 'Vui lòng nhập số điện thoại',
                                                                                            js_create_resume_refer_company: 'Vui lòng nhập tên công ty',
                                                                                            js_create_resume_refer_level: 'Vui lòng nhập chức vụ',
                                                                                            job_createresume_incountry: 'Trong nước',
                                                                                            job_createresume_outcountry: 'Nước ngoài',
                                                                                            js_resume_exp_des_required: 'Vui lòng nhập mô tả công việc',
                                                                                            js_resume_attachfile_select: 'Vui lòng chọn file attach',
                                                                                            js_resume_attachfile_correct_select: 'Chỉ hỗ trợ định dạng <b>*.doc, .*docx, *.pdf</b>',
                                                                                            js_resume_attachfile_capacity_select: 'Vui lòng chọn file có dung lượng <= 5 MB',
                                                                                            job_upload_unsuccess: 'Vui lòng kiểm tra lại tập đã chọn ứng tuyển. Tập tin bạn vừa tải lên không thành công do sai định dạng. Hệ thống hiện chỉ hỗ trợ các tập tin có đuôi *.doc, *.docx hoặc *.pdf với dung lượng không vượt quá 5MB',
                                                                                            member_register_write_lastname: "Họ và tên lót",
                                                                                            js_register_max_num_industry: "Bạn chỉ được chọn tối đa 5 ngành nghề",
                                                                                            js_register_not_chose_industry: "Bạn chưa chọn ngành để nhận cơ hội nghề nghiệp.",
                                                                                            member_register_view_all: "Xem tất cả",
                                                                                            member_register_view_collapse: "Thu gọn",
                                                                                            message_common: "Thông báo",
                                                                                            js_register_bday_required: "Vui lòng nhập ngày tháng năm sinh",
                                                                                            js_register_bday_valid: "Ngày tháng năm sai định dạng hoặc năm >2000",
                                                                                            js_register_bday_choose: "Chọn ngày tháng năm sinh từ lịch",
                                                                                            js_resume_save_login_fail: "Mật khẩu của bạn chưa chính xác.",
                                                                                            js_resume_save_choose_resume_required: "Vui lòng chọn hồ sơ bạn muốn thay thế",
                                                                                            LANG_ERROR_EMAIL_NULL: "Xin vui lòng nhập email của bạn.",
                                                                                            LANG_ERROR_EMAIL_IS_VALID: "Email của bạn không hợp lệ.",
                                                                                            LANG_ERROR_EMAIL_UNICODE: "Email không được nhập unicode",
                                                                                            job_message_member_inactive: " ",
                                                                                            LANG_ERROR_NAME_NULL: "Vui lòng nhập đầy đủ họ và tên của bạn.",
                                                                                            ERROR_FULL_NAME_CHARACTER: "Tên đầy đủ không cho phép nhập số và ký tự đặt biệt.",
                                                                                            LANG_ERROR_MOBILE_NULL: "Vui lòng nhập số điện thoại liên lạc của bạn",
                                                                                            LANG_ERROR_GENDER_NULL: "Bạn cần chọn giới tính",
                                                                                            member_register_write_firstname: "Tên",
                                                                                            member_select: "Lựa chọn",
                                                                                            js_resume_resume_title_maxlength: "js_resume_resume_title_maxlength",
                                                                                            js_common_contact_information_not_complete: "Vui lòng cập nhật thông tin cá nhân"
                                                                                        };
                                                                                        if (typeof language === 'undefined') var language = language_save_resume;
                                                                                        else $.extend(language, language_save_resume);
                                                                                        var arrAllCities = {
                                                                                            0: '',
                                                                                            '14': {
                                                                                                '1098': 'Banteay Meanchey',
                                                                                                '1096': 'Battambang',
                                                                                                '1092': 'Kampong Chhnang',
                                                                                                '1090': 'Kampong Speu',
                                                                                                '1085': 'Kampot',
                                                                                                '1088': 'Kandal',
                                                                                                '1084': 'Kep',
                                                                                                '1091': 'Koh Kong',
                                                                                                '1093': 'Kratie',
                                                                                                '1104': 'Otdar Meanchey',
                                                                                                '1103': 'Pailin',
                                                                                                '1041': 'Phnompenh',
                                                                                                '1099': 'Preah Vihear',
                                                                                                '1089': 'Prey Veng',
                                                                                                '1097': 'Siem Reap',
                                                                                                '1100': 'Stung Treng',
                                                                                                '1087': 'Svay Rieng',
                                                                                                '1082': 'Tbong Khmum'
                                                                                            },
                                                                                            '13': {
                                                                                                '1034': 'Chicago',
                                                                                                '1077': 'Florida',
                                                                                                '1033': 'Miami',
                                                                                                '1039': 'San Diego'
                                                                                            },
                                                                                            '24': {
                                                                                                '1079': 'Hồng Kông'
                                                                                            },
                                                                                            '169': {
                                                                                                '1318': 'Khác'
                                                                                            },
                                                                                            '19': {
                                                                                                '1106': 'Attapeu',
                                                                                                '1107': 'Bokeo',
                                                                                                '1109': 'Champasak',
                                                                                                '1110': 'Houaphanh',
                                                                                                '1111': 'Khammouane',
                                                                                                '1113': 'Luang Prabang',
                                                                                                '1115': 'Phongsaly',
                                                                                                '1059': 'Vientiane',
                                                                                                '1120': 'Xiangkhouang'
                                                                                            },
                                                                                            '9': {
                                                                                                '1019': 'Kuala Lumpur',
                                                                                                '1078': 'Malaysia'
                                                                                            },
                                                                                            '21': {
                                                                                                '1320': 'Yangon'
                                                                                            },
                                                                                            '2': {
                                                                                                '1043': 'Hokkaido',
                                                                                                '1001': 'Tokyo',
                                                                                                '1002': 'Yokohama'
                                                                                            },
                                                                                            '17': {
                                                                                                '1055': 'Qatar'
                                                                                            },
                                                                                            '23': {
                                                                                                '1073': 'Quốc tế'
                                                                                            },
                                                                                            '10': {
                                                                                                '1040': 'Singapore'
                                                                                            },
                                                                                            '16': {
                                                                                                '1053': 'Kharkiv'
                                                                                            },
                                                                                            '1': {
                                                                                                '4': 'Hà Nội',
                                                                                                '8': 'Hồ Chí Minh',
                                                                                                '76': 'An Giang',
                                                                                                '64': 'Bà Rịa - Vũng Tàu',
                                                                                                '781': 'Bạc Liêu',
                                                                                                '281': 'Bắc Cạn',
                                                                                                '240': 'Bắc Giang',
                                                                                                '241': 'Bắc Ninh',
                                                                                                '75': 'Bến Tre',
                                                                                                '650': 'Bình Dương',
                                                                                                '56': 'Bình Định',
                                                                                                '651': 'Bình Phước',
                                                                                                '62': 'Bình Thuận',
                                                                                                '78': 'Cà Mau',
                                                                                                '26': 'Cao Bằng',
                                                                                                '71': 'Cần Thơ',
                                                                                                '50': 'Dak Lak',
                                                                                                '1042': 'Dak Nông',
                                                                                                '511': 'Đà Nẵng',
                                                                                                '900': 'Điện Biên',
                                                                                                '1064': 'Đồng Bằng Sông Cửu Long',
                                                                                                '61': 'Đồng Nai',
                                                                                                '67': 'Đồng Tháp',
                                                                                                '59': 'Gia Lai',
                                                                                                '19': 'Hà Giang',
                                                                                                '351': 'Hà Nam',
                                                                                                '39': 'Hà Tĩnh',
                                                                                                '320': 'Hải Dương',
                                                                                                '31': 'Hải Phòng',
                                                                                                '780': 'Hậu Giang',
                                                                                                '18': 'Hòa Bình',
                                                                                                '321': 'Hưng Yên',
                                                                                                '901': 'Khác',
                                                                                                '58': 'Khánh Hòa',
                                                                                                '77': 'Kiên Giang',
                                                                                                '60': 'Kon Tum',
                                                                                                '1071': 'KV Bắc Trung Bộ',
                                                                                                '1069': 'KV Đông Nam Bộ',
                                                                                                '1070': 'KV Nam Trung Bộ',
                                                                                                '1072': 'KV Tây Nguyên',
                                                                                                '23': 'Lai Châu',
                                                                                                '25': 'Lạng Sơn',
                                                                                                '20': 'Lào Cai',
                                                                                                '63': 'Lâm Đồng',
                                                                                                '72': 'Long An',
                                                                                                '350': 'Nam Định',
                                                                                                '38': 'Nghệ An',
                                                                                                '30': 'Ninh Bình',
                                                                                                '68': 'Ninh Thuận',
                                                                                                '210': 'Phú Thọ',
                                                                                                '57': 'Phú Yên',
                                                                                                '52': 'Quảng Bình',
                                                                                                '510': 'Quảng Nam',
                                                                                                '55': 'Quảng Ngãi',
                                                                                                '33': 'Quảng Ninh',
                                                                                                '53': 'Quảng Trị',
                                                                                                '79': 'Sóc Trăng',
                                                                                                '22': 'Sơn La',
                                                                                                '66': 'Tây Ninh',
                                                                                                '36': 'Thái Bình',
                                                                                                '280': 'Thái Nguyên',
                                                                                                '37': 'Thanh Hóa',
                                                                                                '54': 'Thừa Thiên- Huế',
                                                                                                '73': 'Tiền Giang',
                                                                                                '1065': 'Toàn quốc',
                                                                                                '74': 'Trà Vinh',
                                                                                                '27': 'Tuyên Quang',
                                                                                                '70': 'Vĩnh Long',
                                                                                                '211': 'Vĩnh Phúc',
                                                                                                '29': 'Yên Bái'
                                                                                            }
                                                                                        };

                                                                                        $(document).ready(function() {

                                                                                            $('#slcountry').change(function() {
                                                                                                var opt_city = arrAllCities[$('#slcountry').val()];
                                                                                                $(".error_sldistrict").html('');
                                                                                                if (typeof opt_city === "undefined") {
                                                                                                    $('#slcity option').remove();
                                                                                                    $('#sldistrict option').remove();
                                                                                                    $('#slcity').prop('disabled', true);
                                                                                                    $('#sldistrict').prop('disabled', true);
                                                                                                } else {
                                                                                                    $('#slcity').prop('disabled', false);
                                                                                                    $('#sldistrict').prop('disabled', false);
                                                                                                    $('#slcity option').remove();
                                                                                                    $('#sldistrict option').remove();
                                                                                                    $.each(opt_city, function(val, text) {
                                                                                                        $('#slcity').append('<option value="' + val + '">' + text + '</option>');
                                                                                                    });
                                                                                                    var sl_country_id = $('#slcountry').val();
                                                                                                    if (sl_country_id == 1) {
                                                                                                        var sl_city_id = $('#slcity').val();
                                                                                                        var str = '';
                                                                                                        for (k in districts) {
                                                                                                            if (sl_city_id == districts[k][1]) {
                                                                                                                str += '<option value="' + districts[k][0] + '">' + districts[k][2] + '</option>';
                                                                                                            }
                                                                                                        }
                                                                                                        $('#sldistrict option').remove();
                                                                                                        $('#sldistrict').append('<option value="">' + language.member_select + '</option>');
                                                                                                        if (str !== '') {
                                                                                                            $('#sldistrict').append(str);
                                                                                                        } else {
                                                                                                            $('#sldistrict').prop('disabled', true);
                                                                                                        }
                                                                                                    } else {
                                                                                                        $('#sldistrict option').remove();
                                                                                                        $('#sldistrict').prop('disabled', true);
                                                                                                    }
                                                                                                }
                                                                                            });

                                                                                            var sl_country_id = $('#slcountry').val();
                                                                                            var sl_city_id = 4;
                                                                                            var sl_district_id = 347;

                                                                                            var opt_city = arrAllCities[sl_country_id];
                                                                                            if (typeof opt_city === "undefined") {
                                                                                                $('#slcity option').remove();
                                                                                                $('#slcity').prop('disabled', true);
                                                                                                $('#sldistrict option').remove();
                                                                                                $('#sldistrict').prop('disabled', true);
                                                                                                $(".error_sldistrict").html('');
                                                                                            } else {
                                                                                                $(".error_sldistrict").html('');
                                                                                                $('#slcity').prop('disabled', false);
                                                                                                $('#slcity option').remove();
                                                                                                $('#sldistrict').prop('disabled', false);
                                                                                                $('#sldistrict option').remove();
                                                                                                $.each(opt_city, function(val, text) {
                                                                                                    $('#slcity').append('<option value="' + val + '">' + text + '</option>');
                                                                                                });

                                                                                                if (sl_country_id == 1) {
                                                                                                    if (sl_city_id > 0) {
                                                                                                        $("#slcity option[value='" + sl_city_id + "']").attr('selected', 'selected');
                                                                                                    } else {
                                                                                                        var sl_city_id = $('#slcity').val();
                                                                                                    }
                                                                                                    var str = '';
                                                                                                    for (k in districts) {
                                                                                                        if (sl_city_id == districts[k][1]) {
                                                                                                            str += '<option value="' + districts[k][0] + '">' + districts[k][2] + '</option>';
                                                                                                        }
                                                                                                    }

                                                                                                    $('#sldistrict option').remove();
                                                                                                    $(".error_sldistrict").html('');
                                                                                                    $('#sldistrict').append('<option value="">' + language.member_select + '</option>');
                                                                                                    if (str !== '') {
                                                                                                        $('#sldistrict').append(str);
                                                                                                        $("#sldistrict option[value='" + sl_district_id + "']").attr('selected', 'selected');
                                                                                                    } else {
                                                                                                        $('#sldistrict').prop('disabled', true);
                                                                                                    }

                                                                                                } else {
                                                                                                    $('#sldistrict option').remove();
                                                                                                    $('#sldistrict').append('<option value="">' + language.member_select + '</option>');
                                                                                                    $('#sldistrict').prop('disabled', true);
                                                                                                }

                                                                                            }

                                                                                            var rowCountChoice = $('#table_language_choice tr').length;
                                                                                            var rowCount = $('#table_language tr').length;
                                                                                            if (rowCountChoice + rowCount < 10) {
                                                                                                $('.addlangauge').click(
                                                                                                    function() {
                                                                                                        $(this).parent('div').html('<span class="ic_remove"></span><span class="addlangauge"><a href="javascript:void(0);" onclick="return RemoveRow(this);">' + language.js_resume_delete2 + '</a></span>');
                                                                                                    }
                                                                                                );
                                                                                            }
                                                                                            $("input#year_experience").blur(function() {
                                                                                                var val = parseInt($(this).val());
                                                                                                if (val < 1)
                                                                                                    $(this).val(1);
                                                                                                else if (val > 55)
                                                                                                    $(this).val(55);
                                                                                                else
                                                                                                    $(this).val(val);
                                                                                            });
                                                                                            var optionSalaryVND = {
                                                                                                'decimalPlaces': 0,
                                                                                                'digitGroupSeparator': ',',
                                                                                                'decimalCharacter': '.'
                                                                                            };
                                                                                            var optionSalaryUSD = {
                                                                                                'decimalPlaces': 0,
                                                                                                'digitGroupSeparator': '.',
                                                                                                'decimalCharacter': ','
                                                                                            };

                                                                                            if ($('#salary_unit option:selected').val() == 'usd' || $('#salary_unit option:selected').val() == 'vnd') {
                                                                                                $("#salary_to").attr('disabled', false);
                                                                                                $("#salary_from").attr('disabled', false);
                                                                                            }

                                                                                            if ($("#salary_from").length) {
                                                                                                if ($('#salary_unit option:selected').val() == 'usd')
                                                                                                    var salary_from = new AutoNumeric('#salary_from', optionSalaryUSD);
                                                                                                else
                                                                                                    var salary_from = new AutoNumeric('#salary_from', optionSalaryVND);
                                                                                            }

                                                                                            if ($("#salary_to").length) {
                                                                                                if ($('#salary_unit option:selected').val() == 'usd')
                                                                                                    var salary_to = new AutoNumeric('#salary_to', optionSalaryUSD);
                                                                                                else
                                                                                                    var salary_to = new AutoNumeric('#salary_to', optionSalaryVND);
                                                                                            }
                                                                                            $('#salary_unit').change(function() {
                                                                                                $('#salary_from').val('');
                                                                                                $('#salary_to').val('');
                                                                                                if ($(this).val() == 'ltt') {
                                                                                                    $('#salary_from').attr('disabled', true);
                                                                                                    $('#salary_to').attr('disabled', true);
                                                                                                } else {
                                                                                                    $('#salary_from').attr('disabled', false);
                                                                                                    $('#salary_to').attr('disabled', false);
                                                                                                    if ($(this).val() == 'vnd') {
                                                                                                        salary_from.set('', optionSalaryVND);
                                                                                                        salary_to.set('', optionSalaryVND);
                                                                                                    } else {
                                                                                                        salary_from.set('', optionSalaryUSD);
                                                                                                        salary_to.set('', optionSalaryUSD);
                                                                                                    }
                                                                                                }
                                                                                            });

                                                                                            $("#select_industry_db").chosen({
                                                                                                max_selected_options: 3
                                                                                            }).change(function() {
                                                                                                if ($("#select_industry_db").val().length > 0)
                                                                                                    $(".error_select_industry_db").html('');
                                                                                            });

                                                                                            $('.ui-multiselect-optgroup-label').click(function() {
                                                                                                return false;
                                                                                            });
                                                                                            $.validator.addMethod("exprequire", function(val, element) {
                                                                                                if ($.trim($("#year_experience").val()) == '' && !($('#cboExper').is(':checked')))
                                                                                                    return false;
                                                                                                return true;
                                                                                            }, language.js_resume_exp_select);

                                                                                            $('.fileContainer input[type=file]').css({
                                                                                                'cursor': 'pointer',
                                                                                                'display': 'block',
                                                                                                'filter': 'alpha(opacity=0)',
                                                                                                'opacity': '0',
                                                                                                'position': 'absolute',
                                                                                                'right': '0',
                                                                                                'text-align': 'right',
                                                                                                'top': '-5px',
                                                                                                'height': 'auto',
                                                                                                'border-width': '0 0 10px 200px'
                                                                                            });


                                                                                        });

                                                                                        function show_frmRefer(rref_id) {
                                                                                            var email = $('#email').val();
                                                                                            if (typeof email === 'undefined')
                                                                                                email = "";
                                                                                            $.fancybox.open({
                                                                                                'src': PATH_KIEMVIEC + 'jobseekers/myresume/referform?resume_id=' + resume_id_rf + '&rref_id=' + rref_id + '&email=' + email,
                                                                                                'type': 'ajax'
                                                                                            });
                                                                                        }

                                                                                        function deleteRefer(refer_id) {
                                                                                            var r = confirm(language.job_message_delete_refer);
                                                                                            if (r == true) {
                                                                                                var email = $('#email').val();
                                                                                                if (typeof email === 'undefined')
                                                                                                    email = "";
                                                                                                $.ajax({
                                                                                                    type: "POST",
                                                                                                    url: PATH_KIEMVIEC + 'jobseekers/myresume/deleterefer',
                                                                                                    data: 'resume_id=' + resume_id_rf + '&refer_id=' + refer_id + '&email=' + email,
                                                                                                    cache: false,
                                                                                                    beforeSend: function() {
                                                                                                        $('#referList_' + refer_id).animate({
                                                                                                            opacity: 0.35
                                                                                                        }, "slow");
                                                                                                    },
                                                                                                    success: function(data) {
                                                                                                        if (parseInt(data) == 1) {
                                                                                                            numListRefer--;
                                                                                                            if ($("#list_refer div.col-md-6").length == 0) {
                                                                                                                $("#list_refer").hide();
                                                                                                            }
                                                                                                            $('#referList_' + refer_id).slideUp('slow', function() {
                                                                                                                $('#referList_' + refer_id).remove();
                                                                                                            });
                                                                                                        } else {
                                                                                                            show_noti(2, language.job_message_error);
                                                                                                        }
                                                                                                    }
                                                                                                });
                                                                                            }
                                                                                        }
                                                                                        $('#cboExper').click(function() {
                                                                                            if ($('#cboExper').is(':checked')) {
                                                                                                $('#year_experience').attr("disabled", "disabled");
                                                                                                $('#year_experience').val("");
                                                                                                $('.error_year_experience').html('');
                                                                                            } else {
                                                                                                $('#year_experience').attr("disabled", false);
                                                                                            }
                                                                                        });

                                                                                        function changLanguage(e) {
                                                                                            if (e.value == '')
                                                                                                $('#add_language').hide();
                                                                                            else
                                                                                                $('#add_language').show();
                                                                                        }

                                                                                        function ajaxOnlyFile(e) {
                                                                                            if (e.value != '') {
                                                                                                $('#dropbox_button').prop('disabled', true);
                                                                                                $('#upload_text1').html(e.value);
                                                                                                $(".error_attach_file").html('');
                                                                                                $('#uploadFile_file').addClass('active')
                                                                                                $('#uploadFile_file .show-file').text(e.value.replace(/.*(\/|\\)/, ''));
                                                                                                $(".removefile").show();
                                                                                            }
                                                                                        }

                                                                                        function removefile(e) {
                                                                                            $('#dropbox_button').prop('disabled', false);
                                                                                            $('#attach_file').prop('disabled', false);
                                                                                            $('#upload_text1').html('');
                                                                                            $("#uploadFile_file").removeClass('active');
                                                                                            $("#uploadFile_file .show-file").text('');
                                                                                            $('#attach_file').val('');
                                                                                            $("#dropbox_file").val('');
                                                                                            $("#dfile_title").val('');
                                                                                            $("#dfile_size").val('');
                                                                                        }

                                                                                        function checkValidForm(isCont) {
                                                                                            if ($('#private_info').val() == 0) {
                                                                                                show_noti(2, language.js_common_contact_information_not_complete);
                                                                                                $('html,body').animate({
                                                                                                    scrollTop: ($("#link-edit").offset().top - 100)
                                                                                                }, 'slow');
                                                                                                return false;
                                                                                            }
                                                                                            var sel_location = $('select[name="LOCATION_ID[]"]');
                                                                                            sel_location.children('option').each(function() {
                                                                                                if ($(this).is(':selected') && $(this).val() != '') {
                                                                                                    $(this).removeAttr('disabled');
                                                                                                }
                                                                                            });

                                                                                            $('#salary_from').val($('#salary_from').val().replace(/[^0-9\s]/gi, ''));
                                                                                            if ($('#salary_from').val() == 0) $('#salary_from').val('');
                                                                                            $('#salary_to').val($('#salary_to').val().replace(/[^0-9\s]/gi, ''));
                                                                                            if ($('#salary_to').val() == 0) $('#salary_to').val('');

                                                                                            $.validator.addMethod('checkSalary', function(value) {
                                                                                                var unit_valid = $('#salary_unit option:selected').val();
                                                                                                if (unit_valid == 'vnd' || unit_valid == 'usd') {
                                                                                                    var salary_from_valid = $('#salary_from').val();
                                                                                                    var salary_to_valid = $('#salary_to').val();

                                                                                                    if (salary_from_valid == '' && salary_to_valid == '') return false;
                                                                                                    if (parseInt(salary_to_valid) < parseInt(salary_from_valid) && parseInt(salary_to_valid) > 0)
                                                                                                        return false;

                                                                                                    if (isNaN(parseInt(salary_to_valid)))
                                                                                                        salary_to_valid = 0;
                                                                                                    if (isNaN(parseInt(salary_from_valid)))
                                                                                                        salary_from_valid = 0;

                                                                                                    var salary_max = parseInt(salary_to_valid) > parseInt(salary_from_valid) ? salary_to_valid : salary_from_valid;
                                                                                                    var salary_min = parseInt(salary_from_valid) > 0 ? salary_from_valid : salary_to_valid;


                                                                                                    if (unit_valid == 'usd' && parseInt(salary_max) >= 100000) return false;
                                                                                                    if (unit_valid == 'usd' && parseInt(salary_min) < 25) return false;
                                                                                                    if (unit_valid == 'vnd' && parseInt(salary_min) < 500000) return false;
                                                                                                    if (unit_valid == 'vnd' && parseInt(salary_max) >= 999000000) return false;

                                                                                                }
                                                                                                return true;
                                                                                            }, language.LANG_ERROR_RESUME_SALARY_FROM_TO);


                                                                                            $.validator.addMethod('requiredemail', function(value) {
                                                                                                var valemail = $.trim($('#email').val());
                                                                                                return (valemail != '') ? true : false;
                                                                                            }, language.message_common);

                                                                                            $.validator.addMethod('checkemailinactive', function(value) {
                                                                                                var email = $.trim($('#email').val());
                                                                                                var result = true;
                                                                                                $.ajax({
                                                                                                    async: false,
                                                                                                    url: PATH_KIEMVIEC + "jobseekers/jobs/checkemailinactive",
                                                                                                    data: {
                                                                                                        'email': email
                                                                                                    },
                                                                                                    success: function(rs) {
                                                                                                        if (rs == 0)
                                                                                                            result = false;
                                                                                                    }
                                                                                                });
                                                                                                return result;
                                                                                            }, language.message_common);



                                                                                            $.validator.addMethod('checkUnicode', function(value, element) {
                                                                                                return (!/\s/g.test(value) && !/[ạáàảãâậấầẩẫăặắằẳẫẠÁÀẢÃÂẬẤẦẨẪĂẶẮẰẲẪêẹéèẻẽếềểễệÊẸÉÈẺẼẾỀỂỄỆọộổỗốồôóòỏõơợớờởỡỌỘỔỖỐỒÔÓÒỎÕƠỢỚỜỞỠụưứừửữựúùủũỤƯỨỪỬỮỰÚÙỦŨịíìỉĩỊÍÌỈĨỵýỳỷỹỴÝỲỶỸđĐ]/.test(value));
                                                                                            }, language.message_common);

                                                                                            $.validator.addMethod('check_resume_type', function(value) {
                                                                                                var checkResumeType_1 = $('#chkResumeType_1:checked').val();
                                                                                                var checkResumeType_2 = $('#chkResumeType_2:checked').val();
                                                                                                var checkResumeType_3 = $('#chkResumeType_3:checked').val();
                                                                                                var checkResumeType_4 = $('#chkResumeType_4:checked').val();
                                                                                                if (checkResumeType_1 != 1 && checkResumeType_2 != 2 && checkResumeType_3 != 3 && checkResumeType_4 != 4)
                                                                                                    return false;
                                                                                                else
                                                                                                    return true;
                                                                                            }, "");

                                                                                            $.validator.addMethod('check_exist_file', function(value) {
                                                                                                var aLength = $('#attach_file').val();
                                                                                                var dLength = $('#dropbox_file').val();
                                                                                                if (resume_id == 0) {
                                                                                                    if (aLength != '' || dLength != '')
                                                                                                        return true;
                                                                                                    else
                                                                                                        return false;
                                                                                                } else {
                                                                                                    return true;
                                                                                                }
                                                                                            }, "");

                                                                                            $.validator.addMethod('check_level_id', function(value) {
                                                                                                if ($("#level_id").val() > 0)
                                                                                                    return true;
                                                                                                return false;
                                                                                            }, language.js_resume_level_required);
                                                                                            if ($("#frmResumeDetail").validate({
                                                                                                    ignore: ":hidden:not(.chosen-select-max-three,#attach_file,#dropbox_file,:radio,:checkbox),:disabled",
                                                                                                    onkeyup: false,
                                                                                                    rules: {
                                                                                                        attach_file: {
                                                                                                            check_exist_file: true,
                                                                                                            accept: "doc|DOC|docx|DOCX|pdf|PDF"
                                                                                                        },
                                                                                                        resume_title: {
                                                                                                            required: true,
                                                                                                            maxlength: 500
                                                                                                        },
                                                                                                        select_location_db: {
                                                                                                            required: true
                                                                                                        },
                                                                                                        chkResumeType_1: {
                                                                                                            check_resume_type: true
                                                                                                        },
                                                                                                        chkResumeType_2: {
                                                                                                            check_resume_type: true
                                                                                                        },
                                                                                                        chkResumeType_3: {
                                                                                                            check_resume_type: true
                                                                                                        },
                                                                                                        chkResumeType_4: {
                                                                                                            check_resume_type: true
                                                                                                        },
                                                                                                        salary_unit: {
                                                                                                            checkSalary: true
                                                                                                        },
                                                                                                        level_id: {
                                                                                                            check_level_id: true
                                                                                                        },
                                                                                                        yearOfExperience: {
                                                                                                            exprequire: true,
                                                                                                            number: true,
                                                                                                            max: 55
                                                                                                        },
                                                                                                        cboExper: {
                                                                                                            exprequire: true
                                                                                                        },
                                                                                                        'INDUSTRY_ID[]': {
                                                                                                            required: true
                                                                                                        },
                                                                                                        'LOCATION_ID[]': {
                                                                                                            required: true
                                                                                                        }
                                                                                                    },
                                                                                                    errorPlacement: function(error, element) {
                                                                                                        var name = element.attr('name');

                                                                                                        if (name == 'LOCATION_ID[]') {
                                                                                                            $(".error_location_id").html(error.html());
                                                                                                        } else if (name == 'INDUSTRY_ID[]') {
                                                                                                            $(".error_select_industry_db").html(error.html());
                                                                                                        } else if (name == 'cboExper') {
                                                                                                            $(".error_yearOfExperience").html(error.html());
                                                                                                        } else if (name == 'chkResumeType_1' || name == 'chkResumeType_2' || name == 'chkResumeType_3' || name == 'chkResumeType_4') {
                                                                                                            var errorSelector = '.error_chkResumeType_1';
                                                                                                            var $element = $(errorSelector);
                                                                                                            $(errorSelector).html(error.html()).show();
                                                                                                        } else {
                                                                                                            var errorSelector = '.error_' + name;
                                                                                                            if ($(errorSelector).length) {
                                                                                                                var $element = $(errorSelector);
                                                                                                                $(errorSelector).html(error.html()).show();
                                                                                                            }
                                                                                                        }
                                                                                                    },
                                                                                                    success: function(element) {
                                                                                                        if ($('.error_' + element[0].htmlFor).length) {
                                                                                                            $('.error_' + element[0].htmlFor).hide();
                                                                                                            element.remove();
                                                                                                        }
                                                                                                    },
                                                                                                    messages: {
                                                                                                        levelcurrent_id: {
                                                                                                            required: language.js_resume_currentlevel_select
                                                                                                        },
                                                                                                        degree: {
                                                                                                            required: language.js_resume_degree_select
                                                                                                        },
                                                                                                        resume_title: {
                                                                                                            required: language.js_resume_resume_title_required,
                                                                                                            maxlength: language.js_resume_resume_title_maxlength
                                                                                                        },
                                                                                                        yearOfExperience: {
                                                                                                            required: language.js_resume_experience_resume_required
                                                                                                        },
                                                                                                        cboExper: {
                                                                                                            required: language.js_resume_experience_resume_required
                                                                                                        },
                                                                                                        'LOCATION_ID[]': {
                                                                                                            required: language.js_resume_location_required
                                                                                                        },
                                                                                                        'INDUSTRY_ID[]': {
                                                                                                            required: language.js_resume_industry_required
                                                                                                        },
                                                                                                        chkResumeType_1: {
                                                                                                            check_resume_type: language.js_resume_workingtype_select
                                                                                                        },
                                                                                                        chkResumeType_2: {
                                                                                                            check_resume_type: language.js_resume_workingtype_select
                                                                                                        },
                                                                                                        chkResumeType_3: {
                                                                                                            check_resume_type: language.js_resume_workingtype_select
                                                                                                        },
                                                                                                        chkResumeType_4: {
                                                                                                            check_resume_type: language.js_resume_workingtype_select
                                                                                                        },
                                                                                                        attach_file: {
                                                                                                            check_exist_file: language.js_resume_attachfile_select
                                                                                                        }
                                                                                                    },
                                                                                                    invalidHandler: function(form, validator) {
                                                                                                        var errors = validator.numberOfInvalids();
                                                                                                        if (errors) {
                                                                                                            switch (validator.errorList[0].element.getAttribute("name")) {
                                                                                                                case 'INDUSTRY_ID[]':
                                                                                                                    $(".error_select_industry_db").show();
                                                                                                                    $('html,body').animate({
                                                                                                                        scrollTop: ($(".error_select_industry_db").offset().top - 200)
                                                                                                                    }, 'slow');
                                                                                                                    break;
                                                                                                                case 'LOCATION_ID[]':
                                                                                                                    $(".error_" + validator.errorList[0].element.getAttribute("id")).show();
                                                                                                                    $('html,body').animate({
                                                                                                                        scrollTop: ($(".error_" + validator.errorList[0].element.getAttribute("id")).offset().top - 200)
                                                                                                                    }, 'slow');
                                                                                                                    break;
                                                                                                                case 'cboExper':
                                                                                                                    $(".error_yearOfExperience").show();
                                                                                                                    break;
                                                                                                                case 'chkResumeType_1':
                                                                                                                case 'chkResumeType_2':
                                                                                                                case 'chkResumeType_3':
                                                                                                                case 'chkResumeType_4':
                                                                                                                    $('html,body').animate({
                                                                                                                        scrollTop: ($(".error_chkResumeType_1").offset().top - 250)
                                                                                                                    }, 'slow');
                                                                                                                    break;
                                                                                                                default:
                                                                                                                    validator.errorList[0].element.focus();
                                                                                                                    $('html,body').animate({
                                                                                                                        scrollTop: $('[name="' + validator.errorList[0].element.name + '"]').offset().top - 150
                                                                                                                    }, 'slow');
                                                                                                                    break;
                                                                                                            }
                                                                                                        } else {
                                                                                                            validator.errorList[0].element.focus();
                                                                                                            $('html,body').animate({
                                                                                                                scrollTop: $('[name="' + validator.errorList[0].element.name + '"]').offset().top - 100
                                                                                                            }, 'slow');
                                                                                                        }
                                                                                                    }
                                                                                                }).form() == false) return false;
                                                                                            func_strip_tags_input($('#resume_title'));
                                                                                            func_strip_tags_input($('#firstname'));
                                                                                            func_strip_tags_input($('#lastname'));
                                                                                            func_strip_tags_input($('#mobile'));
                                                                                            submitForm();
                                                                                        }

                                                                                        function submitForm() {
                                                                                            if ($('#dropbox_file').val() != '') {
                                                                                                var path = PATH_KIEMVIEC + 'jobseekers/myresume/uploadresumedropbox';
                                                                                                $.ajax({
                                                                                                    type: "POST",
                                                                                                    url: path,
                                                                                                    data: 'dropbox_file=' + $('#dropbox_file').val() + '&dfile_title=' + $('#dfile_title').val() + '&dfile_size=' + $('#dfile_size').val(),
                                                                                                    beforeSend: function() {
                                                                                                        $("#loading").show();
                                                                                                    },
                                                                                                    complete: function() {
                                                                                                        $("#loading").hide();
                                                                                                    },
                                                                                                    success: function(data) {
                                                                                                        var obj = $.parseJSON(data);
                                                                                                        if (obj.msg == '' || data.msg == 'fail' || data.msg == 'notexists' || data.msg == 'convertfail') {
                                                                                                            show_noti(2, language.job_upload_unsuccess, language.message_common, 'error');
                                                                                                            return false;
                                                                                                        } else if (obj.msg == 'max') {
                                                                                                            show_noti(2, language.job_upload_max, language.message_common, 'error');
                                                                                                            return false;
                                                                                                        } else if (obj.msg == 'success') {
                                                                                                            $('#resume_path').val(obj.path_root_file);
                                                                                                            $('#resume_path_convert').val(obj.path_convert_file);
                                                                                                            $('#is_change').val(1);
                                                                                                            $('#btn_SaveComplete').attr('disabled', 'disabled');
                                                                                                            $('#frmResumeDetail').submit();
                                                                                                        }
                                                                                                    },
                                                                                                    error: function(data, status, e) {
                                                                                                        alert(e);
                                                                                                    }
                                                                                                });
                                                                                                return false;
                                                                                            } else if ($('#attach_file').val() != '') {
                                                                                                var data = new FormData();
                                                                                                data.append('attach_file', $('#attach_file')[0].files[0]);

                                                                                                $.ajax({
                                                                                                        url: PATH_KIEMVIEC + 'jobseekers/myresume/uploadresume',
                                                                                                        secureuri: false,
                                                                                                        type: 'POST',
                                                                                                        data: data,
                                                                                                        enctype: 'multipart/form-data',
                                                                                                        processData: false, // tell jQuery not to process the data
                                                                                                        contentType: false, // tell jQuery not to set contentType
                                                                                                        dataType: 'json',
                                                                                                    })
                                                                                                    .done(function(data) {
                                                                                                        if (data.msg == '' || data.msg == 'fail' || data.msg == 'notexists' || data.msg == 'convertfail') {
                                                                                                            show_noti(2, language.job_upload_unsuccess, language.message_common);
                                                                                                            return false;
                                                                                                        } else if (data.msg == 'max') {
                                                                                                            show_noti(2, language.job_upload_max, language.message_common);
                                                                                                            return false;
                                                                                                        } else if (data.msg == 'success') {
                                                                                                            $('#resume_path').val(data.path_root_file);
                                                                                                            $('#resume_path_convert').val(data.path_convert_file);
                                                                                                            $('#is_change').val(1);
                                                                                                            $('#btn_SaveComplete').attr('disabled', 'disabled');
                                                                                                            $('#frmResumeDetail').submit();
                                                                                                        }
                                                                                                    });
                                                                                                return false;
                                                                                            } else if (resume_id != 0) {
                                                                                                $('#btn_SaveComplete').attr('disabled', 'disabled');
                                                                                                $('#frmResumeDetail').submit();
                                                                                                return false;
                                                                                            }
                                                                                        }
                                                                                    </script>


                                                                                    <div class="back-drop"></div>
    </main>

  

    <a class="feedback-btn" data-fancybox data-type="ajax" data-src="https://careerbuilder.vn/vi/jobseekers/index/sendfeedback?from=jobseeker&newlayout=1" title="Feedback" href="javascript:void(0);"><span>Feedback</span></a>
</body>

</html>
<!--End New Layout CB -->
    <div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false"id="thongtincanhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div  class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h2 class="modal-title" id="exampleModalLabel">Tiêu đề hồ sơ</h2>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form  action="" id="personalInfoForm" autocomplete="off">
                                    <div class="row">
                                       <div class="col-md-6">
                                           <label>* Họ và tên lót</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="lastname" id="lastname" value="Một" maxlength="30" class="valid">
                                             <span class="err_lastname" style=""></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label>* Tên</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="firstname" id="firstname" value="Ba" maxlength="30">
                                             <span class="err_firstname" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-radio">
                                             <p>* Giới tính</p>
                                             <div class="gender">
                                                <input type="radio" id="gender_m" value="1" checked="checked" name="gender">
                                                <label for="gender_m">Nam</label>
                                             </div>
                                             <div class="gender">
                                                <input type="radio" id="gender_f" value="2" name="gender">
                                                <label for="gender_f">Nữ</label>
                                             </div>
                                             <span class="err_gender" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-birthday">
                                             <label for="">* Ngày sinh</label>
                                             <input type="text" class="date_month" name="birthday" ">
                                             <div id=" date_time_picker" class="dtpicker-overlay dtpicker-mobile">
                                                <div class="dtpicker-bg">
                                                   <div class="dtpicker-cont">
                                                      <div class="dtpicker-content">
                                                         <div class="dtpicker-subcontent"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <span class="err_birthday" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label for="">* Số điện thoại</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="mobile" id="mobile" value="0839704123" maxlength="20" style="margin-top:5px">
                                             <span class="err_mobile" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label for="">* Email</label>
                                          <div class="form-group form-text">
                                             <input type="text"  id="email_member_edit" value="aolang69@gmail.com" readonly="readonly" disabled="disabled" style="margin-top:5px">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label for="">* Quốc tịch</label>
                                          <div class="form-group form-select">
                                             <select name="slnationality" id="slnationality">
                                                <option value="1" selected="selected">Người Việt Nam</option>
                                                <option value="22">Người Bangladesh</option>
                                                <option value="14">Người Campuchia</option>
                                                <option value="4">Người Canada</option>
                                                <option value="25">Người Công gô</option>
                                                <option value="13">Người Hoa Kỳ</option>
                                                <option value="8">Người Hàn Quốc</option>
                                                <option value="24">Người Hồng Kong</option>
                                                <option value="169">Người Khác</option>
                                                <option value="19">Người Lào</option>
                                                <option value="9">Người Malaysia</option>
                                                <option value="21">Người Myanmar</option>
                                                <option value="2">Người Nhật</option>
                                                <option value="17">Người Qatar</option>
                                                <option value="23">Người Nước Ngoài</option>
                                                <option value="10">Người Singapore</option>
                                                <option value="5">Người Trung Quốc</option>
                                                <option value="16">Người Ukraine</option>
                                                <option value="3">Người Úc</option>
                                                <option value="20">Người Đài Loan</option>
                                             </select>
                                             <span class="err_slnationality" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tình trạng hôn nhân</label>
                                             <select name="slMarritial">
                                                <option value="1">Đã kết hôn</option>
                                                <option value="0" selected="selected">Độc thân</option>
                                             </select>
                                             <span class="err_slMarritial" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Quốc gia</label>
                                             <select name="slcountry" id="slcountry" class="select-nation">
                                                <option value="1" selected="selected">Việt Nam</option>
                                                <option value="22">Bangladesh</option>
                                                <option value="14">Campuchia</option>
                                                <option value="4">Canada</option>
                                                <option value="25">Công Gô</option>
                                                <option value="13">Hoa Kỳ</option>
                                                <option value="8">Hàn Quốc</option>
                                                <option value="24">Hồng Kông</option>
                                                <option value="169">Khác</option>
                                                <option value="19">Lào</option>
                                                <option value="9">Malaysia</option>
                                                <option value="21">Myanmar</option>
                                                <option value="2">Nhật Bản</option>
                                                <option value="17">Qatar</option>
                                                <option value="23">Quốc tế</option>
                                                <option value="10">Singapore</option>
                                                <option value="5">Trung Quốc</option>
                                                <option value="16">Ukraine</option>
                                                <option value="3">Úc</option>
                                                <option value="20">Đài Loan</option>
                                             </select>
                                             <span class="err_slcountry" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tỉnh / Thành phố</label>
                                             <select name="slcity" id="slcity" class="select-province-city" onchange="loadDistrictProfile(this.value);">
                                                <option value="">Chọn</option>
                                                <option value="4">Hà Nội</option>
                                                <option value="8">Hồ Chí Minh</option>
                                                <option value="76">An Giang</option>
                                                <option value="64">Bà Rịa - Vũng Tàu</option>
                                                <option value="781">Bạc Liêu</option>
                                                <option value="281">Bắc Cạn</option>
                                             </select>
                                             <span class="err_slcity" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <!--id="areaDistrict"-->
                                          <div class="form-group form-select">
                                             <label for="">* Quận/huyện</label>
                                             <select name="sldistrict" id="sldistrict" class="select-district">
                                                <option value="">Chọn</option>
                                                <option value="347">Huyện Ba Vì</option>
                                                <option value="353">Huyện Chương Mỹ</option>
                                                <option value="349">Huyện Đan Phượng</option>
                                                <option value="339">Huyện Đông Anh</option>
                                                <option value="340">Huyện Gia Lâm</option>
                                                <option value="350">Huyện Hoài Đức</option>
                                                <option value="344">Huyện Mê Linh</option>
                                                <option value="358">Huyện Mỹ Đức</option>
                                                <option value="357">Huyện Ứng Hòa</option>
                                                <option value="356">Huyện Phú Xuyên</option>
                                                <option value="348">Huyện Phúc Thọ</option>
                                                <option value="351">Huyện Quốc Oai</option>
                                                <option value="338">Huyện Sóc Sơn</option>
                                                <option value="352">Huyện Thạch Thất</option>
                                                <option value="354">Huyện Thanh Oai</option>
                                                <option value="342">Huyện Thanh Trì</option>
                                                <option value="355">Huyện Thường Tín</option>
                                                <option value="329">Quận Ba Đình</option>
                                                <option value="343">Quận Bắc Từ Liêm</option>
                                                <option value="333">Quận Cầu Giấy</option>
                                                <option value="334">Quận Đống Đa</option>
                                                <option value="345">Quận Hà Đông</option>
                                                <option value="335">Quận Hai Bà Trưng</option>
                                                <option value="330">Quận Hoàn Kiếm</option>
                                                <option value="336">Quận Hoàng Mai</option>
                                                <option value="332">Quận Long Biên</option>
                                                <option value="341">Quận Nam Từ Liêm</option>
                                                <option value="331">Quận Tây Hồ</option>
                                                <option value="337">Quận Thanh Xuân</option>
                                                <option value="346">Thị xã Sơn Tây</option>
                                             </select>
                                             <span class="err_sldistrict" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="">* Địa chỉ (Số nhà, Đường)</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="address" value="đường 7">
                                             <span class="err_address" style="display:none"></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <div class="button-save button-center">
                                          <button type="submit" name="personalInfoForm" class="btn-primary" data-bs-dismiss="modal">Lưu lại</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div> 