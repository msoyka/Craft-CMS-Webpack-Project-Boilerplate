<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
		/**
		 * Environment: Global
		 *
		 * NOTE: '*' key is required to trigger multi-environment config support, even if you end up not needing it.
		 */
		'*' => array(
        'tablePrefix' => 'craft',
    ),
		/**
     * Environment: Local
     */
		'local' => array(
        'server' => 'localhost', // The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
        'user' => 'root', // The database username to connect with.
        'password' => 'root', // The database password to connect with.
        'database' => 'craft_webpack_project_boilerplate', // The name of the database to select.
    ),
		/**
     * Environment: Development
     */
    'development' => array(
        'server' => 'localhost', // The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
        'user' => 'root', // The database username to connect with.
        'password' => 'root', // The database password to connect with.
        'database' => '__ADD_DATABASE_HERE__', // The name of the database to select.
    ),
		/**
     * Environment: Staging
     */
		'staging' => array(
        'server' => 'localhost', // The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
        'user' => 'root', // The database username to connect with.
        'password' => 'root', // The database password to connect with.
        'database' => '__ADD_DATABASE_HERE__', // The name of the database to select.
    ),
		/**
     * Environment: Production
     */
    'production' => array(
				'server' => 'localhost', // The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
				'user' => 'root', // The database username to connect with.
				'password' => 'root', // The database password to connect with.
				'database' => '__ADD_DATABASE_HERE__', // The name of the database to select.
    ),
);
