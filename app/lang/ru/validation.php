<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => ":attribute должен быть принят.",
	"active_url"           => ":attribute вы зашли не с того url",
	"after"                => ":attribute должен быть после даты :date.",
	"alpha"                => ":attribute может содержать только буквы.",
	"alpha_dash"           => ":attribute может содержать только буквы, цифры и дефис.",
	"alpha_num"            => ":attribute может содержать только латинские буквы и цифры.",
	"array"                => ":attribute должен быть массивом.",
	"before"               => ":attribute должен быть до даты :date.",
	"between"              => array(
		"numeric" => ":attribute может быть между :min и :max.",
		"file"    => ":attribute размер может быть от :min до :max килобайт.",
		"string"  => "Длина поля :attribute, может быть мужду :min и :max символов.",
		"array"   => ":attribute может быть между :min и :max ячейками.",
	),
	"confirmed"            => ":attribute подтверждение не совпадает.",
	"date"                 => ":attribute не правильная дата.",
	"date_format"          => ":attribute не правильный формат даты :format.",
	"different"            => ":attribute и :other должны быть разными.",
	"digits"               => "У :attribute должны быть разными :digits цифры.",
	"digits_between"       => "Значение :attribute должны быть от :min и до :max.",
	"email"                => "У :attribute не правльный адрес email почты.",
	"exists"               => "Не правильное значение у выбранного элемента :attribute",
	"image"                => "The :attribute must be an image.",
	"in"                   => "The selected :attribute is invalid.",
	"integer"              => "The :attribute must be an integer.",
	"ip"                   => "The :attribute must be a valid IP address.",
	"max"                  => array(
		"numeric" => "The :attribute may not be greater than :max.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		"string"  => "The :attribute may not be greater than :max characters.",
		"array"   => "The :attribute may not have more than :max items.",
	),
	"mimes"                => "The :attribute must be a file of type: :values.",
	"min"                  => array(
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "The :attribute must be at least :min characters.",
		"array"   => "The :attribute must have at least :min items.",
	),
	"not_in"               => "The selected :attribute is invalid.",
	"numeric"              => "The :attribute must be a number.",
	"regex"                => "The :attribute format is invalid.",
	"required"             => "Поле :attribute должно быть обязательным.",
	"required_if"          => "The :attribute field is required when :other is :value.",
	"required_with"        => "The :attribute field is required when :values is present.",
	"required_with_all"    => "The :attribute field is required when :values is present.",
	"required_without"     => "The :attribute field is required when :values is not present.",
	"required_without_all" => "The :attribute field is required when none of :values are present.",
	"same"                 => "The :attribute and :other must match.",
	"size"                 => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	),
	"unique"               => "The :attribute has already been taken.",
	"url"                  => "The :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
