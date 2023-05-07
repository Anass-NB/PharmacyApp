/**
 * Theme: Tailfox - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * File: Editable Js
 */


var datatable=new DataTable("table",{plugins:{editable:{enabled:!0,contextMenu:!0,hiddenColumns:!0,menuItems:[{text:"<i class='ti ti-pencil'></i> Edit Cell",action:function(){this.editCell()}},{text:"<i class='ti ti-pencil'></i> Edit Row",action:function(){this.editRow()}},{separator:!0},{text:"<i class='ti ti-trash'></i> Remove",action:function(){confirm("Are you sure?")&&this.removeRow()}}]}}});

