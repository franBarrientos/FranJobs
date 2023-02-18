<div class="p-10">
    <div class=" mb-5">
        <h1 class=" text-4xl font-bold  my-5">{{$vacante->titulo}}</h1>

        <div class=" md:grid md:grid-cols-2 items-center">
            <p class=" font-bold text-sm uppercase my-3">Company:
                <span class=" normal-case font-normal">{{$vacante->empresa}}</span>
            </p>
            <p class=" font-bold text-sm uppercase my-3">Last day to apply:
                <span class=" normal-case font-normal">{{$vacante->ultimo_dia->format("d/m/Y")}}</span>
            </p>
            <p class=" font-bold text-sm uppercase my-3">Category:
                <span class=" normal-case font-normal">{{$vacante->categoria->categoria}}</span>
            </p>
            <p class=" font-bold text-sm uppercase my-3">Salary:
                <span class=" normal-case font-normal">{{$vacante->salario->salario}}</span>
            </p>
        </div>
    </div>
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class=" md:col-span-3">
            <img src="{{asset("storage/vacantes/".$vacante->imagen)}}" alt="image about the vaccanci">
        </div>
        <div class=" md:col-span-3">
            <h2 class=" font-bold text-lg my-4 uppercase">Description about this job:</h2>
            <p>{{$vacante->descripcion}}</p>
        </div>
    </div>
    @guest
        <div class="my-5 p-5 flex items-center justify-center w-full border-2 border-gray-200">
            <p>¿Do you want apply for this job?
                <a class="text-indigo-600 font-bold" href="{{route("register")}}">Create a Account and aplly for this job and more</a>
            </p>
        </div>
    @endguest
    
    @cannot('create',App\Models\Vacante::class)
        <livewire:postular-vacante 
            :vacante="$vacante"
        />
    @endcannot
</div>
