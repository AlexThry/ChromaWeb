const project_1 = document.querySelector("#project-1");
const project_2 = document.querySelector("#project-2");
const project_3 = document.querySelector("#project-3");


const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.remove("opacity-0");
			entry.target.classList.add("opacity-100");
		}
	});
});

observer.observe(project_1);
observer.observe(project_2);
observer.observe(project_3);


const hero_title = document.querySelector("#hero-title");
const hero_desc = document.querySelector("#hero-desc");
const hero_border = document.querySelector("#hero-border");
const hero_btn = document.querySelector("#hero-btn");
const main	= document.querySelector("#main");

document.addEventListener("DOMContentLoaded", function() {
	hero_border.classList.remove("opacity-0");
	hero_border.classList.add("opacity-100");
	hero_title.classList.remove("opacity-0");
	hero_title.classList.add("opacity-100");
	hero_desc.classList.remove("opacity-0");
	hero_desc.classList.add("opacity-100");
	hero_btn.classList.remove("opacity-0");
	hero_btn.classList.add("opacity-100");
	main.classList.remove("opacity-0");
	main.classList.add("opacity-100");

	console.log("loaded");
});
