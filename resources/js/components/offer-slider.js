// Offer Slider with 10 second timer
document.addEventListener('DOMContentLoaded', function() {
    const offerSlider = document.getElementById('offer-slider');
    const offer1 = document.getElementById('offer-1');
    const offer2 = document.getElementById('offer-2');
    const offer3 = document.getElementById('offer-3');
    const closeOffer = document.getElementById('close-offer');
    
    if (!offerSlider || !offer1 || !offer2 || !offer3) return;
    
    let currentOffer = 1;
    let sliderInterval;
    let isPaused = false;
    
    function showOffer(offerNum) {
        // Hide all offers
        offer1.classList.remove('opacity-100');
        offer1.classList.add('opacity-0');
        offer2.classList.remove('opacity-100');
        offer2.classList.add('opacity-0');
        offer3.classList.remove('opacity-100');
        offer3.classList.add('opacity-0');
        
        // Show selected offer
        setTimeout(() => {
            if (offerNum === 1) {
                offer1.classList.remove('opacity-0');
                offer1.classList.add('opacity-100');
            } else if (offerNum === 2) {
                offer2.classList.remove('opacity-0');
                offer2.classList.add('opacity-100');
            } else if (offerNum === 3) {
                offer3.classList.remove('opacity-0');
                offer3.classList.add('opacity-100');
            }
        }, 300);
    }
    
    function startSlider() {
        if (isPaused) return;
        
        sliderInterval = setInterval(() => {
            currentOffer++;
            if (currentOffer > 3) {
                currentOffer = 1;
            }
            showOffer(currentOffer);
        }, 10000); // 10 seconds
    }
    
    function stopSlider() {
        clearInterval(sliderInterval);
    }
    
    // Close offer banner
    if (closeOffer) {
        closeOffer.addEventListener('click', function() {
            offerSlider.style.display = 'none';
            stopSlider();
        });
    }
    
    // Initialize
    showOffer(1);
    startSlider();
    
    // Pause on hover
    offerSlider.addEventListener('mouseenter', function() {
        isPaused = true;
        stopSlider();
    });
    
    offerSlider.addEventListener('mouseleave', function() {
        isPaused = false;
        startSlider();
    });
});

