module.exports = {
 
    "files": ["*.css", "*.js", "*.php", "./**/*.php",, "*.html", "./**/*.html", "./**/*.js", "./**/*.css"],
    "reloadOnRestart": true,
    "port": 3000,
    "browser": "chrome",
    "reloadDelay": 100,
    "watchEvents": [ 
        "change" 
    ],
    "proxy": {
        target: "https://falcon-tailwind-wordpress-starter.local/" // Enter your local WP URL here
    },
};