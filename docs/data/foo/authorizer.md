## Railken\Amethyst\Authorizers\FooAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/FooAuthorizer`
```php
namespace App\Authorizers;

use Railken\Amethyst\Authorizers\FooAuthorizer as Authorizer;

class FooAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.foo` with the new class
```php
return [
    'data' => [
        'foo' => [
            'authorizer' => App\Authorizers\FooAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)