## footer/

### Overview

The standard _footer.php_ file (included using the WordPress `get_footer()` function) in Carrington is set up to call the `cfct_footer()` function, which will choose the appropriate footer file from this directory - based on the context of the given page. This can be useful if you want to have pages to have a custom footer, or perhaps a certain category to have a custom footer.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the context doesn't match the templates that are available.


### Supported Override Filenames

- footer-default.php (or default.php)
- archive.php
- author.php
- author-{username}.php
- category.php
- cat-{slug}.php
- home.php
- page.php
- role-{rolename}.php
- search.php
- single.php
- tag.php
- tag-{slug}.php


### File Descriptions

Standard context file naming will work for files in this directory. Here are some specific examples.

- *footer-default.php* - Used when there are no other templates that match for a given page/post.
- *author-{username}.php* - Used when the post/page is authored by a specific user. For example, a template with a file name of _author-jsmith.php_ would be used for a post/page by user _jsmith_. Any WordPres username can take the place of {username} in the file name.
- *cat-{slug}.php* - Used when a post is in a given category. The category is matched by the "slug" - for example a post in category "General" (with a category slug of "general") could use a template of _cat-general.php_.
- *home.php* - Used for the home page.
- *page.php* - Used for pages that do not match any other contextual templates.

