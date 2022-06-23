$("#search").keypress((event) => {
    let keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == "13") {
        window.location.href = `https://85748.ict-lab.nl/Minor%20Verdieping/expo?search=${$("#search").val()}`;
    }
});