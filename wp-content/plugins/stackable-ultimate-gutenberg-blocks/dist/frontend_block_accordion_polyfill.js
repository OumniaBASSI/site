var frontend_block_accordion_polyfill;!function(e,t){if("open"in t.createElement("details"))return;const n=t.addEventListener?function(t,l,i){if(t&&t.nodeName||t===e)t.addEventListener(l,i,!1);else if(t&&t.length)for(let e=0;e<t.length;e++)n(t[e],l,i)}:function(t,l,i){if(t&&t.nodeName||t===e)t.attachEvent("on"+l,(function(){return i.call(t,e.event)}));else if(t&&t.length)for(let e=0;e<t.length;e++)n(t[e],l,i)};function l(e){if("#text"!==e.firstChild.nodeName)return e.firstChild;e=e.firstChild;do{e=e.nextSibling}while(e&&"#text"===e.nodeName);return e||null}function i(e){const t=e.nodeName.toUpperCase();return"DETAILS"!==t&&("SUMMARY"===t||i(e.parentNode))}function o(e){let n="keypress"===e.type;const l=e.target||e.srcElement;if(n||i(l)){if(n&&(n=e.which||e.keyCode,32!==n&&13!==n))return;if(null===this.getAttribute("open")?this.setAttribute("open","open"):this.removeAttribute("open"),setTimeout((function(){t.body.className=t.body.className}),13),n)return e.preventDefault&&e.preventDefault(),!1}}const d=t.querySelectorAll(".stk-block-accordion"),r=t.createElement("div");r.className="stk-block-accordion stk-block-accordion__heading";let s,a,c=null,f=d.length;for(r.appendChild(t.createTextNode("Details"));f--;){for(c=l(d[f]),null!==c&&"SUMMARY"===c.nodeName.toUpperCase()||(c=t.createElement("summary"),c.appendChild(t.createTextNode("Details")),d[f].firstChild?d[f].insertBefore(c,d[f].firstChild):d[f].appendChild(c)),s=d[f].childNodes.length;s--;)"#text"===d[f].childNodes[s].nodeName&&(d[f].childNodes[s].nodeValue||"").replace(/\s/g,"").length&&(a=t.createElement("text"),a.appendChild(d[f].childNodes[s]),d[f].insertBefore(a,d[f].childNodes[s]));c.legend=!0,c.tabIndex=0}t.createElement("details"),n(d,"click",o),n(d,"keypress",o),function(){const e=t.createElement("style"),n=t.getElementsByTagName("head")[0];e.innerText;const l=void 0===e.innerText?"textContent":"innerText",i=["details{display: block;}","details > *{display: none;}","details.open > *{display: block;}","details[open] > *{display: block;}","details > summary:first-child{display: block;cursor: pointer;}","details[open]{display: block;}"];f=i.length,e[l]=i.join(""),n.insertBefore(e,n.firstChild)}()}(window,document),frontend_block_accordion_polyfill={};