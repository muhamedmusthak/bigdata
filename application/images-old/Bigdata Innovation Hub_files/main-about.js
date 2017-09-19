function imgOp() {
    $(window).width() > 1024 ? $(".img-op").each(function(e, t) {
        var a = $(this).attr("img-full");
        $(this).css("background-image", "url(" + a + ")"), $(this).removeClass("img-op")
    }) : $(window).width() <= 1024 && $(".img-op").each(function(e, t) {
        var a = $(this).attr("img-large");
        $(this).css("background-image", "url(" + a + ")"), $(this).removeClass("img-op")
    })
}

function menuSm() {
    $(".force-sm").length && $("header").addClass("sm"), $(window).scrollTop() > 150 && 0 == $("header.sm").length && 0 == $(".force-sm").length ? $("header").addClass("sm") : $(window).scrollTop() <= 150 && $("header.sm").length && 0 == $(".force-sm").length && $("header").removeClass("sm")
}

function menuColorSwap() {
    $(".nav-btn").click(function(e) {
        e.preventDefault(), $(this).hasClass("active") ? ($(this).removeClass("active"), $("#nav-icon3").removeClass("open"), $("nav").removeClass("active"), $(".menu-item-has-children.active").removeClass("active"), $(".menu-item-has-children a.active").removeClass("active")) : ($(this).addClass("active"), $("#nav-icon3").addClass("open"), $("nav").addClass("active"))
    }), $(".menu-item-has-children>a").click(function(e) {
        $(this).hasClass("active") ? ($(this).removeClass("active"), $(this).parent().removeClass("active")) : ($(".menu-item-has-children.active").removeClass("active"), $(".menu-item-has-children a.active").removeClass("active"), $(this).addClass("active"), $(this).parent().addClass("active"))
    }), $(".sub-menu a").mouseenter(function(e) {
        var t = $(this).parent();
        t.parent().removeClass("watermelon"), t.parent().removeClass("teal"), t.parent().removeClass("yellow"), t.parent().removeClass("blue"), t.is(":nth-child(1)") ? t.parent().addClass("watermelon") : t.is(":nth-child(2)") ? t.parent().addClass("teal") : t.is(":nth-child(3)") ? t.parent().addClass("yellow") : t.is(":nth-child(4)") && t.parent().addClass("blue")
    }), $(".sub-menu").mouseleave(function(e) {
        $(this).removeClass("watermelon"), $(this).removeClass("teal"), $(this).removeClass("yellow"), $(this).removeClass("blue")
    })
}

function allowDesktopBGVidLoad() {
    if ($(".bgvid").length > 0 && $(".heroSectionVideo").length)
        if ($(window).width() > 1024) {
            var e = document.createElement("source");
            e.src = sourceArray[0].source, e.type = sourceArray[0].type;
            var t = document.createElement("source");
            t.src = sourceArray[1].source, t.type = sourceArray[1].type;
            var a = document.createElement("source");
            a.src = sourceArray[2].source, a.type = sourceArray[2].type, document.getElementById("bgvid").appendChild(e), document.getElementById("bgvid").appendChild(t), document.getElementById("bgvid").appendChild(a)
        } else {
            if ($(window).width() > 1024) var i = $("#bgvid").attr("poster-holder-full");
            else if ($(window).width() <= 1024) var i = $("#bgvid").attr("poster-holder-large");
            $(".heroSectionVideo").css("background-position", "60% center"), $(".heroSectionVideo").css("background-size", "cover"), $(".heroSectionVideo").css("background-image", "url(" + i + ")"), $("#bgvid").remove()
        }
}

function downArrowAnimation() {
    $(".arrow").animate({
        bottom: "-10px"
    }, 1e3, function() {
        $(".arrow").animate({
            bottom: "10px"
        }, 1250, function() {
            downArrowAnimation()
        })
    })
}

function heroImageLoad() {
    if (!$(".heroSectionImage").hasClass("no-load")) {
        if ($(window).width() > 1024) var e = $(".heroSectionImage").attr("hero-full");
        else if ($(window).width() <= 1024) var e = $(".heroSectionImage").attr("hero-large");
        $(".heroSectionImage").css("background-image", "url(" + e + ")")
    }
}

function capSplitInit() {
    $(".cap-split").length && $(".cap-list a").hover(function(e) {
        if (e.preventDefault(), !$(this).hasClass("active")) {
            $(".cap-list a.active").removeClass("active"), $(this).addClass("active");
            var t = $(this).attr("data-icon"),
                a = $(this).attr("data-name"),
                i = $(this).attr("data-desc"),
                o = $(this).attr("data-url");
            $(".cap-split .left .cap-wrap.active .icon").addClass("out"), $(".cap-split .left .cap-wrap.active .name").addClass("out"), $(".cap-split .left .cap-wrap.active .description").addClass("out"), $(".cap-split .left .cap-wrap.active .cta-wrap").addClass("out"), setTimeout(function() {
                $(".cap-split .left .cap-wrap.active .icon img").attr("src", t), $(".cap-split .left .cap-wrap.active .name").html(a), $(".cap-split .left .cap-wrap.active .description").html(i), $(".cap-split .left .cap-wrap.active .cta-wrap a").attr("href", o), setTimeout(function() {
                    $(".cap-split .left .cap-wrap.active .icon").removeClass("out"), $(".cap-split .left .cap-wrap.active .name").removeClass("out"), $(".cap-split .left .cap-wrap.active .description").removeClass("out"), $(".cap-split .left .cap-wrap.active .cta-wrap").removeClass("out")
                }, 10)
            }, 140)
        }
    })
}

function drawerInit() {
    $(".drawer").length && $(".drawer .slide").hover(function(e) {
        e.preventDefault(), $(this).hasClass("active") || ($(".drawer .slide.active").removeClass("active"), $(this).addClass("active"))
    })
}

function homeSegmentLoad(e) {
    $(".page-home").length && $('.market[market="' + e + '"] .lazy-load').each(function(e, t) {
        $(this).is("img") ? $(this).attr("src", $(this).attr("data-url")) : $(window).width() <= 1440 ? $(this).hasClass("excerpt-image") || $(this).attr("style", 'background-image: url("' + $(this).attr("data-url") + '");') : $(this).attr("style", 'background-image: url("' + $(this).attr("data-url") + '");')
    })
}

function homeSegmentSwap() {
    if ($(".page-home").length) {
        var e = !1;
        $(".back-to-market a").unbind("click").bind("click", function(e) {
            e.preventDefault(), $("html, body").animate({
                scrollTop: $(".markets").offset().top - 75
            }, 250)
        }), $(".markets ul li").click(function(t) {
            if (!$(this).hasClass("active") && 0 == e) {
                e = !0, $(".content-wrap.back-to").addClass("hide"), $(".markets ul li").removeClass("active"), $(this).addClass("active"), $(".market.active").removeClass("active"), $(".markets .loader").addClass("active"), $('.market[id="' + $(this).attr("market") + '"]').removeAttr("id").addClass("hold-this"), $(".cap-form h2.noUL").html($(this).attr("market-question")), window.location.hash = $(this).attr("market"), $(".market.hold-this").removeClass("hold-this").attr("id", $(this).attr("market")), homeSegmentLoad("" + $(this).attr("market"));
                var a = $(this);
                setTimeout(function() {
                    $(".markets .loader").removeClass("active"), $('.market[market="' + a.attr("market") + '"]').addClass("active"), $(".content-wrap.back-to.hide").removeClass("hide"), homeSegments(), e = !1
                }, 500)
            }
        })
    }
}

// function homeSegments() {
//     if ($(".page-home").length) {
//         var e = .666;
//         $(window).scrollTop() + .25 * $(window).height() >= $(".market.active .slide-intro").offset().top ? 0 == $(".market.active .side-slider.active").length && $(".market.active .side-slider").addClass("active") : 1 == $(".market.active .side-slider.active").length && $(".market.active .side-slider").removeClass("active"), $(window).scrollTop() + .666 * $(window).height() >= $(".market.active .slide-one").offset().top && 0 == $(".market.active .slide-one.active").length && ($(".market.active .slide-one").addClass("active"), $(".market.active .spacer--one").addClass("active")), $(window).scrollTop() + .666 * $(window).height() >= $(".market.active .slide-two").offset().top ? $('.market.active .side-slider .inner-bar[slide="1"]').length && ($(".market.active .side-slider .inner-bar").attr("slide", "2"), $(".market.active .slide-two").addClass("active"), $(".market.active .spacer--two").addClass("active")) : $(".market.active .side-slider .inner-bar").attr("slide", "1"), $(window).scrollTop() + .666 * $(window).height() >= $(".market.active .slide-three").offset().top ? $('.market.active .side-slider .inner-bar[slide="2"]').length && ($(".market.active .side-slider .inner-bar").attr("slide", "3"), $(".market.active .slide-three").addClass("active"), "generation-x" == $(".market.active").attr("market") && $(".market.active .spacer--three").addClass("active")) : $('.market.active .side-slider .inner-bar[slide="3"]').length && $(".market.active .side-slider .inner-bar").attr("slide", "2"), $(window).scrollTop() + .666 * $(window).height() >= $(".market.active .slide-four").offset().top ? $('.market.active .side-slider .inner-bar[slide="3"]').length && ($(".market.active .side-slider .inner-bar").attr("slide", "4"), $(".market.active .slide-four").addClass("active")) : $('.market.active .side-slider .inner-bar[slide="4"]').length && $(".market.active .side-slider .inner-bar").attr("slide", "3"), $(window).scrollTop() + .666 * $(window).height() >= $(".market.active .slide-five").offset().top ? $('.market.active .side-slider .inner-bar[slide="4"]').length && ($(".market.active .side-slider .inner-bar").attr("slide", "5"), $(".market.active .slide-five").addClass("active"), $(".market.active .spacer--four").addClass("active")) : $('.market.active .side-slider .inner-bar[slide="5"]').length && $(".market.active .side-slider .inner-bar").attr("slide", "4"), $(window).scrollTop() + .666 * $(window).height() >= $(".market.active .slide-six").offset().top ? $('.market.active .side-slider .inner-bar[slide="5"]').length && ($(".market.active .side-slider .inner-bar").attr("slide", "6"), $(".market.active .slide-six").addClass("active")) : $('.market.active .side-slider .inner-bar[slide="6"]').length && $(".market.active .side-slider .inner-bar").attr("slide", "5"), $(window).scrollTop() + .666 * $(window).height() >= $(".cap-form").offset().top - 225 ? $(".market.active .side-slider").removeClass("active") : $(".slide-six.active").length && $(window).scrollTop() + .666 * $(window).height() >= $(".market.active .slide-one").offset().top && $(".market.active .side-slider").addClass("active")
//     }
// }

function homeSegmentMobile() {
    $(window).width() <= 1024 ? $(".slide-intro .image-wrap .image").length && $(".slide-intro").each(function(e, t) {
        var a = $(this).find(".image").detach();
        $(this).find("h3.lg").after(a)
    }) : 0 == $(".slide-intro .image-wrap .image").length && $(".slide-intro").each(function(e, t) {
        var a = $(this).find(".image").detach();
        $(this).find(".image-wrap").html(a)
    })
}

function capBlocksInit() {
    $(".cap-blocks").length && $(".cap-block").hover(function(e) {
        $(window).width() > 1024 && $(this).addClass("active").parent().addClass("active")
    }, function(e) {
        $(window).width() > 1024 && $(this).removeClass("active").parent().removeClass("active")
    })
}

function capBlocksShuffle() {
    $(".cap-blocks").length && ($(window).width() <= 1024 ? 0 == $(".cap-blocks.mobo").length && ($(".cap-block").each(function(e, t) {
        e > 2 && $(".block-row:nth-of-type(1)").append(this)
    }), $(".cap-blocks").addClass("mobo")) : $(".cap-blocks.mobo").length && ($(".cap-block").each(function(e, t) {
        e > 2 && e <= 5 ? $(".block-row:nth-of-type(2)").append(this) : e > 5 && $(".block-row:nth-of-type(3)").append(this)
    }), $(".cap-blocks.mobo").removeClass("mobo")))
}

function rotatorSliderInit() {
    $(".rotator.slider") && ($(".rotator.slider .top li").click(function(e) {
        e.preventDefault(), $(".rotator.slider li.active").removeClass("active"), $(this).addClass("active"), $(".rotator.slider .slide.active").removeClass("active"), $('.rotator.slider .slide[data-index="' + $(this).attr("data-index") + '"]').addClass("active")
    }), $(".rotator.slider h3").click(function(e) {
        if (e.preventDefault(), $(window).width() <= 600) {
            if ($(".ce-wrap.active").slideUp("fast"), $("h3.active").removeClass("active"), $(this).parent().find(".ce-wrap").hasClass("active")) return void $(".ce-wrap.active").removeClass("active");
            $(".ce-wrap.active").removeClass("active"), $(this).addClass("active").parent().find(".ce-wrap").slideDown("fast").addClass("active")
        }
    }))
}

function rotatorSliderLoad() {
    $(window).width() > 1024 && 0 == $(".rotator.slider .left.img-load").length && $(".rotator.slider .slide").each(function(e, t) {
        $(this).find(".left").attr("style", "background-image:url(" + $(this).find(".left").attr("data-img") + ")").addClass("img-load")
    }), $(window).width() > 600 ? ($(".rotator.slider .content-wrap .ce-wrap").attr("style", "display:block"), $(".rotator.slider .content-wrap h3.active").removeClass("active")) : ($(".rotator.slider .content-wrap .ce-wrap").attr("style", "display:none"), $(".rotator.slider .content-wrap h3.active").removeClass("active"))
}

function fixedWrap() {
    $(".fixed-bot").length && ($(window).width() > 1024 ? $(".fixed-bot").css("margin-bottom", $(".fixed-wrap").height()) : $(".fixed-bot").css("margin-bottom", "0"))
}

function categoryNews() {
    $(".category-news").length && (setTimeout(function() {
        $(".load-btn-wrap.dn").removeClass("dn")
    }, 5e3), $(".load-btn-wrap .btn").click(function(e) {
        e.preventDefault(), $(this).hasClass("stop") || ($(this).addClass("stop"), $("#load-more").click(), setTimeout(function() {
            $(".load-btn-wrap .btn.stop").removeClass("stop")
        }, 3e3))
    }), setInterval(function() {
        categoryNewsCheck()
    }, 3e3))
}

function categoryNewsCheck() {
    $(".alm-load-more-btn.done").length && $(".load-btn-wrap").addClass("dn")
}

function askedooCase() {
    if ($(".page-askedoo").length) {
        var e = $(window).height(),
            t = $(".page-askedoo section.social .collage").offset().top;
        $(window).scrollTop() >= t - e / 1.45 && 0 == $(".page-askedoo section.social .collage img.active").length && $(".page-askedoo section.social .collage img").addClass("active");
        var a = $(".page-askedoo .creative-strategy .img-wrap").offset().top;
        $(window).scrollTop() >= a - e / 1.5 && 0 == $(".page-askedoo .creative-strategy .img-wrap img.active").length && $(".page-askedoo .creative-strategy .img-wrap img").addClass("active");
        var i = $(".page-askedoo .split.lg svg").offset().top;
        $(window).scrollTop() >= i - e / 2 && 0 == $(".page-askedoo .split.lg svg.active-lock").length && ($(".page-askedoo .split.lg svg").addClass("active").addClass("active-lock"), setTimeout(function() {
            $(".page-askedoo .split.lg svg").removeClass("active")
        }, 450))
    }
    $(".page-askedoo").length && $(".features .dots .dot").click(function(e) {
        if (e.preventDefault(), !$(this).hasClass("active")) {
            $(".features .dots .dot.active").removeClass("active"), $(this).addClass("active");
            var t = $(this).attr("data-index"),
                a = -.1;
            if ($(window).width() > 1350) var i = 324;
            else var i = 263;
            if (1 == t) $(".page-askedoo .features .slider").css("transform", "translate3d(-0.1px,0,0)");
            else {
                t--;
                var o = i * t - .1;
                $(".page-askedoo .features .slider").css("transform", "translate3d(" + o + "px,0,0)")
            }
        }
    })
}

