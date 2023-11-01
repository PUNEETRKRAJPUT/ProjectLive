<?php


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
<script src="https://cdn.tailwindcss.com"></script>
<body>
    <section class="bg-gradient-animation flex h-auto z-0">
        <div class="container w-full h-auto "> 
            <!--Header-->
            <div class="w-full h-24 flex flex-row  mx-44">
                <div class=" my-auto">
                    <img  src="https://www.esalink.com/_next/static/media/esalink_logo_white.62726542.svg" class="h-14" />
                </div>
                <div class="my-auto ml-36 text-white ">
                    <button class="border-2 p-2 flex flex-row p-1 rounded-xl hover:opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" fill="white">
                            <path d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z"/>
                        </svg><span class="px-1 font-bold text-sm">FACURATION ELECTRONIQUE 2024</span></button>
                </div>

                <div class="flex flex-row my-auto mx-3 text-white">
                    <a href="" class="px-4 text-xl font-semibold hover:underline">Expertise</a>
                    <a href="" class="px-4 text-xl font-semibold hover:underline">Solution</a>
                    <a href="" class="px-4 text-xl font-semibold hover:underline">Services</a>
                    <a href="Contact.php" class="px-4 text-xl font-semibold hover:underline">Contact</a>
                </div>

                <div class="flex flex-row my-auto mx-12 text-white">
                    <a href="" class="px-4 text-sm  font-semibold hover:underline my-2">CONNEXION TMA</a>
                    <button class=" border-2 backdrop-blur-lg p-1 text-sm font-semibold mx-1 rounded">OBTENIR UNE DEMO</button>
                    <select class="bg-transparent mx-2">
                        <option class="text-black">FR</option>
                        <option class="text-black">EN</option>
                        <option class="text-black">TR</option>
                    </select>
                </div>

            </div>

            <!--Content-->
            <div class="w-screen mx-44 flex flex-row py-12">
                <div class="w-1/2  flex-col text-white ">
                    <img class="h-24 w-48" src="https://www.esalink.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fiso-27001.c9102e6a.webp&w=1080&q=75"/>
                    <h1 class="font-semibold text-7xl py-4">La dématérialisation <br> au service de votre business</h1>
                    <p class="text-2xl py-4">Esalink vous accompagne dans la digitalisation de vos flux B2B</p>

                    <div class="flex flex-row mt-6">
                        <button class="border-2 rounded-lg p-2 text-lg font-semibold bg-blur-sm bg-blend-lighten">Trouver votre solution EDI</button>
                        <button class="border-2 rounded-lg p-2 text-lg font-semibold mx-8 bg-blend-lighten">Passer a la facturation electronique</button>
                    </div>                    
                </div>
                <div class="w-1/2 flex ">
                    <img class="w-96 h-96   ms-96"  src="https://www.esalink.com/_next/static/media/globe_white_block.6699e2aa.svg" />
                </div>                
            </div>

            <div class="flex flex-row mx-44 ">
                <img class="w-24 h-14  mb-12 " src="https://www.esalink.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fgenerix-white.e5ab8b0c.webp&w=256&q=75"/>
                <img class="w-24 h-14 mx-12 mb-12 " src="https://www.esalink.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fcleo-white.ad4618e5.webp&w=128&q=75"/>
                <img class="w-24 h-14 mx-12 mb-12 " src="https://www.esalink.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2FHUBTIMIZE-white.19537ec6.webp&w=256&q=75"/>
                <img class="w-24 h-14 mx-12 mb-12 " src="https://www.esalink.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fibm-white.7d4e8780.webp&w=128&q=75"/>
                <img class="w-24 h-14 mx-12 mb-12 " src="https://www.esalink.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fgs1-white.c6b5f462.webp&w=128&q=75"/>
                <img class="w-24 h-14 mx-12 mb-12 " src="https://www.esalink.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Ffne-white.f8c056bc.webp&w=640&q=75"/>
            </div>
                
        </div>
    </section>

    <!--SECOND SECTION-->
    <section class="bg-white mt-8 my-12 h-auto">
        <div class="my-4 mx-auto w-3/5 h-full">
            <div class="flex flex-col  mt-16">
                <h6 class="font-semibold text-lg ">TRELLO 101</h6>
                <h2 class="font-semibold text-4xl mt-2">A productivity powerhouse</h2>
                <p class="text-2xl mt-4 ">Simple, flexible, and powerful. All it takes are boards, lists, and<br> cards to get a clear view of who’s doing what and what needs to<br> get done. Learn more in our
                    <a class="text-blue-600 underline "> guide for getting started</a>.</p>
            </div>

            <div class="flex flex-row mt-12">
                <div class="flex flex-col w-1/2">
                    <button class="border-8 w-1/2 my-2 border-s-cyan-500 " onclick="changeImage('https:images.ctfassets.net/rz1oowkt5gyp/3N2U3C71rApm61cGFxnc2E/970b010002488a09a420282df5e7b43a/Carousel_Image_Boards_2x.png?w=1140&fm=webp')">
                        <h3 class="font-bold float-left w-full text-left mx-2">Boards</h3>
                        <p class="text-base font-semibold text-left mx-2">Trello boards keep tasks organized and work moving forward. In a glance, see everything from “things to do” to “aww yeah, we did it!”</p>
                    </button>
                    <button class="border-8 w-1/2 my-2  " onclick="changeImage('https:images.ctfassets.net/rz1oowkt5gyp/4U0VUZYX2tQmB5KVGxBabp/7321ac088fe8ec39dbe3069c47d7df99/Carousel_Image_Lists_2x.png?w=1140&fm=webp')">
                        <h3 class="font-bold float-left w-full text-left mx-2">Lists</h3>
                        <p class="text-base font-semibold text-left mx-2">The different stages of a task. Start as simple as To Do, Doing or Done—or build a workflow custom fit to your team’s needs. There’s no wrong way to Trello.</p>
                    </button>
                    <button class="border-8 w-1/2 my-2  " onclick="changeImage('https:images.ctfassets.net/rz1oowkt5gyp/26CA6JZeRgoOK4nuRHnIlY/060702a80cf7c3be3651d9297d196267/Carousel_Image_Cards_2x.png?w=1140&fm=webp')">
                        <h3 class="font-bold float-left w-full text-left mx-2">Cards</h3>
                        <p class="text-base font-semibold text-left mx-2">Cards represent tasks and ideas and hold all the information to get the job done. As you make progress, move cards across lists to show their status.</p>
                    </button>
                </div>
                <div class="w-1/2">
                    <img id="image" class="h-full w-screen" src="https:images.ctfassets.net/rz1oowkt5gyp/3N2U3C71rApm61cGFxnc2E/970b010002488a09a420282df5e7b43a/Carousel_Image_Boards_2x.png?w=1140&fm=webp">
                </div>
            </div>
        </div>

    </section>
    <hr>
    <!--footer-->
   <?php include('footer.php');?>


<script>
    function changeImage(imageSrc) {
    // Change the image source
    const imageElement = document.getElementById('image');
    imageElement.src = imageSrc;

    // Remove the focus state from all buttons
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        button.classList.remove('border-s-cyan-500');
    });

    // Add the focus state to the clicked button
    event.currentTarget.classList.add('border-s-cyan-500');
}

</script>
</body>
</html>