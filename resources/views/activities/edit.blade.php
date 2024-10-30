<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitie | Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Activity</h1>
        @if(!empty($activity))
            <form action="{{ route('activities.update', $activity->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="type" class="block text-sm font-medium text-gray-700">Activity Type</label>
                    <select id="type" name="type" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
                        <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                        <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
                        <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
                        <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="datetime" class="block text-sm font-medium text-gray-700">Activity Date & Time</label>
                    <input type="datetime-local" id="datetime" name="datetime" value="{{ \Carbon\Carbon::parse($activity->datetime)->format('Y-m-d\TH:i') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                
                <div class="mb-4">
                    <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                    <textarea id="notes" name="notes" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>{{ $activity->notes }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="satisfaction" class="block text-sm font-medium text-gray-700">Satisfaction (0-10)</label>
                    <input type="number" id="satisfaction" name="satisfaction" value="{{ $activity->satisfaction }}" min="0" max="10" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Update Activity
                    </button>
                </div>
            </form>
        @else
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Activity not available</h2>
        @endif
    </div>
</body>
</html>