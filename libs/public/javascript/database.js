function zdc_getElements(a,b,c){var d=[],e,f=a.getElementsByClassName,g=new RegExp("\\b"+c+"\\b","i");a||(a=document);b||(b="*");a=f?a.getElementsByClassName(c):a.getElementsByTagName(b);for(e=a.length;e--;)(f&&"*"!=b&&a[e].nodeName.toLowerCase()==b||"*"==b||!f&&-1<a[e].className.indexOf(c)&&g.test(a[e].className))&&d.push(a[e]);return d.length?d:!1}function zdc_setDisplay(a,b){for(index in a)index.match(/^[0-9]+$/)&&(a[index].style.display=b)} function zdc_closeAll(a){if(!(-1<a.indexOf("zdc-records")||-1<a.indexOf("zdc-explain")||-1<a.indexOf("zdc-backtrace"))){var b=["zdc-errors","zdc-successful-queries","zdc-unsuccessful-queries","zdc-warnings"];for(index in b){var c=b[index];if(c!=a&&(c=document.getElementById(c),null!==c)){var d=zdc_getElements(c,"table","zdc-entry");zdc_setDisplay(d,"none");c.style.display="none"}}b="post get session cookie files server".split(" ");if(null===a.match(/^zdc\-globals/))for(index in document.getElementById("zdc-globals-submenu").style.display= "none",document.getElementById("zdc-globals").style.display="none",b)c="zdc-globals-"+b[index],null!==document.getElementById(c)&&(document.getElementById(c).style.display="none");else for(index in b)c="zdc-globals-"+b[index],c!=a&&null!==document.getElementById(c)&&(document.getElementById(c).style.display="none")}} function zdc_toggle(a){zdc_closeAll(a);if("console"==a){var b=document.getElementById("zdc");b.style.display="block"!=b.style.display?"block":"none"}else switch(a){case "zdc-errors":case "zdc-successful-queries":case "zdc-unsuccessful-queries":case "zdc-warnings":b=document.getElementById(a);if(null!=b){a=zdc_getElements(b,"table","zdc-entry");var c="block"!=b.style.display?"block":"none";zdc_setDisplay(a,c);b.style.display=c}break;case "zdc-globals-submenu":b=document.getElementById(a);a=document.getElementById("zdc-globals"); b.style.display="block"!=b.style.display?"block":"none";a.style.display="block"!=a.style.display?"block":"none";break;case "zdc-globals-post":case "zdc-globals-get":case "zdc-globals-session":case "zdc-globals-cookie":case "zdc-globals-files":case "zdc-globals-server":b=document.getElementById(a);b.style.display="block"!=b.style.display?"block":"none";break;default:b=document.getElementById(a);a=a.match(/\-([a-z]+)([0-9]+)$/);if(null!==a){var c=document.getElementById("zdc-records-"+a[1]+a[2]),d= document.getElementById("zdc-explain-"+a[1]+a[2]);elem3=document.getElementById("zdc-backtrace-"+a[1]+a[2]);null!==c&&c!=b&&(c.style.display="none");null!==d&&d!=b&&(d.style.display="none");null!==elem3&&elem3!=b&&(elem3.style.display="none")}null!==b&&(b.style.display="block"!=b.style.display?"block":"none")}}startStack=function(){};registerOnLoad=function(a){var b=startStack;startStack=function(){b();a()}};var ranOnload=!1; document.addEventListener?document.addEventListener("DOMContentLoaded",function(){ranOnload||(ranOnload=!0,startStack())},!1):document.all&&!window.opera&&(document.write("<script id='DOMReady' defer=true src=//:>\x3c/script>"),document.getElementById("DOMReady").onreadystatechange=function(){"complete"!=this.readyState||ranOnload||(ranOnload=!0,startStack())});var orgOnLoad=window.onload;window.onload=function(){"function"==typeof orgOnLoad&&orgOnLoad();ranOnload||(ranOnload=!0,startStack())}; registerOnLoad(function(){var a=document.getElementById("zdc-errors"),b=document.getElementById("zdc-unsuccessful-queries");if(null!==a){var c=zdc_getElements(a,"table","zdc-entry");zdc_setDisplay(c,"block");a.style.display="block"}else null!==b?(c=zdc_getElements(b,"table","zdc-entry"),zdc_setDisplay(c,"block"),b.style.display="block"):(a=document.getElementById("zdc-successful-queries"),a=zdc_getElements(a,"table","zdc-highlight"),zdc_setDisplay(a,"block"))});