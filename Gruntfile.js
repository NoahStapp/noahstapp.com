module.exports = function(grunt) {

require('load-grunt-tasks')(grunt);

grunt.initConfig({

less: {
    main: {
        files: {
            'css/main.css': 'less/__main.less',
        },
    },
},

watch: {
    less: {
        files: 'less/**/*.less',
    tasks: ['less',],
    },
},

});

grunt.registerTask('default', ['less']);
};