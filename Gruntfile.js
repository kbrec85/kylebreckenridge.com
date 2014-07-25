module.exports = function( grunt ) {
	'use strict';

	// Load all grunt tasks
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// Project configuration
	grunt.initConfig( {
		pkg:    grunt.file.readJSON( 'package.json' ),
		concat: {
			options: {
				stripBanners: true,
				banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
					' * <%= pkg.homepage %>\n' +
					' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
					' * Licensed GPLv2+' +
					' */\n'
			},
			kylebreckenridge_com: {
				src: [
					'assets/js/src/kylebreckenridge_com.js',
					'assets/js/vendor/prism.js'
				],
				dest: 'assets/js/kylebreckenridge_com.js'
			}
		},
		uglify: {
			all: {
				files: {
					'assets/js/kylebreckenridge_com.min.js': ['assets/js/kylebreckenridge_com.js']
				},
				options: {
					banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
						' * <%= pkg.homepage %>\n' +
						' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
						' * Licensed GPLv2+' +
						' */\n',
					mangle: {
						except: ['jQuery']
					}
				}
			}
		},
		test:   {
			files: ['assets/js/test/**/*.js']
		},

		compass:   {
			dist: {                   // Target
		    	options: {              // Target options
		    		sassDir: 'assets/css/sass/',
		    		cssDir: 'assets/css/',
		    		environment: 'production',
		    		outputStyle: 'nested'
		    	}
			}
		},

		cssmin: {
			options: {
				banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
					' * <%= pkg.homepage %>\n' +
					' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
					' * Licensed GPLv2+' +
					' */\n'
			},
			minify: {
				expand: true,

				cwd: 'assets/css/',
				src: ['kylebreckenridge_com.css'],

				dest: 'assets/css/',
				ext: '.min.css'
			}
		},
		watch:  {

			compass: {
				files: ['assets/css/sass/*.scss', 'assets/css/sass/partials/*.scss'],
				tasks: ['compass', 'cssmin'],
				options: {
					debounceDelay: 500
				}
			},

			scripts: {
				files: ['assets/js/src/*.js', 'assets/js/vendor/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					debounceDelay: 500
				}
			},
			options: {
        		livereload: true
      		}
		}
	} );

	// Default task.

	grunt.registerTask( 'default', ['concat', 'uglify', 'compass', 'cssmin'] );


	grunt.util.linefeed = '\n';
};
