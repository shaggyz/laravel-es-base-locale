<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"        => ":attribute debe ser aceptado.",
	"active_url"      => ":attribute debe ser una URL válida.",
	"after"           => ":attribute debe ser una fecha después de :date.",
	"alpha"           => ":attribute solo debe contener letras.",
	"alpha_dash"      => ":attribute solo debe contener letras, números y guiónes.",
	"alpha_num"       => ":attribute solo debe contener letras y números.",
	"array"                => ":attribute debe ser un array.",	
	"before"          => ":attribute debe ser una fecha anterior a :date.",
	"between"         => array(
		"numeric" => ":attribute debe ser entre :min y :max.",
		"file"    => ":attribute debe ser entre :min y :max kilobytes.",
		"string"  => ":attribute debe contener entre :min y :max caracteres.",
		"array"   => ":attribute debe contener entre :min y :max elementos.",		
	),
	"confirmed"       => ":attribute no es igual.",
	"date"            => ":attribute no es una fecha válida.",	
	"date_format"     => ":attribute no cumple con el formato :format.",
	"count"           => ":attribute debe contener exactamente :count elementos seleccionados.",
	"countbetween"    => ":attribute debe contener entre :min y :max elementos seleccionados.",
	"countmax"        => ":attribute debe contener menos de :max elementos seleccionados.",
	"countmin"        => ":attribute debe contener al menos :min elementos seleccionados.",
	"different"       => ":attribute y :other deben ser distintos.",
	"digits"          => ":attribute debe ser :digits dígitos.",	
	"digits_between"  => ":attribute debe estar entre :min y :max dígitos.",	
	"email"           => ":attribute tiene un formato inválido.",
	"exists"          => "El elemento seleccionado :attribute es inválido.",
	"image"           => ":attribute debe ser de tipo imágen.",
	"in"              => ":attribute es inválido.",
	"integer"         => ":attribute debe ser entero.",
	"ip"              => ":attribute debe ser una dirección IP válida.",
	"match"           => ":attribute contiene un formato inválido.",
	"max"             => array(
		"numeric"  => ":attribute debe ser menor a :max.",
		"file"     => ":attribute debe ser menor a :max kilobytes.",
		"string"   => ":attribute debe ser menor a :max caracteres.",
	),
	"mimes"           => ":attribute debe ser archivo tipo: :values.",
	"min"             => array(
		"numeric"  => ":attribute debe ser mínimo :min.",
		"file"     => ":attribute debe ser mínimo de :min kilobytes.",
		"string"   => ":attribute debe contener mínimo :min caracteres.",
	),
	"not_in"          => ":attribute es invalido.",
	"numeric"         => ":attribute debe ser numérico.",
	"regex"           => "el formato de :attribute es invalido.",
	"required"        => ":attribute es requerido.",
	"required_if"      => ":attribute es requerido cuando :other es :value.",
	"required_with"    => ":attribute es requerido cuando :values está presente.",
	"required_with_all"    => ":attribute es requerido cuando :values está presente.",	
	"required_without" => ":attribute es requerido cuando :values no está presente.",		
	"required_without_all" => ":attribute es requerido cuando ninguno de estos valores :values está presente.",	
	"same"           => ":attribute y :other debe ser iguales.",
	"size"           => array(
		"numeric" => ":attribute debe ser :size.",
		"file"    => ":attribute debe ser :size kilobyte.",
		"string"  => ":attribute debe ser de :size caracteres.",
	),
	"unique"         => ":attribute se encuentra ocupado.",
	"url"            => ":attribute el formato es inválido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);