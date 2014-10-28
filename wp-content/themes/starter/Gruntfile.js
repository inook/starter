module.exports = function(grunt) {

  // Configuration de Grunt
  grunt.initConfig({
  
  // WATCH
  	watch: {
	    scripts: {
	        files: ['js/*.js', 'css/*.scss'],
	        tasks: ['concat', 'uglify', 'sass', 'cssmin'],
	        options: {
	            spawn: false,
	        },
	    } 
	},
  
  // CONCAT
  	concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['js/jquery-1.10.1.min.js', 'js/jquery.history.js', 'js/script.js'],
        dest: 'src/script.js'
      }
    },
  
  // UGLIFY
    uglify: {
	    build: {
	      src: 'src/script.js',
	      dest: 'src/script.min.js'
	    }
	},

  // SASS
  sass: {
    dist: {
      files: {
        'css/style.css': 'css/style.scss'
      }
    }
  },

  // CSS MIN
  cssmin: {
    combine: {
      files: {
        'src/style.min.css': ['css/normalize.css', 'css/style.css']
      }
    }
  }
  })

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Définition des tâches Grunt
  grunt.registerTask('default', ['concat', 'uglify', 'sass','cssmin', 'watch']) 

}