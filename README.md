This repository is checked out on the carlmontrobotics.org server under both
the `public_html/` folder and the `beta.carlmontrobotics.org/` folder.

The version under the `public_html/` folder is "live" at
http://www.carlmontrobotics.org/ and any changes made there will immediately
show up on the official website, potentially breaking it! DO NOT EDIT THOSE
FILES DIRECTLY!

Instead, make changes in `beta.carlmontrobotics.org/`, view the results at
http://beta.carlmontrobotics.org/, get them approved by at least one mentor,
and then have someone familiar with `git` (probably a programmer) take the
changes live *using the following procedure*.

1. Get shell access on `www.carlmontrobotics.org` either via ssh or via the 
   web-based terminal. The coach has the necessary credentials if you don't.
2. cd ~/beta.carlmontrobotics.org
3. Run `git status` and check the result to make sure there aren't any 
   untracked files or uncommitted changes. If there are, fix that via an 
   appropriate combination of `git add`, `git commit`, and changing `.gitignore`.
4. Run `git pull`. If there are any differences, resolve them, confirm that
   the result is ok on http://beta.carlmontrobotics.org and return to
   step #3.
5. Run `git push` and provide your github username and password to push the
   changes to github.
6. Run `cd ~/public_html`. This is *supposed* to be a pristine clone of the
    the most recent version that was deployed.
7. Run `git status` and check the result to make sure there aren't any
   uncommitted changes and that any untracked files are not associated with
   the main website. If there are uncommitted changes, someone didn't read
   this (!) and you need to merge them into `~/beta.carlmontrobotics.org`, confirm that the result is ok on http://beta.carlmontrobotics.org and return to step #2. Untracked files associated with other applications can
   generally be ignored.
8. Run `git fetch origin` to get the most recent changes from github.
9. Run `git reset --hard origin/master` to incorporate those changes into
   the live site.
