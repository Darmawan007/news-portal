<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <article class="py-8 max-w-screen-md">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $news['title'] }}</h2>
        <div>
            By
            <a href="/authors/{{ $news->author->username }}" class="hover:underline text-base text-gray-500">{{ $news->author->name }}</a> 
            in
            <a href="/categories/{{ $news->category->slug }}" class="hover:underline text-base text-gray-500">{{ $news->category->name}}</a>| {{ $news->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $news['content']}}</p>
        <a href="/news" class="font-medium text-blue-500 hover:underline">&laquo; Back to news</a>
    </article> --}}

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <a href="/news" class="font-medium text-m text-blue-500 hover:underline">&laquo; Back to all news</a>
                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{$news->author->name}}">
                        <div>
                            <a href="/news?author={{ $news->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $news->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{ $news->created_at->diffForHumans() }}</p>
                            <a href="/news?category={{ $news->category->slug }}">
                                <span class="bg-{{$news->category->color}}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $news->category->name}}
                                </span>
                            </a>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $news['title'] }}</h1>
                @if ($news->image)
       <div class="my-3">
         <img src="{{asset('storage/'. $news->image)}}" class="card-img-top" alt="..." class="img-fluid mt-3">
     </div>
       @else
       <div class="my-3">
         <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
     </div>
       @endif
            </header>
            {!! $news['content'] !!}
        </article>
    </div>
</main>
</x-layout>

