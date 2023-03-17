import './bootstrap';

const channel = Echo.channel('channel-1');

channel.subscribed(function(){
    console.log('resolved...');
})
.listen('.realtime-event', function(event) {
    console.log(event);
    let audio = new Audio('ring.wav');
    audio.addEventListener("canplaythrough", (event) => {
        audio.play();
    });

    // Handle show noti
    const notiItem = document.createElement("div");
    notiItem.appendChild(document.createTextNode(`${event.sender}: ${event.content}`));
    document.getElementById('notis').appendChild(notiItem);
});


// Send noti handle
let sentBtn = document.getElementById('send');
let form = document.getElementById('send-form');
sentBtn.addEventListener('click', function(e){
    e.preventDefault();
    let formData = new FormData(form);
    fetch('/send', {
        method: "POST",
        body: formData,
    });

    document.getElementById('content').value = "";
});