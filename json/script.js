// const mahasiswa = {
//     nama: "Slackie",
//     nim: "06241235",
//     email: "slackie@mail.com",
// };

// console.log(JSON.stringify(mahasiswa));

// const xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         const mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// };

// xhr.open("GET", "coba.json", true);
// xhr.send();

$.getJSON("coba.json", function (data) {
    console.log(data);
});
