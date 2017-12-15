<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
  <head>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"d1c6d1a680","applicationID":"2295809","transactionName":"cloLQktZCA1cFBtVWEIaFl5WQQ==","queueTime":14,"applicationTime":25,"agent":""}</script>
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VwYFVVRSGwECXVRaBwg="};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script>
    <title>Our Story</title>
<link rel="canonical" href="https://www.harrys.com/en/us/our-story" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="IT+DOxwHuZRoBlnSLRsWsQMBdjgXdWqpTONpBPwBHNZ9ytAafdPnjN0JX8bU9zwI97jKC8W0lcmFhj4HMJrPLQ==" />
<script>
  dataLayer = [];
  var Harrys = Harrys || {};
  Harrys.products = [];
  Harrys.OPTIMIZELY_CLASSIC_VARIATIONS = {};
</script>
    <script
    src="//d2wy8f7a9ursnm.cloudfront.net/bugsnag-3.min.js"
    data-apikey="08643f7a752628ac40a6378d159d5cd1"></script>

    <script src="//cdn.optimizely.com/js/3129410271.js"></script>
  <script src="https://www.harrys.com/assets/shared/lib/optimizely_gtm_integration-7d105712b59e6389b998faf734b07335c5b337509863863f4ef5c1217e58bb98.js"></script>

  <!-- HEAP ANALYTICS -->
<script type="text/javascript">
  window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
  heap.load("2002065820");
</script>

    <!-- New Relic -->
    
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"d1c6d1a680","applicationID":"2295809","transactionName":"cloLQktZCA1cFBtVWEIaFl5WQQ==","queueTime":14,"applicationTime":25,"agent":""}</script>
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VwYFVVRSGwECXVRaBwg="};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script>
<!--[if lte IE 9]>
  <script src="https://www.harrys.com/assets/shared/lib/html5shiv-f0d2b0f2687c0d79613d51ce38d0905e9d3dff774159f01cbe7622e9d205e0d3.js"></script>
<![endif]-->

    <link rel="stylesheet" media="screen" href="https://www.harrys.com/assets/shared/fonts-ee83d6b22ec7f01d4620e0e7958af6759edf83ec4e3c733dc697b505bebfb84a.css" />
    <link rel="stylesheet" media="screen" href="https://www.harrys.com/assets/desktop/global/base-e3e247937120547ac6822fdacffd9a50b27e349cf7ee697b3dbb6e3b9e567b5c.css" />
    
    
  </head>
  <body class="">
    <!-- GA Tag Manager Production Property -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFFDQH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PFFDQH');
</script>

    <div class="global-wrapper">
      
      <div id="flashes"></div>
      <div
  class="credit-banner"
  data-credit-banner="true"
  data-credit-banner-close-cookie-key="h_closed_credit_banner"
>
  <div clas="credit-banner--inner">
    <div class="credit-banner--content">
      Start your trial to unlock $5 off your next box.
      <div class="credit-banner--close" data-credit-banner-close="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.24px" height="13.18px" viewBox="0 0 13.24 13.18" version="1.1" role="img" aria-labelledby="title desc">
    <title>Close</title>
    <desc>This icon labels the close button.</desc>
    <defs></defs>
    <g id="Layer_2" data-name="Layer 2">
        <g id="Icon_Art" data-name="Icon Art">
            <path d="M7.75,6.62,13,1.36A.8.8,0,0,0,11.88.23L6.62,5.49,1.37.23A.8.8,0,0,0,.23,1.36L5.49,6.62l-5.2,5.2a.8.8,0,0,0,1.13,1.13l5.2-5.2,5.2,5.2a.8.8,0,0,0,1.13-1.13Z"></path>
        </g>
    </g>
</svg>
</div>
    </div>
  </div>
</div>
<script>
  var Harrys = Harrys || {};
  Harrys.INCENTIVE_COOKIE_KEY = "followed_incentive_code";
</script>

        <header id="header">
  <div class="hamburger" data-open-trigger="nav-dropdown">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <a href="/en/us" class="header-logo"></a>
  
    <nav data-open-listener="nav-dropdown" class="primary-nav">
    <a class="nav-link  " href= /en/us/trial>
  Shave Plans
</a>

    <span class="nav-link opener " data-open-trigger="nav-products">
  Products<span data-open-listener="nav-products" class="nav-sprite header-icon side-arrow"></span>
</span>
<nav data-open-listener="nav-products" class="sub-nav grid">
  <a class="sub-nav-link grid-link" href="/en/us/products#holiday-gift-sets">
    <img class="sub-nav-link-image" alt="Holiday Gift Sets" src="https://harrysx-a.akamaihd.net/assets/images/product_shelf_preview_images/attachments/5cd33d7c188f3648fdcb5be2085010c9cbe33b1c.jpg" />
  <span class="sub-nav-link-text"> Holiday Gift Sets</span>
</a><a class="sub-nav-link grid-link" href="/en/us/products#shaving-supplies">
    <img class="sub-nav-link-image" alt="Shaving Supplies" src="https://harrysx-a.akamaihd.net/assets/images/product_shelf_preview_images/attachments/6b69a677ee80576b9af570e24b00e23a84cd8057.jpg" />
  <span class="sub-nav-link-text"> Shaving Supplies</span>
</a><a class="sub-nav-link grid-link" href="/en/us/products#skincare">
    <img class="sub-nav-link-image" alt="Skincare" src="https://harrysx-a.akamaihd.net/assets/images/product_shelf_preview_images/attachments/2f9bd81734b1e211135fb8e5a720ce0c1f8d8954.jpg" />
  <span class="sub-nav-link-text"> Skincare</span>
</a><a class="sub-nav-link grid-link" href="/en/us/products#accessories">
    <img class="sub-nav-link-image" alt="Accessories" src="https://harrysx-a.akamaihd.net/assets/images/product_shelf_preview_images/attachments/55b8ec767a40efe27a0f8685b38f7ce154e74f0a.jpg" />
  <span class="sub-nav-link-text"> Accessories</span>
</a>
    <a class="sub-nav-link grid-footer" href="/en/us/products">
      <span class="sub-nav-link-text">Shop all</span>
    </a>
</nav>

    <span class="nav-link opener active" data-open-trigger="nav-about">
  About<span data-open-listener="nav-about" class="nav-sprite header-icon side-arrow"></span>
