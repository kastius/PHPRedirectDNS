# PHPRedirectDNS / PHPWeiterleitungDNS
PHP Redirect with TXT-Entry on DNS / PHP Weiterleitung mit TXT-Eintrag im DNS

--------- INSTALLATION ENGLISH:

$ git clone https://github.com/kastius/PHPRedirectDNS.git

Or upload the files: index.php and banner to your WWW directory

Enter your domain as TXT in your DNS server as follows:
domain.tld TXT 'redirect_http://www.your.tld/directory/file.html'

The file index.php now checks when calling if the TXT entry exists and then redirects to your previously set Internet addresses in the DNS.
LIVE-Demo: http://redirect.uber.space
-------------------------------

--------- INSTALLATION DEUTSCH:

$ git clone https://github.com/kastius/PHPRedirectDNS.git

Oder Lade die Dateien: index.php und banner in dein WWW-Verzeichnis hoch

Trage als TXT deine Domain folgendermaßen in deinen DNS-Server ein:
domain.tld TXT 'redirect_http://www.deine.tld/verzeichnis/datei.html'

Die Datei index.php prüft nun bei Aufruf ob der TXT-Eintrag vorhanden ist und leitet dann auf deine zuvor gesetzte Internetadressen im DNS weiter.
LIVE-Demo: http://redirect.uber.space
--------------------------------
