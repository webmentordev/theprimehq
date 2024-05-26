<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[99%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @session('success')
                        <x-success message="{{ $value }}" />
                    @endsession
                    @if (count($contacts))
                        <table class="w-full rounded-lg overflow-hidden">
                            <tr class="bg-black text-white">
                                <th class="text-start p-3">Name</th>
                                <th class="text-start">Email</th>
                                <th class="text-start">Subject</th>
                                <th class="text-start">Message</th>
                                <th class="text-start">Created</th>
                                <th class="text-end p-3">Delete</th>
                            </tr>

                            @foreach ($contacts as $item)
                                <tr class="bg-black/90 border-b border-gray-800 text-white">
                                    <td class="text-start p-3">{{ $item->name }}</td>
                                    <td class="text-start">{{ $item->email }}</td>
                                    <td class="text-start">{{ $item->subject }}</td>
                                    <td class="text-start" x-data="{ open: false }">
                                        <span class="cursor-pointer underline text-blue-500" x-on:click="open = !open">Read</span>
                                        <div class="fixed bottom-3 left-3 p-6 max-w-4xl w-full bg-white rounded-lg shadow-sm z-50" x-on:click.self="open = false" x-show="open" x-cloak x-transition>
                                            <p class="text-black w-full">{{ $item->message }}</p>
                                        </div>
                                    </td>
                                    <td class="text-start">{{ $item->created_at->format('D d m, Y') }}</td>
                                    <td class="text-end p-3">
                                        <form action="{{ route('delete.contact', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 py-2 px-3 rounded-lg" type="submit" onclick="return confirm('Are you sure you want to delete?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p class="text-lg">No contacts data exist!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>