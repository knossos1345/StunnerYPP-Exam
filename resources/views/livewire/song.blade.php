<div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen flex justify-center font-sans overflow-hidden">
            <div class="w-full">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                @if(session()->has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session()->get('success') }}.</span>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session()->get('error') }}.</span>
                    </div>
                @endif
                @if($updateSong)
                    @include('livewire.update')
                @else
                    @include('livewire.create')
                @endif
            </div>
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Date Created</th>
                                <th class="py-3 px-6 text-left">Title</th>
                                <th class="py-3 px-6 text-center">Lyrics</th>
                                <th class="py-3 px-6 text-center">Artist</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @if (count($songs) > 0)
                                @foreach ($songs as $song)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                <span>{{$song->created_at->format("m/d/Y")}}</span>
                                </td>
                                <td class="py-3 px-6 text-left capitalize">
                                <span>{{$song->title}}</span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span>{{ Str::limit($song->body, 50) }} </span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs capitalize">{{$song->artist}}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a wire:click="edit({{$song->id}})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-idigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
</a>
                                            
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a onclick="deleteSong({{$song->id}})" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16
                                            " />
                                            </svg>
</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="py-3 px-6 text-center">
                                        No Song Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

</div>

    <script>
        function deleteSong(id){
            if(confirm("Are you sure to delete this record?"))
                window.livewire.emit('deleteSong',id);
        }
    </script>
</div>