function askedooCaseResize() {
    $(".page-askedoo").length && ($(window).width() < 1351 && !$(".page-askedoo .features .description-wrap").hasClass("moved") ? $(".page-askedoo .features .description-wrap").addClass("moved").detach().appendTo(".page-askedoo .features .content-wrap") : $(".page-askedoo .features .description-wrap").hasClass("moved") && $(window).width() >= 1351 && $(".page-askedoo .features .description-wrap").removeClass("moved").detach().appendTo(".page-askedoo .features .inner-wrap"))
}
window.Modernizr = function(e, t, a) {
        function i(e) {
            v.cssText = e
        }

        function o(e, t) {
            return i(prefixes.join(e + ";") + (t || ""))
        }

        function r(e, t) {
            return typeof e === t
        }

        function n(e, t) {
            return !!~("" + e).indexOf(t)
        }

        function s(e, t) {
            for (var i in e) {
                var o = e[i];
                if (!n(o, "-") && v[o] !== a) return "pfx" != t || o
            }
            return !1
        }

        function l(e, t, i) {
            for (var o in e) {
                var n = t[e[o]];
                if (n !== a) return i === !1 ? e[o] : r(n, "function") ? n.bind(i || t) : n
            }
            return !1
        }

        function d(e, t, a) {
            var i = e.charAt(0).toUpperCase() + e.slice(1),
                o = (e + " " + b.join(i + " ") + i).split(" ");
            return r(t, "string") || r(t, "undefined") ? s(o, t) : (o = (e + " " + y.join(i + " ") + i).split(" "), l(o, t, a))
        }
        var c = "2.7.1",
            f = {},
            h = !0,
            p = t.documentElement,
            m = "modernizr",
            u = t.createElement("modernizr"),
            v = u.style,
            g, w = {}.toString,
            C = "Webkit Moz O ms",
            b = C.split(" "),
            y = C.toLowerCase().split(" "),
            S = {},
            k = {},
            x = {},
            T = [],
            A = T.slice,
            W, E = {}.hasOwnProperty,
            I;
        I = r(E, "undefined") || r(E.call, "undefined") ? function(e, t) {
            return t in e && r(e.constructor.prototype[t], "undefined")
        } : function(e, t) {
            return E.call(e, t)
        }, Function.prototype.bind || (Function.prototype.bind = function(e) {
            var t = this;
            if ("function" != typeof t) throw new TypeError;
            var a = A.call(arguments, 1),
                i = function() {
                    if (this instanceof i) {
                        var o = function() {};
                        o.prototype = t.prototype;
                        var r = new o,
                            n = t.apply(r, a.concat(A.call(arguments)));
                        return Object(n) === n ? n : r
                    }
                    return t.apply(e, a.concat(A.call(arguments)))
                };
            return i
        }), S.csstransitions = function() {
            return d("transition")
        };
        for (var L in S) I(S, L) && (W = L.toLowerCase(), f[W] = S[L](), T.push((f[W] ? "" : "no-") + W));
        return f.addTest = function(e, t) {
                if ("object" == typeof e)
                    for (var i in e) I(e, i) && f.addTest(i, e[i]);
                else {
                    if (e = e.toLowerCase(), f[e] !== a) return f;
                    t = "function" == typeof t ? t() : t, p.className += " " + (t ? "" : "no-") + e, f[e] = t
                }
                return f
            }, i(""), u = g = null,
            function(e, t) {
                function a(e, t) {
                    var a = e.createElement("p"),
                        i = e.getElementsByTagName("head")[0] || e.documentElement;
                    return a.innerHTML = "x<style>" + t + "</style>", i.insertBefore(a.lastChild, i.firstChild)
                }

                function i() {
                    var e = w.elements;
                    return "string" == typeof e ? e.split(" ") : e
                }

                function o(e) {
                    var t = v[e[m]];
                    return t || (t = {}, u++, e[m] = u, v[u] = t), t
                }

                function r(e, a, i) {
                    if (a || (a = t), g) return a.createElement(e);
                    i || (i = o(a));
                    var r;
                    return r = i.cache[e] ? i.cache[e].cloneNode() : h.test(e) ? (i.cache[e] = i.createElem(e)).cloneNode() : i.createElem(e), !r.canHaveChildren || f.test(e) || r.tagUrn ? r : i.frag.appendChild(r)
                }

                function n(e, a) {
                    if (e || (e = t), g) return e.createDocumentFragment();
                    a = a || o(e);
                    for (var r = a.frag.cloneNode(), n = 0, s = i(), l = s.length; n < l; n++) r.createElement(s[n]);
                    return r
                }

                function s(e, t) {
                    t.cache || (t.cache = {}, t.createElem = e.createElement, t.createFrag = e.createDocumentFragment, t.frag = t.createFrag()), e.createElement = function(a) {
                        return w.shivMethods ? r(a, e, t) : t.createElem(a)
                    }, e.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + i().join().replace(/[\w\-]+/g, function(e) {
                        return t.createElem(e), t.frag.createElement(e), 'c("' + e + '")'
                    }) + ");return n}")(w, t.frag)
                }

                function l(e) {
                    e || (e = t);
                    var i = o(e);
                    return w.shivCSS && !p && !i.hasCSS && (i.hasCSS = !!a(e, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), g || s(e, i), e
                }
                var d = "3.7.0",
                    c = e.html5 || {},
                    f = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                    h = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
                    p, m = "_html5shiv",
                    u = 0,
                    v = {},
                    g;
                ! function() {
                    try {
                        var e = t.createElement("a");
                        e.innerHTML = "<xyz></xyz>", p = "hidden" in e, g = 1 == e.childNodes.length || function() {
                            t.createElement("a");
                            var e = t.createDocumentFragment();
                            return void 0 === e.cloneNode || void 0 === e.createDocumentFragment || void 0 === e.createElement
                        }()
                    } catch (e) {
                        p = !0, g = !0
                    }
                }();
                var w = {
                    elements: c.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
                    version: "3.7.0",
                    shivCSS: c.shivCSS !== !1,
                    supportsUnknownElements: g,
                    shivMethods: c.shivMethods !== !1,
                    type: "default",
                    shivDocument: l,
                    createElement: r,
                    createDocumentFragment: n
                };
                e.html5 = w, l(t)
            }(this, t), f._version = "2.7.1", f._domPrefixes = y, f._cssomPrefixes = b, f.testProp = function(e) {
                return s([e])
            }, f.testAllProps = d, f.prefixed = function(e, t, a) {
                return t ? d(e, t, a) : d(e, "pfx")
            }, p.className = p.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + " js " + T.join(" "), f
    }(this, this.document),
    function(e, t, a) {
        function i(e) {
            return "[object Function]" == m.call(e)
        }

        function o(e) {
            return "string" == typeof e
        }

        function r() {}

        function n(e) {
            return !e || "loaded" == e || "complete" == e || "uninitialized" == e
        }

        function s() {
            var e = u.shift();
            v = 1, e ? e.t ? h(function() {
                ("c" == e.t ? W.injectCss : W.injectJs)(e.s, 0, e.a, e.x, e.e, 1)
            }, 0) : (e(), s()) : v = 0
        }

        function l(e, a, i, o, r, l, d) {
            function c(t) {
                if (!m && n(f.readyState) && (b.r = m = 1, !v && s(), f.onload = f.onreadystatechange = null, t)) {
                    "img" != e && h(function() {
                        C.removeChild(f)
                    }, 50);
                    for (var i in x[a]) x[a].hasOwnProperty(i) && x[a][i].onload()
                }
            }
            var d = d || W.errorTimeout,
                f = t.createElement(e),
                m = 0,
                g = 0,
                b = {
                    t: i,
                    s: a,
                    e: r,
                    a: l,
                    x: d
                };
            1 === x[a] && (g = 1, x[a] = []), "object" == e ? f.data = a : (f.src = a, f.type = e), f.width = f.height = "0", f.onerror = f.onload = f.onreadystatechange = function() {
                c.call(this, g)
            }, u.splice(o, 0, b), "img" != e && (g || 2 === x[a] ? (C.insertBefore(f, w ? null : p), h(c, d)) : x[a].push(f))
        }

        function d(e, t, a, i, r) {
            return v = 0, t = t || "j", o(e) ? l("c" == t ? y : b, e, t, this.i++, a, i, r) : (u.splice(this.i++, 0, e), 1 == u.length && s()), this
        }

        function c() {
            var e = W;
            return e.loader = {
                load: d,
                i: 0
            }, e
        }
        var f = t.documentElement,
            h = e.setTimeout,
            p = t.getElementsByTagName("script")[0],
            m = {}.toString,
            u = [],
            v = 0,
            g = "MozAppearance" in f.style,
            w = g && !!t.createRange().compareNode,
            C = w ? f : p.parentNode,
            f = e.opera && "[object Opera]" == m.call(e.opera),
            f = !!t.attachEvent && !f,
            b = g ? "object" : f ? "script" : "img",
            y = f ? "script" : b,
            S = Array.isArray || function(e) {
                return "[object Array]" == m.call(e)
            },
            k = [],
            x = {},
            T = {
                timeout: function(e, t) {
                    return t.length && (e.timeout = t[0]), e
                }
            },
            A, W;
        W = function(e) {
            function t(e) {
                var e = e.split("!"),
                    t = k.length,
                    a = e.pop(),
                    i = e.length,
                    a = {
                        url: a,
                        origUrl: a,
                        prefixes: e
                    },
                    o, r, n;
                for (r = 0; r < i; r++) n = e[r].split("="), (o = T[n.shift()]) && (a = o(a, n));
                for (r = 0; r < t; r++) a = k[r](a);
                return a
            }

            function n(e, o, r, n, s) {
                var l = t(e),
                    d = l.autoCallback;
                l.url.split(".").pop().split("?").shift(), l.bypass || (o && (o = i(o) ? o : o[e] || o[n] || o[e.split("/").pop().split("?")[0]]), l.instead ? l.instead(e, o, r, n, s) : (x[l.url] ? l.noexec = !0 : x[l.url] = 1, r.load(l.url, l.forceCSS || !l.forceJS && "css" == l.url.split(".").pop().split("?").shift() ? "c" : a, l.noexec, l.attrs, l.timeout), (i(o) || i(d)) && r.load(function() {
                    c(), o && o(l.origUrl, s, n), d && d(l.origUrl, s, n), x[l.url] = 2
                })))
            }

            function s(e, t) {
                function a(e, a) {
                    if (e) {
                        if (o(e)) a || (d = function() {
                            var e = [].slice.call(arguments);
                            c.apply(this, e), f()
                        }), n(e, d, t, 0, s);
                        else if (Object(e) === e)
                            for (p in h = function() {
                                    var t = 0,
                                        a;
                                    for (a in e) e.hasOwnProperty(a) && t++;
                                    return t
                                }(), e) e.hasOwnProperty(p) && (!a && !--h && (i(d) ? d = function() {
                                var e = [].slice.call(arguments);
                                c.apply(this, e), f()
                            } : d[p] = function(e) {
                                return function() {
                                    var t = [].slice.call(arguments);
                                    e && e.apply(this, t), f()
                                }
                            }(c[p])), n(e[p], d, t, p, s))
                    } else !a && f()
                }
                var s = !!e.test,
                    l = e.load || e.both,
                    d = e.callback || r,
                    c = d,
                    f = e.complete || r,
                    h, p;
                a(s ? e.yep : e.nope, !!l), l && a(l)
            }
            var l, d, f = this.yepnope.loader;
            if (o(e)) n(e, 0, f, 0);
            else if (S(e))
                for (l = 0; l < e.length; l++) d = e[l], o(d) ? n(d, 0, f, 0) : S(d) ? W(d) : Object(d) === d && s(d, f);
            else Object(e) === e && s(e, f)
        }, W.addPrefix = function(e, t) {
            T[e] = t
        }, W.addFilter = function(e) {
            k.push(e)
        }, W.errorTimeout = 1e4, null == t.readyState && t.addEventListener && (t.readyState = "loading", t.addEventListener("DOMContentLoaded", A = function() {
            t.removeEventListener("DOMContentLoaded", A, 0), t.readyState = "complete"
        }, 0)), e.yepnope = c(), e.yepnope.executeStack = s, e.yepnope.injectJs = function(e, a, i, o, l, d) {
            var c = t.createElement("script"),
                f, m, o = o || W.errorTimeout;
            c.src = e;
            for (m in i) c.setAttribute(m, i[m]);
            a = d ? s : a || r, c.onreadystatechange = c.onload = function() {
                !f && n(c.readyState) && (f = 1, a(), c.onload = c.onreadystatechange = null)
            }, h(function() {
                f || (f = 1, a(1))
            }, o), l ? c.onload() : p.parentNode.insertBefore(c, p)
        }, e.yepnope.injectCss = function(e, a, i, o, n, l) {
            var o = t.createElement("link"),
                d, a = l ? s : a || r;
            o.href = e, o.rel = "stylesheet", o.type = "text/css";
            for (d in i) o.setAttribute(d, i[d]);
            n || (p.parentNode.insertBefore(o, p), h(a, 0))
        }
    }(this, document), Modernizr.load = function() {
        yepnope.apply(window, [].slice.call(arguments, 0))
    },
    function(e, t) {
        if ("function" == typeof define && define.amd) define(["exports", "module"], t);
        else if ("undefined" != typeof exports && "undefined" != typeof module) t(exports, module);
        else {
            var a = {
                exports: {}
            };
            t(a.exports, a), e.autosize = a.exports
        }
    }(this, function(e, t) {
        "use strict";

        function a(e) {
            function t() {
                var t = window.getComputedStyle(e, null);
                "vertical" === t.resize ? e.style.resize = "none" : "both" === t.resize && (e.style.resize = "horizontal"), l = "content-box" === t.boxSizing ? -(parseFloat(t.paddingTop) + parseFloat(t.paddingBottom)) : parseFloat(t.borderTopWidth) + parseFloat(t.borderBottomWidth), isNaN(l) && (l = 0), s()
            }

            function a(t) {
                var a = e.style.width;
                e.style.width = "0px", e.offsetWidth, e.style.width = a, e.style.overflowY = t, o()
            }

            function i(e) {
                for (var t = []; e && e.parentNode && e.parentNode instanceof Element;) e.parentNode.scrollTop && t.push({
                    node: e.parentNode,
                    scrollTop: e.parentNode.scrollTop
                }), e = e.parentNode;
                return t
            }

            function o() {
                var t = e.style.height,
                    a = i(e),
                    o = document.documentElement && document.documentElement.scrollTop;
                e.style.height = "auto";
                var r = e.scrollHeight + l;
                return 0 === e.scrollHeight ? void(e.style.height = t) : (e.style.height = r + "px", d = e.clientWidth, a.forEach(function(e) {
                    e.node.scrollTop = e.scrollTop
                }), void(o && (document.documentElement.scrollTop = o)))
            }

            function s() {
                o();
                var t = window.getComputedStyle(e, null),
                    i = Math.round(parseFloat(t.height));
                if (i !== Math.round(parseFloat(e.style.height)) ? "visible" !== t.overflowY && a("visible") : "hidden" !== t.overflowY && a("hidden"), c !== i) {
                    c = i;
                    var r = n("autosize:resized");
                    e.dispatchEvent(r)
                }
            }
            if (e && e.nodeName && "TEXTAREA" === e.nodeName && !r.has(e)) {
                var l = null,
                    d = e.clientWidth,
                    c = null,
                    f = function() {
                        e.clientWidth !== d && s()
                    },
                    h = function(t) {
                        window.removeEventListener("resize", f, !1), e.removeEventListener("input", s, !1), e.removeEventListener("keyup", s, !1), e.removeEventListener("autosize:destroy", h, !1), e.removeEventListener("autosize:update", s, !1), r.delete(e), Object.keys(t).forEach(function(a) {
                            e.style[a] = t[a]
                        })
                    }.bind(e, {
                        height: e.style.height,
                        resize: e.style.resize,
                        overflowY: e.style.overflowY,
                        overflowX: e.style.overflowX,
                        wordWrap: e.style.wordWrap
                    });
                e.addEventListener("autosize:destroy", h, !1), "onpropertychange" in e && "oninput" in e && e.addEventListener("keyup", s, !1), window.addEventListener("resize", f, !1), e.addEventListener("input", s, !1), e.addEventListener("autosize:update", s, !1), r.add(e), e.style.overflowX = "hidden", e.style.wordWrap = "break-word", t()
            }
        }

        function i(e) {
            if (e && e.nodeName && "TEXTAREA" === e.nodeName) {
                var t = n("autosize:destroy");
                e.dispatchEvent(t)
            }
        }

        function o(e) {
            if (e && e.nodeName && "TEXTAREA" === e.nodeName) {
                var t = n("autosize:update");
                e.dispatchEvent(t)
            }
        }
        var r = "function" == typeof Set ? new Set : function() {
                var e = [];
                return {
                    has: function(t) {
                        return Boolean(e.indexOf(t) > -1)
                    },
                    add: function(t) {
                        e.push(t)
                    },
                    delete: function(t) {
                        e.splice(e.indexOf(t), 1)
                    }
                }
            }(),
            n = function(e) {
                return new Event(e)
            };
        try {
            new Event("test")
        } catch (e) {
            n = function(e) {
                var t = document.createEvent("Event");
                return t.initEvent(e, !0, !1), t
            }
        }
        var s = null;
        "undefined" == typeof window || "function" != typeof window.getComputedStyle ? (s = function(e) {
            return e
        }, s.destroy = function(e) {
            return e
        }, s.update = function(e) {
            return e
        }) : (s = function(e, t) {
            return e && Array.prototype.forEach.call(e.length ? e : [e], function(e) {
                return a(e, t)
            }), e
        }, s.destroy = function(e) {
            return e && Array.prototype.forEach.call(e.length ? e : [e], i), e
        }, s.update = function(e) {
            return e && Array.prototype.forEach.call(e.length ? e : [e], o), e
        }), t.exports = s
    }),
    function(e, t, a) {
        "use strict";

        function i(a) {
            if (o = t.documentElement, r = t.body, U(), se = this, a = a || {}, he = a.constants || {}, a.easing)
                for (var i in a.easing) _[i] = a.easing[i];
            we = a.edgeStrategy || "set", ce = {
                beforerender: a.beforerender,
                render: a.render,
                keyframe: a.keyframe
            }, fe = a.forceHeight !== !1, fe && (He = a.scale || 1), pe = a.mobileDeceleration || x, $e = a.smoothScrolling !== !1, ue = a.smoothScrollingDuration || A, ve = {
                targetTop: se.getScrollTop()
            }, Xe = (a.mobileCheck || function() {
                return /Android|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent || navigator.vendor || e.opera)
            })(), Xe ? (de = t.getElementById(a.skrollrBody || T), de && ne(), G(), Ie(o, [w, y], [C])) : Ie(o, [w, b], [C]), se.refresh(), ye(e, "resize orientationchange", function() {
                var e = o.clientWidth,
                    t = o.clientHeight;
                (t !== Ne || e !== je) && (Ne = t, je = e, Ve = !0)
            });
            var n = Y();
            return function e() {
                $(), be = n(e)
            }(), se
        }
        var o, r, n = {
                get: function() {
                    return se
                },
                init: function(e) {
                    return se || new i(e)
                },
                VERSION: "0.6.30"
            },
            s = Object.prototype.hasOwnProperty,
            l = e.Math,
            d = e.getComputedStyle,
            c = "touchstart",
            f = "touchmove",
            h = "touchcancel",
            p = "touchend",
            m = "skrollable",
            u = m + "-before",
            v = m + "-between",
            g = m + "-after",
            w = "skrollr",
            C = "no-" + w,
            b = w + "-desktop",
            y = w + "-mobile",
            S = "linear",
            k = 1e3,
            x = .004,
            T = "skrollr-body",
            A = 200,
            W = "start",
            E = "end",
            I = "center",
            L = "bottom",
            D = "___skrollable_id",
            z = /^(?:input|textarea|button|select)$/i,
            B = /^\s+|\s+$/g,
            M = /^data(?:-(_\w+))?(?:-?(-?\d*\.?\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/,
            H = /\s*(@?[\w\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi,
            q = /^(@?[a-z\-]+)\[(\w+)\]$/,
            O = /-([a-z0-9_])/g,
            F = function(e, t) {
                return t.toUpperCase()
            },
            j = /[\-+]?[\d]*\.?[\d]+/g,
            N = /\{\?\}/g,
            V = /rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g,
            P = /[a-z\-]+-gradient/g,
            X = "",
            R = "",
            U = function() {
                var e = /^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;
                if (d) {
                    var t = d(r, null);
                    for (var a in t)
                        if (X = a.match(e) || +a == a && t[a].match(e)) break;
                    if (!X) return void(X = R = "");
                    X = X[0], "-" === X.slice(0, 1) ? (R = X, X = {
                        "-webkit-": "webkit",
                        "-moz-": "Moz",
                        "-ms-": "ms",
                        "-o-": "O"
                    }[X]) : R = "-" + X.toLowerCase() + "-"
                }
            },
            Y = function() {
                var t = e.requestAnimationFrame || e[X.toLowerCase() + "RequestAnimationFrame"],
                    a = ze();
                return (Xe || !t) && (t = function(t) {
                    var i = ze() - a,
                        o = l.max(0, 1e3 / 60 - i);
                    return e.setTimeout(function() {
                        a = ze(), t()
                    }, o)
                }), t
            },
            Z = function() {
                var t = e.cancelAnimationFrame || e[X.toLowerCase() + "CancelAnimationFrame"];
                return (Xe || !t) && (t = function(t) {
                    return e.clearTimeout(t)
                }), t
            },
            _ = {
                begin: function() {
                    return 0
                },
                end: function() {
                    return 1
                },
                linear: function(e) {
                    return e
                },
                quadratic: function(e) {
                    return e * e
                },
                cubic: function(e) {
                    return e * e * e
                },
                swing: function(e) {
                    return -l.cos(e * l.PI) / 2 + .5
                },
                sqrt: function(e) {
                    return l.sqrt(e)
                },
                outCubic: function(e) {
                    return l.pow(e - 1, 3) + 1
                },
                bounce: function(e) {
                    var t;
                    if (.5083 >= e) t = 3;
                    else if (.8489 >= e) t = 9;
                    else if (.96208 >= e) t = 27;
                    else {
                        if (!(.99981 >= e)) return 1;
                        t = 91
                    }
                    return 1 - l.abs(3 * l.cos(e * t * 1.028) / t)
                }
            };
        i.prototype.refresh = function(e) {
            var i, o, r = !1;
            for (e === a ? (r = !0, le = [], Pe = 0, e = t.getElementsByTagName("*")) : e.length === a && (e = [e]), i = 0, o = e.length; o > i; i++) {
                var n = e[i],
                    s = n,
                    l = [],
                    d = $e,
                    c = we,
                    f = !1;
                if (r && D in n && delete n[D], n.attributes) {
                    for (var h = 0, p = n.attributes.length; p > h; h++) {
                        var u = n.attributes[h];
                        if ("data-anchor-target" !== u.name)
                            if ("data-smooth-scrolling" !== u.name)
                                if ("data-edge-strategy" !== u.name)
                                    if ("data-emit-events" !== u.name) {
                                        var v = u.name.match(/^data(?:-(_\w+))?(?:-?(-?\d*\.?\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/);
                                        if (null !== v) {
                                            var g = {
                                                props: u.value,
                                                element: n,
                                                eventType: u.name.replace(O, F)
                                            };
                                            l.push(g);
                                            var w = v[1];
                                            w && (g.constant = w.substr(1));
                                            var C = v[2];
                                            /p$/.test(C) ? (g.isPercentage = !0, g.offset = (0 | C.slice(0, -1)) / 100) : g.offset = 0 | C;
                                            var b = v[3],
                                                y = v[4] || b;
                                            b && "start" !== b && "end" !== b ? (g.mode = "relative", g.anchors = [b, y]) : (g.mode = "absolute", "end" === b ? g.isEnd = !0 : g.isPercentage || (g.offset = g.offset * He))
                                        }
                                    } else f = !0;
                        else c = u.value;
                        else d = "off" !== u.value;
                        else if (null === (s = t.querySelector(u.value))) throw 'Unable to find anchor target "' + u.value + '"'
                    }
                    if (l.length) {
                        var S, k, x;
                        !r && D in n ? (x = n[D], S = le[x].styleAttr, k = le[x].classAttr) : (x = n[D] = Pe++, S = n.style.cssText, k = Ee(n)), le[x] = {
                            element: n,
                            styleAttr: S,
                            classAttr: k,
                            anchorTarget: s,
                            keyFrames: l,
                            smoothScrolling: d,
                            edgeStrategy: c,
                            emitEvents: f,
                            lastFrameIndex: -1
                        }, Ie(n, [m], [])
                    }
                }
            }
            for (Te(), i = 0, o = e.length; o > i; i++) {
                var T = le[e[i][D]];
                T !== a && (Q(T), te(T))
            }
            return se
        }, i.prototype.relativeToAbsolute = function(e, t, a) {
            var i = o.clientHeight,
                r = e.getBoundingClientRect(),
                n = r.top,
                s = r.bottom - r.top;
            return t === L ? n -= i : t === I && (n -= i / 2), a === L ? n += s : a === I && (n += s / 2), (n += se.getScrollTop()) + .5 | 0
        }, i.prototype.animateTo = function(e, t) {
            t = t || {};
            var i = ze(),
                o = se.getScrollTop(),
                r = t.duration === a ? 1e3 : t.duration;
            return me = {
                startTop: o,
                topDiff: e - o,
                targetTop: e,
                duration: r,
                startTime: i,
                endTime: i + r,
                easing: _[t.easing || S],
                done: t.done
            }, me.topDiff || (me.done && me.done.call(se, !1), me = a), se
        }, i.prototype.stopAnimateTo = function() {
            me && me.done && me.done.call(se, !0), me = a
        }, i.prototype.isAnimatingTo = function() {
            return !!me
        }, i.prototype.isMobile = function() {
            return Xe
        }, i.prototype.setScrollTop = function(t, a) {
            return ge = a === !0, Xe ? Re = l.min(l.max(t, 0), Me) : e.scrollTo(0, t), se
        }, i.prototype.getScrollTop = function() {
            return Xe ? Re : e.pageYOffset || o.scrollTop || r.scrollTop || 0
        }, i.prototype.getMaxScrollTop = function() {
            return Me
        }, i.prototype.on = function(e, t) {
            return ce[e] = t, se
        }, i.prototype.off = function(e) {
            return delete ce[e], se
        }, i.prototype.destroy = function() {
            Z()(be), ke(), Ie(o, [C], [w, b, y]);
            for (var e = 0, t = le.length; t > e; e++) re(le[e].element);
            o.style.overflow = r.style.overflow = "", o.style.height = r.style.height = "", de && n.setStyle(de, "transform", "none"), se = a, de = a, ce = a, fe = a, Me = 0, He = 1, he = a, pe = a, qe = "down", Oe = -1, je = 0, Ne = 0, Ve = !1, me = a, $e = a, ue = a, ve = a, ge = a, Pe = 0, we = a, Xe = !1, Re = 0, Ce = a
        };
        var G = function() {
                var i, n, s, d, m, u, v, g, w, C, b, y;
                ye(o, [c, f, h, p].join(" "), function(e) {
                    var o = e.changedTouches[0];
                    for (d = e.target; 3 === d.nodeType;) d = d.parentNode;
                    switch (m = o.clientY, u = o.clientX, C = e.timeStamp, z.test(d.tagName) || e.preventDefault(), e.type) {
                        case c:
                            i && i.blur(), se.stopAnimateTo(), i = d, n = v = m, s = u, w = C;
                            break;
                        case f:
                            z.test(d.tagName) && t.activeElement !== d && e.preventDefault(), g = m - v, y = C - b, se.setScrollTop(Re - g, !0), v = m, b = C;
                            break;
                        default:
                        case h:
                        case p:
                            var r = n - m,
                                S = s - u;
                            if (49 > S * S + r * r) {
                                if (!z.test(i.tagName)) {
                                    i.focus();
                                    var k = t.createEvent("MouseEvents");
                                    k.initMouseEvent("click", !0, !0, e.view, 1, o.screenX, o.screenY, o.clientX, o.clientY, e.ctrlKey, e.altKey, e.shiftKey, e.metaKey, 0, null), i.dispatchEvent(k)
                                }
                                return
                            }
                            i = a;
                            var x = g / y;
                            x = l.max(l.min(x, 3), -3);
                            var T = l.abs(x / pe),
                                A = x * T + .5 * pe * T * T,
                                W = se.getScrollTop() - A,
                                E = 0;
                            W > Me ? (E = (Me - W) / A, W = Me) : 0 > W && (E = -W / A, W = 0), T *= 1 - E, se.animateTo(W + .5 | 0, {
                                easing: "outCubic",
                                duration: T
                            })
                    }
                }), e.scrollTo(0, 0), o.style.overflow = r.style.overflow = "hidden"
            },
            K = function() {
                var e, t, a, i, r, n, s, d, c, f, h, p = o.clientHeight,
                    m = Ae();
                for (d = 0,
                    c = le.length; c > d; d++)
                    for (e = le[d], t = e.element, a = e.anchorTarget, i = e.keyFrames, r = 0, n = i.length; n > r; r++) s = i[r], f = s.offset, h = m[s.constant] || 0, s.frame = f, s.isPercentage && (f *= p, s.frame = f), "relative" === s.mode && (re(t), s.frame = se.relativeToAbsolute(a, s.anchors[0], s.anchors[1]) - f, re(t, !0)), s.frame += h, fe && !s.isEnd && s.frame > Me && (Me = s.frame);
                for (Me = l.max(Me, We()), d = 0, c = le.length; c > d; d++) {
                    for (e = le[d], i = e.keyFrames, r = 0, n = i.length; n > r; r++) s = i[r], h = m[s.constant] || 0, s.isEnd && (s.frame = Me - s.offset + h);
                    e.keyFrames.sort(Be)
                }
            },
            J = function(e, t) {
                for (var a = 0, i = le.length; i > a; a++) {
                    var o, r, l = le[a],
                        d = l.element,
                        c = l.smoothScrolling ? e : t,
                        f = l.keyFrames,
                        h = f.length,
                        p = f[0],
                        w = f[f.length - 1],
                        C = c < p.frame,
                        b = c > w.frame,
                        y = C ? p : w,
                        S = l.emitEvents,
                        k = l.lastFrameIndex;
                    if (C || b) {
                        if (C && -1 === l.edge || b && 1 === l.edge) continue;
                        switch (C ? (Ie(d, [u], [g, v]), S && k > -1 && (xe(d, p.eventType, qe), l.lastFrameIndex = -1)) : (Ie(d, [g], [u, v]), S && h > k && (xe(d, w.eventType, qe), l.lastFrameIndex = h)), l.edge = C ? -1 : 1, l.edgeStrategy) {
                            case "reset":
                                re(d);
                                continue;
                            case "ease":
                                c = y.frame;
                                break;
                            default:
                            case "set":
                                var x = y.props;
                                for (o in x) s.call(x, o) && (r = oe(x[o].value), 0 === o.indexOf("@") ? d.setAttribute(o.substr(1), r) : n.setStyle(d, o, r));
                                continue
                        }
                    } else 0 !== l.edge && (Ie(d, [m, v], [u, g]), l.edge = 0);
                    for (var T = 0; h - 1 > T; T++)
                        if (c >= f[T].frame && c <= f[T + 1].frame) {
                            var A = f[T],
                                W = f[T + 1];
                            for (o in A.props)
                                if (s.call(A.props, o)) {
                                    var E = (c - A.frame) / (W.frame - A.frame);
                                    E = A.props[o].easing(E), r = ie(A.props[o].value, W.props[o].value, E), r = oe(r), 0 === o.indexOf("@") ? d.setAttribute(o.substr(1), r) : n.setStyle(d, o, r)
                                }
                            S && k !== T && ("down" === qe ? xe(d, A.eventType, qe) : xe(d, W.eventType, qe), l.lastFrameIndex = T);
                            break
                        }
                }
            },
            $ = function() {
                Ve && (Ve = !1, Te());
                var e, t, i = se.getScrollTop(),
                    o = ze();
                if (me) o >= me.endTime ? (i = me.targetTop, e = me.done, me = a) : (t = me.easing((o - me.startTime) / me.duration), i = me.startTop + t * me.topDiff | 0), se.setScrollTop(i, !0);
                else if (!ge) {
                    var r = ve.targetTop - i;
                    r && (ve = {
                        startTop: Oe,
                        topDiff: i - Oe,
                        targetTop: i,
                        startTime: Fe,
                        endTime: Fe + ue
                    }), o <= ve.endTime && (t = _.sqrt((o - ve.startTime) / ue), i = ve.startTop + t * ve.topDiff | 0)
                }
                if (ge || Oe !== i) {
                    qe = i > Oe ? "down" : Oe > i ? "up" : qe, ge = !1;
                    var s = {
                        curTop: i,
                        lastTop: Oe,
                        maxTop: Me,
                        direction: qe
                    };
                    (ce.beforerender && ce.beforerender.call(se, s)) !== !1 && (J(i, se.getScrollTop()), Xe && de && n.setStyle(de, "transform", "translate(0, " + -Re + "px) " + Ce), Oe = i, ce.render && ce.render.call(se, s)), e && e.call(se, !1)
                }
                Fe = o
            },
            Q = function(e) {
                for (var t = 0, a = e.keyFrames.length; a > t; t++) {
                    for (var i, o, r, n, s = e.keyFrames[t], l = {}; null !== (n = H.exec(s.props));) r = n[1], o = n[2], i = r.match(/^(@?[a-z\-]+)\[(\w+)\]$/), null !== i ? (r = i[1], i = i[2]) : i = S, o = o.indexOf("!") ? ee(o) : [o.slice(1)], l[r] = {
                        value: o,
                        easing: _[i]
                    };
                    s.props = l
                }
            },
            ee = function(e) {
                var t = [];
                return V.lastIndex = 0, e = e.replace(V, function(e) {
                    return e.replace(j, function(e) {
                        return e / 255 * 100 + "%"
                    })
                }), R && (P.lastIndex = 0, e = e.replace(P, function(e) {
                    return R + e
                })), e = e.replace(j, function(e) {
                    return t.push(+e), "{?}"
                }), t.unshift(e), t
            },
            te = function(e) {
                var t, a, i = {};
                for (t = 0, a = e.keyFrames.length; a > t; t++) ae(e.keyFrames[t], i);
                for (i = {}, t = e.keyFrames.length - 1; t >= 0; t--) ae(e.keyFrames[t], i)
            },
            ae = function(e, t) {
                var a;
                for (a in t) s.call(e.props, a) || (e.props[a] = t[a]);
                for (a in e.props) t[a] = e.props[a]
            },
            ie = function(e, t, a) {
                var i, o = e.length;
                if (o !== t.length) throw "Can't interpolate between \"" + e[0] + '" and "' + t[0] + '"';
                var r = [e[0]];
                for (i = 1; o > i; i++) r[i] = e[i] + (t[i] - e[i]) * a;
                return r
            },
            oe = function(e) {
                var t = 1;
                return N.lastIndex = 0, e[0].replace(N, function() {
                    return e[t++]
                })
            },
            re = function(e, t) {
                e = [].concat(e);
                for (var a, i, o = 0, r = e.length; r > o; o++) i = e[o], (a = le[i[D]]) && (t ? (i.style.cssText = a.dirtyStyleAttr, Ie(i, a.dirtyClassAttr)) : (a.dirtyStyleAttr = i.style.cssText, a.dirtyClassAttr = Ee(i), i.style.cssText = a.styleAttr, Ie(i, a.classAttr)))
            },
            ne = function() {
                Ce = "translateZ(0)", n.setStyle(de, "transform", Ce);
                var e = d(de),
                    t = e.getPropertyValue("transform"),
                    a = e.getPropertyValue(R + "transform");
                t && "none" !== t || a && "none" !== a || (Ce = "")
            };
        n.setStyle = function(e, t, a) {
            var i = e.style;
            if ("zIndex" === (t = t.replace(O, F).replace("-", ""))) isNaN(a) ? i[t] = a : i[t] = "" + (0 | a);
            else if ("float" === t) i.styleFloat = i.cssFloat = a;
            else try {
                X && (i[X + t.slice(0, 1).toUpperCase() + t.slice(1)] = a), i[t] = a
            } catch (e) {}
        };
        var se, le, de, ce, fe, he, pe, me, $e, ue, ve, ge, we, Ce, be, ye = n.addEvent = function(t, a, i) {
                var o = function(t) {
                    return t = t || e.event, t.target || (t.target = t.srcElement), t.preventDefault || (t.preventDefault = function() {
                        t.returnValue = !1, t.defaultPrevented = !0
                    }), i.call(this, t)
                };
                a = a.split(" ");
                for (var r, n = 0, s = a.length; s > n; n++) r = a[n], t.addEventListener ? t.addEventListener(r, i, !1) : t.attachEvent("on" + r, o), Ue.push({
                    element: t,
                    name: r,
                    listener: i
                })
            },
            Se = n.removeEvent = function(e, t, a) {
                t = t.split(" ");
                for (var i = 0, o = t.length; o > i; i++) e.removeEventListener ? e.removeEventListener(t[i], a, !1) : e.detachEvent("on" + t[i], a)
            },
            ke = function() {
                for (var e, t = 0, a = Ue.length; a > t; t++) e = Ue[t], Se(e.element, e.name, e.listener);
                Ue = []
            },
            xe = function(e, t, a) {
                ce.keyframe && ce.keyframe.call(se, e, t, a)
            },
            Te = function() {
                var e = se.getScrollTop();
                Me = 0, fe && !Xe && (r.style.height = ""), K(), fe && !Xe && (r.style.height = Me + o.clientHeight + "px"), Xe ? se.setScrollTop(l.min(se.getScrollTop(), Me)) : se.setScrollTop(e, !0), ge = !0
            },
            Ae = function() {
                var e, t, a = o.clientHeight,
                    i = {};
                for (e in he) t = he[e], "function" == typeof t ? t = t.call(se) : /p$/.test(t) && (t = t.slice(0, -1) / 100 * a), i[e] = t;
                return i
            },
            We = function() {
                var e, t = 0;
                return de && (t = l.max(de.offsetHeight, de.scrollHeight)), (e = l.max(t, r.scrollHeight, r.offsetHeight, o.scrollHeight, o.offsetHeight, o.clientHeight)) - o.clientHeight
            },
            Ee = function(t) {
                var a = "className";
                return e.SVGElement && t instanceof e.SVGElement && (t = t[a], a = "baseVal"), t[a]
            },
            Ie = function(t, i, o) {
                var r = "className";
                if (e.SVGElement && t instanceof e.SVGElement && (t = t[r], r = "baseVal"), o === a) return void(t[r] = i);
                for (var n = t[r], s = 0, l = o.length; l > s; s++) n = De(n).replace(De(o[s]), " ");
                n = Le(n);
                for (var d = 0, c = i.length; c > d; d++) - 1 === De(n).indexOf(De(i[d])) && (n += " " + i[d]);
                t[r] = Le(n)
            },
            Le = function(e) {
                return e.replace(/^\s+|\s+$/g, "")
            },
            De = function(e) {
                return " " + e + " "
            },
            ze = Date.now || function() {
                return +new Date
            },
            Be = function(e, t) {
                return e.frame - t.frame
            },
            Me = 0,
            He = 1,
            qe = "down",
            Oe = -1,
            Fe = ze(),
            je = 0,
            Ne = 0,
            Ve = !1,
            Pe = 0,
            Xe = !1,
            Re = 0,
            Ue = [];
        "function" == typeof define && define.amd ? define([], function() {
            return n
        }) : "undefined" != typeof module && module.exports ? module.exports = n : e.skrollr = n
    }(window, document),
    function(e) {
        "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? module.exports = e : e(jQuery)
    }(function(e) {
        function t(t) {
            var n = t || window.event,
                s = l.call(arguments, 1),
                d = 0,
                f = 0,
                h = 0,
                p = 0,
                m = 0,
                u = 0;
            if (t = e.event.fix(n), t.type = "mousewheel", "detail" in n && (h = -1 * n.detail), "wheelDelta" in n && (h = n.wheelDelta), "wheelDeltaY" in n && (h = n.wheelDeltaY), "wheelDeltaX" in n && (f = -1 * n.wheelDeltaX), "axis" in n && n.axis === n.HORIZONTAL_AXIS && (f = -1 * h, h = 0), d = 0 === h ? f : h, "deltaY" in n && (h = -1 * n.deltaY, d = h), "deltaX" in n && (f = n.deltaX, 0 === h && (d = -1 * f)), 0 !== h || 0 !== f) {
                if (1 === n.deltaMode) {
                    var v = e.data(this, "mousewheel-line-height");
                    d *= v, h *= v, f *= v
                } else if (2 === n.deltaMode) {
                    var g = e.data(this, "mousewheel-page-height");
                    d *= g, h *= g, f *= g
                }
                if (p = Math.max(Math.abs(h), Math.abs(f)), (!r || r > p) && (r = p, i(n, p) && (r /= 40)), i(n, p) && (d /= 40, f /= 40, h /= 40), d = Math[d >= 1 ? "floor" : "ceil"](d / r), f = Math[f >= 1 ? "floor" : "ceil"](f / r), h = Math[h >= 1 ? "floor" : "ceil"](h / r), c.settings.normalizeOffset && this.getBoundingClientRect) {
                    var w = this.getBoundingClientRect();
                    m = t.clientX - w.left, u = t.clientY - w.top
                }
                return t.deltaX = f, t.deltaY = h, t.deltaFactor = r, t.offsetX = m, t.offsetY = u, t.deltaMode = 0, s.unshift(t, d, f, h), o && clearTimeout(o), o = setTimeout(a, 200), (e.event.dispatch || e.event.handle).apply(this, s)
            }
        }

        function a() {
            r = null
        }

        function i(e, t) {
            return c.settings.adjustOldDeltas && "mousewheel" === e.type && t % 120 == 0
        }
        var o, r, n = ["wheel", "mousewheel", "DOMMouseScroll", "MozMousePixelScroll"],
            s = "onwheel" in document || document.documentMode >= 9 ? ["wheel"] : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
            l = Array.prototype.slice;
        if (e.event.fixHooks)
            for (var d = n.length; d;) e.event.fixHooks[n[--d]] = e.event.mouseHooks;
        var c = e.event.special.mousewheel = {
            version: "3.1.12",
            setup: function() {
                if (this.addEventListener)
                    for (var a = s.length; a;) this.addEventListener(s[--a], t, !1);
                else this.onmousewheel = t;
                e.data(this, "mousewheel-line-height", c.getLineHeight(this)), e.data(this, "mousewheel-page-height", c.getPageHeight(this))
            },
            teardown: function() {
                if (this.removeEventListener)
                    for (var a = s.length; a;) this.removeEventListener(s[--a], t, !1);
                else this.onmousewheel = null;
                e.removeData(this, "mousewheel-line-height"), e.removeData(this, "mousewheel-page-height")
            },
            getLineHeight: function(t) {
                var a = e(t),
                    i = a["offsetParent" in e.fn ? "offsetParent" : "parent"]();
                return i.length || (i = e("body")), parseInt(i.css("fontSize"), 10) || parseInt(a.css("fontSize"), 10) || 16
            },
            getPageHeight: function(t) {
                return e(t).height()
            },
            settings: {
                adjustOldDeltas: !0,
                normalizeOffset: !0
            }
        };
        e.fn.extend({
            mousewheel: function(e) {
                return e ? this.bind("mousewheel", e) : this.trigger("mousewheel")
            },
            unmousewheel: function(e) {
                return this.unbind("mousewheel", e)
            }
        })
    });
var currentTransform, oldCurrentPlace = 0,
    trigCount = 0,
    avpMobile = 0;
$(document).ready(function() {
    function e(e, t) {
        var a = "text-width-tester",
            i = $("#" + a);
        return i.length ? i.css({
            font: t
        }).html(e) : (i = $('<span id="' + a + '" style="display:none;font:' + t + ';">' + e + "</span>"), $("body").append(i)), {
            width: i.width(),
            height: i.height()
        }
    }

    function t(t, a, i, o) {
        var r = $(t),
            n = r.val(),
            s = r.width() + 5,
            l = i + " " + a + "px " + o,
            d = e(n, l).width;
        d > s ? (a = a * s / d * .9, l = i + " " + a + "px " + o, r.css({
            font: l
        })) : r.css({
            font: l
        })
    }

    function a() {
        1 == f && setTimeout(function() {
            $(".logoSplit-pagination i.open").removeClass("open"), $(".logoSplit-pagination i:nth-of-type(2)").addClass("open"), $(".slide-right .reveal").removeClass("reveal"), $(".slide-right img:nth-of-type(2)").addClass("reveal"), 1 == f && setTimeout(function() {
                $(".logoSplit-pagination i.open").removeClass("open"), $(".logoSplit-pagination i:nth-of-type(3)").addClass("open"), $(".slide-right .reveal").removeClass("reveal"), $(".slide-right img:nth-of-type(3)").addClass("reveal"), 1 == f && setTimeout(function() {
                    $(".logoSplit-pagination i.open").removeClass("open"), $(".logoSplit-pagination i:nth-of-type(1)").addClass("open"), $(".slide-right .reveal").removeClass("reveal"), $(".slide-right img:nth-of-type(1)").addClass("reveal"), 1 == f && a()
                }, 5e3)
            }, 5e3)
        }, 5e3)
    }

    function i() {
        1 == o && setTimeout(function() {
            $(".paginationWrap i.open").removeClass("open"), $(".paginationWrap i:nth-of-type(2)").addClass("open"), $(".imageWrap .open").removeClass("open"), $(".imageWrap img:nth-of-type(2)").addClass("open"), 1 == o && setTimeout(function() {
                $(".paginationWrap i.open").removeClass("open"), $(".paginationWrap i:nth-of-type(3)").addClass("open"), $(".imageWrap .open").removeClass("open"), $(".imageWrap img:nth-of-type(3)").addClass("open"), 1 == o && setTimeout(function() {
                    $(".paginationWrap i.open").removeClass("open"), $(".paginationWrap i:nth-of-type(1)").addClass("open"), $(".imageWrap .open").removeClass("open"), $(".imageWrap img:nth-of-type(1)").addClass("open"), 1 == o && i()
                }, 5e3)
            }, 5e3)
        }, 5e3)
    }
    $(".contact-page textarea").length && ($("textarea").attr("style", "height:32px;"), $("textarea").focus(function(e) {
        $("textarea").attr("style", "height:267px;"), setTimeout(function() {
            autosize($("textarea"))
        }, 250)
    }).blur(function(e) {
        $("textarea").attr("style", "height:32px;")
    })), askedooCase(), askedooCaseResize(), imgOp(), categoryNews(), menuSm(), menuColorSwap(), capSplitInit(), drawerInit(),homeSegmentSwap(), window.location.hash ? "#baby-boomers" == window.location.hash ? (homeSegmentLoad("baby-boomers"), $('li[market="baby-boomers"]').click()) : "#generation-x" == window.location.hash && (homeSegmentLoad("generation-x"), $('li[market="generation-x"]').click()) : homeSegmentLoad("millennials"), homeSegmentMobile(), capBlocksInit(), capBlocksShuffle(), rotatorSliderInit(), rotatorSliderLoad(), $(".heroSectionImage").length && heroImageLoad(), fixedWrap(), $(".articleBody a").click(function(e) {
        if (1 == $(this).has("img").length) {
            e.preventDefault(), $(this).hasClass("infographic") ? $(".hoverInfo").addClass("infographic") : $(".hoverInfo").addClass("normal");
            var t = $(this).find("img").attr("src");
            if (e.preventDefault(), $(this).find(".hoverInfo.opened").length) return;
            $("html, body").css({
                overflow: "hidden"
            }), $(".hoverInfo img").attr("src", t), $(".hoverInfo").fadeIn(500, function() {
                $(this).addClass("opened")
            }), $(".closeButton").click(function() {
                $("html, body").css({
                    overflow: "visible"
                }), $(this).parent(".hoverInfo").fadeOut(500, function() {
                    $(".hoverInfo.opened").removeClass("opened"), $(".hoverInfo img").attr("src", ""), $(".hoverInfo").removeClass("infographic"), $(".hoverInfo").removeClass("normal")
                })
            })
        }
    });
    var o = !1,
        r = !1,
        n;
    if ($(".page-arsenal-venture-partners").length)
        if ($(window).width() > 1024) $(window).scroll(function() {
            var e = $(".resultWrap").offset().top,
                t = $(".resultWrap").outerHeight(),
                a = $(window).height();
            if ($(this).scrollTop() + 150 > e + t - a) {
                for (var i = 1; i <= $(".result").length; i++) $(".results h3").removeClass("top-hide"), $(".result[data-index='" + i + "']").removeClass("hide"), $(".result[data-index='" + i + "']").find(".statHide").removeClass("statHide");
                $(".circleGraph").removeClass("hide")
            }
        });
        else {
            for (var s = 1; s <= $(".result").length; s++) $(".result[data-index='" + s + "']").removeClass("hide"), $(".result[data-index='" + s + "']").find(".statHide").removeClass("statHide");
            $(".circleGraph").removeClass("hide")
        }
    if ("work" != pageSlug && allowDesktopBGVidLoad(), $(".heroSection .featuredArticle").length && $(".arrowContainer").animate({
            opacity: 1
        }, 1250, function() {
            $(".arrow").animate({
                bottom: "15px"
            }, 1250, function() {
                downArrowAnimation(), $(".scrollText").delay(5e3).animate({
                    opacity: 1
                }, 625)
            })
        }), $(".careerPositions").length && $(".positionCategory").click(function(e) {
            $(".position.inn-open").find(".positionInner").slideUp("fast"), $(".inn-open").removeClass("inn-open"), $(".positionCategory.open").removeClass("open"), $(this).addClass("open"), e.preventDefault(), history.pushState("", "", " "), 1 == $(this).siblings(".positionWrap").hasClass("open") ? ($(".positionCategory.open").removeClass("open"), $(this).siblings(".positionWrap").slideUp("fast"), $(this).siblings(".positionWrap").toggleClass("open")) : $(".positionWrap.open").length ? ($(".positionWrap.open").slideUp("fast", function() {}), $(".positionWrap.open").toggleClass("open"), $(this).siblings(".positionWrap").slideDown("fast", function() {}), $(this).siblings(".positionWrap").toggleClass("open")) : ($(this).siblings(".positionWrap").slideDown("fast", function() {}), $(this).siblings(".positionWrap").toggleClass("open"))
        }), $(".careerCharacteristics").length && ($(".characteristicAnchor").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0, $(".characteristicAnchor").parent(".open").removeClass("open"), $(this).parent("li").addClass("open");
                var t = $(this).attr("data");
                $(".characteristic.open").animate({
                    left: "-200%"
                }, 500, function() {
                    $(this).css("left", "100%"), $(this).removeClass("open"), $(".characteristic[data='" + t + "']").animate({
                        left: "0"
                    }, 500, function() {
                        $(this).addClass("open"), o = !1
                    })
                })
            }
        }), $(".prevCharacteristic a").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".characteristicHeader li.open .characteristicAnchor").attr("data");
                1 == t ? t = $(".characteristicAnchor").length : t--, $(".characteristic").each(function() {
                    $(this).hasClass("open") || $(this).css("left", "-200%")
                }), $(".characteristicHeader li.open").removeClass("open"), $(".characteristicAnchor[data='" + t + "']").parent("li").addClass("open"), $(".characteristic.open").animate({
                    left: "200%"
                }, 500, function() {
                    $(this).removeClass("open"), $(".characteristic[data='" + t + "']").animate({
                        left: "0"
                    }, 500, function() {
                        $(this).addClass("open"), o = !1
                    })
                })
            }
        }), $(".nextCharacteristic a").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".characteristicHeader li.open .characteristicAnchor").attr("data");
                t == $(".characteristicAnchor").length ? t = 1 : t++, $(".characteristic").each(function() {
                    $(this).hasClass("open") || $(this).css("left", "100%")
                }), $(".characteristicHeader li.open").removeClass("open"), $(".characteristicAnchor[data='" + t + "']").parent("li").addClass("open"), $(".characteristic.open").animate({
                    left: "-200%"
                }, 500, function() {
                    $(this).removeClass("open"), $(".characteristic[data='" + t + "']").animate({
                        left: "0"
                    }, 500, function() {
                        $(this).addClass("open"), o = !1
                    })
                })
            }
        })), $(".teamSection").length && ($(".teamMember").mouseenter(function() {
            var e = $(this).find(".headshotGif").attr("data");
            $(this).find(".headshotGif").css("background-image", "url('" + e + "')"), $(this).find(".headshotDescription").css("opacity", "1")
        }), $(".teamMember").mouseleave(function() {
            $(this).find(".headshotGif").css("background-image", "none"), $(this).find(".headshotDescription").css("opacity", "0")
        })), $(".teamSection").length) {
        var l = new Array,
            d, c;
        $(window).width() > 1024 ? ($(".teamSlider").attr("translate", 0), $(".teamSection").css("max-width", $(window).width() / 4 + "px"), $(".teamSection").css("flex", "0 0 " + $(window).width() / 4 + "px"), $(".teamSlider").css("width", $(".teamSection").length * $(".teamSection").width() + "px")) : ($(".teamSlider").attr("translate", 0), $(".teamSlider").css("transform", "translateX(0)"), $(".teamSection").css("width", "100%"), $(".teamSection").css("max-width", "100%"), $(".teamSection").css("flex", "0 0 100%"), $(".teamSlider").css("width", "100%"), $(".teamSection").removeClass("active"), $(".nextTeam").removeClass("arrow-off"), $(".prevTeam").addClass("arrow-off"), $(".teamSection").each(function(e, t) {
            e < 4 && $(this).addClass("active")
        })), $(".teamSection").each(function(e) {
            l[e] = $(this).attr("data")
        }), $(".prevTeam").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                if (o = !0, $(".teamSection").first().hasClass("active")) return;
                $(".nextTeam").removeClass("arrow-off");
                var t = $(".teamSlider").attr("translate");
                t = parseInt(t) + parseInt($(".teamSection").width()), $(".teamSlider").attr("translate", t), $(".teamSlider").css("transform", "translateX(" + t + "px)"), $(".teamSection.active").last().removeClass("active"), $(".teamSection.active").first().prev().addClass("active"), $(".teamSection").first().hasClass("active") && $(".prevTeam").addClass("arrow-off"), setTimeout(function() {
                    o = !1
                }, 500)
            }
        }), $(".nextTeam").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                if (o = !0, $(".teamSection").last().hasClass("active")) return;
                $(".prevTeam").removeClass("arrow-off");
                var t = $(".teamSlider").attr("translate");
                t -= $(".teamSection").width(), $(".teamSlider").attr("translate", t), $(".teamSlider").css("transform", "translateX(" + t + "px)"), $(".teamSection.active").first().removeClass("active"), $(".teamSection.active").last().next().addClass("active"), $(".teamSection").last().hasClass("active") && $(".nextTeam").addClass("arrow-off"), setTimeout(function() {
                    o = !1
                }, 500)
            }
        })
    }
    if ($(".teamSection").length && ($(".teamMember").click(function(e) {
            if (e.preventDefault(), $(this).attr("data-member").length) {
                var t = $(this).attr("data-member");
                $("html, body").css({
                    overflow: "hidden",
                    position: "relative"
                }), $(".teamBio").fadeIn(500, function() {
                    $(".memberBio[data-member='" + t + "']").fadeIn(500), $(".memberBio[data-member='" + t + "']").addClass("current")
                })
            }
        }), $(".closeButton").click(function() {
            $(".memberBio").fadeOut(500), $(".teamBio").fadeOut(500, function() {
                $("html, body").css({
                    overflow: "visible",
                    position: "static"
                })
            }), $(".current").removeClass("current")
        }), $(".nextBio").click(function() {
            var e = $(".current").attr("data-index");
            e == $(".memberBio").length ? $(".current").fadeOut(500, function() {
                $(".current").removeClass("current"), e = 1, $(".memberBio[data-index='" + e + "']").fadeIn(500, function() {
                    $(this).addClass("current")
                })
            }) : $(".current").fadeOut(500, function() {
                $(".current").removeClass("current"), e++, $(".memberBio[data-index='" + e + "']").fadeIn(500, function() {
                    $(this).addClass("current")
                })
            })
        }), $(".prevBio").click(function() {
            var e = $(".current").attr("data-index"),
                t = $(".memberBio").length;
            1 == e ? $(".current").fadeOut(500, function() {
                $(".current").removeClass("current"), e = t, $(".memberBio[data-index='" + e + "']").fadeIn(500, function() {
                    $(this).addClass("current")
                })
            }) : $(".current").fadeOut(500, function() {
                $(".current").removeClass("current"), e--, $(".memberBio[data-index='" + e + "']").fadeIn(500, function() {
                    $(this).addClass("current")
                })
            })
        })), $(".featuredArticle.open").length && ($(".lastFeatured i").click(function(e) {
            e.preventDefault();
            var t = $(".featuredArticle.open").attr("data");
            1 == t && 0 == o ? (o = !0, $(".featuredArticle").each(function() {
                0 == $(this).hasClass("open") && $(this).css("left", "-200%")
            }), t = $(".featuredArticle").length, $(".featuredArticle.open").find("h2").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".readMore").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find("p").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "transparent"), $(".featuredArticle.open").animate({
                opacity: "0.25"
            }, 250), $(".featuredArticle.open").animate({
                left: "125%"
            }, 500), $(".featuredArticle.open").removeClass("open"), $(".featuredArticle[data='" + t + "']").addClass("open"), $(".featuredArticle[data='" + t + "']").delay(500).animate({
                left: "0"
            }, 500, function() {
                $(".heroSection").css("background-color", featuredColor[t - 1]), $(".featuredArticle.open").find("h2").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".readMore").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find("p").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "white"), $(".featuredArticle.open").animate({
                    opacity: "1"
                }, 500, function() {
                    o = !1
                })
            })) : 0 == o && (o = !0, $(".featuredArticle").each(function() {
                0 == $(this).hasClass("open") && $(this).css("left", "-200%")
            }), t--, $(".featuredArticle.open").find("h2").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".readMore").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find("p").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "transparent"), $(".featuredArticle.open").animate({
                opacity: "0.25"
            }, 250), $(".featuredArticle.open").animate({
                left: "125%"
            }, 500), $(".featuredArticle.open").removeClass("open"), $(".featuredArticle[data='" + t + "']").addClass("open"), $(".featuredArticle[data='" + t + "']").delay(500).animate({
                left: "0"
            }, 500, function() {
                $(".heroSection").css("background-color", featuredColor[t - 1]), $(".featuredArticle.open").find("h2").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".readMore").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find("p").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "white"), $(".featuredArticle.open").animate({
                    opacity: "1"
                }, 500, function() {
                    o = !1
                })
            }))
        }), $(".nextFeatured i").click(function(e) {
            e.preventDefault();
            var t = $(".featuredArticle.open").attr("data");
            5 == t && 0 == o ? (o = !0, $(".featuredArticle").each(function() {
                0 == $(this).hasClass("open") && $(this).css("left", "200%")
            }), t = 1, $(".featuredArticle.open").find("h2").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".readMore").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find("p").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "transparent"), $(".featuredArticle.open").animate({
                opacity: "0.25"
            }, 250), $(".featuredArticle.open").animate({
                left: "-200%"
            }, 500), $(".featuredArticle.open").removeClass("open"), $(".featuredArticle[data='" + t + "']").addClass("open"), $(".featuredArticle[data='" + t + "']").delay(500).animate({
                left: "0"
            }, 500, function() {
                $(".heroSection").css("background-color", featuredColor[t - 1]), $(".featuredArticle.open").find("h2").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".readMore").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find("p").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "white"), $(".featuredArticle.open").animate({
                    opacity: "1"
                }, 500, function() {
                    o = !1
                })
            })) : 0 == o && (o = !0, $(".featuredArticle").each(function() {
                0 == $(this).hasClass("open") && $(this).css("left", "200%")
            }), t++, $(".featuredArticle.open").find("h2").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".readMore").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find("p").animate({
                opacity: "0"
            }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "transparent"), $(".featuredArticle.open").animate({
                opacity: "0.25"
            }, 250), $(".featuredArticle.open").animate({
                left: "-200%"
            }, 500), $(".featuredArticle.open").removeClass("open"), $(".featuredArticle[data='" + t + "']").addClass("open"), $(".featuredArticle[data='" + t + "']").delay(500).animate({
                left: "0"
            }, 500, function() {
                $(".heroSection").css("background-color", featuredColor[t - 1]), $(".featuredArticle.open").find("h2").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".readMore").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find("p").animate({
                    opacity: "1"
                }, 500), $(".featuredArticle.open").find(".borderToggle").css("border-color", "white"), $(".featuredArticle.open").animate({
                    opacity: "1"
                }, 500, function() {
                    o = !1
                })
            }))
        })), $("#searchform").length && ($("#searchform button").click(function(e) {
            $(this).hasClass("no-click") && (e.preventDefault(), $(this).removeClass("no-click"), $("#searchform").addClass("active"), $("#searchform input").focus(), $(document).click(function(e) {
                e.target.closest("#searchform") || ($("#searchform").removeClass("active"), $("#searchform button").addClass("no-click"))
            }))
        }), $("#searchform").submit(function(e) {
            var t = $(".search-input--text").val();
            "" == $.trim(t) && e.preventDefault()
        })), $(".heroSectionStream").length && $(".heroSectionStream iframe").css("width", $(window).width() + 600), $(".linkedLink").length && ($(".linkedLink").mouseenter(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 4), oldSrc += "-b.png", $(this).find("img").attr("src", oldSrc)
        }), $(".linkedLink").mouseleave(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 6), oldSrc += ".png", $(this).find("img").attr("src", oldSrc)
        })), $(".twitterLink").length && ($(".twitterLink").mouseenter(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 4), oldSrc += "-b.png", $(this).find("img").attr("src", oldSrc)
        }), $(".twitterLink").mouseleave(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 6), oldSrc += ".png", $(this).find("img").attr("src", oldSrc)
        })), $(".instagramLink").length && ($(".instagramLink").mouseenter(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 4), oldSrc += "-b.png", $(this).find("img").attr("src", oldSrc)
        }), $(".instagramLink").mouseleave(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 6), oldSrc += ".png", $(this).find("img").attr("src", oldSrc)
        })), $(".facebookLink").length && ($(".facebookLink").mouseenter(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 4), oldSrc += "-b.png", $(this).find("img").attr("src", oldSrc)
        }), $(".facebookLink").mouseleave(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 6), oldSrc += ".png", $(this).find("img").attr("src", oldSrc)
        })), $(".biggieLink").length && ($(".biggieLink").mouseenter(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 4), oldSrc += "-b.png", $(this).find("img").attr("src", oldSrc)
        }), $(".biggieLink").mouseleave(function() {
            oldSrc = $(this).find("img").attr("src"), oldSrc = oldSrc.substring(0, oldSrc.length - 6), oldSrc += ".png", $(this).find("img").attr("src", oldSrc)
        })), "work" == pageSlug && $(".arrowContainer").animate({
            opacity: 1
        }, 1250, function() {
            $(".arrow").animate({
                bottom: "15px"
            }, 1250, function() {
                downArrowAnimation(), $(".scrollText").delay(8e3).animate({
                    opacity: 1
                }, 625)
            })
        }), $(".videoSplit").length && (o = !1, $(".closeButton").click(function() {
            $("html, body").css({
                overflow: "visible"
            }), $(".fixZ").css("z-index", 900), $(".headerBar").removeClass("fixZ"), $(this).parent(".hoverVideo").find("iframe").remove(), $(this).parent(".hoverVideo").fadeOut(500, function() {
                $(".hoverVideo.opened").removeClass("opened")
            })
        })), $(".biggieLink").length && ($(".biggieLink").click(function(e) {
            if (e.preventDefault(), !$(this).find(".hoverVideo.opened").length) {
                var t = $(window).width();
                $("html, body").css({
                    overflow: "hidden"
                }), $(".headerBar").addClass("fixZ"), $(".fixZ").css("z-index", 50), $(".hoverVideo").fadeIn(500, function() {
                    var e = $(this).attr("data-videoUrl");
                    if ($(this).addClass("opened"), e += "?autoplay=1", t <= 900 && t >= 528) var a = 512,
                        i = 288;
                    else if (t > 900 && t <= 1200) var a = 896,
                        i = 504;
                    else if (t > 1200 && t <= 1600) var a = 1152,
                        i = 648;
                    else if (t >= 1600) var a = 1536,
                        i = 864;
                    $(this).find(".vid-wrapper").append('<iframe src="' + e + '" width="' + a + '" height="' + i + '" frameborder="0" title="0" byline="0" badge="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
                })
            }
        }), $(".closeButton").click(function() {
            $("html, body").css({
                overflow: "visible"
            }), $(".headerBar").removeClass("fixZ"), $(".fixZ").css("z-index", 900), $(this).parent(".hoverVideo").find("iframe").remove(), $(this).parent(".hoverVideo").fadeOut(500, function() {
                $(".hoverVideo.opened").removeClass("opened")
            })
        })), $(".bVid").length && ($(".bVid").click(function(e) {
            if (e.preventDefault(), !$(this).find(".hoverVideo.opened").length) {
                var t = $(window).width();
                $("html, body").css({
                    overflow: "hidden"
                }), $(".hoverVideo").fadeIn(500, function() {
                    var e = $(this).attr("data-videoUrl");
                    if ($(this).addClass("opened"), e += "?autoplay=1", t <= 900 && t >= 528) var a = 512,
                        i = 288;
                    else if (t > 900 && t <= 1200) var a = 896,
                        i = 504;
                    else if (t > 1200 && t <= 1600) var a = 1152,
                        i = 648;
                    else if (t >= 1600) var a = 1536,
                        i = 864;
                    $(this).find(".vid-wrapper").append('<iframe src="' + e + '" width="' + a + '" height="' + i + '" frameborder="0" title="0" byline="0" badge="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
                })
            }
        }), $(".closeButton").click(function() {
            $("html, body").css({
                overflow: "visible"
            }), $(this).parent(".hoverVideo").find("iframe").remove(), $(this).parent(".hoverVideo").fadeOut(500, function() {
                $(".hoverVideo.opened").removeClass("opened")
            })
        })), $(".applyWrap a").length && ($(".applyWrap a").click(function(e) {
            if (e.preventDefault(), !$(this).find(".applyForm.opened").length) {
                var t = $(this).attr("data-title"),
                    a = $(this).attr("data-category");
                $("html, body").css({
                    overflow: "hidden"
                }), $(".topHeader-close p").html(t), $(".career-position input").val(t), $(".position-cat input").val(a), $(".applyForm").fadeIn(500, function() {
                    $(this).addClass("opened")
                })
            }
        }), $(".closeButton").click(function() {
            $("html, body").css({
                overflow: "visible"
            }), $(".applyForm.opened").fadeOut(500, function() {
                $(".applyForm.opened").removeClass("opened")
            })
        })), $("#searchform").length && $("input").keyup(function() {
            t(this, 20, "600", "canada-type-gibson, sans-serif")
        }), $(".formWrap").length && $("input").keyup(function() {
            t(this, 37, "600", "canada-type-gibson, sans-serif")
        }), $(".formWrap-ld").length && $("input").keyup(function() {
            t(this, 25, "100", "Chronicle, serif")
        }), $(".rotatorImage").length && ($(".prevImage").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".rotatorImage.opened").attr("data-index"),
                    a = $(".rotatorImage").length;
                $(".rotatorImage").each(function() {
                    1 == $(this).hasClass("opened") || $(this).css("left", "-100%")
                }), 1 == t ? ($(".rotatorImage.opened").animate({
                    left: "100%"
                }, 500), t = a, $(".rotatorImage[data-index='" + t + "']").animate({
                    left: 0
                }, 500, function() {
                    $(".rotatorImage.opened").removeClass("opened"), $(this).addClass("opened"), o = !1
                })) : ($(".rotatorImage.opened").animate({
                    left: "100%"
                }, 500), t--, $(".rotatorImage[data-index='" + t + "']").animate({
                    left: 0
                }, 500, function() {
                    $(".rotatorImage.opened").removeClass("opened"), $(this).addClass("opened"), o = !1
                }))
            }
        }), $(".nextImage").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".rotatorImage.opened").attr("data-index"),
                    a = $(".rotatorImage").length;
                $(".rotatorImage").each(function() {
                    1 == $(this).hasClass("opened") || $(this).css("left", "100%")
                }), t == a ? ($(".rotatorImage.opened").animate({
                    left: "-100%"
                }, 500), t = 1, $(".rotatorImage[data-index='" + t + "']").animate({
                    left: 0
                }, 500, function() {
                    $(".rotatorImage.opened").removeClass("opened"), $(this).addClass("opened"), o = !1
                })) : ($(".rotatorImage.opened").animate({
                    left: "-100%"
                }, 500), t++, $(".rotatorImage[data-index='" + t + "']").animate({
                    left: 0
                }, 500, function() {
                    $(".rotatorImage.opened").removeClass("opened"), $(this).addClass("opened"), o = !1
                }))
            }
        })), $(".logoSplit").length && $(".page-the-daily-mom-app").length) {
        var f = !0;
        $(".logoSplit-pagination i").click(function(e) {
            f = !1;
            var t = $(this).attr("data-index");
            $(".slide-right .reveal").removeClass("reveal"), $(".slide-right img[data-index='" + t + "']").addClass("reveal"), $(".logoSplit-pagination i.open").removeClass("open"), $(this).addClass("open"), f = !1
        }), a()
    }
    if ($(".productRotator").length) {
        var o = !0;
        $(".paginationWrap i").click(function(e) {
            o = !1;
            var t = $(this).attr("data-index");
            $(".imageWrap .open").removeClass("open"), $(".imageWrap img[data-index='" + t + "']").addClass("open"), $(".paginationWrap i.open").removeClass("open"), $(this).addClass("open"), o = !1
        }), i()
    }
    if ($(".positionWrap").length && ($(".position h3").click(function(e) {
            if (e.preventDefault(), 1 == $(this).parent(".position").hasClass("inn-open")) $(this).parent(".position").find(".positionInner").slideUp("fast"), $(this).parent(".position").removeClass("inn-open"), $(this).find(".plusSign").removeClass("inn-open"), $(this).find(".minusSign").removeClass("inn-open"), history.pushState("", "", " ");
            else {
                $(this).parent(".position").find(".positionInner").slideDown("fast"), $(this).parent(".position").addClass("inn-open"), $(this).find(".plusSign").addClass("inn-open"), $(this).find(".minusSign").addClass("inn-open");
                var t = $(this).attr("data-job");
                history.pushState("", "", "#" + t)
            }
        }), window.location.hash)) {
        var h = window.location.hash.substring(1);
        $(".position h3[data-job='" + h + "']").parent().parent().prev().click(), $(".position h3[data-job='" + h + "']").click();
        var p = $("#" + h);
        $("html, body").animate({
            scrollTop: $(p).offset().top - 75
        }, 1)
    }
    if ($(".jobCTA").length && $(".jobCTA").click(function() {
            document.location.href = "http://bigeyeagency.com/careers/#positions"
        }), $(".pageWrap-agencyOne .rightSide a").click(function(e) {
            e.preventDefault(), $("html, body").animate({
                scrollTop: $(".formWrap-ld").offset().top
            }, 1e3)
        }), $(".applyWrap a").click(function(e) {
            e.preventDefault();
            var t = $(this).attr("data-title");
            $(".formWrap").fadeIn("fast")
        }), $(".heroSectionStream").length && ($(window).width() <= 1400 && $(".heroSectionStream iframe").css("width", $(window).width() + 1200), $(window).width() <= 1700 && $(window).width() > 1400 && $(".heroSectionStream iframe").css("width", $(window).width() + 900), $(window).width() > 1700 && $(".heroSectionStream iframe").css("width", $(window).width() + 600)), $(".landing-conc").length && $(".landing-conc").click(function(e) {
            $("html, body").animate({
                scrollTop: $(".gform_wrapper").parent().offset().top - 50
            }, 1e3)
        }), $(".large-image-slider").length && ($(".large-image-slider .previous").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".large-image-slider .slide.active").attr("data-index"),
                    a = $(".large-image-slider .slide").length;
                $(".large-image-slider .slide.after").addClass("hide").addClass("before").removeClass("after"), $("html").animate({
                    opacity: 1
                }, 100, function() {
                    1 == t ? ($(".large-image-slider .slide.active").addClass("after"), $(".large-image-slider .slide:nth-of-type(" + a + ")").removeClass("hide").removeClass("before"), $(".large-image-slider .slide.active").removeClass("active"), $(".large-image-slider .slide:nth-of-type(" + a + ")").addClass("active")) : (t--, $(".large-image-slider .slide.active").addClass("after"), $(".large-image-slider .slide:nth-of-type(" + t + ")").removeClass("hide").removeClass("before"), $(".large-image-slider .slide.active").removeClass("active"), $(".large-image-slider .slide:nth-of-type(" + t + ")").addClass("active")), $("html").animate({
                        opacity: 1
                    }, 400, function() {
                        $(".large-image-slider .slide.after").addClass("hide"), o = !1
                    })
                })
            }
        }), $(".large-image-slider .next").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".large-image-slider .slide.active").attr("data-index"),
                    a = $(".large-image-slider .slide").length;
                $(".large-image-slider .slide.before").addClass("hide").addClass("after").removeClass("before"), $("html").animate({
                    opacity: 1
                }, 100, function() {
                    t == a ? ($(".large-image-slider .slide.active").addClass("before"), $(".large-image-slider .slide:nth-of-type(1)").removeClass("hide").removeClass("after"), $(".large-image-slider .slide.active").removeClass("active"), $(".large-image-slider .slide:nth-of-type(1)").addClass("active")) : (t++, $(".large-image-slider .slide.active").addClass("before"), $(".large-image-slider .slide:nth-of-type(" + t + ")").removeClass("hide").removeClass("after"), $(".large-image-slider .slide.active").removeClass("active"), $(".large-image-slider .slide:nth-of-type(" + t + ")").addClass("active")), $("html").animate({
                        opacity: 1
                    }, 350, function() {
                        $(".large-image-slider .slide.before").addClass("hide"), o = !1
                    })
                })
            }
        })), $(".img-bg-quote-rotator").length && ($(".img-bg-quote-rotator .prev a").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".img-bg-quote-rotator .slide.active").attr("data-index"),
                    a = $(".img-bg-quote-rotator .slide").length;
                $(".img-bg-quote-rotator .slide.after").addClass("hide").addClass("before").removeClass("after"), $("html").animate({
                    opacity: 1
                }, 100, function() {
                    1 == t ? ($(".img-bg-quote-rotator .slide.active").addClass("after"), $(".img-bg-quote-rotator .slide:nth-of-type(" + a + ")").removeClass("hide").removeClass("before"), $(".img-bg-quote-rotator .slide.active").removeClass("active"), $(".img-bg-quote-rotator .slide:nth-of-type(" + a + ")").addClass("active")) : (t--, $(".img-bg-quote-rotator .slide.active").addClass("after"), $(".img-bg-quote-rotator .slide:nth-of-type(" + t + ")").removeClass("hide").removeClass("before"), $(".img-bg-quote-rotator .slide.active").removeClass("active"), $(".img-bg-quote-rotator .slide:nth-of-type(" + t + ")").addClass("active")), $("html").animate({
                        opacity: 1
                    }, 500, function() {
                        $(".img-bg-quote-rotator .slide.before").addClass("hide"), o = !1
                    })
                })
            }
        }), $(".img-bg-quote-rotator .next a").click(function(e) {
            if (e.preventDefault(), 0 == o) {
                o = !0;
                var t = $(".img-bg-quote-rotator .slide.active").attr("data-index"),
                    a = $(".img-bg-quote-rotator .slide").length;
                $(".img-bg-quote-rotator .slide.before").addClass("hide").addClass("after").removeClass("before"), $("html").animate({
                    opacity: 1
                }, 100, function() {
                    t == a ? ($(".img-bg-quote-rotator .slide.active").addClass("before"), $(".img-bg-quote-rotator .slide:nth-of-type(1)").removeClass("hide").removeClass("after"), $(".img-bg-quote-rotator .slide.active").removeClass("active"), $(".img-bg-quote-rotator .slide:nth-of-type(1)").addClass("active")) : (t++, $(".img-bg-quote-rotator .slide.active").addClass("before"), $(".img-bg-quote-rotator .slide:nth-of-type(" + t + ")").removeClass("hide").removeClass("after"), $(".img-bg-quote-rotator .slide.active").removeClass("active"), $(".img-bg-quote-rotator .slide:nth-of-type(" + t + ")").addClass("active")), $("html").animate({
                        opacity: 1
                    }, 500, function() {
                        $(".img-bg-quote-rotator .slide.before").addClass("hide"), o = !1
                    })
                })
            }
        })), $(".video-gallery").length && ($(".video-gallery .video a").click(function(e) {
            e.preventDefault();
            var t = $(this);
            if (!$(this).find(".hoverVideo.opened").length) {
                var a = $(window).width();
                $("html, body").css({
                    overflow: "hidden"
                }), $(".headerBar").addClass("fixZ"), $(".fixZ").css("z-index", 50), $(".hoverVideo").fadeIn(500, function() {
                    var e = t.attr("data-vid-url");
                    if ($(this).addClass("opened"), e += "?autoplay=1", a <= 900 && a >= 528) var i = 512,
                        o = 288;
                    else if (a > 900 && a <= 1200) var i = 896,
                        o = 504;
                    else if (a > 1200 && a <= 1600) var i = 1152,
                        o = 648;
                    else if (a >= 1600) var i = 1536,
                        o = 864;
                    $(this).find(".vid-wrapper").append('<iframe src="' + e + '" width="' + i + '" height="' + o + '" frameborder="0" title="0" byline="0" badge="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
                })
            }
        }), $(".closeButton").click(function() {
            $("html, body").css({
                overflow: "visible"
            }), $(".headerBar").removeClass("fixZ"), $(".fixZ").css("z-index", 900), $(this).parent(".hoverVideo").find("iframe").remove(), $(this).parent(".hoverVideo").fadeOut(500, function() {
                $(".hoverVideo.opened").removeClass("opened")
            })
        }), $(window).width() <= 1024 && $(".video-gallery .video").click(function(e) {
            e.preventDefault(), $(this).hasClass("on") ? $(".video-gallery .video.on").removeClass("on") : ($(".video-gallery .video.on").removeClass("on"), $(this).addClass("on"))
        })), $(".newsletter-form").length && ($(".newsletter-form").offset().top > 1.75 * $(window).height() && $(".newsletter-form").offset().top + $(".newsletter-form").height() < $(".pageFooter").offset().top ? $(".newsletter-form").addClass("active") : ($(".newsletter-form").offset().top, $(".newsletter-form").height(), $(".pageFooter").offset().top, $(".newsletter-form").removeClass("active")), $(window).on("scroll", function(e) {
            $(".newsletter-form").offset().top >= 1.75 * $(window).height() && $(".newsletter-form").offset().top + $(".newsletter-form").height() < $(".pageFooter").offset().top ? $(".newsletter-form").addClass("active") : ($(".newsletter-form").offset().top, $(".newsletter-form").height(), $(".pageFooter").offset().top, $(".newsletter-form").removeClass("active"))
        }), $(window).width() < 1024 && $(".newsletter-form").css("display", "none")), $(".page-the-sevens").length) {
        !!document.documentMode && $(".overlay-s,.overlay-v,.overlay-e").css("opacity", .35), $(window).width() > 805 ? ($(".overlay-v").removeClass("hidden"), $(".overlay-s").removeClass("hidden"), $(".overlay-e").removeClass("hidden"), $(".overlay-s").addClass("active"), $(".overlay-e").addClass("active"), setTimeout(function() {
            $(".overlay-v").addClass("active"), setInterval(function() {
                $(".overlay-v.active").length ? $(".overlay-v").removeClass("active") : $(".overlay-v").addClass("active")
            }, 3e4)
        }, 2e3), setInterval(function() {
            $(".overlay-s.active").length ? ($(".overlay-s").removeClass("active"), $(".overlay-e").removeClass("active")) : ($(".overlay-s").addClass("active"), $(".overlay-e").addClass("active"))
        }, 3e4)) : ($(".overlay-v").removeClass("hidden"), $(".overlay-s").removeClass("hidden"), $(".overlay-e").removeClass("hidden"))
    }
    if ($(".page-home .clients li.active").length) {
        var m = $(".page-home .clients li:last-of-type").attr("data-grp");
        setInterval(function() {
            var e = $(".page-home .clients li.active").attr("data-grp");
            $(".page-home .clients li.active").addClass("out").removeClass("active"), setTimeout(function() {
                e == m ? e = 1 : e++, $('.page-home .clients li.pre[data-grp="' + e + '"]').addClass("active").removeClass("pre")
            }, 250), setTimeout(function() {
                $(".page-home .clients li.out").addClass("pre").removeClass("active").removeClass("out")
            }, 1e3)
        }, 6e3)
    }
    if ($(".page-give-big").length && ($(".voted-warning").length && $(".voting-off").length ? $(".arrowContainer .arrow i").click() : $(".voted-warning").length && $(".voting-empty").length && $(".arrowContainer .arrow i").click(), $(".vote-reveal .fa-heart").click(function(e) {
            $(this).hasClass("active") ? ($(this).removeClass("active"), $(this).parent().removeClass("active")) : ($(".vote-reveal").removeClass("active"), $(".vote-reveal .fa-heart").removeClass("active"), $(this).addClass("active"), $(this).parent().addClass("active"))
        })), $(".page-agency").length) {
        var o = !1;
        $(".controls .next").click(function(e) {
            if (0 == o) {
                o = !0;
                var t = $(".video.active").attr("data-index");
                $(".video.out.right").addClass("active").removeClass("right").removeClass("out"), $(".video.out.left").addClass("right").removeClass("left"), $('.video.active[data-index="' + t + '"]').removeClass("active").addClass("out").addClass("left"), setTimeout(function() {
                    o = !1
                }, 500)
            }
        }), $(".controls .prev").click(function(e) {
            if (0 == o) {
                o = !0;
                var t = $(".video.active").attr("data-index");
                $(".video.out.left").addClass("active").removeClass("left").removeClass("out"), $(".video.out.right").addClass("left").removeClass("right"), $('.video.active[data-index="' + t + '"]').removeClass("active").addClass("out").addClass("right"), setTimeout(function() {
                    o = !1
                }, 500)
            }
        }), $(".video").click(function(e) {
            if ($(window).width() > 1024)
                if ($(this).hasClass("out")) $(this).hasClass("right") ? $(".controls .next").click() : $(this).hasClass("left") && $(".controls .prev").click();
                else {
                    var t = $(window).width();
                    $("html, body").css({
                        overflow: "hidden"
                    }), $(".headerBar").addClass("fixZ"), $(".fixZ").css("z-index", 50);
                    var a = $(this).attr("data-videoUrl");
                    $(".hoverVideo").fadeIn(500, function() {
                        if (a += "?autoplay=1", t <= 900 && t >= 528) var e = 512,
                            i = 288;
                        else if (t > 900 && t <= 1200) var e = 896,
                            i = 504;
                        else if (t > 1200 && t <= 1600) var e = 1152,
                            i = 648;
                        else if (t >= 1600) var e = 1536,
                            i = 864;
                        $(".hoverVideo").append('<iframe src="' + a + '" width="' + e + '" height="' + i + '" frameborder="0" title="0" byline="0" badge="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
                    })
                }
            else {
                var t = $(window).width();
                $("html, body").css({
                    overflow: "hidden"
                }), $(".headerBar").addClass("fixZ"), $(".fixZ").css("z-index", 50);
                var a = $(this).attr("data-videoUrl");
                $(".hoverVideo").fadeIn(500, function() {
                    if (a += "?autoplay=1", t <= 900 && t >= 528) var e = 512,
                        i = 288;
                    else if (t > 900 && t <= 1200) var e = 896,
                        i = 504;
                    else if (t > 1200 && t <= 1600) var e = 1152,
                        i = 648;
                    else if (t >= 1600) var e = 1536,
                        i = 864;
                    $(".hoverVideo").append('<iframe src="' + a + '" width="' + e + '" height="' + i + '" frameborder="0" title="0" byline="0" badge="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
                })
            }
        })
    }
    $(".page-work").length && $(window).width() > 1024 && ($("html, body").mousewheel(function(e, t) {
        if (this.scrollLeft -= 10 * t, e.preventDefault(), $(window).scrollLeft() >= $(window).width() / 3 * $(".tab.active").length) {
            var a = $(".tab.active").length + 1;
            $('.tab[data-index="' + a + '"]').addClass("active"), $(".tab.active").length > 1 && $(".controls .control.off").length && $(".controls .prev.off").removeClass("off"), $(window).scrollLeft() >= $(window).width() / 3 * ($(".tab").length - 3) && $(".controls .next").addClass("off")
        } else if ($(window).scrollLeft() + $(window).width() / 3 < $(window).width() / 3 * $(".tab.active").length) {
            var a = $(".tab.active").length;
            $('.tab[data-index="' + a + '"]').removeClass("active"), 1 == $(".tab.active").length && 0 == $(".controls .control.off").length && $(".controls .prev").addClass("off"), $(".tab").last().prev().prev().hasClass("active") || $(".controls .next").removeClass("off")
        }
    }), $(".control").click(function(e) {
        if (e.preventDefault(), !$(this).hasClass("off"))
            if ($(this).hasClass("prev")) {
                var t = parseInt($(".tab.active").last().attr("data-index"));
                if ($('.tab[data-index="' + (t - 3) + '"]').length) $(".tab").each(function(e, a) {
                    $(this).attr("data-index") > t - 3 && $(this).removeClass("active")
                });
                else if ($('.tab[data-index="' + (t - 2) + '"]').length) $(".tab").each(function(e, a) {
                    $(this).attr("data-index") > t - 2 && $(this).removeClass("active")
                });
                else {
                    if (!$('.tab[data-index="' + (t - 1) + '"]').length) return;
                    $(".tab").each(function(e, a) {
                        $(this).attr("data-index") > t - 1 && $(this).removeClass("active")
                    })
                }
                $("html, body").animate({
                    scrollLeft: $(".tab.active").last().offset().left
                }, 500), 1 == $(".tab.active").length && $(".controls .prev").addClass("off"), $(".tab").last().prev().prev().hasClass("active") || $(".controls .next").removeClass("off")
            } else if ($(this).hasClass("next")) {
            var t = parseInt($(".tab.active").last().attr("data-index"));
            if ($('.tab[data-index="' + (t + 3) + '"]').length) $(".tab").last().prev().prev().attr("data-index") == $('.tab[data-index="' + (t + 2) + '"]').attr("data-index") ? $(".tab").each(function(e, a) {
                $(this).attr("data-index") < t + 3 && $(this).addClass("active")
            }) : $(".tab").last().prev().prev().attr("data-index") == $('.tab[data-index="' + (t + 1) + '"]').attr("data-index") ? $(".tab").each(function(e, a) {
                $(this).attr("data-index") < t + 2 && $(this).addClass("active")
            }) : $(".tab").each(function(e, a) {
                $(this).attr("data-index") < t + 4 && $(this).addClass("active")
            });
            else if ($('.tab[data-index="' + (t + 2) + '"]').length) $(".tab").each(function(e, a) {
                $(this).attr("data-index") < t + 3 && $(this).addClass("active")
            });
            else {
                if (!$('.tab[data-index="' + (t + 1) + '"]').length) return;
                $(".tab").each(function(e, a) {
                    $(this).attr("data-index") < t + 2 && $(this).addClass("active")
                })
            }
            $("html, body").animate({
                scrollLeft: $(".tab.active").last().offset().left + 1
            }, 500), $(".tab.active").length > 1 && $(".controls .prev.off").removeClass("off"), $(".tab").last().prev().prev().hasClass("active") && $(".controls .next").addClass("off")
        }
    }))
}), $(window).resize(function() {
    fixedWrap(), askedooCaseResize(), $(".heroSectionStream").length && ($(window).width() <= 1400 && $(".heroSectionStream iframe").css("width", $(window).width() + 1200), $(window).width() <= 1700 && $(window).width() > 1400 && $(".heroSectionStream iframe").css("width", $(window).width() + 900), $(window).width() > 1700 && $(".heroSectionStream iframe").css("width", $(window).width() + 600)), $(window).width() < 1024 ? $(".newsletter-form").css("display", "none") : $(".newsletter-form").css("display", "block"), homeSegmentMobile(), capBlocksShuffle(), rotatorSliderLoad(), $(window).width() > 1024 ? ($(".teamSlider").attr("translate", 0), $(".teamSlider").css("transform", "translateX(0)"), $(".teamSection").css("max-width", $(window).width() / 4 + "px"), $(".teamSection").css("flex", "0 0 " + $(window).width() / 4 + "px"), $(".teamSlider").css("width", $(".teamSection").length * $(".teamSection").width() + 250 + "px"), $(".teamSection").removeClass("active"), $(".nextTeam").removeClass("arrow-off"), $(".prevTeam").addClass("arrow-off"), $(".teamSection").each(function(e, t) {
        e < 4 && $(this).addClass("active")
    })) : ($(".teamSlider").attr("translate", 0), $(".teamSlider").css("transform", "translateX(0)"), $(".teamSection").css("width", "100%"), $(".teamSection").css("max-width", "100%"), $(".teamSection").css("flex", "0 0 100%"), $(".teamSlider").css("width", "100%"), $(".teamSection").removeClass("active"), $(".nextTeam").removeClass("arrow-off"), $(".prevTeam").addClass("arrow-off"), $(".teamSection").each(function(e, t) {
        e < 4 && $(this).addClass("active")
    })), askedooCase()
});
var iScrollPos = 0,
    slideOpen = 1,
    animateOn = !1;
