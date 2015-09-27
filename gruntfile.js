module.exports = function(grunt) {

    /**
     * Окружение
     */

    var autoprefixer = require('autoprefixer-core');

    /**
     * Конфигурация проекта
     */
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		sprite: {
			all: {
				src: 'local/templates/main/img/sprite/*.png',
				dest: 'local/templates/main/img/spritesheet.png',
				destCss: 'local/templates/main/css/sprites.styl',
				cssFormat: 'stylus',
				padding: 2,
                imgPath: 'img/spritesheet.png'
			}
		},
        stylus: {
            compile: {
                options: {
                    compress: false,
                    urlfunc: 'data-uri'
                },
                files: {
                    'local/templates/main/template_styles.css': 'local/templates/main/style.styl'
                }
            }
        },
        watch: {
            sprite: {
                files: ['<%= sprite.all.src %>'],
                tasks: ['sprite'],
                options: {
                    debounceDelay: 500
                }
            },
            stylus: {
                files: [
                    'local/templates/main/css/**/*.styl',
                    'local/templates/main/*.styl'
                ],
                tasks: ['stylus', 'postcss'],
                options: {
                    livereload: true
                }
            }
        },
        postcss: {
            options: {
                processors: [
                    require('autoprefixer-core')(),
                ]
            },
            dist: {
                src: 'local/templates/main/template_styles.css'
            }
        }
    });

    /**
     * Плагины
     */
    // Плагин для работы со спрайтами
    grunt.loadNpmTasks('grunt-spritesmith');

    // Сборщик для Stylus
    grunt.loadNpmTasks('grunt-contrib-stylus');

    // Live reload
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Postcss
    grunt.loadNpmTasks('grunt-postcss');

    /**
     * Задачи
     */
    grunt.registerTask('default', 'Build sprite and stylus. Watch changes in images and *.styl files', function () {
        // Этот пакет задач не отваливается при предупреждениях (критично для gaze)
        grunt.option('force', true);
        grunt.task.run(['sprite', 'stylus', 'postcss', 'watch']);
    });
};
