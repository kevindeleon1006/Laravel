@extends('dashboard.dash')
@section('content')

<div class="container">
    <div class="p-4 sm:ml-64">
       <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        {{-- @if($errors->any())
        @foreach($errors->all() as $error)
        <p class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">{{ $error }}</p>
        @endforeach
        @endif --}}
        <form class="space-y-4" method="POST" action="{{route('user.update_profile',$user->id)}}">
            @csrf

            <h5 class="text-xl text-center font-medium text-gray-900 dark:text-white">Update Your Information</h5>
            <hr>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('name') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('name') }}</p>
                </span>
            </div>
            <div >
            {{-- wala lang --}}
                {{-- <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label> --}}
                <input type="hidden" name="email" id="email" value="{{ $user->email }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('email') ?'is-invalid' : '' }}"   >
                
            </div>
            <div>
                <label for="municipality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipality</label>
                <input type="text" name="municipality" id="municipality" value="{{ $user->municipality }}" placeholder="Naujan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('municipality') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('municipality') }}</p>
                </span>
            </div>
            {{-- walalang --}}
            
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-1 group">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ $user->phone }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('phone') ?'is-invalid' : '' }}"   >
                <span class="invalid feedback " role="alert">
                    <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('phone') }}</p>
                </span>
                </div>
                <div class="relative z-0 w-full mb-1 group">
                    <div class="relative z-0 w-full mb-1 group">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <input type="text" name="position" id="position" value="{{ $user->position }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:outline-none {{ $errors->has('position') ?'is-invalid' : '' }}"   >
                    <span class="invalid feedback " role="alert">
                        <p class="mt-1 mb-3 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">{{ $errors->first('position') }}</p>
                    </span>
                </div>
            </div>
            {{-- wala lang --}}
            
            
            {{-- button --}}
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            <a class="w-full text-white bg-blue-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="userprofile">Back </a>
        </form>
    </div>
</div>
</div>

@endsection