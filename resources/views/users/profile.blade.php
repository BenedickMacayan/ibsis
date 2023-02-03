<x-layout>
  <x-card class="p-10 mx-auto mt-24 shadow-xl w-6/12 text-2xl">
    <header class="text-center">
      <h1 class="text-3xl font-bold uppercase mb-6 text-green-900">PROFILE</h2>
    </header>

      @csrf

      <div class="flex justify-between">

        <div class="mb-7 w-6/12">

          <h2 class="block text-lg mb-2 text-green-700 font-semibold"> First Name </h3>
          <div class="p-2">
            {{auth()->user()->first_name}}
          </div>

        </div>

        <div class="mb-7 w-6/12">

          <h2 class="block text-lg mb-2 text-green-700 font-semibold"> Last Name </h3>
          <div class="p-2">
            {{auth()->user()->last_name}}
          </div>

        </div>

      </div>

      <div class="mb-7">

        <h2 class="block text-lg mb-2 text-green-700 font-semibold"> Email Address </h3>
        <div class="p-2">
          {{auth()->user()->email}}
        </div>

      </div>

      <div class="mb-7">

      <h3 class="block text-lg mb-2 text-green-700 font-semibold"> Phone Number </h3>
      <div class="p-2">
        {{auth()->user()->phone_no}}
      </div>

      </div>

      <div class="mb-7">
        <a href="{{ route('edit', ['id' => Auth::id()]) }}" class="bg-lime-600 text-white rounded py-2 px-4 hover:bg-green-600">
          Edit Profile
        </a>
      </div>

  </x-card>
</x-layout>