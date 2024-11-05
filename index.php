<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        #userDropdown {
            position: fixed;
            /* Pastikan dropdown menggunakan posisi absolute */
            z-index: 1000;
            /* Pastikan dropdown berada di atas elemen lain */
        }

        .no-scroll {
            overflow: hidden;
            /* Mencegah scroll */
        }
    </style>
</head>

<body style="scroll-behavior: smooth;">
    <div id="userDropdown" class="hidden absolute bg-white border border-gray-200 rounded-lg shadow-lg p-4 w-48 z-50 right-0">
        <a href="#" class="block py-2 hover:bg-gray-100">Profile</a>
        <a href="#" class="block py-2 hover:bg-gray-100">Settings</a>
        <a id="logoutBtn" href="#" class="block py-2 hover:bg-gray-100">Logout</a>
    </div>
    <!-- section pertama -->
    <div class="border-b-2" id="start">
        <!-- navbar -->
        <nav id="navbar" class="bg-white border-t-2 border-black flex flex-row justify-between shadow-lg rounded-b-lg fixed top-0 w-full z-10 transition-all duration-300">
            <!-- Brand / Logo -->
            <div class="flex flex-row items-center gap-2 h-12">
                <img class="w-9 h-9 object-cover rounded-full border-2 border-transparent hover:border-black duration-200 transition-all ease-in-out" src="img/logo/logo.png" alt="Logo-brand.png">
                <h1 class="text-black">CodeX Solution</h1>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="sm:hidden flex items-center">
                <button id="menuToggle" class="p-2 border-2 border-transparent rounded-md hover:border-black">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex flex-row gap-6 items-center">
                <a href="#start" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200">Home</a>
                <a href="#" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200">Services</a>
                <a href="#" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200">Testimonial</a>
                <a href="#" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200">About</a>
            </div>

            <!-- User Interactive -->
            <div class="hidden sm:flex flex-row gap-4 items-center">
                <i class="fa-solid border-2 border-transparent hover:border-black transition-all duration-200 ease-in-out rounded-full fa-magnifying-glass fa-md p-2"></i>
                <i class="fa-regular border-2 border-transparent hover:border-black transition-all duration-200 ease-in-out rounded-full fa-bell fa-md p-2"></i>
                <i id="userIcon" class="fa-regular border-2 border-transparent hover:border-black transition-all duration-200 ease-in-out fa-user fa-md p-2 rounded-full cursor-pointer"></i>
            </div>
        </nav>

        <!-- Sidebar Mobile -->
        <div id="mobileSidebar" class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform z-50 -translate-x-full transition-transform duration-300">
            <div class="flex flex-col p-4 gap-4">
                <a href="#start" class="text-black hover:text-slate-500">Home</a>
                <a href="#" class="text-black hover:text-slate-500">Services</a>
                <a href="#" class="text-black hover:text-slate-500">Testimonial</a>
                <a href="#" class="text-black hover:text-slate-500">About</a>
            </div>
        </div>

        <div class="w-full flex flex-row mt-16">
            <div class="xs:w-full w-1/2 md:w-full flex flex-col justify-evenly">
                <div class="px-8">
                    <h1 class="text-9xl xs:text-6xl font-bebas drop-shadow-xl xs:text-center hover:drop-shadow-md">Discover your IT solutions</h1>
                    <p class="text-md xs:text-xs font-['Roboto'] text-slate-600">Temukan solusi IT anda. Kami menawarkan jasa di bidang IT yang mungkin anda sedang membutuhkanya!</p>
                </div>
                <div class="flex flex-row gap-6 justify-center bg-white w-full">
                    <button class="px-9 py-3 xs:py-1 xs:px-4 text-lg border-2 border-black rounded-lg hover:bg-black hover:text-white shadow-xl hover:shadow-lg hover:scale-110 transition-all ease-in-out duration-300">Developer</button>
                    <button class="px-9 py-3 xs:py-1 xs:px-4 text-lg border-2 border-black rounded-lg hover:bg-black hover:text-white shadow-xl hover:shadow-lg hover:scale-110 transition-all ease-in-out duration-300">IT Solutions</button>
                </div>
                <div class="flex flex-row gap-9 xs:gap-2 justify-center">
                    <div class="text-center px-5">
                        <h1 class="underline underline-offset-4 font-bold text-xl shadow-xl">1000+</h1>
                        <p>Pembelian</p>
                    </div>
                    <div class="text-center px-5">
                        <h1 class="underline underline-offset-4 font-bold text-xl shadow-xl">500+</h1>
                        <p>Review</p>
                    </div>
                    <div class="text-center px-5">
                        <h1 class="underline underline-offset-4 font-bold text-xl shadow-xl">Rp.100.000.000</h1>
                        <p>Pemasukan</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 h-full flex items-center justify-center xs:hidden">
                <div class="relative group">
                    <!-- Kartu pertama -->
                    <div class="bg-white inline-flex shadow-2xl hover:shadow-lg flex-col p-4 rounded-lg border-2 border-black hover:scale-110 transition-transform duration-200 ease-in-out transform group-hover:translate-x-44 mb-4">
                        <div class="">
                            <img class="w-64 h-64" src="img/illustration/2842680.jpg" alt="illustration.jpg">
                        </div>
                        <div>
                            <div class="py-4">
                                <h1 class="text-lg font-bold">Judul Kartu</h1>
                                <p class="text-sm">Deskripsi Kartu</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1>Rp.12.000/h</h1>
                                <button class="bg-white border-2 border-black py-2 px-4 rounded-lg hover:bg-black hover:text-white shadow-2xl hover:shadow-lg hover:scale-110 transition-all duration-200 ease-in-out">Order now</button>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu kedua (ditempatkan di atas kartu pertama) -->
                    <div class="bg-white inline-flex shadow-2xl hover:shadow-lg flex-col p-4 rounded-lg border-2 border-black absolute top-4 left-4 hover:scale-110 transition-transform duration-200 ease-in-out transform group-hover:-translate-x-36">
                        <div class="">
                            <img class="w-64 h-64" src="img/illustration/4716574.jpg" alt="illustration.jpg">
                        </div>
                        <div>
                            <div class="py-4">
                                <h1 class="text-lg font-bold">Judul Kartu</h1>
                                <p class="text-sm">Deskripsi Kartu</p>
                            </div>
                            <div class="py-4 flex flex-row justify-around items-center">
                                <h1>Rp.10.000/h</h1>
                                <button class="bg-white border-2 border-black py-2 px-4 rounded-lg hover:bg-black hover:text-white shadow-2xl hover:shadow-lg hover:scale-110 transition-all duration-200 ease-in-out">Order now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>

    <div class="bg-white border-b-2 flex justify-center items-center">
        <div class="w-full flex justify-center">
            <div class="w-auto flex xxs:grid xxs:grid-cols-2 xxs:grid-rows-2 xxs:justify-normal xs:grid xs:grid-cols-2 xs:grid-rows-2 xs:justify-normal m-auto items-center justify-evenly bg-white py-8 px-4 gap-4 md:grid md:grid-cols-2 md:grid-rows-2">
                <!-- Kartu -->
                <div class="inline-flex xxs:w-48 xxs:scale-75 xs:w-56 xs:scale-75 md:w-60 md:scale-90 w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-105 transition-all ease-in-out duration-200">
                    <!-- Gambar -->
                    <div class="rounded-lg xxs:hidden xs:hidden">
                        <img class="object-cover rounded-t-lg shadow-lg w-full h-32" src="img/illustration/2842680.jpg" alt=".">
                    </div>
                    <!-- Konten Kartu -->
                    <div class="p-4 flex flex-col gap-4">
                        <div>
                            <h1 class="text-lg font-semibold">Hello world</h1>
                            <p class="text-slate-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="flex flex-row justify-around items-center">
                            <h1 class="font-bold">Rp.10.000</h1>
                            <button class="px-6 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Kartu -->
                <div class="inline-flex xxs:w-48 xxs:scale-75 xs:w-56 xs:scale-75 md:w-60 md:scale-90 w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-105 transition-all ease-in-out duration-200">
                    <!-- Gambar -->
                    <div class="rounded-lg xxs:hidden xs:hidden">
                        <img class="object-cover rounded-t-lg shadow-lg w-full h-32" src="img/illustration/2842680.jpg" alt=".">
                    </div>
                    <!-- Konten Kartu -->
                    <div class="p-4 flex flex-col gap-4">
                        <div>
                            <h1 class="text-lg font-semibold">Hello world</h1>
                            <p class="text-slate-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="flex flex-row justify-around items-center">
                            <h1 class="font-bold">Rp.10.000</h1>
                            <button class="px-6 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Kartu -->
                <div class="inline-flex xxs:w-48 xxs:scale-75 xs:w-56 xs:scale-75 md:w-60 md:scale-90 w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-105 transition-all ease-in-out duration-200">
                    <!-- Gambar -->
                    <div class="rounded-lg xxs:hidden xs:hidden">
                        <img class="object-cover rounded-t-lg shadow-lg w-full h-32" src="img/illustration/2842680.jpg" alt=".">
                    </div>
                    <!-- Konten Kartu -->
                    <div class="p-4 flex flex-col gap-4">
                        <div>
                            <h1 class="text-lg font-semibold">Hello world</h1>
                            <p class="text-slate-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="flex flex-row justify-around items-center">
                            <h1 class="font-bold">Rp.10.000</h1>
                            <button class="px-6 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Kartu -->
                <div class="inline-flex xxs:w-48 xxs:scale-75 xs:w-56 xs:scale-75 md:w-60 md:scale-90 w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-105 transition-all ease-in-out duration-200">
                    <!-- Gambar -->
                    <div class="rounded-lg xxs:hidden xs:hidden">
                        <img class="object-cover rounded-t-lg shadow-lg w-full h-32" src="img/illustration/2842680.jpg" alt=".">
                    </div>
                    <!-- Konten Kartu -->
                    <div class="p-4 flex flex-col gap-4">
                        <div>
                            <h1 class="text-lg font-semibold">Hello world</h1>
                            <p class="text-slate-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="flex flex-row justify-around items-center">
                            <h1 class="font-bold">Rp.10.000</h1>
                            <button class="px-6 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <hr>

    <div class="bg-white flex flex-col justify-evenly items-center border-b-2">
        <div class="p-6">
            <h1 class="text-3xl font-bold">What Client Says :</h1>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-6 px-4">

            <!-- Kartu Testimoni -->
            <div class="inline-flex bg-white h-auto max-w-[90%] md:max-w-[32rem] border-2 border-black rounded-lg shadow-2xl hover:scale-105 hover:shadow-lg transition-all ease-in-out duration-200">
                <!-- Gambar, hilang di layar mobile -->
                <div class="object-cover bg-white flex items-center justify-center border-r-2 border-black rounded-lg hidden md:flex">
                    <img class="object-cover w-44 h-44 bg-white rounded-lg" src="img/illustration/2201_w020_n001_1251a_p30_1251.jpg" alt="">
                </div>

                <!-- Konten -->
                <div class="p-4 flex flex-col gap-4 w-full">
                    <div>
                        <h1 class="font-bold md:text-base text-lg">Nama User</h1>
                        <p class="text-slate-500 md:text-sm text-base">Deskripsi User</p>
                    </div>
                    <div class="flex flex-col gap-6">
                        <p>Lorem ipsum dolor sit</p>
                        <p>Rate</p>
                    </div>
                </div>
            </div>

            <!-- Salinan Kartu Testimoni -->
            <div class="inline-flex bg-white h-auto max-w-[90%] md:max-w-[32rem] border-2 border-black rounded-lg shadow-2xl hover:scale-105 hover:shadow-lg transition-all ease-in-out duration-200">
                <!-- Gambar, hilang di layar mobile -->
                <div class="object-cover bg-white flex items-center justify-center border-r-2 border-black rounded-lg hidden md:flex">
                    <img class="object-cover w-44 h-44 bg-white rounded-lg" src="img/illustration/2201_w020_n001_1251a_p30_1251.jpg" alt="">
                </div>

                <!-- Konten -->
                <div class="p-4 flex flex-col gap-4 w-full">
                    <div>
                        <h1 class="font-bold md:text-base text-lg">Nama User</h1>
                        <p class="text-slate-500 md:text-sm text-base">Deskripsi User</p>
                    </div>
                    <div class="flex flex-col gap-6">
                        <p>Lorem ipsum dolor sit</p>
                        <p>Rate</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <hr>

    <div class="bg-white flex flex-col border-b-2">
    <!-- Header -->
    <div class="flex flex-row w-full justify-between p-6 bg-white items-center shadow-xl border-2">
        <div>
            <h1 class="text-2xl font-bold xs:text-xs">Analisa</h1>
        </div>

        <div class="flex flex-row bg-white rounded-xl border-2 border-black">
            <a class="bg-white flex px-6 py-2 xs:py-1 xs:px-3 xs:text-xs hover:bg-black hover:text-white transition-all duration-200 ease-in-out rounded-l-lg border-r-2 border-black" href="#">Masuk</a>
            <a class="bg-white flex px-6 py-2 xs:py-1 xs:px-3 xs:text-xs hover:bg-black hover:text-white transition-all duration-200 ease-in-out" href="#">Pending</a>
            <a class="bg-white flex px-6 py-2 xs:py-1 xs:px-3 xs:text-xs hover:bg-black hover:text-white transition-all duration-200 ease-in-out rounded-r-lg border-l-2 border-black" href="#">Selesai</a>
        </div>

        <div>
            <h1 class="text-xs">More ></h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white flex-grow flex flex-col items-center p-4 overflow-auto">
        <div class="bg-white h-full w-full max-w-screen-lg flex flex-col md:flex-row gap-4 overflow-auto">

            <!-- Kolom Kiri -->
            <div class="flex w-full md:w-1/3 bg-white border-2 border-r-0 flex-col p-4 overflow-auto">

                <!-- Kartu Konten -->
                <div class="flex flex-col md:flex-row bg-white shadow-lg hover:shadow-sm justify-between p-1 hover:scale-105 transition-all ease-in-out duration-200 border-2 mb-4 w-full"> <!-- Ubah p-2 menjadi p-1 -->
                    <div class="flex items-center gap-1"> <!-- Ubah gap-2 menjadi gap-1 -->
                        <h1 class="text-lg md:text-xs font-bold">1</h1> <!-- Ubah text-xl menjadi text-lg -->
                        <div class="rounded-full shadow-xl">
                            <img class="w-10 h-10 md:w-12 md:h-12 rounded-full" src="img/illustration/2842680.jpg" alt="."> <!-- Ubah w-12 h-12 menjadi w-10 h-10 -->
                        </div>
                        <div>
                            <h1 class="text-xs md:text-xs">Nama</h1> <!-- Tetap text-xs untuk semua ukuran -->
                            <p class="text-xs">Deskripsi</p> <!-- Tetap text-xs untuk semua ukuran -->
                        </div>
                    </div>

                    <div class="bg-white flex justify-center items-center mt-1 md:mt-0"> <!-- Ubah mt-2 menjadi mt-1 -->
                        <h1 class="text-xs">Harga</h1> <!-- Ubah ukuran font -->
                    </div>
                </div>

            </div>

            <!-- Kolom Kanan -->
            <div class="flex w-full md:w-2/3 bg-white border-2 border-l-0 p-4 overflow-auto">
                <!-- Konten bisa ditambahkan di sini -->
            </div>

        </div>
    </div>
