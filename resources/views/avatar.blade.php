<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าเเรกนะจ๊ะ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto p-4">
        <div class="flex justify-center items-center">
            <h1 class="text-2xl font-bold mb-4">Call API Laravel! AVARTAR</h1>
        </div>
        <table class="min-w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">ID</th>
                    <th class="border border-gray-300 p-2">Email</th>
                    <th class="border border-gray-300 p-2">First Name</th>
                    <th class="border border-gray-300 p-2">Last Name</th>
                    <th class="border border-gray-300 p-2">Avatar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['data'] as $user)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $user['id'] }}</td>
                        <td class="border border-gray-300 p-2">{{ $user['email'] }}</td>
                        <td class="border border-gray-300 p-2">{{ $user['first_name'] }}</td>
                        <td class="border border-gray-300 p-2">{{ $user['last_name'] }}</td>
                        <td class="border border-gray-300 p-2">
                            <img src="{{ $user['avatar'] }}" alt="Avatar" class="w-12 h-12 rounded-full">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