</span>
<nav data-open-listener="nav-about" class="sub-nav stacked">
  <a class="sub-nav-link  stacked-link" href="/en/us/our-story">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.99 50"><g id="Layer_2" data-name="Layer 2"><g id="Icon_Art" data-name="Icon Art"><path class="cls-1" d="M40.23,0H33.88C31.3,0,30,.75,30,2.24V19H12V2.24C12,1.41,11.57,0,8.72,0H2.3A2,2,0,0,0,0,2.24V47.37C0,49.81,1.76,50,2.3,50H8.72C10.3,50,12,49,12,47.37V31H30V47.37c0,2,2.66,2.63,3.88,2.63h6.35A2.68,2.68,0,0,0,43,47.37V2.24C43,1.57,42.73,0,40.23,0ZM40,47H33.88a3.07,3.07,0,0,1-.88-.19V29.5A1.5,1.5,0,0,0,31.5,28h-21A1.5,1.5,0,0,0,9,29.5V46.95a1,1,0,0,1-.28.05H3V3H9V20.5A1.5,1.5,0,0,0,10.5,22h21A1.5,1.5,0,0,0,33,20.5V3a7.9,7.9,0,0,1,.88,0H40ZM53.17.33A6.76,6.76,0,0,0,46.1,6.9a6.3,6.3,0,0,0,6.25,6.28,2.6,2.6,0,0,1-1.17,1,3.62,3.62,0,0,0-1.29.28,2.46,2.46,0,0,0-1.49,2.23,2.68,2.68,0,0,0,2.78,2.56C56.5,19.2,61,14.33,61,8.56A7.86,7.86,0,0,0,53.17.33ZM54.7,15.06a5.5,5.5,0,0,0,1.06-3.36c0-.08,0-.16,0-.28l-.08-1.84L53.89,10a5.73,5.73,0,0,1-1.31.15A3.35,3.35,0,0,1,49.1,6.9a3.8,3.8,0,0,1,4.07-3.57C55.49,3.33,58,5,58,8.56A7.94,7.94,0,0,1,54.7,15.06Z"></path></g></g></svg>

  <span class="sub-nav-link-text"> Our Story</span>
</a><a class="sub-nav-link  stacked-link" href="/en/us/our-factory">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 43"><g id="Layer_2" data-name="Layer 2"><g id="Icon_Art" data-name="Icon Art"><path class="cls-1" d="M60,1.5A1.5,1.5,0,0,0,58.5,0H1.5A1.5,1.5,0,0,0,0,1.5v40A1.5,1.5,0,0,0,1.5,43h57A1.5,1.5,0,0,0,60,41.5ZM38,3V40H22V3ZM3,3H19V40H3ZM57,40H41V3H57Z"></path></g></g></svg>

  <span class="sub-nav-link-text"> Our Factory</span>
</a><a class="sub-nav-link give-a-shave stacked-link" href="/en/us/give-a-shave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74.26 49.73"><g id="Layer_2" data-name="Layer 2"><g id="Icon_Art" data-name="Icon Art"><path class="cls-1" d="M48.54,23.74a1.5,1.5,0,0,0-.18-2.11,9.31,9.31,0,0,0-2.47-1.46,13.54,13.54,0,0,0,2.4-7.82C48.29,5.54,43.5,0,37.62,0S27,5.54,27,12.35a13.63,13.63,0,0,0,2.14,7.43,10.19,10.19,0,0,0-3.45,1.82,1.5,1.5,0,0,0,1.88,2.34,6.77,6.77,0,0,1,4.3-1.57A1.5,1.5,0,0,0,33,19.78a10.12,10.12,0,0,1-3-7.43C30,7.19,33.4,3,37.62,3s7.66,4.19,7.66,9.35a10.08,10.08,0,0,1-3.09,7.49,1.5,1.5,0,0,0,.8,2.59,7.91,7.91,0,0,1,3.42,1.49A1.5,1.5,0,0,0,48.54,23.74ZM73.8,28a8,8,0,0,0-3.66-1.78,12.88,12.88,0,0,0,2-6.93C72.1,12.85,67.57,7.61,62,7.61S51.92,12.85,51.92,19.28A12.93,12.93,0,0,0,53.75,26a10.39,10.39,0,0,0-3.66,1.56c-.58.34-4.28,2.67-4.43,6.5-.13,3.27,0,13.62,0,14a1.62,1.62,0,0,0,1.5,1.61h0a1.61,1.61,0,0,0,1.48-1.65c0-.11-.12-10.64,0-13.83.09-2.38,2.94-4.06,3-4.07l.12-.09a7.87,7.87,0,0,1,4.76-1.31,1.49,1.49,0,0,0,1.54-.86,1.5,1.5,0,0,0-.34-1.73,9.4,9.4,0,0,1-2.8-6.9c0-4.78,3.18-8.67,7.09-8.67s7.09,3.89,7.09,8.67a9.36,9.36,0,0,1-2.86,7,1.5,1.5,0,0,0,1,2.61c.82,0,3.42.29,4.5,1.32A1.5,1.5,0,0,0,73.8,28Zm-49.64-.43A10.39,10.39,0,0,0,20.5,26a12.93,12.93,0,0,0,1.83-6.72c0-6.44-4.53-11.67-10.09-11.67S2.16,12.85,2.16,19.28a12.88,12.88,0,0,0,2,6.93A8,8,0,0,0,.46,28a1.5,1.5,0,1,0,2.07,2.17c1.08-1,3.67-1.3,4.49-1.32a1.5,1.5,0,0,0,1-2.61,9.36,9.36,0,0,1-2.86-7c0-4.78,3.18-8.67,7.09-8.67s7.09,3.89,7.09,8.67a9.39,9.39,0,0,1-2.8,6.9,1.5,1.5,0,0,0,1.19,2.59,7.83,7.83,0,0,1,4.77,1.3l.12.07s2.88,1.67,3,4c.12,3.2,0,13.79,0,13.9a1.61,1.61,0,0,0,1.48,1.65h0a1.62,1.62,0,0,0,1.5-1.61c0-.43.13-10.71,0-14C28.44,30.3,24.74,27.9,24.16,27.56Z"></path></g></g></svg>

  <span class="sub-nav-link-text"> Give a Shave</span>
</a><a class="sub-nav-link  stacked-link" href="http://fiveoclock.harrys.com">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><g id="Layer_2" data-name="Layer 2"><g id="Icon_Art" data-name="Icon Art"><path class="cls-1" d="M30,0A30,30,0,1,0,60,30,30,30,0,0,0,30,0Zm0,57A27,27,0,1,1,57,30,27,27,0,0,1,30,57Zm8.86-13.77L29,36.3V13a1.5,1.5,0,0,0-3,0V37.08a1.5,1.5,0,0,0,.64,1.23l10.5,7.38a1.5,1.5,0,1,0,1.72-2.46Z"></path></g></g></svg>

  <span class="sub-nav-link-text"> Magazine</span>
</a><a class="sub-nav-link  stacked-link" href="/en/us/cornershop">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.88 48.88"><g id="Layer_2" data-name="Layer 2"><g id="Icon_Art" data-name="Icon Art"><path class="cls-1" d="M.9,11.62l17.82,7.81a1.5,1.5,0,1,0,1.2-2.75L5.15,10.21l5.68-2.63,18.49,8.34a1.5,1.5,0,1,0,1.23-2.73L11.44,4.57a1.5,1.5,0,0,0-1.25,0L.87,8.89a1.5,1.5,0,0,0,0,2.74ZM48.45,28A10.45,10.45,0,0,0,44,29l-6.82-3.73a1.5,1.5,0,0,0-1.33-.05L9.82,36.82,5.29,35.12,39.11,18.51l3.52-1.74a1.5,1.5,0,0,0,.67-2L43,14.12a7.44,7.44,0,1,1,6.46,3.75,1.5,1.5,0,0,0,0,3,10.42,10.42,0,1,0-9.51-6.12L.84,34A1.5,1.5,0,0,0,1,36.72l8.38,3.13a1.5,1.5,0,0,0,1.14,0L36.43,28.24,43.3,32a1.51,1.51,0,0,0,1.46,0A7.44,7.44,0,1,1,41,38.44a1.5,1.5,0,0,0-3,0A10.44,10.44,0,1,0,48.45,28Z"></path></g></g></svg>

  <span class="sub-nav-link-text"> Cornershop</span>
