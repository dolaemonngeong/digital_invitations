// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// owl carousel 

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
})



// Indicator

let currentIndex = 0;
const reviews = document.querySelectorAll('.review-container');
const indicatorContainer = document.getElementById('indicators');
let maxIndicators = Math.floor(reviews[0].offsetWidth / 20);

function showReview(index) {
    reviews[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + index + reviews.length) % reviews.length;
    reviews[currentIndex].classList.add('active');
    updateIndicators();
}

function showReviewByIndicator(indicatorIndex) {
    reviews[currentIndex].classList.remove('active');
    currentIndex = indicatorIndex;
    reviews[currentIndex].classList.add('active');
    updateIndicators();
}

function updateIndicators() {
    const cardWidth = reviews[0].offsetWidth;
    const totalReviews = reviews.length;

    indicatorContainer.innerHTML = '';
    const numIndicators = Math.min(maxIndicators, totalReviews);

    const startIdx = Math.max(0, currentIndex - Math.floor(numIndicators / 2));
    const endIdx = Math.min(totalReviews, startIdx + numIndicators);

    for (let i = startIdx; i < endIdx; i++) {
        const indicator = document.createElement('div');
        indicator.classList.add('indicator');
        indicator.addEventListener('click', () => showReviewByIndicator(i));
        if (i === currentIndex) {
            indicator.classList.add('active');
        }
        indicatorContainer.appendChild(indicator);
    }
}

window.addEventListener('resize', () => {
    maxIndicators = Math.floor(reviews[0].offsetWidth / 20);
    updateIndicators();
});

// Initialize indicators
updateIndicators();