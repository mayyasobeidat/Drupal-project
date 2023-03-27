
ABOUT
-----------

Bootstrap is a true blessing for web developers which is a sleek, intuitive and powerful mobile first front-end framework for faster and easier web development. When you mix that with LESS pre-processor you get a mighty tool for creating a Drupal 8 theme.


ABOUT DRUPAL THEMING
--------------------

To spare you some frustration and as a source of resource for our staff, I've arranged an orderly guide for making your own sub-theme.

Download, extract and place the Bootstrap base theme in your “theme” folder. It doesn’t make any difference if the theme stays disabled as we will be using it just as a parent theme for our sub-theme. N.B. : Unlike Drupal 7, Bootstrap for Drupal 8 does not require jQuery Update module.
 
Copy the entire less folder from “/themes/bootstrap/starterkits” and place it in “/themes” along with bootstrap directory.bling
 

Rename the less folder as the name of your theme. Let’s say we call it “bling”less
 
Rename the following files in your “bling” theme directory:
THEMENAME.libraries.yml to bling.libraries.yml (All the libraries associated with your theme will be entered in this file)
THEMENAME.starterkit.yml to bling.info.yml (The info file for your theme)
THEMENAME.theme to bling.theme (SImilar to template.php in Drupal 7)
config/install/THEMENAME.settings.yml to config/install/bling.settings.yml (This file is only used to override existing settings.)
config/schema/THEMENAME.schema.yml to config/schema/bling.schema.yml (Schema for the theme setting configuration file of your theme.)
5. Update your bling.info.yml

core: 8.x
type: theme
base theme: bootstrap

name: 'Bling'
description: 'My first Drupal8 subtheme powered by Bootstrap'
package: 'Custom'

regions:
  navigation: 'Navigation'
  navigation_collapsible: 'Navigation (Collapsible)'
  header: 'Top Bar'
  highlighted: 'Highlighted'
  help: 'Help'
  content: 'Content'
  sidebar_first: 'Primary'
  sidebar_second: 'Secondary'
  footer: 'Footer'
  page_top: 'Page top'
  page_bottom: 'Page bottom'

libraries:
  - 'bling/global-styling'
  - 'bling/bootstrap-scripts'
view rawbling.info.yml hosted with ❤ by GitHub
6. Download Bootstrap Source and upload it to “bling” folder. The source directory is named as bootstrap, which  contains the Source Less, JavaScript, and font files.

7. Next compile the less file which will create the style.css file. On compilation the style.css will be filled up all the Drupal specific overrides, Bootstrap CSS and also your custom css.
lessc less/style.less > css/style.css

8. Enable your theme from Drupal UI and you should see the base Bootstrap theme in action.

 

homepage
Brownie Points:

Add theme.js file:
Create a directory “js” in your theme
Add a file named theme.js which will hold the JavaScript applicable sitewide.
Add the library in the bling.libraries.yml as:
js:
  js/theme.js: {}
 

Add a FontAwesome CDN for getting font icons:
Add this to bling.libraries.yml under css directive:
'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min… {type: external}
Your libraries file should look like this after adding these two items:

global-styling:
  css:
    theme:
      css/style.css: {}
      'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css': {type: external}
  js:
    js/theme.js: {}

bootstrap-scripts:
  js:
    bootstrap/js/affix.js: {}
    bootstrap/js/alert.js: {}
    bootstrap/js/button.js: {}
    bootstrap/js/carousel.js: {}
    bootstrap/js/collapse.js: {}
    bootstrap/js/dropdown.js: {}
    bootstrap/js/modal.js: {}
    bootstrap/js/tooltip.js: {}
    bootstrap/js/popover.js: {}
    bootstrap/js/scrollspy.js: {}
    bootstrap/js/tab.js: {}
    bootstrap/js/transition.js: {}