jQuery(function () {
    var angle = 0;
    setInterval(function () {
        angle++;
        jQuery(".scroll .bar").css({
            right: 45 * (1 - Math.cos((angle / 180) * 3.14)),
        });
    }, 15);

    flag = true;
    setInterval(function () {
        jQuery(".hero .img1-1").toggleClass("invisible");
        console.log("切替");
    }, 5000);
});
