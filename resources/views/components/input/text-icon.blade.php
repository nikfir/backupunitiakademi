@props(['disabled' => false])

<div class="relative">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['type' => 'text', 'placeholder' => '#', 'class' => 'pl-10 h-10 rounded-md border transition duration-300 focus:ring-0 focus:shadow-sm font-roboto focused-sibling:text-accent bg-input-l dark:bg-input-d border-input-border-l dark:border-input-border-d hover:border-input-border-hov-l dark:hover:border-input-border--hov-d focus:border-input-border-foc-l dark:focus:border-input-border-foc-d placeholder-input-placeholder-l dark:placeholder-input-placeholder-d text-input-text-l dark:text-input-text-d']) !!}>
    <div class="absolute top-0 w-10 h-10 flex items-center justify-center fill-current text-input-placeholder-l dark:text-input-placeholder-d focused-sibling:text-accent dark:focused-sibling:text-accent transition duration-500">
        <div class="w-10 h-10 p-2.5">{{ $slot }}</div>
    </div>
</div>