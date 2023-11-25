# Introduction

This is Wordpress Block Theme build with a minimal boilerplate using [Tailwind CSS](https://tailwindcss.com/) and [Guthenberg Editor](https://wordpress.org/gutenberg/)

### General

* You will find the editable CSS and Javascript files within the `/resources` folder.
* Before you use your theme in production, make sure you run `npm run production`.

## NPM Scripts

A script is executed through the terminal by running `npm run script-name`.

| Script        | Description                                                                    |
|------------   |--------------------------------------------------------------------------------|
| production    | Creates a production (minified) build of app.js, app.css and editor-style.css. |
| dev           | Creates a development build of app.js, app.css and editor-style.css.           |
| watch         | Runs several watch scripts concurrently.                                       |
| watch-sync    | Refresh browser automatically if something is changed.                         | 


NOTE: Browser-sync is not working out of the box. 
* In order to make browser sync work you need to change the proxy url in `browsersync-config.js` to your local development url.

## Block editor support

Comes with support for the [block editor](https://wordpress.org/support/article/wordpress-editor/).
A basic setup for `theme.json` is included. This also means that you need to at least use WordPress 5.8. 
CSS-classes for alignment (full, wide etc.) are generated automatically. You can opt-out on this by removing the plugin from the `tailwind.config.js` file.
To make the editing experience within the block editor more in line with the front end styling, a `editor-style.css` is generated.

## Define theme colors and font sizes

Several colors and font sizes are defined from the beginning. You can modify them in `theme.json`.

## Links

* [Tailwind CSS Documentation](https://tailwindcss.com/docs)
* [Laravel Mix Documentation](https://laravel-mix.com)
* [Esbuild Documentation](https://esbuild.github.io)
* [Web Falcon Official Web Site](https://webfalcon.me)


## Update Translations

POT file is allready generated. If you want to update it here are the commands. Note you need to run those by using WP CLI.



MAKE POT - Postion yourself in theme folder
```
wp i18n make-pot --exclude=*.json --domain=falcontwstarter . languages/falcontwstarter.pot
```

UPDATE PO FILES - make sure you are positioned in theme folder
```
wp i18n update-po "languages/falcontwstarter.pot" "languages/falcontwstarter-bs_BA.po"
```

UPDATE MO - make sure you are positioned in languages folder
```
wp i18n make-mo "languages/falcontwstarter-bs_BA.po"
```
