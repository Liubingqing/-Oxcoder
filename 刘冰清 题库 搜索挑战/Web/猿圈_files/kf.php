var acc_host='accwww15.53kf.com';var companyid='72124917';var hz6d_guest_ip='221.130.41.199';var ipstr='%E5%8C%97%E4%BA%AC%E5%B8%82%28%E7%A7%BB%E5%8A%A8GRPS%E5%85%B1%E7%94%A8%E5%87%BA%E5%8F%A3%29%5B%E7%A7%BB%E9%80%9A%5D';var in_timestamp='1461316964557';var hz6d_guest_id='10008074627016';var style_id= '1';
/* 
    变量：
    acc_host        acc.www4.53kf.com
    companyid       72034819
    hz6d_guest_ip   125.120.149.68
    ipstr           浙江省杭州市[电信]
    in_timestamp    time()      1445841152695
    hz6d_guest_id   66518726610
    style_id        2


var acc_host     = '';
var companyid    = '';
var hz6d_guest_ip= '';
var ipstr        = '';
var in_timestamp = '';
var hz6d_guest_id= '';
var style_id     = '';
*/

in_timestamp = parseInt(in_timestamp/1000);
var http_pro = (document.location.protocol == 'https:')?'https://':'http://';
onliner_zdfq = 0;
(function(window, undefined) {
	var w = window,
		d = document,
		dd = d.documentElement,
		db = d.body,// db kf.php在head中时获取不到 
		head = d.head || d.getElementsByTagName("head")[0] || dd,
		isStrict = d.compatMode == "CSS1Compat",
		m = Math.max,
		ua = navigator.userAgent,
		np = navigator.platform,
		EN = w.encodeURIComponent,
		DE = w.decodeURIComponent;

	var $53 = function(id) {return d.getElementById(id) ? d.getElementById(id) : null};
	$53.version = '1.0.0';
	$53.global = {};
	$53.getKFscript = function(){
		if (typeof $53.global[''] == 'undefined' || $53.global[''] == null) {
			var scripts = document.getElementsByTagName('script'), len = scripts.length, i = 0;
			for(;i<len;i++){
				if (/kf\.php/img.test(scripts[i].src)) {
					$53.global[''] = scripts[i];
					break;
				}
			}
		}
		return $53.global[''];
	};
	$53.ready = (function(){
		var ie = !!(window.attachEvent && !window.opera),
			wk = /webkit\/(\d+)/i.test(navigator.userAgent) && (RegExp.$1 < 525),
			fn = [],
			run = function () {isReady = true; for (var i = 0; i < fn.length; i++) fn[i](); },
			d = document,
			isReady = false;
		return function (f) {
			if (d.body) {f();return;}
			if (isReady) {f();return;}
			if (!ie && !wk && d.addEventListener) return d.addEventListener('DOMContentLoaded', f, false);
			if (fn.push(f) > 1) return;
			if (ie) {
				(function () {
					if (!isReady) {
						try { d.documentElement.doScroll('left'); run(); }
						catch (err) { setTimeout(arguments.callee, 0); }
					}
				})();
			} else if (wk) {
				var t = setInterval(function () {
					if (/^(loaded|complete)$/.test(d.readyState))
						clearInterval(t), run();
				}, 0);
			}
		};
	})();
	$53.forEach = function(enumerable, iterator, context) {
		var i, n, t;
		if (typeof iterator == "function" && enumerable) {
			// Array or ArrayLike or NodeList or String or ArrayBuffer
			n = typeof enumerable.length == "number" ? enumerable.length: enumerable.byteLength;
			if (typeof n == "number") {
				if (Object.prototype.toString.call(enumerable) === "[object Function]") {
					return enumerable;
				}
				for (i = 0; i < n; i++) {
					t = enumerable[i];
					t === undefined && (t = enumerable.charAt && enumerable.charAt(i));
					iterator.call(context || null, t, i, enumerable);
				}
				// enumerable is number
			} else if (typeof enumerable == "number") {
				for (i = 0; i < enumerable; i++) {
					iterator.call(context || null, i, i, i);
				}
				// enumerable is json
			} else if (typeof enumerable == "object") {
				for (i in enumerable) {
					if (enumerable.hasOwnProperty(i)) {
						iterator.call(context || null, enumerable[i], i, enumerable);
					}
				}
			}
		}
		return enumerable;
	};
	$53.type = (function() {
		var objectType = {},
			nodeType = [, "HTMLElement", "Attribute", "Text", , , , , "Comment", "Document", , "DocumentFragment", ],
			str = "Array Boolean Date Error Function Number RegExp String",
			retryType = {
				'object': 1,
				'function': '1'
			},
			toString = objectType.toString;
		$53.forEach(str.split(" "), function(name) {
			objectType["[object " + name + "]"] = name.toLowerCase();
			$53["is" + name] = function(unknow) {
				return $53.type(unknow) == name.toLowerCase();
			}
		});
		return function(unknow) {
			var s = typeof unknow;
			return ! retryType[s] ? s: unknow == null ? "null": unknow._type_ || objectType[toString.call(unknow)] || nodeType[unknow.nodeType] || (unknow == unknow.window ? "Window": "") || "object";
		};
	})();
    
	$53.isObject = function(unknow) {
		return typeof unknow === "function" || (typeof unknow === "object" && unknow != null)
	};
    
	$53.isPlainObject = function(unknow) {
		var key, hasOwnProperty = Object.prototype.hasOwnProperty;

		if ($53.type(unknow) != "object") {
			return false;
		}
		if (unknow.constructor && !hasOwnProperty.call(unknow, "constructor") && !hasOwnProperty.call(unknow.constructor.prototype, "isPrototypeOf")) {
			return false;
		}
		for (key in unknow) {}
		return key === undefined || hasOwnProperty.call(unknow, key);
	};
	$53.extend = function(depthClone, object) {
		var second, options, key, src, copy, i = 1,
		n = arguments.length,
		result = depthClone || {},
		copyIsArray, clone;
		$53.isBoolean(depthClone) && (i = 2) && (result = object || {}); ! $53.isObject(result) && (result = {});
		for (; i < n; i++) {
			options = arguments[i];
			if ($53.isObject(options)) {
				for (key in options) {
					src = result[key];
					copy = options[key];
					if (src === copy) {
						continue;
					}
					if ($53.isBoolean(depthClone) && depthClone && copy && ($53.isPlainObject(copy) || (copyIsArray = $53.isArray(copy)))) {
						if (copyIsArray) {
							copyIsArray = false;
							clone = src && $53.isArray(src) ? src: [];
						} else {
							clone = src && $53.isPlainObject(src) ? src: {};
						}
						result[key] = $53.extend(depthClone, clone, copy);
					} else if (copy !== undefined) {
						result[key] = copy;
					}
				}
			}
		}
		return result;
	}
	$53.extend($53, {
		$: function(id) {
			return d.getElementById(id) ? d.getElementById(id) : null;
		},
		EN: EN,
		DE: DE,
		isStrict: isStrict,
		data: function(key, value) {
			if(typeof value == 'undefined') {
				return $53.global[key] === undefined ? null : $53.global[key];
			} else {
				$53.global[key] = value;
			}
		},
		trim: function(text) {
			//return text == null ? "": (text + "").replace(new RegExp('(^[\\\\s\\\\t\\\\xa0\\\\u3000\\\\uFEFF]+)|([\\\\u3000\\\\xa0\\\\s\\\\t\\\\uFEFF]+\\x24)', 'g'), '');
            return text == null ? "": (text + "").replace(new RegExp('(^[\\s\\t\\xa0\\u3000\\uFEFF]+)|([\\u3000\\xa0\\s\\t\\uFEFF]+\x24)', 'g'), '');
		},
		getOs: function() {
			var allOs = ['iphone', 'android', 'macos', 'linux', 'win2008', 'win8', 'win7', 'winvista', 'win98', 'win2000', 'win2003', 'winxp', 'os_other'];
			var isWin = (np == "Win32") || (np == "Windows") || (np == "Win64");
			if (isWin) {
				var winos = {
					'win98': '(Win98)|(Windows 98)',
					'win2000': '(Windows NT 5.0)|(Windows 2000)',
					'winxp': '(Windows NT 5.1)|(Windows XP)',
					'win2003': '(Windows NT 5.2)|(Windows 2003)',
					'win7': '(Windows NT 6.1)|(Windows 7)',
					'winvista': '(Windows NT 6.0)|(Windows Vista)',
					'win8': '(Windows NT 6.2)|(Windows 8)',
					'win2008': '(Windows NT 6.1)|(Windows 2008)'
				};
				for (var i in winos) {
					if (winos.hasOwnProperty(i) && (new RegExp(winos[i], 'i')).test(ua)) return i;
				}
			}
			var isMac = (np == "Mac68K") || (np == "MacPPC") || (np == "Macintosh") || (np == "MacIntel");
			if (isMac) return "macos";
			if ((np == "X11") && !isWin && !isMac) return "unix";
			if ((np.toLowerCase() + ua.toLowerCase()).indexOf('iphone') > -1) return 'iphone';
			if (np.toLowerCase().indexOf("linux") > -1 && ua.toLowerCase().indexOf('android') > -1) return 'android';
			if (np.indexOf("Linux") > -1) return "linux";
			return "os_other";
		},
        isMobile: function() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
            var flag = 'n';
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = 'y';
                    break;
                }
            }
            return flag;    
        },
        getUrlParam: function() {
            var url = location.search; 
            var theRequest = new Object();
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for(var i = 0; i < strs.length; i ++) {
                    theRequest[strs[i].split("=")[0]]=strs[i].split("=")[1];
                }
            }
            return theRequest;   
        },
		getBrowser: function() {
			var browsers = {
				'sogou': 'sogou',
				'maxthon': 'maxthon',
				'opera': 'opera',
				'qq': 'tencent',
				'uc': 'uc',
				'360': '360',
				'firefox': 'firefox',
				'chrome': 'chrome',
				'safari': 'safari',
				'ie10': 'msie 10',
				'ie9': 'msie 9',
				'ie8': 'msie 8',
				'ie7': 'msie 7',
				'ie6': 'msie 6',
				'ie5': 'msie 5'
			};
			for (var i in browsers) {
				if (browsers.hasOwnProperty(i) && (new RegExp(browsers[i], 'i')).test(ua)) return i;
			}
			return 'ua_other';
		},
		getScreen: function() {
			return screen.width + "_" + screen.height;
		},
		setCookie: function(key,value,options) {
			if (!$53.isCookieKey(key)) {return;}
			options = options || {};
			var expires = options.expires;
			if ('number' == typeof options.expires) {
				expires = new Date();
				expires.setTime(expires.getTime() + options.expires*1000);
			}
			document.cookie = key + "=" + EN(value)
			+ (options.path ? "; path=" + options.path : "")
			+ (expires ? "; expires=" + expires.toUTCString() : "")
			+ ("; domain=" + (options.domain ? options.domain : location.hostname))
			+ (options.secure ? "; secure" : "");
		},
		getCookie: function(key) {
			if ($53.isCookieKey(key)) {
				var reg = new RegExp('(^| )' + key + '=([^;]*)(;|\\x24)'), result = reg.exec(document.cookie);
				if (result) {
					var value = (result[2] === undefined || result[2] === null) ? '' : result[2];
				}
			}
			if ('string' == typeof value) {
				return DE(value);
			}
			return '';
		},
		isCookieKey:function(key) {
		//	return (new RegExp('^[^\\\\x00-\\\\x20\\\\x7f\\\\(\\\\)<>@,;:\\\\\\\\\\\\"\\\\[\\\\]\\\\?=\\\\{\\\\}\\\\/\\\\u0080-\\\\uffff]+\\x24')).test(key);
            return (new RegExp('^[^\\x00-\\x20\\x7f\\(\\)<>@,;:\\\\\\"\\[\\]\\?=\\{\\}\\/\\u0080-\\uffff]+\x24')).test(key);
		},
		getWH: function() { // 获取窗口可用大小 
			return {
				W: (isStrict ? dd: d.body).clientWidth,
				H: (isStrict ? dd: d.body).clientHeight
			};
		},
		getSWH: function() { // 获取屏幕分辨率的大小
			return {
				W: screen.width,
				H: screen.height
			};
		},
		getS: function() {// 获取滚动距离 
			return {
				L: m(dd.scrollLeft, d.body.scrollLeft),
				T: m(dd.scrollTop, d.body.scrollTop)
			};
		},
		htmlDecode: function(text) {
			return text.replace(/&amp;/g, '&').replace(/&quot;/g, '\"').replace(/&#039;/g, '\'').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&douhao/g, ",").replace(/&jinghao/g, '#');
		},
		creElm: function(o, t, a, loc) {
			loc = loc || 0;
			var b = d.createElement(t || 'div'), c = (a || d.body || dd);
			for (var p in o) {
				if (!o.hasOwnProperty(p)) continue;
				p == 'style' ? b[p].cssText = o[p] : b[p] = o[p];
				if(p == 'id' && $53(o[p])) $53(o[p]).parentNode.removeChild($53(o[p]));
			}
			if (!loc) return c.insertBefore(b, c.firstChild);
			else return $53.insertAfter(b, c.lastChild);
		},
		insertAfter: function(newEl, targetEl)
		{
			var parentEl = targetEl.parentNode;
			if(parentEl.lastChild == targetEl)
			{
				return parentEl.appendChild(newEl);
			}else
			{
				return parentEl.insertBefore(newEl,targetEl.nextSibling);
			}
		},
		createScript: function(id,url){
			$53.creElm({
				'id':id == '' ? 'hz6d_script_' + Math.random() : id,
				'src':url,
				'charset':'utf-8'
			},'script',head);
		},
		before: function(html, elem){
			var frag = d.createDocumentFragment(), div=d.createElement('div');
			div.innerHTML = html;
			frag.appendChild(div);
			return (elem.parentNode || d.body || dd).insertBefore(div.firstChild.cloneNode(true), elem);
			frag = null;
		},
		after: function(html, elem){
			var frag = d.createDocumentFragment(), div=d.createElement('div');
			div.innerHTML = html;
			frag.appendChild(div);
			return $53.insertAfter(div.firstChild.cloneNode(true), elem);
			frag = null;
		},
		insertFixed: function(html){ // 图标嵌入固定模式用 //
			$53.ready(function(){
				var script = $53.getKFscript(), elem = null;
				if (script.parentNode == head) elem = $53.before(html, d.body.firstChild);
				else elem = $53.after(html, script);
			});
		},
		getTimeTo24: function(){
			//get senconds time from now to tomorrow 00:00
			var d1 = new Date(),
				d2 = new Date();
			d1.setDate(d1.getDate() + 1);
			d1.setHours(0);
			d1.setMinutes(0);
			d1.setSeconds(0);
			return (d1.getTime() - d2.getTime())/1000;
		},
		json2str : function(json,code){
			var arr = [];
			var encode =  code == 'urlencode' ? $53.EN : function(data){return data};
			for(var i in json) {
				if (json.hasOwnProperty(i)) {
					arr.push(i + '=' + encode(json[i]));
				}
			}
			return arr.join('&');
		},
		addEvent : function( obj, type, fn ) {
			if ( obj.attachEvent ) {
				obj['e'+type+fn] = fn;
				obj[type+fn] = function(){obj['e'+type+fn]( window.event );}
				obj.attachEvent( 'on'+type, obj[type+fn] );
			} else {
				obj.addEventListener( type, fn, false );
			}
		},
		removeEvent : function( obj, type, fn ) {
			if ( obj.detachEvent ) {
				obj.detachEvent( 'on'+type, obj[type+fn] );
				obj[type+fn] = null;
			} else {
				obj.removeEventListener( type, fn, false );
			}
		}
	});
	// window.open 方法重写 
	// 支持ie/ff/chrome/safari/opera 
	var _open = window.open;
	window.open = function(sURL, sName, sFeatures, bReplace) {
		if (sURL == undefined) {
			sURL = ''
		}
		if (sName == undefined) {
			sName = ""
		}
		if (sFeatures == undefined) {
			sFeatures = ""
		}
		if (bReplace == undefined) {
			bReplace = false
		}
		if (/webCompany.php|webClientMin.php/.test(sURL)) {
			sURL += '&timeStamp=' + new Date().getTime() + '&ucust_id=' + $53.EN($53.getCookie('ucust_id'));
		} else if ('$zdyurl' != '') {
			var _zdyurl = '$zdyurl';
			if (sURL.indexOf(_zdyurl) > -1) {
				sURL += '&timeStamp=' + new Date().getTime() + '&ucust_id=' + $53.EN($53.getCookie('ucust_id'));
			}
		}
		try{sURL = sURL.replace('&referer={hz6d_referer}',hz6d_referer);}catch(e){}
		var win = _open(sURL, sName, sFeatures, bReplace);
		return win;
	}
	window.$53 = $53;
})(window);

