<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawarna Beach Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#fasilitas">Fasilitas</a></li>
                <li><a href="#booking">Booking</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h1>Welcome to Sawarna Beach Hotel</h1>
        <p>Your perfect beach getaway awaits.</p>
    </section>

    <section id="rooms">
        <h2>Our Rooms</h2>
        <div class="rooms-container">
            <div class="room">
                <img src="{{ asset('images/delux.jpeg') }}" alt="Room 1" class="room-img">
                <div class="room-info">
                    <h3>Deluxe Room</h3>
                    <p>Enjoy a luxurious stay with stunning sea views.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/family.jpeg') }}" alt="Room 2" class="room-img">
                <div class="room-info">
                    <h3>Family Suite</h3>
                    <p>Spacious suite perfect for families.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/singgel.jpeg') }}" alt="Room 3" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div>
            {{-- <div class="room">
                <img src="{{ asset('images/room3.jpg') }}" alt="Room 4" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/room3.jpg') }}" alt="Room 5" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/room3.jpg') }}" alt="Room 6" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/room3.jpg') }}" alt="Room 7" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/room3.jpg') }}" alt="Room 8" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div> --}}
        </div>
    </section>

    <section id="fasilitas">
        <h2>Our Fasilitas</h2>
        <div class="rooms-container">
            <div class="room">
                <img src="{{ asset('images/hoot.jpeg') }}" alt="fasilitas 1" class="room-img">
                <div class="room-info">
                    <h3>warm water pool</h3>
                    <p>A warm water pool is available in each room.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/fasilitas2.jpeg') }}" alt="fasilitas 2" class="room-img">
                <div class="room-info">
                    <h3>Pool</h3>
                    <p>large pool and straight to the beach.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/fasilitas5.jpeg') }}" alt="fasilitas 3" class="room-img">
                <div class="room-info">
                    <h3>coffee shop</h3>
                    <p>Csuitable for relaxing while chatting with your colleagues.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/fasilitas4.jpeg') }}" alt="fasilitas 4" class="room-img">
                <div class="room-info">
                    <h3>relaxing place and sunset area</h3>
                    <p>suitable for enjoying the beach atmosphere and sunset with your friends.</p>
                </div>
            </div>
            {{-- <div class="room">
                <img src="{{ asset('images/fasilitas5.jpeg') }}" alt="fasilitas 5" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div> --}}
            {{-- <div class="room">
                <img src="{{ asset('images/fasilitas5.jpg') }}" alt="fasilitas 6" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/room3.jpg') }}" alt="fasilitas 7" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div>
            <div class="room">
                <img src="{{ asset('images/room3.jpg') }}" alt="fasilitas 8" class="room-img">
                <div class="room-info">
                    <h3>Single Room</h3>
                    <p>Cozy and comfortable for solo travelers.</p>
                </div>
            </div> --}}
        </div>
    </section>

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

            <button type="submit">Book Now</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Beach Hotel</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>