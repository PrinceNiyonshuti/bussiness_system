<x-layout>
    <div class="bg-gray-200 min-h-screen pb-24">
        <x-menu />

        <div class=" px-10 container mt-8">

            <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Welcome {{ Auth::user()->name }} </h1>

        </div>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
            @foreach ($companies as $company )
            <div class="rounded overflow-hidden bg-white shadow-lg">
                <img class="object-cover h-48 w-96" src="/storage/{{ $company->logo }}" alt="{{ $company->name }}">
                <div class="px-6 py-4">
                    <a href="/dashboard/{{ $company->name  }}">
                        <div class="font-bold text-xl mb-2">{{ $company->name }}</div>
                    </a>
                    <p class="text-gray-700 text-base">
                        <strong>Company Director :</strong> {{ $company->director }}
                    </p>
                    <p class="text-gray-700 text-base">
                        <strong>Company Address :</strong> {{ $company->address }}
                    </p>
                    <p class="text-gray-700 text-base">
                        <strong>Website :</strong> <a href="{{ $company->website }}" target="_blank" class="text-blue-700">{{ $company->website }}</a>
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">Employees : {{ $company->employees->count() }}</span>
                    <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">Clients : {{ $company->clients->count() }}</span>
                </div>
            </div>
            @endforeach

        </div>
        <div class="p-10 ">
            {{ $companies->links() }}
        </div>

    </div>
    </div>
</x-layout>
