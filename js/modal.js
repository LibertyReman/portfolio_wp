const modalBtns = document.querySelectorAll(".js-modal-opbtn");
modalBtns.forEach(function (btn) {
    btn.onclick = function () {
        var modal = btn.getAttribute('data-modal');
        document.getElementById(modal).style.display = "block";
    };
});

const closeBtns = document.querySelectorAll(".p-modal__window__clbtn span");
closeBtns.forEach(function (btn) {
    btn.onclick = function () {
        var modal = btn.closest('.p-modal');
        modal.style.display = "none";
    };
});

window.onclick = function (event) {
    if (event.target.className === "p-modal") {
        event.target.style.display = "none";
    }
};
