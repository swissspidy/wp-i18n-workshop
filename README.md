# WordPress I18N Workshop

Workshop for introducing people to internationalization (I18N) and localization (L10N) in WordPress projects.

## Resources

* [WordPress Plugin Developer Handbook](https://developer.wordpress.org/plugins/internationalization/)
* [The Importance of the Text Domain in WordPress I18N](https://pascalbirchler.com/text-domain-wordpress-internationalization/)
* [Introduction to I18N and L10N](https://speakerdeck.com/swissspidy/internationalization-introduction-at-wordcamp-bern)
* [WordPress.org Translation Platform](https://translate.wordpress.org)
* [GlotPress](https://github.com/GlotPress/GlotPress-WP)
* [Traduttore GlotPress Plugin](https://github.com/wearerequired/traduttore)
* [I18N-ready Gutenberg Blocks](https://github.com/swissspidy/gutenberg-i18n-block)
* [Loading JavaScript Translations in WordPress 5.0](https://core.trac.wordpress.org/ticket/45103)
* [PHP_CodeSniffer + WordPress Coding Standards](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards)
* [WP-CLI](http://wp-cli.org/)
* [Poedit](https://poedit.net/)
* [Unicode Common Locale Data Repository (CLDR)](http://cldr.unicode.org/)
* [W3C Internationalization Activity](https://www.w3.org/standards/webdesign/i18n)

## WP-CLI Commands

Prerequisites:

* [WP-CLI](http://wp-cli.org/) 2.0 or newer

### Creating a new plugin

In your WordPress site's directory, run the following command:

```
wp scaffold plugin my-plugin --skip-tests --plugin_name="My Plugin"
```

### Adding a new custom post type 

This adds the necessary code to create a new "book" post type to the "my-plugin" plugin:

```
wp scaffold post-type book --plugin=my-plugin
```

### Adding a new custom taxonomy

If you want books to have chapters you can add run the following command:

```
wp scaffold taxonomy chapter --post_types=book --plugin=my-plugin
```

## Example Plugins

The "my-plugin" folder includes the plugin from the WP-CLI example that adds a book post type with the chapter taxonomy to your WordPress site.

The "gutenberg-i18n-block" contains one of the examples from [https://github.com/swissspidy/gutenberg-i18n-block](https://github.com/swissspidy/gutenberg-i18n-block) that adds an internationalized Gutenberg block to your WordPress site.
