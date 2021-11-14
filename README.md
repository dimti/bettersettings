## Case for use that

You love place of data in OctoberCMS settings model.

And you have default values from your site layout.

Use this package for resolve default values from setting model fields

## How to use

First installing this plugin

`composer require dimti/bettersettings-plugin`

Second - redefine behaviour in you settings model

Change
```php
Settings extends model {
...

    public $implement = ['System.Behaviors.SettingsModel'];

...
}
```

To:
```php
Settings extends model {
...

    public $implement = [\Dimti\BetterSettings\Behaviours\BetterSettings::class];

...
}
```

Or to:
```php
...

use Dimti\BetterSettings\Behaviours\BetterSettings;

...

Settings extends model {
...

    public $implement = [BetterSettings::class];

...
}
```

And define static variable `$defaults` in your setting model class.

You can also define constants for better readable values and use autocomplete in your IDE

```php
use Dimti\BetterSettings\Behaviours\BetterSettings;

class Settings extends Model
{
    const SEZNAM_CID = 'seznam_cid';

    const PDF_PHONE_ONE = 'pdf_phone_one';

    const PDF_PHONE_TWO = 'pdf_phone_two';

    const PDF_PHONE_THREE = 'pdf_phone_three';

    public static $defaults = [
        self::SEZNAM_CID => '100000000',
        self::PDF_PHONE_ONE => '+420 603 603 603',
        self::PDF_PHONE_TWO => '+420 723 723 723',
    ];

    public $implement = [BetterSettings::class];

    // A unique code
    public $settingsCode = 'vendor_someplugin_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
```
