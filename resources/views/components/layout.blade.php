<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#7bb876',
            },
          },
        },
      }
  </script>
  <title>IBSIS</title>
</head>

<body class="mb-48 bg-cover bg-no-repeat" style="background-image: url(images/background.png)">
  <nav class="flex justify-between items-center mb-4 bg-white">
      <div class="flex justfy-between text-center">
        <a href="/"><figure class="pl-10 pt-5 pb-5"><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo" /></figure></a>
        <div class="font-sans p-10 align-baseline font-bold text-green-900">
          <h5>IOT BASED SMART IRRIGARTION SYSTEM</h5>
          <h6>FOCUSED ON URBAN AGRICULTURE</h6>
        </div>
      </div>
    <ul class="flex space-x-6 mr-6 text-2xl">
      @auth
      <li>
        <span class="font-bold uppercase">
          <a href="{{ url('/profile') }}" class="hover:text-laravel text-green-900">View Profile</a>
        </span>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-door-closed text-green-900"></i> <span class="hover:text-laravel text-green-900">LOG OUT</span>
          </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-laravel text-green-900"><i class="fa-solid fa-user-plus text-green-900"></i> REGISTER</a>
      </li>
      <li>
        <a href="/login" class="hover:text-laravel text-green-900"><i class="fa-solid fa-arrow-right-to-bracket text-green-900"></i> LOGIN</a>
      </li>
      @endauth
    </ul>
  </nav>

  <main>
    {{$slot}}
  </main>

  <x-flash-message />
</body>

</html>