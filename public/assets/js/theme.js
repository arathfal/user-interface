// (() => {
//     "use strict";

//     var req = document.getElementById("requestItem");
//     var item = document.getElementById("result");
//     var request = new XMLHttpRequest();
//     request.onreadystatechange = () => {
//         if (request.readyState == 4) {
//             console.log(request);
//         }
//         if (request.status == 200) {
//             item.innerHTML = request.responseText;
//         } else {
//             setInterval(() => {
//                 item.innerHTML = `Hasil request ada tidak dapat dipenuhi : ${request.status} ${request.statusText}`;
//                 this.style.display = "none";
//             }, 100);
//         }
//     };
//     request.open("Get", "file.json");
//     req.addEventListener("click", () => {
//         this.style.display = "none";
//         request.send();
//     });
// })();
