let countDownDate = new Date("Dec 3,2022 15:30:00").getTime();
let counter = document.getElementById("count-down");
let anything = setInterval(function () {
    let currDate = new Date().getTime();
    let distance = countDownDate - currDate;
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    counter.innerHTML = days + " يوم " + hours + " ساعة " + minutes + " دقيقة " + seconds + " ثانية ";

    if (distance < 0) {
        cleareInterval(anything);
        counter.innerHTML = "انتهى وقت التسجيل";
    }
}, 1000);

const myModal = new bootstrap.Modal(document.getElementById('winnerModal'), {
    keyboard: false
});

const winnerBtn = document.getElementById("winner");
// const cards = document.getElementById("cards");

winnerBtn.addEventListener('click', function () {
    // cards.style.display = 'flex';
    setTimeout(function () {
        myModal.show();
    }, 2000);
})