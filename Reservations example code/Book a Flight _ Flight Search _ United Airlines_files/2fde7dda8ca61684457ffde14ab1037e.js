Bootstrapper.bindImmediate(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;var hostName=document.location.hostname;window._gaq=window._gaq||[];window._gaq.push(["_setAccount","UA-29214177-1"],["_setAllowLinker",true],["_setDomainName",hostName],["_addIgnoredRef","www.united.com"],["_addIgnoredRef","united.com"],["_addIgnoredRef",hostName],["_trackPageLoadTime"]);(function(){var ga=document.createElement("script");ga.type="text/javascript";ga.async=
true;ga.src=("https:"==document.location.protocol?"https://":"http://")+"stats.g.doubleclick.net/dc.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga,s)})();_gaq.push(["_trackPageview"])},1016250,202627);
Bootstrapper.bindDependencyDOMParsed(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;Bootstrapper.validationError=function(errorList){for(var j=0;typeof errorList!=="undefined"&&typeof errorList[j]!=="undefined";j++){window._gaq.push(["_trackEvent","User Error",errorList[j].message,document.title,1,true]);window.ga("send","event","User Error",errorList[j].message,document.title,1,{"nonInteraction":1})}}},968236,[1103875],221972,[248942]);
Bootstrapper.bindDependencyDOMLoaded(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;var width=window.innerWidth||document.body.clientWidth;var height=window.innerHeight||document.body.clientHeight;width=Math.round(width/10)*10;height=Math.round(height/10)*10;function inIframe(){try{return window.self!==window.top}catch(e){return true}}var size=width+"x"+height;scripts=document.getElementsByTagName("script");for(var i=scripts.length;i--;){var filename=
scripts[i].src.split("/");if(filename[filename.length-1].toLowerCase()=="dc.js"||filename[filename.length-1].toLowerCase()=="ga.js"){_gaq.push(["_trackEvent","Browser Size","Range",size,1,true]);_gaq.push(["_setCustomVar",42,"Browser Size",size,2]);if(inIframe())try{window._gaq.push(["_trackEvent","CrossSite Alert","iFrame",document.referrer,1,true])}catch(e){}}else if(filename[filename.length-1].toLowerCase()=="analytics.js"){ga("send","event","Browser Size","Range",size,1,{"nonInteraction":1});
ga("set","dimension8",size);if(inIframe())try{ga("send","event","CrossSite Alert","iFrame",document.referrer,1,{"nonInteraction":1})}catch(e){}}}},968231,[1103875],248732,[248942]);
Bootstrapper.bindDependencyDOMParsed(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;$("body").on("mouseover",".lmx-accrual-tooltip-trigger",function(){window._gaq.push(["_trackEvent","LMX Mouse Over Used",this.text,"--",1,true]);window.ga("send","event","LMX Mouse Over Used",this.text,"--",1,{"nonInteraction":1})});$("body").on("click","#lmx-included-yes",function(){window._gaq.push(["_trackEvent","LMX Toggle On",this.text,"--",1,true]);window.ga("send",
"event","LMX Toggle On",this.text,"--",1,{"nonInteraction":1})})},968234,[1103875],309449,[248942]);
Bootstrapper.bindDependencyDOMParsed(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;if(Bootstrapper.dataObject.setGlobalVars)Bootstrapper.dataObject.setGlobalVars();Bootstrapper.analytics={logger:function(msg){if(window.console&&typeof window.console=="object")if(/ensighten_debug/.test(document.cookie))console.log(msg)},createCookie:function(name,value,secs,cookieDomain){var domain="";var expires="";if(secs){var date=new Date;date.setTime(date.getTime()+
Math.ceil(secs*1E3));expires=" expires\x3d"+date.toGMTString()+";"}if(typeof cookieDomain!="undefined")domain=" domain\x3d"+cookieDomain+"; ";document.cookie=name+"\x3d"+value+";"+expires+domain+"path\x3d/"},readCookie:function(name){var nameEQ=name+"\x3d";var ca=document.cookie.split(";");for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==" ")c=c.substring(1,c.length);if(c.indexOf(nameEQ)===0)return c.substring(nameEQ.length,c.length)}return null},eraseCookie:function(name,cookieDomain){cookieDomain=
cookieDomain;this.createCookie(name,"",-1,cookieDomain)},getSessionID:function(cookieName){var sessionID=this.readCookie(cookieName);if(sessionID===null){var sdate=new Date;var components=[sdate.getYear(),sdate.getMonth(),sdate.getDate(),sdate.getHours(),sdate.getMinutes(),sdate.getSeconds(),sdate.getMilliseconds()];var id=components.join("");var random=Math.random();sessionID=components.join("")+random+""}this.createCookie(cookieName,sessionID,60*30);return sessionID},getTimeStamp:function(){var d=
new Date;var localTime=d.getTime();var localOffset=d.getTimezoneOffset()*6E4;var utc=localTime+localOffset;var offset=5;var chicago=utc-36E5*offset;var now=new Date(chicago);var date=[now.getFullYear(),now.getMonth()+1,now.getDate()];var time=[now.getHours(),now.getMinutes(),now.getSeconds()];date[0]=date[0]||12;var i;for(i=0;i<3;i++)if(time[i]<10)time[i]="0"+time[i];for(i=1;i<3;i++)if(date[i]<10)date[i]="0"+date[i];return date.join("-")+" "+time.join(":")},getCurrentDateFormatted:function(){var nd=
new Date;var m=nd.getMonth()+1;var d=nd.getDate();m=m<10?"0"+m:m;d=d<10?"0"+d:d;return m+"/"+d+"/"+nd.getFullYear()}};try{(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date;a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");var getBrowserSize=function(){var width=window.innerWidth||document.body.clientWidth;
var height=window.innerHeight||document.body.clientHeight;width=Math.round(width/10)*10;height=Math.round(height/10)*10;return{"width":width,"height":height}};var getData=Bootstrapper.dataObject._getData;var browserSize=getBrowserSize();browserSize=browserSize.width+"x"+browserSize.height;var doc=document;var loc=doc.location;var referrer=doc.referrer;var hostName=loc.hostname,property="UA-29214177-24";if(/^(www\.united\.com|united\.com|beta\.united\.com|preview\.united\.com|pss\.united\.com|united\.com)$/.test(hostName))property=
"UA-29214177-30";var sessionID=Bootstrapper.analytics.getSessionID("flightSearchSession");var langCode=getData.call(window,"langCode","locale","global");var POS=getData.call(window,"POS","locale","global");var MPAccStatus=getData.call(window,"MPAccStatus","visitor","global");var MPAccNumber=getData.call(window,"MPAccNumber","visitor","global");var MPBalance=getData.call(window,"MPBalance","visitor","global");var today=getData.call(window,"today","page","global");var extCampData=Bootstrapper.dataObject.global.campaign;
var extCampDataStr="";if(extCampData.utm_campaign&&extCampData.utm_source&&extCampData.utm_medium){var campaignSource=getData.call(window,"utm_source","campaign","global");var campaignMedium=getData.call(window,"utm_medium","campaign","global");var campaignName=getData.call(window,"utm_campaign","campaign","global");var term=getData.call(window,"utm_term","campaign","global");var content=getData.call(window,"utm_content","campaign","global");var partnerCategory=getData.call(window,"partner_category",
"campaign","global");var partnerName=getData.call(window,"partner_name","campaign","global");var assetType=getData.call(window,"asset_type","campaign","global");var assetPosition=getData.call(window,"asset_position","campaign","global");var promoCode=getData.call(window,"promo_code","campaign","global");var campaignTargeting=getData.call(window,"targeting","campaign","global");var launchDate=getData.call(window,"launch_date","campaign","global");var extCampDataStr=[campaignSource,campaignMedium,campaignName,
term,content,partnerCategory,partnerName,assetType,assetPosition,promoCode,campaignTargeting,launchDate].join("|")}var globalData={"dimension1":POS,"dimension2":POS,"dimension3":langCode,"dimension4":langCode,"dimension6":MPAccStatus,"dimension7":MPAccNumber,"dimension8":browserSize};var UU_ID=Bootstrapper.Cookies&&Bootstrapper.Cookies.get&&typeof Bootstrapper.Cookies.get==="function"?Bootstrapper.Cookies.get("uuid"):"";if(UU_ID)globalData.dimension64=UU_ID;ga("create",property,hostName);if(MPAccNumber!==
"--")ga("set","userId",MPAccNumber);ga(function(tracker){var clientId=tracker.get("clientId");ga("set","dimension5",clientId)});if(extCampDataStr!=="")globalData.dimension21=extCampDataStr;ga("set",globalData);ga("send","pageview")}catch(err){Bootstrapper.analytics.logger(err)}Bootstrapper.UASession="--";var cname="_ga\x3d";var ca=document.cookie.split(";");for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==" ")c=c.substring(1);if(c.indexOf(cname)===0)Bootstrapper.UASession=c.substring(cname.length,
c.length)}},1076813,[1103875],288194,[248942]);
Bootstrapper.bindDependencyDOMParsed(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;var _gaq=window._gaq||[];_gaq.push(["_setDomainName",".united.com"]);Bootstrapper.dataObject.promoTracking=Bootstrapper.dataObject.promoTracking||{};Bootstrapper.dataObject.promoTracking.eventCategoryTitle="Internal Campaigns";Bootstrapper.dataObject.promoTracking.qryString=document.location.search;if(Bootstrapper.dataObject.promoTracking.qryString.indexOf("mpcampaigntest\x3d")>-1){var keyVals=
Bootstrapper.dataObject.promoTracking.qryString.slice(1).split("\x26"),i;for(i=0;i<keyVals.length;i++){var param=keyVals[i].split("\x3d"),paramKey=param[0],paramValue=param[1];if(paramKey==="mpcampaigntest")Bootstrapper.dataObject.promoTracking.tester=paramValue}}if(Bootstrapper.dataObject.promoTracking.tester!==undefined)Bootstrapper.dataObject.promoTracking.eventCategoryTitle="Test Internal Campaigns by "+Bootstrapper.dataObject.promoTracking.tester;Bootstrapper.dataObject.promoTracking.trackLinkGA=
function(targetURL,action){var linkData=Bootstrapper.dataObject.promoTracking.getParamsFromURL(targetURL),concatVal=Bootstrapper.dataObject.promoTracking.setCustomVars(linkData,3);if(concatVal!==""&&(concatVal.indexOf("d|")===0||concatVal.indexOf("s|")===0))if(action)_gaq.push(["_setCustomVar",28,"Internal Campaign Data",concatVal.substr(0,106)],["_trackEvent",Bootstrapper.dataObject.promoTracking.eventCategoryTitle,action,targetURL,null,true])};$("a").each(function(){if(this.href.indexOf("?")>-1){var linkURL=
"";if(this.href.indexOf("int_campaign\x3d")>0)linkURL=this.href;else if(this.href.indexOf(".doubleclick.net/")>-1&&this.href.indexOf("adurl\x3d")>0){var adurlString=this.href.match(/adurl=([^&]+)/i);if(adurlString.length>1)linkURL=decodeURIComponent(adurlString[1])}if(linkURL.length>0&&linkURL!==""&&linkURL.indexOf("?")>-1&&linkURL.indexOf("int_campaign\x3d")>-1)if($(this).is(":visible")&&!$(this).is(":hidden"))Bootstrapper.dataObject.promoTracking.trackLinkGA(linkURL,"Impressions")}});$("body").on("mousedown",
"a",function(){if(this.href.indexOf("?")>-1&&this.href.indexOf("int_campaign\x3d")>-1)Bootstrapper.dataObject.promoTracking.trackLinkGA(this.href,"Clicks")})},1103871,[827486,1105254],202658,[286954,350175]);
Bootstrapper.bindDependencyImmediate(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;Bootstrapper.localS={utilities:{__setData:function(key,value,expiry){if(typeof Storage!=="undefined"){var expDate=(new Date(expiry)).getTime();if(expiry&&!isNaN(expDate))window.localStorage.setItem(key,value+"~|~"+expDate);else window.sessionStorage.setItem(key,value)}},__getData:function(key){var value="";if(typeof Storage!=="undefined"){value=window.localStorage.getItem(key);
if(value){var valArr=value.split("~|~");if(valArr.length>1){var expDate=new Date(valArr[1]*1),currDate=new Date;if(expDate.getTime()>currDate.getTime())value=valArr[0];else{value="";Bootstrapper.localS.utilities.__clearData(key,"l")}}}if(!value)value=window.sessionStorage.getItem(key)}if(!value)Bootstrapper.localS.utilities.__clearData(key);return value||""},__clearData:function(key,scope){var scpArr=[];if(scope)if(scope instanceof Array)scpArr=scope;else{if((typeof scope).toLowerCase()==="string")scpArr.push(scope)}else scpArr=
["l","s"];for(var i=0;i<scpArr.length;i++)if(typeof Storage!=="undefined")if(scpArr[i]==="l")window.localStorage.removeItem(key);else if(scpArr[i]==="s")window.sessionStorage.removeItem(key)}}};Bootstrapper.Cookies=new function(){var hosts=[".continental.com,.united.com"];for(var i=0;i<hosts.length;i++){var tempRegex=new RegExp(hosts[i]);if(document.location.host.match(tempRegex))this.defaultDomain=hosts[i]}this._cookies={};this.build=function(){for(var c=document.cookie.split("; "),a=0;a<c.length;a++)this._cookies[c[a].slice(0,
c[a].indexOf("\x3d"))]=c[a].slice(c[a].indexOf("\x3d")+1)};this.get=function(c,a,f){this.build();var g=this._cookies[c];if(void 0==g)return"";if(arguments.length==1)return g;else for(var g=g.split(f||"\x26"),d=0,b=g.length;d<b;d++)if(g[d].indexOf(a+"\x3d")==0)return g[d].slice((a+"\x3d").length,g[d].length)};this.modCookie=function(c,a,f,g){document.cookie=c+"\x3d"+a+(f?";expires\x3d"+f:"")+";domain\x3d"+(g?g:this.defaultDomain)+";path\x3d/"};this.set=function(c,a,f,g){if(arguments.length==4){for(var d=
"",b=0;b<a.length;b++)d+=(b!=0?f:"")+a[b].join("\x3d");this.modCookie(c,d,g)}else if(arguments.length==3)if(typeof a=="object")if(typeof f=="object"){d="";for(b=0;b<a.length;b++)d+=(b!=0?"\x26":"")+a[b].join("\x3d");this.modCookie(c,d,f)}else{d="";for(b=0;b<a.length;b++)d+=(b!=0?f:"")+a[b].join("\x3d");this.modCookie(c,d)}else this.modCookie(c,a,f);else if(typeof a=="object"){d="";for(b=0;b<a.length;b++)d+=(b!=0?"\x26":"")+a[b].join("\x3d");this.modCookie(c,d)}else this.modCookie(c,a)};this.addValue=
function(c,a,f,g){this.build();var d=this._cookies[c]||"";console.log(d);if(arguments.length==4){for(var b="",e=0;e<a.length;e++)b+=(d==""&&e==0?"":f)+a[e].join("\x3d");this.modCookie(c,d+b,g)}else if(arguments.length==3)if(typeof a=="object")if(typeof f=="object"){b="";for(e=0;e<a.length;e++)b+=(d==""&&e==0?"":"\x26")+a[e].join("\x3d");this.modCookie(c,d+b,f)}else{b="";for(e=0;e<a.length;e++)b+=(d==""&&e==0?"":f)+a[e].join("\x3d");this.modCookie(c,d+b)}else this.modCookie(c,d+a,f);else if(typeof a==
"object"){b="";for(e=0;e<a.length;e++)b+=(d==""&&e==0?"":"\x26")+a[e].join("\x3d");this.modCookie(c,d+b)}else this.modCookie(c,d+a)};this.remove=function(c,a){this.build();if(this._cookies[c]){var f=(new Date).toGMTString();this.modCookie(c,"",f,a)}};this.check=function(c,a){this.build();return arguments.length==2?this.get(c).match(a+"\x3d")?!0:!1:this._cookies[c]?!0:!1};this.build()};Bootstrapper.safeInsertIframe=function(url){var newFrame=document.createElement("iframe");newFrame.src=url;newFrame.width=
newFrame.height="1px";newFrame.style.display="none";var rand=parseInt(1E5*1E4*Math.random()*Math.random());Bootstrapper["appendFrame"+rand]=setInterval(function(a,b){return function(){document.getElementsByTagName("body")&&0<document.getElementsByTagName("body").length&&(clearInterval(Bootstrapper["appendFrame"+b]),document.getElementsByTagName("body")[0].appendChild(a))}}(newFrame,rand),150)};Bootstrapper.lookupMPStatus=function(MPAccountStatus){var MPAccStatus;switch(MPAccountStatus){case "0":MPAccStatus=
"General";break;case "1":MPAccStatus="Silver";break;case "2":MPAccStatus="Gold";break;case "3":MPAccStatus="Platinum";break;case "4":MPAccStatus="1K";break;case "5":MPAccStatus="GS";break;default:MPAccStatus="--";break}return MPAccStatus};Bootstrapper.lookupCabinType2=function(cabinType2){var returnType;switch(cabinType2){case "0":returnType="Coach";break;case "1":returnType="Business";break;case "2":returnType="First";break;default:returnType="--";break}return returnType};Bootstrapper.formatDate=
function(date){var textdate=[date.getMonth()+1,date.getDate(),date.getFullYear()];textdate[0]=textdate[0]||12;for(var i=0;i<2;i++)if(textdate[i]<10)textdate[i]="0"+textdate[i];return textdate.join("-")};Bootstrapper.formatDateISO=function(d){var yyyy=d.getFullYear().toString();var mm=(d.getMonth()+1).toString();var dd=d.getDate().toString();return yyyy+"-"+(mm[1]?mm:"0"+mm[0])+"-"+(dd[1]?dd:"0"+dd[0])};Bootstrapper.converTo24=function(d){var splitBy="";var t=d.toLowerCase();if(t.indexOf("pm")>0)splitBy=
"pm";else if(t.indexOf("am")>0)splitBy="am";var slices=t.split(splitBy);if(slices.length>1){var hm=slices[0].split(":");var h=parseInt(hm[0],10);var m=hm[1];if(splitBy==="pm"&&h!==12)h+=12;else if(splitBy==="am"&&h===12)h+=12;if(h.toString().length===1)h="0"+h.toString();return h+":"+m+":"+"00"}else return""};Bootstrapper.base64Encode=function(data){if(typeof window["btoa"]=="function")return btoa(data);var b64="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\x3d";var o1,o2,o3,h1,
h2,h3,h4,bits,i=0,ac=0,enc="",tmp_arr=[];if(!data)return data;do{o1=data.charCodeAt(i++);o2=data.charCodeAt(i++);o3=data.charCodeAt(i++);bits=o1<<16|o2<<8|o3;h1=bits>>18&63;h2=bits>>12&63;h3=bits>>6&63;h4=bits&63;tmp_arr[ac++]=b64.charAt(h1)+b64.charAt(h2)+b64.charAt(h3)+b64.charAt(h4)}while(i<data.length);enc=tmp_arr.join("");var r=data.length%3;return(r?enc.slice(0,r-3):enc)+"\x3d\x3d\x3d".slice(r||3)};var StringMaker=function(){this.str="";this.length=0;this.append=function(s){this.str+=s;this.length+=
s.length};this.prepend=function(s){this.str=s+this.str;this.length+=s.length};this.toString=function(){return this.str}};Bootstrapper.base64Decode=function(input){var keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\x3d";var output=new StringMaker;var chr1,chr2,chr3;var enc1,enc2,enc3,enc4;var i=0;input=input.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(i<input.length){enc1=keyStr.indexOf(input.charAt(i++));enc2=keyStr.indexOf(input.charAt(i++));enc3=keyStr.indexOf(input.charAt(i++));
enc4=keyStr.indexOf(input.charAt(i++));chr1=enc1<<2|enc2>>4;chr2=(enc2&15)<<4|enc3>>2;chr3=(enc3&3)<<6|enc4;output.append(String.fromCharCode(chr1));if(enc3!=64)output.append(String.fromCharCode(chr2));if(enc4!=64)output.append(String.fromCharCode(chr3))}return output.toString()};Bootstrapper.JSON=Bootstrapper.JSON||{};Bootstrapper.JSON.stringify=Bootstrapper.JSON.stringify||function(obj){var t=typeof obj;if(t!="object"||obj===null){if(t=="string")obj='"'+obj+'"';return String(obj)}else{var n,v,json=
[],arr=obj&&obj.constructor==Array;for(n=0;n<obj.length;n++){v=obj[n];t=typeof v;if(t=="string")v='"'+v+'"';else if(t=="object"&&v!==null)v=JSON.stringify(v);json.push((arr?"":'"'+n+'":')+String(v))}return(arr?"[":"{")+String(json)+(arr?"]":"}")}};Bootstrapper.dataObject=function(){var returnObj={global:{},page:{},delCookie:function(name,path,domain){document.cookie=name+"\x3d"+(path?";path\x3d"+path:"")+(domain?";domain\x3d"+domain:"")+";expires\x3dThu, 01 Jan 1970 00:00:01 GMT"},getData:function(key,
layer,scope){if(typeof Bootstrapper.dataObject[scope]!=="undefined"&&typeof Bootstrapper.dataObject[scope][layer]!=="undefined"&&typeof Bootstrapper.dataObject[scope][layer][key]!=="undefined")return Bootstrapper.dataObject[scope][layer][key];else return""},_getData:function(key,layer,scope){if(typeof Bootstrapper.dataObject[scope]!=="undefined"&&typeof Bootstrapper.dataObject[scope][layer]!=="undefined"&&typeof Bootstrapper.dataObject[scope][layer][key]!=="undefined")return Bootstrapper.dataObject[scope][layer][key];
else return"--"},addData:function(key,value,layer,scope,session){var dataValue=typeof value==="function"?value():value;if(session){var sessionData=Bootstrapper.Cookies.get("dataObjectSession").split("|");sessionData.push(scope+"-\x3e"+layer+"-\x3e"+key+"-\x3e"+dataValue);document.cookie="dataObjectSession\x3d"+sessionData.join("|")+"; path\x3d/"}if(scope==="global"||scope==="page"){if(typeof this[scope][layer]==="undefined")this[scope][layer]={};this[scope][layer][key]=dataValue}}},sessionData=Bootstrapper.Cookies.get("dataObjectSession").split("|"),
numSessionData=sessionData.length,i,KEY=2,VALUE=3,LAYER=1,SCOPE=0;for(i=0;i<numSessionData;i++){var currentData=sessionData[i].split("-\x3e");if(currentData.length===4)returnObj.addData(currentData[KEY],currentData[VALUE],currentData[LAYER],currentData[SCOPE])}return returnObj}();Bootstrapper.createFloodlightTag=function(srcId,type,cat,ord){var axel=Math.random()+"";var a=axel*1E13;var src=document.location.protocol+"//fls.doubleclick.net/activityi;src\x3d"+srcId+";type\x3d"+type+";cat\x3d"+cat+(ord?
";ord\x3d"+ord+";num\x3d"+a:";ord\x3d"+a+"?");Bootstrapper.safeInsertIframe(src)};Bootstrapper.getElementsByClassName=function(d,c,f){x=arguments.length>1?arguments.length==2?typeof arguments[1]=="object"&&arguments[1]!=null?c:document:c:document;y=arguments.length>1?arguments.length==2?typeof arguments[1]=="boolean"?c:false:f:false;var e=[];x=typeof x=="object"?x:document;for(var b=x.getElementsByTagName("*"),a=0,g=b.length;a<g;a++)(!y&&b[a].className==d||y&&~b[a].className.indexOf(d))&&e.push(b[a]);
return e};window.MD5=function(e){function h(a,b){var c,d,e,f,g;e=a&2147483648;f=b&2147483648;c=a&1073741824;d=b&1073741824;g=(a&1073741823)+(b&1073741823);return c&d?g^2147483648^e^f:c|d?g&1073741824?g^3221225472^e^f:g^1073741824^e^f:g^e^f}function i(a,b,c,d,e,f,g){a=h(a,h(h(b&c|~b&d,e),g));return h(a<<f|a>>>32-f,b)}function j(a,b,c,d,e,f,g){a=h(a,h(h(b&d|c&~d,e),g));return h(a<<f|a>>>32-f,b)}function k(a,b,d,c,e,f,g){a=h(a,h(h(b^d^c,e),g));return h(a<<f|a>>>32-f,b)}function l(a,b,d,c,e,f,g){a=h(a,
h(h(d^(b|~c),e),g));return h(a<<f|a>>>32-f,b)}function m(a){var b="",d="",c;for(c=0;3>=c;c++)d=a>>>8*c&255,d="0"+d.toString(16),b+=d.substr(d.length-2,2);return b}var f=[],n,o,p,q,a,b,c,d,e=function(a){for(var a=a.replace(/\r\n/g,"\n"),b="",d=0;d<a.length;d++){var c=a.charCodeAt(d);128>c?b+=String.fromCharCode(c):(127<c&&2048>c?b+=String.fromCharCode(c>>6|192):(b+=String.fromCharCode(c>>12|224),b+=String.fromCharCode(c>>6&63|128)),b+=String.fromCharCode(c&63|128))}return b}(e),f=function(b){var a,
c=b.length;a=c+8;for(var d=16*((a-a%64)/64+1),e=Array(d-1),f=0,g=0;g<c;)a=(g-g%4)/4,f=8*(g%4),e[a]|=b.charCodeAt(g)<<f,g++;a=(g-g%4)/4;e[a]|=128<<8*(g%4);e[d-2]=c<<3;e[d-1]=c>>>29;return e}(e);a=1732584193;b=4023233417;c=2562383102;d=271733878;for(e=0;e<f.length;e+=16)n=a,o=b,p=c,q=d,a=i(a,b,c,d,f[e+0],7,3614090360),d=i(d,a,b,c,f[e+1],12,3905402710),c=i(c,d,a,b,f[e+2],17,606105819),b=i(b,c,d,a,f[e+3],22,3250441966),a=i(a,b,c,d,f[e+4],7,4118548399),d=i(d,a,b,c,f[e+5],12,1200080426),c=i(c,d,a,b,f[e+
6],17,2821735955),b=i(b,c,d,a,f[e+7],22,4249261313),a=i(a,b,c,d,f[e+8],7,1770035416),d=i(d,a,b,c,f[e+9],12,2336552879),c=i(c,d,a,b,f[e+10],17,4294925233),b=i(b,c,d,a,f[e+11],22,2304563134),a=i(a,b,c,d,f[e+12],7,1804603682),d=i(d,a,b,c,f[e+13],12,4254626195),c=i(c,d,a,b,f[e+14],17,2792965006),b=i(b,c,d,a,f[e+15],22,1236535329),a=j(a,b,c,d,f[e+1],5,4129170786),d=j(d,a,b,c,f[e+6],9,3225465664),c=j(c,d,a,b,f[e+11],14,643717713),b=j(b,c,d,a,f[e+0],20,3921069994),a=j(a,b,c,d,f[e+5],5,3593408605),d=j(d,
a,b,c,f[e+10],9,38016083),c=j(c,d,a,b,f[e+15],14,3634488961),b=j(b,c,d,a,f[e+4],20,3889429448),a=j(a,b,c,d,f[e+9],5,568446438),d=j(d,a,b,c,f[e+14],9,3275163606),c=j(c,d,a,b,f[e+3],14,4107603335),b=j(b,c,d,a,f[e+8],20,1163531501),a=j(a,b,c,d,f[e+13],5,2850285829),d=j(d,a,b,c,f[e+2],9,4243563512),c=j(c,d,a,b,f[e+7],14,1735328473),b=j(b,c,d,a,f[e+12],20,2368359562),a=k(a,b,c,d,f[e+5],4,4294588738),d=k(d,a,b,c,f[e+8],11,2272392833),c=k(c,d,a,b,f[e+11],16,1839030562),b=k(b,c,d,a,f[e+14],23,4259657740),
a=k(a,b,c,d,f[e+1],4,2763975236),d=k(d,a,b,c,f[e+4],11,1272893353),c=k(c,d,a,b,f[e+7],16,4139469664),b=k(b,c,d,a,f[e+10],23,3200236656),a=k(a,b,c,d,f[e+13],4,681279174),d=k(d,a,b,c,f[e+0],11,3936430074),c=k(c,d,a,b,f[e+3],16,3572445317),b=k(b,c,d,a,f[e+6],23,76029189),a=k(a,b,c,d,f[e+9],4,3654602809),d=k(d,a,b,c,f[e+12],11,3873151461),c=k(c,d,a,b,f[e+15],16,530742520),b=k(b,c,d,a,f[e+2],23,3299628645),a=l(a,b,c,d,f[e+0],6,4096336452),d=l(d,a,b,c,f[e+7],10,1126891415),c=l(c,d,a,b,f[e+14],15,2878612391),
b=l(b,c,d,a,f[e+5],21,4237533241),a=l(a,b,c,d,f[e+12],6,1700485571),d=l(d,a,b,c,f[e+3],10,2399980690),c=l(c,d,a,b,f[e+10],15,4293915773),b=l(b,c,d,a,f[e+1],21,2240044497),a=l(a,b,c,d,f[e+8],6,1873313359),d=l(d,a,b,c,f[e+15],10,4264355552),c=l(c,d,a,b,f[e+6],15,2734768916),b=l(b,c,d,a,f[e+13],21,1309151649),a=l(a,b,c,d,f[e+4],6,4149444226),d=l(d,a,b,c,f[e+11],10,3174756917),c=l(c,d,a,b,f[e+2],15,718787259),b=l(b,c,d,a,f[e+9],21,3951481745),a=h(a,n),b=h(b,o),c=h(c,p),d=h(d,q);return(m(a)+m(b)+m(c)+
m(d)).toLowerCase()};var msRefs=["kayak.com","tripadvisor.com","fly.com","hipmunk.com","farecompare.com","skyscanner.net","cheapflights.com","kayak.yapta.com","skyscanner.com","bookingbuddy.com","google.com","seatguru.com"];var refDomain="";var msDomain="";var isMSRef=function(){var ref=document.referrer;if(ref.length>0){refDomain=document.referrer.split("/")[2];for(var n=0;msRefs.length>n;n++)if(refDomain.indexOf(msRefs[n])>-1){msDomain=msRefs[n];return true}}return false};if(isMSRef()){var today=
new Date;var fiveMin=new Date(today.getTime()-5*60*1E3);document.cookie="metaSearchRef\x3d"+msDomain+"; expires\x3d"+fiveMin+"; path\x3d/"}Bootstrapper._dateFormat=function(_dt,fmt){var dt=new Date(_dt),dateObj={rightSizeMe:function(me){return(me<10?"0":"")+me},d:function(){return dt.getDate()},dd:function(){return dateObj.rightSizeMe(dt.getDate())},dddd:function(){return dt.getDayName()},DD:function(){return dateObj.rightSizeMe(dt.getDay())},yyyy:function(){return dt.getFullYear()},HH:function(){return dateObj.rightSizeMe(dt.getHours())},
hh:function(){var hours=dt.getHours();return dateObj.rightSizeMe(hours>12?hours-12:hours)},ms:function(){return dateObj.rightSizeMe(dt.getMilliseconds())},mm:function(){return dateObj.rightSizeMe(dt.getMinutes())},M:function(){return dt.getMonth()+1},MM:function(){return dateObj.rightSizeMe(dt.getMonth()+1)},MMMM:function(){return dt.getMonthName()},ss:function(){return dateObj.rightSizeMe(dt.getSeconds())},yy:function(){return dateObj.yyyy().toString().substring(2)}},retDate=fmt,i=0,fmtArr=[""],
fmtIter=0,oldChar="";if(dt=="Invalid Date"||!fmt)return _dt;if(fmt.length>0){for(i=0;i<fmt.length;i++)if(fmt[i].match(/[^A-Za-z]/)===null){if(i>0&&fmt[i]!==oldChar){fmtIter++;fmtArr[fmtIter]=""}fmtArr[fmtIter]=fmtArr[fmtIter]+fmt[i];oldChar=fmt[i]}for(i=0;i<fmtArr.length;i++)if(dateObj.hasOwnProperty(fmtArr[i]))retDate=retDate.replace(fmtArr[i],dateObj[fmtArr[i]])}return retDate!==fmt?retDate:dt}},968238,[1016250],269644,[202627]);
Bootstrapper.bindDependencyDOMLoaded(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;var eventlabel="Digital 2.0";$('div[class\x3d"contact"]').bind("click",function(){var action=$(this).children().text()+"|--|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$("#frm-site-search").submit(function(e){var action="Search|"+document.getElementById("site-search").value+
"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('div[class\x3d"logo"]').bind("click",function(){var action=$(this).children().attr("alt")+" Homepage|--|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li dropdown-reservations"],li[class\x3d"top-nav-links-li dropdown-reservations selected"]').find('div[class\x3d"top-nav-dropdown-links feature-messaging"]').bind("click",
function(){var action="Reservations|Feature-Messaging:"+$(this).children().attr("href")+"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li  dropdown-travel-info"],li[class\x3d"top-nav-links-li  dropdown-travel-info selected"]').find('div[class\x3d"top-nav-dropdown-links feature-messaging"]').bind("click",function(){var action=
"Travel Information|Feature-Messaging:"+$(this).children().attr("href")+"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li dropdown-deals"],li[class\x3d"top-nav-links-li dropdown-deals selected"]').find('div[class\x3d"top-nav-dropdown-links feature-messaging"]').bind("click",function(){var action="Deals \x26 Offers|Feature-Messaging:"+
$(this).children().attr("href")+"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li dropdown-mp"],li[class\x3d"top-nav-links-li dropdown-mp selected"]').find('div[class\x3d"top-nav-dropdown-links feature-messaging mp-ad"]').bind("click",function(){var action="MileagePlus|Feature-Messaging:"+$(this).find('div[class\x3d"mp-ad-message"]').children().attr("href")+
"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li dropdown-reservations"],li[class\x3d"top-nav-links-li dropdown-reservations selected"]').find('div[class\x3d"top-nav-dropdown-links"] a').bind("click",function(){var action="Reservations|"+$(this).text()+":"+$(this).attr("href")+"|"+$(document).attr("title");_gaq.push(["_trackEvent",
"Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li  dropdown-travel-info"],li[class\x3d"top-nav-links-li  dropdown-travel-info selected"]').find('div[class\x3d"top-nav-dropdown-links"] a').bind("click",function(){var action="Travel Information|"+$(this).text()+":"+$(this).attr("href")+"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);
ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li dropdown-deals"],li[class\x3d"top-nav-links-li dropdown-deals selected"]').find('div[class\x3d"top-nav-dropdown-links"] a').bind("click",function(){var action="Deals \x26 Offers|"+$(this).text()+":"+$(this).attr("href")+"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,
1,{"nonInteraction":1})});$('ul[id\x3d"top-nav-menu"]').find('li[class\x3d"top-nav-links-li dropdown-mp"],li[class\x3d"top-nav-links-li dropdown-mp selected"]').find('div[class\x3d"top-nav-dropdown-links"] a').bind("click",function(){var action="MileagePlus|"+$(this).text()+":"+$(this).attr("href")+"|"+$(document).attr("title");_gaq.push(["_trackEvent","Top Navigation",action,eventlabel]);ga("send","event","Top Navigation",action,eventlabel,1,{"nonInteraction":1})});$("li.top-nav-links-li:nth-child(4)").mouseover(function(){$(".mp-ad-message \x3e a:nth-child(1)").each(function(){if(this.href.indexOf("?")>
-1){var linkURL="";if(this.href.indexOf("int_campaign\x3d")>0)linkURL=this.href;else if(this.href.indexOf(".doubleclick.net/")>-1&&this.href.indexOf("adurl\x3d")>0){var adurlString=this.href.match(/adurl=([^&]+)/i);if(adurlString.length>1)linkURL=decodeURIComponent(adurlString[1])}if(linkURL.length>0&&linkURL!==""&&linkURL.indexOf("?")>-1&&linkURL.indexOf("int_campaign\x3d")>-1){var linkData=Bootstrapper.getParamsFromURL(linkURL);var concatVal=Bootstrapper.setCustomVars(linkData,3);if(concatVal!==
""){if(concatVal.indexOf("d|")===0)if($(this).is(":visible")&&!$(this).is(":hidden")){_gaq.push(["_setCustomVar",28,"Internal Campaign Data",concatVal.substr(0,106)],["_trackEvent",Bootstrapper.eventCategoryTitle,"Impressions",$(this).href,null,true]);ga("send","event","Internal Campaigns","Impressions",$(this).href,{"nonInteraction":1,"dimension22":concatVal.substr(0,106)})}Bootstrapper.unobtrusiveAddEvent($(this),"onmousedown",Bootstrapper.trackLinkInGA)}}}})})},968235,[1103875],235706,[248942]);
Bootstrapper.bindDependencyDOMLoaded(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;var category="Bottom Navigation",label="Digital 2.0";$('div[class\x3d"edit-bg"]').bind("click",function(){window._gaq.push(["_trackEvent",category,"Change Background Widget|--|"+document.title,label,1,true]);window.ga("send","event",category,"Change Background Widget|--|"+document.title,label,1,{"nonInteraction":1})});$(document).on("click",".bgimage",function(){window._gaq.push(["_trackEvent",
category,"Change Background Selection|"+$(this).attr("src")+"|"+document.title,label,1,true]);window.ga("send","event",category,"Change Background Selection|"+$(this).attr("src")+"|"+document.title,label,1,{"nonInteraction":1})});$(document).on("click","#random-checkbox",function(){if($(this).is(":checked")){window._gaq.push(["_trackEvent",category,"Change Background Selection|Random Every Visit|"+document.title,label,1,true]);window.ga("send","event",category,"Change Background Selection|Random Every Visit|"+
document.title,label,1,{"nonInteraction":1})}});$('div[class\x3d"footer-quicklinks-dropdown-links"]').find("a").bind("click",function(){window._gaq.push(["_trackEvent",category,"About United|"+$(this).closest("div").find("h3").text()+":"+$(this).text()+"|"+document.title,label,1,true]);window.ga("send","event",category,"About United|"+$(this).closest("div").find("h3").text()+":"+$(this).text()+"|"+document.title,label,1,{"nonInteraction":1})});$('div[class\x3d"footer-quicklinks-dropdown-links footer-products"]').find("a").bind("click",
function(){window._gaq.push(["_trackEvent",category,"Products and Services|"+$(this).text()+"|"+document.title,label,1,true]);window.ga("send","event",category,"Products and Services|"+$(this).text()+"|"+document.title,label,1,{"nonInteraction":1})});$('nav[class\x3d"footer-quicklinks content-wrapper"]').find("a").bind("click",function(){if($(this).text()=="Important notices"){window._gaq.push(["_trackEvent",category,"Important Notices|--|"+document.title,label,1,true]);window.ga("send","event",category,
"Important Notices|--|"+document.title,label,1,{"nonInteraction":1})}});$('div[class\x3d"footer content-wrapper"]').find("a").bind("click",function(){if($(this).attr("title")){window._gaq.push(["_trackEvent",category,"Stay Connected|"+$(this).attr("title")+"|"+document.title,label,1,true]);window.ga("send","event",category,"Stay Connected|"+$(this).attr("title")+"|"+document.title,label,1,{"nonInteraction":1})}if($(this).attr("title")=="Facebook"){window._gaq.push(["_trackSocial","facebook","facebook_exit"]);
window.ga("send",{"hitType":"social","socialNetwork":"facebook","socialAction":"facebook_exit"})}else if($(this).attr("title")=="Twitter"){window._gaq.push(["_trackSocial","twitter","twitter_exit"]);window.ga("send",{"hitType":"social","socialNetwork":"twitter","socialAction":"twitter_exit"})}else if($(this).attr("title")=="YouTube"){window._gaq.push(["_trackSocial","youtube","youtube_exit"]);window.ga("send",{"hitType":"social","socialNetwork":"youtube","socialAction":"youtube_exit"})}else if($(this).attr("title")==
"Instagram"){window._gaq.push(["_trackSocial","instagram","instagram_exit"]);window.ga("send",{"hitType":"social","socialNetwork":"instagram","socialAction":"instagram_exit"})}else if($(this).attr("title")=="LinkedIn"){window._gaq.push(["_trackSocial","linkedin","linkedin_exit"]);window.ga("send",{"hitType":"social","socialNetwork":"linkedin","socialAction":"linkedin_exit"})}else if($(this).find("img").attr("alt")){window._gaq.push(["_trackEvent",category,$(this).find("img").attr("alt")+"|--|"+document.title,
label,1,true]);window.ga("send","event",category,$(this).find("img").attr("alt")+"|--|"+document.title,label,1,{"nonInteraction":1})}else{window._gaq.push(["_trackEvent",category,$(this).text()+"|--|"+document.title,label,1,true]);window.ga("send","event",category,$(this).text()+"|--|"+document.title,label,1,{"nonInteraction":1})}});$(".navigation-links \x3e li:nth-child(2) \x3e a:nth-child(1)").click(function(){$("div.feature-messaging:nth-child(4) \x3e a:nth-child(1)").each(function(){if(this.href.indexOf("?")>
-1){var linkURL="";if(this.href.indexOf("int_campaign\x3d")>0)linkURL=this.href;else if(this.href.indexOf(".doubleclick.net/")>-1&&this.href.indexOf("adurl\x3d")>0){var adurlString=this.href.match(/adurl=([^&]+)/i);if(adurlString.length>1)linkURL=decodeURIComponent(adurlString[1])}if(linkURL.length>0&&linkURL!==""&&linkURL.indexOf("?")>-1&&linkURL.indexOf("int_campaign\x3d")>-1){var linkData=Bootstrapper.getParamsFromURL(linkURL);var concatVal=Bootstrapper.setCustomVars(linkData,3);if(concatVal!==
""){if(concatVal.indexOf("d|")===0)if($(this).is(":visible")&&!$(this).is(":hidden")){_gaq.push(["_setCustomVar",28,"Internal Campaign Data",concatVal.substr(0,106)],["_trackEvent",Bootstrapper.eventCategoryTitle,"Impressions",$(this).href,null,true]);ga("send","event","Internal Campaigns","Impressions",$(this).href,{"nonInteraction":1,"dimension22":concatVal.substr(0,106)})}Bootstrapper.unobtrusiveAddEvent($(this),"onmousedown",Bootstrapper.trackLinkInGA)}}}})})},968230,[1103875],269584,[248942]);
Bootstrapper.bindDOMLoaded(function(){var Bootstrapper=window["Bootstrapper"];var ensightenOptions=Bootstrapper.ensightenOptions;var lang=Bootstrapper.dataObject.getData("langCode","locale","global"),pos=Bootstrapper.dataObject.getData("POS","locale","global"),langList={en:!0,EN:!0},posList={US:!0};if(posList[pos]&&langList[lang])try{var menus=$("#header-nav-mp .top-nav-dropdown-links ul");var mLeft=$(menus[0]);var mRight=$(menus[1]);var mpServiceCenter=mRight.find("li").eq(-1);var ccMembers=mLeft.find("li").eq(-2);
var langUrl=lang+"-"+pos;if(mLeft.length&&mRight.length&&mpServiceCenter.length&&ccMembers.length){$(ccMembers).remove();$(mpServiceCenter).remove();mLeft.append(ccMembers);mLeft.append(mpServiceCenter);var gcCard=$('\x3cli\x3e\x3ca href\x3d"/web/'+langUrl+'/content/products/chase/default.aspx"\x3eGet credit card\x3c/a\x3e\x3c/li\x3e');gcCard.insertAfter($(mRight).find("li").eq(1))}}catch(e){}},1150308,356344);