@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<x-layout>
    <article>
        <header class="inline-flex w-full">
            <div class="m-auto">
                <a href="/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="h-9 w-9  text-blue-600 hover:  hover:text-blue-800">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class=" flex-1 flex justify-center ">
                <h1 class=" font-semibold uppercase text-blue-400 text-3xl"> {{ $bucketlist->title }}
                </h1>

            </div>
            <div>
                <svg id="open-bucket_list" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="h-9 w-9  text-blue-600 hover:  hover:text-blue-800">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>

            </div>
        </header>
        <main class="inline-flex mt-5 w-full">

            <div class="flex-1">
                <div class=" inline-flex w-full">
                    <div class="flex-1">
                        <h6 class="font-semibold uppercase text-blue-400 mt-5 align-middle "> Nummer of items
                            {{ count($bucketlist->items) }}
                        </h6>

                    </div>
                    <div class="m-auto">

                        <svg id="open-bucket_list_items" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="h-9 w-9  text-blue-600 hover:  hover:text-blue-800">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                </div>
                @if (count($bucketlist->items) > 0)


                    @foreach ($bucketlist->items as $bucketlistitem)
                        <article
                            class="w-full inline-flex border border-gray-400 shadow-sm rounded-md p-5 m-2  {{ $bucketlistitem->done ? ' line-through  bg-gray-400  opacity-40' : '' }}">

                            <h1 class=" flex-1 font-semibold uppercase  text-blue-400 ">
                                {{ $bucketlistitem->title }}</h1>


                            <div class="{{ $bucketlistitem->done ? 'hidden' : '' }}  inline-flex ">


                                <a
                                    href="/bucketlistItem/delete/{{ $bucketlistitem->id }}?bucketlist_id={{ $bucketlist->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6  text-red-600 hover:  hover:text-red-800 mr-10">
                                        <path fill-rule="evenodd"
                                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </a>

                                <a
                                    href="/bucketlistItem/done/{{ $bucketlistitem->id }}?bucketlist_id={{ $bucketlist->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6  text-green-600 hover:  hover:text-green-800 ">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>

                            </div>
                        </article>
                    @endforeach
                @else
                    <div class=" text-center">
                        <h1 class=" font-semibold uppercase text-blue-400 text-1xl"> No bucket list items for
                            {{ $bucketlist->title }} </h1>
                    </div>

                @endif

            </div>
            <div class="flex-1 m-5">
                {{-- <div>
                    <div class="slides">
                        <img src="https://assets.simpleviewinc.com/simpleview/image/upload/c_limit,h_1200,q_75,w_1200/v1/clients/queenstownnz/AJ_Hackett_Ledge_Bungy_c21a746f-0655-4959-aba9-429e67d00dcc.jpg"
                            alt="">
                    </div>
                    <div class="slides">
                        <img src="https://artiestenburo2010.nl/app/uploads/2019/03/bungee-vr-boeken.jpg" alt="">
                    </div>
                    <div class="slides h-40" style="display: none;">
                        <img src="https://www.bungy.nl/wp-content/uploads/2018/03/bungy-jump-holland-faq.jpg"
                            alt="test">

                    </div>
                </div> --}}
            </div>

        </main>
        <footer></footer>
    </article>
</x-layout>


<script>
    let slideIndex = 0;

    slider();

    function setSlidersToNone(sliders) {
        for (let index = 0; index < sliders.length; index++) {
            sliders[index].style.display = 'none';

        }

    }

    function slider() {
        let sliders = document.getElementsByClassName('slides');
        setSlidersToNone(sliders);



        slideIndex++;



        if (slideIndex < slider.length) slideIndex = 1;
        console.log(slideIndex);
        sliders[slideIndex - 1].style.display = 'block';

        setTimeout(slider, 2000);


    }
</script>

<!-- <script>
    let slideIndex = 0;
    let runSliders = true;
    showSliders();

    function showSliders(nummerOfslides) {
        let sliders = document.getElementsByClassName('slides');
        setSlidersToNone(sliders);
        slideIndex++;

        if (slideIndex > sliders.length) slideIndex = 1;
        sliders[slideIndex - 1].style.display = 'block';
        if (runSliders) setTimeout(showSliders, 2000);
    }

    function setSlidersToNone(sliders) {
        for (let index = 0; index < sliders.length; index++) {
            sliders[index].style.display = 'none';
        }
    }
</script> -->












<x-modal name='bucket_list_items' hidden='{{ !$errors->any() }}'>
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
        Create bucket list items
    </h3>
    <form class="space-y-6" action="/bucketlistItem/{{ $bucketlist->id }}" method="POST">
        @CSRF
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name:</label>
            <input type="text" name="title" id="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Bungy Jump" required>

            @error('title')
                <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description:</label>
            <textarea type="text" name="description" id="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Before i'm 30" required></textarea>

        </div>
        <div class=" inline-flex w-full">
            <div class=" flex-1">
                <label for="prioriteit"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioriteit:</label>
                <select name="prioriteit" id="prioriteit"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required>
                    <option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
                </select>
            </div>
            <div class=" flex-1">
                <label for="done"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Done:</label>
                <input type="checkbox" name="done" id="done" style="    height: 2.7rem"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="0">
            </div>
        </div>

        <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Create bucket list item</button>

    </form>
</x-modal>

<x-modal name="bucket_list">
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
        Create bucket list
    </h3>
    <form class="space-y-6" action="/bucketlist/{{ $bucketlist->id }}" method="POST">
        @CSRF
        @method('put')
        <div>
            <label for="title"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $bucketlist->title) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Before i'm 30">
            @error('title')
                <div class=" text-red-400  mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Create bucket list</button>

    </form>
</x-modal>
