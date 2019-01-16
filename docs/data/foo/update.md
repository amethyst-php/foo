## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\FooManager;

$manager = new FooManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "Ayana O'Reilly",
    "description" => "Quam dolorem eum minus id laboriosam quisquam. Qui pariatur sed aut totam. Voluptate ratione aut repellendus ab optio. In aut impedit ducimus molestiae dolores cum distinctio."
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)