Website für den MIT Unterricht

!---ACHTUNG---!
Der ordner "message_db" muss in die Directory
"/xampp/mysql/data"
ansonsten wird Login und das Kontaktformular nicht funktionierten

Die SQL-Database kann man bei "localhost/phpmyadmin" im browser öffnen
Falls dies nicht Funktioniert erstellen sie in phpMyAdmin eine
Database namens "message_db"
Diese Db braucht eine Tabelle Namens "message" mit 5 spalten
Name        Typ       länge     A_I
1. id       int                 true
2. name     varchar   128       false
3. message  varchar   128       false
4. email    varchar   128       false
5. typofmsg int                 false

Danach müssen sie eine Db namens "users" mit 6 spalten machen
Name          Typ       länge     A_I
1. id         int                 true
2. name       varchar   128       false
3. username   varchar   128       false
4. email      varchar   128       false
5. adress     varchar   128       false
6. password   varchar   128       false