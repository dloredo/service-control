<x-app-layout>
    <x-slot name="header">
            {{$user->name}} services
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">


                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($services as $service) 
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$service->id}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$service->name}}
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- More items... -->
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>


            
            
            </div>
        </div>
    </div>
</x-app-layout>