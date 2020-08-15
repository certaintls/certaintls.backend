## IDE
[Phpstorm](https://www.drupal.org/docs/develop/development-tools/configuring-phpstorm) or vscode

## Set up a local development enviroment
There are many ways to set up a local enviroment for developing on Drupal. Please see [Local server setup](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html).

### First time install:
1. Clone this repository
1. `composer install` in the root of the project, for more information on using composer in this project, please see [Using Composer](https://www.drupal.org/docs/develop/using-composer).
1. You will need to install a new site from existing configuration
1. Generate a new pair of keys for simple_oauth (OAuth2) at `/admin/config/people/simple_oauth`

## Hosting in production notes:
1. [Redis](https://redis.io/) is highly recommended, otherwise, you probably will see many "deadlocks" in caching.
2. There are just infinite ways to set up hosting for Drupal depending on many factors. Please consult the Internet at large.


## Support:
Please [file an issue](https://github.com/certaintls/certaintls.backend/issues).

## Code contribution:

1. Clone this repository into your own project.
2. Do the work
3. Create a Pull Request against this repository. For more details, please see [GitHub - Contributing to a Project](https://git-scm.com/book/en/v2/GitHub-Contributing-to-a-Project)

