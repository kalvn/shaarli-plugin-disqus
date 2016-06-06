# Shaarli Disqus plugin

This is a plugin to add Disqus the famous comment system to your Shaarli.

Comments will appear only on permalinks (when URL looks like `http://monsite/?6b50oQ`).

## Installation
### Via Git
Run the following command from the `plugins` folder of your Shaarli installation:

```shell
git clone https://github.com/kalvn/shaarli-plugin-disqus disqus
```

It'll create the `disqus` folder.

### Manually
Create the folder `plugins/disqus` in your Shaarli installation.
Download the ZIP file of this repository and copy all files in the newly created folder.


## Activation
### Without the plugin administration page
Edit the `data/config.php` file and add `disqus` in the array `$GLOBALS['config']['ENABLED_PLUGINS']`. It'll look like this (potentially with other plugins):

```php
$GLOBALS['config']['ENABLED_PLUGINS'] = array (
  'disqus'
);
```

### With the plugin administration page
If your Shaarli installation is recent enough to have the plugin administration page, you just need to go to the plugin administration page, check `disqus` and save.


## Configure

You can configure either via the plugin administration if you have it or via the `data/config.php` file in which you need to add lines with the following format (for each parameter you want to set):

```php
$GLOBALS['plugins']['<PARAMETER_NAME>'] = PARAMETER_VALUE;
```

`DISQUS_SHORTNAME` [required] The shortname of your Disqus account.


## Update
I you installed it through Git, run the following command from within this plugin's folder `plugins/disqus`:

```shell
git pull
```

Otherwise, download the ZIP file again from Github and override existing files with new ones.