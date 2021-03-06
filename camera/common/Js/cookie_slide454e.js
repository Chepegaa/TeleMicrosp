﻿// COOKIE POPUP //

var expDays = 30; // number of days the cookie should last

var page = "http://itdevtestus/Htmls/htmlContents.aspx?br=f21&amp;url=/Popup/en-US/freeshippop.html";
var windowprops = "width=300,height=200,location=no,toolbar=no,menubar=no,scrollbars=no,resizable=yes";

function GetCookie(name) {
    var arg = name + "=";
    var alen = arg.length;
    var clen = document.cookie.length;
    var i = 0;
    while (i < clen) {
        var j = i + alen;
        if (document.cookie.substring(i, j) == arg)
            return getCookieVal(j);
        i = document.cookie.indexOf(" ", i) + 1;
        if (i == 0) break;
    }
    return null;
}

function SetCookie(name, value) {
    var argv = SetCookie.arguments;
    var argc = SetCookie.arguments.length;
    var expires = (argc > 2) ? argv[2] : null;
    var path = "index.html";
    var domain = (argc > 4) ? argv[4] : null;
    var secure = (argc > 5) ? argv[5] : false;
    document.cookie = name + "=" + escape(value) +
        ((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
        ((path == null) ? "" : ("; path=" + path)) +
        ((domain == null) ? "" : ("; domain=" + domain)) +
        ((secure == true) ? "; secure" : "");
}

function DeleteCookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = GetCookie(name);
    document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}

var exp = new Date();
exp.setTime(exp.getTime() + (expDays * 24 * 60 * 60 * 1000));

function amt() {
    var count = GetCookie('count')
    if (count == null) {
        SetCookie('count', '1')
        return 1
    } else {
        var newcount = parseInt(count) + 1;
        DeleteCookie('count')
        SetCookie('count', newcount, exp)
        return count
    }
}

function getCookieVal(offset) {
    var endstr = document.cookie.indexOf(";", offset);
    if (endstr == -1)
        endstr = document.cookie.length;
    return unescape(document.cookie.substring(offset, endstr));
}

function checkCount() {
    var count = GetCookie('welcome_count');
	
    if (count == null) {
        count = 1;
        SetCookie('welcome_count', count, exp);
        ShowSlide();
    } else {				
        count++;
        SetCookie('welcome_count', count, exp);
    }
}

function checkMarketingCount() {	
    var count = GetCookie('market_count');
    if (count == null) {
        count = 1;
        SetCookie('market_count', count, exp);
        ShowMarketingSlide();
    } else {
        count++;
        SetCookie('market_count', count, exp);
        ShowMarketingSlide();
    }
}

//window.onload = checkCount;
//window.onload = checkMarketingCount;

