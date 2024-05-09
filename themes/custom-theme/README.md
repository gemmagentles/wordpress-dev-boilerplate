## READ ME ##

# What is the purpose of this project? #

A template for rapid development of WordPress websites. Includes; A plugin folder with all the standard plugins we use for every project. A blank WordPress theme, so you can start a fresh custom theme, and your work wont be wiped when WP updates. A web dev boilerplate to set up code environment, which will compile scss and optimize css and js. 

Blank WordPress theme from HTML5 Blank (refer to README-HTML5-Blank.md if needing more info)
Web dev boilerplate from Prcyxpress (refer to README-Prcyxpress.md if needing more info)

* * *

# What do I need to install before I can use this? #

**Node.js** - https://nodejs.org/en/download/

**Sass** - `npm install -g sass`

**WordPress** - either install manually from https://wordpress.org/download/ or through the https://localwp.com/ app

* * *

# How do I use this project? #

# First time install: #

**Step one** - clone this repo into the wp-content folder of your WordPress install

**Step two** - cd themes/custom-theme

**Step three** - install all the packages that are listed in my package.json file from NPM to get all functionality `npm install`

**Step four** - now to run the project and make sure the scss is compiled do `npm run watch`

**Step five** - start building! You can change the styles by editing or adding a new scss file in sass folder (just remember to import it into main.scss to include it). You can change the layout of header.php and footer.php. You can create a custom post type template, just copy single-course.php and change the word after single- to what ever the name of your post is. Then add your own advanced custom fields to the file to create the page. Or you can copy the example-template.php and change the first word to be the name of the page you want to build. For example home-template.php. Add the acf components and set the template in the CMS home page to home-template.

* * *

## Git Repository Rules ##

1. *clone* this repo from master branch

2. use *git flow* to work with branches `git flow init` this makes it easier to track the history of the project, creating a develop branch, master branch stores the official release history, and the develop branch serves as an integration branch for features

3. if you want to make any changes to any files in this repo, create a *feature branch* `git flow feature start name-of-branch`

4. all commits should have a jira ticket number at the start eg. `git commit -m "ITO-12345 - what I done, why I done it."`

5. *push* all your changes when complete to origin, so that another developer can view the changes  `git push -u origin feature/name-of-branch`

6. when feature branch is complete, create a *pull request* by going to the repo in Bitbucket and clicking on the 3rd icon from the top left, all pull requests should go to @ggentles (repo manager)

7. @ggentles (repo manager) will merge to develop and do a release to master once approved


## Git Management Best Practices ##

Commit early, commit often

Write meaningful commit messages, what and why have you done this

Everyone should follow standard conventions for branch naming, tagging, and coding

Before merging anything to master, merge from master, and fix any merge conflicts inside the feature branch
