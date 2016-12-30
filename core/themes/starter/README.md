### Create a custom theme

To create a theme...

```
cd core
cp -r themes/starter my/themes/your_theme_name
```

Edit the value of CERNL_THEME in my/cl-config.php to match your theme directory.

For now the code in theme.php doesn't matter.  It only matters that you have
a theme.php in the directory.  You do need to have a theme.php in the directory
for cernl to recognize the theme.
