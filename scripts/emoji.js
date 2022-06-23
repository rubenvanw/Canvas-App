$(".emoji").click((event) => {
    let textarea = document.getElementById("comment");
    textarea.value += event.target.innerHTML;
})