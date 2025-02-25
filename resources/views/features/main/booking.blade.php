@extends('utils.layout.main')

@section('content')
@include('utils.layout.navbar')

<!-- Booking Header -->
<section class="relative bg-gradient-to-b from-black to-blue-900 text-white py-16 pt-32 text-center">
    <h1 class="text-5xl font-extrabold pixel-font neon-text">Booking Session</h1>
</section>

<!-- Booking Section -->
<section class="container mx-auto py-10 px-6" x-data="{
        selectedDate: '2025-02-21',
        selectedTime: '',
        duration: '',
        slots: {
            '2025-02-16': ['12:00 - 14:00', '16:00 - 18:00'],
            '2025-02-19': ['10:00 - 12:00', '15:30 - 17:30']
        },
        rooms: [
            { name: 'ROOM A', status: 'booked', user: 'Fahmi', timeLeft: '2h 15m' },
            { name: 'ROOM B', status: 'available' },
            { name: 'ROOM C', status: 'available' }
        ]
    }">

    <div class="bg-gray-900 p-6 rounded-lg shadow-lg text-white">

        <!-- Room & Game Selection -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Room Selection -->
            <div class="space-y-4" x-data="{ selectedConsole: 'PS5', selectedRoom: '' }">
                <h2 class="text-xl font-bold">Pilih Konsol</h2>
                <div class="flex space-x-4">
                    <button @click="selectedConsole = 'PS5'"
                        class="px-6 py-3 font-bold rounded-lg shadow-lg transition border-2"
                        :class="selectedConsole === 'PS5' ? 'bg-blue-600 text-white border-blue-600' : 'bg-gray-800 text-gray-300 border-gray-600'">
                        PS5
                    </button>
                    <button @click="selectedConsole = 'PS4'"
                        class="px-6 py-3 font-bold rounded-lg shadow-lg transition border-2"
                        :class="selectedConsole === 'PS4' ? 'bg-blue-600 text-white border-blue-600' : 'bg-gray-800 text-gray-300 border-gray-600'">
                        PS4
                    </button>
                </div>

                <h2 class="text-xl font-bold mt-6">Pilih Room</h2>
                <div class="flex space-x-4">
                    <button @click="selectedRoom = 'Regular'"
                        class="px-6 py-3 font-bold rounded-lg shadow-lg transition border-2"
                        :class="selectedRoom === 'Regular' ? 'bg-blue-600 text-white border-blue-600' : 'bg-gray-800 text-gray-300 border-gray-600'">
                        Regular
                    </button>
                    <button @click="selectedRoom = 'VIP'"
                        class="px-6 py-3 font-bold rounded-lg shadow-lg transition border-2"
                        :class="selectedRoom === 'VIP' ? 'bg-blue-600 text-white border-blue-600' : 'bg-gray-800 text-gray-300 border-gray-600'">
                        VIP
                    </button>
                    <button @click="selectedRoom = 'VVIP'"
                        class="px-6 py-3 font-bold rounded-lg shadow-lg transition border-2"
                        :class="selectedRoom === 'VVIP' ? 'bg-blue-600 text-white border-blue-600' : 'bg-gray-800 text-gray-300 border-gray-600'">
                        VVIP
                    </button>
                </div>
            </div>

            <div x-data="{ search: '', selectedGame: '', games: [
                { name: 'Call of Duty: Black OPS 6', img: 'https://gmedia.playstation.com/is/image/SIEPDC/call-of-duty-black-ops-6-keyart-01-en-21may24?$facebook$' },
                { name: 'Roblox', img: 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQmKy4rw0pzLyClOwgUSvhuxbj6MdB3fAq6q1tlcpwCU_F6pi0DLUNmMQrUVNpQTw-HnjNDfw' },
                { name: 'GTA V', img: 'https://resizer.glanacion.com/resizer/v2/gta-v-lanzo-su-version-para-ps5-y-xbox-FTTCODJDYJCGHPJX4E7X2KVYAA.jpg?auth=620c29bb55b176292b95cb8fa2052fed0b2056900751e8e394ecf8f66008563b&width=768&quality=70&smart=false' },
                { name: 'Dragon Ball', img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv2M66Vg7OZ7qwC9lYRB5VBK0RWHBxydP6U4q67rY2gT36b8rAs-laexah0b0CKPz-93w&usqp=CAU' },
                { name: 'God of War: Ragnarok', img: 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRxFAMCihTSxdPuyGX6xfkqf4OKP2zKPa7Nj7Jb8eJSGUqjZj0Lto5PgmQPmSkQsV78P1pS' },
                { name: 'Call of Duty', img: 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT-od4W6Y1W4cnJoIMUakUrk_25F9P6lShoByqEuW0llfAssrUy7Y5LGht_1ugM2CWY66XH' },
                { name: 'It Takes Two', img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrQaFXY5U6RhrYpA_fThSzPUylIES7RfsxcdDzI0iuq6Pf5AD5g7Y7sz0Q5m2H_FGct9hh' },
                { name: 'College Football', img: 'https://image.api.playstation.com/vulcan/ap/rnd/202408/2112/6db314e57a2440ba6ff830a195c2d3f384d1175eebc93fd9.png' },
                { name: 'Poppy Playtime', img: 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTdYMwHQBDnubC1zf413Cz8B3tOJo5FxwnBqyG4yurV6P7Ul-Wlg7I_NVG6OwyFBQvJbMXp' }
            ]}">

                <!-- Input Search -->
                <div class="mb-4">
                    <input type="text" x-model="search" placeholder="Cari Game..."
                        class="w-full px-4 py-2 rounded-lg border-2 border-gray-500 bg-gray-800 text-white focus:outline-none focus:border-blue-500 transition">
                </div>

                <!-- Game Selection -->
                <h2 class="text-xl font-bold mb-4">Pilih Game</h2>
                <div class="flex space-x-4 overflow-x-auto py-2 scrollbar-hide">
                    <template x-for="game in games.filter(g => g.name.toLowerCase().includes(search.toLowerCase()))"
                        :key="game.name">
                        <div class="flex flex-col items-center cursor-pointer group">
                            <div @click="selectedGame = game.name" class="w-24 h-32">
                                <img :src="game.img"
                                    class="w-full h-full object-cover rounded-lg group-hover:scale-110 transition">
                            </div>
                            <span class="mt-2 text-sm text-white font-semibold group-hover:text-blue-400"
                                x-text="game.name"></span>
                        </div>
                    </template>
                </div>

                <!-- Selected Game -->
                <div class="mt-4" x-show="selectedGame">
                    <span class="text-lg font-bold text-white">Game Terpilih: <span class="text-blue-400"
                            x-text="selectedGame"></span></span>
                </div>
            </div>
        </div>

        <!-- Pilih Tanggal & Jam -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Pilih Tanggal -->
            <div class="space-y-4">
                <h2 class="text-xl font-bold">Pilih Tanggal</h2>
                <div class="relative">
                    <input type="date" x-model="selectedDate"
                        class="w-full px-4 py-3 rounded-lg border-2 border-gray-500 bg-gray-800 text-white text-lg focus:outline-none focus:border-blue-500 transition">
                    <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                        📅
                    </div>
                </div>
            </div>

            <!-- Pilih Jam -->
            <div class="space-y-4">
                <h2 class="text-xl font-bold">Pilih Jam</h2>
                <div class="flex space-x-3">
                    <!-- Dropdown Select -->
                    <div class="relative w-full">
                        <select x-model="selectedTime"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-500 bg-gray-800 text-white focus:outline-none focus:border-blue-500 transition">
                            <option value="" disabled selected>Pilih Jam</option>
                            <template x-for="slot in slots[selectedDate]">
                                <option x-text="slot" class="bg-gray-900"></option>
                            </template>
                        </select>
                        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                            ⏰
                        </div>
                    </div>

                    <!-- Input Manual -->
                    <input type="text" x-model="selectedTime" placeholder="Manual"
                        class="w-32 px-4 py-3 rounded-lg border-2 border-gray-500 bg-gray-800 text-white focus:outline-none focus:border-blue-500 transition">
                </div>
            </div>
        </div>

        <!-- Status Room -->
        <h3 class="text-xl font-bold mt-8 mb-4">Status Room</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <template x-for="room in rooms">
                <div class="p-4 rounded-lg shadow-lg border-2 transition-all"
                    :class="room.status === 'booked' ? 'border-red-400 bg-red-500/20 text-red-300' : 'border-green-400 bg-green-500/20 text-green-300'">
                    <div class="flex justify-between">
                        <span class="text-xl font-semibold" x-text="room.name"></span>
                        <span class="text-sm"
                            x-text="room.status === 'booked' ? `Di booking oleh ${room.user}` : 'Available'">
                        </span>
                    </div>
                    <span x-show="room.status === 'booked'" class="text-xs">Sisa Jam: <span
                            x-text="room.timeLeft"></span></span>
                </div>
            </template>
        </div>

        <!-- Booking Button -->
        <div class="text-center mt-8">
            <button
                class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold text-lg shadow-lg hover:bg-blue-700 hover:scale-105 transition-all">
                Booking Sekarang
            </button>
        </div>

    </div>
</section>
@endsection