@vite('resources/css/app.css')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applied Job') }}
        </h2>
    </x-slot>

      

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <caption class="py-2 text-start text-sm text-gray-600 dark:text-gray-500 font-bold">List of Applied Jobs</caption>
                            <thead>
                                <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-blue-500 uppercase">Name</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-blue-500 uppercase">Email</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-blue-500 uppercase">Job title</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-blue-500 uppercase">company</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-blue-500 uppercase">Description</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-blue-500 uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach($jobs as $ashow)
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$ashow->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$ashow->email}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$ashow->job_title}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$ashow->company}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$ashow->describe}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                    <a href="destroy/{{$ashow->id}}"><button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-400" onclick="return confirmDelete()">Delete</button></a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function confirmDelete() {
        if (confirm('Are you sure you want to delete this job?')) {
            return true; // Proceed with the form submission
        } else {
            return false; // Cancel the form submission
        }
    }
</script>
</x-app-layout>
