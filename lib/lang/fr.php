<?php
/*
 *  Jirafeau, your web file repository
 *  Copyright (C) 2012  Jerome Jutteau <j.jutteau@gmail.com>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$tr = array (
            /* index.php */
             'Jirafeau, your web file repository' => 'Jirafeau, votre dépot de fichiers',
             'Upload a file' => 'Envoyer un fichier',
             'One time download' => 'Téléchargement unique',
             'Password' => 'Mot de passe',
             'Time limit' => 'Limite de temps',
             'Maximum file size' => 'Taille maximale',
             'powered by Jirafeau' => 'Propulsé par Jirafeau',
             'Jirafeau Project' => 'Projet Jirafeau',
             'None' => 'Aucune',
             'One minute' => 'Une minute',
             'One hour' => 'Une heure',
             'One day' => 'Une journée',
             'One week' => 'Une semaine',
             'One month' => 'Un mois',
             'The file directory is not writable!' => 'Le dossier \'file\' ne peut être écrit.',
             'The link directory is not writable!' => 'Le dossier \'link\' ne peut être écrit.',
             'Installer script still present' => 'Le script d\'installation est toujours présent',
             'Please make sure to delete the installer script "install.php" before continuing.' => 'Assurez vous de supprimer le fichier "install.php" avant de continuer.',
             'An error occurred.' => 'Une erreur s\'est produite',
             'File uploaded! Copy the following URL to get it' => 'Fichier envoyé! Copiez le lien suivant pour le télécharger',
             'This file is valid until the following date' => 'Ce fichier est valable jusqu\'à la date suivante',
             'Keep the following URL to delete it at any moment' => 'Conservez le lien suivant pour le supprimer à n\'importe quel moment',
             /* file.php */
             'Error 404: Not Found' => 'Erreur 404: La page que vous cherchez n\'existe pas ou n\'existe plus',
             'File not available.' => 'Fichier non disponible',
             'File has been deleted.' => 'Le fichier a été supprimé.',
             'The time limit of this file has expired.' => 'La limite de temps est dépassée.',
             'Password protection' => 'Protection par mot de passe',
             'Give the password of this file:' => 'Donnez le mot de passe pour ce fichier',
             'I have the right to download this file' => 'J\'ai le droit de télécharger ce fichier',
             'Error 403: Forbidden' => 'Erreur 403: Accès interdit',
             /* install.hpp */
             'This file was generated by the install process. You can edit it. Please see config.php to understand the configuration items.' => 'Ce fichier a été généré par le processus d\'installation. Vous pouvez l\'éditer. Merci de se référer à config.php pour comprendre les éléments de configuration.',
             'The following directory could not be created' => 'Le dossier suivant ne peut être créé',
             'You should create this directory by hand.' => 'Vous devriez creer manuelement ce dossier',
             'The following directory is not writable' => 'Le dossier suivant ne peut être créé',
             'You should give the write right to the web server on this directory.' => 'Vous devriez donner le droits d\'écriture à ce repertoire pour le rendre accéssible par le serveur web.',
             'Here is a solution' => 'Une solution possible',
             'The local configuration file could not be created. Create a ' .
                '<code>lib/config.local.php</code> file and give the write ' .
                'right to the web server (preferred solution), or give the ' .
                'write right to the web server on the <code>lib</code> ' .
                'directory.' => 'Le fichier de configuration local ne peut être créé. Creez le fichier <code>lib/config.local.php</code> et donnez lui les droits d\'écriture par le serveur web (solution préférable) ou bien donnez les accès en écriture au dossier <code>lib</code>',
            'The local configuration is not writable by the web server. ' .
                'Give the write right to the web server on the ' .
                '<code>lib/config.local.php</code> file.' => 'Le fichier de configuration local ne peut être écrit. Donnez les droits d\'écriture au fichier <code>lib/config.local.php</code> par le serveur web.',
            'Installation of Jirafeau' => 'Installation de Jirafeau',
            'step' => 'étape',
            'out of' => 'sur',
            'Finalisation' => 'Finalisation',
            'Jirafeau is setting the website according to the configuration you provided.' => 'Jirafeau se configure selon les paramêtres donnés',
            'Previous step' => 'Etape précedente',
            'Retry this step' => 'Ressayer cette étape',
            'Jirafeau is now fully operational' => 'Jirafeau est maintenant utilisable',
            'Information' => 'Information',
            'The base address of Jirafeau is the first part of the URL, until (and including) the last slash. For example: "http://www.example.com/". Do not forget the ending slash!'
                => 'L\'adresse d\'origine de Jirafeau est la première partie de l\'URL (slash de fin inclue). Par exemple: "http://www.exemple.com/". N\'oubliez pas le slash de fin !',
            'Base address' => 'Addresse d\'origine',
            'The data directory is where your files and information about your files will be stored. You should put it outside your web site, or at least restrict the access of this directory. Do not forget the ending slash!'
                => 'Le dossier "data" est là où seront stoqués les fichiers ainsi que leurs informations. Ce dossier ne devrait pas être accessible directement par l\'utilisateur. N\'oubliez pas le slash de fin !',
            'Data directory' => 'Dossier de stockage des données',
            'Jirafeau is internationalised. Choose a specific langage or choose Automatic (langage is provided by user\'s browser).'
                => 'Jirafeau supporte plusieurs languages. Choisissez un langage spécific ou Automatic (la langue utilisée est alors fournie par le navigateur du visiteur).',
            'Choose the default language' => 'Choissiez la langue par defaut',
            'Next step' => 'Etape suivante',
            );

 ?>