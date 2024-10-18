
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities List</title>
</head>
<body>
    <h1>Activities</h1>
    <a href="{{ route('activities.create') }}">Create New Activity</a>
    <ul>
        @foreach ($activities as $activity)
            <li>
                {{ $activity->type }} - {{ $activity->datetime }} 
                <a href="{{ route('activities.show', $activity->id) }}">View</a> |
                <a href="{{ route('activities.edit', $activity->id) }}">Edit</a> |
                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>