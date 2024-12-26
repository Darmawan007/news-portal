<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section>
        <div class="container mx-auto px-4">
            <div class="contact-box">
                <div class="box text-center">
                    <h1 class=" font-extrabold text-4xl mb-8">Contact</h1>
                    <p>Get in Touch – We’d Love to Hear from You!</p>
                </div>
                <form action="" class=" mt-6">
                    <table class=" mx-auto lg:w-3/5 w-3/4">
                        <tr>
                            <td><input type="text" name="Full Name" placeholder="Full Name..." autocomplete="off" required class=" w-full h-12 rounded-md border p-3"></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="Email" placeholder="Your Email..." autocomplete="off" required class=" w-full h-12 rounded-md border p-3"></td>
                        </tr>
                        <tr>
                            <td><textarea name="message" id="" cols="30" rows="10" placeholder="Message.." autocomplete="off" required class=" w-full rounded-md border p-3"></textarea></td>
                        </tr>
                        <tr>
                            <td><button class=" w-40 h-10 bg-blue-600 ml-auto block font-bold rounded hover:bg-blue-700 text-white">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</x-layout>