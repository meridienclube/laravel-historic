# Package Historic Laravel

## Config

By installing this package you will have the file "config/cw_historic.php" and in it you can configure if it will be active the history recording and also the events that will be listened.

## Make

You can create the history class from the terminal with the following artisan command:
```php
php artisan make:historic UserUpdatedHistoric
```
This command will create in the "App/Historics" directory the file with the desired class.

## Event

In the event, in the constructor method you need to fill in two variables, $this->obj & $this->historic, where $this->obj must contain the instance of the main object and $this->historic must contain the instance of the created historic class.
```php
public function __construct(User $user)
{
    $this->obj = $user;
    $this->historic = new UserUpdatedHistoric($user);
}
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
