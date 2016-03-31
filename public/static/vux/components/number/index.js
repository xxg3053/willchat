!function (e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.vuxNumber = t() : e.vuxNumber = t()
}(this, function () {
    return function (e) {
        function t(s) {
            if (i[s])return i[s].exports;
            var l = i[s] = {exports: {}, id: s, loaded: !1};
            return e[s].call(l.exports, l, l.exports, t), l.loaded = !0, l.exports
        }

        var i = {};
        return t.m = e, t.c = i, t.p = "", t(0)
    }([function (e, t, i) {
        e.exports = i(4)
    }, function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0}), t["default"] = {
            props: {
                min: Number,
                max: Number,
                step: {type: Number, "default": 1},
                value: {type: Number, "default": 0},
                title: {type: String},
                fillable: {type: Boolean, "default": !0},
                width: {type: Number, "default": 50}
            }, data: function () {
                return {}
            }, computed: {
                disabled_min: function () {
                    return typeof(this.min) != "undefined" ? this.value <= this.min : !1
                }, disabled_max: function () {
                    return typeof(this.max) != "undefined" ? this.value >= this.max : !1
                }
            }, ready: function () {
            }, watch: {
                value: function (e, t) {
                    this.min && this.value < this.min && (this.value = this.min), this.max && this.value > this.max && (this.value = this.max), this.$dispatch("change", this.value)
                }
            }, methods: {
                add: function () {
                    this.disabled_max || (this.value += this.step)
                }, sub: function () {
                    this.disabled_min || (this.value -= this.step)
                }
            }
        }
    }, function (e, t) {
    }, function (e, t) {
        e.exports = '<div class=weui_cell> <div class="weui_cell_bd weui_cell_primary"> <p>{{title}}</p> </div> <div class=weui_cell_ft v-show=!readonly style=font-size:0> <a @click=sub() class="number-selector number-selector-sub needsclick" :class="{\'number-disabled\':disabled_min}">-</a> <input v-model=value class=number-input :style="{width: width+\'px\'}" type="number" :readonly=!fillable /> <a @click=add() class="number-selector number-selector-plus needsclick" :class="{\'number-disabled\':disabled_max}">+</a> </div> <div class=weui_cell_ft v-else> {{value}} </div> </div>'
    }, function (e, t, i) {
        var s, l;
        i(2), s = i(1), l = i(3), e.exports = s || {}, e.exports.__esModule && (e.exports = e.exports["default"]), l && (("function" == typeof e.exports ? e.exports.options || (e.exports.options = {}) : e.exports).template = l)
    }])
});