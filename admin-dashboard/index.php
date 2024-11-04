<?php
include "../php/koneksi.php";
// Asumsikan $conn adalah koneksi database yang sudah dibuat

// Hitung jumlah status 'Masuk'
$sql_masuk = "SELECT COUNT(*) as count FROM user_order WHERE status='Masuk'";
$result_masuk = $conn->query($sql_masuk);
$count_masuk = $result_masuk->fetch_assoc()['count'];

// Hitung jumlah status 'Pending'
$sql_pending = "SELECT COUNT(*) as count FROM user_order WHERE status='Pending'";
$result_pending = $conn->query($sql_pending);
$count_pending = $result_pending->fetch_assoc()['count'];

// Hitung jumlah status 'Selesai' dan 'Drop'
$sql_selesai_drop = "SELECT COUNT(*) as count FROM user_order WHERE status IN ('Selesai', 'Drop')";
$result_selesai_drop = $conn->query($sql_selesai_drop);
$count_selesai_drop = $result_selesai_drop->fetch_assoc()['count'];

// Sekarang Anda memiliki tiga variabel dengan jumlah masing-masing:
// $count_masuk - jumlah order dengan status 'Masuk'
// $count_pending - jumlah order dengan status 'Pending'
// $count_selesai_drop - jumlah order dengan status 'Selesai' atau 'Drop'

