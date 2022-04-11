window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: [0,-10,0,0],
                filename: getFormattedTime() + '.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { dpi: 192, scale: 2, letterRendering: true },
                jspdf : { unit: 'pt', format: 'a4', orientation: 'portrait'}
            };
            html2pdf().from(invoice).set(opt).save();
            

        })
}

function getFormattedTime() {
    var today = new Date();
    var y = today.getFullYear();
    // JavaScript months are 0-based.
    var m = today.getMonth() + 1;
    var d = today.getDate();
    var h = today.getHours();
    var mi = today.getMinutes();
    var s = today.getSeconds();
    return y + '-' + m +'-' + d +'-' + h +'-' + mi +'-' + s;
}