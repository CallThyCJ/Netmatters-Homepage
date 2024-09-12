$('.owl-carousel').owlCarousel({
    margin:110,
    loop:true,
    autoWidth:true,
    items:10,
    autoplay: true,
    dots: false,
    autoplayTimeout: 3000
})

$(".play").on("load", function() {
    owl.trigger("play.owl.autoplay",[1000])
})