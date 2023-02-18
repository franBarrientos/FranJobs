<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class=" text-4xl font-bold text-center my-10">My Notifications</h1>
                    @forelse ($notifications as $notification)
                        <div class=" p-5 border border-gray-200 lg:flex lg:justify-between items-center">
                            <div>
                                    <p>You Have a new Candidate to:
                                        <span class=" font-bold">{{$notification->data["nombre_vacante"]}}</span>
                                    </p>
                                    <p>Created at:
                                        <span class=" font-bold">{{$notification->created_at->diffForHumans()}}</span>
                                    </p> 
                            </div>
                            <div class="my-5">
                                <a  class="bg-teal-500 p-3 font-bold text-lg rounded-lg text-white" href="{{route("candidatos.index",$notification->data['id_vacante'])}}">Show candidates</a>
                            </div>
                        </div>
                    @empty
                        <p class=" text-center ">No there new Notifications</p>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
