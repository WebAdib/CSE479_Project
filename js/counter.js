document.addEventListener("DOMContentLoaded", function() {
    const section4 = document.getElementById('section4');
    const targets = document.querySelectorAll('.count');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounting(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 }); // Adjust threshold as needed

    targets.forEach(target => {
        observer.observe(target);
    });

    const startCounting = (target) => {
        const targetCount = parseInt(target.dataset.target);
        let currentCount = 0;
        const duration = 2000;
        const interval = 50;
        const increment = targetCount / (duration / interval);

        const countUp = () => {
            if (currentCount < targetCount) {
                currentCount += increment;
                target.textContent = Math.round(currentCount);
                setTimeout(countUp, interval);
            } else {
                target.textContent = targetCount;
            }
        };

        countUp();
    };
});

// other three 
document.addEventListener("DOMContentLoaded", function() {
    const section4 = document.getElementById('section4');
    const targets = document.querySelectorAll('.countOthers');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounting(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 }); // Adjust threshold as needed

    targets.forEach(target => {
        observer.observe(target);
    });

    const startCounting = (target) => {
        const targetCount = parseInt(target.dataset.target);
        let currentCount = 0;
        const duration = 2000;
        const interval = 4;
        const increment = targetCount / (duration / interval);

        const countUp = () => {
            if (currentCount < targetCount) {
                currentCount += increment;
                target.textContent = Math.round(currentCount);
                setTimeout(countUp, interval);
            } else {
                target.textContent = targetCount;
            }
        };

        countUp();
    };
});
