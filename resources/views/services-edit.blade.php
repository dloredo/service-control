<x-app-layout>
    <x-slot name="header">
            Edit service {{$service->name}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('services.update', $service->id) }}">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-2/3" type="text" name="name" :value="$service->name" required autofocus autocomplete="name" />
                    </div>

                    <div class="flex items-center justify-start mt-4">

                        <x-jet-button>
                            {{ __('Update') }}
                        </x-jet-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>