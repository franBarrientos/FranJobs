<div>

        <livewire:filtrar-vacantes />

        
        <div class="py-12">
                <div class=" max-w-7xl mx-auto">
                    <h3 class=" font-extrabold text-4xl text-gray-800 mb-12">Our Jobs Avalaible </h3>
                    <div class="p-6 bg-white shadow-sm rounded-lg divide-y divide-gray-200">
                        @forelse ($vacantes as $vacante)
                            <div class=" md:flex  md:justify-between md:items-center py-5">
                                <div class=" md:flex-1">
                                    <a  class="text-2xl font-extrabold text-gray-600" href="{{route("vacantes.show",$vacante->id)}}">{{$vacante->titulo}}</a>
                                    <p class=" text-base text-gray-600 mb-1">{{$vacante->empresa}}</p>
                                    <p class=" text-base text-gray-600 mb-1">Last Day to Apply: <span class="font-bold">{{$vacante->ultimo_dia->format("d/m/Y")}}</span></p>
                                </div>
                                <div class="mt-5 md:mt-0">
                                    <a class="bg-teal-500 p-3 font-bold text-lg rounded-lg text-white" href="{{route("vacantes.show",$vacante->id)}}">Show Vacanciy</a>
                                </div>
                            </div>
                        @empty
                            <p class=" p-3 text-center text-sm">There are no Vacancies yet
                            </p>
                        @endforelse
                    </div>
                </div>
        </div>
</div>
