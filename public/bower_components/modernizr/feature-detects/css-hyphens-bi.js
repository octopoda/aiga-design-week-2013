/* see http://davidnewton.ca/the-current-state-of-hyphenation-on-the-web
   http://davidnewton.ca/demos/hyphenation/test.html


There are three tests:
   1. csshyphens      - tests hyphens:auto actually adds hyphens to text
   2. softhyphens     - tests that &shy; does its job
   3. softhyphensfind - tests that in-browser Find functionality still works correctly with &shy;

These tests currently require document.body to be present

Hyphenation is language specific, sometimes.
  See for more details: http://code.google.com/p/hyphenator/source/diff?spec=svn975&r=975&format=side&path=/trunk/Hyphenator.js#sc_svn975_313

If loading Hyphenator.js via Modernizr.load, be cautious of issue 158: http://code.google.com/p/hyphenator/issues/detail?id=158

More details at https://github.com/Modernizr/Modernizr/issues/312

*/(function(){function e(){try{var e=document.createElement("div"),t=document.createElement("span"),n=e.style,r=0,i=0,s=!1,o=document.body.firstElementChild||document.body.firstChild;e.appendChild(t);t.innerHTML="Bacon ipsum dolor sit amet jerky velit in culpa hamburger et. Laborum dolor proident, enim dolore duis commodo et strip steak. Salami anim et, veniam consectetur dolore qui tenderloin jowl velit sirloin. Et ad culpa, fatback cillum jowl ball tip ham hock nulla short ribs pariatur aute. Pig pancetta ham bresaola, ut boudin nostrud commodo flank esse cow tongue culpa. Pork belly bresaola enim pig, ea consectetur nisi. Fugiat officia turkey, ea cow jowl pariatur ullamco proident do laborum velit sausage. Magna biltong sint tri-tip commodo sed bacon, esse proident aliquip. Ullamco ham sint fugiat, velit in enim sed mollit nulla cow ut adipisicing nostrud consectetur. Proident dolore beef ribs, laborum nostrud meatball ea laboris rump cupidatat labore culpa. Shankle minim beef, velit sint cupidatat fugiat tenderloin pig et ball tip. Ut cow fatback salami, bacon ball tip et in shank strip steak bresaola. In ut pork belly sed mollit tri-tip magna culpa veniam, short ribs qui in andouille ham consequat. Dolore bacon t-bone, velit short ribs enim strip steak nulla. Voluptate labore ut, biltong swine irure jerky. Cupidatat excepteur aliquip salami dolore. Ball tip strip steak in pork dolor. Ad in esse biltong. Dolore tenderloin exercitation ad pork loin t-bone, dolore in chicken ball tip qui pig. Ut culpa tongue, sint ribeye dolore ex shank voluptate hamburger. Jowl et tempor, boudin pork chop labore ham hock drumstick consectetur tri-tip elit swine meatball chicken ground round. Proident shankle mollit dolore. Shoulder ut duis t-bone quis reprehenderit. Meatloaf dolore minim strip steak, laboris ea aute bacon beef ribs elit shank in veniam drumstick qui. Ex laboris meatball cow tongue pork belly. Ea ball tip reprehenderit pig, sed fatback boudin dolore flank aliquip laboris eu quis. Beef ribs duis beef, cow corned beef adipisicing commodo nisi deserunt exercitation. Cillum dolor t-bone spare ribs, ham hock est sirloin. Brisket irure meatloaf in, boudin pork belly sirloin ball tip. Sirloin sint irure nisi nostrud aliqua. Nostrud nulla aute, enim officia culpa ham hock. Aliqua reprehenderit dolore sunt nostrud sausage, ea boudin pork loin ut t-bone ham tempor. Tri-tip et pancetta drumstick laborum. Ham hock magna do nostrud in proident. Ex ground round fatback, venison non ribeye in.";document.body.insertBefore(e,o);n.cssText="position:absolute;top:0;left:0;width:5em;text-align:justify;text-justification:newspaper;";r=t.offsetHeight;i=t.offsetWidth;n.cssText="position:absolute;top:0;left:0;width:5em;text-align:justify;text-justification:newspaper;"+Modernizr._prefixes.join("hyphens:auto; ");s=t.offsetHeight!=r||t.offsetWidth!=i;document.body.removeChild(e);e.removeChild(t);return s}catch(u){return!1}}function t(e,t){try{var n=document.createElement("div"),r=document.createElement("span"),i=n.style,s=0,o=!1,u=!1,a=!1,f=document.body.firstElementChild||document.body.firstChild;i.cssText="position:absolute;top:0;left:0;overflow:visible;width:1.25em;";n.appendChild(r);document.body.insertBefore(n,f);r.innerHTML="mm";s=r.offsetHeight;r.innerHTML="m"+e+"m";u=r.offsetHeight>s;if(t){r.innerHTML="m<br />m";s=r.offsetWidth;r.innerHTML="m"+e+"m";a=r.offsetWidth>s}else a=!0;u===!0&&a===!0&&(o=!0);document.body.removeChild(n);n.removeChild(r);return o}catch(l){return!1}}function n(e){try{var t=document.createElement("input"),n=document.createElement("div"),r="lebowski",i=!1,s,o=document.body.firstElementChild||document.body.firstChild;n.innerHTML=r+e+r;document.body.insertBefore(n,o);document.body.insertBefore(t,n);if(t.setSelectionRange){t.focus();t.setSelectionRange(0,0)}else if(t.createTextRange){s=t.createTextRange();s.collapse(!0);s.moveEnd("character",0);s.moveStart("character",0);s.select()}if(window.find)i=window.find(r+r);else try{s=window.self.document.body.createTextRange();i=s.findText(r+r)}catch(u){i=!1}document.body.removeChild(n);document.body.removeChild(t);return i}catch(u){return!1}}if(!document.body){window.console&&console.warn("document.body doesn't exist. Modernizr hyphens test needs it.");return}Modernizr.addTest("csshyphens",function(){if(!Modernizr.testAllProps("hyphens"))return!1;try{return e()}catch(t){return!1}});Modernizr.addTest("softhyphens",function(){try{return t("&#173;",!0)&&t("&#8203;",!1)}catch(e){return!1}});Modernizr.addTest("softhyphensfind",function(){try{return n("&#173;")&&n("&#8203;")}catch(e){return!1}})})();