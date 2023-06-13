<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}


                    <div class=" mt-3  ">
                        <x-input-label for="email" :value="__('Choose the complex')"
                            class="  !font-serif !text-black !text-lg !mb-2 !inline mr-2 !max-w-xs ]" />

                        <select id="email" class="!inline mt-1 w-1/4  rounded-md  " name="reporttype"
                            :value="" required autofocus autocomplete="username">
                            @foreach ($complexs as $complex)
                                <optgroup label="{{ $complex->name }}"> </optgroup>
                                @foreach ($complex->buildings as $building)
                                    <option>{{ $building->name }} </option>
                                @endforeach
                            @endforeach
                        </select>

                    </div>

                    <div class=" mt-3  ">
                        <x-input-label for="email" :value="__('Choose the reporttype ')"
                            class="  !font-serif !text-black !text-lg !mb-2 !inline mr-2 " /> <select id="email"
                            class="!inline mt-1 w-1/4  rounded-md   " name="report-type" :value=""
                            required>
                            <option> اعلان تنسيب </option>
                            <option> report </option>
                            <option> manitance report </option>

                        </select>

                    </div>

                    <div class=" my-8">
                        <form class="" method="post" action="{{ route('advertisement.store') }}">

                            <div class="mb-2">
                                <x-input-label for="title" :value="__('Enter the title of the alert  ')"
                                    class="  !font-serif !text-black !text-lg !mb-2 !inline mr-2 !max-w-xs " />
                            </div>



                            <div>
                                <textarea id="title" name="title" cols="12"class="w-1/2 rounded-md	" rows="10"
                                    placeholder="enter the title of the alert" required>
               </textarea>
                                <div class="pt-2">
                                    <x-primary-button class="!px-5 !font-medium !font-sans	!text-lg	">
                                        {{ __('Send') }}
                                    </x-primary-button>
                                </div>
                            </div>




                        </form>
                    </div>
                </div>




            </div>
        </div>
    </div>
</x-app-layout>
