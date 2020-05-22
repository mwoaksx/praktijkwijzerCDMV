 console.log('JavaScript404 verbonden!');
    // text animation
    var string = "De pagina die je probeerde te zoeken is niet beschikbaar of bestaat niet (meer).";
    var str = string.split("");
    var el = document.getElementById('str');
    (function animate() {
    str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
    var running = setTimeout(animate, 50);
    })();