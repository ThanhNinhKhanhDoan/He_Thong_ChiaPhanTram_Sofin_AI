class Common {
    get options() {
        return {}
    }
    constructor(e = {}) {
        this.settings = Object.assign(this.options, e), this._init()
    }
    _init() {
        this._initScrolls(), this._initModalPadding(), this._initTooltips(), this._initPopovers(), this._initToasts(), this._initDropdownAsSelect(), this._initDropdownSubMenu(), this._initClamp(), this._initScrollspy(), this._setQuillDefaults(), this._setDatePickerDefaults(), this._setValidationDefaults(), this._setNotifyDefaults(), this._setSelect2Defaults(), this._momentWarnings()
    }
    _initTooltips() {
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function(e) {
            return new bootstrap.Tooltip(e, {
                delay: {
                    show: 1e3,
                    hide: 0
                }
            })
        })), [].slice.call(document.querySelectorAll('.no-delay[data-bs-toggle="tooltip"][data-bs-delay="0"]')).map((function(e) {
            return new bootstrap.Tooltip(e, {
                delay: {
                    show: 0,
                    hide: 0
                }
            })
        }))
    }
    _initPopovers() {
        [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function(e) {
            return new bootstrap.Popover(e)
        }))
    }
    _initToasts() {
        [].slice.call(document.querySelectorAll(".toast")).map((function(e) {
            return new bootstrap.Toast(e)
        }))
    }
    _initDropdownSubMenu() {
        jQuery().submenupicker && jQuery("[data-submenu]").submenupicker()
    }
    _initClamp() {
        "undefined" != typeof $clamp && (document.querySelectorAll(".clamp").forEach((e => {
            $clamp(e, {
                clamp: "auto"
            })
        })), document.querySelectorAll(".clamp-line").forEach((e => {
            const t = e.getAttribute("data-line");
            t && $clamp(e, {
                clamp: parseInt(t)
            })
        })))
    }
    _initScrollspy() {
        if ("undefined" != typeof ScrollSpy) {
            new ScrollSpy
        }
    }
    _initScrolls() {
        if ("undefined" != typeof OverlayScrollbars) {
            OverlayScrollbars(document.querySelectorAll(".scroll"), {
                scrollbars: {
                    autoHide: "leave",
                    autoHideDelay: 600
                },
                overflowBehavior: {
                    x: "hidden",
                    y: "scroll"
                }
            }), OverlayScrollbars(document.querySelectorAll(".scroll-horizontal"), {
                scrollbars: {
                    autoHide: "leave",
                    autoHideDelay: 600
                },
                overflowBehavior: {
                    x: "scroll",
                    y: "hidden"
                }
            }), OverlayScrollbars(document.querySelectorAll(".data-table-rows .table-container"), {
                overflowBehavior: {
                    x: "scroll",
                    y: "hidden"
                }
            }), OverlayScrollbars(document.querySelectorAll(".scroll-track-visible"), {
                overflowBehavior: {
                    x: "hidden",
                    y: "scroll"
                }
            }), OverlayScrollbars(document.querySelectorAll(".scroll-horizontal-track-visible"), {
                overflowBehavior: {
                    x: "scroll",
                    y: "hidden"
                }
            }), document.querySelectorAll(".scroll-by-count").forEach((e => {
                if ("undefined" == typeof ScrollbarByCount) return void console.log("ScrollbarByCount is undefined!");
                new ScrollbarByCount(e)
            }))
        }
    }
    _initDropdownAsSelect() {
        document.querySelectorAll(".dropdown-as-select .dropdown-menu a").forEach((e => {
            e.addEventListener("click", (e => {
                e.preventDefault();
                const t = e.currentTarget,
                    o = t.textContent,
                    n = t.closest(".dropdown-as-select");
                let a = "";
                n.getAttribute("data-childSelector") && (a = " " + n.getAttribute("data-childSelector")), n.querySelector('[data-bs-toggle="dropdown"]' + a).innerHTML = o, n.querySelectorAll("a").forEach((e => {
                    e.classList.remove("active")
                })), "false" !== n.getAttribute("data-setActive") && t.classList.add("active")
            }))
        })), document.querySelectorAll(".dropdown-as-select").forEach((e => {
            let t = "";
            e.getAttribute("data-childSelector") && (t = " " + e.getAttribute("data-childSelector")), e.querySelector('[data-bs-toggle="dropdown"]' + t).innerHTML = e.querySelector(".dropdown-menu a.active").textContent
        }))
    }
    _initModalPadding() {
        document.body.insertAdjacentHTML("afterbegin", '<div id="paddingModal" class="modal"> <div class="modal-dialog d-none"><div class="modal-content"></div></div> </div>');
        const e = document.getElementById("paddingModal"),
            t = new bootstrap.Modal(e, {
                backdrop: !1
            });
        e.addEventListener("shown.bs.modal", (function(e) {
            const o = document.body.style.paddingRight;
            document.body.setAttribute("data-bs-padding", o), t.hide()
        })), t.show(), document.querySelectorAll(".modal").forEach((e => {
            e.addEventListener("show.bs.modal", (function(e) {
                const t = document.body.getAttribute("data-bs-padding");
                document.querySelector('html[data-placement="horizontal"] .nav-container .nav-content') && (document.querySelector('html[data-placement="horizontal"] .nav-container .nav-content').style.paddingRight = t)
            })), e.addEventListener("hidden.bs.modal", (function(e) {
                document.querySelector(".nav-container .nav-content") && (document.querySelector(".nav-container .nav-content").style.paddingRight = 0)
            }))
        })), document.querySelectorAll(".offcanvas").forEach((e => {
            e.addEventListener("show.bs.offcanvas", (function(e) {
                const t = document.body.getAttribute("data-bs-padding");
                document.querySelector('html[data-placement="horizontal"] .nav-container .nav-content') && (document.querySelector('html[data-placement="horizontal"] .nav-container .nav-content').style.paddingRight = t)
            })), e.addEventListener("hidden.bs.offcanvas", (function(e) {
                document.querySelector(".nav-container .nav-content") && (document.querySelector(".nav-container .nav-content").style.paddingRight = 0)
            }))
        }))
    }
    _setQuillDefaults() {
        "undefined" != typeof Quill && Quill.register("modules/active", Active)
    }
    _setDatePickerDefaults() {
        jQuery().datepicker && (jQuery.fn.datepicker.defaults.templates = {
            leftArrow: '<i class="cs-chevron-left"></i>',
            rightArrow: '<i class="cs-chevron-right"></i>'
        })
    }
    _setNotifyDefaults() {
        jQuery.notify && jQuery.notifyDefaults({
            template: '<div data-notify="container" class="col-10 col-sm-6 col-xl-3 alert  alert-{0} " role="alert"><button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
        })
    }
    _setSelect2Defaults() {
        jQuery.fn.select2 && jQuery.fn.select2.defaults.set("theme", "bootstrap4")
    }
    _setValidationDefaults() {
        jQuery().validate && (jQuery.validator.setDefaults({
            ignore: [],
            errorElement: "div",
            errorPlacement: function(e, t) {
                if (-1 != t.attr("class").indexOf("form-check-input") ? e.insertAfter(t.parent()) : e.insertAfter(t), t.parents(".tooltip-label-end").length > 0)
                    if (t.parents(".form-group").find(".form-label").length > 0) {
                        let o = Math.round(t.parents(".form-group").find(".form-label").width()) + 10;
                        jQuery(e).css("left", o)
                    } else {
                        let o = Math.round(t.parents(".form-group").find("label").width()) + 40;
                        jQuery(e).css("left", o)
                    }
            }
        }), jQuery.validator.addMethod("regex", (function(e, t, o) {
            return this.optional(t) || o.test(e)
        }), "Please check your input."))
    }
    _momentWarnings() {
        "undefined" != typeof moment && (moment.suppressDeprecationWarnings = !0)
    }
}