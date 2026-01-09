@php
    $testimonials = [
        [
            'name' => 'Avinash Kr',
            'designation' => 'Co-Founder at xyz',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face',
            'text' => 'Like this video and ask your questions in comment section, don\'t forget to Subscribe Easy Tutorials YouTube channel to watch more videos of website designing, digital marketing and photoshop.'
        ],
        [
            'name' => 'Bharat Kunal',
            'designation' => 'Manager at xyz',
            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face',
            'text' => 'Like this video and ask your questions in comment section, don\'t forget to Subscribe Easy Tutorials YouTube channel to watch more videos of website designing, digital marketing and photoshop.'
        ],
        [
            'name' => 'Prabhakar D',
            'designation' => 'Founder / CEO at xyz',
            'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=face',
            'text' => 'Like this video and ask your questions in comment section, don\'t forget to Subscribe Easy Tutorials YouTube channel to watch more videos of website designing, digital marketing and photoshop.'
        ],
        [
            'name' => 'Priya Sharma',
            'designation' => 'Customer at AURA',
            'image' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=200&h=200&fit=crop&crop=face',
            'text' => 'Like this video and ask your questions in comment section, don\'t forget to Subscribe Easy Tutorials YouTube channel to watch more videos of website designing, digital marketing and photoshop.'
        ],
        [
            'name' => 'Sneha Reddy',
            'designation' => 'Fashion Designer',
            'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop&crop=face',
            'text' => 'Absolutely love my kurtis from AURA! The fabric quality is exceptional and the designs are so elegant. Perfect for both office and casual wear.'
        ],
        [
            'name' => 'Meera Joshi',
            'designation' => 'Marketing Manager',
            'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop&crop=face',
            'text' => 'Best shopping experience! The fit is perfect and the material is so comfortable. I\'ve already recommended AURA to all my friends.'
        ],
        [
            'name' => 'Kavya Nair',
            'designation' => 'Software Engineer',
            'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&h=200&fit=crop&crop=face',
            'text' => 'Great quality and fast delivery! The kurtis are exactly as shown in the pictures. Will definitely order again.'
        ],
        [
            'name' => 'Rahul Verma',
            'designation' => 'Business Analyst',
            'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=200&h=200&fit=crop&crop=face',
            'text' => 'Amazing collection! The designs are trendy and the prices are reasonable. Customer service is also very helpful.'
        ],
    ];
@endphp

<!-- ================= TESTIMONIALS ================= -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">

        <!-- HEADING -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#8B4513]">TESTIMONIALS</h2>
            <div class="w-16 h-1 bg-[#8B4513] mx-auto mt-2"></div>
        </div>

        <div class="relative max-w-7xl mx-auto">

            <!-- PREV -->
            <button class="nav-btn testimonial-prev left-0">‹</button>

            <!-- NEXT -->
            <button class="nav-btn testimonial-next right-0">›</button>

            <!-- TRACK (IMPORTANT FIX HERE) -->
            <div class="overflow-x-hidden overflow-y-visible px-12 pt-24">
                <div class="testimonial-wrapper flex transition-transform duration-700 ease-in-out">

                    @foreach($testimonials as $testimonial)
                    <div class="testimonial-slide px-3 flex-shrink-0">

                        <!-- CARD -->
                        <div class="relative bg-white border rounded-xl shadow-md
                                    h-[320px] sm:h-[340px]
                                    flex flex-col items-center text-center">

                            <!-- IMAGE (NEVER CUT NOW) -->
                            <div class="absolute -top-20 z-30">
                                <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full
                                            border-4 border-white
                                            shadow-[0_12px_25px_rgba(0,0,0,0.18)]
                                            overflow-hidden bg-white">
                                    <img src="{{ $testimonial['image'] }}"
                                         class="w-full h-full object-cover">
                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="pt-16 px-5 flex flex-col justify-between h-full">
                                <p class="text-gray-600 italic text-[13px] leading-relaxed">
                                    “{{ $testimonial['text'] }}”
                                </p>

                                <div class="mt-4">
                                    <h4 class="font-semibold text-[#8B4513] text-sm">
                                        {{ $testimonial['name'] }}
                                    </h4>
                                    <p class="text-[11px] text-gray-500">
                                        {{ $testimonial['designation'] }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <!-- DOTS -->
            <div id="testimonial-dots" class="flex justify-center gap-2 mt-8"></div>
        </div>
    </div>
</section>



<style>
.nav-btn{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    width:46px;
    height:46px;
    border-radius:9999px;
    background:#fff;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
    font-size:26px;
    font-weight:bold;
    color:#8B4513;
    z-index:50;
    transition:.3s;
}
.nav-btn:hover{
    background:#8B4513;
    color:#fff;
}
</style>




@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.testimonial-wrapper');
    const slides = document.querySelectorAll('.testimonial-slide');
    const prev = document.querySelector('.testimonial-prev');
    const next = document.querySelector('.testimonial-next');
    const dotsContainer = document.getElementById('testimonial-dots');

    let index = 0;
    let visible = 4;
    let auto;

    function getVisible() {
        if (window.innerWidth >= 1024) return 4;
        if (window.innerWidth >= 640) return 2;
        return 1;
    }

    function update() {
        visible = getVisible();
        slides.forEach(s => s.style.width = `${100 / visible}%`);
        createDots();
        move();
    }

    function move() {
        const max = slides.length - visible;
        index = Math.max(0, Math.min(index, max));
        wrapper.style.transform = `translateX(-${index * (100 / visible)}%)`;

        document.querySelectorAll('.dot').forEach((d,i)=>{
            d.classList.toggle('bg-[#8B4513]', i===index);
            d.classList.toggle('bg-gray-300', i!==index);
        });
    }

    function createDots(){
        dotsContainer.innerHTML='';
        for(let i=0;i<=slides.length-visible;i++){
            const d=document.createElement('button');
            d.className=`dot w-3 h-3 rounded-full ${i===index?'bg-[#8B4513]':'bg-gray-300'}`;
            d.onclick=()=>{index=i;move();restart();};
            dotsContainer.appendChild(d);
        }
    }

    function restart(){
        clearInterval(auto);
        auto=setInterval(()=>{index++; if(index>slides.length-visible) index=0; move();},4000);
    }

    next.onclick=()=>{index++;move();restart();};
    prev.onclick=()=>{index--;move();restart();};

    auto=setInterval(()=>{index++; if(index>slides.length-visible) index=0; move();},4000);
    window.addEventListener('resize', update);
    update();
});
</script>





@endpush



