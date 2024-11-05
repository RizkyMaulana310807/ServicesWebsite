<?php
session_start();
$cookie_name = "username";

// Memeriksa apakah cookie telah diset
if (isset($_COOKIE[$cookie_name])) {
    header("Location: ../index.php");
    // echo "Cookie '$cookie_name' ditemukan dengan nilai: " . $_COOKIE[$cookie_name];
} else {
    // echo "Cookie '$cookie_name' tidak ditemukan.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/output.css">
</head>

<body>
    <!-- screen -->
    <div class="h-screen flex bg-white justify-center items-center flex-col">
        <!-- login modal -->
        <div class="bg-white h-[85%] w-[90%] flex rounded-2xl shadow-2xl">
            <!-- slider -->
            <div id="slider" class="z-10 w-[38.5rem] h-[85%] absolute flex border-2 border-black bg-white transform transition-all duration-1000 ease-in-out">
                <!-- container in slider -->
                <div class="flex h-full w-full flex-col bg-white rounded-2xl">
                    <div class="h-1/2 flex justify-center items-center">
                        <h1 id="alrhaveacc">Already have an account?</h1>
                    </div>
                    <div class="w-64 h-w-64 m-auto">
                        <img id="imageSlider" src="../img/illustration/developer_male.jpg" alt=".">
                    </div>
                    <div class="h-1/2 m-auto">
                        <button id="btnChange" onclick="changeSlider()" class="bg-white px-9 py-2 border-2 border-black transform hover:scale-110 hover:bg-black hover:text-white shadow-lg rounded-full transition-all duration-200 ease-in-out">Login</button>
                    </div>
                </div>
                <!-- end container slider -->

            </div>
            <!-- end slider -->
            <!-- login card -->
            <div class="w-1/2 flex bg-blue-500 rounded-l-2xl">
                <!-- container loin card -->
                <div class="flex h-full w-full bg-black flex-col justify-center items-center rounded-l-2xl">
                    <div class="flex bg-black h-[85%] w-[90%] flex-col justify-evenly items-center">
                        <!-- logo -->
                        <div class="flex w-16 h-w-16 rounded-lg border-4 border-spacing-8 border-transparent hover:border-white transition-all duration-200 ease-in-out">
                            <img class="object-cover rounded-lg" src="../img/logo/logo.png" alt="">
                        </div>
                        <!-- form container -->
                        <div class="flex gap-6 flex-col">
                            <form action="read/login.php" method="POST" class="flex flex-col gap-9">
                                <!-- input container -->
                                <div>
                                    <div class="mb-6">
                                        <label for="logInName" class="block mb-2 text-sm font-medium text-white ">Username</label>
                                        <input type="text" id="logInName" name="logInUsername" class="bg-green-50 border text-sm rounded-lg block w-full px-4 py-2" placeholder="username">
                                        <!-- <p class="hidden mt-2 text-sm"><span class="font-medium text-white">Well done!</span> Some success message.</p> -->
                                    </div>
                                    <div>
                                        <label for="logInPass" class="block mb-2 text-sm font-medium text-white ">Password</label>
                                        <input type="text" id="logInPass" name="logInPass" class="bg-green-50 border text-sm rounded-lg block w-full px-4 py-2" placeholder="password">
                                        <!-- <p class="hidden mt-2 text-sm"><span class="font-medium text-white">Well done!</span> Some success message.</p> -->
                                    </div>
                                    <!-- <div class="flex items-start mt-5"> -->
                                        <!-- <div class="flex items-center h-5"> -->
                                            <!-- <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" /> -->
                                        <!-- </div> -->
                                        <!-- <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label> -->
                                    <!-- </div> -->
                                </div>
                                <div id="result" class="text-red-500">

                                </div>
                                <div class="flex justify-center">
                                    <input class="bg-black px-9 py-2 rounded-md border-2 border-white  transform hover:scale-110 text-white hover:bg-white hover:text-black transition-all duration-200 ease-in-out" type="submit" value="LogIn">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!-- end login card -->
            <!-- sign in card -->
            <div class="w-1/2 flex bg-black justify-center items-center rounded-r-2xl">
                <div class="flex flex-col gap-6">
                    <form id="signInForm" method="POST" action="create/signIn.php">
                        <div class="flex flex-col gap-9">
                            <div class="flex justify-center text-white">
                                Sign In
                            </div>
                            <div id="containerFormValidate" class="flex flex-col gap-4">
                                <div id="containerName" class="bg-white border-2 border-transparent flex px-3 rounded-md focus-within:ring-4 focus-within:ring-slate-500 transition-all duration-200 ease-in-out">
                                    <label id="containerLabelName" class="input input-bordered flex items-center gap-2">
                                        Nama
                                        <input oninput="validateInput()" name="namaValue" id="signInName" type="text" class="grow font-normal flex py-2 focus:outline-none" placeholder="Rizky Maulana" />
                                    </label>
                                </div>
                                <p id="errNama" class="text-red-500 hidden"></p>


                                <div id="containerUsername" class="bg-white border-2 border-transparent flex px-3 rounded-md focus-within:ring-4 focus-within:ring-slate-500 transition-all duration-200 ease-in-out">
                                    <label id="containerLabelUser" class="input input-bordered flex items-center gap-2">
                                        Username
                                        <input oninput="validateInput()" name="usernameValue" id="signInUsername" type="text" class="grow font-normal flex py-2 focus:outline-none" placeholder="Rizky127" />
                                    </label>
                                </div>
                                <p id='errUsername' class='text-red-500 hidden'></p>
                                <div id="containerPass" class="bg-white border-2 border-transparent flex px-3 rounded-md focus-within:ring-4 focus-within:ring-slate-500 transition-all duration-200 ease-in-out">
                                    <label id="containerLabelPass" class="input input-bordered flex items-center gap-2">
                                        Password
                                        <input oninput="validateInput()" name="passwordValue" id="signInPassword" type="password" class="grow font-normal flex py-2 focus:outline-none" placeholder="rizky12345" />
                                    </label>
                                </div>
                                <div id="containerConfPass" class="bg-white border-2 border-transparent flex px-3 rounded-md focus-within:ring-4 focus-within:ring-slate-500 transition-all duration-200 ease-in-out">
                                    <label id="labelConfPass" class="input input-bordered flex items-center gap-2">
                                        Password
                                        <input oninput="validateInput()" id="signInPasswordConfirm" type="password" class="grow font-normal flex py-2 focus:outline-none" placeholder="rizky12345" />
                                    </label>
                                </div>
                                <div>
                                    <p id="errorMessage" class="text-red-500 opacity-0 transition-all duration-200 ease-in-out">
                                        error
                                    </p>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div onclick="signIn()" class="flex justify-center bg-black border-2 border-white text-white px-6 py-2 rounded-md transform hover:bg-white hover:scale-110 hover:text-black transition-all duration-200 ease-in-out">
                        <button>Sign In</button>
                    </div>
                </div>
            </div>
            <!-- end sign in card -->
        </div>
        <!-- end login modal  -->
    </div>
    <!-- end screen -->

    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form default

            var formData = new FormData(this); // Mengambil data dari form

            // console.log(formData);

            var xhr = new XMLHttpRequest(); // Membuat objek XMLHttpRequest
            xhr.open('POST', 'read/login.php', true); // Mengatur metode dan URL

            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Jika berhasil, tampilkan respons dari PHP
                    // document.getElementById('result').innerText = xhr.responseText; // Perbaikan di sini
                    // console.log(xhr.responseText);
                    // if (xhr.responseText == "Benar") {
                        window.location.href = "../index.php";
                        // document.getElementById('result').innerText = "Benar";
                        // console.log("Masuk respon pertama");
                    // } else if (xhr.responseText == "Salah") {
                        // document.getElementById('result').innerText = "Username atau Password salah!"; // Perbaikan di sini
                        // console.log("Masuk respon kedua");
                    // }


                } else {
                    // Jika terjadi kesalahan
                    document.getElementById('result').innerText = 'Error: ' + xhr.status;
                }
            };

            xhr.send(formData);

        });


        posCheck();

        // Form validation helper functions
        const isEmptyOrWhitespace = (value) => !value || value.trim() === '';
        const containsNumbers = (value) => /\d/.test(value);
        const isValidUsername = (value) => /^[a-zA-Z0-9_]{3,20}$/.test(value);

        // UI helper functions
        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            errorElement.innerText = message;
            errorElement.classList.remove('hidden');

            // Add red border to input container
            const containerId = 'container' + elementId.charAt(0).toUpperCase() + elementId.slice(1).replace('err', '');
            const containerElement = document.getElementById(containerId);
            if (containerElement) {
                containerElement.classList.remove('border-transparent');
                containerElement.classList.add('border-red-500');
            }
        }

        function hideError(elementId) {
            const errorElement = document.getElementById(elementId);
            errorElement.classList.add('hidden');
            errorElement.innerText = '';

            // Remove red border from input container
            const containerId = 'container' + elementId.charAt(0).toUpperCase() + elementId.slice(1).replace('err', '');
            const containerElement = document.getElementById(containerId);
            if (containerElement) {
                containerElement.classList.add('border-transparent');
                containerElement.classList.remove('border-red-500');
            }
        }

        // Reset all errors
        function resetErrors() {
            const errorIds = ['errNama', 'errUsername', 'errorMessage'];
            errorIds.forEach(id => hideError(id));

            // Reset password containers
            const containerPass = document.getElementById('containerPass');
            const containerConfPass = document.getElementById('containerConfPass');

            if (containerPass && containerConfPass) {
                containerPass.classList.remove('border-red-500');
                containerPass.classList.add('border-transparent');
                containerConfPass.classList.remove('border-red-500');
                containerConfPass.classList.add('border-transparent');
            }
        }

        // Main validation function
        function validateForm(isRealTime = false) {
            const formData = {
                name: document.getElementById('signInName').value,
                username: document.getElementById('signInUsername').value,
                password: document.getElementById('signInPassword').value,
                confirmPassword: document.getElementById('signInPasswordConfirm').value
            };

            const validationResults = {
                isValid: true,
                errors: {}
            };

            // Reset all previous errors
            resetErrors();

            // Name validation
            if (isEmptyOrWhitespace(formData.name)) {
                validationResults.errors.name = 'Nama tidak boleh kosong';
                validationResults.isValid = false;
            } else if (containsNumbers(formData.name)) {
                validationResults.errors.name = 'Nama tidak boleh mengandung angka';
                validationResults.isValid = false;
            }

            // Username validation
            if (isEmptyOrWhitespace(formData.username)) {
                validationResults.errors.username = 'Username tidak boleh kosong';
                validationResults.isValid = false;
            } else if (!isValidUsername(formData.username)) {
                validationResults.errors.username = 'Username harus 3-20 karakter dan hanya boleh menggunakan huruf, angka, dan underscore';
                validationResults.isValid = false;
            }

            // Password validation (only show password errors on form submission, not real-time)
            if (!isRealTime) {
                // Basic password validation - just check if it's not empty
                if (isEmptyOrWhitespace(formData.password)) {
                    validationResults.errors.password = 'Password tidak boleh kosong';
                    validationResults.isValid = false;
                }

                // Password confirmation validation - check if passwords match
                if (isEmptyOrWhitespace(formData.confirmPassword)) {
                    validationResults.errors.confirmPassword = 'Konfirmasi password tidak boleh kosong';
                    validationResults.isValid = false;
                } else if (formData.password !== formData.confirmPassword) {
                    validationResults.errors.confirmPassword = 'Password tidak sama';
                    validationResults.isValid = false;
                }
            }

            // Display errors in UI
            if (validationResults.errors.name) {
                showError('errNama', validationResults.errors.name);
            }

            if (validationResults.errors.username) {
                showError('errUsername', validationResults.errors.username);
            }

            if (validationResults.errors.password || validationResults.errors.confirmPassword) {
                const passwordError = validationResults.errors.password || validationResults.errors.confirmPassword;
                showError('errorMessage', passwordError);

                // Add red border to password containers only if there's an error
                if (passwordError) {
                    document.getElementById('containerPass').classList.remove('border-transparent');
                    document.getElementById('containerPass').classList.add('border-red-500');
                    document.getElementById('containerConfPass').classList.remove('border-transparent');
                    document.getElementById('containerConfPass').classList.add('border-red-500');
                }
            }

            // Real-time password matching check
            if (!isRealTime && formData.password && formData.confirmPassword) {
                const containerPass = document.getElementById('containerPass');
                const containerConfPass = document.getElementById('containerConfPass');
                const errorMessage = document.getElementById('errorMessage');

                if (formData.password === formData.confirmPassword) {
                    // Passwords match - remove error styling
                    containerPass.classList.remove('border-red-500');
                    containerConfPass.classList.remove('border-red-500');
                    containerPass.classList.add('border-transparent');
                    containerConfPass.classList.add('border-transparent');
                    errorMessage.classList.add('opacity-0');
                }
            }

            return validationResults;
        }

        // Function to handle sign-in button click
        function signIn() {
            const validationResults = validateForm(false); // false means it's not real-time validation

            if (validationResults.isValid) {
                console.log('Form is valid! Ready to submit.');
                // You can submit the form here
                document.getElementById('signInForm').submit();
            } else {
                console.log('Form validation failed. Please check the errors above.');
            }
        }

        // Real-time validation function
        function validateInput() {
            validateForm(true); // true means it's real-time validation
        }

        function posCheck() {
            console.log("Mengecek ...");
            if (localStorage.getItem('position') == 'SignIn') {
                // changeSlider();
                document.getElementById('slider').classList.add('translate-x-[38.4rem]');
                document.getElementById('alrhaveacc').innerText = "Haven't have an account?";
                document.getElementById('btnChange').innerText = "Sign In";
                document.getElementById('imageSlider').setAttribute('src', '../img/illustration/developer_male.jpg');
                localStorage.setItem("position", "SignIn");
                console.log(localStorage.getItem('position'))
            } else if (localStorage.getItem('position') == 'LogIn') {
                // changeSlider();
                document.getElementById('slider').classList.remove('translate-x-[38.4rem]');
                document.getElementById('alrhaveacc').innerText = "Already have an account?";
                document.getElementById('btnChange').innerText = "Log In";
                localStorage.setItem("position", "LogIn");
                document.getElementById('imageSlider').setAttribute('src', '../img/illustration/digital_artist_male.jpg');
                console.log(localStorage.getItem('position'))
            } else {
                console.log("Tidak ada yang di temukan" + localStorage.getItem('position'));
                localStorage.clear();
            }
        }

        function changeSlider() {
            if (document.getElementById('slider').classList.contains('translate-x-[38.4rem]')) {
                document.getElementById('slider').classList.remove('translate-x-[38.4rem]');
                document.getElementById('slider').classList.remove('rounded-r-2xl');
                document.getElementById('slider').classList.add('rounded-l-2xl');
                document.getElementById('alrhaveacc').innerText = "Already have an account?";
                document.getElementById('btnChange').innerText = "Log In";
                document.getElementById('imageSlider').setAttribute('src', '../img/illustration/developer_male.jpg');
                localStorage.setItem("position", "LogIn");
                posCheck();
            } else {
                document.getElementById('slider').classList.remove('rounded-l-2xl');
                document.getElementById('slider').classList.add('rounded-r-2xl');
                document.getElementById('slider').classList.add('translate-x-[38.4rem]');
                document.getElementById('alrhaveacc').innerText = "Haven't have an account?";
                document.getElementById('btnChange').innerText = "Sign In";
                document.getElementById('imageSlider').setAttribute('src', '../img/illustration/digital_artist_male.jpg');
                localStorage.setItem("position", "SignIn");
                posCheck();
            }
        }
    </script>

</body>

</html>