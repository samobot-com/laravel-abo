# Credits

This package is based on [snoblucha/ABO](https://github.com/snoblucha/ABO/).


# Usage

## Installation using composer

```bash
composer require samobot-com/laravel-abo
```

## Laravel

Package is automatically registered into your service provider so just use a facade in your class.

```php
use SamobotCom\LaravelAbo\Facade\Abo;
```

After that all the power of snoblucha abo class is at your disposal using one simple call:

```php
$abo = Abo::abo();
```

# Example: ABO generator for PHP

This is a gently modified example originally by snoblucha.

```php
	$abo = new Abo::abo();
	$abo->setComittentNumer(222780978);
	$abo->setOrganization("Ceska nar.zdrav.poj.");
	$abo->setDate('271198');
	$abo->setSecurityKey('123456', '654321');
	$account = $abo->addAccountFile(Abo::INKASO);
	$account->setBank('0300'); // ktera banka bude zpracovavat, ta nase
	$account->setBankDepartment('82');
	$group = $account->addGroup();
	$group->setAccount(122780922);
	$group->setDate('271198');
	$group->addItem("174-1999738514/0300", 2000.5, 2220009813)
		->setConstSym('8')
		->setSpecSym('93653')
		->setMessage('první část');

	$group->addItem("5152046/0300", 2000, 2220000598)
		->setConstSym('8')
		->setSpecSym('93654');

	$group->addItem("192359658/0300", 2000, 2220000004)
		->setConstSym('8')		
		->setSpecSym('93655');
		
	$group->addItem("174-0346006514/0300", 2000, 2220497222)
		->setConstSym('8')
		->setSpecSym('93656')
		->setMessage('první část');
		
	$group->addItem("492732514/0300", 2000, 2220000811)
		->setConstSym('8')
		->setSpecSym('93657');

	echo '<pre>'.$abo->generate().'</pre>';
```