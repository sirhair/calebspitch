#Caleb's Pitch Wordpress Theme 

##Created by Dinosaur Dynamite
*Edward Alonzo, Kelly Ngo and Veronica Vilar*

We are using gulp, browsersync, [compass](http://compass-style.org/) (for sass), and jshint (for javascript debugging).

##Setting up dev package

Dev package is a theme for WordPress
We're using [SublimeText 3](http://www.sublimetext.com/3), if you are using another code editor, I can't help configure it.

####IMPORTANT
Make sure your wordpress install is in a directory called "capstone" or browsersync won't work (unless you modify the config locally)

##WP DATABASE SYNCING
All team members will need to ensure that their local wordpress installations USE THE SAME TABLE PREFIX.

If not, then you need to have the team edit their local wp-config.php files and replace their ```$table_prefix``` with the table prefix of the live/dev sites.
e.g.
````
$table_prefix  = 'wp_someTeamName_';
```
### Install these plugins locally and on the live/dev servers
[Github updater](https://github.com/afragen/github-updater/releases)
[WP Sync DB](https://github.com/wp-sync-db/wp-sync-db/releases)
[WP Sync DB MEDIA files addon](https://github.com/wp-sync-db/wp-sync-db-media-files/releases)

###Syncing
If working in a team you will always want to add permanent pages to your Live/dev site and then PULL permanent pages to your localsite.

Though you can create *temporary* pages locally to test something, before you make the permanent page on the live site.

Pulling will **ERASE** any local database changes (users/pass/post/pages, etc) So it is important to make any permanent changes to the LIVE site.

AND ALWAYS make sure you have updated the live site with any new pages/posts changes before you pull. Or it will be erased locally... I can't stress this enough.

[view the pulling live data screencast](https://github.com/wp-sync-db/wp-sync-db#pulling-live-data-into-your-local-development-environment)


###Windows Instructions
  1. Install git from [GitHub](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
  2. Install node from [NodeJS](https://nodejs.org/)
  3. **reboot**
  4. Install ruby. For  [windows](http://rubyinstaller.org/) or [OS X](https://www.ruby-lang.org/en/documentation/installation/#homebrew)
  5. **reboot**
  6. Run these commands, one at a time, in your empty theme folder 
  *Note:* wait until they complete before doing the next line.

```
git clone https://github.com/sirhair/calebspitch.git
npm install npm -g #to update node package manager
npm install --global gulp
npm install #installs package.json

gem update --system #updates your gems
gem install compass #installs compass
gem install normalize-scss #installs normalize sass file
gem install susy #installs susy, in case we use it
```
  7. **reboot**
  8. install [Sass code hinting for Sublime Text](https://packagecontrol.io/packages/Sass) 

###Mac instructions
  1. Install git from [GitHub](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
  2. Install node from [NodeJS](https://nodejs.org/)
  3. Install [Brew](http://brew.sh/)
  4. Run `brew to install npm` in a terminal to install npm
  5. **reboot**
  6. Install ruby. For  [windows](http://rubyinstaller.org/) or [OS X](https://www.ruby-lang.org/en/documentation/installation/#homebrew)
  7. **reboot**
  8. Run these commands, one at a time, in your **empty theme folder** 
  *Note:* wait until they complete before doing the next line.

```
git clone https://github.com/sirhair/calebspitch.git
sudo npm install npm -g #to update node package manager
sudo npm install --global gulp
sudo npm install #installs package.json

sudo gem update --system #updates your gems
sudo gem install compass #installs compass
sudo gem install normalize-scss #installs normalize sass file
sudo gem install susy #installs susy, in case we use it
```
  
  9. **reboot**
  10. install [Sass code hinting for Sublime Text](https://packagecontrol.io/packages/Sass) 

###Notes

If this is your first time using Git on your machine,  make sure you setup user.name and user.email [Git First Time](https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup) 

If you want to save your user/pass when you push: [Git Credential Store](http://git-scm.com/docs/git-credential-store)

If you need to install a local server [Xampp tutorial](http://grad.sirhair.com/installing-a-wordpress-testing-server-part-1-xampp/)

##Code base style guides: 
* [Google Style Guide HTML CSS](http://google.github.io/styleguide/htmlcssguide.xml)
* [Google JS](http://google.github.io/styleguide/javascriptguide.xml)
* [Markdown Cheatsheet (for readme file)](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)

###Main points of style guide: 
* We won't be super strict about their rules. But if we identify a conflict of styles, we'll use Google's recommendations as a way of learning best practices.
* Indents are two spaces (you can setup git to convert tabs to 2 spaces)
* type lowercased
* variables/functions camelCased.

##Using package

  * Run your local server.
  * Before coding, open the theme folder using a command line interface, and run: 
```
git pull --all
```
  * enter your working branch (replace "\<YOUR WORKING BRANCH NAME\>" with the branch you are working on) and update the branch with the changes from master.
```
git checkout <YOUR WORKING BRANCH NAME>
git merge master
gulp
```
This last command will start gulp. Keep that window running in the background. It will also automatically open a browser window to your "localhost/capstone" (assuming you have your server started)

  * You will also need a command line for running git commands

#Tag notes

  * v 0.2 is an extremely basic [Genesis](http://www.studiopress.com/) WP theme 
  * v 0.3 is a boilerplate for a regular WP theme.

#Appendices
##Publishing with Git

Derived From: [Git Setup for Dreamhost](http://wiki.dreamhost.com/Git#Setup_One:_For_the_Impatient) and [Using Git to manage a web site](http://toroid.org/ams/git-website-howto)

If you have git installed on your server (and ssh setup locally-- if not see the info in the git setup for dreamhost link above) you can start below.

### Create a bare remote repository
```
[local project]$ ssh [user@]remote
[remote ~]$ mkdir project.git
[remote ~]$ cd project.git
[remote project.git]$ git init --bare
[remote project.git]$ exit
```
### Push to the remote repository
```
[local project]$ git remote add web ssh://[user@]remote/~/project.git
[local project]$ git push web +master:refs/heads/master
```

###Setup hook
This first one is to create your template directory. You will need to have wordpress installed on your remote already. And you will need to locate your themes folder. I'm going to assume that your themes folder is located at "www.example.org/wp-content/themes/". But change that path as appropriate to your wordpress/server installation.

```
[remote ~]$ cd www.example.org/wp-content/themes/
[remote themes]$ mkdir calebspitch
[remote themes]$ cd calebspitch
[remote calebspitch]$ pwd
```
you should then see a path displayed, in this example I'm assuming that the following was displayed
"/var/www/www.example.org/wp-content/themes/"

```
[remote calebspitch]$ cd ~
[remote ~]$ cd project.git
[remote project.git]$ cat > hooks/post-receive
```
You will then have a response line waiting type:
```
#!/bin/sh
GIT_WORK_TREE=/www.example.org/wp-content/themes/calebspitch git checkout -f
```
Then press CNTRL+C to break from the response line and return to the normal shell prompt.

Make the hook executable (+x)
```
[remote project.git]$ chmod +x hooks/post-receive
```
Then make a change to your local repo, commit it and then push:

```
[local project]$ git push web
```
once you've done that a copy should be on your remote in the project.git folder and in the themes/calebspitch folder.

##Learn node
[NodeSchool](http://nodeschool.io/)

##Font choosing
[View your local fonts with wordmark.it](http://wordmark.it/)