</div>







    <hr>

    <div class="flex bg-white flex-col">
        <!-- Bagian Judul -->
        <div class="bg-white flex justify-center py-4">
            <h1 class="text-2xl font-bold underline underline-offset-4">Contact</h1>
        </div>

        <!-- Bagian Konten Utama -->
        <div class="bg-white mx-auto max-w-4xl flex flex-col md:flex-row items-center justify-center p-4">
            <!-- Kolom Kontak -->
            <div class="bg-white md:w-1/2 w-full max-w-md h-auto flex justify-center items-center">
                <div class="bg-black flex w-full h-1/2 p-6 flex-col justify-center items-center gap-6 rounded-lg">

                    <!-- Ikon Media Sosial -->
                    <div class="bg-white w-full h-[70%] p-4 flex flex-row justify-evenly items-center rounded-lg hover:rounded-xl border-2 border-transparent hover:border-white hover:bg-black transition-all duration-200 ease-in-out group">
                        <a title="Facebook" target="_blank" href="https://web.facebook.com/profile.php?id=100066593173431">
                            <i class="group-hover:text-white fa-brands fa-2xl fa-facebook hover:text-blue-500 drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="100"></i>
                        </a>
                        <a title="Instagram" target="_blank" href="https://www.instagram.com/rizky_maulana_.31">
                            <i class="group-hover:text-white fa-brands fa-2xl fa-instagram hover:text-red-400 drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="150"></i>
                        </a>
                        <a title="Tiktok" target="_blank" href="#">
                            <i class="group-hover:text-white fa-brands fa-2xl fa-tiktok hover:shadow-lg drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="200"></i>
                        </a>
                        <a title="Whatsapp" target="_blank" href="https://wa.me/+6281287217886">
                            <i class="group-hover:text-white fa-brands fa-2xl fa-whatsapp hover:text-green-500 drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="250"></i>
                        </a>
                    </div>

                    <!-- Tombol Hubungi -->
                    <div class="bg-white w-full h-[50%] p-4 flex justify-center items-center border-2 border-transparent rounded-lg hover:border-white hover:bg-black transition-all duration-200 ease-in-out group">
                        <h1 class="text-4xl font-bebas group-hover:text-white group-hover:scale-110 transition-all ease-in-out duration-200">Hubungi Segera</h1>
                    </div>
                </div>
            </div>

            <!-- Kolom Pesan -->
            <div class="bg-white md:w-1/2 w-full max-w-md h-auto flex items-center justify-center mt-4 md:mt-0">
                <div class="w-[90%] h-1/2 bg-white rounded-lg p-6 border-2 border-black hover:bg-black transition-all ease-in-out duration-200 group">
                    <span>
                        <i class="fa-solid fa-quote-left fa-2xl xs:fa-xs group-hover:text-white"></i>
                    </span>
                    <h1 class="text-black text-4xl xs:text-xs md:text-[24px] font-bona group-hover:text-white transition-all ease-in-out duration-200">
                        Kami sangat berterima kasih atas kepercayaan Anda terhadap jasa pengembangan website kami.
                    </h1>
                </div>
            </div>
        </div>
    </div>




    <div class="border-3"></div>

    <script>
        document.getElementById("menuToggle").addEventListener("click", function() {
            const sidebar = document.getElementById("mobileSidebar");
            sidebar.classList.toggle("-translate-x-full");
        });

        document.getElementById('logoutBtn').addEventListener('click', () => {
            fetch('php/delete/logout.php', {
                    method: 'POST'
                })
                .then(response => {
                    if (response.ok) {
                        // Redirect atau lakukan tindakan lain setelah logout
                        window.location.href = 'php/login.php'; // Ganti dengan halaman yang sesuai
                    } else {
                        console.error('Logout failed');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        })
        document.getElementById('start').scrollIntoView({
            behavior: 'smooth'
        });
        window.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('navbar');
            const userIcon = document.getElementById('userIcon');
            const userDropdown = document.getElementById('userDropdown');

            userIcon.addEventListener('click', (e) => {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
                positionDropdown();
            });

            document.addEventListener('click', (e) => {
                if (!userDropdown.contains(e.target) && e.target !== userIcon) {
                    userDropdown.classList.add('hidden');
                }
            });

            function positionDropdown() {
                const rect = userIcon.getBoundingClientRect();
                userDropdown.style.top = `${rect.bottom + 10}px`;
                // userDropdown.style.left = `${rect.left - 200}px`;
            }

            window.addEventListener('resize', positionDropdown);
        });
    </script>
</body>

</html>