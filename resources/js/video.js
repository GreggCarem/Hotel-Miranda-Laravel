function playVideo() {
    const video = document.getElementById('video');
    const playButton = document.querySelector('.video__container__button');
    
    video.style.display = 'block';
    playButton.style.display = 'none';
    
    video.play();
}