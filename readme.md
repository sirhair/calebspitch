#Caleb's Pitch Wordpress Theme 

##Created by Dinosaur Dynamite
*Edward Alonzo, Kelly Ngo and Veronica Vilar*

##Setting up dev package
Dev package is a theme for WordPress

  1. Install git from [GitHub](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
  2. Install node from [NodeJS](https://nodejs.org/)
  3. **reboot**
  4. Install ruby [windows](http://rubyinstaller.org/) [OS X](https://www.ruby-lang.org/en/documentation/installation/#homebrew)
  5. **reboot**
  6. Run these commands in your empty theme folder 

```
git clone https://github.com/sirhair/calebspitch.git
npm install npm -g #to update node package manager
npm install -g grunt-cli #adds grunt command line interface
npm install #installs package.json
gem update --system #updates your gems
gem install compass #installs compass
gem install normalize-scss #installs normalize sass file
gem install susy #installs susy, in case we use it

```

  7. install [LiveReload extension](http://livereload.com/extensions/)
  8. install [Sass code hinting for Sublime Text](https://packagecontrol.io/packages/Sass) 

###Notes

If this is your first time using Git on your machine,  make sure you setup user.name and user.email [Git First Time](https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup) 

If you need to install a local server [Xampp tutorial](http://grad.sirhair.com/installing-a-wordpress-testing-server-part-1-xampp/)

If you want to save your user/pass when you push: [Git Credential Store](http://git-scm.com/docs/git-credential-store)

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

Before coding, open the folder using a command line interface, and run 
```
grunt
```
this will start grunt. Keep that window running in the background.

You will also need a command line for running git commands

Additionally run your local server, visit the site and make sure you click the livereload button (should have a solid dot not a hollow dot when active).

#Appendices
##Learn node
[NodeSchool](http://nodeschool.io/)
[View your local fonts with wordmark.it](http://wordmark.it/)