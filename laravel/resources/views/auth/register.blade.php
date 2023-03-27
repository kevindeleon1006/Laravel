@extends('auth.main')
@section('content')
<main class="sm:p-6 md:p-8">
    <div class="bg-gray-800 max-w-lg mx-auto p-5 my-10 rounded-lg shadow-2xl">
        {{-- @if($errors->any())
        @foreach($errors->all() as $error)
        <p class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">{{ $error }}</p>
        @endforeach
        @endif --}}
        <form class="space-y-4" method="POST" action="{{ route('user.validate_registration') }}">
            @csrf
            <h5 class="text-xl text-center font-medium text-gray-900 dark:text-white">Create an Account</h5>
            <hr>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Juan Dela Cruz" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('name') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('name') }}</p>
                </span>
            </div>
            <div >
            {{-- wala lang --}}
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="name@email.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('email') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('email') }}</p>
                </span>
            </div>
            <div>
                <label for="municipality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipality</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('municipality') ?'is-invalid' : '' }}"
                        onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('municipality').value=this.options[this.selectedIndex].value;">
                        <option></option>
                        <option value="{{ old('municipality') }}">Calapan</option>
                        <option value="{{ old('municipality') }}">Puerto Galera</option>
                        <option value="{{ old('municipality') }}">San Teodoro</option>
                        <option value="{{ old('municipality') }}">Baco</option>
                        <option value="{{ old('municipality') }}">Naujan</option>
                        <option value="{{ old('municipality') }}">Victoria</option>
                        <option value="{{ old('municipality') }}">Roxas</option>
                        <option value="{{ old('municipality') }}">Pinamalayan</option>
                        <option value="{{ old('municipality') }}">Bansud</option>
                        <option value="{{ old('municipality') }}">Socorro</option>
                        <option value="{{ old('municipality') }}">Gloria</option>
                        <option value="{{ old('municipality') }}">Bulalacao</option>
                </select>
                <input type="hidden" name="municipality" id="displayValue" 
                        placeholder="add/select a value" onfocus="this.select()"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('municipality') ?'is-invalid' : '' }}"  >
                <input name="idValue" id="municipality" type="hidden">
                
                {{-- <input type="text" name="municipality" id="municipality" value="{{ old('municipality') }}" placeholder="Naujan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('municipality') ?'is-invalid' : '' }}"   > --}}
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('municipality') }}</p>
                </span>
            </div>
            {{-- walalang --}}
            
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-1 group">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="09123456789" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('phone') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('phone') }}</p>
                </span>
                </div>
                <div class="relative z-0 w-full mb-1 group">
                    <div class="relative z-0 w-full mb-1 group">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <input type="text" name="position" id="position" value="{{ old('position') }}" placeholder="----------" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('position') ?'is-invalid' : '' }}"   >
                    <span class="invalid feedback " role="alert">
                        <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('position') }}</p>
                    </span>
                </div>
            </div>
            {{-- wala lang --}}
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white {{ $errors->has('password') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('password') }}</p>
                </span>
            </div>
            {{-- wala lang --}}
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm your password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white {{ $errors->has('password_confirmation') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('password_confirmation') }}</p>
                </span>
            </div>
            
            {{-- button --}}
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Already have an account! <a href="{{ route('login') }}" class="text-blue-700 hover:underline dark:text-blue-500">Sign In</a>
            </div>

        </form>
    </div>
</main>

@endsection('content')