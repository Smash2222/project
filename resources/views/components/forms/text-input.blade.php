@props([
'type' => 'text',
'isError' => false
])

<input {{ $attributes
        ->class([
            'is_error' => $isError,
            "w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/20 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholer:text-white text-xxs md:text-xs font-semibold"
            ]) }}
>
