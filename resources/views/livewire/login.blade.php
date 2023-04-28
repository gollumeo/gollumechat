<main class="flex flex-col items-center justify-center mt-20">
    <h1 class="text-5xl text-violet-600 font-extrabold mt-4 shadow-xl">Login</h1>

    <form wire:submit.prevent="submitLogin"
          class="flex flex-col w-1/2 shadow shadow-slate-800 rounded-xl p-4 mx-auto mt-24" method="post">
        @csrf
        <div class="relative w-full mb-6 group">
            <input type="text" wire:model="email"
                   class="block py-2.5 px-0 w-full text-sm text-slate-50 bg-transparent border-0 border-b-2 appearance-none border-gray-300 focus:border-violet-500 focus:outline-none focus:ring-0 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white @error('email')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror"
                   placeholder=" "/>
            <label for="email"
                   class="peer-focus:font-medium absolute text-sm text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-violet-500  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700 @error('email')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror">Email
                address</label>
            @error('email')
            <div class="error text-rose-500 mt-2 text-sm">{{ $errors->first('email') }}</div> @enderror
        </div>
        <div class="relative w-full mb-6 group">
            <input type="password" wire:model="password" id="password"
                   class="block py-2.5 px-0 w-full text-sm text-slate-50 bg-transparent  border-b-2 border-gray-300 appearance-none focus:border-violet-500 focus:outline-none focus:ring-0 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror"
                   placeholder=" " @error('password') value="{{ $password }}" @enderror/>
            <label for="password"
                   class="peer-focus:font-medium absolute text-sm text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-violet-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700 @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror">Password</label>
            @error('password')
            <div class="error text-rose-500 mt-2 text-sm">{{ $message }}</div> @enderror
        </div>
        <label for="remember_me" class="pb-4 flex items-center relative">
            Remember me!
            <span class="sr-only">Toggle</span>
            <input type="checkbox" name="remember_me" id="remember_me" class="peer appearance-none absolute left-0 top-0 w-full h-full">
            <span class="bg-gray-600 w-12 h-7 rounded-full flex flex-shrink-0 items-center after:bg-slate-50 after:w-5 after:h-5 after:rounded-full p-1 peer-checked:bg-violet-600 peer-checked:after:translate-x-5 ease-in-out duration-500 after:ease-in-out after:duration-500 ml-4"></span>
        </label>
        <input type="submit"
               class="text-white bg-violet-600 hover:bg-violet-700 focus:ring-4 focus:outline-none focus:ring-violet-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:cursor-pointer transition"
               name="login" value="Submit">
    </form>
    <p class="text-sm mt-4">Don't have an account yet?
        <span class="text-violet-500 font-semibold tracking-wide"><a href="/register">Sign up!</a></span>
    </p>
</main>

