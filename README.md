# Org: WPezBoilerStrap
### Product: WPezBoilerStrap Uno Child Boilerplate

#####A boilerplate child theme for the WordPress theme (architecture): WPezBoilerStrap Uno.

https://github.com/WPezBoilerStrap

fyi: Look for the Org's Getting Started if you're not familar with this forward-thinking architecture.

=======================================================================================

####WPezBoilerStrap: Getting Started
- https://github.com/WPezBoilerStrap/wp-ezboilerstrap-docs-getting-started


#### See also: WPezClasses - Getting Started
- https://github.com/WPezClasses/wp-ezclasses-docs-getting-started

=======================================================================================

####The TODOs

- Setup your Modl. That is what base Modl with the class in ezbsModl extend?

- Setup your globals in setup / class-wp-ezboilerstrap-globals.php. Mainly you're defining where the setup files (e.g., class-wp-ezboilerstrap-add-image-size) will be found by the ez_gtp (i.e., ez get_template_part) in the parent theme's functions.php.

- Configure your setup files. Note: You don't have to have a copy / version of every setup file in your child. You only need to carry forward (into the child) the setup files that will be config'ed different than the parent.

- From there it's a matter of customizing your Vues, changes to the Modl, and child-centric CSS. It's the usual WP child routine; but with a more logical structure and more flexibility (since most everything in the parent is ez to override).