<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit Profile</h2>
        {{-- <p class="mb-4">Edit: {{$user->title}}</p> --}}
      </header>
  
      <form method="POST" action="/user/{{$user->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="first_name" class="inline-block text-lg mb-2">First Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name"
            placeholder="Example: Benedick" value="{{$user->first_name}}" />
  
          @error('first_name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="last_name" class="inline-block text-lg mb-2">Last Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name"
            placeholder="Example: Macayan" value="{{$user->last_name}}" />
  
          @error('last_name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="phone_no" class="inline-block text-lg mb-2">Phone Number</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone_no"
            placeholder="Example: 091xxxxxxxx" value="{{$user->phone_no}}" />
  
          @error('phone_no')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            Email Address
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$user->email}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        {{-- <div class="mb-6">
          <label for="website" class="inline-block text-lg mb-2">
            Website/Application URL
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
            value="{{$listing->website}}" />
  
          @error('website')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">
            Tags (Comma Separated)
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
            placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" />
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
  
          <img class="w-48 mr-6 mb-6"
            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
  
          @error('logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Job Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>  --}}
  
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Update Profile
            </button>
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
  </x-layout>
  