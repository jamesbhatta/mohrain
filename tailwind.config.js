const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                rubik: ["Rubik", ...defaultTheme.fontFamily.sans],
                "red-hat": ["Red Hat Display", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#80aa2f",
                light: "#8b8e93",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
            filter: ["hover", "focus"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/aspect-ratio")
    ],
};
