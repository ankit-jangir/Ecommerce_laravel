@php
    $whatsappNumber  = '917877829435'; 
    $whatsappMessage = 'Hello Aura Kurtis! Mujhe product ke baare mein enquiry karni hai.';
@endphp

<a
    href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($whatsappMessage) }}"
    target="_blank"
    rel="noopener noreferrer"
    class="fixed bottom-20 right-4 sm:bottom-24 sm:right-6 lg:bottom-6 lg:right-6 z-40
           w-14 h-14 sm:w-16 sm:h-16
           bg-[#25D366] hover:bg-[#20BA5A]
           rounded-full shadow-2xl
           flex items-center justify-center
           transition-all duration-300 hover:scale-110
           group"
>

    <!-- WHATSAPP ICON IMAGE -->
<i class="fi fi-brands-whatsapp text-white text-2xl sm:text-3xl leading-none"></i>

    <!-- NOTIFICATION BADGE -->
    <span
        class="absolute -top-1 -right-1 sm:-top-2 sm:-right-2
               bg-red-500 text-white
               text-[10px] sm:text-xs
               font-bold
               w-5 h-5 sm:w-6 sm:h-6
               rounded-full
               flex items-center justify-center
               animate-pulse">
        1
    </span>

    <!-- TOOLTIP -->
    <span
        class="absolute right-full mr-3
               bg-[#654321] text-white
               text-xs sm:text-sm
               px-3 py-2
               rounded-lg
               opacity-0 group-hover:opacity-100
               transition-opacity
               whitespace-nowrap
               shadow-lg
               hidden sm:block">
        Chat with us
    </span>
</a>