// 设置 新老访客 
if(!$53.getCookie('53gid2')) {
	$53.setCookie('53gid2',hz6d_guest_id,{
		expires:10*365*24*3600
	});
	// new visitor
	$53.setCookie('visitor_type','new');
} else if($53.getCookie('53gid2')) {
	// old visitor
	$53.setCookie('visitor_type','old');
    hz6d_guest_id = $53.getCookie('53gid2');   
}
// set my site uid -> crm
// set 53kf guest_id 设置UV 
if (!$53.getCookie('53gid0')){
	$53.setCookie('53gid0',hz6d_guest_id,{
		expires:$53.getTimeTo24()
	});
	$53.data('is_uv',1);
} else if($53.getCookie('53gid2')){
	$53.data('is_uv',0);
}
// 设置RV 
if (!$53.getCookie('53gid1')){
	$53.setCookie('53gid1',hz6d_guest_id,{
		expires:86400
	});
	$53.data('is_rv',0);
} else if($53.getCookie('53gid2')){
	$53.data('is_rv',1);
}

var is_revisit = 0;
if (!$53.getCookie('53revisit')) {
    $53.setCookie('53revisit',new Date().getTime(),{
		expires:10*365*24*3600,'path':'/'
	});       
} else {
    if((new Date().getTime() - $53.getCookie('53revisit')) > 86400000){
        is_revisit = 1;    
    }
}

