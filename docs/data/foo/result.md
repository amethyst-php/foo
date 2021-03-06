## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Amethyst\Managers\FooManager;

$manager = new FooManager();

$result = $manager->create([
    "name" => "Ayana O'Reilly",
    "description" => "Quam dolorem eum minus id laboriosam quisquam. Qui pariatur sed aut totam. Voluptate ratione aut repellendus ab optio. In aut impedit ducimus molestiae dolores cum distinctio."
]);

if ($result->ok()) {

    $resource = $result->getResource();

} else {

    // Loop through all errors
    $result->getErrors()->map(function($error) {
        return $error->toArray();
    }))

    // Retrieve an array of all errors
    $result->getSimpleErrors();

    /* The result is something like this:

        [0] => Array
            (
                [code] => FIELD_NOT_DEFINED
                [label] => field
                [message] => The field is required
                [value] =>
            )
    */

}
```

---
[Back](index.md)