// Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Select the video element
    const video = document.querySelector('.video');

    // Create an Intersection Observer
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                video.play(); // Play the video if it's in view
            } else {
                video.pause(); // Pause the video if it's out of view
            }
        });
    });

    // Start observing the video
    observer.observe(video);
});
