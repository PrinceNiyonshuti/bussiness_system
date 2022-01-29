<x-layout>
    <div class="bg-gray-200 min-h-screen pb-24">
        <x-menu />

        <div class="container mx-auto max-w-3xl mt-8">

            <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Welcome {{ Auth::user()->name }} </h1>
        </div>
    </div>
</x-layout>
