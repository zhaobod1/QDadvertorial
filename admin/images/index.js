auto = null;
timer = null;
var focus = new Function();
focus.prototype = {
	init : function () {
		this.aTime = this.aTime || 10;
		this.sTime = this.sTime || 5000;
		this.oImg = document.getElementById('focus_m').getElementsByTagName("ul")[0];
		this.oImgLi = this.oImg.getElementsByTagName("li");
		this.oL = document.getElementById('focus_l');
		this.oR = document.getElementById('focus_r');
		this.createTextDom();
		this.target = 0;
		this.autoMove();
		this.oAction();
	},
	createTextDom : function () {
		var that = this;
		this.oText = document.createElement("div");
		this.oText.className = "focus_s";
		var ul = document.createElement('ul');
		var frag = document.createDocumentFragment();
		for (var i = 0; i < this.oImgLi.length; i++) {
			var li = document.createElement("li");
			li.innerHTML = '<b></b>';
			if (i == 0) {
				li.className = "active";
			};
			frag.appendChild(li);
		};
		ul.appendChild(frag);
		this.oText.appendChild(ul);
		this.o.insertBefore(this.oText, this.o.firstChild);
		this.oTextLi = this.oText.getElementsByTagName("li");
	},
	autoMove : function () {
		if(this.oTextLi.length < 2) return false;
		var that = this;
		auto = setInterval(function () {
				that.goNext()
			}, that.sTime);
	},
	goNext : function () {
		this.target = this.nowIndex();
		this.target == this.oTextLi.length - 1 ? this.target = 0 : this.target++;
		this.aStep = (this.target - this.nowIndex()) * this.step;
		this.removeClassName();
		this.oTextLi[this.target].className = "active";
		this.startMove();
	},
	goPrev : function () {
		this.target = this.nowIndex();
		this.target == 0 ? this.target = this.oTextLi.length - 1 : this.target--;
		this.aStep = (this.target - this.nowIndex()) * this.step;
		this.removeClassName();
		this.oTextLi[this.target].className = "active";
		this.startMove();
	},
	startMove : function () {
		var that = this;
		var t = 0;
		this.timer = '';
		function set() {
			if (t > 100) {
				clearInterval(that.timer);
			} else {
				for (var i = 0; i < that.oImgLi.length; i++) {
					that.oImgLi[i].style.display = 'none';
				};
				that.oImgLi[that.target].style.display = 'block';
				that.setOpacity(that.oImg, t);
				t += 5;
			};
		};
		timer = setInterval(set, that.aTime);
	},
	setOpacity : function (elem, level) {
		if (elem.filters) {
			elem.style.filter = 'alpha(opacity=' + level + ')';
			elem.style.zoom = 1;
		} else {
			elem.style.opacity = level / 100;
		};
	},
	nowIndex : function () {
		for (var i = 0; i < this.oTextLi.length; i++) {
			if (this.oTextLi[i].className == 'active') {
				return i;
				break;
			}
		};
	},
	oAction : function () {
		var that = this;
		for (var i = 0; i < this.oTextLi.length; i++) {
			this.oTextLi[i].index = i;
			this.oTextLi[i].onclick = function () {
				clearInterval(auto);
				clearInterval(timer);
				that.setOpacity(that.oImg, 100);
				that.target = this.index;
				that.removeClassName();
				this.className = 'active';
				that.startMove();
			}
		};
		mouseEnter(that.o, 'mouseleave', function (e) {
			clearInterval(auto);
			that.autoMove();
		});
		this.oL.onclick = function () {
			that.goPrev();
		};
		this.oR.onclick = function () {
			that.goNext();
		};
	},
	removeClassName : function () {
		for (var i = 0; i < this.oTextLi.length; i++) {
			this.oTextLi[i].className = ""
		};
	}
};
var focusRun = new focus();
focusRun.o = document.getElementById("focus");
function mouseEnter(ele, type, func) {
	if (window.document.all)
		ele.attachEvent('on' + type, func);
	else {
		if (type === 'mouseenter')
			ele.addEventListener('mouseover', this.withoutChildFunction(func), false);
		else if (type === 'mouseleave')
			ele.addEventListener('mouseout', this.withoutChildFunction(func), false);
		else
			ele.addEventListener(type, func, false);
	};
};
function withoutChildFunction(func) {
	return function (e) {
		var parent = e.relatedTarget;
		while (parent != this && parent) {
			try {
				parent = parent.parentNode;
			} catch (e) {
				break;
			}
		}
		if (parent != this)
			func(e);
	};
};
marqueeTime = null;
var marquee = function () {
	var box = document.getElementById('marquee_box');
	var o = document.getElementById('marquee').getElementsByTagName('ul')[0];
	var li = o.getElementsByTagName('li');
	var l = document.getElementById('marquee_l');
	var r = document.getElementById('marquee_r');
	var m = li.length - 1;
	var w = 945;
	var aTime = 20;
	var sTime = 3000;
	var mAuto;
	function goPrev() {
		clearInterval(marqueeTime);
		startMove(false);
	};
	function goNext() {
		clearInterval(marqueeTime);
		startMove(true);
	};
	function startMove(type) {
		if (type) {
			var tt = 0;
		} else {
			var tt = w;
			var t1 = document.createDocumentFragment();
			var liArray = [];
			for (var i = 6; i >= 0; i--) {
				var li = document.createElement('li');
				var liTmp = o.getElementsByTagName('li')[m - i];
				liArray.push(liTmp)
				li.innerHTML = liTmp.innerHTML
					t1.appendChild(li);
			};
			o.insertBefore(t1, o.firstChild);
			o.style.marginLeft = '-' + tt + 'px';
			for (var i = 0; i < liArray.length; i++) {
				o.removeChild(liArray[i]);
			};
		};
		function set() {
			if (type) {
				if (tt >= w) {
					clearInterval(marqueeTime);
					var t1 = document.createDocumentFragment();
					var liArray = [];
					for (var i = 0; i < 7; i++) {
						var li = document.createElement('li');
						var liTmp = o.getElementsByTagName('li')[i];
						liArray.push(liTmp)
						li.innerHTML = liTmp.innerHTML
							t1.appendChild(li);
					};
					o.appendChild(t1);
					for (var i = 0; i < liArray.length; i++) {
						o.removeChild(liArray[i]);
					};
					o.style.marginLeft = 0;
				} else {
					o.style.marginLeft = '-' + tt + 'px';
					tt += Math.ceil((w - tt) * 0.1);
				};
			} else {
				if (tt <= 0) {
					clearInterval(marqueeTime);
					o.style.marginLeft = 0;
				} else {
					o.style.marginLeft = '-' + tt + 'px';
					tt = Math.floor(0.9 * tt);
				};
			}
		};
		marqueeTime = setInterval(set, aTime);
	};
	if (li.length < 8) {
		l.style.display = r.style.display = 'none'
	} else {
		r.onclick = function () {
			goNext();
		};
		l.onclick = function () {
			goPrev();
		};
	};
	mAuto = setInterval(goNext, sTime);
	box.onmouseover = function () {
		clearInterval(mAuto);
	};
	box.onmouseout = function () {
		mAuto = setInterval(goNext, sTime);
	};
};
//登陆
function login() {
	var o = {
		'username' : document.getElementById('username'),
		'password' : document.getElementById('password'),
		'verify' : document.getElementById('verify'),
		'img' : document.getElementById('verify_img'),
		'remeber' : document.getElementById('remeber'),
		'error' : document.getElementById('error'),
		'label_u' : document.getElementById('label_username'),
		'label_p' : document.getElementById('label_password'),
		'label_v' : document.getElementById('label_verify'),
		'submit' : document.getElementById('submit'),
		'verify_box' : document.getElementById('verify_box'),
		'login_box' : document.getElementById('login_box'),
		'logined' : document.getElementById('logined'),
		'form' : document.getElementById("login_form")
	};
	var ajax = 0;
	o['username'].focus();
	//判断是否已经登陆
	if (logined) {
		o ['logined'].style.display = 'block';
		o ['login_box'].style.display = 'none';
	};
	//placeholder
	var input = [
		o['username'], o['password'], o['verify']
	];
	var label = [
		o['label_u'], o['label_p'], o['label_v']
	];
	if (o['username'] && ((mobi.getSys().ie && (mobi.getSys().ie == '6.0' || mobi.getSys().ie == '7.0' || mobi.getSys().ie == '8.0' || mobi.getSys().ie == '9.0')) || !('placeholder' in o['username']))) {
		for (var i = 0; i < input.length; i++) {
			if (input[i].value == '') {
				label[i].style.display = 'block';
			};
			input[i].index = i;
			input[i].onfocus = function () {
				if (this.value == '') {
					label[this.index].style.display = 'none';
				};
				if (mobi.getSys().ie && (mobi.getSys().ie == '6.0' || mobi.getSys().ie == '7.0')) {
					this.className = 'i_0 focus';
				};
			};
			input[i].onblur = function () {
				if (this.value == '') {
					label[this.index].style.display = 'block';
				};
				if (mobi.getSys().ie && (mobi.getSys().ie == '6.0' || mobi.getSys().ie == '7.0')) {
					this.className = 'i_0';
				};

			};
		};
	};
	//错误
	function showError(msg, obj) {
		o['error'].innerHTML = msg;
		if (obj) {
			setTimeout(function () {
				obj.focus();
			}, 0);
		};
	};
	if (errnum > 2) {
		o['verify_box'].style.visibility = 'visible';
	};
	//验证图
	function changepic() {
		o['img'].src = ('/?a=module&m=common&f=captcha&t=' + Date.parse(new Date()) / 1000);
		setTimeout(function () {
			o['verify'].focus();
		}, 0);
	};
	o['img'].onclick = changepic;
	//提交
	o['form'].onsubmit = function(){
		index_login();
		return false;
	}
	o['submit'].onclick = index_login;
	function index_login() {
		if (o['username'].value == '') {
			showError(mobi.lang[lang]['login'][1], o['username']);
			return false;
		};
		if (o['password'].value == '') {
			showError(mobi.lang[lang]['login'][2], o['password']);
			return false;
		};
		if (errnum > 2 && 　o['verify'].value == '') {
			showError(mobi.lang[lang]['login'][4], o['verify']);
			return false;
		};
		var remeber;
		o['remeber'].checked ? remeber = 1 : remeber = 0;
		if (!ajax) {
			mobi.Ajax({
				'url' : '/?a=module&m=user&f=login&err=1', //url
				'callback' : function (res) { //callback
					if (res.Status != 1) {
						//返回错误
						if (typeof res.errnum != 'undefined') {
							errnum = res.errnum;
							if (res.errnum > 2) {
								//密码错误 超过3次显示验证码
								o['verify_box'].style.visibility = 'visible';
							};
						};

						showError(res.Message);
						ajax = 0;
						changepic();
						return false;
					};

					//登陆成功
					if (typeof res.Redirect != 'undefined') {
						location.href = res.Redirect;
					};
				},
				'data' : 'username=' + o['username'].value + '&password=' + o['password'].value + '&captcha=' + o['verify'].value + '&auto_login=' + remeber + '&lang=' + lang, //post data
				'before' : function () { //before send
					ajax = 1;
					showError('');
				},
				'type' : 'POST' //data type
			});
		} else {
			showError(mobi.lang[lang]['common']['6']);
		};
	};
};
window.onload = function () {
	//focusRun.init();
	marquee();
	if (!logined) {
		login();
	}
};
