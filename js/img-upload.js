document.getElementById("fileID").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("imageup").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
/*
document.getElementById("fileIDD").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("imageupd").style:url('e.target.result');;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

*/