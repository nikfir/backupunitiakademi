<a href="#">
    <div class="relative h-10 w-full flex fill-current items-center rounded-md border transition duration-300 text-input-placeholder-l dark:text-input-placeholder-d hover:text-accent dark:focused-sibling:text-accent focus:ring-0 focus:shadow-sm font-roboto bg-input-l dark:bg-input-d border-input-border-l dark:border-input-border-d hover:border-input-border-hov-l dark:hover:border-input-border--hov-d focus:border-input-border-foc-l dark:focus:border-input-border-foc-d placeholder-input-placeholder-l dark:placeholder-input-placeholder-d"> 
        <div class="top-0 w-10 h-10 flex items-center justify-center">
            <div class="w-10 h-10 p-2.5">{{ $slot }}</div>
        </div>
    {{ $provider }}
    </div>
</a>
