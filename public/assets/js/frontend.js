document.addEventListener("DOMContentLoaded", function() {
    var datePickerInput = document.getElementById("datepicker");
    var calendarDiv = document.getElementById("calendar");

    datePickerInput.addEventListener("click", function() {
        calendarDiv.classList.toggle("visible");
    });

    // Populate the calendar with dates
    function populateCalendar() {
        var currentDate = new Date();
        var daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
        var html = '';
        for (var i = 1; i <= daysInMonth; i++) {
            html += '<div>' + i + '</div>';
        }
        calendarDiv.innerHTML = html;
    }

    // Initial population
    populateCalendar();

    // Update calendar when clicked outside the date picker
    document.addEventListener("click", function(event) {
        var targetElement = event.target;
        do {
            if (targetElement == datePickerInput || targetElement == calendarDiv) {
                return;
            }
            targetElement = targetElement.parentNode;
        } while (targetElement);
        calendarDiv.classList.remove("visible");
    });
});