<br />
<p align="center">
  <a href="https://roots.io/bedrock/">
    <img alt="Bedrock" src="https://app.umbrellafamily.com/assets/img/umbrella-logo-horizontal.svg" height="70">
  </a>
</p>
<br />
<div align="center">
  <h1>Headless Wordpress</h1>
</div>

This headless wordpress setup is based on Bedrock which is a modern WordPress stack that helps you get started with the best development tools and project structure.

## Requirements

- PHP ^7.4
- Composer ^2.0 (PHP's dependency manager) - [Install](https://getcomposer.org/doc/00-intro.md)
- Local - [Install](https://localwp.com/)
  <br/><br/>

# Installation

## 1. Setup a new **Local** site with the following configuration

- Site name, i.e. `Umbrella Family Headless WP`
  - Advanced Options: Ensure local site domain ends in .test
- Choose a custom environment
  - PHP version: 7.4
  - Web server: NGINX
  - MySQL Database: 5.7.28
- After the project is created, make sure to **trust** the SSL.

Using your file browser or terminal, navigate to the installation directory of your new Local site. Local creates the following directory structure:

```shell
   projectname                                 // Root project folder
   │
   └───app
   │   └───public                             // Delete this
   │       │   ...wordpress core files
   │   └───sql
   │
   └───conf
   │   └───mysql
   │   └───nginx
   │       │   ...
   │       │   site.conf.hbs
   │
   └───logs
```

- **NOTE: Delete the projectname/app/public folder, we'll be replacing it with this repo**

## Clone this repo

1. From the project root, clone this repo to a new `public` folder: `git clone https://github.com/arissberg/umbrella-headless-wp.git public`
2. Rename the `.env.example` file to `.env` in the `app/public` folder and open the file in your code editor
   1. Update `DB_NAME`, `DB_USER`, `DB_PASSWORD` and `WP_HOME` to include new details which can be found in Local
   2. Update `ACF_PRO_KEY` with the key supplied to you
   3. Update the salts by going to <https://roots.io/salts.html> and copy/paste the `Env Format` keys that are generated to your .env file
3. Update the **site.conf.hbs** found in _/conf/nginx/_ and comment out `root “{{root}}“;` and directly below type `root “AbsolutePathToYourProjectName/app/public/web”;`. **NOTE LINE ENDINGS REQUIRE A SEMI-COLON**
4. Restart your Local site

## Install Composer Dependencies

In a terminal window, navigate to the app folder in your WP site and run: `composer install`. This will install the required Wordpress version and Plugins. Some plugins may require a github-oauth key. Follow the prompts to acquire one.

🥳 You should be good to go - try browsing the site

# Usage

## Troubleshooting

**Q:** Composer output is saying your php version (version #) does not satisfy that requirement

**A:** Make sure your php version is ^7.4

**Q:** When I try browsing to the GraphQL endpoint, I can a critical error notice

**A:** Make sure you have updated the GraphQL Gutenberg block registry in your WP admin

## This setup is based on Bedrock, more details can be found in their documentation

Bedrock documentation is available at [https://roots.io/docs/bedrock/master/installation/](https://roots.io/docs/bedrock/master/installation/).
