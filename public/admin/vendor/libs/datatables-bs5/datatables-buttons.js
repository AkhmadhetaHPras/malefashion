!(function (t, n) {
    for (var e in n) t[e] = n[e];
})(
    window,
    (function (t) {
        var n = {};
        function e(o) {
            if (n[o]) return n[o].exports;
            var i = (n[o] = { i: o, l: !1, exports: {} });
            return t[o].call(i.exports, i, i.exports, e), (i.l = !0), i.exports;
        }
        return (
            (e.m = t),
            (e.c = n),
            (e.d = function (t, n, o) {
                e.o(t, n) ||
                    Object.defineProperty(t, n, { enumerable: !0, get: o });
            }),
            (e.r = function (t) {
                "undefined" != typeof Symbol &&
                    Symbol.toStringTag &&
                    Object.defineProperty(t, Symbol.toStringTag, {
                        value: "Module",
                    }),
                    Object.defineProperty(t, "__esModule", { value: !0 });
            }),
            (e.t = function (t, n) {
                if ((1 & n && (t = e(t)), 8 & n)) return t;
                if (4 & n && "object" == typeof t && t && t.__esModule)
                    return t;
                var o = Object.create(null);
                if (
                    (e.r(o),
                        Object.defineProperty(o, "default", {
                            enumerable: !0,
                            value: t,
                        }),
                        2 & n && "string" != typeof t)
                )
                    for (var i in t)
                        e.d(
                            o,
                            i,
                            function (n) {
                                return t[n];
                            }.bind(null, i)
                        );
                return o;
            }),
            (e.n = function (t) {
                var n =
                    t && t.__esModule
                        ? function () {
                            return t.default;
                        }
                        : function () {
                            return t;
                        };
                return e.d(n, "a", n), n;
            }),
            (e.o = function (t, n) {
                return Object.prototype.hasOwnProperty.call(t, n);
            }),
            (e.p = ""),
            e((e.s = 231))
        );
    })({
        1: function (t, n) {
            t.exports = window.jQuery;
        },
        2: function (t, n) {
            t.exports = window["$.fn.dataTable"];
        },
        231: function (t, n, e) {
            "use strict";
            e.r(n);
            e(5);
        },
        5: function (t, n, e) {
            var o, i;
            /*! Buttons for DataTables 1.7.1
             * Â©2016-2021 SpryMedia Ltd - datatables.net/license
             */ (o = [e(1), e(2)]),
                void 0 ===
                (i = function (t) {
                    return (function (t, n, e, o) {
                        "use strict";
                        var i = t.fn.dataTable,
                            r = 0,
                            s = 0,
                            a = i.ext.buttons;
                        function u(n, e, o) {
                            t.fn.animate
                                ? n.stop().fadeIn(e, o)
                                : (n.css("display", "block"),
                                    o && o.call(n));
                        }
                        function l(n, e, o) {
                            t.fn.animate
                                ? n.stop().fadeOut(e, o)
                                : (n.css("display", "none"),
                                    o && o.call(n));
                        }
                        var c,
                            d = function (n, e) {
                                if (!(this instanceof d))
                                    return function (t) {
                                        return new d(t, n).container();
                                    };
                                void 0 === e && (e = {}),
                                    !0 === e && (e = {}),
                                    Array.isArray(e) &&
                                    (e = { buttons: e }),
                                    (this.c = t.extend(
                                        !0,
                                        {},
                                        d.defaults,
                                        e
                                    )),
                                    e.buttons &&
                                    (this.c.buttons = e.buttons),
                                    (this.s = {
                                        dt: new i.Api(n),
                                        buttons: [],
                                        listenKeys: "",
                                        namespace: "dtb" + r++,
                                    }),
                                    (this.dom = {
                                        container: t(
                                            "<" +
                                            this.c.dom.container.tag +
                                            "/>"
                                        ).addClass(
                                            this.c.dom.container.className
                                        ),
                                    }),
                                    this._constructor();
                            };
                        t.extend(d.prototype, {
                            action: function (t, n) {
                                var e = this._nodeToButton(t);
                                return n === o
                                    ? e.conf.action
                                    : ((e.conf.action = n), this);
                            },
                            active: function (n, e) {
                                var i = this._nodeToButton(n),
                                    r = this.c.dom.button.active,
                                    s = t(i.node);
                                return e === o
                                    ? s.hasClass(r)
                                    : (s.toggleClass(r, e === o || e),
                                        this);
                            },
                            add: function (t, n) {
                                var e = this.s.buttons;
                                if ("string" == typeof n) {
                                    for (
                                        var i = n.split("-"),
                                        r = this.s,
                                        s = 0,
                                        a = i.length - 1;
                                        s < a;
                                        s++
                                    )
                                        r = r.buttons[1 * i[s]];
                                    (e = r.buttons),
                                        (n = 1 * i[i.length - 1]);
                                }
                                return (
                                    this._expandButton(e, t, r !== o, n),
                                    this._draw(),
                                    this
                                );
                            },
                            container: function () {
                                return this.dom.container;
                            },
                            disable: function (n) {
                                var e = this._nodeToButton(n);
                                return (
                                    t(e.node)
                                        .addClass(
                                            this.c.dom.button.disabled
                                        )
                                        .attr("disabled", !0),
                                    this
                                );
                            },
                            destroy: function () {
                                t("body").off("keyup." + this.s.namespace);
                                var n,
                                    e,
                                    o = this.s.buttons.slice();
                                for (n = 0, e = o.length; n < e; n++)
                                    this.remove(o[n].node);
                                this.dom.container.remove();
                                var i = this.s.dt.settings()[0];
                                for (n = 0, e = i.length; n < e; n++)
                                    if (i.inst === this) {
                                        i.splice(n, 1);
                                        break;
                                    }
                                return this;
                            },
                            enable: function (n, e) {
                                if (!1 === e) return this.disable(n);
                                var o = this._nodeToButton(n);
                                return (
                                    t(o.node)
                                        .removeClass(
                                            this.c.dom.button.disabled
                                        )
                                        .removeAttr("disabled"),
                                    this
                                );
                            },
                            name: function () {
                                return this.c.name;
                            },
                            node: function (n) {
                                if (!n) return this.dom.container;
                                var e = this._nodeToButton(n);
                                return t(e.node);
                            },
                            processing: function (n, e) {
                                var i = this.s.dt,
                                    r = this._nodeToButton(n);
                                return e === o
                                    ? t(r.node).hasClass("processing")
                                    : (t(r.node).toggleClass(
                                        "processing",
                                        e
                                    ),
                                        t(i.table().node()).triggerHandler(
                                            "buttons-processing.dt",
                                            [e, i.button(n), i, t(n), r.conf]
                                        ),
                                        this);
                            },
                            remove: function (n) {
                                var e = this._nodeToButton(n),
                                    o = this._nodeToHost(n),
                                    i = this.s.dt;
                                if (e.buttons.length)
                                    for (
                                        var r = e.buttons.length - 1;
                                        r >= 0;
                                        r--
                                    )
                                        this.remove(e.buttons[r].node);
                                e.conf.destroy &&
                                    e.conf.destroy.call(
                                        i.button(n),
                                        i,
                                        t(n),
                                        e.conf
                                    ),
                                    this._removeKey(e.conf),
                                    t(e.node).remove();
                                var s = t.inArray(e, o);
                                return o.splice(s, 1), this;
                            },
                            text: function (n, e) {
                                var i = this._nodeToButton(n),
                                    r = this.c.dom.collection.buttonLiner,
                                    s =
                                        i.inCollection && r && r.tag
                                            ? r.tag
                                            : this.c.dom.buttonLiner.tag,
                                    a = this.s.dt,
                                    u = t(i.node),
                                    l = function (t) {
                                        return "function" == typeof t
                                            ? t(a, u, i.conf)
                                            : t;
                                    };
                                return e === o
                                    ? l(i.conf.text)
                                    : ((i.conf.text = e),
                                        s
                                            ? u.children(s).html(l(e))
                                            : u.html(l(e)),
                                        this);
                            },
                            _constructor: function () {
                                var n = this,
                                    o = this.s.dt,
                                    i = o.settings()[0],
                                    r = this.c.buttons;
                                i._buttons || (i._buttons = []),
                                    i._buttons.push({
                                        inst: this,
                                        name: this.c.name,
                                    });
                                for (var s = 0, a = r.length; s < a; s++)
                                    this.add(r[s]);
                                o.on("destroy", function (t, e) {
                                    e === i && n.destroy();
                                }),
                                    t("body").on(
                                        "keyup." + this.s.namespace,
                                        function (t) {
                                            if (
                                                !e.activeElement ||
                                                e.activeElement === e.body
                                            ) {
                                                var o = String.fromCharCode(
                                                    t.keyCode
                                                ).toLowerCase();
                                                -1 !==
                                                    n.s.listenKeys
                                                        .toLowerCase()
                                                        .indexOf(o) &&
                                                    n._keypress(o, t);
                                            }
                                        }
                                    );
                            },
                            _addKey: function (n) {
                                n.key &&
                                    (this.s.listenKeys += t.isPlainObject(
                                        n.key
                                    )
                                        ? n.key.key
                                        : n.key);
                            },
                            _draw: function (t, n) {
                                t ||
                                    ((t = this.dom.container),
                                        (n = this.s.buttons)),
                                    t.children().detach();
                                for (var e = 0, o = n.length; e < o; e++)
                                    t.append(n[e].inserter),
                                        t.append(" "),
                                        n[e].buttons &&
                                        n[e].buttons.length &&
                                        this._draw(
                                            n[e].collection,
                                            n[e].buttons
                                        );
                            },
                            _expandButton: function (n, e, i, r) {
                                for (
                                    var s = this.s.dt,
                                    a = Array.isArray(e) ? e : [e],
                                    u = 0,
                                    l = a.length;
                                    u < l;
                                    u++
                                ) {
                                    var c = this._resolveExtends(a[u]);
                                    if (c)
                                        if (Array.isArray(c))
                                            this._expandButton(n, c, i, r);
                                        else {
                                            var d = this._buildButton(c, i);
                                            d &&
                                                (r !== o && null !== r
                                                    ? (n.splice(r, 0, d),
                                                        r++)
                                                    : n.push(d),
                                                    d.conf.buttons &&
                                                    ((d.collection = t(
                                                        "<" +
                                                        this.c.dom
                                                            .collection
                                                            .tag +
                                                        "/>"
                                                    )),
                                                        (d.conf._collection =
                                                            d.collection),
                                                        this._expandButton(
                                                            d.buttons,
                                                            d.conf.buttons,
                                                            !0,
                                                            r
                                                        )),
                                                    c.init &&
                                                    c.init.call(
                                                        s.button(d.node),
                                                        s,
                                                        t(d.node),
                                                        c
                                                    ));
                                        }
                                }
                            },
                            _buildButton: function (n, e) {
                                var i = this.c.dom.button,
                                    r = this.c.dom.buttonLiner,
                                    a = this.c.dom.collection,
                                    u = this.s.dt,
                                    l = function (t) {
                                        return "function" == typeof t
                                            ? t(u, h, n)
                                            : t;
                                    };
                                if (
                                    (e && a.button && (i = a.button),
                                        e &&
                                        a.buttonLiner &&
                                        (r = a.buttonLiner),
                                        n.available && !n.available(u, n))
                                )
                                    return !1;
                                var c = function (n, e, o, i) {
                                    i.action.call(
                                        e.button(o),
                                        n,
                                        e,
                                        o,
                                        i
                                    ),
                                        t(
                                            e.table().node()
                                        ).triggerHandler(
                                            "buttons-action.dt",
                                            [e.button(o), e, o, i]
                                        );
                                },
                                    d = n.tag || i.tag,
                                    f = n.clickBlurs === o || n.clickBlurs,
                                    h = t("<" + d + "/>")
                                        .addClass(i.className)
                                        .attr(
                                            "tabindex",
                                            this.s.dt.settings()[0]
                                                .iTabIndex
                                        )
                                        .attr(
                                            "aria-controls",
                                            this.s.dt.table().node().id
                                        )
                                        .on("click.dtb", function (t) {
                                            t.preventDefault(),
                                                !h.hasClass(i.disabled) &&
                                                n.action &&
                                                c(t, u, h, n),
                                                f && h.trigger("blur");
                                        })
                                        .on("keyup.dtb", function (t) {
                                            13 === t.keyCode &&
                                                !h.hasClass(i.disabled) &&
                                                n.action &&
                                                c(t, u, h, n);
                                        });
                                if (
                                    ("a" === d.toLowerCase() &&
                                        h.attr("href", "#"),
                                        "button" === d.toLowerCase() &&
                                        h.attr("type", "button"),
                                        r.tag)
                                ) {
                                    var p = t("<" + r.tag + "/>")
                                        .html(l(n.text))
                                        .addClass(r.className);
                                    "a" === r.tag.toLowerCase() &&
                                        p.attr("href", "#"),
                                        h.append(p);
                                } else h.html(l(n.text));
                                !1 === n.enabled && h.addClass(i.disabled),
                                    n.className && h.addClass(n.className),
                                    n.titleAttr &&
                                    h.attr("title", l(n.titleAttr)),
                                    n.attr && h.attr(n.attr),
                                    n.namespace ||
                                    (n.namespace = ".dt-button-" + s++);
                                var b,
                                    g = this.c.dom.buttonContainer;
                                return (
                                    (b =
                                        g && g.tag
                                            ? t("<" + g.tag + "/>")
                                                .addClass(g.className)
                                                .append(h)
                                            : h),
                                    this._addKey(n),
                                    this.c.buttonCreated &&
                                    (b = this.c.buttonCreated(n, b)),
                                    {
                                        conf: n,
                                        node: h.get(0),
                                        inserter: b,
                                        buttons: [],
                                        inCollection: e,
                                        collection: null,
                                    }
                                );
                            },
                            _nodeToButton: function (t, n) {
                                n || (n = this.s.buttons);
                                for (var e = 0, o = n.length; e < o; e++) {
                                    if (n[e].node === t) return n[e];
                                    if (n[e].buttons.length) {
                                        var i = this._nodeToButton(
                                            t,
                                            n[e].buttons
                                        );
                                        if (i) return i;
                                    }
                                }
                            },
                            _nodeToHost: function (t, n) {
                                n || (n = this.s.buttons);
                                for (var e = 0, o = n.length; e < o; e++) {
                                    if (n[e].node === t) return n;
                                    if (n[e].buttons.length) {
                                        var i = this._nodeToHost(
                                            t,
                                            n[e].buttons
                                        );
                                        if (i) return i;
                                    }
                                }
                            },
                            _keypress: function (n, e) {
                                if (!e._buttonsHandled) {
                                    var o = function (o, i) {
                                        if (o.key)
                                            if (o.key === n)
                                                (e._buttonsHandled =
                                                    !0),
                                                    t(i).click();
                                            else if (
                                                t.isPlainObject(o.key)
                                            ) {
                                                if (o.key.key !== n)
                                                    return;
                                                if (
                                                    o.key.shiftKey &&
                                                    !e.shiftKey
                                                )
                                                    return;
                                                if (
                                                    o.key.altKey &&
                                                    !e.altKey
                                                )
                                                    return;
                                                if (
                                                    o.key.ctrlKey &&
                                                    !e.ctrlKey
                                                )
                                                    return;
                                                if (
                                                    o.key.metaKey &&
                                                    !e.metaKey
                                                )
                                                    return;
                                                (e._buttonsHandled =
                                                    !0),
                                                    t(i).click();
                                            }
                                    },
                                        i = function (t) {
                                            for (
                                                var n = 0, e = t.length;
                                                n < e;
                                                n++
                                            )
                                                o(t[n].conf, t[n].node),
                                                    t[n].buttons.length &&
                                                    i(t[n].buttons);
                                        };
                                    i(this.s.buttons);
                                }
                            },
                            _removeKey: function (n) {
                                if (n.key) {
                                    var e = t.isPlainObject(n.key)
                                        ? n.key.key
                                        : n.key,
                                        o = this.s.listenKeys.split(""),
                                        i = t.inArray(e, o);
                                    o.splice(i, 1),
                                        (this.s.listenKeys = o.join(""));
                                }
                            },
                            _resolveExtends: function (n) {
                                var e,
                                    i,
                                    r = this.s.dt,
                                    s = function (e) {
                                        for (
                                            var i = 0;
                                            !t.isPlainObject(e) &&
                                            !Array.isArray(e);

                                        ) {
                                            if (e === o) return;
                                            if ("function" == typeof e) {
                                                if (!(e = e(r, n)))
                                                    return !1;
                                            } else if (
                                                "string" == typeof e
                                            ) {
                                                if (!a[e])
                                                    throw (
                                                        "Unknown button type: " +
                                                        e
                                                    );
                                                e = a[e];
                                            }
                                            if (++i > 30)
                                                throw "Buttons: Too many iterations";
                                        }
                                        return Array.isArray(e)
                                            ? e
                                            : t.extend({}, e);
                                    };
                                for (n = s(n); n && n.extend;) {
                                    if (!a[n.extend])
                                        throw (
                                            "Cannot extend unknown button type: " +
                                            n.extend
                                        );
                                    var u = s(a[n.extend]);
                                    if (Array.isArray(u)) return u;
                                    if (!u) return !1;
                                    var l = u.className;
                                    (n = t.extend({}, u, n)),
                                        l &&
                                        n.className !== l &&
                                        (n.className =
                                            l + " " + n.className);
                                    var c = n.postfixButtons;
                                    if (c) {
                                        for (
                                            n.buttons || (n.buttons = []),
                                            e = 0,
                                            i = c.length;
                                            e < i;
                                            e++
                                        )
                                            n.buttons.push(c[e]);
                                        n.postfixButtons = null;
                                    }
                                    var d = n.prefixButtons;
                                    if (d) {
                                        for (
                                            n.buttons || (n.buttons = []),
                                            e = 0,
                                            i = d.length;
                                            e < i;
                                            e++
                                        )
                                            n.buttons.splice(e, 0, d[e]);
                                        n.prefixButtons = null;
                                    }
                                    n.extend = u.extend;
                                }
                                return n;
                            },
                            _popover: function (o, i, r) {
                                var s = i,
                                    a = this.c,
                                    c = t.extend(
                                        {
                                            align: "button-left",
                                            autoClose: !1,
                                            background: !0,
                                            backgroundClassName:
                                                "dt-button-background",
                                            contentClassName:
                                                a.dom.collection.className,
                                            collectionLayout: "",
                                            collectionTitle: "",
                                            dropup: !1,
                                            fade: 400,
                                            rightAlignClassName:
                                                "dt-button-right",
                                            tag: a.dom.collection.tag,
                                        },
                                        r
                                    ),
                                    f = i.node(),
                                    h = function () {
                                        l(
                                            t(".dt-button-collection"),
                                            c.fade,
                                            function () {
                                                t(this).detach();
                                            }
                                        ),
                                            t(
                                                s
                                                    .buttons(
                                                        '[aria-haspopup="true"][aria-expanded="true"]'
                                                    )
                                                    .nodes()
                                            ).attr(
                                                "aria-expanded",
                                                "false"
                                            ),
                                            t(
                                                "div.dt-button-background"
                                            ).off("click.dtb-collection"),
                                            d.background(
                                                !1,
                                                c.backgroundClassName,
                                                c.fade,
                                                f
                                            ),
                                            t("body").off(
                                                ".dtb-collection"
                                            ),
                                            s.off(
                                                "buttons-action.b-internal"
                                            );
                                    };
                                !1 === o && h();
                                var p = t(
                                    s
                                        .buttons(
                                            '[aria-haspopup="true"][aria-expanded="true"]'
                                        )
                                        .nodes()
                                );
                                p.length && ((f = p.eq(0)), h());
                                var b = t("<div/>")
                                    .addClass("dt-button-collection")
                                    .addClass(c.collectionLayout)
                                    .css("display", "none");
                                (o = t(o)
                                    .addClass(c.contentClassName)
                                    .attr("role", "menu")
                                    .appendTo(b)),
                                    f.attr("aria-expanded", "true"),
                                    f.parents("body")[0] !== e.body &&
                                    (f = e.body.lastChild),
                                    c.collectionTitle &&
                                    b.prepend(
                                        '<div class="dt-button-collection-title">' +
                                        c.collectionTitle +
                                        "</div>"
                                    ),
                                    u(b.insertAfter(f), c.fade);
                                var g = t(i.table().container()),
                                    m = b.css("position");
                                if (
                                    ("dt-container" === c.align &&
                                        ((f = f.parent()),
                                            b.css("width", g.width())),
                                        "absolute" === m)
                                ) {
                                    var v = f.position(),
                                        y = t(i.node()).position();
                                    b.css({
                                        top: y.top + f.outerHeight(),
                                        left: v.left,
                                    });
                                    var x = b.outerHeight(),
                                        _ = g.offset().top + g.height(),
                                        A = y.top + f.outerHeight() + x - _,
                                        k = y.top - x,
                                        C = g.offset().top,
                                        w = C - k,
                                        T = y.top - x - 5;
                                    (A > w || c.dropup) &&
                                        -T < C &&
                                        b.css("top", T);
                                    var B = g.offset().left,
                                        N = B + g.width(),
                                        H = b.offset().left,
                                        L = H + b.width(),
                                        O = f.offset().left,
                                        S = O + f.outerWidth();
                                    if (
                                        b.hasClass(c.rightAlignClassName) ||
                                        b.hasClass(c.leftAlignClassName) ||
                                        "dt-container" === c.align
                                    ) {
                                        var P,
                                            K,
                                            j = 0;
                                        b.hasClass(c.rightAlignClassName)
                                            ? B > H + (j = S - L) &&
                                            (j +=
                                                (P = B - (H + j)) >
                                                    (K = N - (L + j))
                                                    ? K
                                                    : P)
                                            : N < L + (j = B - H) &&
                                            (j +=
                                                (P = B - (H + j)) >
                                                    (K = N - (L + j))
                                                    ? K
                                                    : P),
                                            b.css(
                                                "left",
                                                b.position().left + j
                                            );
                                    } else {
                                        var D = f.offset().top;
                                        (j = 0),
                                            (j =
                                                "button-right" === c.align
                                                    ? S - L
                                                    : O - H),
                                            b.css(
                                                "left",
                                                b.position().left + j
                                            );
                                    }
                                } else
                                    (D = b.height() / 2) >
                                        t(n).height() / 2 &&
                                        (D = t(n).height() / 2),
                                        b.css("marginTop", -1 * D);
                                c.background &&
                                    d.background(
                                        !0,
                                        c.backgroundClassName,
                                        c.fade,
                                        f
                                    ),
                                    t("div.dt-button-background").on(
                                        "click.dtb-collection",
                                        function () { }
                                    ),
                                    t("body")
                                        .on(
                                            "click.dtb-collection",
                                            function (n) {
                                                var e = t.fn.addBack
                                                    ? "addBack"
                                                    : "andSelf",
                                                    i = t(
                                                        n.target
                                                    ).parent()[0];
                                                ((!t(n.target)
                                                    .parents()
                                                [e]()
                                                    .filter(o).length &&
                                                    !t(i).hasClass(
                                                        "dt-buttons"
                                                    )) ||
                                                    t(n.target).hasClass(
                                                        "dt-button-background"
                                                    )) &&
                                                    h();
                                            }
                                        )
                                        .on(
                                            "keyup.dtb-collection",
                                            function (t) {
                                                27 === t.keyCode && h();
                                            }
                                        ),
                                    c.autoClose &&
                                    setTimeout(function () {
                                        s.on(
                                            "buttons-action.b-internal",
                                            function (t, n, e, o) {
                                                o[0] !== f[0] && h();
                                            }
                                        );
                                    }, 0),
                                    t(b).trigger("buttons-popover.dt");
                            },
                        }),
                            (d.background = function (n, i, r, s) {
                                r === o && (r = 400),
                                    s || (s = e.body),
                                    n
                                        ? u(
                                            t("<div/>")
                                                .addClass(i)
                                                .css("display", "none")
                                                .insertAfter(s),
                                            r
                                        )
                                        : l(t("div." + i), r, function () {
                                            t(this)
                                                .removeClass(i)
                                                .remove();
                                        });
                            }),
                            (d.instanceSelector = function (n, e) {
                                if (n === o || null === n)
                                    return t.map(e, function (t) {
                                        return t.inst;
                                    });
                                var i = [],
                                    r = t.map(e, function (t) {
                                        return t.name;
                                    }),
                                    s = function (n) {
                                        if (Array.isArray(n))
                                            for (
                                                var o = 0, a = n.length;
                                                o < a;
                                                o++
                                            )
                                                s(n[o]);
                                        else if ("string" == typeof n)
                                            if (-1 !== n.indexOf(","))
                                                s(n.split(","));
                                            else {
                                                var u = t.inArray(
                                                    n.trim(),
                                                    r
                                                );
                                                -1 !== u &&
                                                    i.push(e[u].inst);
                                            }
                                        else
                                            "number" == typeof n &&
                                                i.push(e[n].inst);
                                    };
                                return s(n), i;
                            }),
                            (d.buttonSelector = function (n, e) {
                                for (
                                    var i = [],
                                    r = function (t, n, e) {
                                        for (
                                            var i,
                                            s,
                                            a = 0,
                                            u = n.length;
                                            a < u;
                                            a++
                                        )
                                            (i = n[a]) &&
                                                ((s =
                                                    e !== o
                                                        ? e + a
                                                        : a + ""),
                                                    t.push({
                                                        node: i.node,
                                                        name: i.conf.name,
                                                        idx: s,
                                                    }),
                                                    i.buttons &&
                                                    r(
                                                        t,
                                                        i.buttons,
                                                        s + "-"
                                                    ));
                                    },
                                    s = function (n, e) {
                                        var a,
                                            u,
                                            l = [];
                                        r(l, e.s.buttons);
                                        var c = t.map(l, function (t) {
                                            return t.node;
                                        });
                                        if (
                                            Array.isArray(n) ||
                                            n instanceof t
                                        )
                                            for (
                                                a = 0, u = n.length;
                                                a < u;
                                                a++
                                            )
                                                s(n[a], e);
                                        else if (
                                            null === n ||
                                            n === o ||
                                            "*" === n
                                        )
                                            for (
                                                a = 0, u = l.length;
                                                a < u;
                                                a++
                                            )
                                                i.push({
                                                    inst: e,
                                                    node: l[a].node,
                                                });
                                        else if ("number" == typeof n)
                                            i.push({
                                                inst: e,
                                                node: e.s.buttons[n]
                                                    .node,
                                            });
                                        else if ("string" == typeof n)
                                            if (-1 !== n.indexOf(",")) {
                                                var d = n.split(",");
                                                for (
                                                    a = 0, u = d.length;
                                                    a < u;
                                                    a++
                                                )
                                                    s(d[a].trim(), e);
                                            } else if (
                                                n.match(/^\d+(\-\d+)*$/)
                                            ) {
                                                var f = t.map(
                                                    l,
                                                    function (t) {
                                                        return t.idx;
                                                    }
                                                );
                                                i.push({
                                                    inst: e,
                                                    node: l[
                                                        t.inArray(n, f)
                                                    ].node,
                                                });
                                            } else if (
                                                -1 !==
                                                n.indexOf(":name")
                                            ) {
                                                var h = n.replace(
                                                    ":name",
                                                    ""
                                                );
                                                for (
                                                    a = 0, u = l.length;
                                                    a < u;
                                                    a++
                                                )
                                                    l[a].name === h &&
                                                        i.push({
                                                            inst: e,
                                                            node: l[a]
                                                                .node,
                                                        });
                                            } else
                                                t(c)
                                                    .filter(n)
                                                    .each(function () {
                                                        i.push({
                                                            inst: e,
                                                            node: this,
                                                        });
                                                    });
                                        else if (
                                            "object" == typeof n &&
                                            n.nodeName
                                        ) {
                                            var p = t.inArray(n, c);
                                            -1 !== p &&
                                                i.push({
                                                    inst: e,
                                                    node: c[p],
                                                });
                                        }
                                    },
                                    a = 0,
                                    u = n.length;
                                    a < u;
                                    a++
                                ) {
                                    var l = n[a];
                                    s(e, l);
                                }
                                return i;
                            }),
                            (d.stripData = function (t, n) {
                                return (
                                    "string" != typeof t ||
                                    ((t = (t = t.replace(
                                        /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
                                        ""
                                    )).replace(/<!\-\-.*?\-\->/g, "")),
                                        (n && !n.stripHtml) ||
                                        (t = t.replace(/<[^>]*>/g, "")),
                                        (n && !n.trim) ||
                                        (t = t.replace(
                                            /^\s+|\s+$/g,
                                            ""
                                        )),
                                        (n && !n.stripNewlines) ||
                                        (t = t.replace(/\n/g, " ")),
                                        (n && !n.decodeEntities) ||
                                        ((g.innerHTML = t),
                                            (t = g.value))),
                                    t
                                );
                            }),
                            (d.defaults = {
                                buttons: [
                                    "copy",
                                    "excel",
                                    "csv",
                                    "pdf",
                                    "print",
                                ],
                                name: "main",
                                tabIndex: 0,
                                dom: {
                                    container: {
                                        tag: "div",
                                        className: "dt-buttons",
                                    },
                                    collection: {
                                        tag: "div",
                                        className: "",
                                    },
                                    button: {
                                        tag: "button",
                                        className: "dt-button",
                                        active: "active",
                                        disabled: "disabled",
                                    },
                                    buttonLiner: {
                                        tag: "span",
                                        className: "",
                                    },
                                },
                            }),
                            (d.version = "1.7.1"),
                            t.extend(a, {
                                collection: {
                                    text: function (t) {
                                        return t.i18n(
                                            "buttons.collection",
                                            "Collection"
                                        );
                                    },
                                    className: "buttons-collection",
                                    init: function (t, n, e) {
                                        n.attr("aria-expanded", !1);
                                    },
                                    action: function (t, n, e, o) {
                                        t.stopPropagation(),
                                            o._collection.parents("body")
                                                .length
                                                ? this.popover(!1, o)
                                                : this.popover(
                                                    o._collection,
                                                    o
                                                );
                                    },
                                    attr: { "aria-haspopup": !0 },
                                },
                                copy: function (t, n) {
                                    if (a.copyHtml5) return "copyHtml5";
                                },
                                csv: function (t, n) {
                                    if (
                                        a.csvHtml5 &&
                                        a.csvHtml5.available(t, n)
                                    )
                                        return "csvHtml5";
                                },
                                excel: function (t, n) {
                                    if (
                                        a.excelHtml5 &&
                                        a.excelHtml5.available(t, n)
                                    )
                                        return "excelHtml5";
                                },
                                pdf: function (t, n) {
                                    if (
                                        a.pdfHtml5 &&
                                        a.pdfHtml5.available(t, n)
                                    )
                                        return "pdfHtml5";
                                },
                                pageLength: function (n) {
                                    var e = n.settings()[0].aLengthMenu,
                                        o = [],
                                        i = [];
                                    if (Array.isArray(e[0]))
                                        (o = e[0]), (i = e[1]);
                                    else
                                        for (var r = 0; r < e.length; r++) {
                                            var s = e[r];
                                            t.isPlainObject(s)
                                                ? (o.push(s.value),
                                                    i.push(s.label))
                                                : (o.push(s), i.push(s));
                                        }
                                    return {
                                        extend: "collection",
                                        text: function (t) {
                                            return t.i18n(
                                                "buttons.pageLength",
                                                {
                                                    "-1": "Show all rows",
                                                    _: "Show %d rows",
                                                },
                                                t.page.len()
                                            );
                                        },
                                        className: "buttons-page-length",
                                        autoClose: !0,
                                        buttons: t.map(o, function (t, n) {
                                            return {
                                                text: i[n],
                                                className:
                                                    "button-page-length",
                                                action: function (n, e) {
                                                    e.page.len(t).draw();
                                                },
                                                init: function (n, e, o) {
                                                    var i = this,
                                                        r = function () {
                                                            i.active(
                                                                n.page.len() ===
                                                                t
                                                            );
                                                        };
                                                    n.on(
                                                        "length.dt" +
                                                        o.namespace,
                                                        r
                                                    ),
                                                        r();
                                                },
                                                destroy: function (
                                                    t,
                                                    n,
                                                    e
                                                ) {
                                                    t.off(
                                                        "length.dt" +
                                                        e.namespace
                                                    );
                                                },
                                            };
                                        }),
                                        init: function (t, n, e) {
                                            var o = this;
                                            t.on(
                                                "length.dt" + e.namespace,
                                                function () {
                                                    o.text(e.text);
                                                }
                                            );
                                        },
                                        destroy: function (t, n, e) {
                                            t.off(
                                                "length.dt" + e.namespace
                                            );
                                        },
                                    };
                                },
                            }),
                            i.Api.register("buttons()", function (t, n) {
                                n === o && ((n = t), (t = o)),
                                    (this.selector.buttonGroup = t);
                                var e = this.iterator(
                                    !0,
                                    "table",
                                    function (e) {
                                        if (e._buttons)
                                            return d.buttonSelector(
                                                d.instanceSelector(
                                                    t,
                                                    e._buttons
                                                ),
                                                n
                                            );
                                    },
                                    !0
                                );
                                return (e._groupSelector = t), e;
                            }),
                            i.Api.register("button()", function (t, n) {
                                var e = this.buttons(t, n);
                                return (
                                    e.length > 1 && e.splice(1, e.length), e
                                );
                            }),
                            i.Api.registerPlural(
                                "buttons().active()",
                                "button().active()",
                                function (t) {
                                    return t === o
                                        ? this.map(function (t) {
                                            return t.inst.active(t.node);
                                        })
                                        : this.each(function (n) {
                                            n.inst.active(n.node, t);
                                        });
                                }
                            ),
                            i.Api.registerPlural(
                                "buttons().action()",
                                "button().action()",
                                function (t) {
                                    return t === o
                                        ? this.map(function (t) {
                                            return t.inst.action(t.node);
                                        })
                                        : this.each(function (n) {
                                            n.inst.action(n.node, t);
                                        });
                                }
                            ),
                            i.Api.register(
                                ["buttons().enable()", "button().enable()"],
                                function (t) {
                                    return this.each(function (n) {
                                        n.inst.enable(n.node, t);
                                    });
                                }
                            ),
                            i.Api.register(
                                [
                                    "buttons().disable()",
                                    "button().disable()",
                                ],
                                function () {
                                    return this.each(function (t) {
                                        t.inst.disable(t.node);
                                    });
                                }
                            ),
                            i.Api.registerPlural(
                                "buttons().nodes()",
                                "button().node()",
                                function () {
                                    var n = t();
                                    return (
                                        t(
                                            this.each(function (t) {
                                                n = n.add(
                                                    t.inst.node(t.node)
                                                );
                                            })
                                        ),
                                        n
                                    );
                                }
                            ),
                            i.Api.registerPlural(
                                "buttons().processing()",
                                "button().processing()",
                                function (t) {
                                    return t === o
                                        ? this.map(function (t) {
                                            return t.inst.processing(
                                                t.node
                                            );
                                        })
                                        : this.each(function (n) {
                                            n.inst.processing(n.node, t);
                                        });
                                }
                            ),
                            i.Api.registerPlural(
                                "buttons().text()",
                                "button().text()",
                                function (t) {
                                    return t === o
                                        ? this.map(function (t) {
                                            return t.inst.text(t.node);
                                        })
                                        : this.each(function (n) {
                                            n.inst.text(n.node, t);
                                        });
                                }
                            ),
                            i.Api.registerPlural(
                                "buttons().trigger()",
                                "button().trigger()",
                                function () {
                                    return this.each(function (t) {
                                        t.inst
                                            .node(t.node)
                                            .trigger("click");
                                    });
                                }
                            ),
                            i.Api.register(
                                "button().popover()",
                                function (t, n) {
                                    return this.map(function (e) {
                                        return e.inst._popover(
                                            t,
                                            this.button(this[0].node),
                                            n
                                        );
                                    });
                                }
                            ),
                            i.Api.register(
                                "buttons().containers()",
                                function () {
                                    var n = t(),
                                        e = this._groupSelector;
                                    return (
                                        this.iterator(
                                            !0,
                                            "table",
                                            function (t) {
                                                if (t._buttons)
                                                    for (
                                                        var o =
                                                            d.instanceSelector(
                                                                e,
                                                                t._buttons
                                                            ),
                                                        i = 0,
                                                        r = o.length;
                                                        i < r;
                                                        i++
                                                    )
                                                        n = n.add(
                                                            o[i].container()
                                                        );
                                            }
                                        ),
                                        n
                                    );
                                }
                            ),
                            i.Api.register(
                                "buttons().container()",
                                function () {
                                    return this.containers().eq(0);
                                }
                            ),
                            i.Api.register(
                                "button().add()",
                                function (t, n) {
                                    var e = this.context;
                                    if (e.length) {
                                        var o = d.instanceSelector(
                                            this._groupSelector,
                                            e[0]._buttons
                                        );
                                        o.length && o[0].add(n, t);
                                    }
                                    return this.button(
                                        this._groupSelector,
                                        t
                                    );
                                }
                            ),
                            i.Api.register(
                                "buttons().destroy()",
                                function () {
                                    return (
                                        this.pluck("inst")
                                            .unique()
                                            .each(function (t) {
                                                t.destroy();
                                            }),
                                        this
                                    );
                                }
                            ),
                            i.Api.registerPlural(
                                "buttons().remove()",
                                "buttons().remove()",
                                function () {
                                    return (
                                        this.each(function (t) {
                                            t.inst.remove(t.node);
                                        }),
                                        this
                                    );
                                }
                            ),
                            i.Api.register(
                                "buttons.info()",
                                function (n, e, i) {
                                    var r = this;
                                    return !1 === n
                                        ? (this.off("destroy.btn-info"),
                                            l(
                                                t("#datatables_buttons_info"),
                                                400,
                                                function () {
                                                    t(this).remove();
                                                }
                                            ),
                                            clearTimeout(c),
                                            (c = null),
                                            this)
                                        : (c && clearTimeout(c),
                                            t("#datatables_buttons_info")
                                                .length &&
                                            t(
                                                "#datatables_buttons_info"
                                            ).remove(),
                                            (n = n
                                                ? "<h2>" + n + "</h2>"
                                                : ""),
                                            u(
                                                t(
                                                    '<div id="datatables_buttons_info" class="dt-button-info"/>'
                                                )
                                                    .html(n)
                                                    .append(
                                                        t("<div/>")[
                                                            "string" ==
                                                                typeof e
                                                                ? "html"
                                                                : "append"
                                                        ](e)
                                                    )
                                                    .css("display", "none")
                                                    .appendTo("body")
                                            ),
                                            i !== o &&
                                            0 !== i &&
                                            (c = setTimeout(function () {
                                                r.buttons.info(!1);
                                            }, i)),
                                            this.on(
                                                "destroy.btn-info",
                                                function () {
                                                    r.buttons.info(!1);
                                                }
                                            ),
                                            this);
                                }
                            ),
                            i.Api.register(
                                "buttons.exportData()",
                                function (t) {
                                    if (this.context.length)
                                        return m(
                                            new i.Api(this.context[0]),
                                            t
                                        );
                                }
                            ),
                            i.Api.register(
                                "buttons.exportInfo()",
                                function (t) {
                                    return (
                                        t || (t = {}),
                                        {
                                            filename: f(t),
                                            title: p(t),
                                            messageTop: b(
                                                this,
                                                t.message || t.messageTop,
                                                "top"
                                            ),
                                            messageBottom: b(
                                                this,
                                                t.messageBottom,
                                                "bottom"
                                            ),
                                        }
                                    );
                                }
                            );
                        var f = function (n) {
                            var e =
                                "*" === n.filename &&
                                    "*" !== n.title &&
                                    n.title !== o &&
                                    null !== n.title &&
                                    "" !== n.title
                                    ? n.title
                                    : n.filename;
                            if (
                                ("function" == typeof e && (e = e()),
                                    e === o || null === e)
                            )
                                return null;
                            -1 !== e.indexOf("*") &&
                                (e = e
                                    .replace(
                                        "*",
                                        t("head > title").text()
                                    )
                                    .trim()),
                                (e = e.replace(
                                    /[^a-zA-Z0-9_\u00A1-\uFFFF\.,\-_ !\(\)]/g,
                                    ""
                                ));
                            var i = h(n.extension);
                            return i || (i = ""), e + i;
                        },
                            h = function (t) {
                                return null === t || t === o
                                    ? null
                                    : "function" == typeof t
                                        ? t()
                                        : t;
                            },
                            p = function (n) {
                                var e = h(n.title);
                                return null === e
                                    ? null
                                    : -1 !== e.indexOf("*")
                                        ? e.replace(
                                            "*",
                                            t("head > title").text() ||
                                            "Exported data"
                                        )
                                        : e;
                            },
                            b = function (n, e, o) {
                                var i = h(e);
                                if (null === i) return null;
                                var r = t(
                                    "caption",
                                    n.table().container()
                                ).eq(0);
                                return "*" === i
                                    ? r.css("caption-side") !== o
                                        ? null
                                        : r.length
                                            ? r.text()
                                            : ""
                                    : i;
                            },
                            g = t("<textarea/>")[0],
                            m = function (n, e) {
                                var i = t.extend(
                                    !0,
                                    {},
                                    {
                                        rows: null,
                                        columns: "",
                                        modifier: {
                                            search: "applied",
                                            order: "applied",
                                        },
                                        orthogonal: "display",
                                        stripHtml: !0,
                                        stripNewlines: !0,
                                        decodeEntities: !0,
                                        trim: !0,
                                        format: {
                                            header: function (t) {
                                                return d.stripData(
                                                    t,
                                                    i
                                                );
                                            },
                                            footer: function (t) {
                                                return d.stripData(
                                                    t,
                                                    i
                                                );
                                            },
                                            body: function (t) {
                                                return d.stripData(
                                                    t,
                                                    i
                                                );
                                            },
                                        },
                                        customizeData: null,
                                    },
                                    e
                                ),
                                    r = n
                                        .columns(i.columns)
                                        .indexes()
                                        .map(function (t) {
                                            var e = n.column(t).header();
                                            return i.format.header(
                                                e.innerHTML,
                                                t,
                                                e
                                            );
                                        })
                                        .toArray(),
                                    s = n.table().footer()
                                        ? n
                                            .columns(i.columns)
                                            .indexes()
                                            .map(function (t) {
                                                var e = n
                                                    .column(t)
                                                    .footer();
                                                return i.format.footer(
                                                    e ? e.innerHTML : "",
                                                    t,
                                                    e
                                                );
                                            })
                                            .toArray()
                                        : null,
                                    a = t.extend({}, i.modifier);
                                n.select &&
                                    "function" == typeof n.select.info &&
                                    a.selected === o &&
                                    n
                                        .rows(
                                            i.rows,
                                            t.extend({ selected: !0 }, a)
                                        )
                                        .any() &&
                                    t.extend(a, { selected: !0 });
                                for (
                                    var u = n
                                        .rows(i.rows, a)
                                        .indexes()
                                        .toArray(),
                                    l = n.cells(u, i.columns),
                                    c = l
                                        .render(i.orthogonal)
                                        .toArray(),
                                    f = l.nodes().toArray(),
                                    h = r.length,
                                    p = [],
                                    b = 0,
                                    g = 0,
                                    m = h > 0 ? c.length / h : 0;
                                    g < m;
                                    g++
                                ) {
                                    for (var v = [h], y = 0; y < h; y++)
                                        (v[y] = i.format.body(
                                            c[b],
                                            g,
                                            y,
                                            f[b]
                                        )),
                                            b++;
                                    p[g] = v;
                                }
                                var x = { header: r, footer: s, body: p };
                                return (
                                    i.customizeData && i.customizeData(x), x
                                );
                            };
                        function v(t, n) {
                            var e = new i.Api(t),
                                o =
                                    n ||
                                    e.init().buttons ||
                                    i.defaults.buttons;
                            return new d(e, o).container();
                        }
                        return (
                            (t.fn.dataTable.Buttons = d),
                            (t.fn.DataTable.Buttons = d),
                            t(e).on(
                                "init.dt plugin-init.dt",
                                function (t, n) {
                                    if ("dt" === t.namespace) {
                                        var e =
                                            n.oInit.buttons ||
                                            i.defaults.buttons;
                                        e &&
                                            !n._buttons &&
                                            new d(n, e).container();
                                    }
                                }
                            ),
                            i.ext.feature.push({
                                fnInit: v,
                                cFeature: "B",
                            }),
                            i.ext.features &&
                            i.ext.features.register("buttons", v),
                            d
                        );
                    })(t, window, document);
                }.apply(n, o)) || (t.exports = i);
        },
    })
);
