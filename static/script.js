function expand(element) {
    element.style.height = 'auto';
    element.style.height = (element.scrollHeight - 10) + 'px';
}

function erase(element) {
    var yes = element.nextElementSibling;
    yes.className = (yes.className === 'hidden') ? 'confirm' : 'hidden';
}

function prevent(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
    }
}
