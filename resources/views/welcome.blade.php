<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

    <title>Laravel</title>


</head>

<body class="bg-gray-200 p-4">
    <div class="lg:w-2/4  mx-auto py-8 px-6 bg-white rounded-xl">
        <h1 class="font-bold text-5xl text-center mb-8">Laravel + Tailwind</h1>
        <div class="mb-6">
            <form class="flex flex-col space-y-4" method="POST" action="/">
                @csrf
                <input type="text" name="title" placeholder="The todo title"
                    class="py-3 px-4 bg-gray-100 rounded-xl">
                <textarea name="description" placeholder="The todo decription" class="py-3 px-4 bg-gray-100 rounded-xl"></textarea>
                <button class="w-28 py-4 px-8 bg-green-300 text-white rounded-xl">Add</button>
            </form>
           
        </div>

        <hr>

        <div class="mt-2">
            @foreach ($tolis as $toli)
                <div @class ([ 
                    'py-4 flex items-center border-b border-gray-300 px-3' , 
                    $toli->isDone ? 'bg-green-200' : '',
                    ]
                    )
                    >

                    <div class="flex-1 pr-8">
                        <h3 class="text-lg font-semibold">{{ $toli->title }} </h3>
                        <p class="text-gray-500">The description</p>
                    </div>

                    <div class="flex space-x-3">
                        <form method="POST" action="/{{ $toli->id }}">
                            @csrf
                            @method('PATCH')



                            <button class="py-2 px-2 bg-green-400 text-white rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41z" />
                                </svg>
                            </button>
                        </form>

                        <form method="POST" action="/{{ $toli->id }} ">
                            @csrf
                            @method('DELETE')

                            <button class="py-2 px-2 bg-red-400 text-white rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M216 50h-42V40a22 22 0 0 0-22-22h-48a22 22 0 0 0-22 22v10H40a6 6 0 0 0 0 12h10v146a14 14 0 0 0 14 14h128a14 14 0 0 0 14-14V62h10a6 6 0 0 0 0-12M94 40a10 10 0 0 1 10-10h48a10 10 0 0 1 10 10v10H94Zm100 168a2 2 0 0 1-2 2H64a2 2 0 0 1-2-2V62h132Zm-84-104v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0m48 0v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0" />
                                    Delete
                                </svg>



                            </button>
                        </form>

                    </div>

                </div>
            @endforeach

        </div>


    </div>

</body>

</html>
