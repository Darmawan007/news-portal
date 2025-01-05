<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- Hero Section -->
    <section>
        <div class="header-box flex lg:flex-row flex-col items-center gap-10">
            <div class="box lg:w-1/2 lg:order-1 order-2 lg:text-left text-center">
                <h1 class="font-extrabold md:text-4xl sm:text-3xl text-2xl mb-4 text-slate-900">
                    Stay Updated, Stay Ahead Welcome to News Portal!
                </h1>
                <p class="mb-8 text-slate-600 md:text-base sm:text-sm text-xs">
                    Never miss a story that matters. Sign up now to get the latest news, exclusive insights, and updates delivered straight to your fingertips!
                </p>
                <a href="/register" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Sign Up Now</a>
                </div>
            <div class="box lg:w-1/2 lg:order-2 order-1 lg:pt-0 pt-10">
                <img src="storage/news-images/Winnicode.png" alt="" class="xl:w-[500px] lg:w-[400px] md:w-[300px] sm:w-[250px] w-[200px] block ml-auto">
            </div>
        </div>
    </section>

    <!-- Main News Section -->

    <div class="mt-10 my-4 py-2 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
        <h1 class="text-2xl font-bold text-slate-900 mb-8 text-center">Latest News</h1>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2">
    @forelse ($mainNews as $news)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    @if ($news->image)
       <div class="my-3">
         <img src="{{asset('storage/'. $news->image)}}" class="card-img-top" alt="..." class="img-fluid mt-3">
     </div>
       @else
       <div class="my-3">
         <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
     </div>
       @endif
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/news?category={{ $news->category->slug }}">
                            <span class="bg-{{$news->category->color}}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $news->category->name}}
                            </span>
                        </a>
                        <span class="text-sm">{{ $news->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/news/{{ $news->slug }}" class="hover:underline">{{ $news['title'] }}</a></h2>
                        <div class="mb-5 font-light text-gray-500 dark:text-gray-400">
                            {!! Str::limit($news['content'], 100) !!}
                        </div>
                    <div class="flex justify-between items-center">
                        <a href="/news?author={{ $news->author->username }}">
                        <div class="flex items-center space-x-3">
                            @if ($news->author->photo)
                            <img class="w-7 h-7 rounded-full" src="{{ asset('storage/' . $news->author->photo) }}" alt="{{$news->author->name}}" />
                            @else
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{$news->author->name}}" />
                            @endif
                                <span class="font-medium text-sm dark:text-white">
                                    {{ $news->author->name }}
                                </span>
                        </div>
                    </a>
                        <a href="/news/{{ $news['slug'] }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-sm">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>
                @empty
                <a href="/news" class="block text-blue-500 hover:underline">&laquo; Back to all news</a>
                    <p class="font-semibold text-center fs-4">News not found!</p>
    @endforelse
</div>
<div class="mt-10 text-center">
    <a href="/news" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">All News</a>
</div>
    </div>

    <!-- Source Section -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">News Source</h2>
        <div class="slide-container swiper py-6 pb-8">
            <div class="slide-content2">
                <div class="swiper-wrapper" id="source-carousel">
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mini News Section -->
    <section class="mt-10">
        <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">Mini News</h2>
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-4 place-items-center">
            @foreach ($miniNews as $mini)
            <div class="bg-white shadow-md p-6 rounded w-[300px] text-center">
                <h3 class="font-medium text-base mb-2">
                    <a href="/news/{{ $mini->slug }}" class="hover:underline">{{ $mini->title }}</a>
                </h3>
                <p class="text-slate-600 text-sm">{{ Str::limit($mini->description, 50) }}</p>
            </div>
            @endforeach
        </div>
    </section>
    
</x-layout>
