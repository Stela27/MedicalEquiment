$(document).ready(function(e){
  calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Lunes");
  calendar.funcPer = function(ev){
    console.log(ev)
  };
  calendar.diasResal = [4,15,26]
  calendar.createCalendar();
});