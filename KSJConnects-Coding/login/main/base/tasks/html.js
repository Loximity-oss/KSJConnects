import gulp from 'gulp';
import config from '../config';
import hb from 'gulp-hb';
import frontMatter from 'gulp-front-matter';
import plumber from 'gulp-plumber';
import browser from './browser';
import notifier from 'node-notifier';
import htmlhint from 'gulp-htmlhint';

// HTML
// ------------------
// lints html using htmlhint
gulp.task('lint:html', () => {
  return gulp
    .src(`${config.html.build}/**/*.html`, {
      since: gulp.lastRun('lint:html'),
    })
    .pipe(htmlhint('.htmlhintrc'))
    .pipe(htmlhint.reporter());
});

// build the site
gulp.task('make:html', (done) => {
  let hbStream = hb({
      // debug: true
    })
    // Partials
    .partials(config.html.partials + '/**/*.hbs')
    //.partials(config.html.layouts + '/**/*.hbs')

    // Data
    .data(config.html.data + '/**/*.{js,json}')
    .data(config.html.metadata)

    // Helpers
    .helpers(require('handlebars-layouts'))
    //.helpers(require('handlebars-helpers')(['comparison','markdown']))
    .helpers(config.html.helpers + '/*.js');

  return gulp.src([config.html.pages + '/**/*.html', config.html.pages + '/**/*.tpl'])
    .pipe(plumber())
    .pipe(frontMatter({
      property: 'data.frontMatter'
    }))
    .pipe(hbStream)
    .pipe(gulp.dest(config.html.build));
});

gulp.task(
  'html',
  gulp.series('make:html', 'lint:html', (done) => {
    if (config.enable.notify) {
      notifier.notify({
        title: config.notify.title,
        message: 'Html task complete',
      });
    }

    done();
  })
);
