gsap.registerPlugin(ScrollTrigger);

gsap.from('.navbar-brand',{opacity:0, duration:1.5, y:-50, ease:"slow"})
gsap.from('.heroimage', {opacity:0, duration:2, x:100, delay:0.5 ,ease:"slow"});
       
gsap.from(".storiesquote", {
        scrollTrigger:".storiesbg",
        duration:2,
            y:250,
            opacity:0,
        start:400,
        scrub:1,
        });
    

gsap.from(".learnaboutquote", {
        scrollTrigger:".learnaboutbg",
        duration:2,
            x:250,
            opacity:0,
        start:400,
        scrub:1,
        });