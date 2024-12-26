jQuery(document).ready(function ($) {
    // Ensure the carousel advances one item at a time
    $('.carousel').on('slide.bs.carousel', function (e) {
        let $e = $(e.relatedTarget);
        let idx = $e.index();
        let itemsPerSlide = 3;
        let totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            let it = itemsPerSlide - (totalItems - idx);
            for (let i = 0; i < it; i++) {
                // Append slides to end
                if (e.direction == 'left') {
                    $('.carousel-item')
                        .eq(i)
                        .appendTo('.carousel-inner');
                } else {
                    $('.carousel-item')
                        .eq(0)
                        .appendTo('.carousel-inner');
                }
            }
        }
    });
});
