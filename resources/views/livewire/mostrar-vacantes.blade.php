<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    
        @forelse ($vacantes as $vacante )
            <div class="p-6 text-gray-900 dark:text-gray-100 border-b border-gray-200  md:flex md:justify-between md:items-center">
                <a href="{{route("vacantes.show",$vacante->id)}}" class=" space-y-4">
                    <p class=" font-bold text-xl ">{{$vacante->titulo}}</p>
                    <p class=" text-sm font-bold text-gray-500">{{$vacante->empresa}}</p>
                    <p class=" text-sm font-bold text-gray-400">Last Day: {{$vacante->ultimo_dia->format("d/m/Y")}}</p>
                </a>
                
                <div class=" flex gap-3 items-center mt-3 flex-col   md:flex-row">
                    <a href="{{route("candidatos.index", $vacante)}}" class=" w-full text-center  bg-slate-800 py-2 px-4 rounded-lg text-white font-bold uppercase whitespace-nowrap">{{$vacante->candidatos->count() }} Candidates</a>
                    <a href="{{route("vacantes.edit",["vacante"=>$vacante->id])}}" class=" w-full text-center bg-blue-800 py-2 px-4 rounded-lg text-white font-bold uppercase">Edit</a>
                    <button wire:click='$emit("prueba",{{$vacante->id}})' class=" w-full text-center bg-red-800 py-2 px-4 rounded-lg text-white font-bold uppercase">Delete</button>
                </div>
            </div> 
        @empty
            <p class="p-6 text-gray-900 dark:text-gray-100 border-b border-gray-200  md:flex md:justify-center md:items-center">No Vacancies Yet</p>
        @endforelse
     
    </div>
    
    <div class="  mt-10 mb-5">
        {{$vacantes->links()}}
    </div> 
</div>

@push("scripts")
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        
        Livewire.on("prueba",(vacanteId)=>{
            Swal.fire({
            title: 'Are you sure to delete?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit("eliminarVacante",vacanteId)

                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
        })

           
    </script>
@endpush