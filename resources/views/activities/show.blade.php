<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
        @if(!empty($activities))
            @if ($activities[0] != null)
                <h1 class="text-4xl font-bold text-gray-800 mb-6">Activities List</h1>
                @foreach($activities as $activitie)
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-700">{{$activitie->type}}</h2>
                                <p class="text-gray-500">{{$activitie->notes}}</p>
                            </div>
                            <div class="text-right">
                                <span class="text-sm text-gray-400">Rate: {{$activitie->satisfaction}}/10</span>
                                @if($activitie->paid == 0)
                                    <p class="text-xs text-red-600 font-semibold mt-1">Unpaid</p>
                                @else
                                    <p class="text-xs text-green-600 font-semibold mt-1">Paid</p>
                                @endif
                                <p class="text-sm text-gray-500 mt-1">Date: {{$activitie->datetime}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="text-4xl font-bold text-gray-800 mb-6">Activitie:</h1>
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-700">{{$activities->type}}</h2>
                            <p class="text-gray-500">{{$activities->notes}}</p>
                        </div>
                        <div class="text-right">
                            <span class="text-sm text-gray-400">Rate: {{$activities->satisfaction}}/10</span>
                            @if($activities->paid == 0)
                                <p class="text-xs text-red-600 font-semibold mt-1">Unpaid</p>
                            @else
                                <p class="text-xs text-green-600 font-semibold mt-1">Paid</p>
                            @endif
                            <p class="text-sm text-gray-500 mt-1">Date: {{$activities->datetime}}</p>
                        </div>
                    </div>
                </div>
            @endif
        @else
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Dont have Activities</h1>
        @endif
        </div>
    </div>

</body>
</html>
