<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Activity</title>
</head>
<body>
    <h1>Create Activity</h1>
    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="surf">Surf</option>
            <option value="windsurf">Windsurf</option>
            <option value="kayak">Kayak</option>
            <option value="atv">ATV</option>
            <option value="hot air balloon">Hot Air Balloon</option>
        </select>
        <br>

        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" id="user_id" required>
        <br>

        <label for="datetime">Date & Time:</label>
        <input type="datetime-local" name="datetime" id="datetime" required>
        <br>

        <label for="paid">Paid:</label>
        <input type="checkbox" name="paid" id="paid">
        <br>

        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes"></textarea>
        <br>

        <label for="satisfaction">Satisfaction (0-10):</label>
        <input type="number" name="satisfaction" id="satisfaction" min="0" max="10">
        <br>

        <button type="submit">Create Activity</button>
    </form>
    <a href="{{ route('activities.index') }}">Back to Activities</a>
</body>
</html>