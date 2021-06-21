<div class="w-full h-full flex">
    <div class="absolute right-0 w-full h-full lg:w-1/3 bg-auth-card-l dark:bg-auth-card-d transform duration-300 flex items-center justify-center px-5">
    <div id="darkbtn" class="fixed right-5 top-5 w-8 h-8 p-1.5 rounded-full cursor-pointer fill-current text-icon-l dark:text-icon-d"><x-svg.moon-over-sun/></div>
        <div class="w-full max-w-xs h-full flex flex-col items-center justify-center">
            <div  class="w-20 h-20 p-1.5 rounded-full cursor-pointer fill-current text-accent mb-8"><x-svg.edge/></div>

            <div class="w-full flex font-semibold">
                <h1>{{ $header }}</h1>
            </div>
            <div class="w-full flex mb-5">
                <p>{{ $paragraph }}</p>
            </div>
            <div class="w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>