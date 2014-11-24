module.exports = function( gulp ){

    /**
     * Return full path on the file system.
     * @param _path
     * @returns {string}
     */
    function _packagePath(_path){
        return __dirname + '/' + _path;
    }

    var utils   = require('gulp-util'),
        concat  = require('gulp-concat'),
        uglify  = require('gulp-uglify'),
        sass    = require('gulp-ruby-sass'),
        jshint  = require('gulp-jshint');


    var sourcePaths = {
        css: {
            core: _packagePath('css/src/core.scss'),
            app: _packagePath('css/src/app.scss')
        },
        js: {
            core: [
                _packagePath('bower_components/fastclick/lib/fastclick.js'),
                _packagePath('js/3rd_party/*.js')
            ],
            app: [
                _packagePath('js/src/**/*.js')
            ]
        }
    };


    /**
     * Sass compilation
     * @param _style
     * @returns {*|pipe|pipe}
     */
    function runSass( files, _style ){
        return gulp.src(files)
            .pipe(sass({compass:true, style:(_style || 'nested')}))
            .on('error', function( err ){
                utils.log(utils.colors.red(err.toString()));
                this.emit('end');
            })
            .pipe(gulp.dest(_packagePath('css/')));
    }


    /**
     * Javascript builds (concat, optionally minify)
     * @param files
     * @param fileName
     * @param minify
     * @returns {*|pipe|pipe}
     */
    function runJs( files, fileName, minify ){
        return gulp.src(files)
            .pipe(concat(fileName))
            .pipe(minify === true ? uglify() : utils.noop())
            .pipe(gulp.dest(_packagePath('js/')));
    }


    /**
     * JS-Linter using JSHint library
     * @param files
     * @returns {*|pipe|pipe}
     */
    function runJsHint( files ){
        return gulp.src(files)
            .pipe(jshint(_packagePath('.jshintrc')))
            .pipe(jshint.reporter('jshint-stylish'));
    }


    /**
     * Individual tasks
     */
    gulp.task('sass:core:dev', function(){ return runSass(sourcePaths.css.core); });
    gulp.task('sass:core:prod', function(){ return runSass(sourcePaths.css.core, 'compressed'); });
    gulp.task('sass:app:dev', function(){ return runSass(sourcePaths.css.app); });
    gulp.task('sass:app:prod', function(){ return runSass(sourcePaths.css.app, 'compressed'); });
    gulp.task('jshint', function(){ return runJsHint(sourcePaths.js.app); });
    gulp.task('js:core:dev', function(){ return runJs(sourcePaths.js.core, 'core.js') });
    gulp.task('js:core:prod', function(){ return runJs(sourcePaths.js.core, 'core.js', true) });
    gulp.task('js:app:dev', ['jshint'], function(){ return runJs(sourcePaths.js.app, 'app.js') });
    gulp.task('js:app:prod', ['jshint'], function(){ return runJs(sourcePaths.js.app, 'app.js', true) });

    // Block build tasks
    function flexrySassMasthead( _file, _style ){
        return gulp.src(_file)
            .pipe(sass({compass:true, style:(_style || 'nested')}))
            .on('error', function( err ){
                utils.log(utils.colors.red(err.toString()));
                this.emit('end');
            })
            .pipe(gulp.dest(_packagePath('blocks/flexry_gallery/templates/masthead/')));
    }

    function flexryJsMasthead( files, fileName, minify ){
        return gulp.src(files)
            .pipe(concat(fileName))
            .pipe(minify === true ? uglify() : utils.noop())
            .pipe(gulp.dest(_packagePath('blocks/flexry_gallery/templates/masthead/')));
    }

    gulp.task('flexry:sass:masthead:dev', function(){
        return flexrySassMasthead(_packagePath('blocks/flexry_gallery/templates/masthead/src/view.scss'));
    });

    gulp.task('flexry:sass:masthead:prod', function(){
        return flexrySassMasthead(_packagePath('blocks/flexry_gallery/templates/masthead/src/view.scss'), 'compressed');
    });

    gulp.task('flexry:js:masthead:dev', function(){
        return flexryJsMasthead(_packagePath('blocks/flexry_gallery/templates/masthead/src/view.js'), 'view.js');
    });

    gulp.task('flexry:js:masthead:prod', function(){
        return flexryJsMasthead(_packagePath('blocks/flexry_gallery/templates/masthead/src/view.js'), 'view.js', true);
    });

    /**
     * Grouped tasks (by environment target)
     */
    gulp.task('build:dev', ['sass:core:dev', 'sass:app:dev', 'js:core:dev', 'js:app:dev', 'flexry:sass:masthead:dev', 'flexry:js:masthead:dev'], function(){
        utils.log(utils.colors.bgGreen('Dev build OK'));
    });

    gulp.task('build:prod', ['sass:core:prod', 'sass:app:prod', 'js:core:prod', 'js:app:prod', 'flexry:sass:masthead:prod', 'flexry:js:masthead:prod'], function(){
        utils.log(utils.colors.bgGreen('Prod build OK'));
    });


    /**
     * Watch tasks
     */
    gulp.task('watch', function(){
        gulp.watch(_packagePath('css/src/**/*.scss'), {interval:1000}, ['sass:app:dev']);
        gulp.watch(_packagePath('js/src/**/*.js'), {interval:1000}, ['js:app:dev']);
        gulp.watch(_packagePath('blocks/flexry_gallery/templates/masthead/src/*.scss'), {interval:1000}, ['flexry:sass:masthead:dev']);
        gulp.watch(_packagePath('blocks/flexry_gallery/templates/masthead/src/*.js'), {interval:1000}, ['flexry:js:masthead:dev']);
    });

};