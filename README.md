# Elementor Widget File Paths

**Contributors:** Your Name  
**Tags:** elementor, widgets, file paths, debugging, development  
**Requires at least:** WordPress 5.0  
**Tested up to:** WordPress 6.3  
**Requires PHP:** 7.0  
**Stable tag:** 1.0  
**License:** Free and Open to Use  
**License URI:** https://opensource.org/licenses/MIT  

Displays the file paths of all Elementor widgets, including those from Elementor core and third-party plugins.

## Description

This plugin retrieves and displays the file paths of all Elementor widgets registered on your WordPress site. It includes widgets from Elementor core, as well as those added by third-party plugins. This is particularly useful for developers who need to debug or inspect the source of Elementor widgets.

## Features

- Retrieves file paths for all registered Elementor widgets.
- Works with Elementor core widgets and third-party plugin widgets.
- Simple and lightweight.
- Outputs results directly on the front end for easy viewing.

## Installation

1. Download the plugin ZIP file or clone the repository into your `wp-content/plugins` directory.
2. Go to **Plugins > Installed Plugins** in your WordPress admin dashboard.
3. Activate the **Elementor Widget File Paths** plugin.

## Usage

1. Once the plugin is activated, visit the front end of your WordPress site.
2. The file paths of all Elementor widgets will be displayed in a formatted container at the top of the page.

## Example output:
Array
(
[heading] => /path/to/elementor/core/widgets/heading.php
[image] => /path/to/elementor/core/widgets/image.php
[third-party-widget] => /path/to/third-party-plugin/widgets/third-party-widget.php
)



## Frequently Asked Questions

### Can I use this plugin on a live site?

This plugin is intended for debugging and development purposes. It is not recommended to use it on a live production site.

### How can I customize the output?

You can modify the plugin code to log the results to a file or display them in the WordPress admin area instead of the front end.

### Does this plugin work with all Elementor versions?

This plugin is compatible with Elementor 2.0 and above. If you encounter any issues, please ensure you are using the latest version of Elementor.

## Changelog

### 1.0
- Initial release.

## License

This plugin is **free and open to use**. You can use, modify, and distribute it as you see fit. No attribution is required, but it is appreciated.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request on the [GitHub repository](#).
