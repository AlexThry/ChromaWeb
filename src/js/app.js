const project_1 = document.querySelector("#project-1");
const project_2 = document.querySelector("#project-2");
const project_3 = document.querySelector("#project-3");

console.log(project_1);

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
