<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Details</title>
</head>
<body>
    <h1>Activity Details</h1>
    <p>Type: {{ $activity->type }}</p>
    <p>User ID: {{ $activity->user_id }}</p>
    <p>Date & Time: {{ $activity->datetime }}</p>
    <p>Paid: {{ $activity->paid ? 'Yes' : 'No' }}</p>
    <p>Notes: {{ $activity->notes }}</p>
    <p>Satisfaction: {{ $activity->satisfaction }}</p>
    <a href="{{ route('activities.index') }}">Back to Activities</a>
</body>
</html>