$(document).ready(function () {
  eventTitle = $('.coursetitle').html();
  $('.form-event-title > input').attr('value', $.trim(eventTitle));

  eventPid = $('.course').data("id");
  $('.form-event-pid').attr('value', eventPid);
});
