// by jussi-kalliokoski
// This test is asynchronous. Watch out.
// The test will potentially add garbage to console.
(function(){try{var e="Modernizr",t=new Worker("data:text/javascript;base64,dGhpcy5vbm1lc3NhZ2U9ZnVuY3Rpb24oZSl7cG9zdE1lc3NhZ2UoZS5kYXRhKX0=");t.onmessage=function(n){t.terminate();Modernizr.addTest("dataworkers",e===n.data);t=null};t.onerror=function(){Modernizr.addTest("dataworkers",!1);t=null};setTimeout(function(){Modernizr.addTest("dataworkers",!1)},200);t.postMessage(e)}catch(n){Modernizr.addTest("dataworkers",!1)}})();