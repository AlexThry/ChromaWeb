/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./*.{html,php,js}", "./**/*.{html,php,js}"],
	theme: {
		fontFamily: {
			roboto: ["Roboto", "sans-serif"],
		},
		extend: {
			colors: {
				"chroma-fill": "#4B4050",
				"chroma-bg": "#FCF5FF",
			},
			spacing: {
				30: "7.5rem",
			},
		},
	},
	plugins: [],
};
