# Changelog

All notable changes to Falcon Tailwind Block Theme Starter will be documented in this file.

## 1.1.0
- Added a `README.md` file with instructions on how to use this theme, how to use layout and all other useful information.
- Worpdress Normalizer is now loaded only on the front-end using `wp_enqueue_scripts` hook. And in the editor it is part of editor-styles.css and loaded together with other editor styles.
- Added a includes folder and moved code from `functions.php` to `includes/theme-setup.php` 
- Created pattern-style.css and added some styles for the patterns. 
- Package.json updated with new scripts and dependencies.
- No-gap rules moved from custom css to wordpress normalizer.
- Tailwind.css file is now simplified and only contains basic tailwind styles that we will use in the themes. Same goes with theme.json file.
- Added support for uploading svg pictures in Wordpress admin panel
- Added Developer.html template part - This will be used for developes to add their own custom html code and easier test it in the browser.
- Bug with text-base class fixed. IN previous version it was not working since text-base is by default used in Tailwind for defining font size. We had overlapping with color classes which we defined previouse in tailwind config file.
- Made a few button style examples now we have fill, alternate and cta, button link by default as part of the theme. 
- There is now live link of this theme so everyone can preview it in the browser.

## 1.0.0

- We have a theme! 🎉
- Used TailPress as a base for this theme and added some extra features since it is MIT licensed. Big thanks to [Jeffrey van Rossum](https://github.com/jeffreyvr/tailpress) for his work on TailPress.