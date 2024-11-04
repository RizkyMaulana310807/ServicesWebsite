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
    <div id="userDropdown" class="hidden absolute bg-white border border-gray-200 rounded-lg shadow-lg p-4 w-48 z-50">
        <a href="#" class="block py-2 hover:bg-gray-100">Profile</a>
        <a href="#" class="block py-2 hover:bg-gray-100">Settings</a>
        <a href="#" class="block py-2 hover:bg-gray-100">Logout</a>
    </div>
    <!-- section pertama -->
    <div class="h-screen border-b-2" id="start">
        <!-- navbar -->
        <nav id="navbar" class="bg-white border-t-2 border-black flex flex-row justify-around shadow-lg rounded-b-lg fixed top-0 w-full z-10 transition-all duration-300">
            <!-- featured -->
            <div class="flex flex-row gap-6 items-center">
                <a href="#start" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200 drop-shadow-lg">Home</a>
                <a href="#" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200 drop-shadow-lg">Services</a>
                <a href="#" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200 drop-shadow-lg">Testimonial</a>
                <a href="#" class="hover:text-slate-500 hover:underline transition-all ease-in-out duration-200 drop-shadow-lg">About</a>
            </div>
            <!-- Brand / Logo -->
            <div class="flex flex-row items-center gap-2 h-12">
                <img class="w-9 h-9 object-cover rounded-full border-2 border-transparent hover:border-black duration-200 transition-all ease-in-out" src="img/logo/logo.png" alt="Logo-brand.png">
                <h1 class="text-black">CodeX Solution</h1>
            </div>
            <!-- User Interactive -->
            <div class="flex flex-row gap-4 items-center">
                <i class="fa-solid border-2 border-transparent hover:border-black transition-all duration-200 ease-in-out rounded-full fa-magnifying-glass fa-md p-2"></i>
                <i class="fa-regular border-2 border-transparent hover:border-black transition-all duration-200 ease-in-out rounded-full fa-bell fa-md p-2"></i>
                <i id="userIcon" class="fa-regular border-2 border-transparent hover:border-black transition-all duration-200 ease-in-out fa-user fa-md p-2 rounded-full cursor-pointer"></i>
            </div>
        </nav>

        <div class="w-full h-full flex flex-row mt-16">
            <div class="w-1/2 h-full flex flex-col justify-evenly">
                <div class="px-8">
                    <h1 class="text-9xl font-bebas drop-shadow-xl hover:drop-shadow-md">Discover your it solution's</h1>
                    <p class="text-md font-['Roboto'] text-slate-600">Temukan solusi it anda. kami menawarkan jasa di bidang it yang mungkin anda sedang membutuhkanya!</p>
                </div>
                <div class="flex flex-row gap-6 justify-center">
                    <button class="px-9 py-3 text-lg border-2 border-black rounded-lg hover:bg-black hover:text-white shadow-xl hover:shadow-lg hover:scale-110 transition-all ease-in-out duration-300">Developer</button>
                    <button class="px-9 py-3 text-lg border-2 border-black rounded-lg hover:bg-black hover:text-white shadow-xl hover:shadow-lg hover:scale-110 transition-all ease-in-out duration-300">IT Solutions</button>
                </div>
                <div class="flex flex-row gap-9 justify-center">
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
            <div class="w-1/2 h-full flex items-center justify-center">
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
                    <div class="bg-white inline-flex shadow-2xl hover:shadow-lg flex-col p-4 rounded-lg border-2 border-black absolute top-4 left-4 hover:scale-110 transition-transform duration-200 ease-in-out transform group-hover:-translate-x-36 hover:z-50">
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

    <div class="h-screen bg-white border-b-2">
        <div class="w-full h-full flex justify-center">
            <div class="h-[85%] w-full bg-white flex m-auto items-center justify-evenly">


                <!-- kartu -->
                <div class="inline-flex h-[85%] w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-110 transition-all ease-in-out duration-200">

                    <div class="rounded-lg">
                        <img class="object-cover rounded-t-lg shadow-lg" src="img/illustration/2842680.jpg" alt=".">
                    </div>

                    <div class="p-4 flex flex-col gap-4">

                        <div>
                            <h1>Hello world</h1>
                            <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <div class="flex flex-row justify-around items-center">
                            <h1>Rp.10.000</h1>
                            <button class="px-8 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>

                    </div>

                </div>


                <!-- kartu -->
                <div class="inline-flex h-[85%] w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-110 transition-all ease-in-out duration-200">

                    <div class="rounded-lg">
                        <img class="object-cover rounded-t-lg shadow-lg" src="img/illustration/2842680.jpg" alt=".">
                    </div>

                    <div class="p-4 flex flex-col gap-4">

                        <div>
                            <h1>Hello world</h1>
                            <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <div class="flex flex-row justify-around items-center">
                            <h1>Rp.10.000</h1>
                            <button class="px-8 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>

                    </div>

                </div>


                <!-- kartu -->
                <div class="inline-flex h-[85%] w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-110 transition-all ease-in-out duration-200">

                    <div class="rounded-lg">
                        <img class="object-cover rounded-t-lg shadow-lg" src="img/illustration/2842680.jpg" alt=".">
                    </div>

                    <div class="p-4 flex flex-col gap-4">

                        <div>
                            <h1>Hello world</h1>
                            <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <div class="flex flex-row justify-around items-center">
                            <h1>Rp.10.000</h1>
                            <button class="px-8 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>

                    </div>

                </div>

                <!-- kartu -->
                <div class="inline-flex h-[85%] w-64 bg-white flex-col shadow-2xl gap-4 rounded-lg border-2 border-transparent hover:border-black hover:scale-110 transition-all ease-in-out duration-200">

                    <div class="rounded-lg">
                        <img class="object-cover rounded-t-lg shadow-lg" src="img/illustration/2842680.jpg" alt=".">
                    </div>

                    <div class="p-4 flex flex-col gap-4">

                        <div>
                            <h1>Hello world</h1>
                            <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <div class="flex flex-row justify-around items-center">
                            <h1>Rp.10.000</h1>
                            <button class="px-8 py-2 border-2 border-black rounded-lg hover:scale-110 hover:bg-black hover:text-white transition-all ease-in-out duration-200">Detail</button>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>

    <hr>

    <div class="h-screen bg-white flex flex-col justify-evenly items-center border-b-2">
        <div class="p-6">
            <h1 class="text-3xl font-bold">What Client Says : </h1>
        </div>

        <div class="flex h-full w-full justify-center items-center gap-6">
            <div class="inline-flex bg-white h-[35%] w-[32rem] border-2 border-black rounded-lg shadow-2xl hover:scale-110 hover:shadow-lg transition-all ease-in-out duration-200">

                <div class="object-cover bg-white flex items-center justify-center border-r-2 border-black rounded-lg">
                    <img class="object-cover w-44 h-44 bg-white rounded-lg " src="img/illustration/2201_w020_n001_1251a_p30_1251.jpg" alt="">
                </div>

                <div class="p-4 flex flex-col gap-4">

                    <div>
                        <h1 class="font-bold">Nama User</h1>
                        <p class="text-slate-500">Deskripsi User</p>
                    </div>

                    <div class="flex flex-col gap-6">
                        <p>Lorem ipsum dolor sit</p>
                        <p>Rate</p>
                    </div>

                </div>

            </div>

            <div class="inline-flex bg-white h-[35%] w-[32rem] border-2 border-black rounded-lg shadow-2xl hover:scale-110 hover:shadow-lg transition-all ease-in-out duration-200">

                <div class="object-cover bg-white flex items-center justify-center border-r-2 border-black rounded-lg">
                    <img class="object-cover w-44 h-44 bg-white rounded-lg " src="img/illustration/2201_w020_n001_1251a_p30_1251.jpg" alt="">
                </div>

                <div class="p-4 flex flex-col gap-4">

                    <div>
                        <h1 class="font-bold">Nama User</h1>
                        <p class="text-slate-500">Deskripsi User</p>
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

    <div class="h-screen bg-white flex flex-col border-b-2">
        <div class="flex flex-row w-full justify-between p-6 bg-white items-center shadow-xl border-2">
            <div class="">
                <h1 class="text-2xl font-bold">Analisa</h1>
            </div>

            <div>

                <div class="flex flex-row bg-white rounded-xl border-2 border-black">
                    <a class="bg-white flex px-6 py-2 hover:bg-black hover:text-white transition-all duration-200 ease-in-out rounded-l-lg border-r-2 border-black rounded-r-lg" href="#">Masuk</a>
                    <a class="bg-white flex px-6 py-2 hover:bg-black hover:text-white transition-all duration-200 ease-in-out rounded-md" href="#">Pending</a>
                    <a class="bg-white flex px-6 py-2 hover:bg-black hover:text-white transition-all duration-200 ease-in-out rounded-r-lg border-l-2 border-black rounded-l-lg" href="#">Selesai</a>
                </div>

            </div>

            <div>
                <h1>More ></h1>
            </div>
        </div>

        <div class="bg-white h-full flex flex-col justify-center items-center">

            <div class="bg-purple-500 h-[85%] w-[95%] flex flex-row">

                <div class="flex w-1/2 h-full bg-white border-2 border-r-0 flex-col">

                    <div class="flex h-[20%] border-2 w-full bg-white shadow-lg hover:shadow-sm flex-row justify-between p-4 hover:scale-110 transition-all ease-in-out duration-200">

                        <div class="flex flex-row bg-white justify-center items-center gap-4">

                            <h1 class="text-2xl font-bold">1</h1>

                            <div class="rounded-full shadow-xl">
                                <img class="w-20 h-20 rounded-full" src="img/illustration/2842680.jpg" alt=".">
                            </div>
                            <div>
                                <h1>Nama</h1>
                                <p>Deskripsi</p>
                            </div>
                        </div>

                        <div class="bg-white flex justify-center items-center">
                            <h1>Harga</h1>
                        </div>

                    </div>

                </div>

                <div class="flex w-1/2 h-full bg-white border-2 border-l-0">

                </div>

            </div>

        </div>

    </div>

    <hr>

    <div class="flex bg-black h-screen flex-col">

        <div class="bg-white flex justify-center">

            <h1 class="text-2xl font-bold underline underline-offset-4">Contact</h1>

        </div>

        <div class="bg-blue-500 h-full w-full flex flex-row">

            <div class="bg-white w-1/2 h-full flex justify-center items-center">

                <div class="bg-black flex h-1/2 w-1/2 p-6 flex-col justify-center items-center gap-6 rounded-lg">
                    <div class="bg-white w-full h-[70%] p-4 flex flex-row justify-evenly items-center rounded-lg hover:rounded-xl border-2 border-transparent hover:border-white hover:bg-black transition-all duration-200 ease-in-out group">
                        <a title="Facebook" target="_blank" href="https://web.facebook.com/profile.php?id=100066593173431"><i class="group-hover:text-white fa-brands fa-2xl fa-facebook hover:text-blue-500 drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="100"></i></a>
                        <a title="Instagram" target="_blank" href="https://www.instagram.com/rizky_maulana_.31"><i class="group-hover:text-white fa-brands fa-2xl fa-instagram hover:text-red-400 drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="150"></i></a>
                        <a title="Tiktok" target="_blank" href="#"><i class="group-hover:text-white fa-brands fa-2xl fa-tiktok hover:shadow-lg drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="200"></i></a>
                        <a title="Whastapp" target="_blank" href="https://wa.me/+6281287217886"><i class="group-hover:text-white fa-brands fa-2xl fa-whatsapp hover:text-green-500 drop-shadow-lg hover:scale-150 transition-all" data-aos="fade-up" data-aos-delay="250"></i></a>
                    </div>

                    <div class="bg-white w-full h-[50%] p-4 flex justify-center items-center border-2 border-transparent rounded-lg hover:border-white hover:bg-black transition-all duration-200 ease-in-out group">
                        <h1 class="text-4xl font-bebas group-hover:text-white group-hover:scale-110 transition-all ease-in-out duration-200">Hubungi Segera</h1>
                    </div>
                </div>

            </div>

            <div class="bg-white w-1/2 h-full flex items-center justify-center">
                <div class="w-[90%] h-1/2 bg-white rounded-lg p-6 border-2 border-black hover:bg-black transition-all ease-in-out duration-200 group">
                    <span class="">
                        <i class="fa-solid fa-quote-left fa-2xl group-hover:text-white"></i>
                    </span>
                    <h1 class="text-black text-4xl font-bona group-hover:text-white transition-all ease-in-out duration-200">Kami sangat berterima kasih atas kepercayaan Anda terhadap jasa pengembangan website kami.</h1>
                </div>
            </div>

        </div>

    </div>


    <div class="border-3"></div>

    <script>
        document.getElementById('start').scrollIntoView({behavior: 'smooth'});
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
                userDropdown.style.left = `${rect.left}px`;
            }

            window.addEventListener('resize', positionDropdown);
        });
    </script>
</body>

</html>