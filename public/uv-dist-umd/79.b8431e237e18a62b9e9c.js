(window.webpackJsonpUV=window.webpackJsonpUV||[]).push([[79],{127:function(n,e,t){"use strict";t.r(e),t.d(e,"ion_action_sheet_controller",(function(){return c}));var r=t(12),o=t(15),i=function(n,e,t,r){return new(t||(t=Promise))((function(o,i){function u(n){try{a(r.next(n))}catch(n){i(n)}}function c(n){try{a(r.throw(n))}catch(n){i(n)}}function a(n){n.done?o(n.value):new t((function(e){e(n.value)})).then(u,c)}a((r=r.apply(n,e||[])).next())}))},u=function(n,e){var t,r,o,i,u={label:0,sent:function(){if(1&o[0])throw o[1];return o[1]},trys:[],ops:[]};return i={next:c(0),throw:c(1),return:c(2)},"function"==typeof Symbol&&(i[Symbol.iterator]=function(){return this}),i;function c(i){return function(c){return function(i){if(t)throw new TypeError("Generator is already executing.");for(;u;)try{if(t=1,r&&(o=2&i[0]?r.return:i[0]?r.throw||((o=r.return)&&o.call(r),0):r.next)&&!(o=o.call(r,i[1])).done)return o;switch(r=0,o&&(i=[2&i[0],o.value]),i[0]){case 0:case 1:o=i;break;case 4:return u.label++,{value:i[1],done:!1};case 5:u.label++,r=i[1],i=[0];continue;case 7:i=u.ops.pop(),u.trys.pop();continue;default:if(!(o=u.trys,(o=o.length>0&&o[o.length-1])||6!==i[0]&&2!==i[0])){u=0;continue}if(3===i[0]&&(!o||i[1]>o[0]&&i[1]<o[3])){u.label=i[1];break}if(6===i[0]&&u.label<o[1]){u.label=o[1],o=i;break}if(o&&u.label<o[2]){u.label=o[2],u.ops.push(i);break}o[2]&&u.ops.pop(),u.trys.pop();continue}i=e.call(n,u)}catch(n){i=[6,n],r=0}finally{t=o=0}if(5&i[0])throw i[1];return{value:i[0]?i[1]:void 0,done:!0}}([i,c])}}},c=function(){function n(n){Object(r.o)(this,n)}return n.prototype.create=function(n){return Object(o.h)("ion-action-sheet",n)},n.prototype.dismiss=function(n,e,t){return Object(o.i)(document,n,e,"ion-action-sheet",t)},n.prototype.getTop=function(){return i(this,void 0,void 0,(function(){return u(this,(function(n){return[2,Object(o.k)(document,"ion-action-sheet")]}))}))},n}()},15:function(n,e,t){"use strict";t.d(e,"a",(function(){return L})),t.d(e,"b",(function(){return s})),t.d(e,"c",(function(){return a})),t.d(e,"d",(function(){return d})),t.d(e,"e",(function(){return y})),t.d(e,"f",(function(){return b})),t.d(e,"g",(function(){return g})),t.d(e,"h",(function(){return p})),t.d(e,"i",(function(){return h})),t.d(e,"j",(function(){return E})),t.d(e,"k",(function(){return m})),t.d(e,"l",(function(){return l})),t.d(e,"m",(function(){return f})),t.d(e,"n",(function(){return D}));var r=t(12),o=function(n,e,t,r){return new(t||(t=Promise))((function(o,i){function u(n){try{a(r.next(n))}catch(n){i(n)}}function c(n){try{a(r.throw(n))}catch(n){i(n)}}function a(n){n.done?o(n.value):new t((function(e){e(n.value)})).then(u,c)}a((r=r.apply(n,e||[])).next())}))},i=function(n,e){var t,r,o,i,u={label:0,sent:function(){if(1&o[0])throw o[1];return o[1]},trys:[],ops:[]};return i={next:c(0),throw:c(1),return:c(2)},"function"==typeof Symbol&&(i[Symbol.iterator]=function(){return this}),i;function c(i){return function(c){return function(i){if(t)throw new TypeError("Generator is already executing.");for(;u;)try{if(t=1,r&&(o=2&i[0]?r.return:i[0]?r.throw||((o=r.return)&&o.call(r),0):r.next)&&!(o=o.call(r,i[1])).done)return o;switch(r=0,o&&(i=[2&i[0],o.value]),i[0]){case 0:case 1:o=i;break;case 4:return u.label++,{value:i[1],done:!1};case 5:u.label++,r=i[1],i=[0];continue;case 7:i=u.ops.pop(),u.trys.pop();continue;default:if(!(o=u.trys,(o=o.length>0&&o[o.length-1])||6!==i[0]&&2!==i[0])){u=0;continue}if(3===i[0]&&(!o||i[1]>o[0]&&i[1]<o[3])){u.label=i[1];break}if(6===i[0]&&u.label<o[1]){u.label=o[1],o=i;break}if(o&&u.label<o[2]){u.label=o[2],u.ops.push(i);break}o[2]&&u.ops.pop(),u.trys.pop();continue}i=e.call(n,u)}catch(n){i=[6,n],r=0}finally{t=o=0}if(5&i[0])throw i[1];return{value:i[0]?i[1]:void 0,done:!0}}([i,c])}}},u=0,c=function(n){return{create:function(e){return p(n,e)},dismiss:function(e,t,r){return h(document,e,t,n,r)},getTop:function(){return o(this,void 0,void 0,(function(){return i(this,(function(e){return[2,m(document,n)]}))}))}}},a=c("ion-alert"),s=c("ion-action-sheet"),l=c("ion-picker"),f=c("ion-popover"),d=function(n){var e=document;v(e);var t=u++;n.overlayIndex=t,n.hasAttribute("id")||(n.id="ion-overlay-"+t)},p=function(n,e){return customElements.whenDefined(n).then((function(){var t=document,r=t.createElement(n);return r.classList.add("overlay-hidden"),Object.assign(r,e),w(t).appendChild(r),r.componentOnReady()}))},v=function(n){0===u&&(u=1,n.addEventListener("focusin",(function(e){var t=m(n);if(t&&t.backdropDismiss&&!j(t,e.target)){var r=t.querySelector("input,button");r&&r.focus()}})),n.addEventListener("ionBackButton",(function(e){var t=m(n);t&&t.backdropDismiss&&e.detail.register(100,(function(){return t.dismiss(void 0,L)}))})),n.addEventListener("keyup",(function(e){if("Escape"===e.key){var t=m(n);t&&t.backdropDismiss&&t.dismiss(void 0,L)}})))},h=function(n,e,t,r,o){var i=m(n,r,o);return i?i.dismiss(e,t):Promise.reject("overlay does not exist")},m=function(n,e,t){var r=function(n,e){return void 0===e&&(e="ion-alert,ion-action-sheet,ion-loading,ion-modal,ion-picker,ion-popover,ion-toast"),Array.from(n.querySelectorAll(e)).filter((function(n){return n.overlayIndex>0}))}(n,e);return void 0===t?r[r.length-1]:r.find((function(n){return n.id===t}))},y=function(n,e,t,u,c){return o(void 0,void 0,void 0,(function(){var o;return i(this,(function(i){switch(i.label){case 0:return n.presented?[2]:(n.presented=!0,n.willPresent.emit(),o=n.enterAnimation?n.enterAnimation:r.j.get(e,"ios"===n.mode?t:u),[4,k(n,o,n.el,c)]);case 1:return i.sent()&&n.didPresent.emit(),[2]}}))}))},b=function(n,e,t,u,c,a,s){return o(void 0,void 0,void 0,(function(){var o,l;return i(this,(function(i){switch(i.label){case 0:if(!n.presented)return[2,!1];n.presented=!1,i.label=1;case 1:return i.trys.push([1,3,,4]),n.willDismiss.emit({data:e,role:t}),o=n.leaveAnimation?n.leaveAnimation:r.j.get(u,"ios"===n.mode?c:a),[4,k(n,o,n.el,s)];case 2:return i.sent(),n.didDismiss.emit({data:e,role:t}),[3,4];case 3:return l=i.sent(),console.error(l),[3,4];case 4:return n.el.remove(),[2,!0]}}))}))},w=function(n){return n.querySelector("ion-app")||n.body},k=function(n,e,u,c){return o(void 0,void 0,void 0,(function(){var o,a,s,l,f;return i(this,(function(i){switch(i.label){case 0:if(n.animation)return n.animation.destroy(),n.animation=void 0,[2,!1];u.classList.remove("overlay-hidden"),o=u.shadowRoot||n.el,s=!0,i.label=1;case 1:return i.trys.push([1,4,,5]),[4,t.e(9).then(t.bind(null,16))];case 2:return[4,i.sent().create(e,o,c)];case 3:return a=i.sent(),[3,5];case 4:return i.sent(),(a=e(o,c)).fill("both"),s=!1,[3,5];case 5:return n.animation=a,n.animated&&r.j.getBoolean("animated",!0)||a.duration(0),n.keyboardClose&&a.beforeAddWrite((function(){var n=u.ownerDocument.activeElement;n&&n.matches("input, ion-input, ion-textarea")&&n.blur()})),[4,a.playAsync()];case 6:return l=i.sent(),f=void 0===l||a.hasCompleted,s&&a.destroy(),n.animation=void 0,[2,f]}}))}))},g=function(n,e){var t,r=new Promise((function(n){return t=n}));return x(n,e,(function(n){t(n.detail)})),r},x=function(n,e,t){var r=function(o){n.removeEventListener(e,r),t(o)};n.addEventListener(e,r)},E=function(n){return"cancel"===n||n===L},j=function(n,e){for(;e;){if(e===n)return!0;e=e.parentElement}return!1},A=function(n){return n()},D=function(n,e){if("function"==typeof n)return r.j.get("_zoneGate",A)((function(){try{return n(e)}catch(n){console.error(n)}}))},L="backdrop"}}]);