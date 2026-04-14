<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbreviations</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6 text-center">Abbreviations List</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow-md overflow-hidden">
            <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-3 px-6 text-left">#</th>
                <th class="py-3 px-6 text-left">Abbreviation</th>
                <th class="py-3 px-6 text-left">Meaning</th>
                <th class="py-3 px-6 text-left">Language</th>
            </tr>
            </thead>
            <tbody>
            @forelse($abbreviations as $abbreviation)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $abbreviation->id }}</td>
                    <td class="py-3 px-6 font-semibold">{{ $abbreviation->abbreviation }}</td>
                    <td class="py-3 px-6">{{ $abbreviation->meaning }}</td>
                    <td class="py-3 px-6">{{ $abbreviation->language->name ?? 'N/A' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-500">No abbreviations found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
