<x-layout>
    <div class="bg-gray-200 min-h-screen pb-24">
        <x-menu />
        <div class="container mx-auto max-w-3xl mt-8">

            <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Edit Employee</h1>

            <form action="/employee/{{ $employee->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                    <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                        <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Profile Info</h2>
                        <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name, and Image.</p>
                    </div>

                    <div class="md:w-2/3 w-full">

                        <div class="px-16">
                            <label for="name" class="text-sm text-gray-600">Employee Name:</label>
                            <input type="text" value="{{ $employee->name }}" name="name" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="surname" class="text-sm text-gray-600">Employee surname:</label>
                            <input type="text" value="{{ $employee->surname }}" name="surname" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('surname')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="email" class="text-sm text-gray-600">Employee Email:</label>
                            <input type="text" value="{{ $employee->email }}" name="email" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="telephone" class="text-sm text-gray-600">Employee Telephone:</label>
                            <input type="text" value="{{ $employee->telephone }}" name="telephone" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('telephone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label for="emp_start_date" class="text-sm text-gray-600">Employee Starting Date:</label>
                            <input type="date" value="{{ $employee->emp_start_date }}" name="emp_start_date" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
                            @error('emp_start_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-16">
                            <label class="text-sm text-gray-600">Select Company:</label>
                            <select name="company_id" id="company_id" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">

                                @foreach (\App\Models\Company::all() as $company)
                                <option value="{{ $company->id }}" {{ old('company_id',$employee->company_id == $company->id ? 'selected' : '') }}>{{ ucwords($company->name) }}</option>
                                @endforeach

                            </select>
                            @error('company_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button class="block w-full px-4 py-2 mt-4 mb-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" type="submit">
                            Edit Employee
                        </button>

                    </div>
            </form>
        </div>
        </form>
    </div>
    </div>
</x-layout>
