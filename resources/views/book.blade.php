<section id="booking">
    <h2>Book Your Stay</h2>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="/book" method="POST" id="booking-form">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="phone" required>

        <label for="checkin">Check-In Date:</label>
        <input type="date" id="checkin" name="checkin" required>

        <label for="checkout">Check-Out Date:</label>
        <input type="date" id="checkout" name="checkout" required>

        <label for="nrooms">number of rooms:</label>
        <input type="number" id="nrooms" name="nrooms" required>

        <label for="room_type">Room Type:</label>
        <select id="room_type" name="room_type" required>
            <option value="deluxe">Deluxe Room</option>
            <option value="family">Family Suite</option>
            <option value="single">Single Room</option>
        </select>

        <button type="submit">submit</button>
    </form>
</section>