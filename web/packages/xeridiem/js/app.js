!function(){FastClick.attach(document.body),window.requestAnimFrame=Modernizr.prefixed("requestAnimationFrame",window)||function(e){window.setTimeout(e,1e3/60)};var e=-1!==document.documentElement.className.indexOf("cms-admin"),n=document.querySelectorAll(".parallax");!e&&n.length&&!function t(e){if(e!==window.pageYOffset){e=window.pageYOffset;var i=100*(window.pageYOffset/(document.body.clientHeight-window.innerHeight));i=i>100?100:i;for(var o=0;o<n.length;o++)n[o].style.backgroundPosition="50% "+i+"%"}window.requestAnimFrame(t.bind(null,e))}(window.pageYOffset),$("button",".content-tabs").on("click",function(){var e=$(this).parent("li"),n=e.index();$(".node",".content-tab-nodes").hide().filter(":eq("+n+")").show()}),$(".nav-trigger","header").on("click",function(){$("nav").toggleClass("active")}),function i(){var e=document.querySelector("#google_translate_element"),n=e.querySelector(".goog-te-menu-value span:first-child");n?setTimeout(function(){n.innerText&&-1!==n.innerText.indexOf("Select")&&(n.innerText="English"),n.textContent&&-1!==n.textContent.indexOf("Select")&&(n.textContent="English"),e.style.display="block"},250):setTimeout(i,250)}()}();