<!DOCTYPE html>
<html>
<head>
    <title>Hotel Room Reservation</title>
</head>
<body>
    <h1>Hotel Room Reservation</h1>
    <form method="POST" action="{{ route('submitForm') }}">
        @csrf
        <label for="room_type">Room Type:</label>
        <select name="room_type" id="room_type">
            <option value="Single">Single</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Family">Family</option>
        </select><br>

        <label for="total_days">Total Number of Days:</label>
        <input type="number" name="total_days" id="total_days" required><br>

        <label for="total_rooms">Number of Rooms:</label>
        <input type="number" name="total_rooms" id="total_rooms" required><br>

        <input type="submit" value="Submit">
    </form>

    @if(isset($roomType))
    <h2>Reservation Summary</h2>
    <p><strong>Room Type:</strong> {{ $roomType }}</p>
    <p><strong>Room Rate Per Day:</strong> ${{ $roomRatePerDay }}</p>
    <p><strong>Total Days:</strong> {{ $totalDays }}</p>
    <p><strong>Total Rooms:</strong> {{ $totalRooms }}</p>
    <p><strong>Total Amount:</strong> ${{ $totalAmount }}</p>
    <p><strong>Discount:</strong> ${{ $discount }}</p>
    <p><strong>Total Amount Due:</strong> ${{ $totalAmountDue }}</p>
    @endif
</body>
</html>
