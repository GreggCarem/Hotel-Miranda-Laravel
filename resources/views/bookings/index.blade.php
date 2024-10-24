<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings List</title>
</head>
<body>
    <h1>Bookings</h1>

    <a href="{{ route('bookings.create') }}">Create New Booking</a>

    <ul>
        @foreach ($bookings as $booking)
            <li>
                Booking #{{ $booking->id }} - 
                Room: {{ $booking->room ? $booking->room->name : 'No Room Assigned' }} - 
                User: {{ $booking->user ? $booking->user->name : 'No User Assigned' }} - 
                Start: {{ $booking->startDate }} - End: {{ $booking->endDate }} -
                Amount: ${{ $booking->totalAmount }} - Status: {{ $booking->status }}

                <a href="{{ route('bookings.show', $booking->id) }}">View</a> |
                <a href="{{ route('bookings.edit', $booking->id) }}">Edit</a> |
                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>