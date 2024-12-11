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
            <h1 class="text-2xl font-bold mb-4">Call API Laravel!</h1>
        </div>

        <div class="flex p-5 bg-gray-200 rounded-lg mb-2">
            <form id="searchForm" onsubmit="searchPost(event)">
                <input type="search" id="searchInput" class="border-black p-3 rounded-lg" placeholder="ค้นหาด้วย รหัส">
                <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg">ค้นหา</button>
                <button onclick="goBlack()"
                    class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg">เรียกดูทั้งหมด</button>
            </form>
        </div>

        <table class="min-w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">ID</th>
                    <th class="border border-gray-300 p-2">Title</th>
                    <th class="border border-gray-300 p-2">Body</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $post)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $post['id'] }}</td>
                        <td class="border border-gray-300 p-2">{{ $post['title'] }}</td>
                        <td class="border border-gray-300 p-2">{{ $post['body'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
<script>
    function searchPost(event) {
        event.preventDefault();
        const searchId = document.getElementById('searchInput').value;

        if (searchId) {
            window.location.href = `/index/${searchId}`;
        } else {
            alert("Please enter an ID to search.");
            window.location.href = `/index`;
        }
    }

    function goBlack() {
        window.location.href = `/index`;
    }
</script>
