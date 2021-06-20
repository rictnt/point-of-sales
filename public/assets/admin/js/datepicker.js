$(function() {
  'use strict';

  if($('.date').length) {
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('.date').datepicker({
      format: "mm/dd/yyyy",
      todayHighlight: true,
      autoclose: true
    });
    $('.date').datepicker('setDate', today);
  }

   
});