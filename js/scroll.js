gsap.registerPlugin(ScrollTrigger,CSSRulePlugin);

let tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".load",
        start: "center center",
        end: "center top",
        markers: false,
        toggleActions: "restart pause none none",
        scrub: 1,
        pin: true
    }
});

tl.to(".animatie1",{
    duration: 3,
    y: 0,
    height: 0
})
.to(".animatie2",{
    duration: 3,
    top: "100%",
    height: 0
})
.to(".animatie3",{
    duration: 3,
    top: "100%",
    height: 0
})
.to(".animatie4",{
    duration: 3,
    left: "0%",   
    width: 0
})
.to(".animatie5",{
    duration: 3,
    left: "0%",   
    width: 0
})
.to(".animatie6",{
    duration: 3,
    y: 0,
    height: 0
})

.set( '.navbar-toggler-icon', {
    className: 'custom-toggler-2 , navbar-toggler-icon'
})

.to("html", {
    "--back-color": "#000000", 
    "--second-color":"#5309A2",
    duration: 3

});

var about1b = CSSRulePlugin.getRule(".proiect-1::before")
var about1a = CSSRulePlugin.getRule(".proiect-1::after")

let tlabout1 = gsap.timeline({
    scrollTrigger: {
        trigger: '.proiect-1',
        start: "top bottom",
        end: "top bottom",
        markers: false,
        toggleActions: "play none reset none",
    }
});

tlabout1.fromTo(about1b,
    {   cssRule: 
        {
            width: "100%"
        }
    },
    {
        cssRule: 
        {   
            left: "100%",
            width: "0%"
        },
        duration: 1
    }
)
.fromTo(about1a,
    {   cssRule: 
        {
            width: "100%"
        }
    },
    {   
        delay:  -0.8,
        cssRule: 
        {   
            left: "100%",
            width: "0%"
        },
        duration: 1
    }
);

var about2b = CSSRulePlugin.getRule(".proiect-2::before")
var about2a = CSSRulePlugin.getRule(".proiect-2::after")

let tlabout2 = gsap.timeline({
    scrollTrigger: {
        trigger: '.proiect-2',
        start: "top bottom",
        end: "top bottom",
        markers: false,
        toggleActions: "play none reset none",
    }
});

tlabout2.fromTo(about2b,
    {   cssRule: 
        {
            width: "100%"
        }
    },
    {
        cssRule: 
        {   
            left: "100%",
            width: "0%"
        },
        duration: 1
    }
)
.fromTo(about2a,
    {   cssRule: 
        {
            width: "100%"
        }
    },
    {   
        delay:  -0.8,
        cssRule: 
        {   
            left: "100%",
            width: "0%"
        },
        duration: 1
    }
);

var about3b = CSSRulePlugin.getRule(".proiect-3::before")
var about3a = CSSRulePlugin.getRule(".proiect-3::after")

let tlabout3 = gsap.timeline({
    scrollTrigger: {
        trigger: '.proiect-3',
        start: "top bottom",
        end: "top bottom",
        markers: false,
        toggleActions: "play none reset none",
    }
});

tlabout3.fromTo(about3b,
    {   cssRule: 
        {
            width: "100%"
        }
    },
    {
        cssRule: 
        {   
            left: "100%",
            width: "0%"
        },
        duration: 1
    }
)
.fromTo(about3a,
    {   cssRule: 
        {
            width: "100%"
        }
    },
    {   
        delay:  -0.8,
        cssRule: 
        {   
            left: "100%",
            width: "0%"
        },
        duration: 1
    }
);
