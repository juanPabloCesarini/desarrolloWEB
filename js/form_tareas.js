window.addEventListener('load', function () {

    document.getElementById('fecha').type = 'text';

    document.getElementById('fecha').addEventListener('blur', function () {

        document.getElementById('fecha').type = 'text';

    });

    document.getElementById('fecha').addEventListener('focus', function () {

        document.getElementById('fecha').type = 'date';

    });

    document.getElementById('tiempo').type = 'text';

    document.getElementById('tiempo').addEventListener('blur', function () {

        document.getElementById('tiempo').type = 'text';

    });

    document.getElementById('tiempo').addEventListener('focus', function () {

        document.getElementById('tiempo').type = 'number';

    });

});