<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="relative">
        <img src="{{ asset('assets/image/loginBg.png') }}" class="absolute inset-0 object-cover w-full h-full" alt="Login Account" />
        <div class="min-h-screen relative bg-black bg-opacity-80">
          <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
            <div class="flex flex-col items-center justify-between xl:flex-row">
              <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                  The quick, brown fox <br class="hidden md:block" />
                  jumps over a <span class="text-blue-400">lazy dog</span>
                </h2>
                <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
                </p>
                <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-blue-400 hover:text-blue-700">
                  Learn more
                  <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                  </svg>
                </a>
              </div>
              <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                  <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                    Register Account
                  </h3>
                  <form method="POST" action="{{ route('registerProcess') }}">
                    @csrf
                    <div class="mb-1 sm:mb-2">
                      <label for="name" class="inline-block mb-1 font-medium">Full Name</label>
                      <input
                        placeholder="Input your full name"
                        required=""
                        type="text"
                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-blue-400 focus:outline-none focus:shadow-outline"
                        id="name"
                        name="name"
                      />
                    </div>
                    <div class="mb-1 sm:mb-2">
                      <label for="email" class="inline-block mb-1 font-medium">Email Address</label>
                      <input
                        placeholder="Input your email address"
                        required=""
                        type="text"
                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-blue-400 focus:outline-none focus:shadow-outline"
                        id="email"
                        name="email"
                      />
                    </div>
                    <div class="mb-1 sm:mb-2">
                      <label for="password" class="inline-block mb-1 font-medium">Password</label>
                      <input
                        placeholder="Input your password"
                        required=""
                        type="password"
                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-blue-400 focus:outline-none focus:shadow-outline"
                        id="password"
                        name="password"
                      />
                    </div>
                    <div class="mb-1 sm:mb-2">
                      <label for="confirmPassword" class="inline-block mb-1 font-medium">Confirm Password</label>
                      <input
                        placeholder="Confirm your password"
                        required=""
                        type="password"
                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-blue-400 focus:outline-none focus:shadow-outline"
                        id="confirmPassword"
                        name="confirmPassword"
                      />
                    </div>
                    <div class="mt-4 mb-2 sm:mb-4">
                      <button
                        type="submit"
                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                      >
                        Register Now
                      </button>
                    </div>
                    <p class="text-xs text-gray-600 sm:text-sm">
                      Already have an account? <a href="/auth/login" class="transition-all text-blue-600 hover:underline">Login</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>