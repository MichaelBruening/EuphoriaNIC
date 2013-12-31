EuphoriaNIC Theme for ELGG 1.8 - based on Euphoria Theme by Shane Barron

Modifications:
- enabled searchbar
- disabled login dropdown
- internationalization (english/spanish)
- hardcoded additonal menu-entries (from "more"-menu)

V1.1
- added language file for german/DE
- plugins to be shown in the menu can now be set via Configuration->Settings->EuphoriaNIC
  plugins available for selection are: Blogs, Videos, Fotos, Bookmarks and Newsletter
  files to modify if you want another set of plugins:
  - views/default/plugins/euphorianic/settings.php
  - views/default/navigation/menu/site.php
  - and the language files

Known issues
In a perfect world, the list of plugins available for incorporation into the menu
would be constructed dynamically from the set of plugins installed/activated..

V1.2
- disabled plugins are no longer added to the menu
- renamed "fotos" to "photos" to have it consistent with tidypics naming
- fixed a copy&paste error introduced with V1.1

Known Issues
There are several video plugins available. Because i use "frontpage_campaign"
which contains the "videolist"-plugin code, the active/enabled check is done using
the frontpage plugin id. So if you use another video plugin, adjust the check
in "views/default/navigation/menu/site.php", line 35.