// 获取访问的入口来源页面:搜索引擎/外部链接/直接输入 
var hz6d_from_page = $53.getCookie("53kf_"+companyid+"_keyword");
eval("var kf_"+companyid+"_keyword_ok=$53.getCookie('kf_"+companyid+"_keyword_ok');");
if (!eval("kf_"+companyid+"_keyword_ok"))
{   
    var hz6d_request = $53.getUrlParam();
    var hz6d_tglink = false;
    var search_engine_list = {'baidu':'wd=',
        'haosou':'q=',
        'sogou':'query=',
        'google':'q=',
        'youdao':'q=',
        'sm':'q='
		};
    if(hz6d_request['tgse'] && hz6d_request['tgkwd']){
	   hz6d_tglink = 'http://www.' + hz6d_request['tgse'] + '.com/s?' + search_engine_list[hz6d_request['tgse']] + decodeURIComponent(hz6d_request['tgkwd']);
    }
    if(hz6d_tglink){//是否是推广页面
        hz6d_from_page = hz6d_tglink;        
    }else{
        hz6d_from_page = document.referrer;    
    }
}
$53.data('page_referer',hz6d_from_page);
$53.setCookie("53kf_"+companyid+"_keyword",hz6d_from_page,{'path':'/'});
$53.setCookie("kf_"+companyid+"_keyword_ok",1,{'path':'/'});
hz6d_from_page_new = "&keyword=" + $53.EN(hz6d_from_page);
var acc_browser = $53.getBrowser();
var acc_os = $53.getOs();

