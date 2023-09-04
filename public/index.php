<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Task</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-[#F7F8F9]">
    <section class="flex items-center justify-center w-screen h-screen">
        <div class="w-[500px] relative flex items-center justify-center bg-white shadow-md p-10 rounded-lg">
            <div class="absolute -top-7 right-0 left-0 mx-auto w-16 h-14 flex justify-center">
                <div class="bg-green-500 rounded-lg p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path
                            d="M18.2826 12.4325C23.7569 14.3646 29.6607 14.2573 35.0814 12.1641C35.135 9.96364 34.5447 7.76316 33.5249 5.77735L32.9882 4.70395C32.8272 4.75762 32.6125 4.86497 32.5052 4.97231C27.5675 7.3338 21.9858 7.65582 16.7798 5.77736C13.1302 4.48927 9.15859 4.81129 5.72369 6.52874L4.65028 7.06545C4.70395 7.22646 4.81131 7.44113 4.91865 7.54847C5.56269 8.9439 6.09939 10.4467 6.47508 12.0031C10.232 10.9297 14.4183 11.037 18.2826 12.4325Z"
                            fill="white" /> <path
                            d="M4.91884 28.5872L6.09958 27.9432C8.49205 26.747 11.1314 26.1679 13.7502 26.2443C15.3611 26.2912 16.9643 26.5862 18.4974 27.1381C18.9968 27.3153 19.4979 27.478 20.0002 27.6263V33.3471C17.9222 32.9608 15.8186 32.9056 13.7502 33.1719C11.6045 33.4481 9.49685 34.0703 7.49501 35.0277C7.38767 35.135 7.17298 35.2424 7.01197 35.296L6.47527 34.2226C5.56287 32.4515 5.02618 30.5194 4.91884 28.5872Z"
                            fill="white" /> <path
                            d="M5.56234 23.6496C10.1243 21.7711 15.223 21.6101 19.8923 23.2739C24.186 24.7766 28.7479 25.045 33.0416 24.0789C32.9879 21.6638 33.3099 19.3023 34.1686 16.9408C28.5333 18.6045 22.4685 18.4435 16.8331 16.4577C13.6129 15.277 10.0706 15.277 6.85043 16.3504C6.9041 18.6582 6.47475 21.0197 5.6697 23.3275C5.6697 23.3275 5.61601 23.4886 5.56234 23.6496Z"
                            fill="white" />
                    </svg>
                </div>
            </div>
            <div class="">
                <h2 class="text-3xl text-[#2A3342] font-bold">Join our community</h2>
                <p class="text-[#556987] text-lg text-center mt-2 mb-4">Start your journey with our product</p>
                <form action="./index.html" method="post">
                    <label class="block text-[#333F51] mt-2" for="name">Name</label>
                    <input class="block px-4 py-2 border border-[#D5DAE1] rounded-md w-full focus:outline-none mt-2" type="text" name="name" id="name" placeholder="Name">
                    <label class="block text-[#333F51] mt-2" for="user">Username</label>
                    <input class="block px-4 py-2 border border-[#D5DAE1] rounded-md w-full focus:outline-none mt-2" type="text" name="user" id="user" placeholder="user@gmail.com">
                    <label class="block text-[#333F51] mt-2" for="password">Password</label>
                    <input class="block px-4 py-2 border border-[#D5DAE1] rounded-md w-full focus:outline-none mt-2" type="password" name="password" id="password" placeholder="Password">
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white mt-5 rounded-md w-full">Sign Up</button>
                </form>
                <p class="text-[#333F51] text-center mt-3">Don't have an account? <a href="./sign_up.php" class="text-green-500">Sign In</a></p>
            </div>
        </div>
    </section>
</body>

</html>