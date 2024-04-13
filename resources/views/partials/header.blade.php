<head> 
    <link href="{{ URL::asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<header class="bg-blue-500 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-xl font-semibold">Books Generator</h1>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="{{ route('clear-data') }}" class="text-white hover:text-gray-200">Clear Book List</a></li>
                <li> <a href="{{ route('generate-data') }}" class="text-white hover:text-gray-200">Generate Book List</a></li>

            </ul>
        </nav>
    </div>
</header>
