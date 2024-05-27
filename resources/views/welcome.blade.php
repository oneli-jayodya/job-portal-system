<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skill-Hunt</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

    </head>
    <!-- <body class='bg-gradient-to-r from-indigo-900 to-sky-500'> -->
    <body class="bg-indigo-950">
        <header>
            <div class=" z-20 bg-blue-200 shadow-md rounded-br-3xl rounded-bl-3xl fixed w-full">
                <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-4">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="relative z-20">
                        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="w-8 h-8">
                            <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                            </svg> 
                            <span class="self-center text-3xl font-semibold whitespace-nowrap text-blue-800 ">Skill-Hunt</span>
                        </a>
                        </div>

                        <div class=" peer-checked:translate-x-0 fixed inset-0 w-[calc(100%-4.5rem)] translate-x-[-100%] border-r shadow-xl transition duration-300 lg:border-r-0 lg:w-auto lg:static lg:shadow-none lg:translate-x-0 ">
                            <div class=" bg-blue-200 flex flex-col h-full justify-between lg:items-center lg:flex-row">
                                <ul class="px-6 pt-32 space-y-8 md:px-12 lg:space-y-0 lg:flex lg:space-x-12 lg:pt-0">
                                    <li>
                                    <a href="#" class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:bg-cyan-400 font-bold">
                                        <span class="relative text-blue-800">HOME</span>
                                    </a>
                                    </li>
                                    
                                    <li>
                                    <a href="#contac" class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:bg-cyan-400 font-bold">
                                        <span class="relative text-blue-800">CONTACT US</span>
                                    </a>
                                    </li>
                                </ul>

                                @if (Route::has('login'))
                                <div class="border-t py-8 px-6 md:px-8 md:py-8 lg:border-t-0 lg:border-l  border-blue-900 lg:py-0 lg:pr-0 lg:pl-6">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class=" font-bold group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:bg-cyan-400 font-boldfont-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><span class="relative text-blue-800">DASHBOARD</span></a>
                                @else   
                                    <a href="{{ route('login') }}" class="block px-6 py-3 rounded-full bg-gradient-to-r from-green-900 to-green-400 text-center text-white font-bold">
                                    LOG IN
                                    </a>
                                </div>
                                @if (Route::has('register'))
                                <div class=" py-8 px-6 md:px-8 md:py-8 lg:py-0 lg:pr-0 lg:pl-6">
                                    <a href="{{ route('register') }}" class="block px-6 py-3 rounded-full bg-gradient-to-r from-red-700 to-red-400 text-center text-white font-bold">
                                    SIGN UP
                                    </a>
                                @endif    
                                @endauth
                                </div>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class=" py-12 xl:pt-12 xl:pb-0 verflow-hidden">
            <div class="container mx-auto h-full">
                <div class="flex flex-col xl:flex-row justify-between h-full">
                    <div class="mt-8 md:mt-20 xl:w-[48%] text-center md:text-left lg:text-left xl:text-left  text-white mt-30 xl:mt-44 ml-5 p-5 md:p-0 lg:p-0 lg:items-left">
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-normal mt-6"><span class="text-sky-300">FIND</span> YOUR <span class="text-sky-500">JOB</span></h1>
                        <h1 class="text-5xl md:text-6xl font-extrabold leading-normal mt-5">MAKE BETTER LIFE</h1>
                        <p class="mb-[42px] md:max-w-xl mt-8">To make your life easier, we are introducing  “skill hunt”  for find your dream job. Visit and registered to our site for get many opportunities</p>
                    </div>
                    <div class=" hidden xl:flex max-w-[800px] start-end">
                        <img src="https://remoteweekly.ai/assets/img/bg/homeoffice.svg" class="w-full xl:w-1/2 xl:absolute xl:p-5 top-26 bottom-20 right-10">   
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap ml-20">
            <select name="" id="categories" class="overflow-auto text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block md:h-14 ml-10 w-48 md:mt-4 md:w-60 p-2.5 bg-indigo-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Job Categories</option>
                @php
                    $categoryNames = \App\Models\categories::pluck('category_name')->toArray();
                @endphp
                @foreach(\App\Models\categories::all() as $row)
                    <option value="{{$row->id}}">{{$row->category_name}}</option>
                @endforeach
            </select>

            <select name="" id="cities" class="overflow-auto text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block ml-3 w-48 md:w-54 md:mt-4 md:h-14 p-2.5 bg-indigo-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Location</option>
                @php
                    $locations = \App\Models\jobpost::pluck('city')->unique();
                    @endphp
                    @foreach($locations as $location)
                        <option value="{{$location}}">{{$location}}</option>
                @endforeach
            </select>
                
            </div>
        </section>

        <div class="relative font-inter antialiased">
            <div class="relative mt-0 flex flex-col justify-center overflow-hidden">
                <div class="w-full max-w-6xl mx-auto px-2 md:px-4 py-16 lg:mt-48">
                <div class="text-center">

                <!-- Rotating words animation -->
                <div class="p-5 lg:p-0 font-extrabold text-3xl md:text-4xl [text-wrap:balance] bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-50% to-slate-200">Most students are choose thier part-time as <span class="text-sky-400 inline-flex flex-col h-[calc(theme(fontSize.3xl)*theme(lineHeight.tight))] md:h-[calc(theme(fontSize.4xl)*theme(lineHeight.tight))] overflow-hidden">
                    <ul class="block animate-text-slide-5 text-left leading-tight [&_li]:block">
                        <li>IT Technology</li>
                        <li>Hotel Managment</li>
                        <li>Bank Assistant</li>
                        <li>Content Writing</li>
                        <li>Translating</li>
                        <li aria-hidden="true">IT Technology</li>
                    </ul>
                </span></div>
                </div>

            </div>
        </div>

        <div class=" mt-2 md:mt-2 lg:mt-30 flex justify-center ">
           <h1 class="text-4xl md:text-6xl font-bold shadow-md bg-gradient-to-r from-blue-600 via-green-500 to-indigo-400 inline-block text-transparent bg-clip-text items-center p-6 mt-10 md:mt-30 shadow-blue-800">JOB CATEGORIES</h1>
        </div>
        <div class="pt-8 mt-20 flex flex-col md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 pl-24 md:p-4 gap-4 justify-items-center">
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://clipart-library.com/2023/workflow-process-scaled.jpg" class="mt-10" alt="mechanisum">
                <p class=" absolute inset-0 flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                Mechanism service
                </p>
            </div>
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/food-delivery-service-5969300-4948872.png" class="mt-8" alt="food">
                <p class=" absolute inset-0  flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                Food Delivery
                </p>
            </div>
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://img.freepik.com/free-vector/shop-assistant-helping-female-customer-choose-bag_74855-14160.jpg" class="mt-10" alt="shop">
                <p class=" absolute inset-0  flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                Shop Assistan
                </p>
            </div>
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://www.itcolorado.com/wp-content/uploads/2020/06/Networking.png" class="mt-10" alt="it">
                <p class=" absolute inset-0  flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                IT & Network Service
                </p>
            </div>
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://happay.com/blog/wp-content/uploads/sites/12/2022/09/baas-banking-as-a-service-.png" class="mt-8" alt="it">
                <p class=" absolute inset-0  flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                Bank Service
                </p>
            </div>
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://img.freepik.com/free-vector/hotel-staff-concept-illustration_114360-17168.jpg?size=626&ext=jpg&ga=GA1.1.632798143.1705708800&semt=ais" class="mt-8" alt="it">
                <p class="absolute inset-0  flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                Hotel Managment
                </p>
            </div>
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://png.pngtree.com/png-vector/20220615/ourmid/pngtree-content-writer-or-journalist-background-vector-illustration-for-copy-writing-png-image_5085570.png" class="mt-8" alt="it">
                <p class=" absolute inset-0  flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                Content Writing
                </p>
            </div>
            <div class="h-72 w-72 bg-white relative rounded-3xl overflow-hidden shadow-lg shadow-gray-900 scale-90 hover:scale-100 ease-in duration-500">
                <img src="https://static.vecteezy.com/system/resources/previews/010/925/317/non_2x/users-working-on-laptops-with-data-entry-big-data-services-and-technology-information-entry-equipment-illustration-vector.jpg" class="mt-10" alt="it">
                <p class="absolute inset-0  flex items-center pt-52 justify-center text-xl text-center text-blue-950 font-roboto font-medium group-hover:bg-opacity-60 transition">
                Data entry & Translating
                </p>
            </div>
        </div>

        <hr class="mt-8 mb-3 w-11/12 ml-5 md:ml-16 my-4"/>
            <p class=" p-5 text-white font-extrabold text-center">WE HELP TO FIND JOBS FOR YOU. STUDENTS CAN APPLY PART-TIME JOBS AND <br/>
            FULL-TIME JOBS. REGISTER HERE!! GET DAY TO DAY JOB VACANCIES</p>
        <hr class=" mb-3 w-11/12 ml-5 md:ml-16 my-4"/>

        <div class="flex flex-wrap justify-center mt-16 mb-10">
            <div class="w-96 rounded-tr-[54px] rounded-bl-[80px] h-44 bg-gradient-to-b from-indigo-950 to-blue-800 mb-14 lg:mb-0 shadow-xl shadow-black">
                <div class="flex flex-wrap items-center ml-10 mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-10 h-10"> 
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                    </svg>
                    <h4 class="ml-5 text-white font-bold">REGISTER YOUR ACCOUNT</h4>
                </div>
                <p class="text-gray-500 font-medium ml-24 text-justify">Sign up for get membership and<br> find easily your jobs</p>
            </div>

            <div class="w-96 rounded-tr-[54px] rounded-bl-[80px] h-44 bg-gradient-to-t from-indigo-950 to-blue-600 mb-6 lg:mb-0 ml-16 shadow-xl shadow-black">
                <div class="flex flex-wrap items-center ml-10 mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-10 h-10">
                    <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                        <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                    </svg>
                    <h4 class="ml-5 text-white font-bold">APPLY YOUR DREAM JOB</h4>
                </div>
                <p class="text-gray-500 font-medium ml-24 text-justify">Apply job what are available now <br>and make better carrier path</p>
            </div>

        </div>

        <section id="contac" class="my-6 mt-28 mb-16 ">
            <h2 class="text-white text-6xl font-bold text-center mb-14">Contact Us</h2>
            <div class="max-w-xl mx-auto bg-gradient-to-r  from-indigo-950 via-blue-900 to-indigo-950 rounded-lg">
                <div class=" items-center sm:p-10 p-4 font-[sans-serif]">
                    <div>
                        <h1 class="text-4xl font-extrabold text-white">Contact information</h1>
                        <p class="text-sm text-gray-400 mt-3">Business plan drawn on a wide range of knowledge from different business disciplines. </p>
                        <ul class="mt-12 space-y-8">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                                    viewBox="0 0 479.058 479.058">
                                    <path
                                        d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                        data-original="#000000" />
                                </svg>
                                <a href="javascript:void(0)" class="text-white text-sm ml-3">
                                    <strong>ojwijesinghe@gmail.com</strong>
                                </a>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' viewBox="0 0 482.6 482.6">
                                    <path d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z" data-original="#000000"></path>
                                </svg>
                                <a href="javascript:void(0)" class="text-white text-sm ml-3">
                                    <strong>+94 74 138 5223</strong>
                                </a>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' viewBox="0 0 368.16 368.16">
                                    <path d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z" data-original="#000000"></path>
                                    <path d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z" data-original="#000000"></path>
                                </svg>
                                <a href="javascript:void(0)" class="text-white text-sm ml-3">
                                    <strong>No. 123/A, Main junction, Aralia lane, Colombo 3.</strong>
                                </a>
                            </li>
                        </ul>
                        <ul class="flex mt-12 space-x-4">
                            <li class="bg-[#6e85ea] hover:bg-[#8495e0] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill='#fff'
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                                            data-original="#000000" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bg-[#6e85ea] hover:bg-[#8495e0] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill='#fff'
                                        viewBox="0 0 511 512">
                                        <path
                                            d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                                            data-original="#000000" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bg-[#6e85ea] hover:bg-[#8495e0] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill='#fff'
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>

        

        <!-- <div id="popup" class="justify items-center w-72 h-72 rounded-md bg-white border-r-4 absolute left-96 translate-x-12 translate-y-12 pt-0 pl-8 pr-8 pb-8">
            <img src="https://png.pngtree.com/png-vector/20221215/ourmid/pngtree-green-check-mark-png-image_6525691.png" class="w-20 h-20 items-center ml-16">
            <h2 class="text-xl text-center font-medium mt-4">Thank You!</h2>
            <p class=" text-lg text-center"> Your details has been Successfuly Submitted<p>
            <button type='button' class="w-52 h-10 mt-8 bg-green-500 cursor-pointer shadow-md">OK</button>
        </div> -->

        <footer class="lg:h-56 md:h-96 grid md:grid-cols-2 lg:grid-cols-4 grid-cols-1 bg-gradient-to-r from-blue-200 to-blue-300 rounded-tr-[48px] rounded-tl-[48px] ">
                <div class="mt-16 ml-10">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                        <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                        </svg> 
                        <span class="self-center text-xl font-semibold whitespace-nowrap text-blue-800 ">Skill-Hunt</span>
                    </a>
                    <p class="mt-5 font-bold text-gray-600">Join with us to create your carrier path easily.<br/>start finding your dream job</p>
                </div>
                <div class="mt-10 ml-24">
                        <h1 class="text-xl font-extrabold text-blue-950">Contact information</h1>
                        <ul class="mt-4 space-y-5">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='gray'      viewBox="0 0 479.058 479.058">
                                    <path
                                        d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                        data-original="#000000" />
                                </svg>
                                <a href="javascript:void(0)" class="text-gray-600 text-sm ml-3">
                                    <strong>ojwijesinghe@gmail.com</strong>
                                </a>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='gray' viewBox="0 0 482.6 482.6">
                                    <path d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z" data-original="#000000"></path>
                                </svg>
                                <a href="javascript:void(0)" class="text-gray-600 text-sm ml-3">
                                    <strong>+94 74 138 5223</strong>
                                </a>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='gray' viewBox="0 0 368.16 368.16">
                                    <path d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z" data-original="#000000"></path>
                                    <path d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z" data-original="#000000"></path>
                                </svg>
                                <a href="javascript:void(0)" class="text-gray-600 text-sm ml-3">
                                    <strong>No. 123/A, Main junction, Aralia lane, Colombo 3.</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 ml-24">
                        <h1 class="text-xl font-extrabold text-blue-950">For candidates</h1>
                        <ul class="mt-4 space-y-2 text-sm font-bold text-gray-600" >
                            <li>Registration</li>
                            <li>cv upload</li>
                            <li>member dashboard</li>
                            <li>location based job finding</li>
                        </ul>
                    </div>
                    <div class="mt-10 ml-24">
                        <h1 class="text-xl font-extrabold text-blue-950">For Employees</h1>
                        <ul class="mt-4 space-y-2 text-sm font-bold text-gray-600" >
                            <li>Registration</li>
                            <li>job post</li>
                            <li>schedule interviews</li>
                            <li>message with candidates</li>
                        </ul>
                    </div>
            </footer>

        <script>
            function resetf(){
                document.getElementById("fcon").reset();
            }
        </script>
    </body>
</html>
