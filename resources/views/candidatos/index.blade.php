<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Candidates') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class=" text-4xl font-bold text-center my-10">Candidates Job: {{$vacante->titulo}} </h1>
                    <div class="md:flex md:justify-center p-5">
                        <ul class="  w-full">
                            @forelse ($vacante->candidatos as $candidato)
                                <li class="border-b border-gray-200 p-3 flex items-center">
                                    <div class="flex-1">
                                        <p class="text-xl font-medium text-gray-800">{{$candidato->user->name}}</p>
                                        <p class="text-sm  text-gray-600">{{$candidato->user->email}}</p>
                                        <p class="text-sm  text-gray-600">{{$candidato->created_at->diffForHumans()}}</p>
                                    </div>

                                    <div>
                                        <a class="inline-flex items-center shadow-sm px-2.5 py-0.5 border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50" href="{{asset("storage/cv/".$candidato->cv)}}" target="_blank">Show CV</a>
                                    </div>
                                </li>
                            @empty
                                <p class=" p-3 text-center text-gray-600">No There Candidates still </p>
                            @endforelse
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
