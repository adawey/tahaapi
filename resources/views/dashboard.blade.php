<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button style="back-ground-color:red " class="btn " > <a href="{{ route('export') }}"> export </a> </button>
                    <div class="container flex justify-center mx-auto">

                        <div class="flex flex-col">
                            <div class="w-full">
                                <div class="border-b border-gray-200 shadow">
                                    <table class="divide-y divide-gray-300 ">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    email
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    pass
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    country
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Created_at
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    ip
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-300">

                                          @foreach ($users  as $user)
                                          <td class="px-6 py-4 text-sm text-gray-500">
                                            {{      $user->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                               {{ $user->password }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">    {{ $user->country }} </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $user->created_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->ip }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</a>
                                        </td>
                                    </tr>
                                          @endforeach
                                        </tbody>
                                        {{ $users->links() }}


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
