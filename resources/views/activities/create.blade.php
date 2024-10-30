<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity | New</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create New Activity</h1>
        
        <form action="/activities" method="POST">
            @csrf
            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Activity Name</label>
                <select id="type" name="type" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="" disabled selected>Select an activity</option>
                    <option value="surf">Surf</option>
                    <option value="windsurf">Windsurf</option>
                    <option value="kayak">Kayak</option>
                    <option value="atv">ATV</option>
                    <option value="hot air balloon">Hot Air Balloon</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="satisfaction" class="block text-sm font-medium text-gray-700">Rate (0-10)</label>
                <input type="number" id="satisfaction" name="satisfaction" min="0" max="10" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter rate (0-10)">
            </div>

            <div class="mb-4">
                <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                <textarea id="notes" name="notes" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter any notes about the activity"></textarea>
            </div>

            <div class="mb-4">
                <label for="datetime" class="block text-sm font-medium text-gray-700">Activity Date</label>
                <input type="date" id="datetime" name="datetime" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Create Activity
                </button>
            </div>
        </form>
    </div>

</body>
</html>
