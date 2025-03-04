<x-app-layout>
    @section('hero')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    <body class="bg-gray-100 p-10 pt-20">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold text-yellow-500 text-center mb-10 pt-20">Latest Blog Posts</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden p-5">
                    <img src="https://www.gstatic.com/webp/gallery/1.jpg" alt="Blog Image" class="w-full h-48 object-cover rounded-md">
                    <h2 class="text-xl font-semibold mt-4">Blog Title One</h2>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="text-blue-500 font-medium mt-3 inline-block">Read More →</a>
                </div>
                <!-- Blog Post 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden p-5">
                    <img src="https://www.gstatic.com/webp/gallery/2.jpg" alt="Blog Image" class="w-full h-48 object-cover rounded-md">
                    <h2 class="text-xl font-semibold mt-4">Blog Title Two</h2>
                    <p class="text-gray-600 mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-blue-500 font-medium mt-3 inline-block">Read More →</a>
                </div>
                <!-- Blog Post 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden p-5">
                    <img src="https://www.gstatic.com/webp/gallery/4.jpg" alt="Blog Image" class="w-full h-48 object-cover rounded-md">
                    <h2 class="text-xl font-semibold mt-4">Blog Title Three</h2>
                    <p class="text-gray-600 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                    <a href="#" class="text-blue-500 font-medium mt-3 inline-block">Read More →</a>
                </div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>
