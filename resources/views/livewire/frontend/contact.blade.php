<div>
    <div wire:loading class="absolute my-position">
        <img class="w-52 myLoadingLogo"
             src="{{ asset('img/icono_loading.png') }}"
             alt="icono">
    </div>
    <div class="mb-4">
        <h1 class="text-gray-900 text-4xl uppercase text-center font-bold">¿Necesitas ayuda?</h1>
        <h2 class="text-gray-900 text-4xl uppercase text-center font-bold">Contacta ahora</h2>
    </div>
    <form id="contactForm" wire:submit.prevent="send">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
            <div>
                <input type="text"
                       class="mt-1 focus:ring-sky-900 focus:border-sky-900 block w-full shadow-sm sm:text-lg border-2 border-sky-800 rounded-md h-12"
                       wire:model.defer="name"
                       required
                       placeholder="Nombre">
            </div>
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

            <div>
                <input type="tel"
                       class="mt-1 focus:ring-sky-900 focus:border-sky-900 block w-full shadow-sm sm:text-lg border-2 border-sky-800 rounded-md h-12"
                       wire:model.defer="phone"
                       required
                       placeholder="Teléfono">
            </div>
            @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <input type="text"
               class="mt-5 focus:ring-sky-900 focus:border-sky-900 block w-full shadow-sm sm:text-lg border-2 border-sky-800 rounded-md h-12"
               wire:model.defer="email"
               required
               placeholder="Email">
        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

        <textarea name="about"
                  rows="4"
                  class="mt-5 shadow-sm focus:ring-sky-900 focus:border-sky-900 block w-full sm:text-lg border border-2 border-sky-800 rounded-md text-gray"
                  wire:model.defer="message"
                  placeholder="¿Necesitas ayuda?"
                  required></textarea>
        @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

        <div class="mt-3 flex items-center">
            <input id="policies"
                   type="checkbox"
                   class="rounded border-2 border-sky-800"
                   wire:model.defer="policies"
                   required>
            <label for="polices" class="text-gray-900 mt-0.5 ml-1">
                Aceptar las condiciones de nuestra <a href="javascript:void(0)" class="text-blue-700 hover:underline">política de privacidad</a> de datos.
            </label>
        </div>
        <div>
            @error('policies') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="inline-flex justify-center py-4 px-8 border border-transparent shadow-sm text-lg font-medium rounded-full text-white bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-sky-900 mt-3">
                Enviar
            </button>
        </div>

    </form>
</div>

@push('js')
    <script>
        Livewire.on('mySent', () => {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'readon submit',
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                background: '#fff',
                icon: 'success',
                text: 'Tu mensaje se ha enviado con éxito',
                confirmButtonText: 'Entendido',
                confirmButtonClass: 'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-full text-white bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-sky-900 mt-1',
            })
        });
    </script>
@endpush
