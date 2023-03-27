# Development

## Installation

1. run `composer install`
2. run `npm install`

Alternatively, you can run `npm run init` which is a shortcut for the above commands.

## Committing

This project uses the conventional commit standard, which means your commits should follow a basic template of:

    <type>[optional scope]: <description>

    [optional body]

    [optional footer(s)]

For more detailed information about available types, scopes, breaking changes, etc. please see the [official documentation](https://www.conventionalcommits.org/en/v1.0.0/).

This project also provides a command to assist you in formatting  commit messages using [commitizen](https://commitizen.github.io/cz-cli/):

```bash
npm run commit
```

## Versioning

This project uses Semantic Versioning 2.0.0 to keep track of releases.

    Given a version number MAJOR.MINOR.PATCH, increment the:

    1. MAJOR version when you make incompatible API changes,
    2. MINOR version when you add functionality in a backward compatible manner, and
    3. PATCH version when you make backwards compatible bug fixes.

    Additional labels for pre-release and build metadata are available as extensions to the MAJOR.MINOR.PATCH format.

For more detailed information about SemVer, please see the [official documentation](https://semver.org/).

_DO NOT_ manually update the version of this project. There is an npm command that will handle proper versioning for you. See [Making a Release](./making-a-release.md) for more detailed information.

## Building the Theme

```bash
npm run build:dev
```

Lints, compiles, and minifies all custom js/css code

## Running code checks

This project provides a few different kinds of code checks.

### SCSS

```bash
npm run lint:styles
```

Runs Stylelint using custom Coldfront standards.

### PHP

```bash
npm run lint:php
```

Runs PHPCS using the Drupal/DrupalPractice standards.

## Fixing Code Violations

This project provides commands to run an automated fix for code check failures.

### SCSS

```bash
npm run lint:styles:fix
```

Runs stylelint with `--fix` using custom Coldfront standards.

### PHP

```bash
npm run lint:php:fix
```

Runs PHPCBF using Drupal/DrupalPractice standards.

## Live compiling

```bash
npm run watch
```

Watches files for changes and runs linting, compiling, and minifying tasks accordingly.
