<x-app-layout>
    <x-slot name="header">
            Users
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
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Age
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Genre
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user) 
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$user->id}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$user->name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$user->email}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$user->age}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$user->gender}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <form method="POST" action="{{route('users.change_status', $user->id)}}">
                                                @csrf
                                                @method("PUT")
                                                <button type="submit" class="bg-{{ ($user->status == 1)? 'red' : 'green' }}-500 p-1 rounded text-white ">
                                                {{ ($user->status == 1)? 'Inactivate' : 'Activate' }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{route('users.services', $user->id)}}" class="bg-blue-500 p-1 rounded text-white ">Services</a>
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