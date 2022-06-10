[Farsi](./README.fa-IR.md) | English

# Codeigniter Shield Anti Phishing

> **Warning**
> The package is being developed. Please do not use it now.

This package helps you to add anti-phishing feature to the official `Shield` package. This package requires the installation of a shield on a Codeigniter project.
With this package you can allow the user to carefully check the site address once and register a personal signature code if approved. From now on, by entering the site, if user see the registered signature code, user can login the system without any worries.

### The first method: by composer

Installation is best done via Composer. Assuming Composer is installed globally, you may use the following command:

``composer require datamweb/shield-anti-phishing:dev-main``

### The second method: manually

First, download the latest version of the package. Then extract the downloaded zip file in the ``app/ThirdParty`` path. Now go to ``app/Config`` . Add the following to the ``Autoload.php`` file and save the file.

```
public $psr4 = [
        //Add this line
        'Datamweb\AntiPhishing' => APPPATH . 'ThirdParty\shield-anti-phishing\src',
 ];
 ```
