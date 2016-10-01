module.exports = function ( grunt ) {
	'use strict';

	// Load all grunt tasks
	require( 'matchdep' ).filterDev( 'grunt-*' ).forEach( grunt.loadNpmTasks );

	// Project configuration
	grunt.initConfig( {
		pkg: grunt.file.readJSON( 'package.json' ),

		sass: {
			dist: {
				files: {
					'resources/css/main.css': 'resources/sass/main.scss'
				}
			},
			sourcemap: 'auto'
		},

		cssmin: {
			options: {
				shorthandCompacting: false,
				roundingPrecision: -1
			},
			target: {
				files: {
					'resources/css/main.min.css': [ 'resources/css/main.css' ]
				}
			}
		},

		jshint: {
			options: {
				onecase: false
			},
			all: [ 'resources/js/all/main.js' ]
		},

		concat: {
			dist: {
				src: [
					'resources/js/all/main.js'
				],
				dest: 'resources/js/all.js'
			}
		},

		uglify: {
			all: {
				files: {
					'resources/js/all-min.js': [ 'resources/js/all.js' ]
				},
				options: {
					mangle: {
						except: [ 'jQuery' ]
					}
				}
			}

		},

		watch: {

			scripts: {
				files: [ 'resources/js/all/*.js' ],
				tasks: [ 'concat', 'jshint', 'uglify' ],
				options: {
					debounceDelay: 200
				}
			},

			css: {
				files: [ 'resources/sass/*.scss', 'resources/sass/*/*.scss' ],
				tasks: [ 'sass', 'cssmin' ]
			},

			livereload: {
				options: { livereload: true },
				files: [ 'resources/css/*.css' ]
			}

		}

	} );

	// Default task.
	grunt.registerTask( 'default', [ 'jshint', 'concat', 'watch', 'uglify', 'sass', 'cssmin' ] );

	grunt.util.linefeed = '\n';
};
