'use strict';

/**
 * @ngdoc overview
 * @name zipongoApp
 * @description
 * # zipongoApp
 *
 * Main module of the application.
 */

var zipongoApp = angular
	.module('zipongoApp', [
		'mainCtrl', 
		'userService'
		]
	);

var uploadTab = angular
	.module('uploadTab', [
		'uploadCtrl', 
		'uploadService'
	]);

var newGameTab = angular
	.module('newGameTab', [
		'addCtrl', 
		'addService'
	]);
