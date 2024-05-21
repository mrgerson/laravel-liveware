<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <!-- Contenido adicional aquí -->
            <div class="overflow-x-auto">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <div class="px-6 py-3 flex justify-end">
                        {{-- <input name="message" wire:model.live="search" type="text"> --}}
                        <x-input  placeholder="Buscar" wire:model.live="search"
                            type="text"></x-input>
                    </div>
                    @if ($posts->count())
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Id
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col"
                                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Content
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                            {{ $post->id }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $post->title }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $post->content }}
                                        </td>
                                        <td class="px-6 py-4 text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            No existe ningún registro coincidente
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
