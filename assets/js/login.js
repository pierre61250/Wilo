window.checkEmailValidity = function (evt) {
    let svgSuccess = document.querySelector('#svgSuccessEmail');
    let svgError = document.querySelector('#svgErrorEmail');

    if (evt.validity.valid) {
        svgError.style.display = "none"
        svgSuccess.style.display = "block"
    }
    else if (!evt.validity.valid && (evt.value.trim()).length) {
        svgSuccess.style.display = "none"
        svgError.style.display = "block"
    } else {
        svgSuccess.style.display = "none"
        svgError.style.display = "none"
    }
};

export default {}