<!DOCTYPE html>
<!-- saved from url=(0057)https://dtwhere.my.canva.site/salinan-dari-invitersproduk -->
<html lang="id-ID" style="--inner1Vh: 7.65px; --sbw: 17px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--<base href="/salinan-dari-invitersproduk/">-->
    <base href=".">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding of Mary & Anno</title>
    <meta name="description" content="">
    <link rel="icon" href="https://dtwhere.my.canva.site/salinan-dari-invitersproduk/26387fa4f5b1e3f7b6217b27d79bf264.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://dtwhere.my.canva.site/salinan-dari-invitersproduk/2d0b56e7e51cf11036ad8734bdb67e2d.png" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="https://dtwhere.my.canva.site/salinan-dari-invitersproduk/725b756a69a7d4c235070e51acd85560.png" sizes="180x180">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://dtwhere.my.canva.site/salinan-dari-invitersproduk">
    <meta property="og:title" content="Salinan dari Invitersproduk">
    <meta property="og:image" content="https://dtwhere.my.canva.site/salinan-dari-invitersproduk/c4d4027401baaa39efc7a905cd9ed84a.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="stylesheet" href="\../weddingcss/prowed.css" />
    
    <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fahkwang' rel='stylesheet'>
    <noscript>
        <style>
            @keyframes pulse {}

            .animated {
                animation-play-state: running !important;
            }

        </style>
    </noscript>
    <script nonce="">
        ! function() {
            "use strict";

            function t(t, n) {
                let e;
                return (...o) => {
                    clearTimeout(e), e = setTimeout((() => {
                        t(...o)
                    }), n)
                }
            }
            class n {
                constructor() {
                    this.callbacks = [], window.addEventListener("DOMContentLoaded", (() => this.onDOMContentLoaded()))
                }
                onDOMContentLoaded() {
                    this.callbacks.sort(((t, n) => t.priority - n.priority)).forEach((({
                        callback: t
                    }) => t()))
                }
                runOnLoad(t) {
                    "loading" === document.readyState ? this.callbacks.push(t) : t.callback()
                }
            }

            function e(t, e = Number.MAX_VALUE) {
                var o;
                (window.canva_scriptExecutor = null !== (o = window.canva_scriptExecutor) && void 0 !== o ? o : new n).runOnLoad
                    ({
                        callback: t
                        , priority: e
                    })
            }
            class o {
                constructor(t) {
                    this.items = [], this.previousWidth = document.documentElement.clientWidth, this.previousHeight = window
                        .innerHeight;
                    const n = t((() => this.onWindowResize()), 100);
                    window.addEventListener("resize", n)
                }
                onWindowResize() {
                    const t = document.documentElement.clientWidth
                        , n = window.innerHeight
                        , e = this.previousWidth !== t
                        , o = this.previousHeight !== n;
                    this.items.forEach((t => {
                        const n = () => {
                            t.callback(), t.executed = !0
                        };
                        (!t.executed || e && t.options.runOnWidthChange || o && t.options.runOnHeightChange) && n()
                    })), this.previousWidth = t, this.previousHeight = n
                }
                runOnResize(t, n) {
                    this.items.push({
                        callback: t
                        , options: n
                        , executed: n.runOnLoad
                    }), this.items.sort(((t, n) => t.options.priority - n.options.priority)), n.runOnLoad && e(t, n.priority)
                }
            }

            function i(n, e, i = t) {
                var r;
                (window.canva_debounceResize = null !== (r = window.canva_debounceResize) && void 0 !== r ? r : new o(i))
                .runOnResize(n, {
                    runOnLoad: !1
                    , runOnWidthChange: !0
                    , runOnHeightChange: !1
                    , priority: Number.MAX_VALUE
                    , ...e
                })
            }
            const r = "--minfs"
                , c = "--rzf"
                , u = "--rfso"
                , s = "--bfso";

            function a(t, n, e = .001) {
                return Math.abs(t - n) < e
            }

            function d(t, n) {
                return window.getComputedStyle(t).getPropertyValue(n)
            }

            function l(t, n, e) {
                t.style.setProperty(n, e)
            }

            function m(t, n) {
                const e = document.createElement("div");
                e.style.setProperty(t, n), document.body.append(e);
                const o = d(e, t);
                return e.remove(), o
            }

            function f() {
                const t = function() {
                        const t = parseFloat(m("font-size", "0.1px"));
                        return t > 1 ? t : 0
                    }()
                    , n = function(t) {
                        const n = 2 * Math.max(t, 1);
                        return n / parseFloat(m("font-size", `${n}px`))
                    }(t);
                if (function(t) {
                        if (0 === t) return;
                        l(document.documentElement, r, `${t}px`), i((() => {
                            const n = 100 * t
                                , {
                                    clientWidth: e
                                } = document.documentElement;
                            l(document.documentElement, c, n > e ? (e / n).toPrecision(4) : null)
                        }), {
                            runOnLoad: !0
                        })
                    }(t * Math.max(1, n)), a(n, 1)) return;
                const e = a(parseFloat(d(document.documentElement, "font-size")), parseFloat(m("grid-template-columns"
                    , "1rem")));
                l(document.documentElement, e ? u : s, n.toPrecision(4))
            }

            function h() {
                document.querySelectorAll("img, image, video, svg").forEach((t => t.addEventListener("contextmenu", (t => t
                    .preventDefault()))))
            }
            const p = "--sbw"
                , g = "--inner1Vh";

            function w(t, n, e) {
                t.style.setProperty(n, e)
            }

            function v() {
                w(document.documentElement, g, window.innerHeight / 100 + "px")
                    , function() {
                        const t = window.innerWidth - document.documentElement.clientWidth;
                        w(document.documentElement, p, t >= 0 ? `${t}px` : null)
                    }()
            }
            var y;
            const E = "undefined" != typeof window ? null === (y = window.navigator) || void 0 === y ? void 0 : y.userAgent :
                void 0;
            const b = !(!E || (O = E, !O.match(/AppleWebKit\//) || O.match(/Chrome\//) || O.match(/Chromium\//)));
            var O;

            function L() {
                document.querySelectorAll("svg").forEach((t => t.style.background = "url('data:image/png;base64,')"))
            }
            let x;

            function A() {
                x || (x = Array.from(document.querySelectorAll("foreignObject")).filter((t => 0 === t.getBoundingClientRect()
                    .width)));
                const t = function() {
                    const t = document.createElement("div");
                    t.style.fontSize = "100vw", document.body.append(t);
                    const n = parseFloat(window.getComputedStyle(t).fontSize);
                    return t.remove(), n / window.innerWidth
                }();
                Array.from(x).forEach((n => function(t) {
                    return new Promise(((n, e) => {
                        const o = t.querySelector("img");
                        o && !o.complete ? (o.addEventListener("load", (() => n())), o.addEventListener("error", (() =>
                            e()))) : n()
                    }))
                }(n).finally((() => function(t, n) {
                    const e = Array.from(t.children);
                    e.forEach(((t, n) => {
                        if (t.hasAttribute("data-foreign-object-container")) t.style.transformOrigin = "", t.style
                            .transform = "";
                        else {
                            const o = document.createElement("div");
                            o.setAttribute("data-foreign-object-container", ""), t.insertAdjacentElement(
                                "beforebegin", o), t.remove(), o.append(t), e[n] = o
                        }
                    }));
                    const o = t.getScreenCTM();
                    if (!o) return;
                    const {
                        a: i
                        , b: r
                        , c: c
                        , d: u
                    } = o.scale(n);
                    e.forEach((t => {
                        if (!t.hasAttribute("data-foreign-object-container")) return;
                        const {
                            style: n
                        } = t;
                        n.transformOrigin = "0px 0px", n.transform = `matrix(${i}, ${r}, ${c}, ${u}, 0, 0)`
                    }))
                }(n, t)))))
            } [function() {
                e(f)
            }, function() {
                i(v, {
                    runOnLoad: !0
                    , runOnHeightChange: !0
                    , priority: 1
                })
            }, function() {
                b && i(A, {
                    runOnLoad: !0
                })
            }, function() {
                b && e(L)
            }, function() {
                e(h)
            }].forEach((t => t()))
        }();

    </script>
    <script nonce="">
        window.C_CAPTCHA_IMPLEMENTATION = 'RECAPTCHA';

    </script>
    <script nonce="">
        window.C_CAPTCHA_KEY = '6Ldk59waAAAAAMPqkICbJjfMivZLCGtTpa6Wn6zO';

    </script>
</head>

<body>

    <div id="root"><a id="mary-anno" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="gq1CP0BW7dkfvcwg" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;">
            <div id="jc8k3u1u0Ax1X6L9" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="j9ZnFTY0jfbCHVLv" style="z-index:0;">
                    <div id="cUW5s9xSKyENfdXn" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="eOFqytbMSBlWTpO3" style="width:100%;height:100%;opacity:1.0;">
                            <div id="hMK1rBs2DQ6IZ8Zx" style="background-color:#ffffff;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="zIndgoHnC2KSMUcc" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="ZuvrtM06TL86ld8I">
                    <div id="nb63XfQgs3cJsxzj" style="display:grid;position:relative;grid-area:2 / 2 / 3 / 3;">
                        <div id="tbvLmAZ7S7TmL81e" style="z-index:1;">
                            <div id="zmdvqvyIFgRgajm1" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <div id="RRJPjfDGvwNuDjGR" style="width:100%;height:100%;opacity:1.0;">
                                    <div id="fB3EKVchSOPZ18hs" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                        <div id="rGWP9OThIrOUeh4j" style="width: calc(139.46409427% * max(1, var(--scale-fill, 1))); height: calc(129.55533344% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                            <img src="/images/wedpro/bg.png" loading="lazy" srcset="/images/wedpro/bg.png 875w, /images/wedpro/bg.png 2186w" sizes="(max-width: 375px) 127.56315822vw, (min-width: 375.05px) and (max-width: 480px) 130.16648798vw, (min-width: 480.05px) and (max-width: 768px) 127.84208641vw, (min-width: 768.05px) and (max-width: 1024px) 130.74758838vw, (min-width: 1024.05px) 139.46409427vw" style="width:100%;height:100%;display:block;object-fit:cover;object-position:43.5384874% 61.40645184%;transform:translate(-43.5384874%, -61.40645184%) rotate(0deg);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="CG4uHpuHcK2kKIKt" style="z-index:2;">
                            <div id="gDTNyKrNwfTjy8yp" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <div id="tyZFCSoyJuEWAzs6" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                                    <p id="ZAShhF4lWpwIRupr" style="color:#ffffff;font-family:Parisienne;line-height:1.25806452em;text-align:center;text-transform:none;letter-spacing:0em;">
                                        <span id="GukfXNz5TbcHhq08" style="color:#ffffff;font-style:italic;font-weight:700;">Mary &amp;
                                            Anno</span><br></p>
                                </div>
                            </div>
                        </div>
                        <div id="KcJ5NycbnFsw3M1r" style="z-index:4;">
                            <div id="wWdS4O010we9pou2" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <div id="bgsp0gJEGIAf4Wwj" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                                    <p id="Ti8Arm2LfATOfSGu" style="color:#ffffff;font-family:Parisienne;line-height:1.25806452em;text-align:center;text-transform:none;letter-spacing:0em;">
                                        <span id="QeKNXgfFjCsRZW9v" style="color:#ffffff;font-style:italic;font-weight:700;">Weddings</span><br></p>
                                </div>
                            </div>
                        </div>
                        <div id="sPC1ioD12Lr0tXbo" style="z-index:3;">
                            <div id="CA7OIHZtztv2ybWd" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <div id="hLNfauR8xrIph3WG" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                                    <p id="VBdUbPMO8EM4aHud" style="color:#ffffff;font-family:YACgEf1HUE0-0;line-height:1.19148666em;text-align:center;text-transform:uppercase;letter-spacing:0.085em;">
                                        <span id="u9YnCnUkrL6XiJq3" style="color:#ffffff;font-weight:700;">the beginning of a happy
                                            life</span><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-2" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="lJSY2SZzrq3HM8AJ" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="yA9sEs3l4UIJPThU" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="fxBA9vYKeK0F0mur" style="z-index:0;">
                    <div id="UxR5LfKe5f8KQOO8" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="wWjGfYfudR2Ydu1h" style="width:100%;height:100%;opacity:1.0;">
                            <div id="Dp0fh920wFwwW0IW" style="background-color:#fdf0d5;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="uMTnK4homPhO0rdh" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="A0nLPbfVJd32sGfT" style="z-index:2;">
                    <div id="EqKVz9VpVMhcWbXm" style="padding-top:97.125%;transform:rotate(-121.80162099deg);">
                        <div id="ZfGTO6JJRtLtOKAq" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="VxM7YauRjmNfVkMf" style="width:100%;height:100%;opacity:1.0;">
                                <div id="lMOZGTec3Nda1uek" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="mXheb7mZht6Dt4x8" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/flower.png" alt="Line Detail Flowers" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="jhJMhuTCs89eEZXJ" style="z-index:1;">
                    <div id="zSlOLf5h6RJMFTmv" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="p4XAhybtDJ4scdLk" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="T72OCOQBA2mbtZBp" style="color:#432818;font-family:Fahkwang;line-height:1.26922589em;text-align:center;"><span id="dN9SVXzwbBlPO74y" style="color:#432818;font-weight:700;">"Love is not just about looking at each
                                    other, but looking together in the same direction." </span></p>
                            <p id="BFUlj6ptkXeCggbP" style="color:#432818;font-family:Fahkwang;line-height:1.26922589em;text-align:center;"><span id="LQ0aHz7LCfnFU0Fg" style="color:#432818;font-weight:700;">Antoine de Saint-Exupery</span><br></p>
                            <p id="gNTPYVyv2UeT7LwS" style="color:#432818;font-family:Fahkwang;line-height:1.26922589em;text-align:center;text-transform:none;letter-spacing:0em;white-space:pre;">
                                <br></p>
                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-3" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="B4wdrTt5jugP0BZl" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="nZh21jBCcodZTKI5" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="odKVnX8K4WF1ixsm" style="z-index:0;">
                    <div id="Z7u2MxmCDqIWnoGl" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="fRUU1mTGn8Qx6FOQ" style="width:100%;height:100%;opacity:1.0;">
                            <div id="pVygDwKxYBeJbjMC" style="background-color:#fdf0d5;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="VAMbB3mLTu3Nvgvg" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="Rwxt8elyM9M2WbPm" style="z-index:1;">
                    <div id="scylY8Lx7afmgumy" style="padding-top:177.80667731%;transform:rotate(0deg);">
                        <div id="qSSHXcxAtl4XVcsb" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="jLsXWXB8aLp2Sy26" style="width:100%;height:100%;opacity:1.0;">
                                <div id="PDzKz6oQ02WXlOR7" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="ht5GYE13A7ILBA4F" style="width: calc(118.66964003% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/flowerhold.png" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:46.57113301% 50%;transform:translate(-46.57113301%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ypY1aj70sIF5gHHo" style="z-index:2;">
                    <div id="OnOWSIw4f1AaZWrn" style="padding-top:97.125%;transform:rotate(-113.50331401deg);">
                        <div id="YGaEoU7rG9iwioyG" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="dkik3rs0pXMiqd06" style="width:100%;height:100%;opacity:1.0;">
                                <div id="GpMPyS1JGo8aqOlk" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="AxsNRCQ2tktkTdCx" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/flower.png" alt="Line Detail Flowers" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ZX3CgKC1B8aTGMh1" style="z-index:4;">
                    <div id="t6nJNIX3ohywxC7T" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="ZyooUThMAAQtb1JG" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="yz9JOGv2GVUt0VIN" style="color:#000000;font-family:Fahkwang;line-height:1.38281142em;text-align:center;"><span id="jiEBYInYH4lVIsSD" style="color:#000000;font-weight:700;">Wedding Details</span><br></p>
                        </div>
                    </div>
                </div>
                <div id="lvHZJatMelyL8wDx" style="z-index:5;">
                    <div id="SwVy7ak0z9vTddAD" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="vcxIhzpSgOYKYUFM" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="wy6chNIVCJmKvNzT" style="color:#000000;font-family:Fahkwang;line-height:1.25em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="XVRI6kQhaMNAd71T" style="color:#000000;font-style:italic;">We are delighted to invite you to
                                    our wedding celebration. It will be intimate, cozy and full of love. Get ready for a day of joy and
                                    fun.</span></p>
                        </div>
                    </div>
                </div>
                <div id="x5uLShjWDmXnh31l" style="z-index:7;">
                    <div id="SBkj4eol5l2SGgEb" style="padding-top:31.27753304%;transform:rotate(0deg);">
                        <div id="MSs4ZeaV1ce7Gfpw" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="TqjQLxUKSs29deLP" style="width:100%;height:100%;opacity:1.0;">
                                <div id="DPpDF2edN7wzoADW" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="SmY8rB9Pd0EE86ja" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/times.png" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="PLeoHZDLl26NGcIs" style="z-index:6;">
                    <div id="zt4wt0WPqjKVrDzi" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="ZpqcpIukkJfIhG5w" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="I7SwPhuMbznd7UGq" style="color:#000000;font-family:Fahkwang;line-height:1.26000126em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="EmgsoVtElQKLS9Le" style="color:#000000;">The Westin Surabaya</span><br></p>
                        </div>
                    </div>
                </div>
                <div id="mVdClIiukBUX0sJk" style="z-index:8;">
                    <div id="jZfn9NySzReTjrlR" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="jmYfV9GilPDeJwvq" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="JxSmPzjuekI2qyu1" style="color:#000000;font-family:Fahkwang;line-height:1.26000126em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="uYxI86KvFFQ2y9T9" style="color:#000000;">02.02.2024</span><br></p>
                        </div>
                    </div>
                </div>
                <script>
                
  // Set the date we're counting down to
  var countDownDate = new Date("Feb 02, 2024 13:00:00").getTime();

  // Update the countdown every 1 second
  var x = setInterval(function() {

    // Get the current date and time
    var now = new Date().getTime();

    // Calculate the remaining time
    var distance = countDownDate - now;

    // Calculate days, hours, minutes, and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown in the "timer" element
    document.getElementById("timer").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    // If the countdown is over, display a message
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("timer").innerHTML = "EXPIRED";
    }
  }, 1000);
                </script>
                <div id="fpwK9GhqhhWs4B3f" style="z-index:3;">
                    <div id="N0qV8QSxQxHZ8dMu" style="padding-top:41.39784946%;transform:rotate(0deg);">
                        <div id="bdV6VTjphQAFfgUk" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="un0fdMnCZ1ISOWXQ" style="width:100%;height:100%;opacity:1.0;">
                                <div id="M5ECuvHsqTACsBwB" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    {{-- <div id="NbR8GKRAVpNSlTPJ" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;"> --}}
                                        <div id="timer" style="color: #000000;font-family:Fahkwang;line-height:1.26000126em;text-align:center;text-transform:none;letter-spacing:0em;"></div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-4" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="zBBeKMuYapOPWNNL" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="vgpsCmyZjV2tsLNP" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="MLGgNtMV3BUihsfM" style="z-index:0;">
                    <div id="hiMdKaUpWclB7AWK" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="ACF5I2hA4PMjELZA" style="width:100%;height:100%;opacity:1.0;">
                            <div id="xAQ0YaIgltzC7NsG" style="background-color:#fdf0d5;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="aOPwWYcDPFRsltJ1" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="VfpQMNiClsM8qBKv" style="z-index:6;">
                    <div id="JfIfdnLpsr8WkFQp" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="hakyUnzuqDZgj3Mk" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="p3c4YhiAaImYmsI9" style="color:#000000;font-family:Fahkwang;line-height:1.2600126em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="cFbViSjTxevC5DTB" style="color:#000000;font-style:normal;font-weight:700;">Our Love
                                    Story</span></p>
                        </div>
                    </div>
                </div>
                <div id="NcrCQQ9M757Udj1V" style="z-index:7;">
                    <div id="JAlwIhsAN0y0lttF" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="fgAgseschHlrej2w" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="fnWChuc252zi2wW9" style="color:#000000;font-family:Fahkwang;line-height:1.23748453em;text-align:center;"><span id="J9kMfX1yl4jAbvpj" style="color:#000000;">In one starry night, two different hearts adrift in one
                                    love story. An unexpected meeting in a city park, they smiled at each other and the world suddenly
                                    stopped spinning. That was the start of their unforgettable journey.</span></p>
                            <p id="IG0h2Hi9ulLyPUK5" style="color:#000000;font-family:Fahkwang;line-height:1.23748453em;text-align:center;white-space:pre;">
                                <br></p>
                            <p id="MwrUlIOOcMARR61S" style="color:#000000;font-family:Fahkwang;line-height:1.23748453em;text-align:center;"><span id="a6c1vs6QVaHDFe9y" style="color:#000000;">With every step taken together, they find a longing that
                                    fills one another. Their love grows like a strong tree, recovering in fidelity and trust. Together,
                                    they sail through life's storms with a smile on their faces and hope in their hearts.</span><br></p>
                            <p id="aM8OnDcf5kBveqod" style="color:#000000;font-family:Fahkwang;line-height:1.23748453em;text-align:center;white-space:pre;">
                                <br></p>
                            <p id="FcpNHrcm3GAAFWOs" style="color:#000000;font-family:Fahkwang;line-height:1.23748453em;text-align:center;"><span id="KPECTT9YuZJchghX" style="color:#000000;">In every joke and cry they go through, this love becomes
                                    stronger. Like two inseparable stars in the night sky, they shine each other and give each other the
                                    light of life. Their togetherness is like the beautiful strains of a love song that will continue to
                                    reverberate throughout the ages.</span><br></p>
                            <p id="vyEBGRS9rSsMKslv" style="color:#000000;font-family:Fahkwang;line-height:1.23748453em;text-align:center;text-transform:none;letter-spacing:0em;white-space:pre;">
                                <br></p>
                        </div>
                    </div>
                </div>
                <div id="n6AjCQlc5ppuKkYJ" style="z-index:2;">
                    <div id="UY1JzIetfBCJDaFR" style="padding-top:51.66666667%;transform:rotate(0deg);">
                        <div id="O1YYfIBCm3rTcHuG" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="KWFl059UWhndD7D1" style="width:100%;height:100%;opacity:1.0;">
                                <div id="FsSGAqs1j90Qtrrj" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="xbQfUSRtDgH3aNgW" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/foto1.png" loading="lazy" srcset="/images/wedpro/foto1.png 600w, /images/wedpro/foto1.png 1200w" sizes="(max-width: 375px) 73.98943311vw, (min-width: 375.05px) and (max-width: 480px) 75.49942154vw, (min-width: 480.05px) and (max-width: 768px) 74.15121759vw, (min-width: 768.05px) and (max-width: 1024px) 75.83647253vw, (min-width: 1024.05px) 80.89223737vw" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bL0h2676ZAjVhavX" style="z-index:1;">
                    <div id="vgJPRbiLSPHwLT2j" style="padding-top:97.125%;transform:rotate(176.69815046deg);">
                        <div id="IX9fjh8lJOikTjbY" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="nghp1Or09ZawpmLd" style="width:100%;height:100%;opacity:1.0;">
                                <div id="jlNf9XkWKs1yLhWQ" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="NY9I57cwoxrpZNwN" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/flower.png" alt="Line Detail Flowers" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="zzlzt7yfW95x6dyd" style="z-index:4;">
                    <div id="ZrSfZNXA6ZurKzg4" style="padding-top:65.05954655%;transform:rotate(0deg);">
                        <div id="yRClN2qgB3RBx92K" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="NCRkVY1n2GNAcSJU" style="width:100%;height:100%;opacity:1.0;">
                                <div id="ol8qLWNGvYWJKkuy" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="uCHcBq0W5XPKlOhB" style="width: calc(111.31284134% * max(1, var(--scale-fill, 1))); height: calc(114.06252401% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/foto2.png" loading="lazy" srcset="/images/wedpro/foto2.png 600w, /images/wedpro/foto2.png 1500w" sizes="(max-width: 375px) 82.35974029vw, (min-width: 375.05px) and (max-width: 480px) 84.04055132vw, (min-width: 480.05px) and (max-width: 768px) 82.53982719vw, (min-width: 768.05px) and (max-width: 1024px) 84.41573235vw, (min-width: 1024.05px) 90.04344784vw" style="width:100%;height:100%;display:block;object-fit:cover;object-position:49.42750238% 45.94922677%;transform:translate(-49.42750238%, -45.94922677%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="J4TtSeXYHDRwCTBt" style="z-index:3;">
                    <div id="UMZDMtGZZfMmzQId" style="padding-top:97.125%;transform:rotate(-149.07817379deg);">
                        <div id="FYMyMjNckNdPKoOd" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="boeMUI1MFcN9jtpw" style="width:100%;height:100%;opacity:1.0;">
                                <div id="rUsxguYmWMmq0U73" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="SNutgx2pGmjJ4TDO" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/flower.png" alt="Line Detail Flowers" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="qwVmH7shTjDC25Lr" style="z-index:5;">
                    <div id="DFfxS3bQC6BzMkcd" style="padding-top:75%;transform:rotate(0deg);">
                        <div id="NOXWr2f2D3L2RBgw" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="famOhQhF6zRy52w7" style="width:100%;height:100%;opacity:1.0;">
                                <div id="YGxPiL2YHfC0nHRW" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="M8aMY7X8010d9QiX" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/foto3.png" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mjQWS2290XKNzLVe" style="z-index:8;">
                    <div id="SEXa5PwjDujpgB8q" style="padding-top:97.125%;transform:rotate(148.83260053deg);">
                        <div id="sSoihPNEba3RMiqi" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                            <div id="yZNSediq6DmbO7oN" style="width:100%;height:100%;opacity:1.0;">
                                <div id="Nurar9wKV3sRKknY" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                    <div id="waYG10BfCEgxJ6Jc" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(100% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                        <img src="/images/wedpro/flower.png" alt="Line Detail Flowers" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 50%;transform:translate(-50%, -50%) rotate(0deg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-5" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="u0WSm7q2NxaelcIl" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="LxpZvLtKGMXn9KH7" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="e9CDzLYlUq4Qp04y" style="z-index:0;">
                    <div id="K4hzX6fcVqB3oXPI" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="wGtNdNq5oIkupsb8" style="width:100%;height:100%;opacity:1.0;">
                            <div id="k6SXB41PbDnHAB82" style="background-color:#fdf0d5;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="D4i5foYLGKRMs0qe" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="cCHn6wy1xzYkajut" style="z-index:1;">
                    <div id="TgKyflyxEGwn6dRi" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="C0HNM417BjtDiZRh" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="Aa6uvgJhNDgtpW4Z" style="color:#432818;font-family:Fahkwang;line-height:1.25999937em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="SlheSFP4bDoxQsES" style="color:#432818;font-weight:700;">Wish</span><br></p>
                        </div>
                    </div>
                </div>
                <div id="X3JK3OvYQtxLA7Uc">
                    <div id="bntcLnL5hCDSQkF9" style="display:grid;position:relative;">
                        <div id="S5GboMuXBtfATAtd" style="z-index:3;">
                            <div id="M6tmkOoO303Xfjdv" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <svg id="Y1uwDoJ1k3w8lswL" viewBox="0 0 172.3931 146.1378" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:images/wedpro/wish.png&#39;);">
                                    <g id="pA44tCB1zw8rnFVr" style="transform:scale(1, 1);">
                                        <g id="jQOkGiSceeV95ZK0" style="clip-path:url(#mze2Cz6Y3ehglSta);">
                                            <clippath id="mze2Cz6Y3ehglSta">
                                                <path d="M0,0 L172.39311054,0 L172.39311054,146.13782956 L0,146.13782956 Z"></path>
                                            </clippath>
                                            <path id="FbmJmFatW633oKmi" d="M0,0 L172.39311054,0 L172.39311054,146.13782956 L0,146.13782956 Z" style="fill:none;stroke:transparent;"></path>
                                            <path id="OHBKjWBkG48p48th" d="M0,0 L172.39311054,0 L172.39311054,146.13782956 L0,146.13782956 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#fdf0d5;"></path>
                                        </g>
                                    </g>
                                </svg><svg id="suGZz02LChI9wDDq" viewBox="0 0 114.363 97.4538" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                    <g id="PaA7omayIT7YYBhA" style="transform:scale(1, 1);">
                                        <g id="S5jq8LS58g2XuFuP" style="clip-path:url(#mvl1uSw1gzhWy8fM);">
                                            <clippath id="mvl1uSw1gzhWy8fM">
                                                <path d="M0,0 L114.36303063,0 L114.36303063,97.45377322 L0,97.45377322 Z"></path>
                                            </clippath>
                                            <path id="QTQ6hgP7j5fSmP6d" d="M0,0 L114.36303063,0 L114.36303063,97.45377322 L0,97.45377322 Z" style="fill:none;stroke:transparent;"></path>
                                            <path id="ZibNYnpjTt4aCvtT" d="M0,0 L114.36303063,0 L114.36303063,97.45377322 L0,97.45377322 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#fdf0d5;"></path>
                                        </g>
                                    </g>
                                </svg><svg id="XcxcjVO3XfL2c39M" viewBox="0 0 87.5592 74.643" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                    <g id="JiLpBTZSQpw4K0aA" style="transform:scale(1, 1);">
                                        <g id="Da4IhqcwSdD40FZT" style="clip-path:url(#tFLq4qSZHsyXDkHB);">
                                            <clippath id="tFLq4qSZHsyXDkHB">
                                                <path d="M0,0 L87.55919533,0 L87.55919533,74.64304447 L0,74.64304447 Z"></path>
                                            </clippath>
                                            <path id="g4ULReEcLbzPLD9O" d="M0,0 L87.55919533,0 L87.55919533,74.64304447 L0,74.64304447 Z" style="fill:none;stroke:transparent;"></path>
                                            <path id="dMZMbffXIEs5R9C8" d="M0,0 L87.55919533,0 L87.55919533,74.64304447 L0,74.64304447 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#fdf0d5;"></path>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                        <div id="NlBFC1mpeiAJXCp9" style="display:grid;position:relative;grid-area:3 / 3 / 5 / 5;">
                            <div id="YOI98ZjHnKU0I3AW" style="z-index:2;">
                                <div id="LRF3HzLqDhJRP77U" style="padding-top:85.0722745%;transform:rotate(0deg);">
                                    <div id="m3WQv7SwPlBD7G6G" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                                        <div id="CbHIfqIh3fizlcGl" style="width:100%;height:100%;opacity:1.0;">
                                            <div id="ii0dMzbsLDrFi7tf" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                                <div id="zNLOdjvdydQHmEx3" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(101.51044371% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                                    <img src="/images/wedpro/wishes.png" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 49.25601561%;transform:translate(-50%, -49.25601561%) rotate(0deg);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="ixxSr3Go3DLtrqk7" style="z-index:4;">
                                <div id="R8xoZ6T6wboOoV0M" style="padding-top:282.53640376%;transform:rotate(0deg);">
                                    <div id="gicSNRujQ9MAUYf0" style="position:absolute;top:0px;left:0px;width:100%;height:100%;"><svg id="MAQ8l2tScsuAy5gV" viewBox="0 0 8.1524 23.0335" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                            <g id="DwhmewdQKJgCHXsu" style="transform:scale(1, 1);">
                                                <path id="FmthTbXJRUO992pw" d="M0,0 L8.15241085,0 L8.15241085,23.03352844 L0,23.03352844 Z" style="fill:#fdf4f9;opacity:1.0;"></path>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                        <div id="CHaYrcExhsvZOCQB" style="z-index:5;">
                            <div id="SLTaaqXztTOkQ9nL" style="padding-top:85.19360902%;transform:rotate(0deg);">
                                <div id="hupN7xE5FJxl2ul4" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                                    <svg id="AzSo7XCUdkwFa9dp" viewBox="0 0 213.7952 182.1398" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                        <g id="PBxl4hb2gO5MINyX" style="transform:scale(1, 1);">
                                            <g id="gGaBBAINzWpmc5pj" style="clip-path:url(#ERfzlMVMPZP1aSO4);">
                                                <clippath id="ERfzlMVMPZP1aSO4">
                                                    <path d="M11.81187149,0 L201.98329453,0 C205.11599762,0 208.12039336,1.24446146 210.33554896,3.45961706 212.55070456,5.67477266 213.79516602,8.67916839 213.79516602,11.81187149 L213.79516602,170.3279448 C213.79516601,176.85146128 208.50681102,182.13981628 201.98329453,182.13981628 L11.81187149,182.13981628 C5.288355,182.13981628 0,176.85146129 0,170.3279448 L0,11.81187149 C0,5.288355 5.288355,0 11.81187149,0 Z">
                                                    </path>
                                                </clippath>
                                                <path id="kLO7NsuelLEGR7iN" d="M11.81187149,0 L201.98329453,0 C205.11599762,0 208.12039336,1.24446146 210.33554896,3.45961706 212.55070456,5.67477266 213.79516602,8.67916839 213.79516602,11.81187149 L213.79516602,170.3279448 C213.79516601,176.85146128 208.50681102,182.13981628 201.98329453,182.13981628 L11.81187149,182.13981628 C5.288355,182.13981628 0,176.85146129 0,170.3279448 L0,11.81187149 C0,5.288355 5.288355,0 11.81187149,0 Z" style="fill:none;stroke:transparent;"></path>
                                                <path id="ZdHgtYV4wxhyIQrQ" d="M11.81187149,0 L201.98329453,0 C205.11599762,0 208.12039336,1.24446146 210.33554896,3.45961706 212.55070456,5.67477266 213.79516602,8.67916839 213.79516602,11.81187149 L213.79516602,170.3279448 C213.79516601,176.85146128 208.50681102,182.13981628 201.98329453,182.13981628 L11.81187149,182.13981628 C5.288355,182.13981628 0,176.85146129 0,170.3279448 L0,11.81187149 C0,5.288355 5.288355,0 11.81187149,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#432818;"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-6" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="LYcmvnO7HKqa7TlW" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="ZjjvzZvtBQtDD7kf" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="iKrc1r581rqqfecR" style="z-index:0;">
                    <div id="ycLh2ciCae78JEsa" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="aqyVVKRkxxD7i094" style="width:100%;height:100%;opacity:1.0;">
                            <div id="NsyxSD4cyaymssku" style="background-color:#fdf0d5;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="M1s6vblRxAVf1OxQ" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="xwUktGXUvr2go5A9" style="z-index:1;">
                    <div id="urq145hM3wtAA4zy" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="lCojG0gMPyQj9Rqz" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="wsT64EtyUgOJ9OuL" style="color:#432818;font-family:Fahkwang;line-height:1.25999937em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="pmGrCfxfdCt8BUQM" style="color:#432818;font-weight:700;">Send Your Wish</span><br></p>
                        </div>
                    </div>
                </div>
                <div id="Q6zZIkSBJ1jvUbbo" style="z-index:7;">
                    <div id="mG4dd0OogPXcwuFl" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="f3xKPEXQO21YD0h0" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="AlimSqpWid9HdVyJ" style="color:#432818;font-family:Fahkwang;line-height:1.25001563em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="RQxQObE7tDduMsnZ" style="color:#432818;">Fullname</span><br></p>
                        </div>
                    </div>
                </div>
                <div id="SPJg3ZQeArnOMsld" style="z-index:2;">
                    <div id="wmPWJw4Ua8zld7Gj" style="padding-top:9.66545247%;transform:rotate(0deg);">
                        <div id="iwZgm3OSCzImeOYF" style="position:absolute;top:0px;left:0px;width:100%;height:100%;"><svg id="nDxu2UmRcZZitMK9" viewBox="0 0 260.1951 25.149" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                <g id="fMTmRb1Hd8bymJqw" style="transform:scale(1, 1);">
                                    <g id="w7coMEuX1h5rTC6G" style="clip-path:url(#IqVaLmx3TDrqhgO2);">
                                        <clippath id="IqVaLmx3TDrqhgO2">
                                            <path d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,20.98236581 C260.19509887,23.28355233 258.32961861,25.14903259 256.02843209,25.14903259 L4.16666679,25.14903259 C1.86548026,25.14903259 0,23.28355233 0,20.98236581 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z">
                                            </path>
                                        </clippath>
                                        <path id="viRCn7nHbiXNPqwE" d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,20.98236581 C260.19509887,23.28355233 258.32961861,25.14903259 256.02843209,25.14903259 L4.16666679,25.14903259 C1.86548026,25.14903259 0,23.28355233 0,20.98236581 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z" style="fill:none;stroke:transparent;"></path>
                                        <path id="mwA0l1fq6XEI5XIV" d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,20.98236581 C260.19509887,23.28355233 258.32961861,25.14903259 256.02843209,25.14903259 L4.16666679,25.14903259 C1.86548026,25.14903259 0,23.28355233 0,20.98236581 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#041e1b;"></path>
                                    </g>
                                </g>
                            </svg></div>
                    </div>
                </div>
                <div id="A6HsG1B2dFAwnJpN" style="z-index:8;">
                    <div id="UOfKsnVAR0cX1ZlM" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="atkElnoKezwAoCow" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="zmw3dsxXFcr3D92n" style="color:#432818;font-family:Fahkwang;line-height:1.25001563em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="dJUOc8VsORj1ZwZI" style="color:#432818;">Wish</span><br></p>
                        </div>
                    </div>
                </div>
                <div id="whXblURxyMGO68qO" style="z-index:6;">
                    <div id="X8cfVshzAPdsqTOn" style="padding-top:22.70460209%;transform:rotate(0deg);">
                        <div id="TqJluBHzTnUyw0xS" style="position:absolute;top:0px;left:0px;width:100%;height:100%;"><svg id="cJyZJdwcJ0PYu2gU" viewBox="0 0 260.1951 59.0763" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                <g id="lbbGDMvvR7TrA0k5" style="transform:scale(1, 1);">
                                    <g id="MPvse0FIHJYDhuaF" style="clip-path:url(#mctOXk7o9D7qsfVr);">
                                        <clippath id="mctOXk7o9D7qsfVr">
                                            <path d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,54.90959283 C260.19509887,57.21077935 258.32961861,59.07625961 256.02843209,59.07625961 L4.16666679,59.07625961 C1.86548026,59.07625961 0,57.21077935 0,54.90959283 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z">
                                            </path>
                                        </clippath>
                                        <path id="JwCiwLoyB0QBTZUn" d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,54.90959283 C260.19509887,57.21077935 258.32961861,59.07625961 256.02843209,59.07625961 L4.16666679,59.07625961 C1.86548026,59.07625961 0,57.21077935 0,54.90959283 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z" style="fill:none;stroke:transparent;"></path>
                                        <path id="qQOI8XI1QcEwoDux" d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,54.90959283 C260.19509887,57.21077935 258.32961861,59.07625961 256.02843209,59.07625961 L4.16666679,59.07625961 C1.86548026,59.07625961 0,57.21077935 0,54.90959283 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#041e1b;"></path>
                                    </g>
                                </g>
                            </svg></div>
                    </div>
                </div>
                <div id="bir1pKDCPzkcsxfC">
                    <div id="yHJjqhcl59BFaOxt" style="display:grid;position:relative;">
                        <div id="WcpqOdfOuCPIhCAz" style="display:grid;position:relative;grid-area:2 / 2 / 3 / 3;">
                            <div id="j4W3ikf4mtW6tDNd" style="z-index:4;">
                                <div id="l1KkbBTvF1CfhLa1" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                    <svg id="jVZDeiGE4G1AT8gk" viewBox="0 0 260.1951 25.149" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                        <g id="NrnNe4pTcSvHJK4q" style="transform:scale(1, 1);">
                                            <g id="PtTFmRF5GHKFfSYB" style="clip-path:url(#oXt0X1vqhBWRbCJD);">
                                                <clippath id="oXt0X1vqhBWRbCJD">
                                                    <path d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,20.98236581 C260.19509887,23.28355233 258.32961861,25.14903259 256.02843209,25.14903259 L4.16666679,25.14903259 C1.86548026,25.14903259 0,23.28355233 0,20.98236581 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z">
                                                    </path>
                                                </clippath>
                                                <path id="UKRN2ARoeHN8I4Bo" d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,20.98236581 C260.19509887,23.28355233 258.32961861,25.14903259 256.02843209,25.14903259 L4.16666679,25.14903259 C1.86548026,25.14903259 0,23.28355233 0,20.98236581 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z" style="fill:#432818;opacity:1.0;"></path>
                                                <path id="Of6Xq7Xvaqs71S1x" d="M4.16666679,0 L256.02843209,0 C258.32961862,0 260.19509888,1.86548026 260.19509888,4.16666679 L260.19509888,20.98236581 C260.19509887,23.28355233 258.32961861,25.14903259 256.02843209,25.14903259 L4.16666679,25.14903259 C1.86548026,25.14903259 0,23.28355233 0,20.98236581 L0,4.16666679 C0,1.86548026 1.86548027,0 4.16666679,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#041e1b;"></path>
                                            </g>
                                        </g>
                                    </svg><svg id="QuoCEas7uzCNE74o" viewBox="0 0 195.5556 26.9107" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                        <g id="gXyJ6SBjuUBAEXoH" style="transform:scale(1, 1);">
                                            <g id="HeODxZcc0hh1RKRW" style="clip-path:url(#xMA49nRhbVKV4FUz);">
                                                <clippath id="xMA49nRhbVKV4FUz">
                                                    <path d="M3.13155407,0 L192.42400319,0 C194.15351274,0 195.55555725,1.40204452 195.55555725,3.13155407 L195.55555725,23.77919346 C195.55555725,25.50870301 194.15351274,26.91074753 192.42400319,26.91074753 L3.13155407,26.91074753 C1.40204451,26.91074753 0,25.50870301 0,23.77919346 L0,3.13155407 C0,1.40204451 1.40204452,0 3.13155407,0 Z">
                                                    </path>
                                                </clippath>
                                                <path id="gcflkixcBQ2kKX5a" d="M3.13155407,0 L192.42400319,0 C194.15351274,0 195.55555725,1.40204452 195.55555725,3.13155407 L195.55555725,23.77919346 C195.55555725,25.50870301 194.15351274,26.91074753 192.42400319,26.91074753 L3.13155407,26.91074753 C1.40204451,26.91074753 0,25.50870301 0,23.77919346 L0,3.13155407 C0,1.40204451 1.40204452,0 3.13155407,0 Z" style="fill:#432818;opacity:1.0;"></path>
                                                <path id="Q6RzlxJGFhLOGyiD" d="M3.13155407,0 L192.42400319,0 C194.15351274,0 195.55555725,1.40204452 195.55555725,3.13155407 L195.55555725,23.77919346 C195.55555725,25.50870301 194.15351274,26.91074753 192.42400319,26.91074753 L3.13155407,26.91074753 C1.40204451,26.91074753 0,25.50870301 0,23.77919346 L0,3.13155407 C0,1.40204451 1.40204452,0 3.13155407,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#041e1b;"></path>
                                            </g>
                                        </g>
                                    </svg><svg id="GxmHXrVU2GQqnkY3" viewBox="0 0 124.4444 18.7637" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                        <g id="bLcMxQawf4u9Vhgp" style="transform:scale(1, 1);">
                                            <g id="YnQa2jeHiwCCPgZ0" style="clip-path:url(#UmpbPqCPCe8YVwCj);">
                                                <clippath id="UmpbPqCPCe8YVwCj">
                                                    <path d="M1.99280597,0 L122.45163678,0 C123.55223313,0 124.44444275,0.89220962 124.44444275,1.99280597 L124.44444275,16.77085637 C124.44444275,17.87145272 123.55223313,18.76366234 122.45163678,18.76366234 L1.99280597,18.76366234 C0.89220962,18.76366234 0,17.87145272 0,16.77085637 L0,1.99280597 C0,0.89220962 0.89220962,0 1.99280597,0 Z">
                                                    </path>
                                                </clippath>
                                                <path id="Byd2AJn7pgG4iwM4" d="M1.99280597,0 L122.45163678,0 C123.55223313,0 124.44444275,0.89220962 124.44444275,1.99280597 L124.44444275,16.77085637 C124.44444275,17.87145272 123.55223313,18.76366234 122.45163678,18.76366234 L1.99280597,18.76366234 C0.89220962,18.76366234 0,17.87145272 0,16.77085637 L0,1.99280597 C0,0.89220962 0.89220962,0 1.99280597,0 Z" style="fill:#432818;opacity:1.0;"></path>
                                                <path id="Rxnnwr131gssfPrQ" d="M1.99280597,0 L122.45163678,0 C123.55223313,0 124.44444275,0.89220962 124.44444275,1.99280597 L124.44444275,16.77085637 C124.44444275,17.87145272 123.55223313,18.76366234 122.45163678,18.76366234 L1.99280597,18.76366234 C0.89220962,18.76366234 0,17.87145272 0,16.77085637 L0,1.99280597 C0,0.89220962 0.89220962,0 1.99280597,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#041e1b;"></path>
                                            </g>
                                        </g>
                                    </svg><svg id="BdioNun72qntPUKS" viewBox="0 0 95.2778 16.1715" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                        <g id="L5ZOf58nKywfWo7m" style="transform:scale(1, 1);">
                                            <g id="InEJ8fMIXkIQTQ16" style="clip-path:url(#nZoXt4vMjS1Z4hjV);">
                                                <clippath id="nZoXt4vMjS1Z4hjV">
                                                    <path d="M1.52574297,0 L93.75203566,0 C94.15668785,0 94.54476655,0.16074746 94.83089886,0.44687977 95.11703117,0.73301208 95.27777863,1.12109077 95.27777863,1.52574297 L95.27777863,14.64579061 C95.27777862,15.48843519 94.59468023,16.17153358 93.75203566,16.17153358 L1.52574297,16.17153358 C1.12109077,16.17153358 0.73301208,16.01078613 0.44687977,15.72465381 0.16074746,15.4385215 0,15.05044281 0,14.64579061 L0,1.52574297 C0,1.12109078 0.16074746,0.73301208 0.44687977,0.44687977 0.73301208,0.16074746 1.12109078,0 1.52574297,0 Z">
                                                    </path>
                                                </clippath>
                                                <path id="c5wR1IIh7uagA1EF" d="M1.52574297,0 L93.75203566,0 C94.15668785,0 94.54476655,0.16074746 94.83089886,0.44687977 95.11703117,0.73301208 95.27777863,1.12109077 95.27777863,1.52574297 L95.27777863,14.64579061 C95.27777862,15.48843519 94.59468023,16.17153358 93.75203566,16.17153358 L1.52574297,16.17153358 C1.12109077,16.17153358 0.73301208,16.01078613 0.44687977,15.72465381 0.16074746,15.4385215 0,15.05044281 0,14.64579061 L0,1.52574297 C0,1.12109078 0.16074746,0.73301208 0.44687977,0.44687977 0.73301208,0.16074746 1.12109078,0 1.52574297,0 Z" style="fill:#432818;opacity:1.0;"></path>
                                                <path id="GUI2nDKYscvRn4rB" d="M1.52574297,0 L93.75203566,0 C94.15668785,0 94.54476655,0.16074746 94.83089886,0.44687977 95.11703117,0.73301208 95.27777863,1.12109077 95.27777863,1.52574297 L95.27777863,14.64579061 C95.27777862,15.48843519 94.59468023,16.17153358 93.75203566,16.17153358 L1.52574297,16.17153358 C1.12109077,16.17153358 0.73301208,16.01078613 0.44687977,15.72465381 0.16074746,15.4385215 0,15.05044281 0,14.64579061 L0,1.52574297 C0,1.12109078 0.16074746,0.73301208 0.44687977,0.44687977 0.73301208,0.16074746 1.12109078,0 1.52574297,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#041e1b;"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div id="e9TLtaudP58i4v5V" style="z-index:5;">
                                <div id="KM52kHTFxONOcLCL" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                    <div id="mJJ8viZ01zI3wVEs" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:center;width:100%;height:100%;">
                                        <p id="nwW7tM9AUbLjLJ2J" style="color:#ffffff;font-family:Fahkwang;line-height:1.33696815em;text-align:center;text-transform:none;letter-spacing:0.05em;">
                                            <span id="fEZeRCC1uDTOT3rB" style="color:#ffffff;">Send</span><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-7" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="u4M1SFGXXcA1Wb1Q" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="xcAe570DKLorNuTq" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="ESnb1meeW3NRJdvk" style="z-index:0;">
                    <div id="hLRU5kbXYdummf7l" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="mNmPYq9bYIxpTHNo" style="width:100%;height:100%;opacity:1.0;">
                            <div id="kdg381f8PNzlMvSu" style="background-color:#fdf0d5;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="EQ3HfzQFWAFGf3Ug" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="Rqnk162o93so00Ed" style="z-index:1;">
                    <div id="LIIdnq7A4yIV9WA7" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="SV2rVDiXPLfUobhs" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="xmlXq2x6BltfkPGl" style="color:#432818;font-family:Fahkwang;line-height:1.25999937em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="w9L3ZTHAXjGDKnOV" style="color:#432818;font-weight:700;">RSVP</span><br></p>
                        </div>
                    </div>
                </div>
                <div id="mfb2LzwBYTEPGbft" style="z-index:2;">
                    <div id="wkyWzHmQLGODZF4G" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="UZwyOzevSs9SwJfu" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                            <p id="HaF4e3QQHyENbICc" style="color:#432818;font-family:Fahkwang;line-height:1.25996724em;text-align:center;text-transform:none;letter-spacing:0em;">
                                <span id="QWmdVwL7TK7ziGki" style="color:#432818;font-style:normal;">Our celebration wouldn't be the
                                    same without you. Please let us know if you plan to attend by click this button before </span></p>
                        </div>
                    </div>
                </div>
                <div id="MnCRcFbCCxqu2UQB">
                    <div id="mq44vf4txhmmlWLM" style="display:grid;position:relative;">
                        <div id="o8mQOhOGE5bqtbqD" style="display:grid;position:relative;grid-area:2 / 2 / 3 / 3;">
                            <div id="gyZnzcePIlk3uUfA" style="z-index:4;">
                                <div id="YFpPJXphjFk6Jn6D" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                    <svg id="JQmZ7nYqgirzzXBg" viewBox="0 0 86.174 25.149" preserveAspectRatio="none" style="width:100%;height:100%;opacity:1.0;overflow:hidden;position:absolute;top:0%;left:0%;background:url(&#39;data:image/png;base64,&#39;);">
                                        <g id="lnCMVQZzGZPTbz6o" style="transform:scale(1, 1);">
                                            <g id="d9BU51XcleNgXxSk" style="clip-path:url(#JRfqCC5CoF6wtd1L);">
                                                <clippath id="JRfqCC5CoF6wtd1L">
                                                    <path d="M4.16666508,0 L82.00736904,0 C84.30855462,0 86.17403412,1.8654795 86.17403412,4.16666508 L86.17403412,20.98236751 C86.17403412,23.28355309 84.30855462,25.14903259 82.00736904,25.14903259 L4.16666508,25.14903259 C3.06159679,25.14903259 2.00178922,24.71004592 1.22038795,23.92864464 0.43898667,23.14724336 0,22.0874358 0,20.98236751 L0,4.16666508 C0,1.8654795 1.8654795,0 4.16666508,0 Z">
                                                    </path>
                                                </clippath>
                                                <path id="ads6De4FuGAATJ6m" d="M4.16666508,0 L82.00736904,0 C84.30855462,0 86.17403412,1.8654795 86.17403412,4.16666508 L86.17403412,20.98236751 C86.17403412,23.28355309 84.30855462,25.14903259 82.00736904,25.14903259 L4.16666508,25.14903259 C3.06159679,25.14903259 2.00178922,24.71004592 1.22038795,23.92864464 0.43898667,23.14724336 0,22.0874358 0,20.98236751 L0,4.16666508 C0,1.8654795 1.8654795,0 4.16666508,0 Z" style="fill:#432818;opacity:1.0;"></path>
                                                <path id="D6cQJ2TArzOpbjf6" d="M4.16666508,0 L82.00736904,0 C84.30855462,0 86.17403412,1.8654795 86.17403412,4.16666508 L86.17403412,20.98236751 C86.17403412,23.28355309 84.30855462,25.14903259 82.00736904,25.14903259 L4.16666508,25.14903259 C3.06159679,25.14903259 2.00178922,24.71004592 1.22038795,23.92864464 0.43898667,23.14724336 0,22.0874358 0,20.98236751 L0,4.16666508 C0,1.8654795 1.8654795,0 4.16666508,0 Z" style="fill:none;stroke-linecap:butt;vector-effect:non-scaling-stroke;stroke:#041e1b;"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div id="qvbaCEr2Mi5YD0iT" style="z-index:5;">
                                <div href="#myModal" class="button primary scrolly" id="openModalBtn" id="KAd3KBNvbeijwNcl" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                    <div id="ycxgXjzpvQgpBxHm" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:center;width:100%;height:100%; cursor: pointer; user-select: none;" role="button" tabindex="0">
                                        {{-- <a href="#myModal" class="button primary scrolly" id="openModalBtn"> --}}
                                            <p id="cXemX1TvO74XaxQp" style="color:#ffffff;font-family:Fahkwang;line-height:1.33696815em;text-align:center;text-transform:none;letter-spacing:0.05em;">
                                                <span id="r73CODNxbMAjXl7Q" style="color:#ffffff;">RSVP</span><br></p>
                                        {{-- </a> --}}
                                    </div>
                                </div>
                            </div>


                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" id="closeModalBtn">&times;</span>
                                    <form id="rsvpForm" action="\../php/main.php" method="post">
                                        <label for="name">Your Name:</label>
                                        <input type="text" id="Nama" name="Nama" required>
                                        <br>
                                        <label for="response">Will you be attending?</label>
                                        <select id="Kedatangan" name="Kedatangan" required>
                                            <option value="yes">Yes, I'd like to come</option>
                                            <option value="no">Sorry, I can't</option>
                                        </select>
                                        <br>
                                        <button type="submit">Submit RSVP</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-8" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="BzBcqD4Yr7xd8EF2" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="GkxQKSBa0PVCIRi3" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="oIJtFVtwx6ZdOrM5" style="z-index:0;">
                    <div id="JZ6MGw349Du2RQgF" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="o89gD2EXH7Cu5BjL" style="width:100%;height:100%;opacity:1.0;">
                            <div id="rf5R4S1a5sd6kwfU" style="background-color:#432818;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lSDfcM1H8DDEN5MW" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="stRP7HSkZfPmvmkU" style="z-index:1;">
                    <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                        <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=The+Westin+Surabaya,+Jl.+Raya+Lontar,+Puncak+Indah,+Surabaya,+East+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div><a class="google-map-code-enabler" href="https://www.bootstrapskins.com/themes" id="authorize-maps-data">premium bootstrap themes</a>
                        <style>
                            #g-mapdisplay img {
                                max-height: none;
                                max-width: none !important;
                                background: none !important;
                            }

                        </style>
                    </div>
                </div>
                <div id="HyXmRTxD9wrLjBeV">
                    <div id="fKXGPBmgDSLVWFBk" style="display:grid;position:relative;">
                        <div id="uUDFLrausy6eeV4M" style="z-index:3;">
                            <div id="DRIOlaZw25MTuYd9" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <div id="Z1vPWWFcyrWWxtsl" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                                    <p id="bojKISauu85lhyi7" style="color:#ffffff;font-family:Fahkwang;line-height:1.25999937em;text-align:center;text-transform:none;letter-spacing:0em;">
                                        <span id="tuEFdBAzyD5KnuYp" style="color:#ffffff;font-weight:700;">Location</span><br></p>
                                </div>
                            </div>
                        </div>
                        <div id="IUkVqkA1nWldoyDi" style="z-index:4;">
                            <div id="aD1W61EFYBQXZdZi" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <div id="CANO73P3mMyA54PE" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                                    <p id="k3Pi0RFQVjBuxkcy" style="color:#ffffff;font-family:Fahkwang;line-height:1.2599937em;text-align:center;text-transform:none;letter-spacing:0em;">
                                        <span id="Tk9vmuR8CxxwC6Z1" style="color:#ffffff;">The Westin Surabaya</span><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><a id="page-9" aria-hidden="true" style="visibility:hidden;"></a>
        <section id="hCF9VE8PoZ3oj4b6" style="position:relative;overflow:hidden;display:grid;align-items:center;grid-template-columns:auto 100rem auto;z-index:0;margin-top:-1px;">
            <div id="LFU5maRn85Xj9Unt" style="grid-area:1 / 1 / 2 / 4;display:grid;position:absolute;min-height:100%;min-width:100%;">
                <div id="z8lQLUHoXUSdGxI8" style="z-index:0;">
                    <div id="g7sbNwGZz7dLH5YA" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                        <div id="wal6woXi37Lrc83N" style="width:100%;height:100%;opacity:1.0;">
                            <div id="NYvbOpFuRddxUj7w" style="background-color:#432818;opacity:1.0;transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Zw1Dq8TwmqFupTJL" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
                <div id="yYZ1HJezDh8sG7a8">
                    <div id="CxY0otka5YJh5kXJ" style="display:grid;position:relative;grid-area:2 / 2 / 3 / 3;">
                        <div id="XUGkWJ7mA8afA1zH" style="z-index:2;">
                            <div id="fXv2pJTrbbqhzOuU" style="box-sizing:border-box;width:100%;height:100%;transform:rotate(0deg);">
                                <div id="CHWI4rqCbbNgjLAB" style="opacity:1.0;display:flex;box-sizing:border-box;flex-direction:column;justify-content:flex-start;width:100%;height:100%;">
                                    <p id="vF4Qom3iAspcwBfB" style="color:#ffffff;font-family:Fahkwang;line-height:1.2599937em;text-align:center;text-transform:none;letter-spacing:0em;">
                                        <span id="aYBr67K4z7qNr326" style="color:#ffffff;">Made by:</span><br></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div id="iySGwIKzF7idJaB0" style="z-index:3;">
                            <div id="ReSVQaVxq6FQQVv9" style="padding-top:28.04151534%;transform:rotate(0deg);">
                                <div id="lJXgl4A0xtBq6F8X" style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
                                    <div id="RKYJnepPmtHt0XAK" style="width:100%;height:100%;opacity:1.0;">
                                        <div id="JGb2ExIIysqFplJu" style="transform:scale(1, 1);width:100%;height:100%;overflow:hidden;position:relative;">
                                            <div id="LwYxJSFPW7ArT8zC" style="width: calc(100% * max(1, var(--scale-fill, 1))); height: calc(214.36753863% / min(1, var(--scale-fill, 1))); position: absolute; top: 50%; left: 50%; opacity: 1; animation: auto ease 0s 1 normal none running none;">
                                                <img src="/images/logo.png" width="100" height="100" loading="lazy" style="width:100%;height:100%;display:block;object-fit:cover;object-position:50% 49.84541024%;transform:translate(-50%, -49.84541024%) rotate(0deg);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="./Salinan dari Invitersproduk_files/939898b427480d700449229ff00dbb8a6f9f77442b532f697866e6914ab8843a.js.download" async="" nonce=""></script>
    </div>
    <script nonce="">
        const lang = navigator.language ? navigator.language : 'en';
        const loaded = new Promise((resolve) => {
            if (document.readyState === 'loading') {
                window.addEventListener('DOMContentLoaded', resolve);
                return;
            }
            resolve();
        })
        Promise.all([fetch('_footer?lang=' + encodeURIComponent(lang)), loaded]).then(([response]) => {
            if (response.status !== 200) {
                return;
            }
            response.text().then(footerStr => {
                const div = document.createElement('div');
                div.innerHTML = footerStr;
                for (const child of [...div.children]) {
                    if (child.tagName.toLowerCase() !== 'script') {
                        document.body.append(child);
                    }
                }

                (() => {
                    ! function(e) {
                        "use strict";
                        const t = document.getElementById("modal_backdrop")
                            , n = document.getElementById("modal")
                            , o = document.getElementById("captcha-form")
                            , c = document.getElementById("report_button")
                            , d = document.getElementById("form_report")
                            , s = document.getElementById("form_cancel")
                            , l = document.getElementById("form_submit_reason")
                            , a = document.getElementById("form_go_back")
                            , m = document.getElementById("form_submit_captcha")
                            , r = document.getElementById("form_close")
                            , i = document.getElementById("report_reason_0")
                            , u = document.getElementById("error_message")
                            , p = document.getElementById("error_message_captcha")
                            , _ = new Map;
                        _.set(0, document.getElementById("form_step_terms")), _.set(1, document.getElementById(
                            "form_step_report_reason")), _.set(4, document.getElementById("form_step_report_other"));
                        const y = document.getElementById("form_step_report_ip");
                        y && _.set(5, y), _.set(2, document.getElementById("form_step_captcha")), _.set(3, document
                            .getElementById("form_step_success"));
                        const E = document.getElementById("report_reason_4")
                            , f = document.getElementById("form_close_ip")
                            , g = document.getElementById("form_go_back_ip")
                            , h = document.getElementById("report_reason_other")
                            , I = document.getElementById("form_close_other")
                            , k = document.getElementById("form_go_back_other");

                        function v() {
                            t.classList.remove("active"), n.classList.remove("active"), c.classList.remove("active"), c
                                .focus()
                        }

                        function B(e) {
                            _.forEach(((t, n) => {
                                n === e ? (t.style.display = "block", A(t)) : t.style.display = "none"
                            }))
                        }
                        let w, b = !1;
                        const T = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => w : () => {
                            const e = o.elements.namedItem("g-recaptcha-response");
                            return null == e ? void 0 : e.value
                        };
                        t.onclick = v, s.onclick = v, r.onclick = v, f && (f.onclick = v), I.onclick = v, c.onclick =
                            function() {
                                _.forEach(((e, t) => {
                                        e.style.display = 0 === t ? "block" : "none"
                                    })), t.classList.add("active"), n.classList.add("active"), c.classList.add("active"), i
                                    .checked = !0, setTimeout((() => {
                                        A(_.get(0))
                                    }), 350)
                            }, d.onclick = () => B(1), l.onclick = () => {
                                null != y && E.checked ? B(5) : h.checked ? B(4) : (B(2), function() {
                                    if (b) return;
                                    const e = document.createElement("script");
                                    e.src = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ?
                                        "https://cstaticdun.126.net/load.min.js" : "https://www.google.com/recaptcha/api.js"
                                        , e.async = !0, e.defer = !0, document.head.appendChild(e), b = !0, e.onload =
                                        "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => {
                                            var e;
                                            null === (e = window.initNECaptcha) || void 0 === e || e.call(window, {
                                                captchaId: window.C_CAPTCHA_KEY
                                                , element: "#netease-captcha"
                                                , protocol: "https"
                                                , width: "auto"
                                                , onVerify: (e, t) => {
                                                    w = t.validate
                                                }
                                            })
                                        } : () => {}
                                }())
                            }, a.onclick = () => B(1), g && (g.onclick = () => B(1)), k.onclick = () => B(1), o
                            .addEventListener("submit", (function(e) {
                                e.preventDefault(), u.style.display = "none", p.style.display = "none";
                                const t = function() {
                                        let e = "";
                                        const t = document.getElementsByName("report_reason");
                                        for (let n = 0; n < t.length; n++) {
                                            const o = t[n];
                                            o.checked && (e = o.value)
                                        }
                                        return e
                                    }()
                                    , n = T();
                                if (!n) return void(p.style.display = "block");
                                const o = {
                                        reason: t
                                        , challenge: n
                                    }
                                    , c = window.location.origin + window.location.pathname + "/_api/report";
                                m.classList.add("loading"), fetch(c, {
                                    method: "POST"
                                    , body: JSON.stringify(o)
                                    , headers: {
                                        "Content-Type": "application/json; charset=utf-8"
                                    }
                                }).then((e => {
                                    m.classList.remove("loading"), e.ok ? B(3) : u.style.display = "block"
                                }))
                            }));
                        const C = new Map
                            , A = e => {
                                const t = C.get(e);
                                null != t && document.removeEventListener("keydown", t);
                                const n = e.querySelectorAll(
                                        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])')
                                    , o = e
                                    , c = n[n.length - 1]
                                    , d = function(e) {
                                        ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === o && (c
                                            .focus(), e.preventDefault()) : document.activeElement === c && (o.focus(), e
                                            .preventDefault()))
                                    };
                                C.set(e, d), document.addEventListener("keydown", d), o.focus()
                            };
                        e.keepFocus = A, Object.defineProperty(e, "__esModule", {
                            value: !0
                        })
                    }({});
                })();
                window.dispatchEvent(new Event('resize'));
            });
        });

    </script>
    <div id="volume-booster-visusalizer">
        <div class="sound">
            <div class="sound-icon"></div>
            <div class="sound-wave sound-wave_one"></div>
            <div class="sound-wave sound-wave_two"></div>
            <div class="sound-wave sound-wave_three"></div>
        </div>
        <div class="segments-box">
            <div data-range="1-20" class="segment"><span></span></div>
            <div data-range="21-40" class="segment"><span></span></div>
            <div data-range="41-60" class="segment"><span></span></div>
            <div data-range="61-80" class="segment"><span></span></div>
            <div data-range="81-100" class="segment"><span></span></div>
        </div>
    </div>


    <script src="\../js/jquery.min.js"></script>
    <script src="\../js/jquery.scrollex.min.js"></script>
    <script src="\../js/jquery.scrolly.min.js"></script>
    <script src="\../js/browser.min.js"></script>
    <script src="\../js/breakpoints.min.js"></script>
    <script src="\../js/util.js"></script>
    <script src="\../js/main.js"></script>
</body>

</html>
