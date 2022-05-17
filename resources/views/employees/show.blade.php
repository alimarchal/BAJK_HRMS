<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Employee Profile') }}
            </span>

            <div class="flex justify-center items-center float-right">
                <a href="{{url('dashboard')}}" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Home</span>
                </a>

                <a href="javascript:;" onclick="history.back()" id="toggle" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Back</span>
                </a>

                @can('Update Employee')
                    <a href="{{route('employee.edit', $employee->id)}}" id="toggle" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <span class="hidden md:inline-block ml-2">Edit</span>
                    </a>
                @endcan

                @can('Delete Employee')
                    <form action="{{route('employee.destroy', $employee->id)}}" method="post" onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            <span class="hidden md:inline-block ml-2">Delete</span>
                        </button>
                    </form>
                @endcan
            </div>
        </div>

    </x-slot>

{{--    <style>--}}
{{--        :root {--}}
{{--            --main-color: #4a76a8;--}}
{{--        }--}}

{{--        .bg-main-color {--}}
{{--            background-color: var(--main-color);--}}
{{--        }--}}

{{--        .text-main-color {--}}
{{--            color: var(--main-color);--}}
{{--        }--}}

{{--        .border-main-color {--}}
{{--            border-color: var(--main-color);--}}
{{--        }--}}
{{--    </style>--}}
{{--    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="display: none" id="filters">
        <div class="rounded-xl p-4 bg-white shadow-lg">
            <form action="">
                <div class="mb-3 -mx-2 flex items-end">
                    <div class="px-2 w-1/2">
                        <div>
                            <label class="font-bold text-sm mb-2 ml-1">Search</label>
                            <input name="filter[search_string]" value="" class="form-select w-full px-3 py-2 mb-1 border-2
                                border-gray-200 rounded-md focus:outline-none
                                focus:border-indigo-500 transition-colors cursor-pointer"/>

                        </div>
                    </div>
                    <div class="px-2 w-1/2">
                        <label class="font-bold text-sm mb-2 ml-1">CNIC</label>
                        <input name="filter[cnic]" value=""
                               class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer"/>

                    </div>
                    <div class="px-2 w-1/2">
                        <label class="font-bold text-sm mb-2 ml-1">Employee On Leave </label>
                        <select name="filter[leave_status]" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                            <option value="">None</option>
                            <option value="0">On Leave</option>
                            <option value="1">Present</option>
                        </select>
                    </div>
                    <div class="px-2 w-1/2">
                        <label class="font-bold text-sm mb-2 ml-1">DISTRICT </label>
                        <select name="filter[district_city]" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                            <option value="">None</option>
                            <optgroup label="AJK">
                                <option value="Muzaffarabad" >
                                    Muzaffarabad</option>
                                <option value="Hattian Bala" >
                                    Hattian Bala</option>
                                <option value="Neelum" >
                                    Neelum</option>
                                <option value="Mirpur" >
                                    Mirpur</option>
                                <option value="Bhimber" >
                                    Bhimber</option>
                                <option value="Kotli" >
                                    Kotli</option>
                                <option value="Poonch" >
                                    Poonch</option>
                                <option value="Bagh" >
                                    Bagh</option>
                                <option value="Haveli" >
                                    Haveli</option>
                                <option value="Sudhnati" >
                                    Sudhnati</option>
                            </optgroup>
                        </select>
                    </div>

                </div>

                <div class="text-center">
                    <button type="submit"  class=" px-4 py-2
                                bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white
                                uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700
                                focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition ">
                        Search
                    </button>
                </div>

            </form>
        </div>
    </div>


    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-8">

                <div class="border-b border-gray-200 dark:border-gray-700 mb-3 mt-0">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500 group">
                                <svg class="mr-2 w-5 h-5 text-blue-600 dark:text-blue-500 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                                Personal Info
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="{{route('qualification.show', $employee->id)}}" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" aria-current="page">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                Qualification
                            </a>
                        </li>

                        {{--                    <li class="mr-2">--}}
                        {{--                        <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" aria-current="page">--}}
                        {{--                            <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>--}}
                        {{--                            Professional --}}
                        {{--                        </a>--}}
                        {{--                    </li>--}}


                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>
                                Skills & Sports
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Training & Courses
                            </a>
                        </li>


                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Promotions
                            </a>
                        </li>


                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Demotions
                            </a>
                        </li>


                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Posting Records
                            </a>
                        </li>


                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Rewards
                            </a>
                        </li>



                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Show-Cause Notices
                            </a>
                        </li>


                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Suspensions
                            </a>
                        </li>


                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Judicial Enquires
                            </a>
                        </li>



                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                Annual Confidential Report (ACR)
                            </a>
                        </li>



                        <li class="mr-2">
                            <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                List of Assets
                            </a>
                        </li>



                        {{--                    <li class="mr-2">--}}
                        {{--                        <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">--}}
                        {{--                            <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>--}}
                        {{--                            Training & Courses--}}
                        {{--                        </a>--}}
                        {{--                    </li>--}}

                        {{--                    <li>--}}
                        {{--                        <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>--}}
                        {{--                    </li>--}}
                    </ul>
                </div>



                <div class="md:flex no-wrap md:-mx-2 ">
                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2 ">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-green-400">
                            <div class="image overflow-hidden">

                                @if(!empty($employee->profile_path))
                                    <img class="h-auto w-full mx-auto"
                                         src="{{url(Storage::url($employee->profile_path))}}"/>

                                @else
                                    <img class="h-auto w-full mx-auto"
                                         src="{{\App\Models\User::stagetProfilePhoto($employee->first_name . ' ' . $employee->last_name)}}"/>
                                @endif

                                {{--                            <img class="h-auto w-full mx-auto"--}}
                                {{--                                 src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"--}}
                                {{--                                 alt="">--}}
                            </div>
                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$employee->first_name . ' ' . $employee->last_name}}</h1>
                            <h3 class="text-gray-600 font-lg text-semibold leading-6"> {{$employee->appointment->designation}}</h3>
                            <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                                Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                            <ul
                                class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                <li class="flex items-center py-3">
                                    <span>Status</span>
                                    <span class="ml-auto"><span
                                            class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Employee since</span>
                                    <span class="ml-auto">{{\Carbon\Carbon::parse($employee->appointment->appointment_date)->format('d-m-Y')}}</span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Salary</span>
                                    <span class="ml-auto">PKR. {{$employee->employee_salary}}</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End of profile card -->
                        <div class="my-4"></div>
                        <!-- Friends card -->

                    </div>
                    <!-- Right Side -->
                    <div class="w-full md:w-9/12 mx-2 h-64 ">
                        <!-- Profile tab -->
                        <!-- About Section -->
                        <div class="bg-white p-3 shadow-sm rounded-sm">
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                                <span class="tracking-wide">About</span>
                            </div>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">First Name</div>
                                        <div class="px-4 py-2">{{$employee->first_name}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Last Name</div>
                                        <div class="px-4 py-2">{{$employee->last_name}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Father/Husbane Name</div>
                                        <div class="px-4 py-2">{{$employee->father_husband_name}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">National CNIC</div>
                                        <div class="px-4 py-2">{{$employee->cnic}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Gender</div>
                                        <div class="px-4 py-2">{{$employee->gender}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Contact No.</div>
                                        <div class="px-4 py-2">{{$employee->mobile}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Emergency Contact</div>
                                        <div class="px-4 py-2">{{$employee->emergency_contact}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">District/City</div>
                                        <div class="px-4 py-2">{{$employee->district_city}}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Email.</div>
                                        <div class="px-4 py-2">
                                            <a class="text-blue-800" href="mailto:{{$employee->email}}">{{$employee->email}}</a>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Birthday</div>
                                        <div class="px-4 py-2">{{\Carbon\Carbon::parse($employee->data_of_birth)->format('d-m-Y')}} ({{\Carbon\Carbon::parse($employee->data_of_birth)->diff(\Carbon\Carbon::now())->format('%y years')}})</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Employee Code</div>
                                        <div class="px-4 py-2">{{$employee->employee_code}}</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Legal Heir</div>
                                        <div class="px-4 py-2">{{$employee->legal_heir}}</div>
                                    </div>



                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">CNIC Issue Date</div>
                                        <div class="px-4 py-2">{{$employee->issue_date}}</div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">CNIC Expiry Date</div>
                                        <div class="px-4 py-2">{{$employee->expiry_date}}</div>
                                    </div>

                                </div>
                                <hr class="my-3">
                                <h1 class="text-2xl text-center font-bold">Appointment Details</h1>
                                <hr class="my-3">

                                <div class="grid md:grid-cols-2 text-sm">


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Appointment Date</div>
                                        <div class="px-4 py-2">
                                            {{\Carbon\Carbon::parse($employee->appointment->appointment_date)->format('d-m-Y')}}
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Designation</div>
                                        <div class="px-4 py-2">
                                            {{$employee->appointment->designation}}
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Scale</div>
                                        <div class="px-4 py-2">
                                            {{$employee->appointment->scale}}
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Employee Type</div>
                                        <div class="px-4 py-2">
                                            {{$employee->appointment->employee_type}}
                                        </div>
                                    </div>
                                </div>


                                <div class="grid grid-cols-1">
                                    <div class="px-4 py-2 font-semibold">Service Tenure</div>
                                    <div class="px-4 py-2">{{\Carbon\Carbon::parse($employee->appointment->appointment_date)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</div>
                                </div>
                            </div>
                        </div>
                        <!-- End of about section -->

                        <div class="my-4"></div>

                        <!-- Experience and education -->
                        <div class="bg-white p-3 shadow-sm rounded-sm mb-4 pb-4">

                            <div class="grid grid-cols-1">
                                <div>
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                        <span class="tracking-wide">Education</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        <li>
                                            <div class="text-teal-600">{{$employee->qualification->degree_name}}</div>
                                            <div class="text-gray-500 text-xs">{{\Carbon\Carbon::parse($employee->qualification->passing_year)->format('d-m-Y')}}</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Experience and education grid -->
                        </div>
                        <!-- End of profile tab -->
                    </div>


                </div>

            </div>

        </div>
    </div>


</x-app-layout>
