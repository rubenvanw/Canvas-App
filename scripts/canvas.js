function setup() {
  let containerCanvasWidth = $("#container-canvas").width();
  let containerCanvasHeight = $("#container-canvas").height();

  let canvas = createCanvas(
    containerCanvasWidth / 1.2,
    containerCanvasHeight / 1.2
  );

  canvas.parent("canvas");
  background(255);

//   let colorPickerPosition = $("#colorPicker").position();
//   colorPicker = createColorPicker("black");
//   colorPicker.position(colorPickerPosition.left, colorPickerPosition.top);

  let strokeSliderPosition = $("#strokeSlider").position();
  slider = createSlider(1, 100, 5, 1);
  slider.position(strokeSliderPosition.left, strokeSliderPosition.top);
  slider.style("width", "200px");
}

let strokeColor = "#000000";

function draw() {
  let val = slider.value();

  //   stroke(colorPicker.color());
  stroke(strokeColor);
  strokeWeight(val);

  if (mouseIsPressed === true) {
    line(mouseX, mouseY, pmouseX, pmouseY);
  }
}

$("#strokeColor").change(() => {
    strokeColor = $("#strokeColor").val();
    console.log(strokeColor);
});

$("#backgroundColor").change(() => {
  background($("#backgroundColor").val());
});

$("#clearButton").click(() => {
  clear();
});

$("#download").click(() => {
  saveCanvas();
});

let submit = document.getElementById("submit");
submit.addEventListener("click", () => {
  let titel = document.getElementById("titel").value;
  let dataURL = canvas.toDataURL("image/jpeg");
  let canvasWidth = $("#canvas").width();
  let canvasHeight = $("#canvas").height();

  let url = "https://85748.ict-lab.nl/Minor%20Verdieping/expo/store.php";
  let data = [];
  data.push(titel, dataURL, canvasWidth, canvasHeight);

//   console.log(data);
if(!titel == ""){
    $.ajax({
        type: "POST",
        url: url,
        data: { data: data },
        success: (response) => {
          if (response === "success") {
            alert("Saved!");
            window.location.href =
              "https://85748.ict-lab.nl/Minor%20Verdieping/expo?overview";
          } else {
            alert("Error! Not Saved");
          }
        },
      });
} else {
    alert("Name Your Creation!")
}
 
});
