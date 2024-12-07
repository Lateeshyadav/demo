// $(document).ready(function() {

//     $('.counter').each(function () {
// $(this).prop('Counter',3).animate({
//     Counter: $(this).text()
// }, {
//     duration: 4000,
//     easing: 'swing',
//     step: function (now) {
//         $(this).text(Math.ceil(now));
//     }
// });
// }); 

// });  

$(document).ready(function() {

    $('.counter').each(function () {
        var $this = $(this);
        var endValue = parseFloat($this.text());  // Get the end value from the element's text as a float
        var startValue = null;  // You can make this dynamic if needed
        var duration = 4000;  // Animation duration (in milliseconds)

        $this.prop('Counter', startValue).animate({
            Counter: endValue
        }, {
            duration: duration,
            easing: 'swing',
            step: function (now) {
                $this.text(now.toFixed(-1));  // Show the exact value with 2 decimal places
            }
        });
    });

});
