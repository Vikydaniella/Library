<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Library | Post a Book</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="index.html"
                ><img class="w-24" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/book/edit" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i> Manage Books</a
                    >
                </li>
                <li>
                    <form action="index.html">
                        <button>
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        <main>
            <div class="mx-4">
                <div
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Book
                        </h2>
                    </header>

                    <form action="/book" method='POST'>
                    @csrf
                        <div class="mb-6">
                            <label
                                for="title"
                                class="inline-block text-lg mb-2"
                                >Title of Book</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                            />
                        </div>
                            @error('title')
                            <p class='text-red-500 text-xs my-1'>{{$message}}</p>
                            @enderror

                        <div class="mb-6">
                            <label for="author" class="inline-block text-lg mb-2"
                                >Author</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="Author"
                                placeholder="Example: Wole Soyinka"
                            />
                        </div>

                        <div class="mb-6">
                            <label
                                for="category"
                                class="inline-block text-lg mb-2"
                                >book Category</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="category"
                                placeholder="Example: Fiction, Romance, etc"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="year_of_publication" class="inline-block text-lg mb-2"
                                >Year of Publication</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="year_of_publication"
                            />
                        </div>

                        <div class="mb-6">
                            <label
                                for="isbn"
                                class="inline-block text-lg mb-2"
                            >
                                ISBN
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="isbn"
                                rows="10"
                            ></textarea>
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                               <input type='submit' value='Create a Book'>
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright Library; 2022, All Rights reserved</p>

            <a
                href="/book"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Create a Book</a
            >
        </footer>
    </body>
</html>