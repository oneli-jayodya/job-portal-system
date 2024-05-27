<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900 dark:text-gray-100">
                    <p class="text-center text-lg font-bold ml-5 space-x-10">
                        {{__("Hi !") }}
                        {{strtoupper( Auth::user()->name ) }}
                        {{ __(", Welcome to the student dashboard!") }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-center text-6xl font-extrabold text-white p-10"><span class="text-blue-500">A BETTER PATH </span> TO <span class="text-emerald-200">MORE OPPATUNITIES</span></h1>
        <img src="https://resources.biginterview.com/wp-content/uploads/2022/12/The-Top-50-Best-Job-Search-Sites-You-Need-to-Know-About.jpg">
    </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
            <div class="bg-white dark:bg-[#010a1c] overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap items-center">
                <div class="p-6 text-gray-900 dark:text-gray-100  w-72 h-72 ml-28 mt-10 mb-10 bg-[#203666] rounded-3xl animate-pulse">
                       <h1 class="text-center text-4xl font-bold mt-10">ALL CATEGORIES</h1>
                       <p class="text-center text-6xl font-bold mt-5">
                       <?php
                            $categoryCount = DB::table('categories')->count();
                            echo $categoryCount;
                        ?>
                       </p>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100  w-72 h-72 ml-10 mt-10 mb-10 bg-[#203666] rounded-3xl animate-pulse">
                       <h1 class="text-center text-4xl font-bold mt-10">APPLIED JOBS</h1>
                       <p class="text-center text-6xl font-bold mt-5">
                       <?php
                            if(Auth::check()) {
                                $userId = Auth::id();
                                $applyCount = DB::table('applies')->where('user_id', $userId)->count();
                                echo $applyCount;
                            }
                        ?>
                       </p>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100  w-72 h-72 ml-10 mt-10 mb-10 bg-[#203666] rounded-3xl animate-pulse">
                       <h1 class="text-center text-4xl font-bold mt-10">ALL JOBS</h1>
                       <p class="text-center text-6xl font-bold mt-16">
                       <?php
                    
                            $applyCount = DB::table('jobposts')->count();
                            echo $applyCount;
                        
                        ?>
                       </p>
                </div>
            </div>
        </div>
        
        <div class="text-white text-xl max-w-7xl mx-auto sm:px-6 lg:px-8 text-center justify-center mt-20">
            <p><span class="text-sky-500">Welcome</span> to your personalized job dashboard, where you can manage, apply for,<br> and track your job opportunities with ease. Access your exclusive job dashboard to stay<br> updated on your job applications, explore new opportunities, and take control of your career journey</p>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-20 ml-64 flex flex-wrap">
            <table class=" flex w-34 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-white bg-gray-50 dark:bg-blue-800 text-3xl">
                            Categories: 
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $cate)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-3 text-xl text-gray-500 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-500">
                           {{$cate->category_name}}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/job-interview-meeting-4462380-3702650.png">
        </div>

</x-app-layout>
