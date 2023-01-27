<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24 shadow-xl">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6 text-green-900">User Registration</h2>
      </header>

        @csrf
        <div class="mb-6">

          <h3 class="inline-block text-lg mb-2 text-green-700"> First Name </h3>
          <span>
            {{auth()->user()->first_name}}     
          </span>
          
        </div>

        <div class="mb-6">

        <h3 class="inline-block text-lg mb-2 text-green-700"> Last Name </h3>
          <span>
            {{auth()->user()->last_name}}     
          </span>

        </div>
  
        <div class="mb-6">

        <h3 class="inline-block text-lg mb-2 text-green-700"> Email Address </h3>
          <span>
            {{auth()->user()->email}}     
          </span>

        </div>

        <div class="mb-6">

        <h3 class="inline-block text-lg mb-2 text-green-700"> Phone Number </h3>
          <span>
            {{auth()->user()->phone_no}}     
          </span>

        </div>
  
        <!-- <div class="mb-6">
          <button type="submit" class="bg-lime-600 text-white rounded py-2 px-4 hover:bg-green-600">
            Sign Up
          </button>
        </div> -->

    </x-card>
  </x-layout>