GlobalXtreme Validation
======

[![Version](http://poser.pugx.org/globalxtreme/validation/version)](https://packagist.org/packages/globalxtreme/validation)
[![Total Downloads](http://poser.pugx.org/globalxtreme/validation/downloads)](https://packagist.org/packages/globalxtreme/validation)
[![License](http://poser.pugx.org/globalxtreme/validation/license)](https://packagist.org/packages/globalxtreme/validation)

### Install with composer

To install with [Composer](https://getcomposer.org/), simply require the
latest version of this package.

```bash
composer require globalxtreme/validation
```

## Using
- Publish the stubs for custom your request.
    ```bash
    php artisan vendor:publish --provider="GlobalXtreme\Validation\ValidationServiceProvider"
    ```
- You can generate laravel request class with. Ex: CustomRequest
    ```bash
    php artisan make:request CustomRequest
    ```
- Using validation with controller.
    ```php
    use App\Http\Controllers\Controller;
    use App\Http\Requests\CustomRequest;
    use GlobalXtreme\Validation\Validator;
    
    class CustomController extends Controller
    {
        public function testing(CustomRequest $request) 
        {
            // You can custom validator using gx response
            Validator::make($request->all(), ['foo' => 'required']);
        }
    }
    ```