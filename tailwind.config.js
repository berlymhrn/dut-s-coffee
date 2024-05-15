/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primaryColor: "#452212",
                secondaryColor: "#E4C59E",
            },
        },
    },
    plugins: [],
};
