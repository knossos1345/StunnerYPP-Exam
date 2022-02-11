    <div class="grid  gap-8 grid-cols-1">
        <form>
            <div class="flex flex-col ">
                <div class="flex flex-col sm:flex-row items-center">
                    <h2 class="font-semibold text-lg mr-auto">Add Song</h2>
                    <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>

                        <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label for="SongTitle" class="font-semibold text-gray-600 py-2">Title</label>
                                <input wire:model="title" placeholder="Enter Title" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" nid="SongTitle">
                                @error('title') <span class="text-red-300">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label for="songArtist" class="font-semibold text-gray-600 py-2">Artist</label>
                                <input wire:model="artist" placeholder="Enter Artist" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text"id="songArtist">
                                @error('artist') <span class="text-red-300">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="flex-auto w-full mb-1 text-xs space-y-2">
                            <label for="songBody" class="font-semibold text-gray-600 py-2">Lyrics</label>
                            <textarea wire:model="body" placeholder="Enter Lyrics" id="songBody" class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" ></textarea>
                            @error('body') <span class="text-red-300">{{ $message }}</span>@enderror
                        </div>
                        <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                            <button wire:click.prevent="cancel()" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
                            <button  wire:click.prevent="update()" class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
                        </div>
            </div>
        </form>
    </div>