$(window).on("scroll", function(e) {
    if (menuSm(), $(".page-askedoo").length) {
        var t = $(window).height(),
            a = $(".page-askedoo section.social .collage").offset().top;
        $(window).scrollTop() >= a - t / 1.45 && 0 == $(".page-askedoo section.social .collage img.active").length && $(".page-askedoo section.social .collage img").addClass("active");
        var i = $(".page-askedoo .creative-strategy .img-wrap").offset().top;
        $(window).scrollTop() >= i - t / 1.5 && 0 == $(".page-askedoo .creative-strategy .img-wrap img.active").length && $(".page-askedoo .creative-strategy .img-wrap img").addClass("active");
        var o = $(".page-askedoo .split.lg svg").offset().top;
        $(window).scrollTop() >= o - t / 2 && 0 == $(".page-askedoo .split.lg svg.active-lock").length && ($(".page-askedoo .split.lg svg").addClass("active").addClass("active-lock"), setTimeout(function() {
            $(".page-askedoo .split.lg svg").removeClass("active")
        }, 450))
    }
    if ($(".page-arsenal-venture-partners").length)
        if ($(window).width() > 1024) {
            if ($(".page-arsenal-venture-partners").length) {
                var t = $(window).height();
                if ($(".conceptLogos").length) {
                    var o = $(".conceptLogos .logos").offset().top;
                    $(window).scrollTop() >= o - t / 1.25 && $(".conceptLogos .logos .hide").length > 0 && ($(".conceptLogos h3").removeClass("hide"), $(".conceptLogos .logos img").each(function() {
                        var e = $(this);
                        $("html").animate({
                            opacity: 1
                        }, 125, function() {
                            e.removeClass("hide")
                        })
                    }))
                }
                if ($(".brandAdjectives").length) {
                    var r = $(".brandAdjectives").offset().top;
                    $(window).scrollTop() >= r - t / 1.25 && $(".brandAdjectives-hide").length > 0 && ($(".brandAdjectives-hide").removeClass("brandAdjectives-hide"), $(".brandAdjectives h3").removeClass("hide"), $(".brandAdjectives .adjectives").removeClass("adjectives-hide"))
                }
                if ($(".introDuction .rightIntro").length) {
                    $(".rightIntro-hide").length && $(".introDuction .rightIntro li").addClass("hide");
                    var n = $(".introDuction").offset().top;
                    $(window).scrollTop() >= n - t / 1.25 && $(".introDuction .rightIntro-hide").length > 0 && ($(".introDuction .rightIntro").removeClass("rightIntro-hide"), $("html").animate({
                        opacity: 1
                    }, 125, function() {
                        $(".introDuction .rightIntro li").each(function() {
                            var e = $(this);
                            $("html").animate({
                                opacity: 1
                            }, 125, function() {
                                e.removeClass("hide")
                            })
                        })
                    }))
                }
                if ($(".beforeAfter").length) {
                    var s = $(".beforeAfter").offset().top;
                    $(window).scrollTop() >= s - t / 1.25 && $(".beforeAfter .before img.hide").length > 0 && $(".beforeAfter .before img.hide").animate({
                        outline: 0
                    }, 1, function() {
                        $(this).removeClass("hide"), $(".beforeAfter .before p.hide").animate({
                            outline: 0
                        }, 500, function() {
                            $(this).removeClass("hide"), $(".beforeAfter .after img.hide").animate({
                                outline: 0
                            }, 250, function() {
                                $(this).removeClass("hide"), $(".beforeAfter .after p.hide").animate({
                                    outline: 0
                                }, 500, function() {
                                    $(this).removeClass("hide")
                                })
                            })
                        })
                    })
                }
                if ($(".typeColorWrap").length) {
                    var s = $(".typeColorWrap").offset().top;
                    $(window).scrollTop() >= s - t / 1.25 && $(".typeColorWrap.hide").length > 0 && ($(".quote-hide").removeClass("quote-hide"), $(".typeColorWrap.hide").removeClass("hide"))
                }
                if ($(".wireframes").length) {
                    var l = $(".wireframes .wireframeWrap").offset().top;
                    $(window).scrollTop() >= l - t / 1.25 && $(".wireframes .wireframeWrap img.hide").length > 0 && ($(".wireframes .wireframeWrap img.hide").removeClass("hide"), $(".wireframes h3.hide").removeClass("hide"))
                }
                if ($(".results").length) {
                    var d = $(".results .contentWrap").offset().top;
                    $(window).scrollTop() >= d - t / 1.25 && $(".results .contentWrap-hide").length > 0 && $(".results .contentWrap").removeClass("contentWrap-hide");
                    var c = $(".results .contentWrap h3:nth-of-type(2)").offset().top;
                    $(window).scrollTop() >= c - t / 1.25 && $(".results .contentWrap .end-h3-hide").length > 0 && ($(".results .contentWrap .end-h3-hide").removeClass("end-h3-hide"), $(".results .contentWrap .end-a-hide").removeClass("end-a-hide"))
                }
                if ($(".topWrap").length) {
                    var f = $(".topWrap").offset().top;
                    $(window).scrollTop() >= f - t / 1.25 && $(".topWrap-hide").length > 0 && ($(".topWrap-hide").removeClass("topWrap-hide"), $(".topWrap h2").removeClass("hide"), $(".topWrap p").removeClass("hide"))
                }
                if ($(".imageSplitOne").length) {
                    var h = $(".imageSplitContent").offset().top;
                    $(window).scrollTop() >= h - t / 1.25 && $(".imageSplitOne-hide").length > 0 && ($(".imageSplitOne-hide").removeClass("imageSplitOne-hide"), $(".imageSplitContent-hide").removeClass("imageSplitContent-hide"))
                }
                if ($(".bottomContent").length) {
                    var p = $(".bottomContent").offset().top;
                    $(window).scrollTop() >= p - t / 1.25 && $(".bottomContent-hide").length > 0 && ($(".bottomContent").removeClass("bottomContent-hide"), $(".bottomContent h3").removeClass("hide"), $(".bottomContent p").removeClass("hide"));
                    var m = $(".bottomContent .bHeadline").offset().top;
                    $(window).scrollTop() >= m - t / 1.25 && $(".bottomContent .bHeadline.hide").length > 0 && $(".bottomContent .bHeadline").removeClass("hide")
                }
                if ($(".imageSplitTwo").length) {
                    var u = $(".roHead").offset().top;
                    $(window).scrollTop() >= u - t / 1.25 && $(".roHead-hide").length > 0 && ($(".roHead").removeClass("roHead-hide"), $(".imageSplitContent-hide").removeClass("imageSplitContent-hide"));
                    var v = $(".imageRotator").offset().top;
                    $(window).scrollTop() >= v - t / 1.25 && $(".imageRotator-hide").length > 0 && $(".imageRotator-hide").removeClass("imageRotator-hide");
                    var g = $(".imageSplitTwo .quote").offset().top;
                    $(window).scrollTop() >= g - t / 1.25 && $(".imageSplitTwo .quote-two-hide").length > 0 && $(".imageSplitTwo .quote").removeClass("quote-two-hide")
                }
                if ($(".financialLeaders").length) {
                    var w = $(".financialLeaders").offset().top;
                    $(window).scrollTop() >= w - t / 1.25 && $(".financialLeaders-hide").length > 0 && ($(".financialLeaders").removeClass("financialLeaders-hide"), $(".bHeadline").removeClass("hide"))
                }
                if ($(".mobileWrap").length) {
                    var C = $(".mobileWrap").offset().top,
                        b = $(window).scrollTop();
                    $(window).scrollTop() >= C - t / 1.5 && (trigCount % 2 == 0 ? 0 == oldCurrentPlace ? (currentTransform = 12, oldCurrentPlace = b, $(".mobileWrap .ipad").css({
                        transform: "translateX(-" + currentTransform + "%)"
                    }), $(".mobileWrap .iphone").css({
                        transform: "translateX(" + currentTransform + "%)"
                    })) : oldCurrentPlace < b ? currentTransform <= 0 || (currentTransform -= .2, oldCurrentPlace = b, $(".mobileWrap .ipad").css("transform", "translateX(-" + currentTransform + "%)"), $(".mobileWrap .iphone").css("transform", "translateX(" + currentTransform + "%)")) : b < oldCurrentPlace && (currentTransform >= 12 || (currentTransform += .2, oldCurrentPlace = b, $(".mobileWrap .ipad").css("transform", "translateX(-" + currentTransform + "%)"), $(".mobileWrap .iphone").css("transform", "translateX(" + currentTransform + "%)"))) : trigCount++)
                }
            }
        } else 0 == avpMobile && ($(".conceptLogos h3").removeClass("hide"), $(".conceptLogos .logos img").each(function() {
            var e = $(this);
            $("html").animate({
                opacity: 1
            }, 125, function() {
                e.removeClass("hide")
            })
        }), $(".brandAdjectives-hide").removeClass("brandAdjectives-hide"), $(".brandAdjectives h3").removeClass("hide"), $(".brandAdjectives .adjectives").removeClass("adjectives-hide"), $(".introDuction .rightIntro li").addClass("hide"), $(".introDuction .rightIntro").removeClass("rightIntro-hide"), $(".introDuction .rightIntro li").each(function() {
            var e = $(this);
            $("html").animate({
                opacity: 1
            }, 125, function() {
                e.removeClass("hide")
            })
        }), $(".beforeAfter .before img.hide").animate({
            outline: 0
        }, 1, function() {
            $(this).removeClass("hide"), $(".beforeAfter .before p.hide").animate({
                outline: 0
            }, 500, function() {
                $(this).removeClass("hide"), $(".beforeAfter .after img.hide").animate({
                    outline: 0
                }, 250, function() {
                    $(this).removeClass("hide"), $(".beforeAfter .after p.hide").animate({
                        outline: 0
                    }, 500, function() {
                        $(this).removeClass("hide")
                    })
                })
            })
        }), $(".quote-hide").removeClass("quote-hide"), $(".typeColorWrap.hide").removeClass("hide"), $(".wireframes .wireframeWrap img.hide").removeClass("hide"), $(".wireframes h3.hide").removeClass("hide"), $(".results .contentWrap").removeClass("contentWrap-hide"), $(".results .contentWrap .end-h3-hide").removeClass("end-h3-hide"), $(".results .contentWrap .end-a-hide").removeClass("end-a-hide"), $(".topWrap-hide").removeClass("topWrap-hide"), $(".topWrap h2").removeClass("hide"), $(".topWrap p").removeClass("hide"), $(".imageSplitOne-hide").removeClass("imageSplitOne-hide"), $(".imageSplitContent-hide").removeClass("imageSplitContent-hide"), $(".bottomContent").removeClass("bottomContent-hide"), $(".bottomContent h3").removeClass("hide"), $(".bottomContent p").removeClass("hide"), $(".bottomContent .bHeadline").removeClass("hide"), $(".roHead").removeClass("roHead-hide"), $(".imageSplitContent-hide").removeClass("imageSplitContent-hide"), $(".imageRotator-hide").removeClass("imageRotator-hide"), $(".imageSplitTwo .quote").removeClass("quote-two-hide"), $(".financialLeaders").removeClass("financialLeaders-hide"), $(".bHeadline").removeClass("hide"), $(".mobileWrap .ipad").css({
            transform: "translateX(0%)"
        }), $(".mobileWrap .iphone").css({
            transform: "translateX(0%)"
        }), avpMobile = 1);
    if ($(".page-ability-wood-flooring").length)
        if ($(window).width() > 1024) {
            var t = $(window).height();
            if ($(".introduction").length) {
                var y = $(".introduction .intro-top").offset().top;
                $(window).scrollTop() >= y - t / 1.25 && $(".introduction .intro-top.hide").length > 0 && $(".introduction .intro-top").removeClass("hide")
            }
            if ($(".statisticSplit").length) {
                var S = $(".statisticSplit ul").offset().top;
                $(window).scrollTop() >= S - t / 1.25 && $(".statisticSplit.hide").length > 0 && ($(".statisticSplit").removeClass("hide"), $("html").animate({
                    opacity: 1
                }, 125, function() {
                    $(".statisticSplit li:nth-of-type(1)").removeClass("hide"), $("html").animate({
                        opacity: 1
                    }, 125, function() {
                        $(".statisticSplit li:nth-of-type(2)").removeClass("hide"), $("html").animate({
                            opacity: 1
                        }, 125, function() {
                            $(".statisticSplit li:nth-of-type(3)").removeClass("hide")
                        })
                    })
                }))
            }
            if ($(".brandSplit .rightSplit").length) {
                var k = $(".brandSplit .leftSplit").offset().top;
                $(window).scrollTop() >= k - t / 1.25 && $(".brandSplit .rightSplit.hide").length > 0 && ($(".brandSplit .rightSplit").removeClass("hide"), $("body").animate({
                    opacity: 1
                }, 125, function() {
                    $(".brandSplit .rightSplit li").each(function() {
                        var e = $(this);
                        $("body").animate({
                            opacity: 1
                        }, 125, function() {
                            e.removeClass("hide")
                        })
                    })
                }))
            }
            if ($(".logoSplit").length) {
                var s = $(".beforeLogo").offset().top;
                $(window).scrollTop() >= s - t / 1.25 && $(".logoSplit .beforeLogo").length > 0 && $(".logoSplit .beforeLogo img").animate({
                    outline: 0
                }, 1, function() {
                    $(this).removeClass("hide"), $(".logoSplit .beforeLogo p").animate({
                        outline: 0
                    }, 500, function() {
                        $(this).removeClass("hide"), $(".logoSplit .afterLogo img").animate({
                            outline: 0
                        }, 250, function() {
                            $(this).removeClass("hide"), $(".logoSplit .afterLogo p").animate({
                                outline: 0
                            }, 500, function() {
                                $(this).removeClass("hide")
                            })
                        })
                    })
                })
            }
            if ($(".logoComp").length) {
                var C = $(".logoComp").offset().top,
                    b = $(window).scrollTop();
                $(window).scrollTop() >= C - t / 1.5 && $(window).scrollTop() <= $(".typography").offset().top - t / 1.5 && (trigCount % 6 == 0 ? (trigCount++, 0 == oldCurrentPlace ? (oldCurrentPlace = b, $(".logoComp h3").removeClass("hide"), $(".logoComp .hugeLogo").removeClass("hide"), currentTransform = 0) : $(window).scrollTop() >= $(".compBlurb:nth-of-type(1)").offset().top - t / 1.5 && $(window).scrollTop() <= $(".compBlurb:nth-of-type(3)").offset().top - t / 1.25 ? ($(".compBlurb:nth-of-type(1)").removeClass("hide"), $(".compBlurb:nth-of-type(2)").removeClass("hide"), $(".compBlurb:nth-of-type(3)").addClass("hide"), $(".compBlurb:nth-of-type(4)").addClass("hide")) : $(window).scrollTop() >= $(".compBlurb:nth-of-type(3)").offset().top - t / 1.25 && $(window).scrollTop() <= $(".quoteSplit").offset().top - t / 1.5 && ($(".compBlurb:nth-of-type(1)").addClass("hide"), $(".compBlurb:nth-of-type(2)").addClass("hide"), $(".compBlurb:nth-of-type(3)").removeClass("hide"), $(".compBlurb:nth-of-type(4)").removeClass("hide"))) : trigCount++)
            }
            if ($(".quoteSplit-two").length) {
                var x = $(".quoteSplit-two").offset().top;
                $(window).scrollTop() >= x - t / 1.25 && $(".quoteSplit-two.hide").length > 0 && $(".quoteSplit-two").removeClass("hide")
            }
            if ($(".results").length) {
                var T = $(".result").offset().top;
                if ($(window).width() > 1110 ? $(window).scrollTop() >= T - t / 1.25 && $(".contentWrap.hide").length > 0 && ($(".contentWrap").removeClass("hide"), $(".result ul li:nth-of-type(13)").animate({
                        outline: 0
                    }, 50, function() {
                        $(".result:nth-of-type(3)").removeClass("hide"), $(".result:nth-of-type(3) img:nth-of-type(1)").removeClass("hide"), $(this).removeClass("hide"), $(".result ul li:nth-of-type(12)").animate({
                            outline: 0
                        }, 50, function() {
                            $(this).removeClass("hide"), $(".result ul li:nth-of-type(11)").animate({
                                outline: 0
                            }, 50, function() {
                                $(this).removeClass("hide"), $(".result ul li:nth-of-type(10)").animate({
                                    outline: 0
                                }, 50, function() {
                                    $(this).removeClass("hide"), $(".result ul li:nth-of-type(9)").animate({
                                        outline: 0
                                    }, 50, function() {
                                        $(this).removeClass("hide"), $(".result ul li:nth-of-type(8)").animate({
                                            outline: 0
                                        }, 50, function() {
                                            $(this).removeClass("hide"), $(".result ul li:nth-of-type(7)").animate({
                                                outline: 0
                                            }, 50, function() {
                                                $(this).removeClass("hide"), $(".result ul li:nth-of-type(6)").animate({
                                                    outline: 0
                                                }, 50, function() {
                                                    $(this).removeClass("hide"), $(".result ul li:nth-of-type(5)").animate({
                                                        outline: 0
                                                    }, 50, function() {
                                                        $(this).removeClass("hide"), $(".result ul li:nth-of-type(4)").animate({
                                                            outline: 0
                                                        }, 50, function() {
                                                            $(this).removeClass("hide"), $(".result ul li:nth-of-type(3)").animate({
                                                                outline: 0
                                                            }, 50, function() {
                                                                $(this).removeClass("hide"), $(".result ul li:nth-of-type(2)").animate({
                                                                    outline: 0
                                                                }, 50, function() {
                                                                    $(this).removeClass("hide"), $(".result ul li:nth-of-type(1)").animate({
                                                                        outline: 0
                                                                    }, 50, function() {
                                                                        $(this).removeClass("hide"), $(".imageWrap div.hide").removeClass("hide"), $(".result .title").removeClass("hide"), $(".result ul:nth-of-type(1)").animate({
                                                                            opacity: 1
                                                                        }, 50, function() {
                                                                            $(".result ul:nth-of-type(1)").animate({
                                                                                opacity: 1
                                                                            }, 25, function() {
                                                                                $(".result:nth-of-type(1)").animate({
                                                                                    opacity: 1
                                                                                }, 1, function() {
                                                                                    $(".result:nth-of-type(3) img:nth-of-type(2)").removeClass("hide"), $(".result:nth-of-type(3) p.hide").removeClass("hide")
                                                                                })
                                                                            })
                                                                        })
                                                                    })
                                                                })
                                                            })
                                                        })
                                                    })
                                                })
                                            })
                                        })
                                    })
                                })
                            })
                        })
                    })) : ($(".contentWrap").removeClass("hide"), $(".result").removeClass("hide"), $(".result ul li").removeClass("hide"), $(".imageWrap div.hide").removeClass("hide"), $(".result .title").removeClass("hide"), $(".result:nth-of-type(3) img:nth-of-type(1)").removeClass("hide"), $(".result:nth-of-type(3) img:nth-of-type(2)").removeClass("hide"), $(".result:nth-of-type(3) p.hide").removeClass("hide")), $(".bHeadSplit-results").length) {
                    var A = $(".bHeadSplit-results h2").offset().top;
                    $(window).scrollTop() >= A - t / 1.25 && $(".bHeadSplit-results.hide").length > 0 && ($(".bHeadSplit-results").removeClass("hide"), $(".bHeadSplit-results h2").removeClass("hide"))
                }
                if ($(".imageSplit-two").length) {
                    var W = $(".imageSplit-two .contentWrap").offset().top;
                    $(window).scrollTop() >= W - t / 1.35 && $(".imageSplit-two.hide").length > 0 && $(".imageSplit-two").removeClass("hide")
                }
                if ($(".conclusion .quoteSplit").length) {
                    var E = $(".conclusion .quoteSplit").offset().top;
                    $(window).scrollTop() >= E - t / 1.25 && $(".conclusion .quoteSplit.hide").length > 0 && $(".conclusion .quoteSplit").removeClass("hide");
                    var I = $(".conclusion .bHeadSplit").offset().top;
                    $(window).scrollTop() >= I - t / 1.25 && $(".conclusion .bHeadSplit.hide").length > 0 && $(".conclusion .bHeadSplit").removeClass("hide")
                }
                if ($(".conclusion .contentSplit").length) {
                    var L = $(".conclusion .contentSplit").offset().top;
                    $(window).scrollTop() >= L - t / 1.25 && $(".conclusion .contentSplit.hide").length > 0 && $(".conclusion .contentSplit").removeClass("hide")
                }
                if ($(".conclusion .ctaheadSplit").length) {
                    var D = $(".conclusion .ctaheadSplit").offset().top;
                    $(window).scrollTop() >= D - t / 1.25 && $(".conclusion .ctaheadSplit.hide").length > 0 && ($(".conclusion .ctaheadSplit").removeClass("hide"), $(".conclusion .ctaheadSplit h3").removeClass("hide"), $(".conclusion .ctaheadSplit .ctaWrap").removeClass("hide"))
                }
                if ($(".imageSplit").length) {
                    var z = $(".imageSplit").offset().top;
                    $(window).scrollTop() >= z - t / 1.25 && $(".imageSplit .overlay-reveal.hide").length > 0 && $(".imageSplit .overlay-reveal").removeClass("hide")
                }
            }
        } else 0 == avpMobile && ($(".hide").removeClass("hide"), $(".contentWrap").removeClass("hide"), $(".result").removeClass("hide"), $(".result ul li").removeClass("hide"), $(".imageWrap div.hide").removeClass("hide"), $(".result .title").removeClass("hide"), $(".result:nth-of-type(3) img:nth-of-type(1)").removeClass("hide"), $(".result:nth-of-type(3) img:nth-of-type(2)").removeClass("hide"), $(".result:nth-of-type(3) p.hide").removeClass("hide"), avpMobile++);
    if ($(".cs-featured").length) {
        var t = $(window).height(),
            B = $(".cs-featured .cs:nth-of-type(1)").offset().top,
            M = $(".cs-featured .cs:nth-of-type(2)").offset().top,
            H = $(".cs-featured .cs:nth-of-type(3)").offset().top;
        $(window).scrollTop() + t / 2 >= H ? $(".cs-featured").removeClass("white").removeClass("watermelon").addClass("blackbean") : $(window).scrollTop() + t / 2 >= M ? $(".cs-featured").removeClass("white").removeClass("blackbean").addClass("watermelon") : ($(window).scrollTop(), $(".cs-featured").removeClass("blackbean").removeClass("watermelon").addClass("white"))
    }
    if ($(".page-gonoodle").length)
        if ($(window).width() > 1024) {
            var t = $(window).height(),
                q = $(".sizzle-reel").offset().top;
            $(window).scrollTop() >= q - t / 1.25 && $(".sizzle-reel .out").length > 0 && $(".sizzle-reel .out").removeClass("out")
        } else $(".sizzle-reel .out").removeClass("out")
});