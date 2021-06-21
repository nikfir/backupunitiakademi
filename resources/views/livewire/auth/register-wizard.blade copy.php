<div class="w-full h-full  flex flex-col top-0 items-center justify-between overflow-x-hidden">
<div id="darkbtn" class="fixed right-5 top-5 w-8 h-8 p-1.5 rounded-full cursor-pointer fill-current text-icon-l dark:text-icon-d"><x-svg.moon-over-sun/></div>
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

    @if($page == "profile")
    <div class="flex w-full pb-8">
    
        <div class="w-full h-full flex flex-col items-center justify-center">
            <h2 class="font-semibold">Add a profile picture</h2>
            <p>This is your visual identity.</p>

            <div class="w-40 h-40 bg-blue-300 mt-8 rounded-full"></div>

            <!-- <div class="relative flex w-full max-w-2xl px-4 items-center justify-center mt-14">
                <div class="w-full h-px mr-24 bg-txt-p-l"></div>
                <div class="w-full h-px ml-24 bg-txt-p-l"></div>
               <div class="w-40 absolute flex justify-center text-txt-p-l"><p>Or select an avatar</p></div>
            </div> -->
            <button class="button accent" wire:click="changePage('account')">Continue</button>
        </div> 
    </div>
    @endif

    @if($page == "account")
    <div class="flex w-full pb-8 items-center justify-center">
    
        <div class="w-full h-full max-w-md flex flex-col items-center justify-center px-4">
            <div class="w-full text-center mb-8">
                <h2 class="font-semibold">Pick a username</h2>
                <p>Your username is how others will find you on Ulearnity so pick a good one. You can change it later.</p>
            </div>

            <div class="w-full mb-8">
                <x-input.text-icon placeholder="Username" class="mb-2 w-full" id="username" type="text" name="username" wire:model="username" required autofocus>
                    <x-svg.user/>  
                </x-input.text-icon>

                <x-input.text-icon type="password" placeholder="Password" class="mb-2 w-full" id="password" type="password" name="password" required autocomplete="current-password">
                    <x-svg.key/>  
                </x-input.text-icon>

                <x-input.text-icon type="password" placeholder="Password" class="mb-2 w-full" id="confirmpassword" type="password" name="password" required autocomplete="current-password">
                    <x-svg.key/>  
                </x-input.text-icon>
            </div>

            <button class="button accent" wire:click="changePage('done')">Continue</button>
        </div> 
    </div>


    @endif

    @if($page == "done")
    <div class="flex w-full pb-8 items-center justify-center">
    
        <div class="w-full h-full max-w-md flex flex-col items-center justify-center px-4">
            <div class="w-full text-center mb-8">
                <h2 class="font-semibold">Pick a username</h2>
                <p>Your username is how others will find you on Ulearnity so pick a good one. You can change it later.</p>
            </div>

            <button class="button accent" wire:click="changePage('done')">Confirm</button>
        </div> 
    </div>
    @endif


    <div class="flex w-full h-40 "></div>
   
</div>
</div>
