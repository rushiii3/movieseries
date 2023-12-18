<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Channel Modify</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- component -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<section class="h-screen bg-gray-100 px-4 text-gray-600 antialiased" x-data="app">
    <div class="flex h-full flex-col justify-center">
        <!-- Table -->
        <div class="mx-auto w-full max-w-5xl rounded-sm border border-gray-200 bg-white shadow-lg">
            <header class="border-b border-gray-100 px-5 py-4 flex justify-between items-center">
                <div class="font-semibold text-gray-800">Manage Channels</div>
                <div>
                     <input type="text" class="w-full backdrop-blur-sm bg-white/20 py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-300 focus:border-violet-300 transition-colors duration-300" placeholder="Search...">
                </div>

            </header>

            <div class="overflow-x-auto p-3">
                <table class="w-full table-auto">
                    <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-400">
                        <tr>
                            <th></th>
                            <th class="p-2">
                                <div class="text-center font-semibold">Channel Name</div>
                            </th>
                            <th class="p-2">
                                <div class="text-center font-semibold">Channel Number</div>
                            </th>
                            <th class="p-2">
                                <div class="text-center font-semibold">Genre</div>
                            </th>
                            <th class="p-2">
                                <div class="text-center font-semibold">Price</div>
                            </th>
                        
                            <th class="p-2">
                                <div class="text-center font-semibold">Action</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100 text-sm">
                        <!-- record 1 -->
                        <tr>
                            <td class="p-2">
                                <img src="https://www.indigital.co.in/images/logo/and%20pictures.png" alt="" class="h-8 mx-auto">
                            </td>
                            <td class="p-2">
                                <div class="text-center font-medium text-gray-800">& PICTURES</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center font-medium text-gray-800">101</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center font-medium text-gray-800">SD-MOVIES</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center font-medium text-purple-500">₹10.00</div>
                            </td>
                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button>
                                        <svg class="h-8 w-8 rounded-full p-1 text-gray-800 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        
                                    </button>
                                    <button type="button">
                                    <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="#000000" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                        <title>edit</title>
                                                        <path d="M17.438 22.469v-4.031l2.5-2.5v7.344c0 1.469-1.219 2.688-2.656 2.688h-14.625c-1.469 0-2.656-1.219-2.656-2.688v-14.594c0-1.469 1.188-2.688 2.656-2.688h14.844v0.031l-2.5 2.469h-11.5c-0.531 0-1 0.469-1 1.031v12.938c0 0.563 0.469 1 1 1h12.938c0.531 0 1-0.438 1-1zM19.813 7.219l2.656 2.656 1.219-1.219-2.656-2.656zM10.469 16.594l2.625 2.656 8.469-8.469-2.625-2.656zM8.594 21.094l3.625-0.969-2.656-2.656z"></path>
                                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- record 2 -->
                        <tr>
                            <td class="p-2">
                                <img src="https://www.indigital.co.in/images/logo/Colors-Cineplex-Print.png" alt="" class="h-11 mx-auto">
                            </td>
                            <td class="p-2">
                                <div>
                                    <div class="text-center font-medium text-gray-900">COLORS CINEPLEX</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-center font-medium text-gray-800">102</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center font-medium text-gray-800">SD-MOVIES</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center font-medium text-purple-500">₹3.00</div>
                            </td>
                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button>
                                        <svg class="h-8 w-8 rounded-full p-1 text-gray-900 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                    <button type="button">
                                    <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="#000000" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                        <title>edit</title>
                                                        <path d="M17.438 22.469v-4.031l2.5-2.5v7.344c0 1.469-1.219 2.688-2.656 2.688h-14.625c-1.469 0-2.656-1.219-2.656-2.688v-14.594c0-1.469 1.188-2.688 2.656-2.688h14.844v0.031l-2.5 2.469h-11.5c-0.531 0-1 0.469-1 1.031v12.938c0 0.563 0.469 1 1 1h12.938c0.531 0 1-0.438 1-1zM19.813 7.219l2.656 2.656 1.219-1.219-2.656-2.656zM10.469 16.594l2.625 2.656 8.469-8.469-2.625-2.656zM8.594 21.094l3.625-0.969-2.656-2.656z"></path>
                                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- total amount -->


            <div class="flex justify-end">
                <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
                <input type="hidden" class="border border-black bg-gray-50" x-model="selected" />
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("app", () => ({
            total: 0,
            selected: [],

            toggleCheckbox(element, amount) {
                if (element.checked) {
                    this.selected.push(element.value);
                    this.total += amount;
                } else {
                    const index = this.selected.indexOf(element.value);

                    if (index > -1) this.selected.splice(index, 1);

                    this.total -= amount;
                }
            },
        }));
    });
</script>
</body>
</html>