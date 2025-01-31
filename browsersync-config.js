module.exports = {
    files: [
      "theme.json",
      "assets/**/*.*",
      "blocks/**/*.{php,js,css,json}",
      "includes/**/*.php",
      "functions.php",
      "patterns/**/*.{html,php}",
      "parts/**/*.html",
      "templates/**/*.{html,php}",
      "styles/**/*.json",
      "safelist.txt",
      "tailwind.config.js",
    ],
    reloadOnRestart: true,
    port: 3000,
    browser: "chrome",
    reloadDelay: 200, // Wait 100 milliseconds before triggering a reload event
    reloadDebounce: 2000, // Wait 1 second after the last reload event has been triggered before reloading the page
    watchEvents: ["change"],
    proxy: {
      target: "https://falcon-tailwind-wordpress-starter.local/", // Enter your local WP URL here
    },
  };
  