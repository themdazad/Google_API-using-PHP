<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Distance</title>
    <link rel="stylesheet" href="tailwind/tailwind-all.css">
    <link rel="stylesheet" href="tailwind/tailwind-all.min.css">
    <link rel="stylesheet" href="tailwind/tailwind-base.css">
    <link rel="stylesheet" href="tailwind/tailwind-base.min.css">
    <link rel="stylesheet" href="tailwind/tailwind-components.css">
    <link rel="stylesheet" href="tailwind/tailwind-components.min.css">
    <link rel="stylesheet" href="tailwind/tailwind-utilities.css">
    <link rel="stylesheet" href="tailwind/tailwind-utilities.min.css">
</head>

<body>
    <header class="text-center text-3xl font-bold text-white bg-blue-700 py-12">Google Distance API</header>
    <section class="m-6 flex justify-center ">
        <form action="distance_api.php" method="POST" >
            <input_fields class="flex gap-4">
            <!-- input field for origin and destination -->
                <div class="flex flex-col mr-4  space-y-1">
                    <label class="text-sm font-semibold text-gray-500">Origin</label>
                    <input name="origin" type="text" id="origin"  class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                </div>
                <div class="flex flex-col ml-4 space-y-1">
                    <div class="flex items-center justify-between">
                    <label class="text-sm font-semibold text-gray-500">Destination</label>
                    </div>
                    <input name="destination" type="text" id="destination" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                </div>
            </input_fields>
            <!-- Getting Data from API using distance_api.php  -->
         
            <!-- output field  for distance -->
            <div class="flex items-center justify-between mt-4 space-x-2">
              <label for="remember" class="text-sm font-semibold text-gray-500"> From : </label>
              <label for="remember" class="text-sm font-semibold text-gray-500"> To : </label>
            </div>
            <div class="flex items-center mb-4 space-x-2">
              <label for="remember" class="text-sm font-semibold text-gray-500 " name="distance"> Distance : </label>
            </div>

            <div>
                <button type="submit" name="get_distance" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">
                    Get Distance
                </button>
            </div>

        </form>
    </section>

</body>

</html>