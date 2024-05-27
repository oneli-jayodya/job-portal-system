<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search Job') }}
        </h2>
    </x-slot>

    <div class="container mx-auto h-full mt-28">
        <div class="flex flex-col xl:flex-row justify-between">
            <div class="mt-2 md:mt-10 xl:w-[48%] text-center md:text-left lg:text-left xl:text-left  text-white xl:mt-30 ml-5 p-5 md:p-0 lg:p-0 lg:items-left">
                <h1 class="text-5xl md:text-6xl font-extrabold leading-normal mt-6"><span class="text-sky-500">DISCOVER</span> YOUR JOB</h1>
                <h1 class="text-5xl md:text-6xl font-extrabold leading-normal mt-5">LET'S FIND A JOB</h1>
                <p class="mb-[42px] md:max-w-xl mt-8">Hoping you are find the perfect opportunity that matched your skills and experience.</p>
            </div>
            <div class=" hidden xl:flex max-w-[800px] start-end">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/online-job-search-5015545-4185620.png" class="w-full xl:w-1/2 xl:absolute xl:p-5 top-24 bottom-10 right-10">   
            </div>
        </div>
    </div>

    <div class="py-12 mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('search')}}" method="get">
                        <div class="flex flex-wrap">
                            <input type="text" name="data" class="text-white font-lg bg-gray-800 rounded-md w-96 ml-10 h-16" placeholder="Enter category or location">
                            <div class="lg:py-0 lg:pr-0 lg:pl-6 w-72  md:w-44 mt-4 md:mt-0">
                                <input type="submit" value="SEARCH" name="search" class="mt-2 block px-6 py-3 rounded-xl border  text-white hover:outline-none hover:border-none  hover:bg-blue-300 text-center hover:text-black font-semibold"> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#28283c] overflow-hidden shadow-sm sm:rounded-lg pb-10">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <div class="container">
                        <h3 class="font-bold text-2xl ">Jobs list</h3><br>


                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Company
                                        </th>
                                        <th scope="col" class="px-4 py-2">
                                            Description
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Type
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Location
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Closing Date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Apply
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($job as $show) 
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $show->title }}
                                        </th>
                                        <td class="px-6 py-4">
                                        {{ $show->company }}    
                                        </td>
                                        <td class="px-4 py-2">
                                        {{ $show->description }}
                                        </td>
                                        <td class="px-4 py-2">
                                        {{ $show->job_type }}
                                        </td>
                                        <td class="px-6 py-4">
                                        {{ $show->city }}
                                        </td>
                                        <td class="px-6 py-4">
                                        {{ $show->deadline }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{url('jobapply')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Apply Job</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                   
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    
    
</x-app-layout>