/**
 * Theme: Tailfox - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * File: Upload Js
 */
const handleChange=function(){let e=document.querySelector("#input-file"),t=e.files;if(0!==t.length){let n=t[0];readFile(n)}},readFile=function(e){if(e){let t=new FileReader;t.onload=function(){let e=document.querySelector(".preview-box");e.innerHTML=`<img class="preview-content" src=${t.result} />`},t.readAsDataURL(e)}};var uppy=new Uppy.Uppy().use(Uppy.Dashboard,{inline:!0,target:"#drag-drop-area"}).use(Uppy.Tus,{endpoint:"https://tusd.tusdemo.net/files/"});uppy.on("complete",e=>{});

      