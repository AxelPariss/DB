# 💎 DB

This PHP class allows you to simplify SQL requests (with PDO)

You have a complete [example here](example/example.php)

## 📕 Installation

You just need to inlcude the PHP class named DB.php

## 📖 Documentation
**Initialization**
```php
require 'src/DB.php';
$DB = new DB("DATABASE_HOST", "DATABASE_NAME", "DATABASE_USER", "DATABASE_PASSWORD");
```
**Set FetchMode**

```php
// @param int $fetchMode fetchMode
$DB->setFetchMode($fetchMode);

// Exemple
$DB->setFetchMode(PDO::FETCH_ASSOC);
```
See the list of all [available modes](http://www.php.net/manual/en/pdostatement.fetch.php)

**Request (waiting for data)**
```php
// @param $request string SQL query
// @param array|null $values Optional values
// @param bool $all Query with several rows or not (Default true)
// @return array|mixed Return
$values = $DB->fetch($request, $values = null, $all = true);

// Example 1
$values = $DB->fetch("SELECT username, firstname, lastname, email FROM users"); // Return several rows

// Example 2
$age = 21; // We want only adults
$values = $DB->fetch("SELECT username, firstname, lastname, email FROM users WHERE age >= ?", [$age]); // Return several rows of adults

// Example 3
$firstname = "John";
$lastname = "Doe";
$age = 21;
$values = $DB->fetch("SELECT username, firstname, lastname, email FROM users WHERE age >= ?", [$firstname, $lastname, $age], false); // Return ONLY one row with filters (firstname, lastname et age)
```
**Request (excuting)**
```php
// @param string $request SQL query
// @param array|null $values Optional values
// @return bool
$values = $DB->execute($request, $values = array());


// Exemple 1       
$request = $DB->execute("DELETE FROM users"); // Delete all users

// Exemple 2
$firstname = "John";
$id = 42;
$request = $DB->execute("UPDATE users SET firstname = ? WHERE id = ?", [$firstname, $id]);
```

## ⏳ History

- v 1.1 25/02/2019
- v 1.0 13/06/2017

## 📖 Credits

  - Axel Paris (https://axelparis.fr/github)

## Contributor

 - Zao Soula (https://github.com/zarque)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
