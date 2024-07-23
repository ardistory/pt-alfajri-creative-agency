/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
		"./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],
	theme: {
		extend: {
			fontFamily: {
				'Inter': ['Inter']
			}
		},
	},
	plugins: [
		require("daisyui")
	],
	darkMode: 'class'
}

