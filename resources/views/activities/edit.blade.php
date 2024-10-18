<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
</head>
<body>
    <h1>Edit Activity</h1>
    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
            <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
            <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
            <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
            <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
        </select>
        <br>

        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" id="user_id" value="{{ $activity->user_id }}" required>
        <br>

        <label for="datetime">Date & Time:</label>
        <input type="datetime-local" name="datetime" id="datetime" value="{{ $activity->datetime->format('Y-m-d\TH:i') }}" required>
        <br>

        <label for="paid">Paid:</label>
        <input type="checkbox" name="paid" id="paid" {{ $activity->paid ? 'checked' : '' }}>
        <br>

        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes">{{ $activity->notes }}</textarea>
        <br>

        <label for="satisfaction">Satisfaction (0-10):</label>
        <input type="number" name="satisfaction" id="satisfaction" value="{{ $activity->satisfaction }}" min="0" max="10">
        <br>

        <button type="submit">Update Activity</button>
    </form>
    <a href="{{ route('activities.index') }}">Back to Activities</a>
</body>
</html>