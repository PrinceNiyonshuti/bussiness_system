<x-layout>
    <div class="bg-gray-200 min-h-screen pb-24">
        <x-menu />

        <div class="p-10">
            <div class=" w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/storage/{{ $company->logo }}')" title="Mountain">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                            </svg>
                            Members only
                        </p>
                        <div class="text-gray-900 font-bold text-xl mb-2">{{ $company->name }}</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>
                    <div class="flex items-center pt-4 border-t border-gray-400">
                        <img class="w-10 h-10 rounded-full mr-4" src="/storage/{{ $company->logo }}" alt="Avatar of Writer">
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">John Smith</p>
                            <p class="text-gray-600">Aug 18</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
