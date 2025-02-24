@extends('utils.layout.main')

@section('content')
@include('utils.layout.navbar')

<!-- Booking Header -->
<section class="relative bg-gradient-to-b from-black to-blue-900 text-white py-16 pt-32">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold pixel-font neon-text">Booking Session</h1>
    </div>
</section>

<!-- Calendar & Booking Slots -->
<section class="container mx-auto py-10 px-6" x-data="{ selectedDate: '2025-02-21', slots: {
    '2025-02-16': [
        { time: '12:00 - 14:00', status: 'tersedia' },
        { time: '14:00 - 16:00', status: 'tidak tersedia' },
        { time: '16:00 - 18:00', status: 'tersedia' }
    ],
    '2025-02-19': [
        { time: '10:00 - 12:00', status: 'tersedia' },
        { time: '13:00 - 15:00', status: 'tidak tersedia' },
        { time: '15:30 - 17:30', status: 'tersedia' }
    ],
    '2025-02-22': [
        { time: '09:00 - 11:00', status: 'tersedia' },
        { time: '12:30 - 14:30', status: 'tidak tersedia' },
        { time: '15:00 - 17:00', status: 'tersedia' }
    ]
} }">

    <div class="bg-black p-6 rounded-lg shadow-lg">
        <div class="flex justify-center space-x-4">
            <button
                class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg shadow-lg hover:bg-blue-700 transition">
                PS5
            </button>
            <button
                class="px-6 py-3 bg-gray-700 text-white font-bold rounded-lg shadow-lg hover:bg-gray-800 transition">
                PS4
            </button>
        </div>

        <!-- Game Selection -->
        <div class="flex space-x-4 overflow-x-auto mt-6 px-4 py-2 scrollbar-hide">
            <img src="https://gmedia.playstation.com/is/image/SIEPDC/call-of-duty-black-ops-6-keyart-01-en-21may24?$facebook$"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQmKy4rw0pzLyClOwgUSvhuxbj6MdB3fAq6q1tlcpwCU_F6pi0DLUNmMQrUVNpQTw-HnjNDfw"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://resizer.glanacion.com/resizer/v2/gta-v-lanzo-su-version-para-ps5-y-xbox-FTTCODJDYJCGHPJX4E7X2KVYAA.jpg?auth=620c29bb55b176292b95cb8fa2052fed0b2056900751e8e394ecf8f66008563b&width=768&quality=70&smart=false"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv2M66Vg7OZ7qwC9lYRB5VBK0RWHBxydP6U4q67rY2gT36b8rAs-laexah0b0CKPz-93w&usqp=CAU"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRxFAMCihTSxdPuyGX6xfkqf4OKP2zKPa7Nj7Jb8eJSGUqjZj0Lto5PgmQPmSkQsV78P1pS"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT-od4W6Y1W4cnJoIMUakUrk_25F9P6lShoByqEuW0llfAssrUy7Y5LGht_1ugM2CWY66XH"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrQaFXY5U6RhrYpA_fThSzPUylIES7RfsxcdDzI0iuq6Pf5AD5g7Y7sz0Q5m2H_FGct9hh"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://image.api.playstation.com/vulcan/ap/rnd/202408/2112/6db314e57a2440ba6ff830a195c2d3f384d1175eebc93fd9.png"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTdYMwHQBDnubC1zf413Cz8B3tOJo5FxwnBqyG4yurV6P7Ul-Wlg7I_NVG6OwyFBQvJbMXp"
                class="w-32 h-48 object-cover rounded-[10px] hover:scale-110 transition">
        </div>

        <!-- Room Selection -->
        <div class="flex justify-center space-x-6 mt-8">
            <button
                class="px-6 py-3 bg-green-600 text-white font-bold rounded-lg shadow-lg hover:bg-green-700 transition">
                Regular
            </button>
            <button
                class="px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg shadow-lg hover:bg-yellow-600 transition">
                VIP
            </button>
            <button
                class="px-6 py-3 bg-purple-500 text-white font-bold rounded-lg shadow-lg hover:bg-purple-600 transition">
                VVIP
            </button>
        </div>


        <!-- Calendar Header -->
        <div class="flex justify-between items-center mb-6 mt-8">
            <button class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">&lt;</button>
            <h2 class="text-xl font-bold text-white">Februari 2025</h2>
            <button class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">&gt;</button>
        </div>

        <!-- Calendar Grid -->
        <div class="grid grid-cols-7 gap-2 text-center">
            <div class="text-gray-400">Sun</div>
            <div class="text-gray-400">Mon</div>
            <div class="text-gray-400">Tue</div>
            <div class="text-gray-400">Wed</div>
            <div class="text-gray-400">Thu</div>
            <div class="text-gray-400">Fri</div>
            <div class="text-gray-400">Sat</div>

            <!-- Calendar Days -->
            <template x-for="day in ['16', '17', '18', '19', '20', '21', '22']">
                <button @click="selectedDate = `2025-02-${day}`" class="p-4 rounded-md font-bold transition-all"
                    :class="selectedDate === `2025-02-${day}` ? 'bg-blue-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600'">
                    <span x-text="day"></span>
                </button>
            </template>
        </div>

        <!-- Booking Slots -->
        <div class="mt-6">
            <h3 class="text-center text-white font-bold text-lg">Slot Waktu</h3>
            <div class="mt-4 space-y-4">
                <template x-for="slot in slots[selectedDate]">
                    <div class="p-4 rounded-lg flex justify-between shadow-md"
                        :class="slot.status === 'tersedia' ? 'bg-green-600 text-white' : 'bg-red-600 text-white'">
                        <span x-text="slot.time"></span>
                        <span class="px-2 py-1 rounded"
                            :class="slot.status === 'tersedia' ? 'bg-green-800' : 'bg-red-800'"
                            x-text="slot.status.charAt(0).toUpperCase() + slot.status.slice(1)">
                        </span>
                    </div>
                </template>
            </div>
        </div>

        <!-- Booking Button -->
        <div class="mt-8 text-center">
            <button
                class="bg-pink-600 text-white px-6 py-3 rounded-lg font-bold text-lg shadow-lg hover:bg-pink-700 transition">
                Booking Sekarang
            </button>
        </div>
    </div>

</section>

@endsection