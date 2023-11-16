# Wordpress Child Themes
## Einleitung
**Die erstellung eines Child Themes sollte immer der erste Schritt sein.**  
Anpassungen, weche zuvor im Customizer gemacht werden, gehen verloren.

Leider gibt es keinen einheitlichen Weg um ein Child theme zu erstellen. Es ändert sich geringfügig je nach parent theme.

## Child Theme Format wählen
Die **Ordner** in diesem Repo sind die Vorlage für das Child Theme.  

**Option 1:**  
Man wählt `/_generic_type-1/` bzw. `/_generic_type-2/` aus, welche noch angepasst werden müssen. Mehr dazu hier: https://developer.wordpress.org/themes/advanced-topics/child-themes/

**Option 2:**  
Man wählt sich einen Ordner aus, welcher schon auf ein bestimmtes Parent Theme angpasst wurde: *noch offen*   

## Child Theme einrichten
- Einmalig: gesamtes Repo als ZIP herunterladen & entpacken
- Eines Child Theme Vorlageordner kopieren
- Wenn nötig anpassungen an `style.css` und `functions.php` durchführen.
- Ordner in das wordpress Verzeichnis **/wp-content/themes/** hochladen (via FTP, KAS Server Web FTP, WP Dateimanager,...)
- Das Child Theme wird nun unter Menü - Design - Themes in Wordpress angezeigt und kann **aktiviert** werden.
- Falls etwas nicht funktioniert, kann jederzeit auch wieder das Parent Theme aktiviert werden.

## Anpassung von `style.css`
`Theme Name:` Names des Child Themes. Wird in Wordpress angezeigt und muss eindeutig sein.   
`Template:` Name des **Verzeichnises**, in dem sich das Parent Theme befindet.  
`Text Domain:` Muss eindeutig sein, sollte an Theme Name angelehnt sein.  
`Theme URI, Description, Author:` werden in Wordpress ebenfalls angzeigt.

## Anpassung von `functions.php`
Hier sollten nur die Variablen `$parent`, `$child` und wenn nötig `$parentDependencies` angepasst werden!

`$parent`  
Name unter welchem Parent Theme registriert ist. Zu finden (meist) in der `functions.php` des Parent Themes, im Aufruf der funktion `wp_enqueue_style()`. Dieser name Endet meist mit "-style", also z.B. "nuss-style". Dies ist **nicht** der angezeigte Name in Wordpress.

`$child`  
Sollte an `$parent` angelehnt sein. Also z.B. oder "nuss-child-style". Wird nicht in Wordpress angezeigt.

`$parentDependencies`  
Muss noch beschreiben werden.

