
**Please note that this repository is no longer being maintained.**<br>
Due to [a disagreement](https://github.com/wintercms/winter/issues/5) with the founders of October CMS, I will no longer be providing updates for the October CMS version of this plugin. I will keep the repository available for people to use, but will only be updating the [Winter CMS version](https://github.com/bennothommo/wn-url-normaliser-plugin) of this plugin.

---
<br>

# URL Normaliser Plugin

Normalise URLs for your October CMS website and ensure that search engines only index your canonical paths to prevent duplicate content. This plugin works by either providing a canonical URL `link` tag in your page (with help from the [Meta Plugin](https://github.com/bennothommo/october-plugin-meta)) or through using HTTP 301 redirects on your public pages.

## Features

- Enforce your domain to begin, or not to begin, with `www.`
- Enforce your pages to end, or to not end, with a trailing slash.
- Ignore certain pages or sections of your site.
- Apply normalisation through a `rel=canonical` link tag or through HTTP redirects.
- Ensure your Static Pages navigation follows the normalisation standard.
- Update your normalisation settings directly through October CMS.

## Requirements

This plugin must be installed with the [Meta Plugin](https://github.com/bennothommo/october-plugin-meta) to provide the canonical URL link tag functionality.
