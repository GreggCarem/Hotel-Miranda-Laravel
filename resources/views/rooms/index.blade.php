<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room List</title>
</head>
<body>
    <h1>Rooms</h1>
    <a href="{{ route('rooms.create') }}">Create New Room</a>
    <ul>
        @foreach ($rooms as $room)
            <li>
                Room #{{ $room->roomNumber }} - {{ $room->name }} - {{ $room->bedType }} - ${{ $room->rate }}
                <a href="{{ route('rooms.show', $room->id) }}">View</a> |
                <a href="{{ route('rooms.edit', $room->id) }}">Edit</a> |
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>