function hz6d_sendACC() {
    var kh_status = 0;
    if(onliner_zdfq==3) { kh_status = 3; }
        var talk_page_tmp = window.location.href;
        if(talk_page_tmp.indexOf('hz6d{') != -1) {
            talk_page_tmp = talk_page_tmp.substring(0,talk_page_tmp.indexOf('hz6d{'));
        }
        var talk_page = window.encodeURIComponent(talk_page_tmp);
   // 	var kf_time = "$in_timestamp";
    	var time = new Date().getTime();
    	var curSecond = Math.floor(time/1000);										
    //	var url = "$http://$acc_host/sendacc.jsp?cmd=ACC&did=0&sid=12&company_id="+com_id+"&guest_id="+hz6d_guest_id+"&status="+kh_status+"&guest_name=&guest_ip="+ip+"&guest_ip_info="+guest_ip_info+"&from_page="+from_page+"&talk_page="+talk_page+"&kf_time="+kf_time+"&bto_id6d=-99&time="+time + '&ucust_id=' + $53.getCookie('ucust_id') + '&style=' + $style_id + '&is_mobile=n&visitor_type='+$53.getCookie('visitor_type')+'&is_uv='+$53.data('is_uv');
    	var url = http_pro + acc_host + "/sendacc.jsp?cmd=ACC&did=0&sid=12&company_id="+companyid+"&guest_id="+hz6d_guest_id+"&status="+kh_status+"&guest_name=&guest_ip="+$53.EN(hz6d_guest_ip)+"&guest_ip_info="+ipstr+"&from_page=" + $53.EN($53.getCookie("53kf_"+companyid+"_keyword")) +"&talk_page="+talk_page+"&kf_time="+in_timestamp+"&bto_id6d=-99&time="+time + '&ucust_id=' + $53.EN($53.getCookie('ucust_id')) + '&style='+style_id+'&is_mobile='+$53.isMobile()+'&visitor_type='+$53.getCookie('visitor_type')+'&is_uv='+$53.data('is_uv')+'&browser='+acc_browser+'&os='+acc_os+'&is_revisit='+is_revisit;
  		$53.createScript("hz6d_send_acc", url);
        setTimeout("hz6d_sendACC()",20000);
}

hz6d_sendACC();

var head=document.getElementsByTagName("head")[0];var script=document.createElement("script");script.src="http://www15.53kf.com/kf_new.php?arg=10124917&style=1";var done=false;script.onload=script.onreadystatechange=function(){if(!done&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){done=true;script.onload=script.onreadystatechange=null;head.removeChild(script);}};head.appendChild(script);
