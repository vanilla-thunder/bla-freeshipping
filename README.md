## "VSK-frei ab .. EUR" Hinweis für OXID eShop 4.8 - 4.9

![demo](https://raw.githubusercontent.com/vanilla-thunder/bla-vskfreiab/screenshot/bla-vskfreiab.png)

# Installation
- Archiv herunterladen und entpacken
- den Inhalt von copy_this/modules/ in den modules/ Ordner im Shop hochladen
- Modul aktivieren und in den Einstellungen die Werte eintragen
- application/views/azure/tpl/page/checkout/basket.tpl bearbeiten:
```html
[{block name="basket_vskfrei"}][{/block}]
```
an der gewünschten Stelle einfügen, z.B. Zeile ~ 78 
```html
<div id="basketContainer" class="lineBox">
  ...
  ...
  ...
  [{block name="basket_vskfrei"}][{/block}]
</div>
```


# Hinweise / Design anpassen
diese beiden Dateien sind für die jeweiligen Hinweise im Warenkorb und im Minibasket zuständig und können beliebig angepasst werden:
modules/bla/bla-vskfreiab/views/blocks/basket_vskfrei.tpl
modules/bla/bla-vskfreiab/views/blocks/widget_minibasket.tpl

Die Funktion "$oViewConf->vskfreiab()" liefert den in den Moduleinstallungen eingegebene Mindestbetrag für den kostenlosen Versand an.  
Die Funktion "$oViewConf->vskfreistart()" liefert den zweiten Wert, ab den der Hinweis angezeigt wird.

## Beispiel:
Ab 60 Euro ist der Versand kostenlos. Der erste Wert wird auf 60 gesetzt und der zweite auf 0.  
In diesem Zusatnd wird der Hinweis angezeigt, wenn Versandkosten bestehen und irgendwas im Warenkorb liegt.  
Setzt man den zweiten Wert in den Einstellungen auf 40, so wird der Hinweis Text erst ab einem Warenwert von 40 Eur. angezeigt.
Dies verhindert etwas komische Hinweise wie "jetzt für nur 75 Euro mehr bestellen und 3,95 Euro Versandkosten sparen".


### LICENSE AGREEMENT 
   bestlife AG - "VSK-frei ab ... EUR" Hinweis für OXID eShop  
   Copyright (C) 2015  bestlife AG  
   info:  oxid@bestlife.ag  
  
   This program is free software;  
   you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
   either version 3 of the License, or (at your option) any later version.
  
   This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;  
   without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
   You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
