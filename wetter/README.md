# Meteogram für DWD MOSMIX forecast stations

interaktives Meteogram zur Darstellung der DWD Vorhersage Daten,<br>basierend auf dem Datensatz MOSMIX_L (Aktualisierung vom DWD 4x täglich, ca. 115 Parameter, bis +240h also für max. 10 Tage)

Der MOSMIX_L Datensatz für die gewählte Station wird beim Aufruf direkt vom DWD Server geladen und gespeichert, so das bei erneutem Aufruf Datenverkehr gespart wird, nur bei neuen Vorhersagedaten erfolgt ein neuer Download.

Installation:
1. Upload aller Dateien und Ordner auf den eigenen Server
2. editieren des Parameters $id = xxxx in der meteogram.php mit der gewünschten Station aus dem DWD Stationskatalog (6000 Stations in Germany and Worldwide)<br>
 https://www.dwd.de/DE/leistungen/met_verfahren_mosmix/mosmix_stationskatalog.cfg?view=nasPublication&nn=16102
   
Aufruf der meteogram.php

![Screenshot](https://github.com/TurboDuke77/DWD-Meteogram/assets/38126777/1bc59628-7175-4d2e-87cb-6bc006895919)

Beschreibung der weiteren Variablen $range, $datareduce, $TZ direkt in der meteogram.php <br><br>


Coypright Deutscher Wetterdienst DWD Open Data
https://www.dwd.de/DE/leistungen/opendata/opendata.html

DWD Mosmix Verfahren
https://www.dwd.de/DE/leistungen/met_verfahren_mosmix/met_verfahren_mosmix.html

Highcharts and Highstock - available at https://www.highcharts.com <br>
free only for private use open source projects https://www.highcharts.com/forum/viewtopic.php?t=41138


For more information see the service description on https://www.dwd.de/DE/leistungen/opendata/neuigkeiten/opendata_mar2018_01.html
