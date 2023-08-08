import {gsap} from "gsap/dist/gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
export default () => {
    gsap.registerPlugin(ScrollTrigger);

    const sections = gsap.utils.toArray("section");

    sections.forEach(section => {
        const text = section.querySelector("p"),
            color = section.querySelector("h1, h2, h3, h4, h5, h6"),
            notFirst = document.querySelector(".section:not(:first-child) .img"),
            notLast = document.querySelector(".section:not(:last-child) .img");

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                pin: true,
                anticipatePin: 1,
                scrub: 1,
                start: "top top",
                end: "+=100"
            }
        });

        tl.from(text, {opacity: 0, y: 100})
            .from(color, {opacity: 0, ease: "ease", duration: 7})
            .to(text, {opacity: 0, y: -100, ease: "power1.in"})
            .to(color, {opacity: 0, ease: "ease", duration: 15});
    });
};
