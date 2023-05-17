{{-- @dd($errors) --}}

<x-layout>
    <div class="flex flex-nowrap h-full">
        <div class="flex-1 h-full ">
            <div>
                <button id="open-bucket_list"
                    class="  m-2 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Create new bucket list
                </button>
            </div>
            <div class="h-5/6 ms:overflow-y-scroll  overflow-x-hidden p-5 ">
                @foreach ($bucketlists as $bucketlist)
                    <article class="w-full inline-flex border border-gray-400 shadow-sm rounded-md p-5 m-2 ">

                        <h1 class=" flex-1 font-semibold uppercase text-blue-400">{{ $loop->index + 1 }} -
                            {{ $bucketlist->title }}</h1>

                        <div class=" text-red-600 hover:  hover:text-red-800 mr-10">
                            <a href="/bucketlist/delete/{{ $bucketlist->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a>
                        </div>

                        <div class=" text-blue-600 hover:  hover:text-blue-800">
                            <a href="/bucketlist/{{ $bucketlist->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>

                    </article>
                @endforeach
            </div>

            {{ $bucketlists->links() }}
        </div>
        <div class="flex-1">




        </div>
    </div>
</x-layout>
<x-modal name="bucket_list" hidden='{{ !$errors->any() }}'>
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
        Create bucket list
    </h3>
    <form class="space-y-6" action="/bucketlist" method="POST">
        @CSRF
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Before i'm 30">

            @error('title')
                <p class=" text-red-400">{{ $message }}</p>
            @enderror

        </div>

        <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Create bucket list</button>

    </form>
</x-modal>
