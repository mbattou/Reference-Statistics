(function(){var l,n=this;function p(a){return void 0!==a}
function q(a,b,c){a=a.split(".");c=c||n;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)!a.length&&p(b)?c[d]=b:c[d]?c=c[d]:c=c[d]={}}
function r(a,b){for(var c=a.split("."),d=b||n,e;e=c.shift();)if(null!=d[e])d=d[e];else return null;return d}
function ba(){}
function ca(a){a.va=void 0;a.getInstance=function(){return a.va?a.va:a.va=new a}}
function da(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b}
function ea(a){return"array"==da(a)}
function fa(a){var b=da(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function t(a){return"string"==typeof a}
function ga(a){return"function"==da(a)}
function ia(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function ja(a){return a[ka]||(a[ka]=++la)}
var ka="closure_uid_"+(1E9*Math.random()>>>0),la=0;function ma(a,b,c){return a.call.apply(a.bind,arguments)}
function na(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}}
function v(a,b,c){v=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?ma:na;return v.apply(null,arguments)}
function oa(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}}
function pa(a,b){for(var c in b)a[c]=b[c]}
var w=Date.now||function(){return+new Date};
function x(a,b){function c(){}
c.prototype=b.prototype;a.B=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.ec=function(a,c,f){for(var d=Array(arguments.length-2),e=2;e<arguments.length;e++)d[e-2]=arguments[e];return b.prototype[c].apply(a,d)}}
;function qa(a,b,c){this.i=c;this.g=a;this.j=b;this.f=0;this.b=null}
qa.prototype.get=function(){var a;0<this.f?(this.f--,a=this.b,this.b=a.next,a.next=null):a=this.g();return a};
function ra(a,b){a.j(b);a.f<a.i&&(a.f++,b.next=a.b,a.b=b)}
;function sa(a){if(Error.captureStackTrace)Error.captureStackTrace(this,sa);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}
x(sa,Error);sa.prototype.name="CustomError";var ta;function ua(a){return/^\s*$/.test(a)?!1:/^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g,"@").replace(/(?:"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)[\s\u2028\u2029]*(?=:|,|]|}|$)/g,"]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g,""))}
function va(a){a=String(a);if(ua(a))try{return eval("("+a+")")}catch(b){}throw Error("Invalid JSON string: "+a);}
function wa(a){return eval("("+a+")")}
function xa(a){var b=[];ya(new za,a,b);return b.join("")}
function za(){}
function ya(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if(ea(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),e=d[f],ya(a,e,c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");f="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(e=b[d],"function"!=typeof e&&(c.push(f),Aa(d,c),c.push(":"),ya(a,e,c),f=","));c.push("}");return}}switch(typeof b){case "string":Aa(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}
var Da={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},Ea=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;function Aa(a,b){b.push('"',a.replace(Ea,function(a){var b=Da[a];b||(b="\\u"+(a.charCodeAt(0)|65536).toString(16).substr(1),Da[a]=b);return b}),'"')}
;function Fa(a,b){this.width=a;this.height=b}
l=Fa.prototype;l.aspectRatio=function(){return this.width/this.height};
l.isEmpty=function(){return!(this.width*this.height)};
l.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
l.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
l.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function Ga(a){this.b=a||{cookie:""}}
var Ha=/\s*;\s*/;l=Ga.prototype;l.isEnabled=function(){return navigator.cookieEnabled};
l.set=function(a,b,c,d,e,f){if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');p(c)||(c=-1);e=e?";domain="+e:"";d=d?";path="+d:"";f=f?";secure":"";c=0>c?"":0==c?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(w()+1E3*c)).toUTCString();this.b.cookie=a+"="+b+e+d+c+f};
l.get=function(a,b){for(var c=a+"=",d=(this.b.cookie||"").split(Ha),e=0,f;f=d[e];e++){if(0==f.lastIndexOf(c,0))return f.substr(c.length);if(f==a)return""}return b};
l.remove=function(a,b,c){var d=p(this.get(a));this.set(a,"",0,b,c);return d};
l.isEmpty=function(){return!this.b.cookie};
l.aa=function(){return this.b.cookie?(this.b.cookie||"").split(Ha).length:0};
l.clear=function(){for(var a=(this.b.cookie||"").split(Ha),b=[],c=[],d,e,f=0;e=a[f];f++)d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));for(a=b.length-1;0<=a;a--)this.remove(b[a])};
var Ia=new Ga("undefined"==typeof document?null:document);Ia.f=3950;function Ja(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function Ka(a){var b=La,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function Ma(){var a=Na,b;for(b in a)return!1;return!0}
function Oa(a,b){if(null!==a&&b in a)throw Error('The object already contains the key "'+b+'"');a[b]=!0}
function Pa(a){var b={},c;for(c in a)b[c]=a[c];return b}
var Qa="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function Ra(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<Qa.length;f++)c=Qa[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;function Sa(a){a.prototype.then=a.prototype.then;a.prototype.$goog_Thenable=!0}
;function Ta(a,b){var c=Ua;return Object.prototype.hasOwnProperty.call(c,a)?c[a]:c[a]=b(a)}
;var Va=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")};
function Wa(a,b){return a<b?-1:a>b?1:0}
function Xa(a){for(var b=0,c=0;c<a.length;++c)b=31*b+a.charCodeAt(c)>>>0;return b}
;var Ya=window.yt&&window.yt.config_||window.ytcfg&&window.ytcfg.data_||{};q("yt.config_",Ya,void 0);q("yt.tokens_",window.yt&&window.yt.tokens_||{},void 0);var Za=window.yt&&window.yt.msgs_||r("window.ytcfg.msgs")||{};q("yt.msgs_",Za,void 0);function y(a){$a(Ya,arguments)}
function z(a,b){return a in Ya?Ya[a]:b}
function A(a,b){ga(a)&&(a=ab(a));return window.setTimeout(a,b)}
function bb(a){window.clearTimeout(a)}
function ab(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){cb(b)}}:a}
function cb(a,b){var c=r("yt.logging.errors.log");c?c(a,b,void 0,void 0,void 0):(c=z("ERRORS",[]),c.push([a,b,void 0,void 0,void 0]),y("ERRORS",c))}
function $a(a,b){if(1<b.length){var c=b[0];a[c]=b[1]}else{var d=b[0];for(c in d)a[c]=d[c]}}
var db=window.performance&&window.performance.timing&&window.performance.now?function(){return window.performance.timing.navigationStart+window.performance.now()}:function(){return(new Date).getTime()},eb="Microsoft Internet Explorer"==navigator.appName;function fb(a,b,c){a&&(a.dataset?a.dataset[gb(b)]=c:a.setAttribute("data-"+b,c))}
function B(a,b){return a?a.dataset?a.dataset[gb(b)]:a.getAttribute("data-"+b):null}
function hb(a,b){a&&(a.dataset?delete a.dataset[gb(b)]:a.removeAttribute("data-"+b))}
var ib={};function gb(a){return ib[a]||(ib[a]=String(a).replace(/\-([a-z])/g,function(a,c){return c.toUpperCase()}))}
;var jb=null;"undefined"!=typeof XMLHttpRequest?jb=function(){return new XMLHttpRequest}:"undefined"!=typeof ActiveXObject&&(jb=function(){return new ActiveXObject("Microsoft.XMLHTTP")});
function kb(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function C(){this.P=this.P;this.J=this.J}
C.prototype.P=!1;C.prototype.isDisposed=function(){return this.P};
C.prototype.dispose=function(){this.P||(this.P=!0,this.A())};
function lb(a,b){a.P?p(void 0)?b.call(void 0):b():(a.J||(a.J=[]),a.J.push(p(void 0)?v(b,void 0):b))}
C.prototype.A=function(){if(this.J)for(;this.J.length;)this.J.shift()()};
function mb(a){a&&"function"==typeof a.dispose&&a.dispose()}
function ob(a){for(var b=0,c=arguments.length;b<c;++b){var d=arguments[b];fa(d)?ob.apply(null,d):mb(d)}}
;var D;a:{var pb=n.navigator;if(pb){var qb=pb.userAgent;if(qb){D=qb;break a}}D=""}function E(a){return-1!=D.indexOf(a)}
;var rb=Array.prototype.indexOf?function(a,b,c){return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;
if(t(a))return t(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},F=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=t(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},sb=Array.prototype.filter?function(a,b,c){return Array.prototype.filter.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=[],f=0,g=t(a)?a.split(""):a,k=0;k<d;k++)if(k in g){var h=g[k];
b.call(c,h,k,a)&&(e[f++]=h)}return e},tb=Array.prototype.map?function(a,b,c){return Array.prototype.map.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=Array(d),f=t(a)?a.split(""):a,g=0;g<d;g++)g in f&&(e[g]=b.call(c,f[g],g,a));
return e},ub=Array.prototype.some?function(a,b,c){return Array.prototype.some.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=t(a)?a.split(""):a,f=0;f<d;f++)if(f in e&&b.call(c,e[f],f,a))return!0;
return!1};
function vb(a,b){var c;a:{c=a.length;for(var d=t(a)?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){c=e;break a}c=-1}return 0>c?null:t(a)?a.charAt(c):a[c]}
function wb(a,b){return 0<=rb(a,b)}
function xb(a,b){var c=rb(a,b);0<=c&&Array.prototype.splice.call(a,c,1)}
function yb(a){return Array.prototype.concat.apply(Array.prototype,arguments)}
function zb(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]}
function Ab(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(fa(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
function Bb(a,b,c,d){return Array.prototype.splice.apply(a,Cb(arguments,1))}
function Cb(a,b,c){return 2>=arguments.length?Array.prototype.slice.call(a,b):Array.prototype.slice.call(a,b,c)}
;function Db(){this.f=this.b=null}
var Fb=new qa(function(){return new Eb},function(a){a.reset()},100);
Db.prototype.remove=function(){var a=null;this.b&&(a=this.b,this.b=this.b.next,this.b||(this.f=null),a.next=null);return a};
function Eb(){this.next=this.scope=this.b=null}
Eb.prototype.set=function(a,b){this.b=a;this.scope=b;this.next=null};
Eb.prototype.reset=function(){this.next=this.scope=this.b=null};function Gb(){return E("iPhone")&&!E("iPod")&&!E("iPad")}
;var Hb=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function G(a){return a.match(Hb)}
function Ib(a){return a?decodeURI(a):a}
function Jb(a){if(a[1]){var b=a[0],c=b.indexOf("#");0<=c&&(a.push(b.substr(c)),a[0]=b=b.substr(0,c));c=b.indexOf("?");0>c?a[1]="?":c==b.length-1&&(a[1]=void 0)}return a.join("")}
function Kb(a,b,c){if(ea(b))for(var d=0;d<b.length;d++)Kb(a,String(b[d]),c);else null!=b&&c.push("&",a,""===b?"":"=",encodeURIComponent(String(b)))}
function Lb(a,b,c){for(c=c||0;c<b.length;c+=2)Kb(b[c],b[c+1],a);return a}
function Mb(a,b){for(var c in b)Kb(c,b[c],a);return a}
function Nb(a){a=Mb([],a);a[0]="";return a.join("")}
function Ob(a,b){return Jb(2==arguments.length?Lb([a],arguments[1],0):Lb([a],arguments,1))}
;function Pb(){this.b="";this.f=Qb}
Pb.prototype.ua=!0;Pb.prototype.ta=function(){return this.b};
function Rb(a){return a instanceof Pb&&a.constructor===Pb&&a.f===Qb?a.b:"type_error:SafeUrl"}
var Sb=/^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i;function Tb(a){if(a instanceof Pb)return a;a=a.ua?a.ta():String(a);Sb.test(a)||(a="about:invalid#zClosurez");return Ub(a)}
var Qb={};function Ub(a){var b=new Pb;b.b=a;return b}
Ub("about:blank");function Vb(){this.b="";this.f=Wb}
Vb.prototype.ua=!0;Vb.prototype.ta=function(){return this.b};
var Wb={};function Xb(){return(E("Chrome")||E("CriOS"))&&!E("Edge")}
;function Yb(a){"?"==a.charAt(0)&&(a=a.substr(1));a=a.split("&");for(var b={},c=0,d=a.length;c<d;c++){var e=a[c].split("=");if(1==e.length&&e[0]||2==e.length){var f=decodeURIComponent((e[0]||"").replace(/\+/g," ")),e=decodeURIComponent((e[1]||"").replace(/\+/g," "));f in b?ea(b[f])?Ab(b[f],e):b[f]=[b[f],e]:b[f]=e}}return b}
function Zb(a,b){var c=a.split("#",2);a=c[0];var c=1<c.length?"#"+c[1]:"",d=a.split("?",2);a=d[0];var d=Yb(d[1]||""),e;for(e in b)d[e]=b[e];return Jb(Mb([a],d))+c}
;function $b(a){n.setTimeout(function(){throw a;},0)}
var ac;
function bc(){var a=n.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!E("Presto")&&(a=function(){var a=document.createElement("IFRAME");a.style.display="none";a.src="";document.documentElement.appendChild(a);var b=a.contentWindow,a=b.document;a.open();a.write("");a.close();var c="callImmediate"+Math.random(),d="file:"==b.location.protocol?"*":b.location.protocol+"//"+b.location.host,a=v(function(a){if(("*"==d||a.origin==d)&&a.data==
c)this.port1.onmessage()},this);
b.addEventListener("message",a,!1);this.port1={};this.port2={postMessage:function(){b.postMessage(c,d)}}});
if("undefined"!==typeof a&&!E("Trident")&&!E("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(p(c.next)){c=c.next;var a=c.Ga;c.Ga=null;a()}};
return function(a){d.next={Ga:a};d=d.next;b.port2.postMessage(0)}}return"undefined"!==typeof document&&"onreadystatechange"in document.createElement("SCRIPT")?function(a){var b=document.createElement("SCRIPT");
b.onreadystatechange=function(){b.onreadystatechange=null;b.parentNode.removeChild(b);b=null;a();a=null};
document.documentElement.appendChild(b)}:function(a){n.setTimeout(a,0)}}
;function cc(){this.b=""}
cc.prototype.ua=!0;cc.prototype.ta=function(){return this.b};
function dc(a){var b=new cc;b.b=a;return b}
dc("<!DOCTYPE html>");dc("");dc("<br>");var ec="StopIteration"in n?n.StopIteration:{message:"StopIteration",stack:""};function fc(){}
fc.prototype.next=function(){throw ec;};
fc.prototype.$=function(){return this};
function gc(a){if(a instanceof fc)return a;if("function"==typeof a.$)return a.$(!1);if(fa(a)){var b=0,c=new fc;c.next=function(){for(;;){if(b>=a.length)throw ec;if(b in a)return a[b++];b++}};
return c}throw Error("Not implemented");}
function hc(a,b){if(fa(a))try{F(a,b,void 0)}catch(c){if(c!==ec)throw c;}else{a=gc(a);try{for(;;)b.call(void 0,a.next(),void 0,a)}catch(c){if(c!==ec)throw c;}}}
function ic(a){if(fa(a))return zb(a);a=gc(a);var b=[];hc(a,function(a){b.push(a)});
return b}
;function H(a,b){this.l=p(a)?a:0;this.o=p(b)?b:0}
H.prototype.equals=function(a){return a instanceof H&&(this==a?!0:this&&a?this.l==a.l&&this.o==a.o:!1)};
H.prototype.ceil=function(){this.l=Math.ceil(this.l);this.o=Math.ceil(this.o);return this};
H.prototype.floor=function(){this.l=Math.floor(this.l);this.o=Math.floor(this.o);return this};
H.prototype.round=function(){this.l=Math.round(this.l);this.o=Math.round(this.o);return this};var jc=E("Opera"),I=E("Trident")||E("MSIE"),kc=E("Edge"),lc=E("Gecko")&&!(-1!=D.toLowerCase().indexOf("webkit")&&!E("Edge"))&&!(E("Trident")||E("MSIE"))&&!E("Edge"),mc=-1!=D.toLowerCase().indexOf("webkit")&&!E("Edge"),nc=E("Macintosh"),oc=E("Windows"),pc=E("Android"),qc=Gb(),rc=E("iPad"),sc=E("iPod");function tc(){var a=n.document;return a?a.documentMode:void 0}
var vc;a:{var wc="",xc=function(){var a=D;if(lc)return/rv\:([^\);]+)(\)|;)/.exec(a);if(kc)return/Edge\/([\d\.]+)/.exec(a);if(I)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(mc)return/WebKit\/(\S+)/.exec(a);if(jc)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
xc&&(wc=xc?xc[1]:"");if(I){var yc=tc();if(null!=yc&&yc>parseFloat(wc)){vc=String(yc);break a}}vc=wc}var zc=vc,Ua={};
function J(a){return Ta(a,function(){for(var b=0,c=Va(String(zc)).split("."),d=Va(String(a)).split("."),e=Math.max(c.length,d.length),f=0;0==b&&f<e;f++){var g=c[f]||"",k=d[f]||"";do{g=/(\d*)(\D*)(.*)/.exec(g)||["","","",""];k=/(\d*)(\D*)(.*)/.exec(k)||["","","",""];if(0==g[0].length&&0==k[0].length)break;b=Wa(0==g[1].length?0:parseInt(g[1],10),0==k[1].length?0:parseInt(k[1],10))||Wa(0==g[2].length,0==k[2].length)||Wa(g[2],k[2]);g=g[3];k=k[3]}while(0==b)}return 0<=b})}
var Ac;var Bc=n.document;Ac=Bc&&I?tc()||("CSS1Compat"==Bc.compatMode?parseInt(zc,10):5):void 0;function Cc(a,b){Dc||Ec();Fc||(Dc(),Fc=!0);var c=Gc,d=Fb.get();d.set(a,b);c.f?c.f.next=d:c.b=d;c.f=d}
var Dc;function Ec(){if(-1!=String(n.Promise).indexOf("[native code]")){var a=n.Promise.resolve(void 0);Dc=function(){a.then(Hc)}}else Dc=function(){var a=Hc;
!ga(n.setImmediate)||n.Window&&n.Window.prototype&&!E("Edge")&&n.Window.prototype.setImmediate==n.setImmediate?(ac||(ac=bc()),ac(a)):n.setImmediate(a)}}
var Fc=!1,Gc=new Db;function Hc(){for(var a;a=Gc.remove();){try{a.b.call(a.scope)}catch(b){$b(b)}ra(Fb,a)}Fc=!1}
;!lc&&!I||I&&9<=Number(Ac)||lc&&J("1.9.1");var Ic=I&&!J("9");function Jc(a,b){var c;c=b instanceof Pb?b:Tb(b);a.href=Rb(c)}
function Kc(a,b){a.rel="stylesheet";a.href=b instanceof Vb&&b.constructor===Vb&&b.f===Wb?b.b:"type_error:TrustedResourceUrl"}
;function Lc(a){Mc();var b=new Vb;b.b=a;return b}
var Mc=ba;var Nc=E("Firefox"),Oc=Gb()||E("iPod"),Pc=E("iPad"),Qc=E("Android")&&!(Xb()||E("Firefox")||E("Opera")||E("Silk")),Rc=Xb(),Sc=E("Safari")&&!(Xb()||E("Coast")||E("Opera")||E("Edge")||E("Silk")||E("Android"))&&!(Gb()||E("iPad")||E("iPod"));function Tc(a){return a?new Uc(Vc(a)):ta||(ta=new Uc)}
function K(a){var b=document;return t(a)?b.getElementById(a):a}
function Wc(a){var b=document;return b.querySelectorAll&&b.querySelector?b.querySelectorAll("."+a):Xc(a)}
function Xc(a){var b,c,d,e;b=document;if(b.querySelectorAll&&b.querySelector&&a)return b.querySelectorAll(""+(a?"."+a:""));if(a&&b.getElementsByClassName){var f=b.getElementsByClassName(a);return f}f=b.getElementsByTagName("*");if(a){e={};for(c=d=0;b=f[c];c++){var g=b.className;"function"==typeof g.split&&wb(g.split(/\s+/),a)&&(e[d++]=b)}e.length=d;return e}return f}
function Yc(a){a=a.document;a=Zc(a)?a.documentElement:a.body;return new Fa(a.clientWidth,a.clientHeight)}
function $c(a){var b=a.scrollingElement?a.scrollingElement:!mc&&Zc(a)?a.documentElement:a.body||a.documentElement;a=a.parentWindow||a.defaultView;return I&&J("10")&&a.pageYOffset!=b.scrollTop?new H(b.scrollLeft,b.scrollTop):new H(a.pageXOffset||b.scrollLeft,a.pageYOffset||b.scrollTop)}
function Zc(a){return"CSS1Compat"==a.compatMode}
function ad(a){for(var b;b=a.firstChild;)a.removeChild(b)}
function bd(a){if(!a)return null;if(a.firstChild)return a.firstChild;for(;a&&!a.nextSibling;)a=a.parentNode;return a?a.nextSibling:null}
function cd(a){if(!a)return null;if(!a.previousSibling)return a.parentNode;for(a=a.previousSibling;a&&a.lastChild;)a=a.lastChild;return a}
function Vc(a){return 9==a.nodeType?a:a.ownerDocument||a.document}
function dd(a,b){if("textContent"in a)a.textContent=b;else if(3==a.nodeType)a.data=b;else if(a.firstChild&&3==a.firstChild.nodeType){for(;a.lastChild!=a.firstChild;)a.removeChild(a.lastChild);a.firstChild.data=b}else ad(a),a.appendChild(Vc(a).createTextNode(String(b)))}
var ed={SCRIPT:1,STYLE:1,HEAD:1,IFRAME:1,OBJECT:1},fd={IMG:" ",BR:"\n"};function gd(a){if(Ic&&null!==a&&"innerText"in a)a=a.innerText.replace(/(\r\n|\r|\n)/g,"\n");else{var b=[];hd(a,b,!0);a=b.join("")}a=a.replace(/ \xAD /g," ").replace(/\xAD/g,"");a=a.replace(/\u200B/g,"");Ic||(a=a.replace(/ +/g," "));" "!=a&&(a=a.replace(/^\s*/,""));return a}
function hd(a,b,c){if(!(a.nodeName in ed))if(3==a.nodeType)c?b.push(String(a.nodeValue).replace(/(\r\n|\r|\n)/g,"")):b.push(a.nodeValue);else if(a.nodeName in fd)b.push(fd[a.nodeName]);else for(a=a.firstChild;a;)hd(a,b,c),a=a.nextSibling}
function id(a){var b=jd.Za;return b?kd(a,function(a){return!b||t(a.className)&&wb(a.className.split(/\s+/),b)},!0,void 0):null}
function kd(a,b,c,d){a&&!c&&(a=a.parentNode);for(c=0;a&&(null==d||c<=d);){if(b(a))return a;a=a.parentNode;c++}return null}
function Uc(a){this.b=a||n.document||document}
Uc.prototype.getElementsByTagName=function(a,b){return(b||this.b).getElementsByTagName(String(a))};
Uc.prototype.createElement=function(a){return this.b.createElement(String(a))};
Uc.prototype.isElement=function(a){return ia(a)&&1==a.nodeType};
Uc.prototype.contains=function(a,b){if(!a||!b)return!1;if(a.contains&&1==b.nodeType)return a==b||a.contains(b);if("undefined"!=typeof a.compareDocumentPosition)return a==b||!!(a.compareDocumentPosition(b)&16);for(;b&&a!=b;)b=b.parentNode;return b==a};function L(a,b){this.b=0;this.D=void 0;this.i=this.f=this.g=null;this.j=this.w=!1;if(a!=ba)try{var c=this;a.call(b,function(a){ld(c,2,a)},function(a){ld(c,3,a)})}catch(d){ld(this,3,d)}}
function md(){this.next=this.context=this.f=this.g=this.b=null;this.i=!1}
md.prototype.reset=function(){this.context=this.f=this.g=this.b=null;this.i=!1};
var nd=new qa(function(){return new md},function(a){a.reset()},100);
function od(a,b,c){var d=nd.get();d.g=a;d.f=b;d.context=c;return d}
function pd(a){if(a instanceof L)return a;var b=new L(ba);ld(b,2,a);return b}
function qd(a){return new L(function(b,c){c(a)})}
L.prototype.then=function(a,b,c){return rd(this,ga(a)?a:null,ga(b)?b:null,c)};
Sa(L);L.prototype.cancel=function(a){0==this.b&&Cc(function(){var b=new sd(a);td(this,b)},this)};
function td(a,b){if(0==a.b)if(a.g){var c=a.g;if(c.f){for(var d=0,e=null,f=null,g=c.f;g&&(g.i||(d++,g.b==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.b&&1==d?td(c,b):(f?(d=f,d.next==c.i&&(c.i=d),d.next=d.next.next):ud(c),vd(c,e,3,b)))}a.g=null}else ld(a,3,b)}
function wd(a,b){a.f||2!=a.b&&3!=a.b||xd(a);a.i?a.i.next=b:a.f=b;a.i=b}
function rd(a,b,c,d){var e=od(null,null,null);e.b=new L(function(a,g){e.g=b?function(c){try{var e=b.call(d,c);a(e)}catch(m){g(m)}}:a;
e.f=c?function(b){try{var e=c.call(d,b);!p(e)&&b instanceof sd?g(b):a(e)}catch(m){g(m)}}:g});
e.b.g=a;wd(a,e);return e.b}
L.prototype.J=function(a){this.b=0;ld(this,2,a)};
L.prototype.H=function(a){this.b=0;ld(this,3,a)};
function ld(a,b,c){if(0==a.b){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.b=1;var d;a:{var e=c,f=a.J,g=a.H;if(e instanceof L)wd(e,od(f||ba,g||null,a)),d=!0;else{var k;if(e)try{k=!!e.$goog_Thenable}catch(m){k=!1}else k=!1;if(k)e.then(f,g,a),d=!0;else{if(ia(e))try{var h=e.then;if(ga(h)){yd(e,h,f,g,a);d=!0;break a}}catch(m){g.call(a,m);d=!0;break a}d=!1}}}d||(a.D=c,a.b=b,a.g=null,xd(a),3!=b||c instanceof sd||zd(a,c))}}
function yd(a,b,c,d,e){function f(a){k||(k=!0,d.call(e,a))}
function g(a){k||(k=!0,c.call(e,a))}
var k=!1;try{b.call(a,g,f)}catch(h){f(h)}}
function xd(a){a.w||(a.w=!0,Cc(a.F,a))}
function ud(a){var b=null;a.f&&(b=a.f,a.f=b.next,b.next=null);a.f||(a.i=null);return b}
L.prototype.F=function(){for(var a;a=ud(this);)vd(this,a,this.b,this.D);this.w=!1};
function vd(a,b,c,d){if(3==c&&b.f&&!b.i)for(;a&&a.j;a=a.g)a.j=!1;if(b.b)b.b.g=null,Ad(b,c,d);else try{b.i?b.g.call(b.context):Ad(b,c,d)}catch(e){Bd.call(null,e)}ra(nd,b)}
function Ad(a,b,c){2==b?a.g.call(a.context,c):a.f&&a.f.call(a.context,c)}
function zd(a,b){a.j=!0;Cc(function(){a.j&&Bd.call(null,b)})}
var Bd=$b;function sd(a){sa.call(this,a)}
x(sd,sa);sd.prototype.name="cancel";function M(a){C.call(this);this.j=1;this.g=[];this.i=0;this.b=[];this.f={};this.w=!!a}
x(M,C);l=M.prototype;l.subscribe=function(a,b,c){var d=this.f[a];d||(d=this.f[a]=[]);var e=this.j;this.b[e]=a;this.b[e+1]=b;this.b[e+2]=c;this.j=e+3;d.push(e);return e};
function Cd(a,b,c,d){if(b=a.f[b]){var e=a.b;(b=vb(b,function(a){return e[a+1]==c&&e[a+2]==d}))&&a.O(b)}}
l.O=function(a){var b=this.b[a];if(b){var c=this.f[b];0!=this.i?(this.g.push(a),this.b[a+1]=ba):(c&&xb(c,a),delete this.b[a],delete this.b[a+1],delete this.b[a+2])}return!!b};
l.M=function(a,b){var c=this.f[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.w)for(e=0;e<c.length;e++){var g=c[e];Dd(this.b[g+1],this.b[g+2],d)}else{this.i++;try{for(e=0,f=c.length;e<f;e++)g=c[e],this.b[g+1].apply(this.b[g+2],d)}finally{if(this.i--,0<this.g.length&&0==this.i)for(;c=this.g.pop();)this.O(c)}}return 0!=e}return!1};
function Dd(a,b,c){Cc(function(){a.apply(b,c)})}
l.clear=function(a){if(a){var b=this.f[a];b&&(F(b,this.O,this),delete this.f[a])}else this.b.length=0,this.f={}};
l.aa=function(a){if(a){var b=this.f[a];return b?b.length:0}a=0;for(b in this.f)a+=this.aa(b);return a};
l.A=function(){M.B.A.call(this);this.clear();this.g.length=0};var Ed=r("yt.pubsub.instance_")||new M;M.prototype.subscribe=M.prototype.subscribe;M.prototype.unsubscribeByKey=M.prototype.O;M.prototype.publish=M.prototype.M;M.prototype.clear=M.prototype.clear;q("yt.pubsub.instance_",Ed,void 0);var Fd=r("yt.pubsub.subscribedKeys_")||{};q("yt.pubsub.subscribedKeys_",Fd,void 0);var Gd=r("yt.pubsub.topicToKeys_")||{};q("yt.pubsub.topicToKeys_",Gd,void 0);var Hd=r("yt.pubsub.isSynchronous_")||{};q("yt.pubsub.isSynchronous_",Hd,void 0);
var Jd=r("yt.pubsub.skipSubId_")||null;q("yt.pubsub.skipSubId_",Jd,void 0);function Kd(a,b,c){var d=Ld();if(d){var e=d.subscribe(a,function(){if(!Jd||Jd!=e){var d=arguments,g;g=function(){Fd[e]&&b.apply(c||window,d)};
try{Hd[a]?g():A(g,0)}catch(k){cb(k)}}},c);
Fd[e]=!0;Gd[a]||(Gd[a]=[]);Gd[a].push(e);return e}return 0}
function Md(a){var b=Ld();b&&("number"==typeof a?a=[a]:"string"==typeof a&&(a=[parseInt(a,10)]),F(a,function(a){b.unsubscribeByKey(a);delete Fd[a]}))}
function Nd(a,b){var c=Ld();return c?c.publish.apply(c,arguments):!1}
function Od(a){Gd[a]&&(a=Gd[a],F(a,function(a){Fd[a]&&delete Fd[a]}),a.length=0)}
function Pd(a){var b=Ld();if(b)if(b.clear(a),a)Od(a);else for(var c in Gd)Od(c)}
function Ld(){return r("yt.pubsub.instance_")}
;function Qd(a,b,c,d,e,f,g){function k(){4==(h&&"readyState"in h?h.readyState:0)&&b&&ab(b)(h)}
var h=jb&&jb();if(!("open"in h))return null;"onloadend"in h?h.addEventListener("loadend",k,!1):h.onreadystatechange=k;c=(c||"GET").toUpperCase();d=d||"";h.open(c,a,!0);f&&(h.responseType=f);g&&(h.withCredentials=!0);f="POST"==c;if(e=Rd(a,e))for(var m in e)h.setRequestHeader(m,e[m]),"content-type"==m.toLowerCase()&&(f=!1);f&&h.setRequestHeader("Content-Type","application/x-www-form-urlencoded");h.send(d);return h}
function Rd(a,b){b=b||{};var c;c||(c=window.location.href);var d=G(a)[1]||null,e=Ib(G(a)[3]||null);d&&e?(d=c,c=G(a),d=G(d),c=c[3]==d[3]&&c[1]==d[1]&&c[4]==d[4]):c=e?Ib(G(c)[3]||null)==e&&(Number(G(c)[4]||null)||null)==(Number(G(a)[4]||null)||null):!0;for(var f in Sd){if((e=d=z(Sd[f]))&&!(e=c)){var e=f,g=z("CORS_HEADER_WHITELIST")||{},k=Ib(G(a)[3]||null);e=k?(g=g[k])?wb(g,e):!1:!0}e&&(b[f]=d)}return b}
function Td(a,b){b.method="POST";b.C||(b.C={});Ud(a,b)}
function Vd(a,b){var c=z("XSRF_FIELD_NAME",void 0),d;b.headers&&(d=b.headers["Content-Type"]);return!b.gc&&(!Ib(G(a)[3]||null)||b.withCredentials||Ib(G(a)[3]||null)==document.location.hostname)&&"POST"==b.method&&(!d||"application/x-www-form-urlencoded"==d)&&!(b.C&&b.C[c])}
function Ud(a,b){var c=b.format||"JSON";b.sb&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var d=z("XSRF_FIELD_NAME",void 0),e=z("XSRF_TOKEN",void 0),f=b.xa;f&&(f[d]&&delete f[d],a=Zb(a,f||{}));var g=b.postBody||"",f=b.C;Vd(a,b)&&(f||(f={}),f[d]=e);f&&t(g)&&(d=Yb(g),Ra(d,f),g=b.Na&&"JSON"==b.Na?JSON.stringify(d):Nb(d));var k=!1,h,m=Qd(a,function(a){if(!k){k=!0;h&&bb(h);var d=kb(a),e=null;if(d||400<=a.status&&500>a.status)e=
Wd(c,a,b.fc);if(d)a:if(204==a.status)d=!0;else{switch(c){case "XML":d=0==parseInt(e&&e.return_code,10);break a;case "RAW":d=!0;break a}d=!!e}var e=e||{},f=b.context||n;d?b.G&&b.G.call(f,a,e):b.onError&&b.onError.call(f,a,e);b.wa&&b.wa.call(f,a,e)}},b.method,g,b.headers,b.responseType,b.withCredentials);
b.T&&0<b.timeout&&(h=A(function(){k||(k=!0,m.abort(),bb(h),b.T.call(b.context||n,m))},b.timeout))}
function Wd(a,b,c){var d=null;switch(a){case "JSON":a=b.responseText;b=b.getResponseHeader("Content-Type")||"";a&&0<=b.indexOf("json")&&(d=wa(a));break;case "XML":if(b=(b=b.responseXML)?Xd(b):null)d={},F(b.getElementsByTagName("*"),function(a){d[a.tagName]=Yd(a)})}c&&Zd(d);
return d}
function Zd(a){if(ia(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;var d;d=dc(a[b]);a[c]=d}else Zd(a[b])}}
function Xd(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function Yd(a){var b="";F(a.childNodes,function(a){b+=a.nodeValue});
return b}
var Sd={"X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL","X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"};function $d(a,b){if(window.spf){var c="";if(a){var d=a.indexOf("jsbin/"),e=a.lastIndexOf(".js"),f=d+6;-1<d&&-1<e&&e>f&&(c=a.substring(f,e),c=c.replace(ae,""),c=c.replace(be,""),c=c.replace("debug-",""),c=c.replace("tracing-",""))}spf.script.load(a,c,b)}else ce(a,b)}
function ce(a,b){var c=de(a),d=document.getElementById(c),e=d&&B(d,"loaded"),f=d&&!e;if(e)b&&b();else{if(b){var e=Kd(c,b),g=""+ja(b);ee[g]=e}f||(d=fe(a,c,function(){B(d,"loaded")||(fb(d,"loaded","true"),Nd(c),A(oa(Pd,c),0))}))}}
function fe(a,b,c){var d=document.createElement("script");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
d.onreadystatechange=function(){switch(d.readyState){case "loaded":case "complete":d.onload()}};
d.src=a;a=document.getElementsByTagName("head")[0]||document.body;a.insertBefore(d,a.firstChild);return d}
function ge(a,b){if(a&&b){var c=""+ja(b);(c=ee[c])&&Md(c)}}
function de(a){var b=document.createElement("a");Jc(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"js-"+Xa(a)}
var ae=/\.vflset|-vfl[a-zA-Z0-9_+=-]+/,be=/-[a-zA-Z]{2,3}_[a-zA-Z]{2,3}(?=(\/|$))/,ee={};function he(a){if(window.spf){var b=a.match(ie);spf.style.load(a,b?b[1]:"",void 0)}else je(a)}
function je(a){var b=ke(a),c=document.getElementById(b),d=c&&B(c,"loaded");d||c&&!d||(c=le(a,b,function(){B(c,"loaded")||(fb(c,"loaded","true"),Nd(b),A(oa(Pd,b),0))}))}
function le(a,b,c){var d=document.createElement("link");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
a=Lc(a);Kc(d,a);(document.getElementsByTagName("head")[0]||document.body).appendChild(d);return d}
function ke(a){var b=document.createElement("a");Jc(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"css-"+Xa(a)}
var ie=/cssbin\/(?:debug-)?([a-zA-Z0-9_-]+?)(?:-2x|-web|-rtl|-vfl|.css)/;var me={},ne=0;function oe(a,b){a&&(z("USE_NET_AJAX_FOR_PING_TRANSPORT",!1)?Qd(a,b):pe(a,b))}
function pe(a,b){var c=new Image,d=""+ne++;me[d]=c;c.onload=c.onerror=function(){b&&me[d]&&b();delete me[d]};
c.src=a}
;function qe(){var a=Pa(re);return new L(function(b,c){a.G=function(a){kb(a)?b(a):c(new se("Request failed, status="+a.status,"net.badstatus"))};
a.onError=function(){c(new se("Unknown request error","net.unknown"))};
a.T=function(){c(new se("Request timed out","net.timeout"))};
Ud("//googleads.g.doubleclick.net/pagead/id",a)})}
function se(a,b){sa.call(this,a+", errorCode="+b);this.errorCode=b}
x(se,sa);se.prototype.name="PromiseAjaxError";var te=null;function ue(){var a=z("BG_I",null),b=z("BG_IU",null),c=z("BG_P",void 0);b?$d(b,function(){te=new botguard.bg(c)}):a&&(eval(a),te=new botguard.bg(c))}
function ve(){return null!=te}
function we(){return te?te.invoke():null}
;function xe(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));a=a.substring(0,a.indexOf("://"));if("http"!==a&&"https"!==a&&"chrome-extension"!==a&&"file"!==a&&"android-app"!==a)throw Error("Invalid URI scheme in origin");var c="",d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1),b=b.substring(0,d);
if("http"===a&&"80"!==e||"https"===a&&"443"!==e)c=":"+e}return a+"://"+b+c}
;function ye(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;u=m=0}
function b(a){for(var b=g,c=0;64>c;c+=4)b[c/4]=a[c]<<24|a[c+1]<<16|a[c+2]<<8|a[c+3];for(c=16;80>c;c++)a=b[c-3]^b[c-8]^b[c-14]^b[c-16],b[c]=(a<<1|a>>>31)&4294967295;a=e[0];for(var d=e[1],f=e[2],h=e[3],k=e[4],m,u,c=0;80>c;c++)40>c?20>c?(m=h^d&(f^h),u=1518500249):(m=d^f^h,u=1859775393):60>c?(m=d&f|h&(d|f),u=2400959708):(m=d^f^h,u=3395469782),m=((a<<5|a>>>27)&4294967295)+m+k+u+b[c]&4294967295,k=h,h=f,f=(d<<30|d>>>2)&4294967295,d=a,a=m;e[0]=e[0]+a&4294967295;e[1]=e[1]+d&4294967295;e[2]=e[2]+f&4294967295;
e[3]=e[3]+h&4294967295;e[4]=e[4]+k&4294967295}
function c(a,c){if("string"===typeof a){a=unescape(encodeURIComponent(a));for(var d=[],e=0,g=a.length;e<g;++e)d.push(a.charCodeAt(e));a=d}c||(c=a.length);d=0;if(0==m)for(;d+64<c;)b(a.slice(d,d+64)),d+=64,u+=64;for(;d<c;)if(f[m++]=a[d++],u++,64==m)for(m=0,b(f);d+64<c;)b(a.slice(d,d+64)),d+=64,u+=64}
function d(){var a=[],d=8*u;56>m?c(k,56-m):c(k,64-(m-56));for(var g=63;56<=g;g--)f[g]=d&255,d>>>=8;b(f);for(g=d=0;5>g;g++)for(var h=24;0<=h;h-=8)a[d++]=e[g]>>h&255;return a}
for(var e=[],f=[],g=[],k=[128],h=1;64>h;++h)k[h]=0;var m,u;a();return{reset:a,update:c,digest:d,kb:function(){for(var a=d(),b="",c=0;c<a.length;c++)b+="0123456789ABCDEF".charAt(Math.floor(a[c]/16))+"0123456789ABCDEF".charAt(a[c]%16);return b}}}
;/*
 gapi.loader.OBJECT_CREATE_TEST_OVERRIDE &&*/
var ze=window,Ae=document,Be=ze.location;function Ce(){}
var De=/\[native code\]/;function N(a,b,c){return a[b]=a[b]||c}
function Ee(a){for(var b=0;b<this.length;b++)if(this[b]===a)return b;return-1}
function Fe(a){a=a.sort();for(var b=[],c=void 0,d=0;d<a.length;d++){var e=a[d];e!=c&&b.push(e);c=e}return b}
function O(){var a;if((a=Object.create)&&De.test(a))a=a(null);else{a={};for(var b in a)a[b]=void 0}return a}
var Ge=N(ze,"gapi",{});function He(){}
;function Ie(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.shiftKey=this.ctrlKey=this.altKey=!1;this.clientY=this.clientX=0;this.changedTouches=null;if(a=a||window.event){this.event=a;for(var b in a)b in Je||(this[b]=a[b]);(b=a.target||a.srcElement)&&3==b.nodeType&&(b=b.parentNode);this.target=b;if(b=a.relatedTarget)try{b=b.nodeName?b:null}catch(c){b=null}else"mouseover"==this.type?b=a.fromElement:"mouseout"==
this.type&&(b=a.toElement);this.relatedTarget=b;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey}}
Ie.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
Ie.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
Ie.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};
var Je={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};function Ke(a,b,c){this.b=a;this.g=b;this.f=c}
var Le=1;function Me(a){var b={};void 0!==a.b?b.trackingParams=a.b:(b.veType=a.g,null!=a.f&&(b.veCounter=a.f));return b}
;function Ne(a){this.b=a}
Ne.prototype.set=function(a,b){p(b)?this.b.set(a,xa(b)):this.b.remove(a)};
Ne.prototype.get=function(a){var b;try{b=this.b.get(a)}catch(c){return}if(null!==b)try{return va(b)}catch(c){throw"Storage: Invalid value was encountered";}};
Ne.prototype.remove=function(a){this.b.remove(a)};function Oe(a){return z("EXPERIMENT_FLAGS",{})[a]}
;function Pe(){return{apiaryHost:z("APIARY_HOST",void 0),hb:z("APIARY_HOST_FIRSTPARTY",void 0),gapiHintOverride:z("GAPI_HINT_OVERRIDE"),gapiHintParams:z("GAPI_HINT_PARAMS",void 0),innertubeApiKey:z("INNERTUBE_API_KEY",void 0),innertubeApiVersion:z("INNERTUBE_API_VERSION",void 0),tb:z("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),innertubeContextClientVersion:z("INNERTUBE_CONTEXT_CLIENT_VERSION",void 0),vb:z("INNERTUBE_CONTEXT_HL",void 0),ub:z("INNERTUBE_CONTEXT_GL",void 0),Vb:z("XHR_APIARY_HOST",void 0)}}
function Qe(a){a={client:{hl:a.vb,gl:a.ub,clientName:a.tb,clientVersion:a.innertubeContextClientVersion}};z("DELEGATED_SESSION_ID")&&(a.user={onBehalfOfUser:z("DELEGATED_SESSION_ID")});return a}
;var P;P=N(ze,"___jsl",O());N(P,"I",0);N(P,"hel",10);function Re(){var a=Be.href,b;if(P.dpo)b=P.h;else{b=P.h;var c=RegExp("([#].*&|[#])jsh=([^&#]*)","g"),d=RegExp("([?#].*&|[?#])jsh=([^&#]*)","g");if(a=a&&(c.exec(a)||d.exec(a)))try{b=decodeURIComponent(a[2])}catch(e){}}return b}
function Se(a){var b=N(P,"PQ",[]);P.PQ=[];var c=b.length;if(0===c)a();else for(var d=0,e=function(){++d===c&&a()},f=0;f<c;f++)b[f](e)}
function Te(a){return N(N(P,"H",O()),a,O())}
;function Ue(a){this.b=a}
x(Ue,Ne);function Ve(a){this.data=a}
function We(a){return!p(a)||a instanceof Ve?a:new Ve(a)}
Ue.prototype.set=function(a,b){Ue.B.set.call(this,a,We(b))};
Ue.prototype.f=function(a){a=Ue.B.get.call(this,a);if(!p(a)||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
Ue.prototype.get=function(a){if(a=this.f(a)){if(a=a.data,!p(a))throw"Storage: Invalid value was encountered";}else a=void 0;return a};function Xe(a,b,c){var d=[],e=[];if(1==(ea(c)?2:1))return e=[b,a],F(d,function(a){e.push(a)}),Ye(e.join(" "));
var f=[],g=[];F(c,function(a){g.push(a.key);f.push(a.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];F(d,function(a){e.push(a)});
a=Ye(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function Ye(a){var b=ye();b.update(a);return b.kb().toLowerCase()}
;var Ze=N(P,"perf",O());N(Ze,"g",O());var $e=N(Ze,"i",O());N(Ze,"r",[]);O();O();function af(a,b,c){b&&0<b.length&&(b=bf(b),c&&0<c.length&&(b+="___"+bf(c)),28<b.length&&(b=b.substr(0,28)+(b.length-28)),c=b,b=N($e,"_p",O()),N(b,c,O())[a]=(new Date).getTime(),b=Ze.r,"function"===typeof b?b(a,"_p",c):b.push([a,"_p",c]))}
function bf(a){return a.join("__").replace(/\./g,"_").replace(/\-/g,"_").replace(/\,/g,"_")}
;function cf(a){if(a.classList)return a.classList;a=a.className;return t(a)&&a.match(/\S+/g)||[]}
function df(a,b){return a.classList?a.classList.contains(b):wb(cf(a),b)}
function ef(a,b){a.classList?a.classList.add(b):df(a,b)||(a.className+=0<a.className.length?" "+b:b)}
function ff(a,b){a.classList?a.classList.remove(b):df(a,b)&&(a.className=sb(cf(a),function(a){return a!=b}).join(" "))}
function gf(a,b,c){c?ef(a,b):ff(a,b)}
;function hf(a){this.b=a}
x(hf,Ue);hf.prototype.set=function(a,b,c){if(b=We(b)){if(c){if(c<w()){hf.prototype.remove.call(this,a);return}b.expiration=c}b.creation=w()}hf.B.set.call(this,a,b)};
hf.prototype.f=function(a,b){var c=hf.B.f.call(this,a);if(c){var d;if(d=!b){d=c.creation;var e=c.expiration;d=!!e&&e<w()||!!d&&d>w()}if(d)hf.prototype.remove.call(this,a);else return c}};var jf=O(),kf=[];function lf(a){throw Error("Bad hint"+(a?": "+a:""));}
kf.push(["jsl",function(a){for(var b in a)if(Object.prototype.hasOwnProperty.call(a,b)){var c=a[b];"object"==typeof c?P[b]=N(P,b,[]).concat(c):N(P,b,c)}if(b=a.u)a=N(P,"us",[]),a.push(b),(b=/^https:(.*)$/.exec(b))&&a.push("http:"+b[1])}]);
var mf=/^(\/[a-zA-Z0-9_\-]+)+$/,nf=[/\/amp\//,/\/amp$/,/^\/amp$/],of=/^[a-zA-Z0-9\-_\.,!]+$/,pf=/^gapi\.loaded_[0-9]+$/,qf=/^[a-zA-Z0-9,._-]+$/;function rf(a,b,c,d){var e=a.split(";"),f=e.shift(),g=jf[f],k=null;g?k=g(e,b,c,d):lf("no hint processor for: "+f);k||lf("failed to generate load url");b=k;c=b.match(sf);(d=b.match(tf))&&1===d.length&&uf.test(b)&&c&&1===c.length||lf("failed sanity: "+a);return k}
function vf(a,b,c,d){function e(a){return encodeURIComponent(a).replace(/%2C/g,",")}
a=wf(a);pf.test(c)||lf("invalid_callback");b=xf(b);d=d&&d.length?xf(d):null;return[encodeURIComponent(a.Jb).replace(/%2C/g,",").replace(/%2F/g,"/"),"/k=",e(a.version),"/m=",e(b),d?"/exm="+e(d):"","/rt=j/sv=1/d=1/ed=1",a.Ea?"/am="+e(a.Ea):"",a.Pa?"/rs="+e(a.Pa):"",a.Wa?"/t="+e(a.Wa):"","/cb=",e(c)].join("")}
function wf(a){"/"!==a.charAt(0)&&lf("relative path");for(var b=a.substring(1).split("/"),c=[];b.length;){a=b.shift();if(!a.length||0==a.indexOf("."))lf("empty/relative directory");else if(0<a.indexOf("=")){b.unshift(a);break}c.push(a)}a={};for(var d=0,e=b.length;d<e;++d){var f=b[d].split("="),g=decodeURIComponent(f[0]),k=decodeURIComponent(f[1]);2==f.length&&g&&k&&(a[g]=a[g]||k)}b="/"+c.join("/");mf.test(b)||lf("invalid_prefix");c=0;for(d=nf.length;c<d;++c)nf[c].test(b)&&lf("invalid_prefix");c=yf(a,
"k",!0);d=yf(a,"am");e=yf(a,"rs");a=yf(a,"t");return{Jb:b,version:c,Ea:d,Pa:e,Wa:a}}
function xf(a){for(var b=[],c=0,d=a.length;c<d;++c){var e=a[c].replace(/\./g,"_").replace(/-/g,"_");qf.test(e)&&b.push(e)}return b.join(",")}
function yf(a,b,c){a=a[b];!a&&c&&lf("missing: "+b);if(a){if(of.test(a))return a;lf("invalid: "+b)}return null}
var uf=/^https?:\/\/[a-z0-9_.-]+\.google\.com(:\d+)?\/[a-zA-Z0-9_.,!=\-\/]+$/,tf=/\/cb=/g,sf=/\/\//g;function zf(){var a=Re();if(!a)throw Error("Bad hint");return a}
jf.m=function(a,b,c,d){(a=a[0])||lf("missing_hint");return"https://apis.google.com"+vf(a,b,c,d)};
var Af=decodeURI("%73cript"),Bf=/^[-+_0-9\/A-Za-z]+={0,2}$/;function Cf(a,b){for(var c=[],d=0;d<a.length;++d){var e=a[d];e&&0>Ee.call(b,e)&&c.push(e)}return c}
function Df(){var a=P.nonce;if(void 0!==a)return a&&a===String(a)&&a.match(Bf)?a:P.nonce=null;var b=N(P,"us",[]);if(!b||!b.length)return P.nonce=null;for(var c=Ae.getElementsByTagName(Af),d=0,e=c.length;d<e;++d){var f=c[d];if(f.src&&(a=String(f.getAttribute("nonce")||"")||null)){for(var g=0,k=b.length;g<k&&b[g]!==f.src;++g);if(g!==k&&a&&a===String(a)&&a.match(Bf))return P.nonce=a}}return null}
function Ef(a){if("loading"!=Ae.readyState)Ff(a);else{var b=Df(),c="";null!==b&&(c=' nonce="'+b+'"');Ae.write("<"+Af+' src="'+encodeURI(a)+'"'+c+"></"+Af+">")}}
function Ff(a){var b=Ae.createElement(Af);b.setAttribute("src",a);a=Df();null!==a&&b.setAttribute("nonce",a);b.async="true";(a=Ae.getElementsByTagName(Af)[0])?a.parentNode.insertBefore(b,a):(Ae.head||Ae.body||Ae.documentElement).appendChild(b)}
function Gf(a,b){var c=b&&b._c;if(c)for(var d=0;d<kf.length;d++){var e=kf[d][0],f=kf[d][1];f&&Object.prototype.hasOwnProperty.call(c,e)&&f(c[e],a,b)}}
function Hf(a,b,c){If(function(){var c;c=b===Re()?N(Ge,"_",O()):O();c=N(Te(b),"_",c);a(c)},c)}
function Jf(a,b){var c=b||{};"function"==typeof b&&(c={},c.callback=b);Gf(a,c);var d=a?a.split(":"):[],e=c.h||zf(),f=N(P,"ah",O());if(f["::"]&&d.length){for(var g=[],k=null;k=d.shift();){var h=k.split("."),h=f[k]||f[h[1]&&"ns:"+h[0]||""]||e,m=g.length&&g[g.length-1]||null,u=m;m&&m.hint==h||(u={hint:h,features:[]},g.push(u));u.features.push(k)}var aa=g.length;if(1<aa){var nb=c.callback;nb&&(c.callback=function(){0==--aa&&nb()})}for(;d=g.shift();)Kf(d.features,c,d.hint)}else Kf(d||[],c,e)}
function Kf(a,b,c){function d(a,b){if(aa)return 0;ze.clearTimeout(u);nb.push.apply(nb,ha);var d=((Ge||{}).config||{}).update;d?d(f):f&&N(P,"cu",[]).push(f);if(b){af("me0",a,uc);try{Hf(b,c,m)}finally{af("me1",a,uc)}}return 1}
a=Fe(a)||[];var e=b.callback,f=b.config,g=b.timeout,k=b.ontimeout,h=b.onerror,m=void 0;"function"==typeof h&&(m=h);var u=null,aa=!1;if(g&&!k||!g&&k)throw"Timeout requires both the timeout parameter and ontimeout parameter to be set";var h=N(Te(c),"r",[]).sort(),nb=N(Te(c),"L",[]).sort(),uc=[].concat(h);0<g&&(u=ze.setTimeout(function(){aa=!0;k()},g));
var ha=Cf(a,nb);if(ha.length){var ha=Cf(a,h),Ba=N(P,"CP",[]),Ca=Ba.length;Ba[Ca]=function(a){function b(){var a=Ba[Ca+1];a&&a()}
function c(b){Ba[Ca]=null;d(ha,a)&&Se(function(){e&&e();b()})}
if(!a)return 0;af("ml1",ha,uc);0<Ca&&Ba[Ca-1]?Ba[Ca]=function(){c(b)}:c(b)};
if(ha.length){var Id="loaded_"+P.I++;Ge[Id]=function(a){Ba[Ca](a);Ge[Id]=null};
a=rf(c,ha,"gapi."+Id,h);h.push.apply(h,ha);af("ml0",ha,uc);b.sync||ze.___gapisync?Ef(a):Ff(a)}else Ba[Ca](Ce)}else d(ha)&&e&&e()}
function If(a,b){if(P.hee&&0<P.hel)try{return a()}catch(c){b&&b(c),P.hel--,Jf("debug_error",function(){try{window.___jsl.hefn(c)}catch(d){throw c;}})}else try{return a()}catch(c){throw b&&b(c),c;
}}
Ge.load=function(a,b){return If(function(){return Jf(a,b)})};function Lf(a){this.b=a}
x(Lf,hf);function Mf(){}
x(Mf,He);Mf.prototype.aa=function(){var a=0;hc(this.$(!0),function(){a++});
return a};
Mf.prototype.clear=function(){var a=ic(this.$(!0)),b=this;F(a,function(a){b.remove(a)})};function Nf(a){this.b=a}
x(Nf,Mf);l=Nf.prototype;l.isAvailable=function(){if(!this.b)return!1;try{return this.b.setItem("__sak","1"),this.b.removeItem("__sak"),!0}catch(a){return!1}};
l.set=function(a,b){try{this.b.setItem(a,b)}catch(c){if(0==this.b.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
l.get=function(a){a=this.b.getItem(a);if(!t(a)&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
l.remove=function(a){this.b.removeItem(a)};
l.aa=function(){return this.b.length};
l.$=function(a){var b=0,c=this.b,d=new fc;d.next=function(){if(b>=c.length)throw ec;var d=c.key(b++);if(a)return d;d=c.getItem(d);if(!t(d))throw"Storage mechanism: Invalid value was encountered";return d};
return d};
l.clear=function(){this.b.clear()};
l.key=function(a){return this.b.key(a)};function Of(){var a=null;try{a=window.localStorage||null}catch(b){}this.b=a}
x(Of,Nf);function Pf(){var a=null;try{a=window.sessionStorage||null}catch(b){}this.b=a}
x(Pf,Nf);var Qf=r("yt.dom.getNextId_");if(!Qf){Qf=function(){return++Rf};
q("yt.dom.getNextId_",Qf,void 0);var Rf=0}function Sf(){var a=document,b;ub(["fullscreenElement","webkitFullscreenElement","mozFullScreenElement","msFullscreenElement"],function(c){b=a[c];return!!b});
return b}
;function Tf(a){this.b=a||Pe();Uf||(Uf=Vf(this.b))}
var Uf=null;function Vf(a){return(new L(function(b){try{var c={gapiHintOverride:a.gapiHintOverride,_c:{jsl:{h:a.gapiHintParams}},callback:b},d=ga(c)?{callback:c}:c||{};d._c&&d._c.jsl&&d._c.jsl.h||Ra(d,{_c:{jsl:{h:z("GAPI_HINT_PARAMS",void 0)}}});if(d.gapiHintOverride||z("GAPI_HINT_OVERRIDE")){var e;var f=document.location.href;if(-1!=f.indexOf("?")){var f=(f||"").split("#")[0],g=f.split("?",2);e=Yb(1<g.length?g[1]:g[0])}else e={};var k=e.gapi_jsh;k&&Ra(d,{_c:{jsl:{h:k}}})}Jf("client",d)}catch(h){cb(h)}})).then(function(){})}
Tf.prototype.i=function(){var a=r("gapi.config.update");a("googleapis.config/auth/useFirstPartyAuth",!0);var b=this.b.apiaryHost;/^[\s\xa0]*$/.test(null==b?"":String(b))||a("googleapis.config/root",(-1==b.indexOf("://")?"//":"")+b);b=this.b.hb;/^[\s\xa0]*$/.test(null==b?"":String(b))||a("googleapis.config/root-1p",(-1==b.indexOf("://")?"//":"")+b);a("googleapis.config/sessionIndex",z("SESSION_INDEX"));r("gapi.client.setApiKey")(this.b.innertubeApiKey)};
Tf.prototype.f=function(){return{context:Qe(this.b)}};
Tf.prototype.g=function(a,b,c){var d,e=!1;0<c.timeout&&(d=A(function(){e||(e=!0,c.T&&c.T())},c.timeout));
Wf(this,a,b,function(a){if(!e)if(e=!0,d&&bb(d),a)c.G&&c.G(a);else if(c.onError)c.onError()})};
function Wf(a,b,c,d){var e={path:"/youtubei/"+a.b.innertubeApiVersion+"/"+b,headers:{"X-Goog-Visitor-Id":z("VISITOR_DATA")},method:"POST",body:xa(c)},f=v(a.i,a);Uf.then(function(){f();r("gapi.client.request")(e).execute(d||ba)})}
;var La=r("yt.events.listeners_")||{};q("yt.events.listeners_",La,void 0);var Xf=r("yt.events.counter_")||{count:0};q("yt.events.counter_",Xf,void 0);function Yf(a,b,c,d){a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return Ka(function(e){return e[0]==a&&e[1]==b&&e[2]==c&&e[4]==!!d})}
function Q(a,b,c,d){if(!a||!a.addEventListener&&!a.attachEvent)return"";d=!!d;var e=Yf(a,b,c,d);if(e)return e;var e=++Xf.count+"",f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document),g;g=f?function(d){d=new Ie(d);if(!kd(d.relatedTarget,function(b){return b==a},!0))return d.currentTarget=a,d.type=b,c.call(a,d)}:function(b){b=new Ie(b);
b.currentTarget=a;return c.call(a,b)};
g=ab(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),a.addEventListener(b,g,d)):a.attachEvent("on"+b,g);La[e]=[a,b,c,g,d];return e}
function Zf(a){a&&("string"==typeof a&&(a=[a]),F(a,function(a){if(a in La){var b=La[a],d=b[0],e=b[1],f=b[3],b=b[4];d.removeEventListener?d.removeEventListener(e,f,b):d.detachEvent&&d.detachEvent("on"+e,f);delete La[a]}}))}
;var $f={log_event:"events",log_interaction:"interactions"},ag={},bg={},cg=0,Na=r("yt.logging.transport.logsQueue_")||{};q("yt.logging.transport.logsQueue_",Na,void 0);function dg(a,b){Na[a.endpoint]=Na[a.endpoint]||[];var c=Na[a.endpoint];c.push(a.Ma);bg[a.endpoint]=b;c.length>=(Number(Oe("web_logging_max_batch")||0)||20)?eg():fg()}
function eg(){bb(cg);if(!Ma()){for(var a in Na){var b=ag[a];if(!b){b=bg[a];if(!b)continue;b=new b;ag[a]=b}var c=b.f();c.requestTimeMs=Math.round(db());c[$f[a]]=Na[a];b.g(a,c,{});delete Na[a]}Ma()||fg()}}
function fg(){bb(cg);cg=A(eg,z("LOGGING_BATCH_TIMEOUT",1E4))}
;function gg(){if(!hg&&!ig||!window.JSON)return null;var a;try{a=hg.get("yt-player-two-stage-token")}catch(b){}if(!t(a))try{a=ig.get("yt-player-two-stage-token")}catch(b){}if(!t(a))return null;try{a=JSON.parse(a,void 0)}catch(b){}return a}
var ig,jg=new Of;ig=jg.isAvailable()?new Lf(jg):null;var hg,kg=new Pf;hg=kg.isAvailable()?new Lf(kg):null;function lg(){this.b=Pe()}
lg.prototype.f=function(){return{context:Qe(this.b)}};
lg.prototype.g=function(a,b,c){b={headers:{"Content-Type":"application/json","X-Goog-Visitor-Id":z("VISITOR_DATA")},C:b,Na:"JSON",T:c.T,G:c.G,onError:c.onError,timeout:c.timeout,withCredentials:!0};a:{c=[];var d=xe(String(n.location.href)),e=n.__OVERRIDE_SID;null==e&&(e=(new Ga(document)).get("SID"));if(e&&(d=(e=0==d.indexOf("https:")||0==d.indexOf("chrome-extension:"))?n.__SAPISID:n.__APISID,null==d&&(d=(new Ga(document)).get(e?"SAPISID":"APISID")),d)){var e=e?"SAPISIDHASH":"APISIDHASH",f=String(n.location.href);
c=f&&d&&e?[e,Xe(xe(f),d,c||null)].join(" "):null;break a}c=null}c&&(b.headers.Authorization=c,b.headers["X-Goog-AuthUser"]=z("SESSION_INDEX",0));Td("//"+this.b.Vb+("/youtubei/"+this.b.innertubeApiVersion+"/"+a)+"?alt=json&key="+this.b.innertubeApiKey,b)};function mg(){if(null==r("_lact",window)){var a=parseInt(z("LACT"),10),a=isFinite(a)?w()-Math.max(a,0):-1;q("_lact",a,window);-1==a&&ng();Q(document,"keydown",ng);Q(document,"keyup",ng);Q(document,"mousedown",ng);Q(document,"mouseup",ng);Kd("page-mouse",ng);Kd("page-scroll",ng);Kd("page-resize",ng)}}
function ng(){null==r("_lact",window)&&(mg(),r("_lact",window));var a=w();q("_lact",a,window);Nd("USER_ACTIVE")}
function og(){var a=r("_lact",window);return null==a?-1:Math.max(w()-a,0)}
;var pg={},qg=0;function rg(a,b,c,d){var e={};e.eventTimeMs=Math.round(d||db());e[a]=b;Oe("web_gel_lact")&&(e.context={lastActivityMs:og()});dg({endpoint:"log_event",Ma:e},c)}
;function sg(a,b,c){tg(ug(),{attachChild:{csn:a,parentVisualElement:Me(b),visualElements:[Me(c)]}},void 0)}
function vg(a,b){var c=ug(),d=tb(b,function(a){return Me(a)});
tg(c,{visibilityUpdate:{csn:a,visualElements:d}})}
function tg(a,b,c){b.eventTimeMs=Math.round(db());b.lactMs=og();c&&(b.clientData=wg(c));dg({endpoint:"log_interaction",Ma:b},a)}
function wg(a){var b={};a.analyticsChannelData&&(b.analyticsDatas=tb(a.analyticsChannelData,function(a){return{tabName:a.tabName,cardName:a.cardName,isChannelScreen:a.isChannelScreen,insightId:a.insightId,externalChannelId:a.externalChannelId,externalContentOwnerId:a.externalContentOwnerId}}));
return{playbackData:{clientPlaybackNonce:a.clientPlaybackNonce},analyticsChannelData:b,externalLinkData:a.externalLinkData}}
;function ug(){return Oe("enable_youtubei_innertube")?lg:Tf}
;function xg(){var a=z("ROOT_VE_TYPE",void 0);return a?new Ke(void 0,a,void 0):null}
function yg(){var a=z("client-screen-nonce",void 0);a||(a=z("EVENT_ID",void 0));return a}
;function zg(a,b){isNaN(b)&&(b=void 0);var c=r("yt.scheduler.instance.addJob");return c?c(a,1,b):void 0===b?(a(),NaN):A(a,b||0)}
;r("yt.scheduler.instance.timerIdMap_");var Ag=[],Bg=!1;function Cg(){function a(){Bg=!0;"google_ad_status"in window?y("DCLKSTAT",1):y("DCLKSTAT",2)}
$d("//static.doubleclick.net/instream/ad_status.js",a);Ag.push(zg(function(){Bg||"google_ad_status"in window||(ge("//static.doubleclick.net/instream/ad_status.js",a),y("DCLKSTAT",3))},5E3))}
function Dg(){return parseInt(z("DCLKSTAT",0),10)}
;var Eg=w().toString();function Fg(a,b,c){b=void 0===b?{}:b;c=void 0===c?!1:c;var d=z("EVENT_ID");d&&(b.ei||(b.ei=d));if(b){var d=a,e=z("VALID_SESSION_TEMPDATA_DOMAINS",[]),f=Ib(G(window.location.href)[3]||null);f&&e.push(f);f=Ib(G(d)[3]||null);if(wb(e,f)||!f&&0==d.lastIndexOf("/",0))if(Oe("autoescape_tempdata_url")&&(e=document.createElement("a"),Jc(e,d),d=e.href),d){var f=G(d),d=f[5],e=f[6],f=f[7],g="";d&&(g+=d);e&&(g+="?"+e);f&&(g+="#"+f);d=g;e=d.indexOf("#");if(d=0>e?d:d.substr(0,e)){if(b.itct||b.ved)b.csn=b.csn||yg();
d="ST-"+Xa(d).toString(36);e=b?Nb(b):"";Ia.set(""+d,e,5,"/","youtube.com");b&&(b=b.itct||b.ved,d=r("yt.logging.screen.storeParentElement"),b&&d&&d(new Ke(b)))}}}if(c)return!1;if((window.ytspf||{}).enabled)spf.navigate(a);else{var k,h;k=void 0===k?{}:k;h=void 0===h?"":h;c=window.location;a=Jb(Mb([a],k))+h;a=a instanceof Pb?a:Tb(a);c.href=Rb(a)}return!0}
;function Gg(a){a=a||{};this.url=a.url||"";this.urlV9As2=a.url_v9as2||"";this.args=a.args||Pa(Hg);this.assets=a.assets||{};this.attrs=a.attrs||Pa(Ig);this.params=a.params||Pa(Jg);this.minVersion=a.min_version||"8.0.0";this.fallback=a.fallback||null;this.fallbackMessage=a.fallbackMessage||null;this.html5=!!a.html5;this.disable=a.disable||{};this.loaded=!!a.loaded;this.messages=a.messages||{}}
var Hg={enablejsapi:1},Ig={},Jg={allowscriptaccess:"always",allowfullscreen:"true",bgcolor:"#000000"};function Kg(a){a instanceof Gg||(a=new Gg(a));return a}
function Lg(a){var b=new Gg,c;for(c in a)if(a.hasOwnProperty(c)){var d=a[c];b[c]="object"==da(d)?Pa(d):d}return b}
;function Mg(){this.g=this.f=this.b=0;this.i="";var a=r("window.navigator.plugins"),b=r("window.navigator.mimeTypes"),a=a&&a["Shockwave Flash"],b=b&&b["application/x-shockwave-flash"],b=a&&b&&b.enabledPlugin&&a.description||"";if(a=b){var c=a.indexOf("Shockwave Flash");0<=c&&(a=a.substr(c+15));for(var c=a.split(" "),d="",a="",e=0,f=c.length;e<f;e++)if(d)if(a)break;else a=c[e];else d=c[e];d=d.split(".");c=parseInt(d[0],10)||0;d=parseInt(d[1],10)||0;e=0;if("r"==a.charAt(0)||"d"==a.charAt(0))e=parseInt(a.substr(1),
10)||0;a=[c,d,e]}else a=[0,0,0];this.i=b;b=a;this.b=b[0];this.f=b[1];this.g=b[2];if(0>=this.b){var g,k,h,m;if(eb)try{g=new ActiveXObject("ShockwaveFlash.ShockwaveFlash")}catch(u){g=null}else h=document.body,m=document.createElement("object"),m.setAttribute("type","application/x-shockwave-flash"),g=h.appendChild(m);if(g&&"GetVariable"in g)try{k=g.GetVariable("$version")}catch(u){k=""}h&&m&&h.removeChild(m);(g=k||"")?(g=g.split(" ")[1].split(","),g=[parseInt(g[0],10)||0,parseInt(g[1],10)||0,parseInt(g[2],
10)||0]):g=[0,0,0];this.b=g[0];this.f=g[1];this.g=g[2]}}
ca(Mg);function Ng(a,b,c,d){b="string"==typeof b?b.split("."):[b,c,d];b[0]=parseInt(b[0],10)||0;b[1]=parseInt(b[1],10)||0;b[2]=parseInt(b[2],10)||0;return a.b>b[0]||a.b==b[0]&&a.f>b[1]||a.b==b[0]&&a.f==b[1]&&a.g>=b[2]}
;function Og(){C.call(this);this.b=new M;lb(this,oa(mb,this.b))}
x(Og,C);Og.prototype.subscribe=function(a,b,c){return this.isDisposed()?0:this.b.subscribe(a,b,c)};
Og.prototype.O=function(a){return this.isDisposed()?!1:this.b.O(a)};
Og.prototype.i=function(a,b){this.isDisposed()||this.b.M.apply(this.b,arguments)};function Pg(a,b,c,d){this.top=a;this.right=b;this.bottom=c;this.left=d}
l=Pg.prototype;l.getHeight=function(){return this.bottom-this.top};
l.contains=function(a){return this&&a?a instanceof Pg?a.left>=this.left&&a.right<=this.right&&a.top>=this.top&&a.bottom<=this.bottom:a.l>=this.left&&a.l<=this.right&&a.o>=this.top&&a.o<=this.bottom:!1};
l.ceil=function(){this.top=Math.ceil(this.top);this.right=Math.ceil(this.right);this.bottom=Math.ceil(this.bottom);this.left=Math.ceil(this.left);return this};
l.floor=function(){this.top=Math.floor(this.top);this.right=Math.floor(this.right);this.bottom=Math.floor(this.bottom);this.left=Math.floor(this.left);return this};
l.round=function(){this.top=Math.round(this.top);this.right=Math.round(this.right);this.bottom=Math.round(this.bottom);this.left=Math.round(this.left);return this};function Qg(a,b,c,d){this.left=a;this.top=b;this.width=c;this.height=d}
Qg.prototype.contains=function(a){return a instanceof H?a.l>=this.left&&a.l<=this.left+this.width&&a.o>=this.top&&a.o<=this.top+this.height:this.left<=a.left&&this.left+this.width>=a.left+a.width&&this.top<=a.top&&this.top+this.height>=a.top+a.height};
Qg.prototype.ceil=function(){this.left=Math.ceil(this.left);this.top=Math.ceil(this.top);this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
Qg.prototype.floor=function(){this.left=Math.floor(this.left);this.top=Math.floor(this.top);this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
Qg.prototype.round=function(){this.left=Math.round(this.left);this.top=Math.round(this.top);this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function Rg(a,b){var c=Vc(a);return c.defaultView&&c.defaultView.getComputedStyle&&(c=c.defaultView.getComputedStyle(a,null))?c[b]||c.getPropertyValue(b)||"":""}
function Sg(a,b){return Rg(a,b)||(a.currentStyle?a.currentStyle[b]:null)||a.style&&a.style[b]}
function Tg(a){var b;try{b=a.getBoundingClientRect()}catch(c){return{left:0,top:0,right:0,bottom:0}}I&&a.ownerDocument.body&&(a=a.ownerDocument,b.left-=a.documentElement.clientLeft+a.body.clientLeft,b.top-=a.documentElement.clientTop+a.body.clientTop);return b}
function Ug(a,b){"number"==typeof a&&(a=(b?Math.round(a):a)+"px");return a}
function Vg(a){var b=Wg;if("none"!=Sg(a,"display"))return b(a);var c=a.style,d=c.display,e=c.visibility,f=c.position;c.visibility="hidden";c.position="absolute";c.display="inline";a=b(a);c.display=d;c.position=f;c.visibility=e;return a}
function Wg(a){var b=a.offsetWidth,c=a.offsetHeight,d=mc&&!b&&!c;return p(b)&&!d||!a.getBoundingClientRect?new Fa(b,c):(a=Tg(a),new Fa(a.right-a.left,a.bottom-a.top))}
function Xg(a,b){if(/^\d+px?$/.test(b))return parseInt(b,10);var c=a.style.left,d=a.runtimeStyle.left;a.runtimeStyle.left=a.currentStyle.left;a.style.left=b;var e=a.style.pixelLeft;a.style.left=c;a.runtimeStyle.left=d;return+e}
function Yg(a,b){var c=a.currentStyle?a.currentStyle[b]:null;return c?Xg(a,c):0}
var Zg={thin:2,medium:4,thick:6};function $g(a,b){if("none"==(a.currentStyle?a.currentStyle[b+"Style"]:null))return 0;var c=a.currentStyle?a.currentStyle[b+"Width"]:null;return c in Zg?Zg[c]:Xg(a,c)}
;function ah(a,b,c,d){C.call(this);this.g=b||null;this.D="*";this.i=c||null;this.b=null;this.channel=d||null;this.H=!!a;this.F=v(this.L,this);window.addEventListener("message",this.F)}
x(ah,C);ah.prototype.L=function(a){if(!("*"!=this.i&&a.origin!=this.i||this.g&&a.source!=this.g)&&t(a.data)){var b;try{b=va(a.data)}catch(c){return}if(!(null==b||this.H&&(this.b&&this.b!=b.id||this.channel&&this.channel!=b.channel))&&b)switch(b.event){case "listening":"null"!=a.origin?this.i=this.D=a.origin:cb(Error("MessageEvent origin is null"),"WARNING");this.g=a.source;this.b=b.id;this.f&&(this.f(),this.f=null);break;case "command":this.j&&(this.w&&!wb(this.w,b.func)||this.j(b.func,b.args))}}};
ah.prototype.sendMessage=function(a,b){var c=b||this.g;if(c){this.b&&(a.id=this.b);this.channel&&(a.channel=this.channel);try{var d=xa(a);c.postMessage(d,this.D)}catch(e){cb(e,"WARNING")}}};
ah.prototype.A=function(){window.removeEventListener("message",this.F);ah.B.A.call(this)};function bh(a,b,c){ah.call(this,a,b,c||z("POST_MESSAGE_ORIGIN",void 0)||window.document.location.protocol+"//"+window.document.location.hostname,"widget");this.w=this.f=this.j=null}
x(bh,ah);function ch(){var a=Sf();return a?a:null}
;var dh;var eh=D,eh=eh.toLowerCase();if(-1!=eh.indexOf("android")){var fh=eh.match(/android\D*(\d\.\d)[^\;|\)]*[\;\)]/);if(fh)dh=Number(fh[1]);else{var gh={cupcake:1.5,donut:1.6,eclair:2,froyo:2.2,gingerbread:2.3,honeycomb:3,"ice cream sandwich":4,jellybean:4.1},hh=[],ih=0,jh;for(jh in gh)hh[ih++]=jh;var kh=eh.match("("+hh.join("|")+")");dh=kh?gh[kh[0]]:0}}else dh=void 0;var lh=D,mh=lh.match(/\((BB10|PlayBook|BlackBerry);/);!mh||2>mh.length||lh.match(/Version\/(\d+\.\d+)/);D.match(/Mozilla\/[\d\.]+ \(Mobile;.* rv:([\d\.]+)\) Gecko\/[\d\.]+ Firefox\/[\d\.]+/);var nh;var oh=D,ph=oh.match(/\((iPad|iPhone|iPod)( Simulator)?;/);if(!ph||2>ph.length)nh=void 0;else{var qh=oh.match(/\((iPad|iPhone|iPod)( Simulator)?; (U; )?CPU (iPhone )?OS (\d+_\d)[_ ]/);nh=qh&&6==qh.length?Number(qh[5].replace("_",".")):0}0<=nh&&0<=D.search("Safari")&&D.search("Version");var rh=['video/mp4; codecs="avc1.42001E, mp4a.40.2"','video/webm; codecs="vp8.0, vorbis"'],sh=['audio/mp4; codecs="mp4a.40.2"'];I&&J("9");!mc||J("528");lc&&J("1.9b")||I&&J("8")||jc&&J("9.5")||mc&&J("528");lc&&!J("8")||I&&J("9");function th(a){C.call(this);this.b=[];this.f=a||this}
x(th,C);function uh(a,b,c,d){d=ab(v(d,a.f));d={target:b,name:c,pa:d};b.addEventListener(c,d.pa,void 0);a.b.push(d)}
function vh(a){for(;a.b.length;){var b=a.b.pop();b.target.removeEventListener(b.name,b.pa)}}
th.prototype.A=function(){vh(this);th.B.A.call(this)};function R(a,b){this.version=a;this.args=b}
function wh(a){if(!a.Ua){var b={};a.call(b);a.Ua=b.version}return a.Ua}
function xh(a,b){function c(){a.apply(this,b.args)}
if(!b.args||!b.version)throw Error("yt.pubsub2.Data.deserialize(): serializedData is incomplete.");var d;try{d=wh(a)}catch(e){}if(!d||b.version!=d)throw Error("yt.pubsub2.Data.deserialize(): serializedData version is incompatible.");c.prototype=a.prototype;try{return new c}catch(e){throw e.message="yt.pubsub2.Data.deserialize(): "+e.message,e;}}
function S(a,b){this.topic=a;this.b=b}
S.prototype.toString=function(){return this.topic};var yh=window.performance||window.mozPerformance||window.msPerformance||window.webkitPerformance||{};function zh(a){R.call(this,1,arguments)}
x(zh,R);var Ah=new S("timing-sent",zh);var Bh=r("yt.pubsub2.instance_")||new M;M.prototype.subscribe=M.prototype.subscribe;M.prototype.unsubscribeByKey=M.prototype.O;M.prototype.publish=M.prototype.M;M.prototype.clear=M.prototype.clear;q("yt.pubsub2.instance_",Bh,void 0);var Ch=r("yt.pubsub2.subscribedKeys_")||{};q("yt.pubsub2.subscribedKeys_",Ch,void 0);var Dh=r("yt.pubsub2.topicToKeys_")||{};q("yt.pubsub2.topicToKeys_",Dh,void 0);var Eh=r("yt.pubsub2.isAsync_")||{};q("yt.pubsub2.isAsync_",Eh,void 0);q("yt.pubsub2.skipSubKey_",null,void 0);
function T(a,b){var c=Fh();c&&c.publish.call(c,a.toString(),a,b)}
function U(a,b,c){var d=Fh();if(!d)return 0;var e=d.subscribe(a.toString(),function(d,g){if(!window.yt.pubsub2.skipSubKey_||window.yt.pubsub2.skipSubKey_!=e){var f=function(){if(Ch[e])try{if(g&&a instanceof S&&a!=d)try{g=xh(a.b,g)}catch(h){throw h.message="yt.pubsub2 cross-binary conversion error for "+a.toString()+": "+h.message,h;}b.call(c||window,g)}catch(h){cb(h)}};
Eh[a.toString()]?r("yt.scheduler.instance")?zg(f,void 0):A(f,0):f()}});
Ch[e]=!0;Dh[a.toString()]||(Dh[a.toString()]=[]);Dh[a.toString()].push(e);return e}
function Gh(a){var b=Fh();b&&("number"==typeof a&&(a=[a]),F(a,function(a){b.unsubscribeByKey(a);delete Ch[a]}))}
function Fh(){return r("yt.pubsub2.instance_")}
;function Hh(a,b,c){C.call(this);this.b=a;this.i=b||0;this.f=c;this.g=v(this.mb,this)}
x(Hh,C);l=Hh.prototype;l.ba=0;l.A=function(){Hh.B.A.call(this);this.stop();delete this.b;delete this.f};
l.start=function(a){this.stop();var b=this.g;a=p(a)?a:this.i;if(!ga(b))if(b&&"function"==typeof b.handleEvent)b=v(b.handleEvent,b);else throw Error("Invalid listener argument");this.ba=2147483647<Number(a)?-1:n.setTimeout(b,a||0)};
l.stop=function(){this.isActive()&&n.clearTimeout(this.ba);this.ba=0};
l.isActive=function(){return 0!=this.ba};
l.mb=function(){this.ba=0;this.b&&this.b.call(this.f)};var Ih={vc:!0},Jh={ad_at:"adType",cpn:"clientPlaybackNonce",csn:"clientScreenNonce",yt_lt:"loadType",yt_ad:"isMonetized",yt_ad_pr:"prerollAllowed",yt_red:"isRedSubscriber",yt_vis:"isVisible",docid:"videoId",plid:"videoId"},Kh=["ei","cver"],Lh=["isMonetized","prerollAllowed","isRedSubscriber","isVisible"],Mh=v(yh.clearResourceTimings||yh.webkitClearResourceTimings||yh.mozClearResourceTimings||yh.msClearResourceTimings||yh.oClearResourceTimings||ba,yh);
function Nh(a,b){if(!b&&"_"!=a[0]){var c=a;yh.mark&&(0==c.lastIndexOf("mark_",0)||(c="mark_"+c),yh.mark(c))}var c=Oh(),d=b||db();c[a]&&(c["_"+a]=c["_"+a]||[c[a]],c["_"+a].push(d));c[a]=d;(Ph()["tick_"+a]=b)||db();Oe("csi_on_gel")?(c=Qh(),"_start"==a?rg("latencyActionBaselined",{clientActionNonce:c},lg,b):rg("latencyActionTicked",{tickName:a,clientActionNonce:c},lg,b),c=!0):c=!1;if(c=!c)c=!r("yt.timing.pingSent_");if(c&&(d=z("TIMING_ACTION",void 0),c=Oh(),r("yt.timing.ready_")&&d&&c._start&&Rh())){var d=
!0,e=z("TIMING_WAIT",[]);if(e.length)for(var f=0,g=e.length;f<g;++f)if(!(e[f]in c)){d=!1;break}d&&Sh()}}
function Th(){var a=Uh().info.yt_lt="hot_bg";Ph().info_yt_lt=a;if(Oe("csi_on_gel"))if("yt_lt"in Jh){var b={},c=Jh.yt_lt;wb(Lh,c)&&(a=!!a);b[c]=a;a=Qh();b.clientActionNonce=a;rg("latencyActionInfo",b,lg)}else"yt_lt"in Kh||cb(Error("Unknown label yt_lt logged with GEL CSI."))}
function Rh(){var a=Oh();if(a.aft)return a.aft;for(var b=z("TIMING_AFT_KEYS",["ol"]),c=b.length,d=0;d<c;d++){var e=a[b[d]];if(e)return e}return NaN}
function Sh(){if(!Oe("csi_on_gel")){var a=Oh(),b=Uh().info,c=a._start,d;for(d in a)if(0==d.lastIndexOf("_",0)&&ea(a[d])){var e=d.slice(1);if(e in Ih){var f=tb(a[d],function(a){return Math.round(a-c)});
b["all_"+e]=f.join()}delete a[d]}e=!!b.ap;if(f=r("yt.timing.reportbuilder_")){if(f=f(a,b,void 0))Vh(f,e),Wh(),Mh(),Xh(!1,void 0),y("PREVIOUS_ACTION",z("TIMING_ACTION")),y("TIMING_ACTION","")}else{var g=z("CSI_SERVICE_NAME","youtube"),f={v:2,s:g,action:z("TIMING_ACTION",void 0)},k=b.srt;void 0!==a.srt&&delete b.srt;if(b.h5jse){var h=window.location.protocol+r("ytplayer.config.assets.js");(h=yh.getEntriesByName?yh.getEntriesByName(h)[0]:null)?b.h5jse=Math.round(b.h5jse-h.responseEnd):delete b.h5jse}a.aft=
Rh();Yh()&&"youtube"==g&&(Th(),g=a.vc,h=a.pbs,delete a.aft,b.aft=Math.round(h-g));for(var m in b)"_"!=m.charAt(0)&&(f[m]=b[m]);a.ps=db();b={};m=[];for(d in a)"_"!=d.charAt(0)&&(g=Math.round(a[d]-c),b[d]=g,m.push(d+"."+g));f.rt=m.join(",");(a=r("ytdebug.logTiming"))&&a(f,b);Vh(f,e,void 0);T(Ah,new zh(b.aft+(k||0)))}}}
function Vh(a,b,c){if(Oe("debug_csi_data")){var d=r("yt.timing.csiData");d||(d=[],q("yt.timing.csiData",d,void 0));d.push({page:location.href,time:new Date,args:a})}var d="",e;for(e in a)d+="&"+e+"="+a[e];a="/csi_204?"+d.substring(1);if(window.navigator&&window.navigator.sendBeacon&&b)try{window.navigator&&window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")||oe(a,void 0)}catch(f){oe(a,void 0)}else oe(a);Xh(!0,c)}
function Qh(){var a=Uh().nonce;if(!a){var b;a:{if(window.crypto&&window.crypto.getRandomValues)try{var c=Array(16),d=new Uint8Array(16);window.crypto.getRandomValues(d);for(a=0;a<c.length;a++)c[a]=d[a];b=c;break a}catch(e){}b=Array(16);for(c=0;16>c;c++){d=w();for(a=0;a<d%23;a++)b[c]=Math.random();b[c]=Math.floor(256*Math.random())}if(Eg)for(c=1,d=0;d<Eg.length;d++)b[c%16]=b[c%16]^b[(c-1)%16]/4^Eg.charCodeAt(d),c++}c=[];for(d=0;d<b.length;d++)c.push("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_".charAt(b[d]&
63));a=c.join("");Uh().nonce=a}return a}
function Oh(){return Uh().tick}
function Ph(){var a=Uh();"gel"in a||(a.gel={});return a.gel}
function Uh(){return r("ytcsi.data_")||Wh()}
function Wh(){var a={tick:{},info:{}};q("ytcsi.data_",a,void 0);return a}
function Xh(a,b){q("yt.timing."+(b||"")+"pingSent_",a,void 0)}
function Yh(){var a=Oh(),b=a.pbr,c=a.vc,a=a.pbs;return b&&c&&a&&b<c&&c<a&&1==Uh().info.yt_pvis}
;new Hh(Zh,1E3);function Zh(){Nh("vptl",0);Nh("vpl",0)}
;var $h={"api.invalidparam":2,auth:150,"drm.auth":150,"heartbeat.net":150,"heartbeat.servererror":150,"heartbeat.stop":150,"html5.unsupportedads":5,"fmt.noneavailable":5,"fmt.decode":5,"fmt.unplayable":5,"html5.missingapi":5,"html5.unsupportedlive":5,"drm.unavailable":5};function ai(a,b){C.call(this);this.w=this.j=a;this.Y=b;this.F=!1;this.f={};this.fa=this.X=null;this.Z=new M;lb(this,oa(mb,this.Z));this.i={};this.H=this.ga=this.g=this.oa=this.b=null;this.ca=!1;this.L=this.D=this.V=this.W=null;this.ha={};this.fb=["onReady"];this.da=new th(this);lb(this,oa(mb,this.da));this.ma=null;this.Ca=NaN;this.ea={};bi(this);this.K("onDetailedError",v(this.Bb,this));this.K("onTabOrderChange",v(this.jb,this));this.K("onTabAnnounce",v(this.Da,this));this.K("WATCH_LATER_VIDEO_ADDED",
v(this.Cb,this));this.K("WATCH_LATER_VIDEO_REMOVED",v(this.Db,this));Nc||(this.K("onMouseWheelCapture",v(this.zb,this)),this.K("onMouseWheelRelease",v(this.Ab,this)));this.K("onAdAnnounce",v(this.Da,this));this.R=new th(this);lb(this,oa(mb,this.R));this.na=!1;this.la=null}
x(ai,C);var ci=["drm.unavailable","fmt.noneavailable","html5.missingapi","html5.unsupportedads","html5.unsupportedlive"];l=ai.prototype;l.ya=function(a,b){this.isDisposed()||(di(this,a),ei(this,b),this.F&&fi(this))};
function di(a,b){a.oa=b;a.b=Lg(b);a.g=a.b.attrs.id||a.g;"video-player"==a.g&&(a.g=a.Y,a.b.attrs.id=a.Y);a.w.id==a.g&&(a.g+="-player",a.b.attrs.id=a.g);a.b.args.enablejsapi="1";a.b.args.playerapiid=a.Y;a.ga||(a.ga=gi(a,a.b.args.jsapicallback||"onYouTubePlayerReady"));a.b.args.jsapicallback=null;var c=a.b.attrs.width;c&&(a.w.style.width=Ug(Number(c)||c,!0));if(c=a.b.attrs.height)a.w.style.height=Ug(Number(c)||c,!0)}
l.pb=function(){return this.oa};
function fi(a){a.b.loaded||(a.b.loaded=!0,"0"!=a.b.args.autoplay?a.f.loadVideoByPlayerVars(a.b.args):a.f.cueVideoByPlayerVars(a.b.args))}
function hi(a){if(!p(a.b.disable.flash)){var b=a.b.disable,c;c=Ng(Mg.getInstance(),a.b.minVersion);b.flash=!c}return!a.b.disable.flash}
function ii(a,b){if((!b||(5!=($h[b.errorCode]||5)?0:-1!=ci.indexOf(b.errorCode)))&&hi(a)){var c=ji(a);c&&c.stopVideo&&c.stopVideo();var d=a.b;c&&c.getUpdatedConfigurationData&&(c=c.getUpdatedConfigurationData(),d=Kg(c));d.args.autoplay=1;d.args.html5_unavailable="1";di(a,d);ei(a,"flash")}}
function ei(a,b){if(!a.isDisposed()){if(!b){var c;if(!(c=!a.b.html5&&hi(a))){if(!p(a.b.disable.html5)){var d;c=!0;void 0!=a.b.args.deviceHasDisplay&&(c=a.b.args.deviceHasDisplay);if(2.2==dh)d=!0;else{a:{var e=c;c=r("yt.player.utils.videoElement_");c||(c=document.createElement("VIDEO"),q("yt.player.utils.videoElement_",c,void 0));try{if(c.canPlayType)for(var e=e?rh:sh,f=0;f<e.length;f++)if(c.canPlayType(e[f])){d=null;break a}d="fmt.noneavailable"}catch(g){d="html5.missingapi"}}d=!d}d&&(d=ki(a)||a.b.assets.js);
a.b.disable.html5=!d;d||(a.b.args.html5_unavailable="1")}c=!!a.b.disable.html5}b=c?hi(a)?"flash":"unsupported":"html5"}("flash"==b?a.Tb:a.Ub).call(a)}}
function ki(a){var b=!0,c=ji(a);c&&a.b&&(a=a.b,b=B(c,"version")==a.assets.js);return b&&!!r("yt.player.Application.create")}
l.Ub=function(){if(!this.ca){var a=ki(this);a&&"html5"==li(this)?(this.H="html5",this.F||this.U()):(mi(this),this.H="html5",a&&this.V?(this.j.appendChild(this.V),this.U()):(this.b.loaded=!0,this.W=v(function(){var a=this.j,c=Lg(this.b);r("yt.player.Application.create")(a,c);this.U()},this),this.ca=!0,a?this.W():($d(this.b.assets.js,this.W),he(this.b.assets.css))))}};
l.Tb=function(){var a=Lg(this.b);if(!this.D){var b=ji(this);b&&(this.D=document.createElement("SPAN"),this.D.tabIndex=0,uh(this.da,this.D,"focus",this.Ia),this.L=document.createElement("SPAN"),this.L.tabIndex=0,uh(this.da,this.L,"focus",this.Ia),b.parentNode&&b.parentNode.insertBefore(this.D,b),b.parentNode&&b.parentNode.insertBefore(this.L,b.nextSibling))}a.attrs.width=a.attrs.width||"100%";a.attrs.height=a.attrs.height||"100%";if("flash"==li(this))this.H="flash",this.F||this.U();else{mi(this);this.H=
"flash";this.b.loaded=!0;var b=Mg.getInstance(),c=(-1<b.i.indexOf("Gnash")&&-1==b.i.indexOf("AVM2")||9==b.b&&1==b.f||9==b.b&&0==b.f&&1==b.g?0:9<=b.b)||-1<navigator.userAgent.indexOf("Sony/COM2")&&!Ng(b,9,1,58)?a.url:a.urlV9As2;window!=window.top&&document.referrer&&(a.args.framer=document.referrer.substring(0,128));b=this.j;if(c){var b=t(b)?K(b):b,d=Pa(a.attrs);d.tabindex=0;var e=Pa(a.params);e.flashvars=Nb(a.args);if(eb){d.classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000";e.movie=c;var a=document.createElement("object"),
f;for(f in d)a.setAttribute(f,d[f]);for(var g in e)f=document.createElement("param"),f.setAttribute("name",g),f.setAttribute("value",e[g]),a.appendChild(f)}else{d.type="application/x-shockwave-flash";d.src=c;a=document.createElement("embed");a.setAttribute("name",d.id);for(var k in d)a.setAttribute(k,d[k]);for(var h in e)a.setAttribute(h,e[h])}g=document.createElement("div");g.appendChild(a);b.innerHTML=g.innerHTML}this.U()}};
l.Ia=function(){ji(this).focus()};
function ji(a){var b=K(a.g);!b&&a.w&&a.w.querySelector&&(b=a.w.querySelector("#"+a.g));return b}
l.U=function(){if(!this.isDisposed()){var a=ji(this),b=!1;try{a&&a.getApiInterface&&a.getApiInterface()&&(b=!0)}catch(f){}if(b)if(this.ca=!1,a.isNotServable&&a.isNotServable(this.b.args.video_id))ii(this);else{bi(this);this.F=!0;a=ji(this);a.addEventListener&&(this.X=ni(this,a,"addEventListener"));a.removeEventListener&&(this.fa=ni(this,a,"removeEventListener"));for(var b=a.getApiInterface(),b=b.concat(a.getInternalApiInterface()),c=0;c<b.length;c++){var d=b[c];this.f[d]||(this.f[d]=ni(this,a,d))}for(var e in this.i)this.X(e,
this.i[e]);fi(this);this.ga&&this.ga(this.f);this.Z.M("onReady",this.f)}else this.Ca=A(v(this.U,this),50)}};
function ni(a,b,c){var d=b[c];return function(){try{return a.ma=null,d.apply(b,arguments)}catch(e){"Bad NPObject as private data!"!=e.message&&"sendAbandonmentPing"!=c&&(e.message+=" ("+c+")",a.ma=e,cb(e,"WARNING"))}}}
function bi(a){a.F=!1;if(a.fa)for(var b in a.i)a.fa(b,a.i[b]);for(var c in a.ea)bb(parseInt(c,10));a.ea={};a.X=null;a.fa=null;for(var d in a.f)a.f[d]=null;a.f.addEventListener=v(a.K,a);a.f.removeEventListener=v(a.Lb,a);a.f.destroy=v(a.dispose,a);a.f.getLastError=v(a.qb,a);a.f.getPlayerType=v(a.rb,a);a.f.getCurrentVideoConfig=v(a.pb,a);a.f.loadNewVideoConfig=v(a.ya,a);a.f.isReady=v(a.Wb,a)}
l.Wb=function(){return this.F};
l.K=function(a,b){if(!this.isDisposed()){var c=gi(this,b);if(c){if(!wb(this.fb,a)&&!this.i[a]){var d=oi(this,a);this.X&&this.X(a,d)}this.Z.subscribe(a,c);"onReady"==a&&this.F&&A(oa(c,this.f),0)}}};
l.Lb=function(a,b){if(!this.isDisposed()){var c=gi(this,b);c&&Cd(this.Z,a,c)}};
function gi(a,b){var c=b;if("string"==typeof b){if(a.ha[b])return a.ha[b];c=function(){var a=r(b);a&&a.apply(n,arguments)};
a.ha[b]=c}return c?c:null}
function oi(a,b){var c="ytPlayer"+b+a.Y;a.i[b]=c;n[c]=function(c){var d=A(function(){if(!a.isDisposed()){a.Z.M(b,c);var e=a.ea,g=String(d);g in e&&delete e[g]}},0);
Oa(a.ea,String(d))};
return c}
l.jb=function(a){a=a?cd:bd;for(var b=a(document.activeElement);b&&(1!=b.nodeType||b==this.D||b==this.L||(b.focus(),b!=document.activeElement));)b=a(b)};
l.Da=function(a){Nd("a11y-announce",a)};
l.Bb=function(a){ii(this,a)};
l.Cb=function(a){Nd("WATCH_LATER_VIDEO_ADDED",a)};
l.Db=function(a){Nd("WATCH_LATER_VIDEO_REMOVED",a)};
l.zb=function(){this.na||(Rc?(this.la=$c(document),uh(this.R,window,"scroll",this.Ib),uh(this.R,this.j,"touchmove",this.Gb)):(uh(this.R,this.j,"mousewheel",this.La),uh(this.R,this.j,"wheel",this.La)),this.na=!0)};
l.Ab=function(){vh(this.R);this.na=!1};
l.La=function(a){a=a||window.event;a.returnValue=!1;a.preventDefault&&a.preventDefault()};
l.Ib=function(){window.scrollTo(this.la.l,this.la.o)};
l.Gb=function(a){a.preventDefault()};
l.rb=function(){return this.H||li(this)};
l.qb=function(){return this.ma};
function li(a){return(a=ji(a))?"div"==a.tagName.toLowerCase()?"html5":"flash":null}
function mi(a){Nh("dcp");a.cancel();bi(a);a.H=null;a.b&&(a.b.loaded=!1);var b=ji(a);"html5"==li(a)?a.V=b:b&&b.destroy&&b.destroy();ad(a.j);vh(a.da);a.D=null;a.L=null}
l.cancel=function(){this.W&&ge(this.b.assets.js,this.W);bb(this.Ca);this.ca=!1};
l.A=function(){mi(this);if(this.V&&this.b)try{this.V.destroy()}catch(b){cb(b)}this.ha=null;for(var a in this.i)n[this.i[a]]=null;this.oa=this.b=this.f=null;delete this.j;delete this.w;ai.B.A.call(this)};var pi={},qi="player_uid_"+(1E9*Math.random()>>>0);function ri(a,b){a=t(a)?K(a):a;b=Kg(b);var c=qi+"_"+ja(a),d=pi[c];if(d)return d.ya(b),d.f;d=new ai(a,c);pi[c]=d;Nd("player-added",d.f);lb(d,oa(si,d));A(function(){d.ya(b)},0);
return d.f}
function si(a){pi[a.Y]=null}
function ti(a){a=K(a);if(!a)return null;var b=qi+"_"+ja(a),c=pi[b];c||(c=new ai(a,b),pi[b]=c);return c.f}
;var ui=r("yt.abuse.botguardInitialized")||ve;q("yt.abuse.botguardInitialized",ui,void 0);var vi=r("yt.abuse.invokeBotguard")||we;q("yt.abuse.invokeBotguard",vi,void 0);var wi=r("yt.abuse.dclkstatus.checkDclkStatus")||Dg;q("yt.abuse.dclkstatus.checkDclkStatus",wi,void 0);var xi=r("yt.player.exports.navigate")||Fg;q("yt.player.exports.navigate",xi,void 0);var yi=r("yt.player.embed")||ri;q("yt.player.embed",yi,void 0);var zi=r("yt.player.getPlayerByElement")||ti;q("yt.player.getPlayerByElement",zi,void 0);
var Ai=r("yt.util.activity.init")||mg;q("yt.util.activity.init",Ai,void 0);var Bi=r("yt.util.activity.getTimeSinceActive")||og;q("yt.util.activity.getTimeSinceActive",Bi,void 0);var Ci=r("yt.util.activity.setTimestamp")||ng;q("yt.util.activity.setTimestamp",Ci,void 0);function Di(a){R.call(this,1,arguments);this.b=a}
x(Di,R);function V(a){R.call(this,1,arguments);this.b=a}
x(V,R);function Ei(a,b,c){R.call(this,3,arguments);this.g=a;this.f=b;this.b=null!=c?!!c:null}
x(Ei,R);function Fi(a,b,c,d,e){R.call(this,2,arguments);this.f=a;this.b=b;this.i=c||null;this.g=d||null;this.source=e||null}
x(Fi,R);function Gi(a,b,c){R.call(this,1,arguments);this.b=a;this.subscriptionId=b}
x(Gi,R);function Hi(a,b,c,d,e,f,g){R.call(this,1,arguments);this.f=a;this.subscriptionId=b;this.b=c;this.j=d||null;this.i=e||null;this.g=f||null;this.source=g||null}
x(Hi,R);
var Ii=new S("subscription-batch-subscribe",Di),Ji=new S("subscription-batch-unsubscribe",Di),Ki=new S("subscription-subscribe",Fi),Li=new S("subscription-subscribe-loading",V),Mi=new S("subscription-subscribe-loaded",V),Ni=new S("subscription-subscribe-success",Gi),Oi=new S("subscription-subscribe-external",Fi),Pi=new S("subscription-unsubscribe",Hi),Qi=new S("subscription-unsubscirbe-loading",V),Ri=new S("subscription-unsubscribe-loaded",V),Si=new S("subscription-unsubscribe-success",V),Ti=new S("subscription-external-unsubscribe",
Hi),Ui=new S("subscription-enable-ypc",V),Vi=new S("subscription-disable-ypc",V),Wi=new S("subscription-prefs",Ei),Xi=new S("subscription-prefs-success",Ei),Yi=new S("subscription-prefs-failure",Ei);function Zi(a,b){var c=document.location.protocol+"//"+document.domain+"/post_login";b&&(c=Ob(c,"mode",b));c=Ob("/signin?context=popup","next",c);c=Ob(c,"feature","sub_button");if(c=window.open(c,"loginPopup","width=375,height=440,resizable=yes,scrollbars=yes",!0)){var d=Kd("LOGGED_IN",function(b){Md(z("LOGGED_IN_PUBSUB_KEY",void 0));y("LOGGED_IN",!0);a(b)});
y("LOGGED_IN_PUBSUB_KEY",d);c.moveTo((screen.width-375)/2,(screen.height-440)/2)}}
q("yt.pubsub.publish",Nd,void 0);function $i(){var a=z("PLAYER_CONFIG");return a&&a.args&&void 0!==a.args.authuser?!0:!(!z("SESSION_INDEX")&&!z("LOGGED_IN"))}
;function aj(a,b){(a=K(a))&&a.style&&(a.style.display=b?"":"none",gf(a,"hid",!b))}
function bj(a){F(arguments,function(a){!fa(a)||a instanceof Element?aj(a,!0):F(a,function(a){bj(a)})})}
function cj(a){F(arguments,function(a){!fa(a)||a instanceof Element?aj(a,!1):F(a,function(a){cj(a)})})}
;var dj={},ej="ontouchstart"in document;function fj(a,b,c){var d;switch(a){case "mouseover":case "mouseout":d=3;break;case "mouseenter":case "mouseleave":d=9}return kd(c,function(a){return df(a,b)},!0,d)}
function W(a){var b="mouseover"==a.type&&"mouseenter"in dj||"mouseout"==a.type&&"mouseleave"in dj,c=a.type in dj||b;if("HTML"!=a.target.tagName&&c){if(b){var b="mouseover"==a.type?"mouseenter":"mouseleave",c=dj[b],d;for(d in c.f){var e=fj(b,d,a.target);e&&!kd(a.relatedTarget,function(a){return a==e},!0)&&c.M(d,e,b,a)}}if(b=dj[a.type])for(d in b.f)(e=fj(a.type,d,a.target))&&b.M(d,e,a.type,a)}}
Q(document,"blur",W,!0);Q(document,"change",W,!0);Q(document,"click",W);Q(document,"focus",W,!0);Q(document,"mouseover",W);Q(document,"mouseout",W);Q(document,"mousedown",W);Q(document,"keydown",W);Q(document,"keyup",W);Q(document,"keypress",W);Q(document,"cut",W);Q(document,"paste",W);ej&&(Q(document,"touchstart",W),Q(document,"touchend",W),Q(document,"touchcancel",W));function gj(a){this.j=a;this.g={};this.ja=[];this.i=[]}
function X(a,b){return"yt-uix"+(a.j?"-"+a.j:"")+(b?"-"+b:"")}
gj.prototype.unregister=function(){Md(this.ja);this.ja.length=0;Gh(this.i);this.i.length=0};
gj.prototype.init=ba;gj.prototype.dispose=ba;function hj(a,b,c){a.i.push(U(b,c,a))}
function ij(a,b,c){var d=X(a,void 0),e=v(c,a);b in dj||(dj[b]=new M);dj[b].subscribe(d,e);a.g[c]=e}
function jj(a,b,c){if(b in dj){var d=dj[b];Cd(d,X(a,void 0),a.g[c]);0>=d.aa()&&(d.dispose(),delete dj[b])}delete a.g[c]}
function kj(a,b){fb(a,"tooltip-text",b)}
;function lj(){gj.call(this,"tooltip");this.b=0;this.f={}}
x(lj,gj);ca(lj);l=lj.prototype;l.register=function(){ij(this,"mouseover",this.ia);ij(this,"mouseout",this.N);ij(this,"focus",this.Ha);ij(this,"blur",this.Fa);ij(this,"click",this.N);ij(this,"touchstart",this.Ta);ij(this,"touchend",this.ka);ij(this,"touchcancel",this.ka)};
l.unregister=function(){jj(this,"mouseover",this.ia);jj(this,"mouseout",this.N);jj(this,"focus",this.Ha);jj(this,"blur",this.Fa);jj(this,"click",this.N);jj(this,"touchstart",this.Ta);jj(this,"touchend",this.ka);jj(this,"touchcancel",this.ka);this.dispose();lj.B.unregister.call(this)};
l.dispose=function(){for(var a in this.f)this.N(this.f[a]);this.f={}};
l.ia=function(a){if(!(this.b&&1E3>w()-this.b)){var b=parseInt(B(a,"tooltip-hide-timer"),10);b&&(hb(a,"tooltip-hide-timer"),bb(b));var b=v(function(){mj(this,a);hb(a,"tooltip-show-timer")},this),c=parseInt(B(a,"tooltip-show-delay"),10)||0,b=A(b,c);
fb(a,"tooltip-show-timer",b.toString());a.title&&(kj(a,nj(a)),a.title="");b=ja(a).toString();this.f[b]=a}};
l.N=function(a){var b=parseInt(B(a,"tooltip-show-timer"),10);b&&(bb(b),hb(a,"tooltip-show-timer"));b=v(function(){if(a){var b=K(oj(this,a));b&&(pj(b),b&&b.parentNode&&b.parentNode.removeChild(b),hb(a,"content-id"));(b=K(oj(this,a,"arialabel")))&&b.parentNode&&b.parentNode.removeChild(b)}hb(a,"tooltip-hide-timer")},this);
b=A(b,50);fb(a,"tooltip-hide-timer",b.toString());if(b=B(a,"tooltip-text"))a.title=b;b=ja(a).toString();delete this.f[b]};
l.Ha=function(a){this.b=0;this.ia(a)};
l.Fa=function(a){this.b=0;this.N(a)};
l.Ta=function(a,b,c){c.changedTouches&&(this.b=0,(a=fj(b,X(this),c.changedTouches[0].target))&&this.ia(a))};
l.ka=function(a,b,c){c.changedTouches&&(this.b=w(),(a=fj(b,X(this),c.changedTouches[0].target))&&this.N(a))};
function qj(a,b){kj(a,b);var c=B(a,"content-id");(c=K(c))&&dd(c,b)}
function nj(a){return B(a,"tooltip-text")||a.title}
function mj(a,b){if(b){var c=nj(b);if(c){var d=K(oj(a,b));if(!d){d=document.createElement("div");d.id=oj(a,b);d.className=X(a,"tip");var e=document.createElement("div");e.className=X(a,"tip-body");var f=document.createElement("div");f.className=X(a,"tip-arrow");var g=document.createElement("div");g.setAttribute("aria-hidden","true");g.className=X(a,"tip-content");var k=rj(a,b),h=oj(a,b,"content");g.id=h;fb(b,"content-id",h);e.appendChild(g);k&&d.appendChild(k);d.appendChild(e);d.appendChild(f);var m=
gd(b),h=oj(a,b,"arialabel"),f=document.createElement("div");ef(f,X(a,"arialabel"));f.id=h;m=b.hasAttribute("aria-label")?b.getAttribute("aria-label"):"rtl"==document.body.getAttribute("dir")?c+" "+m:m+" "+c;dd(f,m);b.setAttribute("aria-labelledby",h);h=ch()||document.body;h.appendChild(f);h.appendChild(d);qj(b,c);(c=parseInt(B(b,"tooltip-max-width"),10))&&e.offsetWidth>c&&(e.style.width=c+"px",ef(g,X(a,"normal-wrap")));g=df(b,X(a,"reverse"));sj(a,b,d,e,k,g)||sj(a,b,d,e,k,!g);var u=X(a,"tip-visible");
A(function(){ef(d,u)},0)}}}}
function sj(a,b,c,d,e,f){var g;gf(c,X(a,"tip-reverse"),f);var k=0;f&&(k=1);a=Vg(b);f=new H((a.width-10)/2,f?a.height:0);var h=Vc(b);g=new H(0,0);var m;m=h?Vc(h):document;m=!I||9<=Number(Ac)||Zc(Tc(m).b)?m.documentElement:m.body;b!=m&&(m=Tg(b),h=$c(Tc(h).b),g.l=m.left+h.l,g.o=m.top+h.o);f=new H(g.l+f.l,g.o+f.o);f=new H(f.l,f.o);g=(k&8&&"rtl"==Sg(c,"direction")?k^4:k)&-9;k=Vg(c);h=new Fa(k.width,k.height);f=new H(f.l,f.o);h=new Fa(h.width,h.height);0!=g&&(g&4?f.l-=h.width+0:g&2&&(f.l-=h.width/2),g&
1&&(f.o-=h.height+0));g=new Qg(0,0,0,0);g.left=f.l;g.top=f.o;g.width=h.width;g.height=h.height;f=g;g=0;if(!(g&496||(g=f,h=new H(g.left,g.top),h instanceof H?(g=h.l,h=h.o):(g=h,h=void 0),c.style.left=Ug(g,!1),c.style.top=Ug(h,!1),h=new Fa(f.width,f.height),k==h||k&&h&&k.width==h.width&&k.height==h.height)))if(k=h,g=Zc(Tc(Vc(c)).b),!I||J("10")||g&&J("8"))f=c.style,lc?f.MozBoxSizing="border-box":mc?f.WebkitBoxSizing="border-box":f.boxSizing="border-box",f.width=Math.max(k.width,0)+"px",f.height=Math.max(k.height,
0)+"px";else if(f=c.style,g){if(I){g=Yg(c,"paddingLeft");h=Yg(c,"paddingRight");m=Yg(c,"paddingTop");var u=Yg(c,"paddingBottom");g=new Pg(m,h,u,g)}else g=Rg(c,"paddingLeft"),h=Rg(c,"paddingRight"),m=Rg(c,"paddingTop"),u=Rg(c,"paddingBottom"),g=new Pg(parseFloat(m),parseFloat(h),parseFloat(u),parseFloat(g));if(!I||9<=Number(Ac))h=Rg(c,"borderLeftWidth"),m=Rg(c,"borderRightWidth"),u=Rg(c,"borderTopWidth"),aa=Rg(c,"borderBottomWidth"),h=new Pg(parseFloat(u),parseFloat(m),parseFloat(aa),parseFloat(h));
else{h=$g(c,"borderLeft");m=$g(c,"borderRight");var u=$g(c,"borderTop"),aa=$g(c,"borderBottom"),h=new Pg(u,m,aa,h)}f.pixelWidth=k.width-h.left-g.left-g.right-h.right;f.pixelHeight=k.height-h.top-g.top-g.bottom-h.bottom}else f.pixelWidth=k.width,f.pixelHeight=k.height;f=Yc(window);1==c.nodeType?(c=Tg(c),h=new H(c.left,c.top)):(c=c.changedTouches?c.changedTouches[0]:c,h=new H(c.clientX,c.clientY));c=Vg(d);m=Math.floor(c.width/2);k=!!(f.height<h.o+a.height);a=!!(h.o<a.height);g=!!(h.l<m);f=!!(f.width<
h.l+m);h=(c.width+3)/-2- -5;b=B(b,"force-tooltip-direction");if("left"==b||g)h=-5;else if("right"==b||f)h=20-c.width-3;b=Math.floor(h)+"px";d.style.left=b;e&&(e.style.left=b,e.style.height=c.height+"px",e.style.width=c.width+"px");return!(k||a)}
function oj(a,b,c){a=X(a);var d=b.__yt_uid_key;d||(d=Qf(),b.__yt_uid_key=d);b=a+d;c&&(b+="-"+c);return b}
function rj(a,b){var c=null;oc&&df(b,X(a,"masked"))&&((c=K("yt-uix-tooltip-shared-mask"))?(c.parentNode.removeChild(c),bj(c)):(c=document.createElement("iframe"),c.src='javascript:""',c.id="yt-uix-tooltip-shared-mask",c.className=X(a,"tip-mask")));return c}
function pj(a){var b=K("yt-uix-tooltip-shared-mask"),c=b&&kd(b,function(b){return b==a},!1,2);
b&&c&&(b.parentNode.removeChild(b),cj(b),document.body.appendChild(b))}
;function tj(){gj.call(this,"subscription-button")}
x(tj,gj);ca(tj);tj.prototype.register=function(){ij(this,"click",this.qa);hj(this,Li,this.Ka);hj(this,Mi,this.Ja);hj(this,Ni,this.Fb);hj(this,Qi,this.Ka);hj(this,Ri,this.Ja);hj(this,Si,this.Hb);hj(this,Ui,this.yb);hj(this,Vi,this.xb)};
tj.prototype.unregister=function(){jj(this,"click",this.qa);tj.B.unregister.call(this)};
var jd={za:"hover-enabled",Xa:"yt-uix-button-subscribe",Ya:"yt-uix-button-subscribed",Xb:"ypc-enabled",Za:"yt-uix-button-subscription-container",$a:"yt-subscription-button-disabled-mask-container"},uj={Yb:"channel-external-id",ab:"subscriber-count-show-when-subscribed",bb:"subscriber-count-tooltip",cb:"subscriber-count-title",Zb:"href",$b:"insecure",Aa:"is-subscribed",ac:"parent-url",cc:"clicktracking",eb:"style-type",Ba:"subscription-id",dc:"target",gb:"ypc-enabled"};l=tj.prototype;
l.qa=function(a){var b=B(a,"href"),c=B(a,"insecure"),d=$i(),c=c&&!0;if(b)a=B(a,"target")||"_self",window.open(b,a);else if(!c)if(d){b=B(a,"channel-external-id");d=B(a,"clicktracking");if(B(a,"ypc-enabled"))var c=B(a,"ypc-item-type"),e=B(a,"ypc-item-id"),c={itemType:c,itemId:e,subscriptionElement:a};else c=null;e=B(a,"parent-url");if(B(a,"is-subscribed")){var f=B(a,"subscription-id");T(Pi,new Hi(b,f,c,a,d,e))}else T(Ki,new Fi(b,c,d,e))}else vj(this,a)};
l.Ka=function(a){this.S(a.b,this.Ra,!0)};
l.Ja=function(a){this.S(a.b,this.Ra,!1)};
l.Fb=function(a){this.S(a.b,this.Sa,!0,a.subscriptionId)};
l.Hb=function(a){this.S(a.b,this.Sa,!1)};
l.yb=function(a){this.S(a.b,this.nb)};
l.xb=function(a){this.S(a.b,this.lb)};
l.Sa=function(a,b,c){b?(fb(a,uj.Aa,"true"),c&&fb(a,uj.Ba,c)):(hb(a,uj.Aa),hb(a,uj.Ba));wj(a)};
l.Ra=function(a,b){var c;c=id(a);gf(c,jd.$a,b);a.setAttribute("aria-busy",b?"true":"false");a.disabled=b};
function wj(a){var b=B(a,uj.eb),c=!!B(a,"is-subscribed"),b="-"+b,d=jd.Ya+b;gf(a,jd.Xa+b,!c);gf(a,d,c);B(a,uj.bb)&&!B(a,uj.ab)&&(b=X(lj.getInstance()),gf(a,b,!c),a.title=c?"":B(a,uj.cb));c?A(function(){ef(a,jd.za)},1E3):ff(a,jd.za)}
l.nb=function(a){var b=!!B(a,"ypc-item-type"),c=!!B(a,"ypc-item-id");!B(a,"ypc-enabled")&&b&&c&&(ef(a,"ypc-enabled"),fb(a,uj.gb,"true"))};
l.lb=function(a){B(a,"ypc-enabled")&&(ff(a,"ypc-enabled"),hb(a,"ypc-enabled"))};
function xj(a,b){return sb(Wc(X(a)),function(a){return b==B(a,"channel-external-id")},a)}
l.ib=function(a,b,c){var d=Cb(arguments,2);F(a,function(a){b.apply(this,yb(a,d))},this)};
l.S=function(a,b,c){var d=xj(this,a);this.ib.apply(this,yb([d],Cb(arguments,1)))};
function vj(a,b){var c=v(function(a){a.discoverable_subscriptions&&y("SUBSCRIBE_EMBED_DISCOVERABLE_SUBSCRIPTIONS",a.discoverable_subscriptions);this.qa(b)},a);
Zi(c,"subscribe")}
;var yj=window.yt&&window.yt.uix&&window.yt.uix.widgets_||{};q("yt.uix.widgets_",yj,void 0);function zj(a){return(0==a.search("cue")||0==a.search("load"))&&"loadModule"!=a}
function Aj(a,b,c){t(a)&&(a={mediaContentUrl:a,startSeconds:b,suggestedQuality:c});b=/\/([ve]|embed)\/([^#?]+)/.exec(a.mediaContentUrl);a.videoId=b&&b[2]?b[2]:null;return Bj(a)}
function Bj(a,b,c){if(ia(a)){b="endSeconds startSeconds mediaContentUrl suggestedQuality videoId two_stage_token".split(" ");c={};for(var d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}return{videoId:a,startSeconds:b,suggestedQuality:c}}
function Cj(a,b,c,d){if(ia(a)&&!ea(a)){b="playlist list listType index startSeconds suggestedQuality".split(" ");c={};for(d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}c={index:b,startSeconds:c,suggestedQuality:d};t(a)&&16==a.length?c.list="PL"+a:c.playlist=a;return c}
function Dj(a){var b=a.video_id||a.videoId;if(t(b)){var c=gg()||{},d=gg()||{};p(void 0)?d[b]=void 0:delete d[b];var e=w()+3E5,f=ig;if(f&&window.JSON){t(d)||(d=JSON.stringify(d,void 0));try{f.set("yt-player-two-stage-token",d,e)}catch(g){f.remove("yt-player-two-stage-token")}}(b=c[b])&&(a.two_stage_token=b)}}
;var Ej=null,Fj=[];function Gj(a){return{externalChannelId:a.externalChannelId,wb:!!a.isChannelPaid,source:a.source,subscriptionId:a.subscriptionId}}
function Hj(a){a&&a.externalChannelId&&Ij(Gj(a))}
function Ij(a){$i()?(T(Ki,new Fi(a.externalChannelId,a.wb?{itemType:"U",itemId:a.externalChannelId}:null)),a=Nb({event:"subscribe",source:a.source}),oe("/gen_204?"+a,void 0)):Jj(a)}
function Jj(a){Zi(function(b){b.subscription_ajax&&Ij(a)},null)}
function Kj(a){a=Gj(a);T(Pi,new Hi(a.externalChannelId,a.subscriptionId,null));a=Nb({event:"unsubscribe",source:a.source});oe("/gen_204?"+a,void 0)}
function Lj(a){Ej&&Ej.channelSubscribed(a.b,a.subscriptionId)}
function Mj(a){Ej&&Ej.channelUnsubscribed(a.b)}
;function Nj(a){C.call(this);this.f=a;this.f.subscribe("command",this.Oa,this);this.g={};this.i=!1}
x(Nj,C);l=Nj.prototype;l.start=function(){this.i||this.isDisposed()||(this.i=!0,Oj(this.f,"RECEIVING"))};
l.Oa=function(a,b){if(this.i&&!this.isDisposed()){var c=b||{};switch(a){case "addEventListener":if(t(c.event)&&(c=c.event,!(c in this.g))){var d=v(this.Nb,this,c);this.g[c]=d;this.addEventListener(c,d)}break;case "removeEventListener":t(c.event)&&Pj(this,c.event);break;default:this.b.isReady()&&this.b[a]&&(c=Qj(a,b||{}),c=this.b[a].apply(this.b,c),(c=Rj(a,c))&&this.i&&!this.isDisposed()&&Oj(this.f,a,c))}}};
l.Nb=function(a,b){this.i&&!this.isDisposed()&&Oj(this.f,a,this.ra(a,b))};
l.ra=function(a,b){if(null!=b)return{value:b}};
function Pj(a,b){b in a.g&&(a.removeEventListener(b,a.g[b]),delete a.g[b])}
l.A=function(){var a=this.f,b=this.Oa;a.isDisposed()||Cd(a.b,"command",b,this);this.f=null;for(var c in this.g)Pj(this,c);Nj.B.A.call(this)};new M;function Sj(a,b,c){Og.call(this);this.f=a;this.g=b;this.j=c}
x(Sj,Og);function Oj(a,b,c){if(!a.isDisposed()){var d=a.f,e=a.g;a=a.j;d.isDisposed()||e!=d.b||(b={id:a,command:b},c&&(b.data=c),d.b.postMessage(xa(b),d.g))}}
Sj.prototype.A=function(){this.g=this.f=null;Sj.B.A.call(this)};function Tj(){var a=this.f=new bh(!!z("WIDGET_ID_ENFORCE")),b=v(this.Kb,this);a.j=b;a.w=null;this.f.channel="widget";if(a=z("WIDGET_ID"))this.f.b=a;this.i=[];this.w=!1;this.j={}}
l=Tj.prototype;l.Kb=function(a,b){if("addEventListener"==a&&b){var c=b[0];this.j[c]||"onReady"==c||(this.addEventListener(c,Uj(this,c)),this.j[c]=!0)}else this.Va(a,b)};
l.Va=function(){};
function Uj(a,b){return v(function(a){this.sendMessage(b,a)},a)}
l.addEventListener=function(){};
l.ob=function(){this.w=!0;this.sendMessage("initialDelivery",this.sa());this.sendMessage("onReady");F(this.i,this.Qa,this);this.i=[]};
l.sa=function(){return null};
function Vj(a,b){a.sendMessage("infoDelivery",b)}
l.Qa=function(a){this.w?this.f.sendMessage(a):this.i.push(a)};
l.sendMessage=function(a,b){this.Qa({event:a,info:void 0==b?null:b})};
l.dispose=function(){this.f=null};function Wj(a,b,c){C.call(this);this.b=a;this.g=c;this.i=Q(window,"message",v(this.j,this));this.f=new Sj(this,a,b);lb(this,oa(mb,this.f))}
x(Wj,C);Wj.prototype.j=function(a){var b;if(b=!this.isDisposed())if(b=a.origin==this.g)a:{b=this.b;do{var c;b:{c=a.source;do{if(c==b){c=!0;break b}if(c==c.parent)break;c=c.parent}while(null!=c);c=!1}if(c){b=!0;break a}b=b.opener}while(null!=b);b=!1}if(b&&(c=a.data,t(c))){try{c=va(c)}catch(d){return}c.command&&(a=this.f,b=c.command,c=c.data,a.isDisposed()||a.i("command",b,c))}};
Wj.prototype.A=function(){Zf(this.i);this.b=null;Wj.B.A.call(this)};function Xj(a,b){Nj.call(this,b);this.b=a;this.start()}
x(Xj,Nj);Xj.prototype.addEventListener=function(a,b){this.b.addEventListener(a,b)};
Xj.prototype.removeEventListener=function(a,b){this.b.removeEventListener(a,b)};
function Qj(a,b){switch(a){case "loadVideoById":return b=Bj(b),Dj(b),[b];case "cueVideoById":return b=Bj(b),Dj(b),[b];case "loadVideoByPlayerVars":return Dj(b),[b];case "cueVideoByPlayerVars":return Dj(b),[b];case "loadPlaylist":return b=Cj(b),Dj(b),[b];case "cuePlaylist":return b=Cj(b),Dj(b),[b];case "seekTo":return[b.seconds,b.allowSeekAhead];case "playVideoAt":return[b.index];case "setVolume":return[b.volume];case "setPlaybackQuality":return[b.suggestedQuality];case "setPlaybackRate":return[b.suggestedRate];
case "setLoop":return[b.loopPlaylists];case "setShuffle":return[b.shufflePlaylist];case "getOptions":return[b.module];case "getOption":return[b.module,b.option];case "setOption":return[b.module,b.option,b.value];case "handleGlobalKeyDown":return[b.keyCode,b.shiftKey]}return[]}
function Rj(a,b){switch(a){case "isMuted":return{muted:b};case "getVolume":return{volume:b};case "getPlaybackRate":return{playbackRate:b};case "getAvailablePlaybackRates":return{availablePlaybackRates:b};case "getVideoLoadedFraction":return{videoLoadedFraction:b};case "getPlayerState":return{playerState:b};case "getCurrentTime":return{currentTime:b};case "getPlaybackQuality":return{playbackQuality:b};case "getAvailableQualityLevels":return{availableQualityLevels:b};case "getDuration":return{duration:b};
case "getVideoUrl":return{videoUrl:b};case "getVideoEmbedCode":return{videoEmbedCode:b};case "getPlaylist":return{playlist:b};case "getPlaylistIndex":return{playlistIndex:b};case "getOptions":return{options:b};case "getOption":return{option:b}}}
Xj.prototype.ra=function(a,b){switch(a){case "onReady":return;case "onStateChange":return{playerState:b};case "onPlaybackQualityChange":return{playbackQuality:b};case "onPlaybackRateChange":return{playbackRate:b};case "onError":return{errorCode:b}}return Xj.B.ra.call(this,a,b)};
Xj.prototype.A=function(){Xj.B.A.call(this);delete this.b};function Yj(a){Tj.call(this);this.b=a;this.g=[];this.addEventListener("onReady",v(this.Eb,this));this.addEventListener("onVideoProgress",v(this.Rb,this));this.addEventListener("onVolumeChange",v(this.Sb,this));this.addEventListener("onApiChange",v(this.Mb,this));this.addEventListener("onPlaybackQualityChange",v(this.Ob,this));this.addEventListener("onPlaybackRateChange",v(this.Pb,this));this.addEventListener("onStateChange",v(this.Qb,this))}
x(Yj,Tj);l=Yj.prototype;l.Va=function(a,b){if(this.b[a]){b=b||[];if(0<b.length&&zj(a)){var c;c=b;if(ia(c[0])&&!ea(c[0]))c=c[0];else{var d={};switch(a){case "loadVideoById":case "cueVideoById":d=Bj.apply(window,c);break;case "loadVideoByUrl":case "cueVideoByUrl":d=Aj.apply(window,c);break;case "loadPlaylist":case "cuePlaylist":d=Cj.apply(window,c)}c=d}Dj(c);b.length=1;b[0]=c}this.b[a].apply(this.b,b);zj(a)&&Vj(this,this.sa())}};
l.Eb=function(){var a=v(this.ob,this);this.f.f=a};
l.addEventListener=function(a,b){this.g.push({eventType:a,listener:b});this.b.addEventListener(a,b)};
l.sa=function(){if(!this.b)return null;var a=this.b.getApiInterface();xb(a,"getVideoData");for(var b={apiInterface:a},c=0,d=a.length;c<d;c++){var e=a[c],f=e;if(0==f.search("get")||0==f.search("is")){var f=e,g=0;0==f.search("get")?g=3:0==f.search("is")&&(g=2);f=f.charAt(g).toLowerCase()+f.substr(g+1);try{var k=this.b[e]();b[f]=k}catch(h){}}}b.videoData=this.b.getVideoData();b.currentTimeLastUpdated_=w()/1E3;return b};
l.Qb=function(a){a={playerState:a,currentTime:this.b.getCurrentTime(),duration:this.b.getDuration(),videoData:this.b.getVideoData(),videoStartBytes:0,videoBytesTotal:this.b.getVideoBytesTotal(),videoLoadedFraction:this.b.getVideoLoadedFraction(),playbackQuality:this.b.getPlaybackQuality(),availableQualityLevels:this.b.getAvailableQualityLevels(),videoUrl:this.b.getVideoUrl(),playlist:this.b.getPlaylist(),playlistIndex:this.b.getPlaylistIndex(),currentTimeLastUpdated_:w()/1E3,playbackRate:this.b.getPlaybackRate(),
mediaReferenceTime:this.b.getMediaReferenceTime()};this.b.getProgressState&&(a.progressState=this.b.getProgressState());this.b.getStoryboardFormat&&(a.storyboardFormat=this.b.getStoryboardFormat());Vj(this,a)};
l.Ob=function(a){Vj(this,{playbackQuality:a})};
l.Pb=function(a){Vj(this,{playbackRate:a})};
l.Mb=function(){for(var a=this.b.getOptions(),b={namespaces:a},c=0,d=a.length;c<d;c++){var e=a[c],f=this.b.getOptions(e);b[e]={options:f};for(var g=0,k=f.length;g<k;g++){var h=f[g],m=this.b.getOption(e,h);b[e][h]=m}}this.sendMessage("apiInfoDelivery",b)};
l.Sb=function(){Vj(this,{muted:this.b.isMuted(),volume:this.b.getVolume()})};
l.Rb=function(a){a={currentTime:a,videoBytesLoaded:this.b.getVideoBytesLoaded(),videoLoadedFraction:this.b.getVideoLoadedFraction(),currentTimeLastUpdated_:w()/1E3,playbackRate:this.b.getPlaybackRate(),mediaReferenceTime:this.b.getMediaReferenceTime()};this.b.getProgressState&&(a.progressState=this.b.getProgressState());Vj(this,a)};
l.dispose=function(){Yj.B.dispose.call(this);for(var a=0;a<this.g.length;a++){var b=this.g[a];this.b.removeEventListener(b.eventType,b.listener)}this.g=[]};var Zj=document,Y=window;var ak=!1,bk="";function ck(a){a=a.match(/[\d]+/g);if(!a)return"";a.length=3;return a.join(".")}
(function(){if(navigator.plugins&&navigator.plugins.length){var a=navigator.plugins["Shockwave Flash"];if(a&&(ak=!0,a.description)){bk=ck(a.description);return}if(navigator.plugins["Shockwave Flash 2.0"]){ak=!0;bk="2.0.0.11";return}}if(navigator.mimeTypes&&navigator.mimeTypes.length&&(a=navigator.mimeTypes["application/x-shockwave-flash"],ak=!(!a||!a.enabledPlugin))){bk=ck(a.enabledPlugin.description);return}try{var b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");ak=!0;bk=ck(b.GetVariable("$version"));
return}catch(c){}try{b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");ak=!0;bk="6.0.21";return}catch(c){}try{b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"),ak=!0,bk=ck(b.GetVariable("$version"))}catch(c){}})();
var dk=ak,ek=bk;(function(){var a;return oc?(a=/Windows NT ([0-9.]+)/,(a=a.exec(D))?a[1]:"0"):nc?(a=/10[_.][0-9_.]+/,(a=a.exec(D))?a[0].replace(/_/g,"."):"10"):pc?(a=/Android\s+([^\);]+)(\)|;)/,(a=a.exec(D))?a[1]:""):qc||rc||sc?(a=/(?:iPhone|CPU)\s+OS\s+(\S+)/,(a=a.exec(D))?a[1].replace(/_/g,"."):""):""})();function fk(a){return(a=a.exec(D))?a[1]:""}
(function(){if(Nc)return fk(/Firefox\/([0-9.]+)/);if(I||kc||jc)return zc;if(Rc)return fk(/Chrome\/([0-9.]+)/);if(Sc&&!(Gb()||E("iPad")||E("iPod")))return fk(/Version\/([0-9.]+)/);if(Oc||Pc){var a=/Version\/(\S+).*Mobile\/(\S+)/.exec(D);if(a)return a[1]+"."+a[2]}else if(Qc)return(a=fk(/Android\s+([0-9.]+)/))?a:fk(/Version\/([0-9.]+)/);return""})();(function(){var a=!1;try{var b=Object.defineProperty({},"passive",{get:function(){a=!0}});
n.addEventListener("test",null,b)}catch(c){}return a})();var gk=(new Date).getTime();function hk(a){sa.call(this,a.message||a.description||a.name);this.b=a instanceof sd}
x(hk,sa);hk.prototype.name="BiscottiError";function ik(a,b){this.f=a;this.b=b}
ik.prototype.then=function(a,b,c){try{if(p(this.f))return a?pd(a.call(c,this.f)):pd(this.f);if(p(this.b)){if(!b)return qd(this.b);var d=b.call(c,this.b);return!p(d)&&this.b.b?qd(this.b):pd(d)}throw Error("Invalid Result_ state");}catch(e){return qd(e)}};
Sa(ik);var re={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},jk=null;function kk(a){a=a.responseText;if(0!=a.lastIndexOf(")]}'",0))return lk(""),jk=new ik(""),"";a=JSON.parse(a.substr(4)).id;lk(a);jk=new ik(a);mk(18E5,2);return a}
function nk(a,b){var c=new hk(b);lk("");jk=new ik(void 0,c);0<a&&mk(12E4,a-1);throw c;}
function mk(a,b){A(function(){var a=v(nk,n,b),a=qe().then(kk,a);rd(a,null,ba,void 0)},a)}
function lk(a){q("yt.www.ads.biscotti.lastId_",a,void 0)}
;function ok(){}
function pk(){try{var a;try{var b=r("yt.www.ads.biscotti.getId_"),c;if(b)c=b();else{if(!jk){var d=v(nk,n,2);jk=qe().then(kk,d)}c=jk}a=c}catch(e){a=qd(e)}a.then(qk,ok);A(pk,18E5)}catch(e){cb(e)}}
function qk(a){var b;a:{try{b=window.top.location.href}catch(u){b=2;break a}b=null!=b?b==window.document.location.href?0:1:2}b={dt:gk,flash:ek||"0",frm:b};b.u_tz=-(new Date).getTimezoneOffset();var c;try{c=Y.history.length}catch(u){c=0}b.u_his=c;b.u_java=!!Y.navigator&&"unknown"!==typeof Y.navigator.javaEnabled&&!!Y.navigator.javaEnabled&&Y.navigator.javaEnabled();Y.screen&&(b.u_h=Y.screen.height,b.u_w=Y.screen.width,b.u_ah=Y.screen.availHeight,b.u_aw=Y.screen.availWidth,b.u_cd=Y.screen.colorDepth);
Y.navigator&&Y.navigator.plugins&&(b.u_nplug=Y.navigator.plugins.length);Y.navigator&&Y.navigator.mimeTypes&&(b.u_nmime=Y.navigator.mimeTypes.length);b.bid=a;b.ca_type=dk?"flash":"image";if(Oe("enable_server_side_search_pyv")||Oe("enable_server_side_mweb_search_pyv")){var d;a=window;try{d=a.screenX;var e=a.screenY}catch(u){}try{var f=a.outerWidth,g=a.outerHeight}catch(u){}try{var k=a.innerWidth,h=a.innerHeight}catch(u){}d=[a.screenLeft,a.screenTop,d,e,a.screen?a.screen.availWidth:void 0,a.screen?
a.screen.availTop:void 0,f,g,k,h];var m;e=window.top||Y;try{m=e.document&&!e.document.body?new Fa(-1,-1):Yc(e||window).round()}catch(u){m=new Fa(-12245933,-12245933)}e=0;window.SVGElement&&document.createElementNS&&(e|=1);pa(b,{bc:e,bih:m.height,biw:m.width,brdim:d.join(),vis:{visible:1,hidden:2,prerender:3,preview:4}[Zj.webkitVisibilityState||Zj.mozVisibilityState||Zj.visibilityState||""]||0,wgl:!!Y.WebGLRenderingContext})}Td("/ad_data_204",{sb:!0,C:b})}
;function rk(){this.b=z("ALT_PREF_COOKIE_NAME","PREF");var a;if(a=Ia.get(""+this.b,void 0)){a=unescape(a).split("&");for(var b=0;b<a.length;b++){var c=a[b].split("="),d=c[0];(c=c[1])&&(Z[d]=c.toString())}}}
ca(rk);var Z=r("yt.prefs.UserPrefs.prefs_")||{};q("yt.prefs.UserPrefs.prefs_",Z,void 0);function sk(a){if(/^f([1-9][0-9]*)$/.test(a))throw Error("ExpectedRegexMatch: "+a);}
function tk(a){if(!/^\w+$/.test(a))throw Error("ExpectedRegexMismatch: "+a);}
function uk(a){a=void 0!==Z[a]?Z[a].toString():null;return null!=a&&/^[A-Fa-f0-9]+$/.test(a)?parseInt(a,16):null}
rk.prototype.get=function(a,b){tk(a);sk(a);var c=void 0!==Z[a]?Z[a].toString():null;return null!=c?c:b?b:""};
rk.prototype.set=function(a,b){tk(a);sk(a);if(null==b)throw Error("ExpectedNotNull");Z[a]=b.toString()};
rk.prototype.remove=function(a){tk(a);sk(a);delete Z[a]};
rk.prototype.clear=function(){Z={}};function vk(a){for(var b=0;b<a.length;b++){var c=a[b];"send_follow_on_ping_action"==c.name&&c.data&&c.data.follow_on_url&&oe(c.data.follow_on_url)}}
;function wk(a){R.call(this,1,arguments);this.pa=a}
x(wk,R);function xk(a,b){R.call(this,2,arguments);this.f=a;this.b=b}
x(xk,R);function yk(a,b,c,d){R.call(this,1,arguments);this.b=b;this.f=c||null;this.itemId=d||null}
x(yk,R);function zk(a,b){R.call(this,1,arguments);this.f=a;this.b=b||null}
x(zk,R);function Ak(a){R.call(this,1,arguments)}
x(Ak,R);var Bk=new S("ypc-core-load",wk),Ck=new S("ypc-guide-sync-success",xk),Dk=new S("ypc-purchase-success",yk),Ek=new S("ypc-subscription-cancel",Ak),Fk=new S("ypc-subscription-cancel-success",zk),Gk=new S("ypc-init-subscription",Ak);var Hk=!1,Ik=[],Jk=[];function Kk(a){a.b?Hk?T(Oi,a):T(Bk,new wk(function(){T(Gk,new Ak(a.b))})):Lk(a.f,a.i,a.g,a.source)}
function Mk(a){a.b?Hk?T(Ti,a):T(Bk,new wk(function(){T(Ek,new Ak(a.b))})):Nk(a.f,a.subscriptionId,a.i,a.g,a.source)}
function Ok(a){Pk(zb(a.b))}
function Qk(a){Rk(zb(a.b))}
function Sk(a){Tk(a.g,a.f,a.b)}
function Uk(a){var b=a.itemId,c=a.b.subscriptionId;b&&c&&T(Ni,new Gi(b,c,a.b.channelInfo))}
function Vk(a){var b=a.b;Ja(a.f,function(a,d){T(Ni,new Gi(d,a,b[d]))})}
function Wk(a){T(Si,new V(a.f.itemId));a.b&&a.b.length&&(Xk(a.b,Si),Xk(a.b,Ui))}
function Lk(a,b,c,d){var e=new V(a);T(Li,e);var f={};f.c=a;c&&(f.eurl=c);d&&(f.source=d);c={};(d=z("PLAYBACK_ID"))&&(c.plid=d);(d=z("EVENT_ID"))&&(c.ei=d);b&&Yk(b,c);Ud("/subscription_ajax?action_create_subscription_to_channel=1",{method:"POST",xa:f,C:c,G:function(b,c){var d=c.response;T(Ni,new Gi(a,d.id,d.channel_info));d.show_feed_privacy_dialog&&Nd("SHOW-FEED-PRIVACY-SUBSCRIBE-DIALOG",a);d.actions&&vk(d.actions)},
wa:function(){T(Mi,e)}})}
function Nk(a,b,c,d,e){var f=new V(a);T(Qi,f);var g={};d&&(g.eurl=d);e&&(g.source=e);d={};d.c=a;d.s=b;(a=z("PLAYBACK_ID"))&&(d.plid=a);(a=z("EVENT_ID"))&&(d.ei=a);c&&Yk(c,d);Ud("/subscription_ajax?action_remove_subscriptions=1",{method:"POST",xa:g,C:d,G:function(a,b){var c=b.response;T(Si,f);c.actions&&vk(c.actions)},
wa:function(){T(Ri,f)}})}
function Tk(a,b,c){if(a){var d={};d.channel_id=a;switch(b){case "receive-all-updates":d.receive_all_updates=!0;break;case "receive-no-updates":d.receive_no_updates=!0;d.receive_post_updates=!1;break;case "receive-highlight-updates":d.receive_all_updates=!1;d.receive_no_updates=!1;break;default:return}null===c||d.receive_no_updates||(d.receive_post_updates=c);var e=new Ei(a,b,c);Ud("/subscription_ajax?action_update_subscription_preferences=1",{method:"POST",C:d,onError:function(){T(Yi,e)},
G:function(){T(Xi,e)}})}}
function Pk(a){if(a.length){var b=Bb(a,0,40);T("subscription-batch-subscribe-loading");Xk(b,Li);var c={};c.a=b.join(",");var d=function(){T("subscription-batch-subscribe-loaded");Xk(b,Mi)};
Ud("/subscription_ajax?action_create_subscription_to_all=1",{method:"POST",C:c,G:function(c,f){d();var e=f.response,k=e.id;if(ea(k)&&k.length==b.length){var h=e.channel_info_map;F(k,function(a,c){var d=b[c];T(Ni,new Gi(d,a,h[d]))});
a.length?Pk(a):T("subscription-batch-subscribe-finished")}},
onError:function(){d();T("subscription-batch-subscribe-failure")}})}}
function Rk(a){if(a.length){var b=Bb(a,0,40);T("subscription-batch-unsubscribe-loading");Xk(b,Qi);var c={};c.c=b.join(",");var d=function(){T("subscription-batch-unsubscribe-loaded");Xk(b,Ri)};
Ud("/subscription_ajax?action_remove_subscriptions=1",{method:"POST",C:c,G:function(){d();Xk(b,Si);a.length&&Rk(a)},
onError:function(){d()}})}}
function Xk(a,b){F(a,function(a){T(b,new V(a))})}
function Yk(a,b){var c=Yb(a);pa(b,c)}
;var Zk=null,$k=null,al=null,bl={};function cl(a){rg(a.payload_name,a.payload,Tf,void 0)}
function dl(a){var b=a.id;a=a.ve_type;var c=Le++;a=new Ke(void 0,a,c);bl[b]=a;b=yg();c=xg();b&&c&&sg(b,c,a)}
function el(a){var b=a.csn;a=a.root_ve_type;if(b&&a&&(y("client-screen-nonce",b),y("ROOT_VE_TYPE",a),a=xg()))for(var c in bl)sg(b,a,bl[c])}
function fl(a){bl[a.id]=new Ke(a.tracking_params)}
function gl(a){var b=yg();a=bl[a.id];b&&a&&tg(ug(),{click:{csn:b,visualElement:Me(a)}},void 0)}
function hl(a){a=a.ids;var b=yg();if(b){for(var c=[],d=0;d<a.length;d++){var e=bl[a[d]];e&&c.push(e)}c.length&&vg(b,c)}}
function il(){var a=Zk;a&&a.startInteractionLogging&&a.startInteractionLogging()}
;q("yt.setConfig",y,void 0);q("yt.setMsg",function(a){$a(Za,arguments)},void 0);
q("yt.logging.errors.log",function(a,b,c,d,e){c={name:c||z("INNERTUBE_CONTEXT_CLIENT_NAME",1),version:d||z("INNERTUBE_CONTEXT_CLIENT_VERSION",void 0)};e=window&&window.yterr||e||!1;if(a&&e&&!(5<=qg)){e=a.stacktrace;d=a.columnNumber;var f=r("window.location.href");if(t(a))a={message:a,name:"Unknown error",lineNumber:"Not available",fileName:f,stack:"Not available"};else{var g,k,h=!1;try{g=a.lineNumber||a.hc||"Not available"}catch(aa){g="Not available",h=!0}try{k=a.fileName||a.filename||a.sourceURL||
n.$googDebugFname||f}catch(aa){k="Not available",h=!0}a=!h&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name?a:{message:a.message||"Not available",name:a.name||"UnknownError",lineNumber:g,fileName:k,stack:a.stack||"Not available"}}e=e||a.stack;g=a.lineNumber.toString();isNaN(g)||isNaN(d)||(g=g+":"+d);if(!(pg[a.message]||0<=e.indexOf("/YouTubeCenter.js")||0<=e.indexOf("/mytube.js"))){b={xa:{a:"logerror",t:"jserror",type:a.name,msg:a.message.substr(0,1E3),line:g,level:b||"ERROR"},C:{url:z("PAGE_NAME",
window.location.href),file:a.fileName},method:"POST"};e&&(b.C.stack=e);for(var m in c)b.C["client."+m]=c[m];if(m=z("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS",void 0))for(var u in m)b.C[u]=m[u];Ud("/error_204",b);pg[a.message]=!0;qg++}}},void 0);
q("writeEmbed",function(){var a=z("PLAYER_CONFIG",void 0);"1"!=a.privembed&&pk();"gvn"==a.args.ps&&(document.body.style.backgroundColor="transparent");var b=document.referrer,c=z("POST_MESSAGE_ORIGIN");window!=window.top&&b&&b!=document.URL&&(a.args.loaderUrl=b);z("LIGHTWEIGHT_AUTOPLAY")&&(a.args.autoplay="1");a.args.autoplay&&Dj(a.args);Zk=b=ri("player",a);b.addEventListener("onScreenChanged",el);b.addEventListener("onLogClientVeCreated",dl);b.addEventListener("onLogServerVeCreated",fl);b.addEventListener("onLogToGel",
cl);b.addEventListener("onLogVeClicked",gl);b.addEventListener("onLogVesShown",hl);b.addEventListener("onReady",il);var d=z("POST_MESSAGE_ID","player");z("ENABLE_JS_API")?al=new Yj(b):z("ENABLE_POST_API")&&t(d)&&t(c)&&($k=new Wj(window.parent,d,c),al=new Xj(b,$k.f));z("ENABLE_CAST_API")||(a.args.enablecastapi="0");z("BG_P")&&(z("BG_I")||z("BG_IU"))&&ue();Cg();Ej=b;Ej.addEventListener("SUBSCRIBE",Hj);Ej.addEventListener("UNSUBSCRIBE",Kj);Fj.push(U(Ni,Lj),U(Si,Mj))},void 0);
q("yt.www.watch.ads.restrictioncookie.spr",function(a){oe(a+"mac_204?action_fcts=1");return!0},void 0);
var jl=ab(function(){Nh("ol");Hk=!0;Jk.push(U(Ki,Kk),U(Pi,Mk));Hk||Jk.push(U(Oi,Kk),U(Ti,Mk),U(Ii,Ok),U(Ji,Qk),U(Wi,Sk),U(Dk,Uk),U(Fk,Wk),U(Ck,Vk));var a=rk.getInstance(),b=1<window.devicePixelRatio;if(!!((uk("f"+(Math.floor(119/31)+1))||0)&67108864)!=b){var c="f"+(Math.floor(119/31)+1),d=uk(c)||0,d=b?d|67108864:d&-67108865;0==d?delete Z[c]:Z[c]=d.toString(16).toString();var a=a.b,b=[],e;for(e in Z)b.push(e+"="+escape(Z[e]));Ia.set(""+a,b.join("&"),63072E3,"/","youtube.com")}}),kl=ab(function(){var a=
Zk;
a&&a.sendAbandonmentPing&&a.sendAbandonmentPing();z("PL_ATT")&&(te=null);for(var a=0,b=Ag.length;a<b;a++){var c=Ag[a];if(!isNaN(c)){var d=r("yt.scheduler.instance.cancelJob");d?d(c):bb(c)}}Ag.length=0;a=de("//static.doubleclick.net/instream/ad_status.js");if(b=document.getElementById(a))Pd(a),b.parentNode.removeChild(b);Bg=!1;y("DCLKSTAT",0);Md(Ik);Ik.length=0;Gh(Jk);Jk.length=0;Hk=!1;Ej&&(Ej.removeEventListener("SUBSCRIBE",Ij),Ej.removeEventListener("UNSUBSCRIBE",Kj));Ej=null;Gh(Fj);Fj.length=0;
ob(al,$k);if(a=Zk)a.removeEventListener("onScreenChanged",el),a.removeEventListener("onLogClientVeCreated",dl),a.removeEventListener("onLogServerVeCreated",fl),a.removeEventListener("onLogToGel",cl),a.removeEventListener("onLogVeClicked",gl),a.removeEventListener("onLogVesShown",hl),a.removeEventListener("onReady",il),a.destroy();bl={}});
window.addEventListener?(window.addEventListener("load",jl),window.addEventListener("unload",kl)):window.attachEvent&&(window.attachEvent("onload",jl),window.attachEvent("onunload",kl));var ll=tj.getInstance(),ml=X(ll);ml in yj||(ll.register(),ll.ja.push(Kd("yt-uix-init-"+ml,ll.init,ll)),ll.ja.push(Kd("yt-uix-dispose-"+ml,ll.dispose,ll)),yj[ml]=ll);}).call(this);
