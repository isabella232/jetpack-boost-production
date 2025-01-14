# my-jetpack

WP Admin page with information and configuration shared among all Jetpack stand-alone plugins

## Usage

Every Jetpack plugin must include the My Jetpack package.

Require this package and initialize it:

```PHP
add_action( 'init', function() {
	Automattic\Jetpack\My_Jetpack\Initializer::init();
} );
```

### Conditionally loading licensing UI behind a feature flag

To access the licensing UI at `/wp-admin/admin.php?page=my-jetpack#/add-license` do one of the following:

- Set the `JETPACK_ENABLE_MY_JETPACK_LICENSE` constant to true: `define( 'JETPACK_ENABLE_MY_JETPACK_LICENSE', false );`
- Add a filter on `jetpack_my_jetpack_should_enable_add_license_screen` and return true: `add_filter( 'jetpack_my_jetpack_should_enable_add_license_screen', '__return_true' );`

That's all!

## Security

Need to report a security vulnerability? Go to [https://automattic.com/security/](https://automattic.com/security/) or directly to our security bug bounty site [https://hackerone.com/automattic](https://hackerone.com/automattic).

## License

my-jetpack is licensed under [GNU General Public License v2 (or later)](./LICENSE.txt)

