# Experimenting with prismic.io using Laravel
I decided to take a look at what prismic.io is and what it can provide me.  


It wasn't that difficult to figure out how the API worked but a stupid mistake made me debug for two hours  
straight to finally be able to populate my welcome page with data from the prismic.io API.  
 
I used the documentation from the "Getting started using the prismic.io PHP starter kit" guide but what I didn't notice  
was that the API URL underneath "Configure your project" was using version 1 instead of 2.

Because of this methods such as `Document#getStructuredText()` didn't return the proper data or even any at all.  
When I changed the URL to use version 1 of the API it worked and I could finally go make my coffee.

It's weird that that happened because the [prismic/php-sdk](https://packagist.org/packages/prismic/php-sdk) package on packagist.org also uses the API URL version 2.

## Welcome Page - Singleton Type
```json
{
  "Main" : {
    "title" : {
      "type" : "StructuredText",
      "config" : {
        "multi" : "h1",
        "label" : "title",
        "placeholder" : "Welcome"
      }
    },
    "bio" : {
      "type" : "StructuredText",
      "config" : {
        "multi" : "paragraph, preformatted, heading1, heading2, heading3, heading4, heading5, heading6, strong, em, hyperlink, image, embed, list-item, o-list-item, o-list-item",
        "allowTargetBlank" : true,
        "label" : "bio",
        "placeholder" : "It's an empty bio!"
      }
    },
    "picture" : {
      "type" : "Image",
      "config" : {
        "constraint" : {
          "width" : 128,
          "height" : 128
        },
        "thumbnails" : [ ],
        "label" : "picture"
      }
    },
    "twitter" : {
      "type" : "Link",
      "config" : {
        "label" : "twitter",
        "allowTargetBlank" : true
      }
    },
    "linkedin" : {
      "type" : "Link",
      "config" : {
        "label" : "linkedin",
        "allowTargetBlank" : true
      }
    }
  }
}
```