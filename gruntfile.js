module.exports = function(grunt){
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-compass');
grunt.loadNpmTasks('grunt-browser-sync');

grunt.initConfig({
 	uglify:{
 		my_target: {
 			files: {
 				'js/script.js': ['components/js/*.js']

 			}//files
 		}//target
 	},//uglify
 	compass:{
 		dev:{
 			options: {
 				config:'config.rb'
 			}//options
 		}//dev
 	}, //compass
	watch: {
		//options:{ livereload: true },
		scripts: {
			files: ['components/js/*.js'],
			tasks: ['uglify']

		},
		sass: {
			files:['components/sass/*.scss'],
			tasks: ['compass:dev']
		},//sass
		php: {
			files:['**/*.php'],
		}, //watch php files
    browserSync: {
      dev: {
        bsFiles: {
          src : [
            '*.css',
            '**/*.php',
            '**/*.html',
            '**/*.js'
          ]
        },//browsersync watch files
        options: {
          watchTask: true,
          server: './capstone'
        }//options
      }//dev
    }//browsersync
		//scripts
		// html: {
		// 	files: ['*.html']
		// } //for auto refresh browser, need script on html as well.
	}//watch


 })//initConfig
 grunt.registerTask('default','watch') //run gunt and wait for changes

}//exports