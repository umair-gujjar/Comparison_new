
<!DOCTYPE html>
<html>
<head>
    <title>PHP Point Of Sale, Inc -- Powered By PHP Point Of Sale</title>
    <meta charset="UTF-8" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UQcFWVNbGwEDU1RVDwE="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:20,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(3),window.onerror=e;try{throw new Error}catch(f){"stack"in f&&(t(4),t(5),"addEventListener"in window&&t(1),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(2),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:5,2:8,3:3,4:7,5:6,6:21,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:21,2:22,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:22,2:21,ee:"QJf3ax"}],7:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:22,2:21,ee:"QJf3ax"}],8:[function(t,e){function n(){f.inPlace(this,p,"fn-")}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),u.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(o){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:5,2:22,ee:"QJf3ax"}],9:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:10,3:8,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],10:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],11:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:20,2:21,handle:"D5DuLP"}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=l.info=NREUM.info;if(t&&t.licenseKey&&t.applicationID&&f&&f.body){s(h,function(e,n){e in t||(t[e]=n)}),l.proto="https"===p.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=f.createElement("script");e.src=l.proto+t.agent,f.body.appendChild(e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=(t(2),window),f=c.document,u="addEventListener",d="attachEvent",p=(""+location).split("?")[0],h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-593.min.js"},l=e.exports={offset:i(),origin:p,features:{}};f[u]?(f[u]("DOMContentLoaded",o,!1),c[u]("load",n,!1)):(f[d]("onreadystatechange",r),c[d]("onload",n)),a("mark",["firstbyte",i()])},{1:20,2:11,handle:"D5DuLP"}],20:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],21:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],22:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:21,ee:"QJf3ax"}]},{},["G9z0Bl",4,9]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <base href="https://demo.phppointofsale.com/" />
    <link rel="icon" href="https://demo.phppointofsale.com/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/bootstrap-3.min.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/jquery.gritter.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/jquery-ui.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/unicorn.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/custom.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/datepicker.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/bootstrap-select.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/select2.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/font-awesome.min.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/jquery.loadmask.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/token-input-facebook.css?14.4" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/KeyTips.min.css?14.4" media="all" />
    <script type="text/javascript">
        var SITE_URL= "https://demo.phppointofsale.com/index.php";
    </script>

    <script src="https://demo.phppointofsale.com/js/all.js?14.4" type="text/javascript" language="javascript" charset="UTF-8"></script>


    <script type="text/javascript">
        COMMON_SUCCESS = "Success";
        COMMON_ERROR = "Error";
        $.ajaxSetup ({
            cache: false,
            headers: { "cache-control": "no-cache" }
        });

        $(document).ready(function()
        {
            //Ajax submit current location
            $("#employee_current_location_id").change(function()
            {
                $("#form_set_employee_current_location_id").ajaxSubmit(function()
                {
                    window.location.reload(true);
                });
            });

            //Keep session alive by sending a request every 5 minutes
            setInterval(function(){$.get('https://demo.phppointofsale.com/index.php/home/keep_alive');}, 300000);
        });
    </script>

