SilverStripe Foundation Interchange
===================================

Experimental support for dynamically loading responsive content using `.ss` templates with Foundation's Interchange

Installing
===================================

`composer require rywa/silverstripe-foundation-interchange dev-master`

Using
===================================

Adds a new template placeholder `$InterchangePartial()`

Use within your `data-interchange` element to reference your template partials. Passing in the `.ss` you would like to use.

```html
<div data-interchange="[$InterchangePartial('Includes/Default'), (small)],
                       [$InterchangePartial('Includes/Medium'), (medium)],
                       [$InterchangePartial('Includes/Large'), (large)]">
</div>
```

In the above example we're using `Default.ss`, `Medium.ss`, and `Large.ss` files that within our `$ThemeDir/templates/Includes` or `mysite/templates/Includes` folder.

See [Foundation Interchange](http://foundation.zurb.com/docs/components/interchange.html) for more on how Interchange works.

Limitations
===================================

The partials are rendered with the controller before any actions are called. Please keep this in mind. You will have access to all the standard template placeholders in your partials, but nothing that is set within any of your controller actions.

Requirements
===================================

[SilverStripe Foundation Theme](https://github.com/ryanwachtl/silverstripe-foundation-theme)

About Foundation
===================================

Foundation is the most advanced responsive front-end framework in the world. With Foundation you can quickly prototype and build sites or apps that work on any kind of device, with tons of included layout constructs (like a full responsive grid), elements and best practices.

- [Homepage](http://foundation.zurb.com)
- [Documentation](http://foundation.zurb.com/docs)
- [Download](http://foundation.zurb.com/download.php)
