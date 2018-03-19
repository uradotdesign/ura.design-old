This repo contains the files needed to build the Ura Design website, using Jekyll as the base and several plugins on top. The website will be localizable soon so everyone can contribute to have the website in as many languages as possible.

## Config file
The _config.yml file contains the basic settings for building Jekyll, which is done using a server that fetches the files from this repo upon changes and builds it (this ensures we get to keep our custom domain and apply SSL from Let's Encrypt on top of it).

## New Posts
New posts can be added by creating a new Markdown file (.md) inside the _posts directory. The file name should start with YYYY-MM-DD-post-name and have the .md extension in order to be recognized and for it to be live in the final website. In the top part of the markdown post include these lines: 

---
layout: post
title: TITLE HERE
author: AUTHOR HERE
date: YYYY-MM-DD HH:MM:SS +0200
categories: 
images:
- images/@stock/IMAGE HERE
excerpt:
 EXCERPT HERE […]
---

## Caching
There is caching applied on most of the static elements such as the logo, css and js files to increase the page access speed and lower overhead on the server (this also helps lower the total number of requests to the server by using locally cached files, read more [here](https://gtmetrix.com/leverage-browser-caching.html)).

