# phx-baselines
PHX framework baseline components.

## Install from Repository
### Add Repository to composer.json
```bash
"repositories": [
        {
            "type": "vcs",
            "url": "https:\/\/github.com\/andreapeverelli\/phx-baselines.git"
        },
    ]
```
### Install
```bash
composer require andreapeverelli/phx-baselines
```

### Usefull commands
#### Do all testings/buildings
```bash
composer prepare
```
#### Run tests + Get test coverage
```bash
composer test
```
#### Code analysis
```bash
composer analyse
```
#### Linting analysis
```bash
composer lint
```
#### Linting fix
```bash
composer fix
```

