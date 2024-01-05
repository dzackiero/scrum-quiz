/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors");

export default {
    darkMode: "class",
    presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Http/Livewire/**/*Table.php",
        "./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php",
        "./vendor/wireui/wireui/resources/**/*.blade.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#fbf8ea",
                    100: "#f5efd2",
                    200: "#ece3aa",
                    300: "#ded178",
                    400: "#cdbf4e",
                    500: "#b2a530",
                    600: "#898121",
                    700: "#6d681e",
                    800: "#57541d",
                    900: "#4a491d",
                    950: "#28280b",
                },
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms")({
            strategy: "class",
        }),
        require("tailwind-scrollbar")({ nocompatible: true }),
    ],
};
