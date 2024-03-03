<div class="flex bg-sky-500 h-screen items-center justify-center">
       <div class="bg-sky-900 w-80 h-auto text-white">
           <p class="text-3xl font-bold underline text-center">Sign Up</p>
            <form class="px-10 py-10 text-sm">
                <label for="mail">Email</label><br>
                <input type="text" class="my-3 w-full rounded-xl py-1 text-black px-3" name="mail"><br>
                <div class="w-full">
                    <label for="pass">Password</label>
                    <a href="" class="float-right text-sky-500 underline">Forgot Password?</a><br>
                    <input type="password" class="my-3 w-full rounded-xl py-1 text-black px-3" name="pass">
                    <label for="repass">Confirm password</label>
                    <input type="password" class="my-3 w-full rounded-xl py-1 text-black px-3" name="repass">
                    <button class="w-full bg-emerald-500 my-7 py-1 rounded-xl transtion ease-in-out delay-150 hover:scale-110 hover:bg-emerald-400 duration-300">Log in</button>
                    <div class="mx-5"><a href="{{route('/')}}" class="text-sky-500">Sign in</a></div>
                </div>
            </form>
        </div>
    </div>