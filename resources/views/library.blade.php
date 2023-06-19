@extends('layout.layout')

@section('content')

@include('partials._hero')
@include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            @unless(count($books)==0)
    
            @foreach($books as $book)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/acme.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/book/{{$book->id}}">{{$book->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$book->author}}</div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">{{$book->category}}</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">{{$book->year_of_publication}}</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">{{$book->isbn}}</a>
                                </li>
                        </div>
                    </div>
                </div>
            @endforeach

            @else
            <p>No book found</p>
            @endunless
    </div>
@endsection