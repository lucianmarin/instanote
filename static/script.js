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

function search() {
    var input = document.getElementById("search");
    var info = document.getElementById("info");
    var lines = document.getElementsByClassName("list");

    var query = input.value.toLowerCase();
    var count = 0;

    for (i = 0; i < lines.length; i++) {
        line = lines[i];
        var content = '';
        var title = line.getElementsByClassName("title")[0];
        var quote = line.getElementsByClassName("quote")[0];
        var note = line.getElementsByClassName("note")[0];
        content += title.href.toLowerCase();
        content += title.innerHTML.toLowerCase();
        if (quote) {
	        content += quote.innerHTML.toLowerCase();
	    }
        if (note) {
            content += note.innerHTML.toLowerCase();
        }
        if (content.indexOf(query) > -1) {
            line.classList.remove("hidden");
            line.classList.add("visible");
            count += 1;
        } else {
            line.classList.remove("visible");
            line.classList.add("hidden");
        }
    }

    if (count === 1) {
        info.innerHTML = '1 note';
    } else {
        info.innerHTML = count + ' notes';

    }
}
