## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\FooManager;

$manager = new FooManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Ayana O'Reilly",
    "description" => "Quam dolorem eum minus id laboriosam quisquam. Qui pariatur sed aut totam. Voluptate ratione aut repellendus ab optio. In aut impedit ducimus molestiae dolores cum distinctio."
];

$result = $manager->create($params);
```

Check the result of the operation

```php
if ($result->ok()) {
    // All ok
} else {
    // Something goes wrong
}
```

Retrieve the [entity](model.md) from the [result](result.md)

```php
$entity = $result->getResource();
```

Throw an exception immediately if the operation fails

```php
use Railken\Lem\Exceptions\Exception;

$params = [
    "name" => "Ayana O'Reilly",
    "description" => "Quam dolorem eum minus id laboriosam quisquam. Qui pariatur sed aut totam. Voluptate ratione aut repellendus ab optio. In aut impedit ducimus molestiae dolores cum distinctio."
];
   
try {
    $result = $manager->createOrFail($params);
} catch (Exception $e) {
    // ...
}
```

### Links
* [Attributes](attributes.md)
* [Errors](errors.md)
* [Handle the result](result.md)

---
[Back](index.md)