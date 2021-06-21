<div class="w-5 h-5 relative flex items-center justify-center">
    <input type="checkbox" {!! $attributes->merge(['class' => 'absolute top-0 z-10 w-5 h-5 opacity-0']) !!}>
    <div class="w-0 h-0 checkbox-sibling:w-5 checkbox-sibling:h-5 transform duration-200 fill-current text-accent rounded-md ">
        <div class="w-full h-full p-1"><x-svg.check /></div>
    </div>
    <div class="absolute z-0 top-0 w-5 h-5 border checkbox-sibling:border-accent rounded-md transform duration-500"></div>
</div>