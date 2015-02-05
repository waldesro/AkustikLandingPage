
function parseURL(url) {
    var a =  document.createElement('a');
    a.href = url;
    return {
        source: url,
        protocol: a.protocol.replace(':',''),
        host: a.hostname,
        port: a.port,
        query: a.search,
        params: (function(){
            var ret = {},
                seg = a.search.replace(/^\?/,'').split('&'),
                len = seg.length, i = 0, s;
            for (;i<len;i++) {
                if (!seg[i]) { continue; }
                s = seg[i].split('=');
                ret[s[0]] = s[1];
            }
            return ret;
        })(),
        file: (a.pathname.match(/\/([^\/?#]+)$/i) || [,''])[1],
        hash: a.hash.replace('#',''),
        path: a.pathname.replace(/^([^\/])/,'/$1'),
        relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [,''])[1],
        segments: a.pathname.replace(/^\//,'').split('/')
    };
}

function showDialog(contenedor, mensaje) {
    if (mensaje !== null) {
        $(contenedor).html("<p>" + mensaje + "</p>");
    }
    $(contenedor).dialog("open");
}

function urlEncode(str){
    str=escape(str);
    str=str.replace(new RegExp('\\+','g'),'%2B');
    str=str.replace(new RegExp('\\/','g'),'_');
    return str.replace(new RegExp('%20','g'),'+');
}

function mostrar_contenido(contenedor, url) {
    if (url !== null) {
        var myURL = parseURL(url);
        var params = JSON.stringify(myURL.params);
        $.get(myURL.source, params,
            function(htmlData) {
                $(contenedor).html(htmlData);
            }
        );
        $(contenedor).show("drop", {direction: "center", times: 6, distance: 400, mode: "show"}, 200);
    }
}