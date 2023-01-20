<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24 shadow-xl">
      <header class="text-center">
        <h2 class="text-2xl text-green-900 font-bold uppercase mb-6">Login</h2>
      </header>
  
      <form method="POST" action="/users/authenticate">
        @csrf
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2 text-green-700">Email</label>
          <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password" class="inline-block text-lg mb-2 text-green-700">
            Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
            value="{{old('password')}}" />
  
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button type="submit" class="bg-lime-600 text-white rounded py-2 px-4 hover:bg-green-600">
            Sign In
          </button>
        </div>
  
        <div class="mt-8">
          <p class="text-green-700">
            Don't have an account?
            <a href="/register" class="text-laravel">Register</a>
          </p>
        </div>
      </form>
    </x-card>
  </x-layout>