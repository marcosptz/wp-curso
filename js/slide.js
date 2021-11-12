function slideTransition() {
    const arrows = $('.slide-arrow');
    arrows.addClass('d-none');
    setTimeout(
        function () {
            arrows.removeClass('d-none');
        }
        , 700);
};

console.log('teste')