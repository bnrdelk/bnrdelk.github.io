let timeout = 500;
let level = 1;
let click = 0;

function Run() {
    setTimeout(() => {
        document.getElementById("btn").style.marginLeft = Math.random() * 300 + "px";
        document.getElementById("btn").style.marginTop = Math.random() * 300 + "px";

        if (click === 3 && level !== 6) {
            alert(`Congratulations! You passed to Level:${level}!`);
            click = 0;
            level++;
            timeout = timeout - 100;
        }

        if (level === 6) {
            alert(`Impossible:) Level:${level}!`);
            timeout = 0;
        }

    }, timeout);
}

document.getElementById("btn").addEventListener("click", () => {
    click++;
});
