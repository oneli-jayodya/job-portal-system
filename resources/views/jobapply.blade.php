@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class=" py-6 flex flex-col justify-center sm:py-12  bg-no-repeat" style="background-image: url('https://www.creativefabrica.com/wp-content/uploads/2022/03/12/Colorful-Abstract-Fluid-Background-Graphics-27058033-1.jpg')">
    <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl bg-blue-900">
                @if($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{$message}}</span>
                </div>
                @endif
    </div>
    <div class="flex justify-center items-center ml-48">
     <a href="{{url('/search')}}">   
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-10 h-10 ml-5 animate-bounce"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" fill="white"/></svg>
    </a>
    
        <div class="container mx-auto my-4 px-4 lg:px-20 ml-10 ">
            <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl bg-blue-900">
                @if($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{$message}}</span>
                </div>
                @endif
                <div class="flex">
                    <h1 class="font-bold uppercase text-5xl text-white ml-32">Apply Job</h1>
                </div>
                <form action="{{ url('/jobapply') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="name" placeholder=" Name" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="email" name="email" placeholder="Email" />
                    <div class="flex flex-wrap">
                        <div class="mt-3 flex ml-10 items-center me-4">
                            <input id="inline-radio" type="radio" value="Male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-900 dark:border-gray-600">
                            <label for="inline-radio" class="ms-2 text-md font-medium text-black dark:text-white">Male</label>
                        </div>
                        <div class="mt-3 ml-5 flex items-center me-4">
                            <input id="inline-radio" type="radio" value="Female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-900 dark:border-gray-600">
                            <label for="inline-radio" class="ms-2 text-md font-medium text-gray-900 dark:text-white">Female</label>
                        </div>
                    </div>
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="date" name="birthday" placeholder="birthday" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="nic" placeholder="NIC" />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="company" placeholder="Apply Company name" />
                </div>
                    <input class="w-full bg-gray-100 text-gray-900 mt-3 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="job_title" placeholder="Apply Job name" />
                    <div class="my-4">
                        <textarea placeholder="Description" name="describe" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
						<button id="cancelButton" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
						<button type="save" class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Apply Job</button>
					</div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('cancelButton').addEventListener('click', function() {
        if (confirm('Are you sure you want to cancel?')) {
            window.history.back();
        }
    });
</script>