<?php
$title = "Wallet";
$favicon_url = "../../../../../Pinpark/public/assets/Images/Pinpark_logo.png";
require_once "../../../../../Pinpark/public/view/users/include/header.php";
?>
<div class="container">
    <h2>Parking Booking</h2>
    <form id="bookingForm">
        <label for="name">Name:</label>
        <input type="text" id="username" name="username" required>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="start_time">Start Time:</label>
        <input type="time" id="start_time" name="start_time" required>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>

        <label for="end_time">End Time:</label>
        <input type="time" id="end_time" name="end_time" required>

        <label for="vehicle_number">Vehicle Number:</label>
        <input type="text" id="vehicle_number" name="vehicle_number" required>

        <button type="submit">Book Now</button>
    </form>
</div>
<script>
    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const name = formData.get('name');
        const start_date = formData.get('start_date');
        const start_time = formData.get('start_time');
        const end_date = formData.get('end_date');
        const end_time = formData.get('end_time');
        const vehicle_number = formData.get('vehicle_number');

        alert(`Parking booked successfully for ${name}.
                Start Date: ${start_date}, Start Time: ${start_time}
                End Date: ${end_date}, End Time: ${end_time}
                Vehicle Number: ${vehicle_number}`);
    });
</script>

<?php
require_once "../../../../../Pinpark/public/view/users/include/footer.php";
?>