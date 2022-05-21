<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                Qualification of
                {{$employee->first_name . ' ' . $employee->last_name}}
            </span>


            <style>

            </style>

            <div class="flex justify-center items-center float-right">
                <a href="{{url('dashboard')}}"
                   class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2"
                   title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="hidden md:inline-block ml-2">Home</span>
                </a>

                <a href="javascript:;" onclick="history.back()"
                   class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2"
                   title="Members List">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z"/>
                    </svg>
                    <span class="hidden md:inline-block ml-2">Back</span>
                </a>

            </div>
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-8">

                <div class="p-6 sm:px-10 bg-white mb-8">
                    <div class="mt-6 text-gray-500">

                        <x-jet-validation-errors class="mb-4"/>



                        <table class="w-full text-sm border-collapse border border-slate-400 text-left text-black dark:text-gray-400">

                            <tbody>

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black">
                                <th class="px-1 border border-black py-2 font-medium text-black dark:text-white whitespace-nowrap" style="width: 30%;">
                                    Last Degree / Qualification Level
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->degree_name}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Degree Name:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->degree_qualification_name}}
                                </th>
                            </tr>



                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Degree Passing Year:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{\Carbon\Carbon::parse($qualification->passing_year)->format('d-m-Y')}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Institute Name:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->institute_name}}
                                </th>
                            </tr>

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Date From:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{\Carbon\Carbon::parse($qualification->date_from)->format('d-m-Y')}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Date To:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{\Carbon\Carbon::parse($qualification->date_to)->format('d-m-Y')}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Total Marks / CGPA:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->total_score}}
                                </th>
                            </tr>

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Obtain Marks / CGPA:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->obtain_score}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                   Division:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->division}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Field Subject:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->field_subject}}
                                </th>
                            </tr>



                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Major Specialization:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->major_specialization}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    National/Foreign:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->national_foreign}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Country:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->country}}
                                </th>
                            </tr>



                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                   Province/State:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->province_state}}
                                </th>
                            </tr>



                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    District / City / Location:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->district_city_location}}
                                </th>
                            </tr>



                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black ">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Degree Status:
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    {{$qualification->degree_status}}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-black">
                                <th scope="row" class="px-1 border border-black  py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    Degree Attachment
                                </th>
                                <th scope="row" class=" border border-black px-1 py-2 font-medium text-black dark:text-white whitespace-nowrap">
                                    @if(!empty($qualification->attachment))

                                            <a href="{{Storage::url($qualification->attachment)}}" target="_blank" class="text-blue-500 hover:underline hover:text-blue-900 p-4">View Old Attachment</a>
                                    @else
                                        #N/A
                                    @endif
                                </th>
                            </tr>


                            </tbody>
                        </table>


                    </div>

                </div>

            </div>
        </div>
    </div>


</x-app-layout>
