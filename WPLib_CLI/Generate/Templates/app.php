<?php
/**
 * @var \WPLib_CLI\Generate\Objects\App $app
 */

echo <<< TEXT
<?php
/**
 * Class {$app->singular}
 */
class {$app->singular} extends WPLib_App_Base {

	static function on_load() {

		{$app->get_module_list()->implode( function( $module ) {

			return "self::register_module( '{$module}' );\n\t\t";

		})}
		[@include(hook-comments)]
	}

}
{$app->singular}::on_load();
TEXT;
