

## Overview of Bedrock

Bedrock is a modern WordPress stack that helps you get started with the best development tools and project structure.

Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology including the [WordPress specific version](https://roots.io/twelve-factor-wordpress/).

## Requirements

- PHP >= 7.1
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- Local - [Install](https://localwp.com/)

## Using Local

When creating a new Local project, ensure that the project meets these requirments: 
-   Web server is Nginx
-   Php latest version
-   Data base is 5.7.28
-   Local site domain ends in .test

After the project is created, make sure to **trust** the SSL.

## Installing Composer to your Local project

1. In terminal, navigate to the app folder in your WP site and run: ``` composer create-project roots/bedrock ```
2. Delete the public folder located in *projectname/app*.
3. Update ``` DB_NAME, DB_USER,``` and ```DB_PASSWORD``` within the **.env** file (found in */projectname/app/bedrock*) to include new details which can be found in Local.
4. Update the **site.conf.hbs** found in */conf/nginx/* and comment out ```root “{{root}}“;``` and directly below type ```root “PathToYourProjectName/app/bedrock/web;”```.
5. Ensure everything is saved, and run your site through Local.

## Documentation

Bedrock documentation is available at [https://roots.io/docs/bedrock/master/installation/](https://roots.io/docs/bedrock/master/installation/).