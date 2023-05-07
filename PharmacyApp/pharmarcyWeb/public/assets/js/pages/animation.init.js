/**
 * Theme: Tailfox - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * Animation Js
 */

function myFunction(){let t=document.querySelector("#animate-me"),e=document.querySelectorAll("[data-test]");e.forEach(e=>{e.addEventListener("click",e=>{let a=e.target,c=a.dataset.test;t.classList.add("magictime",c)}),e.addEventListener("click",e=>{setTimeout(function(){let a=e.target,c=a.dataset.test;t.classList.remove("magictime",c)},1e3)})})}myFunction();
