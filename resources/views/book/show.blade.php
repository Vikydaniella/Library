@extends('layout.layout')

@section('content')
@include('partials._search')


            <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src='img/library.jpeg'
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$book->title}}</h3>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$book->author}}</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$book->category}}</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$book->year_of_publication}}</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$book->isbn}}</a>
                            </li>
                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <a href="/book/{{$book->id}}/edit">
        <i class='fa-solid fa-pencil'> </i> Edit
        </a>

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright Library; 2023, All Rights reserved</p>

            <a
                href="/book/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Create a book</a
            >
        </footer>
    </body>
</html>
@endsection