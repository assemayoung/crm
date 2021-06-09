$(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());


});

$("#timePicker").flatpickr({
    enableTime: true,
    noCalendar: true,
    time_24hr: true,
    dateFormat: "H:i",
    minTime: "10:00",
    maxTime: "21:30",
    defaultDate: "13:45"
});
  $(".fancybox").fancybox({
    })