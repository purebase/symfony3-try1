TAGEBUCH
======

NOTES
-----   
    * List of Bundles: http://knpbundles.com/
        * OAuth1+2: http://knpbundles.com/hwi/HWIOAuthBundle

ERRORS
------
Der Eintrag ...
    mongodb_server: "mongodb://localhost:27017"
... wurde manuell gesetzt (http://symfony.com/doc/current/bundles/DoctrineMongoDBBundle/index.html)
Bei einer Composer-Console-Aktion wie z.B. ...
    composer require symfony/debug
... wurde es aber wieder entfernt.

TODO
-----
* Upload und form: http://symfony.com/doc/current/controller/upload_file.html
* Testing: http://symfony.com/doc/current/testing.html
* Continious Deployment:
    * https://www.theodo.fr/blog/2014/03/easy-travis-configuration-for-your-symfony2-tests-using-mysql-database/
    * http://vvv.tobiassjosten.net/symfony/continuous-integration-for-your-symfony2-app/
    * mit gulp: https://gomakethings.com/github-travis-ci-and-continuous-integration/
    * https://cesiumjs.org/2016/02/03/Cesium-Website-Continuous-Integration/

03.09.2016
----------
Das Debugging wird in Symfony so beschrieben ...
http://symfony.com/doc/current/components/debug.html
... verwendet man PhpStorm so unterscheidet sich das Debugging nicht von anderen 
PHP-Anwendungen. Eines ist allerdings zu beachten:
Durch den Start der Symfony-Applikation über die Konsole per ...
    php bin\console server:run
... ist die geladene Php.ini-Datei eine andere ....
http://stackoverflow.com/questions/36669259/symfony3-debugging-with-phpstorm?noredirect=1&lq=1

Die dynamische Erstellung von Forms wird in dem Tutorial ...
http://symfony.com/doc/current/bundles/DoctrineMongoDBBundle/form.html
... in Bezug auf den Type scheinbar falsch erklärt, denn sowohl ...
http://stackoverflow.com/questions/34658833/hello-expected-argument-of-type-string-bundle-frontbundle-form-type-prestati
... wie auch die original Dokumentation ...
http://symfony.com/doc/current/forms.html
... gehen anderes vor. Übergeben keine Instanz, sondern den Klassennamen. 

http://api.symfony.com/2.7/Symfony/Bundle/FrameworkBundle/Controller/Controller.html

TODO http://symfony.com/doc/current/bundles/DoctrineMongoDBBundle/config.html

02.09.2016
------------------
Beschreibung "Einbinden von MongoDB":
* http://symfony.com/doc/current/bundles/DoctrineMongoDBBundle/index.html

  mongodb-win32-x86_64-2008plus-ssl-2.7.8-signed.msi

Die Extension für PHP donwloaden:
* https://docs.mongodb.com/ecosystem/drivers/php/
* http://pecl.php.net/package/mongodb

  php_mongo-1.6.14-5.6-ts-vc11-x86

Problem: ext-mongo wird nicht erkannt
http://php.net/manual/de/set.mongodb.php
CLI?:
https://stackoverflow.com/questions/37345701/symfony3-mongodb-configurtion
==> Ursache: per "php --ini" herausgefunden. wamp verwendet apache/php.ini oder so. 
  
**01. September 2016:**
http://symfony.com/doc/current/routing/requirements.html
http://symfony.com/doc/current/controller.html
http://symfony.com/doc/current/setup.html


Basis: Symfony Standard Edition
========================

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/3.0/book/installation.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.0/book/doctrine.html
[8]:  https://symfony.com/doc/3.0/book/templating.html
[9]:  https://symfony.com/doc/3.0/book/security.html
[10]: https://symfony.com/doc/3.0/cookbook/email.html
[11]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html
[13]: https://symfony.com/doc/3.0/bundles/SensioGeneratorBundle/index.html
