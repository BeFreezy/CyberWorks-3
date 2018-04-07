<?php
return array (
    'generic' => array (
        'welcome' => 'Willkommen',
        'add' => 'Hinzufügen',
        'new' => 'Neu',
        'list' => 'Liste',
        'profile' => 'Profil',
        'logOut' => 'Ausloggen',
        'logs' => 'Logs',
        'title' => 'Titel',
    ),
    'nav' => array (
        'general' => 'Allgemein',
        'home' => 'Dashboard',
        'changePW' => 'Passwort ändern',
        'admin' => array (
            'title' => 'Admin',
            'logs' => array (
                'title' => 'Logs',
                'player' => 'Spieler Logs',
                'vehicle' => 'Fahrzeug Logs',
                'gang' => 'Gang Logs',
                'house' => 'Häuser Logs',
                'container' => 'Lagerkisten Logs',
                'user' => 'Benutzer Logs',
                'group' => 'Gruppen Logs'
            ),
            'groups' => 'Gruppen',
            'users' => 'Benutzer',
            'metrics' => 'Graphen'
        ),
    ),
    'admin' => array (
        'generic' => array (
            'author' => 'Author',
            'message' => 'Nachricht',
            'logmessage' => 'Bearbeitung',
            'created' => 'Erstellt',
            'actions' => 'Aktionen',
            'close' => 'Schließen',
            'save' => 'Speichern',
            'sure' => 'Bist du sicher',
            'yes' => 'Ja',
            'no' => 'Nein'
        ),
        'notes' => array(
            'types' => array (
                'info' => 'Info',
                'warn' => 'Warnung',
                'other' => 'Andere'
            ),
            'deleteTitle' => 'Notiz löschen'
        )
    ),
    'dashboard' => array (
        'tiles' => array (
            'players' => 'Spieler',
            'totalPlayers' => 'Gesamte Spieleranzahl',
            'latestPlayer' => 'Neuster Spieler',
            'latestPlayerDesc' => 'Neuster Spieler der den Server betreten hat',
            'totalVehicles' => 'Fahrzeuge',
            'totalVehiclesDesc' => 'Gesamtzahl an Fahrzeugen',
            'totalHouses' => 'Häuser',
            'totalHousesDesc' => 'Anzahl von Spieler gekaufter Häuser'
        ),
        'titles' => array (
            'tenRichestPlayersBank' => 'Die 10 reichsten Spieler (Konto)',
            'tenRichestPlayersCash' => 'Die 10 reichsten Spieler (Bar)',
            'factionMetrics' => 'Fraktionsverteilung',
        ),
		 'updates' => array(
            'title' => 'Verfügbare Updates',
            'yes' => 'Ja!',
            'no' => 'Nein!',
            'current' => 'Derzeitige Version',
            'latest' => 'Aktuelle Version',
            'needsUpdate' => 'Neue Version verfügbar?',
        ),
    ),
    'auth' => array (
        'generic' => array(
            'username' => 'Username',
            'password' => 'Passwort',
            'submit' => 'Absenden',
            'lost' => 'Passwort vergessen',
            'email' => 'E-Mail'
        ),
        'login' => array (
            'title' => 'Login',
            'required' => 'Bitte einloggen um diese Aktion durchzuführen',
        ),
        'register' => array (
            'title' => 'Registrieren',
            'login' => 'Login',
        ),
        'reset' => array (
            'titleRequest' => 'Neues Passwort anfordern',
            'title' => 'Passwort zurücksetzen',
        ),
    ),
    'perms' => array (
        'generic' => array (
            'name' => 'Name',
            'email' => 'Email',
            'group' => 'Gruppe',
            'groups' => 'Gruppen',
            'actions' => 'Aktionen',
            'sUser' => 'Super Admin',
            'action' => 'Aktion',
            'sure' => 'Du bist kurz davor einen Benutzer zu löschen, bist du sicher?',
            'suregroup' => 'Du bist kurz davor eine Gruppe zu löschen, bist du sicher?'
        ),
        'users' => array (
            'title' => 'Benutzer',
            'updateUser' => 'Benutzer bearbeiten',
            'newPass' => 'Neues Passwort',
            'changeUPass' => 'Passwort des Benutzers ändern',
            'changePass' => 'Passwort ändern',
            'new' => array (
                'title' => 'Neuer Benutzer',
                'create' => 'Benutzer erstellen',
            ),
        ),
        'group' => array (
            'gPerms' => 'Gruppen Berechtigungen',
            'delete' => 'Gruppe löschen',
            'new' => array (
               'title' => 'Neue Gruppe',

            ),
            'ipsID' => 'IPS ID',
            'save' => 'Save',
        ),
        'admin' => array (
            'ePPG' => 'Darf Spieler Berechtigungen bearbeiten',
            'eVPG' => 'Darf Fahrzeug Berechtigungen bearbeiten',
            'eHPG' => 'Darf Häuser Berechtigungen bearbeiten',
            'eGPG' => 'Darf Gang Berechtigungen bearbeiten',
            'eCPG' => 'Darf Lagerkisten Berechtigungen bearbeiten',
            'eGP' => 'Darf Gruppen Berechtigungen bearbeiten',
            'eAP' => 'Darf Admin Berechtigungen bearbeiten',
            'ePGN' => 'Darf Gruppenname bearbeiten',
            'isSuper' => 'SUPER ADMIN',
            'vLogs' => 'Logs sehen',
            'newPG' => 'Berechtigungsgruppen erstellen',
            'eUsers' => 'Benutzer bearbeiten',
            'addUser' => 'Benutzer hinzufügen',
            'delUser' => 'Benutzer löschen',
            'editIpsID' => 'Edit IPS Connect ID',
            'deluser' => 'Benutzer löschen',
        ),
    ),
);
