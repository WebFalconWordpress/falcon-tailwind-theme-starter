# General

This is Wordpress Block Theme build with a minimal boilerplate using [Tailwind CSS](https://tailwindcss.com/) and [Guthenberg Editor](https://wordpress.org/gutenberg/). You can see this theme in action here [Falcon Starter](https://falconstarter.wpengine.com/)


# How to run? 

### First setup
1. postion yourself in theme folder
2. run `npm install`
3. run some of NPM scripts that are provided by the theme  `npm run dev` or `npm run watch` or `npm run watch-sync`

### NPM Scripts
A script is executed through the terminal by running `npm run script-name`.

| Script        | Description                                                                    |
|------------   |--------------------------------------------------------------------------------|
| production    | Creates a production (minified) build of app.js, frontend-styles.css and editor-styles.css. |
| dev           | Creates a development build of app.js, frontend-styles.css and editor-styles.css.           |
| watch         | Runs several watch scripts concurrently.                                       |
| watch-sync    | Refresh browser automatically if something is changed.                         | 


NOTE: Browser-sync is not working out of the box. 
* In order to make browser sync work you need to change the proxy url in `browsersync-config.js` to your local development url.

# Define theme colors and font sizes

Several colors and font sizes are defined from the beginning. You can modify them in `theme.json` and `tailwind.config.js`. No matter how many colors are designed you sould always have three primary groups of colors. Those are base, secondary, accent. Those colors are used on 90% of places and all other colors are used on 10% of places. This is important because of reusability of patterns and consistency.


# WordPress Normalizer 

This is one important part. This normalizer is custom made for WordPress and Tailwind.css integration. It is made to normalize styles for WordPress but also to keep Tailwind intact. This is important because we want to use Tailwind classes as much as possible. 

# Layout rules

### NOTE
- This starter is fully supporting all layouting best pactises defined by WordPress
- This is very important section because it explains how to build templates from patterns and parts. It is extracted from the documentation and it is here for easier access.


### LAYOUT RULES
- Every template need to have **header**, **footer** and **main** section. All of theme are wrapped with div that hase class **wp-site-blocks**. You should always use this structure in templates. You can offcourse in some casies remove header and footer but you should always have main section and div with class **wp-site-blocks**.

- **container** - This class is defined in tailwind.config.js file. This class will make browser padding on left and right side and will center content on the middle of page by default. This is also important class to use in templates.

- **is-layout-constrained** - This class is used to make layout constrained. This means that content will be centered and will have max width. Max width will be defined in theme.json file. "layout": { "contentSize": "960px" }, 

- **is-layout-flow** - This class is used to make layout flow. This means that content will inherit width from parent element. This is default layout.

- **alignfull** - This class is used to make element full width. This is used for example for full width hero section. In many cases width of some sections like footer, header etc need to be full width and to go outside of container or constrained layout. With this class you can do that.
- **alignwide** - Similar to alignfull but this class is used to make element wide. This means element will go out and will take max width defined in theme.json "layout": {  "wideSize": "1280px" }, 

### **block-gap** 
-  There is rule called block-gap. This means it adds gap between every element this rule is defined by a few selectors.    -  This is used to add space between elements. You can offcourse remove this rule or change it to your needs. Just do it in custom.css file.

   -  :where(.wp-site-blocks)>* { margin-block-start: 1.2rem; margin-block-end: 0; } 
   -  :where(body .is-layout-constrained)>* { margin-block-start: 1.2rem; margin-block-end: 0; } 
   -  :where(body .is-layout-flow)>* { margin-block-start: 1.2rem; margin-block-end: 0; }

Note: There is class that removes this rule and that is 
- **.no-block-gap-for-children** - Put on parrent element and it will remove block-gap for all children elements.
-  **.no-block-gap**  - This class will remove block gap only for this element.

### More Detailed documentation can be found here:
Here are detailed instructions for both Designer and Developer regarding layout with a few examples.
- https://docs.google.com/document/d/1JVCrToy1knc4k3n0o7U_SdNviv3SUXDZ-3FeROl2-74/edit?usp=sharing
  

# Importnt Folders 

### Imprtant Theme folders
  * **resources** - Contains css that is using PostCSS so you can write modern css. Also it contains app.js file where you can writte JavaScript that you will use accros the website. 

  * **assets** - This folder contains all the assets that are used in the project. Some of assets that are here are autogenerated so you should not modify them. But you can add you   own assets here. For example images, fonts, etc.

  * **includes** - This folder contains basic php includes that are directly loaded in functions.php file. You can add your own includes here. Organize this folder as you wish. Goal is to keep functions.php file as clean as possible.

### Default wordpress theme folders
  * **parts** - Those are typically parts of the templates that are included in every template. For example header.html, footer.html, sidebar.html,
  * **patterns** - Those are patterns you define. For example hero.html, contact-form.html, etc.
  * **templates** - This folder contains all the templates that are compiled from patterns and parts. Template represent a unique page on the website. For example home.html, about.html, contact.html, etc. Templates are built from patterns and parts.


# Importnt Files  

  * **browsersync-config.js** - This file contains configuration for browser sync. Feel free to change it to your needs.
  * **package.json**- This file contains all the dependencies that are used in the project. Also here are defined all the scripts that are used to run the project. Like npm run watch, npm run dev, etc.
  * **tailwind.config.js** - This file contains all the tailwind configuration. Feel free to change it to your needs.
  * **theme.json** - This file contains all the theme configuration. Feel free to change it to your needs.


# Patterns development (Tip & Hack)
This is work in progress. Until we find better solution this is how we will develop patterns. This is so far the best solution we found and that is built in Wordpress Site Editor and working out of the box.

We created template part called development.html. This template part is used to develop patterns from allready developed blocks. 

How to use this file?
1. You can edit this file in any editor and save it. It will be automatically compiled. 
2. Open Wordpress admin panel and go to Site Editor.
3. Go to Parts section and find development template part.
4. Click on it and you will see preview of this template part.
5. Now you can edit this template part and see changes in real time.


# Multi Language Support

### General
You shoud use primary English language for writting code. Than you can translate what ever string you have using built in WordPress proceures. This theme comes with configured translations for current language. We are using here language - bs_BA. You can change this to your needs in control panel and than you need to generate new po and mo files for that language.

### Updating translations

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


# Userful Links

* [Tailwind CSS Documentation](https://tailwindcss.com/docs)
* [Esbuild Documentation](https://esbuild.github.io)
* [Web Falcon Official Web Site](https://webfalcon.me)
* Take a look at our [Falcon HTML Starter](https://github.com/WebFalconWordpress/falcon-tailwind-html-starter "Falcon HTML Starter")