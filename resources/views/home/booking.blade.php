<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Travel Booking Form</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('booking.store') }}" method="POST" class="card p-4 shadow">
            @csrf
            <!-- Destination -->
            <div class="mb-3">
                <label for="destination" class="form-label">Destination</label>
                <select id="destination" name="destination" class="form-select @error('destination') is-invalid @enderror" required>
                    <option value="" disabled selected>Select a destination</option>
                    <option value="Dubai">Dubai, United Arab Emirates</option>
                    <option value="Bali">Bali, Indonesia</option>
                    <option value="Lombok">Lombok, Indonesia</option>
                    <option value="Rome">Rome, Italy</option>
                    <option value="Malang">Malang, Indonesia</option>
                    <option value="Sentoso">Sentoso Island, Singapura</option>
                    <option value="Sentoso">Baia in Sancho, Brazil</option>
                    <option value="Sentoso">Red Beach, China</option>
                    <option value="Sentoso">Lucky Bay Beach, Australia</option>
                </select>
                @error('destination')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Travel Date -->
            <div class="mb-3">
                <label for="travel_date" class="form-label">Travel Date</label>
                <input type="date" id="travel_date" name="travel_date" class="form-control @error('travel_date') is-invalid @enderror" required>
                @error('travel_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Passengers -->
            <div class="mb-3">
                <label for="passengers" class="form-label">Number of Passengers</label>
                <input type="number" id="passengers" name="passengers" class="form-control @error('passengers') is-invalid @enderror" min="1" value="1" required>
                @error('passengers')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Notes -->
            <div class="mb-3">
                <label for="notes" class="form-label">Additional Notes</label>
                <textarea id="notes" name="notes" class="form-control @error('notes') is-invalid @enderror" rows="3" placeholder="Any special requests?"></textarea>
                @error('notes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
