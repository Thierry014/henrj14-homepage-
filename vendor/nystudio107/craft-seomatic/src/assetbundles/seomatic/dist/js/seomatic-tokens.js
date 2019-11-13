/*!
 * @project        SEOmatic
 * @name           seomatic-tokens.js
 * @author         Andrew Welch
 * @build          Wed, Jul 31, 2019 4:44 PM ET
 * @release        57f14111c8199864d98345fb124b3fd59aada30a [feature/refactor-content-seo-page]
 * @copyright      Copyright (c) 2019 nystudio107
 *
 */!function(e){function t(t){for(var r,i,a=t[0],l=t[1],f=t[2],s=0,p=[];s<a.length;s++)i=a[s],o[i]&&p.push(o[i][0]),o[i]=0;for(r in l)Object.prototype.hasOwnProperty.call(l,r)&&(e[r]=l[r]);for(c&&c(t);p.length;)p.shift()();return u.push.apply(u,f||[]),n()}function n(){for(var e,t=0;t<u.length;t++){for(var n=u[t],r=!0,a=1;a<n.length;a++){var l=n[a];0!==o[l]&&(r=!1)}r&&(u.splice(t--,1),e=i(i.s=n[0]))}return e}var r={},o={7:0},u=[];function i(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=e,i.c=r,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)i.d(n,r,function(t){return e[t]}.bind(null,r));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var a=window.webpackJsonp=window.webpackJsonp||[],l=a.push.bind(a);a.push=t,a=a.slice();for(var f=0;f<a.length;f++)t(a[f]);var c=l;u.push([52,13]),n()}({52:function(e,t,n){"use strict";n.r(t);var r=n(23),o=document.querySelector(".seomatic-keywords"),u=o.value.split(",").map(function(e,t){if(""!==e)return{id:t,name:e}}),i={el:o,addItemOnBlur:!0,addItemsOnPaste:!0,delimiters:[","]};void 0!==u&&void 0!==u[0]&&(i.setItems=u),new r.a(i).on("change",function(e){var t=e._vars.setItems.map(function(e){return e.name});e.el.value=t.join(",")})}});
//# sourceMappingURL=seomatic-tokens.js.map