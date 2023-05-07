/**
 * Theme: Tailfox - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * Highlight Js
 */

var entityMap={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#x2F;","`":"&#x60;","=":"&#x3D;"};function escapeHtml(t){return String(t).replace(/[&<>"'`=\/]/g,function(t){return entityMap[t]})}for(e of document.getElementsByClassName("escape"))e.innerHTML=escapeHtml(e.innerHTML).trim();