//For Mail.php(Mail) Page
let timer=4;
let redirect=setInterval(() => {
    if(timer==0){
        stopCounter();
    }
    document.getElementById("count").textContent=timer;
    timer--;
}, 1000);
function stopCounter(){
    document.getElementById("contact").click();
    clearInterval(redirect); 
}