gsap.registerPlugin(ScrollTrigger);

gsap.timeline()
.from('.navbar-brand',{opacity:0, duration:1.5, y:-50, ease:"slow"}).from('.heroimage', {opacity:0, duration:2, x:100, delay:1 ,ease:"slow"});
       
gsap.from(".storiesquote", {
        scrollTrigger:".storiesbg",
        duration:2,
            y:250,
            opacity:0,
        start:400,
        scrub:1,
        });
    