<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                Add Qualification of Employee
{{--                {{\App\Models\Employee::find($employee_id)->first_name . ' ' . \App\Models\Employee::find($employee_id)->last_name}}--}}
            </span>

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


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-10 bg-white border-b border-gray-200">
                    <div class="mt-6 text-gray-500">

                        <x-jet-validation-errors class="mb-4"/>

                        <form action="{{route('qualification.store')}}" class="mb-6" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="employee_id" value="{{$employee_id}}">
                            <div class="bg-white rounded px-8 pt-6 pb-8 ">

                                <h1 class="text-center text-2xl mb-2 mt-4   text-black text-bold">
                                    Qualification/Education</h1>
                                <hr class="mb-3">

                                <div class="-mx-3 md:flex mb-1">
                                    <div class="md:w-1/3 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="degree_name">
                                            Last Degree / Qualification Level
                                        </label>
                                        <select name="degree_name"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                                id="degree_name" required="">
                                            <option value="">None</option>
                                            @foreach(\App\Models\Qualification::degree_name() as $degree_name)
                                                <option value="{{$degree_name}}">
                                                    {{$degree_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="md:w-1/3 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="degree_qualification_name">
                                            Degree Name
                                        </label>
                                        <select name="degree_qualification_name"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                                id="degree_qualification_name" required="">
                                            <option value="">None</option>

                                            @foreach(\App\Models\Qualification::degree_list() as $key => $value)
                                                <option value="{{$key}}">
                                                    {{$key}} / {{$value}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="md:w-1/3 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-institute_name">
                                            institute name
                                        </label>
                                        <input name="institute_name" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-institute_name" value="{{old('institute_name')}}" type="text">

                                    </div>
                                </div>

                                <div class="-mx-3 md:flex mb-3">
                                    <div class="md:w-1/3 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-passing_year">
                                            Degree obtained/Passing Year
                                        </label>
                                        <input name="passing_year" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-passing_year" value="{{old('passing_year')}}" type="date"
                                               onkeydown="return false" max="{{ now()->toDateString('Y-m-d') }}">

                                    </div>
                                    <div class="md:w-1/3 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-date_from">
                                            Date From
                                        </label>
                                        <input name="date_from" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-date_from" value="{{old('date_from')}}" type="date"
                                               onkeydown="return false" max="{{ now()->toDateString('Y-m-d') }}">

                                    </div>
                                    <div class="md:w-1/3 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-date_to">
                                            Date To
                                        </label>
                                        <input name="date_to" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-date_to" value="{{old('date_to')}}" type="date"
                                               onkeydown="return false" max="{{ now()->toDateString('Y-m-d') }}">

                                    </div>
                                </div>

                                <div class="-mx-3 md:flex mb-3">
                                    <div class="md:w-1/4 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-total_score">
                                            total marks / cgpa
                                        </label>
                                        <input name="total_score" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-total_score" value="{{old('total_score')}}" type="number" step="0.1" min="1">

                                    </div>
                                    <div class="md:w-1/4 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-obtain_score">
                                            obtain marks / cgpa
                                        </label>
                                        <input name="obtain_score" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-obtain_score" value="{{old('obtain_score')}}" type="number" step="0.1" min="1">

                                    </div>
                                    <div class="md:w-1/4 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-division">
                                            division
                                        </label>
                                        <input name="division" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-division" value="{{old('division')}}" type="text">

                                    </div>
                                    <div class="md:w-1/4 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-field_subject">
                                            field subject
                                        </label>
                                        <input name="field_subject" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-field_subject" value="{{old('field_subject')}}" type="text">
                                    </div>
                                </div>

                                <div class="-mx-3 md:flex mb-1 mt-2">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-major_specialization">
                                            major specialization
                                        </label>
                                        <input name="major_specialization" onkeydown="return false" required=""
                                               value="{{old('major_specialization')}}" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3" id="grid-major_specialization" type="text"
                                               max="{{ now()->toDateString('Y-m-d') }}">
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-national_foreign">
                                            national/foreign
                                        </label>
                                        <select name="national_foreign" id="grid-national_foreign" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>

                                            @foreach(\App\Models\Qualification::national_foreign() as $national_foreign)
                                                <option value="{{$national_foreign}}"
{{--                                                        @if(old('designation') === $designation->name) selected @endif --}}
                                                >
                                                    {{$national_foreign}}
                                                </option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-country">
                                            country
                                        </label>
                                        <select name="country" id="grid-country" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>

                                            @foreach(\App\Models\Qualification::country() as $country)
                                                <option value="{{$country}}" @if($country == "Pakistan")  selected @endif
{{--                                                        @if(old('designation') === $designation->name) selected @endif--}}
                                                >
                                                    {{$country}}
                                                </option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-province_state">
                                            province/state
                                        </label>
                                        <select name="province_state" id="grid-province_state" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>

                                            @foreach(\App\Models\Qualification::province_state() as $province_state)
                                                <option value="{{$province_state}}"
{{--                                                        @if(old('designation') === $designation->name) selected @endif --}}
                                                >
                                                    {{$province_state}}
                                                </option>

                                            @endforeach

                                        </select>
                                    </div>
                                </div>



                                <div class="-mx-3 md:flex mb-1 mt-2">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-district_city_location">
                                            district / city / location
                                        </label>
                                        <input name="district_city_location"
                                               value="{{old('district_city_location')}}" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3" id="grid-district_city_location" type="text"
                                               max="{{ now()->toDateString('Y-m-d') }}">
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-degree_status">
                                            degree status
                                        </label>
                                        <select name="degree_status" id="grid-degree_status" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>

                                            @foreach(\App\Models\Qualification::degree_status() as $degree_status)
                                                <option value="{{$degree_status}}"
{{--                                                        @if(old('designation') === $designation->name) selected @endif--}}
                                                >
                                                    {{$degree_status}}
                                                </option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-verified_from_hec">
                                            verified from hec
                                        </label>
                                        <select name="verified_from_hec" id="grid-verified_from_hec" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>

                                            @foreach(\App\Models\Qualification::verified_hec() as $verify)
                                                <option value="{{$verify}}"
{{--                                                        @if(old('designation') === $designation->name) selected @endif--}}
                                                >
                                                    {{$verify}}
                                                </option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-attachment_1">
                                            Degree Attachment
                                        </label>
                                        <input name="attachment_1"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-attachment_1" type="file">
                                    </div>
                                </div>

                                <div style="float: right" class="mt--1">
                                    <button class="bg-blue-500 hover:bg-blue-400
                                    text-white font-bold py-2 px-4 border-b-4
                                    border-blue-700 hover:border-blue-500 rounded">
                                        <span>Add Qualification</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


</x-app-layout>
