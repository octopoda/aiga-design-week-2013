// MathML
// http://www.w3.org/Math/ 
// By Addy Osmani
// Based on work by Davide (@dpvc) and David (@davidcarlisle)
// in https://github.com/mathjax/MathJax/issues/182
Modernizr.addTest("mathml",function(){var e=!1;if(document.createElementNS){var t="http://www.w3.org/1998/Math/MathML",n=document.createElement("div");n.style.position="absolute";var r=n.appendChild(document.createElementNS(t,"math")).appendChild(document.createElementNS(t,"mfrac"));r.appendChild(document.createElementNS(t,"mi")).appendChild(document.createTextNode("xx"));r.appendChild(document.createElementNS(t,"mi")).appendChild(document.createTextNode("yy"));document.body.appendChild(n);e=n.offsetHeight>n.offsetWidth}return e});