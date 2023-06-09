@extends('dashboard.dash')
@section('content')
<div class="container">
   <div class="p-4 sm:ml-64">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
         
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
       <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
           <tr>
               <th scope="col" class="px-6 py-3">
                   Name
               </th>
               <th scope="col" class="px-6 py-3">
                   Email
               </th>
               <th scope="col" class="px-6 py-3 text-right">
                   Action
               </th>
           </tr>
       </thead>
       <tbody>
        @foreach ($user as $user)
            
        
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $user->name }}
               </th>
               <td class="px-6 py-4">
                {{ $user->email }}
               </td>
               <td class="px-6 py-4 text-right">
                   <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
               </td>
           </tr>
           @endforeach  
       </tbody>
   </table>
</div>

      </div>
   </div>
   
</div>
@endsection