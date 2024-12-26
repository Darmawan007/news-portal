<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section>
        <div class="container mx-auto px-4">
            <div class="about-box">
                <div class="box text-center">
                    <h1 class=" font-extrabold text-4xl mb-8">About Me</h1>
                    <p class=" lg:w-3/4 w-full mx-auto md:text-base text-xs">News Portal is a project I created to write a news blog as part of an independent internship project. This blog features a variety of news articles, which can be filtered by categories, authors, and more.</p>
                </div>
                <div class="box pt-16">
                    <img src="images/undraw_profile_re_4a55.svg" alt="" class=" md:w-[600px] w-[400] mx-auto">
                </div>
            </div>

        </div>
    </section>
</x-layout>