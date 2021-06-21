<div class="w-full h-screen flex flex-col items-center justify-between">

    <div class="w-full h-full pb-8">
        <div class="flex-shrink-0 w-full h-40  items-center justify-center flex flex-col">
            <div class="w-16 h-16 p-1 mb-8">
                <x-svg.edge />
            </div>
            <div class="flex w-full h-10 max-w-md  justify-between items-center relative">
                <div class="w-full h-full flex items-center justify-between px-4">
                    <div class="z-10 w-10 h-10 rounded-full bg-red-200"></div>
                    <div class="z-10 w-10 h-10 rounded-full bg-red-200"></div>
                    <div class="z-10 w-10 h-10 rounded-full bg-red-200"></div>
                </div>

                <div class="z-0 w-full h-2 absolute px-9 ">
                    <div class="w-full h-full">
                        <div class="w-0 {{ $bar1 }} {{ $bar2 }} h-full bg-yellow-200 transform duration-300"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))" class="w-full h-full">
        @if($page == "")
        <div class="flex w-full pb-8">
        
            <div class="w-full h-full flex flex-col items-center justify-center">
                <h2 class="font-semibold pb-4">Add a profile picture</h2>
                <p>This is your visual identity.</p>

                <div class="relative w-40 h-40 mt-8 mb-8">
                    <div class="w-40 h-40 rounded-full">
                        <div class="w-full h-full"><img class="h-40 2-40 object-cover rounded-full" id="output" src="{{ $avatar }}"/></div>
                    </div>
                    <div class="w-12 h-12 p-3 fill-current text-microsoft-border bg-white rounded-full absolute bottom-0 right-0 border-4 border-body-l cursor-pointer hover:text-microsoft-bg">
                        <x-svg.plus />
                    </div>
                    <input id="avatar" name="avatar" class="absolute bottom-0 right-0 w-12 h-12 rounded-full opacity-0" type="file" onchange="loadFile(event)">
                </div>

                <!-- <div class="relative flex w-full max-w-2xl px-4 items-center justify-center mt-14">
                    <div class="w-full h-px mr-24 bg-txt-p-l"></div>
                    <div class="w-full h-px ml-24 bg-txt-p-l"></div>
                <div class="w-40 absolute flex justify-center text-txt-p-l"><p>Or select an avatar</p></div>
                </div> -->
                
                <a class="button accent items-center justify-center flex cursor-pointer" wire:click="changePage('account')">Continue</a>
            </div> 
            
        </div>
        @endif

        @if($page == "account")
        <div class="flex w-full pb-8 items-center justify-center">
        
            <div class="w-full h-full max-w-md flex flex-col items-center justify-center px-4">
                <div class="w-full text-center mb-8">
                    <h2 class="font-semibold pb-4">Pick a username</h2>
                    <p>Your username is how others will find you on Unitiakademi so pick a good one. You can change it later.</p>
                </div>
                <div class="w-full h-full px-4 flex flex-col justify-center items-center">
                    <div class="w-full mb-8">
                        <x-input.text-icon placeholder="Username" class="mb-2 w-full" id="username" type="text" name="username" value=username required autofocus>
                            <x-svg.user/>  
                        </x-input.text-icon>

                        <x-input.text-icon id="password" class="mb-2 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                            <x-svg.key/>  
                        </x-input.text-icon>

                        <x-input.text-icon id="password_confirmation" class="mb-2 w-full" type="password" name="password_confirmation" required placeholder="Confirm password">
                            <x-svg.key/>  
                        </x-input.text-icon>
                    </div>
                    <button type="submit" class="button accent">Register</button>
                </div>
                
            </div> 
        </div>
        @endif

        @if($page == "verify")
        <div class="flex w-full pb-8 items-center justify-center">
        
            <div class="w-full h-full max-w-md flex flex-col items-center justify-center px-4">
                <div class="w-full text-center mb-8">
                    <h2 class="font-semibold pb-4">Verify your Email</h2>
                    <p class="">We have sent an email to</p>
                    <p class="font-semibold pb-4">{{ $email }}</p>
                    <p class="">You need to verify your email to continue.</p>
                    <p class="">If you have not received the verification email, please check your "Spam" or "Bulk Email" folder.</p>
                    <p class="">You can also click the resend button below to have another email sent to you.</p>
                </div>

                <button class="button accent" wire:click="">Resend verification Email</button>
            </div> 
        </div>
        @endif
    </form>

    <div class="w-full h-full"></div>
</div>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>