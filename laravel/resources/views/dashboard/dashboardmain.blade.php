@extends('dashboard.dash')
@section('content')

<div class="container">
   <div class="p-4 sm:ml-64">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <h5 class="mb-3 text-xl text-center font-medium text-gray-900 dark:text-white">Welcome Back {{ Auth::user()->name }}</h5>
        
        </div>
    </div>
</div>
@endsection