<x-layout>
    <x-card class="p-10 mx-auto mt-24 shadow-xl w-6/12 text-2xl">
        <header class="text-center">
          <h1 class="text-3xl font-bold uppercase mb-6 text-green-900">PROFILE</h2>
        </header>

        <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">

            
            @csrf
            @method('PUT')

            <div class="flex justify-between">

                <div class="mb-7 w-6/12">
        
                  <label for="first_name" class="block text-lg mb-2 text-green-700 font-semibold">First Name</label>
                  <input type="text" class="border border-gray-200 rounded p-2 w-11/12" name="first_name"
                   value="{{auth()->user()->first_name}}" />
          
                  @error('first_name')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
        
                </div>
        
                <div class="mb-7 w-6/12">
        
                  <label for="last_name" class="block text-lg mb-2 text-green-700 font-semibold">Last Name</label>
                  <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name"
                   value="{{auth()->user()->last_name}}" />
          
                  @error('last_name')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
        
                </div>
        
              </div>
        
              <div class="mb-7">
        
                <label for="email" class="block text-lg mb-2 text-green-700 font-semibold">Email Address</label>
                  <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                   value="{{auth()->user()->email}}" />
          
                  @error('email')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
        
              </div>
        
              <div class="mb-7">
        
                <label for="phone_no" class="block text-lg mb-2 text-green-700 font-semibold">Phone Number</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone_no"
                  value="{{auth()->user()->phone_no}}" />
          
                @error('phone_no')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
        
              </div>
        
              <div class="mb-7">
              <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-green-600">
                        Update Profile
                    </button>
                  <a href="/" class="text-black ml-4"> Back </a>
              </div>

        </form>

    </x-card>
</x-layout>