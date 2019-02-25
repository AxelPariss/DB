# 💎 DB

This PHP class allows you to simplify SQL requests (with PDO).

## 📕 Installation

You just have to inlcude the PHP class named DB_class.php (Its recommanded to include it from a folders untitled "src" or "classes" to be organized)

## 📖 Documentation
**Initialization**
```php
require 'src/DB_class.php';
$DB = new DB("DATABASE_HOST", "DATABASE_NAME", "DATABASE_USER", "DATABASE_PASSWORD");
```
**Set FetchMode**
```php
// @param int $fetchMode fetchMode
$DB->setFetchMode($fetchMode);

// Exemple
$DB->setFetchMode(PDO::FETCH_ASSOC);
```
**Request (waiting for data)**
```php
// @param $request string SQL query
// @param array|null $values Optional values
// @param bool $all Query with several rows or not (Default true)
// @return array|mixed Return
$values = $DB->fetch($request, $values = null, $all = true);

// Exemple 1
$values = $DB->fetch("SELECT username, firstname, lastname, email FROM users"); // Return several rows

// Exemple 2
$age = 21; // We want only adults
$values = $DB->fetch("SELECT username, firstname, lastname, email FROM users WHERE age >= ?", [$age]); // Return several rows of adults

// Exemple 3
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
$request = $DB->execute("DELETE FROM users"); //!\\ Delete all users

// Exemple 2
$firstname = "John";
$id = 42;
$request = $DB->execute("UPDATE users SET firstname = ? WHERE id = ?", [$firstname, $id]);
```

## 📝 Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request

## ⏳ History

v 1.0 13/06/2017

## 📖 Credits

  - Axel Paris (https://axelparis.fr/github)

## Contributor

 - Zao Soula (https://github.com/zarque)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
