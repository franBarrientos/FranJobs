<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="font-bold text-center text-2xl my-4">Apply to this Vacant</h3>
    @if (session()->has("mensaje"))
        <div class=" uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5">
            {{session("mensaje")}}
        </div>
    
    @else
        <form wire:submit.prevent='postularme' class=" w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum (PDF)')" />
                <x-text-input id="cv" class="block mt-1 w-full" type="file" wire:model="cv" accept=".pdf"/>
                @error("cv")
                    <livewire:mostrar-alerta 
                    :messages="$message"
                    />
                @enderror
            </div>
            <x-primary-button class="w-full justify-center my-5">
                {{ __('Apply') }}
            </x-primary-button>
            
        </form>
    
    @endif
   
</div>
