//diretorios a serem concatenados e minificados
var scripts = [
	'js/jquery.js',
	'js/owl.carousel.js',
	'js/jquery.scrollTo.js',
	'js/jquery.mask.js',
	'js/bootstrap-datepicker.js',
	'js/bootstrap-datepicker.pt-BR.min',
	'js/jquery.fancybox.min.js',
	'js/scrollreveal.js',
	'js/main.js'
];
var styles = ['css/**.css'];

//inicia task
var gulp = require('gulp');
var jshint = require('gulp-jshint');
var clean = require('gulp-clean');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');

gulp.task('clean',function(){
	return gulp.src(['assets'])
	.pipe(clean());
});

gulp.task('jshint',function(){
	return gulp.src(scripts)
	.pipe(jshint())
	//.pipe(jshint.reporter('default'));
});

gulp.task('uglify',['clean'],function(){ //pegar todos os js, minificar em um só arquivo
	return gulp.src(scripts)
	.pipe(concat('scripts.min.js')) //concatena
	.pipe(uglify()) //minifica e troca o valor das variaveis
	.pipe(gulp.dest('assets')); //leva os arquivos para outra pasta 
});

gulp.task('cssmin',['clean'], function(){
	return gulp.src(styles)
	.pipe(cleanCSS())
	.pipe(concat('style.min.css'))
	.pipe(gulp.dest('assets')); //leva os arquivos para outra pasta 
});

gulp.task('default', ['jshint', 'uglify', 'cssmin']);
