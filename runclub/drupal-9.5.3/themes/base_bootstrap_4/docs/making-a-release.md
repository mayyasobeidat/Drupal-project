# Making a Release

This project uses [standard-version](https://github.com/conventional-changelog/standard-version) to parse through your commits, decide what kind of release will be created, and automatically generates a CHANGELOG.md file for your project. These changes are then commited using the message `chore(release): <version number>`.

To create a release do the following:

- Ensure all your changes are committed and merged into the `dev` branch
- Run `npm run release` (for Alpha/Beta/RC releases, please see the [official docs](https://github.com/conventional-changelog/standard-version#release-as-a-pre-release))
- Run `git push --follow-tags origin` (You can replace `origin` with whatever target remote source you choose)

_DO NOT_ manually update the version of this project.


