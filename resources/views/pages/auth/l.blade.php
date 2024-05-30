<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="px-6 py-4 text-white bg-gray-700 min-h-screen">
        <img class="h-40 mt-4 mb-6 rounded-lg" src="{{ asset('assets/image/image.png') }}" alt="">

        <h2 class="text-3xl mb-6">Lorem ipsum dolor sit amet.</h2>
        <div class="flex justify-between items-center gap-4">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
        </div>

        <div class="inline-flex items-center justify-center mb-6 w-full">
            <hr style="height: 1px;" class="w-full my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <span class="absolute px-3 font-medium -translate-x-1/2 left-1/2 bg-gray-700 text-white dark:bg-gray-900">OR</span>
        </div>

        <input type="email" id="helper-text" aria-describedby="helper-text-explanation" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan ">
        <input type="email" id="helper-text" aria-describedby="helper-text-explanation" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan ">
        <div class="flex items-start mb-4">
            <div class="flex items-center h-5">
              <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
            </div>
            <label for="terms" class="ml-2 text-sm font-medium text-white dark:text-gray-300">Remember Me</label>
          </div>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>

        
        <p class="text-center">Lorem ipsum dolor sit? <a href="#" class="text-blue-400 underline">here</a></p>

        

    </div>
</body>
</html>