# Wordpress (Svenska)
WordPress, Git-ified. Med [Composer](https://getcomposer.org/). På Svenska!   
Synkad mot https://sv.wordpress.org/releases/

## Installera

### Med Composer

```
composer require humanit-se/wordpress-sv
```

### Med Git

```
git clone git@github.com:humanit-se/wordpress-sv.git
```

### Med Composer/Installer

Eftersom vi lagt in stöd för [composer/installers](https://github.com/composer/installers) samt [composer-installers-extender](https://github.com/oomphinc/composer-installers-extender) så kan man via Composer installera Wordpress direkt till en specifik mapp.

**composer.json exempel:**
```
{
    "require": {
        "humanit-se/wordpress-sv": "*"
    },
    "extra": {
        "installer-types": ["wordpress-core"],
        "installer-paths": {
            "wordpress": ["humanit-se/wordpress-sv"]
        }
    }
}

```

## Tack
Ha det najs! ;-)   
/Human-IT crew
