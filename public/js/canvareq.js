!(function () {
    "use strict";
    function t(t, n) {
        let e;
        return (...o) => {
            clearTimeout(e),
                (e = setTimeout(() => {
                    t(...o);
                }, n));
        };
    }
    class n {
        constructor() {
            (this.callbacks = []),
                window.addEventListener("DOMContentLoaded", () =>
                    this.onDOMContentLoaded()
                );
        }
        onDOMContentLoaded() {
            this.callbacks
                .sort((t, n) => t.priority - n.priority)
                .forEach(({ callback: t }) => t());
        }
        runOnLoad(t) {
            "loading" === document.readyState
                ? this.callbacks.push(t)
                : t.callback();
        }
    }
    function e(t, e = Number.MAX_VALUE) {
        var o;
        (window.canva_scriptExecutor =
            null !== (o = window.canva_scriptExecutor) && void 0 !== o
                ? o
                : new n()).runOnLoad({ callback: t, priority: e });
    }
    class o {
        constructor(t) {
            (this.items = []),
                (this.previousWidth = document.documentElement.clientWidth),
                (this.previousHeight = window.innerHeight);
            const n = t(() => this.onWindowResize(), 100);
            window.addEventListener("resize", n);
        }
        onWindowResize() {
            const t = document.documentElement.clientWidth,
                n = window.innerHeight,
                e = this.previousWidth !== t,
                o = this.previousHeight !== n;
            this.items.forEach((t) => {
                const n = () => {
                    t.callback(), (t.executed = !0);
                };
                (!t.executed ||
                    (e && t.options.runOnWidthChange) ||
                    (o && t.options.runOnHeightChange)) &&
                n();
            }),
                (this.previousWidth = t),
                (this.previousHeight = n);
        }
        runOnResize(t, n) {
            this.items.push({ callback: t, options: n, executed: n.runOnLoad }),
                this.items.sort(
                    (t, n) => t.options.priority - n.options.priority
                ),
            n.runOnLoad && e(t, n.priority);
        }
    }
    function i(n, e, i = t) {
        var r;
        (window.canva_debounceResize =
            null !== (r = window.canva_debounceResize) && void 0 !== r
                ? r
                : new o(i)).runOnResize(n, {
            runOnLoad: !1,
            runOnWidthChange: !0,
            runOnHeightChange: !1,
            priority: Number.MAX_VALUE,
            ...e,
        });
    }
    const r = "--minfs",
        c = "--rzf",
        u = "--rfso",
        s = "--bfso";
    function a(t, n, e = 0.001) {
        return Math.abs(t - n) < e;
    }
    function d(t, n) {
        return window.getComputedStyle(t).getPropertyValue(n);
    }
    function l(t, n, e) {
        t.style.setProperty(n, e);
    }
    function m(t, n) {
        const e = document.createElement("div");
        e.style.setProperty(t, n), document.body.append(e);
        const o = d(e, t);
        return e.remove(), o;
    }
    function f() {
        const t = (function () {
                const t = parseFloat(m("font-size", "0.1px"));
                return t > 1 ? t : 0;
            })(),
            n = (function (t) {
                const n = 2 * Math.max(t, 1);
                return n / parseFloat(m("font-size", `${n}px`));
            })(t);
        if (
            ((function (t) {
                if (0 === t) return;
                l(document.documentElement, r, `${t}px`),
                    i(
                        () => {
                            const n = 100 * t,
                                { clientWidth: e } = document.documentElement;
                            l(
                                document.documentElement,
                                c,
                                n > e ? (e / n).toPrecision(4) : null
                            );
                        },
                        { runOnLoad: !0 }
                    );
            })(t * Math.max(1, n)),
                a(n, 1))
        )
            return;
        const e = a(
            parseFloat(d(document.documentElement, "font-size")),
            parseFloat(m("grid-template-columns", "1rem"))
        );
        l(document.documentElement, e ? u : s, n.toPrecision(4));
    }
    function h() {
        document
            .querySelectorAll("img, image, video, svg")
            .forEach((t) =>
                t.addEventListener("contextmenu", (t) => t.preventDefault())
            );
    }
    const p = "--sbw",
        g = "--inner1Vh";
    function w(t, n, e) {
        t.style.setProperty(n, e);
    }
    function v() {
        w(document.documentElement, g, window.innerHeight / 100 + "px"),
            (function () {
                const t =
                    window.innerWidth - document.documentElement.clientWidth;
                w(document.documentElement, p, t >= 0 ? `${t}px` : null);
            })();
    }
    var y;
    const E =
        "undefined" != typeof window
            ? null === (y = window.navigator) || void 0 === y
                ? void 0
                : y.userAgent
            : void 0;
    const b = !(
        !E ||
        ((O = E),
        !O.match(/AppleWebKit\//) ||
        O.match(/Chrome\//) ||
        O.match(/Chromium\//))
    );
    var O;
    function L() {
        document
            .querySelectorAll("svg")
            .forEach(
                (t) => (t.style.background = "url('data:image/png;base64,')")
            );
    }
    let x;
    function A() {
        x ||
        (x = Array.from(document.querySelectorAll("foreignObject")).filter(
            (t) => 0 === t.getBoundingClientRect().width
        ));
        const t = (function () {
            const t = document.createElement("div");
            (t.style.fontSize = "100vw"), document.body.append(t);
            const n = parseFloat(window.getComputedStyle(t).fontSize);
            return t.remove(), n / window.innerWidth;
        })();
        Array.from(x).forEach((n) =>
            (function (t) {
                return new Promise((n, e) => {
                    const o = t.querySelector("img");
                    o && !o.complete
                        ? (o.addEventListener("load", () => n()),
                            o.addEventListener("error", () => e()))
                        : n();
                });
            })(n).finally(() =>
                (function (t, n) {
                    const e = Array.from(t.children);
                    e.forEach((t, n) => {
                        if (t.hasAttribute("data-foreign-object-container"))
                            (t.style.transformOrigin = ""), (t.style.transform = "");
                        else {
                            const o = document.createElement("div");
                            o.setAttribute("data-foreign-object-container", ""),
                                t.insertAdjacentElement("beforebegin", o),
                                t.remove(),
                                o.append(t),
                                (e[n] = o);
                        }
                    });
                    const o = t.getScreenCTM();
                    if (!o) return;
                    const { a: i, b: r, c: c, d: u } = o.scale(n);
                    e.forEach((t) => {
                        if (!t.hasAttribute("data-foreign-object-container")) return;
                        const { style: n } = t;
                        (n.transformOrigin = "0px 0px"),
                            (n.transform = `matrix(${i}, ${r}, ${c}, ${u}, 0, 0)`);
                    });
                })(n, t)
            )
        );
    }
    [
        function () {
            e(f);
        },
        function () {
            i(v, { runOnLoad: !0, runOnHeightChange: !0, priority: 1 });
        },
        function () {
            b && i(A, { runOnLoad: !0 });
        },
        function () {
            b && e(L);
        },
        function () {
            e(h);
        },
    ].forEach((t) => t());
})();


const lang = navigator.language ? navigator.language : "en";
const loaded = new Promise((resolve) => {
    if (document.readyState === "loading") {
        window.addEventListener("DOMContentLoaded", resolve);
        return;
    }
    resolve();
});
Promise.all([
    fetch("_footer?lang=" + encodeURIComponent(lang)),
    loaded,
]).then(([response]) => {
    if (response.status !== 200) {
        return;
    }
    response.text().then((footerStr) => {
        const div = document.createElement("div");
        div.innerHTML = footerStr;
        for (const child of [...div.children]) {
            if (child.tagName.toLowerCase() !== "script") {
                document.body.append(child);
            }
        }

        (() => {
            !(function (e) {
                "use strict";
                const t = document.getElementById("modal_backdrop"),
                    n = document.getElementById("modal"),
                    o = document.getElementById("captcha-form"),
                    c = document.getElementById("report_button"),
                    d = document.getElementById("form_report"),
                    s = document.getElementById("form_cancel"),
                    l = document.getElementById("form_submit_reason"),
                    a = document.getElementById("form_go_back"),
                    m = document.getElementById("form_submit_captcha"),
                    r = document.getElementById("form_close"),
                    i = document.getElementById("report_reason_0"),
                    u = document.getElementById("error_message"),
                    p = document.getElementById("error_message_captcha"),
                    _ = new Map();
                _.set(0, document.getElementById("form_step_terms")),
                    _.set(1, document.getElementById("form_step_report_reason")),
                    _.set(4, document.getElementById("form_step_report_other"));
                const y = document.getElementById("form_step_report_ip");
                y && _.set(5, y),
                    _.set(2, document.getElementById("form_step_captcha")),
                    _.set(3, document.getElementById("form_step_success"));
                const E = document.getElementById("report_reason_4"),
                    f = document.getElementById("form_close_ip"),
                    g = document.getElementById("form_go_back_ip"),
                    h = document.getElementById("report_reason_other"),
                    I = document.getElementById("form_close_other"),
                    k = document.getElementById("form_go_back_other");
                function v() {
                    t.classList.remove("active"),
                        n.classList.remove("active"),
                        c.classList.remove("active"),
                        c.focus();
                }
                function B(e) {
                    _.forEach((t, n) => {
                        n === e
                            ? ((t.style.display = "block"), A(t))
                            : (t.style.display = "none");
                    });
                }
                let w,
                    b = !1;
                const T =
                    "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION
                        ? () => w
                        : () => {
                            const e = o.elements.namedItem("g-recaptcha-response");
                            return null == e ? void 0 : e.value;
                        };
                (t.onclick = v),
                    (s.onclick = v),
                    (r.onclick = v),
                f && (f.onclick = v),
                    (I.onclick = v),
                    (c.onclick = function () {
                        _.forEach((e, t) => {
                            e.style.display = 0 === t ? "block" : "none";
                        }),
                            t.classList.add("active"),
                            n.classList.add("active"),
                            c.classList.add("active"),
                            (i.checked = !0),
                            setTimeout(() => {
                                A(_.get(0));
                            }, 350);
                    }),
                    (d.onclick = () => B(1)),
                    (l.onclick = () => {
                        null != y && E.checked
                            ? B(5)
                            : h.checked
                                ? B(4)
                                : (B(2),
                                    (function () {
                                        if (b) return;
                                        const e = document.createElement("script");
                                        (e.src =
                                            "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION
                                                ? "https://cstaticdun.126.net/load.min.js"
                                                : "https://www.google.com/recaptcha/api.js"),
                                            (e.async = !0),
                                            (e.defer = !0),
                                            document.head.appendChild(e),
                                            (b = !0),
                                            (e.onload =
                                                "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION
                                                    ? () => {
                                                        var e;
                                                        null === (e = window.initNECaptcha) ||
                                                        void 0 === e ||
                                                        e.call(window, {
                                                            captchaId: window.C_CAPTCHA_KEY,
                                                            element: "#netease-captcha",
                                                            protocol: "https",
                                                            width: "auto",
                                                            onVerify: (e, t) => {
                                                                w = t.validate;
                                                            },
                                                        });
                                                    }
                                                    : () => {});
                                    })());
                    }),
                    (a.onclick = () => B(1)),
                g && (g.onclick = () => B(1)),
                    (k.onclick = () => B(1)),
                    o.addEventListener("submit", function (e) {
                        e.preventDefault(),
                            (u.style.display = "none"),
                            (p.style.display = "none");
                        const t = (function () {
                                let e = "";
                                const t = document.getElementsByName("report_reason");
                                for (let n = 0; n < t.length; n++) {
                                    const o = t[n];
                                    o.checked && (e = o.value);
                                }
                                return e;
                            })(),
                            n = T();
                        if (!n) return void (p.style.display = "block");
                        const o = { reason: t, challenge: n },
                            c =
                                window.location.origin +
                                window.location.pathname +
                                "/_api/report";
                        m.classList.add("loading"),
                            fetch(c, {
                                method: "POST",
                                body: JSON.stringify(o),
                                headers: {
                                    "Content-Type": "application/json; charset=utf-8",
                                },
                            }).then((e) => {
                                m.classList.remove("loading"),
                                    e.ok ? B(3) : (u.style.display = "block");
                            });
                    });
                const C = new Map(),
                    A = (e) => {
                        const t = C.get(e);
                        null != t && document.removeEventListener("keydown", t);
                        const n = e.querySelectorAll(
                                'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                            ),
                            o = e,
                            c = n[n.length - 1],
                            d = function (e) {
                                ("Tab" === e.key || 9 === e.keyCode) &&
                                (e.shiftKey
                                    ? document.activeElement === o &&
                                    (c.focus(), e.preventDefault())
                                    : document.activeElement === c &&
                                    (o.focus(), e.preventDefault()));
                            };
                        C.set(e, d),
                            document.addEventListener("keydown", d),
                            o.focus();
                    };
                (e.keepFocus = A),
                    Object.defineProperty(e, "__esModule", { value: !0 });
            })({});
        })();
        window.dispatchEvent(new Event("resize"));
    });
});
