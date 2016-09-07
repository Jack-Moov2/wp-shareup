module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            sass: {
                files: ['styles/*.scss', 'styles/*/*.scss'],
                tasks: ['sass'],
            },
            php: {
                files: ['*.php', 'includes/{,*/}*.php'],
            },
            options: {
                livereload: true,
                spawn: false
            }
        },

        sass: {
            dev: {
                options: {                       // Target options
                    style: 'expanded'
                },
                files: {                         // Dictionary of files
                    'style.css': 'styles/main.scss',       // 'destination': 'source'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);

}
