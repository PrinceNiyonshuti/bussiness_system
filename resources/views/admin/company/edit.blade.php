<x-layout>
    <div class="bg-gray-200 min-h-screen pb-24">
        <x-menu />
        <div class="container mx-auto max-w-3xl mt-8">

            <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">New Company</h1>

            <form action="/company/{{ $company->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                    <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                        <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Profile Info</h2>
                        <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name, and Image.</p>
                    </div>
                    <div class="md:w-2/3 w-full">
                        <div class="px-16">
                            <label for="name" class="text-sm text-gray-600">Name</label>
                            <input type="text" value="{{ $company->name}}" name="name" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="address" class="text-sm text-gray-600">Address</label>
                            <input type="text" value="{{ $company->address}}" name="address" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="telephone" class="text-sm text-gray-600">Telephone</label>
                            <input type="text" value="{{ $company->telephone}}" name="telephone" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('telephone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="website" class="text-sm text-gray-600">Website</label>
                            <input type="text" value="{{ $company->website}}" name="website" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('website')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="director" class="text-sm text-gray-600">Director</label>
                            <input type="text" value="{{ $company->director}}" name="director" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('director')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16 clearfix">
                            <label for="photo" class="text-sm text-gray-600 w-full block">Logo</label>
                            <img class="rounded-full w-16 h-16 border-4 mt-2 border-gray-200 float-left" id="photo" src="/storage/{{ $company->logo}}" alt="{{ $company->logo}}">
                            <div class="bg-gray-200 text-gray-500 text-xs mt-5 ml-3 font-bold px-4 py-2 rounded-lg float-left hover:bg-gray-300 hover:text-gray-600 relative overflow-hidden cursor-pointer">
                                <input type="file" name="logo" onchange="loadFile(event)" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"> Change Photo
                            </div>
                        </div>

                        <button class="block w-full px-4 py-2 mt-4 mb-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" type="submit">
                            Edit Company
                        </button>

                    </div>
            </form>
        </div>
        </form>
    </div>
    </div>
</x-layout>
