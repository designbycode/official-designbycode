import defaultTheme from "tailwindcss/defaultTheme"
import colors from "tailwindcss/colors"

/** @type {import("tailwindcss").Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.ts",
        // for filamentPhp
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {

        extend: {
            colors: {
                primary: colors.sky,
                gray: colors.neutral,
            },
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    darkMode: "class",
    plugins: [
        require("@designbycode/tailwindcss-text-shadow"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
}
