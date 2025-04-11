function loadContent(file) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", file, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("content-area").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}