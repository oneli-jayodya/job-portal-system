@vite(['resources/css/app.css', 'resources/js/app.js'])

<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="lightblue" class="w-8 h-8">
                            <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                            </svg> 
                            <span class="self-center text-3xl font-semibold whitespace-nowrap text-blue-200 ">Skill-Hunt</span>
                        </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('company.dashboard')" :active="request()->routeIs('company.dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('company.post')" :active="request()->routeIs('company.post')">
                        {{ __('Post Job') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('company.postedjob')" :active="request()->routeIs('company.postedjob')">
                        {{ __('Posted Jobs') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('company.interview')" :active="request()->routeIs('company.interview')">
                        {{ __('Interviews') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('company.dashboard')" :active="request()->routeIs('company.dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Job') }}
        </h2>
    </x-slot>

    <div class="w-full sm:max-w-full px-8 py-8 bg-white dark:bg-gray-800 shadow-md overflow-hidden">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Job') }}
        </h2>
    </div>

    <!-- <div class="container">
        @yield('content')
    </div> -->

    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
            <div class="absolute bg-gray-900 opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Post Your Job</h1>
                <p class="text-3xl my-4">Get better Employees for your jobs</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center md:px-16 px-0 z-0 bg-gray-900">
            <div class="w-full py-3 z-10">
            
                <form method="POST" action="{{ url('company/post') }}" class="sm:w-3/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf
                    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                        @if($message = Session::get('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{$message}}</span>
                            </div>
                        @endif
                        @if($message = Session::get('error'))
                            <div class="bg-green-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{$message}}</span>
                            </div>
                        @endif
                            <div class="max-w-md mx-auto">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex flex-col">
                                        <label class="title">Job title</label>
                                        <input type="text" name="title" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Job title">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="category">Job Category</label>
                                        <select name="category" id="categories" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full border-gray-300 rounded-md focus:outline-none">
                                            <option value="" name="category" selected disabled>Job category</option>
                                            @php
                                                $categoryNames = \App\Models\categories::pluck('category_name')->toArray();
                                            @endphp
                                            @foreach(\App\Models\categories::all() as $row)
                                                <option value="{{$row->id}}">{{$row->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label>Select job type:</label>
                                        <div class="mt-3 flex items-center me-4">
                                            <input id="inline-radio" type="radio" value="Full Time" name="job_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="inline-radio" class="ms-2 text-sm font-medium text-black dark:text-gray-600">Full Time</label>
                                        </div>
                                        <div class="mt-3 flex items-center me-4">
                                            <input id="inline-radio" type="radio" value="Part Time" name="job_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Part Time</label>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="cname">Company name</label>
                                        <input type="text" name="company" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="name">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="city">Job Location</label>
                                        <input type="text" name="city" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="City">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Job Description</label>
                                        <textarea name="description" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full h-32 sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Write job details"></textarea>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Deadline </label>
                                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                                <input type="date" name="deadline" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="pt-4 flex items-center space-x-4">
                                <button class="flex justify-center items-center w-full bg-red-500 text-gray-900 px-4 py-3 rounded-md focus:outline-none" onclick="confirm()">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                                </button>
                                <button  class="bg-green-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none" type="save">Post</button>
                            </div>
                        </div>
                    </div>
                </form>      
            </div>
        </div>
    </section>
<script>
    function confirm(){
        alert("Are you sure want to cancle posting");
    }
</script>
    

   