// Anda bisa menggunakan variabel-variabel ini di tempat yang Anda inginkan dalam kode HTML Anda
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/output.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <style>
        /* Animasi untuk dropdown */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #notifDropdown {
            animation: slideDown 0.2s ease-out;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            10% {
                transform: rotate(-5deg);
            }

            20% {
                transform: rotate(5deg);
            }

            30% {
                transform: rotate(-5deg);
            }
        }

        .rotate {
            animation: rotate 0.8s infinite;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-black text-white w-64 flex-shrink-0 shadow-lg">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="mt-4">
                <a href="#" class="block py-2 px-4 rounded-l-full hover:bg-gray-100 hover:text-black transition duration-200 menu" data-target="dashboard">Dashboard</a>
                <a href="#" class="block py-2 px-4 rounded-l-full hover:bg-gray-100 hover:text-black transition duration-200 menu" data-target="users">User & Chat</a>
                <a href="#" class="block py-2 px-4 rounded-l-full hover:bg-gray-100 hover:text-black transition duration-200 menu" data-target="orders">Orders</a>
                <a href="#" class="block py-2 px-4 rounded-l-full hover:bg-gray-100 hover:text-black transition duration-200 menu" data-target="calendar">kalender</a>
                <a href="#" class="block py-2 px-4 rounded-l-full hover:bg-gray-100 hover:text-black transition duration-200 menu" data-target="income">Income</a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <!-- Header -->
            <header class="bg-white shadow-md">
                <div class="flex items-center justify-between p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Welcome, Admin</h2>
                    <div class="flex items-center relative"> <!-- Pindahkan relative ke sini -->
                        <span class="mr-2 text-gray-600">John Doe</span>
                        <button id="notifButton" class="bg-black flex text-white rounded-md hover:bg-gray-800 transition duration-200">
                            <div class="relative px-4 py-2">
                                <i class="fas fa-bell"></i>
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center text-xs p-1 font-bold text-white bg-red-500 rounded-full">3</span>
                            </div>
                        </button>
                        <!-- Dropdown notifikasi -->
                        <div id="notifDropdown" class="hidden absolute right-0 top-full mt-2 w-64 bg-white rounded-lg shadow-lg z-50">
                            <div class="p-4 border-b">
                                <h3 class="font-semibold">Notifikasi</h3>
                            </div>
                            <div class="max-h-64 overflow-y-auto">
                                <!-- Contoh item notifikasi -->
                                <div class="p-4 border-b hover:bg-gray-50">
                                    <p class="text-sm">Order baru dari User123</p>
                                    <p class="text-xs text-gray-500">2 menit yang lalu</p>
                                </div>
                                <div class="p-4 border-b hover:bg-gray-50">
                                    <p class="text-sm">Pembayaran berhasil dari User456</p>
                                    <p class="text-xs text-gray-500">5 menit yang lalu</p>
                                </div>
                                <div class="p-4 border-b hover:bg-gray-50">
                                    <p class="text-sm">Pembayaran berhasil dari User456</p>
                                    <p class="text-xs text-gray-500">5 menit yang lalu</p>
                                </div>
                                <div class="p-4 border-b hover:bg-gray-50">
                                    <p class="text-sm">Pembayaran berhasil dari User456</p>
                                    <p class="text-xs text-gray-500">5 menit yang lalu</p>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <a href="#" class="text-blue-500 text-sm">Tandai Sudah Dibaca</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div id="dashboard" class="container mx-auto px-6 py-8 flex gap-6 flex-col">
                    <h3 class="text-3xl font-medium text-gray-800">Dashboard</h3>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                            <h4 class="text-xl font-semibold mb-2">Orders Masuk</h4>
                            <p class="text-3xl font-bold text-gray-800"><?php echo $count_masuk; ?></p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                            <h4 class="text-xl font-semibold mb-2">Orders Pending</h4>
                            <p class="text-3xl font-bold text-gray-800"><?php echo $count_pending; ?></p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                            <h4 class="text-xl font-semibold mb-2">Orders Selesai</h4>
                            <p class="text-3xl font-bold text-gray-800"><?php echo $count_selesai_drop; ?></p>
                        </div>
                    </div>
                    <div class="max-h-64 overflow-y-auto border border-gray-200 rounded-lg shadow">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Masuk</th>
                                    <th scope="col" class="px-6 py-3">Pending</th>
                                    <th scope="col" class="px-6 py-3">Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- Ganti bagian PHP di dalam tabel dengan kode berikut -->
                                    <td class="px-6 py-4 align-top">
                                        <?php
                                        include "../php/koneksi.php";
                                        $sql_masuk = "SELECT * FROM user_order WHERE status='Masuk'";
                                        $result_masuk = $conn->query($sql_masuk);

                                        if ($result_masuk->num_rows > 0) {
                                            while ($row = $result_masuk->fetch_assoc()) {
                                                $data = htmlspecialchars(json_encode($row), ENT_QUOTES);
                                                echo "<div class='mb-4 p-3 bg-white rounded shadow cursor-pointer hover:bg-gray-50' 
                  onclick='showModal(\"Masuk\", $data)'>";
                                                echo "<p class='font-bold'>ID: " . $row['id'] . "</p>";
                                                echo "<p>User: " . $row['userName'] . "</p>";
                                                echo "<p>Item: " . $row['OrderedItem'] . "</p>";
                                                echo "<p>Price: " . $row['price'] . "</p>";
                                                echo "</div>";
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <?php
                                        $sql_pending = "SELECT * FROM user_order WHERE status='Pending'";
                                        $result_pending = $conn->query($sql_pending);

                                        if ($result_pending->num_rows > 0) {
                                            while ($row = $result_pending->fetch_assoc()) {
                                                $data = htmlspecialchars(json_encode($row), ENT_QUOTES);
                                                echo "<div class='mb-4 p-3 bg-white rounded shadow cursor-pointer hover:bg-gray-50' 
                  onclick='showModal(\"Pending\", $data)'>";
                                                echo "<p class='font-bold'>ID: " . $row['id'] . "</p>";
                                                echo "<p>User: " . $row['userName'] . "</p>";
                                                echo "<p>Item: " . $row['OrderedItem'] . "</p>";
                                                echo "<p>Price: " . $row['price'] . "</p>";
                                                echo "</div>";
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <?php
                                        $sql_selesai = "SELECT * FROM user_order WHERE status IN ('Selesai', 'Drop')";
                                        $result_selesai = $conn->query($sql_selesai);

                                        if ($result_selesai->num_rows > 0) {
                                            while ($row = $result_selesai->fetch_assoc()) {
                                                $data = htmlspecialchars(json_encode($row), ENT_QUOTES);
                                                echo "<div class='mb-4 p-3 bg-white rounded shadow cursor-pointer hover:bg-gray-50' 
                  onclick='showModal(\"Selesai\", $data)'>";
                                                echo "<p class='font-bold'>ID: " . $row['id'] . "</p>";
                                                echo "<p>User: " . $row['userName'] . "</p>";
                                                echo "<p>Item: " . $row['OrderedItem'] . "</p>";
                                                echo "<p>Price: " . $row['price'] . "</p>";
                                                echo "<p>Status: " . $row['status'] . "</p>";
                                                echo "</div>";
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div id="users" class="container mx-auto px-6 py-8 hidden">
                    <h3 class="text-3xl font-medium text-gray-800 mb-6">Users & Chat</h3>

                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- User List Section -->
                        <div class="w-full md:w-1/3 bg-white rounded-lg shadow-md">
                            <div class="p-4 border-b">
                                <input type="text" placeholder="Search users..." class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="overflow-y-auto h-[calc(100vh-250px)]">
                                <!-- Sample users, repeat or generate dynamically -->
                                <div class="flex items-center p-4 hover:bg-gray-100 cursor-pointer">
                                    <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-semibold">John Doe</p>
                                        <p class="text-sm text-gray-500">Online</p>
                                    </div>
                                </div>
                                <div class="flex items-center p-4 hover:bg-gray-100 cursor-pointer">
                                    <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-semibold">Jane Smith</p>
                                        <p class="text-sm text-gray-500">Offline</p>
                                    </div>
                                </div>
                                <!-- Add more user items here -->
                            </div>
                        </div>

                        <!-- Chat Section -->
                        <div class="w-full md:w-2/3 bg-white rounded-lg shadow-md flex flex-col">
                            <div class="p-4 border-b flex items-center">
                                <img src="https://via.placeholder.com/40" alt="Current Chat" class="w-10 h-10 rounded-full mr-3">
                                <p class="font-semibold">John Doe</p>
                            </div>
                            <div class="flex-grow overflow-y-auto p-4 space-y-4 h-[calc(100vh-350px)]">
                                <!-- Sample messages, repeat or generate dynamically -->
                                <div class="flex justify-end">
                                    <div class="bg-blue-500 text-white rounded-lg py-2 px-4 max-w-xs">
                                        Hello! How can I help you?
                                    </div>
                                </div>
                                <div class="flex justify-start">
                                    <div class="bg-gray-200 rounded-lg py-2 px-4 max-w-xs">
                                        I have a question about my order.
                                    </div>
                                </div>
                                <!-- Add more message items here -->
                            </div>
                            <div class="p-4 border-t">
                                <div class="flex">
                                    <input type="text" placeholder="Type a message..." class="flex-grow px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600 transition duration-200">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="calendar" class="container mx-auto px-6 py-8 hidden">
                    <h3 class="text-3xl font-medium text-gray-800">Calendar</h3>
                    <p>Here you can manage products.</p>
                </div>

                <div id="orders" class="container mx-auto px-6 py-8 hidden">
                    <h3 class="text-3xl font-medium text-gray-800 mb-6">Order Management</h3>

                    <!-- Form Tambah Order -->
                    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h4 class="text-xl font-semibold mb-4">Add New Order</h4>
        <form id="addOrderForm" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="customerName" class="block text-sm font-medium text-gray-700 mb-1">Customer Name</label>
                <input type="text" id="customerName" name="customerName" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="orderDate" class="block text-sm font-medium text-gray-700 mb-1">Order Date</label>
                <input type="date" id="orderDate" name="orderDate" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="md:col-span-2">
                <label for="orderItems" class="block text-sm font-medium text-gray-700 mb-1">Order Items</label>
                <textarea id="orderItems" name="orderItems" rows="3" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div>
                <label for="totalAmount" class="block text-sm font-medium text-gray-700 mb-1">Total Amount</label>
                <input type="number" id="totalAmount" name="totalAmount" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="md:col-span-2">
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">
                    Add Order
                </button>
            </div>
        </form>
    </div>

    <!-- List Order -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="text-xl font-semibold mb-4">Order List</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample order, repeat or generate dynamically -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">2023-05-15</td>
                        <td class="px-6 py-4 whitespace-nowrap">$150.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="showModal('edit', 1)" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</button>
                            <button onclick="showModal('delete', 1)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more order items here -->
                </tbody>
            </table>
        </div>
    </div>


                    <!-- Modal for Edit/Delete -->
                    <div id="orderModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
                        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                            <div id="orderModalContent">
                                <!-- Modal content will be inserted here by JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>

                <div id="income" class="container mx-auto px-6 py-8 hidden">
                    <h3 class="text-3xl font-medium text-gray-800">Income</h3>
                    <p>Here you can manage settings.</p>
                </div>
            </main>
        </div>
    </div>


    <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 max-w-md w-full">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold" id="modalTitle">Detail Order</h3>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div id="modalContent" class="mb-4">
                <!-- Konten modal akan diisi melalui JavaScript -->
            </div>
            <div id="modalButtons" class="flex justify-end gap-2">
                <!-- Tombol akan ditambahkan secara dinamis -->
            </div>
        </div>
    </div>

    <!-- Modifikasi PHP untuk menambahkan onclick event -->
    <?php
    // Dalam bagian status 'Masuk'
    if ($result_masuk->num_rows > 0) {
        while ($row = $result_masuk->fetch_assoc()) {
            echo "<div class='mb-4 p-3 bg-white rounded shadow cursor-pointer hover:bg-gray-50' 
              onclick='showModal(\"Masuk\", " . json_encode($row) . ")'>";
            echo "<p class='font-bold'>ID: " . $row['id'] . "</p>";
            echo "<p>User: " . $row['userName'] . "</p>";
            echo "<p>Item: " . $row['OrderedItem'] . "</p>";
            echo "<p>Price: " . $row['price'] . "</p>";
            echo "</div>";
        }
    }

    // Dalam bagian status 'Pending'
    if ($result_pending->num_rows > 0) {
        while ($row = $result_pending->fetch_assoc()) {
            echo "<div class='mb-4 p-3 bg-white rounded shadow cursor-pointer hover:bg-gray-50' 
              onclick='showModal(\"Pending\", " . json_encode($row) . ")'>";
            echo "<p class='font-bold'>ID: " . $row['id'] . "</p>";
            echo "<p>User: " . $row['userName'] . "</p>";
            echo "<p>Item: " . $row['OrderedItem'] . "</p>";
            echo "<p>Price: " . $row['price'] . "</p>";
            echo "</div>";
        }
    }

    // Dalam bagian status 'Selesai'
    if ($result_selesai->num_rows > 0) {
        while ($row = $result_selesai->fetch_assoc()) {
            echo "<div class='mb-4 p-3 bg-white rounded shadow cursor-pointer hover:bg-gray-50' 
              onclick='showModal(\"Selesai\", " . json_encode($row) . ")'>";
            echo "<p class='font-bold'>ID: " . $row['id'] . "</p>";
            echo "<p>User: " . $row['userName'] . "</p>";
            echo "<p>Item: " . $row['OrderedItem'] . "</p>";
            echo "<p>Price: " . $row['price'] . "</p>";
            echo "<p>Status: " . $row['status'] . "</p>";
            echo "</div>";
        }
    }
    ?>


    <script>
        function showOrderModal(action, orderId) {
            const modal = document.getElementById('orderModal');
            const modalContent = document.getElementById('orderModalContent');

            if (action === 'edit') {
                modalContent.innerHTML = `
                <h3 class="text-lg font-semibold mb-4">Edit Order</h3>
                <form id="editOrderForm">
                    <div class="mb-4">
                        <label for="editCustomerName" class="block text-sm font-medium text-gray-700 mb-1">Customer Name</label>
                        <input type="text" id="editCustomerName" name="editCustomerName" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="editOrderDate" class="block text-sm font-medium text-gray-700 mb-1">Order Date</label>
                        <input type="date" id="editOrderDate" name="editOrderDate" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="editTotalAmount" class="block text-sm font-medium text-gray-700 mb-1">Total Amount</label>
                        <input type="number" id="editTotalAmount" name="editTotalAmount" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" onclick="closeOrderModal()" class="mr-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save Changes</button>
                    </div>
                </form>
            `;
            } else if (action === 'delete') {
                modalContent.innerHTML = `
                <h3 class="text-lg font-semibold mb-4">Delete Order</h3>
                <p class="mb-4">Are you sure you want to delete this order?</p>
                <div class="flex justify-end">
                    <button onclick="closeOrderModal()" class="mr-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Cancel</button>
                    <button onclick="deleteOrderConfirm(${orderId})" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
                </div>
            `;
            }

            modal.classList.remove('hidden');
        }

        function closeOrderModal() {
            const modal = document.getElementById('orderModal');
            modal.classList.add('hidden');
        }

        function deleteOrderConfirm(orderId) {
            // Add your delete order logic here
            console.log(`Order ${orderId} deleted`);
            closeOrderModal();
        }

        // Fungsi untuk dropdown notifikasi
        document.addEventListener('DOMContentLoaded', function() {
            const notifButton = document.getElementById('notifButton');
            const notifDropdown = document.getElementById('notifDropdown');
            let isNotifOpen = false;

            // Toggle dropdown saat button diklik
            notifButton.addEventListener('click', function(e) {
                e.stopPropagation();
                isNotifOpen = !isNotifOpen;
                if (isNotifOpen) {
                    notifDropdown.classList.remove('hidden');
                } else {
                    notifDropdown.classList.add('hidden');
                }
            });

            // Tutup dropdown saat mengklik di luar
            document.addEventListener('click', function(e) {
                if (!notifDropdown.contains(e.target) && !notifButton.contains(e.target)) {
                    notifDropdown.classList.add('hidden');
                    isNotifOpen = false;
                }
            });

            // Mencegah dropdown tertutup saat mengklik di dalamnya
            notifDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        function showModal(type, data) {
            // Parse data jika berbentuk string
            if (typeof data === 'string') {
                data = JSON.parse(data);
            }

            const modal = document.getElementById('modal');
            const modalContent = document.getElementById('modalContent');
            const modalButtons = document.getElementById('modalButtons');

            // Tampilkan detail order
            modalContent.innerHTML = `
        <p class="font-bold">ID: ${data.id}</p>
        <p>User: ${data.userName}</p>
        <p>Item: ${data.OrderedItem}</p>
        <p>Price: ${data.price}</p>
        <p>Status: ${data.status || type}</p>
    `;

            // Kosongkan buttons container
            modalButtons.innerHTML = '';

            // Tambahkan tombol sesuai dengan tipe
            if (type === 'Masuk') {
                modalButtons.innerHTML = `
            <button onclick="handleOrder(${data.id}, 'Terima')" 
                    class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                Terima
            </button>
            <button onclick="handleOrder(${data.id}, 'Tolak')" 
                    class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                Tolak
            </button>
        `;
            } else if (type === 'Pending') {
                modalButtons.innerHTML = `
            <button onclick="handleOrder(${data.id}, 'Selesai')" 
                    class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                Selesai
            </button>
            <button onclick="handleOrder(${data.id}, 'Drop')" 
                    class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                Drop
            </button>
        `;
            }

            // Tampilkan modal
            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        async function handleOrder(id, action) {
            try {
                const response = await fetch('../php/update/update_order.php', { // Sesuaikan path
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        id: id,
                        action: action
                    })
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    closeModal();
                    location.reload();
                } else {
                    console.error('Server response:', data);
                    alert(data.error || 'Terjadi kesalahan saat memproses order');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan dalam koneksi ke server');
            }
        }
        // Tutup modal ketika mengklik di luar modal
        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target === modal) {
                closeModal();
            }
        }
        // Ambil semua elemen menu
        const menuItems = document.querySelectorAll('.menu');

        // Tambahkan event listener untuk setiap menu
        menuItems.forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link untuk berpindah halaman

                // Sembunyikan semua konten
                document.querySelectorAll('.container').forEach(content => {
                    content.classList.add('hidden');
                });

                // Tampilkan konten yang sesuai dengan menu yang dipilih
                const targetId = this.getAttribute('data-target');
                document.getElementById(targetId).classList.remove('hidden');
            });
        });
    </script>
</body>

</html>