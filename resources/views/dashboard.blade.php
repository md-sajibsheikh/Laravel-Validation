<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bikes List</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <style>
        /* Additional styling for status badges */
        .status-active {
            background-color: #4ade80; /* Green */
            color: #ffffff;
        }
        .status-inactive {
            background-color: #f87171; /* Red */
            color: #ffffff;
        }
    </style>
</head>
<body class="bg-gray-100">

    <h1 class="text-red-500 text-3xl text-center font-bold py-4 mb-5 bg-red-100">Test - 2 (CRUD Operation)</h1>

    <div class="p-10">
        <div class="w-full p-8 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4 text-gray-900">Bikes List</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Model</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="https://via.placeholder.com/100x75" alt="Bike Image" class="w-24 h-auto rounded-md border border-gray-300" />
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">Mountain Bike</td>
                        <td class="px-6 py-4 whitespace-nowrap">BrandX</td>
                        <td class="px-6 py-4 whitespace-nowrap">X200</td>
                        <td class="px-6 py-4 whitespace-nowrap">2022</td>
                        <td class="px-6 py-4 whitespace-nowrap">$499</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full status-active">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">Perfect for rugged terrains.</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="https://via.placeholder.com/100x75" alt="Bike Image" class="w-24 h-auto rounded-md border border-gray-300" />
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">Road Bike</td>
                        <td class="px-6 py-4 whitespace-nowrap">BrandY</td>
                        <td class="px-6 py-4 whitespace-nowrap">R300</td>
                        <td class="px-6 py-4 whitespace-nowrap">2021</td>
                        <td class="px-6 py-4 whitespace-nowrap">$799</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full status-inactive">Inactive</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">Ideal for smooth roads and long distances.</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="https://via.placeholder.com/100x75" alt="Bike Image" class="w-24 h-auto rounded-md border border-gray-300" />
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">Hybrid Bike</td>
                        <td class="px-6 py-4 whitespace-nowrap">BrandZ</td>
                        <td class="px-6 py-4 whitespace-nowrap">H400</td>
                        <td class="px-6 py-4 whitespace-nowrap">2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">$599</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full status-active">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">Great for both city and trail riding.</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
