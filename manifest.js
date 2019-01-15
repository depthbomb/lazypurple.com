const fs = require('fs-extra');
const path = require('path');
const util = require('gulp-util');
const glob = require('glob');
const md5 = require('md5');

const buildDir = path.join(__dirname, 'public');
const assetFile = path.join(__dirname, 'assets.json');

const build_hash = md5(Math.random());
const build_hash_short = build_hash.substring(0, 8);
const build_date = Math.round(new Date().getTime() / 1000);
const pkg = require('./package.json');

util.log('Compiling manifests into assets.json...');

glob(`${buildDir}/**/manifest.json`, (err, files) => {
	if (err) throw new Error(err);

	let assets = {
		build: `${build_hash}:${build_date}`,
		files: {}
	};

	for (let i = 0; i < files.length; i++) {
		const file = files[i];

		/**
		* /assets/foo/bar/manifest.json
		*/
		const manifestFile = file.replace(buildDir.replace(/\\/g, "/"), '');

		/**
		* /assets/foo/bar/
		*/
		const manifestPath = manifestFile.replace('manifest.json', '');

		fs.readFile(file, (err, data) => {
			let manifestData = JSON.parse(data);

			Object.keys(manifestData).forEach((key) => {
				const nKey = `${manifestPath + key}`;
				const nValue = `${manifestPath + manifestData[key]}`;
				assets.files[nKey] = nValue;
			});

			fs.writeFile(assetFile, JSON.stringify(assets), (err) => {
				if (err) throw new Error(err);
			});
		});
	}
});