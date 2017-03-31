# Craft CMS Project Boilerplate

This is the project scaffolding MilesHerndon uses for all of our Craft CMS projects.

##### Table of Contents

1. [Dependencies](#Dependencies)
1. [Installation](#Installation)
1. [Workflow](#workflow)
1. [Under the Hood](#under-the-hood)
1. [Key Collaborators](#key Collaborators)
1. [License](#license)

*****


## Dependencies
* [Node.js](https://nodejs.org/en/)
* [Craft CMS](https://craftcms.com)

_[Back to top](#table-of-contents)_

*****

## Installation

Download or clone this project scaffold into your working directory, and then run:

``` sh
$ npm install
```

_[Back to top](#table-of-contents)_

*****

## Workflow

Use Node.js scripts to run build tools.

* `$ npm run watch` - Recompiles files whenever they change.
* `$ npm run build` - Creates production ready code.

After running `` $ npm run watch `` or `` $ npm run build ``, your deploy-ready code will be taken from the ``./src/`` directory and placed within the ``./public/build/`` directory of your project. However, the webpack generated templates will be placed within the ``./public/static/templates/_webpack.templates`` directory of your project so Craft CMS has access to them.

_[Back to top](#table-of-contents)_

*****

## Under the Hood
This project scaffolding is pretty opinionated and makes use of the following tools, open source projects, and architecture methodologies:

* [Webpack](https://webpack.js.org/) - A bundler for javascript and friends.
* [Sass](http://sass-lang.com/) - CSS extension language
* [ECMAScript 2015 modules](https://developer.mozilla.org/en-US/docs/Web/JavaScript/New_in_JavaScript/ECMAScript_2015_support_in_Mozilla) - JavaScript's built-in modules.
* [SMACSS](https://smacss.com/) - Methodology for organizing scalable and modular CSS architectures
* [BEM](http://getbem.com/) -  Block Element Modifier is a methodology, that helps you to achieve reusable components and code sharing in the front-end
* [Augmented ITCSS](https://github.com/m-soyka/Augment-ITCSS) - This is an augmented css folder structure that originates from the ITCSS architecture and uses SMACSS and BEM.
* [Modernizr](https://modernizr.com/) - Modernizr tells you what HTML, CSS and JavaScript features the user’s browser has to offer.
* [svg4everybody](https://github.com/jonathantneal/svg4everybody) - Open source external SVG polyfill for useing external SVG spritemaps
* [PictureFill](https://github.com/scottjehl/picturefill) - A responsive image polyfill for <picture>, srcset, sizes, and more

_[Back to top](#table-of-contents)_

*****

## Key Collaborators
Thanks to our developers who made this Craft CMS project scaffolding possible.
* [Mark Reckard](https://github.com/marker004)
* [Matthew Soyka](https://github.com/m-soyka)

_[Back to top](#table-of-contents)_

*****

## License

###### The MIT License

Copyright (c) 2017 MilesHerndon

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

_[Back to top](#table-of-contents)_
