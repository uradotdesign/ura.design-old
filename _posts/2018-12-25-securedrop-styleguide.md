---
layout: post
title: SecureDrop Style Guide
author: Anxhelo Lushka
link: https://lushka.al/
date: 2018-12-25 12:00:00 +0200
categories:
images: 
- images/projects/securedrop_overview.png
tags:
- Style Guides
- Usability Study
- Open Source Design
- I2P
excerpt:
  Our next project, in the series of funding from OpenTechFund, is SecureDrop. SecureDrop is an open source whistleblower submission system […]
---

Our next project, in the series of funding from OpenTechFund, is SecureDrop. SecureDrop is an open source whistleblower submission system that media organizations can install to securely accept documents from anonymous sources.

![SecureDrop Logo](/images/projects/securedrop_logo.png)

During this process we were brought closer with the [Project](https://securedrop.org), getting to know the developers and designers behind it that help create a secure system for whistleblowers. The work we conducted with SecureDrop was part of the OTF Usability Lab, as have been previous ones before.

## Style Guide

We have attended video meetings on Jitsi with the members of SecureDrop, discussing on the specifics of the portfolio, features required and the best way to implement them. Some of these features are as following.

1. Code Snippets for every component in the Components section are expandable via a toggle, separated from the Bootstrap framework and easily reusable and deployable when needed; these snippets gracefully fallback to automatically show every snippet on the page when JavaScript is turned off.
2. An Icons section, made with PNG icons in order to be viewable on Tor High Security Settings mode.
3. Extra fallbacks of the page when JavaScript is disabled with a few components hidden (that only work with JavaScript enabled).

The style guide contains all the necessary elements and assets that make up the SecureDrop brand, categorized in different sections, such as the logo, colors, typography, icons; furthermore components that can be used when designing systems related to SecureDrop and a standalone section about the language used when writing documents/articles/reports on the SecureDrop project.

Considering the fact that we work with projects related to privacy and security, the style guide also adapts to these rules. The website itself works without problems in the Tor Browser high security settings mode (with JavaScript disabled), meaning the user experience will be the same no matter the browser and its settings.

![Style Guide website](/images/projects/securedrop_image_alerts.png)

The repo has been transferred to the Freedom of Press GitHub [organization](https://github.com/freedomofpress/securedrop/).
However, we keep a static archive for the time being where you can preview the live site of the [style guide](https://uracreative.github.io/securedrop-styleguide/) and the portfolio [project](../../../projects/securedrop) on our website.

We would like to thank [OpenTechFund](https://opentech.fund) for their support on providing resources for privacy and security related open source projects to thrive and receive help where they need the most.
