<?php 
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
<style>
@keyframes gradientAnimation {
    0% {
        background: linear-gradient(45deg, #4d9af3, #ff9900, #4adb4a, #3399ff, #cc66ff);
        background-size: 600% 100%;
        background-position: 0% 100%;
    }
    100% {
        background: linear-gradient(45deg, #cc66ff, #3399ff, #5ce25c, #ff9900);
        background-size: 600% 100%;
        background-position: 100% 0%;
    }
}

.bg-gradient-animation {
    animation: gradientAnimation 10s linear infinite;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<script src="https://cdn.tailwindcss.com"></script>
<?php include 'Header.php';?>
<section>
    <div class="flex flex-row">
        <div class="w-1/4">
            <?php include('Sidebar.php');?>
        </div>
        <div class="w-2/3">

        <!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="flex flex-wrap bg-gray-200  mt-36">
    <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5 mb-4">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-3 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Traffic</h5>
            <span class="font-semibold text-xl text-blueGray-700">334,100</span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-red-500">
                <i class="fas fa-chart-bar"></i>
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 2,99% </span>
            <span class="whitespace-nowrap"> Since last month </span></p>
        </div>
    </div>
    </div>

    <div class=" mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-4 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">New users</h5>
            <span class="font-semibold text-xl text-blueGray-700">2,999</span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-pink-500">
                <i class="fas fa-chart-pie"></i>
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-red-500 mr-2"><i class="fas fa-arrow-down"></i> 4,01%</span>
            <span class="whitespace-nowrap"> Since last week </span></p>
        </div>
    </div>
    </div>

    <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">Sales</h5>
            <span class="font-semibold text-xl text-blueGray-700">901</span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-lightBlue-500">
                <i class="fas fa-users"></i>
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-red-500 mr-2"><i class="fas fa-arrow-down"></i> 1,25% </span>
            <span class="whitespace-nowrap"> Since yesterday </span></p>
        </div>
    </div>
    </div>

    <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">Performance</h5>
            <span class="font-semibold text-xl text-blueGray-700">51.02% </span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-emerald-500">
                <i class="fas fa-percent"></i>
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-400 mt-4">
            <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 12% </span>
            <span class="whitespace-nowrap"> Since last mounth </span></p>
        </div>
    </div>
    </div>
</div>
        </div>
    </div>
</section>


<?php include 'footer.php';?>
</body>
</html>