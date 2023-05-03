$(document).ready(() => {
    var a = 0;
    $(window).scroll(function () {
        var oTop = $(".counter__num").offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $(".counter__num").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-number");
                $({
                    countNum: $this.text()
                }).animate (
                    {
                        countNum: countTo
                    },
                    {
                        duration: 2000,
                        easing: "swing",
                        step: function () {
                            //$this.text(Math.ceil(this.countNum));
                            $this.text(
                                Math.ceil(this.countNum).toLocaleString("en")
                            );
                        },
                        complete: function () {
                            $this.text(
                                Math.ceil(this.countNum).toLocaleString("en")
                            );
                        }
                    }
                );
            });
            a = 1;
        }
    });
});