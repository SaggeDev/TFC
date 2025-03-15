<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trique- Login</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        /* Add padding-top to ensure content is not hidden behind the sticky navbar */
        body {
            padding-top: 65px;
            /* Adjust this value to the height of your navbar */
        }
    </style>
</head>

<body>
    <div class="full-page-bg flex flex-col items-center justify-center text-gray-900 dark:text-white py-20">

        <!-- Navbar -->
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b  dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="<?php echo e(route('welcome')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="<?php echo e(asset('storage/card-coin-svgrepo-com (1).png')); ?>" class="h-8" alt="Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Trique</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="<?php echo e(route('welcome')); ?>"
                                class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page"><?php echo e(__('Home')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about')); ?>"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><?php echo e(__('About')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('services')); ?>"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><?php echo e(__('Services')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contactUs')); ?>"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><?php echo e(__('Contact us')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="flex flex-col items-center justify-center min-h-screen  text-gray-900 dark:text-white py-20">
            <h1 class="text-4xl font-semibold mb-5"><?php echo e(__('Log into your account')); ?></h1>
            <p class="text-lg mb"></p>
        </div>
        
        <form class="max-w-sm mx-auto mt-auto p-5 bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:shadow-none"
            action="#" method="POST">
            <div class="mb-5">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo e(__('Email')); ?></label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo e(__('Password')); ?></label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                        required />
                </div>
                <label for="remember"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><?php echo e(__('Remember me')); ?></label>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><?php echo e(__('Submit')); ?></button>
        </form>
    </div>
</div>
</body>

</html>
<style>
    /* Ensure body takes full viewport height, minus navbar */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    /* Background container */
    .full-page-bg {
        position: absolute;
        top: 65px; /* Adjust to match navbar height */
        left: 0;
        width: 100%;
        height: calc(100% - 65px); /* Fill the rest of the screen */
        background-color: #1E3A8A; /* Equivalent to bg-blue-900 */
    }
</style>
<?php /**PATH C:\xampp\htdocs\TFC\trique\resources\views/login.blade.php ENDPATH**/ ?>