<div wire:ignore>
    <div id="calendar"></div>
</div>

@script
<script type="text/javascript" >
document.addEventListener('livewire.initialized', () => {

    var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
});
</script>
@endscript
