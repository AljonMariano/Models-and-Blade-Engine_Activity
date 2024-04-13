@include('partials.header')


<div class="container mx-auto my-8">
    <table class="w-full table-auto">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">ISBN</th>
                <th class="py-2 px-4">Title</th>
                <th class="py-2 px-4">Author</th>
                <th class="py-2 px-4">Description</th>
                <th class="py-2 px-4">Date Published</th>
            </tr>
        </thead>
        <tbody class="bg-gray-700 text-white">
            @foreach($books as $book)
            <tr>
                <td class="py-2 px-4">{{ $book->id }}</td>
                <td class="py-2 px-4">{{ $book->isbn }}</td>
                <td class="py-2 px-4">{{ $book->title }}</td>
                <td class="py-2 px-4">{{ $book->author }}</td>
                <td class="py-2 px-4">{{ $book->description }}</td>
                <td class="py-2 px-4">{{ $book->date_published }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')