</head>
<body data-color="grey" class="flat">
<div class="modal fade hidden-print" id="myModal"></div>
<div id="wrapper"  >
    <div id="header" class="hidden-print">
        <h1><a href="https://demo.phppointofsale.com/index.php/home"><img src="https://demo.phppointofsale.com/img/header_logo.png" class="hidden-print header-log" id="header-logo" alt=""/></a></h1>
        <a id="menu-trigger" href="#"><i class="fa fa-bars fa fa-2x"></i></a>
        <div class="clear"></div>
    </div>




    <div id="user-nav" class="hidden-print hidden-xs">
        <ul class="btn-group ">
            <li class="btn  hidden-xs"><a title="" href="<?php echo base_url();?>index.php/login/switch_user" data-toggle="modal" data-target="#myModal" ><i class="icon fa fa-user fa-2x"></i> <span class="text">	Welcome <b> John Doe! </b></span></a></li>
            <li class="btn  hidden-xs disabled" >
                <a title="" href="" onclick="return false;"><i class="icon fa fa-clock-o fa-2x"></i> <span class="text">
					06:07 am					07/10/2015					</span></a>
            </li>
            <li class="btn "><a href="<?php echo base_url();?>index.php/config"><i class="icon fa fa-cog"></i><span class="text">Settings</span></a></li>
            <li class="btn  ">
                <a href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-power-off"></i><span class="text">Logout</span></a>				</li>
        </ul>
    </div>
    <div id="sidebar" class="hidden-print minibar ">

        <ul>
            <li  class="active"><a href="<?php echo base_url();?>index.php/home"><i class="icon fa fa-dashboard"></i><span class="hidden-minibar">Dashboard</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/admin/sub_admins"><i class="fa fa-group"></i><span class="hidden-minibar">Sub Admins</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/admin/data_logger"><i class="fa fa-table"></i><span class="hidden-minibar">Data Loggers</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/suppliers"><i class="fa fa-download"></i><span class="hidden-minibar">Suppliers</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/reports"><i class="fa fa-bar-chart-o"></i><span class="hidden-minibar">Reports</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/receivings"><i class="fa fa-cloud-download"></i><span class="hidden-minibar">Receivings</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/sales"><i class="fa fa-shopping-cart"></i><span class="hidden-minibar">Sales</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/employees"><i class="fa fa-user"></i><span class="hidden-minibar">Employees</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/giftcards"><i class="fa fa-credit-card"></i><span class="hidden-minibar">Gift Cards</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/config"><i class="fa fa-cogs"></i><span class="hidden-minibar">Store Config</span></a></li>
            <li ><a href="<?php echo base_url();?>index.php/locations"><i class="fa fa-home"></i><span class="hidden-minibar">Locations</span></a></li>
            <li>
                <a href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-power-off"></i><span class="hidden-minibar">Logout</span></a>
            </li>
        </ul>
    </div>



    <div id="content"  class="clearfix " >

        <div id="content-header" class="hidden-print">
            <h1><i class="icon fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <div id="breadcrumb" class="hidden-print">
            <a href="<?php echo base_url();?>index.php/home"><i class="fa fa-home"></i> Dashboard</a>
        </div>
        <div class="clear"></div>
        <div class="text-center">
            <h3>Welcome to PHP Point Of Sale, click a module below to get started!</h3>
            <ul class="quick-actions">
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/customers">	<i class="text-info fa fa-group left fa "></i> Customers</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/items">	<i class="text-info fa fa-table left fa "></i> Items</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/suppliers">	<i class="text-info fa fa-download left fa "></i> Suppliers</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/reports">	<i class="text-info fa fa-bar-chart-o left fa "></i> Reports</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/receivings">	<i class="text-info fa fa-cloud-download left fa "></i> Receivings</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/sales">	<i class="text-info fa fa-shopping-cart left fa "></i> Sales</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/employees">	<i class="text-info fa fa-user left fa "></i> Employees</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/giftcards">	<i class="text-info fa fa-credit-card left fa "></i> Gift Cards</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/config">	<i class="text-info fa fa-cogs left fa "></i> Store Config</a>
                </li>
                <li   >
                    <a class="right" href="<?php echo base_url();?>index.php/locations">	<i class="text-info fa fa-home left fa "></i> Locations</a>
                </li>
            </ul>


            <div class="row">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="fa fa-signal"></i></span><h5>Statistics</h5></div>
                    <div class="widget-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="site-stats">
                                    <li><a href="<?php echo base_url();?>index.php/items"><h3><i class="fa fa-shopping-cart"></i>  Total Items : <strong>14</strong></h3></a> </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="site-stats">
                                    <li>  <a href="<?php echo base_url();?>index.php/customers"><h3> <i class="fa fa-group"></i>  Total Customers  : <strong>0</strong></h3></a></li>
                                    <li> <a href="<?php echo base_url();?>index.php/employees"><h3> <i class="fa fa-user"></i>  Total Employees  :  <strong>5</strong></h3></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="site-stats">
                                    <li> <a href="<?php echo base_url();?>index.php/sales"><h3> <i class="fa fa-download"></i>  Total Sales  : <strong>103</strong> </h3></a></li>
                                    <li>  <a href="<?php echo base_url();?>index.php/giftcards"><h3> <i class="fa fa-credit-card"></i>  Total Gift Cards  : <strong>4</strong></h3></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="footer" class="col-md-12 hidden-print">
            Please visit our
            <a href="http://www.phppointofsale.com" target="_blank">
                website		</a>
            to learn the latest information about the project.
            <span class="text-info">You are using PHP Point Of Sale Version <span class="label label-info"> 14.4</span></span>
        </div>

    </div><!--end #content-->
</div><!--end #wrapper-->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"653e27187f","applicationID":"2375780","transactionName":"bwdVbUoEVhcAAUUMDlZNdlpMDFcKTipeCAQXC1ldXR0=","queueTime":0,"applicationTime":64,"ttGuid":"","agentToken":"","atts":"Q0BWGwIeRRk=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-593.min.js"}</script></body>
</html>