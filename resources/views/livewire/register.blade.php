<main class="flex flex-col items-center justify-center mt-20">
    <h1 class="text-5xl text-violet-600 font-extrabold mt-4 shadow-xl">Sign up</h1>

    <form wire:submit.prevent="submitRegister"
          class="flex flex-col w-1/2 shadow shadow-slate-800 rounded-xl p-4 mx-auto mt-24" method="post">
        @csrf
        <div class="relative w-full mb-6 group">
            <input type="email" wire:model="email" id="email"
                   class="block py-2.5 px-0 w-full text-sm text-slate-50 bg-transparent border-0 border-b-2 appearance-none border-gray-300 focus:border-violet-500 focus:outline-none focus:ring-0 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white @error('email')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror"
                   placeholder=" "/>
            <label for="email"
                   class="peer-focus:font-medium absolute text-sm text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-violet-500  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700 @error('email')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror">Email
                address</label>
            @error('email')
            <div class="error text-rose-500 mt-2 text-sm">{{ $message }}</div> @enderror
        </div>



        <div class="relative w-full mb-6 group">
            <input type="text" wire:model="username" id="username"
                   class="block py-2.5 px-0 w-full text-sm text-slate-50 bg-transparent  border-b-2 border-gray-300 appearance-none focus:border-violet-500 focus:outline-none focus:ring-0 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror"
                   placeholder=" " @error('username') @enderror/>
            <label for="password"
                   class="peer-focus:font-medium absolute text-sm text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-violet-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700 @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror">Username</label>
            @error('password')
            <div class="error text-rose-500 mt-2 text-sm">{{ $message }}</div> @enderror
        </div>



        <div class="relative w-full mb-6 group">
            <input type="password" wire:model="password" id="password"
                   class="block py-2.5 px-0 w-full text-sm text-slate-50 bg-transparent  border-b-2 border-gray-300 appearance-none focus:border-violet-500 focus:outline-none focus:ring-0 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror"
                   placeholder=" " @error('password') @enderror/>
            <label for="password"
                   class="peer-focus:font-medium absolute text-sm text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-violet-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700 @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror">Password</label>
            @error('password')
            <div class="error text-rose-500 mt-2 text-sm">{{ $message }}</div> @enderror
        </div>




        <div class="relative w-full mb-6 group">
            <input type="password" wire:model="repeat_password" id="repeat_password"
                   class="block py-2.5 px-0 w-full text-sm text-slate-50 bg-transparent  border-b-2 border-gray-300 appearance-none focus:border-violet-500 focus:outline-none focus:ring-0 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror"
                   placeholder=" " @error('repeat_password') value="{{ $password }}" @enderror/>
            <label for="repeat_password"
                   class="peer-focus:font-medium absolute text-sm text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-violet-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700 @error('password')text-rose-500 border-rose-500 focus:border-rose-500 ring-rose-500 @enderror">Repeat password</label>
            @error('password')
            <div class="error text-rose-500 mt-2 text-sm">{{ $message }}</div> @enderror
        </div>




        <input type="submit"
               class="text-white bg-violet-600 hover:bg-violet-700 focus:ring-4 focus:outline-none focus:ring-violet-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:cursor-pointer transition"
               name="login" value="Submit">
    </form>
    <p class="text-sm mt-4">Already have an account?
        <span class="text-violet-500 font-semibold tracking-wide"><a href="/login">Sign in!</a></span>
    </p>
</main>

