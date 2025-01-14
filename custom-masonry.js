document.addEventListener('DOMContentLoaded', function () {
    var grid = document.querySelector('.masonry-grid');
    if (grid) {
        new Masonry(grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-item',
            percentPosition: true,
        });
    }
});