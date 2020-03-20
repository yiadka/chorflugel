<script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,listYear'
      },
      displayEventTime: false, 
      googleCalendarApiKey: 'AIzaSyDP5c7HueKgpo1x8uYtjlQ-cFJheqttTM4',
      events: 'oc938g2r28nhfeqdrof3kld3e4@group.calendar.google.com',
      eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
    });
  });
</script>