</a>
</nav>

      <a class="nav-link" style="color: #ED4647" href="https://www.harrys.com/en/us/gifts">
    Gifts
  </a>

    <a class="nav-link mobile-show invite-friends-link hidden " href= /en/us/invite_friends>
  Invite Friends
</a>

    <a class="nav-link mobile-show " href= /en/us/help>
  Help
</a>

    <a class="nav-link mobile-show profile-link " href= /en/us/profile>
  
</a>

</nav>

    <nav data-open-listener="" class="secondary-nav">
    <a class="nav-link with-image desktop" href="/en/us/cart" data-header-cart-button>
  <span class="text"> Cart </span>
  <span class="cart-icon nav-sprite normal cart-grey %>">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36px" height="31px" viewBox="0 0 36 31" version="1.1"><title>holiday-cart</title><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Holiday-Homepage_1024-v1" transform="translate(-966.000000, -18.000000)" fill="#868686"><g id="NAV" transform="translate(0.000000, -2.000000)"><path d="M979.297347,44.2482071 L987.292982,44.2482071 L987.292982,48.2154329 C984.76219,48.2112613 981.999176,48.1910984 979.297347,48.161897 L979.297347,44.2482071 Z M974.082802,29.8212991 L974.088364,29.8212991 L995.54726,29.7413428 L992.317718,41.4671164 L974.082802,41.4671164 L974.082802,29.8212991 Z M1001.45082,43.9235147 C1001.36808,43.1614959 1000.68324,42.6115352 999.921915,42.6935774 C999.159896,42.7749243 998.607155,43.4590726 998.68572,44.2210914 C998.689892,44.2565504 998.992336,47.7057981 997.151949,48.0026795 C996.315536,48.138953 993.59841,48.1987464 990.074073,48.2126519 L990.074073,44.2482071 L993.376618,44.2482071 C994.002364,44.2482071 994.550934,43.8296529 994.717104,43.2268515 L998.714922,28.7130345 C998.831032,28.2937851 998.743428,27.8439437 998.479224,27.4990884 C998.215716,27.1549284 997.807591,26.9532994 997.374436,26.9532994 L997.368874,26.9532994 L974.082802,27.0402084 L974.082802,22.9554815 C974.082802,22.3714524 973.717783,21.8493027 973.169213,21.6490641 L968.881467,20.0847006 C968.158383,19.8211923 967.360905,20.1931632 967.098092,20.9141609 C966.834584,21.635854 967.20586,22.434027 967.927553,22.6975353 L971.301711,23.928168 L971.301711,42.8576617 C971.301711,43.6252428 971.924675,44.2482071 972.692256,44.2482071 L976.516256,44.2482071 L976.516256,48.1292191 C972.910572,48.0840264 969.617761,48.0284046 967.417918,47.9852977 L967.390107,47.9852977 C966.635041,47.9852977 966.014858,48.5908802 966.000257,49.3487274 C965.985656,50.1170037 966.59541,50.7517877 967.363687,50.7663884 C969.128289,50.8004567 979.721463,51 987.954187,51 C992.562454,51 996.432342,50.9374255 997.596923,50.7490066 C1001.17132,50.1691492 1001.68026,46.0308862 1001.45082,43.9235147 L1001.45082,43.9235147 Z" id="Fill-1"></path></g></g></g></svg>

    <span class="badge">
      <span data-header-cart-count id="header_cart_count">0</span>
    </span>
  </span>
</a>
<a class="nav-link with-image mobile" href="/en/us/cart" data-header-cart-button id="header_cart_button">
  <span class="text"> Cart </span>
  <span class="cart-icon nav-sprite normal cart-grey">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36px" height="31px" viewBox="0 0 36 31" version="1.1"><title>holiday-cart</title><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Holiday-Homepage_1024-v1" transform="translate(-966.000000, -18.000000)" fill="#868686"><g id="NAV" transform="translate(0.000000, -2.000000)"><path d="M979.297347,44.2482071 L987.292982,44.2482071 L987.292982,48.2154329 C984.76219,48.2112613 981.999176,48.1910984 979.297347,48.161897 L979.297347,44.2482071 Z M974.082802,29.8212991 L974.088364,29.8212991 L995.54726,29.7413428 L992.317718,41.4671164 L974.082802,41.4671164 L974.082802,29.8212991 Z M1001.45082,43.9235147 C1001.36808,43.1614959 1000.68324,42.6115352 999.921915,42.6935774 C999.159896,42.7749243 998.607155,43.4590726 998.68572,44.2210914 C998.689892,44.2565504 998.992336,47.7057981 997.151949,48.0026795 C996.315536,48.138953 993.59841,48.1987464 990.074073,48.2126519 L990.074073,44.2482071 L993.376618,44.2482071 C994.002364,44.2482071 994.550934,43.8296529 994.717104,43.2268515 L998.714922,28.7130345 C998.831032,28.2937851 998.743428,27.8439437 998.479224,27.4990884 C998.215716,27.1549284 997.807591,26.9532994 997.374436,26.9532994 L997.368874,26.9532994 L974.082802,27.0402084 L974.082802,22.9554815 C974.082802,22.3714524 973.717783,21.8493027 973.169213,21.6490641 L968.881467,20.0847006 C968.158383,19.8211923 967.360905,20.1931632 967.098092,20.9141609 C966.834584,21.635854 967.20586,22.434027 967.927553,22.6975353 L971.301711,23.928168 L971.301711,42.8576617 C971.301711,43.6252428 971.924675,44.2482071 972.692256,44.2482071 L976.516256,44.2482071 L976.516256,48.1292191 C972.910572,48.0840264 969.617761,48.0284046 967.417918,47.9852977 L967.390107,47.9852977 C966.635041,47.9852977 966.014858,48.5908802 966.000257,49.3487274 C965.985656,50.1170037 966.59541,50.7517877 967.363687,50.7663884 C969.128289,50.8004567 979.721463,51 987.954187,51 C992.562454,51 996.432342,50.9374255 997.596923,50.7490066 C1001.17132,50.1691492 1001.68026,46.0308862 1001.45082,43.9235147 L1001.45082,43.9235147 Z" id="Fill-1"></path></g></g></g></svg>

    <span class="badge">
      <span data-header-cart-count id="header_cart_count">0</span>
    </span>
  </span>
</a>

    <a class="nav-link mobile-hide profile-link " href= /en/us/profile>
  
</a>

    <a class="nav-link mobile-hide " href= /en/us/help>
  Help
</a>

    <a class="nav-link mobile-hide invite-friends-link hidden " href= /en/us/invite_friends>
  Invite Friends
</a>

</nav>

  <div class="mini-cart" id="mini_cart" data-open-listener="cart">
    <span class="nav-sprite arrow"></span>
    <a href="/en/us/cart" class="title">Your Cart (<span class="count">0</span>)</a>
    <section class="items">
      <p class="empty-text">You have no items in your cart.</p>
    </section>
    <div class="footer clear">
      <p class="float-left">
        Subtotal: <span class="subtotal">$0.00</span>
      </p>
      <a href="/en/us/cart" class="button btn medium thin blue float-right">Checkout</a>
    </div>
  </div>
