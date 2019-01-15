'use strict';
const webpack = require('webpack');
const path = require('path');
const md5 = require('md5');
const ManifestPlugin = require('webpack-manifest-plugin');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

const BUILD_DIR = path.resolve(__dirname, 'public');
const APP_DIR = path.resolve(__dirname, 'resources', 'assets');

const build_hash = md5(Math.random());
const build_hash_short = build_hash.substring(0, 8);
const build_date = Math.round(new Date().getTime() / 1000);

const PRODUCTION = process.argv.indexOf('-p') !== -1;

let config = {

	entry: path.resolve(APP_DIR, 'js', 'app.js'),
	output: {
		path: BUILD_DIR,
		filename: './assets/js/app.js'
	},

	module: {
		loaders: [
			{
				test: /\.js?/,
				include: APP_DIR,
				exclude: /node_modules/,
				loader: ['babel-loader']
			}
		]
	},

	plugins: []

};

if (PRODUCTION) {
	console.log('Pushing production plugins');
	config.plugins.push(
		new UglifyJSPlugin({
			uglifyOptions: {
				compress: {
					warnings: false
				},
				output: {
					comments: false
				}
			}
		})
	);
}

module.exports = config;