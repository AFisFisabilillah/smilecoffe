<x-layout>
    <section class="">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen mt-20 lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-20 h-20 mr-2" src="{{ asset('img/aset/logo/2.png') }}"
                    alt="logo">
                SmileCoffe
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/register" method="post">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                nama</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-0 focus:border-primary-0 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Name" required autocomplete="off" value="{{ old('name')}}">
                                @error('name')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-0 focus:border-primary-0 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com"  required autocomplete="off" value="{{ old('name')}}" >
                                @error('email')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                username</label>
                            <input type="text" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-0 focus:border-primary-0 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="username"  required autocomplete="off" value="{{ old('name')}}">
                                @error('username')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-0 focus:border-primary-0 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 required autocomplete="off" >
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                password</label>
                            <input type="confirm-password" name="password_confirmation" id="confirm-password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-0 focus:border-primary-0 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required autocomplete="off" >

                                @error('password')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror

                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-0 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-0 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a
                                        class="font-medium text-primary-0 hover:underline dark:text-primary-0"
                                        href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-0 hover:opacity-85 focus:ring-4 focus:outline-none focus:ring-primary-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-0 dark:hover:bg-primary-0dark:focus:ring-primary-0">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="#"
                                class="font-medium text-primary-0 hover:underline dark:text-primary-0">Login
                                here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>