</header>

          <style>
  @media (min-width: 768px) {
      .full-image-container.our-story-hero {
          height: 420.0px;
      }
      .our-story-hero .image-container {
          padding-top: 420.0px;
          background-size: auto 420.0px;
      }
  }
  
  @media (min-width: 1024px) {
      .full-image-container.our-story-hero {
          height: 600.0px;
      }
      .our-story-hero .image-container {
          padding-top: 600.0px;
          background-size: auto 600.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-image-container.our-story-hero {
          height: 600.0px;
          min-height: 600.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .our-story-hero .image-container {
          background-size: cover;
          padding-top: 600.0px;
      }
  }
</style>
<section class="full-image-container left-text our-story-hero"
style="background-color: #173753">
  <div class="image-container"
         style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/f0829bc65bce246d1497119a0da197a38dac0753.jpg');"
         data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/f0829bc65bce246d1497119a0da197a38dac0753.jpg"></div>
  <div class="text-container">
    <div class="middle markdown">
      <div style='color:#FFFFFF'><div class='markdown--h3'>The shaving company that’s fixing shaving</div></div>
      <div class='body markdown--body' style='color:#FFFFFF'><div>We created Harry’s to be different from the other shaving brands. Unlike the big brands that overdesign and overcharge, we make a high-quality shave that’s made by real guys for real guys.</div></div>
      
    </div>
</div></section>

    <style>
  .half-half-container.evolved_model .image-container {
      background-color: 
  }
  
  /* leaving this here for future generations: http://stackoverflow.com/a/22211990 */
  @media (max-width: 480px) {
      .inline.evolved_model .image-half {
          width: 100%;
          height: 0;
          padding-top: 114.81481481481481%;
      }
  }
  
  @media (min-width: 768px) {
      .half-half-container.evolved_model {
          height: 434.0px;
      }
      .evolved_model .image-container {
          padding-top: 434.0px;
          background-size: auto 434.0px;
      }
      .evolved_model .image-half {
          padding-top: 434.0px;
          background-size: auto 434.0px;
      }
  }
  
  @media (min-width: 1024px) {
      .half-half-container.evolved_model {
          height: 620.0px;
      }
      .evolved_model .image-container {
          padding-top: 620.0px;
          background-size: auto 620.0px;
      }
      .evolved_model .image-half {
          padding-top: 620.0px;
          background-size: auto 620.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-bleed.full-image-container.evolved_model {
          height: 620.0px;
          min-height: 620.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .full-bleed.evolved_model .image-half {
          padding-top: 620.0px;
      }
  }
</style>
<section class="half-half-container right-image evolved_model inline">
  <div class="image-container"
         style="background-color: "
    >
  </div>
  <div class="image-half" style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/29aa4ad9362b408ac6eee73da88541c72eda9e39.jpg'); background-color: " data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/5e04c8d8e49c51878c37c065cd525c624d269511.jpg"></div>
  <div class="text-container" style="background-color: #ffffff;">
  </div>
    <div class="text-half" style="background-color: #ffffff;">
      <div class="middle">
        <div class="floater markdown">
          <div style='color:#263645'><div class='markdown--h3'>Evolved Model</div></div>
          <div class='body markdown--body' style='color:#666666'><div>By selling directly to you online, we’re able to “shave” away excess and offer our high-quality products at a price every guy can get behind.</div></div>
          
        </div>
      </div>
    </div>
</section>

    <style>
  @media (min-width: 768px) {
      .full-image-container.winston_profile {
          height: 210.0px;
      }
      .winston_profile .image-container {
          padding-top: 210.0px;
          background-size: auto 210.0px;
      }
  }
  
  @media (min-width: 1024px) {
      .full-image-container.winston_profile {
          height: 300.0px;
      }
      .winston_profile .image-container {
          padding-top: 300.0px;
          background-size: auto 300.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-image-container.winston_profile {
          height: 300.0px;
          min-height: 300.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .winston_profile .image-container {
          background-size: cover;
          padding-top: 300.0px;
      }
  }
</style>
<section class="full-image-container left-text winston_profile"
style="background-color: #FFFFFF">
  <div class="image-container"
         style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/4f52485c34170c13a38a0fda841779c6baec0d83.jpg');"
         data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/4f52485c34170c13a38a0fda841779c6baec0d83.jpg"></div>
  </section>

    <style>
  @media (min-width: 768px) {
      .full-image-container.quality_construction {
          height: 215.6px;
      }
      .quality_construction .image-container {
          padding-top: 215.6px;
          background-size: auto 215.6px;
      }
  }
  
  @media (min-width: 1024px) {
      .full-image-container.quality_construction {
          height: 308.0px;
      }
      .quality_construction .image-container {
          padding-top: 308.0px;
          background-size: auto 308.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-image-container.quality_construction {
          height: 308.0px;
          min-height: 308.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .quality_construction .image-container {
          background-size: cover;
          padding-top: 308.0px;
      }
  }
</style>
<section class="full-image-container center-text quality_construction"
style="background-color: #FFFFFF">
  <div class="image-container"
         style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/2f46829c4e838944f5d8b9c0f6668bc56669d49e.jpg');"
         data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/2f46829c4e838944f5d8b9c0f6668bc56669d49e.jpg"></div>
  <div class="text-container">
    <div class="middle markdown">
      <div style='color:#263645'><div class='markdown--h3'>Quality Construction</div></div>
      <div class='body markdown--body' style='color:#666666'><div>We care deeply about the quality of our products. Our team of over 600 expert designers, craftsmen, chemists and engineers build our products from the finest materials and ingredients using an exacting production process to ensure they deliver exceptional performance.</div></div>
      
    </div>
</div></section>

    <style>
  @media (min-width: 768px) {
      .full-image-container.shop-harrys-us {
          height: 141.39999999999998px;
      }
      .shop-harrys-us .image-container {
          padding-top: 141.39999999999998px;
          background-size: auto 141.39999999999998px;
      }
  }
  
  @media (min-width: 1024px) {
      .full-image-container.shop-harrys-us {
          height: 202.0px;
      }
      .shop-harrys-us .image-container {
          padding-top: 202.0px;
          background-size: auto 202.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-image-container.shop-harrys-us {
          height: 202.0px;
          min-height: 202.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .shop-harrys-us .image-container {
          background-size: cover;
          padding-top: 202.0px;
      }
  }
</style>
<section class="full-image-container center-text shop-harrys-us"
style="background-color: #FFFFFF">
  <div class="image-container"
         style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/8c18cc261dfeb94629508bcbe336ed1972c81edd.jpg');"
         data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/8c18cc261dfeb94629508bcbe336ed1972c81edd.jpg"></div>
  <div class="text-container">
    <div class="middle markdown">
      <div style='color:#ffffff'><div class='markdown--h3'>Take our products for a<br>spin with a trial.</div></div>
      
      <a class='markdown--cta-link' href='https://www.harrys.com/en/us/trial' style='color:#ffffff'>START TRIAL</a>
    </div>
</div></section>

    <style>
  .half-half-container.factory-us .image-container {
      background-color: transparent
  }
  
  /* leaving this here for future generations: http://stackoverflow.com/a/22211990 */
  @media (max-width: 480px) {
      .inline.factory-us .image-half {
          width: 100%;
          height: 0;
          padding-top: 82.66666666666667%;
      }
  }
  
  @media (min-width: 768px) {
      .half-half-container.factory-us {
          height: 434.0px;
      }
      .factory-us .image-container {
          padding-top: 434.0px;
          background-size: auto 434.0px;
      }
      .factory-us .image-half {
          padding-top: 434.0px;
          background-size: auto 434.0px;
      }
  }
  
  @media (min-width: 1024px) {
      .half-half-container.factory-us {
          height: 620.0px;
      }
      .factory-us .image-container {
          padding-top: 620.0px;
          background-size: auto 620.0px;
      }
      .factory-us .image-half {
          padding-top: 620.0px;
          background-size: auto 620.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-bleed.full-image-container.factory-us {
          height: 620.0px;
          min-height: 620.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .full-bleed.factory-us .image-half {
          padding-top: 620.0px;
      }
  }
</style>
<section class="half-half-container left-image factory-us full-bleed">
  <div class="image-container"
         style="background-color: transparent"
    >
  </div>
  <div class="image-half" style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/6cca5971b588c4ee69f7227bc165fe343812b374.jpg'); background-color: transparent" data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/4ccb71f9eb87d519b23b911e238bbe5cf2549683.jpg"></div>
  <div class="text-container" style="background-color: #ffffff;">
  </div>
    <div class="text-half" style="background-color: #ffffff;">
      <div class="middle">
        <div class="floater markdown">
          <div style='color:#263645'><div class='markdown--h3'>Our Factory</div></div>
          <div class='body markdown--body' style='color:#666666'><div>By buying our German factory we are able to ensure quality by owning the entire process, from grinding high-grade steel to directly shipping our products to your door. That means we can continually innovate to make your shave even better.</div></div>
          <a class='markdown--cta-link' href='https://www.harrys.com/en/us/our-factory' style='color:#185674'>LEARN MORE</a>
        </div>
      </div>
    </div>
</section>

    <style>
  .half-half-container.founders-module .image-container {
      background-color: transparent
  }
  
  /* leaving this here for future generations: http://stackoverflow.com/a/22211990 */
  @media (max-width: 480px) {
      .inline.founders-module .image-half {
          width: 100%;
          height: 0;
          padding-top: 82.66666666666667%;
      }
  }
  
  @media (min-width: 768px) {
      .half-half-container.founders-module {
          height: 434.0px;
      }
      .founders-module .image-container {
          padding-top: 434.0px;
          background-size: auto 434.0px;
      }
      .founders-module .image-half {
          padding-top: 434.0px;
          background-size: auto 434.0px;
      }
  }
  
  @media (min-width: 1024px) {
      .half-half-container.founders-module {
          height: 620.0px;
      }
      .founders-module .image-container {
          padding-top: 620.0px;
          background-size: auto 620.0px;
      }
      .founders-module .image-half {
          padding-top: 620.0px;
          background-size: auto 620.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-bleed.full-image-container.founders-module {
          height: 620.0px;
          min-height: 620.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .full-bleed.founders-module .image-half {
          padding-top: 620.0px;
      }
  }
</style>
<section class="half-half-container right-image founders-module full-bleed">
  <div class="image-container"
         style="background-color: transparent"
    >
  </div>
  <div class="image-half" style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/2c83a269465eae15b5c66e822ad4b5b04db9304b.jpg'); background-color: transparent" data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/aab997d07eba1948159be42690325b5c49f600fd.jpg"></div>
  <div class="text-container" style="background-color: #FFFFFF;">
  </div>
    <div class="text-half" style="background-color: #FFFFFF;">
      <div class="middle">
        <div class="floater markdown">
          <div style='color:#263645'><div class='markdown--h3'>Our Founders</div></div>
          <div class='body markdown--body' style='color:#666666'><div>We’ve been good friends since we were college interns. We’ve worked together, traveled together and shared thousands of ideas. We’ve built Harry’s to reflect our passions and values: affinity for simple design, appreciation of well-made things, and a belief that companies should make the world a better place.<br>– Jeff Raider &amp; Andy Katz-Mayfield</div></div>
          
        </div>
      </div>
    </div>
</section>

    <style>
  .half-half-container.gas-our-story-us .image-container {
      background-color: #E8E8E8
  }
  
  /* leaving this here for future generations: http://stackoverflow.com/a/22211990 */
  @media (max-width: 480px) {
      .inline.gas-our-story-us .image-half {
          width: 100%;
          height: 0;
          padding-top: 84.03361344537815%;
      }
  }
  
  @media (min-width: 768px) {
      .half-half-container.gas-our-story-us {
          height: 350.0px;
      }
      .gas-our-story-us .image-container {
          padding-top: 350.0px;
          background-size: auto 350.0px;
      }
      .gas-our-story-us .image-half {
          padding-top: 350.0px;
          background-size: auto 350.0px;
      }
  }
  
  @media (min-width: 1024px) {
      .half-half-container.gas-our-story-us {
          height: 500.0px;
      }
      .gas-our-story-us .image-container {
          padding-top: 500.0px;
          background-size: auto 500.0px;
      }
      .gas-our-story-us .image-half {
          padding-top: 500.0px;
          background-size: auto 500.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-bleed.full-image-container.gas-our-story-us {
          height: 500.0px;
          min-height: 500.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .full-bleed.gas-our-story-us .image-half {
          padding-top: 500.0px;
      }
  }
</style>
<section class="half-half-container left-image gas-our-story-us inline">
  <div class="image-container"
         style="background-color: #E8E8E8"
    >
  </div>
  <div class="image-half" style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/1b51fd9080fabfed7da70ec382f3f034d7f45d2c.jpg'); background-color: #E8E8E8" data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/half_half_images/attachments/d61a910cc4ffed0924ef3b4a87d2848dfc41cf56.jpg"></div>
  <div class="text-container" style="background-color: #E8E8E8;">
  </div>
    <div class="text-half" style="background-color: #E8E8E8;">
      <div class="middle">
        <div class="floater markdown">
          <div style='color:#263645'><div class='markdown--h3'>Give a Shave</div></div>
          <div class='body markdown--body' style='color:#666666'><div>We donate 1% of our sales and volunteer up to 1% of our time to organizations that prepare people for personal and professional success. We call it Harry’s 1 + 1.</div></div>
          <a class='markdown--cta-link' href='https://www.harrys.com/en/us/give-a-shave' style='color:#185674'>LEARN MORE</a>
        </div>
      </div>
    </div>
</section>

    <style>
  @media (min-width: 768px) {
      .full-image-container.shop-2-us {
          height: 141.39999999999998px;
      }
      .shop-2-us .image-container {
          padding-top: 141.39999999999998px;
          background-size: auto 141.39999999999998px;
      }
  }
  
  @media (min-width: 1024px) {
      .full-image-container.shop-2-us {
          height: 202.0px;
      }
      .shop-2-us .image-container {
          padding-top: 202.0px;
          background-size: auto 202.0px;
      }
  }
  
  @media (min-width: 1500px) {
      .full-image-container.shop-2-us {
          height: 202.0px;
          min-height: 202.0px;
          max-width: 1500px;
          margin: 0 auto;
      }
      .shop-2-us .image-container {
          background-size: cover;
          padding-top: 202.0px;
      }
  }
</style>
<section class="full-image-container center-text shop-2-us"
style="background-color: #FFFFFF">
  <div class="image-container"
         style="background-image: url('https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/58c188a1f051afba3ebe15f01b7b111f1d496837.jpg');"
         data-bg-scale-2x="https://harrysx-a.akamaihd.net/assets/images/full_images/attachments/58c188a1f051afba3ebe15f01b7b111f1d496837.jpg"></div>
  <div class="text-container">
    <div class="middle markdown">
      <div style='color:#ffffff'><div class='markdown--h3'>So, how ‘bout a shave?</div></div>
      
      <a class='markdown--cta-link' href='https://www.harrys.com/en/us/trial' style='color:#ffffff'>START TRIAL</a>
    </div>
</div></section>


      <div class="push"></div>
    </div>
    
    <footer class="global-footer">
  <a href="https://itunes.apple.com/us/app/apple-store/id990024014?pt=108215816&ct=20160127_www_app_landing&mt=8" class="advert">
  <div class="table">
    <div class="middle">
      <img class="phone-icon" src="https://www.harrys.com/assets/desktop/footer/iphone-f29239d12e77221abb79bfb8edb2c9b86ccf4c2ace29e706e10e1e5bd7b4deb5.png" alt="Iphone" />
      <p class="text">
        <span class="headline">Introducing our app for iPhone</span>
        <span class="action">Learn More</span>
      </p>
    </div>
  </div>
</a>

  <div class="sections-wrapper">
    <div class="sections">
      <div class="section">
        <div class="group contact-group">
          <h6 class="header">Contact</h6>
          <a class="link line-break" href="mailto:help@harrys.com">help@harrys.com</a>
          <a class="link line-break" href="tel:18882126855">888 212 6855</a>
          <div class="links social-links">
            <a class="link image facebook" href="http://facebook.com/hapostrophe"></a>
            <a class="link image twitter" href="http://twitter.com/harrys"></a>
            <a class="link image instagram" href="http://instagram.com/harrys"></a>
            <a class="link image google" href="https://plus.google.com/108449012437955146892/"></a>
          </div>
        </div>
        <div class="group hiring-group">
          <h6 class="header">We're Hiring</h6>
          <a class="link" href="/en/us/careers">Careers</a>
        </div>
      </div>
      <div class="section">
        <div class="group copyright-group">
          <p class="paragraph heavy">
            <span class="no-break">© Harry's, Inc. and Harry's Grooming Limited.</span>
            <span class="no-break">All Rights Reserved.</span>
          </p>
          <p class="paragraph copyright-paragraph">Harry&#39;s, H&#39;, Mammoth Design, Give a Shave, Truman, and HF are trademarks and/or registered trademarks of HF Global, Inc.</p>
        </div>
        <div class="group legal-group">
          <a class="link" href="/en/us/privacy-policy">Privacy Policy</a>
          <a class="link" href="/en/us/terms-of-service">Terms of Use</a>
          <p class="paragraph hide-non-mobile">(Update effective as of 11/17/17)</p>
        </div>
        <div class="group site-switch-group">
            <a class="link" data-switch-to-mobile>View Mobile Site</a>
        </div>
        <div class="group legal-group">
          <p class="paragraph hide-mobile">(Update effective as of 11/17/17)</p>
        </div>
      </div>
    </div>
  </div>
</footer>

    <script>
      Harrys.SKIP_HEADER = false;
      Harrys.SKIP_FOOTER = false;
      dataLayer.push({ 'siteType': "Desktop" });
    </script>
    <script type="text/javascript">
  var Harrys = Harrys || {};
  Harrys.ENV = "production";
  Harrys.DISABLE_ANALYTICS = false;
  Harrys.CDN_HOST = "https://www.harrys.com/";
  Harrys.COUNTRIES = {"US":{"full_name":"United States","vat_applies":false,"currency_code":"USD","currency_symbol":"$","address_form":{"name":{"label":"Full Name","required":true,"max_length":200},"address_line_1":{"label":"Address","required":true,"max_length":30},"address_line_2":{"label":"Apt / Suite #","required":false,"max_length":255},"city":{"label":"City","required":true,"max_length":255},"state":{"label":"State","required":true,"max_length":2},"zip":{"label":"Zip Code","required":true,"format":"(?-mix:\\A\\d{5}(-\\d{4})?\\z)","client_format":"^\\d{5}(-\\d{4})?$","pattern":"\\d*"},"telephone":{"label":"Phone","required":false,"max_length":20,"required_length":10}},"states":{"AL":"Alabama","AK":"Alaska","AZ":"Arizona","AR":"Arkansas","CA":"California","CO":"Colorado","CT":"Connecticut","DE":"Delaware","DC":"District of Columbia","FL":"Florida","GA":"Georgia","HI":"Hawaii","ID":"Idaho","IL":"Illinois","IN":"Indiana","IA":"Iowa","KS":"Kansas","KY":"Kentucky","LA":"Louisiana","ME":"Maine","MD":"Maryland","MA":"Massachusetts","MI":"Michigan","MN":"Minnesota","MS":"Mississippi","MO":"Missouri","MT":"Montana","NE":"Nebraska","NV":"Nevada","NH":"New Hampshire","NJ":"New Jersey","NM":"New Mexico","NY":"New York","NC":"North Carolina","ND":"North Dakota","OH":"Ohio","OK":"Oklahoma","OR":"Oregon","PA":"Pennsylvania","PR":"Puerto Rico","RI":"Rhode Island","SC":"South Carolina","SD":"South Dakota","TN":"Tennessee","TX":"Texas","UT":"Utah","VT":"Vermont","VA":"Virginia","WA":"Washington","WV":"West Virginia","WI":"Wisconsin","WY":"Wyoming","GU":"Guam","AS":"American Samoa","MP":"Northern Mariana Islands","VI":"Virgin Islands","AA":"U.S. Armed Forces – Americas","AE":"U.S. Armed Forces – Europe","AP":"U.S. Armed Forces – Pacific"}},"CA":{"full_name":"Canada","vat_applies":false,"currency_code":"USD","currency_symbol":"$","address_form":{"name":{"label":"Full Name","required":true,"max_length":200},"address_line_1":{"label":"Address","required":true,"max_length":30},"address_line_2":{"label":"Apt/Floor/Suite","required":false,"max_length":255},"city":{"label":"Municipality","required":true,"max_length":255},"state":{"label":"Province","required":true,"max_length":2},"zip":{"label":"Postal Code","required":true,"format":"(?-mix:\\A[A-Za-z]\\d[A-Za-z] ?\\d[A-Za-z]\\d\\z)","client_format":"^[A-Za-z]\\d[A-Za-z] ?\\d[A-Za-z]\\d$"},"telephone":{"label":"Mobile","required":false,"max_length":20,"required_length":10}},"states":{"AB":"Alberta","BC":"British Columbia","MB":"Manitoba","NB":"New Brunswick","NL":"Newfoundland and Labrador","NS":"Nova Scotia","ON":"Ontario","PE":"Prince Edward Island","QC":"Quebec","SK":"Saskatchewan","NT":"Northwest Territories","NU":"Nunavut","YT":"Yukon"}},"GB":{"full_name":"Great Britain","vat_applies":true,"currency_code":"GBP","currency_symbol":"£","states":{},"address_form":{"name":{"label":"Full Name","required":true,"max_length":100},"address_line_1":{"label":"Address Line 1","required":true,"max_length":35},"address_line_2":{"label":"Address Line 2","required":false,"max_length":35},"city":{"label":"Town","required":true,"max_length":50},"zip":{"label":"Postcode","required":true,"format":"(?-mix:^[A-Za-z]{1,2}\\d{1,2}[A-Za-z]? ?\\d{1}[A-Za-z]{2}$)","client_format":"^[A-Za-z]{1,2}\\d{1,2}[A-Za-z]? ?\\d{1}[A-Za-z]{2}$"},"telephone":{"label":"Mobile","required":true,"max_length":20,"required_length":11}}}};
  Harrys.COUNTRY = "US";
  Harrys.CANADA_POSTAL_PREFIXES = {"NL":["A"],"NS":["B"],"PE":["C"],"NB":["E"],"QC":["G","H","J","K"],"ON":["J","K","L","M","N","P"],"MB":["R"],"SK":["S"],"AB":["T"],"BC":["V"],"NU":["X"],"NT":["X"],"YT":["Y"]};
  Harrys.OPTIMIZELY_TESTS = ["rprt_uk_condensed_builder"];
  Harrys.PO_BOX_REGEX = /(P(ost)?[.\s/-]*O(ffice)?[.\s-]*(box).*|^(post[.\s]*)?box[.\s]*[#0-9]+|\bP[.\s]*O[.\s]*B[.\s]*[#0-9]*|P[.\s]*O[.\s]*[#0-9]+)/i;
  Harrys.APO_FPO_CODES = ["AA","AE","AP"];
  // Generates a region specific I18n Hash for the frontend to use when making translations
  Harrys.I18n = {"global":{"error":{"cannot_connect":"Unable to connect","cannot_connect_try_again":"Unable to connect. Try again.","connection":"Connection error, please try again.","missing_required":"You are missing a required field.","missing_required_multiple":"You're missing some required fields.","required_fields":"An error occurred, it is likely you were missing some required field(s).","other":"Uh oh, something went wrong.","unknown":"An unknown error occurred","inventory_unavailable":"The product: %{product} is out of stock"},"stripe":{"error":{"international":"We currently do not accept international payment details. Please try again with U.S. or Canadian payment details. If the problem persists with U.S. or Canadian payment details, please try another card, or contact our Customer Experience team at 888-212-6855.","incorrect_zip":"The billing zip code you've entered does not match the zip code your bank has on file. Double check that you've entered that information exactly as it appears on your credit card statement. If you've recently moved, you might also try your previous address's zip code.","card_declined":"Your card has been declined by your bank. If the problem persists, please contact your bank.","expired_card":"Your card has expired. Please select another card and try again. If the problem persists, please contact your bank.","incorrect_cvc":"The card's security code is incorrect. If the problem persists, please contact your bank.","incorrect_number":"The card number is incorrect. If the problem persists, please contact your bank.","invalid_cvc":"The card's security code is invalid. If the problem persists, please contact your bank.","invalid_number":"The card number is not a valid credit card number.","invalid_expiry_month":"The card's expiration month is invalid. If the problem persists, please contact your bank.","invalid_expiry_year":"The card's expiration year is invalid. If the problem persists, please contact your bank.","other":"Oops! Something seems to be wrong. Please wait 5 minutes and try your order again."}}},"js":{"AddProductsScreen":{"ProductDisplay":{"add":"Add one-time","subscribe":"Subscribe"}},"CheckoutOrder":{"submit":{"fail":"Server error submitting checkout"},"handleStatus":{"fail":"Unknown checkout status"},"timedOut":{"fail":"Timed out in checkout queue"}},"CheckoutInit":{"warn":"You're about to leave the checkout page, losing all of your progress (shipping, billing, etc.).\n\nIf you'd like to make changes to a previous checkout section, please use the breadcrumbs at the top of the page."},"couponForm":{"apply":"Apply","validateCode":{"fullyDiscounted":"Order Fully Discounted","success":"Coupon Applied"}},"AddressForm":{"_checkProvincePostalCode":{"ca_postal_code_mismatch":"Postal Code Does Not Match","ca_province_mismatch":"Province Does Not Match","ca_postal_code_province_mismatch":"Province and Postal Code Do Not Match"}},"Currency":{"free":"Free"},"Discount":{"check":{"error":"Invalid Coupon Code"}},"Inputs":{"EmailInput":{"error":"Invalid Email Address"},"PasswordInput":{"error":"Minimum 8 Characters"},"EngravingInput":{"error":"Engraving length must be 1-3. Only A-Z and 0-9 allowed."}},"redeem":{"promoApplied":"Your promo code has been successfully applied to your order","empty_code":"Code cannot be blank"},"auto_refill_build":{"survey":{"success":"Thank you for your response! We think we have a plan for your shave schedule."}},"product_page":{"stock":{"in_stock":"Available in U.S. and Canada","in_stock_us":"Available in U.S. only","in_stock_ca":"Available in Canada only","ground_shipping":"Ground shipping only"}},"profile":{"details":{"success":"Details saved successfully","your_credits_help":"We’ll automatically apply your credit as a discount on your next Shave Plan box when it ships.","your_credits_title":"Your Credits"},"incentives":{"copied_referral_link":"Copied!","copy_referral_link":"Copy Link"},"shave_plans":{"products_manager":{"error":"Sorry, something seems to have gone wrong, please try again or reload the page."}},"billing":{"delete":{"accept":"Yes, delete","confirm":"Are you sure you want to delete this card?","message":"Delete Card","reject":"No, I want to keep it."},"label":"Payment Method","zip":{"label":"Zip"}},"shipping":{"delete":{"accept":"Yes, delete","confirm":"Are you sure you want to delete this address?","message":"Delete Address","reject":"No, I want to keep it."}}},"condensed_trial_builders":{"loyalty_trial_xsell_multiple_modal":{"close":"No Thanks","continue":"Continue"}},"checkout":{"purchase_button":{"label":"Submit Purchase"},"phone_number":"888-212-6855","newBillingProfile":{"fields":{"zip":{"label":"Zip Code"}}},"shipping":{"breadcrumb":"Shipping Details","address":{"title":"Shipping Address"},"method":{"title":"Shipping Method"}},"shippingDetails":{"title":"Shipping Details"},"priceSummary":{"subtotal":"Subtotal","shipping":"Shipping","tax":"Tax","discount":"Discount","total":"Total","todays_total":"Today's Total"},"gift":{"allowed_characters":"Letters (A-Z), numbers (0-9), and punctuation only"}},"trial_checkout":{"signed_in_header":"Your Account","ships_today":"Ships Today","ships_and_charges":"Ships \u0026 Charges","email_reminder":"We’ll send a reminder email before each shipment so you have enough time to modify or cancel your plan.","first_box_credit":"First Box Credit","automatically_applied":"Automatically applied to the first box after your trial","reminder_email":"We’ll send a reminder email before each shipment so you have enough time to modify or cancel your plan."},"navigation":{"signed_out":"Sign In","signed_in":"Profile"},"next_box":{"next_box_ships":"Next Box Ships","shipping_address":"Shipping Address","failed_billing":{"next_box_ships":"Next Box Ships","next_box_ships_on":"Next Box Ships On"},"select_plan":{"next_box_ships":"Next box ships"},"shave_plan":{"next_box_date_card":{"next_box_ships":"Next Box Ships","next_box_ships_on":"Next Box Ships On"},"shipping_card":{"shipping_address":"Shipping Address"},"restarted_notification":"Check out your plan details to make sure your shipping address, billing method, and next shipment are up to date."}},"your_details":{"home":{"next_box_ships":"Next Box Ships","shipping_addresses":"Shipping Addresses"}},"personalized_homepage":{"browse_all":"Browse All","editorial_product":{"header":"A Home For Your Razor","razor":{"body":"Our razor stand is designed to keep your blades above water so they can stay sharper, longer.","id":"563","link":"Learn More","title":"Harry's Razor Stand"},"travel_kit":{"body":"Our Travel Kit is large enough to fit your travel necessities but small enough to pack.","id":"575","link":"Learn More","title":"Our Travel Kit"}},"greeting":"Welcome back!","next_box":"Your next box ships","next_box_on_hold":"Your next box is","on_hold":"On Hold","section_shave_tips":{"title":"Steps to a Great Shave","slides":[{"title":"Wash","blurb":"Introduce your hands to your face and get acquainted\nwith your beard. Lightly exfoliate to soften your\nbeard, preparing your face for a comfortable shave.\n","cta":"Check out our Face Wash","id":"572"},{"title":"Lather","blurb":"Wet your face with warm water to open your pores.\nSqueeze cream or gel onto your fingers and massage it\nin to soften your beard (whispering a love sonnet is\noptional).\n","cta":"We recommend Foaming Shave Gel","id":"650"},{"title":"Shave","blurb":"It's important that you shave with the grain first.\nThen, to achieve a level of smoothness similar to your\nface in the fourth grade, go lightly against the\ngrain.\n","cta":"Get some extra blades","id":"598"},{"title":"Soothe","blurb":"Splash cold water on your face to close your pores.\nPat dry with a fluffy towel. Then, relieve and soothe\nyour skin with a dollop of Post-Shave Balm. Look and\nfeel great.\n","cta":"Try our Post-Shave Balm","id":"675"}]},"sections":{"quick_add":{"title":"Thoughtful Additions","sub_title":"Add these customer favorites to your next box and enjoy free shipping!","more_info":"More Info","fail_message":"Hmm, something went wrong.","add":"Add","try_again":"Try Again","added":"Added"}}},"trial":{"checkout":{"billing":{"header":"Payment Method"},"edit":"Edit","email_already_exists":"This email has already been used.","pricing":{"subtotal":"Subtotal","shipping":"Shipping","tax":"Tax","total":"Today's Total"},"sign_in_card_header":"Sign In","sign_in_card_button":"Sign In","sign_in_message":"Don't have an account?","sign_in_message_link":"Create one","sign_up_card_header":"Create an Account","sign_up_card_button":"Create Account","sign_up_message":"Already have an account?","sign_up_message_link":"Sign in","signed_in_card_header":"Your Account","shipping":{"header":"Shipping Address","button":"Continue to Payment"},"submit_purchase":"Place Order","order_summary":{"header":"Ships Today"},"ships_and_charges":"Ships \u0026 Charges"}},"fields":{"errors":{"email":{"format":"Please enter a valid email address","uniqueness":"This email has already been used"},"password":{"length":"Minimum length 8 characters"},"generic":{"required":"This field is required"}}},"desktop":{"ProfilePage":{"initialize":{"subscription_updated":"Shave Plan Updated","error":{"subscription_next_date_in_the_past":"Please provide a date in the future."}},"changeShavingPlan":{"fail":"Sorry, we couldn't connect and make those changes. Please refresh and try again."},"cancelShavingPlan":{"fail":"Sorry, we couldn't connect and make those changes. Please refresh and try again."}},"SurveyInt":{"submit":{"error":{"no_option_selected":"Please select an option and try again.","other":"An error occurred, please refresh and try again."}},"send":{"fail":"Could not connect. Please try again."},"success":{"success":"Got it. We appreciate your feedback."}},"Validation":{"addressCheck":{"alternate_address":"Alternate Address Found"},"expirationCheck":{"error":"Credit card expired"},"luhnCheck":{"error":"Invalid Credit Card"},"emailCheck":{"error":"Invalid Email Address"},"passwordCheck":{"error":{"password_confirm_mismatch":"Password and confirmation do not match","password_length":"Password must be 8 characters or more"}},"zipCodeCheck":{"error":"Zip code invalid"}},"Verification":{"verifyAddress":{"error":{"zip_format":"The %{zip_label} you entered is not valid.","zip_strict":"The postal code you enter is not valid for the address.","alternate_address":"That address was not found.","cannot_find_address":"That address was not found.","fail":"That address was not found."}}}},"mobile":{"init":{"cart":{"item_removed":"%{product} removed from cart"}},"DiscountInt":{"initialize":{"success":"Discount Applied.","removed":"Discount removed.","error":"Your Coupon Code was entered incorrectly."},"check":{"error":"Code is blank"}},"CartInit":{"added_to_cart":"%{product} added to cart"},"Validation":{"addressCheck":{"alternate_address":"Alternate Address Found"},"expirationCheck":{"error":"Credit card expired"},"luhnCheck":{"error":"Invalid Credit Card"},"emailCheck":{"error":"Invalid Email Address"},"passwordCheck":{"error":{"password_confirm_mismatch":"Password and confirmation do not match","password_length":"Password must be 8 characters or more"}},"zipCodeCheck":{"error":"%{zip_label} invalid"}},"PlanInt":{"changePlan":{"success":"Shaving Plan Changed"},"cancelPlan":{"success":"Shaving Plan Ended"}},"EmailInt":{"checkEmail":{"error":"\"%{email}\" is not a valid email address."},"getMessage":{"error":"Must include a message."},"send":{"success":"Emails sent successfully."}}},"admin":{"discounts":{"submit":{"error":{"missing_product_entitlements":"You didn't select any qualifying products for this Discount."}}},"viewable_products":{"edit":{"confirm":{"active":{"true":"You are making this product publically viewable on the website.","false":"You are making this product inactive, which will make it disappear from the website."}}}}}}};
  Harrys.LOCALE = 'en-US';
  Harrys.CURRENCY_DECIMAL_PLACES = [0,2];
  Harrys.STRIPE_PUBLISHABLE_KEY = 'pk_live_GnR3g9DetBVQnwXDT8KGMJn1';
  Harrys.IOS_APP_ID = '990024014';
</script>

    <script src="https://www.harrys.com/webpack/experiments-295e21fab33a48806849.js"></script>
    <script src="https://www.harrys.com/assets/desktop/global/init-62c5091ff8f9ec8675138636d4fcf6650d85447c92f028b13c42a13e5d4e2ecd.js"></script>
      <script src="https://www.harrys.com/assets/desktop/homepage/init-f063b3407e607a5c5fb27e363e6619daeee850613cf495838a610548b612a2e7.js"></script>

  </body>
</html>
