## Ura Design
This repo contains the files needed to build the Ura Design website, using Jekyll as the base and several plugins on top.

## Config file
_config.yml file contains the basic settings for building Jekyll, which is done using a server that fetches the files from this repo upon changes and builds it (this ensures we get to keep our custom domain and apply SSL from Let's Encrypt on top of it).

## New Posts
New posts can be added by creating a new Markdown file (.md) inside the _posts directory. The file name should start with YYYY-MM-DD-post-name and have the .md extension in order to be recognized and for it to be live in the final website.

### Website
The website was designed to be as lightweight as possible. The underlying technology used is Jekyll. The CSS is built from SCSS files and everything is contained to remove the need for 3rd party assets and unnecessary connections.
