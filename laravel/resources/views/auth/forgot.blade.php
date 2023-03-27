@extends('auth.main') 
@section('content')
<main class="sm:p-6 md:p-8">
    <div class="bg-gray-800 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <form
            id="forgotForm"
            class="space-y-6"
            method="POST"
            action="{{ route('user.validate_login') }}"
        >
            @csrf
            <h5
                class="text-xl text-center font-medium text-gray-900 dark:text-white"
            >
                Please Login
            </h5>
            @if (session('success'))
            <p
                class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-green-400"
                role="alert"
            >
                {{ session("success") }}
            </p>

            @endif
            <hr />
            <div>
                {{-- wala lang --}}
                <label
                    for="first_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Your Email</label
                >
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    placeholder="name@email.com"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('email') ?'is-invalid' : '' }}"
                />
                <span class="invalid feedback" role="alert">
                    <p
                        class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    >
                        {{ $errors->first('email') }}
                    </p>
                </span>
            </div>
            {{-- wala lang --}}
            <button
                type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                Login to your account
            </button>
        </form>
    </div>
</main>

@endsection('content')
