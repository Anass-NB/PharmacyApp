/**
 * Theme: Tailfox - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * Tooltip Popover Js
 */

tippy(".tippy-btn",{arrow:!0,animation:"fade"});function openPopover(e,t){let n=e.target;for(;"BUTTON"!==n.nodeName;)n=n.parentNode;Popper.createPopper(n,document.getElementById(t),{placement:"top"}),document.getElementById(t).classList.toggle("hidden")}